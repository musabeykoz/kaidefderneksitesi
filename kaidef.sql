-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 07 Mar 2024, 11:05:34
-- Sunucu sürümü: 10.11.3-MariaDB
-- PHP Sürümü: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kaidef`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `burs`
--

CREATE TABLE `burs` (
  `burs_id` int(11) NOT NULL,
  `metin` text DEFAULT NULL,
  `resim_linki` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Tablo döküm verisi `burs`
--

INSERT INTO `burs` (`burs_id`, `metin`, `resim_linki`) VALUES
(1, 'a', 'https://icdn.ensonhaber.com/crop/1200x675/resimler/diger/kok/2020/06/03/IMG20200603051401.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `federasyon`
--

CREATE TABLE `federasyon` (
  `federasyon_id` int(11) NOT NULL,
  `metin` text DEFAULT NULL,
  `resim_linki` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Tablo döküm verisi `federasyon`
--

INSERT INTO `federasyon` (`federasyon_id`, `metin`, `resim_linki`) VALUES
(1, 'kwhcbueyblvwıkvwı', 'https://ichef.bbci.co.uk/news/640/cpsprodpb/17A06/production/_106647769_gettyimages-148277064.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `adres` text NOT NULL,
  `eposta` varchar(55) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `telefon` int(11) NOT NULL,
  `telefon1` int(11) NOT NULL,
  `dogumtarih` date NOT NULL,
  `cinsiyet` text NOT NULL,
  `egitim` text NOT NULL,
  `ogrenci_universite` text NOT NULL,
  `sahne_deneyim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yarisma`
--

CREATE TABLE `yarisma` (
  `yarisma_id` int(11) NOT NULL,
  `metin` text DEFAULT NULL,
  `resim_linki` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Tablo döküm verisi `yarisma`
--

INSERT INTO `yarisma` (`yarisma_id`, `metin`, `resim_linki`) VALUES
(1, 'TEST TEST TEST TEST TEST TEST TEST', 'https://images.squarespace-cdn.com/content/v1/5b99048f55b02ce496ffeb2d/1602494282766-GFQ4CDGBPSTIBVVRZHJF/Urban+Sketching_Oct20-01.png?format=1500w');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `burs`
--
ALTER TABLE `burs`
  ADD PRIMARY KEY (`burs_id`);

--
-- Tablo için indeksler `federasyon`
--
ALTER TABLE `federasyon`
  ADD PRIMARY KEY (`federasyon_id`);

--
-- Tablo için indeksler `yarisma`
--
ALTER TABLE `yarisma`
  ADD PRIMARY KEY (`yarisma_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `burs`
--
ALTER TABLE `burs`
  MODIFY `burs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `federasyon`
--
ALTER TABLE `federasyon`
  MODIFY `federasyon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yarisma`
--
ALTER TABLE `yarisma`
  MODIFY `yarisma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
