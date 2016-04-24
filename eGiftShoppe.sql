-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2015 at 03:57 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eGiftShoppe`
-- Database: `eGiftShoppe`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `contact` varchar(40) DEFAULT NULL,
  `address` text,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `website` varchar(40) DEFAULT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE IF NOT EXISTS `customer_detail` (
`customer_id` int(100) NOT NULL,
  `username` varchar(199) DEFAULT NULL,
  `password` varchar(199) DEFAULT NULL,
  `customer_fname` varchar(199) DEFAULT NULL,
  `customer_lname` varchar(199) DEFAULT NULL,
  `customer_loc` varchar(199) DEFAULT NULL,
  `quantity_purch` int(199) DEFAULT NULL,
  `item_purch` varchar(199) DEFAULT NULL,
  `total_purch` int(199) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`customer_id`, `username`, `password`, `customer_fname`, `customer_lname`, `customer_loc`, `quantity_purch`, `item_purch`, `total_purch`) VALUES
(10, NULL, NULL, 'sample', 'sample1', 'Lapu-Lapu City', 2, 'Flower', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`feedback_id` int(100) NOT NULL,
  `feedback_firstname` longtext NOT NULL,
  `feedback_lastname` longtext NOT NULL,
  `feedback_email` mediumtext NOT NULL,
  `feedback_number` mediumtext NOT NULL,
  `feedback_message` mediumtext NOT NULL,
  `date_published` mediumtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_firstname`, `feedback_lastname`, `feedback_email`, `feedback_number`, `feedback_message`, `date_published`) VALUES
(2, '', '', '', '', '', '2015-10-20 00:54:03'),
(3, 'Jade', 'Dalion', 'jadedalion@yahoo.com', '09236655885', 'Ambot nimo! bati kag nawng', '2015-10-20 00:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
`id` int(10) unsigned NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Due',
  `date_due` date DEFAULT NULL,
  `client` int(10) unsigned DEFAULT NULL,
  `client_contact` int(10) unsigned DEFAULT NULL,
  `client_address` int(10) unsigned DEFAULT NULL,
  `client_phone` int(10) unsigned DEFAULT NULL,
  `client_email` int(10) unsigned DEFAULT NULL,
  `client_website` int(10) unsigned DEFAULT NULL,
  `client_comments` int(10) unsigned DEFAULT NULL,
  `subtotal` decimal(9,2) DEFAULT NULL,
  `discount` decimal(4,2) DEFAULT '0.00',
  `tax` decimal(9,2) DEFAULT NULL,
  `total` decimal(9,2) DEFAULT '0.00',
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE IF NOT EXISTS `invoice_items` (
`id` int(10) unsigned NOT NULL,
  `invoice` int(10) unsigned DEFAULT NULL,
  `item` varchar(200) DEFAULT NULL,
  `unit_price` decimal(9,2) DEFAULT '0.00',
  `qty` decimal(9,3) DEFAULT '1.000',
  `tax` decimal(4,2) DEFAULT '0.00',
  `price` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_table`
--

CREATE TABLE IF NOT EXISTS `invoice_table` (
`Invoice_id` int(11) NOT NULL,
  `Inv_number` int(11) DEFAULT NULL,
  `Inv_date` date DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Item_quantity` int(11) DEFAULT NULL,
  `Unit_price` int(11) DEFAULT NULL,
  `Item_description` varchar(50) DEFAULT NULL,
  `Amount_Due` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `invoice_table`
--

INSERT INTO `invoice_table` (`Invoice_id`, `Inv_number`, `Inv_date`, `Address`, `Item_quantity`, `Unit_price`, `Item_description`, `Amount_Due`) VALUES
(1, 2000, '0000-00-00', 'Cebu City', 5, 360, 'Santan', 1800),
(2, 2001, '0000-00-00', 'Lapu-Lapu City', 4, 370, 'Santan', 1480),
(3, 2002, '0000-00-00', 'Mandaue City', 6, 220, 'Santan', 1320);

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE IF NOT EXISTS `membership_grouppermissions` (
`permissionID` int(10) unsigned NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 1, 'clients', 0, 0, 0, 0),
(2, 1, 'invoices', 0, 0, 0, 0),
(3, 2, 'clients', 0, 0, 0, 0),
(4, 1, 'invoice_items', 0, 0, 0, 0),
(5, 2, 'invoices', 0, 0, 0, 0),
(6, 2, 'invoice_items', 0, 0, 0, 0),
(7, 3, 'clients', 1, 3, 3, 3),
(8, 3, 'invoices', 1, 3, 3, 3),
(9, 3, 'invoice_items', 1, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE IF NOT EXISTS `membership_groups` (
`groupID` int(10) unsigned NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2015-10-20', 0, 0),
(2, 'anonymous', 'Anonymous group created automatically on 2015-10-20', 0, 0),
(3, 'Admins', 'Admin group created automatically on 2015-10-20', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE IF NOT EXISTS `membership_userrecords` (
`recID` bigint(20) unsigned NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) unsigned DEFAULT NULL,
  `dateUpdated` bigint(20) unsigned DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE IF NOT EXISTS `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) unsigned DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text,
  `custom2` text,
  `custom3` text,
  `custom4` text,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@localhost', '2015-10-20', 3, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2015-10-20'),
('guest', NULL, NULL, '2015-10-20', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2015-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE IF NOT EXISTS `orderlist` (
`orderlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`orderlist_id`, `product_id`, `product_name`, `customer_id`, `product_qty`, `product_price`, `flag`) VALUES
(11, 1, 'Arms of Burning Turmoil', 2, 5, 100, 1),
(13, 1, 'Arms of Burning Turmoil', 2, 5, 100, 1),
(14, 2, 'Artillery of the Crested Cannoneer', 2, 4, 120, 1),
(15, 7, 'Spoils of the Shifting Sorcerer', 2, 4, 120, 1),
(16, 3, 'Dread of the Gleaming Seal Set', 11, 5, 100, 1),
(17, 5, 'Bonds of Vincere', 2, 6, 281, 1),
(20, 4, 'Formed Alloy Set', 2, 5, 250, 1),
(25, 1, 'Red Rose', 2, 4, 250, 1),
(26, 3, 'White Rose', 16, 5, 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_qty_ordered` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `flag`, `product_id`, `product_name`, `product_price`, `customer_id`, `product_qty_ordered`) VALUES
(7, 0, 1, 'Arms of Burning Turmoil', 100, 2, 5),
(8, 0, 1, 'Arms of Burning Turmoil', 100, 2, 5),
(9, 0, 2, 'Artillery of the Crested Cannoneer', 120, 2, 4),
(10, 0, 7, 'Spoils of the Shifting Sorcerer', 120, 2, 4),
(11, 0, 3, 'Dread of the Gleaming Seal Set', 100, 11, 5),
(12, 0, 5, 'Bonds of Vincere', 281, 2, 6),
(13, 0, 4, 'Formed Alloy Set', 250, 2, 5),
(14, 0, 1, 'Red Rose', 250, 2, 4),
(15, 0, 3, 'White Rose', 300, 16, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_qty`, `product_desc`, `product_price`, `product_category_id`, `flag`) VALUES
(1, 'Red Rose', 296, 'Seasonal Flowers', 250, 0, 0),
(3, 'White Rose', 495, 'Seasonal Flowers', 300, 0, 0),
(4, 'Alang-Alang', 300, 'Seasonal Flowers', 400, 0, 0),
(5, 'Gumamela', 300, 'Seasonal Flowers', 370, 0, 0),
(6, 'Santan', 300, 'Seasonal Flowers', 360, 0, 0),
(7, 'Sampaguita', 300, 'Seasonal Flowers', 220, 0, 0),
(8, 'Flower Aster', 300, 'Seasonal Flowers', 330, 0, 0),
(10, 'Marigold', 300, 'Seasonal Flowers', 300, 0, 0),
(11, 'Chrysanthenum', 200, 'Seasonal Flowers', 240, 0, 0),
(12, 'Pink Bouquet with Orchids/Roses', 200, 'Wedding Bouquet', 420, 0, 0),
(13, 'Hydrangea Bouquet', 200, 'Wedding Bouquet', 550, 0, 0),
(14, 'Red Roses Bouquet', 200, 'Wedding Bouquet', 800, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
`product_category_id` int(11) NOT NULL,
  `product_category_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE IF NOT EXISTS `product_table` (
`product_id` int(11) NOT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `product_type` varchar(20) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_name`, `product_type`, `product_price`) VALUES
(1, 'Red Rose', 'Seasonal', 250),
(2, 'White Rose', 'Seasonal', 300),
(3, 'Alang-alang', 'Seasonal', 400),
(4, 'Gumamela', 'Seasonal', 370),
(5, 'Santan', 'Seasonal', 360),
(6, 'Sampaguita', 'Seasonal', 220);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_mname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_address1` varchar(255) NOT NULL,
  `user_zip` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_telephone` int(11) NOT NULL,
  `user_mobile_phone` bigint(20) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_display_name` varchar(255) NOT NULL,
  `user_category_type` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_gender`, `user_fname`, `user_mname`, `user_lname`, `user_address1`, `user_zip`, `user_city`, `user_country`, `user_telephone`, `user_mobile_phone`, `user_email`, `user_name`, `user_password`, `user_display_name`, `user_category_type`) VALUES
(1, 'Mr', 'Jason', 'Ycong', 'Suico', 'Talamban', 6000, 'Cebu', 'Philippines', 4145020, 9439131700, 'jason_suico@yahoo.com', 'admin', 'admin', 'Admin', 1),
(2, 'Mr', 'Marlon', 'P', 'Nepangue', 'Cebu City', 6000, 'Cebu', 'Philippines', 4228846, 9339984812, 'marlonnepangue@yahoo.com', 'Marlon', 'user', 'Lon', 2),
(7, 'Mr', 'Jason', 'Ycong ', 'Suico', 'Talamban', 6000, 'Cebu', 'Philippines ', 123123, 1251251251, 'jason.suico@yahoo.com', 'Sazimai', '12345', 'theboss', 1),
(10, 'Mrs', 'Emily', '', 'Grey', 'Talamban', 6000, 'Cebu', 'Philippines ', 154654654, 1251256126, 'emilygrey@gmail.com', 'emily', 'qweasdzxc', 'EmilyG', 1),
(11, 'Mrs', 'Paul Christian', 'De', 'Guzman', 'Minglanilla City', 6010, 'Cebu City', 'Philippines ', 4223626, 9439131700, 'dghostman@yahoo.com', 'PaulChristian', '1234', 'DGhostMan', 2),
(12, 'Mr', 'Janiel', 'Salino', 'Acompaniado', 'Mandaue City', 1771, 'Mandaue City', 'Philippines', 2426546, 923612814, 'janielacompaniado@ymail.com', 'Janiel11', '1126089', 'Janiel Pogi', 1),
(13, 'Mr', 'Jade', 'Dungog', 'Dalion', 'Lapu-Lapu City', 2136, 'Lapu-Lapu City', 'Philippines', 3213213, 914236662, 'jadedalion@yahoo.com', 'JadeDalion', 'dalion', 'Dalion ', 1),
(14, 'Mr', 'Jade', 'Dungog', 'Dalion', 'Lapu-Lapu City', 6015, 'Lapu-Lapu City', 'Philippines', 3418247, 9435075592, 'dalionjade@gmail.com', 'Jade', 'jade1', 'Jade Dalion', 1),
(15, 'Mr', 'Janiel', 'Salino', 'Acompaniado', 'mandaue', 6014, 'Mandaue City', 'Philippines', 123, 32055556545, 'dalionjade@gmail.com', 'user', 'user', 'User', 1),
(16, 'Mr', 'Janiel', 'Salino', 'Acompaniado', 'Mandaue City', 6014, 'Mandaue City', 'Philippines', 32154564, 62546546541, 'dalionjade@gmail.com', 'user1', 'user', 'user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE IF NOT EXISTS `user_category` (
`user_category_id` int(11) NOT NULL,
  `user_category_type` varchar(255) NOT NULL,
  `user_category_desc` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`user_category_id`, `user_category_type`, `user_category_desc`) VALUES
(1, '1', 'admin'),
(2, '2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `code` (`code`), ADD KEY `client` (`client`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
 ADD PRIMARY KEY (`id`), ADD KEY `invoice` (`invoice`);

--
-- Indexes for table `invoice_table`
--
ALTER TABLE `invoice_table`
 ADD PRIMARY KEY (`Invoice_id`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
 ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
 ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
 ADD PRIMARY KEY (`recID`), ADD KEY `pkValue` (`pkValue`), ADD KEY `tableName` (`tableName`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
 ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
 ADD PRIMARY KEY (`orderlist_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product_id`), ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
 ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
 ADD PRIMARY KEY (`user_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice_table`
--
ALTER TABLE `invoice_table`
MODIFY `Invoice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
MODIFY `permissionID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
MODIFY `groupID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
MODIFY `recID` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
MODIFY `orderlist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
MODIFY `user_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
