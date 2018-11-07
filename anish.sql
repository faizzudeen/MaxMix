-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 11:36 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anish`
--
CREATE DATABASE IF NOT EXISTS `anish` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `anish`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `adminname` (`adminname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'sya123', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `postcode` text NOT NULL,
  `email` text NOT NULL,
  `phonenumber` text NOT NULL,
  `paymentmethod` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10008 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `address`, `city`, `state`, `postcode`, `email`, `phonenumber`, `paymentmethod`, `status`) VALUES
(10001, 'Admin', 'PV10, Platinum Condominium Lake', 'Setapak', 'Kuala Lumpur', '53000', 'admin@yahoo.com', '01234567889', 'COD', 'Processing'),
(10002, 'Admin', 'PV10, Platinum Condominium Lake', 'Setapak', 'Kuala Lumpur', '53000', 'admin@yahoo.com', '01234567889', 'CDM', 'Processing'),
(10003, 'Admin', 'PV10, Platinum Condominium Lake', 'Setapak', 'Kuala Lumpur', '53000', 'admin@yahoo.com', '01234567889', 'CDM', 'Processing'),
(10004, 'Admin', 'PV10, Platinum Condominium Lake', 'Setapak', 'Kuala Lumpur', '53000', 'admin@yahoo.com', '01234567889', 'CDM', 'Processing'),
(10005, 'Admin', 'PV10, Platinum Condominium Lake', 'Setapak', 'Kuala Lumpur', '53000', 'admin@yahoo.com', '01234567889', 'CDM', 'Processing'),
(10006, 'Admin', 'PV10, Platinum Condominium Lake', 'Setapak', 'Kuala Lumpur', '53000', 'admin@yahoo.com', '01234567889', 'CDM', 'Processing'),
(10007, 'Admin', 'PV10, Platinum Condominium Lake', 'Setapak', 'Kuala Lumpur', '53000', 'admin@yahoo.com', '01234567889', 'CDM', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(10) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_brand` varchar(50) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `material` varchar(100) NOT NULL,
  `item_color` varchar(150) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_desc` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `featured` varchar(50) NOT NULL,
  `events` varchar(50) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_code`, `item_type`, `item_brand`, `item_name`, `item_price`, `availability`, `material`, `item_color`, `item_qty`, `item_desc`, `image`, `featured`, `events`) VALUES
(1, 'ABEERA01', 'Prints', 'Abeera', 'Abeera Abaya', 199.00, 'In Stock', 'Printed Dull Satin', 'True Blue', 30, 'Splash is an art by itself even after all of the arguments that have been going on. It has been known as an art as one can see how it pops out the vibe, the mood and the urgency to wear this beautiful design that somehow gives a relax and cool look that one have been looking for any occasions. Pastels were chosen to be the color as the focus is well define to be relax and cool.', '../assets/images/products/Abeera/abeera_abaya_true_blue.jpg', 'New', 'Raya'),
(2, 'ABEERA02', 'Prints', 'Abeera', 'Abeera Abaya', 199.00, 'In Stock', 'Printed Dull Satin', 'Buttered Brown', 30, 'Splash is an art by itself even after all of the arguments that have been going on. It has been known as an art as one can see how it pops out the vibe, the mood and the urgency to wear this beautiful design that somehow gives a relax and cool look that one have been looking for any occasions. Pastels were chosen to be the color as the focus is well define to be relax and cool.', '../assets/images/products/Abeera/abeera_abaya_buttered_brown.jpg', '', ''),
(3, 'ABEERA03', 'Prints', 'Abeera', 'Abeera Punjabi', 199.00, 'In Stock', 'Printed Dull Satin', 'True Blue', 30, 'Splash is an art by itself even after all of the arguments that have been going on. It has been known as an art as one can see how it pops out the vibe, the mood and the urgency to wear this beautiful design that somehow gives a relax and cool look that one have been looking for any occasions. Pastels were chosen to be the color as the focus is well define to be relax and cool.', '../assets/images/products/Abeera/abeera_punjabi_true_blue.jpg', 'New', ''),
(4, 'ABEERA04', 'Prints', 'Abeera', 'Abeera Punjabi', 199.00, 'In Stock', 'Printed Dull Satin', 'Buttered Brown', 30, 'Splash is an art by itself even after all of the arguments that have been going on. It has been known as an art as one can see how it pops out the vibe, the mood and the urgency to wear this beautiful design that somehow gives a relax and cool look that one have been looking for any occasions. Pastels were chosen to be the color as the focus is well define to be relax and cool.', '../assets/images/products/Abeera/abeera_punjabi_buttered_brown.jpg', '', ''),
(5, 'ABEERA05', 'Prints', 'Abeera', 'Abeera Jumpsuit', 219.00, 'In Stock', 'Printed Dull Satin', 'True Blue', 30, 'Splash is an art by itself even after all of the arguments that have been going on. It has been known as an art as one can see how it pops out the vibe, the mood and the urgency to wear this beautiful design that somehow gives a relax and cool look that one have been looking for any occasions. Pastels were chosen to be the color as the focus is well define to be relax and cool.', '../assets/images/products/Abeera/abeera_jumpsuit_true_blue.jpg', 'New', 'Raya'),
(6, 'ELORA01', 'Prints', 'Elora', 'Elora Abaya', 199.00, 'In Stock', 'Printed Dull Satin', 'Breezy Beige', 30, 'Brought back as one the best-selling #AnishRayaCollection with new colours added and also in kurung design to the collection, the famous Elora serve as the perfect medium for your adoration of the beautiful creations of floral nature. Carry the very air of romance wherever you go with this Kurung. Elora also features wudhu & nursing friendly as well as hidden side pockets.', '../assets/images/products/Elora/elora_abaya_breezy_beige.jpg', '', ''),
(7, 'ELORA02', 'Prints', 'Elora', 'Elora Abaya', 199.00, 'In Stock', 'Printed Dull Satin', 'Mint Green', 30, 'Brought back as one the best-selling #AnishRayaCollection with new colours added and also in kurung design to the collection, the famous Elora serve as the perfect medium for your adoration of the beautiful creations of floral nature. Carry the very air of romance wherever you go with this Kurung. Elora also features wudhu & nursing friendly as well as hidden side pockets.', '../assets/images/products/Elora/elora_abaya_mint_green.jpg', 'New', ''),
(33, 'ELORA03', 'Prints', 'Elora', 'Elora Abaya', 199.00, 'In Stock', 'Printed Dull Satin', 'Pink', 30, 'Brought back as one the best-selling #AnishRayaCollection with new colours added and also in kurung design to the collection, the famous Elora serve as the perfect medium for your adoration of the beautiful creations of floral nature. Carry the very air of romance wherever you go with this Kurung. Elora also features wudhu & nursing friendly as well as hidden side pockets.', '../assets/images/products/Elora/elora_abaya_baby_pink.jpg', '', ''),
(34, 'ELORA04', 'Prints', 'Elora', 'Elora Kurung', 219.00, 'In Stock', 'Printed Dull Satin', 'Breezy Beige', 30, 'Brought back as one the best-selling #AnishRayaCollection with new colours added and also in kurung design to the collection, the famous Elora serve as the perfect medium for your adoration of the beautiful creations of floral nature. Carry the very air of romance wherever you go with this Kurung. Elora also features wudhu & nursing friendly as well as hidden side pockets.', '../assets/images/products/Elora/elora_kurung_breezy_beige.jpg', 'New', 'Raya'),
(36, 'ELORA05', 'Prints', 'Elora', 'Elora Kurung', 219.00, 'In Stock', 'Printed Dull Satin', 'Pink', 30, 'Brought back as one the best-selling #AnishRayaCollection with new colours added and also in kurung design to the collection, the famous Elora serve as the perfect medium for your adoration of the beautiful creations of floral nature. Carry the very air of romance wherever you go with this Kurung. Elora also features wudhu & nursing friendly as well as hidden side pockets.', '../assets/images/products/Elora/elora_kurung_baby_pink.jpg', '', ''),
(37, 'NAMRA01', 'Prints', 'Namra', 'Namra Abaya & Pants', 249.00, 'In Stock', 'Printed Dull Satin', 'Midnight Blue', 30, 'Combination of two famaliar yet famous plane figures of circles and lines that pops out the exlusive look one could ever ask for. It does potrey the mood of being casual and beauty at the same time. Emblishment of diamonds all around the sharp edges eventually let you sore up even higher when donning it at a place with lights.', '../assets/images/products/Namra/namra_abaya_and_pants_midnight_blue.jpg', 'New', ''),
(38, 'NAMRA02', 'Prints', 'Namra', 'Namra Abaya & Pants', 249.00, 'In Stock', 'Printed Dull Satin', 'Pink', 30, 'Combination of two famaliar yet famous plane figures of circles and lines that pops out the exlusive look one could ever ask for. It does potrey the mood of being casual and beauty at the same time. Emblishment of diamonds all around the sharp edges eventually let you sore up even higher when donning it at a place with lights.', '../assets/images/products/Namra/namra_abaya_and_pants_pink.jpg', '', ''),
(39, 'NAMRA03', 'Prints', 'Namra', 'Namra Abaya & Pants', 249.00, 'In Stock', 'Printed Dull Satin', 'Purple Grey', 30, 'Combination of two famaliar yet famous plane figures of circles and lines that pops out the exlusive look one could ever ask for. It does potrey the mood of being casual and beauty at the same time. Emblishment of diamonds all around the sharp edges eventually let you sore up even higher when donning it at a place with lights.', '../assets/images/products/Namra/namra_abaya_and_pants_purple_grey.jpg', 'New', 'Raya'),
(40, 'NAMRA04', 'Prints', 'Namra', 'Namra Blouse & Pants', 239.00, 'In Stock', 'Printed Dull Satin', 'Midnight Blue', 30, 'Combination of two famaliar yet famous plane figures of circles and lines that pops out the exlusive look one could ever ask for. It does potrey the mood of being casual and beauty at the same time. Emblishment of diamonds all around the sharp edges eventually let you sore up even higher when donning it at a place with lights.', '../assets/images/products/Namra/namra_blouse_and_pants_midnight_blue.jpg', '', ''),
(41, 'NAMRA05', 'Prints', 'Namra', 'Namra Blouse & Pants', 239.00, 'In Stock', 'Printed Dull Satin', 'Pink', 30, 'Combination of two famaliar yet famous plane figures of circles and lines that pops out the exlusive look one could ever ask for. It does potrey the mood of being casual and beauty at the same time. Emblishment of diamonds all around the sharp edges eventually let you sore up even higher when donning it at a place with lights.', '../assets/images/products/Namra/namra_blouse_and_pants_pink.jpg', 'New', ''),
(42, 'ALEEYA01', 'Plains', 'Aleeya', 'Aleeya', 179.00, 'In Stock', 'None', 'Dusty Purple', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Aleeya/aleeya_dusty_purple.jpg', '', ''),
(43, 'ALEEYA02', 'Plains', 'Aleeya', 'Aleeya', 179.00, 'In Stock', 'None', 'Emerald Green', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Aleeya/aleeya_emerald_green.jpg', 'New', 'Raya'),
(44, 'ALEEYA03', 'Plains', 'Aleeya', 'Aleeya', 179.00, 'In Stock', 'None', 'Midnight Blue', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Aleeya/aleeya_midnight_blue.jpg', '', ''),
(45, 'ALEEYA04', 'Plains', 'Aleeya', 'Aleeya', 179.00, 'In Stock', 'None', 'Pearl White', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Aleeya/aleeya_pearl_white.jpg', 'New', ''),
(46, 'ALEEYA05', 'Plains', 'Aleeya', 'Aleeya', 179.00, 'In Stock', 'None', 'Pink', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Aleeya/aleeya_pink.jpg', '', ''),
(47, 'JAMEELA01', 'Plains', 'Jameela', 'Jameela', 219.00, 'In Stock', 'Scuba', 'Maroon', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Jameela/jameela_maroon.jpg', 'New', ''),
(48, 'JAMEELA02', 'Plains', 'Jameela', 'Jameela', 219.00, 'In Stock', 'Scuba', 'Midnight Blue', 30, '9.7 Inch Display. 2 GB RAM | 128 GB Internal Memory. M9 Coprocessor | iOS 9 (OS). 12 MP Rear Camera | 5 MP Front Camera.The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Jameela/jameela_midnight_blue.jpg', '', 'Raya'),
(49, 'JAMEELA03', 'Plains', 'Jameela', 'Jameela', 219.00, 'In Stock', 'Scuba', 'Royal Nude', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Jameela/jameela_royal_nude.jpg', 'New', ''),
(50, 'JAMEELA04', 'Plains', 'Jameela', 'Jameela', 219.00, 'In Stock', 'Scuba', 'Saddle Brown', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Jameela/jameela_saddle_brown.jpg', '', ''),
(51, 'JAMEELA05', 'Plains', 'Jameela', 'Jameela', 219.00, 'In Stock', 'Scuba', 'Summer Blue', 30, 'The most easy going design that ANISH produced for this Raya 2017. It comes with two cute ribbons and a material that is very comfy and easy on the iron.', '../assets/images/products/Jameela/jameela_summer_blue.jpg', 'New', ''),
(52, 'MAREEEYA01', 'Plains', 'Mareeya', 'Mareeya', 239.00, 'In Stock', 'Scuba', 'Saddle Brown', 30, 'The most exclusive and modern look that one could ever asked for this Raya 2017. The material scuba gives a very good feeling when touching it. Mareeya comes with 3D Flower that gives a bit additional feeling of sweet other than exclusive and modern.', '../assets/images/products/Mareeya/mareeya_emerald_green.jpg', '', 'Raya'),
(53, 'MAREEEYA02', 'Plains', 'Mareeya', 'Mareeya', 239.00, 'In Stock', 'Scuba', 'Saddle Brown', 30, 'The most exclusive and modern look that one could ever asked for this Raya 2017. The material scuba gives a very good feeling when touching it. Mareeya comes with 3D Flower that gives a bit additional feeling of sweet other than exclusive and modern.', '../assets/images/products/Mareeya/mareeya_maroon.jpg', 'New', ''),
(54, 'MAREEEYA03', 'Plains', 'Mareeya', 'Mareeya', 239.00, 'In Stock', 'Scuba', 'Saddle Brown', 30, 'The most exclusive and modern look that one could ever asked for this Raya 2017. The material scuba gives a very good feeling when touching it. Mareeya comes with 3D Flower that gives a bit additional feeling of sweet other than exclusive and modern.', '../assets/images/products/Mareeya/mareeya_midnight_blue.jpg', '', ''),
(55, 'MAREEEYA04', 'Plains', 'Mareeya', 'Mareeya', 239.00, 'In Stock', 'Scuba', 'Saddle Brown', 30, 'The most exclusive and modern look that one could ever asked for this Raya 2017. The material scuba gives a very good feeling when touching it. Mareeya comes with 3D Flower that gives a bit additional feeling of sweet other than exclusive and modern.', '../assets/images/products/Mareeya/mareeya_royal_nude.jpg', 'New', ''),
(56, 'MAREEEYA05', 'Plains', 'Mareeya', 'Mareeya', 239.00, 'In Stock', 'Scuba', 'Saddle Brown', 30, 'The most exclusive and modern look that one could ever asked for this Raya 2017. The material scuba gives a very good feeling when touching it. Mareeya comes with 3D Flower that gives a bit additional feeling of sweet other than exclusive and modern.', '../assets/images/products/Mareeya/mareeya_summer_blue.jpg', '', 'Raya');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `email`, `phonenumber`, `message`) VALUES
(1, 'Admin', 'admin@yahoo.com', '01234567889', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `order_user` text NOT NULL,
  `name` varchar(250) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_color` varchar(50) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date_order` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1009 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `order_user`, `name`, `item_code`, `item_name`, `item_price`, `item_color`, `item_qty`, `total`, `status`, `date_order`) VALUES
(1004, 10001, 'admin@yahoo.com', 'Admin', 'ALEEYA03', 'Aleeya', '179.00', 'Midnight Blue', 2, '358', 'Shipping', '2017-06-15 10:59:48'),
(1005, 10001, 'admin@yahoo.com', 'Admin', 'ABEERA05', 'Abeera Jumpsuit', '219.00', 'True Blue', 2, '438', 'Processing', '2017-06-15 11:01:37'),
(1006, 10001, 'admin@yahoo.com', 'Admin', 'ABEERA03', 'Abeera Punjabi', '199.00', 'True Blue', 2, '398', 'Shipping', '2017-06-15 12:19:06'),
(1007, 10001, 'admin@yahoo.com', 'Admin', 'ABEERA01', 'Abeera Abaya', '199.00', 'True Blue', 2, '398', 'Shipping', '2017-06-15 12:31:45'),
(1008, 10001, 'admin@yahoo.com', 'Admin', 'ABEERA05', 'Abeera Jumpsuit', '219.00', 'True Blue', 1, '219', 'Processing', '2017-06-15 13:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `name` (`name`,`email`),
  KEY `username_2` (`password`,`name`,`email`),
  KEY `username_3` (`password`,`name`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `phonenumber`) VALUES
(1, 'Admin', 'admin@yahoo.com', 'admin123', '01234567889'),
(2, 'Mohamad Admin Bin Demo', 'admin.hello@gmail.com', '123456', '011-34556789');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
