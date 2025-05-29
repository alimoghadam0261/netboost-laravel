<?php

namespace App\Livewire\Home\Tutorial;

use App\Models\Tutorials;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Single extends Component
{
    public string $title = 'توضیحات|content';
    public string $description="توضیحات کامل آموزش همراه با ویدیو و عکس و صوت و متن به رایگان|Complete instructions with video, photos, audio, and text for free";


public $tutorials;
    public $relatedTutorials;

    public function mount($id)
    {
        $this->tutorials = Tutorials::find($id);

        // گرفتن 5 آموزش آخر از همان دسته‌بندی
        $this->relatedTutorials = Tutorials::where('category', $this->tutorials->category)
            ->where('id', '!=', $this->tutorials->id)  // آموزش فعلی را از نتایج حذف می‌کنیم
            ->latest()
            ->take(5)
            ->get();
    }


    public function render()
    {
        return view('livewire.home.tutorial.single')
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);


    }
}
