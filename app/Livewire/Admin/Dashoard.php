<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashoard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashoard')->layout('components.layouts.admin');
    }
}
