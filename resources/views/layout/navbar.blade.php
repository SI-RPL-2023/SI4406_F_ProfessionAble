<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav mx-auto me-1">
            <ul class="navbar-nav fw-bold">
                <li class="nav-item mx-5">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link" href="#">Cari Lowongan</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link" href="{{ url('/login') }}">Masuk</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="btn button fw-bold" href="{{ url('/') }}">Daftar</a>
                </li>
            </ul>
        </div>
      </div>
    </div>
</nav>