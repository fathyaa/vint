-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2022 pada 11.36
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vint`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `product_photo1` varchar(100) NOT NULL,
  `product_photo2` varchar(100) NOT NULL,
  `product_photo3` varchar(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_size` varchar(11) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_condition` varchar(200) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_sold` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `user_name`, `product_photo1`, `product_photo2`, `product_photo3`, `product_title`, `product_desc`, `product_price`, `product_size`, `product_brand`, `product_condition`, `product_category`, `product_sold`) VALUES
(1, '1', 'fathyari', 'productimages/P1.jpg', 'productimages/P2.jpg', 'productimages/P3.jpg', 'Yellow Hoodie', 'Goooddd', '75000', 'M', 'The North Face', 'Second Good Quality', 'Sweater', 'no'),
(2, '1', 'fathyari', 'productimages/A1.jpg', 'productimages/A2.jpg', '', 'Creme Hoodie', 'Goooddd', '89000', 'M', 'The North Face', 'Second Good Quality', 'Sweater', 'no'),
(3, '1', 'fathyari', 'productimages/20200727_164804.jpg', 'productimages/20200727_165719.jpg', 'productimages/20200727_170205.jpg', 'Creme Hoodie', 'Goooddd', '89000', 'M', 'The North Face', 'Second Good Quality', 'Sweater', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` text NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_photo` varchar(255) NOT NULL,
  `user_bio` varchar(255) NOT NULL,
  `user_region` text NOT NULL,
  `user_reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_name`, `user_email`, `user_pass`, `user_photo`, `user_bio`, `user_region`, `user_reg_date`, `post`) VALUES
(1, 'Fathya Ariyani', 'fathyari', 'fathyariyani@gmail.com', '123', 'default-pp.png', 'n/a', 'n/a', '0000-00-00 00:00:00', 'no'),
(5, 'Natalia Devi', 'nataliadev', 'nadev@gmail.com', '$2y$10$GWhN/NGNor8b.sow3SrjGeOjKRBgxY9w2AtOpX42pZtCypFHmMBCW', 'default-pp.png', 'n/a', 'n/a', '0000-00-00 00:00:00', 'no'),
(9, 'Pemuda', 'qe', 'andy@gmail.com', '$2y$10$OzyLD2HVTpJWAh/IDbPAyeV2i557K91Kl1EWyRIUlNCvZL/ygP27W', 'default-pp.png', 'n/a', 'n/a', '0000-00-00 00:00:00', 'no');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
