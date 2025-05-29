<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class Proxy extends Component
{
    public string $title = 'پروکسی تلگرام|proxy';
    public string $description="پروکسی های رایگان و به روز برای استفاده در تلگرام|Free and up-to-date proxies for use on Telegram";

    public $proxies = [];

    public function mount()
    {
        $filePath = base_path('keywords/proxy.json');

        if (File::exists($filePath)) {
            $jsonData = json_decode(File::get($filePath), true);
            $this->proxies = $jsonData['proxies'] ?? [];
        }
    }

    public function render()
    {
        return view('livewire.home.proxy')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);

    }
}
