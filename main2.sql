-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2022 pada 14.10
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisis`
--

CREATE TABLE `analisis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `bagian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `analisis`
--

INSERT INTO `analisis` (`id`, `nama`, `bagian`) VALUES
(1, 'steven', 'barang masuk'),
(4, 'jamal', 'barang masuk'),
(5, 'jamalludin', 'stok'),
(6, 'jamalludin', 'stok'),
(7, 'timothy', 'stok'),
(8, 'timothy simarmata', 'stok'),
(557877572, 'timothy sit', 'Manager2'),
(728895673, 'kristin ', ' manager'),
(839936343, ' iman', ' enginiier');

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `barang_disukai` varchar(50) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `favorites`
--

INSERT INTO `favorites` (`id`, `barang_disukai`, `harga`) VALUES
(1, 'kacamata', '210000'),
(158723277, 'tas ', ' 20000'),
(675141592, 'laptop ', ' 2450000'),
(741267371, 'jam ', ' 2300000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main2`
--

CREATE TABLE `main2` (
  `username` varchar(50) DEFAULT NULL,
  `password` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `datecreation` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `name`, `datecreation`, `status`, `username`) VALUES
(16, 'New Order', '2016-03-03', 0, 'acc2'),
(17, 'New Order', '2016-03-03', 0, 'acc2'),
(18, 'New Order', '2016-03-03', 0, 'acc2'),
(19, 'New Order', '2016-03-03', 0, 'acc2'),
(20, 'New Order', '2016-03-03', 0, 'acc2'),
(21, 'New Order', '2016-03-03', 0, 'acc2'),
(22, 'New Order', '2016-03-03', 0, 'acc2'),
(23, 'New Order', '2016-03-03', 0, 'acc2'),
(24, 'New Order', '2016-03-03', 0, 'acc2'),
(25, 'New Order', '2016-03-03', 0, 'acc2'),
(26, 'New Order', '2016-03-03', 0, 'acc2'),
(27, 'New Order', '2016-03-03', 0, 'acc2'),
(28, 'New Order', '2016-03-03', 0, 'acc2'),
(29, 'New Order', '2016-03-03', 0, 'acc2'),
(30, 'New Order', '2016-03-03', 0, 'acc2'),
(31, 'New Order', '2016-03-03', 0, 'acc2'),
(32, 'New Order', '2016-03-03', 0, 'acc2'),
(33, 'New Order', '2016-03-03', 0, 'acc2'),
(34, 'New Order', '2016-03-03', 0, 'acc2'),
(35, 'New Order', '2016-03-03', 0, 'acc2'),
(36, 'New Order', '2016-03-03', 0, 'acc2'),
(37, 'New Order', '2016-03-03', 0, 'acc2'),
(38, 'New Order', '2016-03-03', 0, 'acc2'),
(39, 'New Order', '2016-03-03', 0, 'acc2'),
(40, 'New Order', '2016-03-03', 0, 'acc2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetail`
--

CREATE TABLE `orderdetail` (
  `productid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderdetail`
--

INSERT INTO `orderdetail` (`productid`, `orderid`, `price`, `quantity`) VALUES
(1, 37, 100000, 3),
(2, 36, 200000, 1),
(3, 39, 300000, 4),
(4, 40, 400000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_list`
--

CREATE TABLE `order_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `datecreation` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_list`
--

INSERT INTO `order_list` (`id`, `name`, `datecreation`, `status`, `username`) VALUES
(17, 'New Order', '2016-03-03', 0, 'acc2'),
(18, 'New Order', '2016-03-03', 0, 'acc2'),
(19, 'New Order', '2016-03-03', 0, 'acc2'),
(20, 'New Order', '2016-03-03', 0, 'acc2'),
(21, 'New Order', '2016-03-03', 0, 'acc2'),
(22, 'New Order', '2016-03-03', 0, 'acc2'),
(23, 'New Order', '2016-03-03', 0, 'acc2'),
(24, 'New Order', '2016-03-03', 0, 'acc2'),
(25, 'New Order', '2016-03-03', 0, 'acc2'),
(27, 'New Order', '2016-03-03', 0, 'acc2'),
(28, 'New Order', '2016-03-03', 0, 'acc2'),
(29, 'New Order', '2016-03-03', 0, 'acc2'),
(30, 'New Order', '2016-03-03', 0, 'acc2'),
(31, 'New Order', '2016-03-03', 0, 'acc2'),
(32, 'sepatu', '2016-03-03', 90, 'udin pentol'),
(33, 'New Order', '2016-03-03', 0, 'acc2'),
(34, 'New Order', '2016-03-03', 0, 'acc2'),
(35, 'New Order', '2016-03-03', 0, 'acc2'),
(36, 'New Order', '2016-03-03', 0, 'acc2'),
(37, 'New Order', '2016-03-03', 0, 'acc2'),
(38, 'New Order', '2016-03-03', 0, 'acc2'),
(39, 'New Order', '2016-03-03', 0, 'acc2'),
(40, 'New Order', '2016-03-03', 0, 'acc2'),
(952013860, 'rokok ', '0000-00-00', 0, 'steven'),
(718337657, 'sepatu ', '0000-00-00', 90, 'jamaludin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(20) DEFAULT NULL,
  `jumlah_stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id`, `nama_barang`, `jumlah_stok`) VALUES
(2, 'cermin', 210),
(3, 'tas', 218),
(4, 'laptop', 18),
(5, 'hp', 8),
(6, 'kacamata', 200),
(7, 'charger', 200),
(8, 'charger hp', 200),
(9, 'pensil', 200),
(10, 'laci', 212),
(912824878, 'hijab ', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `total_order`
--

CREATE TABLE `total_order` (
  `id` int(11) NOT NULL,
  `nama_order` varchar(50) DEFAULT NULL,
  `jenis_order` varchar(50) DEFAULT NULL,
  `total_order` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `total_order`
--

INSERT INTO `total_order` (`id`, `nama_order`, `jenis_order`, `total_order`) VALUES
(700862755, 'steve', 'kotak', '100'),
(802286748, 'variq ', ' bungkus', '120'),
(869778520, 'syafrudin ', ' barang masak', '100');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `total_order`
--
ALTER TABLE `total_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=912824879;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
