-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 08 Ara 2016, 14:07:32
-- Sunucu sürümü: 10.1.16-MariaDB
-- PHP Sürümü: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Veritabanı: `deneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisan`
--

CREATE TABLE `calisan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isim` varchar(10) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `gorev` varchar(9) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `mudur` decimal(4,0) DEFAULT NULL,
  `isealinis` date DEFAULT NULL,
  `maas` decimal(7,2) DEFAULT NULL,
  `yorum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `departmanno` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `calisan`
--

INSERT INTO `calisan` (`id`, `isim`, `gorev`, `mudur`, `isealinis`, `maas`, `yorum`, `departmanno`) VALUES
(1, 'ilhanbvbvc', 'Mï¿½dï¿½r', NULL, '2016-12-01', '10000.00', 'ilhan ilhan ilhan', '30'),
(7369, 'SMITHttttt', 'CLERK', '7902', '1980-12-17', '800.00', '', '20'),
(7499, 'ALLENrrrrr', 'SALESMAN', '7698', '1981-02-20', '1600.00', '300.00', '30'),
(7521, 'WARD', 'SALESMAN', '7698', '1981-02-22', '1250.00', '500.00', '30'),
(7566, 'JONES', 'MANAGER', '7839', '1981-04-02', '2975.00', NULL, '20'),
(7654, 'MARTIN', 'SALESMAN', '7698', '1981-09-28', '1250.00', '1400.00', '30'),
(7698, 'BLAKE', 'MANAGER', '7839', '1981-05-01', '2850.00', NULL, '30'),
(7782, 'CLARK', 'MANAGER', '7839', '1981-06-09', '2450.00', NULL, '10'),
(7788, 'SCOTT', 'ANALYST', '7566', '1982-12-09', '3000.00', NULL, '20'),
(7839, 'KING', 'PRESIDENT', NULL, '1981-11-17', '5000.00', NULL, '10'),
(7844, 'TURNER', 'SALESMAN', '7698', '1981-09-08', '1500.00', '0.00', '30'),
(7876, 'ADAMS', 'CLERK', '7788', '1983-01-12', '1100.00', NULL, '20'),
(7900, 'JAMES', 'CLERK', '7698', '1981-12-03', '950.00', NULL, '30'),
(7902, 'FORD', 'ANALYST', '7566', '1981-12-03', '3000.00', NULL, '20'),
(7934, 'MILLER', 'CLERK', '7782', '1982-01-23', '1300.00', NULL, '10'),
(7935, 'HAsan HÃ¼s', 'Arastirma', '0', '2016-12-03', '4000.00', 'denemd enemdnee dnemee ', '20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `departman`
--

CREATE TABLE `departman` (
  `deptno` decimal(2,0) DEFAULT NULL,
  `deparmanadi` varchar(14) DEFAULT NULL,
  `yeri` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `departman`
--

INSERT INTO `departman` (`deptno`, `deparmanadi`, `yeri`) VALUES
('10', 'ACCOUNTING', 'NEW YORK'),
('20', 'RESEARCH', 'DALLAS'),
('30', 'SALES', 'CHICAGO'),
('40', 'OPERATIONS', 'BOSTON');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `calisan`
--
ALTER TABLE `calisan`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calisan`
--
ALTER TABLE `calisan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7936;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
