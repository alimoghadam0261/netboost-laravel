<?php

namespace App\Livewire\Admin\Hashtagh;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $parent_id;
    public $categories;


    public function mount()
    {
        // دریافت دسته‌بندی‌ها برای نمایش در لیست انتخاب والد
        $this->categories = Category::whereNull('parent_id')->with('children')->get();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        // ذخیره دسته‌بندی
        Category::create([
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
        $category = Category::find($id);

        if ($category) {
            $category->delete();

            // بروزرسانی لیست دسته‌بندی‌ها بعد از حذف
            $this->mount();

            session()->flash('success', 'دسته‌بندی با موفقیت حذف شد');
        }
    }

    public function render()
    {
        return view('livewire.admin.hashtagh.create')->layout('components.layouts.admin');
    }
}
