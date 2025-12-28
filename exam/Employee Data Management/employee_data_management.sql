-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2025 at 07:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_data_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeedemographics`
--

CREATE TABLE `employeedemographics` (
  `EmployeeId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeedemographics`
--

INSERT INTO `employeedemographics` (`EmployeeId`, `FirstName`, `LastName`, `Gender`) VALUES
(4, 'Assaduzzaman', 'Shaon', 'Male'),
(6, 'Ashikuzzaman', 'Biswas', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `employeesalary`
--

CREATE TABLE `employeesalary` (
  `EmployeeId` int(11) NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeesalary`
--

INSERT INTO `employeesalary` (`EmployeeId`, `Salary`) VALUES
(4, 30000),
(6, 35000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeedemographics`
--
ALTER TABLE `employeedemographics`
  ADD PRIMARY KEY (`EmployeeId`);

--
-- Indexes for table `employeesalary`
--
ALTER TABLE `employeesalary`
  ADD PRIMARY KEY (`EmployeeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeedemographics`
--
ALTER TABLE `employeedemographics`
  MODIFY `EmployeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employeesalary`
--
ALTER TABLE `employeesalary`
  ADD CONSTRAINT `employeesalary_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `employeedemographics` (`EmployeeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
