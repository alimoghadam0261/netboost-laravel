<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Cta extends Component
{
    public string $title = 'جملات CTA';
    public string $description = 'بیش از۱۰۰ جملهcta  به زبان فارسی و انگلیسی|More than 100 cta sentences in Persian and English';
    public function render()
    {
        $ctasfr = \App\Models\Cta::whereBetween('id', [1, 50])->pluck('content');
        $ctasen = \App\Models\Cta::whereBetween('id', [51, 100])->pluck('content');
        $count = \App\Models\Cta::count();
        return view('livewire.home.cta',compact('ctasen','ctasfr','count'))->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
