-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2024 pada 08.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sman1_padangganting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `id_minat` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `id_minat`, `jurusan`) VALUES
(5, 1, 'Teknik Informatika'),
(6, 3, 'Pendidikan Bahasa Indonesia'),
(7, 3, 'Pendidikan Bahasa Inggris'),
(8, 4, 'Senis Rupa'),
(9, 3, 'Pendidikan Fisika'),
(10, 6, 'Akuntansi'),
(11, 6, 'Ekonomi Pembangunan'),
(12, 6, 'Manajemen'),
(13, 7, 'Kesejahteraan Sosial'),
(14, 7, 'Sosiologi'),
(15, 11, 'Hukum Tata Negara'),
(16, 11, 'Hukum Administrasi Negara'),
(17, 3, 'Pendidikan Biologi'),
(18, 3, 'Pendidikan Kimia'),
(19, 1, 'Teknik Mesin'),
(20, 1, 'Teknik Sipil'),
(21, 11, 'Ilmu Politik'),
(22, 2, 'Farmasi'),
(23, 2, 'Kedokteran'),
(24, 2, 'Kesehatan Lingkungan'),
(25, 4, 'Sendratasik'),
(26, 2, 'Ilmu Gigi'),
(27, 2, 'Ilmu Keperawatan'),
(28, 2, 'Kebidanan'),
(29, 3, 'Bimbingan Konseling'),
(30, 7, 'Ilmu Geografi'),
(31, 4, 'Televisi Dan Film'),
(32, 4, 'Desain Komunikasi Visual'),
(33, 6, 'Kewirausahaan'),
(34, 1, 'Teknik Elektro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minat`
--

CREATE TABLE `minat` (
  `id_minat` int(11) NOT NULL,
  `minat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `minat`
--

INSERT INTO `minat` (`id_minat`, `minat`) VALUES
(1, 'Teknik'),
(2, 'Kesehatan'),
(3, 'Pendidikan'),
(4, 'Seni'),
(6, 'Ekonomi'),
(7, 'Sosial'),
(11, 'Hukum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `nisn` varchar(20) NOT NULL,
  `bahasa_indonesia` float NOT NULL,
  `bahasa_inggris` float NOT NULL,
  `mtk` float NOT NULL,
  `ipa` float NOT NULL,
  `ips` float NOT NULL,
  `ppkn` float NOT NULL,
  `tik` float NOT NULL,
  `seni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`nisn`, `bahasa_indonesia`, `bahasa_inggris`, `mtk`, `ipa`, `ips`, `ppkn`, `tik`, `seni`) VALUES
('0029117909', 90, 87, 88, 88, 90, 87, 90, 88),
('0031486544', 78, 82, 79, 79, 83, 80, 81, 79),
('0034580080', 80, 81, 80, 82, 82, 81, 81, 83),
('0043419020', 80, 82, 79, 81, 83, 84, 83, 80),
('0052079379', 89, 86, 87, 86, 87, 86, 89, 87),
('0052276873', 84, 82, 80, 74, 81, 80, 80, 81),
('0052529854', 89, 90, 89, 85, 90, 88, 90, 86),
('0053985616', 88, 84, 83, 82, 87, 86, 87, 86),
('0055057189', 87, 84, 87, 85, 86, 86, 87, 86),
('0056660238', 88, 87, 88, 86, 90, 87, 90, 87),
('0056878908', 83, 81, 78, 74, 82, 81, 83, 81),
('0057418312', 88, 89, 89, 86, 90, 87, 88, 87),
('0057748591', 89, 86, 86, 86, 89, 85, 89, 86),
('0058363527', 88, 86, 88, 86, 89, 87, 87, 85),
('0059362051', 90, 86, 88, 89, 89, 86, 88, 89),
('0061924354', 88, 85, 87, 85, 87, 86, 87, 87),
('0062622813', 89, 87, 89, 93, 90, 88, 91, 88),
('0063089856', 80, 81, 84, 82, 85, 82, 82, 84),
('0064413846', 87, 88, 87, 85, 88, 86, 89, 88),
('0064488324', 85, 82, 84, 82, 86, 82, 84, 86),
('0064569127', 91, 92, 89, 93, 92, 88, 92, 88),
('0065804199', 81, 85, 83, 84, 87, 84, 87, 85),
('0066585923', 90, 88, 89, 87, 90, 88, 90, 88),
('0067393852', 89, 86, 89, 86, 89, 87, 90, 86),
('0067974097', 85, 85, 85, 82, 85, 85, 86, 86),
('0069438005', 92, 89, 90, 93, 92, 89, 93, 91),
('0084142696', 90, 88, 89, 87, 89, 86, 91, 88),
('3051947785', 85, 84, 84, 84, 87, 85, 86, 87),
('9014554115', 89, 86, 89, 82, 87, 85, 88, 86),
('﻿0051487626', 84, 85, 86, 85, 87, 85, 86, 84);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `jabatan` enum('Kepala Sekolah','Operator Sekolah') NOT NULL,
  `foto_pengguna` text NOT NULL,
  `simpan_pengguna` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama_pengguna`, `jabatan`, `foto_pengguna`, `simpan_pengguna`) VALUES
(1, 'admin', 'admin', 'Aprilian Gevindo', 'Operator Sekolah', 'Aprilian Gevindo097346900_1443162687-tut_wuri.jpg', '2024-07-16 14:48:37'),
(5, 'root', 'root', 'Si Anu', 'Kepala Sekolah', 'Si AnuGenesis.png', '2024-07-16 14:47:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(15) NOT NULL,
  `id_minat` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `id_minat`, `nama_siswa`) VALUES
('0029117909', 11, 'Hamida Putri'),
('0031486544', 3, 'Andi Suhandi'),
('0034580080', 3, 'Divo Kristi Ramadhan'),
('0043419020', 2, 'Ramda Diki Andrianto'),
('0052079379', 2, 'Azizah Chairani'),
('0052276873', 1, 'Farid Alfaros'),
('0052529854', 6, 'Zikra Illahi'),
('0053985616', 4, 'Salsa Nabila Putri'),
('0055057189', 7, 'Aural Diva Inayah'),
('0056660238', 2, 'Dea Amelia Putri'),
('0056878908', 4, 'Ariel Tampeti'),
('0057418312', 6, 'Alya Ramadhani'),
('0057748591', 11, 'Indah Astari'),
('0058363527', 11, 'Yandana'),
('0059362051', 3, 'Rahayu Amelia'),
('0061924354', 4, 'Lutvia Mutmaina'),
('0062622813', 2, 'Chelsea Verano Putri'),
('0063089856', 1, 'Dwiki Zuendra'),
('0064413846', 2, 'Besta Rahmatika Hayyu'),
('0064488324', 6, 'Fadhil Efendi'),
('0064569127', 1, 'Dzihni Nabilah Yosfi'),
('0065804199', 1, 'Toriq Rafarel'),
('0066585923', 6, 'Zalma Hasana Putri'),
('0067393852', 4, 'Sarmila Vesti Ananta'),
('0067974097', 2, 'Dhina Zhataniza'),
('0069438005', 3, 'Nabila Hidayah'),
('0084142696', 11, 'Hanifah Putri Dahmy'),
('3051947785', 7, 'Muhamad Abel Albo'),
('9014554115', 6, 'Zhaskya'),
('﻿0051487626', 1, 'Ahmad Yusrahman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `standar_jurusan`
--

CREATE TABLE `standar_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `bahasa_indonesia` float NOT NULL,
  `bahasa_inggris` float NOT NULL,
  `mtk` float NOT NULL,
  `ipa` float NOT NULL,
  `ips` float NOT NULL,
  `ppkn` float NOT NULL,
  `tik` float NOT NULL,
  `seni` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `standar_jurusan`
--

INSERT INTO `standar_jurusan` (`id_jurusan`, `bahasa_indonesia`, `bahasa_inggris`, `mtk`, `ipa`, `ips`, `ppkn`, `tik`, `seni`) VALUES
(5, 70, 80, 90, 80, 80, 60, 90, 70),
(6, 90, 80, 70, 70, 70, 80, 70, 60),
(7, 80, 90, 70, 70, 70, 70, 60, 60),
(8, 80, 80, 70, 70, 80, 60, 60, 90),
(9, 70, 80, 80, 90, 70, 60, 60, 60),
(10, 70, 70, 80, 70, 90, 60, 80, 60),
(11, 70, 70, 80, 70, 90, 70, 70, 60),
(12, 70, 70, 80, 70, 90, 60, 70, 60),
(13, 90, 80, 70, 70, 90, 80, 60, 60),
(14, 80, 70, 70, 70, 90, 80, 60, 60),
(15, 80, 80, 70, 70, 70, 90, 70, 60),
(16, 70, 70, 80, 70, 70, 90, 80, 60),
(17, 70, 80, 80, 90, 70, 60, 60, 60),
(18, 70, 80, 80, 90, 70, 60, 60, 60),
(19, 70, 70, 80, 80, 70, 60, 70, 60),
(20, 70, 70, 80, 80, 70, 70, 80, 80),
(21, 80, 80, 80, 70, 70, 90, 70, 60),
(22, 70, 80, 80, 90, 60, 60, 70, 60),
(23, 80, 80, 80, 90, 70, 70, 70, 60),
(24, 80, 70, 80, 90, 70, 70, 70, 60),
(25, 80, 80, 70, 70, 70, 70, 60, 90),
(26, 70, 80, 80, 90, 70, 60, 70, 60),
(27, 80, 70, 80, 90, 70, 60, 60, 60),
(28, 80, 70, 80, 90, 80, 70, 60, 60),
(29, 70, 70, 70, 80, 90, 80, 60, 60),
(30, 70, 80, 70, 70, 90, 70, 60, 60),
(31, 80, 80, 70, 70, 80, 60, 80, 90),
(32, 80, 80, 70, 70, 70, 60, 90, 90),
(33, 80, 70, 80, 70, 90, 70, 70, 60),
(34, 70, 80, 80, 80, 70, 60, 70, 70);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `minat`
--
ALTER TABLE `minat`
  ADD PRIMARY KEY (`id_minat`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `standar_jurusan`
--
ALTER TABLE `standar_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `minat`
--
ALTER TABLE `minat`
  MODIFY `id_minat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
