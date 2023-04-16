<div>
    <form method="POST" wire:submit="store">
        @csrf
        <div class="mb-3">
          <label for="inputName" class="form-label">Title</label>
          <input wire:model="title" type="text" class="form-control" id="inputName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword">
          </div>
          <div class="mb-3">
            <label for="inputPassword2" class="form-label">Repeat password</label>
            <input name="password_confirmation" type="password" class="form-control" id="inputPassword2">
          </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Diventa un Admin</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrati</button>
      </form>
</div>
