<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

use Livewire\Component;

class StoreArticle extends Component
{
    use WithFileUploads;

    public $title, $image, $description, $price;

    public function store(){
        $this->validate();

        //? Mass assignment
        Article::create([
            "user_id" => Auth::user()->id,
            "title" => $this->title,
            "image" => $this->image->store("public/photos"),
            "description" => $this->description,
            "price" => $this->price,
        ]);
        $this->reset();
        session()->flash('successMessage', 'Hai inserito correttamente');
    }

    protected $rules = [

        'title' => 'required|min:3|max:200',
        'description' => 'required|min:3|max:2000',
        'price' => 'required|numeric',
        'image' => 'required|image|max:1024'
    ];

    public function render()
    {
        return view('livewire.store-article');
    }
}
