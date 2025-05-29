<?php

namespace App\Livewire\Home;

use App\Models\Faal;
use Livewire\Component;

class Omen extends Component
{

    public string $title = 'فال|omen';
    public string $description="مجموعه کامل فال حافظ همراه با شغر و تفسیر برای تولید محتوا|Complete collection of Hafez horoscopes with poetry and commentary for content production";


    public $Poem = '';
    public $Interpretation = '';
    public function faal()
    {
        // گرفتن ردیف به صورت رندم
        $omen = Faal::inRandomOrder()->first();

        // تنظیم داده‌ها برای نمایش
        $this->Poem = $omen->Poem;
        $this->Interpretation = $omen->Interpretation;

    }
    public function render()
    {
        return view('livewire.home.omen')
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
