-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2018 at 04:48 AM
-- Server version: 10.1.35-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextfwyq_justsweet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'farhat@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `best_seller`
--

CREATE TABLE `best_seller` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_seller`
--

INSERT INTO `best_seller` (`id`, `title`, `image`) VALUES
(2, 'Item 2', 'upload/2_1536469967.jpg'),
(3, 'Item 3', 'upload/3_1536470005.jpg'),
(4, 'Item 4', 'upload/4_1536470025.jpg'),
(5, 'Item 5', 'upload/5_1536470058.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `day` varchar(255) NOT NULL,
  `title` varchar(400) NOT NULL,
  `description` varchar(400) NOT NULL,
  `classname` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `image` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `day`, `title`, `description`, `classname`, `class`, `image`) VALUES
(5, '1-9-2018', 'sweets', 'this is testing', 'banner-btm-top', 'banner-btm-inner a1 text-left', 'upload/p1_1535860918.jpg'),
(6, '1-9-2018', 'test', 'testing', 'banner-btm-bottom', 'banner-btm-inner a4 text-left', 'upload/about3_1537674698.jpg '),
(7, '2-9-2018', 'test', 'testing', 'banner-btm-top', 'banner-btm-inner a1 text-left', 'upload/special-1_1535534080.jpg'),
(8, '2-9-2018', 'test', 'testing', 'banner-btm-bottom', 'banner-btm-inner a4 text-left', 'upload/about1_1535685523.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Farhat s', 'farhat@gmail.com', 'testing', 'this is testing'),
(2, 'scsac', 'ssss@gmail.com', 'test', 'this nis testing'),
(3, 'test', 'test@gmail.com', 'test', 'eaerer'),
(4, 'Sumaira', 's@gmail.com', 'test', 'hi this is testing'),
(5, 'testq', 'test@gmail.com', 'subject', 'dats'),
(6, 'Abdul Rauf', 'raufbhatti2@gmail.com', 'Sweet subject', 'dummy content lorem ipsum here'),
(7, 'Abdul Rauf', 'raufbhatti2@gmail.com', 'subject', 'dumyy contet '),
(8, 'Abdul Rauf', 'raufbhatti2@gmail.com', 'Sweet subject', 'dfssadfas'),
(9, 'Abdul Rauf', 'test@gmail.com', 'Sweet subject', 'fdafdasfa '),
(10, 'sumaira munazza', 's@gmail.com', 'sweets', 'test'),
(11, 'sumaira munazza', 's@gmail.com', 'sweets', 'test'),
(12, 'Farhat', 's@gmail.com', 'test', 'hloo');

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `customerid` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`customerid`, `name`, `price`, `description`, `weight`, `image`) VALUES
(1, ' Mix Mithai', '540', 'Mix mithai is a delicious sweet.It is a combination of different sweets which is used in happy occas', '2 ', 'upload/_1537752952.'),
(2, ' Amrati', '480', 'Imarti is an Indian sweet. It is made by deep-frying vigna mungo flour batter in a kind of circular ', '1 ', 'upload/_1537771635.'),
(3, ' Gulab jamun', '580', 'Gulab jamun is a milk solid based south asian sweet which is  garnished with dried nuts such as almo', '2 ', 'upload/_1537812002.'),
(4, ' Mix Mithai', '540', 'Mix mithai is a delicious sweet.It is a combination of different sweets which is used in happy occas', '1 ', 'upload/_1537812403.'),
(5, ' Mix Mithai', '540', 'Mix mithai is a delicious sweet.It is a combination of different sweets which is used in happy occas', '1 ', 'upload/_1537812505.'),
(6, ' Amrati', '480', 'Imarti is an Indian sweet. It is made by deep-frying vigna mungo flour batter in a kind of circular ', '1 ', 'upload/_1537949833.'),
(7, ' Amrati', '480', 'Imarti is an Indian sweet. It is made by deep-frying vigna mungo flour batter in a kind of circular ', '1 ', 'upload/_1538984473.'),
(8, ' Amrati', '480', 'Imarti is an Indian sweet. It is made by deep-frying vigna mungo flour batter in a kind of circular ', '1 ', 'upload/_1538985119.'),
(9, ' Mix Mithai', '540', 'Mix mithai is a delicious sweet.It is a combination of different sweets which is used in happy occas', '1 ', 'upload/_1538986118.'),
(10, ' Amrati', '480', 'Imarti is an Indian sweet. It is made by deep-frying vigna mungo flour batter in a kind of circular ', '1 ', 'upload/_1538988646.');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(400) NOT NULL,
  `image` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `name`, `title`, `description`, `image`) VALUES
(22, 'Ali', 'Cheif', 'Mr Ali is our experienced cheif', 'upload/business_1536468149.png'),
(23, 'Bilal', 'Cheif', 'Mr Bilal is well trained cook', 'upload/employee (1)_1536468162.png'),
(24, 'Hamza', 'Chaif', 'Mr Hamza is well experienced member of our team', 'upload/employee_1536468181.png'),
(25, 'Kashif', 'Cook', 'He is very good cook', 'upload/employee (2)_1536468909.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `image`) VALUES
(6, 'Arbi roll', 'Arbi roll is very famous in Pakistan', 'upload/images (2)_1536465282.jpg'),
(7, 'Amarti', 'We provide you Amariti for your spacial occasion', 'upload/pic1_1536465951.JPG'),
(8, 'Barfi', 'Barfi is very sweet and delicious', 'upload/images_1536465598.jpg'),
(9, 'Gulab jamun', 'Gulab jamun is also very famous sweets', 'upload/Capture1_1536473818.JPG'),
(10, 'Mixed Mathai', 'It is combination of different sweets used for happy occasion', 'upload/pic3_1536466346.JPG'),
(11, 'Sweets', 'We have provided to you sweets and cake', 'upload/images (1)_1536466393.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `title` varchar(230) NOT NULL,
  `description` varchar(200) NOT NULL,
  `btn_title` varchar(240) NOT NULL,
  `btn_link` varchar(230) NOT NULL,
  `image` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `title`, `description`, `btn_title`, `btn_link`, `image`) VALUES
(8, 'ddd ', 'sss', ' 12', 'ww', 'upload/Penguins_1534073278.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(20) NOT NULL,
  `classname` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(400) NOT NULL,
  `image` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `classname`, `title`, `description`, `price`, `image`) VALUES
(5, 'menu-grid-left', 'Amrati', 'Imarti is an Indian sweet. It is made by deep-frying vigna mungo flour batter in a kind of circular flower shape, then soaked in sugar syrup.', '480', 'upload/Amrat-1-i-1_1536463398.jpg'),
(7, 'menu-grid-right', 'Mix Mithai', 'Mix mithai is a delicious sweet.It is a combination of different sweets which is used in happy occasion', '540', 'upload/Special-Mathai-300x300_1536463856.jpg'),
(8, 'menu-grid-left', 'Gulab jamun', 'Gulab jamun is a milk solid based south asian sweet which is  garnished with dried nuts such as almonds to enhance flavour.', '580', 'upload/Gulaab_Jamun_1536464283.jpg'),
(9, 'menu-grid-right', 'Balushahi', 'It is very popular sweet in Pakistan. Balushahis are made of maida flour, and are deep-fried in clarified butter and then dipped in sugar syrup', '480', 'upload/Balu-Shahi_1536464552.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(8) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'f@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `password`, `confirm_password`) VALUES
(1, 'farhat rai', 'yasmeen', '9876', '9876'),
(2, 'farhat', 'yasmeen', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_seller`
--
ALTER TABLE `best_seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `best_seller`
--
ALTER TABLE `best_seller`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `customerid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
