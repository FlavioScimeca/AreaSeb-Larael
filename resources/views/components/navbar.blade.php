<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route("welcome")}}">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Ciao {{ Auth::check() ? Auth::user()->name : "Guest" }}</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-info" href="{{route("article.index")}}">Profilo</a>
        </li>
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route("login")}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route("register")}}">Register</a></li>
          </ul>
        </li>
        @endguest
        @auth
        <li class="mx-3 btn btn-outline-warning"><a onclick=" event.preventDefault(); document.querySelector('#form-logout').submit() " class="dropdown-item" href="#">Logout</a></li>
        <form id="form-logout" action="{{route("logout")}}" method="POST">@csrf</form>
        @endauth
        <div>
          <a class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="https://github.com/FlavioScimeca/AreaSeb-Larael" target="blanl"><i class="bi bi-github me-2 text-dark"></i>Repo di questo progetto</a>
        </div>
      </ul>
      <div>
        <a href="{{route("article.create")}}" class="btn btn-outline-success"><i class="bi bi-plus-circle-fill"></i> articolo</a>
      </div>
    </div>
  </div>
</nav>