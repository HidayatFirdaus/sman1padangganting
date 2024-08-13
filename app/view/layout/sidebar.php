<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="offcanvas offcanvas-end" id="MobileMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title semibold">Navigation</h5>
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="offcanvas">
                    <i class="icon-clear"></i>
                </button>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item <?= $page == "Dashboard" ? 'active-link' : '' ?>">
                    <a class="nav-link" href="./"> Dahsboard </a>
                </li>
                <?php if ($dataPengguna['jabatan'] == "Operator Sekolah") : ?>
                    <li class="nav-item <?= $page == "DataPengguna" ? 'active-link' : '' ?>">
                        <a class="nav-link" href="?p=DataPengguna"> Data Pengguna </a>
                    </li>
                    <li class="nav-item dropdown <?= ($page == "DataSiswa" or $page == "DataNilai") ? 'active-link' : '' ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Siswa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?p=DataSiswa">Data Siswa</a></li>
                            <li><a class="dropdown-item" href="?p=DataNilai">Data Nilai Siswa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown <?= ($page == "DataJurusan" or $page == "DataMinat" or $page == "StandarJurusan") ? 'active-link' : '' ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jurusan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?p=DataJurusan">Data Jurusan</a></li>
                            <li><a class="dropdown-item" href="?p=DataMinat">Data Minat Jurusan</a></li>
                            <li><a class="dropdown-item" href="?p=StandarJurusan">Data Standar Nilai Jurusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item <?= $page == "Rekomendasi" ? 'active-link' : '' ?>">
                        <a class="nav-link" href="?p=Rekomendasi">Rekomendasi Jurusan Siswa</a>
                    </li>
                <?php endif ?>
                <li class="nav-item <?= $page == "Laporan" ? 'active-link' : '' ?>">
                    <a class="nav-link" href="?p=Laporan">Laporan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>