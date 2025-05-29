<?php

namespace App\Livewire\Home\Music;

use App\Models\Sound;
use Livewire\Component;
use Livewire\WithPagination;

class Effect extends Component
{
    use WithPagination;

    public string $title = 'افکت صدا|effect sound';
    public string $description = "افکت های صدا رایگان برای رشد شبکه اجتماعی| sound effects for social media growth";

    public $subcategory = '';

    protected $queryString = ['subcategory']; // برای اینکه انتخاب کاربر در URL بمونه

    public function updatingSubcategory()
    {
        // وقتی کاربر دسته رو عوض می‌کنه، صفحه برمی‌گرده به 1
        $this->resetPage();
    }

    public function render()
    {
        $query = Sound::where('category', 'soundEffect');

        if ($this->subcategory) {
            $query->where('subcategory', $this->subcategory);
        }

        $sounds = $query->orderBy('id', 'desc')->paginate(20);

        return view('livewire.home.music.effect', compact('sounds'))
            ->layout('components.layouts.app', [
                'title' => $this->title,
                'description' => $this->description,
            ]);
    }
}
