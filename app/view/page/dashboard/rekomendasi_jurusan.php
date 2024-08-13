<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body>
    <!-- Controller -->
    <?php include 'app/controller/dashboard/rekomendasi_jurusan.php' ?>
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
                        <div class="col-12 col-xl-8">
                            <h2 class="fw-bolder"><?= $dataPage['page'] ?></h2>
                        </div>
                    </div>
                    <div class="row gx-3">
                        <div class="col-xl-12 col-sm-12 col-12">
                            <div class="card mb-3 grd-pearl">
                                <div class="card-header">
                                    <form method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                                        <div class="row px-3 my-3">
                                            <div class="col-md-3">
                                                <label class="form-label">NISN Siswa</label>
                                                <div class="d-flex">
                                                    <input type="search" class="form-control me-2" name="nisn" required value="<?= $nisn ?>">
                                                    <button type="submit" class="btn btn-success" name="cari">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <?php if (isset($_POST['cari'])) : ?>
                                        <?php if ($err == true) : ?>
                                            <h5>NISN <?= $nisn ?> Tidak Ditemukan !!!</h5>
                                        <?php else : ?>
                                            <div class="row px-3 my-3">
                                                <div class="col-md-12 mb-3">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Data Siswa</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-6 mb-3">
                                                                    <label class="form-label">NISN Siswa</label>
                                                                    <input type="text" class="form-control" name="nisn" value="<?= $dataNilaiSiswa['nisn'] ?>" readonly>
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <label class="form-label">Nama Siswa</label>
                                                                    <input type="text" class="form-control" name="nisn" value="<?= $dataNilaiSiswa['nama_siswa'] ?>" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Minat Siswa</label>
                                                                    <input type="text" class="form-control" name="minat" value="<?= $dataNilaiSiswa['minat'] ?>" step="any" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Nilai Bahasa Indonesia</label>
                                                                    <input type="number" class="form-control" name="bahasa_indonesia" value="<?= $dataNilaiSiswa['bahasa_indonesia'] ?>" step="any" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Nilai Bahasa Inggris</label>
                                                                    <input type="number" class="form-control" name="bahasa_inggris" value="<?= $dataNilaiSiswa['bahasa_inggris'] ?>" step="any" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Nilai MTK</label>
                                                                    <input type="number" class="form-control" name="mtk" step="any" value="<?= $dataNilaiSiswa['mtk'] ?>" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Nilai IPA</label>
                                                                    <input type="number" class="form-control" name="ipa" step="any" value="<?= $dataNilaiSiswa['ipa'] ?>" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Nilai IPS</label>
                                                                    <input type="number" class="form-control" name="ips" step="any" value="<?= $dataNilaiSiswa['ips'] ?>" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Nilai PPKN</label>
                                                                    <input type="number" class="form-control" name="ppkn" step="any" value="<?= $dataNilaiSiswa['ppkn'] ?>" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Nilai TIK</label>
                                                                    <input type="number" class="form-control" name="tik" step="any" value="<?= $dataNilaiSiswa['tik'] ?>" readonly>
                                                                </div>
                                                                <div class="col-4 mb-3">
                                                                    <label class="form-label">Nilai Seni</label>
                                                                    <input type="number" class="form-control" name="seni" step="any" value="<?= $dataNilaiSiswa['seni'] ?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Standar Nilai Jurusan</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover text-center align-middle">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama Jurusan</th>
                                                                            <th>Bahasa Indonesia</th>
                                                                            <th>Bahasa Inggris</th>
                                                                            <th>MTK</th>
                                                                            <th>IPA</th>
                                                                            <th>IPS</th>
                                                                            <th>PPKN</th>
                                                                            <th>TIK</th>
                                                                            <th>Seni</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($queryStandar as $row) : ?>
                                                                            <tr>
                                                                                <td><?= $no++ ?></td>
                                                                                <td><?= $row['jurusan'] ?></td>
                                                                                <td><?= $row['bahasa_indonesia'] ?></td>
                                                                                <td><?= $row['bahasa_inggris'] ?></td>
                                                                                <td><?= $row['mtk'] ?></td>
                                                                                <td><?= $row['ipa'] ?></td>
                                                                                <td><?= $row['ips'] ?></td>
                                                                                <td><?= $row['ppkn'] ?></td>
                                                                                <td><?= $row['tik'] ?></td>
                                                                                <td><?= $row['seni'] ?></td>
                                                                            </tr>
                                                                        <?php endforeach ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Indikator Penilaian</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover text-center align-middle">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Kode</th>
                                                                            <th>Alternatif</th>
                                                                            <th>C1</th>
                                                                            <th>C2</th>
                                                                            <th>C3</th>
                                                                            <th>C4</th>
                                                                            <th>C5</th>
                                                                            <th>C6</th>
                                                                            <th>C7</th>
                                                                            <th>C8</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $no = 1; ?>
                                                                        <?php foreach ($queryStandar as $row) : ?>
                                                                            <tr>
                                                                                <td>A<?= $no++ ?></td>
                                                                                <td><?= $row['jurusan'] ?></td>
                                                                                <td><?= round($dataNilaiSiswa['bahasa_indonesia'] / $row['bahasa_indonesia'], 3) ?></td>
                                                                                <td><?= round($dataNilaiSiswa['bahasa_inggris'] / $row['bahasa_inggris'], 3) ?></td>
                                                                                <td><?= round($dataNilaiSiswa['mtk'] / $row['mtk'], 3) ?></td>
                                                                                <td><?= round($dataNilaiSiswa['ipa'] / $row['ipa'], 3) ?></td>
                                                                                <td><?= round($dataNilaiSiswa['ips'] / $row['ips'], 3) ?></td>
                                                                                <td><?= round($dataNilaiSiswa['ppkn'] / $row['ppkn'], 3) ?></td>
                                                                                <td><?= round($dataNilaiSiswa['tik'] / $row['tik'], 3) ?></td>
                                                                                <td><?= round($dataNilaiSiswa['seni'] / $row['seni'], 3) ?></td>
                                                                            </tr>
                                                                        <?php endforeach ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Normalisasi</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover text-center align-middle">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Kode</th>
                                                                            <th>Alternatif</th>
                                                                            <th>C1</th>
                                                                            <th>C2</th>
                                                                            <th>C3</th>
                                                                            <th>C4</th>
                                                                            <th>C5</th>
                                                                            <th>C6</th>
                                                                            <th>C7</th>
                                                                            <th>C8</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $no = 1; ?>
                                                                        <?php foreach ($queryStandar as $row) : ?>
                                                                            <tr>
                                                                                <td>A<?= $no++ ?></td>
                                                                                <td><?= $row['jurusan'] ?></td>
                                                                                <td><?= round($spk->Normalisasi($dataNilaiSiswa['bahasa_indonesia'], $row['bahasa_indonesia'], "bahasa_indonesia", $row['id_minat']), 4) ?></td>
                                                                                <td><?= round($spk->Normalisasi($dataNilaiSiswa['bahasa_inggris'], $row['bahasa_inggris'], "bahasa_inggris", $row['id_minat']), 4) ?></td>
                                                                                <td><?= round($spk->Normalisasi($dataNilaiSiswa['mtk'], $row['mtk'], "mtk", $row['id_minat']), 4) ?></td>
                                                                                <td><?= round($spk->Normalisasi($dataNilaiSiswa['ipa'], $row['ipa'], "ipa", $row['id_minat']), 4) ?></td>
                                                                                <td><?= round($spk->Normalisasi($dataNilaiSiswa['ips'], $row['ips'], "ips", $row['id_minat']), 4) ?></td>
                                                                                <td><?= round($spk->Normalisasi($dataNilaiSiswa['ppkn'], $row['ppkn'], "ppkn", $row['id_minat']), 4) ?></td>
                                                                                <td><?= round($spk->Normalisasi($dataNilaiSiswa['tik'], $row['tik'], "tik", $row['id_minat']), 4) ?></td>
                                                                                <td><?= round($spk->Normalisasi($dataNilaiSiswa['seni'], $row['seni'], "seni", $row['id_minat']), 4) ?></td>
                                                                            </tr>
                                                                        <?php endforeach ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Preference Vektor</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover text-center align-middle">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Kode</th>
                                                                            <th>Alternatif</th>
                                                                            <th>Total Nilai</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $no = 1; ?>
                                                                        <?php foreach ($queryStandar as $row) : ?>
                                                                            <tr>
                                                                                <td>A<?= $no++ ?></td>
                                                                                <td><?= $row['jurusan'] ?></td>
                                                                                <td><?= round($spk->Hasil($dataNilaiSiswa, $row), 5) ?></td>
                                                                            </tr>
                                                                        <?php endforeach ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Perangkingan</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover text-center align-middle">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Ranking</th>
                                                                            <th>Kode</th>
                                                                            <th>Alternatif</th>
                                                                            <th>Total Nilai</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $no = 1; ?>
                                                                        <?php foreach ($dataHasil as $row) : ?>
                                                                            <tr>
                                                                                <td><?= $no++ ?></td>
                                                                                <td><?= $row['kode'] ?></td>
                                                                                <td><?= $row['jurusan'] ?></td>
                                                                                <td><?= $row['total_nilai'] ?></td>
                                                                            </tr>
                                                                        <?php endforeach ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                    <?php endif ?>
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