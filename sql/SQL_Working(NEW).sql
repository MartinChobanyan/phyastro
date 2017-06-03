
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2017 at 03:21 PM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u557977471_emma`
--

-- --------------------------------------------------------

--
-- Table structure for table `Gradaran`
--

CREATE TABLE IF NOT EXISTS `Gradaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `visible` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `Gradaran`
--

INSERT INTO `Gradaran` (`id`, `link`, `title`, `visible`) VALUES
(1, 'Grqer/Astronomy - Principles and Practice.pdf', 'Астрономия - принципы и практика', b'1'),
(2, 'Grqer/vv.pdf', 'Воронцов Вельяминов', b'1'),
(3, 'Grqer/Gavrilov-problems IV.pdf', 'Гаврилов', b'1'),
(4, 'Grqer/IVclass_problems.pdf', 'Задачи 9 класс', b'1'),
(5, 'Grqer/Ivanov.pdf', 'Иванов', b'1'),
(6, 'Grqer/Lipunov.pdf', 'Липунов-В мире двойных звезд', b'1'),
(7, 'Grqer/Surdin.pdf', 'Сурдин', b'1'),
(8, 'Grqer/surdin_2003', 'Сурдин-2003', b'1'),
(9, 'Grqer/TkanKosmosa.pdf', 'Ткань Космоса', b'1'),
(10, 'Grqer/Ugolnikov.pdf', 'Угольников', b'1'),
(11, 'Grqer/Fundamental_astronomy.pdf', 'Фундаментальная астрономия(Hannu Karttunen)', b'1'),
(12, 'Grqer/MARTINOV.pdf', 'Мартинов', b'1'),
(13, 'Grqer/Paradocsal_Universe.rtf', 'Парадоксальная Вселенная', b'1'),
(14, 'Grqer/Gusev,Surdin-History_in_problems.pdf', 'Расширяя границы вселенной(Гусев, Сурдин)', b'1'),
(15, 'Grqer/A.Roy-Orbital_Movement.djvu', 'Движение по орбитам(А.Рой)', b'1'),
(16, 'Grqer/Kononovich-Obshi_Kurs_of_Astronomy.djvu', 'Общий курс астрономии(Кононович)', b'1'),
(17, 'Grqer/Savchenko.pdf', 'Савченко', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `Offers`
--

CREATE TABLE IF NOT EXISTS `Offers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `mail` tinytext NOT NULL,
  `ip` tinytext NOT NULL,
  `offer` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
