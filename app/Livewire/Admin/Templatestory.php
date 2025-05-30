<?php

namespace App\Livewire\Admin;

use App\Models\Tempaltestory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Templatestory extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $title;
    public $img;
    public $category;


    public function save()
    {
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'img' => 'required|file|mimes:jpeg,png,jpg,gif|max:10240',

        ]);

        $filePath = $this->img->store('templatestory', 'public');
        if (file_exists($this->img->getRealPath())) {
            unlink($this->img->getRealPath());
        }

        Tempaltestory::create([
            'title' => $this->title,
            'file_path' => $filePath,
            'category'=>$this->category,
        ]);

        // ریست کردن فرم بعد از ذخیره‌سازی
        $this->reset(['title', 'img','category']);

        session()->flash('success', 'عکس با موفقیت آپلود شد.');
    }


    public function delete($id)
    {
        $image = Tempaltestory::findOrFail($id);

        $path = public_path('storage/' . $image->file_path);
        if (file_exists($path)) {
            unlink($path);
        }

        $image->delete();

        session()->flash('success', 'عکس با موفقیت حذف شد.');
    }







    public function render()
    {
        $images = Tempaltestory::latest()->paginate(20);
        $count = Tempaltestory::count();
        return view('livewire.admin.templatestory',compact('images','count'))->layout('components.layouts.admin');
    }
}
