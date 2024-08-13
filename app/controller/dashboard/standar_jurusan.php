<?php

$no = 1;
$queryStandar = $crud->read(
    "standar_jurusan",
    "INNER JOIN jurusan ON jurusan.id_jurusan = standar_jurusan.id_jurusan
     INNER JOIN minat ON minat.id_minat = jurusan.id_minat
     ORDER BY minat.minat ASC"
);

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
    $crud->create(
        "standar_jurusan",
        "id_jurusan, bahasa_indonesia, bahasa_inggris, mtk, ipa, ips, ppkn, tik, seni",
        "'$_POST[id_jurusan]', '$_POST[bahasa_indonesia]', '$_POST[bahasa_inggris]', '$_POST[mtk]', 
         '$_POST[ipa]', '$_POST[ips]', '$_POST[ppkn]', '$_POST[tik]', '$_POST[seni]'"
    );

    echo $fungsi->Redirect("?p=" . $page);
}

if (isset($_POST['edit'])) {
    # code...
    $crud->update(
        "standar_jurusan",
        "bahasa_indonesia='$_POST[bahasa_indonesia]', bahasa_inggris='$_POST[bahasa_inggris]', 
         mtk='$_POST[mtk]', ipa='$_POST[ipa]', ips='$_POST[ips]', ppkn='$_POST[ppkn]', tik='$_POST[tik]', 
         seni='$_POST[seni]'",
        "id_jurusan = '$_POST[id_jurusan]'"
    );

    echo $fungsi->Redirect("?p=" . $page);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "standar_jurusan",
        "id_jurusan",
        $_POST['id_jurusan']
    );

    echo $fungsi->Redirect("?p=" . $page);
}
