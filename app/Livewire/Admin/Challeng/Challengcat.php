<?php

namespace App\Livewire\Admin\Challeng;

use Livewire\Component;

use App\Models\Challengcat as challengcats;
class Challengcat extends Component
{
    public $name;
    public $categories;


    public function mount()
    {
        // دریافت دسته‌بندی‌ها برای نمایش در لیست انتخاب والد
        $this->categories = \App\Models\Challengcat::all();
    }


    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        // ذخیره دسته‌بندی
        \App\Models\Challengcat::create([
            'name' => $this->name,
        ]);

        // پاک کردن فیلدها
        $this->reset('name');

        // بروزرسانی لیست دسته‌بندی‌ها
        $this->mount();

        session()->flash('success', 'دسته‌بندی با موفقیت اضافه شد');
    }


    public function deleteCategory($id)
    {
        $cat =  challengcats::findOrFail($id);
        $cat->delete();

        session()->flash('success', 'دسته بندی با موفقیت حذف شد.');
    }











    public function render()
    {
        return view('livewire.admin.challeng.challengcat')->layout('components.layouts.admin');
    }
}
