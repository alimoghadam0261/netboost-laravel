<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Donate extends Component
{
    public string $title = 'حمایت از ما|Donate';
    public string $description = 'با حمایت مالی تبلیغاتی از نت بوست باعث رشد این پلتفرم شوید|Help NetBoost grow by sponsoring this platform.';
    public function render()
    {
        return view('livewire.home.donate')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
