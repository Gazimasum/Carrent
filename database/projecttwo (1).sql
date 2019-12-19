-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 07:33 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecttwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gazi Masum', 'gazimasum42@gmail.com', NULL, '$2y$10$fPqLXEkEnWIohcvH2xQj9OthZ7ZnAJbQl1u5vP0FHL6T79HE4YWb2', 'AGJChXgC4IsQzImU4ChQCEBTlc2eFI6IM7xDvEVbt8hkJvmVb3oUkZuY3vJf', '2019-11-27 10:06:52', '2019-12-19 06:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `text`, `image`, `status`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'FIND THE RIGHT CAR FOR YOU.', 'We have more than a thousand cars for you to choose.', '1576777943.jpg', 1, 'Read More', 'http://localhost:8000/', '2019-12-19 11:52:25', '2019-12-19 12:12:47'),
(2, 'FIND THE RIGHT CAR FOR YOU.', 'We have more than a thousand cars for you to choose.', '1576778872.jpg', 0, 'Read More', 'http://localhost:8000/', '2019-12-19 12:07:52', '2019-12-19 12:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `useremail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Nissan', '2019-11-30 08:17:47', '2019-11-30 08:17:47'),
(3, 'Hyundai', '2019-12-19 10:31:11', '2019-12-19 10:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'your@email.com\r\n', 'address', '+0000000', '2019-11-26 18:00:00', '2019-11-26 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mainimages`
--

CREATE TABLE `mainimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mainimages`
--

INSERT INTO `mainimages` (`id`, `vehicle_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1576764810.png', '2019-12-05 11:55:07', '2019-12-19 08:13:30'),
(2, 2, '1576773693.jpeg', '2019-12-19 08:11:08', '2019-12-19 10:41:34'),
(3, 3, '1576766241.jpg', '2019-12-19 08:37:21', '2019-12-19 08:37:21'),
(4, 4, '1576773211.webp', '2019-12-19 10:33:31', '2019-12-19 10:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=unseen|1=Seen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'gazi', 'gazimasum42@gmail.com', '01838079000', 'asdf asdf asdf', 1, '2019-11-27 14:36:05', '2019-11-27 14:36:31'),
(2, 'gazi', 'gazimasum42@gmail.com', '01838079000', 'jgj', 1, '2019-12-19 06:20:58', '2019-12-19 06:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_26_172834_create_admins_table', 1),
(7, '2019_10_27_130047_create_brands_table', 1),
(8, '2019_10_27_130130_create_contacts_table', 1),
(9, '2019_10_30_181238_create_vimages_table', 1),
(10, '2019_10_31_164809_create_testimonials_table', 1),
(11, '2019_10_31_174741_create_pagescontents_table', 1),
(12, '2019_11_22_163115_create_messages_table', 1),
(13, '2019_11_27_154655_create_mainimages_table', 1),
(15, '2019_10_27_130028_create_bookings_table', 3),
(18, '2019_10_27_125856_create_vehicles_table', 4),
(20, '2019_12_19_165051_create_banners_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pagescontents`
--

CREATE TABLE `pagescontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pagesname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `types` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagescontents`
--

INSERT INTO `pagescontents` (`id`, `pagesname`, `types`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Terms and Conditions', 'terms', 'This website is operated by Rent-A-Car Service, Inc. (“the Company”).\r\nPlease read and agree to the following before using this website.\r\n\r\nBrowser settings\r\nThe following settings are required to ensure ease of use of this website (in particular the Internet reservation feature). Please confirm settings before use.\r\n\r\n・Browser version\r\n\r\nThis website may not operate correctly on older browser versions (for example, IE7.0 and below). Please update to the newest version using Windows Update or other methods.\r\n\r\n・Cookies and JavaScript\r\n\r\nEnable cookies and JavaScript in your browser settings. Check settings in Internet Options (Advanced Settings), and enable those settings if they are disabled.\r\n\r\n・Pop-up blockers\r\n\r\nIf a pop-up blocker is enabled in your browser settings, pages utilizing pop-ups will be blocked. Please disable pop-up blockers before use.\r\n\r\nPlugins\r\nAdobe Flash Player is required for some portions of this website. To ensure ease of use, please install and configure Adobe Flash Player if necessary.\r\nAdobe Flash Player download site', NULL, '2019-12-19 06:40:42'),
(2, 'Privacy Policy', 'privacy', 'At Nippon Rent-A-Car we consider protecting our customers\' personal information to be one of our most important duties. When handling customers\' personal information we adhere to the following policy. Additionally, we do no collect, store, use or share a customer’s Individual Number.', NULL, '2019-12-19 06:38:08'),
(3, 'About Us ', 'aboutus', 'We are ... Rent-A-Car. Founded in 2019, ...Rent-A-Car is (Countryname) most distinguished rental car company.\r\nWe provide customers with approximately 850 locations and 42,000 vehicles throughout (Countryname).\r\nAs we are not affiliated with any specific automaker, we are able to provide a variety of vehicle makes and models for customers to rent.\r\nRather than let vehicles age, we also replace our most popular passenger vehicles every few years.\r\nReplacing used vehicles eliminates uncomfortable wear and tear, and reduces the risk of breakdown and other inconveniences to our customers.\r\nThe most trusted name in vehicle rentals.', NULL, '2019-12-19 06:35:15'),
(4, 'FAQs ', 'faqs', 'Have a question about your car rental? Browse the most commonly asked topics/questions below and make the most of your trip!', NULL, '2019-12-19 06:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `useremail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `username`, `useremail`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'gazii', 'gazii', 'Nice', 1, '2019-12-05 13:14:36', '2019-12-19 06:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=Inactive|1=Active|2=Ban',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `email`, `phone_no`, `email_verified_at`, `password`, `country`, `street_address`, `city`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gazi', '1997-09-14', 'gazimasum42@gmail.com', '01838079000', NULL, '$2y$10$XdkMJJBo.ScSuwgjGm8zIeOTl/tbhawUxVplIK.bE8d.EV7zWis.C', 'Bangladesh', NULL, NULL, 1, 'vwxagViTDmkPJcmJtlm31gYTPdM72jm0laJo58w95JXFyr9PY2Gr6S8viUT3', '2019-11-30 10:57:53', '2019-12-19 06:09:12'),
(2, 'gazii', '1998-07-14', 'laraveltesting42@gmail.com', '01838079001', NULL, '$2y$10$pUJhlygAog2MYe275oJhq.6gDlvTywCmhj2FdzEN50nmO69A/sSXe', 'Bangladesh', NULL, NULL, 1, '5HfncMve8drXkLeaJT0lR0NKKY0IfZ7WxHbuuAvm8pPOdj2JOhOpJNjcEIL8', '2019-12-05 13:02:01', '2019-12-05 13:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `VehiclesTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VehiclesBrand` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VehiclesOverview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PricePerDay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FuelType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModelYear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeatingCapacity` int(11) NOT NULL DEFAULT 0,
  `AirConditioner` int(11) NOT NULL DEFAULT 0,
  `PowerDoorLocks` int(11) NOT NULL DEFAULT 0,
  `AntiLockBrakingSystem` int(11) NOT NULL DEFAULT 0,
  `BrakeAssist` int(11) NOT NULL DEFAULT 0,
  `PowerSteering` int(11) NOT NULL DEFAULT 0,
  `DriverAirbag` int(11) NOT NULL DEFAULT 0,
  `PassengerAirbag` int(11) NOT NULL DEFAULT 0,
  `PowerWindows` int(11) NOT NULL DEFAULT 0,
  `CDPlayer` int(11) NOT NULL DEFAULT 0,
  `CentralLocking` int(11) NOT NULL DEFAULT 0,
  `CrashSensor` int(11) NOT NULL DEFAULT 0,
  `LeatherSeats` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `slug`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `created_at`, `updated_at`) VALUES
(1, 'Mitsubishi Pajero', 2, 'mitsubishi-pajero', 'Mitsubishi’s advanced control technologies were first conceived and developed to meet the challenges of the world’s most gruelling rally courses. AWC (All Wheel Control) incorporates many of these rally-proven technologies to deliver precise traction, power and slip control for each wheel independently to ensure complete driver control in extreme conditions.', '15', 'Diesel', '2018', 4, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, '2019-12-05 11:55:06', '2019-12-19 10:26:38'),
(2, 'Nissan X-Trail', 2, 'nissan-x-trail', 'Previously a boxy, quite serious off-roader, the Nissan X-Trail is now essentially a beefed-up Qashqai. The pair share a platform, but the X-Trail is noticeably higher and longer than the Qashqai, and there’s an optional third row of seats. This means it effectively replaces the Qashqai+2 as Nissan’s seven-seat SUV. Add to that the option of four-wheel-drive and what you get is a full-size, family-orientated SUV that’s happy to get its shoes muddy if the need arises. \r\n\r\nAnd like the Qashqai, it’s just been facelifted. There are no drivetrain upgrades to speak of, which means the biggest change is the new front-end, which incorporates Nissan’s ‘V-motion’ grille (as seen on the new Qashqai and Micra) and new headlights. In more expensive X-Trails these are LED. The rear-end has been redesigned too, though the effect is less transformative back there. Changes to the interior are essentially limited to a new, thicker steering-wheel and the use of nicer-feeling materials throughout. \r\n\r\nNissan prides itself on tech, so naturally there’s much of it on offer. Big news here is that next year, the X-Trail will be offered with Nissan’s ProPilot autonomous driving tech that controls the “steering, acceleration and braking in a single lane on highways during heavy traffic congestion and high-speed cruising”. New tech available now includes rear cross-traffic alert (warns you if there’s a car coming when you’re reversing out of a parking space) and upgraded autonomous emergency braking. \r\n\r\nThe engine range is carried over unchanged. There’s a 128bhp 1.6-litre dCi diesel and 161bhp 1.6-litre DIG-T petrol, but pick of the range is the 175bhp 2.0-litre dCi. It’s available with two- or four-wheel drive and six-speed manual or CVT automatic transmissions. \r\n\r\nOh, and if you have dogs, the X-Trail is very good for housing those in comfort too. But you’re not a dog, you’re a human. So what’s the X-Trail like to drive, sit in and run? Keep clicking to read on.', '33', 'Diesel', '2019', 7, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, '2019-12-19 08:11:06', '2019-12-19 08:11:06'),
(3, 'Nissan kicks', 2, 'nissan-kicks', 'The 2018 Nissan Kicks is a brand-new vehicle, and among the latest crop of affordable, fresh-faced subcompact crossover SUVs. The de facto replacement for the oddball Juke, the Kicks is a far more appealing gateway into Nissan’s SUV lineup. Starting under $19,000 and rising only a few thousand beyond that, the new Nissan Kicks is a standout value even among high-value rivals like the Honda HR-V, Hyundai Kona and Chevrolet Trax. Unlike those competitors, the Kicks doesn’t offer all-wheel drive, nor is it all that powerful. But the Kicks is surprisingly comfortable for its size and boasts a class-leading 36 mpg on the highway. Throw in impressive standard safety features, and the Kicks is a smart choice for youthful drivers or as a city runabout.', '10', 'Diesel', '2018', 4, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, '2019-12-19 08:37:20', '2019-12-19 10:26:26'),
(4, 'Hyundai Creta', 3, 'hyundai-creta', 'Hyundai has silently introduced the 1.6-litre diesel engine in the base E+ and EX variants. The Korean brand is yet to announce the price but expect a premium of around Rs 60,000 in comparison to the same variants with a 1.4-litre diesel engine.', '15', 'Diesel', '2019', 4, 1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, '2019-12-19 10:33:31', '2019-12-19 10:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `vimages`
--

CREATE TABLE `vimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vimages`
--

INSERT INTO `vimages` (`id`, `vehicle_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1576764955.jpg', '2019-12-05 11:55:07', '2019-12-19 08:15:55'),
(2, 1, '1576765007.jpg', '2019-12-05 11:55:07', '2019-12-19 08:16:47'),
(3, 1, '1576765084.jpg', '2019-12-05 11:55:07', '2019-12-19 08:18:05'),
(4, 1, '1576765051.jpg', '2019-12-05 11:55:07', '2019-12-19 08:17:31'),
(5, 2, '1576764668.17tdieulhd-xtrailhelios008.jpg.ximg.l_full_m.smart.jpg', '2019-12-19 08:11:08', '2019-12-19 08:11:08'),
(6, 2, '1576764668.2018-nissan-x-trail-interior-1024x512.jpg', '2019-12-19 08:11:08', '2019-12-19 08:11:08'),
(7, 2, '1576764668.Nissan xtrall.jpg', '2019-12-19 08:11:08', '2019-12-19 08:11:08'),
(8, 2, '1576764669.xtrail.jpeg', '2019-12-19 08:11:09', '2019-12-19 08:11:09'),
(9, 3, '1576766241.maxresdefault (1).jpg', '2019-12-19 08:37:21', '2019-12-19 08:37:21'),
(10, 3, '1576766241.maxresdefault.jpg', '2019-12-19 08:37:21', '2019-12-19 08:37:21'),
(11, 3, '1576766242.pwjczm8b7qQLgg21PbC4-o.jpg', '2019-12-19 08:37:22', '2019-12-19 08:37:22'),
(12, 3, '1576772317.jpg', '2019-12-19 10:18:38', '2019-12-19 10:18:38'),
(13, 4, '1576773211.creta_647_072115021915.webp', '2019-12-19 10:33:31', '2019-12-19 10:33:31'),
(14, 4, '1576773212.Hyundai crata.jpg', '2019-12-19 10:33:32', '2019-12-19 10:33:32'),
(15, 4, '1576773212.Hyundai crataseat.jpg', '2019-12-19 10:33:32', '2019-12-19 10:33:32'),
(16, 4, '1576773212.rBVaSFucrhWALbCAAAKgxwvQKTc662.jpg', '2019-12-19 10:33:32', '2019-12-19 10:33:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_index` (`user_id`),
  ADD KEY `bookings_vehicle_id_index` (`vehicle_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainimages`
--
ALTER TABLE `mainimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mainimages_vehicle_id_index` (`vehicle_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagescontents`
--
ALTER TABLE `pagescontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_vehiclesbrand_foreign` (`VehiclesBrand`);

--
-- Indexes for table `vimages`
--
ALTER TABLE `vimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vimages_vehicle_id_index` (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainimages`
--
ALTER TABLE `mainimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pagescontents`
--
ALTER TABLE `pagescontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vimages`
--
ALTER TABLE `vimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mainimages`
--
ALTER TABLE `mainimages`
  ADD CONSTRAINT `mainimages_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_vehiclesbrand_foreign` FOREIGN KEY (`VehiclesBrand`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vimages`
--
ALTER TABLE `vimages`
  ADD CONSTRAINT `vimages_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
