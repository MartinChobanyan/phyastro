# Գրադարանի table - Դարակ

CREATE TABLE IF NOT EXISTS `Gradaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12;
INSERT INTO `Gradaran` (`id`, `link`, `title`) VALUES
(1, 'Grqer/Astronomy - Principles and Practice.pdf', 'Астрономия - принципы и практика'),
(2, 'Grqer/vv.pdf', 'Воронцов Вельяминов'),
(3, 'Grqer/Gavrilov-problems IV.pdf', 'Гаврилов'),
(4, 'Grqer/IVclass_problems.pdf', 'Задачи 9 класс'),
(5, 'Grqer/Ivanov.pdf', 'Иванов'),
(6, 'Grqer/Lipunov.djvu', 'Липунов-В мире двойных звезд'),
(7, 'Grqer/Surdin.pdf', 'Сурдин'),
(8, 'Grqer/surdin_2003', 'Сурдин-2003'),
(9, 'Grqer/TkanKosmosa.pdf', 'Ткань Космоса'),
(10, 'Grqer/Ugolnikov.pdf', 'Угольников'),
(11, 'Grqer/Fundamental_astronomy.djvu', 'Фундаментальная астрономия'); # Սա սկզբնական առաջնային հավաքածուն էր։ :)

# Նորույթների table

CREATE TABLE IF NOT EXISTS `News` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

# Առաջարկների table

CREATE TABLE IF NOT EXISTS `Offers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `mail` tinytext NOT NULL,
  `ip` tinytext NOT NULL,
  `offer` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;