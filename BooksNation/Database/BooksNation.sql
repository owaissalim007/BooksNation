-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BooksNation`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
                        `cart_id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'chetan-bhagat', 'One Indian Girl', 152.24, './assets/Product/product1.jpg', '2021-03-18 11:08:57'), -- NOW()
(2, 'chetan-bhagat', 'The Girl in Room 105',453.00, './assets/Product/product2.png', '2021-03-18 11:08:57'),
(3, 'f-scott-fitzgerald', 'The Great Gatsby',76.90, './assets/Product/product3.jpg', '2020-03-28 11:08:57'),
(4, 'jk-rowling', 'Harry Potter',92.46, './assets/Product/product4.jpg', '2020-03-28 11:08:57'),
(5, 'jk-rowling', 'Fantastic Beasts',123.25, './assets/Product/product5.jpg', '2020-03-28 11:08:57'),
(6, 'el-james', 'Fifty Shades of Grey', 310.82, './assets/Product/product6.jpg', '2020-03-28 11:08:57'),
(7, 'chetan-bhagat', 'Half Girlfriend',263.87, './assets/Product/product7.jpg', '2020-03-28 11:08:57'),
(8, 'william-shakespeare', 'Hamlet', 172.87, './assets/Product/product8.jpg', '2020-03-28 11:08:57'),
(9, 'william-shakespeare', 'Macbeth', 230.12, './assets/Product/product9.jpg', '2020-03-28 11:08:57'),
(10, 'bankim-chandra-chatterjee', 'Anand Math', 27.45, './assets/Product/product10.jpg', '2020-03-28 11:08:57'),
(11, 'naseem-hijazi', 'Aur Talwar Toot Gayi', 182.97, './assets/Product/product11.jpg', '2020-03-28 11:08:57'),
(12, 'william-shakespeare', 'Romeo and Juliet', 92.54, './assets/Product/product12.jpg', '2020-03-28 11:08:57'),
(13, 'vikram-seth', 'A Suitable Boy', 152.00, './assets/Product/product13.png', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `user_id` int(11) NOT NULL,
                        `first_name` varchar(100) NOT NULL,
                        `last_name` varchar(100) NOT NULL,
                        `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Ayush', 'Yadav', '2021-03-18 13:07:17'),
(2, 'Owais', 'Salim', '2021-03-18 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
                            `cart_id` int(11) NOT NULL,
                            `user_id` int(11) NOT NULL,
                            `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;