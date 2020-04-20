-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Kas 2019, 19:45:22
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `elib`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(1) NOT NULL DEFAULT 0,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_recapctha` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_goooglemap` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_adres`, `ayar_ilce`, `ayar_il`, `ayar_mesai`, `ayar_recapctha`, `ayar_goooglemap`, `ayar_zopim`, `ayar_analystic`, `ayar_facebook`, `ayar_twitter`, `ayar_youtube`, `ayar_google`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`) VALUES
(0, 'dimg/31908IMG_20190811_105120.jpg', 'http://localhost/php_pdo_yonet_site/', 'E-Library', 'E-library, You can also search for articles and journals.', 'library, digital, academic', 'Admin', '0555 123 12 12', '', '0850 840 80 76', 'info@nny.edu.tr', 'Kuzey Çevreyolu Erkilet Dere Mah. Nuh Naci Yazgan Üniversitesi Yerleşkesi Kocasinan/KAYSERİ', '', 'KAYSERİ', '', '', 'https://goo.gl/maps/Y1kYpq4aD65zxQZs9', '', '', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.youtube.com', 'http://www.google.com', 'mail.domain.com', 'eposta@domain.com', '123424234', '25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dergi`
--

CREATE TABLE `dergi` (
  `dergi_id` int(11) NOT NULL,
  `dergi_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_issn` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_periyot` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_baslangic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_yayinci` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_zaman` datetime NOT NULL,
  `dergi_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_editorkurul` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_yazimkurallari` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_amackapsam` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_yayinilkeleri` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_iletisim` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `dergi_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_eissn` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_dizinler` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_yil` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `makale_cilt` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `makale_sayi` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dergi`
--

INSERT INTO `dergi` (`dergi_id`, `dergi_ad`, `dergi_issn`, `dergi_periyot`, `dergi_baslangic`, `dergi_yayinci`, `dergi_zaman`, `dergi_detay`, `dergi_editorkurul`, `dergi_yazimkurallari`, `dergi_amackapsam`, `dergi_yayinilkeleri`, `dergi_iletisim`, `dergi_durum`, `dergi_resimyol`, `dergi_eissn`, `dergi_dizinler`, `makale_yil`, `makale_cilt`, `makale_sayi`) VALUES
(10, 'Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi', '32432432', '2 periyot', '423423', 'Atatürk Üniversitesi ', '0000-00-00 00:00:00', '<p>asdas</p>\r\n', '<p>dasfsafdsfsd</p>\r\n', '<p>gdfgsdfghsdfh</p>\r\n', '<p>hfgdjf</p>\r\n', '<p>ghjghfjgjk</p>\r\n', '<p>fgsdafasdfs</p>\r\n', '1', 'dimg/dergi/2035330797220662812527381313782241027408about-2.jpg', '234234234234', '<p>jhkjhkjgkd</p>\r\n', '', '', ''),
(11, 'asdasdasdsdfsdfsdfsdf', '123123123', '2 periyot', '2019', 'sdfdsafadsfdas', '2019-11-30 19:49:39', '<p>sdfsdfdsfdsfsdfsdfsd</p>\r\n', '<p>asdfasdfasdf asd fsdf&nbsp;</p>\r\n\r\n<p>sdaf&nbsp;</p>\r\n\r\n<p>sad</p>\r\n\r\n<p>f sa</p>\r\n\r\n<p>f&nbsp;</p>\r\n\r\n<p>sda</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asd asdf&nbsp;</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>f asd</p>\r\n\r\n<p>f&nbsp;</p>\r\n\r\n<p>sf</p>\r\n\r\n<p>&nbsp;asd</p>\r\n\r\n<p>f&nbsp;</p>\r\n\r\n<p>asd f</p>\r\n\r\n<p>sdfa&nbsp;</p>\r\n\r\n<p>sdf</p>\r\n\r\n<p>&nbsp;asd</p>\r\n\r\n<p>&nbsp;sdfa</p>\r\n', '<p>f sd</p>\r\n\r\n<p>afsd</p>\r\n\r\n<p>asfd&nbsp;</p>\r\n\r\n<p>&nbsp;sdfa</p>\r\n\r\n<p>dfs a</p>\r\n\r\n<p>fsd a</p>\r\n\r\n<p>fd&nbsp;</p>\r\n\r\n<p>af sd</p>\r\n', '<p>ff</p>\r\n\r\n<p>asd&nbsp;</p>\r\n\r\n<p>asdf asdf&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>asdf adf s</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>asdf&nbsp;</p>\r\n\r\n<p>fasd&nbsp;</p>\r\n', '<p>sdf&nbsp;</p>\r\n\r\n<p>asdf&nbsp;</p>\r\n\r\n<p>asdf&nbsp;</p>\r\n\r\n<p>sdf a</p>\r\n\r\n<p>fasd&nbsp;</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>asdf&nbsp;</p>\r\n', '1', 'dimg/dergi/23346239582536123174kayseri-coders.jpeg', '123124123412', '<p>asdf&nbsp;</p>\r\n\r\n<p>asf d</p>\r\n\r\n<p>asdf&nbsp;</p>\r\n\r\n<p>&nbsp;sdfa</p>\r\n\r\n<p>af sd</p>\r\n\r\n<p>asdf&nbsp;</p>\r\n\r\n<p>asf d</p>\r\n', '', '', ''),
(14, 'sadfasdfasdfasd', '432423', '234234 sd', '4dfdsafsdafsad', 'fasdfasdfasdfsda', '2019-11-30 19:52:57', '<p>fsadfsdafasdfsadfasd</p>\r\n', '<p>fasda fsadf asdf asd fsda</p>\r\n', '<p>&nbsp;sadf sdasdaf asdf asd fasd</p>\r\n', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '1', 'dimg/dergi/20179311932682731305images.jpeg', '423423423', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '', '', ''),
(15, 'dasdasdasda', '3432423', '5 periyot', '2018', 'asdfsdfasdfa', '2019-11-30 19:53:22', '<p>asdasdas</p>\r\n', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '1', 'dimg/dergi/30189313782830024330IMG_20190621_235014_502.jpg', '342352352', '<p>asdfasfs</p>\r\n\r\n<p>df</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>fasd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>sadf</p>\r\n\r\n<p>sadfasasfdsad</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dergi_arsive`
--

CREATE TABLE `dergi_arsive` (
  `id` int(11) NOT NULL,
  `dergi_id` int(11) NOT NULL,
  `dergi_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_issn` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_periyot` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_baslangic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_yayinci` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_zaman` datetime NOT NULL,
  `dergi_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_editorkurul` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_yazimkurallari` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_amackapsam` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_yayinilkeleri` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_iletisim` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `dergi_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_eissn` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_dizinler` text COLLATE utf8_turkish_ci NOT NULL,
  `dergi_yil` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_cilt` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `dergi_sayi` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dergi_arsive`
--

INSERT INTO `dergi_arsive` (`id`, `dergi_id`, `dergi_ad`, `dergi_issn`, `dergi_periyot`, `dergi_baslangic`, `dergi_yayinci`, `dergi_zaman`, `dergi_detay`, `dergi_editorkurul`, `dergi_yazimkurallari`, `dergi_amackapsam`, `dergi_yayinilkeleri`, `dergi_iletisim`, `dergi_durum`, `dergi_resimyol`, `dergi_eissn`, `dergi_dizinler`, `dergi_yil`, `dergi_cilt`, `dergi_sayi`) VALUES
(17, 10, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2017', '1', '1'),
(23, 10, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2017', '1', '2'),
(24, 10, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2018', '1', '1'),
(25, 10, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2018', '1', '2'),
(26, 10, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2019', '1', '1'),
(27, 10, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2019', '1', '2'),
(28, 11, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2019', '1', '1'),
(29, 15, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2020', '1', '1'),
(30, 15, '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '1', '', '', '', '2019', '1', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `galeri_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_ad`, `galeri_resimyol`) VALUES
(31, '', 'dimg/galeri/31479306792435331350business foto.jpg'),
(32, '', 'dimg/galeri/30572300952589527730015bba1f8e8a82ea353f699586f03e5e.jpg'),
(33, '', 'dimg/galeri/2806327333286713105174-1.jpg'),
(34, '', 'dimg/galeri/279862203029673232631454076320462.jpg'),
(35, '', 'dimg/galeri/27704219642623821592analytics-technology-ss-1920-800x450.jpg'),
(36, '', 'dimg/galeri/21908293192677122711apple-for-business_thumb800.jpg'),
(37, '', 'dimg/galeri/29478210723175126172assemble-a-team-business-company-prezi-template.jpg'),
(38, '', 'dimg/galeri/25509302822233223417business foto.jpg'),
(39, '', 'dimg/galeri/22464275832431522698businessadvice.jpg'),
(40, '', 'dimg/galeri/25924252182911121950business-energy-comparison-blog.jpg'),
(41, '', 'dimg/galeri/21777224482342825849business-math_118287_large.jpg'),
(42, '', 'dimg/galeri/22846235062920924398business-planning-img.jpg'),
(43, '', 'dimg/galeri/29973255403123828789e9e912d3ae44d0cc3655bb4451b58d21.jpg'),
(44, '', 'dimg/galeri/26401247702975327385dsst-introduction-to-business-course_129463_large.jpg'),
(45, '', 'dimg/galeri/27176304852486722142how-to-do-market-research-for-your-online-business.jpg'),
(46, '', 'dimg/galeri/23512249052344126536intro-to-business-syllabus-resource-lesson-plans_138757_large.jpg'),
(47, '', 'dimg/galeri/28715226353186621536introduction-to-business-certificate-course_129464_large.jpg'),
(48, '', 'dimg/galeri/23107264272808720592mid-size-business.jpg'),
(49, '', 'dimg/galeri/27910287283067527476S4B.jpg'),
(50, '', 'dimg/galeri/24084226752192724939praxis-ii-business-education-test_118084_large.jpg'),
(51, '', 'dimg/galeri/28114246722730523830verizon-wireless-business-specials-mass.jpg'),
(52, '', 'dimg/galeri/30569312763008830200vr-virtual-reality-ss-1920-800x450.jpg'),
(53, '', 'dimg/galeri/27450220922887931224woman-e1457107581326.jpg'),
(55, '', 'dimg/galeri/23962223202543525741intro-to-business-syllabus-resource-lesson-plans_138757_large.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(1) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'WELCOME TO THE LIBRARIA', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words etc.</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `icerik_id` int(11) NOT NULL,
  `icerik_zaman` datetime NOT NULL,
  `icerik_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `icerik_konusmacilar` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_katilim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_duzenleyen` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_bastarih` date NOT NULL,
  `icerik_yer` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_komite` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_konular` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_ozel` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_surec` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_mail` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_otarih` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_bittarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `icerik_zaman`, `icerik_resimyol`, `icerik_ad`, `icerik_detay`, `icerik_keyword`, `icerik_durum`, `icerik_konusmacilar`, `icerik_katilim`, `icerik_duzenleyen`, `icerik_bastarih`, `icerik_yer`, `icerik_komite`, `icerik_konular`, `icerik_ozel`, `icerik_surec`, `icerik_mail`, `icerik_otarih`, `icerik_bittarih`) VALUES
(26, '2019-09-05 00:00:00', 'dimg/icerik/about-2.jpg', 'Ara Conf', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id vulputate sem. Quisque dui orci, ultricies a bibendum nec, varius eget neque. Etiam sit amet ipsum vitae nisl tincidunt vestibulum. Donec vitae felis in urna congue pulvinar. Phasellus in posuere ex. Integer quis metus ut nisl accumsan tempor sit amet eget augue. Vestibulum sed augue sapien. Nulla porta ac lectus in eleifend. Integer tempor nunc id est eleifend, et aliquam augue feugiat. Fusce at eros risus. Vestibulum egestas gravida efficitur. Cras tincidunt dictum placerat. Sed venenatis erat at tellus tempus, sagittis viverra metus ullamcorper.</p>\r\n\r\n<p>Duis ut justo eu lacus finibus vestibulum. Vivamus congue urna eu finibus auctor. Aenean quam dolor, aliquam quis diam a, faucibus ultrices quam. Cras sit amet nisl diam. Etiam ultricies dui eget nulla ornare gravida. Sed condimentum rutrum diam, at imperdiet ante feugiat ut. Praesent ultricies imperdiet eros quis bibendum. Donec ultricies nulla sed mauris imperdiet vestibulum.</p>\r\n\r\n<p>Praesent nisi felis, posuere eu orci at, hendrerit euismod sapien. Nulla feugiat ut orci dapibus fermentum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed volutpat tempus laoreet. Cras sodales mauris vel enim egestas, a vehicula nisi vestibulum. Nunc vulputate odio id nisi condimentum semper. Vestibulum ut arcu non nulla dapibus mollis. Duis fringilla dignissim eros, non maximus velit vulputate at. Nunc auctor arcu nec elit pharetra, id accumsan ipsum vehicula. Praesent tincidunt fringilla semper. Cras porta erat id ante egestas, ut vestibulum justo imperdiet. Donec egestas felis eget ultricies auctor. Quisque ut nibh efficitur, gravida nunc sit amet, venenatis metus. Vestibulum sagittis sed lectus a venenatis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n\r\n<p>Phasellus iaculis, massa non tincidunt finibus, ex ante pulvinar leo, vel venenatis dui lacus a tortor. Duis erat dolor, finibus consequat accumsan eget, elementum ut urna. Mauris condimentum metus condimentum dui consequat dictum ut et lectus. Aenean non velit suscipit, hendrerit erat ac, imperdiet tellus. Duis lobortis est in velit varius ultrices. Integer ac velit iaculis, vestibulum lectus nec, fringilla justo. Suspendisse potenti. Phasellus non massa ultrices, mollis eros nec, molestie urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec at dolor in eros commodo tincidunt ac vel massa. Maecenas eget tortor est. Pellentesque tincidunt tellus non neque efficitur, nec tempus lacus pretium. Ut tristique rhoncus tristique. Quisque orci enim, laoreet placerat gravida eu, pulvinar eget neque.</p>\r\n\r\n<p>Nullam accumsan eleifend hendrerit. Aliquam sed ipsum at leo consequat pulvinar nec nec urna. Integer elementum augue quis finibus interdum. Fusce fringilla, purus quis dignissim consequat, diam augue sollicitudin urna, quis egestas risus erat at ex. Suspendisse blandit metus sed nunc maximus vulputate. Praesent ut vulputate lacus. Nunc leo erat, rutrum vel venenatis eget, condimentum et augue. Phasellus metus erat, venenatis quis fermentum a, convallis egestas odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam pulvinar eget tellus quis eleifend. Maecenas sed purus ut purus aliquam dictum.</p>\r\n', 'academic, ara, conf', '1', '<p>Prof. Derviş Karaboğa&nbsp; &nbsp; &nbsp; Turkey&nbsp; &nbsp; &nbsp; &nbsp;Erciyes University</p>\r\n\r\n<p>Prof. Derviş Karaboğa&nbsp; &nbsp; &nbsp; Turkey&nbsp; &nbsp; &nbsp; &nbsp;Erciyes University</p>\r\n\r\n<p>Prof. Derviş Karaboğa&nbsp; &nbsp; &nbsp; Turkey&nbsp; &nbsp; &nbsp; &nbsp;Erciyes University</p>\r\n\r\n<p>Prof. Derviş Karaboğa&nbsp; &nbsp; &nbsp; Turkey&nbsp; &nbsp; &nbsp; &nbsp;Erciyes University</p>\r\n\r\n<p>Prof. Derviş Karaboğa&nbsp; &nbsp; &nbsp; Turkey&nbsp; &nbsp; &nbsp; &nbsp;Erciyes University</p>\r\n', '<p>*Taxes are included.<br />\r\n<strong>The conference fee includes</strong><br />\r\n- The Conference Bag<br />\r\n- The Conference Materials<br />\r\n- The Conference Cocktail<br />\r\n- 1 Lunch<br />\r\n- Tea/coffee break.<br />\r\n- Entrance to the exhibition', '<p>Org: Dr Zeki Oralhan</p>\r\n', '2019-09-05', '<p>ARACONF&nbsp;2019 will be held at Nuh Naci Yazgan University Campus, Kayseri, Turkey...</p>\r\n', '<table align=\"center\" border=\"0.5\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Honor Chair</th>\r\n			<td>Prof. Dr. Kemal İnan</td>\r\n			<td>Sabancı University</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Homor Chair</th>\r\n			<td>Prof. Dr. Ian F. Akyildiz</td>\r\n			<td>Georgia Institute of Technology</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\"><strong>Honor Chair</strong></th>\r\n			<td>Prof. Dr. Mustafa Ergen</td>\r\n			<td>Istanbul Technical University</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\"><strong>Conference Chair</strong></th>\r\n			<td>Asst. Prof. Dr. Zeki Oralhan</td>\r\n			<td>Nuh Naci Yazgan University</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Member</th>\r\n			<td>Assoc. Prof. Dr. Dilek Kurt</td>\r\n			<td>Turkish German University</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\"><strong>Member</strong></th>\r\n			<td>Assoc. Prof. Dr. Mahmut Tokmak&ccedil;ı</td>\r\n			<td>Erciyes University</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Member</th>\r\n			<td>Assoc. Prof. Dr. Evren Mutlug&uuml;n</td>\r\n			<td>Abdullah G&uuml;l &Uuml;niversity</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Member</th>\r\n			<td>Asst. Prof. Dr. Abdullah &Ccedil;alışkan</td>\r\n			<td>İskenderun Technical University</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Member</th>\r\n			<td>Asst. Prof. Dr.&nbsp;Asuman Savaş&ccedil;ıhabeş</td>\r\n			<td>Nuh Naci Yazgan University</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\"><strong>Member</strong></th>\r\n			<td>Asst.&nbsp;Prof. Dr. Şaban Karayağız</td>\r\n			<td>Nuh Naci Yazgan University</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Secretary</th>\r\n			<td>Sadık Melih Uzunoğlu</td>\r\n			<td>Niğde &Ouml;mer Halisdemir University</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>3D Printing</li>\r\n	<li>Advanced Human-Machine Interface</li>\r\n	<li>Artificial Intelligence</li>\r\n	<li>Automation and Control Technologies</li>\r\n	<li>Autonomous Systems..</li>\r\n	<li>Big Data Processing</li>\r\n	<li>Biomedical Technologies</li>\r\n	<li>Biomimetics..</li>\r\n	<li>Biotechnology</li>\r\n	<li>Building Technologies</li>\r\n	<li>Chemical, Biological, Radiological and Nuclear Defense</li>\r\n	<li>Criminal and Forensic Science</li>\r\n	<li>Cognitive Systems</li>\r\n	<li>Computer Science</li>\r\n	<li>Current Issues and Challenges in Innovation</li>\r\n	<li>Cybercrime</li>\r\n	<li>Data Mining and Knowledge Discovery</li>\r\n	<li>Data (voice/image/data) Processing and Recognition</li>\r\n	<li>Design Thinking</li>\r\n	<li>Economics Of Technology And Innovation</li>\r\n	<li>Electrical &amp; Electronics Technologies</li>\r\n	<li>Energy Systems and Energy Management</li>\r\n	<li>Environmental Chemistry and Toxicology</li>\r\n	<li>Food Technologies</li>\r\n	<li>Fuel Cell and Water Splitter</li>\r\n	<li>Geographic Information System</li>\r\n	<li>Green Energy and Green Technology</li>\r\n	<li>Grid and Cloud Computing</li>\r\n	<li>Industry 4.0</li>\r\n	<li>Information Security</li>\r\n	<li>Innovations in Engineering</li>\r\n	<li>Intellectual Property Rights</li>\r\n	<li>Intelligent Communications and Networks</li>\r\n	<li>Knowledge Engineering</li>\r\n	<li>Laser and Photonic</li>\r\n	<li>Lean Manufacturing Technologies</li>\r\n</ul>\r\n', '<p>&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*&Ouml;zel B&ouml;l&uuml;mler(Special Sections)*</p>\r\n', '<p><strong>ARACONF 2019 accepts abstracts or full papers both in Turkish and English.</strong><br />\r\nResearchers can submit just abstract or full paper.<br />\r\n<strong>All abstracts and full papers will be evaluated under blind-review process.</strong><br />\r\nThe submissions will be reviewed by at least two independent referees.<br />\r\nResearchers have to use reviewconf center for submission.<br />\r\nSimilarity should be 25% without references, 30% with references at most.<br />\r\n<strong>The best rated articles are recommended to be published, in extended versions, in Advances in Electrical and Computer Engineering.The journal is included in the Science Citation Index Expanded (SCI-E).&nbsp;</strong><br />\r\nAccepted abstracts and full papers will be published in the conference proceedings.<br />\r\nProceeding book with ISBN will be published online.</p>\r\n', '', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:300px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Deadline for Submitting Special Session Proposal</td>\r\n			<td>September 14, 2019</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Deadline for Submitting Special Session Proposal</td>\r\n			<td>September 14, 2019</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Deadline for Submitting Special Session Proposal</td>\r\n			<td>September 14, 2019</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-09-05'),
(53, '2019-05-01 19:48:24', 'dimg/icerik/31452211413056524270_Hayri Özbülbül kişisinden fotoğraf.jpg', 'asdasdas', '<p>dasdasdasdasdasdasdas</p>\r\n', 'dasdasdasdas', '1', '<p>asdasdasd asd asdas&nbsp;</p>\r\n', '<p>asd asd asd as as as as&nbsp;</p>\r\n', '<p>asd asd asd asd asd as asd&nbsp;</p>\r\n', '2019-02-01', '<p>dasdasd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>asdasd</p>\r\n\r\n<p>as</p>\r\n\r\n<p>das</p>\r\n', '<p>adas</p>\r\n\r\n<p>das</p>\r\n\r\n<p>das</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>as</p>\r\n', '<p>asdasd</p>\r\n\r\n<p>asdas</p>\r\n\r\n<p>das</p>\r\n\r\n<p>d</p>\r\n\r\n<p>asd</p>\r\n', '<p>asdas</p>\r\n\r\n<p>das</p>\r\n\r\n<p>das</p>\r\n\r\n<p>d</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>as</p>\r\n\r\n<p>d</p>\r\n', '<p>asd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>as</p>\r\n\r\n<p>das</p>\r\n', '', '<p>asdasdas</p>\r\n\r\n<p>das</p>\r\n\r\n<p>das</p>\r\n\r\n<p>d</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>asd</p>\r\n', '2019-05-01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_ad`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2017-01-07 20:00:00', 'dimg/kullanici/27415profile.png', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

CREATE TABLE `makale` (
  `makale_id` int(11) NOT NULL,
  `makale_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_yazar` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_sayfa` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_sayi` int(50) NOT NULL,
  `makale_cilt` int(50) NOT NULL,
  `makale_yil` int(50) NOT NULL,
  `makale_ozet` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_keyword` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_kaynakca` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_tarih` date NOT NULL,
  `makale_kaynak` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `makale_konu` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`makale_id`, `makale_ad`, `makale_yazar`, `makale_sayfa`, `makale_sayi`, `makale_cilt`, `makale_yil`, `makale_ozet`, `makale_keyword`, `makale_kaynakca`, `makale_tarih`, `makale_kaynak`, `makale_durum`, `makale_konu`) VALUES
(1, 'HAREZM TÜRKÇESİYLE YAPILAN KUR’AN ÇEVİRİSİNİN BEŞ NÜSHASI', 'Mustafa ARGUNŞAH', '654 - 698', 1, 1, 2017, 'İlk olarak A. Zeki Velidi Togan ve Abdulkadir İnan, Karahanlı ve Harezm Türkçesi Dönemi’ne ait Kur\'an çevirilerinin aynı metnin nüshaları olabileceğini dile getirmişlerdir. Hatta İnan, Anadolu sahasındaki çevirilerin Moğol istilası sırasında getirilen tek bir ortak metne dayandığını ileri sürmüştür. Anadolu sahasında Kur\'an çevirileri üzerinde Mustafa Toker ve Ali Osman Solmaz da yaptıkları küçük karşılaştırmalarda bazı nüshaların aynı çeviriye dayandığını ortaya koymuşlardır.\r\n\r\nTürkçenin tarihî dönemlerine ait metinlerin bilimsel yayımında karşılaştırmalı metoda sıklıkla başvurulmasına rağmen, Kur\'an\'ın Türkçeye çevirilerinde bu metot uygulanmamıştır. Hâlbuki karşılaştırmalı metodun dil araştırmalarındaki önemi tartışılmazdır. Tarihî dönemlere ait Kur’an çevirilerinin nüshaları tespit edilerek karşılaştırmalı (edisyon kritikli) metinleri yayımlanmalıdır.', 'Kur\'an, Kur\'an\'ın Türkçe çevirileri, Harezm Türkçesi, edisyon kritik', 'Argunşah, M. (2019). İlk Kur\'an çevirilerinin dili üzerine bir karşılaştırma. Atebetü\'l-Hakâyık ve İlk Dönem Türkçe İslâmî Eserler Sempozyumu (28-30 Haziran 2018, Ankara), Yeni Türkiye, 105 (İlk Dönem Türkçe İslâmî Eserler Özel Sayısı -1), 386-398.\r\nCoşgun, G. (2017). İran Meşhed kütüphanesindeki Türkçe satırarası Kur\'an tercümeleri ve 2229 numaralı tercüme. TÜLED (Türk Lehçeleri ve Edebiyatları Dergisi), 1, 15-34.\r\nİnan, A. (1952a). Eski Türkçe üç Kuran tercümesi. Türk Dili, 6, 12-15.\r\nİnan, A. (1952b). Eski Kuran tercümelerinin dili meselesi. Türk Dili, 7, 19-22.\r\nKök, A. (2017). Türk hakanlığı dönemi ilk Türkçe satırarası Kur\'an tercümesi TİEM 73: İlmî keşfi ve ilmî neşri meselesi. Modern Türklük Araştırmaları Dergisi, 4(3), 191-211.\r\nKüçük, M. (2014). Eski Anadolu Türkçesi dönemine ait satır arası ilk Kuran tercümesi. Ankara: Türk Dil Kurumu Yayınları.\r\nRezaei, M. (2016). Hârezm Türkçesiyle yazılan bir Kur\'an tercümesi (Meşhed-i Âstān-i Quds-i Razavī nüshası), TEKE (Uluslararası Türkçe Edebiyat Kültür Eğitim Dergisi), 5(3), 1094-1113.\r\nSağol G. (1993). Harezm Türkçesi satır arası Kur\'an tercümesi, giriş-metin-sözlük, Yayımlanmamış Doktora Tezi, İstanbul: Marmara Üniversitesi Türkiyat Araştırmaları Enstitüsü.\r\nSağol, G. (1993). An inter-linear translation of the Qur\'an into Khwarazm Turkish. introduction and text. I, Harvard University The Department of Near Eastern Languages and Civilizations.\r\nSağol, G. (1995). An inter-linear translation of the Qur\'an into Khwarazm Turkish. glossary. II, Harvard University The Department of Near Eastern Languages and Civilizations.\r\nSağol, G. (1996). An inter-linear translation of the Qur\'an into Khwarazm Turkish. facsimile of the MS Süleymaniye Library, Hekimoğlu Ali Paşa No. 2, section one: 1b-300b. III, Harvard University The Department of Near Eastern Languages and Civilizations.\r\nSağol, G. (1999). An inter-linear translation of the Qur\'an into Khwarazm Turkish. facsimile of the MS Süleymaniye Library, Hekimoğlu Ali Paşa No. 2, section two: 301a-587b. III, Harvard University The Department of Near Eastern Languages and Civilizations.', '2019-09-15', 'APA	ARGUNŞAH, M . (2019). HAREZM TÜRKÇESİYLE YAPILAN KUR’AN ÇEVİRİSİNİN BEŞ NÜSHASI. Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi , 8 (2) , 654-698 . Retrieved from https://dergipark.org.tr/tr/pub/teke/issue/46075/580047', '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale_arsive`
--

CREATE TABLE `makale_arsive` (
  `id` int(11) NOT NULL,
  `dergi_id` int(11) NOT NULL,
  `dergi_cilt` int(11) NOT NULL,
  `dergi_yil` int(11) NOT NULL,
  `dergi_sayi` int(11) NOT NULL,
  `makale_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_yazar` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_sayfasayi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `makale_durum` int(1) NOT NULL DEFAULT 1,
  `makale_pdf` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `makale_keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_kaynakca` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_kaynak` text COLLATE utf8_turkish_ci NOT NULL,
  `makale_tarih` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `makale_arsive`
--

INSERT INTO `makale_arsive` (`id`, `dergi_id`, `dergi_cilt`, `dergi_yil`, `dergi_sayi`, `makale_ad`, `makale_yazar`, `makale_sayfasayi`, `makale_durum`, `makale_pdf`, `makale_keywords`, `makale_kaynakca`, `makale_kaynak`, `makale_tarih`) VALUES
(3, 10, 1, 2017, 1, 'mkl ad', 'yzr', '10-15', 1, '', 'Erzurum, Selçuklular, Saltuklular, Tepsi Minare, kûfî, kaligrafi, tipografi, font', 'Alyılmaz, C. (2005). Orhun yazıtlarının bugünkü durumu. Ankara. Alyılmaz, C. (2007). (Kök)Türk harfli yazıtların izinde. Ankara. Alyılmaz, C. (2011). Azerbaycan’daki Arap harfli yazıtların bugünkü durumu. Turkish Studies, International Periodical For The Languages, Literature and History of Turkish or Turkic, Volume 6/1, Ankara, 358-389. Alyılmaz, C. ve Alyılmaz, S. (2010). Nahçıvan’daki eski Türk kültür ve uygarlık eserleri. Türk Dünyası Mimarlık ve Şehircilik Kurultayı Bildirileri, III, Ankara, 181-192.Arık, R. (1969). Erzurum’da iki cami. Vakıflar Dergisi, VIII, 149-159. Aslanapa, O. (1990). Türk sanatı. Ankara.', ' Bibtex	 @araştırma makalesi { teke545654, journal = {Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi}, issn = {2147-0146}, address = {}, publisher = {Atatürk Üniversitesi}, year = {2019}, volume = {8}, pages = {1 - 27}, doi = {}, title = {SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE}, key = {cite}, author = {ALYAP, Levent} } APA	ALYAP, L . (2019). SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE. Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi , 8 (1) , 1-27 . Retrieved from https://dergipark.org.tr/tr/pub/teke/issue/44335/545654', '18 mart 2018'),
(6, 10, 1, 2018, 1, 'deneme123', 'hayri özbülbül', '20-60\r\n', 1, '', '', '', '', '0000-00-00'),
(7, 10, 1, 2018, 2, 'asdasdasd', 'adasdasd213', '20-30', 1, '', '', '', '', '0000-00-00'),
(8, 10, 1, 2019, 1, 'Makale Adı', 'Yazar', '<p>231</p>\r\n', 1, '', '', '', '', '0000-00-00'),
(9, 10, 1, 2019, 2, 'Makale Adı', 'asda', 'dasdasd', 1, '', '<p>asdasdasdas</p>\r\n', '<p>dasdasdasdasd</p>\r\n', '<p>adasdasdasdasdasdasd</p>\r\n', '18 mart 2019'),
(12, 15, 1, 2019, 2, 'Makale Adı', 'sdasdasdasdas', '234234', 1, '', '<p>asdasdasdasd</p>\r\n', '<p>asdasdassdfgsagasdg</p>\r\n', '<p>sadfasdfasdfasdfsad</p>\r\n', '18 mart 2019'),
(13, 15, 1, 2020, 1, 'adasdasd', 'asfafsadfas', '234', 1, '', '<p>asdasfasfsad</p>\r\n', '<p>fasdfasdgsdfgdfsg</p>\r\n', '<p>cvxcgvsdfgsadasfsfasfasf</p>\r\n', '02.03.2019');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `menu_ust` int(11) NOT NULL,
  `menu_icon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `kategori_id`, `menu_ust`, `menu_icon`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`) VALUES
(1, 0, 0, 'fa-home', 'Home', '', 'index.php', 1, 1),
(2, 0, 0, '', 'About', '', 'about.php', 5, 1),
(9, 0, 0, '', 'Journal', '', 'journal-list.php', 4, 1),
(11, 0, 0, '', 'Conference', '', 'conference.php', 4, 1),
(12, 0, 0, '', 'Contact', '', 'contact.php', 8, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referans`
--

CREATE TABLE `referans` (
  `referans_id` int(11) NOT NULL,
  `referans_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `referans_resimyol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `referans_link` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `referans`
--

INSERT INTO `referans` (`referans_id`, `referans_ad`, `referans_resimyol`, `referans_link`) VALUES
(9, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(10, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(11, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(12, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(13, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(14, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(15, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(16, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(17, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(18, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(19, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(20, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(21, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(22, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(23, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(24, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(25, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(26, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(27, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(28, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(29, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(30, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(31, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(32, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(33, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(34, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(35, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(36, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(37, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(38, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(39, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', ''),
(40, 'Referans', 'dimg/referans/29141248492187422191referans_test.png', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `slider_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_atitle` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_sira`, `slider_durum`, `slider_baslik`, `slider_title`, `slider_atitle`) VALUES
(15, 'Gün Batımı', 'dimg/slider/31399275102313322980header-slide.jpg', '', 1, '1', 'Online Learning Anytime, Anywhere!', 'DISCOVER YOUR ROOTS', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider_bilgi`
--

CREATE TABLE `slider_bilgi` (
  `slider_bilgi_id` int(1) NOT NULL,
  `slider_title` text COLLATE utf8_turkish_ci NOT NULL,
  `slider_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `slider_alt_title` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider_bilgi`
--

INSERT INTO `slider_bilgi` (`slider_bilgi_id`, `slider_title`, `slider_baslik`, `slider_alt_title`) VALUES
(0, 'Title', 'baslık', 'asdasdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

CREATE TABLE `sss` (
  `sss_id` int(11) NOT NULL,
  `sss_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sss_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `sss_sira` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sss`
--

INSERT INTO `sss` (`sss_id`, `sss_ad`, `sss_detay`, `sss_sira`) VALUES
(2, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(3, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(5, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(6, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(7, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(8, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(9, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(10, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(11, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(12, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(13, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(28, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(29, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(30, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(31, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(32, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(33, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0),
(34, 'Sık sorulanlar konu başlığı, dilediğiniz sayıda sık sorulan soru girebilir ve düzenleyebilirsiniz...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate, tortor id ultricies mattis, dolor diam dapibus odio, sit amet aliquam nisi tellus in enim. Suspendisse feugiat luctus massa eu rutrum. Duis sodales volutpat magna et dictum. Aenean vehicula vestibulum metus sit amet viverra. Sed in leo at nisl ornare blandit. Sed consectetur elit ac fermentum sodales. Donec finibus mi diam, a fermentum ex posuere eget. Quisque et massa dui. Nullam eu mi orci. Aliquam sit amet leo vitae nulla luctus dapibus. Fusce sollicitudin sodales dolor, eu consequat augue vestibulum vitae. Phasellus sit amet ante in lorem vehicula consequat a convallis odio. Donec egestas elit at neque imperdiet facilisis. Ut erat ex, scelerisque ut lorem ac, pretium dapibus nisi. Curabitur nec est maximus justo ultrices luctus.</p>\r\n\r\n<p>Nam auctor augue quam, sed egestas elit condimentum eu. Aenean dignissim ante eget ante venenatis maximus. Nam imperdiet felis a ex mollis venenatis. Vivamus a massa ultricies, fringilla elit id, efficitur est. Sed mattis libero quis posuere ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In at commodo orci. Aenean quam nisl, viverra nec ipsum eu, porta feugiat lacus. Aliquam tortor nisi, condimentum sed lacus id, blandit malesuada arcu. Etiam aliquam massa quis tristique elementum. Vivamus vulputate fringilla lectus, in cursus nisl malesuada vel. Morbi iaculis mauris lorem.</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `video_code` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `video_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `video_yed` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `video`
--

INSERT INTO `video` (`video_id`, `video_ad`, `video_code`, `video_resimyol`, `video_yed`) VALUES
(29, '77-b-Php Dersleri - Bölüm 00 - Php ile website yapımı+pdo+mysql. 52 Ders 17 saat ücretsiz eğitim', 'XUQ4qQmaKuA', 'dimg/video/26248207542185225046.jpg', ''),
(30, '77-Php Dersleri - Bölüm 01- Yönetim Panelli Porto Firma Scripti Html template parçalama işlemleri-01', 'Ho0MO14KakQ', 'dimg/video/27453209112468728754.jpg', ''),
(31, '78-Php Dersleri - Bölüm 02- Yönetim Panelli Porto Firma Scripti Html template parçalama işlemleri-02', 'il5FLlvK5WM', 'dimg/video/29345207923050430545.jpg', ''),
(32, '79-Php Dersleri - Bölüm 03- Yönetim Panelli Porto Firma Scripti Admin template parçalama-01', 'Ixxr32vcyEA', 'dimg/video/21368251512026522375.jpg', ''),
(33, '80-Php Dersleri - Bölüm 04- Yönetim Panelli Porto Firma Scripti Admin template parçalama-02', 'g7IEFBfyYXI', 'dimg/video/31650276103109930871.jpg', ''),
(34, '81-Php Dersleri - Bölüm 05- Yönetim Panelli Porto Firma Scripti Mysql ayar tablosu işlemleri-01', 'PI9Uas4gLSs', 'dimg/video/22314277962212628654.jpg', ''),
(35, '82-Php Dersleri - Bölüm 06- Yönetim Panelli Porto Firma Scripti Mysql ayar tablosu işlemleri-02', 'MbiMY0CV5Xw', 'dimg/video/21486313343047530352.jpg', ''),
(36, '83-Php Dersleri - Bölüm 07- Pdo Yönetim Panelli Porto Firma Scripti Mysql veri çekme-01', 'jcMN3URXs7M', 'dimg/video/27292258482726820588.jpg', ''),
(37, '84-Php Dersleri - Bölüm 08- Pdo Yönetim Panelli Porto Firma Scripti Mysql veri çekme-02', 'oZTCUcl3fM8', 'dimg/video/31855289642563225989.jpg', ''),
(38, '85-Php Dersleri - Bölüm 09- Pdo Yönetim Panelli Porto Firma Scripti Site Ayarları yönetim modülü-01', 'lnQrRohONNE', 'dimg/video/21300283062069031180.jpg', ''),
(39, '86-Php Dersleri - Bölüm 10- Pdo Yönetim Panelli Porto Firma Scripti Site Ayarları yönetim modülü-02', 'w4TDxU7F2Kk', 'dimg/video/23754295002557026783.jpg', ''),
(40, '87-Php Dersleri - Bölüm 11- Pdo Yönetim Panelli Porto Firma Scripti Site Ayarları yönetim modülü-03', 'Kwy40bF_0Fg', 'dimg/video/25341201702339521426.jpg', ''),
(41, '88-Php Dersleri - Bölüm 12- Pdo Yönetim Panelli Porto Firma Scripti Site Ayarları yönetim modülü-04', 'az13McoNsW8', 'dimg/video/30185299432729029734.jpg', ''),
(42, '89-Php Dersleri - Bölüm 12b- Pdo Yönetim Panelli Porto Firma Scripti Site Ayarları yönetim modülü-05', 'vLg1UzHfXTE', 'dimg/video/24412224402038024330.jpg', ''),
(43, '90-Php Dersleri - Bölüm 13- Pdo Yönetim Panelli Porto Firma Scripti Hakkımızda modülü yapımı-01', 'hYYpi7tapBs', 'dimg/video/24147272912779131840.jpg', ''),
(44, '91-Php Dersleri - Bölüm 14- Pdo Yönetim Panelli Porto Firma Scripti Hakkımızda modülü yapımı-02', 'saOseRzS9AY', 'dimg/video/27515201172064624889.jpg', ''),
(47, 'Haftalık Gündem Değerlendirmesi 2017/50', 'XUCRvqdlsPY', 'dimg/video/23002205542820726000.jpg', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `dergi`
--
ALTER TABLE `dergi`
  ADD PRIMARY KEY (`dergi_id`);

--
-- Tablo için indeksler `dergi_arsive`
--
ALTER TABLE `dergi_arsive`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `makale`
--
ALTER TABLE `makale`
  ADD PRIMARY KEY (`makale_id`);

--
-- Tablo için indeksler `makale_arsive`
--
ALTER TABLE `makale_arsive`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `referans`
--
ALTER TABLE `referans`
  ADD PRIMARY KEY (`referans_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `slider_bilgi`
--
ALTER TABLE `slider_bilgi`
  ADD PRIMARY KEY (`slider_bilgi_id`) USING BTREE;

--
-- Tablo için indeksler `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`sss_id`);

--
-- Tablo için indeksler `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dergi`
--
ALTER TABLE `dergi`
  MODIFY `dergi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `dergi_arsive`
--
ALTER TABLE `dergi_arsive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `makale`
--
ALTER TABLE `makale`
  MODIFY `makale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `makale_arsive`
--
ALTER TABLE `makale_arsive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `referans`
--
ALTER TABLE `referans`
  MODIFY `referans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `sss`
--
ALTER TABLE `sss`
  MODIFY `sss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
