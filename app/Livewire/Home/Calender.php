<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Calender extends Component
{
    public string $title = 'تقویم چالش |calendar';
    public string $description = 'تقویم چالشهای سال برای مناسبت های مختلف|Calendar of challenges for the year for various occasions';
    public function render()
    {
        return view('livewire.home.calender')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
