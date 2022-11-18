<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand text-white" href="/" style="font-size: 36px">Resepku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto gap-4">
          <a class="nav-link text-white" aria-current="page" href="/reseps/create">Tulis Resep</a>
          <form class="d-flex align-content-center" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
        </div>
      </div>
    </div>
  </nav>