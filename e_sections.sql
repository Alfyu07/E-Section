-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2021 pada 05.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_sections`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_soal`
--

CREATE TABLE `judul_soal` (
  `id_judul` int(11) NOT NULL,
  `id_role` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `judul_soal`
--

INSERT INTO `judul_soal` (`id_judul`, `id_role`, `judul`, `deskripsi`) VALUES
(35, 3, 'tes', 'satu'),
(36, 3, 'dua', 'tiga'),
(37, 36, '', ''),
(38, 3, 'dua lima', 'tiga'),
(39, 3, 'dua lima 9', 'tiga'),
(40, 4, 'iya', 'iya'),
(41, 4, 'iya lagi', 'iya'),
(42, 4, 'iya lagi lagi', 'iya'),
(43, 4, 'iya lagi lagi lagi', 'iya'),
(44, 4, 'iya lagi lagi lagi lagi', 'iya'),
(45, 4, 'hahaahahhah', 'okeee'),
(46, 4, 'hahaahahhah y', 'okeee'),
(47, 4, 'hahaahahhah y y', 'okeee'),
(48, 4, 'hahaahahhah y y y', 'okeee'),
(49, 4, 'hahaahahhah x', 'okeee'),
(50, 4, 'ya', 'ndk bisa'),
(51, 3, 'mulai', 'oyeah'),
(52, 4, 'baru', 'waw'),
(53, 4, 'baru ni', 'waw'),
(54, 4, 'baru ni looh', 'waw'),
(55, 4, 'baru ni loo', 'waw'),
(56, 4, 'baru ni loooo', 'waw'),
(57, 4, 'mui', 'miu'),
(58, 4, 'muiw', 'miu'),
(59, 4, 'miaow', 'miu'),
(60, 4, 'miaom', 'miu'),
(61, 4, 'kuceng', 'miu'),
(62, 4, 'tidur', 'subuh'),
(64, 4, 'Cici', 'ngantuk'),
(65, 4, 'Ciciw', 'ngantuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `id_role` int(1) NOT NULL,
  `judul` text NOT NULL,
  `source` text NOT NULL,
  `materi` text NOT NULL,
  `gambar` text NOT NULL,
  `fakta` text NOT NULL,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `id_role`, `judul`, `source`, `materi`, `gambar`, `fakta`, `tag`) VALUES
(17, 3, 'Judul meninggoy', 'Soiurce', 'Materi', 'gender.jpg', 'bangja tampan :)', 'tag/iniTag2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(3) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `hasil` int(3) NOT NULL,
  `tgl_tes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(1) NOT NULL,
  `nama_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'dewasa'),
(3, 'remaja'),
(4, 'anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_judul` int(3) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_judul`, `id_soal`, `pertanyaan`) VALUES
(57, 155, 'test'),
(57, 156, 'tast'),
(58, 157, 'hehe eheh'),
(64, 162, 'terakhir nyoba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `uname` varchar(20) NOT NULL,
  `avatar` text DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`uname`, `avatar`, `email`, `password`, `tgl_lahir`, `id_role`) VALUES
('admin', 'obama.jpg', 'admin@gmail.com', 'admin', '1999-09-09', 1),
('cici', 'cici.jpg', 'cici@gmail.com', 'cici', '2005-06-18', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `judul_soal`
--
ALTER TABLE `judul_soal`
  ADD PRIMARY KEY (`id_judul`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `judul_soal`
--
ALTER TABLE `judul_soal`
  MODIFY `id_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
