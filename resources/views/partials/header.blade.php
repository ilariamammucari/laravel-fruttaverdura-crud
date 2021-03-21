<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="{{ (Request::route()->getName() == 'home-page') ? 'active' : '' }} nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('home-page') }}">Home</a>
              </li>
              <li class="{{ (Request::route()->getName() == 'fruits.index') ? 'active' : '' }} nav-item">
                <a class="nav-link" href="{{ route('fruits.index') }}">Frutta</a>
              </li>
              <li class="{{ (Request::route()->getName() == 'vegetables.index') ? 'active' : '' }} nav-item">
                <a class="nav-link" href="{{ route('vegetables.index') }}">Verdura</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>