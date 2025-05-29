<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Login extends Component
{

    public $phone;
    public $entered_code;
    public $verification_code;
    public $is_code_sent = false;
    public $redirect;

    public function mount(Request $request)
    {
        // مقدار redirect را از پارامترهای GET دریافت کن
        $this->redirect = $request->query('redirect', route('donate'));
    }



    protected $rules = [
        'phone' => 'required|regex:/^09[0-9]{9}$/',
        'entered_code' => 'required|size:6',
    ];

    public function sendVerificationCode()
    {
        $this->validate(['phone' => 'required|regex:/^09[0-9]{9}$/']);

        // تولید کد تایید تصادفی
        $this->verification_code = 123456;

        // ذخیره کد تایید در کاربر
        $user = User::where('phone', $this->phone)->first();
        if (!$user) {
            $user = User::create([
                'phone' => $this->phone,
                'verification_code' => $this->verification_code,
            ]);
        } else {
            $user->update(['verification_code' => $this->verification_code]);
        }

        // ارسال کد تایید (در اینجا چاپ به کنسول می‌شود)
        session()->flash('success', "کد تایید شما: {$this->verification_code}");

        $this->is_code_sent = true;
    }


    public function login()
    {
        $this->validate();

        // بررسی تطابق کد تایید وارد شده
        $user = User::where('phone', $this->phone)->where('verification_code', $this->entered_code)->first();

        if (!$user) {
            session()->flash('error', 'کد تایید وارد شده صحیح نیست.');
            return;
        }

        // حذف کد تایید پس از ورود موفق
        $user->update(['verification_code' => null]);

        // ورود کاربر به سیستم
        Auth::login($user);



        // هدایت به صفحه‌ی مناسب بر اساس نقش
        if ($user->isAdmin()) {
            return redirect()->route('dashboard');
        }

        return redirect()->to($this->redirect);
    }




    public function render()
    {
        return view('livewire.auth.login')->title('ورود|login');
    }
}
