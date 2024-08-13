<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body>
    <!-- Controller -->
    <?php include 'app/controller/dashboard/laporan.php' ?>
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
                    <div class="row gx-3">
                        <div class="col-xl-12 col-sm-12 col-12">
                            <div class="card mb-3 grd-pearl">
                                <div class="card-header">
                                    <a href="?r=Laporan" target="_blank" class="btn btn-primary">
                                        Cetak Laporan
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-center align-middle">
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

                                                    <!-- Form Edit Data -->
                                                    <div class="modal fade" id="editModal<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <form method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Data</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-12 mb-3">
                                                                                <label class="form-label">NISN</label>
                                                                                <input type="text" class="form-control" name="nisn" value="<?= $row['nisn'] ?>" readonly>
                                                                            </div>
                                                                            <div class="col-12 mb-3">
                                                                                <label class="form-label">Nama Siswa</label>
                                                                                <input type="text" class="form-control" name="nama_siswa" value="<?= $row['nama_siswa'] ?>" required>
                                                                            </div>
                                                                            <div class="col-12 mb-3">
                                                                                <label class="form-label">Minat</label>
                                                                                <select class="form-control" name="id_minat" required>
                                                                                    <option value="" disabled selected>Pilih</option>
                                                                                    <?php foreach ($queryMinat as $rowm) : ?>
                                                                                        <option value="<?= $rowm['id_minat'] ?>" <?= $rowm['id_minat'] == $row['id_minat'] ? 'selected' : '' ?>><?= $rowm['minat'] ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="edit" class="btn btn-warning">Edit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- \Form Edit Data -->

                                                    <!-- Form Hapus Data -->
                                                    <div class="modal fade" id="hapusModal<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Hapus Data</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="nisn" value="<?= $row['nisn'] ?>">
                                                                        <p>Yakin ingin hapus data dengan nama <b><?= $row['nama_siswa'] ?></b> ?</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- \Form Hapus Data -->
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
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