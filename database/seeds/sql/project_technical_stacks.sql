-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 15 2017 г., 12:56
-- Версия сервера: 5.6.34
-- Версия PHP: 5.3.10-1ubuntu3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bodev`
--

-- --------------------------------------------------------

--
-- Дамп данных таблицы `project_technical_stacks`
--

INSERT INTO `project_technical_stacks` (`project_id`, `tech_id`, `created_at`, `updated_at`, `id`) VALUES
(1, 1, '2017-01-17 04:34:26', '2017-01-17 04:34:26', 1),
(1, 2, '2017-01-17 04:34:33', '2017-01-17 04:34:33', 2),
(1, 3, '2017-02-17 09:15:06', '2017-02-17 09:15:06', 3),
(1, 4, '2017-02-17 09:15:13', '2017-02-17 09:15:13', 4),
(1, 5, '2017-02-17 15:29:39', '2017-02-17 15:29:39', 5),
(2, 1, '2017-02-18 05:08:01', '2017-02-18 05:08:01', 6),
(2, 2, '2017-02-18 05:08:13', '2017-02-18 05:08:13', 7),
(2, 3, '2017-02-18 05:08:28', '2017-02-18 05:08:28', 8),
(2, 4, '2017-02-18 05:08:43', '2017-02-18 05:08:43', 9),
(2, 7, '2017-02-18 05:09:01', '2017-02-18 05:09:01', 10),
(3, 1, '2017-02-18 06:29:47', '2017-02-18 06:29:47', 11),
(3, 2, '2017-02-18 06:30:07', '2017-02-18 06:30:07', 12),
(3, 3, '2017-02-18 06:30:29', '2017-02-18 06:30:29', 13),
(3, 7, '2017-02-18 06:30:45', '2017-02-18 06:30:45', 14),
(4, 1, '2017-02-18 07:05:25', '2017-02-18 07:05:25', 15),
(4, 2, '2017-02-18 07:05:39', '2017-02-18 07:05:39', 16),
(4, 3, '2017-02-18 07:05:50', '2017-02-18 07:05:50', 17),
(4, 4, '2017-02-18 07:06:02', '2017-02-18 07:06:02', 18),
(4, 5, '2017-02-18 07:06:20', '2017-02-18 07:06:20', 19),
(4, 7, '2017-02-18 07:06:34', '2017-02-18 07:06:34', 20),
(3, 4, '2017-02-18 07:06:53', '2017-02-18 07:06:53', 21),
(5, 1, '2017-02-18 08:50:16', '2017-02-18 08:50:16', 22),
(5, 2, '2017-02-18 08:50:32', '2017-02-18 08:50:32', 23),
(5, 5, '2017-02-18 08:50:47', '2017-02-18 08:50:47', 24),
(6, 1, '2017-02-18 10:17:00', '2017-02-18 10:17:00', 25),
(6, 2, '2017-02-18 10:17:12', '2017-02-18 10:17:12', 26),
(6, 3, '2017-02-18 10:17:28', '2017-02-18 10:17:28', 27),
(6, 4, '2017-02-18 10:17:48', '2017-02-18 10:17:48', 28),
(6, 5, '2017-02-18 10:18:06', '2017-02-18 10:18:06', 29),
(6, 8, '2017-02-18 10:18:30', '2017-02-18 10:18:30', 30),
(7, 1, '2017-02-18 10:26:45', '2017-02-18 10:26:45', 31),
(7, 2, '2017-02-18 10:27:01', '2017-02-18 10:27:01', 32),
(7, 3, '2017-02-18 10:27:16', '2017-02-18 10:27:16', 33),
(7, 8, '2017-02-18 10:27:29', '2017-02-18 10:27:29', 34),
(7, 5, '2017-02-18 10:27:43', '2017-02-18 10:27:43', 35),
(7, 4, '2017-02-18 10:27:59', '2017-02-18 10:27:59', 36),
(8, 1, '2017-02-19 05:15:02', '2017-02-19 05:15:02', 37),
(8, 2, '2017-02-19 05:15:23', '2017-02-19 05:15:23', 38),
(8, 3, '2017-02-19 05:15:37', '2017-02-19 05:15:37', 39),
(8, 4, '2017-02-19 05:15:52', '2017-02-19 05:15:52', 40),
(8, 5, '2017-02-19 05:16:04', '2017-02-19 05:16:04', 41),
(8, 9, '2017-02-19 05:16:20', '2017-02-19 05:16:20', 42),
(10, 1, '2017-02-19 06:47:36', '2017-02-19 06:47:36', 43),
(10, 2, '2017-02-19 06:47:57', '2017-02-19 06:47:57', 44),
(10, 18, '2017-02-19 06:54:07', '2017-02-19 06:54:07', 45),
(10, 3, '2017-02-19 06:55:32', '2017-02-19 06:55:32', 46),
(10, 19, '2017-02-19 07:00:47', '2017-02-19 07:00:47', 47),
(10, 10, '2017-02-19 07:01:11', '2017-02-19 07:01:11', 48),
(10, 11, '2017-02-19 07:01:28', '2017-02-19 07:01:28', 49),
(10, 12, '2017-02-19 07:01:53', '2017-02-19 07:01:53', 50),
(10, 13, '2017-02-19 07:02:18', '2017-02-19 07:02:18', 51),
(10, 15, '2017-02-19 07:02:36', '2017-02-19 07:02:36', 52),
(10, 14, '2017-02-19 07:02:57', '2017-02-19 07:02:57', 53),
(10, 16, '2017-02-19 07:03:47', '2017-02-19 07:03:47', 54),
(10, 17, '2017-02-19 07:04:04', '2017-02-19 07:04:04', 55),
(11, 1, '2017-02-19 07:08:41', '2017-02-19 07:08:41', 56),
(11, 2, '2017-02-19 07:09:02', '2017-02-19 07:09:02', 57),
(12, 1, '2017-02-19 07:17:30', '2017-02-19 07:17:30', 58),
(12, 2, '2017-02-19 07:17:42', '2017-02-19 07:17:42', 59),
(12, 3, '2017-02-19 07:17:54', '2017-02-19 07:17:54', 60),
(12, 4, '2017-02-19 07:18:09', '2017-02-19 07:18:09', 61),
(12, 5, '2017-02-19 07:18:26', '2017-02-19 07:18:26', 62),
(12, 20, '2017-02-19 07:18:59', '2017-02-19 07:18:59', 63),
(13, 1, '2017-02-19 07:19:19', '2017-02-19 07:19:19', 64),
(13, 2, '2017-02-19 07:19:35', '2017-02-19 07:19:35', 65),
(13, 3, '2017-02-19 07:20:09', '2017-02-19 07:20:09', 67),
(13, 4, '2017-02-19 07:20:30', '2017-02-19 07:20:30', 68),
(13, 5, '2017-02-19 07:21:02', '2017-02-19 07:21:02', 69),
(13, 20, '2017-02-19 07:21:31', '2017-02-19 07:21:31', 70),
(10, 22, '2017-02-21 09:46:20', '2017-02-21 09:46:20', 71),
(10, 24, '2017-02-21 09:51:10', '2017-02-21 09:51:10', 72),
(10, 21, '2017-02-21 09:51:47', '2017-02-21 09:51:47', 73),
(14, 10, '2017-02-21 16:43:19', '2017-02-21 16:43:19', 74),
(14, 18, '2017-02-21 16:43:40', '2017-02-21 16:43:40', 75),
(14, 3, '2017-02-21 16:44:30', '2017-02-21 16:44:30', 77),
(14, 4, '2017-02-21 16:44:54', '2017-02-21 16:44:54', 78),
(14, 21, '2017-02-21 16:45:19', '2017-02-21 16:45:19', 79),
(14, 23, '2017-02-21 16:45:52', '2017-02-21 16:45:52', 80),
(14, 17, '2017-02-21 16:46:26', '2017-02-21 16:46:26', 81),
(14, 16, '2017-02-21 16:47:04', '2017-02-21 16:47:04', 83),
(15, 1, '2017-02-21 16:48:17', '2017-02-21 16:48:17', 84),
(15, 2, '2017-02-21 16:48:41', '2017-02-21 16:48:41', 85),
(15, 3, '2017-02-21 16:48:56', '2017-02-21 16:48:56', 86),
(15, 24, '2017-02-21 16:49:18', '2017-02-21 16:49:18', 87),
(15, 5, '2017-02-21 16:49:44', '2017-02-21 16:49:44', 88),
(15, 4, '2017-02-21 16:53:01', '2017-02-21 16:53:01', 89),
(15, 17, '2017-02-21 16:53:32', '2017-02-21 16:53:32', 90),
(15, 16, '2017-02-21 16:53:55', '2017-02-21 16:53:55', 91),
(16, 25, '2017-02-22 05:04:16', '2017-02-22 05:04:16', 92),
(16, 26, '2017-02-22 05:04:46', '2017-02-22 05:04:46', 93),
(16, 21, '2017-02-22 05:05:23', '2017-02-22 05:05:23', 94),
(17, 1, '2017-02-22 05:05:44', '2017-02-22 05:05:44', 95),
(17, 2, '2017-02-22 05:07:58', '2017-02-22 05:07:58', 96),
(17, 29, '2017-02-22 05:08:35', '2017-02-22 05:08:35', 97),
(17, 5, '2017-02-22 05:08:50', '2017-02-22 05:08:50', 98),
(17, 3, '2017-02-22 05:09:13', '2017-02-22 05:09:13', 99),
(17, 4, '2017-02-22 05:09:57', '2017-02-22 05:09:57', 100),
(17, 9, '2017-02-22 05:10:18', '2017-02-22 05:10:18', 101),
(12, 29, '2017-02-22 05:11:31', '2017-02-22 05:11:31', 102),
(13, 29, '2017-02-22 05:11:57', '2017-02-22 05:11:57', 103),
(18, 27, '2017-02-22 05:12:16', '2017-02-22 05:12:16', 104),
(18, 28, '2017-02-22 05:12:40', '2017-02-22 05:12:40', 105),
(19, 25, '2017-02-22 05:13:05', '2017-02-22 05:13:05', 106),
(19, 26, '2017-02-22 05:13:26', '2017-02-22 05:13:26', 107),
(20, 27, '2017-02-22 05:13:45', '2017-02-22 05:13:45', 108),
(20, 28, '2017-02-22 05:14:12', '2017-02-22 05:14:12', 109),
(21, 25, '2017-02-22 05:14:33', '2017-02-22 05:14:33', 110),
(21, 26, '2017-02-22 05:14:55', '2017-02-22 05:14:55', 111),
(22, 27, '2017-02-22 05:15:26', '2017-02-22 05:15:26', 112),
(22, 28, '2017-02-22 05:15:53', '2017-02-22 05:15:53', 113),
(23, 1, '2017-02-22 05:16:11', '2017-02-22 05:16:11', 114),
(23, 2, '2017-02-22 05:16:28', '2017-02-22 05:16:28', 115),
(23, 29, '2017-02-22 05:16:47', '2017-02-22 05:16:47', 116),
(23, 3, '2017-02-22 05:17:05', '2017-02-22 05:17:05', 117),
(23, 4, '2017-02-22 05:17:22', '2017-02-22 05:17:22', 118),
(23, 5, '2017-02-22 05:17:36', '2017-02-22 05:17:36', 119),
(23, 9, '2017-02-22 05:17:56', '2017-02-22 05:17:56', 120),
(24, 1, '2017-02-22 05:18:56', '2017-02-22 05:18:56', 121),
(24, 2, '2017-02-22 05:19:13', '2017-02-22 05:19:13', 122),
(24, 29, '2017-02-22 05:19:34', '2017-02-22 05:19:34', 123),
(24, 5, '2017-02-22 05:19:58', '2017-02-22 05:19:58', 124),
(24, 19, '2017-02-22 05:20:29', '2017-02-22 05:20:29', 126),
(24, 24, '2017-02-22 05:20:52', '2017-02-22 05:20:52', 127),
(24, 30, '2017-02-22 05:23:54', '2017-02-22 05:23:54', 128),
(24, 17, '2017-02-22 05:24:14', '2017-02-22 05:24:14', 129),
(24, 16, '2017-02-22 05:24:34', '2017-02-22 05:24:34', 130),
(16, 17, '2017-02-22 05:24:56', '2017-02-22 05:24:56', 131),
(18, 17, '2017-02-22 05:25:16', '2017-02-22 05:25:16', 132),
(18, 16, '2017-02-22 05:25:48', '2017-02-22 05:25:48', 133),
(19, 17, '2017-02-22 05:26:07', '2017-02-22 05:26:07', 134),
(19, 16, '2017-02-22 05:26:24', '2017-02-22 05:26:24', 135),
(20, 17, '2017-02-22 05:26:58', '2017-02-22 05:26:58', 136),
(20, 16, '2017-02-22 05:27:20', '2017-02-22 05:27:20', 137),
(9, 1, '2017-02-22 08:37:05', '2017-02-22 08:37:05', 138),
(9, 2, '2017-02-22 08:37:14', '2017-02-22 08:37:14', 139),
(9, 5, '2017-02-22 08:37:23', '2017-02-22 08:37:23', 140),
(9, 3, '2017-02-22 08:37:30', '2017-02-22 08:37:30', 141),
(9, 4, '2017-02-22 08:37:39', '2017-02-22 08:37:39', 142),
(9, 9, '2017-02-22 08:37:53', '2017-02-22 08:37:53', 143),
(21, 16, '2017-02-22 10:28:45', '2017-02-22 10:28:45', 146),
(21, 17, '2017-02-22 10:30:23', '2017-02-22 10:30:23', 147),
(16, 16, '2017-02-22 10:30:46', '2017-02-22 10:30:46', 148),
(22, 17, '2017-02-22 10:31:18', '2017-02-22 10:31:18', 149),
(22, 16, '2017-02-22 10:32:10', '2017-02-22 10:32:10', 150),
(25, 25, '2017-02-22 16:27:47', '2017-02-22 16:27:47', 151),
(25, 26, '2017-02-22 16:28:15', '2017-02-22 16:28:15', 152),
(25, 17, '2017-02-22 16:28:33', '2017-02-22 16:28:33', 153),
(25, 16, '2017-02-22 16:28:49', '2017-02-22 16:28:49', 154),
(26, 27, '2017-02-22 16:29:26', '2017-02-22 16:29:26', 155),
(26, 28, '2017-02-22 16:29:54', '2017-02-22 16:29:54', 156),
(26, 17, '2017-02-22 16:30:16', '2017-02-22 16:30:16', 157),
(26, 16, '2017-02-22 16:30:33', '2017-02-22 16:30:33', 158),
(27, 25, '2017-02-22 16:30:55', '2017-02-22 16:30:55', 159),
(27, 26, '2017-02-22 16:31:13', '2017-02-22 16:31:13', 160),
(27, 17, '2017-02-22 16:31:34', '2017-02-22 16:31:34', 161),
(27, 16, '2017-02-22 16:32:02', '2017-02-22 16:32:02', 162),
(28, 1, '2017-02-22 16:50:46', '2017-02-22 16:50:46', 163),
(28, 2, '2017-02-22 16:51:03', '2017-02-22 16:51:03', 164),
(28, 3, '2017-02-22 16:51:18', '2017-02-22 16:51:18', 165),
(28, 5, '2017-02-22 16:51:38', '2017-02-22 16:51:38', 166),
(28, 4, '2017-02-22 16:51:57', '2017-02-22 16:51:57', 167),
(28, 9, '2017-02-22 16:52:24', '2017-02-22 16:52:24', 168),
(29, 1, '2017-02-22 16:52:41', '2017-02-22 16:52:41', 169),
(29, 2, '2017-02-22 16:52:57', '2017-02-22 16:52:57', 170),
(29, 5, '2017-02-22 16:53:15', '2017-02-22 16:53:15', 171),
(29, 4, '2017-02-22 16:53:47', '2017-02-22 16:53:47', 173),
(29, 20, '2017-02-22 16:54:22', '2017-02-22 16:54:22', 174),
(29, 3, '2017-02-22 17:00:03', '2017-02-22 17:00:03', 175),
(21, 31, '2017-02-22 17:00:33', '2017-02-22 17:00:33', 176),
(22, 31, '2017-02-22 17:01:34', '2017-02-22 17:01:34', 177),
(18, 21, '2017-02-23 14:02:12', '2017-02-23 14:02:12', 178),
(19, 21, '2017-02-23 14:02:31', '2017-02-23 14:02:31', 179),
(15, 21, '2017-02-23 14:02:56', '2017-02-23 14:02:56', 181),
(20, 21, '2017-02-23 14:02:00', '2017-02-23 14:04:40', 182),
(27, 21, '2017-02-23 14:05:09', '2017-02-23 14:05:09', 184);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;