<?php

$no = 1;
$queryJurusan = $crud->read(
    "jurusan",
    "INNER JOIN minat ON minat.id_minat = jurusan.id_minat
     ORDER BY minat.minat ASC"
);

$queryMinat = $crud->read(
    "minat",
    "ORDER BY minat ASC"
);

if (isset($_POST['tambah'])) {
    # code...
    $cekJurusan = $crud->read(
        "jurusan",
        "WHERE jurusan = '$_POST[jurusan]'"
    );

    if (mysqli_num_rows($cekJurusan) > 0) {
        # code...
        echo $fungsi->NotifRedirect(
            "Gagal Tambah Data",
            "Mohon maaf, jurusan yang anda masukan sudah ada",
            "error",
            "?p=" . $page
        );
    } else {
        # code...
        $crud->create(
            "jurusan",
            "id_minat, jurusan",
            "'$_POST[id_minat]', '$_POST[jurusan]'"
        );

        echo $fungsi->Redirect("?p=" . $page);
    }
}

if (isset($_POST['edit'])) {
    # code...
    $crud->update(
        "jurusan",
        "id_minat='$_POST[id_minat]', jurusan='$_POST[jurusan]'",
        "id_jurusan = '$_POST[id_jurusan]'"
    );

    echo $fungsi->Redirect("?p=" . $page);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "jurusan",
        "id_jurusan",
        $_POST['id_jurusan']
    );

    echo $fungsi->Redirect("?p=" . $page);
}
