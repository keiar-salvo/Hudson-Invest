-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2026 at 08:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strategicplan`
--
CREATE DATABASE IF NOT EXISTS `strategicplan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `strategicplan`;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `display_homes`
--

CREATE TABLE `display_homes` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `logo` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `direction_url` text NOT NULL,
  `direction_img` text NOT NULL,
  `broucher` text NOT NULL,
  `schedule` int(11) NOT NULL DEFAULT 0,
  `opening_hours_text` text NOT NULL,
  `opening_hours` text NOT NULL,
  `location` int(11) NOT NULL COMMENT '1 Sydney Region\r\n2 Central Coast\r\n3 Hunter Region\r\n4 Brisbane Region',
  `feature_img` text NOT NULL,
  `vtour` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `homes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `createdat` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `display_homes`
--

INSERT INTO `display_homes` (`id`, `title`, `slug`, `logo`, `phone`, `address`, `image`, `direction_url`, `direction_img`, `broucher`, `schedule`, `opening_hours_text`, `opening_hours`, `location`, `feature_img`, `vtour`, `homes`, `createdat`, `status`, `reason`) VALUES
(1, 'Watagan Park', 'watagan-park', '320378446_545694250579649_4323808713683327284_n.jpg', '0483 950 830', '7 Apron Avenue, Cooranbong NSW 2265 ', 'opt/tour-placeholder.webp', 'https://maps.app.goo.gl/upAKWoKz3Yoza7NL9', 'opt/MAP-COMING-SOON.webp', '', 0, 'Coming Soon', '[]', 2, '', '[7,8]', '', '2025-03-08 12:31:57', 1, '1'),
(2, 'HomeWorld Leppington', 'homeworld-leppington', '', '02 8105 0501', '57 Berkshire Circuit, Leppington\r\nNSW 2179', 'opt/HH_Emerald-28-Website-JULY23_1.webp', 'https://g.page/r/CeYs8I6y0-eoEBM/', 'opt/HomeWorld-Leppington-Map.webp', '', 1, 'Open 7 DAYS 10am to 5pm', '[\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 1, 'HH_Mocha-35-Website-JULY23_1-1-scaled.jpg', '[23,19]', '[]', '2025-03-10 07:06:14', 1, '1'),
(3, 'Closing Soon: Leppington Living', 'closing-soon-leppington-living', '', '02 8124 6777', '26 Saturn St, \r\nLeppington NSW 2179', '', 'https://goo.gl/maps/rCqUWkDzfWZwY5n89', '36877e4c-29f0-49a3-8910-2cf3f5bd175f_large.jpeg', 'HUD_display-walkthrough-leppington-living_280x280_AUG-1-2022-LR.pdf', 1, 'Open By Appointment Only', '[\"*By Appt Only*\",\"*By Appt Only*\",\"*By Appt Only*\",\"*By Appt Only*\",*By Appt Only*\",\"*By Appt Only*\",\"*By Appt Only*\"]', 1, 'HH_Jasper-24-Website-JULY23-1-scaled.jpg', '', '[56,39]', '2025-03-10 07:15:45', 0, '1'),
(4, 'HomeWorld Marsden Park', 'homeworld-marsden-park', '', '02 8073 9131', '10 Allott Street,\r\nMarsden Park NSW 2765', '', 'https://goo.gl/maps/enHRahCJUjjon2TFA', 'big-HH-new-elara-display-map.jpg', 'HUD_display-walkthrough-marsden-park_280x280_MAR-02-2022-LR.pdf', 1, 'Open Thursday to Monday 10am to 5pm', '[\"10:00am - 5:00pm\",\"CLOSED\",\"CLOSED\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 1, 'HH_Mocha-35-Website-JULY23_1-1-scaled.jpg', '', '', '2025-03-10 07:21:29', 0, '1'),
(5, 'Closing Soon: HomeWorld Warnervale', 'closing-soon-homeworld-warnervale', '', '02 4039 8027', '24 Scarlett Close,\r\nHamlyn Terrace NSW 2259', '', 'https://goo.gl/maps/dnTTicCmdGr', 'dh-harvest-estate@2x.png', '20200520-welcome-to-HW-Warnervale-LR.pdf', 1, 'Open Sat - Wed 10am to 5pm', '[\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"CLOSED\",\"CLOSED\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 2, 'HH_Burgundy-34-Website-IMG-JULY23_1-scaled.jpg', '', '', '2025-03-10 07:26:29', 0, '1'),
(6, 'HomeWorld Warnervale', 'homeworld-warnervale', '', '02 4039 8027', '38 Turret Circuit,\r\nWarnervale NSW 2259', 'opt/Monash-Facade-2-Stry-1.webp', 'https://www.google.com/maps/place/38+Turret+Cct,+Warnervale+NSW+2259/@-33.242555,151.4461861,17z/data=!3m1!4b1!4m6!3m5!1s0x6b72d10d01470c99:0x1d31664b71bf4881!8m2!3d-33.242555!4d151.4461861!16s%2Fg%2F11twv8bnz4?entry=ttu', 'opt/HH_HW-Warnervale-Website-Map_NOV23_1.webp', '20200520-welcome-to-HW-Warnervale-LR.pdf', 1, 'OPEN 7 DAYS 10am to 5pm', '[\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 2, 'Monash-Facade-2-Stry-1.jpg', '[52,53,54]', '', '2025-03-10 07:30:05', 1, '1'),
(7, 'Closing Soon: Huntlee Estate', 'closing-soon-huntlee-estate', '', '02 4933 3225', '6 Peachy Avenue,\r\nNorth Rothbury NSW 2335', '', 'https://g.page/LWP-Huntlee?share', 'Huntlee-display-map.jpg', '20200520-welcome-to-HW-Warnervale-LR.pdf', 1, 'Open Fri - Tues 10am to 5pm', '[\"10:00am - 5:00pm\",\"*Temporarily Closed*\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 3, 'HH_Onyx-24-Website-JULY23_1-scaled.jpg', '', '', '2025-03-10 07:38:46', 0, '1'),
(8, 'Thornton', 'thornton', '', '02 4039 8025', '22 Darlaston Avenue,\r\nThornton NSW 2322', '', 'https://goo.gl/maps/33uoZixFVaBdApWA6', 'Thornton-map-website1.png', '20200520-welcome-to-Thornton-LR.pdf', 1, 'Open 10am - 5pm. Closed Tuesday &amp; Wednesday', '[\"*Temporarily Closed*\",\"Closed\",\"Closed\",\"*Temporarily Closed*\",\"*Temporarily Closed*\",\"*Temporarily Closed*\",\"*Temporarily Closed*\"]', 3, 'front-DUSK-main-V2-amended-e1584424816497.jpg', '', '', '2025-03-10 07:41:38', 0, '1'),
(9, 'Ellendale Upper Kedron', 'ellendale-upper-kedron', '', '07 5391 3502', '4 Kosciuszko Street\r\nUpper Kedron QLD 4055', '', 'https://g.page/r/CcDzDfdqR-2AEBM/', 'Ellendale-Upper-Kedron-Map.png', '', 1, 'Open Mon - Tue 10am to 5pm and Wed - Sun By Appt Only', '[]', 4, 'HH_Quartz-27-Website-SEP23_1-scaled.jpg', '', '', '2025-03-10 07:47:54', 0, '1'),
(10, 'Flagstone', 'flagstone', '', '07 4588 0908', '7 Providence Street\r\nFlagstone QLD 4280', 'opt/Hudson-Homes_Mahogany-43_double-storey-home-design_display-home_Brisbane.webp', 'https://maps.app.goo.gl/ppB3pJbD7Qk93AcRA', 'opt/HH_Flagstone-Map-Website_2.webp', 'Flagstone-Walkthrough-Brochure-1.pdf', 1, 'Open 7 Days, 10AM-5PM\r\nCLOSED 10/03/25 and 11/03/25', '[\"CLOSED\",\"CLOSED\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 4, 'Hudson-Homes_Mahogany-43_double-storey-home-design_display-home_Brisbane-scaled.jpg', '[10,15,16]', '', '2025-03-10 07:50:11', 1, '1'),
(11, 'Logan Reserve', 'logan-reserve', '', '0428 650 617', '6 Almandin Street,\r\nLogan Reserve QLD 4133', '', 'https://goo.gl/maps/VxkEsy5Zd7PQPwkJ6', 'HH-QLD-Logan-reserve-Display-WEB.png', '20200520-welcome-to-Logan-Reserve-LR.pdf', 1, 'By appointment only.', '[\"By Appointment Only\",\"By Appointment Only\",\"By Appointment Only\",\"By Appointment Only\",\"By Appointment Only\",\"By Appointment Only\",\"By Appointment Only\"]', 0, '', '', '', '2025-03-10 07:53:50', 0, '1'),
(12, 'Harvest Estate', 'harvest-estate', '', '02 4039 8025', '14 Harvest Boulevard,\r\nChisholm NSW 2322', '', '', 'dh-harvest-estate@2x.png', '', 0, 'Open Thur - Mon, 10am - 5pm', '[\"10:00am - 5:00pm\",\"Closed\",\"Closed\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 3, 'display-homes-harvest.jpg', '', '', '2025-03-10 07:56:44', 0, '1'),
(13, 'HomeWorld Kellyville', 'harvest-estate', '', '02 8488 8299', '75 Gormon Avenue, \r\nKellyville NSW 2155', '', 'https://goo.gl/maps/ATcmm1hDpEk', 'dh-homeworld-kellyville@2x-1.png', '', 0, 'Open Sat - Wed 10am - 5pm', '[\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"Closed\",\"Closed\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 1, '', '', '', '2025-03-10 08:10:14', 0, '1'),
(14, 'HomeWorld Oran Park', 'homeworld-oran-park', 'HOMEWORLD-LOGO-COL-1.png', '1300 246 700', '6 Brick Lane, Oran Park NSW 2570', 'opt/tour-placeholder.webp', '', 'opt/MAP-COMING-SOON.webp', '', 0, 'Coming Soon', '[\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"CLOSED\",\"CLOSED\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 1, '', '[2,3,4]', '[47,66,55]', '2025-03-10 08:20:17', 1, '1'),
(15, 'Brookhaven Estate', 'brookhaven-estate', 'frasers_property-01.png', '', 'Bahrs Scrub QLD 4207', 'opt/tour-placeholder.webp', '', 'opt/MAP-COMING-SOON.webp', '', 0, 'Coming Soon', '[]', 4, 'coming-soon.jpg', '[22]', '[10]', '2025-03-10 08:23:06', 1, '1'),
(16, 'Mount View Grange', 'mount-view-grange', '313198167_538534461613669_203260300326683202_n.png', '', 'Bellbird NSW 2325', 'opt/tour-placeholder.webp', '', 'opt/MAP-COMING-SOON.webp', '', 0, 'Coming Soon', '[]', 3, '', '[5,6]', '', '2025-03-10 08:25:50', 1, '1'),
(18, 'Kinma Valley', 'kinma-valley', 'images.png', '', 'Morayfield QLD 4506', 'opt/tour-placeholder.webp', '', 'opt/MAP-COMING-SOON.webp', '', 0, 'Coming Soon', '[]', 4, '', '[6,9]', '[]', '2025-03-10 08:31:09', 1, '1'),
(19, 'Lillywood Caboolture', 'lillywood-caboolture', 'Lilywood-Landings-Logo-1080x1080-1.jpg', '0428 650 617', '7 Merryvale Circuit,\r\nLilywood QLD 4513', 'opt/tour-placeholder.webp', 'https://share.google/MdckqxgmTr8gRZMhL', 'opt/MAP-COMING-SOON.webp', '', 0, 'Mon10:00am - 5:00pm\r\nTues10:00am - 5:00pm\r\nWed10:00am - 5:00pm\r\nThurs CLOSED\r\nFri CLOSED\r\nSat10:00am - 5:00pm\r\nSun10:00am - 5:00pm', 'Mon10:00am - 5:00pm\r\nTues10:00am - 5:00pm\r\nWed10:00am - 5:00pm\r\nThurs CLOSED\r\nFri CLOSED\r\nSat10:00am - 5:00pm\r\nSun10:00am - 5:00pm', 4, '', '[18]', '[]', '2025-03-10 08:34:20', 1, '1'),
(20, 'Springfield Rise at Spring Mountain', 'springfield-rise-at-spring-mountain', '', '0428 650 617', '8 Benson Street\r\nSpring Mountain QLD 4124', 'opt/Eden-Facade-Single-Storey.webp', 'https://www.google.com/maps/place/8+Benson+St,+Spring+Mountain+QLD+4300/@-27.6842092,152.8828713,17z/data=!3m1!4b1!4m6!3m5!1s0x6b914a70071be9ad:0xd9f1d3b99a8e0ed!8m2!3d-27.684214!4d152.8854462!16s%2Fg%2F11jzxms2nw?entry=ttu', 'opt/HH_Spring-Mountain-Map_DEC23_1.webp', '', 0, 'Open 7 days 10am to 5pm', '[\"CLOSED\",\"CLOSED\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\",\"10:00am - 5:00pm\"]', 4, 'Eden-Facade-Single-Storey.jpg', '[14,21]', '', '2025-03-24 12:40:04', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `display_home_locations`
--

CREATE TABLE `display_home_locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent_location` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `display_home_locations`
--

INSERT INTO `display_home_locations` (`id`, `name`, `slug`, `parent_location`, `description`, `created_at`) VALUES
(2, 'Sydney Region', 'sydney-region', '111', 'jjlkjljkl', '2025-02-15 06:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `dis_homes`
--

CREATE TABLE `dis_homes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Resone` text NOT NULL COMMENT '1=central coast,2=sydney region,3=hunter region,4=brisbane region',
  `feat_img` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `direction_img` varchar(255) NOT NULL,
  `direction_btn_url` varchar(255) NOT NULL,
  `brochure` varchar(255) NOT NULL,
  `schedule_appointment` enum('Yes','No') NOT NULL,
  `day` text NOT NULL,
  `time` time(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dis_homes`
--

INSERT INTO `dis_homes` (`id`, `title`, `Resone`, `feat_img`, `logo`, `phone`, `address`, `direction_img`, `direction_btn_url`, `brochure`, `schedule_appointment`, `day`, `time`, `created_at`) VALUES
(2, 'test123', 's', 'uploads/hudsonhomes-logo.png', 'uploads/hudsonhomes-logo.png', '345345', '0', 'uploads/hudsonhomes-logo.png', 'afssafsd', 'uploads/course-guide-certificate-iii-in-food-processing-1.pdf', 'Yes', '', '00:00:00.000000', '0000-00-00 00:00:00'),
(3, 'utttttttttttt787', 'm', 'oops.jpg', 'images.jpg', '9536381924', 'hkjk', 'nature2.jpg', 'afssafsd', 'A4-double-storey-burgundy-LR.pdf', 'Yes', '', '00:00:00.000000', '2025-03-07 07:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `duplex_plan_option_uniot`
--

CREATE TABLE `duplex_plan_option_uniot` (
  `id` int(11) NOT NULL,
  `home_id` int(11) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `unit` varchar(1) NOT NULL,
  `bedroom` float NOT NULL,
  `bathroom` float NOT NULL,
  `garage` float NOT NULL,
  `living` float NOT NULL,
  `alfresco` float NOT NULL,
  `porch` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `financial_independences`
--

CREATE TABLE `financial_independences` (
  `details_id` varchar(255) NOT NULL,
  `target_age` int(11) NOT NULL,
  `years_to_target_age` int(11) NOT NULL,
  `desired_retirement_date` varchar(255) NOT NULL,
  `current_income_required_in_retirement` varchar(255) NOT NULL,
  `encoded_by` varchar(255) NOT NULL,
  `date_encoded` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `financial_independences`
--

INSERT INTO `financial_independences` (`details_id`, `target_age`, `years_to_target_age`, `desired_retirement_date`, `current_income_required_in_retirement`, `encoded_by`, `date_encoded`, `created_at`, `updated_at`) VALUES
('AaEqqDHxLb', 65, 34, '07/29/2032', '4645', 'Genjie Aventurado', '2026-07-29', '2026-07-28 17:58:01', '2026-07-28 17:58:01'),
('BsoLzyFRzR', 65, 34, '07/28/2032', '100', 'Genjie Aventurado', '2026-07-28', '2026-07-27 19:27:07', '2026-07-27 19:29:15'),
('eVMkkUXnpt', 65, 25, '07/30/2051', '65456', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44'),
('kJmWMXdtWo', 65, 21, '03/30/2040', '31312', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:00:23', '2026-07-29 15:00:23'),
('mmfjfmDLJS', 65, 39, '03/30/2025', '75', 'Genjie Aventurado', '2026-07-29', '2026-07-28 18:44:21', '2026-07-28 19:04:58'),
('qgSWiEmwuU', 65, 34, '07/29/2032', '6232', 'Genjie Aventurado', '2026-07-29', '2026-07-28 16:53:29', '2026-07-28 16:53:29'),
('QTccangFsS', 65, 34, '07/28/2032', '20.3', 'Genjie Aventurado', '2026-07-28', '2026-07-27 19:31:27', '2026-07-27 19:35:25'),
('SZuieYFYQn', 65, 34, '07/29/2032', '3213', 'Genjie Aventurado', '2026-07-29', '2026-07-28 16:58:18', '2026-07-28 16:58:18'),
('TCFCGKJxAs', 65, 25, '07/30/2051', '321', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:05:33', '2026-07-29 15:07:39'),
('vxzoexxvQb', 65, 25, '07/30/2051', '321', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:03:57', '2026-07-29 15:03:57'),
('zaMOEdVkmC', 65, 34, '07/29/2032', '464', 'Genjie Aventurado', '2026-07-29', '2026-07-28 17:25:59', '2026-07-28 17:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `details_id` varchar(255) NOT NULL,
  `salary_frequency` varchar(255) DEFAULT NULL,
  `salary_client` varchar(255) DEFAULT NULL,
  `salary_partner` varchar(255) DEFAULT NULL,
  `salary_client_annual` varchar(255) DEFAULT NULL,
  `salary_partner_annual` varchar(255) DEFAULT NULL,
  `bonus_frequency` varchar(255) DEFAULT NULL,
  `bonus_client` varchar(255) DEFAULT NULL,
  `bonus_partner` varchar(255) DEFAULT NULL,
  `bonus_client_annual` varchar(255) DEFAULT NULL,
  `bonus_partner_annual` varchar(255) DEFAULT NULL,
  `interest_income_frequency` varchar(255) DEFAULT NULL,
  `interest_income_client` varchar(255) DEFAULT NULL,
  `interest_income_partner` varchar(255) DEFAULT NULL,
  `interest_income_client_annual` varchar(255) DEFAULT NULL,
  `interest_income_partner_annual` varchar(255) DEFAULT NULL,
  `rental_income_frequency` varchar(255) DEFAULT NULL,
  `rental_income_client` varchar(255) DEFAULT NULL,
  `rental_income_partner` varchar(255) DEFAULT NULL,
  `rental_income_client_annual` varchar(255) DEFAULT NULL,
  `rental_income_partner_annual` varchar(255) DEFAULT NULL,
  `dividend_income_frequency` varchar(255) DEFAULT NULL,
  `dividend_income_client` varchar(255) DEFAULT NULL,
  `dividend_income_partner` varchar(255) DEFAULT NULL,
  `dividend_income_client_annual` varchar(255) DEFAULT NULL,
  `dividend_income_partner_annual` varchar(255) DEFAULT NULL,
  `ss_income_frequency` varchar(255) DEFAULT NULL,
  `ss_income_client` varchar(255) DEFAULT NULL,
  `ss_income_partner` varchar(255) DEFAULT NULL,
  `ss_income_client_annual` varchar(255) DEFAULT NULL,
  `ss_income_partner_annual` varchar(255) DEFAULT NULL,
  `business_income_frequency` varchar(255) DEFAULT NULL,
  `business_income_client` varchar(255) DEFAULT NULL,
  `business_income_partner` varchar(255) DEFAULT NULL,
  `business_income_client_annual` varchar(255) DEFAULT NULL,
  `business_income_partner_annual` varchar(255) DEFAULT NULL,
  `other_income_frequency` varchar(255) DEFAULT NULL,
  `other_income_client` varchar(255) DEFAULT NULL,
  `other_income_partner` varchar(255) DEFAULT NULL,
  `other_income_client_annual` varchar(255) DEFAULT NULL,
  `other_income_partner_annual` varchar(255) DEFAULT NULL,
  `total_income_client_annual` varchar(255) DEFAULT NULL,
  `total_income_partner_annual` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) NOT NULL,
  `date_encoded` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`details_id`, `salary_frequency`, `salary_client`, `salary_partner`, `salary_client_annual`, `salary_partner_annual`, `bonus_frequency`, `bonus_client`, `bonus_partner`, `bonus_client_annual`, `bonus_partner_annual`, `interest_income_frequency`, `interest_income_client`, `interest_income_partner`, `interest_income_client_annual`, `interest_income_partner_annual`, `rental_income_frequency`, `rental_income_client`, `rental_income_partner`, `rental_income_client_annual`, `rental_income_partner_annual`, `dividend_income_frequency`, `dividend_income_client`, `dividend_income_partner`, `dividend_income_client_annual`, `dividend_income_partner_annual`, `ss_income_frequency`, `ss_income_client`, `ss_income_partner`, `ss_income_client_annual`, `ss_income_partner_annual`, `business_income_frequency`, `business_income_client`, `business_income_partner`, `business_income_client_annual`, `business_income_partner_annual`, `other_income_frequency`, `other_income_client`, `other_income_partner`, `other_income_client_annual`, `other_income_partner_annual`, `total_income_client_annual`, `total_income_partner_annual`, `encoded_by`, `date_encoded`, `created_at`, `updated_at`) VALUES
('AaEqqDHxLb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-29', '2026-07-28 17:58:01', '2026-07-28 17:58:01'),
('BsoLzyFRzR', 'Monthly', '30689', '30156', '80620', '80620', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-28', '2026-07-27 19:27:07', '2026-07-27 19:29:15'),
('eVMkkUXnpt', 'Monthly', '30', '30', '30', '30', 'Annual', '40', '40', '40', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '80', '80', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44'),
('kJmWMXdtWo', 'Monthly', '60', '60', '60', '60', 'Fortnightly', '50', '50', '50', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:00:23', '2026-07-29 15:00:23'),
('mmfjfmDLJS', 'Monthly', '50', '50', '50', '50', 'Fortnightly', '60', '60', '60', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-29', '2026-07-28 18:44:21', '2026-07-28 19:04:58'),
('qgSWiEmwuU', 'Fortnightly', '654132', '654321', '654645', '654321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-29', '2026-07-28 16:53:29', '2026-07-28 16:53:29'),
('QTccangFsS', 'Monthly', '1321321', '1321321', '1321321', '1321321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-28', '2026-07-27 19:31:27', '2026-07-27 19:35:25'),
('SZuieYFYQn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-29', '2026-07-28 16:58:18', '2026-07-28 16:58:18'),
('TCFCGKJxAs', 'Weekly', '80', '80', '80', '80', 'Annual', '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', '100', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:05:33', '2026-07-29 15:07:39'),
('vxzoexxvQb', 'Weekly', '80', '80', '80', '80', 'Annual', '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100', '100', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:03:57', '2026-07-29 15:03:57'),
('zaMOEdVkmC', 'Fortnightly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-29', '2026-07-28 17:25:59', '2026-07-28 17:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `investment_property_asset`
--

CREATE TABLE `investment_property_asset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details_id` varchar(255) NOT NULL,
  `investment_property` varchar(255) DEFAULT NULL,
  `client_percentage` varchar(255) DEFAULT NULL,
  `partner_percentage` varchar(255) DEFAULT NULL,
  `market_value` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `partner` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) NOT NULL,
  `date_encoded` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_property_asset`
--

INSERT INTO `investment_property_asset` (`id`, `details_id`, `investment_property`, `client_percentage`, `partner_percentage`, `market_value`, `client`, `partner`, `encoded_by`, `date_encoded`, `created_at`, `updated_at`) VALUES
(5, 'TCFCGKJxAs', 'Partner', '100', '100', '100', '100', '100', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:05:33', '2026-07-29 15:07:39'),
(6, 'TCFCGKJxAs', 'Joint', '100', '100', '100', '100', '100', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:05:33', '2026-07-29 15:07:39'),
(7, 'eVMkkUXnpt', 'Partner', '350', '350', '350', '350', '350', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44'),
(8, 'eVMkkUXnpt', 'Joint', '400', '400', '400', '400', '400', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `investment__assets`
--

CREATE TABLE `investment__assets` (
  `details_id` varchar(255) NOT NULL,
  `long_term_investment_asset` varchar(255) DEFAULT NULL,
  `long_term_client_percentage` varchar(255) DEFAULT NULL,
  `long_term_partner_percentage` varchar(255) DEFAULT NULL,
  `long_term_market_value` varchar(255) DEFAULT NULL,
  `long_term_client` varchar(255) DEFAULT NULL,
  `long_term_partner` varchar(255) DEFAULT NULL,
  `superannuation_client_net` varchar(255) DEFAULT NULL,
  `superannuation_client_client_percentage` varchar(255) DEFAULT NULL,
  `superannuation_client_partner_percentage` varchar(255) DEFAULT NULL,
  `superannuation_client_market_value` varchar(255) DEFAULT NULL,
  `superannuation_client_client` varchar(255) DEFAULT NULL,
  `superannuation_client_partner` varchar(255) DEFAULT NULL,
  `superannuation_partner_net` varchar(255) DEFAULT NULL,
  `superannuation_partner_client_percentage` varchar(255) DEFAULT NULL,
  `superannuation_partner_parnter_percentage` varchar(255) DEFAULT NULL,
  `superannuation_partner_market_value` varchar(255) DEFAULT NULL,
  `superannuation_partner_client` varchar(255) DEFAULT NULL,
  `superannuation_partner_partner` varchar(255) DEFAULT NULL,
  `shares_fund` varchar(255) DEFAULT NULL,
  `shares_fund_client_percentage` varchar(255) DEFAULT NULL,
  `shares_fund_partner_percentage` varchar(255) DEFAULT NULL,
  `shares_fund_market_value` varchar(255) DEFAULT NULL,
  `shares_fund_client` varchar(255) DEFAULT NULL,
  `shares_fund_partner` varchar(255) DEFAULT NULL,
  `business` varchar(255) DEFAULT NULL,
  `business_client_percentage` varchar(255) DEFAULT NULL,
  `business_partner_percentage` varchar(255) DEFAULT NULL,
  `business_market_value` varchar(255) DEFAULT NULL,
  `business_client` varchar(255) DEFAULT NULL,
  `business_partner` varchar(255) DEFAULT NULL,
  `total_investment_asset_market_value` varchar(255) DEFAULT NULL,
  `total_investment_asset_client` varchar(255) DEFAULT NULL,
  `total_investment_asset_partner` varchar(255) DEFAULT NULL,
  `total_asset_market_value` varchar(255) DEFAULT NULL,
  `total_asset_client` varchar(255) DEFAULT NULL,
  `total_asset_partner` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) DEFAULT NULL,
  `date_encoded` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment__assets`
--

INSERT INTO `investment__assets` (`details_id`, `long_term_investment_asset`, `long_term_client_percentage`, `long_term_partner_percentage`, `long_term_market_value`, `long_term_client`, `long_term_partner`, `superannuation_client_net`, `superannuation_client_client_percentage`, `superannuation_client_partner_percentage`, `superannuation_client_market_value`, `superannuation_client_client`, `superannuation_client_partner`, `superannuation_partner_net`, `superannuation_partner_client_percentage`, `superannuation_partner_parnter_percentage`, `superannuation_partner_market_value`, `superannuation_partner_client`, `superannuation_partner_partner`, `shares_fund`, `shares_fund_client_percentage`, `shares_fund_partner_percentage`, `shares_fund_market_value`, `shares_fund_client`, `shares_fund_partner`, `business`, `business_client_percentage`, `business_partner_percentage`, `business_market_value`, `business_client`, `business_partner`, `total_investment_asset_market_value`, `total_investment_asset_client`, `total_investment_asset_partner`, `total_asset_market_value`, `total_asset_client`, `total_asset_partner`, `encoded_by`, `date_encoded`, `created_at`, `updated_at`) VALUES
('eVMkkUXnpt', 'partner', '50', '50', '50', '50', '50', 'partner', NULL, '150', '150', '150', '150', 'joint', '200', '200', '200', '200', '200', 'Other', '250', '250', '250', '250', '250', 'client', '300', '300', '300', '300', '300', '1000', '1000', '1000', '2000', '2000', '2000', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_07_09_224457_create_personal_details_table', 2),
(5, '2026_07_09_235157_create_personal_details_table', 3),
(6, '2026_07_10_045749_personaldetails', 4),
(7, '2026_07_10_050218_create_personal_details_table', 5),
(8, '2026_07_10_052532_create_personal_details_table', 6),
(9, '2026_07_10_063234_create_personal_details_table', 7),
(10, '2026_07_13_013914_create_financial_independences_table', 8),
(11, '2026_07_14_051708_create_user_table', 9),
(12, '2026_07_14_052102_create_user_table', 10),
(13, '2026_07_14_054950_create_user_table', 11),
(14, '2026_07_14_233835_create_personal_details', 12),
(15, '2026_07_14_233943_create_financail_independence', 12),
(16, '2026_07_16_012137_create_investment_asset', 13),
(17, '2026_07_17_000440_create_income', 14),
(18, '2026_07_17_010619_create_personal_details', 15),
(19, '2026_07_17_010707_create_financial_independences', 15),
(20, '2026_07_17_010731_create_investment_asset', 16),
(21, '2026_07_17_010756_create_income', 16),
(22, '2026_07_17_011522_create_income', 17),
(23, '2026_07_17_013337_create_investment_asset', 18),
(24, '2026_07_28_025848_create_superannuation', 19),
(25, '2026_07_28_031711_create_superannuation', 20),
(26, '2026_07_28_032346_create_superannuation', 21),
(27, '2026_07_29_004506_create_noninvestment', 22),
(28, '2026_07_29_005051_create_non_investment', 23),
(29, '2026_07_29_011610_create_other__personal__assets__non__invesmtments_table', 24),
(30, '2026_07_29_014353_create_non__investment__assets_table', 25),
(31, '2026_07_29_014728_create_superannuation', 25),
(32, '2026_07_29_015657_create_non_invesment_assets', 26),
(33, '2026_07_29_224311_create_non_invest_assets', 27),
(34, '2026_07_29_224655_create_investment_property_asset', 28),
(35, '2026_07_29_232825_create_investment__assets_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `non__investment__assets`
--

CREATE TABLE `non__investment__assets` (
  `details_id` varchar(255) NOT NULL,
  `principle_residence` varchar(255) DEFAULT NULL,
  `principle_client_percentage` varchar(255) DEFAULT NULL,
  `principle_partner_percentage` varchar(255) DEFAULT NULL,
  `principle_market_value` varchar(255) DEFAULT NULL,
  `principle_client` varchar(255) DEFAULT NULL,
  `principle_partner` varchar(255) DEFAULT NULL,
  `cash_everyday` varchar(255) DEFAULT NULL,
  `cash_client_percentage` varchar(255) DEFAULT NULL,
  `cash_partner_percentage` varchar(255) DEFAULT NULL,
  `cash_market_value` varchar(255) DEFAULT NULL,
  `cash_client` varchar(255) DEFAULT NULL,
  `cash_partner` varchar(255) DEFAULT NULL,
  `total_market_value` varchar(255) DEFAULT NULL,
  `total_client` varchar(255) DEFAULT NULL,
  `total_partner` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) NOT NULL,
  `date_encoded` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `non__investment__assets`
--

INSERT INTO `non__investment__assets` (`details_id`, `principle_residence`, `principle_client_percentage`, `principle_partner_percentage`, `principle_market_value`, `principle_client`, `principle_partner`, `cash_everyday`, `cash_client_percentage`, `cash_partner_percentage`, `cash_market_value`, `cash_client`, `cash_partner`, `total_market_value`, `total_client`, `total_partner`, `encoded_by`, `date_encoded`, `created_at`, `updated_at`) VALUES
('eVMkkUXnpt', 'Partner', '50', '50', '50', '50', '50', 'Client', '60', '60', '60', '60', '60', '90', '90', '90', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44'),
('kJmWMXdtWo', 'Client', '60', '60', '60', '60', '60', 'joint', '50', '50', '50', '50', '50', NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:00:23', '2026-07-29 15:00:23'),
('TCFCGKJxAs', 'Partner', '90', '90', '90', '90', '90', 'joint', '90', '90', '90', '90', '90', '200', '200', '200', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:05:33', '2026-07-29 15:07:39'),
('vxzoexxvQb', 'Partner', '90', '90', '90', '90', '90', 'joint', '90', '90', '90', '90', '90', NULL, NULL, NULL, 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:03:57', '2026-07-29 15:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `other__personal__assets__non__invesmtments`
--

CREATE TABLE `other__personal__assets__non__invesmtments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details_id` varchar(255) NOT NULL,
  `other_personal_asset` varchar(255) DEFAULT NULL,
  `non_investment_asset_client_percentage` varchar(255) DEFAULT NULL,
  `non_investment_asset_partner_percentage` varchar(255) DEFAULT NULL,
  `non_investment_asset_market_value` varchar(255) DEFAULT NULL,
  `non_investment_asset_client` varchar(255) DEFAULT NULL,
  `non_investment_asset_partner` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) NOT NULL,
  `date_encoded` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other__personal__assets__non__invesmtments`
--

INSERT INTO `other__personal__assets__non__invesmtments` (`id`, `details_id`, `other_personal_asset`, `non_investment_asset_client_percentage`, `non_investment_asset_partner_percentage`, `non_investment_asset_market_value`, `non_investment_asset_client`, `non_investment_asset_partner`, `encoded_by`, `date_encoded`, `created_at`, `updated_at`) VALUES
(1, 'zaMOEdVkmC', 'partner', '60', '60', '60', '60', '60', 'Genjie Aventurado', '2026-07-29', '2026-07-28 17:25:59', '2026-07-28 17:25:59'),
(2, 'zaMOEdVkmC', 'Joint', '50', '50', '50', '50', '50', 'Genjie Aventurado', '2026-07-29', '2026-07-28 17:25:59', '2026-07-28 17:25:59'),
(3, 'mmfjfmDLJS', 'partner', '80', '80', '80', '80', '80', 'Genjie Aventurado', '2026-07-29', '2026-07-28 18:44:21', '2026-07-28 19:04:58'),
(4, 'mmfjfmDLJS', 'Joint', '90', '90', '90', '90', '90', 'Genjie Aventurado', '2026-07-29', '2026-07-28 18:44:21', '2026-07-28 19:04:58'),
(5, 'kJmWMXdtWo', 'partner', '30', '30', '30', '30', '30', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:00:23', '2026-07-29 15:00:23'),
(6, 'kJmWMXdtWo', 'Owner', '80', '80', '80', '80', '80', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:00:23', '2026-07-29 15:00:23'),
(7, 'vxzoexxvQb', 'client', '90', '90', '90', '90', '90', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:03:57', '2026-07-29 15:03:57'),
(8, 'vxzoexxvQb', 'Joint', '90', '90', '90', '90', '90', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:03:57', '2026-07-29 15:03:57'),
(9, 'TCFCGKJxAs', 'client', '90', '90', '90', '90', '90', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:05:33', '2026-07-29 15:07:39'),
(10, 'TCFCGKJxAs', 'Joint', '90', '90', '90', '90', '90', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:05:33', '2026-07-29 15:07:39'),
(11, 'eVMkkUXnpt', 'Owner', '70', '70', '70', '70', '70', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44'),
(12, 'eVMkkUXnpt', 'Joint', '80', '80', '80', '80', '80', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `details_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `phone_home` varchar(255) NOT NULL,
  `phone_mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age_client` int(11) NOT NULL,
  `age_partner` int(11) NOT NULL,
  `age_average` int(11) NOT NULL,
  `amount_per_week` varchar(255) NOT NULL,
  `initial_appointment_date` date NOT NULL,
  `desired_retirement_age` varchar(255) NOT NULL,
  `in_seven_years` varchar(255) NOT NULL,
  `in_fourteen_years` varchar(255) NOT NULL,
  `in_twenty_one_years` varchar(255) NOT NULL,
  `encoded_by` varchar(255) NOT NULL,
  `date_encoded` date NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`details_id`, `name`, `residential_address`, `phone_home`, `phone_mobile`, `email`, `age_client`, `age_partner`, `age_average`, `amount_per_week`, `initial_appointment_date`, `desired_retirement_age`, `in_seven_years`, `in_fourteen_years`, `in_twenty_one_years`, `encoded_by`, `date_encoded`, `remember_token`, `created_at`, `updated_at`) VALUES
('eVMkkUXnpt', 'Kleto Ralph Salvo', 'test', 'test', 'test', 'test', 38, 40, 40, '32132', '2026-07-30', '07/30/2051', '07/30/2033', '07/30/2040', '07/30/2047', 'Genjie Aventurado', '2026-07-30', NULL, '2026-07-29 17:06:39', '2026-07-29 18:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `superannuation`
--

CREATE TABLE `superannuation` (
  `details_id` varchar(255) NOT NULL,
  `gross_salary` varchar(255) DEFAULT NULL,
  `sg_rate` varchar(255) DEFAULT NULL,
  `annual_contribution` varchar(255) DEFAULT NULL,
  `quarterly_contribution` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) DEFAULT NULL,
  `date_encoded` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `superannuation`
--

INSERT INTO `superannuation` (`details_id`, `gross_salary`, `sg_rate`, `annual_contribution`, `quarterly_contribution`, `encoded_by`, `date_encoded`, `created_at`, `updated_at`) VALUES
('AaEqqDHxLb', '321', '3215', '321', '321', 'Genjie Aventurado', '2026-07-29', '2026-07-28 17:58:01', '2026-07-28 17:58:01'),
('eVMkkUXnpt', '100000', '100', '5000', '5000', 'Genjie Aventurado', '2026-07-30', '2026-07-29 17:06:39', '2026-07-29 18:00:44'),
('kJmWMXdtWo', '10000', '100', '10000', '10000', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:00:23', '2026-07-29 15:00:23'),
('mmfjfmDLJS', '100000', '9.5', '9500', '2375', 'Genjie Aventurado', '2026-07-29', '2026-07-28 18:44:21', '2026-07-28 19:04:58'),
('TCFCGKJxAs', '321', '100', '200', '200', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:05:33', '2026-07-29 15:07:39'),
('vxzoexxvQb', '321', '100', '200', '200', 'Genjie Aventurado', '2026-07-29', '2026-07-29 15:03:57', '2026-07-29 15:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_id`, `email`, `status`, `role_name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ralph Salvo', 'sip-6a55ce3b8044a', 'salvokletoralph@gmail.com', 'Active', 'User', 'ralph', '$2y$12$PIRW1sh3pn.LDV4RDFFPoep2dYg8TEEhbpt9koCt7E2UT8qfF8LyW', NULL, '2026-07-13 21:50:51', '2026-07-13 21:50:51'),
(2, 'Kleto Ralph Salvo', 'sip-6a55cecf42da5', 'ralph.s@bruntwork.co', 'Active', 'User', 'kletoralph', '$2y$12$6HpbuJDOW/gicjoD2nPM.uM8bb/0uroQTFEKG4fYtikIBojYgTsLO', NULL, '2026-07-13 21:53:19', '2026-07-13 21:53:19'),
(3, 'Genjie Aventurado', 'sip-6a55cf09c7dc5', 'genjie@gmail.com', 'Active', 'User', 'genjie', '$2y$12$bZ/ZSKIiuzOJGe//pT.5B.y7wqmHrTA5HAZbL/JgmLWmrvhNXz4fm', NULL, '2026-07-13 21:54:18', '2026-07-13 21:54:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `display_homes`
--
ALTER TABLE `display_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `display_home_locations`
--
ALTER TABLE `display_home_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dis_homes`
--
ALTER TABLE `dis_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duplex_plan_option_uniot`
--
ALTER TABLE `duplex_plan_option_uniot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `financial_independences`
--
ALTER TABLE `financial_independences`
  ADD UNIQUE KEY `financial_independences_details_id_unique` (`details_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD UNIQUE KEY `income_details_id_unique` (`details_id`);

--
-- Indexes for table `investment_property_asset`
--
ALTER TABLE `investment_property_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investment__assets`
--
ALTER TABLE `investment__assets`
  ADD UNIQUE KEY `investment__assets_details_id_unique` (`details_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non__investment__assets`
--
ALTER TABLE `non__investment__assets`
  ADD UNIQUE KEY `non__investment__assets_details_id_unique` (`details_id`);

--
-- Indexes for table `other__personal__assets__non__invesmtments`
--
ALTER TABLE `other__personal__assets__non__invesmtments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD UNIQUE KEY `personal_details_details_id_unique` (`details_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `superannuation`
--
ALTER TABLE `superannuation`
  ADD UNIQUE KEY `superannuation_details_id_unique` (`details_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `display_homes`
--
ALTER TABLE `display_homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `display_home_locations`
--
ALTER TABLE `display_home_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dis_homes`
--
ALTER TABLE `dis_homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `duplex_plan_option_uniot`
--
ALTER TABLE `duplex_plan_option_uniot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investment_property_asset`
--
ALTER TABLE `investment_property_asset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `other__personal__assets__non__invesmtments`
--
ALTER TABLE `other__personal__assets__non__invesmtments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
