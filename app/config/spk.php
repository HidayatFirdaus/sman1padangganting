<?php

class SPK extends CRUD
{
    public function Normalisasi($nilaiSiswa, $nilaiJurusan, $c, $id_minat)
    {
        $nilai = $this->read(
            "standar_jurusan",
            "INNER JOIN jurusan ON jurusan.id_jurusan = standar_jurusan.id_jurusan
             INNER JOIN minat ON minat.id_minat = jurusan.id_minat
             WHERE jurusan.id_minat = '$id_minat'
             ORDER BY jurusan.jurusan ASC"
        );

        foreach ($nilai as $data) {
            $k[] = $nilaiSiswa / $data[$c];
        }

        $nilaiIndikator = $nilaiSiswa / $nilaiJurusan;
        $max = max($k);

        $hasil = $nilaiIndikator / $max;

        return $hasil;
    }

    public function Hasil($nilaiSiswa, $nilaiJurusan)
    {
        $c1 = $this->Normalisasi($nilaiSiswa['bahasa_indonesia'], $nilaiJurusan['bahasa_indonesia'], "bahasa_indonesia", $nilaiJurusan['id_minat']);
        $c2 = $this->Normalisasi($nilaiSiswa['bahasa_inggris'], $nilaiJurusan['bahasa_inggris'], "bahasa_inggris", $nilaiJurusan['id_minat']);
        $c3 = $this->Normalisasi($nilaiSiswa['mtk'], $nilaiJurusan['mtk'], "mtk", $nilaiJurusan['id_minat']);
        $c4 = $this->Normalisasi($nilaiSiswa['ipa'], $nilaiJurusan['ipa'], "ipa", $nilaiJurusan['id_minat']);
        $c5 = $this->Normalisasi($nilaiSiswa['ips'], $nilaiJurusan['ips'], "ips", $nilaiJurusan['id_minat']);
        $c6 = $this->Normalisasi($nilaiSiswa['ppkn'], $nilaiJurusan['ppkn'], "ppkn", $nilaiJurusan['id_minat']);
        $c7 = $this->Normalisasi($nilaiSiswa['tik'], $nilaiJurusan['tik'], "tik", $nilaiJurusan['id_minat']);
        $c8 = $this->Normalisasi($nilaiSiswa['seni'], $nilaiJurusan['seni'], "seni", $nilaiJurusan['id_minat']);

        $sumBobot = array_sum(
            [
                $nilaiJurusan['bahasa_indonesia'],
                $nilaiJurusan['bahasa_inggris'],
                $nilaiJurusan['mtk'],
                $nilaiJurusan['ipa'],
                $nilaiJurusan['ips'],
                $nilaiJurusan['ppkn'],
                $nilaiJurusan['tik'],
                $nilaiJurusan['seni']
            ]
        );

        $c1q1 = $c1 * ($nilaiJurusan['bahasa_indonesia'] / $sumBobot);
        $c2q1 = $c2 * ($nilaiJurusan['bahasa_inggris'] / $sumBobot);
        $c3q1 = $c3 * ($nilaiJurusan['mtk'] / $sumBobot);
        $c4q1 = $c4 * ($nilaiJurusan['ipa'] / $sumBobot);
        $c5q1 = $c5 * ($nilaiJurusan['ips'] / $sumBobot);
        $c6q1 = $c6 * ($nilaiJurusan['ppkn'] / $sumBobot);
        $c7q1 = $c7 * ($nilaiJurusan['tik'] / $sumBobot);
        $c8q1 = $c8 * ($nilaiJurusan['seni'] / $sumBobot);

        $c1q2 = pow($c1, $nilaiJurusan['bahasa_indonesia'] / $sumBobot);
        $c2q2 = pow($c2, $nilaiJurusan['bahasa_inggris'] / $sumBobot);
        $c3q2 = pow($c3, $nilaiJurusan['mtk'] / $sumBobot);
        $c4q2 = pow($c4, $nilaiJurusan['ipa'] / $sumBobot);
        $c5q2 = pow($c5, $nilaiJurusan['ips'] / $sumBobot);
        $c6q2 = pow($c6, $nilaiJurusan['ppkn'] / $sumBobot);
        $c7q2 = pow($c7, $nilaiJurusan['tik'] / $sumBobot);
        $c8q2 = pow($c8, $nilaiJurusan['seni'] / $sumBobot);

        $q1 = 0.5 * ($c1q1 + $c2q1 + $c3q1 + $c4q1 + $c5q1 + $c6q1 + $c7q1 + $c8q1);
        $q2 = 0.5 * ($c1q2 * $c2q2 * $c3q2 * $c4q2 * $c5q2 * $c6q2 * $c7q2 * $c8q2);

        $total =  $q1 + $q2;
        $hasil = $total;

        return $hasil;
    }

    public function Indikator($value)
    {
        if ($value == 90) {
            # code...
            $ket = "Sangat Penting";
        } elseif ($value == 80) {
            # code...
            $ket = "Penting";
        } elseif ($value == 70) {
            # code...
            $ket = "Cukup Penting";
        } elseif ($value == 60) {
            # code...
            $ket = "Kurang Penting";
        } elseif ($value == 50) {
            # code...
            $ket = "Tidak Penting";
        } else {
            # code...
            $ket = "-";
        }

        return $ket;
    }

    public function Rekomendasi($data, $col)
    {
        $queryNilaiSiwa = $this->read(
            "nilai",
            "INNER JOIN siswa ON siswa.nisn = nilai.nisn
             INNER JOIN minat ON minat.id_minat = siswa.id_minat
             WHERE nilai.nisn = '$data[nisn]' 
             ORDER BY nilai.nisn ASC"
        );

        $dataNilaiSiswa = mysqli_fetch_array($queryNilaiSiwa);

        $queryStandar = $this->read(
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
            $total_nilai = round($this->Hasil($dataNilaiSiswa, $data), 5);

            $dataHasil[] = [
                "kode" => $kode,
                "jurusan" => $jurusan,
                "total_nilai" => $total_nilai
            ];
        }

        usort($dataHasil, fn ($a, $b) => $b['total_nilai'] <=> $a['total_nilai']);

        return $dataHasil[0][$col];
    }
}
