<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body>
    <!-- Controller -->
    <?php include 'app/controller/dashboard/dashboard.php' ?>
    <!-- \Controller -->

    <!-- Main -->
    <div class="page-wrapper">
        <div class="app-container">
            <!-- Nav -->
            <?php include 'app/view/layout/navbar.php' ?>
            <!-- \Nav -->

            <!-- Sidebar -->
            <?php include 'app/view/layout/sidebar.php' ?>
            <!-- \Sidebar -->

            <!-- Content -->
            <div class="app-body">
                <div class="container-fluid">
                    <div class="row gx-3 mb-3">
                        <div class="col-12 col-xl-6">
                            <h2 class="fw-bolder"><?= $dataPage['page'] ?></h2>
                        </div>
                    </div>
                    <div class="row px-3 mb-3">
                        <div class="col-md-4">
                            <div class="card bg-primary rounded-2">
                                <div class="card-body">
                                    <h5 class="text-white text-center">Data Pengguna : <?= mysqli_num_rows($queryPengguna) ?> Data</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-info rounded-2">
                                <div class="card-body">
                                    <h5 class="text-white text-center">Data Siswa : <?= mysqli_num_rows($querySiswa) ?> Data</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-success rounded-2">
                                <div class="card-body">
                                    <h5 class="text-white text-center">Data Jurusan : <?= mysqli_num_rows($queryJurusan) ?> Data</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-xl-12 col-sm-12 col-12">
                            <div class="card mb-3 grd-pearl">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <div class="alert alert-info" role="alert">
                                                <h4 class="alert-heading fw-bolder">
                                                    Selamat Datang
                                                </h4>
                                                <hr />
                                                <p style="text-align: justify">
                                                    Selamat datang di Dashboard SMA Negeri 1 Padang
                                                    Ganting! Kami dengan senang hati membuka pintu
                                                    platform ini bagi Anda untuk mengelola data siswa
                                                    dan memberikan rekomendasi jurusan menggunakan
                                                    metode WASPAS secara efektif. Di sini, Anda dapat
                                                    dengan mudah mengakses informasi terkini tentang
                                                    setiap siswa, memantau perkembangan akademik mereka,
                                                    dan menggunakan hasil evaluasi untuk memberikan
                                                    rekomendasi jurusan yang sesuai dengan minat dan
                                                    potensi individu. Dashboard ini dirancang untuk
                                                    mendukung proses pengambilan keputusan yang lebih
                                                    baik dalam pendidikan, memastikan bahwa setiap siswa
                                                    mendapatkan arahan yang tepat sesuai dengan bakat
                                                    dan aspirasi mereka. Kami berharap platform ini
                                                    tidak hanya menjadi alat administratif, tetapi juga
                                                    menjadi sarana untuk membangun masa depan yang cerah
                                                    bagi siswa SMA Negeri 1 Padang Ganting.
                                                </p>
                                                <p>
                                                    UPT SMA Negeri 1 Padang Ganting didirikan pada tahun 1981,
                                                    terletak di Tanah Datar dengan alamat Jalan Rotan no.34 Padang Ganting,
                                                    Kenagarian Padang Ganting, Kecamatan Padang Ganting, Kabupaten Tanah Datar.
                                                    Sekolah ini adalah Sekolah Menengah Atas tertua di Kabupaten Tanah Datar,
                                                    yang sudah banyak melahirkan tokoh-tokoh baik tingkat Daerah, Propinsi maupun level Nasional.
                                                    SMAN 1 Padang Ganting sudah mengalami perubahan nama sebanyak 2 kali perubahan.

                                                    Pada awal berdiri pada tahun 1981, SMAN 1 Padang Ganting bernama SLTA Padang Ganting,
                                                    setelah itu berubah nama menjadi SLTAN 1 Padang Ganting, 1995 s.d 2005 pemakaian nama ini lebih kurang 10 tahun,
                                                    setelah itu berubah kembali menjadi SMAN 1 Padang Ganting, 2007 s.d 2011 penggunaan nama ini lebih kurang 10 tahun,
                                                    dan terakhir bernama UPT. SMAN 1 Padang Ganting sampai sekarang.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- \Content -->

            <!-- Footer -->
            <?php include 'app/view/layout/footer.php' ?>
            <!-- \Footer -->
        </div>
    </div>
    <!-- \Main -->

    <!-- Script -->
    <?php include 'app/view/layout/script.php' ?>
    <!-- \Script -->

</body>

</html>