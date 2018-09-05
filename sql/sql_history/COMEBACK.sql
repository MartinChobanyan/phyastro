
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2018 at 12:25 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u262616125_emma`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `Gradaran`
--

INSERT INTO `Gradaran` (`id`, `link`, `title`, `visible`) VALUES
(1, 'Grqer/Astronomy - Principles and Practice.pdf', 'Астрономия - принципы и практика', b'1'),
(2, 'Grqer/vv.pdf', 'Сборник задач и Практических упражнение по Астрономии(Воронцов-Вельяминов)', b'1'),
(3, 'Grqer/Gavrilov-problems IV.pdf', 'Гаврилов', b'1'),
(4, 'Grqer/IVclass_problems.pdf', 'Задачи 9 класс', b'1'),
(6, 'Grqer/Lipunov.pdf', 'В Мире Двойных Звезд(Липунов)', b'1'),
(7, 'Grqer/Surdin.pdf', 'Астрономические Олимпиады(Сурдин)', b'1'),
(8, 'Grqer/surdin_2003.pdf', 'Астрономические задачи с Решениями-2003(Сурдин)', b'1'),
(9, 'Grqer/TkanKosmosa.pdf', 'Ткань Космоса(Брайан Грин)', b'1'),
(10, 'Grqer/Ugolnikov.pdf', 'Всероссийская Олимпиада школьников по Астрономии։ Содержание Олимпиады и Подготовка Конкурсантов(Угольников)', b'1'),
(11, 'Grqer/Fundamental_Astronomy_6th_edition.pdf', 'Фундаментальная Астрономия(Hannu Karttunen)', b'1'),
(12, 'Grqer/MARTINOV.pdf', 'Сборник задач по Астрофизике(Мартинов)', b'1'),
(13, 'Grqer/Paradocsal_Universe.pdf', 'Парадоксальная Вселенная(Иванов)', b'1'),
(14, 'Grqer/Gusev,Surdin-History_in_problems.pdf', 'Расширяя Границы Вселенной(Гусев, Сурдин)', b'1'),
(15, 'Grqer/A.Roy-Orbital_Movement.pdf', 'Движение по Орбитам(А.Рой)', b'1'),
(16, 'Grqer/Kononovich_E_V__Moroz_V_I_Obschiy_kurs_astronomi.pdf', 'Общий Курс Астрономии(Кононович, Мороз)', b'1'),
(17, 'Grqer/Savchenko.pdf', 'Задачи по физике(Савченко)(RUS)', b'1'),
(18, 'Grqer/IOAA book.pdf', 'Книга задач по Астрономии и Астрофизике(IOAA book)', b'1'),
(19, 'Grqer/Dreams about the final theory.pdf', 'Мечты об окончательной теории(Вайнберг)', b'1'),
(20, 'Grqer/Treasures of the Starry Sky.pdf', 'Сокровища Звёздного Неба(Зигель)', b'1'),
(21, 'Grqer/Butikov_Kondratev_1.pdf', 'Механика(Бутиков, Кондратьев)', b'1'),
(22, 'Grqer/Butikov_Kondratev_2.pdf', 'Электродинамика, Оптика(Бутиков, Кондратьев)', b'1'),
(23, 'Grqer/Butikov_Kondratev_3.pdf', 'Строение и Свойства Вещества(Бутиков, Кондратьев)', b'1'),
(25, 'Grqer/Calendar and Cronics.pdf', 'Календарь и Хронология(Климишин)', b'1'),
(26, 'Grqer/butikov_fizika_dlya_postupayuschih_v_vuzy.pdf', 'Физика для Поступающих в Вузы(Бутиков)', b'1'),
(27, 'Grqer/bt_ex-practise.pdf', 'Физика в примерах и задачах(Бутиков, Кондратьев)', b'1'),
(28, 'Grqer/savchenkoARM.pdf', 'Задачи по физике(Савченко)(ARM)', b'1'),
(29, 'Grqer/ChernievL.F.-Sbornik_zadach_po_morehodnoj_astronomii-1970.pdf', 'Сборник задач по мореходной астрономии(Черниев)', b'1'),
(30, 'Grqer/FeinmanI.pdf', 'Фейнмановские леции по физике(Том 1)', b'1'),
(31, 'Grqer/zpfkogan.pdf', 'Задачи по физике(Коган)', b'1'),
(32, 'Grqer/Sivuhin_I.pdf', 'Общий Курс Физики Том 1 - Механика(Сивухин)', b'1'),
(33, 'Grqer/Sivuhin_II.pdf', 'Общий Курс Физики Том 2 - Термодинамика и молекулярная физика(Сивухин)', b'1'),
(34, 'Grqer/Sivuhin_III.pdf', 'Общий Курс Физики Том 3 - Электричество(Сивухин)', b'1'),
(35, 'Grqer/zpmkogan.pdf', 'Сто задач по механике(Коган)', b'1'),
(36, 'Grqer/Batygin-ZadachiElektrodinam.pdf', 'Сборник задач по Электродинамике(Батыгин, Топтыгин)', b'1'),
(37, 'Grqer/Chubaryan, qvantayin mekhanika.pdf', 'Квантовая Механика(Чубарян)(ARM)', b'1'),
(38, 'Grqer/elektrodi_teor(batigin, taptigin).pdf', 'Сборник задач по Электродинамике и Специальной Теории Относительности(Батыгин, Топтыгин)', b'1'),
(39, 'Grqer/gonorovsky_IS.pdf', 'Радиотехнические цепи и Сигналы(Гоноровский)', b'1'),
(40, 'Grqer/Grqer/Landay_II.pdf', 'Теоретическая Физика Том 2 - Теория Поля(Ланадау)', b'1'),
(41, 'Grqer/Sedrakyan_statterm.pdf', 'Термодинамика и Статистическая физика(Седракян)(ARM)', b'1'),
(42, 'Grqer/Shaskolskaya_Kristallografia.pdf', 'Кристаллография(Шаскольская)', b'1'),
(43, 'Grqer/SokolovTernov1974ru.pdf', 'Релятивистский Электрон(Соколов, Тернов)', b'1'),
(44, 'Grqer/Teoriya.grupp.i.ee.prilozheniya.pdf', 'Теория Групп и ее Приложение(Аминов, Кутузов, Прошин)', b'1'),
(45, 'Grqer/Vejl G.Teorija grupp_i_kvantovaja mehanika.pdf', 'Теория Групп и Квантовая Механика(Вейль)', b'1'),
(46, 'Grqer/Voch_gtsayin_fizikayi_neratsutyun.pdf', 'Введение в Нелинейную Физику(Асланян,Пахалов)(ARM)', b'1'),
(47, 'Grqer/zadachi po teor. pfizike.pdf', 'Задачи по Теоретической Физике(Ланадау)', b'1'),
(48, 'Grqer/R.Kubo_Term.pdf', 'Термодинамика(Кубо)', b'1'),
(49, 'Grqer/Landau-1-mex.pdf', 'Теоретическая Физика Том 1 - Механика(Ланадау)', b'1'),
(50, 'Grqer/Xarkevich.pdf', 'Основы Радиотехники(Харкевич)', b'1'),
(51, 'Grqer/NERSISYAN.pdf', 'Сборник Задач и Упражнений по Астрономии(Нерсисян)(ARM)', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`Date`, `id`, `title`, `description`) VALUES
('2018-02-17 17:57:12', 8, 'Good news for Astrophysicists!<sup style="color: red">NEW!</sup>', '&nbsp&nbsp&nbspRecently, the most recent version of the magnificent book by Hannu Karttunen - "Fundamental Astronomy" has been added. Thanks to this not indifferent person who informed us about the problem with the previous book for his support. This story is an example of the fact that the library really needs your assistance. All the best from E-PhyAstro!'),
('2017-12-15 17:23:36', 6, 'EXCLUSIVE!!!', '&nbsp&nbsp&nbspWe added to our library a book of problems Savchenko in Armenian. This is good news for all Armenians using our library :)'),
('2017-12-31 23:56:00', 7, 'HAPPY NEW 2018 YEAR!!!', '&nbsp&nbsp&nbspNew Year is a time for celebration of love, of life, of Friendship, for the establishment of our site for another year older. It''s the time to thank God for wonderful friends, and to bring to their lives as much magic as they bring to ours..May this New Year adorn your life with many beautiful things and sweet memories to cherish forever.And care of those whom the heart holds close, along with abundant joys and happiness, for you and your family.Wishing you life''s best this New Year!');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Offers`
--

INSERT INTO `Offers` (`id`, `name`, `mail`, `ip`, `offer`) VALUES
(1, 'Dproc', 'dproc4hamakarg@fizmat.am', '91.205.135.248', '&lt;center&gt;Testing OS system secure and send request functuion!!!!&lt;/center&gt;\n\n\n                  &lt;h1&gt; (c) Windows NT 6.1 &lt;/h1&gt;'),
(2, '.i. hakopyan', 'gorhakopyan@mail.ru', '185.13.198.66', 'Araaaaaaaaaaaaaaa.UREMN ARCAXUM PATERAZMA LINUM ES ABARANCIN ZANGUMA  QAXMAS XAXAXAXAXAAXAXAXAXAXAX'),
(3, 'Asdfgh', 'asd@mail.ru', '109.68.122.97', 'tesdt'),
(4, 'Shaqe Nersisyan', 'dambulxndzor@qristine.org', '91.205.135.248', 'De vopshm olimpiada piti grei obshuc, bayc de.....'),
(5, 'Murad Manukyan', 'murad.manukyan515@gmail.com', '87.241.184.97', 'Martin karoxa sivuxin@ qces'),
(6, 'Murad Manukyan', 'murad.manukyan515@gmail.com', '87.241.184.82', 'Martin Karttun@ qashum em gruma invalid format inch anem?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
