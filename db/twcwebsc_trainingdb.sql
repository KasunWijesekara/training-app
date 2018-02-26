-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2018 at 11:29 PM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twcwebsc_trainingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brochures`
--

CREATE TABLE IF NOT EXISTS `brochures` (
  `id` int(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pdffile` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brochures`
--

INSERT INTO `brochures` (`id`, `course_id`, `title`, `pdffile`, `created`, `status`) VALUES
(10, 25, 'VMware vSphere: Install, Configure, Manage [V6.5]', '/brochure/1518624620_39167820_70490822.pdf', '2018-02-14 16:10:20', 1),
(11, 26, 'VMware NSX: Install, Configure, Manage [V6.2]', '/brochure/1518624739_40690424_58186990.pdf', '2018-02-14 16:12:19', 1),
(12, 27, 'VMware Horizon 7: Install, Configure, Manage [V7.3]', '/brochure/1518624783_70031291_58376409.pdf', '2018-02-14 16:13:03', 1),
(13, 28, 'VMware vRealize Automation: Install, Configure, Manage [V6.2] ', '/brochure/1518624825_71092982_16076306.pdf', '2018-02-14 16:13:45', 1),
(14, 29, 'Red Hat System Administration II', '/brochure/1518624907_40951422_45540504.pdf', '2018-02-14 16:15:07', 1),
(15, 30, 'Designing App and Desktop Solutions with Citrix XenApp and XenDesktop ', '/brochure/1518624991_65263061_76211392.pdf', '2018-02-14 16:16:31', 1),
(16, 31, 'CompTIA A+', '/brochure/1518625037_67559800_36651885.pdf', '2018-02-14 16:17:17', 1),
(17, 32, 'CompTIA Network+', '/brochure/1518625079_85858252_37977846.pdf', '2018-02-14 16:17:59', 1),
(18, 33, 'CompTIA Security+', '/brochure/1518625390_22453585_37248439.pdf', '2018-02-14 16:23:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(20) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `message` varchar(50000) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `message`, `created`) VALUES
(1, 'Rachel', 'rachel@gmail.com', '0755646830', '11/A , 1st Lane', 'this is a test\r\n', '2018-01-27 09:15:26'),
(2, 'Rasangi Dissanayake', 'rasangi_lakmali@yahoo.com', '0725390444', '44A, Battaramulla', 'Request for new Training', '2018-02-22 08:29:09'),
(3, 'Thiwanka Anjana', 'thiwa@gmail.com', '0718542000', '206/D , Malabe', 'Request for Time Schedule', '2018-02-22 08:31:08'),
(4, 'Binu Perera', 'binu78@yahoo.com', '0786655321', '370/D, Wattala', 'Information regarding training.', '2018-02-22 08:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(20) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `mainimage` varchar(500) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `mainimage`, `created`, `status`) VALUES
(25, 'VMware vSphere: Install, Configure, Manage [V6.5]', 'This five-day course features intensive hands-on training that focuses on installing, configuring, and managing VMware vSphere® 6.5, which includes VMware ESXi™ 6.5 and VMware vCenter Server® 6.5. This course prepares you to administer a vSphere infrastructure for an organization of any size. It is the foundation for most other VMware technologies in the software-defined data center', '/course_img/1518623629_37938688_17240757.jpg', '2018-02-14 15:53:49', 1),
(26, 'VMware NSX: Install, Configure, Manage [V6.2]', 'This comprehensive, fast-paced training course focuses on installing, configuring, and managing VMware NSX®. This course presents VMware NSX as a part of the software-defined data center. You will learn how to use logical switching in VMware NSX to virtualize your switching environment. The course also details logical routing to enable you to dynamically route between different virtual environments. And you will learn how to use gateway services, firewall configurations, and security services to', '/course_img/1518623734_66888975_44768490.png', '2018-02-14 15:55:34', 1),
(27, 'VMware Horizon 7: Install, Configure, Manage [V7.3]', 'This five-day, hands-on course gives you the skills to deliver virtual desktops and applications through a single virtual desktop infrastructure platform. This course builds your skills in installing, configuring, and managing VMware Horizon® 7 through a combination of lecture and hands-on labs. You will learn how to configure and deploy pools of virtual machines, how to manage access and security of the machines, and how to provide a customized desktop environment to end users.', '/course_img/1518623846_30074695_20972100.png', '2018-02-14 15:57:26', 1),
(28, 'VMware vRealize Automation: Install, Configure, Manage [V6.2] ', 'This training course focuses on installing, configuring, and managing VMware vRealize™ Automation. This course covers the configuration and use of the vRealize Automation platform, including self-service provisioning and the creation of multivendor cloud services. This class also helps students understand and achieve the benefits of automation as a component of the software-defined data center.', '/course_img/1518623917_68141012_88155385.png', '2018-02-14 15:58:37', 1),
(29, 'Red Hat System Administration II (RH134)', 'Red Hat System Administration II (RH135) focuses on the key tasks needed to become a full time Linux administrator. This course goes deeper into enterprise Linux administration including file systems and partitioning, logical volumes, SELinux, firewalling, and troubleshooting. ', '/course_img/1518623993_85884913_97784651.JPG', '2018-02-14 15:59:53', 1),
(30, 'Designing App and Desktop Solutions with Citrix XenApp and XenDesktop ', 'This course provides students with the ability to successfully assess and design a XenDesktop 7 app and desktop solution based on the top key projects and architectures that a majority of Citrix customers implement, across different industries and use cases', '/course_img/1518624105_41022678_32502225.jpg', '2018-02-14 16:01:45', 1),
(31, 'CompTIA A+', 'A+ is the starting point for a career in IT. The performance-based exams certify foundational IT skills across a variety of devices and operating systems. CompTIA A+ is the preferred qualifying credential for technical support and IT operational roles. It is about much more than PC repair.', '/course_img/1518624182_47571739_52693914.png', '2018-02-14 16:03:02', 1),
(32, 'CompTIA Network+', 'Network+ certifies the essential skills needed to confidently design, configure, manage and troubleshoot any wired and wireless devices.', '/course_img/1518624241_81926762_66298873.jpg', '2018-02-14 16:04:01', 1),
(33, 'CompTIA Security+', 'Security+ provides a global benchmark for best practices in IT network and operational security, one of the fastest-growing fields in IT.', '/course_img/1518624367_47504849_74013394.jpg', '2018-02-14 16:06:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `onesliders`
--

CREATE TABLE IF NOT EXISTS `onesliders` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onesliders`
--

INSERT INTO `onesliders` (`id`, `image`, `status`, `created`) VALUES
(8, '/one_slider/1519287256_59280683_23057955.jpg', 1, '2018-02-22'),
(9, '/one_slider/1519287273_67031843_17459217.jpg', 1, '2018-02-22'),
(10, '/one_slider/1519287291_55489370_49985920.jpg', 1, '2018-02-22'),
(11, '/one_slider/1519287304_50344926_81015616.jpg', 1, '2018-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE IF NOT EXISTS `quotations` (
  `id` int(20) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `people` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `course_id` int(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `name`, `email`, `people`, `phone`, `address`, `course_id`, `created`) VALUES
(13, 'Thiwanka Anjana', 'thiwa@gmail.com', '15', '0718542000', '206/D , Malabe', 26, '2018-02-22 08:43:11'),
(14, 'Binu Perera', 'binu78@yahoo.com', '30', '0786655321', '370/D, Wattala', 29, '2018-02-22 08:44:41'),
(15, 'Rasangi Dissanayake', 'rasangi_lakmali@yahoo.com', '5', '0765390444', '206/E', 25, '2018-02-22 08:45:52'),
(17, 'Shiromi', 'shiromi@yahoo.com', '13', '0757733221', '260/F', 30, '2018-02-22 08:48:27'),
(18, 'Rasangi Dissanayake', 'rasangi_lakmali@yahoo.com', '10', '0765390444', '206/E', 33, '2018-02-22 08:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(20) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `dob` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `course_id` int(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `email`, `dob`, `phone`, `address`, `course_id`, `created`) VALUES
(5, 'Rasangi Dissanayake', 'rasangi_lakmali@yahoo.com', '1993/05/30', '0765390444', '206/E', 25, '2018-02-22 08:37:40'),
(6, 'Binu Perera', 'binu78@yahoo.com', '1994/05/30', '0786655321', '370/D, Wattala', 27, '2018-02-22 08:38:48'),
(7, 'Thiwanka Anjana', 'thiwa@gmail.com', '1998/12/06', '0718542000', '206/D , Malabe', 29, '2018-02-22 08:39:42'),
(8, 'Rasangi Dissanayake', 'rasangi_lakmali@yahoo.com', '1994/05/30', '0765390444', '206/E', 31, '2018-02-22 08:41:09'),
(9, 'Rasangi Dissanayake', 'rasangi_lakmali@yahoo.com', '1994/05/30', '0765390444', '206/E', 33, '2018-02-22 08:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `twosliders`
--

CREATE TABLE IF NOT EXISTS `twosliders` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twosliders`
--

INSERT INTO `twosliders` (`id`, `image`, `status`, `created`) VALUES
(3, '/two_slider/1519287504_27757776_28711109.jpg', 1, '2018-02-22'),
(4, '/two_slider/1519287531_66901512_10863209.jpg', 1, '2018-02-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brochures`
--
ALTER TABLE `brochures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onesliders`
--
ALTER TABLE `onesliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twosliders`
--
ALTER TABLE `twosliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brochures`
--
ALTER TABLE `brochures`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `onesliders`
--
ALTER TABLE `onesliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `twosliders`
--
ALTER TABLE `twosliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
