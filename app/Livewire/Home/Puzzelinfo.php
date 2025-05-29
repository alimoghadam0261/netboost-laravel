<?php

namespace App\Livewire\Home;

use App\Models\Puzzel;
use Livewire\Component;

class Puzzelinfo extends Component
{
    public string $title = 'فال|omen';
    public string $description="مجموعه کامل فال حافظ همراه با شغر و تفسیر برای تولید محتوا|Complete collection of Hafez horoscopes with poetry and commentary for content production";



    public $question = '';
    public $answer = '';


    public function submit()
    {
        // گرفتن ردیف به صورت رندم
        $puzzel = Puzzel::inRandomOrder()->first();

        // تنظیم داده‌ها برای نمایش
        $this->question = $puzzel->question;
        $this->answer = $puzzel->answer;

    }




    public function render()
    {
        return view('livewire.home.puzzelinfo')
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
