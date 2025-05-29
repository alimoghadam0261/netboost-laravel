<?php


namespace App\Livewire\Home\Music;

use App\Models\Sound;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class Musicterend extends Component
{
    use WithPagination;
    public string $title = 'موزیک ترند|trend music';
    public string $description="موزیک ترند رایگان برای رشد شبکه  اجتماعی|Trending music for social media growth";


    public function render()
    {
        // دریافت شماره صفحه از درخواست
        $page = request()->query('page', 1); // در صورت نبود شماره صفحه، پیش‌فرض 1 استفاده می‌شود.

        // کلید کش شامل دسته‌بندی و شماره صفحه
        $soundsCacheKey = 'sounds_music_page_' . $page;

        // تلاش برای گرفتن داده‌ها از کش
        $sounds = Cache::remember($soundsCacheKey, now()->addMinutes(30), function () {
            return Sound::where('category', 'music')->paginate(30);
        });

        return view('livewire.home.music.musicterend', compact('sounds'))
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
