<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Category;
use App\Models\Hashtag as Hashtags;

class Hashtag extends Component
{
    public string $title = 'هشتگ|hashtag';
    public string $description = 'لیست کامل هشتگ های به روز به زبان فارسی و انگلیسی|Complete list of up-to-date hashtags in Persian and English';

    public $categories;
    public $subcategories = [];
    public $selectedCategory = null;
    public $selectedSubcategory = null;
    public $keyword; // در اینجا می‌توانید از آن استفاده کنید، اگر نیاز به ورودی کلمه دارید
    public $hashtags = [];

    public function mount()
    {
        // فقط دسته‌های اصلی (بدون والد) را بارگذاری می‌کنیم
        $this->categories = Category::whereNull('parent_id')->get();
    }

    public function updatedSelectedCategory($value)
    {
        // بارگذاری زیرمجموعه‌ها بر اساس دسته‌بندی انتخاب شده
        $this->subcategories = Category::where('parent_id', $value)->get();
        $this->selectedSubcategory = null;
        // پاکسازی هشتگ‌ها در صورت تغییر دسته‌بندی
        $this->hashtags = [];
    }

    public function updatedSelectedSubcategory($value)
    {
        // می‌توانیم به صورت خودکار هشتگ‌ها را بارگذاری کنیم
        // یا با دکمه show به صورت دستی فراخوانی کنیم.
        // در اینجا ما فقط با دکمه show هشتگ‌ها را بارگذاری می‌کنیم.
    }

    public function loadHashtags()
    {
        if ($this->selectedCategory && $this->selectedSubcategory) {
            // دریافت هشتگ‌های ذخیره شده بر اساس دسته‌بندی و زیرمجموعه انتخاب شده
            $this->hashtags = Hashtags::where('category_id', $this->selectedCategory)
                ->where('subcategory_id', $this->selectedSubcategory)
                ->get();
        } else {
            $this->hashtags = [];
        }
    }

    public function render()
    {
        return view('livewire.home.hashtag')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
