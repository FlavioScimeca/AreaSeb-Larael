<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;


class UpdateArticle extends Component
{
    use WithFileUploads;

    public $article; 
    public $title, $image, $new_image, $description, $price;

    public function update(){

        $this->article->update([
            "title" => $this->title,
            "price" => $this->price,
            "description" => $this->description,
        ]);

        if ($this->new_image) {
            $this->article->update([
                "image" => $this->new_image->store("public/photos"),
            ]);
        }

        return redirect(route("welcome"));
    }

    public function mount($article_id){

        $article_mount = Article::find($article_id);
        $this->article = $article_mount;

        $this->title = $article_mount->title;
        $this->image = $article_mount->image;
        $this->description = $article_mount->description;
        $this->price = $article_mount->price;

    }

    public function render()
    {
        //! get() ritorna un Array se vuoi un unico Oggetto usa first()
        // $article = Article::where("id", $this->article_id)->first();

        return view('livewire.update-article');
    }
}
