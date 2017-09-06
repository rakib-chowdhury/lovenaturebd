-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 08:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `love_nature_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `details_bn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `caption_bn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `details`, `details_bn`, `image`, `caption`, `caption_bn`, `status`, `created_at`, `updated_at`) VALUES
(1, 'about us csddcsdfsdfsdf', 'আমাদের সম্পর্কে', 'emp_1.jpg', 'image caption', 'কুমিল্লা ', 1, NULL, '2017-05-10 01:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_name_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `company_name`, `company_name_bn`, `email`, `website`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Love Nature BD', 'লাভ নেচার বিডি', 'something@something.com', 'www.lovenaturebd.com', 'logo.gif', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `address_bn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `package_info` text NOT NULL,
  `package_info_bn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `air_ticket_info` text NOT NULL,
  `air_ticket_info_bn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `address`, `address_bn`, `package_info`, `package_info_bn`, `air_ticket_info`, `air_ticket_info_bn`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'H#452,R#31, Mohakhali-DOHS, Dhaka ', 'বাসা#৪৫২, রোড#৩১, মহাখালী ডিওএইচএস, ঢাকা ', '01613083375 - 01613083375- 01613083375 \r\n01613083375- 01613083375- 01613083375', '০১৬১৩০৮৩৩৭৫,০১৬১৩০৮৩৩৭৫,০১৬১৩০৮৩৩৭৫,\r\n০১৬১৩০৮৩৩৭৫,০১৬১৩০৮৩৩৭৫,০১৬১৩০৮৩৩৭৫', '01613083375,01613083375, \r\n01613083375,01613083375', '০১৬১৩০৮৩৩৭৫,০১৬১৩০৮৩৩৭৫,০১৬১৩০৮৩৩৭৫', 'something@something.com', 1, NULL, '2017-05-23 22:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `country_flag`
--

CREATE TABLE `country_flag` (
  `id` int(11) NOT NULL,
  `country_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_name_bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_short_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country_flag`
--

INSERT INTO `country_flag` (`id`, `country_image`, `country_name`, `country_name_bn`, `country_short_name`) VALUES
(1, 'Afghanistan.png', 'Afghanistan', 'আফগানিস্তান', 'afg'),
(2, 'African Union.png', 'African Union', 'আফ্রিকান ইউনিয়ন', 'afru'),
(3, 'Albania.png', 'Albania', 'আলবেনিয়া  ', 'alb'),
(4, 'Algeria.png', 'Algeria', 'আলজেরিয়া', 'alg'),
(5, 'American Samoa.png', 'American Samoa', '', 'amrs'),
(6, 'Andorra.png', 'Andorra', '', 'and'),
(7, 'Angola.png', 'Angola', '', 'ang'),
(8, 'Anguilla.png', 'Anguilla', '', 'angu'),
(9, 'Antarctica.png', 'Antarctica', '', 'antr'),
(10, 'Antigua & Barbuda.png', 'Antigua & Barbuda', '', 'antbar'),
(11, 'Arab League.png', 'Arab League', '', 'arbl'),
(12, 'Argentina.png', 'Argentina', 'আর্জেন্টিনা ', 'arg'),
(13, 'Armenia.png', 'Armenia', '', 'arm'),
(14, 'Aruba.png', 'Aruba', '', 'arb'),
(15, 'ASEAN.png', 'ASEAN', '', 'asean'),
(16, 'Australia.png', 'Australia', 'অস্ট্রেলিয়া ', 'aus'),
(17, 'Austria.png', 'Austria', 'অস্ট্রিয়া ', 'aust'),
(18, 'Azerbaijan.png', 'Azerbaijan', '', 'azb'),
(19, 'Bahamas.png', 'Bahamas', '', 'bhm'),
(20, 'Bahrain.png', 'Bahrain', '', 'bah'),
(21, 'Bangladesh.png', 'Bangladesh', 'বাংলাদেশ ', 'ban'),
(22, 'Barbados.png', 'Barbados', '', 'barb'),
(23, 'Belarus.png', 'Belarus', '', 'blrs'),
(24, 'Belgium.png', 'Belgium', 'বেলজিয়াম', 'blg'),
(25, 'Belize.png', 'Belize', '', 'blz'),
(26, 'Benin.png', 'Benin', '', 'ben'),
(27, 'Bermuda.png', 'Bermuda', 'বারমুডা', 'ber'),
(28, 'Bhutan.png', 'Bhutan', 'ভুটান', 'bhu'),
(29, 'Bolivia.png', 'Bolivia', '', 'bol'),
(30, 'Bosnia & Herzegovina.png', 'Bosnia & Herzegovina', '', 'bos'),
(31, 'Botswana.png', 'Botswana', '', 'bot'),
(32, 'Brazil.png', 'Brazil', 'ব্রাজিল', 'bra'),
(33, 'Brunei.png', 'Brunei', '', 'bru'),
(34, 'Bulgaria.png', 'Bulgaria', 'বুলগেরিয়া', 'bul'),
(35, 'Burkina Faso.png', 'Burkina Faso', '', 'bur'),
(36, 'Burundi.png', 'Burundi', '', 'brnd'),
(37, 'Cambodia.png', 'Cambodia', '', 'cmbd'),
(38, 'Cameroon.png', 'Cameroon', '', 'cmr'),
(39, 'Canada.png', 'Canada', 'কানাডা ', 'cnd'),
(40, 'Cape Verde.png', 'Cape Verde', '', 'capv'),
(41, 'CARICOM.png', 'CARICOM', '', 'cari'),
(42, 'Cayman Islands.png', 'Cayman Islands', '', 'cymi'),
(43, 'Central African Republic.png', 'Central African Republic', '', 'cafr'),
(44, 'Chad.png', 'Chad', '', 'chad'),
(45, 'Chile.png', 'Chile', 'চিলি ', 'chl'),
(46, 'China.png', 'China', 'চীন ', 'chn'),
(47, 'CIS.png', 'CIS', '', 'cis'),
(48, 'Colombia.png', 'Colombia', 'কলাম্বিয়া', 'col'),
(49, 'Commonwealth.png', 'Commonwealth', '', 'cmnwlt'),
(50, 'Comoros.png', 'Comoros', '', 'cmrs'),
(51, 'Congo-Brazzaville.png', 'Congo-Brazzaville', '', 'cngbra'),
(52, 'Congo-Kinshasa(Zaire).png', 'Congo-Kinshasa(Zaire)', '', 'cngkin'),
(53, 'Cook Islands.png', 'Cook Islands', '', 'cook'),
(54, 'Costa Rica.png', 'Costa Rica', 'কোষ্টারিকা', 'cosr'),
(55, 'Cote d''Ivoire.png', 'Cote d''Ivoire', '', 'civ'),
(56, 'Croatia.png', 'Croatia', 'ক্রোয়েশিয়া   ', 'cro'),
(57, 'Cuba.png', 'Cuba', 'কিউবা', 'cuba'),
(58, 'Cyprus.png', 'Cyprus', 'সাইপ্রাস  ', 'cyp'),
(59, 'Czech Republic.png', 'Czech Republic', 'চেক রিপাবলিক', 'cze'),
(60, 'Denmark.png', 'Denmark', 'ডেনমার্ক', 'den'),
(61, 'Djibouti.png', 'Djibouti', '', 'dji'),
(62, 'Dominica.png', 'Dominica', '', 'dom'),
(63, 'Dominican Republic.png', 'Dominican Republic', '', 'domrep'),
(64, 'Ecuador.png', 'Ecuador', 'ইকুয়েডোর ', 'ecu'),
(65, 'Egypt.png', 'Egypt', 'ইজিপ্ট ', 'egy'),
(66, 'El Salvador.png', 'El Salvador', '', 'el'),
(67, 'England.png', 'England', 'ইংল্যান্ড ', 'uk'),
(68, 'Equatorial Guinea.png', 'Equatorial Guinea', '', 'equa'),
(69, 'Eritrea.png', 'Eritrea', '', 'erit'),
(70, 'Estonia.png', 'Estonia', '', 'est'),
(71, 'Ethiopia.png', 'Ethiopia', '', 'eth'),
(72, 'European Union.png', 'European Union', '', 'eu'),
(73, 'Faroes.png', 'Faroes', '', 'far'),
(74, 'Fiji.png', 'Fiji', 'ফিজি ', 'fiji'),
(75, 'Finland.png', 'Finland', 'ফিনল্যাণ্ড ', 'fin'),
(76, 'France.png', 'France', 'ফ্রান্স ', 'fra'),
(77, 'Gabon.png', 'Gabon', '', 'gbn'),
(78, 'Gambia.png', 'Gambia', '', 'gmb'),
(79, 'Georgia.png', 'Georgia', '', 'grg'),
(80, 'Germany.png', 'Germany', 'জার্মানি', 'ger'),
(81, 'Ghana.png', 'Ghana', '', 'ghn'),
(82, 'Gibraltar.png', 'Gibraltar', '', 'gib'),
(83, 'Greece.png', 'Greece', 'গ্রীস', 'gre'),
(84, 'Greenland.png', 'Greenland', 'গ্রীনল্যান্ড', 'grnlnd'),
(85, 'Grenada.png', 'Grenada', '', 'gren'),
(86, 'Guadeloupe.png', 'Guadeloupe', '', 'guad'),
(87, 'Guam.png', 'Guam', '', 'guam'),
(88, 'Guatemala.png', 'Guatemala', '', 'guat'),
(89, 'Guernsey.png', 'Guernsey', '', 'guer'),
(90, 'Guinea.png', 'Guinea', '', 'guin'),
(91, 'Guinea-Bissau.png', 'Guinea-Bissau', '', 'guibis'),
(92, 'Guyana.png', 'Guyana', '', 'guy'),
(93, 'Haiti.png', 'Haiti', 'হাইতি', 'haiti'),
(94, 'Honduras.png', 'Honduras', 'হুন্দুরাস', 'hond'),
(95, 'Hong Kong.png', 'Hong Kong', '', 'hk'),
(96, 'Hungary.png', 'Hungary', 'হাঙ্গেরী', 'hung'),
(97, 'Iceland.png', 'Iceland', 'আইসল্যান্ড', 'ice'),
(98, 'India.png', 'India', 'ইন্ডিয়া', 'ind'),
(99, 'Indonezia.png', 'Indonesia', 'ইন্দোনেশিয়া', 'indo'),
(100, 'Iran.png', 'Iran', 'ইরান', 'iran'),
(101, 'Iraq.png', 'Iraq', 'ইরাক', 'iraq'),
(102, 'Ireland.png', 'Ireland', 'আয়ারল্যান্ড', 'ire'),
(103, 'Islamic Conference.png', 'Islamic Conference', '', 'islcon'),
(104, 'Isle of Man.com', 'Isle of Man', '', 'isle'),
(105, 'Israel.png', 'Israel', '', 'isrl'),
(106, 'Italy.png', 'Italy', 'ইটালি', 'ita'),
(107, 'Jamaica.png', 'Jamaica', '', 'jam'),
(108, 'Japan.png', 'Japan', 'জাপান', 'jpn'),
(109, 'Jersey.png', 'Jersey', '', 'jer'),
(110, 'Jordan.png', 'Jordan', '', 'jrdn'),
(111, 'Kazakhstan.png', 'Kazakhstan', '', 'kzs'),
(112, 'Kenya.png', 'Kenya', '', 'ken'),
(113, 'Kiribati.png', 'Kiribati', '', 'kiri'),
(114, 'Kosovo.png', 'Kosovo', '', 'kos'),
(115, 'Kuwait.png', 'Kuwait', '', 'kuw'),
(116, 'Kyrgyzstan.png', 'Kyrgyzstan', '', 'kyr'),
(117, 'Laos.png', 'Laos', '', 'laos'),
(118, 'Latvia.png', 'Latvia', '', 'lat'),
(119, 'Lebanon.png', 'Lebanon', 'লেবানন', 'leb'),
(120, 'Lesotho.png', 'Lesotho', '', 'les'),
(121, 'Liberia.png', 'Liberia', '', 'libr'),
(122, 'Libya.png', 'Libya', 'লিবিয়া', 'libya'),
(123, 'Liechtenshein.png', 'Liechtenshein', '', 'liect'),
(124, 'Lithuania.png', 'Lithuania', 'লিথুয়ানিয়া', 'lith'),
(125, 'Luxembourg.png', 'Luxembourg', '', 'lux'),
(126, 'Macao', 'Macao', '', ''),
(127, 'Macedonia.png', 'Macedonia', '', 'macd'),
(128, 'Madagascar.png', 'Madagascar', 'মাদাগাস্কার', 'madgs'),
(129, 'Malawi.png', 'Malawi', '', 'mala'),
(130, 'Malaysia.png', 'Malaysia', 'মালেশিয়া', 'mlys'),
(131, 'Maldives.png', 'Maldives', 'মালদ্বীপ ', 'mald'),
(132, 'Mali.png', 'Mali', '', 'mali'),
(133, 'Malta.png', 'Malta', '', 'malta'),
(134, 'Marshall Islands.png', 'Marshall Islands', '', 'mis'),
(135, 'Martinique.png', 'Martinique', '', 'mart'),
(136, 'Mauritania.png', 'Mauritania', '', 'maut'),
(137, 'Mauritius.png', 'Mauritius', '', 'maurts'),
(138, 'Mexico.png', 'Mexico', 'মেক্সিকো', 'mex'),
(139, 'Micronesia.png', 'Micronesia', '', 'micro'),
(140, 'Moldova.png', 'Moldova', '', 'mol'),
(141, 'Monaco.png', 'Monaco', '', 'mnc'),
(142, 'Mongolia.png', 'Mongolia', 'মঙ্গোলিয়া', 'mong'),
(143, 'Montenegro.png', 'Montenegro', '', 'montgr'),
(144, 'Montserrat.png', 'Montserrat', '', 'monst'),
(145, 'Morocco.png', 'Morocco', 'মরক্কো', 'mrc'),
(146, 'Mozambique.png', 'Mozambique', '', 'mzmb'),
(147, 'Myanmar(Burma).png', 'Myanmar(Burma)', 'মায়ানমার', 'myn'),
(148, 'Namibia.png', 'Namibia', '', 'nam'),
(149, 'NATO.png', 'NATO', '', 'nato'),
(150, 'Nauru.png', 'Nauru', '', 'nau'),
(151, 'Nepal.png', 'Nepal', 'নেপাল', 'nep'),
(152, 'Netherlands Antilles.png', 'Netherlands Antilles', '', 'nethanti'),
(153, 'Netherlands.png', 'Netherlands', 'নেদারল্যান্ড', 'dutch'),
(154, 'New Caledonia.png', 'New Caledonia', '', 'newcal'),
(155, 'New Zealand.png', 'New Zealand', 'নিউজিল্যান্ড', 'nzl'),
(156, 'Nicaragua.png', 'Nicaragua', '', 'nic'),
(157, 'Niger.png', 'Niger', '', 'niger'),
(158, 'Nigeria.png', 'Nigeria', '', 'ngr'),
(159, 'North Korea.png', 'North Korea', '', 'kornor'),
(160, 'Northern Cyprus.png', 'Northern Cyprus', '', 'norcyp'),
(161, 'Northern Ireland.png', 'Northern Ireland', '', 'norire'),
(162, 'Norway.png', 'Norway', 'নরওয়ে', 'nor'),
(163, 'Olimpic Movement.png', 'Olimpic Movement', '', 'olmo'),
(164, 'Oman.png', 'Oman', '', 'oman'),
(165, 'OPEC.png', 'OPEC', '', 'opec'),
(166, 'Pakistan.png', 'Pakistan', 'পাকিস্তান', 'pak'),
(167, 'Palau', 'Palau', '', ''),
(168, 'Palestine.png', 'Palestine', '', 'pal'),
(169, 'Panama.png', 'Panama', '', 'pan'),
(170, 'Papua New Guinea.png', 'Papua New Guinea', '', 'pap'),
(171, 'Paraguay.png', 'Paraguay', 'প্যারাগুয়ে', 'par'),
(172, 'Peru.png', 'Peru', 'পেরু', 'peru'),
(173, 'Philippines.png', 'Philippines', 'ফিলিপাইন', 'phil'),
(174, 'Poland.png', 'Poland', 'পোল্যান্ড', 'pol'),
(175, 'Portugal.png', 'Portugal', 'পর্তুগাল', 'por'),
(176, 'Puerto Rico.png', 'Puerto Rico', '', 'rico'),
(177, 'Qatar.png', 'Qatar', 'কাতার', 'qat'),
(178, 'Red Cross.png', 'Red Cross', '', 'red'),
(179, 'Reunion.png', 'Reunion', '', 'reu'),
(180, 'Romania.png', 'Romania', 'রোমানিয়া', 'rmn'),
(181, 'Russian Federation.png', 'Russian Federation', '', 'rus'),
(182, 'Rwanda.png', 'Rwanda', '', 'rwa'),
(183, 'Saint Lucia.png', 'Saint Lucia', '', 'sailu'),
(184, 'Samoa.png', 'Samoa', '', 'sam'),
(185, 'San Marino.png', 'San Marino', '', 'san'),
(186, 'Sao Tome & Principe.png', 'Sao Tome & Principe', '', 'sao'),
(187, 'Saudi Arabia.png', 'Saudi Arabia', '', 'ksa'),
(188, 'Scotland.png', 'Scotland', 'স্কটল্যান্ড', 'sco'),
(189, 'Senegal.png', 'Senegal', '', 'sen'),
(190, 'Serbia(Yugoslavia).png', 'Serbia(Yugoslavia)', '', 'ser'),
(191, 'Seychelles.png', 'Seychelles', '', 'sey'),
(192, 'Sierra Leone.png', 'Sierra Leone', '', 'sei'),
(193, 'Singapore.png', 'Singapore', 'সিঙ্গাপুর', 'sing'),
(194, 'Slovakia.png', 'Slovakia', '', 'svk'),
(195, 'Slovenia.png', 'Slovenia', '', 'svn'),
(196, 'Solomon Islands.png', 'Solomon Islands', '', 'solo'),
(197, 'Somalia.png', 'Somalia', 'সোমালিয়া', 'soma'),
(198, 'Somaliland.png', 'Somaliland', '', 'somali'),
(199, 'South Africa.png', 'South Africa', '', 'saf'),
(200, 'South Korea.png', 'South Korea', '', 'skr'),
(201, 'Spain.png', 'Spain', '', 'spn'),
(202, 'Sri Lanka.png', 'Sri Lanka', 'শ্রীলঙ্কা', 'sl'),
(203, 'St Kitts & Nevis.png', 'St Kitts & Nevis', '', 'stk'),
(204, 'St Vincent & the Grenadines.png', 'St Vincent & the Grenadines', '', 'stv'),
(205, 'Sudan.png', 'Sudan', '', 'sud'),
(206, 'Suriname.png', 'Suriname', '', 'suri'),
(207, 'Swaziland.png', 'Swaziland', '', 'swa'),
(208, 'Sweden.png', 'Sweden', '', 'swe'),
(209, 'Switzerland.png', 'Switzerland', 'সুইজারল্যান্ড', 'swit'),
(210, 'Syria.png', 'Syria', '', 'syr'),
(211, 'Tahiti(French Polinesia).png', 'Tahiti(French Polinesia)', '', 'tahi'),
(212, 'Taiwan.png', 'Taiwan', '', 'tai'),
(213, 'Tajikistan.png', 'Tajikistan', '', 'taj'),
(214, 'Tanzania.png', 'Tanzania', '', 'tanz'),
(215, 'Thailand.png', 'Thailand', 'থাইল্যান্ড', 'thai'),
(216, 'Timor-Leste.png', 'Timor-Leste', '', 'timo'),
(217, 'Togo.png', 'Togo', '', 'togo'),
(218, 'Tonga.png', 'Tonga', '', 'ton'),
(219, 'Trinidad & Tobago.png', 'Trinidad & Tobago', '', 't&t'),
(220, 'Tunisia.png', 'Tunisia', '', 'tun'),
(221, 'Turkey.png', 'Turkey', 'তুরস্ক', 'tur'),
(222, 'Turkmenistan.png', 'Turkmenistan', '', 'turk'),
(223, 'Turks and Caicos Islands.png', 'Turks and Caicos Islands', '', 'turks'),
(224, 'Tuvalu.png', 'Tuvalu', '', 'tuva'),
(225, 'Uganda.png', 'Uganda', 'উগান্ডা', 'uga'),
(226, 'Ukraine.png', 'Ukraine', '', 'ukra'),
(227, 'United Arab Emirates.png', 'United Arab Emirates', 'দুবাই', 'uae'),
(228, 'United Kingdom(Great Britain).png', 'United Kingdom(Great Britain)', '', 'uk'),
(229, 'United Nations.png', 'United Nations', '', 'un'),
(230, 'United States of America(USA).png', 'United States of America(USA)', 'আমেরিকা', 'usa'),
(231, 'Uruguay.png', 'Uruguay', '', 'uru'),
(232, 'Uzbekistan.png', 'Uzbekistan', '', 'uzb'),
(233, 'Vanutau.png', 'Vanutau', '', 'vanu'),
(234, 'Vatican City.png', 'Vatican City', '', 'vati'),
(235, 'Venezuela.png', 'Venezuela', '', 'ven'),
(236, 'Viet Nam.png', 'Viet Nam', 'ভিয়েতনাম', 'viet'),
(237, 'Virgin Islands British.png', 'Virgin Islands British', '', 'vir'),
(238, 'Virgin Islands US.png', 'Virgin Islands US', '', 'virg'),
(239, 'Wales.png', 'Wales', '', 'wal'),
(240, 'Western Sahara.png', 'Western Sahara', '', 'ws'),
(241, 'Yemen.png', 'Yemen', '', 'yem'),
(242, 'Zambia.png', 'Zambia', '', 'zam'),
(243, 'Zimbabwe.png', 'Zimbabwe', '', 'zim');

-- --------------------------------------------------------

--
-- Table structure for table `facility_info`
--

CREATE TABLE `facility_info` (
  `id` int(11) NOT NULL,
  `packages_id` int(11) NOT NULL,
  `hotel_info_id` int(11) NOT NULL,
  `discount` int(11) NOT NULL COMMENT 'package wise hotel discount',
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `caption_bn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `country_id`, `image`, `caption`, `caption_bn`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, 'gallery_1.jpg', 'Beautiful Bangladesh', 'ক্যাপশন(বাংলায়)', 1, '2017-05-09 18:00:00', '2017-05-10 04:10:04'),
(2, 21, 'gallery_2.jpg', 'from cardiology', 'ক্যাপশন(বাংলায়)', 1, '2017-05-09 18:00:00', '2017-05-10 04:09:51'),
(3, 227, 'gallery_3.jpg', 'Burj Khalifa', 'বুর্জ খলিফা', 1, '2017-05-17 18:00:00', '2017-05-18 04:11:54'),
(4, 21, 'gallery_4.jpg', 'Beautiful Bangladesh', 'বাংলাদেশ', 1, '2017-05-17 18:00:00', '2017-05-18 04:13:06'),
(5, 59, 'gallery_5.jpg', 'Beautiful Prague', 'প্রাগ', 1, '2017-05-17 18:00:00', '2017-05-18 04:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE `hotel_info` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hotel_category` varchar(255) NOT NULL,
  `room_category` varchar(255) NOT NULL,
  `room_facility` varchar(255) NOT NULL,
  `room_price` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`id`, `hotel_id`, `country_id`, `city_name`, `hotel_name`, `image`, `hotel_category`, `room_category`, `room_facility`, `room_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 21, 'Dhaka', 'Dhaka Regency', 'hotel_1.jpg', '5 Star', 'Superior', 'Breakfast no', 2000, 1, '2017-05-13 18:00:00', '2017-05-25 04:52:15'),
(2, 2, 21, 'Dhaka', 'Le Meridian', 'hotel_2.jpg', '5 Star', 'Superior', 'Breakfast no', 7500, 1, '2017-05-13 18:00:00', '2017-05-25 04:52:19'),
(3, 3, 21, 'Dhaka', 'Radison', 'hotel_3.jpg', '5 Star', 'Single Bed', 'Attached bath, AC / Non AC, TV', 7200, 1, '2017-05-14 18:00:00', '2017-05-25 04:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info_bn`
--

CREATE TABLE `hotel_info_bn` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hotel_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `hotel_category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `room_category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `room_facility` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `room_price` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_info_bn`
--

INSERT INTO `hotel_info_bn` (`id`, `hotel_id`, `country_id`, `city_name`, `hotel_name`, `image`, `hotel_category`, `room_category`, `room_facility`, `room_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 21, 'ঢাকা', 'ঢাকা রিজেন্সি', 'hotel_1.jpg', '৫ তারকা', 'সুপেরিয়র', 'রুমের সুবিধা', 2000, 1, '2017-05-13 18:00:00', '2017-05-14 05:22:17'),
(2, 2, 21, 'ঢাকা', 'ঢাকা রিজেন্সি', 'hotel_2.jpg', '৫ তারকা', 'সুপেরিয়র', 'রুমের সুবিধা', 7500, 1, '2017-05-13 18:00:00', '2017-05-14 05:23:18'),
(3, 3, 21, 'ঢাকা ', 'রেডিসন ব্লু ওয়াটার গার্ডেন', 'hotel_3.jpg', '৫ তারকা', 'সিঙ্গেল বিছানা', 'বাথরুম, এসি /নন এসি, টিভি', 7200, 1, '2017-05-14 18:00:00', '2017-05-15 03:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `hot_deals`
--

CREATE TABLE `hot_deals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `package_type_id` tinyint(4) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `hot_deals_price` double NOT NULL,
  `discount` double DEFAULT '0',
  `package_code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `package_description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `tour_details` text NOT NULL,
  `important_notes` text NOT NULL,
  `terms_conditions` text NOT NULL,
  `is_popular` tinyint(11) DEFAULT '0',
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hot_deals`
--

INSERT INTO `hot_deals` (`id`, `title`, `country_id`, `package_type_id`, `city_name`, `package_name`, `hot_deals_price`, `discount`, `package_code`, `image`, `package_description`, `category`, `tour_details`, `important_notes`, `terms_conditions`, `is_popular`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdgfsdfsdf', 1, 1, 'test', 'sdfsdfsdf', 12000, 0, 'H55i', 'no_img.png', '<p>zdcvfsdfsdf</p>', 'sdfsdf', '<p>sdfsdfsd</p>', '<p>sdfsdf</p>', '<p>sdfsdfsd</p>', 0, 1, '2017-05-23 18:00:00', '2017-07-30 05:52:31'),
(2, 'sdgfsdfsdf', 1, 1, 'sdfsdfsdf', 'sdfsdfsdf', 12000, 0, 'H55i', 'no_img.png', '<p>zdcvfsdfsdf</p>', 'sdfsdf', '<p>sdfsdfsd</p>', '<p>sdfsdf</p>', '<p>sdfsdfsd</p>', 0, 1, '2017-05-23 18:00:00', '2017-05-24 07:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `hot_deals_bn`
--

CREATE TABLE `hot_deals_bn` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `package_type_id` tinyint(4) NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hot_deals_price` double NOT NULL,
  `discount` double DEFAULT '0',
  `package_code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package_description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tour_details` text COLLATE utf8_unicode_ci NOT NULL,
  `important_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `terms_conditions` text COLLATE utf8_unicode_ci NOT NULL,
  `is_popular` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hot_deals_bn`
--

INSERT INTO `hot_deals_bn` (`id`, `title`, `country_id`, `package_type_id`, `city_name`, `package_name`, `hot_deals_price`, `discount`, `package_code`, `image`, `package_description`, `category`, `tour_details`, `important_notes`, `terms_conditions`, `is_popular`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdfsdf', 1, 1, 'sdfsdf', 'sdfsdfsdf', 12000, 0, 'H55i', 'no_img.png', '<p>sdfsdf</p>', 'sdfsdf', '<p>fsdfsdf</p>', '<p>ssdfsdfsd</p>', '<p>fsdfsdfsdf</p>', 0, 1, '2017-05-23 18:00:00', '2017-05-24 07:05:40'),
(2, 'sdfsdfsdf', 1, 1, 'sdfsdf', 'sdfsdfsdf', 12000, 0, 'H55i', 'no_img.png', '<p>sdfsdf</p>', 'sdfsdf', '<p>fsdfsdf</p>', '<p>ssdfsdfsd</p>', '<p>fsdfsdfsdf</p>', 0, 1, '2017-05-23 18:00:00', '2017-05-24 07:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `hot_deals_images`
--

CREATE TABLE `hot_deals_images` (
  `id` int(11) NOT NULL,
  `package_code` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hot_deals_images`
--

INSERT INTO `hot_deals_images` (`id`, `package_code`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'H55i', 'no_img.png', 1, '2017-05-24 07:05:40', '2017-05-24 07:05:40'),
(2, 'H55i', 'hot_deal_2.jpg', 1, '2017-05-24 07:05:49', '2017-05-24 07:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `hot_deals_package_type`
--

CREATE TABLE `hot_deals_package_type` (
  `id` int(11) NOT NULL,
  `package_type_name` varchar(255) NOT NULL,
  `package_type_name_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hot_deals_package_type`
--

INSERT INTO `hot_deals_package_type` (`id`, `package_type_name`, `package_type_name_bn`, `created_at`, `updated_at`) VALUES
(1, 'Most Economy', 'মোস্ট ইকোনমি', '2017-05-12 18:00:00', '2017-05-17 10:21:05'),
(2, '12 Months Installment', '১২ মাসের কিস্তি', '2017-05-12 18:00:00', '2017-05-17 10:20:46'),
(3, 'Discount offer', 'ডিসকাউন্ট অফার', '2017-05-12 18:00:00', '2017-05-13 10:33:07'),
(4, 'Air Ticket Offer', 'এয়ার টিকেট অফার', '2017-05-13 18:00:00', '2017-05-17 10:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin@gmail.com', '123456', NULL, '2017-05-22 21:54:27', 1),
(2, 'rakib@rakib.com', '123456', NULL, '2017-05-22 04:53:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_code` varchar(255) NOT NULL,
  `package_price` double NOT NULL,
  `discount` int(11) DEFAULT '0',
  `package_type_id` int(11) NOT NULL,
  `package_description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `tour_details` text NOT NULL,
  `important_notes` text NOT NULL,
  `terms_conditions` text NOT NULL,
  `is_popular` tinyint(11) DEFAULT '0',
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `country_id`, `city_name`, `package_name`, `package_code`, `package_price`, `discount`, `package_type_id`, `package_description`, `category`, `tour_details`, `important_notes`, `terms_conditions`, `is_popular`, `status`, `created_at`, `updated_at`) VALUES
(1, '8 Days 7 Nights', 221, 'Istanbul', '8 Days Istanbul (Turkey)', 'T55i', 32500, 0, 1, '<p><span style="color: rgb(104, 104, 104);">Package Description</span><br></p>', 'category', '<p><span style="color: rgb(104, 104, 104);">Tour Details</span><br></p>', '<p><span style="color: rgb(104, 104, 104);">Important Notes</span><br></p>', '<p><span style="color: rgb(104, 104, 104);">Terms &amp; Conditions</span><br></p>', 0, 0, '2017-05-22 18:00:00', '2017-05-23 05:30:04'),
(2, '4 days 3 nights', 21, 'Sylhet', '4 days Sylhet', 'Ban55i', 18200, 0, 1, '<p>description</p>', 'category', '<p><span style="color: rgb(104, 104, 104);">Tour Details</span><br></p>', '<p><span style="color: rgb(104, 104, 104);">Important Notes</span><br></p>', '<p><span style="color: rgb(104, 104, 104);">Terms &amp; Conditions</span><br></p>', 0, 1, '2017-05-22 18:00:00', '2017-05-23 05:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `packages_bn`
--

CREATE TABLE `packages_bn` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package_code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `package_price` double NOT NULL,
  `discount` int(11) DEFAULT '0',
  `package_type_id` int(11) NOT NULL,
  `package_description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tour_details` text COLLATE utf8_unicode_ci NOT NULL,
  `important_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `terms_conditions` text COLLATE utf8_unicode_ci NOT NULL,
  `is_popular` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `packages_bn`
--

INSERT INTO `packages_bn` (`id`, `title`, `country_id`, `city_name`, `package_name`, `package_code`, `package_price`, `discount`, `package_type_id`, `package_description`, `category`, `tour_details`, `important_notes`, `terms_conditions`, `is_popular`, `status`, `created_at`, `updated_at`) VALUES
(1, '৮ দিন ৭ রাত', 221, 'ইস্তানবুল', '৮ দিন ৭ রাত ইস্তানবুল ', 'T55i', 32500, 0, 1, '<p><span style="color: rgb(104, 104, 104);">প্যাকেজের বিবরণ</span><br></p>', 'বিভাগ', '<p><span style="color: rgb(104, 104, 104);">ভ্রমণের বিস্তারিত</span><br></p>', '<p><span style="color: rgb(104, 104, 104);">গুরুত্বপূর্ণ তথ্য</span><br></p>', '<p><span style="color: rgb(104, 104, 104);">শর্তাবলী</span><br></p>', 0, 0, '2017-05-22 18:00:00', '2017-05-23 05:30:04'),
(2, '৪ দিন ৩ রাত ', 21, 'সিলেট', '৪ দিন ৩ রাত  সিলেট ', 'Ban55i', 18200, 0, 1, '<p><span style="color: rgb(104, 104, 104);">প্যাকেজের বিবরণ</span><br></p>', 'বিভাগ', '<p><span style="color: rgb(104, 104, 104);">ভ্রমণের বিস্তারিত</span><br></p>', '<p><span style="color: rgb(104, 104, 104);">গুরুত্বপূর্ণ তথ্য</span><br></p>', '<p><span style="color: rgb(104, 104, 104);">শর্তাবলী</span><br></p>', 0, 1, '2017-05-22 18:00:00', '2017-05-23 05:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `package_hotel`
--

CREATE TABLE `package_hotel` (
  `id` int(11) NOT NULL,
  `package_code` varchar(255) NOT NULL,
  `hotel_name` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_hotel`
--

INSERT INTO `package_hotel` (`id`, `package_code`, `hotel_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'T55i', 2, 0, NULL, '2017-05-23 00:51:29'),
(2, 'T55i', 3, 0, NULL, '2017-05-23 00:51:29'),
(3, 'Ban55i', 2, 0, '2017-05-22 18:00:00', '2017-05-23 05:14:20'),
(4, 'Ban55i', 3, 0, '2017-05-22 18:00:00', '2017-05-23 05:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `package_images`
--

CREATE TABLE `package_images` (
  `id` int(11) NOT NULL,
  `package_code` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'no_img.png',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `package_images`
--

INSERT INTO `package_images` (`id`, `package_code`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'T55i', 'package_1.jpg', 0, '2017-05-23 00:51:29', '2017-05-23 06:52:46'),
(2, 'T55i', 'package_2.jpg', 0, '2017-05-23 00:51:29', '2017-05-23 06:52:53'),
(3, 'Ban55i', 'package_3.jpg', 0, '2017-05-23 05:14:20', '2017-05-23 05:14:20'),
(4, 'Ban55i', 'package_4.jpg', 0, '2017-05-23 05:14:20', '2017-05-23 05:56:25'),
(5, 'Ban55i', 'package_5.jpg', 0, '2017-05-23 05:14:20', '2017-05-23 05:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

CREATE TABLE `package_type` (
  `id` int(11) NOT NULL,
  `package_type_name` varchar(255) NOT NULL,
  `package_type_name_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_type`
--

INSERT INTO `package_type` (`id`, `package_type_name`, `package_type_name_bn`, `created_at`, `updated_at`) VALUES
(1, 'Regular Packages', 'নিয়মিত প্যাকেজ', '2017-05-13 18:00:00', '2017-05-21 06:13:47'),
(2, 'Group Packages', 'গ্রূপ প্যাকেজ', '2017-05-15 18:00:00', '2017-05-15 23:56:59'),
(3, 'Festival Package', 'উৎসব প্যাকেজ', '2017-05-16 18:00:00', '2017-05-17 03:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `tours_info`
--

CREATE TABLE `tours_info` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_code` varchar(255) NOT NULL,
  `package_description` text NOT NULL,
  `tour_details` text NOT NULL,
  `important_notes` text NOT NULL,
  `terms_conditions` text NOT NULL,
  `is_popular` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours_info`
--

INSERT INTO `tours_info` (`id`, `title`, `country_id`, `city_name`, `package_name`, `package_code`, `package_description`, `tour_details`, `important_notes`, `terms_conditions`, `is_popular`, `status`, `created_at`, `updated_at`) VALUES
(1, '7 Days 6 Nights', 21, 'Thimpu', 'Bhutan Group Tour ( By Road )', 'r55i', '                                                                                                      <p><span style="color: rgb(104, 104, 104);">this is from description</span><br></p>', '                                                                                                      <p><span style="color: rgb(104, 104, 104);">Package Description</span><br></p>', '                                                                                                      <p><span style="color: rgb(104, 104, 104);">Package Description</span><br></p>', '                                                                                                      <p><span style="color: rgb(104, 104, 104);">Package Description</span><br></p>', 0, 1, '2017-05-15 18:00:00', '2017-05-16 06:03:50'),
(2, 'asdasdas', 21, 'asdasd', 'asdasd', 'asdasd', '<p>asdasd</p>', '<p>asdasd</p>', '<p>dfgdfg</p>', '<p>fghfgh</p>', 0, 1, '2017-05-24 18:00:00', '2017-05-25 01:53:06'),
(3, 'asdasd', 98, 'dasdas', 'asdasd', 'asdasdas', '<p>asdasd</p>', '<p>asdasd</p>', '<p>asdasd</p>', '<p>asdasd</p>', 0, 1, '2017-05-24 18:00:00', '2017-05-25 01:53:45'),
(4, 'asdasd', 98, 'sdasd', 'sdasd', 'asdasda', '<p>asdasd</p>', '<p>asdasd</p>', '<p>asdasd</p>', '<p>asdasd</p>', 0, 1, '2017-05-24 18:00:00', '2017-05-25 01:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `tours_info_bn`
--

CREATE TABLE `tours_info_bn` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `package_name` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `package_code` varchar(255) NOT NULL,
  `package_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tour_details` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `important_notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `terms_conditions` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_popular` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours_info_bn`
--

INSERT INTO `tours_info_bn` (`id`, `title`, `country_id`, `city_name`, `package_name`, `package_code`, `package_description`, `tour_details`, `important_notes`, `terms_conditions`, `is_popular`, `status`, `created_at`, `updated_at`) VALUES
(1, '৭ দিন ৬ রাত', 21, 'ঢাকা', 'ভুটান গ্রুপ ট্যুর', 'r55i', '                                                                                                      <p><span style="color: rgb(104, 104, 104);">প্যাকেজের বিবরণ</span><br></p>', '                                                                                                      <p><span style="color: rgb(104, 104, 104);">প্যাকেজের বিবরণ</span><br></p>', '                                                                                                      <p><span style="color: rgb(104, 104, 104);">প্যাকেজের বিবরণ</span><br></p>', '                                                                                                      <p><span style="color: rgb(104, 104, 104);">প্যাকেজের বিবরণ</span><br></p>', 0, 1, '2017-05-15 18:00:00', '2017-05-16 06:03:50'),
(2, 'dasdasdasd', 21, 'asdasd', 'asdasd', 'asdasd', '<p>asdasd</p>', '<p>asdasd</p>', '<p>dfghfghf</p>', '<p>fghfgh</p>', 0, 1, '2017-05-24 18:00:00', '2017-05-25 01:53:06'),
(3, 'asdasdasd', 98, 'dasd', 'asdasd', 'asdasdas', '<p>asdasdasd</p>', '<p>asdasdasd</p>', '<p>asdasdasd</p>', '<p>asdasdasd</p>', 0, 1, '2017-05-24 18:00:00', '2017-05-25 01:53:45'),
(4, 'asdasd', 98, 'asdasda', 'asdasd', 'asdasda', '<p>asdasd</p>', '<p>asdasd</p>', '<p>asdasd</p>', '<p>asdasd</p>', 0, 1, '2017-05-24 18:00:00', '2017-05-25 01:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `tour_images`
--

CREATE TABLE `tour_images` (
  `id` int(11) NOT NULL,
  `package_code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_images`
--

INSERT INTO `tour_images` (`id`, `package_code`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'r55i', 'tour_1.jpg', 1, '2017-05-16 12:00:42', '2017-05-16 06:00:42'),
(2, 'asdasd', 'tour_2.jpg', 1, '2017-05-25 01:53:06', '2017-05-25 01:53:06'),
(3, 'asdasdas', 'tour_3.jpg', 1, '2017-05-25 01:53:45', '2017-05-25 01:53:45'),
(4, 'asdasda', 'tour_4.jpg', 1, '2017-05-25 01:54:15', '2017-05-25 01:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `transport_info`
--

CREATE TABLE `transport_info` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `start` varchar(255) NOT NULL,
  `start_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(255) NOT NULL,
  `destination_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `transport_name` varchar(255) NOT NULL,
  `transport_name_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `transport_category_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `transport_category` varchar(255) NOT NULL,
  `transport_facility` varchar(255) NOT NULL,
  `transport_facility_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vehicle_cost` double NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport_info`
--

INSERT INTO `transport_info` (`id`, `country_id`, `start`, `start_bn`, `destination`, `destination_bn`, `transport_name`, `transport_name_bn`, `transport_category_bn`, `transport_category`, `transport_facility`, `transport_facility_bn`, `vehicle_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, 'Comilla', 'ঢাকা', 'Chittagong', 'চট্রগ্রাম', 'Desh travels', 'দেশ ট্রাভেলস', '৫ তারকা ', '4 star', 'only water ', 'শুধু পানি', 320, 1, NULL, '2017-05-14 05:51:20'),
(2, 21, 'Comilla', 'কুমিল্লা ', 'Dhaka', 'ঢাকা', 'Royal Coach', 'রয়েল কোচ', '৪ স্টার', '4 star', 'only water & snacks', 'শুধু পানি', 350, 1, '2017-05-08 18:00:00', '2017-05-14 11:33:59'),
(3, 21, 'Chittagong', 'চট্রগ্রাম', 'Dhaka', 'ঢাকা', 'TR Travels', 'টি আর ট্রাভেলস', '৫ স্টার', '5 star', 'only water & snacks', 'শুধু পানি  ', 1250, 1, '2017-05-08 18:00:00', '2017-05-14 11:33:56'),
(4, 21, 'Dhaka', 'ঢাকা', 'Comilla', 'গন্তব্য ', 'Royal Coach', 'রয়েল কোচ', '৪ স্টার', '4 star', 'only water & snacks', 'শুধু পানি', 350, 1, '2017-05-13 18:00:00', '2017-05-14 05:38:27'),
(5, 21, 'Dhaka', 'ঢাকা', 'Khulna, Jhenaidah', 'খুলনা ঝিনাইদাহ ', 'Hanif Paribahan', 'হানিফ পরিবহন', 'অত্যাধিক আরাম দায়ক', 'Sleeping Coach', 'Snacks, Water, blanket', 'চিপস পানি কম্বল', 1700, 1, '2017-05-14 18:00:00', '2017-05-15 03:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `name_bn`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ta Jani Na', 'তা জানিনা', '<iframe width="560" height="315" src="https://www.youtube.com/embed/13wqHPe3O1Y" frameborder="0" allowfullscreen></iframe>', 1, '2017-05-21 18:00:00', '2017-05-22 01:16:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_flag`
--
ALTER TABLE `country_flag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_info`
--
ALTER TABLE `facility_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_info_bn`
--
ALTER TABLE `hotel_info_bn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_deals`
--
ALTER TABLE `hot_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_deals_bn`
--
ALTER TABLE `hot_deals_bn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_deals_images`
--
ALTER TABLE `hot_deals_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_deals_package_type`
--
ALTER TABLE `hot_deals_package_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_bn`
--
ALTER TABLE `packages_bn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_hotel`
--
ALTER TABLE `package_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_images`
--
ALTER TABLE `package_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_type`
--
ALTER TABLE `package_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours_info`
--
ALTER TABLE `tours_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours_info_bn`
--
ALTER TABLE `tours_info_bn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_images`
--
ALTER TABLE `tour_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_info`
--
ALTER TABLE `transport_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `country_flag`
--
ALTER TABLE `country_flag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `facility_info`
--
ALTER TABLE `facility_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hotel_info`
--
ALTER TABLE `hotel_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hotel_info_bn`
--
ALTER TABLE `hotel_info_bn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hot_deals`
--
ALTER TABLE `hot_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hot_deals_bn`
--
ALTER TABLE `hot_deals_bn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hot_deals_images`
--
ALTER TABLE `hot_deals_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hot_deals_package_type`
--
ALTER TABLE `hot_deals_package_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packages_bn`
--
ALTER TABLE `packages_bn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `package_hotel`
--
ALTER TABLE `package_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `package_images`
--
ALTER TABLE `package_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `package_type`
--
ALTER TABLE `package_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tours_info`
--
ALTER TABLE `tours_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tours_info_bn`
--
ALTER TABLE `tours_info_bn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tour_images`
--
ALTER TABLE `tour_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transport_info`
--
ALTER TABLE `transport_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
