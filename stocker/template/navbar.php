
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1>
        <!-- <img src="stocker/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link <?= $active[0][0] ?>">Beranda</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link  <?= $active[1][0] ?>" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Profil</span>
                </a>
                <div class="dropdown-menu m-0">
                    <a href="feature.html" class="dropdown-item <?= $active[1][1] ?>">Sejarah</a>
                    <a href="team.html" class="dropdown-item <?= $active[1][2] ?>">Identitas Sekolah</a>
                    <a href="team.html" class="dropdown-item <?= $active[1][3] ?>">Lokasi</a>
                    <a href="team.html" class="dropdown-item <?= $active[1][4] ?>">Galeri</a>
                    <a href="team.html" class="dropdown-item <?= $active[1][5] ?>">Pegawai</a>
                </div>
            </div>
            <a href="index.html" class="nav-item nav-link <?= $active[2][0] ?>">Program Sekolah</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link <?= $active[3][0] ?>" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Jurusan</span>
                </a>
                <div class="dropdown-menu m-0">
                    <a href="feature.html" class="dropdown-item <?= $active[3][1] ?>">Rekayasa Perangkat Lunak</a>
                    <a href="team.html" class="dropdown-item <?= $active[3][2] ?>">Teknik Komputer dan Jaringan</a>
                    <a href="testimonial.html" class="dropdown-item <?= $active[3][3] ?>">Akuntansi Lembaga Keuangan</a>
                    <a href="offer.html" class="dropdown-item <?= $active[3][4] ?>">Manajemen Perkantoran</a>
                    <a href="FAQ.html" class="dropdown-item <?= $active[3][5] ?>">Teknik Kendaraan Ringan</a>
                    <a href="404.html" class="dropdown-item <?= $active[3][6] ?>">Perhotelan</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link <?= $active[4][0] ?>" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Kegiatan Siswa</span>
                </a>
                <div class="dropdown-menu m-0">
                    <a href="feature.html" class="dropdown-item <?= $active[4][1] ?>">OSIS</a>
                    <a href="team.html" class="dropdown-item <?= $active[4][2] ?>">Pramuka</a>
                    <a href="testimonial.html" class="dropdown-item <?= $active[4][3] ?>">PMR</a>
                    <a href="offer.html" class="dropdown-item <?= $active[4][4] ?>">Futsal</a>
                    <a href="FAQ.html" class="dropdown-item <?= $active[4][5] ?>">Muaythai</a>
                    <a href="/pegawai-nano" class="dropdown-item <?= $active[4][6] ?>">Voli</a>
                    <a href="404.html" class="dropdown-item <?= $active[4][7] ?>">Jurnalistik</a>
                    <a href="404.html" class="dropdown-item <?= $active[4][8] ?>">Akustik</a>
                    <a href="404.html" class="dropdown-item <?= $active[4][9] ?>">Karawitan</a>
                    <a href="404.html" class="dropdown-item <?= $active[4][10] ?>">Tari</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link <?= $active[5][0] ?>" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Konten</span>
                </a>
                <div class="dropdown-menu m-0">
                    <a href="feature.html" class="dropdown-item <?= $active[5][1] ?>">Berita</a>
                    <a href="team.html" class="dropdown-item <?= $active[5][2] ?>">Artikel</a>
                    <a href="team.html" class="dropdown-item <?= $active[5][3] ?>">Video</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link <?= $active[6][0] ?>">Kontak Kami</a>
        </div>
    </div>
</nav>

