<?php

if (isset($_SESSION['login_dayat']) == true) {
    # code...
    $jabatan = $_SESSION['jabatan'];
    $id_pengguna = $_SESSION['id_pengguna'];

    $dataPengguna = mysqli_fetch_array(
        $crud->read(
            "pengguna",
            "WHERE id_pengguna = '$id_pengguna'"
        )
    );

    if ($page == "Dashboard") {
        # code...
        $dataPage = [
            "panel" => "Home",
            "page" => "Dashboard"
        ];

        include 'app/view/page/dashboard/dashboard.php';
    } elseif ($page == "Logout") {
        # code...
        session_destroy();
        echo $fungsi->Redirect('?a=Login');
    } elseif ($page == "DataPengguna") {
        # code...
        $dataPage = [
            "panel" => "Data",
            "page" => "Data Pengguna"
        ];

        include 'app/view/page/dashboard/data_pengguna.php';
    } elseif ($page == "DataMinat") {
        # code...
        $dataPage = [
            "panel" => "Data",
            "page" => "Data Minat Jurusan"
        ];

        include 'app/view/page/dashboard/data_minat.php';
    } elseif ($page == "DataSiswa") {
        # code...
        $dataPage = [
            "panel" => "Data",
            "page" => "Data Siswa"
        ];

        include 'app/view/page/dashboard/data_siswa.php';
    } elseif ($page == "DataNilai") {
        # code...
        $dataPage = [
            "panel" => "Data",
            "page" => "Data Nilai Siswa"
        ];

        include 'app/view/page/dashboard/data_nilai.php';
    } elseif ($page == "DataJurusan") {
        # code...
        $dataPage = [
            "panel" => "Data",
            "page" => "Data Jurusan"
        ];

        include 'app/view/page/dashboard/data_jurusan.php';
    } elseif ($page == "StandarJurusan") {
        # code...
        $dataPage = [
            "panel" => "Data",
            "page" => "Indikator Penilaian Jurusan"
        ];

        include 'app/view/page/dashboard/standar_jurusan.php';
    } elseif ($page == "Rekomendasi") {
        # code...
        $dataPage = [
            "panel" => "Data",
            "page" => "Rekomendasi Jurusan Siswa Menggunakan Metode WASPAS"
        ];

        include 'app/view/page/dashboard/rekomendasi_jurusan.php';
    } elseif ($page == "Kriteria") {
        # code...
        $dataPage = [
            "panel" => "SPK",
            "page" => "Kriteria"
        ];

        include 'app/view/page/dashboard/spk_kriteria.php';
    } elseif ($page == "Waspas") {
        # code...
        $dataPage = [
            "panel" => "SPK",
            "page" => "Perhitungan Metode WASPAS"
        ];

        include 'app/view/page/dashboard/spk_waspas.php';
    } elseif ($page == "Hasil") {
        # code...
        $dataPage = [
            "panel" => "SPK",
            "page" => "Hasil Perhitungan Metode WASPAS"
        ];

        include 'app/view/page/dashboard/spk_hasil.php';
    } elseif ($page == "DataKeputusan") {
        # code...
        $dataPage = [
            "panel" => "Data",
            "page" => "Data Keputusan"
        ];

        include 'app/view/page/dashboard/data_keputusan.php';
    } elseif ($page == "Laporan") {
        # code...
        $dataPage = [
            "panel" => "Laporan",
            "page" => "Laporan Rekomendasi Jurusan Kuliah Pada Siswa"
        ];

        include 'app/view/page/dashboard/laporan.php';
    } else {
        # code...
        echo $fungsi->Redirect('?p=Dashboard');
    }
} else {
    # code...
    echo $fungsi->Redirect('?a=Login');
}
