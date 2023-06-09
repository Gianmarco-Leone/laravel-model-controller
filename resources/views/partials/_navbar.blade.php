<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
      <a class="navbar-brand text-white fs-2" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('movies') ? 'active' : ''}}" aria-current="page" href="{{ route('movies') }}">Movies</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>