<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Contentproduct extends Component
{
    public string $title = 'تولید محتوا |Content production';
    public string $description = 'تولید محتوا های گوناگون|Producing various content';
    public function render()
    {
        return view('livewire.home.contentproduct')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
