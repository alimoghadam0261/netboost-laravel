<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;


class Infoday extends Component
{
    use WithPagination;

    public $title;
    public $content;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        \App\Models\Infoday::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        $this->reset(['title', 'content']);
        session()->flash('success', 'اطلاعات با موفقیت آپلود شد.');
    }


    public function delete($id)
    {
        $omens = \App\Models\Infoday::findOrFail($id);
        $omens->delete();
        session()->flash('success', 'اطلاعات با موفقیت حذف شد.');
    }


    public function render()
    {
        $infos = \App\Models\Infoday::paginate(30);
        $count = \App\Models\Infoday::count();
        return view('livewire.admin.infoday',compact('infos','count'))->layout('components.layouts.admin');
    }
}
