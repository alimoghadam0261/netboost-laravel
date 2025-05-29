<?php

namespace App\Livewire\Home;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class Hook extends Component
{
    use WithPagination;
    public string $title = 'ویدیو قلاب|hook';
    public string $description = 'لیست کامل از ویدوهای قلاب با دانلود رایگان|Complete list of hookup videos with free download';

    public function render()
    {
        // استفاده از متد getPage برای دریافت شماره صفحه
        $page = $this->getPage();

        // کلید کش برای ویدیوها با استفاده از شماره صفحه
        $videosCacheKey = 'videos_page_' . $page;
        // کلید کش برای تعداد ویدیوها
        $countCacheKey = 'videos_count';

        // تلاش برای گرفتن ویدیوها از کش
        $videos = Cache::remember($videosCacheKey, now()->addMinutes(30), function () {
            return Video::paginate(24);
        });

        // تلاش برای گرفتن تعداد ویدیوها از کش
        $count = Cache::remember($countCacheKey, now()->addMinutes(30), function () {
            return Video::all()->count();
        });

        return view('livewire.home.hook', compact('videos', 'count'))->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
