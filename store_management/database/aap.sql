-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 08:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aap`
--

-- --------------------------------------------------------

--
-- Table structure for table `part_company`
--

CREATE TABLE `part_company` (
  `id` int(11) NOT NULL,
  `p_c_id` text NOT NULL,
  `part_company` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `part_name`
--

CREATE TABLE `part_name` (
  `id` int(11) NOT NULL,
  `p_n_id` text NOT NULL,
  `part_name` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `purchase_id` text NOT NULL,
  `supplier_name` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL,
  `gst_number` text NOT NULL,
  `vehicle_company` text NOT NULL,
  `part_company` text NOT NULL,
  `vehicle_name` text NOT NULL,
  `part_name` text NOT NULL,
  `quantity` text NOT NULL,
  `price` text NOT NULL,
  `sub_total` text NOT NULL,
  `gst` text NOT NULL,
  `gst_amount` text NOT NULL,
  `total_amount` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sales_id` text NOT NULL,
  `consumers_name` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL,
  `vehicle_company` text NOT NULL,
  `part_company` text NOT NULL,
  `vehicle_name` text NOT NULL,
  `part_name` text NOT NULL,
  `quantity` text NOT NULL,
  `price` text NOT NULL,
  `sub_total` text NOT NULL,
  `gst` text NOT NULL,
  `gst_amount` text NOT NULL,
  `total_amount` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Paresh ', 'Dhande', 'pareshdhande10@gmail.com', '1129657301bd643b39b9a8909c48ea3c');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_company`
--

CREATE TABLE `vehicle_company` (
  `id` int(11) NOT NULL,
  `v_c_id` text NOT NULL,
  `vehicle_company` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_name`
--

CREATE TABLE `vehicle_name` (
  `id` int(11) NOT NULL,
  `v_n_id` text NOT NULL,
  `vehicle_name` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `part_company`
--
ALTER TABLE `part_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_name`
--
ALTER TABLE `part_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_company`
--
ALTER TABLE `vehicle_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_name`
--
ALTER TABLE `vehicle_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `part_company`
--
ALTER TABLE `part_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `part_name`
--
ALTER TABLE `part_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_company`
--
ALTER TABLE `vehicle_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_name`
--
ALTER TABLE `vehicle_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
