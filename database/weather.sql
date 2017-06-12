-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `weather`
--
CREATE DATABASE IF NOT EXISTS `weather` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `weather`;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `flag` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `flag`) VALUES
(1, 'Amsterdam', 'assets/images/nld.svg'),
(2, 'Andorra la Vella', 'assets/images/and.svg'),
(3, 'Athens', 'assets/images/grc.svg'),
(4, 'Belgrade', 'assets/images/srb.svg'),
(5, 'Berlin', 'assets/images/deu.svg'),
(6, 'Bern', 'assets/images/che.svg'),
(7, 'Bratislava', 'assets/images/svk.svg'),
(8, 'Brussels', 'assets/images/bel.svg'),
(9, 'Bucharest', 'assets/images/rou.svg'),
(10, 'Budapest', 'assets/images/hun.svg'),
(11, 'Chisinau', 'assets/images/mda.svg'),
(12, 'Copenhagen', 'assets/images/dnk.svg'),
(13, 'Dublin', 'assets/images/irl.svg'),
(14, 'Helsinki', 'assets/images/fin.svg'),
(15, 'Kiev', 'assets/images/ukr.svg'),
(16, 'Lisbon', 'assets/images/prt.svg'),
(17, 'Ljubljana', 'assets/images/svn.svg'),
(18, 'London', 'assets/images/gbr.svg'),
(19, 'Luxembourg', 'assets/images/lux.svg'),
(20, 'Madrid', 'assets/images/esp.svg'),
(21, 'Minsk', 'assets/images/blr.svg'),
(22, 'Monaco', 'assets/images/mco.svg'),
(23, 'Moscow', 'assets/images/rus.svg'),
(24, 'Nicosia', 'assets/images/cyp.svg'),
(25, 'Nuuk', 'assets/images/grl.svg'),
(26, 'Oslo', 'assets/images/nor.svg'),
(27, 'Paris', 'assets/images/fra.svg'),
(28, 'Podgorica', 'assets/images/mne.svg'),
(29, 'Prague', 'assets/images/dnk.svg'),
(30, 'Riga', 'assets/images/lva.svg'),
(31, 'Rome', 'assets/images/ita.svg'),
(32, 'San Marino', 'assets/images/smr.svg'),
(33, 'Sarajevo', 'assets/images/bih.svg'),
(34, 'Skopje', 'assets/images/mkd.svg'),
(35, 'Sofia', 'assets/images/bgr.svg'),
(36, 'Stockholm', 'assets/images/swe.svg'),
(37, 'Tallinn', 'assets/images/est.svg'),
(38, 'Tirana', 'assets/images/alb.svg'),
(39, 'Vaduz', 'assets/images/lie.svg'),
(40, 'Valletta', 'assets/images/mlt.svg'),
(41, 'Vienna', 'assets/images/aut.svg'),
(42, 'Vilnius', 'assets/images/ltu.svg'),
(43, 'Warsaw', 'assets/images/pol.svg'),
(44, 'Zagreb', 'assets/images/hrv.svg');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

DROP TABLE IF EXISTS `conditions`;
CREATE TABLE IF NOT EXISTS `conditions` (
  `id` int(11) NOT NULL,
  `temp` varchar(4) NOT NULL,
  `humidity` varchar(4) NOT NULL,
  `visibility` varchar(20) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `id_city` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX city_id_ind (id_city),
    FOREIGN KEY (id_city)
        REFERENCES city(id)
        ON DELETE CASCADE
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `temp`, `humidity`, `visibility`, `icon`, `id_city`) VALUES
(1, '7°C', '82%', 'Very Good', 'assets/images/icons/weather/clear.png', 1),
(2, '7°C', '91%', 'Very Good', 'assets/images/icons/weather/clear.png', 2),
(3, '13°C', '63%', 'Good', 'assets/images/icons/weather/clouds.png', 3),
(4, '10°C', '75%', 'Very Good', 'assets/images/icons/weather/clouds.png', 4),
(5, '11°C', '69%', 'Good', 'assets/images/icons/weather/clouds.png', 5),
(6, '11°C', '70%', 'Good', 'assets/images/icons/weather/clouds.png', 6),
(7, '13°C', '75%', 'Very Good', 'assets/images/icons/weather/clear.png', 7),
(8, '11°C', '68%', 'Good', 'assets/images/icons/weather/clear.png', 8),
(9, '8°C', '73%', 'Good', 'assets/images/icons/weather/clouds.png', 9),
(10, '12°C', '57%', 'Very Good', 'assets/images/icons/weather/clouds.png', 10),
(11, '7°C', '65%', 'Very Good', 'assets/images/icons/weather/clouds.png', 11),
(12, '9°C', '68%', 'Good', 'assets/images/icons/weather/clouds.png', 12),
(13, '9°C', '87%', 'Very Good', 'assets/images/icons/weather/clear.png', 13),
(14, '3°C', '67%', 'Excellent', 'assets/images/icons/weather/clear.png', 14),
(15, '7°C', '63%', 'Very Good', 'assets/images/icons/weather/clouds.png', 15),
(16, '18°C', '50%', 'Good', 'assets/images/icons/weather/clear.png', 16),
(17, '13°C', '50%', 'Excellent', 'assets/images/icons/weather/clouds.png', 17),
(18, '16°C', '61%', 'Very Good', 'assets/images/icons/weather/clear.png', 18),
(19, '13°C', '51%', 'Moderate', 'assets/images/icons/weather/clear.png', 19),
(20, '16°C', '33%', 'Very Good', 'assets/images/icons/weather/clear.png', 20),
(21, '3°C', '55%', 'Very Good', 'assets/images/icons/weather/clouds.png', 21),
(22, '14°C', '91%', 'Good', 'assets/images/icons/weather/clear.png', 22),
(23, '4°C', '76%', 'Good', 'assets/images/icons/weather/clouds.png', 23),
(24, '8°C', '79%', 'Very Good', 'assets/images/icons/weather/clouds.png', 24),
(25, '0°C', '38%', 'Very Good', 'assets/images/icons/weather/clouds.png', 25),
(26, '7°C', '65%', 'Very Good', 'assets/images/icons/weather/clear.png', 26),
(27, '11°C', '55%', 'Good', 'assets/images/icons/weather/clear.png', 27),
(28, '12°C', '143%', 'Very Good', 'assets/images/icons/weather/clear.png', 28),
(29, '9°C', '68%', 'Very Good', 'assets/images/icons/weather/clouds.png', 29),
(30, '5°C', '78%', 'Good', 'assets/images/icons/weather/clouds.png', 30),
(31, '12°C', '83%', 'Moderate', 'assets/images/icons/weather/clear.png', 31),
(32, '9°C', '98%', 'Good', 'assets/images/icons/weather/clear.png', 32),
(33, '5°C', '61%', 'Very Good', 'assets/images/icons/weather/clouds.png', 33),
(34, '6°C', '61%', 'Very Good', 'assets/images/icons/weather/clouds.png', 34),
(35, '7°C', '57%', 'Very Good', 'assets/images/icons/weather/clouds.png', 35),
(36, '8°C', '61%', 'Excellent', 'assets/images/icons/weather/clear.png', 36),
(37, '4°C', '82%', 'Very Good', 'assets/images/icons/weather/clear.png', 37),
(38, '9°C', '46%', 'Very Good', 'assets/images/icons/weather/clear.png', 38),
(39, '10°C', '44%', 'Good', 'assets/images/icons/weather/clear.png', 39),
(40, '16°C', '67%', 'Very Good', 'assets/images/icons/weather/clouds.png', 40),
(41, '10°C', '60%', 'Very Good', 'assets/images/icons/weather/clear.png', 41),
(42, '6°C', '66%', 'Very Good', 'assets/images/icons/weather/clouds.png', 42),
(43, '9°C', '71%', 'Very Good', 'assets/images/icons/weather/clouds.png', 43),
(44, '8°C', '56%', 'Very Good', 'assets/images/icons/weather/clear.png', 44);
COMMIT;
