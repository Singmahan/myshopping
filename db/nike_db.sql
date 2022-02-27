-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 06:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nike_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_tb`
--

CREATE TABLE `member_tb` (
  `id_member` int(10) NOT NULL,
  `user_mb` varchar(60) NOT NULL,
  `password_mb` varchar(60) NOT NULL,
  `name_mb` varchar(60) NOT NULL,
  `email_mb` varchar(60) NOT NULL,
  `tel_mb` varchar(60) NOT NULL,
  `address_mb` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `id_order` int(5) NOT NULL,
  `date_order` datetime NOT NULL,
  `name_order` varchar(50) NOT NULL,
  `address_order` varchar(50) NOT NULL,
  `tel_order` varchar(50) NOT NULL,
  `email_order` varchar(50) NOT NULL,
  `sumtotal_order` varchar(50) NOT NULL,
  `status_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `member_id` int(11) NOT NULL,
  `username_od` varchar(4) NOT NULL,
  `password_od` varchar(60) NOT NULL,
  `name_od` varchar(60) NOT NULL,
  `email_od` varchar(60) NOT NULL,
  `tel_od` varchar(60) NOT NULL,
  `city_od` varchar(60) NOT NULL,
  `zipcode_od` varchar(60) NOT NULL,
  `address_od` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `orderdetail_id` int(4) NOT NULL,
  `id_prd` int(4) NOT NULL,
  `id_order` int(4) NOT NULL,
  `name_prd` varchar(50) NOT NULL,
  `price_prd` float NOT NULL,
  `quantity_prd` int(3) NOT NULL,
  `total_prd` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_price` varchar(100) NOT NULL,
  `pro_img` varchar(100) NOT NULL,
  `pro_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`pro_id`, `pro_name`, `pro_price`, `pro_img`, `pro_date`) VALUES
(1, 'kkk', '1000', '273970308_3213697265573441_7403849059050999531_n.jpg', '2022-02-27 05:23:56'),
(2, 'ccc', '150', 'img_61d1bb4c637da.jpg', '2022-01-02 14:50:27'),
(3, 'ccc', '140', 'img_61d1bc60ae835.jpg', '2022-01-02 14:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `id_type` int(5) NOT NULL,
  `name_type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_tb`
--
ALTER TABLE `member_tb`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`orderdetail_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
