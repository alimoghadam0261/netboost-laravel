<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Sound extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name;
    public $sound;
    public $category;
    public $subcategory;

    public function save()
    {
        $this->validate([
            'name' => 'required',
           'sound' => 'required|mimes:mp3,wav,ogg|max:10240',
            'category' => 'required',
            'subcategory' => 'required'
        ]);

        $filePath = $this->sound->store('sounds', 'public');
        if (file_exists($this->sound->getRealPath())) {
            unlink($this->sound->getRealPath());
        }


        \App\Models\Sound::create([
            'name'=>$this->name,
            'sound'=>$filePath,
            'category'=>$this->category,
            'subcategory'=>$this->subcategory,
        ]);
        $this->reset(['name', 'sound', 'category','subcategory']);

        session()->flash('success', 'اطلاعات با موفقیت آپلود شد.');
    }
    public function delete($id)
    {
        $sound = \App\Models\Sound::findOrFail($id);

        // فرض کنیم مسیر فایل صوتی در ستون sound_path ذخیره شده (مثلاً: 'audios/sound.mp3')
        if ($sound->sound && Storage::disk('public')->exists($sound->sound)) {
            Storage::disk('public')->delete($sound->sound);
        }

        $sound->delete();

        session()->flash('success', 'فایل صوتی با موفقیت حذف شد.');
    }

    public function render()
    {
        $sounds = \App\Models\Sound::latest()->paginate(10);
        return view('livewire.admin.sound',compact('sounds'))->layout('components.layouts.admin');
    }
}
