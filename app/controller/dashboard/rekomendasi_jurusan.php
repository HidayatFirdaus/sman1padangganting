<?php

$nisn = isset($_POST['nisn']) ? $_POST['nisn'] : '';

if (isset($_POST['cari'])) {
    # code...
    $no = 1;
    $err = false;

    $queryNilaiSiwa = $crud->read(
        "nilai",
        "INNER JOIN siswa ON siswa.nisn = nilai.nisn
         INNER JOIN minat ON minat.id_minat = siswa.id_minat
         WHERE nilai.nisn LIKE '%$nisn%'"
    );


    if (mysqli_num_rows($queryNilaiSiwa) < 1) {
        # code...
        $err = true;
    } else {

        $dataNilaiSiswa = mysqli_fetch_array($queryNilaiSiwa);
        $queryStandar = $crud->read(
            "standar_jurusan",
            "INNER JOIN jurusan ON jurusan.id_jurusan = standar_jurusan.id_jurusan
             INNER JOIN minat ON minat.id_minat = jurusan.id_minat
             WHERE jurusan.id_minat = '$dataNilaiSiswa[id_minat]'
             ORDER BY jurusan.jurusan ASC"
        );

        $noo = 1;
        foreach ($queryStandar as $data) {
            # code...
            $kode = "A" . $noo++;
            $jurusan = $data['jurusan'];
            $total_nilai = round($spk->Hasil($dataNilaiSiswa, $data), 5);

            $dataHasil[] = [
                "kode" => $kode,
                "jurusan" => $jurusan,
                "total_nilai" => $total_nilai
            ];
        }

        usort($dataHasil, fn ($a, $b) => $b['total_nilai'] <=> $a['total_nilai']);
    }
}
