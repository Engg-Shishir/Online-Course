-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 06:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'password', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_mobile` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_des` varchar(255) NOT NULL,
  `course_fee` varchar(255) NOT NULL,
  `course_totalenroll` varchar(255) NOT NULL,
  `course_totalclass` varchar(255) NOT NULL,
  `course_link` varchar(255) NOT NULL,
  `course_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_des`, `course_fee`, `course_totalenroll`, `course_totalclass`, `course_link`, `course_img`) VALUES
(2, 'Composer', 'Learn A-Z everything about Python, from the basics, to advanced topics like Python GUI, Python Data Analysis, and more!', '$9.99', '100', '30', 'https://www.udemy.com/course/pythonforbeginners/', 'https://i.postimg.cc/3J2sMRmb/composer.png'),
(3, 'Laravel', 'Learn A-Z everything about Python, from the basics, to advanced topics like Python GUI, Python Data Analysis, and more!', '$9.99', '100', '30', 'https://www.udemy.com/course/pythonforbeginners/', 'https://i.postimg.cc/mkH0gZqk/laravel.png'),
(4, 'Livewire', 'Learn A-Z everything about Python, from the basics, to advanced topics like Python GUI, Python Data Analysis, and more!', '$9.99', '100', '30', 'https://www.udemy.com/course/pythonforbeginners/', 'https://i.postimg.cc/PfvG4KxH/livewire.png'),
(5, 'Lumen Api', 'Learn A-Z everything about Python, from the basics, to advanced topics like Python GUI, Python Data Analysis, and more!', '$9.99', '100', '30', 'https://www.udemy.com/course/pythonforbeginners/', 'https://i.postimg.cc/y6MMr9gZ/Lumen.png'),
(6, 'Python', 'Learn A-Z everything about Python, from the basics, to advanced topics like Python GUI, Python Data Analysis, and more!', '$9.99', '100', '30', 'https://www.udemy.com/course/pythonforbeginners/', 'https://i.postimg.cc/1XKhLpj1/download.jpg');

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
(1, '2021_04_11_104235_create_visitor_models_table', 1),
(2, '2021_04_12_084056_create_services_table', 1),
(3, '2021_04_16_161339_create_courses_table', 1),
(4, '2021_04_18_180257_create_contacts_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2019_08_19_000000_create_failed_jobs_table', 2),
(8, '2021_04_25_082039_create_admins_table', 2),
(9, '2021_04_25_172646_create_photos_table', 2),
(10, '2021_06_08_054735_create_projects_table', 2),
(11, '2021_06_08_060953_create_reviews_table', 2),
(12, '2021_06_08_083732_create_terms_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`) VALUES
(1, 'http://127.0.0.1:8000/storage/jDSAKxTN5qy59y4XJgnndRJzNVFaEJoLm3cumXyf.png'),
(2, 'http://127.0.0.1:8000/storage/8FYEX8Ite5EspcZWXKFFFeHB2IjgyJ8nKWW0OIsE.png'),
(3, 'http://127.0.0.1:8000/storage/AXQvakMCPyqQBRMonJlsr9G1wf8Kz5zge5zRUhgF.png'),
(5, 'http://127.0.0.1:8000/storage/FwhzdtJRJAUlSIIxEbmAidHXUKpFiS8sDSR4AO7A.png');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desc` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL,
  `project_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_des` varchar(255) NOT NULL,
  `service_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_des`, `service_img`) VALUES
(2, 'Business', 'An ever expanding program of courses helping financial professionals aspire to the top levels of financial leadership', 'https://i.postimg.cc/Y9rrvW3q/lohp-category-business-v2.jpg'),
(3, 'Design', 'Get a job in UX and build your user research and UX design skills with this hands-on user experience training course.', 'https://i.postimg.cc/hvwcZ3qf/lohp-category-design-v2.jpg'),
(4, 'Development', 'Learn javascript online and supercharge your web design with this Javascript for beginners training course.', 'https://i.postimg.cc/59k4tjFb/lohp-category-development-v2.jpg'),
(5, 'Troubleshooting', 'How to Troubleshoot: IT Troubleshooting Skill Training is about applying logic over technical components to identify faults.', 'https://i.postimg.cc/9MLWZQ8P/lohp-category-it-and-software-v2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Violette Langworth', 'mmohr@example.org', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZYYgm7wYBE', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(2, 'Coleman Ryan', 'chayes@example.com', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XpR5d1gC1v', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(3, 'Alessandro Turner', 'macejkovic.irma@example.net', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0ZFV9rpSbU', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(4, 'Prof. Harmony Kemmer', 'alia.crist@example.com', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1aNWzkuTKw', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(5, 'Miss Anna Reichert V', 'titus62@example.net', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KrXVQoxkpj', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(6, 'Mrs. Leora Cormier', 'pfannerstill.neil@example.net', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AwSpZhLq7K', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(7, 'Mallory Schmitt', 'schamberger.eusebio@example.com', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rmh8RExuBk', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(8, 'Madelynn Doyle', 'smith.alene@example.org', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5S737vkIQU', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(9, 'Prof. Zena Maggio', 'hailee.lehner@example.com', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8NF5zQOdSy', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(10, 'Adah Kuhn', 'joanie.lebsack@example.net', '2022-11-27 20:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QgtoNpZLaP', '2022-11-27 20:40:20', '2022-11-27 20:40:20'),
(11, 'Bret Mayer', 'bflatley@example.com', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2dMBIAwlTa', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(12, 'Olga Legros', 'faye.erdman@example.org', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ukYEyHOzJ7', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(13, 'Miss Corrine Block', 'tkub@example.org', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tUNHmJSZj3', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(14, 'Wyatt Medhurst II', 'langosh.elisabeth@example.net', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PW4sTbtdGq', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(15, 'Ms. Mattie Kuhlman', 'karl.leuschke@example.com', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8GjCwGrZUK', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(16, 'Jonathon Baumbach', 'maurine81@example.com', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'crlR5IUJl4', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(17, 'Olin Wilkinson', 'hcrona@example.net', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2HB8BtYcAQ', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(18, 'Richard Shields DDS', 'kaitlin35@example.com', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xNybF0NLCf', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(19, 'Prof. Quentin Schaden I', 'cary53@example.net', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KMVT2DmGNI', '2022-11-27 20:41:05', '2022-11-27 20:41:05'),
(20, 'Angela Lakin', 'evan.labadie@example.org', '2022-11-27 20:41:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's0yrd3d7vQ', '2022-11-27 20:41:05', '2022-11-27 20:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `visit_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip_address`, `visit_time`) VALUES
(1, '127.0.0.1', '2022-11-28 12:05:59am'),
(7, '127.0.0.1', '2022-11-28 09:41:51am'),
(8, '127.0.0.1', '2022-11-28 09:41:52am'),
(9, '127.0.0.1', '2022-11-28 09:45:10am'),
(10, '127.0.0.1', '2022-11-28 09:46:52am'),
(11, '127.0.0.1', '2022-11-28 09:46:55am'),
(12, '127.0.0.1', '2022-11-28 09:46:55am'),
(13, '127.0.0.1', '2022-11-28 09:47:37am'),
(14, '127.0.0.1', '2022-11-28 09:47:53am'),
(15, '127.0.0.1', '2022-11-28 09:49:23am'),
(16, '127.0.0.1', '2022-11-28 09:52:06am'),
(17, '127.0.0.1', '2022-11-28 09:54:44am'),
(18, '127.0.0.1', '2022-11-28 09:56:15am'),
(19, '127.0.0.1', '2022-11-28 09:57:02am'),
(20, '127.0.0.1', '2022-11-28 10:00:39am'),
(21, '127.0.0.1', '2022-11-28 10:01:37am'),
(22, '127.0.0.1', '2022-11-28 10:01:58am'),
(23, '127.0.0.1', '2022-11-28 10:05:45am'),
(24, '127.0.0.1', '2022-11-28 10:07:39am'),
(25, '127.0.0.1', '2022-11-28 10:08:01am'),
(26, '127.0.0.1', '2022-11-28 10:08:10am'),
(27, '127.0.0.1', '2022-11-28 10:08:51am'),
(28, '127.0.0.1', '2022-11-28 10:10:50am'),
(29, '127.0.0.1', '2022-11-28 10:11:40am'),
(30, '127.0.0.1', '2022-11-28 10:13:38am'),
(31, '127.0.0.1', '2022-11-28 10:14:26am'),
(32, '127.0.0.1', '2022-11-28 10:15:33am'),
(33, '127.0.0.1', '2022-11-28 10:16:05am'),
(34, '127.0.0.1', '2022-11-28 10:16:59am'),
(35, '127.0.0.1', '2022-11-28 10:17:19am'),
(36, '127.0.0.1', '2022-11-28 10:18:15am'),
(37, '127.0.0.1', '2022-11-28 10:18:47am'),
(38, '127.0.0.1', '2022-11-28 10:19:02am'),
(39, '127.0.0.1', '2022-11-28 10:19:10am'),
(40, '127.0.0.1', '2022-11-28 10:20:25am'),
(41, '127.0.0.1', '2022-11-28 10:21:44am'),
(42, '127.0.0.1', '2022-11-28 10:22:53am'),
(43, '127.0.0.1', '2022-11-28 10:24:31am'),
(44, '127.0.0.1', '2022-11-28 10:26:11am'),
(45, '127.0.0.1', '2022-11-28 10:26:30am'),
(46, '127.0.0.1', '2022-11-28 10:28:34am'),
(47, '127.0.0.1', '2022-11-28 10:36:15am'),
(48, '127.0.0.1', '2022-11-28 10:40:35am'),
(49, '127.0.0.1', '2022-11-28 10:43:11am'),
(50, '127.0.0.1', '2022-11-28 10:46:28am'),
(51, '127.0.0.1', '2022-11-28 10:48:04am'),
(52, '127.0.0.1', '2022-11-28 10:48:07am'),
(53, '127.0.0.1', '2022-11-28 10:49:12am'),
(54, '127.0.0.1', '2022-11-28 10:49:57am'),
(55, '127.0.0.1', '2022-11-28 10:50:00am'),
(56, '127.0.0.1', '2022-11-28 10:50:00am'),
(57, '127.0.0.1', '2022-11-28 10:50:27am'),
(58, '127.0.0.1', '2022-11-28 10:50:53am'),
(59, '127.0.0.1', '2022-11-28 10:51:25am'),
(60, '127.0.0.1', '2022-11-28 10:51:35am'),
(61, '127.0.0.1', '2022-11-28 10:51:53am'),
(62, '127.0.0.1', '2022-11-28 10:52:09am'),
(63, '127.0.0.1', '2022-11-28 10:52:24am'),
(64, '127.0.0.1', '2022-11-28 10:52:33am'),
(65, '127.0.0.1', '2022-11-28 10:52:58am'),
(66, '127.0.0.1', '2022-11-28 10:53:06am'),
(67, '127.0.0.1', '2022-11-28 10:53:18am'),
(68, '127.0.0.1', '2022-11-28 10:54:26am'),
(69, '127.0.0.1', '2022-11-28 10:56:45am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
