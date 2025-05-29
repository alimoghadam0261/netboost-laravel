<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Word extends Component
{
    use WithPagination;

    public $author;
    public $content;

    public function save()
    {
        $this->validate([
            'author' => 'required',
            'content' => 'required'
        ]);


        \App\Models\Word::create([
            'author'=>$this->author,
            'content'=>$this->content,
        ]);

        $this->reset(['author', 'content']);
        session()->flash('success', 'اطلاعات با موفقیت آپلود شد.');


    }


    public function delete($id)
    {
        $word = \App\Models\Word::findOrFail($id);
        $word->delete();
        session()->flash('success', 'سخن با موفقیت حذف شد.');
    }




    public function render()
    {
        $wodOfHuman = \App\Models\Word::paginate(30);
        $count = \App\Models\Word::count();
        return view('livewire.admin.word',compact('wodOfHuman','count'))->layout('components.layouts.admin');
    }
}
