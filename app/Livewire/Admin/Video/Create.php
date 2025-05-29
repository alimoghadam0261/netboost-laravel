<?php

namespace App\Livewire\Admin\Video;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Video;
use Livewire\WithPagination;

class Create extends Component
{

    use WithPagination;
    use WithFileUploads;

    public $title;
    public $video;


    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'video' => 'required|mimes:mp4,mov,avi|max:51200', // 50MB
        ]);

        $filePath = $this->video->store('videos', 'public');
        if (file_exists($this->video->getRealPath())) {
            unlink($this->video->getRealPath());
        }



        Video::create([
            'title' => $this->title,
            'video' => $filePath,
        ]);

        // ریست کردن فرم بعد از ذخیره‌سازی
        $this->reset(['title', 'video']);

        session()->flash('success', 'ویدیو با موفقیت آپلود شد.');
    }

    public function delete($id)
    {
        $video = Video::findOrFail($id);
        \Storage::disk('public')->delete($video->file_path);
        $video->delete();

        session()->flash('success', 'ویدیو با موفقیت حذف شد.');
    }



    public function render()
    {
        $videos = Video::latest()->paginate(10);
        return view('livewire.admin.video.create', compact('videos'))->layout('components.layouts.admin');
    }
}
