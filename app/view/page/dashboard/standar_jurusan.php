<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body>
    <!-- Controller -->
    <?php include 'app/controller/dashboard/standar_jurusan.php' ?>
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
                                                                <label class="form-label">Jurusan || Aspek Minat</label>
                                                                <select class="form-control" name="id_jurusan" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <?php foreach ($queryJurusan as $rows) : ?>
                                                                        <?php $queryCekJurusan = $crud->read("standar_jurusan", "WHERE id_jurusan = '$rows[id_jurusan]'") ?>
                                                                        <option value="<?= $rows['id_jurusan'] ?>" <?= mysqli_num_rows($queryCekJurusan) > 0 ? 'disabled' : '' ?>>
                                                                            <?= $rows['jurusan'] ?> || <?= $rows['minat'] ?>
                                                                        </option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai Bahasa Indonesia</label>
                                                                <select name="bahasa_indonesia" class="form-control" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="90">Sangat Penting</option>
                                                                    <option value="80">Penting</option>
                                                                    <option value="70">Cukup Penting</option>
                                                                    <option value="60">Kurang Penting</option>
                                                                    <option value="50">Tidak Penting</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai Bahasa Inggris</label>
                                                                <select name="bahasa_inggris" class="form-control" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="90">Sangat Penting</option>
                                                                    <option value="80">Penting</option>
                                                                    <option value="70">Cukup Penting</option>
                                                                    <option value="60">Kurang Penting</option>
                                                                    <option value="50">Tidak Penting</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai MTK</label>
                                                                <select name="mtk" class="form-control" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="90">Sangat Penting</option>
                                                                    <option value="80">Penting</option>
                                                                    <option value="70">Cukup Penting</option>
                                                                    <option value="60">Kurang Penting</option>
                                                                    <option value="50">Tidak Penting</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai IPA</label>
                                                                <select name="ipa" class="form-control" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="90">Sangat Penting</option>
                                                                    <option value="80">Penting</option>
                                                                    <option value="70">Cukup Penting</option>
                                                                    <option value="60">Kurang Penting</option>
                                                                    <option value="50">Tidak Penting</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai IPS</label>
                                                                <select name="ips" class="form-control" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="90">Sangat Penting</option>
                                                                    <option value="80">Penting</option>
                                                                    <option value="70">Cukup Penting</option>
                                                                    <option value="60">Kurang Penting</option>
                                                                    <option value="50">Tidak Penting</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai PPKN</label>
                                                                <select name="ppkn" class="form-control" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="90">Sangat Penting</option>
                                                                    <option value="80">Penting</option>
                                                                    <option value="70">Cukup Penting</option>
                                                                    <option value="60">Kurang Penting</option>
                                                                    <option value="50">Tidak Penting</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai TIK</label>
                                                                <select name="tik" class="form-control" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="90">Sangat Penting</option>
                                                                    <option value="80">Penting</option>
                                                                    <option value="70">Cukup Penting</option>
                                                                    <option value="60">Kurang Penting</option>
                                                                    <option value="50">Tidak Penting</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nilai Seni</label>
                                                                <select name="seni" class="form-control" required>
                                                                    <option value="" disabled selected>Pilih</option>
                                                                    <option value="90">Sangat Penting</option>
                                                                    <option value="80">Penting</option>
                                                                    <option value="70">Cukup Penting</option>
                                                                    <option value="60">Kurang Penting</option>
                                                                    <option value="50">Tidak Penting</option>
                                                                </select>
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
                                                    <th>Nama Jurusan</th>
                                                    <th>Minat</th>
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
                                                <?php foreach ($queryStandar as $row) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $row['jurusan'] ?></td>
                                                        <td><?= $row['minat'] ?></td>
                                                        <td><?= $spk->Indikator($row['bahasa_indonesia']) ?></td>
                                                        <td><?= $spk->Indikator($row['bahasa_inggris']) ?></td>
                                                        <td><?= $spk->Indikator($row['mtk']) ?></td>
                                                        <td><?= $spk->Indikator($row['ipa']) ?></td>
                                                        <td><?= $spk->Indikator($row['ips']) ?></td>
                                                        <td><?= $spk->Indikator($row['ppkn']) ?></td>
                                                        <td><?= $spk->Indikator($row['tik']) ?></td>
                                                        <td><?= $spk->Indikator($row['seni']) ?></td>
                                                        <!-- <td><?= $no++ ?></td>
                                                        <td><?= $row['jurusan'] ?></td>
                                                        <td><?= $row['minat'] ?></td>
                                                        <td><?= $row['bahasa_indonesia'] ?></td>
                                                        <td><?= $row['bahasa_inggris'] ?></td>
                                                        <td><?= $row['mtk'] ?></td>
                                                        <td><?= $row['ipa'] ?></td>
                                                        <td><?= $row['ips'] ?></td>
                                                        <td><?= $row['ppkn'] ?></td>
                                                        <td><?= $row['tik'] ?></td>
                                                        <td><?= $row['seni'] ?></td> -->
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
                                                                                <label class="form-label">Jurusan || Aspek Minat</label>
                                                                                <input type="text" class="form-control" name="jurusan" value="<?= $row['jurusan'] ?> || <?= $row['minat'] ?>" readonly>
                                                                                <input type="hidden" name="id_jurusan" value="<?= $row['id_jurusan'] ?>" required>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai Bahasa Indonesia</label>
                                                                                <select name="bahasa_indonesia" class="form-control" required>
                                                                                    <option value="90" <?= $row['bahasa_indonesia'] == 90 ? 'selected' : '' ?>>Sangat Penting</option>
                                                                                    <option value="80" <?= $row['bahasa_indonesia'] == 80 ? 'selected' : '' ?>>Penting</option>
                                                                                    <option value="70" <?= $row['bahasa_indonesia'] == 70 ? 'selected' : '' ?>>Cukup Penting</option>
                                                                                    <option value="60" <?= $row['bahasa_indonesia'] == 60 ? 'selected' : '' ?>>Kurang Penting</option>
                                                                                    <option value="50" <?= $row['bahasa_indonesia'] == 50 ? 'selected' : '' ?>>Tidak Penting</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai Bahasa Inggris</label>
                                                                                <select name="bahasa_inggris" class="form-control" required>
                                                                                    <option value="90" <?= $row['bahasa_inggris'] == 90 ? 'selected' : '' ?>>Sangat Penting</option>
                                                                                    <option value="80" <?= $row['bahasa_inggris'] == 80 ? 'selected' : '' ?>>Penting</option>
                                                                                    <option value="70" <?= $row['bahasa_inggris'] == 70 ? 'selected' : '' ?>>Cukup Penting</option>
                                                                                    <option value="60" <?= $row['bahasa_inggris'] == 60 ? 'selected' : '' ?>>Kurang Penting</option>
                                                                                    <option value="50" <?= $row['bahasa_inggris'] == 50 ? 'selected' : '' ?>>Tidak Penting</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai MTK</label>
                                                                                <select name="mtk" class="form-control" required>
                                                                                    <option value="90" <?= $row['mtk'] == 90 ? 'selected' : '' ?>>Sangat Penting</option>
                                                                                    <option value="80" <?= $row['mtk'] == 80 ? 'selected' : '' ?>>Penting</option>
                                                                                    <option value="70" <?= $row['mtk'] == 70 ? 'selected' : '' ?>>Cukup Penting</option>
                                                                                    <option value="60" <?= $row['mtk'] == 60 ? 'selected' : '' ?>>Kurang Penting</option>
                                                                                    <option value="50" <?= $row['mtk'] == 50 ? 'selected' : '' ?>>Tidak Penting</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai IPA</label>
                                                                                <select name="ipa" class="form-control" required>
                                                                                    <option value="90" <?= $row['ipa'] == 90 ? 'selected' : '' ?>>Sangat Penting</option>
                                                                                    <option value="80" <?= $row['ipa'] == 80 ? 'selected' : '' ?>>Penting</option>
                                                                                    <option value="70" <?= $row['ipa'] == 70 ? 'selected' : '' ?>>Cukup Penting</option>
                                                                                    <option value="60" <?= $row['ipa'] == 60 ? 'selected' : '' ?>>Kurang Penting</option>
                                                                                    <option value="50" <?= $row['ipa'] == 50 ? 'selected' : '' ?>>Tidak Penting</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai IPS</label>
                                                                                <select name="ips" class="form-control" required>
                                                                                    <option value="90" <?= $row['ips'] == 90 ? 'selected' : '' ?>>Sangat Penting</option>
                                                                                    <option value="80" <?= $row['ips'] == 80 ? 'selected' : '' ?>>Penting</option>
                                                                                    <option value="70" <?= $row['ips'] == 70 ? 'selected' : '' ?>>Cukup Penting</option>
                                                                                    <option value="60" <?= $row['ips'] == 60 ? 'selected' : '' ?>>Kurang Penting</option>
                                                                                    <option value="50" <?= $row['ips'] == 50 ? 'selected' : '' ?>>Tidak Penting</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai PPKN</label>
                                                                                <select name="ppkn" class="form-control" required>
                                                                                    <option value="90" <?= $row['ppkn'] == 90 ? 'selected' : '' ?>>Sangat Penting</option>
                                                                                    <option value="80" <?= $row['ppkn'] == 80 ? 'selected' : '' ?>>Penting</option>
                                                                                    <option value="70" <?= $row['ppkn'] == 70 ? 'selected' : '' ?>>Cukup Penting</option>
                                                                                    <option value="60" <?= $row['ppkn'] == 60 ? 'selected' : '' ?>>Kurang Penting</option>
                                                                                    <option value="50" <?= $row['ppkn'] == 50 ? 'selected' : '' ?>>Tidak Penting</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai TIK</label>
                                                                                <select name="tik" class="form-control" required>
                                                                                    <option value="90" <?= $row['tik'] == 90 ? 'selected' : '' ?>>Sangat Penting</option>
                                                                                    <option value="80" <?= $row['tik'] == 80 ? 'selected' : '' ?>>Penting</option>
                                                                                    <option value="70" <?= $row['tik'] == 70 ? 'selected' : '' ?>>Cukup Penting</option>
                                                                                    <option value="60" <?= $row['tik'] == 60 ? 'selected' : '' ?>>Kurang Penting</option>
                                                                                    <option value="50" <?= $row['tik'] == 50 ? 'selected' : '' ?>>Tidak Penting</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-6 mb-3">
                                                                                <label class="form-label">Nilai Seni</label>
                                                                                <select name="seni" class="form-control" required>
                                                                                    <option value="90" <?= $row['seni'] == 90 ? 'selected' : '' ?>>Sangat Penting</option>
                                                                                    <option value="80" <?= $row['seni'] == 80 ? 'selected' : '' ?>>Penting</option>
                                                                                    <option value="70" <?= $row['seni'] == 70 ? 'selected' : '' ?>>Cukup Penting</option>
                                                                                    <option value="60" <?= $row['seni'] == 60 ? 'selected' : '' ?>>Kurang Penting</option>
                                                                                    <option value="50" <?= $row['seni'] == 50 ? 'selected' : '' ?>>Tidak Penting</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" name="edit" class="btn btn-warning">Edit</button>
                                                                            </div>
                                                                        </div>
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
                                                                        <input type="hidden" name="id_jurusan" value="<?= $row['id_jurusan'] ?>">
                                                                        <p>Yakin ingin hapus data dengan nama <b><?= $row['jurusan'] ?></b> ?</p>
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