<div class="p-2 p-md-5">
    <form method="POST" wire:submit.prevent="store">
        @csrf
        <div class="mb-3">
            <label for="inputName" class="form-label">Title</label>
            <input wire:model="title" type="text" class="form-control" id="inputName" aria-describedby="emailHelp">
        </div>
        @if ($image)
        <div>
            <img src="{{ $image->temporaryUrl() }}" class="img-fluid rounded-top">
        </div>
        @endif
        <div class="mb-3">
            <label for="formFile" class="form-label">Seleziona una foto</label>
            <input wire:model="image" class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea wire:model="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="inputPrice" class="form-label">Price</label>
            <input wire:model="price" name="password_confirmation" type="number" class="form-control" id="inputPrice">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
