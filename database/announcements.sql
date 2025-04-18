-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2025 at 01:21 AM
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
-- Database: `mbpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `topic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) DEFAULT '#0',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `topic`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HappinessDay', 'upload/1711067624/IMG_5079.jpeg', 1, '2024-03-22 00:33:44', '2024-03-22 00:33:44'),
(2, 'International Forestry, Poetry & Water Day', 'upload/1711194903/News on International Forestry, Poetry & Water Day (1).pdf', 1, '2024-03-23 11:55:03', '2024-03-23 11:55:03'),
(3, 'private student news', 'upload/1713431696/WhatsApp Image 2024-04-18 at 2.01.37 PM.jpeg', 1, '2024-04-18 09:14:56', '2024-04-18 09:14:56'),
(4, '\0commencement of sem -II classes', 'upload/1713431828/WhatsApp Image 2024-04-17 at 9.12.15 AM.jpeg', 1, '2024-04-18 09:17:08', '2024-04-18 09:17:08'),
(7, '\0Notice of Hardware and Networking Classes', 'upload/1719819568/Notice Hardware & nETWORKING.pdf', 1, '2024-07-01 07:39:28', '2024-07-01 07:39:28'),
(8, 'B.Sc. II Semester and B.Sc. B.Ed. II Semester Unit Test Notice', 'upload/1719895581/WhatsApp Image 2024-07-02 at 09.23.04 (1).jpeg', 1, '2024-07-02 04:46:21', '2024-07-02 04:46:21'),
(9, 'B.A. II Semester and B.A. B.Ed. II Semester Mid-Term Exam Notice', 'upload/1719993140/WhatsApp Image 2024-07-03 at 09.17.45.jpeg', 1, '2024-07-03 07:52:20', '2024-07-03 07:52:20'),
(10, '\0Online Campus Interview', 'upload/1720163350/Online Campus Interview.jpeg', 1, '2024-07-05 07:09:10', '2024-07-05 07:09:10'),
(11, '\0Bonsai Cultivation Notice', 'upload/1720421180/Bonsai Cultivation  Notice.jpeg', 1, '2024-07-08 06:46:20', '2024-07-08 06:46:20'),
(12, 'Hardware& Networking Class Starting Notice', 'upload/1720601916/Hardware& Networking Class Starting Notice.jpeg', 1, '2024-07-10 08:58:36', '2024-07-10 08:58:36'),
(15, 'Instruction for B.A. B.Ed. & B.Sc. B.Ed.', 'upload/1721462564/Instruction for B.A. B.Ed. & B.Sc. B.Ed..jpeg', 1, '2024-07-20 08:02:44', '2024-07-20 08:02:44'),
(16, '\0Regular Classes of B.A & B.Sc', 'upload/1722331893/1.png', 1, '2024-07-30 09:31:33', '2024-07-30 09:31:33'),
(17, 'Regular Classes of BCA', 'upload/1722331912/2.png', 1, '2024-07-30 09:31:52', '2024-07-30 09:31:52'),
(18, '\0Orientation Program for B.A B.Ed and B.Sc B.Ed Pupil Teachers', 'upload/1722405875/Orientation-Program-Notice.pdf', 1, '2024-07-31 06:04:35', '2024-12-24 04:07:15'),
(19, '\0National Mental Health Awareness Day Notice', 'upload/1722845635/WhatsApp Image 2024-08-05 at 13.38.51.jpeg', 1, '2024-08-05 08:13:55', '2024-08-05 08:13:55'),
(20, '\0Rovers and Rangers Orientation Program Notice', 'upload/1722930137/WhatsApp Image 2024-08-06 at 12.56.53.jpeg', 1, '2024-08-06 07:42:17', '2024-08-06 07:42:17'),
(21, 'Annual Research Meet', 'upload/1723530447/WhatsApp Image 2024-08-13 at 11.33.10_21b1c973.jpg', 1, '2024-08-13 06:27:27', '2024-08-13 06:27:27'),
(23, '\0Sports Calendar of University of Kota 2024-25', 'upload/1724476006/Inter College Sports Calander 2024-25.pdf', 1, '2024-08-24 05:06:46', '2024-08-24 05:06:46'),
(24, '\0Qualifying paper for electing English literature in UG Ist sem.', 'upload/1724650083/WhatsApp Image 2024-08-26 at 10.40.18.jpeg', 1, '2024-08-26 05:28:03', '2024-08-26 05:28:03'),
(25, 'Organization of National Sports Week', 'upload/1724650630/WhatsApp Image 2024-08-26 at 10.58.33_db541f95.jpg', 1, '2024-08-26 05:37:10', '2024-08-26 05:37:10'),
(26, 'International Sports Day 29 August Sports Week', 'upload/1724651104/antarrastrikhel.pdf', 1, '2024-08-26 05:45:04', '2024-08-26 05:45:46'),
(27, '\0Women\'s Equality Day Notice', 'upload/1724778777/Women-Equality-Day-Notice.pdf', 1, '2024-08-27 17:12:57', '2024-08-27 17:12:57'),
(28, 'Cricket Trial Notification', 'upload/1728466576/sports-notification.jpg', 1, '2024-10-09 09:36:16', '2024-10-09 09:36:16'),
(29, '\0Apprenticeship India 2024', 'upload/1729746444/IMG-20241024-WA0003.jpg', 1, '2024-10-24 05:07:24', '2024-10-24 05:07:24'),
(30, '\0bhashan pratiyogita and poster making pratiyogita', 'upload/1732512581/Competition Notice.jpeg', 1, '2024-11-25 05:29:41', '2024-11-25 05:29:41'),
(32, 'खेलकूद प्रतियोगियता एवं सांस्कृतिक कार्यक्रम - I', 'upload/1735013966/WhatsApp Image 2024-12-11 at 12.52.59 PM.jpeg', 1, '2024-12-24 04:19:26', '2024-12-24 04:32:46'),
(33, 'खेलकूद प्रतियोगियता एवं सांस्कृतिक कार्यक्रम - II', 'upload/1735014828/WhatsApp Image 2024-12-13 at 9.59.24 AM.jpeg', 1, '2024-12-24 04:33:48', '2024-12-24 04:33:48'),
(34, 'Fresher Party Student Notice', 'upload/1735014957/WhatsApp Image 2024-12-16 at 12.19.13 PM.jpeg', 1, '2024-12-24 04:35:57', '2024-12-24 04:35:57'),
(35, 'राष्ट्रीय उपभोक्ता जागरूकता दिवस', 'upload/1735015211/WhatsApp Image 2024-12-17 at 12.51.15 PM.jpeg', 1, '2024-12-24 04:40:11', '2024-12-24 04:40:11'),
(36, 'Notice for Sports Competition', 'upload/1735015379/WhatsApp Image 2024-12-18 at 10.32.51 AM.jpeg', 1, '2024-12-24 04:42:59', '2024-12-24 04:42:59'),
(37, 'Winter Vacation 2024', 'upload/1735015517/WhatsApp Image 2024-12-23 at 12.18.18 PM.jpeg', 1, '2024-12-24 04:45:17', '2024-12-24 04:45:17'),
(38, 'Staff Notice for Exam Form filling', 'upload/1735015797/WhatsApp Image 2024-12-24 at 9.26.44 AM.jpeg', 1, '2024-12-24 04:49:57', '2024-12-24 04:50:16'),
(39, 'Umang 2025 - Cultural Fest', 'upload/1737010315/UMANG (3).pdf', 1, '2025-01-16 12:21:55', '2025-01-16 12:21:55'),
(40, 'Umang 2025 Coverage: Inter-College Fest Featured in News', 'upload/1737011235/news-coverage.pdf', 1, '2025-01-16 12:37:15', '2025-01-16 12:37:15'),
(41, 'Umang 2025 Activity Rules', 'upload/1737012964/umang-activity-rules.pdf', 1, '2025-01-16 13:06:04', '2025-01-16 13:06:04'),
(42, 'Diet & Nutrition - Women\'s Day Notice', 'upload/1741420042/women.jpg', 1, '2025-03-08 13:17:22', '2025-03-08 13:21:09'),
(43, 'Digital Detox - Women\'s Day Notice', 'upload/1741420094/women-cell.jpg', 1, '2025-03-08 13:18:14', '2025-03-08 13:21:00'),
(44, 'Kota University Semester Exam Time-Table - 2025', 'upload/1742453790/uok-semester-timetable.pdf', 1, '2025-03-20 12:26:30', '2025-03-20 12:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
