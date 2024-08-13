<?php

$no = 0;

if (isset($_POST['cek'])) {
    # code...
    $periode = $_POST['periode'];

    $queryNilai = $crud->read(
        "nilai",
        "INNER JOIN siswa ON nilai.nisn = siswa.nisn
         WHERE siswa.periode = '$periode'
         ORDER BY nilai.nisn ASC"
    );

    if (mysqli_num_rows($queryNilai) > 1) {
        # code...
        $queryKriteria = $crud->read(
            "kriteria",
            "ORDER BY kode_kriteria ASC"
        );

        foreach ($queryNilai as $row) {
            # code...
            $nisn = $row['nisn'];
            $nama_siswa = $row['nama_siswa'];
            $total_nilai = round($spk->Hasil($row), 5);

            $dataHasil[] = [
                "nisn" => $nisn,
                "nama_siswa" => $nama_siswa,
                "total_nilai" => $total_nilai
            ];
        }

        usort($dataHasil, fn ($a, $b) => $b['total_nilai'] <=> $a['total_nilai']);
    }
}
