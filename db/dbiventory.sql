-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jan 2021 pada 05.25
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbiventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
`id` int(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_barang` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_barang`, `tanggal`, `jumlah_barang`) VALUES
(5, 'lakban', '2021-01-08', 23),
(6, 'kardus', '2021-01-07', 1000),
(7, 'kardus', '2021-01-07', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluar`
--

CREATE TABLE IF NOT EXISTS `tb_keluar` (
`id` int(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_barang` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tb_keluar`
--

INSERT INTO `tb_keluar` (`id`, `nama_barang`, `tanggal`, `jumlah_barang`) VALUES
(1, 'gayung', '2021-01-22', 34),
(4, 'pulpen', '2021-01-08', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_masuk` (
`id` int(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_barang` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_masuk`
--

INSERT INTO `tb_masuk` (`id`, `nama_barang`, `tanggal`, `jumlah_barang`) VALUES
(2, 'kardus', '2021-01-08', 23),
(3, 'lakban', '2021-01-15', 40),
(4, 'pulpen', '2021-01-07', 30),
(5, 'pepsoden', '2021-01-20', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stok`
--

CREATE TABLE IF NOT EXISTS `tb_stok` (
`id` int(10) NOT NULL,
  `nama_baju` varchar(20) NOT NULL,
  `ukuran_baju` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tb_stok`
--

INSERT INTO `tb_stok` (`id`, `nama_baju`, `ukuran_baju`, `tgl_masuk`, `tgl_keluar`) VALUES
(12, 'Batik Timur', 'L', '2020-12-03', '2020-12-11'),
(2, 'Batik Malang', 'S', '2020-12-11', '2020-12-25'),
(13, 'Batik Timur', 'XL', '2020-12-10', '2020-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'rnld@gmail.com', 'Rinaldi Siagian', 1, 'Kepala Bagian Gudang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_stok`
--
ALTER TABLE `tb_stok`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
