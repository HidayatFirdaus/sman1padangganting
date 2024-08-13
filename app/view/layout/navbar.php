<div class="app-header d-flex align-items-center">
    <!-- Container starts -->
    <div class="container-fluid">
        <!-- Row starts -->
        <div class="row gx-3">
            <div class="col-md-6 col-4">
                <!-- App brand starts -->
                <div class="app-brand">
                    <a href="./" class="d-lg-block d-none">
                        <h1 class="fw-bolder text-white text-uppercase">
                            SMA Negeri 1 Padang Ganting
                        </h1>
                    </a>
                    <a href="index.html" class="d-lg-none d-md-block">
                        <img src=assets/imgs/logo-sm.svg class="logo" alt="Bootstrap
                    Gallery" />
                    </a>
                </div>
                <!-- App brand ends -->
            </div>

            <div class="col-md-6 col-8">
                <!-- App header actions start -->
                <div class="header-actions col">
                    <div class="dropdown ms-3">
                        <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/imgs/pengguna/<?= $dataPengguna['foto_pengguna'] ?>" class="rounded-2 img-3x" alt="Bootstrap Gallery" />
                            <div class="ms-2 text-truncate d-lg-block d-none text-white">
                                <span class="d-flex opacity-50 small"><?= $dataPengguna['jabatan'] ?></span>
                                <span class="fw-bolder"><?= $dataPengguna['nama_pengguna'] ?></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="mx-3 mt-2 d-grid">
                                <a href="?p=Logout" class="btn btn-primary btn-sm">Logout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Toggle Menu starts -->
                    <button class="btn btn-warning btn-sm ms-3 d-lg-none d-md-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#MobileMenu">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Toggle Menu ends -->
                </div>
                <!-- App header actions end -->
            </div>
        </div>
        <!-- Row ends -->
    </div>
    <!-- Container ends -->
</div>