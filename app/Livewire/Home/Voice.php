<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Voice extends Component
{
    public string $title = 'متن به صدا|speech';
    public string $description="تبدیل متن به صدا به تمام زبانها و استفاده رایگان|Convert text to voice in all languages ​​and free to use";
    public function render()
    {
        return view('livewire.home.voice')
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
