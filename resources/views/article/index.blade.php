<x-layout title="Index-article">
    <div class="container p-2 p-md-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    @forelse ($articles as $article )
                    <div class="mx-auto col-8 col-md-4 ">
                        <div class="card mx-auto">
                            <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="{{$article->title}}">
                            <div class="card-body">
                              <h5 class="card-title">{{$article->title}}</h5>
                              <p class="card-text">{{$article->title}}></p>
                              <p class="card-text">{{$article->price}}></p>
                              <div>
                                  <a href="#" class="btn btn-warning">Modifica</a>
                                  <a href="#" class="btn btn-danger">Elimina</a>
                              </div>
                            </div>
                          </div>
                    </div>
                    @empty
                        
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layout>