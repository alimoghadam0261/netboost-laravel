<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Tempaltestory;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class Templateinsta extends Component
{
    use WithPagination;
    public string $title = 'تم کاور|template';
    public string $description="تم و کاورهای رایگان برای استفاده در شبکه های اجتماعی|Free themes and covers for use on social networks";

    public $selectedImage = null;
    public $category = '';


    public function selectImage($image)
    {
        $this->selectedImage = $image;
    }

    public function closeModal()
    {
        $this->selectedImage = null;
    }

    public function download($filePath)
    {
        $path = storage_path('app/public/' . $filePath);

        if (file_exists($path)) {
            return response()->download($path);
        }

        abort(404);
    }

    public function render()
    {
        $page = request()->query('page', 1);

        // ایجاد کلید کش همراه با category و شماره صفحه
        $imagesCacheKey = 'templateinsta_images_' . $this->category . '_page_' . $page;

        $images = Cache::remember($imagesCacheKey, now()->addMinutes(30), function () {
            $query = Tempaltestory::query();

            if (!empty($this->category)) {
                $query->where('category', $this->category);
            }

            return $query->latest()->paginate(32);
        });

        $count = Tempaltestory::when($this->category, fn($q) => $q->where('category', $this->category))->count();

        return view('livewire.home.templateinsta', compact('images', 'count'))
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);
    }

}
