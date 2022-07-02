-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 06.19
-- Versi server: 5.7.21-log
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_kepuasan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dimensi`
--

CREATE TABLE `dimensi` (
  `id_dimensi` int(11) NOT NULL,
  `nama_dimensi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dimensi`
--

INSERT INTO `dimensi` (`id_dimensi`, `nama_dimensi`) VALUES
(1, 'Kehandalan'),
(2, 'Daya Tanggap'),
(3, 'Jaminan'),
(4, 'Bukti Fisik'),
(5, 'Empati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_dimensi` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `id_dimensi`, `kriteria`) VALUES
(5, 1, 'Memberikan pelayanan yang tepat.'),
(6, 2, 'Petugas cepat tanggap dalam memberikan pelayanan.'),
(7, 3, 'Kesopanan petugas dalam memberikan pelayanan.'),
(8, 4, 'Fasilitas yang diberikan sangat baik. '),
(9, 5, 'Perhatian petugas kepada pengunjung. '),
(10, 3, 'Pelayanan yang diberikan sangat baik.'),
(11, 4, 'Apakah aku cantik/ganteng ?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_perusahaan`
--

CREATE TABLE `profil_perusahaan` (
  `id` int(1) NOT NULL,
  `sejarah` text NOT NULL,
  `fb` varchar(60) NOT NULL,
  `twitter` varchar(60) NOT NULL,
  `instagram` varchar(60) NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_perusahaan`
--

INSERT INTO `profil_perusahaan` (`id`, `sejarah`, `fb`, `twitter`, `instagram`, `kontak`) VALUES
(1, '<p align=\'justify\'>Sejarah berdirinya gua Sunyaragi memiliki dua buah versi, yang pertama adalah berita lisan tentang sejarah berdirinya Gua Sunyaragi yang disampaikan secara turun-temurun oleh para bangsawan Cirebon atau keturunan keraton. Versi tersebut lebih dikenal dengan sebutan versi Carub Kanda.</p>\r\n\r\n<p align=\'justify\'>Versi yang kedua adalah versi Caruban Nagari yaitu berdasarkan buku Purwaka Caruban Nagari tulisan tangan Pangeran Kararangen atau Pangeran Arya Carbon tahun 1720. Sejarah berdirinya gua Sunyaragi versi Caruban Nagari adalah yang digunakan sebagai acuan para pemandu wisata gua Sunyaragi. Menurut versi ini, Gua Sunyaragi didirikan tahun 1703 Masehi oleh Pangeran Kararangen, cicit Sunan Gunung Jati. Kompleks Sunyaragi lalu beberapa kali mengalami perombakan dan perbaikan.</p>\r\n\r\n<p align=\'justify\'>Menurut Caruban Kandha dan beberapa catatan dari Keraton Kasepuhan, Tamansari dibangun karena Pesanggrahan Giri Nur Sapta Rengga berubah fungsi menjadi tempat pemakaman raja-raja Cirebon, yang sekarang dikenal sebagai Astana Gunung Jati. Hal itu dihubungkan dengan perluasan Keraton Pakungwati (sekarang Keraton Kasepuhan Cirebon) yang terjadi pada tahun 1529 M, dengan pembangunan tembok keliling keraton, Siti Inggil, dan lain-lain. Sebagai data perbandingan, Siti Inggil dibangun dengan ditandai candrasengkala Benteng Tinataan Bata yang menunjuk angka tahun 1529 M.</p>\r\n', 'Gua Sunyaragi Cirebon', '@GuaSunyaragiCrb', '@Gua_Sunyaragi', '0231-1234567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei`
--

CREATE TABLE `survei` (
  `id_survei` varchar(256) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `umur` int(5) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kritik_saran` text NOT NULL,
  `tgl_survei` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survei`
--

INSERT INTO `survei` (`id_survei`, `nama_pelanggan`, `jk`, `umur`, `alamat`, `kritik_saran`, `tgl_survei`) VALUES
('100468175', 'Alif', 'L', 24, 'Tangerang', 'mantab gan', '2021-06-26 06:08:03'),
('1141215921', 'alif', 'L', 21, 'wkwk', '', '2021-06-14 04:37:18'),
('1224631672', 'er', 'L', 12, '123', '', '2021-06-27 09:54:51'),
('1288870403', 'silo', 'L', 23, 'Bogor', 'Sunyaragi the best', '2021-06-24 09:51:33'),
('1358475858', 'Amal', 'L', 30, 'Palembang', 'Oke', '2021-06-27 11:28:28'),
('1465071820', 'a', 'L', 21, 'wkwk', '', '2021-06-13 13:36:13'),
('157813755', 'Amal', 'L', 21, '', '', '2021-06-16 09:19:01'),
('1936347167', 'agung', 'L', 23, 'wkwk', '', '2021-06-14 04:31:33'),
('655557071', 'rangga', 'L', 23, 'wkwk', 'perbaiki fasilitasnya', '2021-06-14 13:20:22'),
('750515386', 'wkwk', 'L', 21, '', '', '2021-06-14 04:44:42'),
('774525195', 'sunyaragi', 'P', 23, 'cirebon', '', '2021-06-26 06:14:52'),
('875921346', 'Silo M', 'L', 21, 'Bogor', 'The best place in the world', '2021-06-27 10:05:17'),
('976652215', 'a', 'L', 1, 'a', '', '2021-06-13 13:38:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei_detail`
--

CREATE TABLE `survei_detail` (
  `id_detail` int(11) NOT NULL,
  `id_survei` varchar(256) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `skor_kinerja` int(1) NOT NULL,
  `skor_harapan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survei_detail`
--

INSERT INTO `survei_detail` (`id_detail`, `id_survei`, `id_kriteria`, `skor_kinerja`, `skor_harapan`) VALUES
(1, '1465071820', 5, 4, 10),
(2, '1465071820', 6, 4, 3),
(3, '1465071820', 7, 3, 2),
(4, '1465071820', 10, 5, 4),
(5, '1465071820', 8, 4, 3),
(6, '1465071820', 9, 5, 4),
(7, '976652215', 5, 3, 2),
(8, '976652215', 6, 1, 2),
(9, '976652215', 7, 3, 2),
(10, '976652215', 10, 1, 3),
(11, '976652215', 8, 3, 1),
(12, '976652215', 9, 1, 1),
(13, '1936347167', 5, 2, 1),
(14, '1936347167', 6, 1, 2),
(15, '1936347167', 7, 2, 1),
(16, '1936347167', 10, 1, 1),
(17, '1936347167', 8, 2, 1),
(18, '1936347167', 9, 1, 2),
(19, '1141215921', 5, 5, 3),
(20, '1141215921', 6, 2, 4),
(21, '1141215921', 7, 4, 2),
(22, '1141215921', 10, 1, 4),
(23, '1141215921', 8, 4, 2),
(24, '1141215921', 9, 1, 3),
(25, '750515386', 5, 2, 1),
(26, '750515386', 6, 5, 3),
(27, '750515386', 10, 2, 1),
(28, '750515386', 7, 3, 1),
(29, '750515386', 8, 1, 3),
(30, '750515386', 9, 3, 1),
(31, '655557071', 5, 5, 3),
(32, '655557071', 6, 2, 3),
(33, '655557071', 10, 1, 2),
(34, '655557071', 7, 2, 1),
(35, '655557071', 8, 2, 3),
(36, '655557071', 9, 3, 1),
(37, '157813755', 5, 5, 3),
(38, '157813755', 6, 2, 3),
(39, '157813755', 7, 4, 2),
(40, '157813755', 10, 1, 3),
(41, '157813755', 8, 4, 2),
(42, '157813755', 9, 3, 5),
(43, '1288870403', 5, 2, 3),
(44, '1288870403', 6, 2, 3),
(45, '1288870403', 7, 2, 3),
(46, '1288870403', 10, 2, 3),
(47, '1288870403', 11, 2, 3),
(48, '1288870403', 8, 2, 3),
(49, '1288870403', 9, 2, 3),
(50, '100468175', 5, 3, 2),
(51, '100468175', 6, 2, 3),
(52, '100468175', 7, 3, 1),
(53, '100468175', 10, 3, 1),
(54, '100468175', 11, 5, 1),
(55, '100468175', 8, 1, 2),
(56, '100468175', 9, 3, 1),
(57, '774525195', 5, 1, 2),
(58, '774525195', 6, 3, 2),
(59, '774525195', 7, 1, 3),
(60, '774525195', 10, 3, 2),
(61, '774525195', 11, 1, 3),
(62, '774525195', 8, 3, 1),
(63, '774525195', 9, 3, 3),
(64, '1224631672', 5, 5, 3),
(65, '1224631672', 6, 5, 3),
(66, '1224631672', 7, 4, 2),
(67, '1224631672', 10, 4, 2),
(68, '1224631672', 11, 1, 1),
(69, '1224631672', 8, 4, 2),
(70, '1224631672', 9, 1, 3),
(71, '875921346', 5, 5, 5),
(72, '875921346', 6, 4, 5),
(73, '875921346', 7, 4, 3),
(74, '875921346', 10, 3, 5),
(75, '875921346', 11, 4, 5),
(76, '875921346', 8, 5, 4),
(77, '875921346', 9, 4, 5),
(78, '1358475858', 5, 5, 2),
(79, '1358475858', 6, 4, 5),
(80, '1358475858', 7, 3, 3),
(81, '1358475858', 10, 4, 4),
(82, '1358475858', 11, 5, 4),
(83, '1358475858', 8, 3, 5),
(84, '1358475858', 9, 5, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_user`, `level`) VALUES
(1, 'admin', '$2y$10$WWwnNRftbYFPQx.dMopgkuuNb/RDTo4byN4sKcIWLwgf5gFLQEyWu', 'Administrator', 'Administrator'),
(2, 'direktur', '$2y$10$WWwnNRftbYFPQx.dMopgkuuNb/RDTo4byN4sKcIWLwgf5gFLQEyWu', 'Direktur', 'Direktur'),
(5, 'dewdew', '$2y$10$WBFRR.eXH.jmf6L/91hR0uZpI0dQu74t8VNFfi4Ezc4cuIFM3MfSS', 'Dewi', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dimensi`
--
ALTER TABLE `dimensi`
  ADD PRIMARY KEY (`id_dimensi`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id_survei`);

--
-- Indeks untuk tabel `survei_detail`
--
ALTER TABLE `survei_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dimensi`
--
ALTER TABLE `dimensi`
  MODIFY `id_dimensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `survei_detail`
--
ALTER TABLE `survei_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
