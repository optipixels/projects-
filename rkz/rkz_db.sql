-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2016 at 09:29 AM
-- Server version: 5.5.47-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rkz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `url`) VALUES
(1, 'Our Profile', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/about1.jpeg'),
(2, 'Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est. Phasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/about2.png'),
(3, 'Another Tab', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est. Phasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/about3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `title`) VALUES
(1, 'Surgical Instrument'),
(2, 'Dental Instruments'),
(3, 'Beauty Instruments'),
(4, 'Holloware Instruments'),
(5, 'Veterinary Instruments'),
(6, 'tattos instrumetns');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `year` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `title`, `description`, `year`, `url`) VALUES
(1, 'ISO 14001:2004', 'Maecenas eros mi, lacinia eu ultricies vel, elementum et justo. Ut at tortor a odio vestibulum suscipit non sit amet dolor. Morbi molestie magna nec metus facilisis, at iaculis mi adipiscing. Praesent ac diam velit. Curabitur lacinia tristique velit ut laoreet. Nam pretium id risus vitae fermentum. Aenean eu euismod justo. Aliquam sodales tortor elit, non luctus felis tristique sit amet.', '2004', 'images/certification1.jpeg'),
(2, 'ISO 9001:2008', 'Maecenas eros mi, lacinia eu ultricies vel, elementum et justo. Ut at tortor a odio vestibulum suscipit non sit amet dolor. Morbi molestie magna nec metus facilisis, at iaculis mi adipiscing. Praesent ac diam velit. Curabitur lacinia tristique velit ut laoreet. Nam pretium id risus vitae fermentum. Aenean eu euismod justo. Aliquam sodales tortor elit, non luctus felis tristique sit amet.', '2008', 'images/certification2.jpeg'),
(4, 'Child Labour', 'Maecenas eros mi, lacinia eu ultricies vel, elementum et justo. Ut at tortor a odio vestibulum suscipit non sit amet dolor. Morbi molestie magna nec metus facilisis, at iaculis mi adipiscing. Praesent ac diam velit. Curabitur lacinia tristique velit ut laoreet. Nam pretium id risus vitae fermentum. Aenean eu euismod justo. Aliquam sodales tortor elit, non luctus felis tristique sit amet.', '2016', 'images/certification3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `map` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `map`, `address`, `phone`, `fax`, `email`) VALUES
(1, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.011252141971!2d74.5174394151166!3d32.499128405409785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea38cf4c1a33%3A0x1c3677e44372f31e!2sCapital+Rd%2C+Sialkot%2C+Pakistan!5e0!3m2!1sen!2s!4v1456325513875" width="600" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>', 'Capital Road, Sialkot, Pakistan', '+92 123456789', '+92-123456789', 'info@rkz.com.pk');

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `title`, `article`, `featured`, `description`, `url`, `cat_id`) VALUES
(1, 'Product Title', 'RKZ001', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod1.jpeg', 1),
(2, 'Product Title', 'RKZ002', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod2.jpeg', 1),
(3, 'Product Title', 'RKZ003', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod3.jpeg', 1),
(4, 'Product Title', 'RKZ004', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod4.jpeg', 1),
(5, 'Product Title', 'RKZ005', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod5.jpeg', 3),
(6, 'Product Title', 'RKZ006', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod6.jpeg', 3),
(7, 'Product Title', 'RKZ007', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod7.jpeg', 3),
(8, 'Product Title', 'RKZ008', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod8.jpeg', 3),
(9, 'Product Title', 'RKZ009', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod9.jpeg', 2),
(10, 'Product Title', 'RKZ010', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod10.jpeg', 2),
(11, 'Product Title', 'RKZ011', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod11.jpeg', 2),
(12, 'Product Title', 'RKZ012', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod12.jpeg', 2),
(13, 'Product Title', 'RKZ013', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod13.jpeg', 4),
(14, 'Product Title', 'RKZ014', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod14.jpeg', 4),
(15, 'Product Title', 'RKZ015', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod15.jpeg', 4),
(16, 'Product Title', 'RKZ016', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod16.jpeg', 4),
(17, 'Product Title', 'RKZ017', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod17.jpeg', 5),
(18, 'Product Title', 'RKZ018', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod18.jpeg', 5),
(19, 'Product Title', 'RKZ019', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod19.jpeg', 5),
(20, 'Product Title', 'RKZ020', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod20.jpeg', 5),
(21, 'Product Title', 'RKZ021', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod21.jpeg', 1),
(22, 'Product Title', 'RKZ022', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod22.jpeg', 3),
(23, 'Product Title', 'RKZ023', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod23.jpeg', 2),
(24, 'Product Title', 'RKZ024', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod24.jpeg', 4),
(25, 'Product Title', 'RKZ025', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', 'images/prod25.jpeg', 5),
(26, 'ent diagnostic instruments japan made', 'japan made', 'yes', 'japan made', 'images/prod26.jpeg', 1),
(27, 'piercing tools', 'tattos instruemnts', 'select', 'tattoos instruemns', 'images/prod27.jpeg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `sub_title`, `url`) VALUES
(1, 'RKZ Surgicals Pvt Ltd', 'Name of Quality', 'images/slider1.jpg'),
(2, 'RKZ Surgicals Pvt Ltd', 'Name of Quality 	', 'images/slider2.jpg'),
(7, 'RKZ Surgicals Pvt Ltd', 'Name of Quality', 'images/slider3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `special_announce`
--

CREATE TABLE `special_announce` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_announce`
--

INSERT INTO `special_announce` (`id`, `url`, `description`, `date`) VALUES
(2, 'images/special_announce1.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tincidunt lacus, nec tempor erat. Cras nibh ex, hendrerit id varius sit amet, imperdiet eget massa. Pellentesque ipsum tellus, fringilla in scelerisque porttitor, facilisis ac elit. In interdum ullamcorper elit vitae placerat. Phasellus et felis auctor, viverra odio sit amet, gravida ligula. Sed ut pulvinar lectus. In ornare ex est, nec mattis odio dictum eu. Donec molestie at magna ac dapibus. Fusce ornare nisl eu dui aliquet hendrerit. Pellentesque non euismod erat. Fusce pulvinar nunc urna, vel vulputate sapien congue sit amet. ', '04/11/2016');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `title`, `mail`, `phone`, `url`) VALUES
(1, 'Team Member 1', 'General Manager', 'team@rkz.com.pk', '+92-123456789', ''),
(2, 'Team Member 2', 'Administrative Manager', 'team@rkz.com.pk', '+92-123456789', ''),
(3, 'Team Member 3', 'Assistant General Manager', 'team@rkz.com.pk', '+92-123456789', ''),
(4, 'Team Member 4', 'Finance & Admin', 'team@rkz.com.pk', '+92-123456789', ''),
(5, 'Team Member 5', 'Sales Executive', 'team@rkz.com.pk', '+92-123456789', ''),
(7, 'Team Member 6', 'Manager', 'team@rkz.com.pk', '+92-123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `type`, `access`) VALUES
(1, 'admin', 'admin', 'Muhammad Tariq', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_announce`
--
ALTER TABLE `special_announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `special_announce`
--
ALTER TABLE `special_announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
