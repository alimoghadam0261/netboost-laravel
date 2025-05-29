<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Puzzel as PuzzleModel;


class Puzzle extends Component
{
    use WithPagination;

    public $title;
    public $question;
    public $answer;


    public function save()
    {
        $this->validate([
            'title' => 'required',
            'question' => 'required',
            'answer' => 'required'
        ]);
        PuzzleModel::create([
            'title' => $this->title,
            'question' => $this->question,
            'answer' => $this->answer,
        ]);
        $this->reset(['title', 'question', 'answer']);

        session()->flash('success', 'اطلاعات با موفقیت آپلود شد.');
    }

    public function delete($id)
    {
        $omens = PuzzleModel::findOrFail($id);
        $omens->delete();
        session()->flash('success', 'اطلاعات با موفقیت حذف شد.');
    }

    public function render()
    {
        $puzzeuls = PuzzleModel::paginate(30);
        $count = PuzzleModel::count();
        return view('livewire.admin.puzzle',compact('puzzeuls','count'));
    }
}
