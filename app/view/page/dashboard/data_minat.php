<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body>
    <!-- Controller -->
    <?php include 'app/controller/dashboard/data_minat.php' ?>
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
                                                                <label class="form-label">Nama Minat</label>
                                                                <input type="text" class="form-control" name="minat" required>
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
                                                    <th>Nama Minat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($queryMinat as $row) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $row['minat'] ?></td>
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
                                                                        <input type="hidden" name="id_minat" value="<?= $row['id_minat'] ?>">
                                                                        <div class="row">
                                                                            <div class="col-12 mb-3">
                                                                                <label class="form-label">Nama Minat</label>
                                                                                <input type="text" class="form-control" name="minat" value="<?= $row['minat'] ?>" required>
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
                                                                        <input type="hidden" name="id_minat" value="<?= $row['id_minat'] ?>">
                                                                        <p>Yakin ingin hapus data dengan nama <b><?= $row['minat'] ?></b> ?</p>
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