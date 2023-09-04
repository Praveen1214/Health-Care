-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2023 at 03:41 PM
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
-- Database: `is`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Last_login` date DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `User_Name`, `First_Name`, `Last_Name`, `Password`, `Last_login`, `Email`) VALUES
(1, 'Praveen123', 'Praveen', 'Silva', 'admin123', '2023-05-26', 'praveen.silva@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_ID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `Patient_ID` int(45) NOT NULL,
  `Doctor_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_ID`, `name`, `email`, `doctor`, `date`, `time`, `Patient_ID`, `Doctor_ID`) VALUES
(8, 'praveen', 'praveen@gmail.com', 'mahinda', '2023-07-04', '19:08:00', 0, NULL),
(9, 'sadeepa', 'sadeepa@gmail.com', 'kusal', '2023-06-13', '18:10:00', 0, NULL),
(10, 'madusha', 'madu@email.com', 'gota', '2023-06-23', '01:34:00', 0, NULL),
(11, 'shini', 'shsa@gmail.com', 'basil', '2025-06-04', '00:00:00', 0, NULL),
(12, 's', 'dileepapraveen32@gmail.com', 'as', '0000-00-00', '00:00:00', 0, NULL),
(13, 'sssss', 'dileepapraveen32@gmail.com', '', '0000-00-00', '00:00:00', 0, NULL),
(14, '', '', '', '0000-00-00', '00:00:00', 0, NULL),
(15, '', '', '', '0000-00-00', '00:00:00', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_ID` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `Appointment_ID` int(11) DEFAULT NULL,
  `Patient_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_ID`, `Date`, `Amount`, `Appointment_ID`, `Patient_ID`) VALUES
(1, '2023-05-28', 100.00, 1, 1),
(2, '2023-05-29', 150.00, 2, 2),
(3, '2023-05-30', 200.00, 3, 3),
(4, '2023-05-31', 250.00, 4, 4),
(5, '2023-06-01', 300.00, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'yohan', 'yohan@gmail.com', '123'),
(2, 'yohan', 'yohan@gmail.com', '12'),
(3, 'e.dileepa praveen', 'dileepapraveen32@gmail.com', 'hi'),
(4, 'e.dileepa praveen', 'dileepapraveen32@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_manager`
--

CREATE TABLE `delivery_manager` (
  `Delivery_Manager_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_manager`
--

INSERT INTO `delivery_manager` (`Delivery_Manager_ID`, `User_Name`, `Password`, `First_Name`, `Last_Name`, `Email`) VALUES
(1, 'dm123', 'dm123', 'Adam', 'Johnson', 'adam@example.com'),
(2, 'dm456', 'dm456', 'Sophie', 'Smith', 'sophie@example.com'),
(3, 'dm789', 'dm789', 'Matthew', 'Wilson', 'matthew@example.com'),
(4, 'dm987', 'dm987', 'Olivia', 'Davis', 'olivia@example.com'),
(5, 'dm654', 'dm654', 'Lucas', 'Brown', 'lucas@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(11) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Specialization` varchar(50) DEFAULT NULL,
  `User_Name` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `First_Name`, `Last_Name`, `Specialization`, `User_Name`, `Password`, `Email`) VALUES
(1, 'Dr. Mark', 'Anderson', 'Cardiology', 'drmark', 'doctor123', 'mark.anderson@example.com'),
(2, 'Dr. Lisa', 'Wilson', 'Dermatology', 'drlisa', 'doctor456', 'lisa.wilson@example.com'),
(3, 'Dr. Madawa', 'Taylor', 'Orthopedics', 'drmadawa', 'doctor789', 'robert.taylor@example.com'),
(4, 'Dr. Lahiru', 'Miller', 'Pediatrics', 'drlahiru', 'doctor987', 'laura.miller@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_parsel`
--

CREATE TABLE `medicine_parsel` (
  `Parsel_ID` int(11) NOT NULL,
  `Tracking_No` varchar(50) DEFAULT NULL,
  `Destination` varchar(100) DEFAULT NULL,
  `Pharmacy_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine_parsel`
--

INSERT INTO `medicine_parsel` (`Parsel_ID`, `Tracking_No`, `Destination`, `Pharmacy_ID`) VALUES
(1, 'TRACK123', 'City A', 1),
(2, 'TRACK456', 'City B', 2),
(3, 'TRACK789', 'City C', 3),
(4, 'TRACK987', 'City D', 4),
(5, 'TRACK654', 'City E', 5);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_ID` int(11) NOT NULL,
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mobile_No` int(15) NOT NULL,
  `Nic_No` varchar(15) DEFAULT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `Admin_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_ID`, `Firstname`, `Lastname`, `Email`, `Mobile_No`, `Nic_No`, `User_Name`, `Password`, `Address`, `Admin_ID`) VALUES
(2, 'gd', 'fsdf', 'dileepapravedfsdfsen32@gmail.com', 2147483647, '454449898', 'medical', '1234', '2nd Street', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `card_name` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_expire_date` datetime(6) NOT NULL,
  `cvc_NUMBER` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `Pharmacy_ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Manager_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`Pharmacy_ID`, `Name`, `Address`, `Manager_ID`) VALUES
(1, 'ABC Pharmacy', '123 Main St', 1),
(2, 'XYZ Pharmacy', '456 Elm St', 2),
(3, '1234 Pharmacy', '789 Oak St', 3),
(4, '5678 Pharmacy', '321 Pine St', 4),
(5, 'MNO Pharmacy', '654 Maple St', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_manager`
--

CREATE TABLE `pharmacy_manager` (
  `Manager_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `Contact_Number` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Joining_Date` date DEFAULT NULL,
  `Order_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy_manager`
--

INSERT INTO `pharmacy_manager` (`Manager_ID`, `User_Name`, `First_Name`, `Address`, `password`, `Contact_Number`, `Email`, `Joining_Date`, `Order_ID`) VALUES
(1, 'Praveen123', 'Praveen', '123 Main St', 'dp1234', '0765432109', 'Praveen@example.com', '2023-01-01', 1),
(2, 'sammani123', 'sammani', '456 Elm St', 'dp1234', '0776543210', 'sammani@example.com', '2023-02-01', 2),
(3, 'kaveen123', 'kaveen', '789 Oak St', 'dp1234', '0787654321', 'kaveen@example.com', '2023-03-01', 3),
(4, 'sasindu123', 'sasindu', '321 Pine St', 'dp1234', '0798765432', 'sasindu@example.com', '2023-04-01', 4),
(5, 'Vihara123', 'Vihara', '654 Maple St', 'dp1234', '0719876543', 'Vihara@example.com', '2023-05-01', 5);

-- --------------------------------------------------------

--
-- Table structure for table `riders`
--

CREATE TABLE `riders` (
  `Rider_ID` int(11) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riders`
--

INSERT INTO `riders` (`Rider_ID`, `First_Name`, `Last_Name`) VALUES
(1, 'Silva', 'De'),
(2, 'Praveen', 'Silva'),
(3, 'Dileepa', 'Davis'),
(4, 'Naveen', 'Wilson'),
(5, 'Sandeepa', 'Namal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `mobile_number`, `message`) VALUES
(1, 'dileepa pravee', 'dileepapraveen32@gmail.com', '2nd Street', '0773992948', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_ID`),
  ADD KEY `FK_Patient_ID` (`Patient_ID`) USING BTREE,
  ADD KEY `Doctor_ID` (`Doctor_ID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_ID`),
  ADD KEY `FK_Bill_AppointmentID` (`Appointment_ID`),
  ADD KEY `FK_Bill_PatientID` (`Patient_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_manager`
--
ALTER TABLE `delivery_manager`
  ADD PRIMARY KEY (`Delivery_Manager_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `medicine_parsel`
--
ALTER TABLE `medicine_parsel`
  ADD PRIMARY KEY (`Parsel_ID`),
  ADD KEY `FK_Medicine_parsel_PharmacyID` (`Pharmacy_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_ID`),
  ADD KEY `FK_Patient_AdminID` (`Admin_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`card_number`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`Pharmacy_ID`),
  ADD KEY `FK_Pharmacy_ManagerID` (`Manager_ID`);

--
-- Indexes for table `pharmacy_manager`
--
ALTER TABLE `pharmacy_manager`
  ADD PRIMARY KEY (`Manager_ID`),
  ADD KEY `FK_Pharmacy_Manager_OrderID` (`Order_ID`);

--
-- Indexes for table `riders`
--
ALTER TABLE `riders`
  ADD PRIMARY KEY (`Rider_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_manager`
--
ALTER TABLE `delivery_manager`
  MODIFY `Delivery_Manager_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine_parsel`
--
ALTER TABLE `medicine_parsel`
  MODIFY `Parsel_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `Pharmacy_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pharmacy_manager`
--
ALTER TABLE `pharmacy_manager`
  MODIFY `Manager_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `riders`
--
ALTER TABLE `riders`
  MODIFY `Rider_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
