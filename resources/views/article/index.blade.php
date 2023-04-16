<x-layout title="Index-article">
    <div class="container p-2 p-md-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    @forelse ($articles as $article )
                    <div class="col-8 col-md-4 mx-auto">
                        <div class="card mx-auto mt-3">
                            <img src="{{ Storage::url($article->image) ?? ""}}" class="card-img-top object-fit-contain" style="height: 10rem" alt="{{$article->title}}">
                            <div class="card-body">
                              <h5 class="card-title">{{$article->title}}</h5>
                              <p class="card-text">Description: <br>{{$article->title}}</p>
                              <p class="card-text">Price: <span>{{$article->price}}</span></p>
                              <div>
                                  <a href="{{route('article.edit' , ['article_id' => $article->id])}}" class="btn btn-warning">Modifica</a>
                                  <a href="#" class="btn btn-danger">Elimina</a>
                              </div>
                            </div>
                          </div>
                    </div>
                    @empty
                    <div class="row">
                        <div class="col">
                            <h2 class="text-center fs-3">Non hai Articoli creane uno <br> <a href="">Crea articolo</a> </h2>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layout>