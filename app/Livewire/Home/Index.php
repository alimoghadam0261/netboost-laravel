<?php


namespace App\Livewire\Home;

use Livewire\Component;
use YoutubeDl\YoutubeDl;
use YoutubeDl\Process\SymfonyProcessBuilder;

class Index extends Component
{

    public function render()
    {
        return view('livewire.home.index')->title('NetBoost | سایت رایگان برای آموزش و تبادل شبکه های اجتماعی');
    }
}
