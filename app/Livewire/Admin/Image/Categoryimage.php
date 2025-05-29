<?php

namespace App\Livewire\Admin\Image;

use Livewire\Component;

class Categoryimage extends Component
{
    public $name;
    public $categories;
    public $parent_id;

    public function mount()
    {
        // دریافت دسته‌بندی‌ها برای نمایش در لیست انتخاب والد
        $this->categories = \App\Models\Categoryimage::whereNull('parent_id')->with('children')->get();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        // ذخیره دسته‌بندی
        \App\Models\Categoryimage::create([
            'name' => $this->name,
            'parent_id' => $this->parent_id
        ]);

        // پاک کردن فیلدها
        $this->reset('name', 'parent_id');

        // بروزرسانی لیست دسته‌بندی‌ها
        $this->mount();

        session()->flash('success', 'دسته‌بندی با موفقیت اضافه شد');
    }

    public function deleteCategory($id)
    {
        $cat =  \App\Models\Categoryimage::findOrFail($id);
        $cat->delete();

        session()->flash('success', 'ویدیو با موفقیت حذف شد.');
    }





    public function render()
    {
        return view('livewire.admin.image.categoryimage')->layout('components.layouts.admin');
    }
}
