<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Tutorials;
use Livewire\WithPagination;

class Tutorialadmin extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $title;
    public $pic;
    public $video;
    public $category;
    public $voice;
    public $content ;

    public function updateContent($value)
    {
        $this->content = $value;
    }


    public function save()
    {

        $this->validate([
            'title' => 'required|string|max:255',
            'pic' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',

            'category' => 'required|string',
            'content' => 'required',
        ]);

        // ذخیره تصویر در مسیر public/storage/tutorials
        $picPath = $this->pic->store('tutorials', 'public');

        // ذخیره صدا در مسیر public/storage/tutorials (در صورت آپلود)
        $voicePath = $this->voice ? $this->voice->store('tutorials', 'public') : null;
        // ذخیره در دیتابیس
        Tutorials::create([
            'title' => $this->title,
            'pic' => $picPath,
            'category' => $this->category,
            'voice' => $voicePath, // مقدار null پذیرفته می‌شود
            'content' => $this->content,
            'video' => $this->video,
        ]);

        // پیام موفقیت
        session()->flash('message', 'آموزش با موفقیت ذخیره شد.');

        // پاک کردن مقادیر فرم
        $this->reset();
    }

    public function delete($id)
    {
        $tutorial = Tutorials::find($id);

        if (!$tutorial) {
            session()->flash('error', 'آموزش یافت نشد.');
            return;
        }

        // حذف تصویر اگر موجود است
        if ($tutorial->pic && Storage::disk('public')->exists($tutorial->pic)) {
            Storage::disk('public')->delete($tutorial->pic);
        }

        // حذف صدا اگر موجود است
        if ($tutorial->voice && Storage::disk('public')->exists($tutorial->voice)) {
            Storage::disk('public')->delete($tutorial->voice);
        }

        // حذف از دیتابیس
        $tutorial->delete();

        session()->flash('success', 'آموزش با موفقیت حذف شد.');
    }




    public function render()
    {
        $tutorialss = Tutorials::select('title', 'pic','id')->paginate(30);
        $count = Tutorials::count();

        return view('livewire.admin.tutorialadmin',compact('tutorialss','count'))->layout('components.layouts.admin');
    }
}
