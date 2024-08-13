<?php

$no = 1;
$queryNilai = $crud->read(
    "nilai",
    "INNER JOIN siswa ON siswa.nisn = nilai.nisn
     ORDER BY nilai.nisn ASC"
);

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
    $crud->create(
        "nilai",
        "nisn, bahasa_indonesia, bahasa_inggris, mtk, ipa, ips, ppkn, tik, seni",
        "'$_POST[nisn]', '$_POST[bahasa_indonesia]', '$_POST[bahasa_inggris]', '$_POST[mtk]', 
         '$_POST[ipa]', '$_POST[ips]', '$_POST[ppkn]', '$_POST[tik]', '$_POST[seni]'"
    );

    echo $fungsi->Redirect("?p=" . $page);
}

if (isset($_POST['edit'])) {
    # code...
    $crud->update(
        "nilai",
        "bahasa_indonesia='$_POST[bahasa_indonesia]', bahasa_inggris='$_POST[bahasa_inggris]', 
         mtk='$_POST[mtk]', ipa='$_POST[ipa]', ips='$_POST[ips]', ppkn='$_POST[ppkn]', tik='$_POST[tik]', 
         seni='$_POST[seni]'",
        "nisn = '$_POST[nisn]'"
    );

    echo $fungsi->Redirect("?p=" . $page);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "nilai",
        "nisn",
        $_POST['nisn']
    );

    echo $fungsi->Redirect("?p=" . $page);
}
