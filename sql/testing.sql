
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2018 at 08:46 PM
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
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `visible` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `Gradaran`
--

INSERT INTO `Gradaran` (`id`, `link`, `title`, `type`, `visible`) VALUES
(1, 'books.e-phyastro.xyz/Astronomy - Principles and Practice.pdf', 'Астрономия - принципы и практика', 0, b'1'),
(2, 'books.e-phyastro.xyz/vv.pdf', 'Сборник задач и Практических упражнение по Астрономии(Воронцов-Вельяминов)', 0, b'1'),
(3, 'books.e-phyastro.xyz/Gavrilov-problems IV.pdf', 'Гаврилов', 0, b'1'),
(4, 'books.e-phyastro.xyz/IVclass_problems.pdf', 'Задачи 9 класс', 0, b'1'),
(5, 'books.e-phyastro.xyz/Lipunov.pdf', 'В Мире Двойных Звезд(Липунов)', 0, b'1'),
(6, 'books.e-phyastro.xyz/Surdin.pdf', 'Астрономические Олимпиады(Сурдин)', 0, b'1'),
(7, 'books.e-phyastro.xyz/surdin_2003.pdf', 'Астрономические задачи с Решениями-2003(Сурдин)', 0, b'1'),
(8, 'books.e-phyastro.xyz/TkanKosmosa.pdf', 'Ткань Космоса(Брайан Грин)', 0, b'1'),
(9, 'books.e-phyastro.xyz/Ugolnikov.pdf', 'Всероссийская Олимпиада школьников по Астрономии։ Содержание Олимпиады и Подготовка Конкурсантов(Угольников)', 0, b'1'),
(10, 'books.e-phyastro.xyz/Fundamental_Astronomy_6th_edition.pdf', 'Фундаментальная Астрономия(Hannu Karttunen)', 0, b'1'),
(11, 'books.e-phyastro.xyz/MARTINOV.pdf', 'Сборник задач по Астрофизике(Мартинов)', 0, b'1'),
(12, 'books.e-phyastro.xyz/Paradocsal_Universe.pdf', 'Парадоксальная Вселенная(Иванов)', 0, b'1'),
(13, 'books.e-phyastro.xyz/Gusev,Surdin-History_in_problems.pdf', 'Расширяя Границы Вселенной(Гусев, Сурдин)', 0, b'1'),
(14, 'books.e-phyastro.xyz/A.Roy-Orbital_Movement.pdf', 'Движение по Орбитам(А.Рой)', 0, b'1'),
(15, 'books.e-phyastro.xyz/Kononovich_E_V__Moroz_V_I_Obschiy_kurs_astronomi.pdf', 'Общий Курс Астрономии(Кононович, Мороз)', 0, b'1'),
(16, 'books.e-phyastro.xyz/Savchenko.pdf', 'Задачи по физике(Савченко)(RUS)', 0, b'1'),
(17, 'books.e-phyastro.xyz/IOAA book.pdf', 'Книга задач по Астрономии и Астрофизике(IOAA book)', 0, b'1'),
(18, 'books.e-phyastro.xyz/Dreams about the final theory.pdf', 'Мечты об окончательной теории(Вайнберг)', 0, b'1'),
(19, 'books.e-phyastro.xyz/Treasures of the Starry Sky.pdf', 'Сокровища Звёздного Неба(Зигель)', 0, b'1'),
(20, 'books.e-phyastro.xyz/Butikov_Kondratev_1.pdf', 'Механика(Бутиков, Кондратьев)', 0, b'1'),
(21, 'books.e-phyastro.xyz/Butikov_Kondratev_2.pdf', 'Электродинамика, Оптика(Бутиков, Кондратьев)', 0, b'1'),
(22, 'books.e-phyastro.xyz/Butikov_Kondratev_3.pdf', 'Строение и Свойства Вещества(Бутиков, Кондратьев)', 0, b'1'),
(23, 'books.e-phyastro.xyz/Calendar and Cronics.pdf', 'Календарь и Хронология(Климишин)', 0, b'1'),
(24, 'books.e-phyastro.xyz/butikov_fizika_dlya_postupayuschih_v_vuzy.pdf', 'Физика для Поступающих в Вузы(Бутиков)', 0, b'1'),
(25, 'books.e-phyastro.xyz/bt_ex-practise.pdf', 'Физика в примерах и задачах(Бутиков, Кондратьев)', 0, b'1'),
(26, 'books.e-phyastro.xyz/savchenkoARM.pdf', 'Задачи по физике(Савченко)(ARM)', 0, b'1'),
(27, 'books.e-phyastro.xyz/ChernievL.F.-Sbornik_zadach_po_morehodnoj_astronomii-1970.pdf', 'Сборник задач по мореходной астрономии(Черниев)', 0, b'1'),
(28, 'books.e-phyastro.xyz/FeinmanI.pdf', 'Фейнмановские лекции по физике Том 1 - Современная Наука о Природе.Законы Механики(Фейнман)', 0, b'1'),
(29, 'books.e-phyastro.xyz/zpfkogan.pdf', 'Задачи по физике(Коган)', 0, b'1'),
(30, 'books.e-phyastro.xyz/Sivuhin_I.pdf', 'Общий Курс Физики Том 1 - Механика(Сивухин)', 0, b'1'),
(31, 'books.e-phyastro.xyz/Sivuhin_II.pdf', 'Общий Курс Физики Том 2 - Термодинамика и молекулярная физика(Сивухин)', 0, b'1'),
(32, 'books.e-phyastro.xyz/Sivuhin_III.pdf', 'Общий Курс Физики Том 3 - Электричество(Сивухин)', 0, b'1'),
(33, 'books.e-phyastro.xyz/zpmkogan.pdf', 'Сто задач по механике(Коган)', 0, b'1'),
(34, 'books.e-phyastro.xyz/Batygin-ZadachiElektrodinam.pdf', 'Сборник задач по Электродинамике(Батыгин, Топтыгин)', 0, b'1'),
(35, 'books.e-phyastro.xyz/Chubaryan, qvantayin mekhanika.pdf', 'Квантовая Механика(Чубарян)(ARM)', 0, b'0'),
(36, 'books.e-phyastro.xyz/elektrodi_teor(batigin, taptigin).pdf', 'Сборник задач по Электродинамике и Специальной Теории Относительности(Батыгин, Топтыгин)', 0, b'1'),
(37, 'books.e-phyastro.xyz/gonorovsky_IS.pdf', 'Радиотехнические цепи и Сигналы(Гоноровский)', 0, b'1'),
(38, 'books.e-phyastro.xyz/LandayII.pdf', 'Теоретическая Физика Том 2 - Теория Поля(Ландау)', 0, b'1'),
(39, 'books.e-phyastro.xyz/Sedrakyan_statterm.pdf', 'Термодинамика и Статистическая физика(Седракян)(ARM)', 0, b'1'),
(40, 'books.e-phyastro.xyz/Shaskolskaya_Kristallografia.pdf', 'Кристаллография(Шаскольская)', 0, b'1'),
(41, 'books.e-phyastro.xyz/SokolovTernov1974ru.pdf', 'Релятивистский Электрон(Соколов, Тернов)', 0, b'1'),
(42, 'books.e-phyastro.xyz/Teoriya.grupp.i.ee.prilozheniya.pdf', 'Теория Групп и ее Приложение(Аминов, Кутузов, Прошин)', 0, b'1'),
(43, 'books.e-phyastro.xyz/Vejl G.Teorija grupp_i_kvantovaja mehanika.pdf', 'Теория Групп и Квантовая Механика(Вейль)', 0, b'1'),
(44, 'books.e-phyastro.xyz/Voch_gtsayin_fizikayi_neratsutyun.pdf', 'Введение в Нелинейную Физику(Асланян, Пахалов)(ARM)', 0, b'1'),
(45, 'books.e-phyastro.xyz/zadachi po teor. pfizike.pdf', 'Задачи по Теоретической Физике(Ландау)', 0, b'1'),
(46, 'books.e-phyastro.xyz/R.Kubo_Term.pdf', 'Термодинамика(Кубо)', 0, b'1'),
(47, 'books.e-phyastro.xyz/LandayI.pdf', 'Теоретическая Физика Том 1 - Механика(Ландау)', 0, b'1'),
(48, 'books.e-phyastro.xyz/Xarkevich.pdf', 'Основы Радиотехники(Харкевич)', 0, b'1'),
(49, 'books.e-phyastro.xyz/NERSISYAN.pdf', 'Сборник Задач и Упражнений по Астрономии(Нерсисян)(ARM)', 0, b'1'),
(50, 'books.e-phyastro.xyz/FeinmanII.pdf', 'Фейнмановские лекции по физике Том 2 - Пространство.Время.Движение (Фейнман)', 0, b'1'),
(51, 'books.e-phyastro.xyz/FeinmanIII.pdf', 'Фейнмановские лекции по физике Том 3 - Излучение.Волны.Кванты(Фейнман)', 0, b'1'),
(52, 'books.e-phyastro.xyz/FeinmanIV.pdf', 'Фейнмановские лекции по физике Том 4 - Кинетика.Теплота.Звук(Фейнман)', 0, b'1'),
(53, 'books.e-phyastro.xyz/FeinmanV.pdf', 'Фейнмановские лекции по физике Том 5 - Электричество и Магнетизм(Фейнман)', 0, b'1'),
(54, 'books.e-phyastro.xyz/FeinmanVI.pdf', 'Фейнмановские лекции по физике Том 6 - Электродинамика(Фейнман)', 0, b'1'),
(55, 'books.e-phyastro.xyz/FeinmanVII.pdf', 'Фейнмановские лекции по физике Том 7 - Физика Сплошных Сред(Фейнман)', 0, b'1'),
(56, 'books.e-phyastro.xyz/FeinmanVIII.pdf', 'Фейнмановские лекции по физике Том 8 - Квантовая Механика(I)(Фейнман)', 0, b'1'),
(57, 'books.e-phyastro.xyz/FeinmanIX.pdf', 'Фейнмановские лекции по физике Том 9 - Квантовая Механика(II)(Фейнман)', 0, b'1'),
(58, 'books.e-phyastro.xyz/LandayIII.pdf', 'Теоретическая Физика Том 3 - Квантовая Механика.Нерелятивистская Теория(Ландау)', 0, b'1'),
(59, 'books.e-phyastro.xyz/LandayIV.pdf', 'Теоретическая Физика Том 4 - Квантовая Электродинамика(Ландау)', 0, b'1'),
(60, 'books.e-phyastro.xyz/LandayV.pdf', 'Теоретическая Физика Том 5 - Статическая Физика. Часть 1(Ландау)', 0, b'1'),
(61, 'books.e-phyastro.xyz/LandayVI.pdf	', 'Теоретическая Физика Том 6 - Гидродинамика(Ландау)', 0, b'1'),
(62, 'books.e-phyastro.xyz/LandayVII.pdf', 'Теоретическая Физика Том 7 - Теория Упругости(Ландау)', 0, b'1'),
(63, 'books.e-phyastro.xyz/LandayVIII.pdf', 'Теоретическая Физика Том 8 - Электродинамика Сплошных Сред(Ландау)', 0, b'1'),
(64, 'books.e-phyastro.xyz/LandayIX.pdf', 'Теоретическая Физика Том 9 - Статическая Физика. Часть 2 - Теория Конденсированного Состояния(Ландау)', 0, b'1'),
(65, 'books.e-phyastro.xyz/LandayX.pdf', 'Теоретическая Физика Том <p style="display:none"></p>10 - Физическая Кинетика(Ландау)', 0, b'1'),
(66, 'books.e-phyastro.xyz/Dasagirq.pdf', 'Учебник по астрономии(Нерсисян)(ARM)', 0, b'1'),
(67, 'books.e-phyastro.xyz/Atomic-physics.pdf', 'Лекции по Атомной Физике(Киракосян)(ARM)', 0, b'1');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`Date`, `id`, `title`, `description`) VALUES
('2018-02-17 05:57:12', 4, 'Good news for Astrophysicists!<sup style="color: red">NEW!</sup>', '&nbsp&nbsp&nbspRecently, the most recent version of the magnificent book by Hannu Karttunen - "Fundamental Astronomy" has been added. Thanks to this not indifferent person who informed us about the problem with the previous book for his support. This story is an example of the fact that the library really needs your assistance. All the best from E-PhyAstro!'),
('2017-12-15 05:23:36', 3, 'EXCLUSIVE!!!', '&nbsp&nbsp&nbspWe added to our library a book of problems Savchenko in Armenian. This is good news for all Armenians using our library :)'),
('2017-12-31 11:56:00', 2, 'HAPPY NEW 2018 YEAR!!!', '&nbsp&nbsp&nbspNew Year is a time for celebration of love, of life, of Friendship, for the establishment of our site for another year older. It''s the time to thank God for wonderful friends, and to bring to their lives as much magic as they bring to ours..May this New Year adorn your life with many beautiful things and sweet memories to cherish forever.And care of those whom the heart holds close, along with abundant joys and happiness, for you and your family.Wishing you life''s best this New Year!');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Offers`
--

INSERT INTO `Offers` (`id`, `name`, `mail`, `ip`, `offer`) VALUES
(1, 'Dproc', 'dproc4hamakarg@fizmat.am', '91.205.135.248', '&lt;center&gt;Testing OS system secure and send request functuion!!!!&lt;/center&gt;\n\n\n                  &lt;h1&gt; (c) Windows NT 6.1 &lt;/h1&gt;'),
(2, '.i. hakopyan', 'gorhakopyan@mail.ru', '185.13.198.66', 'Araaaaaaaaaaaaaaa.UREMN ARCAXUM PATERAZMA LINUM ES ABARANCIN ZANGUMA  QAXMAS XAXAXAXAXAAXAXAXAXAXAX'),
(3, 'Asdfgh', 'asd@mail.ru', '109.68.122.97', 'tesdt'),
(4, 'Shaqe Nersisyan', 'dambulxndzor@qristine.org', '91.205.135.248', 'De vopshm olimpiada piti grei obshuc, bayc de.....'),
(5, 'Murad Manukyan', 'murad.manukyan515@gmail.com', '87.241.184.97', 'Martin karoxa sivuxin@ qces'),
(6, 'Murad Manukyan', 'murad.manukyan515@gmail.com', '87.241.184.82', 'Martin Karttun@ qashum em gruma invalid format inch anem?'),
(7, 'Admin Tester', 'admintest@secure.gei', '46.130.19.236', 'SECURE TEST!!! WARNING!!!'),
(8, 'Վարդգես Մամբրեյան', 'mambreyanv@gmail.com', '46.241.134.159', 'Խնդրում եմ հեռացնել իմ անունը, երբ որ reload ես անում էջը։');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
