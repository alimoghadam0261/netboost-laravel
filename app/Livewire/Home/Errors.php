<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Errors extends Component
{
    public string $title = '404|NotFound';
    public string $description = 'این صفحه وچود ندارد|This page does not exist.';
    public function render()
    {
        return view('livewire.home.errors')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
