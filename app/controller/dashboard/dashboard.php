<?php

$queryPengguna = $crud->read(
    "pengguna",
    "ORDER BY jabatan ASC"
);

$querySiswa = $crud->read(
    "siswa",
    "ORDER BY nisn ASC"
);

$queryJurusan = $crud->read(
    "jurusan",
    "ORDER BY id_jurusan ASC"
);
