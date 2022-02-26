-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2020 at 01:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pofarms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `type` enum('Administrator','Admin','Staff') NOT NULL DEFAULT 'Admin',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `telephone`, `u_name`, `email`, `password`, `address`, `type`, `date`) VALUES
(1, 'Poultry Farm', '+260969685645', 'Gift Musanza', 'giftmusanza@gmail.com', 'a0ec3b461abf4bc16ad615481260140e', 'Kamijiji street', 'Admin', '2020-07-31 11:31:12'),
(13, 'Poultry Farm', '+260969685645', 'James Kampela', 'jkampela2016@gmail.com', 'b4cc344d25a2efe540adbf2678e2304c', 'Zambia housing AZ240', 'Staff', '2020-08-09 22:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `bank_acc`
--

CREATE TABLE `bank_acc` (
  `id` int(11) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_acc`
--

INSERT INTO `bank_acc` (`id`, `name_idd`, `bank`, `no`) VALUES
(1, 'Poultry Farm', 'ABSA', '11111111'),
(2, 'Poultry Farm', 'ZANACO', '10010011');

-- --------------------------------------------------------

--
-- Table structure for table `bank_bal`
--

CREATE TABLE `bank_bal` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` double(9,2) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_bal`
--

INSERT INTO `bank_bal` (`id`, `name_idd`, `date`, `no`, `type`, `amount`, `comments`) VALUES
(2, 'Poultry Farm', '07/29/2020', '11111111', 'Withdraw', 10000.00, 'Bought chicks'),
(3, 'Poultry Farm', '08/12/2020', '10010011', 'Deposit', 12000.00, 'Sold chickens'),
(4, 'Poultry Farm', '08/11/2020', '11111111', 'Deposit', 11200.00, 'Sold Chickens');

-- --------------------------------------------------------

--
-- Table structure for table `chicken_sale`
--

CREATE TABLE `chicken_sale` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `paid` double(9,2) NOT NULL,
  `l_no` varchar(15) NOT NULL,
  `u_price` double(9,2) NOT NULL,
  `no_chickens` varchar(25) NOT NULL,
  `t_amount` double(9,2) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chicken_sale`
--

INSERT INTO `chicken_sale` (`id`, `name_idd`, `customer`, `paid`, `l_no`, `u_price`, `no_chickens`, `t_amount`, `date`) VALUES
(1, 'Poultry Farm', 'Benjamin Kawisha', 200.00, 'ABX 2022', 40.00, '46', 1840.00, '08/10/2020'),
(2, 'Poultry Farm', 'Mirriam Kyupa', 200.00, 'CVX 9953', 57.00, '5', 285.00, '07/28/2020'),
(3, 'Poultry Farm', 'Benjamin Kawisha', 250.00, 'CVX 9953', 4.00, '8', 32.00, '08/07/2020');

-- --------------------------------------------------------

--
-- Table structure for table `chick_purchase`
--

CREATE TABLE `chick_purchase` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `b_no` varchar(15) NOT NULL,
  `l_no` varchar(15) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `u_price` double(9,2) NOT NULL,
  `t_amount` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chick_purchase`
--

INSERT INTO `chick_purchase` (`id`, `name_idd`, `date`, `b_no`, `l_no`, `supplier`, `qty`, `u_price`, `t_amount`) VALUES
(4, 'Poultry Farm', '08/10/2020', '1', 'ABX 2022', 'Avantech', '1000', 5.00, 5000.00),
(5, 'Poultry Farm', '08/11/2020', '2', 'CVX 9953', 'Wood Peckers', '500', 4.50, 2250.00);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name_idd`, `customer`, `telephone`, `address`) VALUES
(1, 'Poultry Farm', 'Benjamin Kawisha', '+260969685645', 'Zambia Housing 345 High View'),
(2, 'Poultry Farm', 'Mirriam Kyupa', '+260955697834', 'Chovu chovu sideview st. 22, Mwinilunga'),
(4, 'Poultry Farm', 'Memory Namukoko', '+260969685645', 'Mwaiseni, Chingola');

-- --------------------------------------------------------

--
-- Table structure for table `client_balance`
--

CREATE TABLE `client_balance` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `amount` double(9,2) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_balance`
--

INSERT INTO `client_balance` (`id`, `name_idd`, `date`, `customer`, `amount`, `comments`) VALUES
(3, 'Poultry Farm', '08/10/2020', 'Benjamin Kawisha', 1000.00, 'Paid for eggs'),
(7, 'Poultry Farm', '08/10/2020', 'Mirriam Kyupa', 1267.00, 'For eggs');

-- --------------------------------------------------------

--
-- Table structure for table `egg_sale`
--

CREATE TABLE `egg_sale` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `l_no` varchar(15) NOT NULL,
  `paid` double(9,2) NOT NULL,
  `u_price` double(9,2) NOT NULL,
  `t_trays` varchar(10) NOT NULL,
  `t_amount` double(9,2) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `egg_sale`
--

INSERT INTO `egg_sale` (`id`, `name_idd`, `customer`, `l_no`, `paid`, `u_price`, `t_trays`, `t_amount`, `date`) VALUES
(3, 'Poultry Farm', 'Benjamin Kawisha', 'CVX 9953', 350.00, 4.00, '432', 1728.00, '08/07/2020'),
(4, 'Poultry Farm', 'Benjamin Kawisha', 'CVX 9953', 300.00, 4.00, '340', 1360.00, '08/10/2020'),
(5, 'Poultry Farm', 'Mirriam Kyupa', 'ABX 2022', 1000.00, 5.00, '500', 2500.00, '08/10/2020');

-- --------------------------------------------------------

--
-- Table structure for table `egg_tray`
--

CREATE TABLE `egg_tray` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `tray` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `egg_tray`
--

INSERT INTO `egg_tray` (`id`, `name_idd`, `tray`) VALUES
(1, 'Poultry Farm', 50),
(2, 'Poultry Farm', 600),
(3, 'Poultry Farm', 300),
(4, 'Poultry Farm', 350);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `name_idd`, `type`) VALUES
(4, 'Poultry Farm', 'Administration expenses'),
(3, 'Poultry Farm', 'Cost of goods sold'),
(6, 'Poultry Farm', 'Depreciation'),
(5, 'Poultry Farm', 'Finance costs'),
(7, 'Poultry Farm', 'Impairment losses'),
(1, 'Poultry Farm', 'Salaries and wages'),
(2, 'Poultry Farm', 'Utility expenses');

-- --------------------------------------------------------

--
-- Table structure for table `expense_entry`
--

CREATE TABLE `expense_entry` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` double(9,2) NOT NULL,
  `date` varchar(25) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_entry`
--

INSERT INTO `expense_entry` (`id`, `name_idd`, `type`, `amount`, `date`, `comments`) VALUES
(1, 'Poultry Farm', 'Utility expenses', 150.00, '07/29/2020', 'Electricity bills'),
(2, 'Poultry Farm', 'Cost of goods sold', 150.00, '08/22/2020', 'Bought carrier bags');

-- --------------------------------------------------------

--
-- Table structure for table `fcr`
--

CREATE TABLE `fcr` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `a_chicks` varchar(15) NOT NULL,
  `chick_weight` double(9,2) NOT NULL,
  `feed_con` double(9,2) NOT NULL,
  `fcr` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feed_consumption`
--

CREATE TABLE `feed_consumption` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `no_bags` int(15) NOT NULL,
  `date` varchar(25) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed_consumption`
--

INSERT INTO `feed_consumption` (`id`, `name_idd`, `no_bags`, `date`, `type`) VALUES
(1, 'Poultry Farm', 4, '08/10/2020', 'Broiler Feed'),
(3, 'Poultry Farm', 3, '07/28/2020', 'Chick Starter');

-- --------------------------------------------------------

--
-- Table structure for table `feed_purchase`
--

CREATE TABLE `feed_purchase` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `u_price` double(9,2) NOT NULL,
  `t_amount` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed_purchase`
--

INSERT INTO `feed_purchase` (`id`, `name_idd`, `date`, `qty`, `type`, `supplier`, `u_price`, `t_amount`) VALUES
(1, 'Poultry Farm', '08/06/2020', '5', 'Broiler Feed', 'Avantech', 100.00, 500.00),
(2, 'Poultry Farm', '08/06/2020', '4', 'Chick Starter', 'Avantech', 150.00, 600.00),
(3, 'Poultry Farm', '08/05/2020', '44', 'Fermented Feed', 'Avantech', 100.00, 4400.00),
(4, 'Poultry Farm', '08/06/2020', '5', 'Game Bird Feed', 'Avantech', 4.00, 20.00),
(6, 'Poultry Farm', '08/09/2020', '200', 'Flock Raiser', 'Avantech', 115.00, 23000.00),
(7, 'Poultry Farm', '07/27/2020', '7', 'Broiler Feed', 'Avantech', 89.00, 623.00);

-- --------------------------------------------------------

--
-- Table structure for table `feed_type`
--

CREATE TABLE `feed_type` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed_type`
--

INSERT INTO `feed_type` (`id`, `name_idd`, `type`) VALUES
(2, 'Poultry Farm', 'Cracked Corn'),
(3, 'Poultry Farm', 'Fermented Feed'),
(4, 'Poultry Farm', 'Game Bird Feed'),
(5, 'Poultry Farm', 'Broiler Feed'),
(6, 'Poultry Farm', 'Flock Raiser'),
(7, 'Poultry Farm', 'Grower Feed'),
(8, 'Poultry Farm', 'Chick Starter');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_name`
--

CREATE TABLE `medicine_name` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_name`
--

INSERT INTO `medicine_name` (`id`, `name_idd`, `name`) VALUES
(1, 'Poultry Farm', 'Aminoglycosides'),
(2, 'Poultry Farm', 'Bambermycins'),
(3, 'Poultry Farm', 'Beta-Lactams'),
(4, 'Poultry Farm', 'Penicillins'),
(5, 'Poultry Farm', 'Cephalosporins'),
(6, 'Poultry Farm', 'Ionophores'),
(7, 'Poultry Farm', 'Lincosamides'),
(8, 'Poultry Farm', 'Macrolides');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_puchase`
--

CREATE TABLE `medicine_puchase` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `t_amount` double(9,2) NOT NULL,
  `supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_puchase`
--

INSERT INTO `medicine_puchase` (`id`, `name_idd`, `date`, `name`, `rate`, `qty`, `t_amount`, `supplier`) VALUES
(1, 'Poultry Farm', '07/27/2020', 'Aminoglycosides', '4', '56', 634.00, 'Avantech'),
(3, 'Poultry Farm', '07/31/2020', 'Beta-Lactams', '5', '10', 400.00, 'Avantech');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(15) NOT NULL,
  `name_idd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name_idd`, `name`, `telephone`, `city`, `state`, `country`, `address`) VALUES
(1, 'Poultry Farm', 'Avantech', '+260969685645', 'Kalumbila', 'North-western', 'Zambia', 'Mutanda x456'),
(2, 'Poultry Farm', 'Wood Peckers', '+260969685444', 'Kalulushi', 'Copperbelt', 'Zambia', 'Mwaka Road, 8744');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `u_name` (`u_name`);

--
-- Indexes for table `bank_acc`
--
ALTER TABLE `bank_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_bal`
--
ALTER TABLE `bank_bal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chicken_sale`
--
ALTER TABLE `chicken_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer` (`customer`);

--
-- Indexes for table `chick_purchase`
--
ALTER TABLE `chick_purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`supplier`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`customer`);

--
-- Indexes for table `client_balance`
--
ALTER TABLE `client_balance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`customer`);

--
-- Indexes for table `egg_sale`
--
ALTER TABLE `egg_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`customer`);

--
-- Indexes for table `egg_tray`
--
ALTER TABLE `egg_tray`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`type`);

--
-- Indexes for table `expense_entry`
--
ALTER TABLE `expense_entry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `name_idd` (`name_idd`,`type`);

--
-- Indexes for table `fcr`
--
ALTER TABLE `fcr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`fcr`);

--
-- Indexes for table `feed_consumption`
--
ALTER TABLE `feed_consumption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_purchase`
--
ALTER TABLE `feed_purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`supplier`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `feed_type`
--
ALTER TABLE `feed_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `medicine_name`
--
ALTER TABLE `medicine_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_puchase`
--
ALTER TABLE `medicine_puchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`name`,`supplier`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idd` (`name_idd`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bank_acc`
--
ALTER TABLE `bank_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_bal`
--
ALTER TABLE `bank_bal`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chicken_sale`
--
ALTER TABLE `chicken_sale`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chick_purchase`
--
ALTER TABLE `chick_purchase`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_balance`
--
ALTER TABLE `client_balance`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `egg_sale`
--
ALTER TABLE `egg_sale`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `egg_tray`
--
ALTER TABLE `egg_tray`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expense_entry`
--
ALTER TABLE `expense_entry`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fcr`
--
ALTER TABLE `fcr`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed_consumption`
--
ALTER TABLE `feed_consumption`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feed_purchase`
--
ALTER TABLE `feed_purchase`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feed_type`
--
ALTER TABLE `feed_type`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicine_name`
--
ALTER TABLE `medicine_name`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicine_puchase`
--
ALTER TABLE `medicine_puchase`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chick_purchase`
--
ALTER TABLE `chick_purchase`
  ADD CONSTRAINT `chick_purchase_ibfk_1` FOREIGN KEY (`name_idd`) REFERENCES `accounts` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
