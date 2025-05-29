<?php

namespace App\Livewire\Home;

use App\Models\contacts;
use Livewire\Component;

class About extends Component
{
    public $email='';
    public $phone='';
    public $content='';


    public string $title = 'درباره ما |About';
    public string $description = 'اطلاعاتی درباره تیم ما، اهداف و سابقه‌ی فعالیت‌ ما را اینجا بخوانید.Read information about our team, goals, and history here.';


    protected $rules = [
        'content' => 'required|string',
        'email' => 'required|email',
        'phone' => ['required', 'regex:/^09\d{9}$/'],

    ];

    public function save()
    {
        $this->validate();
        contacts::create([
            'email'=>$this->email,
            'phone'=>$this->phone,
            'content'=>$this->content,
        ]);
        session()->flash('success', 'پیام با موفقیت ذخیره شد.');

        $this->reset();
    }


    public function render()
    {
        return view('livewire.home.about')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);

    }
}
