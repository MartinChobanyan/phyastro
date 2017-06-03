CREATE TABLE IF NOT EXISTS `Gradaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `visible` BIT(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12;
INSERT INTO `Gradaran` (`id`, `link`, `title`, `visible`) VALUES
(1, 'Grqer/Astronomy - Principles and Practice.pdf', 'Астрономия - принципы и практика', False),
(2, 'Grqer/vv.pdf', 'Воронцов Вельяминов', True),
(3, 'Grqer/Gavrilov-problems IV.pdf', 'Гаврилов', True),
(4, 'Grqer/IVclass_problems.pdf', 'Задачи 9 класс', True),
(5, 'Grqer/Ivanov.pdf', 'Иванов', True),
(6, 'Grqer/Lipunov.djvu', 'Липунов-В мире двойных звезд', True),
(7, 'Grqer/Surdin.pdf', 'Сурдин', True),
(8, 'Grqer/surdin_2003', 'Сурдин-2003', True),
(9, 'Grqer/TkanKosmosa.pdf', 'Ткань Космоса', True),
(10, 'Grqer/Ugolnikov.pdf', 'Угольников', True),
(11, 'Grqer/Fundamental_astronomy.djvu', 'Фундаментальная астрономия', True); # Սա սկզբնական առաջնային հավաքածուն էր։ :)