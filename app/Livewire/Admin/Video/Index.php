<?php

namespace App\Livewire\Admin\Video;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.video.index')->layout('components.layouts.admin');
    }
}
