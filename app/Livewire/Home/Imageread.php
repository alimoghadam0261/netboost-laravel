<?php

namespace App\Livewire\Home;

use Intervention\Image\Laravel\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;

class Imageread extends Component
{
    use WithFileUploads;

    public $photo;
    public $width = 300;
    public $height = 300;
    public $quality = 80;

    public function updatedPhoto()
    {
        // اعتبارسنجی فایل
        $this->validate([
            'photo' => 'image|max:1024', // حداکثر حجم 1 مگابایت
        ]);

        // ایجاد شیء ImageManager با تنظیمات درایور
        $manager = new ImageManager(['driver' => 'gd']); // 'gd' یا 'imagick'
        $image = $manager->make($this->photo->getRealPath())
            ->resize($this->width, $this->height) // ریسایز
            ->encode('jpg', $this->quality); // تنظیم کیفیت و فرمت

        // مسیر ذخیره‌سازی
        $path = 'uploads/' . uniqid() . '.jpg';
        $image->save(public_path($path));

        // نمایش پیام موفقیت
        session()->flash('success', 'عکس با موفقیت ذخیره شد: ' . $path);
    }

    public function render()
    {
        return view('livewire.home.imageread');
    }
}
