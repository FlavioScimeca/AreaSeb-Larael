<x-layout>
    <div class="py-3">
        <x-messages />
    </div>
    <div class="container">
        <div class="row my-5">
            <h2 class="text-center">
                Welcome page, add 4 items for pagination
            </h2>
        </div>
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    @forelse ($articles as $article )
                    <div class="col-8 col-md-4 mx-auto">
                        <div class="card mx-auto mt-3 position-relative">
                            <a href="{{route('article.show', ['article_id' => $article->id])}}"><i class="bi bi-info-circle-fill fs-3 position-absolute translate-middle"></i></a>
                            <img src="{{ Storage::url($article->image) ?? ""}}" class="card-img-top object-fit-contain" style="height: 10rem" alt="{{$article->title}}">
                            <div class="card-body">
                              <h5 class="card-title">{{$article->title}}</h5>
                              <p class="card-text">Description: <br>{{$article->title}}</p>
                              <p class="card-text">Price: <span>{{$article->price}}</span></p>
                            </div>
                          </div>
                    </div>
                    @empty
                    <h2 class="text-center">
                        Nessun articolo creane uno! <br> <a href="{{route("article.create")}}">crea articolo</a>
                    </h2>
                    @endforelse
                    <div class="d-flex justify-content-center p-3 mt-4">
                        {{$articles->links()}}
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</x-layout>