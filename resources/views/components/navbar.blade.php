<nav class="navbar navbar-expand-lg bg-body-tertiary">
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
          <a class="nav-link border-2 border-bottom border-dark" href="#">Profilo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          @auth
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route("login")}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route("register")}}">Register</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
        <button class="btn btn-outline-success"><i class="bi bi-plus-circle-fill"></i> articolo</button>
      </form>
    </div>
  </div>
</nav>