<x-layout title="Register">
    <div class="container py-2 py-md-5">
        <div class="row">
          <h2 class="text-center">Register page</h2>
            <div class="col-md-6 mx-auto p-md-5">
                <form method="POST" action="{{route("register")}}">
                    @csrf
                    <div class="mb-3">
                      <label for="inputName" class="form-label">Name</label>
                      <input name="name" type="text" class="form-control" id="inputName" aria-describedby="emailHelp">
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
        </div>
    </div>
</x-layout>