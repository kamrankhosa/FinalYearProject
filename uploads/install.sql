-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 05:55 AM
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
-- Database: `fyp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact_messages`
--

CREATE TABLE `tblcontact_messages` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Sender_subject` varchar(255) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Image` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`ID`, `Name`, `Description`, `Added_date`, `Image`, `Type`) VALUES
(1, 'Footprints in Time is perfect House in Kurashiki', '<p class=\"excert\">                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>                      <div class=\"quote-wrapper\">                         <div class=\"quotes\">                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you                            should have to spend money on boot camp when you can get the MCSE study materials yourself at                            a fraction of the camp price. However, who has the willpower to actually sit through a                            self-imposed MCSE training.                         </div>                      </div>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>', '2020-10-20 09:06:31', 'david_2.png', 'bricks'),
(4, 'Footprints in Time is perfect House in Kurashiki', '<p class=\"excert\">                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>                      <div class=\"quote-wrapper\">                         <div class=\"quotes\">                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you                            should have to spend money on boot camp when you can get the MCSE study materials yourself at                            a fraction of the camp price. However, who has the willpower to actually sit through a                            self-imposed MCSE training.                         </div>                      </div>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>', '2020-10-20 09:06:26', 'david_2.png', 'construction'),
(5, 'Footprints in Time is perfect House in Kurashiki', '<p class=\"excert\">                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>                      <div class=\"quote-wrapper\">                         <div class=\"quotes\">                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you                            should have to spend money on boot camp when you can get the MCSE study materials yourself at                            a fraction of the camp price. However, who has the willpower to actually sit through a                            self-imposed MCSE training.                         </div>                      </div>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>', '2020-10-20 09:06:35', 'david_1.png', 'construction'),
(6, 'Footprints in Time is perfect House in Kurashiki', '<p class=\"excert\">                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>                      <div class=\"quote-wrapper\">                         <div class=\"quotes\">                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you                            should have to spend money on boot camp when you can get the MCSE study materials yourself at                            a fraction of the camp price. However, who has the willpower to actually sit through a                            self-imposed MCSE training.                         </div>                      </div>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>', '2020-10-20 09:06:38', 'david_2.png', 'cement and concrete'),
(7, 'Footprints in Time is perfect House in Kurashiki', '<p class=\"excert\">                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>                      <div class=\"quote-wrapper\">                         <div class=\"quotes\">                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you                            should have to spend money on boot camp when you can get the MCSE study materials yourself at                            a fraction of the camp price. However, who has the willpower to actually sit through a                            self-imposed MCSE training.                         </div>                      </div>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>', '2020-10-20 09:06:41', 'david_1.png', 'cement and concrete');

-- --------------------------------------------------------

--
-- Table structure for table `tblprojects`
--

CREATE TABLE `tblprojects` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprojects`
--

INSERT INTO `tblprojects` (`ID`, `Name`, `Description`, `Image`, `Type`, `Category`) VALUES
(1, 'kami khan\'s building project', ' <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <p class=\"mb-50\">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <h3>Our main goal</h3>                                 <p class=\"mb-50\">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <h3>Take a look to our challenges</h3>                                 <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>', 'project1.png', 'bricks', 'Interior'),
(2, 'Floride Chemicals\r\nFactory', ' <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <p class=\"mb-50\">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <h3>Our main goal</h3>                                 <p class=\"mb-50\">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <h3>Take a look to our challenges</h3>                                 <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>', 'project2.png', 'bricks', 'Recent'),
(3, 'Floride Chemicals\r\nFactory', ' <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <p class=\"mb-50\">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <h3>Our main goal</h3>                                 <p class=\"mb-50\">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <h3>Take a look to our challenges</h3>                                 <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>', 'project2.png', 'construction', 'Recent'),
(4, 'kami khan\'s building project', ' <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <p class=\"mb-50\">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <h3>Our main goal</h3>                                 <p class=\"mb-50\">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>                                  <h3>Take a look to our challenges</h3>                                 <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>', 'project1.png', 'cement and concrete', 'Interior');

-- --------------------------------------------------------

--
-- Table structure for table `tblteam_members`
--

CREATE TABLE `tblteam_members` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblteam_members`
--

INSERT INTO `tblteam_members` (`ID`, `Name`, `Designation`, `Image`, `Type`) VALUES
(1, 'Ethan Welch', 'UX Designer', 'team1.png', 'bricks'),
(2, 'Kamran Hyder', 'Developer', 'team2.png', 'bricks'),
(3, 'Abdul Wahid', 'Developer', 'team3.png', 'bricks'),
(4, 'Ethan Welch', 'UX Designer', 'team1.png', 'construction'),
(5, 'Kamran Hyder', 'Developer', 'team2.png', 'construction'),
(6, 'Abdul Wahid', 'Developer', 'team3.png', 'construction'),
(7, 'Ethan Welch', 'UX Designer', 'team1.png', 'cement and concrete'),
(8, 'Kamran Hyder', 'Developer', 'team2.png', 'cement and concrete'),
(9, 'Abdul Wahid', 'Developer', 'team3.png', 'cement and concrete');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestominals`
--

CREATE TABLE `tbltestominals` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltestominals`
--

INSERT INTO `tbltestominals` (`ID`, `Name`, `Message`, `Designation`, `Type`) VALUES
(1, 'Jessya Inn', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'Co Founder', 'bricks'),
(2, 'Kamran Haider', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'CEO', 'bricks'),
(3, 'Yasir khan', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'CTO', 'bricks'),
(4, 'Jessya Inn', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'Co Founder', 'construction'),
(5, 'Kamran Haider', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'Co Founder', 'construction'),
(6, 'Yasir khan', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'Co Founder', 'construction'),
(7, 'Jessya Inn', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'Co Founder', 'cement and concrete'),
(8, 'Kamran Haider', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'Co Founder', 'cement and concrete'),
(9, 'Yasir khan', 'Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim l', 'Co Founder', 'cement and concrete');

-- --------------------------------------------------------

--
-- Table structure for table `tblwebsite_setting`
--

CREATE TABLE `tblwebsite_setting` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `Menu` varchar(255) NOT NULL,
  `slider_text` varchar(255) NOT NULL,
  `About_text` longtext NOT NULL,
  `Address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblwebsite_setting`
--

INSERT INTO `tblwebsite_setting` (`ID`, `Title`, `Phone_number`, `email`, `Logo`, `Menu`, `slider_text`, `About_text`, `Address`) VALUES
(1, 'construction', '03358367272', 'construction@gmail.com', 'logo.png', '{[\"home\":\"1\"]}', 'construction', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.', '198 West 21th Street, Suite 721 New York,NY 10010'),
(2, 'bricks', '03097729388', 'bricks@gmail.com', 'logo.png', '', 'bricks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.', '197 West 21th Street, Suite 721 New York,NY 10010'),
(3, 'cement and concrete', '03458965798', 'cement@gmail.com', 'logo.png', '', 'cement & concrete', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.', '192 West 21th Street, Suite 721 New York,NY 10010');

-- --------------------------------------------------------

--
-- Table structure for table `tblweb_pages`
--

CREATE TABLE `tblweb_pages` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblweb_pages`
--

INSERT INTO `tblweb_pages` (`ID`, `Name`, `Description`, `Image`, `Type`) VALUES
(1, 'About', 'Mollit anim laborum duis au dolor in voluptcate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillu.\r\n\r\nMollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.', 'safe_in.png', 'bricks'),
(2, 'About', 'Mollit anim laborum duis au dolor in voluptcate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillu.\r\n\r\nMollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.', 'safe_in.png', 'construction'),
(3, 'About', 'Mollit anim laborum duis au dolor in voluptcate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillu.\r\n\r\nMollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.', 'safe_in.png', 'cement and concrete');

-- --------------------------------------------------------

--
-- Table structure for table `tblweb_pages_detail`
--

CREATE TABLE `tblweb_pages_detail` (
  `Id` int(11) NOT NULL,
  `Page_id` varchar(255) NOT NULL,
  `Description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_active_admins`
--

CREATE TABLE `tbl_active_admins` (
  `ID` int(11) NOT NULL,
  `Admin_id` varchar(255) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `Login_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_active_admins`
--

INSERT INTO `tbl_active_admins` (`ID`, `Admin_id`, `Token`, `Login_time`) VALUES
(1, '1', 'MQ==', '2020-10-14 15:12:28'),
(2, '1', 'MQ==', '2020-10-14 16:39:21'),
(3, '1', 'MQ==', '2020-10-15 07:57:40'),
(4, '1', 'MQ==', '2020-10-17 16:21:25'),
(5, '1', 'MQ==', '2020-10-17 17:28:18'),
(6, '1', 'MQ==', '2020-10-17 17:29:30'),
(7, '1', 'MQ==', '2020-10-17 17:30:07'),
(8, '1', 'MQ==', '2020-10-17 17:30:30'),
(9, '1', 'MQ==', '2020-10-17 17:30:36'),
(10, '1', 'MQ==', '2020-10-17 17:30:47'),
(11, '1', 'MQ==', '2020-10-18 08:51:46'),
(12, '1', 'MQ==', '2020-10-18 18:30:11'),
(13, '1', 'MQ==', '2020-10-18 18:53:03'),
(14, '1', 'MQ==', '2020-10-18 20:22:11'),
(15, '1', 'MQ==', '2020-10-20 04:06:21'),
(16, '1', 'MQ==', '2020-10-20 10:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Already_login` varchar(15) NOT NULL COMMENT 'Already_logged in\r\n1-Yes\r\n2-No',
  `Image` varchar(255) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `Name`, `Email`, `Password`, `Gender`, `Already_login`, `Image`, `Status`) VALUES
(1, 'Kami khan', 'kamrankhosa40@gmail.com', '12345', 'Male', '1', 'kamikhan.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs_comments`
--

CREATE TABLE `tbl_blogs_comments` (
  `ID` int(11) NOT NULL,
  `Blog_id` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Dated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blogs_comments`
--

INSERT INTO `tbl_blogs_comments` (`ID`, `Blog_id`, `Comment`, `Dated`) VALUES
(2, '1', 'test', '2020-10-20 09:15:38'),
(3, '4', 'test', '2020-10-20 09:18:15'),
(4, '4', 'test', '2020-10-20 09:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_later`
--

CREATE TABLE `tbl_news_later` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news_later`
--

INSERT INTO `tbl_news_later` (`ID`, `Email`) VALUES
(5, 'kamrankhosa40@gmail.com'),
(6, 'bsit2016020@student.gudgk.edu.pk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_visitors`
--

CREATE TABLE `tbl_new_visitors` (
  `ID` int(11) NOT NULL,
  `Ip_address` varchar(255) NOT NULL,
  `Visited_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_details`
--

CREATE TABLE `tbl_users_details` (
  `Id` int(11) NOT NULL,
  `Service_id` varchar(255) NOT NULL,
  `Phone_number` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `About` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users_details`
--

INSERT INTO `tbl_users_details` (`Id`, `Service_id`, `Phone_number`, `Email`, `Location`, `About`) VALUES
(1, '1', '+923358367272', 'kamrankhosa40@gmail.com', 'jampur', ' <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower                      </p>                      <p>                         MCSE boot camps have its supporters and its detractors. Some people do not understand why you                         should have to spend money on boot camp when you can get the MCSE study materials yourself at a                         fraction of the camp price. However, who has the willpower to actually sit through a                         self-imposed MCSE training. who has the willpower to actually                      </p>'),
(2, '2', '', '', '', ''),
(3, '3', '', '', '', ''),
(4, '4', '', '', '', ''),
(5, '5', '', '', '', ''),
(6, '6', '', '', '', ''),
(7, '7', '', '', '', ''),
(8, '8', '', '', '', ''),
(9, '9', '', '', '', ''),
(11, '12', '03358367272', 'kamrankhosa40@gmail.com', 'imran cloth house super market', ''),
(12, '13', '03358367272', 'kamrankhosa40@gmail.com', 'imran cloth house super market', ''),
(13, '14', '03358367258', 'kamrankhosa41@gmail.com', 'imran cloth house super market', ''),
(14, '15', '03358367258', 'bsit2016020@student.gudgk.edu.pk', 'imran cloth house super market', ''),
(15, '16', '03358367258', 'admin@a.a', 'imran cloth house super market', ''),
(16, '17', '03358367258', 'kamikhan@gmail.com', 'imran cloth house super market', ''),
(17, '18', '655555', 'tariq@gmail.com', 'test address', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_list`
--

CREATE TABLE `tbl_users_list` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `show_to_front` varchar(150) NOT NULL,
  `Status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users_list`
--

INSERT INTO `tbl_users_list` (`ID`, `Name`, `Description`, `Image`, `Type`, `show_to_front`, `Status`) VALUES
(4, 'Engineering techniques & implementation', '', 'servicess1.png', 'construction', '1', '0'),
(5, 'Engineering techniques & implementation', '', 'servicess2.png', 'construction', '1', '0'),
(6, 'Engineering techniques & implementation', '', 'servicess3.png', 'construction', '1', '0'),
(12, 'kami khan', 'testing', 'e55cfd5e49b7b6cbc3c80c86e06661bd.jpg', 'construction', '1', '0'),
(13, 'kami khan', 'testing', 'e55cfd5e49b7b6cbc3c80c86e06661bd.jpg', 'construction', '1', '0'),
(14, 'kamran haider', 'testing description for construction', 'e55cfd5e49b7b6cbc3c80c86e06661bd.jpg', 'construction', '1', '0'),
(17, 'Abdul wahid', 'testing here', '57cec91186b09a11898eda875ef88546.jpg', 'bricks', '1', '1'),
(18, 'Tariq pitafi', 'nill', '136c5e9ccdf0012f585ee897f6b3d3b6.jpg', 'bricks', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcontact_messages`
--
ALTER TABLE `tblcontact_messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblprojects`
--
ALTER TABLE `tblprojects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblteam_members`
--
ALTER TABLE `tblteam_members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltestominals`
--
ALTER TABLE `tbltestominals`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblwebsite_setting`
--
ALTER TABLE `tblwebsite_setting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblweb_pages`
--
ALTER TABLE `tblweb_pages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblweb_pages_detail`
--
ALTER TABLE `tblweb_pages_detail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_active_admins`
--
ALTER TABLE `tbl_active_admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_blogs_comments`
--
ALTER TABLE `tbl_blogs_comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_news_later`
--
ALTER TABLE `tbl_news_later`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_new_visitors`
--
ALTER TABLE `tbl_new_visitors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users_details`
--
ALTER TABLE `tbl_users_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_users_list`
--
ALTER TABLE `tbl_users_list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcontact_messages`
--
ALTER TABLE `tblcontact_messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblprojects`
--
ALTER TABLE `tblprojects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblteam_members`
--
ALTER TABLE `tblteam_members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbltestominals`
--
ALTER TABLE `tbltestominals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblwebsite_setting`
--
ALTER TABLE `tblwebsite_setting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblweb_pages`
--
ALTER TABLE `tblweb_pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblweb_pages_detail`
--
ALTER TABLE `tblweb_pages_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_active_admins`
--
ALTER TABLE `tbl_active_admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blogs_comments`
--
ALTER TABLE `tbl_blogs_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_news_later`
--
ALTER TABLE `tbl_news_later`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_new_visitors`
--
ALTER TABLE `tbl_new_visitors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users_details`
--
ALTER TABLE `tbl_users_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_users_list`
--
ALTER TABLE `tbl_users_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
