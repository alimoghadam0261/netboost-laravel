<?php

namespace App\Livewire\Admin\Hashtagh;

use App\Models\Category;
use App\Models\Hashtag;
use Livewire\Component;

class Index extends Component
{
    public $categories;
    public $subcategories = [];
    public $selectedCategory = null;
    public $selectedSubcategory = null;
    public $tag;


    public function mount()
    {

        $this->categories = Category::whereNull('parent_id')->get();
    }
    public function updatedSelectedCategory($value)
    {
        // وقتی دسته اصلی انتخاب شد، زیرمجموعه‌ها رو لود کن
        $this->subcategories = Category::where('parent_id', $value)->get();
        $this->selectedSubcategory = null;
    }


    public function save()
    {
        $this->validate([
            'selectedCategory' => 'required|exists:categories,id',
            'selectedSubcategory' => 'required|exists:categories,id',
            'tag' => 'required|string|max:255',
        ]);

        Hashtag::create([
            'category_id' => $this->selectedCategory,
            'subcategory_id' => $this->selectedSubcategory,
            'tag' => $this->tag,
        ]);

        // پاک کردن فرم بعد از ذخیره موفق
        $this->reset('tag', 'selectedCategory', 'selectedSubcategory');
        session()->flash('success', 'هشتگ با موفقیت ذخیره شد!');
    }


    public function render()
    {
        return view('livewire.admin.hashtagh.index')->layout('components.layouts.admin');
    }
}
