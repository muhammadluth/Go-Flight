-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2019 pada 15.52
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_booktravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('l','p','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `email`, `gender`) VALUES
(264, 'Muhammad Luthfi', 'Purwokerto', '1234', 'aku@gmail.com', 'l'),
(265, 'Bojone', 'Purwokerto', '08123', 'bojone@gmail.com', 'p'),
(266, 'Aku', 'Pluto', '2222', 'aku@gmail.com', 'l'),
(270, 'Manusia', 'Bumi', '12345', 'manusia@gmail.com', 'l'),
(271, 'Orang', 'Bumi', '123', 'orang@gmail.com', 'p'),
(272, 'Pra', 'Bumi', '1234', 'pria@gmail.com', 'l'),
(273, 'Wanita', 'Bumi', '123456', 'wanita@gmail.com', 'p'),
(274, 'fu', 'uyfui', '00', 'asa@gmail.com', 'l'),
(275, 'vj', 'jj', '00', 'manusia@gmail.com', 'l'),
(276, 'user 1', 'semarang', '088888888', 'user@gmail.com', 'l'),
(277, 'user2', 'semarang', '08999999', 'user2@gmail.com', 'p'),
(278, 'e5sdrtfgyuh9i', '6f7gy8uh9ij', '12345678', 'user@gmail.com', 'l');

-- --------------------------------------------------------

--
-- Struktur dari tabel `passengers`
--

CREATE TABLE `passengers` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `reservation_id` int(10) DEFAULT NULL,
  `seat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `passengers`
--

INSERT INTO `passengers` (`id`, `customer_id`, `reservation_id`, `seat`) VALUES
(122, 264, 125, 27),
(123, 265, 125, 28),
(124, 266, 126, 30),
(125, NULL, NULL, 0),
(126, NULL, NULL, 2),
(127, NULL, NULL, 1),
(128, 270, 130, 1),
(129, 271, 130, 2),
(130, 272, 130, 3),
(131, 273, 130, 4),
(132, 274, 131, 0),
(133, 275, 132, 0),
(134, 276, 133, 3),
(135, 277, 133, 4),
(136, 278, 134, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `reservation_code` varchar(8) NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) DEFAULT NULL,
  `rute_id` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `proof_of_payment` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_date`, `user_id`, `rute_id`, `status`, `proof_of_payment`) VALUES
(125, 'DP54439', '2019-04-21 07:14:28', 1261, 11, 1, NULL),
(126, 'DP52638', '2019-04-21 11:21:52', 1261, 11, 0, NULL),
(130, 'DP70760', '2019-04-22 17:02:25', 1264, 11, 1, NULL),
(131, 'DP26648', '2019-04-23 16:18:21', 1261, 11, 0, NULL),
(132, 'DP85852', '2019-04-23 16:20:53', 1261, 11, 0, NULL),
(133, 'DP17231', '2019-06-01 19:17:04', 1265, 20, 0, '2b2955303537c29d5eb0c9f7716e6d0157a040b92b30a9d423fbca748432f04e.png'),
(134, 'DP53087', '2019-07-18 04:43:57', 1266, 11, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(10) NOT NULL,
  `depart` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `arrive` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rute_from` varchar(50) NOT NULL,
  `rute_to` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `class` enum('First','Economy') NOT NULL,
  `transportation_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `depart`, `arrive`, `rute_from`, `rute_to`, `price`, `class`, `transportation_id`) VALUES
(11, '2019-04-13 23:33:48', '2019-04-20 18:23:04', 'Yogyakarta', 'Jakarta', 565000, 'First', 9),
(12, '2019-04-15 11:54:37', '2019-04-17 20:00:00', 'Bali', 'Palangkaraya', 700000, 'First', 10),
(14, '2019-04-14 03:20:00', '2019-04-14 10:00:00', 'Yogyakarta', 'Jakarta', 480000, 'Economy', 9),
(15, '2019-04-15 11:55:08', '2019-04-14 11:00:00', 'Bali', 'Palangkaraya', 630000, 'Economy', 10),
(16, '2019-04-16 01:00:00', '2019-04-16 08:00:00', 'Kalimantan', 'Surabaya', 500000, 'Economy', 9),
(17, '2019-04-16 03:00:00', '2019-04-16 10:00:00', 'Kalimantan', 'Surabaya', 600000, 'First', 9),
(18, '2019-04-15 11:35:47', '2019-04-15 05:00:00', 'Semarang', 'Aceh', 500000, 'Economy', 10),
(19, '2019-04-15 11:35:57', '2019-04-15 10:00:00', 'Semarang', 'Aceh', 625000, 'First', 10),
(20, '2019-06-02 19:07:52', '2019-06-03 19:07:58', 'Semarang', 'Jeddah', 25000000, 'First', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(20) NOT NULL,
  `nama` int(20) NOT NULL,
  `description` int(60) NOT NULL,
  `reservation_date` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id` int(10) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` varchar(10) NOT NULL,
  `transportation_typeid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`, `transportation_typeid`) VALUES
(9, 'VS7ZDR6 - Lion Air', 'Boeing', '75', 0),
(10, 'VS7ZDF9 - Batik Air', 'Garuda Indonesia', '65', 0),
(11, 'VS7ZDF7 - Boeing Air', 'Boeing ', '70', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation_type`
--

CREATE TABLE `transportation_type` (
  `id` int(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation_type`
--

INSERT INTO `transportation_type` (`id`, `description`) VALUES
(0, 'Boeing'),
(1, 'Airbus'),
(2, 'Bombadier'),
(3, 'ATR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `password`, `level`) VALUES
(1259, 'petugas', 'Muhammad Luthfi', '$2y$10$vqWgUS9fvNdQMDSXpm6ymuAXXssJqOuoBSbtDK8.98IgRVoCd3XRa', 2),
(1261, 'muhammad18', 'Muhammad Luthfi', '$2y$10$4dnCDXF3DKJrmBt03z/sr.ePTIhgri7lnZElFsKKDfQRbnlxTCeDu', 1),
(1262, 'MLuthfi', 'Muhammad Luthfi', '$2y$10$ihbCzel3ArWZJOFaWcKKC.UnNF7g7qruMH4kXPB43w3zJQDmKyh1O', 3),
(1264, 'manusia', 'Manusia', '$2y$10$5kiyKhE6ydaK85CEjQApDOOQ5fe/.UA4YZhUXmypoxPXDhDT80yrK', 1),
(1265, 'user1', 'User Add', '$2y$10$.kXafgdql1V2YlbqSh/ri.mCR1KHk9L6f9r/y/2r/KxvWY/p7DZVS', 1),
(1266, 'user4', 'Anjing', '$2y$10$bYAXQkbP77EL.ow1H9iHau43gVJEGUjIZVhyo6QfErjefxAC1ND.i', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `passengers_ibfk_2` (`reservation_id`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rute_id` (`rute_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_id` (`transportation_id`);

--
-- Indeks untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_typeid` (`transportation_typeid`);

--
-- Indeks untuk tabel `transportation_type`
--
ALTER TABLE `transportation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT untuk tabel `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1267;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `passengers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`rute_id`) REFERENCES `rute` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`transportation_id`) REFERENCES `transportation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD CONSTRAINT `transportation_ibfk_1` FOREIGN KEY (`transportation_typeid`) REFERENCES `transportation_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
