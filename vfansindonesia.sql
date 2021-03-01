-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2021 pada 07.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vfansindonesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendaftar`
--

CREATE TABLE `data_pendaftar` (
  `id_anggota` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pendaftar`
--

INSERT INTO `data_pendaftar` (`id_anggota`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `username`, `email`, `password`) VALUES
(202101, 'Selfiana Lestari', 'Bekasi', '1999-12-03', 'Perempuan', 'Kebumen, Jawa Tengah', '083862440525', 'selfiana04', 'selfianalestari04@gmail.com', 'e236d9d59cc35b931a9ea37e9c763f18bfb0ae77'),
(202102, 'Safira Safana', 'Bandung', '1999-10-15', 'Perempuan', 'Bandung, Jawa Barat', '087723923834', 'safira15', 'safira01@gmail.com', '811eb839bb7edb263a1b7be2c2ace7fbdf552636'),
(202103, 'Ruken Cahyadi', 'Surabaya', '2000-02-10', 'Laki-Laki', 'Surabaya, Jawa Timur', '089862543675', 'ruken10', 'rukencahyadi01@gmail.com', 'db0db48e7a5d68c91c3ccfe5e742bdd1e6577772'),
(202104, 'Rizky Zayn', 'Jatinegara', '1997-03-13', 'Laki-Laki', 'Jatinegara, Jakarta Timur', '085682652387', 'rizky13', 'rizkyzayn01@gmail.com', '68f851f539154d10fcc5f3be266af9175681a665'),
(202105, 'Alessa Daguise', 'Medan', '2001-06-23', 'Perempuan', 'Medan, Sumatera Utara', '082374875632', 'alessa23', 'alessadaguise01@gmail.com', '08e3307d176e814aa159910930d0054234aa77d1'),
(202107, '', '', '0000-00-00', '', 'Cimahi', '', 'sani12', '', 'sani13'),
(202108, '', '', '0000-00-00', '', 'Subang', '', 'yuli09', '', 'yuli11'),
(202109, 'Ujang Mulyana', 'Sumedang', '2021-02-18', 'Laki-Laki', 'Sumedang', '08738998333', 'ujang11', 'ujang@gmail.com', 'ujang15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
