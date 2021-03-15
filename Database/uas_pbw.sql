-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2020 pada 13.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pbw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `jenis_asuransi` varchar(100) NOT NULL,
  `perusahaan_asuransi` varchar(100) NOT NULL,
  `tgl_pengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`nik`, `nama`, `jk`, `ttl`, `pekerjaan`, `alamat`, `no_hp`, `jenis_asuransi`, `perusahaan_asuransi`, `tgl_pengajuan`) VALUES
(3600092, ' Jenny Jenar', ' Perempuan', ' Jakarta, 13 Maret 1990', ' Pegawai Negeri Sipil', ' Bogor', ' 085880315824', ' Asuransi Mobil', ' Sinarmas', '2020-06-10'),
(36000314, ' Samosir Simorangkir', 'Laki-laki', ' Medan, 17 Februari 1985', 'Akuntan', 'Tangerang', ' 081290073472', ' Asuransi Properti', ' AXA Mandiri', '2020-06-10'),
(36000320, ' Mikaila Azzahra ', ' Perempuan ', 'Depok, 25 September 2000 ', ' Mahasiswa ', ' Jakarta ', ' 089762410902 ', ' Asuransi Pendidikan ', 'Prudential', '2020-06-10'),
(36000321, ' Kila Gina ', ' Perempuan ', ' Bekasi, 13 September 1989 ', ' Karyawan Swasta ', ' Bekasi ', ' 089765421323 ', ' Asuransi Jiwa ', 'BNI Life', '2020-06-10'),
(36000343, ' Hari Muhammad  ', ' Laki-laki  ', ' Bandung, 19 November 1978  ', ' Wirausaha  ', ' Jakarta  ', ' 082196540827 ', ' Asuransi Kesehatan  ', 'Manulife', '2020-06-10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
