<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Helpsite2 extends Component
{
    public string $title = 'سایت هوش مصنوعی|ai sites';
    public string $description = "لیست کامل از سایت های هوش مصنوعی برای رشد شبکه اجتماعی|Complete list of AI sites for social network growth";
    public function render()
    {
        return view('livewire.home.helpsite2')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
