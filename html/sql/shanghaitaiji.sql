-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: 118.123.16.130
-- 生成日期: 2016 年 01 月 22 日 09:57
-- 服务器版本: 5.6.22
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shanghaitaiji`
--

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_name` varchar(32) NOT NULL,
  `customer_phone` int(16) NOT NULL,
  `customer_email` varchar(32) DEFAULT NULL,
  `customer_company` varchar(256) DEFAULT NULL,
  `customer_address` varchar(256) DEFAULT NULL,
  `customer_other` varchar(256) DEFAULT NULL,
  `customer_type` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`customer_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_phone`, `customer_email`, `customer_company`, `customer_address`, `customer_other`, `customer_type`) VALUES
('LD', 56848428, 'v2@vs-l.com', 'LD CO.', 'SHANGHAI', '', '委托方'),
('VSKY', 568484818, 'v1@vs-l.com', '胜天国际', '', '', '委托方'),
('上海太集', 56848000, 'abc@vs-l.com', '上海太集', '淞桥东路111号', '', '营运人'),
('徐兵', 123, '123@13', '上海聚玩', '上海延长路', '', '委托方');

-- --------------------------------------------------------

--
-- 表的结构 `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `fee_num` int(16) NOT NULL,
  `fee_name` varchar(32) NOT NULL,
  `fee_ex` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`fee_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fee`
--

INSERT INTO `fee` (`fee_num`, `fee_name`, `fee_ex`) VALUES
(1, '上车费', '上车');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `userpass` varchar(32) NOT NULL,
  `realname` varchar(16) NOT NULL,
  `phone` int(16) DEFAULT NULL,
  `dc_right` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `userpass`, `realname`, `phone`, `dc_right`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', NULL, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
