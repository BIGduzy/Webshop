-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 18 jun 2013 om 06:51
-- Serverversie: 5.5.16
-- PHP-Versie: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webshop`
--
CREATE DATABASE `webshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webshop`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `login_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Gegevens worden uitgevoerd voor tabel `logins`
--

INSERT INTO `logins` (`login_id`, `username`, `password`) VALUES
(1, 'root@gmail.com', 'geheim'),
(2, 'administrator@gmail.com', 'geheim'),
(3, 'customer@gmail.com', 'geheim'),
(4, 'adruijter@gmail.com', 'geheim'),
(5, 'lskdj', 'sglkj'),
(6, 'h.van.straaten@gmail.com', 'geheim'),
(7, 'b.de.boer@gmail.com', 'geheim'),
(8, 'jsdflkj', 'lksjd'),
(9, 'lkjsdflkj', 'lkjsdflkj'),
(10, 'lkjsdflkj', 'lkjsdf'),
(11, 'tas@gamil.com', 'geheim'),
(12, 'adruijter@gmail.com', 'geheim'),
(13, 'test@gmail.com', 'geheim'),
(14, 'adruijter@gmail.com', 'geheim'),
(15, 'bert@gmil.com', '123geheim'),
(16, 'johan@gmail.com', 'geheim'),
(17, 'jaap@gmail.com', 'geheim'),
(18, 'q', 'q'),
(19, 'q', 'q'),
(20, 'q', 'q'),
(21, 'bert@gmail.com', 'geheim'),
(22, 'jlksdflk', 'jlskdjflk');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderrules`
--

CREATE TABLE IF NOT EXISTS `orderrules` (
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price_sold` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `orderrules`
--

INSERT INTO `orderrules` (`order_id`, `product_id`, `price_sold`, `quantity`, `discount`) VALUES
(11, 4, 1.2, 3, '0'),
(11, 5, 2.4, 3, '0'),
(11, 6, 2.45, 2, '0'),
(11, 7, 2.1, 1, '0'),
(11, 11, 4.24, 1, '0'),
(12, 4, 1.2, 3, '0'),
(12, 5, 2.4, 3, '0'),
(12, 6, 2.45, 2, '0'),
(12, 7, 2.1, 1, '0'),
(12, 11, 4.24, 1, '0'),
(13, 4, 1.2, 1, '0'),
(13, 6, 2.45, 1, '0'),
(14, 4, 1.2, 2, '0'),
(14, 5, 2.4, 1, '0'),
(14, 6, 2.45, 1, '0'),
(14, 7, 2.1, 1, '0'),
(15, 4, 1.2, 1, '0'),
(15, 5, 2.4, 2, '0'),
(15, 6, 2.45, 1, '0'),
(15, 7, 2.1, 1, '0'),
(20, 4, 1.2, 2, '0'),
(20, 5, 2.4, 1, '0'),
(20, 6, 2.45, 1, '0'),
(20, 7, 2.1, 1, '0'),
(22, 4, 1.2, 2, '0'),
(22, 5, 2.4, 1, '0'),
(22, 6, 2.45, 1, '0'),
(22, 7, 2.1, 1, '0'),
(25, 4, 1.2, 1, '0'),
(26, 8, 4.23, 1, '0'),
(26, 5, 2.4, 1, '0'),
(26, 6, 2.45, 1, '0'),
(26, 7, 2.1, 1, '0'),
(27, 10, 8.23, 4, '0'),
(28, 4, 1.2, 1, '0'),
(28, 5, 2.4, 1, '0'),
(28, 6, 2.45, 1, '0'),
(29, 4, 1.2, 1, '0'),
(29, 5, 2.4, 1, '0');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `order_date` datetime NOT NULL,
  `expiration_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  `shipping_method` enum('bezorgen','ophalen') NOT NULL,
  `shipping_cost` float NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Gegevens worden uitgevoerd voor tabel `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `expiration_date`, `delivery_date`, `shipping_method`, `shipping_cost`) VALUES
(11, 3, '2013-06-10 15:14:09', '2013-06-24 15:14:09', '2013-06-13 15:14:09', 'bezorgen', 2.5),
(12, 3, '2013-06-10 15:15:06', '2013-06-24 15:15:06', '2013-06-13 15:15:06', 'bezorgen', 2.5),
(13, 3, '2013-06-10 15:16:22', '2013-06-24 15:16:22', '2013-06-13 15:16:22', 'bezorgen', 2.5),
(14, 3, '2013-06-10 15:17:15', '2013-06-24 15:17:15', '2013-06-13 15:17:15', 'bezorgen', 2.5),
(15, 3, '2013-06-10 15:17:44', '2013-06-24 15:17:44', '2013-06-13 15:17:44', 'bezorgen', 2.5),
(16, 3, '2013-06-10 15:22:17', '2013-06-24 15:22:17', '2013-06-13 15:22:17', 'bezorgen', 2.5),
(17, 3, '2013-06-10 15:22:34', '2013-06-24 15:22:34', '2013-06-13 15:22:34', 'bezorgen', 2.5),
(18, 3, '2013-06-10 15:23:46', '2013-06-24 15:23:46', '2013-06-13 15:23:46', 'bezorgen', 2.5),
(19, 3, '2013-06-10 15:23:56', '2013-06-24 15:23:56', '2013-06-13 15:23:56', 'bezorgen', 2.5),
(20, 3, '2013-06-10 15:32:34', '2013-06-24 15:32:34', '2013-06-13 15:32:34', 'bezorgen', 2.5),
(21, 3, '2013-06-10 15:32:43', '2013-06-24 15:32:43', '2013-06-13 15:32:43', 'bezorgen', 2.5),
(22, 3, '2013-06-10 15:37:18', '2013-06-24 15:37:18', '2013-06-13 15:37:18', 'bezorgen', 2.5),
(23, 3, '2013-06-10 15:37:27', '2013-06-24 15:37:27', '2013-06-13 15:37:27', 'bezorgen', 2.5),
(24, 3, '2013-06-10 15:38:31', '2013-06-24 15:38:31', '2013-06-13 15:38:31', 'bezorgen', 2.5),
(25, 3, '2013-06-10 15:42:08', '2013-06-24 15:42:08', '2013-06-13 15:42:08', 'bezorgen', 2.5),
(26, 3, '2013-06-17 13:43:16', '2013-07-01 13:43:16', '2013-06-20 13:43:16', 'bezorgen', 2.5),
(27, 3, '2013-06-17 13:45:28', '2013-07-01 13:45:28', '2013-06-20 13:45:28', 'bezorgen', 2.5),
(28, 3, '2013-06-17 13:56:14', '2013-07-01 13:56:14', '2013-06-20 13:56:14', 'bezorgen', 2.5),
(29, 3, '2013-06-18 07:07:38', '2013-07-02 07:07:38', '2013-06-21 07:07:38', 'bezorgen', 2.5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` float NOT NULL,
  `foto_name` varchar(200) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Gegevens worden uitgevoerd voor tabel `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `foto_name`) VALUES
(4, 'pompoen', 'pompoen rood', 1.2, 'pompoen.jpg'),
(5, 'chinese kool', 'kool uit China', 2.4, 'chinese-kool.jpg'),
(6, 'radicchio', 'rode sla', 2.45, 'radicchio.jpg'),
(7, 'andijvie', 'gebleekte andijvie', 2.1, 'andijvie.jpg'),
(8, 'lollo-rosso', 'rode lollo rosso uit Italie', 4.23, 'lollo-rosso.jpg'),
(9, 'spinazie', 'groene lentespinazie. Heerlijk met en eitje', 2.45, 'spinazie.jpg'),
(10, 'rode kool', 'lekkere rode kool en gezond', 8.23, 'rode-kool.jpg'),
(11, 'worteltjes', 'oranje Amsterdamse bak', 4.24, 'wortel.jpg'),
(12, 'artisjok', 'Groen bol', 8.34, 'artisjok.jpg'),
(13, 'knoflook', 'witte knoflook', 4.32, 'knoflook.jpg'),
(14, 'rabarber', 'rode rabarber', 5.67, 'rabarber.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_carts`
--

CREATE TABLE IF NOT EXISTS `user_carts` (
  `user_id` int(10) NOT NULL,
  `cart_content` text NOT NULL,
  `insertion_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `user_carts`
--

INSERT INTO `user_carts` (`user_id`, `cart_content`, `insertion_date`) VALUES
(3, 'a:3:{i:0;a:6:{s:2:"id";s:1:"4";s:4:"name";s:7:"pompoen";s:11:"description";s:12:"pompoen rood";s:5:"price";s:3:"1.2";s:9:"foto_name";s:11:"pompoen.jpg";s:6:"aantal";i:1;}i:1;a:6:{s:2:"id";s:2:"14";s:4:"name";s:8:"rabarber";s:11:"description";s:13:"rode rabarber";s:5:"price";s:4:"5.67";s:9:"foto_name";s:12:"rabarber.png";s:6:"aantal";i:1;}i:2;a:6:{s:2:"id";s:1:"5";s:4:"name";s:12:"chinese kool";s:11:"description";s:14:"kool uit China";s:5:"price";s:3:"2.4";s:9:"foto_name";s:16:"chinese-kool.jpg";s:6:"aantal";i:1;}}', '2013-06-18 07:14:20');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userroles`
--

CREATE TABLE IF NOT EXISTS `userroles` (
  `userrole_id` int(10) NOT NULL,
  `role` enum('root','administrator','customer') NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `userroles`
--

INSERT INTO `userroles` (`userrole_id`, `role`) VALUES
(1, 'root'),
(2, 'administrator'),
(3, 'customer'),
(4, 'administrator'),
(5, 'administrator'),
(6, 'customer'),
(7, 'customer'),
(8, 'customer'),
(9, 'customer'),
(10, 'root'),
(11, 'root'),
(12, 'customer'),
(13, 'administrator'),
(20, 'customer'),
(21, 'customer'),
(22, 'root');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(50) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `street` varchar(250) NOT NULL,
  `housenumber` varchar(10) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `residence` varchar(100) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `mobilephonenumber` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `infix`, `surname`, `street`, `housenumber`, `zipcode`, `residence`, `phonenumber`, `mobilephonenumber`) VALUES
(1, 'root', 'de', 'root', '', '', '', '', '', ''),
(2, 'admin', 'de', 'admin', '', '', '', '', '', ''),
(3, 'customer', 'de', 'customer', '', '', '', '', '', ''),
(19, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q'),
(22, 'sdfjlk', 'lkjdflkj', 'lksjdflk', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;