
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1>
        <!-- <img src="stocker/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link <?= $active['beranda'] ?>">Beranda</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link  <?= $active['profil'] ?>" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Profil</span>
                </a>
                <div class="dropdown-menu m-0">
                    <?php
                        $dtprofil=[
                                ["/profil/sejarah","Sejarah"],
                                ["/profil/identitas","Identitas"],
                                ["/profil/lokasi","Lokasi"],
                                ["/profil/galeri","Galeri"],
                                ["/profil/pegawai","Pegawai"]
                            ];
                    ?>
                    <?php foreach($dtprofil as list($lilinkprofil,$linamaprofil)): ?>

                    <a href="<?= $lilinkprofil ?>" class="dropdown-item"><?= $linamaprofil ?></a>

                    <?php endforeach; ?>
                    
                </div>
            </div>
            <a href="index.html" class="nav-item nav-link <?= $active['progsek'] ?>">Program Sekolah</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link <?= $active['jurusan'] ?>" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Jurusan</span>
                </a>
                <div class="dropdown-menu m-0">
                    <?php
                        $dtjur=[
                                ["/mjur/jurusan/rpl","Rekayasa Perangkat Lunak"],
                                ["/mjur/jurusan/tkj","Teknik Komputer dan Jaringan"],
                                ["/mjur/jurusan/tkr","Teknik Kendaraan Ringan"],
                                ["/mjur/jurusan/ak","Akuntasi"],
                                ["/mjur/jurusan/mp","Manajemen Perkantoran"],
                                ["/mjur/jurusan/htl","Perhotelan"]
                            ];
                    ?>
                    <?php foreach($dtjur as list($lilinkjur,$linamajur)): ?>

                    <a href="<?= $lilinkjur ?>" class="dropdown-item"><?= $linamajur ?></a>

                    <?php endforeach; ?>
                    
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link <?= $active['kegsiswa'] ?>" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Kegiatan Siswa</span>
                </a>
                <div class="dropdown-menu m-0">
                    <?php
                        $dtksiswa=[
                                ["/mksiswa/kegiatan/osis","OSIS"],
                                ["/mksiswa/kegiatan/pramuka","Pramuka"],
                                ["/mksiswa/kegiatan/pmr","PMR"],
                                ["/mksiswa/kegiatan/futsal","Futsal"],
                                ["/mksiswa/kegiatan/voli","Bola Voli"],
                                ["/mksiswa/kegiatan/jurnalistik","Jurnalistik"],
                                ["/mksiswa/kegiatan/akustik","Akustik"],
                                ["/mksiswa/kegiatan/karawitan","Karawitan"],
                                ["/mksiswa/kegiatan/tari","Tari"]
                            ];
                    ?>
                    <?php foreach($dtksiswa as list($lilinkdksiswa,$linamadksiswa)): ?>

                    <a href="<?= $lilinkdksiswa ?>" class="dropdown-item"><?= $linamadksiswa ?></a>
                    
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link <?= $active['konten'] ?>" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Konten</span>
                </a>
                <div class="dropdown-menu m-0">

                    <?php
                        $dtkonten=[
                                ["/konten/berita","Berita"],
                                ["/konten/artikel","Artikel"],
                                ["/konten/video","Video"]
                            ];
                    ?>
                    <?php foreach($dtkonten as list($lilinkkonten,$linamakonten)): ?>

                    <a href="<?= $lilinkkonten ?>" class="dropdown-item"><?= $linamakonten ?></a>
                    
                    <?php endforeach; ?>

                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link <?= $active['kontak'] ?>">Kontak Kami</a>
            <a href="contact.html" class="nav-item nav-link <?= $active['login'] ?>">Login <i class="fa fa-sign-in-alt"></i></a>
        </div>
    </div>
</nav>

