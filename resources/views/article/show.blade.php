<x-layout title="Detail-article">
    <div class="container p-2 p-md-5">
        <div class="row">
            <div class="col-10 col-md-8 mx-auto">
                <div class="card mx-auto mt-3 position-relative">
                    <img src="{{ Storage::url($article->image) ?? ""}}" class="card-img-top object-fit-contain" alt="{{$article->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">Description: <br>{{$article->title}}</p>
                      <p class="card-text">Price: <span>{{$article->price}}</span></p>
                      <div>
                          <a href="{{ URL::previous() }}" class="btn btn-warning"><i class="bi bi-arrow-left me-1"></i>Indietro</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>