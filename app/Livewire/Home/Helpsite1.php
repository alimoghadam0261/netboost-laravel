<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Helpsite1 extends Component
{
    public string $title = 'سایت های کاربردی|sites';
    public string $description ="لیست کامل از سایت های کاربردی برای رشد شبکه اجتماعی|Complete list of useful sites for social networking growth";
    public function render()
    {
        return view('livewire.home.helpsite1')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
