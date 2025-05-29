<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\WithPagination;

class Words extends Component
{
    use WithPagination;

    public string $title = 'سخنان|words';
    public string $description="لیستی از سخنان بزرگان برای تولید محتوا |A list of quotes from great people for content creation";


    public function render()
    {
        $wodOfHuman = \App\Models\Word::paginate(30);
        $count = \App\Models\Word::count();


        return view('livewire.home.words',compact('wodOfHuman','count'))

            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);

    }
}
