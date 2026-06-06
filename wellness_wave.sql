-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2024 at 01:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wellness_wave`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'medicine'),
(2, 'hospital'),
(3, 'doctors'),
(4, 'natural healing places');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contactus_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `birthday_date` date NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email`, `password`, `phone`, `address`, `city`, `country`, `birthday_date`, `height`, `weight`, `gender`) VALUES
(1, 'ahmed', 'ahmed@gmail.com', '1234', 12222222, 'dokki', 'giza', 'egypt', '0000-00-00', 155, 60, 'male'),
(2, 'toqa', 'toqa@gmail.com', '$2y$10$uUv/OC4GG9lpZ9dta3.j.ew8cRqFvWyJWVex.tqW.lw2Lh7evlVQu', 1060338558, '.', 'cairo', 'Egypt', '0001-11-11', 1, 1, 'female'),
(3, 'toqa', 'toqa33@gmail.com', '$2y$10$f00lBgmTxI0GMDWqtJMbTujP50SXs3zk0PJ.exRjt9KnQTaCtUkMe', 1060338558, '.', 'cairo', 'Egypt', '0001-11-11', 1, 1, 'female'),
(4, 'toqa', 'toqa334@gmail.com', '$2y$10$0om54La7xZoDSF19HXbt0eeBQAjUIlVflByGTIE3M6H43qhhrDpKG', 1060338558, 'kjkj;k', 'cairo', 'Egypt', '2024-07-08', 1, 1, 'female'),
(5, 'toqa', 'toqa34@gmail.com', '$2y$10$e6tsUAFBG.Z0j1OL3mWyMeVF1fVfXXMUYKvMm1JZR0j96o2MLNySy', 1060338558, 'kjkj;k', 'cairo', 'Egypt', '2024-07-01', 1, 1, 'female'),
(6, 'toqa', 'toqa34aa@gmail.com', '$2y$10$WNNi0RgvsmmQjZCtBqsX3uFcwK8Tw9ae0RrQiDbVH/t/ZNgNlssOG', 1060338558, 'kjkj;k', 'cairo', 'Egypt', '2024-07-08', 1, 1, 'female'),
(7, 'toqa', 'toqa34afca@gmail.com', '$2y$10$UP5GhFUmYMVVktNts4URKOLsDhzcgGO3SE6tEspI/Omy4MCoKYRO2', 1060338558, 'kjkj;k', 'cairo', 'Egypt', '2024-08-05', 1, 1, 'female'),
(8, 'toqa', 'toqa3jhbca@gmail.com', '$2y$10$2s.R1lWrStdY5G5uSyF/COV7WBF7xpMUEIpi.1TrG/aX5Kgc61gxS', 1060338558, 'kjkj;k', 'cairo', 'Egypt', '2024-07-01', 1, 1, 'female'),
(9, 'toqa', 'toqajgvjca@gmail.com', '$2y$10$w5WhmvklnT7LWKuIKai.IekifEh7nkBJQ5EvJDx4UI4gq81iojHIC', 1060338558, 'kjkj;k', 'cairo', 'Egypt', '2024-07-25', 1, 1, 'female'),
(10, 'toqa', 'toqajgvcsadajca@gmail.com', '$2y$10$pGA0jcelRAPBtSvKEHn/JuhPlkk5zYHEP3TtogebyHX0gLn45HmWa', 1060338554, 'kjkj;k', 'cairo', 'Egypt', '2024-07-22', 1, 1, 'male'),
(11, 'toqa', 'toqajgvcsadpojjca@gmail.com', '$2y$10$RK9tcCFLALcToe2hFu7p9Otilgmnh49LLCZQLQ9jdlxKySE1N/UlG', 1060338554, 'kjkj;k', 'cairo', 'Egypt', '2024-07-04', 1, 1, 'female'),
(12, 'toqa', 'toqajgvcsadpojjjkjjca@gmail.com', '$2y$10$cL3hga0IDHNTxQPPLMP0PuxMShUAWY6A1rDCzwECPmYsTNaWaXgAi', 1060338556, 'kjkj;k', 'cairo', 'Egypt', '2024-07-22', 1, 1, 'male'),
(13, 'toqa', 'toqajgvcsadpojjjkjj00ca@gmail.com', '$2y$10$e/SIFFzsk819rdGUtwEcr.LhGzxmaMmeX8/8zVBKxpqtlwEikCm/y', 1060338556, 'kjkj;k', 'cairo', 'Egypt', '0022-02-22', 1, 1, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `hide` int(11) NOT NULL DEFAULT 1,
  `category_id` int(11) NOT NULL,
  `doctorcat_id` int(11) NOT NULL,
  `visit_fee` decimal(10,0) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `phone`, `email`, `gender`, `city`, `country`, `hide`, `category_id`, `doctorcat_id`, `visit_fee`, `schedule`, `address`, `image`) VALUES
(4, 'lama mina', '08765432146', 'lama@gmail.com', 'female', 'cairo', 'Egypt', 1, 3, 1, 400, '-5', 'mkmlk', 'dr 2 pic.jpeg'),
(6, 'donia', '889080', 'jana@gmail.com', 'female', 'cairo', 'Tunisia', 1, 3, 3, 889, '-5', 'mkmlk', 'dr 6 pic.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `doctorcat`
--

CREATE TABLE `doctorcat` (
  `doctorcat_id` int(11) NOT NULL,
  `doctorcat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorcat`
--

INSERT INTO `doctorcat` (`doctorcat_id`, `doctorcat_name`) VALUES
(1, 'Dermatologist'),
(2, 'Cardiologist'),
(3, 'Psychiatrist'),
(4, 'Radiologist'),
(5, 'Pediatrician'),
(6, 'Dentist'),
(7, 'Surgeon'),
(8, 'Ophthalmologist');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `phone`, `address`, `country`, `city`, `category_id`, `image`) VALUES
(5, 'el nozha hospital', '0232334549', 'el nozha , masr el gidida', 'Egypt', 'cairo', 2, '1 (7).jpg'),
(6, 'el galaa', '0232390549', 'masr el gidida', 'Egypt', 'cairo', 2, '1 (6).jpg'),
(8, 'air force hospital', '0232334545', 'mohsen street', 'Saudi arabia', 'gaddah', 2, '1 (7).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medcat`
--

CREATE TABLE `medcat` (
  `medcat_id` int(11) NOT NULL,
  `medcat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medcat`
--

INSERT INTO `medcat` (`medcat_id`, `medcat_name`) VALUES
(1, 'Skin'),
(2, 'Vitamins'),
(3, 'Heart'),
(4, 'Supplements'),
(5, 'PainKiller');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `hide` int(11) NOT NULL DEFAULT 1,
  `medcat_id` int(11) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `description`, `price`, `stock`, `category_id`, `hide`, `medcat_id`, `image`) VALUES
(15, 'amoxici', 'antiboitic to treat a variety of bacterial infections', '70', '84', 1, 1, 5, 'product12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `naturalplaces`
--

CREATE TABLE `naturalplaces` (
  `n_id` int(11) NOT NULL,
  `n_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `trip_dates` varchar(255) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `naturalplaces`
--

INSERT INTO `naturalplaces` (`n_id`, `n_name`, `description`, `city`, `country`, `category_id`, `phone`, `price`, `trip_dates`, `image`) VALUES
(5, 'siwa', 'amizing oaisis', 'cairo', 'Egypt', 4, '767836783', 1500, '4/9', 'IMG_0881.JPG'),
(6, 'habitas alula', 'restore and reconnect with your soul ', 'ashar valley', 'Saudi arabia', 4, '6877879', 7000, '7/9', 'IMG_0882.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `n_reservation`
--

CREATE TABLE `n_reservation` (
  `order_id` int(11) NOT NULL,
  `n_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `price` decimal(65,0) NOT NULL,
  `cardholdername` varchar(255) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `CVV` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `cardholdername` varchar(255) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `CVV` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `medicine_id`, `price`, `date`, `time`, `quantity`, `payment_id`, `cardholdername`, `card_number`, `CVV`, `expiry_date`) VALUES
(1, 1, 15, 140, '2014-07-24', '01:17:27', 2, 2, 'ijk', 55, 22, '0000-00-00'),
(2, 1, 15, 210, '2014-07-24', '01:30:00', 3, 2, 'ijk', 55, 22, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_name`) VALUES
(1, 'cash'),
(2, 'online');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price` decimal(65,0) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `cardholdername` varchar(255) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `CVV` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contactus_id`),
  ADD KEY `contact_us_ibfk_1` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `doctorcat_id` (`doctorcat_id`);

--
-- Indexes for table `doctorcat`
--
ALTER TABLE `doctorcat`
  ADD PRIMARY KEY (`doctorcat_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `medcat`
--
ALTER TABLE `medcat`
  ADD PRIMARY KEY (`medcat_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `medcat_id` (`medcat_id`);

--
-- Indexes for table `naturalplaces`
--
ALTER TABLE `naturalplaces`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `n_reservation`
--
ALTER TABLE `n_reservation`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `n_id` (`n_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`,`medicine_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `medicine_id` (`medicine_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contactus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctorcat`
--
ALTER TABLE `doctorcat`
  MODIFY `doctorcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `medcat`
--
ALTER TABLE `medcat`
  MODIFY `medcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `naturalplaces`
--
ALTER TABLE `naturalplaces`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `n_reservation`
--
ALTER TABLE `n_reservation`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`doctorcat_id`) REFERENCES `doctorcat` (`doctorcat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicine_ibfk_2` FOREIGN KEY (`medcat_id`) REFERENCES `medcat` (`medcat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `naturalplaces`
--
ALTER TABLE `naturalplaces`
  ADD CONSTRAINT `naturalplaces_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `n_reservation`
--
ALTER TABLE `n_reservation`
  ADD CONSTRAINT `n_reservation_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n_reservation_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `n_reservation_ibfk_3` FOREIGN KEY (`n_id`) REFERENCES `naturalplaces` (`n_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`medicine_id`) REFERENCES `medicine` (`medicine_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
