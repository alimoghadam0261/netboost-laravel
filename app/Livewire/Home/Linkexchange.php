<?php

namespace App\Livewire\Home;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
class Linkexchange extends Component
{

    public string $title = 'تبادل|linkchange';
    public string $description = "تبادل لینک محلی برای تبلیغ رایگان شبکه های اجتماعی شما|Local link exchange for free promotion of your social networks";



    use WithFileUploads;
    use WithPagination;


    public $category;
    public $social;
    public $name;
    public $img;
    public $content;



    protected $rules = [
        'content' => 'required|string|max:200',
        'name' => 'required|unique:linkexchanges,name',
        'category' => 'required',
        'social' => 'required',
        'img' => 'required|image|max:2048'
    ];



    public function save()
    {
        $this->validate();

        // ذخیره عکس در مسیر public/storage/uploads
        $imagePath = $this->img->store('socialuser', 'public');

        if (file_exists($this->img->getRealPath())) {
            unlink($this->img->getRealPath());
        }


        \App\Models\Linkexchange::create([
            'user_id'  => auth()->id(),
            'name'=>$this->name,
            'category'=>$this->category,
            'social'=>$this->social,
            'content'=>$this->content,
            'img'=>$imagePath
        ]);

        session()->flash('message', 'چالش با موفقیت ذخیره شد.');
        $this->reset();
    }


    public function deleteLink($id)
    {
        $link = \App\Models\Linkexchange::find($id);


        if (auth()->id() !== $link->user_id && auth()->user()->role !== 'admin') {
            abort(403);
        }

        if ($link) {
            // حذف تصویر از پوشه storage
            Storage::disk('public')->delete($link->img);

            // حذف رکورد از دیتابیس
            $link->delete();

            session()->flash('message', 'آیتم با موفقیت حذف شد.');
        } else {
            session()->flash('message', 'آیتم پیدا نشد.');
        }
    }



    public function render()
    {
        $links = \App\Models\Linkexchange::paginate(30);
        $count = \App\Models\Linkexchange::count();
        return view('livewire.home.linkexchange', compact('links', 'count'))->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);

    }

}
