<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body>
    <!-- Controller -->
    <?php include 'app/controller/dashboard/data_pengguna.php' ?>
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
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Username</label>
                                                                <input type="text" class="form-control" name="username" required>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Password</label>
                                                                <input type="text" class="form-control" name="password" required>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <label class="form-label">Nama Pengguna</label>
                                                                <input type="text" class="form-control" name="nama_pengguna" required>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <label class="form-label">Jabatan</label>
                                                                <select class="form-control" name="jabatan" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                                    <option value="Operator Sekolah">Operator Sekolah</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <label class="form-label">Foto Pengguna</label>
                                                                <input type="file" class="form-control" name="foto_pengguna" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button>
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
                                                    <th>Foto</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Nama Pengguna</th>
                                                    <th>Jabatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($queryPengguna as $row) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td>
                                                            <img src="assets/imgs/pengguna/<?= $row['foto_pengguna'] ?>" width="80" height="80" class="rounded-circle">
                                                        </td>
                                                        <td><?= $row['username'] ?></td>
                                                        <td><?= $row['password'] ?></td>
                                                        <td><?= $row['nama_pengguna'] ?></td>
                                                        <td><?= $row['jabatan'] ?></td>
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
                                                                        <input type="hidden" name="id_pengguna" value="<?= $row['id_pengguna'] ?>">
                                                                        <div class="row">
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Username</label>
                                                                                <input type="text" class="form-control" name="username" value="<?= $row['username'] ?>" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Password</label>
                                                                                <input type="text" class="form-control" name="password" value="<?= $row['password'] ?>" required>
                                                                            </div>
                                                                            <div class="col-12 mb-3">
                                                                                <label class="form-label">Nama Pengguna</label>
                                                                                <input type="text" class="form-control" name="nama_pengguna" value="<?= $row['nama_pengguna'] ?>" required>
                                                                            </div>
                                                                            <div class="col-12 mb-3">
                                                                                <label class="form-label">Jabatan</label>
                                                                                <select class="form-control" name="jabatan" required>
                                                                                    <option value="" disabled selected>Pilih</option>
                                                                                    <option value="Kepala Sekolah" <?= $row['jabatan'] == "Kepala Sekolah" ? 'selected' : '' ?>>Kepala Sekolah</option>
                                                                                    <option value="Operator Sekolah" <?= $row['jabatan'] == "Operator Sekolah" ? 'selected' : '' ?>>Operator Sekolah</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12 mb-3">
                                                                                <label class="form-label">Foto Pengguna (Opsional)</label>
                                                                                <input type="file" class="form-control" name="foto_pengguna">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="edit" class="btn btn-warning">Edit Data</button>
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
                                                                        <input type="hidden" name="id_pengguna" value="<?= $row['id_pengguna'] ?>">
                                                                        <p>Yakin ingin hapus data dengan nama <b><?= $row['nama_pengguna'] ?></b> ?</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="hapus" class="btn btn-danger">Hapus Data</button>
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