-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 05:06 PM
-- Server version: 5.7.40
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wesypay_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso2` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dialling_pattern` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2234',
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso2`, `iso3`, `name`, `phone_code`, `dialling_pattern`, `region`, `sub_region`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'AL', 'ALB', 'Albania', '355', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(4, 'DZ', 'DZA', 'Algeria', '213', '2234', 'Africa', 'Northern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(5, 'AS', 'ASM', 'American Samoa', '1', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(6, 'AD', 'AND', 'Andorra', '376', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(7, 'AO', 'AGO', 'Angola', '244', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(8, 'AI', 'AIA', 'Anguilla', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(9, 'AQ', 'ATA', 'Antarctica', '672', '2234', 'Polar', '', 0, '2023-01-14 22:15:18', NULL, NULL),
(10, 'AG', 'ATG', 'Antigua And Barbuda', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(11, 'AR', 'ARG', 'Argentina', '54', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(12, 'AM', 'ARM', 'Armenia', '374', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(13, 'AW', 'ABW', 'Aruba', '297', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(14, 'AU', 'AUS', 'Australia', '61', '2234', 'Oceania', 'Australia and New Zealand', 0, '2023-01-14 22:15:18', NULL, NULL),
(15, 'AT', 'AUT', 'Austria', '43', '2234', 'Europe', 'Western Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(16, 'AZ', 'AZE', 'Azerbaijan', '994', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(17, 'BS', 'BHS', 'Bahamas The', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(18, 'BH', 'BHR', 'Bahrain', '973', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(19, 'BD', 'BGD', 'Bangladesh', '880', '2234', 'Asia', 'Southern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(20, 'BB', 'BRB', 'Barbados', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(21, 'BY', 'BLR', 'Belarus', '375', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(22, 'BE', 'BEL', 'Belgium', '32', '2234', 'Europe', 'Western Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(23, 'BZ', 'BLZ', 'Belize', '501', '2234', 'Americas', 'Central America', 0, '2023-01-14 22:15:18', NULL, NULL),
(24, 'BJ', 'BEN', 'Benin', '229', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(25, 'BM', 'BMU', 'Bermuda', '1', '2234', 'Americas', 'Northern America', 0, '2023-01-14 22:15:18', NULL, NULL),
(26, 'BT', 'BTN', 'Bhutan', '975', '2234', 'Asia', 'Southern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(27, 'BO', 'BOL', 'Bolivia', '591', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(28, 'BQ', 'BES', 'Bonaire, Sint Eustatius and Saba', '599', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(29, 'BA', 'BIH', 'Bosnia and Herzegovina', '387', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(30, 'BW', 'BWA', 'Botswana', '267', '2234', 'Africa', 'Southern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(31, 'BV', 'BVT', 'Bouvet Island', '55', '2234', '', '', 0, '2023-01-14 22:15:18', NULL, NULL),
(32, 'BR', 'BRA', 'Brazil', '55', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(33, 'IO', 'IOT', 'British Indian Ocean Territory', '246', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(34, 'BN', 'BRN', 'Brunei', '673', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(35, 'BG', 'BGR', 'Bulgaria', '359', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(36, 'BF', 'BFA', 'Burkina Faso', '226', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(37, 'BI', 'BDI', 'Burundi', '257', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(38, 'KH', 'KHM', 'Cambodia', '855', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(39, 'CM', 'CMR', 'Cameroon', '237', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(40, 'CA', 'CAN', 'Canada', '1', '2234', 'Americas', 'Northern America', 0, '2023-01-14 22:15:18', NULL, NULL),
(41, 'CV', 'CPV', 'Cape Verde', '238', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(42, 'KY', 'CYM', 'Cayman Islands', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(43, 'CF', 'CAF', 'Central African Republic', '236', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(44, 'TD', 'TCD', 'Chad', '235', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(45, 'CL', 'CHL', 'Chile', '56', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(46, 'CN', 'CHN', 'China', '86', '2234', 'Asia', 'Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(47, 'CX', 'CXR', 'Christmas Island', '61', '2234', 'Oceania', 'Australia and New Zealand', 0, '2023-01-14 22:15:18', NULL, NULL),
(48, 'CC', 'CCK', 'Cocos (Keeling) Islands', '61', '2234', 'Oceania', 'Australia and New Zealand', 0, '2023-01-14 22:15:18', NULL, NULL),
(49, 'CO', 'COL', 'Colombia', '57', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(50, 'KM', 'COM', 'Comoros', '269', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(51, 'CG', 'COG', 'Congo', '242', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(52, 'CK', 'COK', 'Cook Islands', '682', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(53, 'CR', 'CRI', 'Costa Rica', '506', '2234', 'Americas', 'Central America', 0, '2023-01-14 22:15:18', NULL, NULL),
(54, 'CI', 'CIV', 'Cote D\'Ivoire (Ivory Coast)', '225', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(55, 'HR', 'HRV', 'Croatia', '385', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(56, 'CU', 'CUB', 'Cuba', '53', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(57, 'CW', 'CUW', 'Curaçao', '599', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(58, 'CY', 'CYP', 'Cyprus', '357', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(59, 'CZ', 'CZE', 'Czech Republic', '420', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(60, 'CD', 'COD', 'Democratic Republic of the Congo', '243', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(61, 'DK', 'DNK', 'Denmark', '45', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(62, 'DJ', 'DJI', 'Djibouti', '253', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(63, 'DM', 'DMA', 'Dominica', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(64, 'DO', 'DOM', 'Dominican Republic', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(65, 'TL', 'TLS', 'East Timor', '670', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(66, 'EC', 'ECU', 'Ecuador', '593', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(67, 'EG', 'EGY', 'Egypt', '20', '2234', 'Africa', 'Northern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(68, 'SV', 'SLV', 'El Salvador', '503', '2234', 'Americas', 'Central America', 0, '2023-01-14 22:15:18', NULL, NULL),
(69, 'GQ', 'GNQ', 'Equatorial Guinea', '240', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(70, 'ER', 'ERI', 'Eritrea', '291', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(71, 'EE', 'EST', 'Estonia', '372', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(72, 'ET', 'ETH', 'Ethiopia', '251', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(73, 'FK', 'FLK', 'Falkland Islands', '500', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(74, 'FO', 'FRO', 'Faroe Islands', '298', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(75, 'FJ', 'FJI', 'Fiji Islands', '679', '2234', 'Oceania', 'Melanesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(76, 'FI', 'FIN', 'Finland', '358', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(77, 'FR', 'FRA', 'France', '33', '2234', 'Europe', 'Western Europe', 1, '2023-01-14 22:15:18', '2023-01-14 22:18:56', NULL),
(78, 'GF', 'GUF', 'French Guiana', '594', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(79, 'PF', 'PYF', 'French Polynesia', '689', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(80, 'TF', 'ATF', 'French Southern Territories', '262', '2234', 'Africa', 'Southern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(81, 'GA', 'GAB', 'Gabon', '241', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(82, 'GM', 'GMB', 'Gambia The', '220', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(83, 'GE', 'GEO', 'Georgia', '995', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(84, 'DE', 'DEU', 'Germany', '49', '2234', 'Europe', 'Western Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(85, 'GH', 'GHA', 'Ghana', '233', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(86, 'GI', 'GIB', 'Gibraltar', '350', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(87, 'GR', 'GRC', 'Greece', '30', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(88, 'GL', 'GRL', 'Greenland', '299', '2234', 'Americas', 'Northern America', 0, '2023-01-14 22:15:18', NULL, NULL),
(89, 'GD', 'GRD', 'Grenada', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(90, 'GP', 'GLP', 'Guadeloupe', '590', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(91, 'GU', 'GUM', 'Guam', '1', '2234', 'Oceania', 'Micronesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(92, 'GT', 'GTM', 'Guatemala', '502', '2234', 'Americas', 'Central America', 0, '2023-01-14 22:15:18', NULL, NULL),
(93, 'GG', 'GGY', 'Guernsey and Alderney', '44', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(94, 'GN', 'GIN', 'Guinea', '224', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(95, 'GW', 'GNB', 'Guinea-Bissau', '245', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(96, 'GY', 'GUY', 'Guyana', '592', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(97, 'HT', 'HTI', 'Haiti', '509', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(98, 'HM', 'HMD', 'Heard Island and McDonald Islands', '672', '2234', '', '', 0, '2023-01-14 22:15:18', NULL, NULL),
(99, 'HN', 'HND', 'Honduras', '504', '2234', 'Americas', 'Central America', 0, '2023-01-14 22:15:18', NULL, NULL),
(100, 'HK', 'HKG', 'Hong Kong S.A.R.', '852', '2234', 'Asia', 'Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(101, 'HU', 'HUN', 'Hungary', '36', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(102, 'IS', 'ISL', 'Iceland', '354', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(103, 'IN', 'IND', 'India', '91', '2234', 'Asia', 'Southern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(104, 'ID', 'IDN', 'Indonesia', '62', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(105, 'IR', 'IRN', 'Iran', '98', '2234', 'Asia', 'Southern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(106, 'IQ', 'IRQ', 'Iraq', '964', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(107, 'IE', 'IRL', 'Ireland', '353', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(108, 'IL', 'ISR', 'Israel', '972', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(109, 'IT', 'ITA', 'Italy', '39', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(110, 'JM', 'JAM', 'Jamaica', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(111, 'JP', 'JPN', 'Japan', '81', '2234', 'Asia', 'Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(112, 'JE', 'JEY', 'Jersey', '44', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(113, 'JO', 'JOR', 'Jordan', '962', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(114, 'KZ', 'KAZ', 'Kazakhstan', '7', '2234', 'Asia', 'Central Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(115, 'KE', 'KEN', 'Kenya', '254', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(116, 'KI', 'KIR', 'Kiribati', '686', '2234', 'Oceania', 'Micronesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(117, 'XK', 'XKX', 'Kosovo', '383', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(118, 'KW', 'KWT', 'Kuwait', '965', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(119, 'KG', 'KGZ', 'Kyrgyzstan', '996', '2234', 'Asia', 'Central Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(120, 'LA', 'LAO', 'Laos', '856', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(121, 'LV', 'LVA', 'Latvia', '371', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(122, 'LB', 'LBN', 'Lebanon', '961', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(123, 'LS', 'LSO', 'Lesotho', '266', '2234', 'Africa', 'Southern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(124, 'LR', 'LBR', 'Liberia', '231', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(125, 'LY', 'LBY', 'Libya', '218', '2234', 'Africa', 'Northern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(126, 'LI', 'LIE', 'Liechtenstein', '423', '2234', 'Europe', 'Western Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(127, 'LT', 'LTU', 'Lithuania', '370', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(128, 'LU', 'LUX', 'Luxembourg', '352', '2234', 'Europe', 'Western Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(129, 'MO', 'MAC', 'Macau S.A.R.', '853', '2234', 'Asia', 'Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(130, 'MK', 'MKD', 'Macedonia', '389', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(131, 'MG', 'MDG', 'Madagascar', '261', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(132, 'MW', 'MWI', 'Malawi', '265', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(133, 'MY', 'MYS', 'Malaysia', '60', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(134, 'MV', 'MDV', 'Maldives', '960', '2234', 'Asia', 'Southern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(135, 'ML', 'MLI', 'Mali', '223', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(136, 'MT', 'MLT', 'Malta', '356', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(137, 'IM', 'IMN', 'Man (Isle of)', '44', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(138, 'MH', 'MHL', 'Marshall Islands', '692', '2234', 'Oceania', 'Micronesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(139, 'MQ', 'MTQ', 'Martinique', '596', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(140, 'MR', 'MRT', 'Mauritania', '222', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(141, 'MU', 'MUS', 'Mauritius', '230', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(142, 'YT', 'MYT', 'Mayotte', '262', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(143, 'MX', 'MEX', 'Mexico', '52', '2234', 'Americas', 'Central America', 0, '2023-01-14 22:15:18', NULL, NULL),
(144, 'FM', 'FSM', 'Micronesia', '691', '2234', 'Oceania', 'Micronesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(145, 'MD', 'MDA', 'Moldova', '373', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(146, 'MC', 'MCO', 'Monaco', '377', '2234', 'Europe', 'Western Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(147, 'MN', 'MNG', 'Mongolia', '976', '2234', 'Asia', 'Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(148, 'ME', 'MNE', 'Montenegro', '382', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(149, 'MS', 'MSR', 'Montserrat', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(150, 'MA', 'MAR', 'Morocco', '212', '2234', 'Africa', 'Northern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(151, 'MZ', 'MOZ', 'Mozambique', '258', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(152, 'MM', 'MMR', 'Myanmar', '95', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(153, 'NA', 'NAM', 'Namibia', '264', '2234', 'Africa', 'Southern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(154, 'NR', 'NRU', 'Nauru', '674', '2234', 'Oceania', 'Micronesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(155, 'NP', 'NPL', 'Nepal', '977', '2234', 'Asia', 'Southern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(156, 'NL', 'NLD', 'Netherlands', '31', '2234', 'Europe', 'Western Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(157, 'NC', 'NCL', 'New Caledonia', '687', '2234', 'Oceania', 'Melanesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(158, 'NZ', 'NZL', 'New Zealand', '64', '2234', 'Oceania', 'Australia and New Zealand', 0, '2023-01-14 22:15:18', NULL, NULL),
(159, 'NI', 'NIC', 'Nicaragua', '505', '2234', 'Americas', 'Central America', 0, '2023-01-14 22:15:18', NULL, NULL),
(160, 'NE', 'NER', 'Niger', '227', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(161, 'NG', 'NGA', 'Nigeria', '234', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(162, 'NU', 'NIU', 'Niue', '683', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(163, 'NF', 'NFK', 'Norfolk Island', '672', '2234', 'Oceania', 'Australia and New Zealand', 0, '2023-01-14 22:15:18', NULL, NULL),
(164, 'KP', 'PRK', 'North Korea', '850', '2234', 'Asia', 'Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(165, 'MP', 'MNP', 'Northern Mariana Islands', '1', '2234', 'Oceania', 'Micronesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(166, 'NO', 'NOR', 'Norway', '47', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(167, 'OM', 'OMN', 'Oman', '968', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(168, 'PK', 'PAK', 'Pakistan', '92', '2234', 'Asia', 'Southern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(169, 'PW', 'PLW', 'Palau', '680', '2234', 'Oceania', 'Micronesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(170, 'PS', 'PSE', 'Palestinian Territory Occupied', '970', '2234', 'Asia', 'Western Asia', 1, '2023-01-14 22:15:18', '2023-01-14 22:18:34', NULL),
(171, 'PA', 'PAN', 'Panama', '507', '2234', 'Americas', 'Central America', 0, '2023-01-14 22:15:18', NULL, NULL),
(172, 'PG', 'PNG', 'Papua new Guinea', '675', '2234', 'Oceania', 'Melanesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(173, 'PY', 'PRY', 'Paraguay', '595', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(174, 'PE', 'PER', 'Peru', '51', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(175, 'PH', 'PHL', 'Philippines', '63', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(176, 'PN', 'PCN', 'Pitcairn Island', '870', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(177, 'PL', 'POL', 'Poland', '48', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(178, 'PT', 'PRT', 'Portugal', '351', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(179, 'PR', 'PRI', 'Puerto Rico', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(180, 'QA', 'QAT', 'Qatar', '974', '2234', 'Asia', 'Western Asia', 1, '2023-01-14 22:15:18', NULL, NULL),
(181, 'RE', 'REU', 'Reunion', '262', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(182, 'RO', 'ROU', 'Romania', '40', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(183, 'RU', 'RUS', 'Russia', '7', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(184, 'RW', 'RWA', 'Rwanda', '250', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(185, 'SH', 'SHN', 'Saint Helena', '290', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(186, 'KN', 'KNA', 'Saint Kitts And Nevis', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(187, 'LC', 'LCA', 'Saint Lucia', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(188, 'PM', 'SPM', 'Saint Pierre and Miquelon', '508', '2234', 'Americas', 'Northern America', 0, '2023-01-14 22:15:18', NULL, NULL),
(189, 'VC', 'VCT', 'Saint Vincent And The Grenadines', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(190, 'BL', 'BLM', 'Saint-Barthelemy', '590', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(191, 'MF', 'MAF', 'Saint-Martin (French part)', '590', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(192, 'WS', 'WSM', 'Samoa', '685', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(193, 'SM', 'SMR', 'San Marino', '378', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(194, 'ST', 'STP', 'Sao Tome and Principe', '239', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(195, 'SA', 'SAU', 'Saudi Arabia', '966', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(196, 'SN', 'SEN', 'Senegal', '221', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(197, 'RS', 'SRB', 'Serbia', '381', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(198, 'SC', 'SYC', 'Seychelles', '248', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(199, 'SL', 'SLE', 'Sierra Leone', '232', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(200, 'SG', 'SGP', 'Singapore', '65', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(201, 'SX', 'SXM', 'Sint Maarten (Dutch part)', '1721', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(202, 'SK', 'SVK', 'Slovakia', '421', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(203, 'SI', 'SVN', 'Slovenia', '386', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(204, 'SB', 'SLB', 'Solomon Islands', '677', '2234', 'Oceania', 'Melanesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(205, 'SO', 'SOM', 'Somalia', '252', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(206, 'ZA', 'ZAF', 'South Africa', '27', '2234', 'Africa', 'Southern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(207, 'GS', 'SGS', 'South Georgia', '500', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(208, 'KR', 'KOR', 'South Korea', '82', '2234', 'Asia', 'Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(209, 'SS', 'SSD', 'South Sudan', '211', '2234', 'Africa', 'Middle Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(210, 'ES', 'ESP', 'Spain', '34', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(211, 'LK', 'LKA', 'Sri Lanka', '94', '2234', 'Asia', 'Southern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(212, 'SD', 'SDN', 'Sudan', '249', '2234', 'Africa', 'Northern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(213, 'SR', 'SUR', 'Suriname', '597', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(214, 'SJ', 'SJM', 'Svalbard And Jan Mayen Islands', '47', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(215, 'SZ', 'SWZ', 'Swaziland', '268', '2234', 'Africa', 'Southern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(216, 'SE', 'SWE', 'Sweden', '46', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(217, 'CH', 'CHE', 'Switzerland', '41', '2234', 'Europe', 'Western Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(218, 'SY', 'SYR', 'Syria', '963', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(219, 'TW', 'TWN', 'Taiwan', '886', '2234', 'Asia', 'Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(220, 'TJ', 'TJK', 'Tajikistan', '992', '2234', 'Asia', 'Central Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(221, 'TZ', 'TZA', 'Tanzania', '255', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(222, 'TH', 'THA', 'Thailand', '66', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(223, 'TG', 'TGO', 'Togo', '228', '2234', 'Africa', 'Western Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(224, 'TK', 'TKL', 'Tokelau', '690', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(225, 'TO', 'TON', 'Tonga', '676', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(226, 'TT', 'TTO', 'Trinidad And Tobago', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(227, 'TN', 'TUN', 'Tunisia', '216', '2234', 'Africa', 'Northern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(228, 'TR', 'TUR', 'Turkey', '90', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(229, 'TM', 'TKM', 'Turkmenistan', '993', '2234', 'Asia', 'Central Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(230, 'TC', 'TCA', 'Turks And Caicos Islands', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(231, 'TV', 'TUV', 'Tuvalu', '688', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(232, 'UG', 'UGA', 'Uganda', '256', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(233, 'UA', 'UKR', 'Ukraine', '380', '2234', 'Europe', 'Eastern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(234, 'AE', 'ARE', 'United Arab Emirates', '971', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(235, 'GB', 'GBR', 'United Kingdom', '44', '2234', 'Europe', 'Northern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(236, 'US', 'USA', 'United States', '1', '2234', 'Americas', 'Northern America', 0, '2023-01-14 22:15:18', NULL, NULL),
(237, 'UM', 'UMI', 'United States Minor Outlying Islands', '1', '2234', 'Americas', 'Northern America', 0, '2023-01-14 22:15:18', NULL, NULL),
(238, 'UY', 'URY', 'Uruguay', '598', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(239, 'UZ', 'UZB', 'Uzbekistan', '998', '2234', 'Asia', 'Central Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(240, 'VU', 'VUT', 'Vanuatu', '678', '2234', 'Oceania', 'Melanesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(241, 'VA', 'VAT', 'Vatican City State (Holy See)', '379', '2234', 'Europe', 'Southern Europe', 0, '2023-01-14 22:15:18', NULL, NULL),
(242, 'VE', 'VEN', 'Venezuela', '58', '2234', 'Americas', 'South America', 0, '2023-01-14 22:15:18', NULL, NULL),
(243, 'VN', 'VNM', 'Vietnam', '84', '2234', 'Asia', 'South-Eastern Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(244, 'VG', 'VGB', 'Virgin Islands (British)', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(245, 'VI', 'VIR', 'Virgin Islands (US)', '1', '2234', 'Americas', 'Caribbean', 0, '2023-01-14 22:15:18', NULL, NULL),
(246, 'WF', 'WLF', 'Wallis And Futuna Islands', '681', '2234', 'Oceania', 'Polynesia', 0, '2023-01-14 22:15:18', NULL, NULL),
(247, 'EH', 'ESH', 'Western Sahara', '212', '2234', 'Africa', 'Northern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(248, 'YE', 'YEM', 'Yemen', '967', '2234', 'Asia', 'Western Asia', 0, '2023-01-14 22:15:18', NULL, NULL),
(249, 'ZM', 'ZMB', 'Zambia', '260', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL),
(250, 'ZW', 'ZWE', 'Zimbabwe', '263', '2234', 'Africa', 'Eastern Africa', 0, '2023-01-14 22:15:18', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
