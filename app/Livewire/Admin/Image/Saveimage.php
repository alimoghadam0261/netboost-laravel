<?php

namespace App\Livewire\Admin\Image;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Categoryimage;
use App\Models\Image;

class Saveimage extends Component
{
    use WithFileUploads;

    public $categories = [];
    public $subcategories = [];
    public $selectedCategory = null;
    public $selectedSubcategory = null;
    public $uploadedImages = [];
    public $images = [];

    public function mount()
    {
        $this->categories = Categoryimage::whereNull('parent_id')->get();
        $this->loadImages();
    }

    public function updatedSelectedCategory($value)
    {
        $this->subcategories = Categoryimage::where('parent_id', $value)->get();
        $this->selectedSubcategory = null;
        $this->loadImages();
    }

    public function updatedSelectedSubcategory($value)
    {
        $this->loadImages();
    }

    public function loadImages()
    {
        $this->images = $this->selectedSubcategory
            ? Image::where('category_id', $this->selectedSubcategory)->get()
            : ($this->selectedCategory
                ? Image::where('category_id', $this->selectedCategory)->get()
                : []);
    }

    public function save()
    {
        $this->validate([
            'uploadedImages.*' => 'required|image|max:2048',
            'selectedSubcategory' => 'required',
        ]);

        foreach ($this->uploadedImages as $file) {
            $path = $file->store('adminimage', 'public');

            Image::create([
                'path' => $path,
                'category_id' => $this->selectedSubcategory,
            ]);
        }

        $this->reset('uploadedImages');
        $this->loadImages();

        session()->flash('success', 'تصاویر با موفقیت ذخیره شدند.');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);

        \Storage::disk('public')->delete($image->path);
        $image->delete();

        $this->loadImages();
    }

    public function render()
    {
        $imgg = Image::all();
        return view('livewire.admin.image.saveimage',compact('imgg'))->layout('components.layouts.admin');
    }
}
