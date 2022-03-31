-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Mar 2022, 18:31:02
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `okukluadminpanel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `newsbase`
--

CREATE TABLE `newsbase` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8 NOT NULL,
  `addDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `newsbase`
--

INSERT INTO `newsbase` (`id`, `title`, `content`, `photo`, `addDate`) VALUES
(61, 'asdasd', '<p>sadasd</p>', '', '0000-00-00'),
(62, 'sadas', '<p>dasdad</p>', '', '0000-00-00'),
(63, '2', '<p>1</p>', '', '0000-00-00'),
(64, '1', '<p>Xeber Content</p>', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `user_username` varchar(25) NOT NULL,
  `user_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `userlogin`
--

INSERT INTO `userlogin` (`id`, `user_username`, `user_password`) VALUES
(0, 'admin', 'admin1144');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `newsbase`
--
ALTER TABLE `newsbase`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `newsbase`
--
ALTER TABLE `newsbase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
