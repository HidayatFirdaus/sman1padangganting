<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body style="background-color: #fff; font-family: 'Times New Roman', Times, serif;">
    <!-- Contoller -->
    <?php include 'app/controller/report/cetak_laporan.php' ?>
    <!-- \Controller -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-3 mt-2">
                <h2 class="text-uppercase text-center fw-bolder">
                    LAPORAN REKOMENDASI JURUSAN KULIAH PADA SISWA <br>
                    <?= $dataProject['project'] ?>
                </h2>
            </div>
            <div class="col-12 mb-5">
                <div>
                    <table class="table table-bordered text-center align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN Siswa</th>
                                <th>Nama Siswa</th>
                                <th>Minat Siswa</th>
                                <th>Rekomendasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($querySiswa as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nisn'] ?></td>
                                    <td><?= $row['nama_siswa'] ?></td>
                                    <td><?= $row['minat'] ?></td>
                                    <td><?= $spk->Rekomendasi($row, "jurusan") ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <div class="d-block">
                        <p>Padang, <?= $fungsi->TanggalIndo(date('Y-m-d')) ?></p>
                        <p style="margin-top: -15px;">Kepala Sekolah</p>
                        <br>
                        <br>
                        <br>
                        <p class="fw-bolder"><?= $dataKepala['nama_pengguna'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <?php include 'app/view/layout/script.php' ?>
    <script>
        window.print()
    </script>
    <!-- \Script -->
</body>

</html>