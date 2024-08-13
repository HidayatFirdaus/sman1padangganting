<?php

$no = 1;
$queryMinat = $crud->read(
    "minat",
    "ORDER BY minat ASC"
);

if (isset($_POST['tambah'])) {
    # code...
    $cekMinat = $crud->read(
        "minat",
        "WHERE minat = '$_POST[minat]'"
    );

    if (mysqli_num_rows($cekMinat) > 0) {
        # code...
        echo $fungsi->NotifRedirect(
            "Gagal Tambah Data",
            "Mohon maaf, Minat yang anda masukan sudah ada",
            "error",
            "?p=" . $page
        );
    } else {
        # code...
        $crud->create(
            "minat",
            "minat",
            "'$_POST[minat]'"
        );

        echo $fungsi->Redirect("?p=" . $page);
    }
}

if (isset($_POST['edit'])) {
    # code...
    $crud->update(
        "minat",
        "minat='$_POST[minat]'",
        "id_minat = '$_POST[id_minat]'"
    );

    echo $fungsi->Redirect("?p=" . $page);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "minat",
        "id_minat",
        $_POST['id_minat']
    );

    echo $fungsi->Redirect("?p=" . $page);
}
