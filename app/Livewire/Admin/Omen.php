<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Omen extends Component
{
    use WithPagination;


    public $Poem;
    public $Interpretation;

    public function save()
    {

        $this->validate([
            'Poem' => 'required',
            'Interpretation' => 'required',
        ]);
        \App\Models\Faal::create([
            'Poem'=> $this->Poem,
            'Interpretation'=>  $this->Interpretation,
        ]);
        $this->reset(['title', 'content']);
        session()->flash('success', 'فال با موفقیت آپلود شد.');

    }

    public function delete($id)
    {
        $omens = \App\Models\Faal::findOrFail($id);
        $omens->delete();
        session()->flash('success', 'فال با موفقیت حذف شد.');
    }



    public function render()
    {
        $oment = \App\Models\Faal::paginate(10);

        return view('livewire.admin.omen',compact('oment'))->layout('components.layouts.admin');
    }
}
