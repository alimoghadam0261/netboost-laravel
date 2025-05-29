<?php

namespace App\Livewire\Admin\Challeng;

use Livewire\Component;
use App\Models\Challeng as Challengt;
use App\Models\Challengcat;

class Challeng extends Component
{
    public $content;
    public $title;
    public $challengcat_id;
    public $challengs;

    protected $rules = [
        'content' => 'required|string',
        'title' => 'required|string',
        'challengcat_id' => 'required|exists:challengcats,id',
    ];

    public function mount()
    {
        // بارگذاری چالش‌ها همراه با دسته‌بندی‌ها
        $this->challengs = Challengt::with('category')->get();
    }

    public function store()
    {
        $this->validate();


        Challengt::create([
            'content' => $this->content,
            'challengcat_id' => $this->challengcat_id,
            'title' => $this->title,
        ]);


        session()->flash('message', 'چالش با موفقیت ذخیره شد.');


        $this->reset();


        $this->mount();
    }

    public function deleteChalleng($challengId)
    {
        // حذف چالش با شناسه
        $challeng = Challengt::find($challengId);
        if ($challeng) {
            $challeng->delete(); // حذف چالش
            session()->flash('message', 'چالش با موفقیت حذف شد.');
        } else {
            session()->flash('message', 'چالش پیدا نشد.');
        }

        // بارگذاری دوباره چالش‌ها
        $this->mount();
    }

    public function render()
    {
        // دریافت تمام دسته‌بندی‌ها
        $categories = Challengcat::all();

        // نمایش ویو
        return view('livewire.admin.challeng.challeng', compact('categories'))->layout('components.layouts.admin');
    }
}
