<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Categoryimage;
use App\Models\Image;

class PixabayGallery extends Component
{
    use WithPagination;

    public $categories = [];
    public $subcategories = [];
    public $selectedCategory = null;
    public $selectedSubcategory = null;

    public function mount()
    {
        $this->categories = Categoryimage::whereNull('parent_id')->get();
    }

    public function updatedSelectedCategory($value)
    {
        $this->subcategories = Categoryimage::where('parent_id', $value)->get();
        $this->selectedSubcategory = null;
        $this->resetPage(); // ریست کردن پیجینیشن هنگام تغییر دسته‌بندی
    }

    public function updatedSelectedSubcategory($value)
    {
        $this->resetPage(); // ریست کردن پیجینیشن هنگام تغییر زیرمجموعه
    }

    public function getImagesProperty()
    {
        return $this->selectedSubcategory
            ? Image::where('category_id', $this->selectedSubcategory)->paginate(30)
            : ($this->selectedCategory
                ? Image::where('category_id', $this->selectedCategory)->paginate(30)
                : collect());
    }

    public function render()
    {
        return view('livewire.home.pixabay-gallery', [
            'images' => $this->images
        ]);
    }
}
