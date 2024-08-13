<?php

$no = 1;
$querySiswa = $crud->read(
    "nilai",
    "INNER JOIN siswa ON siswa.nisn = nilai.nisn
     INNER JOIN minat ON minat.id_minat = siswa.id_minat
     ORDER BY siswa.nisn ASC"
);

$queryMinat = $crud->read(
    "minat",
    "ORDER BY minat ASC"
);
