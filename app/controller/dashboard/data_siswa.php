<?php

$no = 1;
$querySiswa = $crud->read(
    "siswa",
    "INNER JOIN minat ON minat.id_minat = siswa.id_minat
     ORDER BY siswa.nisn ASC"
);

$queryMinat = $crud->read(
    "minat",
    "ORDER BY minat ASC"
);

if (isset($_POST['tambah'])) {
    # code...
    $cekDataSiswa = $crud->read(
        "siswa",
        "WHERE nisn = '$_POST[nisn]'"
    );

    if (mysqli_num_rows($cekDataSiswa) > 0) {
        # code...
        echo $fungsi->NotifRedirect(
            "Gagal Tambah Data Siswa",
            "Mohon maaf, NISN yang anda masukan sudah ada",
            "error",
            "?p=" . $page
        );
    } else {
        # code...
        $crud->create(
            "siswa",
            "nisn, id_minat, nama_siswa",
            "'$_POST[nisn]', '$_POST[id_minat]', '$_POST[nama_siswa]'"
        );

        echo $fungsi->Redirect("?p=" . $page);
    }
}

if (isset($_POST['edit'])) {
    # code...
    $crud->update(
        "siswa",
        "nama_siswa='$_POST[nama_siswa]', id_minat='$_POST[id_minat]'",
        "nisn = '$_POST[nisn]'"
    );

    echo $fungsi->Redirect("?p=" . $page);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "siswa",
        "nisn",
        $_POST['nisn']
    );

    $crud->delete(
        "nilai",
        "nisn",
        $_POST['nisn']
    );

    echo $fungsi->Redirect("?p=" . $page);
}
