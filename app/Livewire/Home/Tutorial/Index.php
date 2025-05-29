<?php

namespace App\Livewire\Home\Tutorial;

use App\Models\Tutorials;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class Index extends Component
{
    use WithPagination;

    public string $title = 'آموزش|tutorial';
    public string $description="آموزش های متن صوتی تصویری رایگان برای شبکه رشد اجتماعی|Free audio-visual text tutorials for social growth networks";

    public $category = '';

    public function updatedCategory()
    {
        $this->resetPage(); // ریست کردن صفحه هنگام تغییر فیلتر
    }

    public function render()
    {
        // دریافت شماره صفحه از متد getPage()
        $page = $this->getPage();

        // کلید کش شامل دسته‌بندی و شماره صفحه
        $cacheKey = 'tutorials_' . $this->category . '_page_' . $page;

        // تلاش برای گرفتن داده‌ها از کش
        $tutorial = Cache::remember($cacheKey, now()->addMinutes(30), function () {
            $query = Tutorials::select('title', 'pic', 'id', 'category');

            if (!empty($this->category)) {
                $query->where('category', $this->category);
            }

            return $query->orderBy('id', 'desc')->paginate(32);
        });

        return view('livewire.home.tutorial.index', compact('tutorial'))
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
