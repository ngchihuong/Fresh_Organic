-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8081
-- Generation Time: Jan 12, 2024 at 03:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fresh_organic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `category_id` int(11) NOT NULL,
  `category_name` tinytext NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`category_id`, `category_name`, `active`) VALUES
(1, 'Rau', 1),
(2, 'Củ', 1),
(3, 'Quả', 1),
(4, 'Thịt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` char(20) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id`, `name`, `email`, `password`, `address`, `phone_number`, `permission`) VALUES
(1, 'huy', 'huy@gmail.com', 'huy', 'hn', '0123456789', 0),
(5, 'huy', 'huy4@gmail.com', '123', 'hn', '0987654321', 0),
(6, 'admin', 'admin@gmail.com', 'admin', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` char(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cus_id`, `receiver_name`, `address`, `phone`, `created_at`, `total`, `status`) VALUES
(28, 1, 'huy', 'hn', '0123456789', '2023-11-12 18:22:03', 115000, 2),
(29, 1, 'huy', 'tầng 18 địa ngục', '0123456789', '2023-11-12 21:07:49', 225000, 2),
(30, 1, 'huy', 'hn', '0123456789', '2024-01-11 16:04:31', 100000, 2),
(31, 1, 'huy', 'hn', '0123456789', '2024-01-11 16:03:53', 25000, 1),
(32, 1, 'huy', 'hn', '0123456789', '2023-11-09 04:35:29', 48000, 0),
(33, 1, 'huy', 'hn', '0123456789', '2023-11-12 16:25:54', 28000, 0),
(34, 1, 'huy', 'hn', '0123456789', '2023-11-12 17:53:53', 108000, 0),
(35, 1, 'huy', 'hn', '0123456789', '2023-11-12 21:06:51', 18000, 0),
(36, 1, 'huy', 'hn', '0123456789', '2023-11-12 21:08:22', 25000, 0),
(38, 1, 'huy', 'hn', '0123456789', '2024-01-12 12:24:12', 18000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_product`
--

CREATE TABLE `tbl_order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order_product`
--

INSERT INTO `tbl_order_product` (`order_id`, `product_id`, `quantity`, `price`) VALUES
(28, 6, 3, 75000),
(28, 5, 2, 40000),
(29, 6, 9, 225000),
(30, 6, 4, 100000),
(31, 6, 1, 25000),
(32, 2, 4, 48000),
(33, 3, 4, 28000),
(34, 10, 6, 108000),
(35, 10, 1, 18000),
(36, 6, 1, 25000),
(38, 10, 1, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `detail` text NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`product_id`, `category_id`, `product_image`, `product_name`, `product_price`, `detail`, `product_quantity`, `active`) VALUES
(1, 1, 'cachua.png', 'Cà chua', 10000, 'chưa có', 10, 1),
(2, 3, 'chuoi.png', 'Chuối', 12000, 'chưa có', 10, 1),
(3, 1, 'dau.png', 'Đậu', 7000, 'chưa có', 10, 1),
(4, 1, 'duachuot.png', 'Dưa chuột', 6000, 'chưa có', 10, 1),
(5, 3, 'duahau.png', 'Dưa hấu', 20000, 'chưa có', 10, 1),
(6, 3, 'vai.png', 'Vải', 25000, 'chưa có', 10, 1),
(10, 3, 'dua(thom).png', 'Dứa', 18000, 'chưa có', 14, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `tbl_order_product`
--
ALTER TABLE `tbl_order_product`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `tbl_khachhang` (`id`);

--
-- Constraints for table `tbl_order_product`
--
ALTER TABLE `tbl_order_product`
  ADD CONSTRAINT `tbl_order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_sanpham` (`product_id`),
  ADD CONSTRAINT `tbl_order_product_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
