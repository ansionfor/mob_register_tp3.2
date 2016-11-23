-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 22 日 23:40
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `weixin`
--

-- --------------------------------------------------------

--
-- 表的结构 `weixin_audience`
--

CREATE TABLE IF NOT EXISTS `weixin_audience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `tel` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `weixin_us`
--

CREATE TABLE IF NOT EXISTS `weixin_us` (
  `id` int(11) NOT NULL,
  `ourTel` varchar(50) NOT NULL,
  `ourAdd` varchar(100) NOT NULL,
  `ourDetail` varchar(1024) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `weixin_us`
--

INSERT INTO `weixin_us` (`id`, `ourTel`, `ourAdd`, `ourDetail`) VALUES
(2, ' 021-3126 1015', '深圳大中华交易广场', '在这个展会，您可以了解到最新的金融理财产品和最先进的金融交易技术，包括外汇，二元期权，贵金属，互联网金融及各种投资理财产品。这个展会将会有来自世界各地著名的演讲者的演讲和激烈讨论。这次展会将是所有的金融行业专业人士和金融投资者不容错过的盛会。欢迎各界的人士前来参观! 免费注册，免费入场：<a href="http://www.chinaforexexpo.com/" target="_blank">www.chinaforexexpo.com</a>');

-- --------------------------------------------------------

--
-- 表的结构 `weixin_zhanshang`
--

CREATE TABLE IF NOT EXISTS `weixin_zhanshang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `remark` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `weixin_zhanshang`
--

INSERT INTO `weixin_zhanshang` (`id`, `name`, `company`, `area`, `tel`, `email`, `remark`) VALUES
(1, '', '沙发', '标准展位（3米*3米)', 2147483647, '', '爱疯'),
(2, '', 'sdf', '标准展位（3米*3米)', 2147483647, '77931774@qq.com', 'sdf'),
(3, '', 'sdf', '标准展位（3米*3米)', 2147483647, '77931774@qq.com', 'sdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
