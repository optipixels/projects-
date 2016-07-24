-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2016 at 05:04 PM
-- Server version: 5.5.47-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitfor_db`
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
(1, 'Our Profile', 'The world known FITFOR TRADING CO., Sialkot-Pakistan, serving all over the world since 1967 is specialized inâ€¦<br><br>\r\n\r\nMilitary Uniform Accessories, such as Hand Embroidered Bullion Badges/Silk thread and Machine embroidered Patches, Shoulder Boards, Epaulettes, Regalia, Cap Visors, Pennants, Lanyards, Metal badges, Buttons, Leather Gloves, Leather & Web Belts and other related items for Military, Air Force, Navy Police, Clubs and Associations.<br><br>\r\n\r\nFITFOR TRADING Company is the result of experience of its partners. Partners are striving hard to deliver high range quality products with very competitive prices.<br><br>\r\nAfter serving our clients all over the globe with different Uniform Accessories, now we feel pleasure endeavored to display some items which FITFOR has produced for its worthy customers in the past years to give an idea what FITFOR finished products look like.<br><br>\r\n\r\nFITFOR is proud to offer the best material used on products and available in the Fitfor premises for urgent deliveries.<br><br>\r\n\r\n- Half Fine gold/silver bullion & laces (French Origin)<br>\r\n- 5 Grms gold/silver bullion & laces (French Origin)<br>\r\n- 2% gold bullion (French Origin)<br>\r\n- Pure silver bullion & Passing thread (French Origin)<br>\r\n- Gold/Silver bullion, Passing thread & laces (Pakistan Origin)<br><br>\r\n\r\nFITFOR can supply above materials with confirmed guarantee when it is used on our finished products.\r\n', 'images/about1.jpeg'),
(2, 'Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est. Phasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/about2.png'),
(3, 'Factory View', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est. Phasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/about3.jpeg');

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
(1, 'Hand Made Embriodery'),
(2, 'Machine Embriodery Badges'),
(3, 'Peaks'),
(4, 'Royal Uniform Embroidery'),
(5, 'Collar Embroidery '),
(7, 'Uniform Curls'),
(8, 'Uniform Cuffs '),
(9, 'Shoulder Sleeves'),
(10, 'Shoulder Board'),
(11, 'Chevrons'),
(12, 'Shoulder Cords'),
(13, 'Shoulder Epaulette '),
(14, 'Cap cord & Chinstraps'),
(15, 'Shoulder & Waist Sashes'),
(16, 'Uniform Lanyards'),
(17, 'Sword Knots'),
(18, 'Dress Cords'),
(19, 'Aiguilettes'),
(20, 'Tassels'),
(22, 'Knots & Bullions'),
(23, 'Knots & Buttons'),
(24, 'Metal Buckles'),
(25, 'Metal Tips '),
(26, 'Buttons'),
(27, 'Berets & Ball Caps'),
(28, 'Uniform Caps'),
(29, 'Plums'),
(30, 'Laces'),
(31, 'Cords'),
(32, 'Ribbon & Web strap'),
(33, 'Sticks'),
(34, 'Leather Items'),
(35, 'Gloves'),
(36, 'Leather & Web Belts'),
(37, 'Masonic Items'),
(38, 'Ties');

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
(1, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.011252141971!2d74.5174394151166!3d32.499128405409785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea38cf4c1a33%3A0x1c3677e44372f31e!2sCapital+Rd%2C+Sialkot%2C+Pakistan!5e0!3m2!1sen!2s!4v1456325513875" width="600" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>', 'P.O.Box # 825 Subhan Street, <br>Capital Road, Sialkot - 51310 - Pakistan', '+92 (52) 356 0641 /2 /3', '+92-52-3560692', 'info@fitfor.com.pk');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `title`, `text`, `url`) VALUES
(2, 'Process Step 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est. Phasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/process-1.jpeg'),
(3, 'Process Step 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est. Phasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/process-3.jpeg'),
(4, 'Process Step 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est. Phasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/process-4.jpeg'),
(5, 'Process Step 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est. Phasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/process-5.jpeg');

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
(1, 'New Product 1', 'FTC-117', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-1.jpeg', 19),
(2, 'New Product 2', 'FTC-118', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-2.jpeg', 19),
(3, 'New Product 3', 'FTC-119', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-3.jpeg', 19),
(4, 'Product Title', 'FTC - 120', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-4.jpeg', 27),
(5, 'Product Title', 'FTC - 121', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-5.jpeg', 27),
(6, 'Product Title', 'FTC - 122', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-6.jpeg', 26),
(7, 'Product Title', 'FTC - 123', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-7.jpeg', 26),
(8, 'Product Title', 'FTC - 124', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-8.jpeg', 26),
(9, 'Product Title', 'FTC - 125', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-9.jpeg', 26),
(10, 'Product Title', 'FTC - 126', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-10.jpeg', 14),
(11, 'Product Title', 'FTC - 127', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-11.jpeg', 14),
(12, 'Product Title', 'FTC - 128', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-12.jpeg', 14),
(13, 'Product Title', 'FTC - 129', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-13.jpeg', 11),
(14, 'Product Title', 'FTC - 130', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-14.jpeg', 11),
(15, 'Product Title', 'FTC - 131', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-15.jpeg', 11),
(16, 'Product Title', 'FTC - 132', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-16.jpeg', 11),
(17, 'Product Title', 'FTC - 133', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-17.jpeg', 5),
(18, 'Product Title', 'FTC - 134', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-18.jpeg', 5),
(19, 'Product Title', 'FTC - 135', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-19.jpeg', 5),
(20, 'Product Title', 'FTC - 136', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-20.jpeg', 5),
(21, 'Product Title', 'FTC - 137', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-21.jpeg', 31),
(22, 'Product Title', 'FTC - 138', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-22.jpeg', 31),
(23, 'Product Title', 'FTC - 139', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-23.jpeg', 31),
(24, 'Product Title', 'FTC - 140', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-24.jpeg', 31),
(25, 'Product Title', 'FTC - 141', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-25.jpeg', 31),
(26, 'Product Title', 'FTC - 142', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-26.jpeg', 31),
(27, 'Product Title', 'FTC - 143', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-27.jpeg', 18),
(28, 'Product Title', 'FTC - 144', 'yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-28.jpeg', 18),
(29, 'Product Title', 'FTC - 145', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-29.jpeg', 18),
(30, 'Product Title', 'FTC - 146', 'no', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nunc quis purus luctus dignissim vitae non justo. In vel arcu turpis. Quisque dignissim ultrices enim at sollicitudin. Ut fringilla dolor a malesuada ultricies. Vestibulum sed dictum diam. Ut rutrum purus id justo luctus, cursus ullamcorper mauris imperdiet. Aliquam erat volutpat. Nulla metus diam, vehicula a pretium at, condimentum a libero. Ut dignissim arcu a ligula vulputate bibendum. Morbi eu elit placerat, varius enim quis, efficitur est.\r\n\r\nPhasellus sit amet placerat ex. In faucibus ornare arcu at condimentum. Morbi ut massa id lorem gravida pulvinar. Phasellus pharetra porta neque, nec auctor dui luctus vitae. Fusce sodales, nisl at congue semper, lorem odio molestie augue, at aliquet neque odio nec mi. Maecenas convallis lacus quis laoreet tincidunt. Nam id lacus nibh. Quisque egestas convallis augue, quis facilisis felis congue id. Aliquam erat volutpat. Curabitur at ornare est. Cras euismod velit quis turpis sollicitudin, eu mollis eros dapibus.', 'images/prod-30.jpeg', 18);

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
(1, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider1.jpg'),
(2, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider2.jpg'),
(7, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider3.jpeg'),
(8, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider8.jpeg'),
(9, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider9.jpeg'),
(10, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider10.jpeg'),
(12, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider12.jpeg'),
(13, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider13.jpeg'),
(14, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider14.jpeg'),
(15, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider15.jpeg'),
(16, 'We Are <span class=\'yellow\'>Fit</span><span class=\'blue\'>For</span>', 'One of The Best', 'images/slider16.jpeg');

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
(1, 'Muhammad Amin Saeed (Late)', 'Founder (1967 - 2010)', 'team@fitfor.com.pk', 'Not Available', 'images/team1.jpeg'),
(2, 'Adnan Amin', 'Managing Partner', 'team@fitfor.com.pk', '+92-123456789', 'images/team2.jpeg'),
(3, 'Irfan Amin', 'Managing Partner', 'team@fitfor.com.pk', '+92-123456789', 'images/team3.jpeg'),
(4, 'Hassan Adnan', 'Production Managing Partner', 'team@fitfor.com.pk', '+92-123456789', 'images/team4.jpeg'),
(5, 'Faiz-ur-Rehman Irfan', 'Production Managing Partner', 'team@fitfor.com.pk', '+92-123456789', 'images/team5.jpeg'),
(7, 'Khurram Adnan', 'Partner', 'team@fitfor.com.pk', '+92-123456789', 'images/team7.jpeg'),
(8, 'Saif-ur-Rehman Irfan', '(Under-Study) Partner', 'team@fitfor.com.pk', '+92-123456789', 'images/team8.jpeg');

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
(1, 'admin', 'admin', 'Khurram Javed', 'admin', ''),
(3, 'k9999', '123456', 'Khurram', 'user', 'home, process, products, special');

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
-- Indexes for table `process`
--
ALTER TABLE `process`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
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
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `special_announce`
--
ALTER TABLE `special_announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
