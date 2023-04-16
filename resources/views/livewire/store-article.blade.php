<div class="p-2 p-md-5">
    <x-messages />
    <form method="POST" wire:submit.prevent="store">
        @csrf
        <div class="mb-3">
            <label for="inputName" class="form-label">Title</label>
            <input wire:model.lazy="title" type="text" class="form-control" id="inputName" aria-describedby="emailHelp">
            @error('title') <span class="bg-danger p-1 rounded-3 fw-semibold">{{ $message }}</span> @enderror
        </div>
        @if ($image)
        <div class="d-flex justify-content-center">
            <img class="w-50 mx-auto" src="{{ $image->temporaryUrl() }}" class="img-fluid rounded-top">
        </div>
        @endif
        <div class="mb-3">
            <label for="formFile" class="form-label">Seleziona una foto</label>
            <input wire:model.lazy="image" class="form-control" type="file" id="formFile">
            @error('image') <span class="bg-danger p-1 rounded-3 fw-semibold">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea wire:model.lazy="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('description') <span class="bg-danger p-1 rounded-3 fw-semibold">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="inputPrice" class="form-label">Price</label>
            <input wire:model.lazy="price" name="password_confirmation" type="number" class="form-control" id="inputPrice">
            @error('price') <span class="bg-danger p-1 rounded-3 fw-semibold">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
