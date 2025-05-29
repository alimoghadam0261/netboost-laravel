<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Moamapic extends Component
{
    use WithFileUploads;
    use WithPagination;


    public $title;
    public $pic;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,webp|max:3048'

        ]);

        $img = $this->pic->store('moamapic', 'public');
        if (file_exists($this->pic->getRealPath())) {
            unlink($this->pic->getRealPath());
        }


        \App\Models\Moamapic::create([
            'title'=>$this->title,
            'pic'=>$img,
        ]);
        $this->reset();
        session()->flash('success', 'اطلاعات با موفقیت آپلود شد.');
    }


    public function delete($id){
        $moama = \App\Models\Moamapic::findOrFail($id);
        if ($moama->pic && file_exists(storage_path('app/public/' . $moama->pic))) {
            unlink(storage_path('app/public/' . $moama->pic));
        }
        $moama->delete();
        session()->flash('success', 'عکس با موفقیت حذف شد.');

    }



    public function render()
    {
        $moamapic =\App\Models\Moamapic::paginate(32);
        $count = \App\Models\Moamapic::count();
        return view('livewire.admin.moamapic',compact('moamapic','count'))->layout('components.layouts.admin');
    }
}
