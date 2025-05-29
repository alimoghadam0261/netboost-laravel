<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
class Instagram extends Component
{
    public $url;
    public $downloadLink;
    public $progress = 0;

    public function download()
    {
        $this->progress = 0;
        $this->downloadLink = null;

        try {
            // ✅ دریافت HTML صفحه اینستاگرام
            $response = Http::get($this->url);

            if ($response->successful()) {
                $html = $response->body();

                // ✅ استخراج لینک دانلود (mp4) از HTML
                preg_match('/"video_url":"(.*?)"/', $html, $matches);

                if (!empty($matches[1])) {
                    $this->downloadLink = stripslashes($matches[1]);
                    $this->progress = 100;
                } else {
                    session()->flash('error', 'لینک دانلود پیدا نشد!');
                }
            } else {
                session()->flash('error', 'خطا در دریافت اطلاعات از اینستاگرام!');
            }
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }






    public function render()
    {
        return view('livewire.home.instagram');
    }
}
