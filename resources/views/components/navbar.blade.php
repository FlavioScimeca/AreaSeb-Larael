<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Ciao {{ Auth::check() ? Auth::user()->name : "Guest" }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-2 border-bottom border-dark" href="{{route("article.index")}}">Profilo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          @auth
          <ul class="list-group">
            <li class="list-group-item"><a onclick=" event.preventDefault(); document.querySelector('#form-logout').submit() " class="dropdown-item" href="#">Logout</a></li>
            <form id="form-logout" action="{{route("logout")}}" method="POST">@csrf</form>
          </ul>
          @else
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route("login")}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route("register")}}">Register</a></li>
          </ul>
          @endauth
        </li>
      </ul>
      <form class="d-flex">
        <a href="{{route("article.create")}}" class="btn btn-outline-success"><i class="bi bi-plus-circle-fill"></i> articolo</a>
      </form>
    </div>
  </div>
</nav>