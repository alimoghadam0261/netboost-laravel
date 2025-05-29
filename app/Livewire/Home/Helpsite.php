<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Helpsite extends Component
{
    public string $title = 'لیست سایت ها |list sites';
    public string $description = "لیستی از سایت های کمکی وسایت های هوش مصنوعی|A list of helpful sites and artificial intelligence sites";
    public function render()
    {
        return view('livewire.home.helpsite')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
