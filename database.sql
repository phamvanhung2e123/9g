-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2012 at 06:35 PM
-- Server version: 5.0.92
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `ADMINID` bigint(20) NOT NULL auto_increment,
  `email` varchar(80) NOT NULL default '',
  `username` varchar(80) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`ADMINID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`ADMINID`, `email`, `username`, `password`) VALUES
(1, 'webmaster@9GagCloneScript.com', 'Admin', '0316045c1cb7727647622056cac9e052');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `AID` bigint(30) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL default '',
  `code` text NOT NULL,
  `active` enum('1','0') NOT NULL default '1',
  PRIMARY KEY  (`AID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`AID`, `description`, `code`, `active`) VALUES
(1, '300 x 250 pixels', '<div style="width:300px; height:250px; border:1px solid #DFDFDF;" align="center"><br/><br/><br/><br/><br/><br/>Insert Your Advertisement Here</div>', '1'),
(2, '300 x 300 pixels', '<div style="width:300px; height:300px; border:1px solid #DFDFDF;" align="center"><br/><br/><br/><br/><br/><br/><br/>Insert Your Advertisement Here</div>', '1'),
(3, '728 x 90 pixels', '<div style="width:728px; height:90px; border:1px solid #DFDFDF;" align="center"><br/><br/>Insert Your Advertisement Here</div>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bans_ips`
--

CREATE TABLE IF NOT EXISTS `bans_ips` (
  `ip` varchar(20) NOT NULL,
  UNIQUE KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `setting` varchar(60) NOT NULL default '',
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`setting`, `value`) VALUES
('site_email', 'webmaster@9gagclonescript.com'),
('site_name', '9Gag Clone Script'),
('max_syndicate_results', '25'),
('maximum_results', '1000000'),
('emailsender', 'Admin'),
('max_img_size', '200'),
('items_per_page', '10'),
('approve_stories', '0'),
('metadescription', '9GAG Clone Script is the best clone of 9GAG'),
('metakeywords', '9gag clone, 9gag script, 9gag clone script, clone, script'),
('pub_mod', '1'),
('ver', '2.1'),
('FACEBOOK_PROFILE', 'YOUR_FACEBOOK_WEBSITE_USERNAME'),
('myes', '5'),
('mno', '5'),
('twitter', 'Scriptolution'),
('FACEBOOK_APP_ID', ''),
('FACEBOOK_SECRET', ''),
('enable_fc', '1'),
('mtrend', '10'),
('quota', '15'),
('contact_email', 'contact@yourdomain.com'),
('short_urls', '1');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `USERID` bigint(20) NOT NULL auto_increment,
  `email` varchar(80) NOT NULL default '',
  `username` varchar(80) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `pwd` varchar(50) NOT NULL,
  `fullname` varchar(200) NOT NULL default '',
  `gender` varchar(6) NOT NULL default '',
  `description` text NOT NULL,
  `country` varchar(100) NOT NULL default '',
  `yourviewed` int(20) NOT NULL default '0',
  `profileviews` int(20) NOT NULL default '0',
  `youviewed` bigint(20) NOT NULL default '0',
  `addtime` varchar(20) NOT NULL default '',
  `lastlogin` varchar(20) NOT NULL default '',
  `verified` char(1) NOT NULL default '1',
  `status` enum('1','0') NOT NULL default '1',
  `profilepicture` varchar(100) NOT NULL default '',
  `remember_me_key` varchar(32) default NULL,
  `remember_me_time` datetime default NULL,
  `ip` varchar(20) NOT NULL,
  `lip` varchar(20) NOT NULL,
  `website` varchar(200) NOT NULL,
  `news` int(1) NOT NULL default '0',
  `mylang` varchar(20) NOT NULL,
  `color1` varchar(6) NOT NULL default '333333',
  `color2` varchar(6) NOT NULL default 'FFFFFF',
  `filter` bigint(1) NOT NULL default '1',
  PRIMARY KEY  (`USERID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `members`
--

-- --------------------------------------------------------

--
-- Table structure for table `members_passcode`
--

CREATE TABLE IF NOT EXISTS `members_passcode` (
  `USERID` bigint(20) NOT NULL default '0',
  `code` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members_verifycode`
--

CREATE TABLE IF NOT EXISTS `members_verifycode` (
  `USERID` bigint(20) NOT NULL default '0',
  `code` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_verifycode`
--

INSERT INTO `members_verifycode` (`USERID`, `code`) VALUES
(0, 'h394Y1328501678');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `PID` bigint(20) NOT NULL auto_increment,
  `USERID` bigint(20) NOT NULL default '0',
  `story` text NOT NULL,
  `tags` varchar(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `nsfw` int(1) NOT NULL default '0',
  `pic` varchar(20) NOT NULL,
  `youtube_key` varchar(20) NOT NULL,
  `fod_key` varchar(20) NOT NULL,
  `url` text NOT NULL,
  `time_added` varchar(20) default NULL,
  `date_added` date NOT NULL default '0000-00-00',
  `active` char(1) NOT NULL default '',
  `phase` bigint(1) NOT NULL default '0',
  `favclicks` bigint(50) NOT NULL default '0',
  `last_viewed` varchar(20) NOT NULL default '',
  `mod_yes` bigint(20) NOT NULL default '0',
  `mod_no` bigint(20) NOT NULL default '0',
  `pip` varchar(20) NOT NULL,
  `pip2` varchar(20) NOT NULL,
  `unfavclicks` bigint(50) NOT NULL default '0',
  `fix` bigint(20) NOT NULL default '0',
  `short` varchar(20) NOT NULL,
  PRIMARY KEY  (`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts_favorited`
--

CREATE TABLE IF NOT EXISTS `posts_favorited` (
  `FID` bigint(20) NOT NULL auto_increment,
  `USERID` bigint(25) NOT NULL default '0',
  `PID` bigint(25) NOT NULL default '0',
  PRIMARY KEY  (`FID`),
  UNIQUE KEY `USERID` (`USERID`,`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `posts_favorited`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts_reports`
--

CREATE TABLE IF NOT EXISTS `posts_reports` (
  `RID` bigint(20) NOT NULL auto_increment,
  `PID` bigint(20) NOT NULL default '0',
  `time` varchar(20) default NULL,
  `ip` varchar(20) NOT NULL,
  `reason` bigint(1) NOT NULL,
  PRIMARY KEY  (`RID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `posts_reports`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts_unfavorited`
--

CREATE TABLE IF NOT EXISTS `posts_unfavorited` (
  `FID` bigint(20) NOT NULL auto_increment,
  `USERID` bigint(25) NOT NULL default '0',
  `PID` bigint(25) NOT NULL default '0',
  PRIMARY KEY  (`FID`),
  UNIQUE KEY `USERID` (`USERID`,`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE IF NOT EXISTS `static` (
  `ID` bigint(30) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `value` text NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`ID`, `title`, `value`) VALUES
(1, 'Terms Of Use', 'Insert your terms of use information here.<br><br>\r\n\r\nHTML is accepted.'),
(2, 'Privacy Policy', 'Insert your privacy policy information here.<br><br>\r\n\r\nHTML is accepted.'),
(3, 'About', 'Insert your about us information here.<br><br>\r\n\r\nHTML is accepted.'),
(4, '9 Rules', 'Insert your 9 rules here.<br><br>\r\n\r\nHTML is accepted.'),
(5, 'FAQ', 'Insert your frequently asked questions here.<br><br>\r\n\r\nHTML is accepted.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `config` (`setting`, `value`) VALUES ('FACEBOOK_ADMIN', '100000051390750');
INSERT INTO `config` (`setting`, `value`) VALUES ('wm', '0'), ('watermark', 'watermark.png');