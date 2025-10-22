<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #11215B">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="{{asset('asset/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">UNIVERSITAS PIGNATELI TRIPUTRA</a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Profil</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="akademik" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Akademik
            </a>
            <ul class="dropdown-menu" aria-labelledby="akademik">
                <li>
                    <a class="dropdown-item" href="#">Staff Pengajar</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Kurikulum</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/biaya">Biaya Kuliah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/jalur">Jalur Pendaftaran</a>
        </li>
    </ul>
    <a href="/daftar" class="btn btn-light ms-3">Daftar</a>
  </div>
</nav>
