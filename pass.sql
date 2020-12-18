-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 07:50 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway1`
--

-- --------------------------------------------------------

--
-- Table structure for table `passengerbooking`
--

CREATE TABLE IF NOT EXISTS `passengerbooking` (
  `passname` varchar(100) NOT NULL,
  `passage` varchar(100) NOT NULL,
  `passadd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengerbooking`
--

INSERT INTO `passengerbooking` (`passname`, `passage`, `passadd`) VALUES
('q,w,e,r,t,y,u', '12', ''),
('a,s,d,f,g,h,k', '1', ''),
('a,s,d,f,g,h,k', '1', ''),
('qq,yy,ii,oo,pp,jj,h`', '6', ''),
('', '12', ''),
('a,s,d,f,h,j,k', '0', 'pass_add'),
('a,s,d,f,h,j,k', '0', ',,,,,,'),
('a,s,d,f,h,j,k', '0', ',,,,,,'),
('a,s,d,f,h,j,k', '21', 'reuwfg563458,76jhfgher,675748hfghgf,756hfghg,5645gfhfyg,7562457hjfghgvfh,56hfghgf'),
('a,s,d,f,h,j,k', '21,22,23,24,25,26,27', 'reuwfg563458,76jhfgher,675748hfghgf,756hfghg,5645gfhfyg,7562457hjfghgvfh,56hfghgf'),
('q,w,e,r,t,y,u', '12,13,141,15,16,17,18', 'kfj9eyg5,n745y38,nbgrhgb765,hfbh576,fbyrtbn75,nfbre,bfrh57'),
('a,s,d,f,g,h,j', '1,2,3,4,5,67,8', 'xgnnd45,4234zd rdc,43 gffcv,5vdc45,53fc dr4,4535vc c ,54 f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
