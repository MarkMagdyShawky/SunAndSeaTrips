-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 03:35 PM
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
-- Database: `traveling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_name` varchar(200) DEFAULT NULL,
  `Admin_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Admin_name`, `Admin_password`) VALUES
(1, 'Mark_Magdy2023', 'M01200431371'),
(2, 'Mark', '123456'),
(3, 'mark_msmehany', 'M_m@142536475869//**');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Cust_Id` int(100) NOT NULL,
  `Cust_Name` varchar(100) NOT NULL,
  `Cust_Email` varchar(150) NOT NULL,
  `Cust_Phone` varchar(100) NOT NULL,
  `Review` varchar(500) NOT NULL,
  `Complain` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Cust_Id`, `Cust_Name`, `Cust_Email`, `Cust_Phone`, `Review`, `Complain`) VALUES
(2, 'MRIO Magdy', 'markmarkmagdy1010@gmail.com', '01200431371', '', ''),
(6, 'Mark Magdy', 'markmarkmagdy1010@gmail.com', '01200431371', 'Nice Trips', 'No'),
(7, 'Mark Magdy', 'markmarkmagdy1010@gmail.com', '01200431371', '', ''),
(8, 'Mark Magdy', 'markmarkmagdy1010@gmail.com', '01200431371', 'Good Trip', '');

-- --------------------------------------------------------

--
-- Table structure for table `settings1`
--

CREATE TABLE `settings1` (
  `Settings1_Id` int(200) NOT NULL,
  `Offer_part1` varchar(200) NOT NULL,
  `Offer_part2` varchar(250) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Whatsapp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings1`
--

INSERT INTO `settings1` (`Settings1_Id`, `Offer_part1`, `Offer_part2`, `Phone`, `Whatsapp`) VALUES
(1, 'Get 10% Offer', 'For Families ', '+201200431371', 'https://wa.me/qr/4O5ELSPX2KZKF1');

-- --------------------------------------------------------

--
-- Table structure for table `settings2`
--

CREATE TABLE `settings2` (
  `Video_Id` int(200) NOT NULL,
  `Video_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings2`
--

INSERT INTO `settings2` (`Video_Id`, `Video_Name`) VALUES
(1, 'uploaded_videos/video86-28-09-23.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `Slid_Id` int(200) NOT NULL,
  `Slid_Name` varchar(250) NOT NULL,
  `Slid_Caption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`Slid_Id`, `Slid_Name`, `Slid_Caption`) VALUES
(1, 'Slides/IMG-29-09-23-8-bit City_1920x1080.jpg', 'Photo1'),
(2, 'Slides/IMG-29-09-23-wallpaperflare.com_wallpaper (8).jpg', 'Photo2'),
(3, 'Slides/IMG-29-09-23-wallpaperflare.com_wallpaper (7).jpg', 'Photo3'),
(4, 'Slides/IMG-29-09-23-wallpaperflare.com_wallpaper (6).jpg', 'Photo4'),
(5, 'Slides/IMG-29-09-23-wallpaperflare.com_wallpaper10.jpg', 'Photo5'),
(6, 'Slides/IMG-29-09-23-wallpaperflare.com_wallpaper (5).jpg', 'Photo6');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `Trip_Id` int(200) NOT NULL,
  `Trip_name` varchar(200) NOT NULL,
  `Trip_old_price` varchar(200) NOT NULL,
  `Trip_new_price` varchar(100) NOT NULL,
  `Trip_date` varchar(100) NOT NULL,
  `Trip_description` longblob NOT NULL,
  `Hot_offer` varchar(191) NOT NULL,
  `Trip_photo` varchar(1000) NOT NULL,
  `Highlights1` longblob NOT NULL,
  `Highlights2` longblob NOT NULL,
  `Highlights3` longblob NOT NULL,
  `Highlights4` longblob NOT NULL,
  `Highlights5` longblob NOT NULL,
  `Highlights6` longblob NOT NULL,
  `Highlights7` longtext NOT NULL,
  `Trip_photo2` varchar(1500) NOT NULL,
  `Trip_photo3` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`Trip_Id`, `Trip_name`, `Trip_old_price`, `Trip_new_price`, `Trip_date`, `Trip_description`, `Hot_offer`, `Trip_photo`, `Highlights1`, `Highlights2`, `Highlights3`, `Highlights4`, `Highlights5`, `Highlights6`, `Highlights7`, `Trip_photo2`, `Trip_photo3`) VALUES
(51, 'Orange Bay', '30', '20', '2 hours', 0x5468697320747269702074616b657320796f7520746f2074686520526564205365612069736c616e647320666f7220736e6f726b656c696e672061742074776f20636f72616c2072656566732c2077697468206c756e636820616e6420736f6674206472696e6b732070726f7669646564206f6e20626f6172642e20596f75e280996c6c20616c736f2067657420746f207370656e642074776f20686f75727320617420746865207374756e6e696e67204f72616e6765204261792c206578706c6f72696e67206372797374616c2d636c6561722077617465727320616e642077686974652073616e6420626561636865732e204974e280997320612070657266656374206f70706f7274756e69747920746f20657870657269656e636520746865206e61747572616c20626561757479206f662074686520526564205365612069736c616e64732e0d0a, 'Yes', 'uploaded/IMG-04-11-23-Orange bsy3.jpg', 0x53746f7020746f20736e6f726b656c206174203220666162756c6f757320636f72616c2072656566730d0a61726f756e642074686520526564205365612069736c616e64730d0a4d617276656c2061742074686520636f6c6f7266756c20636f72616c20726565667320616e64200d0a756e6465727761746572206c6966650d0a4861766520736f6d65206c756e636820616e6420736f6674206472696e6b73206f6e20626f6172640d0a4578706c6f7265206372797374616c20776174657220616e642077686974652073616e64200d0a6174204f72616e6765204261790d0a456e6a6f79203220686f757273206174207468652069736c616e64730d0a, '', '', '', '', '', '', '', ''),
(56, 'Scuba Diving', '30', '25', '', 0x646e6267626462, 'Yes', 'uploaded/IMG-04-11-23-Diving 1.jpg', 0x6662666264, 0x62666266, 0x626662666d, 0x6d6c6b6d6c6b, 0x6d6c6b6d6c6b, 0x6d6c6d6b, '', 'uploaded/IMG-04-11-23-Glass boat.jpg', 'uploaded/IMG-04-11-23-Glass boat.jpg'),
(57, 'Scuba Diving', '30', '25', '', 0x74207368656c7465727320612074726f706963616c207061726164697365207265636f676e697a6564207468726f7567686f75742074686520776f726c642c206173206d75636820627920697473206d756c7469636f6c6f72656420636f72616c2067617264656e732062757420616c736f207468726f75676820697473206469766572736966696564206d6172696e65206661756e61, 'No', 'uploaded/IMG-04-11-23-Diving 1.jpg', 0x74207368656c7465727320612074726f706963616c207061726164697365207265636f676e697a6564207468726f7567686f75742074686520776f726c642c206173206d75636820627920697473206d756c7469636f6c6f72656420636f72616c2067617264656e732062757420616c736f207468726f75676820697473206469766572736966696564206d6172696e65206661756e61, 0x74207368656c7465727320612074726f706963616c207061726164697365207265636f676e697a6564207468726f7567686f75742074686520776f726c642c206173206d75636820627920697473206d756c7469636f6c6f72656420636f72616c2067617264656e732062757420616c736f207468726f75676820697473206469766572736966696564206d6172696e65206661756e61, 0x74207368656c7465727320612074726f706963616c207061726164697365207265636f676e697a6564207468726f7567686f75742074686520776f726c642c206173206d75636820627920697473206d756c7469636f6c6f72656420636f72616c2067617264656e732062757420616c736f207468726f75676820697473206469766572736966696564206d6172696e65206661756e61, 0x74207368656c7465727320612074726f706963616c207061726164697365207265636f676e697a6564207468726f7567686f75742074686520776f726c642c206173206d75636820627920697473206d756c7469636f6c6f72656420636f72616c2067617264656e732062757420616c736f207468726f75676820697473206469766572736966696564206d6172696e65206661756e61, 0x74207368656c7465727320612074726f706963616c207061726164697365207265636f676e697a6564207468726f7567686f75742074686520776f726c642c206173206d75636820627920697473206d756c7469636f6c6f72656420636f72616c2067617264656e732062757420616c736f207468726f75676820697473206469766572736966696564206d6172696e65206661756e61, 0x74207368656c7465727320612074726f706963616c207061726164697365207265636f676e697a6564207468726f7567686f75742074686520776f726c642c206173206d75636820627920697473206d756c7469636f6c6f72656420636f72616c2067617264656e732062757420616c736f207468726f75676820697473206469766572736966696564206d6172696e65206661756e61, '', 'uploaded/IMG-04-11-23-Glass boat2.jpg', 'uploaded/IMG-04-11-23-Glass boat2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Cust_Id`);

--
-- Indexes for table `settings1`
--
ALTER TABLE `settings1`
  ADD PRIMARY KEY (`Settings1_Id`);

--
-- Indexes for table `settings2`
--
ALTER TABLE `settings2`
  ADD PRIMARY KEY (`Video_Id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`Slid_Id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`Trip_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `Cust_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings1`
--
ALTER TABLE `settings1`
  MODIFY `Settings1_Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings2`
--
ALTER TABLE `settings2`
  MODIFY `Video_Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `Slid_Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `Trip_Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
