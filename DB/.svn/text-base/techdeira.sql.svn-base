-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2014 at 09:30 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techdeira`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `idCountry` int(5) NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  `population` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idCountry`),
  KEY `idCountry` (`idCountry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1000 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`idCountry`, `countryCode`, `countryName`, `population`) VALUES
(1, 'AD', 'Andorra', '84000'),
(2, 'AE', 'United Arab Emirates', '4975593'),
(3, 'AF', 'Afghanistan', '29121286'),
(4, 'AG', 'Antigua and Barbuda', '86754'),
(5, 'AI', 'Anguilla', '13254'),
(6, 'AL', 'Albania', '2986952'),
(7, 'AM', 'Armenia', '2968000'),
(8, 'AO', 'Angola', '13068161'),
(9, 'AQ', 'Antarctica', '0'),
(10, 'AR', 'Argentina', '41343201'),
(11, 'AS', 'American Samoa', '57881'),
(12, 'AT', 'Austria', '8205000'),
(13, 'AU', 'Australia', '21515754'),
(14, 'AW', 'Aruba', '71566'),
(15, 'AX', 'Åland', '26711'),
(16, 'AZ', 'Azerbaijan', '8303512'),
(17, 'BA', 'Bosnia and Herzegovina', '4590000'),
(18, 'BB', 'Barbados', '285653'),
(19, 'BD', 'Bangladesh', '156118464'),
(20, 'BE', 'Belgium', '10403000'),
(21, 'BF', 'Burkina Faso', '16241811'),
(22, 'BG', 'Bulgaria', '7148785'),
(23, 'BH', 'Bahrain', '738004'),
(24, 'BI', 'Burundi', '9863117'),
(25, 'BJ', 'Benin', '9056010'),
(26, 'BL', 'Saint Barthélemy', '8450'),
(27, 'BM', 'Bermuda', '65365'),
(28, 'BN', 'Brunei', '395027'),
(29, 'BO', 'Bolivia', '9947418'),
(30, 'BQ', 'Bonaire', '18012'),
(31, 'BR', 'Brazil', '201103330'),
(32, 'BS', 'Bahamas', '301790'),
(33, 'BT', 'Bhutan', '699847'),
(34, 'BV', 'Bouvet Island', '0'),
(35, 'BW', 'Botswana', '2029307'),
(36, 'BY', 'Belarus', '9685000'),
(37, 'BZ', 'Belize', '314522'),
(38, 'CA', 'Canada', '33679000'),
(39, 'CC', 'Cocos [Keeling] Islands', '628'),
(40, 'CD', 'Democratic Republic of the Congo', '70916439'),
(41, 'CF', 'Central African Republic', '4844927'),
(42, 'CG', 'Republic of the Congo', '3039126'),
(43, 'CH', 'Switzerland', '7581000'),
(44, 'CI', 'Ivory Coast', '21058798'),
(45, 'CK', 'Cook Islands', '21388'),
(46, 'CL', 'Chile', '16746491'),
(47, 'CM', 'Cameroon', '19294149'),
(48, 'CN', 'China', '1330044000'),
(49, 'CO', 'Colombia', '44205293'),
(50, 'CR', 'Costa Rica', '4516220'),
(51, 'CU', 'Cuba', '11423000'),
(52, 'CV', 'Cape Verde', '508659'),
(53, 'CW', 'Curacao', '141766'),
(54, 'CX', 'Christmas Island', '1500'),
(55, 'CY', 'Cyprus', '1102677'),
(56, 'CZ', 'Czechia', '10476000'),
(57, 'DE', 'Germany', '81802257'),
(58, 'DJ', 'Djibouti', '740528'),
(59, 'DK', 'Denmark', '5484000'),
(60, 'DM', 'Dominica', '72813'),
(61, 'DO', 'Dominican Republic', '9823821'),
(62, 'DZ', 'Algeria', '34586184'),
(63, 'EC', 'Ecuador', '14790608'),
(64, 'EE', 'Estonia', '1291170'),
(65, 'EG', 'Egypt', '80471869'),
(66, 'EH', 'Western Sahara', '273008'),
(67, 'ER', 'Eritrea', '5792984'),
(68, 'ES', 'Spain', '46505963'),
(69, 'ET', 'Ethiopia', '88013491'),
(70, 'FI', 'Finland', '5244000'),
(71, 'FJ', 'Fiji', '875983'),
(72, 'FK', 'Falkland Islands', '2638'),
(73, 'FM', 'Micronesia', '107708'),
(74, 'FO', 'Faroe Islands', '48228'),
(75, 'FR', 'France', '64768389'),
(76, 'GA', 'Gabon', '1545255'),
(77, 'GB', 'United Kingdom', '62348447'),
(78, 'GD', 'Grenada', '107818'),
(79, 'GE', 'Georgia', '4630000'),
(80, 'GF', 'French Guiana', '195506'),
(81, 'GG', 'Guernsey', '65228'),
(82, 'GH', 'Ghana', '24339838'),
(83, 'GI', 'Gibraltar', '27884'),
(84, 'GL', 'Greenland', '56375'),
(85, 'GM', 'Gambia', '1593256'),
(86, 'GN', 'Guinea', '10324025'),
(87, 'GP', 'Guadeloupe', '443000'),
(88, 'GQ', 'Equatorial Guinea', '1014999'),
(89, 'GR', 'Greece', '11000000'),
(90, 'GS', 'South Georgia and the South Sandwich Islands', '30'),
(91, 'GT', 'Guatemala', '13550440'),
(92, 'GU', 'Guam', '159358'),
(93, 'GW', 'Guinea-Bissau', '1565126'),
(94, 'GY', 'Guyana', '748486'),
(95, 'HK', 'Hong Kong', '6898686'),
(96, 'HM', 'Heard Island and McDonald Islands', '0'),
(97, 'HN', 'Honduras', '7989415'),
(98, 'HR', 'Croatia', '4491000'),
(99, 'HT', 'Haiti', '9648924'),
(100, 'HU', 'Hungary', '9982000'),
(101, 'ID', 'Indonesia', '242968342'),
(102, 'IE', 'Ireland', '4622917'),
(103, 'IL', 'Israel', '7353985'),
(104, 'IM', 'Isle of Man', '75049'),
(105, 'IN', 'India', '1173108018'),
(106, 'IO', 'British Indian Ocean Territory', '4000'),
(107, 'IQ', 'Iraq', '29671605'),
(108, 'IR', 'Iran', '76923300'),
(109, 'IS', 'Iceland', '308910'),
(110, 'IT', 'Italy', '60340328'),
(111, 'JE', 'Jersey', '90812'),
(112, 'JM', 'Jamaica', '2847232'),
(113, 'JO', 'Jordan', '6407085'),
(114, 'JP', 'Japan', '127288000'),
(115, 'KE', 'Kenya', '40046566'),
(116, 'KG', 'Kyrgyzstan', '5508626'),
(117, 'KH', 'Cambodia', '14453680'),
(118, 'KI', 'Kiribati', '92533'),
(119, 'KM', 'Comoros', '773407'),
(120, 'KN', 'Saint Kitts and Nevis', '49898'),
(121, 'KP', 'North Korea', '22912177'),
(122, 'KR', 'South Korea', '48422644'),
(123, 'KW', 'Kuwait', '2789132'),
(124, 'KY', 'Cayman Islands', '44270'),
(125, 'KZ', 'Kazakhstan', '15340000'),
(126, 'LA', 'Laos', '6368162'),
(127, 'LB', 'Lebanon', '4125247'),
(128, 'LC', 'Saint Lucia', '160922'),
(129, 'LI', 'Liechtenstein', '35000'),
(130, 'LK', 'Sri Lanka', '21513990'),
(131, 'LR', 'Liberia', '3685076'),
(132, 'LS', 'Lesotho', '1919552'),
(133, 'LT', 'Lithuania', '3565000'),
(134, 'LU', 'Luxembourg', '497538'),
(135, 'LV', 'Latvia', '2217969'),
(136, 'LY', 'Libya', '6461454'),
(137, 'MA', 'Morocco', '31627428'),
(138, 'MC', 'Monaco', '32965'),
(139, 'MD', 'Moldova', '4324000'),
(140, 'ME', 'Montenegro', '666730'),
(141, 'MF', 'Saint Martin', '35925'),
(142, 'MG', 'Madagascar', '21281844'),
(143, 'MH', 'Marshall Islands', '65859'),
(144, 'MK', 'Macedonia', '2061000'),
(145, 'ML', 'Mali', '13796354'),
(146, 'MM', 'Myanmar [Burma]', '53414374'),
(147, 'MN', 'Mongolia', '3086918'),
(148, 'MO', 'Macao', '449198'),
(149, 'MP', 'Northern Mariana Islands', '53883'),
(150, 'MQ', 'Martinique', '432900'),
(151, 'MR', 'Mauritania', '3205060'),
(152, 'MS', 'Montserrat', '9341'),
(153, 'MT', 'Malta', '403000'),
(154, 'MU', 'Mauritius', '1294104'),
(155, 'MV', 'Maldives', '395650'),
(156, 'MW', 'Malawi', '15447500'),
(157, 'MX', 'Mexico', '112468855'),
(158, 'MY', 'Malaysia', '28274729'),
(159, 'MZ', 'Mozambique', '22061451'),
(160, 'NA', 'Namibia', '2128471'),
(161, 'NC', 'New Caledonia', '216494'),
(162, 'NE', 'Niger', '15878271'),
(163, 'NF', 'Norfolk Island', '1828'),
(164, 'NG', 'Nigeria', '154000000'),
(165, 'NI', 'Nicaragua', '5995928'),
(166, 'NL', 'Netherlands', '16645000'),
(167, 'NO', 'Norway', '5009150'),
(168, 'NP', 'Nepal', '28951852'),
(169, 'NR', 'Nauru', '10065'),
(170, 'NU', 'Niue', '2166'),
(171, 'NZ', 'New Zealand', '4252277'),
(172, 'OM', 'Oman', '2967717'),
(173, 'PA', 'Panama', '3410676'),
(174, 'PE', 'Peru', '29907003'),
(175, 'PF', 'French Polynesia', '270485'),
(176, 'PG', 'Papua New Guinea', '6064515'),
(177, 'PH', 'Philippines', '99900177'),
(178, 'PK', 'Pakistan', '184404791'),
(179, 'PL', 'Poland', '38500000'),
(180, 'PM', 'Saint Pierre and Miquelon', '7012'),
(181, 'PN', 'Pitcairn Islands', '46'),
(182, 'PR', 'Puerto Rico', '3916632'),
(183, 'PS', 'Palestine', '3800000'),
(184, 'PT', 'Portugal', '10676000'),
(185, 'PW', 'Palau', '19907'),
(186, 'PY', 'Paraguay', '6375830'),
(187, 'QA', 'Qatar', '840926'),
(188, 'RE', 'Réunion', '776948'),
(189, 'RO', 'Romania', '21959278'),
(190, 'RS', 'Serbia', '7344847'),
(191, 'RU', 'Russia', '140702000'),
(192, 'RW', 'Rwanda', '11055976'),
(193, 'SA', 'Saudi Arabia', '25731776'),
(194, 'SB', 'Solomon Islands', '559198'),
(195, 'SC', 'Seychelles', '88340'),
(196, 'SD', 'Sudan', '35000000'),
(197, 'SE', 'Sweden', '9555893'),
(198, 'SG', 'Singapore', '4701069'),
(199, 'SH', 'Saint Helena', '7460'),
(200, 'SI', 'Slovenia', '2007000'),
(201, 'SJ', 'Svalbard and Jan Mayen', '2550'),
(202, 'SK', 'Slovakia', '5455000'),
(203, 'SL', 'Sierra Leone', '5245695'),
(204, 'SM', 'San Marino', '31477'),
(205, 'SN', 'Senegal', '12323252'),
(206, 'SO', 'Somalia', '10112453'),
(207, 'SR', 'Suriname', '492829'),
(208, 'SS', 'South Sudan', '8260490'),
(209, 'ST', 'São Tomé and Príncipe', '175808'),
(210, 'SV', 'El Salvador', '6052064'),
(211, 'SX', 'Sint Maarten', '37429'),
(212, 'SY', 'Syria', '22198110'),
(213, 'SZ', 'Swaziland', '1354051'),
(214, 'TC', 'Turks and Caicos Islands', '20556'),
(215, 'TD', 'Chad', '10543464'),
(216, 'TF', 'French Southern Territories', '140'),
(217, 'TG', 'Togo', '6587239'),
(218, 'TH', 'Thailand', '67089500'),
(219, 'TJ', 'Tajikistan', '7487489'),
(220, 'TK', 'Tokelau', '1466'),
(221, 'TL', 'East Timor', '1154625'),
(222, 'TM', 'Turkmenistan', '4940916'),
(223, 'TN', 'Tunisia', '10589025'),
(224, 'TO', 'Tonga', '122580'),
(225, 'TR', 'Turkey', '77804122'),
(226, 'TT', 'Trinidad and Tobago', '1228691'),
(227, 'TV', 'Tuvalu', '10472'),
(228, 'TW', 'Taiwan', '22894384'),
(229, 'TZ', 'Tanzania', '41892895'),
(230, 'UA', 'Ukraine', '45415596'),
(231, 'UG', 'Uganda', '33398682'),
(232, 'UM', 'U.S. Minor Outlying Islands', '0'),
(233, 'US', 'United States', '310232863'),
(234, 'UY', 'Uruguay', '3477000'),
(235, 'UZ', 'Uzbekistan', '27865738'),
(236, 'VA', 'Vatican City', '921'),
(237, 'VC', 'Saint Vincent and the Grenadines', '104217'),
(238, 'VE', 'Venezuela', '27223228'),
(239, 'VG', 'British Virgin Islands', '21730'),
(240, 'VI', 'U.S. Virgin Islands', '108708'),
(241, 'VN', 'Vietnam', '89571130'),
(242, 'VU', 'Vanuatu', '221552'),
(243, 'WF', 'Wallis and Futuna', '16025'),
(244, 'WS', 'Samoa', '192001'),
(245, 'XK', 'Kosovo', '1800000'),
(246, 'YE', 'Yemen', '23495361'),
(247, 'YT', 'Mayotte', '159042'),
(248, 'ZA', 'South Africa', '49000000'),
(249, 'ZM', 'Zambia', '13460305'),
(250, 'ZW', 'Zimbabwe', '11651858'),
(251, 'AD', 'Andorra', '84000'),
(252, 'AE', 'United Arab Emirates', '4975593'),
(253, 'AF', 'Afghanistan', '29121286'),
(254, 'AG', 'Antigua and Barbuda', '86754'),
(255, 'AI', 'Anguilla', '13254'),
(256, 'AL', 'Albania', '2986952'),
(257, 'AM', 'Armenia', '2968000'),
(258, 'AO', 'Angola', '13068161'),
(259, 'AQ', 'Antarctica', '0'),
(260, 'AR', 'Argentina', '41343201'),
(261, 'AS', 'American Samoa', '57881'),
(262, 'AT', 'Austria', '8205000'),
(263, 'AU', 'Australia', '21515754'),
(264, 'AW', 'Aruba', '71566'),
(265, 'AX', 'Åland', '26711'),
(266, 'AZ', 'Azerbaijan', '8303512'),
(267, 'BA', 'Bosnia and Herzegovina', '4590000'),
(268, 'BB', 'Barbados', '285653'),
(269, 'BD', 'Bangladesh', '156118464'),
(270, 'BE', 'Belgium', '10403000'),
(271, 'BF', 'Burkina Faso', '16241811'),
(272, 'BG', 'Bulgaria', '7148785'),
(273, 'BH', 'Bahrain', '738004'),
(274, 'BI', 'Burundi', '9863117'),
(275, 'BJ', 'Benin', '9056010'),
(276, 'BL', 'Saint Barthélemy', '8450'),
(277, 'BM', 'Bermuda', '65365'),
(278, 'BN', 'Brunei', '395027'),
(279, 'BO', 'Bolivia', '9947418'),
(280, 'BQ', 'Bonaire', '18012'),
(281, 'BR', 'Brazil', '201103330'),
(282, 'BS', 'Bahamas', '301790'),
(283, 'BT', 'Bhutan', '699847'),
(284, 'BV', 'Bouvet Island', '0'),
(285, 'BW', 'Botswana', '2029307'),
(286, 'BY', 'Belarus', '9685000'),
(287, 'BZ', 'Belize', '314522'),
(288, 'CA', 'Canada', '33679000'),
(289, 'CC', 'Cocos [Keeling] Islands', '628'),
(290, 'CD', 'Democratic Republic of the Congo', '70916439'),
(291, 'CF', 'Central African Republic', '4844927'),
(292, 'CG', 'Republic of the Congo', '3039126'),
(293, 'CH', 'Switzerland', '7581000'),
(294, 'CI', 'Ivory Coast', '21058798'),
(295, 'CK', 'Cook Islands', '21388'),
(296, 'CL', 'Chile', '16746491'),
(297, 'CM', 'Cameroon', '19294149'),
(298, 'CN', 'China', '1330044000'),
(299, 'CO', 'Colombia', '44205293'),
(300, 'CR', 'Costa Rica', '4516220'),
(301, 'CU', 'Cuba', '11423000'),
(302, 'CV', 'Cape Verde', '508659'),
(303, 'CW', 'Curacao', '141766'),
(304, 'CX', 'Christmas Island', '1500'),
(305, 'CY', 'Cyprus', '1102677'),
(306, 'CZ', 'Czechia', '10476000'),
(307, 'DE', 'Germany', '81802257'),
(308, 'DJ', 'Djibouti', '740528'),
(309, 'DK', 'Denmark', '5484000'),
(310, 'DM', 'Dominica', '72813'),
(311, 'DO', 'Dominican Republic', '9823821'),
(312, 'DZ', 'Algeria', '34586184'),
(313, 'EC', 'Ecuador', '14790608'),
(314, 'EE', 'Estonia', '1291170'),
(315, 'EG', 'Egypt', '80471869'),
(316, 'EH', 'Western Sahara', '273008'),
(317, 'ER', 'Eritrea', '5792984'),
(318, 'ES', 'Spain', '46505963'),
(319, 'ET', 'Ethiopia', '88013491'),
(320, 'FI', 'Finland', '5244000'),
(321, 'FJ', 'Fiji', '875983'),
(322, 'FK', 'Falkland Islands', '2638'),
(323, 'FM', 'Micronesia', '107708'),
(324, 'FO', 'Faroe Islands', '48228'),
(325, 'FR', 'France', '64768389'),
(326, 'GA', 'Gabon', '1545255'),
(327, 'GB', 'United Kingdom', '62348447'),
(328, 'GD', 'Grenada', '107818'),
(329, 'GE', 'Georgia', '4630000'),
(330, 'GF', 'French Guiana', '195506'),
(331, 'GG', 'Guernsey', '65228'),
(332, 'GH', 'Ghana', '24339838'),
(333, 'GI', 'Gibraltar', '27884'),
(334, 'GL', 'Greenland', '56375'),
(335, 'GM', 'Gambia', '1593256'),
(336, 'GN', 'Guinea', '10324025'),
(337, 'GP', 'Guadeloupe', '443000'),
(338, 'GQ', 'Equatorial Guinea', '1014999'),
(339, 'GR', 'Greece', '11000000'),
(340, 'GS', 'South Georgia and the South Sandwich Islands', '30'),
(341, 'GT', 'Guatemala', '13550440'),
(342, 'GU', 'Guam', '159358'),
(343, 'GW', 'Guinea-Bissau', '1565126'),
(344, 'GY', 'Guyana', '748486'),
(345, 'HK', 'Hong Kong', '6898686'),
(346, 'HM', 'Heard Island and McDonald Islands', '0'),
(347, 'HN', 'Honduras', '7989415'),
(348, 'HR', 'Croatia', '4491000'),
(349, 'HT', 'Haiti', '9648924'),
(350, 'HU', 'Hungary', '9982000'),
(351, 'ID', 'Indonesia', '242968342'),
(352, 'IE', 'Ireland', '4622917'),
(353, 'IL', 'Israel', '7353985'),
(354, 'IM', 'Isle of Man', '75049'),
(355, 'IN', 'India', '1173108018'),
(356, 'IO', 'British Indian Ocean Territory', '4000'),
(357, 'IQ', 'Iraq', '29671605'),
(358, 'IR', 'Iran', '76923300'),
(359, 'IS', 'Iceland', '308910'),
(360, 'IT', 'Italy', '60340328'),
(361, 'JE', 'Jersey', '90812'),
(362, 'JM', 'Jamaica', '2847232'),
(363, 'JO', 'Jordan', '6407085'),
(364, 'JP', 'Japan', '127288000'),
(365, 'KE', 'Kenya', '40046566'),
(366, 'KG', 'Kyrgyzstan', '5508626'),
(367, 'KH', 'Cambodia', '14453680'),
(368, 'KI', 'Kiribati', '92533'),
(369, 'KM', 'Comoros', '773407'),
(370, 'KN', 'Saint Kitts and Nevis', '49898'),
(371, 'KP', 'North Korea', '22912177'),
(372, 'KR', 'South Korea', '48422644'),
(373, 'KW', 'Kuwait', '2789132'),
(374, 'KY', 'Cayman Islands', '44270'),
(375, 'KZ', 'Kazakhstan', '15340000'),
(376, 'LA', 'Laos', '6368162'),
(377, 'LB', 'Lebanon', '4125247'),
(378, 'LC', 'Saint Lucia', '160922'),
(379, 'LI', 'Liechtenstein', '35000'),
(380, 'LK', 'Sri Lanka', '21513990'),
(381, 'LR', 'Liberia', '3685076'),
(382, 'LS', 'Lesotho', '1919552'),
(383, 'LT', 'Lithuania', '3565000'),
(384, 'LU', 'Luxembourg', '497538'),
(385, 'LV', 'Latvia', '2217969'),
(386, 'LY', 'Libya', '6461454'),
(387, 'MA', 'Morocco', '31627428'),
(388, 'MC', 'Monaco', '32965'),
(389, 'MD', 'Moldova', '4324000'),
(390, 'ME', 'Montenegro', '666730'),
(391, 'MF', 'Saint Martin', '35925'),
(392, 'MG', 'Madagascar', '21281844'),
(393, 'MH', 'Marshall Islands', '65859'),
(394, 'MK', 'Macedonia', '2061000'),
(395, 'ML', 'Mali', '13796354'),
(396, 'MM', 'Myanmar [Burma]', '53414374'),
(397, 'MN', 'Mongolia', '3086918'),
(398, 'MO', 'Macao', '449198'),
(399, 'MP', 'Northern Mariana Islands', '53883'),
(400, 'MQ', 'Martinique', '432900'),
(401, 'MR', 'Mauritania', '3205060'),
(402, 'MS', 'Montserrat', '9341'),
(403, 'MT', 'Malta', '403000'),
(404, 'MU', 'Mauritius', '1294104'),
(405, 'MV', 'Maldives', '395650'),
(406, 'MW', 'Malawi', '15447500'),
(407, 'MX', 'Mexico', '112468855'),
(408, 'MY', 'Malaysia', '28274729'),
(409, 'MZ', 'Mozambique', '22061451'),
(410, 'NA', 'Namibia', '2128471'),
(411, 'NC', 'New Caledonia', '216494'),
(412, 'NE', 'Niger', '15878271'),
(413, 'NF', 'Norfolk Island', '1828'),
(414, 'NG', 'Nigeria', '154000000'),
(415, 'NI', 'Nicaragua', '5995928'),
(416, 'NL', 'Netherlands', '16645000'),
(417, 'NO', 'Norway', '5009150'),
(418, 'NP', 'Nepal', '28951852'),
(419, 'NR', 'Nauru', '10065'),
(420, 'NU', 'Niue', '2166'),
(421, 'NZ', 'New Zealand', '4252277'),
(422, 'OM', 'Oman', '2967717'),
(423, 'PA', 'Panama', '3410676'),
(424, 'PE', 'Peru', '29907003'),
(425, 'PF', 'French Polynesia', '270485'),
(426, 'PG', 'Papua New Guinea', '6064515'),
(427, 'PH', 'Philippines', '99900177'),
(428, 'PK', 'Pakistan', '184404791'),
(429, 'PL', 'Poland', '38500000'),
(430, 'PM', 'Saint Pierre and Miquelon', '7012'),
(431, 'PN', 'Pitcairn Islands', '46'),
(432, 'PR', 'Puerto Rico', '3916632'),
(433, 'PS', 'Palestine', '3800000'),
(434, 'PT', 'Portugal', '10676000'),
(435, 'PW', 'Palau', '19907'),
(436, 'PY', 'Paraguay', '6375830'),
(437, 'QA', 'Qatar', '840926'),
(438, 'RE', 'Réunion', '776948'),
(439, 'RO', 'Romania', '21959278'),
(440, 'RS', 'Serbia', '7344847'),
(441, 'RU', 'Russia', '140702000'),
(442, 'RW', 'Rwanda', '11055976'),
(443, 'SA', 'Saudi Arabia', '25731776'),
(444, 'SB', 'Solomon Islands', '559198'),
(445, 'SC', 'Seychelles', '88340'),
(446, 'SD', 'Sudan', '35000000'),
(447, 'SE', 'Sweden', '9555893'),
(448, 'SG', 'Singapore', '4701069'),
(449, 'SH', 'Saint Helena', '7460'),
(450, 'SI', 'Slovenia', '2007000'),
(451, 'SJ', 'Svalbard and Jan Mayen', '2550'),
(452, 'SK', 'Slovakia', '5455000'),
(453, 'SL', 'Sierra Leone', '5245695'),
(454, 'SM', 'San Marino', '31477'),
(455, 'SN', 'Senegal', '12323252'),
(456, 'SO', 'Somalia', '10112453'),
(457, 'SR', 'Suriname', '492829'),
(458, 'SS', 'South Sudan', '8260490'),
(459, 'ST', 'São Tomé and Príncipe', '175808'),
(460, 'SV', 'El Salvador', '6052064'),
(461, 'SX', 'Sint Maarten', '37429'),
(462, 'SY', 'Syria', '22198110'),
(463, 'SZ', 'Swaziland', '1354051'),
(464, 'TC', 'Turks and Caicos Islands', '20556'),
(465, 'TD', 'Chad', '10543464'),
(466, 'TF', 'French Southern Territories', '140'),
(467, 'TG', 'Togo', '6587239'),
(468, 'TH', 'Thailand', '67089500'),
(469, 'TJ', 'Tajikistan', '7487489'),
(470, 'TK', 'Tokelau', '1466'),
(471, 'TL', 'East Timor', '1154625'),
(472, 'TM', 'Turkmenistan', '4940916'),
(473, 'TN', 'Tunisia', '10589025'),
(474, 'TO', 'Tonga', '122580'),
(475, 'TR', 'Turkey', '77804122'),
(476, 'TT', 'Trinidad and Tobago', '1228691'),
(477, 'TV', 'Tuvalu', '10472'),
(478, 'TW', 'Taiwan', '22894384'),
(479, 'TZ', 'Tanzania', '41892895'),
(480, 'UA', 'Ukraine', '45415596'),
(481, 'UG', 'Uganda', '33398682'),
(482, 'UM', 'U.S. Minor Outlying Islands', '0'),
(483, 'US', 'United States', '310232863'),
(484, 'UY', 'Uruguay', '3477000'),
(485, 'UZ', 'Uzbekistan', '27865738'),
(486, 'VA', 'Vatican City', '921'),
(487, 'VC', 'Saint Vincent and the Grenadines', '104217'),
(488, 'VE', 'Venezuela', '27223228'),
(489, 'VG', 'British Virgin Islands', '21730'),
(490, 'VI', 'U.S. Virgin Islands', '108708'),
(491, 'VN', 'Vietnam', '89571130'),
(492, 'VU', 'Vanuatu', '221552'),
(493, 'WF', 'Wallis and Futuna', '16025'),
(494, 'WS', 'Samoa', '192001'),
(495, 'XK', 'Kosovo', '1800000'),
(496, 'YE', 'Yemen', '23495361'),
(497, 'YT', 'Mayotte', '159042'),
(498, 'ZA', 'South Africa', '49000000'),
(499, 'ZM', 'Zambia', '13460305'),
(500, 'ZW', 'Zimbabwe', '11651858'),
(999, 'OT', 'Other', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `fee` varchar(30) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `time_from` varchar(10) NOT NULL,
  `time_to` varchar(10) NOT NULL,
  `category_id` int(20) NOT NULL,
  `instructor_id` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`,`instructor_id`),
  KEY `instructor_id` (`instructor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `desc`, `fee`, `date_from`, `date_to`, `time_from`, `time_to`, `category_id`, `instructor_id`) VALUES
(1, 'frcfr', 'rvcfrvrvv', 'vr', '2014-02-28', '2014-02-20', 'vr', 'vrv', 1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE IF NOT EXISTS `course_categories` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001 ;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`) VALUES
(1, 'Web Development'),
(2, 'Web Designing'),
(3, 'Software Development'),
(4, 'Software Engineering'),
(999, 'others'),
(1000, 'cded');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `id` int(30) NOT NULL,
  `phone` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `phone`) VALUES
(27, NULL),
(28, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `join_course`
--

CREATE TABLE IF NOT EXISTS `join_course` (
  `course_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `join_course`
--

INSERT INTO `join_course` (`course_id`, `user_id`) VALUES
(1, 27),
(1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE IF NOT EXISTS `lectures` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `lecture_title` varchar(100) NOT NULL,
  `lecture_desc` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(150) NOT NULL,
  `course_id` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `lecture_title`, `lecture_desc`, `date`, `image`, `course_id`) VALUES
(1, 'fr', 'rvr', '2014-02-05', 'vgtrv', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `material_title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `course_id` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `materials`
--


-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(40) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `phone`) VALUES
(5, NULL),
(7, NULL),
(31, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(40) NOT NULL,
  `title` varchar(10) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone-cell` int(20) NOT NULL,
  `phone-line` int(20) NOT NULL,
  `emailadd` varchar(100) NOT NULL,
  `houseno` int(10) NOT NULL,
  `streetno` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` int(30) NOT NULL,
  `countryid` int(20) NOT NULL,
  `province` varchar(40) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `googleplus` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `blog` varchar(100) NOT NULL,
  `skype` varchar(30) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `degree-date-complete` varchar(50) NOT NULL,
  `degree-major` varchar(50) NOT NULL,
  `degree-minor` varchar(50) NOT NULL,
  `degree-school` varchar(50) NOT NULL,
  `degree-countryid` int(20) NOT NULL,
  `org-title` varchar(50) NOT NULL,
  `org-nature` varchar(50) NOT NULL,
  `org-super-name` varchar(50) NOT NULL,
  `org-super-phone` int(20) NOT NULL,
  `org-super-email` varchar(60) NOT NULL,
  `org-houseno` int(10) NOT NULL,
  `org-streetno` int(10) NOT NULL,
  `org-city` varchar(50) NOT NULL,
  `org-zip` int(20) NOT NULL,
  `org-countryid` int(10) DEFAULT NULL,
  `org-province` varchar(50) NOT NULL,
  `CS-Member` varchar(10) NOT NULL,
  `OpenSourceMember` varchar(10) NOT NULL,
  `TechWomenMember` varchar(10) NOT NULL,
  `pro-member-other-name` varchar(30) NOT NULL,
  `pro-member-other-email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `org-countryid` (`org-countryid`),
  KEY `countryid` (`countryid`),
  KEY `degree-countryid` (`degree-countryid`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--


-- --------------------------------------------------------

--
-- Table structure for table `participant_lecture`
--

CREATE TABLE IF NOT EXISTS `participant_lecture` (
  `participant_id` int(30) NOT NULL,
  `lecture_id` int(30) NOT NULL,
  PRIMARY KEY (`participant_id`,`lecture_id`),
  KEY `participant_id` (`participant_id`),
  KEY `lecture_id` (`lecture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant_lecture`
--


-- --------------------------------------------------------

--
-- Table structure for table `trainee_abade`
--

CREATE TABLE IF NOT EXISTS `trainee_abade` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone-cell` varchar(50) NOT NULL,
  `phone-line` varchar(20) NOT NULL,
  `emailadd` varchar(100) NOT NULL,
  `houseno` varchar(10) NOT NULL,
  `streetno` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `countryid` int(20) NOT NULL,
  `province` varchar(40) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `googleplus` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `blog` varchar(100) NOT NULL,
  `skype` varchar(30) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `degree-date-complete` varchar(50) NOT NULL,
  `degree-major` varchar(50) NOT NULL,
  `degree-minor` varchar(50) NOT NULL,
  `degree-school` varchar(50) NOT NULL,
  `degree-countryid` varchar(20) NOT NULL,
  `org-title` varchar(50) NOT NULL,
  `org-nature` varchar(50) NOT NULL,
  `org-super-name` varchar(50) NOT NULL,
  `org-super-phone` varchar(20) NOT NULL,
  `org-super-email` varchar(60) NOT NULL,
  `org-houseno` varchar(10) NOT NULL,
  `org-streetno` varchar(10) NOT NULL,
  `org-city` varchar(50) NOT NULL,
  `org-zip` varchar(20) NOT NULL,
  `org-countryid` varchar(10) NOT NULL,
  `org-province` varchar(50) NOT NULL,
  `CS-Member` varchar(10) NOT NULL,
  `OpenSourceMember` varchar(10) NOT NULL,
  `TechWomenMember` varchar(10) NOT NULL,
  `pro-member-other-name` varchar(30) NOT NULL,
  `pro-member-other-email` varchar(100) NOT NULL,
  `positions` text NOT NULL,
  `itskills` text NOT NULL,
  `work-experience-national` varchar(11) NOT NULL,
  `knowledge-plan` varchar(11) NOT NULL,
  `member-status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `org-countryid` (`org-countryid`),
  KEY `countryid` (`countryid`),
  KEY `degree-countryid` (`degree-countryid`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `trainee_abade`
--

INSERT INTO `trainee_abade` (`id`, `surname`, `firstname`, `dob`, `gender`, `phone-cell`, `phone-line`, `emailadd`, `houseno`, `streetno`, `city`, `zip`, `countryid`, `province`, `facebook`, `twitter`, `googleplus`, `linkedin`, `blog`, `skype`, `degree`, `degree-date-complete`, `degree-major`, `degree-minor`, `degree-school`, `degree-countryid`, `org-title`, `org-nature`, `org-super-name`, `org-super-phone`, `org-super-email`, `org-houseno`, `org-streetno`, `org-city`, `org-zip`, `org-countryid`, `org-province`, `CS-Member`, `OpenSourceMember`, `TechWomenMember`, `pro-member-other-name`, `pro-member-other-email`, `positions`, `itskills`, `work-experience-national`, `knowledge-plan`, `member-status`) VALUES
(2, 'ANSARI', 'Omar Mansoor', '10-December-1977', 'Female', '799553778', '', 'oansari@technation.af', '', '', '', '', 3, '', '', '', '', '', '', '', 'Bachelors', '30-June-2004', 'Computer Science', 'Finance', 'International Islamic University, Islamabad', '178', 'President', 'Private Sector', '', '', '', '', '', '', '', '3', '', 'yes', 'yes', 'yes', '', '', '', '', '', '', 'pending'),
(3, 'sdafdsaf', 'fsdf', '', 'Female', '923829832', '', 'mustafa@mail.com', '23', '32', '32', '32', 3, '', '', '', '', '', '', '', 'phd', '15-July-2015', 'fdsf', 'fdlkj', 'lkj', '115', '', '', '', '', '', '', '', '', '', '999', '', 'no', 'no', 'no', '', '', '', '', '', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `password`, `firstname`, `lastname`, `dob`, `role`) VALUES
(27, 'mustafa.aloko@gmail.com', 'e5de81655caaea1616f2d5afe6cb3d23', 'Mustafa', 'Ehsan', '31-March-1991', 'instructor'),
(28, 'oansari@technation.af', '9173ba03b5ca3bb3d5448efa4c7851e9', 'Omar Mansoor', 'Ansari', '10-December-1977', 'instructor'),
(31, 'ahmad@mail.com', '75600638af31e25be331e95daf8bb130', 'Ahmad', 'Khan', '02-February-2010', 'member'),
(32, 'samiraliace@gmail.com', '415f7c96da3e79cf3588156e93522caa', 'samira', 'liace', '14-september-2014', 'instructor'),
(33, 'asd2', '', '', '', '', ''),
(34, 'asd@dfg.com', 'fcea920f7412b5da7be0cf42b8c93759', 'asd', 'asd', '3-6-1990', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `users_no_confirm`
--

CREATE TABLE IF NOT EXISTS `users_no_confirm` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `key` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users_no_confirm`
--

INSERT INTO `users_no_confirm` (`id`, `email_id`, `password`, `firstname`, `lastname`, `dob`, `role`, `key`) VALUES
(1, 'samliace@gmail.com', '415f7c96da3e79cf3588156e93522caa', 'Samira', 'liace', '29-January-2014', 'member', '4be4018484e1807a89be917cf02d5a1d');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `countries` (`idCountry`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `participants_ibfk_2` FOREIGN KEY (`degree-countryid`) REFERENCES `countries` (`idCountry`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `participants_ibfk_3` FOREIGN KEY (`org-countryid`) REFERENCES `countries` (`idCountry`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `participants_ibfk_4` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `participant_lecture`
--
ALTER TABLE `participant_lecture`
  ADD CONSTRAINT `participant_lecture_ibfk_1` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participant_lecture_ibfk_2` FOREIGN KEY (`lecture_id`) REFERENCES `lectures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
