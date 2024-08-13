<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body>
    <!-- Controller -->
    <?php include 'app/controller/dashboard/data_nilai.php' ?>
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
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">
                                        Tambah Data
                                    </button>

                                    <!-- Form Tambah Data -->
                                    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <label class="form-label">NISN || Nama Siswa</label>
                                                                <select class="form-control" name="nisn" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <?php foreach ($querySiswa as $rows) : ?>
                                                                        <?php $queryCekSiswa = $crud->read("nilai", "WHERE nisn = '$rows[nisn]'") ?>
                                                                        <option value="<?= $rows['nisn'] ?>" <?= mysqli_num_rows($queryCekSiswa) > 0 ? 'disabled' : '' ?>>
                                                                            <?= $rows['nisn'] ?> || <?= $rows['nama_siswa'] ?>
                                                                        </option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai Bahasa Indonesia</label>
                                                                <input type="number" class="form-control" name="bahasa_indonesia" step="any" required>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai Bahasa Inggris</label>
                                                                <input type="number" class="form-control" name="bahasa_inggris" step="any" required>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai MTK</label>
                                                                <input type="number" class="form-control" name="mtk" step="any" required>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai IPA</label>
                                                                <input type="number" class="form-control" name="ipa" step="any" required>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai IPS</label>
                                                                <input type="number" class="form-control" name="ips" step="any" required>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai PPKN</label>
                                                                <input type="number" class="form-control" name="ppkn" step="any" required>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai TIK</label>
                                                                <input type="number" class="form-control" name="tik" step="any" required>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai Seni</label>
                                                                <input type="number" class="form-control" name="seni" step="any" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- \Form Tambah Data -->
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-center align-middle">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NISN Siswa</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Bahasa Indonesia</th>
                                                    <th>Bahasa Inggris</th>
                                                    <th>MTK</th>
                                                    <th>IPA</th>
                                                    <th>IPS</th>
                                                    <th>PPKN</th>
                                                    <th>TIK</th>
                                                    <th>Seni</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($queryNilai as $row) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $row['nisn'] ?></td>
                                                        <td><?= $row['nama_siswa'] ?></td>
                                                        <td><?= $row['bahasa_indonesia'] ?></td>
                                                        <td><?= $row['bahasa_inggris'] ?></td>
                                                        <td><?= $row['mtk'] ?></td>
                                                        <td><?= $row['ipa'] ?></td>
                                                        <td><?= $row['ips'] ?></td>
                                                        <td><?= $row['ppkn'] ?></td>
                                                        <td><?= $row['tik'] ?></td>
                                                        <td><?= $row['seni'] ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $no ?>">
                                                                Edit
                                                            </button>
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $no ?>">
                                                                Hapus
                                                            </button>
                                                        </td>
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
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai Bahasa Indonesia</label>
                                                                                <input type="number" class="form-control" name="bahasa_indonesia" value="<?= $row['bahasa_indonesia'] ?>" step="any" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai Bahasa Inggris</label>
                                                                                <input type="number" class="form-control" name="bahasa_inggris" value="<?= $row['bahasa_inggris'] ?>" step="any" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai MTK</label>
                                                                                <input type="number" class="form-control" name="mtk" step="any" value="<?= $row['mtk'] ?>" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai IPA</label>
                                                                                <input type="number" class="form-control" name="ipa" step="any" value="<?= $row['ipa'] ?>" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai IPS</label>
                                                                                <input type="number" class="form-control" name="ips" step="any" value="<?= $row['ips'] ?>" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai PPKN</label>
                                                                                <input type="number" class="form-control" name="ppkn" step="any" value="<?= $row['ppkn'] ?>" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai TIK</label>
                                                                                <input type="number" class="form-control" name="tik" step="any" value="<?= $row['tik'] ?>" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai Seni</label>
                                                                                <input type="number" class="form-control" name="seni" step="any" value="<?= $row['seni'] ?>" required>
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