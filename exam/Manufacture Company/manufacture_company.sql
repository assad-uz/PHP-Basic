-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2025 at 06:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manufacture_company`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `call_insert_m` (IN `rname` VARCHAR(50), IN `raddress` VARCHAR(100), IN `rcontact_no` VARCHAR(50))   BEGIN
INSERT INTO manufacturer (name,address,contact_no) VALUES (rname,raddress,rcontact_no);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `call_insert_p` (IN `rname` VARCHAR(50), IN `rprice` INT(5), IN `rmanufacturer_id` INT(10))   BEGIN
INSERT INTO product(name,price,manufacturer_id) VALUES (rname,rprice,rmanufacturer_id);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `expensive_products`
-- (See below for the actual view)
--
CREATE TABLE `expensive_products` (
`id` int(100)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(8, 'LG', 'South Korea', '+91252635546'),
(9, 'ASUS', 'USA', '+91252634628'),
(11, 'RAZER', 'USA', '+91252636185'),
(12, 'SAMSUNG', 'South Korea', '+91252637614');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `after_delete_manufacturer` AFTER DELETE ON `manufacturer` FOR EACH ROW BEGIN
DELETE FROM product WHERE manufacturer_id = OLD.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(10, 'Mouse', 2000, NULL),
(11, 'Mouse', 6000, NULL),
(12, 'Monitor', 10000, NULL),
(13, 'Monitor', 10000, NULL),
(14, 'Monitor', 20000, NULL),
(15, 'Monitor', 25000, 8),
(16, 'Laptop', 20000, 9),
(17, 'Mouse Viper Mini', 2000, 11),
(18, 'S25 Ultra', 110000, NULL),
(19, 'Monitor', 30000, NULL),
(20, 'S25 Ultra', 110000, 12);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view`
-- (See below for the actual view)
--
CREATE TABLE `product_view` (
`id` int(100)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `expensive_products`
--
DROP TABLE IF EXISTS `expensive_products`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `expensive_products`  AS SELECT `p`.`id` AS `id`, `p`.`name` AS `name`, `p`.`price` AS `price`, `m`.`name` AS `manufacturer_name` FROM (`product` `p` join `manufacturer` `m`) WHERE `m`.`id` = `p`.`manufacturer_id` AND `p`.`price` > 5000 ;

-- --------------------------------------------------------

--
-- Structure for view `product_view`
--
DROP TABLE IF EXISTS `product_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_view`  AS SELECT `p`.`id` AS `id`, `p`.`name` AS `name`, `p`.`price` AS `price`, `m`.`name` AS `manufacturer_name` FROM (`product` `p` join `manufacturer` `m`) WHERE `m`.`id` = `p`.`manufacturer_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_manufacturer` (`manufacturer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_manufacturer` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
