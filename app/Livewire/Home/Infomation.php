<?php

namespace App\Livewire\Home;

use App\Models\Infoday;
use Livewire\Component;

class Infomation extends Component
{

    public $title = '';
    public $content = '';


    public function info()
    {
        $infos = Infoday::inRandomOrder()->first();
        $this->title = $infos->title;
        $this->content = $infos->content;
    }

    public function render()
    {
        return view('livewire.home.infomation')->title('اطلاعات عمومی|information');
    }
}
