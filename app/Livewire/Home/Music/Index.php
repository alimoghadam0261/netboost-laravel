<?php

namespace App\Livewire\Home\Music;

use Livewire\Component;

class Index extends Component
{
    public string $title = 'موزیک و صدا|music';
    public string $description="موزیک ترند و افکت های صدا رایگان برای رشد شبکه  اجتماعی|Trending music and free sound effects for social media growth";

    public function render()
    {
        return view('livewire.home.music.index')
        ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
