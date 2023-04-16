<x-layout title="Login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto p-md-5">
                <form method="POST" action="{{route("login")}}">
                    @csrf
                    <div class="mb-3">
                      <label for="inputEmail" class="form-label">Email</label>
                      <input name="email" type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword">
                      </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>