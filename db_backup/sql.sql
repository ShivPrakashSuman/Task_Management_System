-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 07:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2023_08_29_113525_create_todo_task_list_table', 2),
(14, '2023_08_29_110734_create_user_table', 3),
(41, '2014_10_12_000000_create_users_table', 4),
(42, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(43, '2014_10_12_100000_create_password_resets_table', 4),
(44, '2019_08_19_000000_create_failed_jobs_table', 4),
(45, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(46, '2023_08_30_111118_create_task_list_table', 4),
(47, '2023_09_03_103152_create_setting_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sumanshivprakash742@gmail.com', 'lYku16ePTVMGuteuj0uVVKcerv7n3AbSACQ3Oo7H7SXsuuKGW0r3zAhcXRkagGEv', '2023-09-05 23:59:10'),
('sumanshivprakash742@gmail.com', 'oseHgIIoJmeCtP4cpZ9lLKfN821PUTLuwOKvYRwLASyrTbsbH3aBcD1fg5wGPWAK', '2023-09-06 00:13:35'),
('sumanshivprakash742@gmail.com', 'wYRQyI4ZzuTWTK0YFMj4ZrugpxLRx8i0HbkQFLdkJGB9JSdOXnyqSSWpesg1BrFw', '2023-09-06 23:53:12'),
('nileshlodha5@gmail.com', 'F6XiIb3JONb5VTJsqPyX1aoqeuQfdV5Y945PtjIgu9odxsrREqwFzOoOiTVMdTRQ', '2023-09-06 23:57:20'),
('nileshlodha5@gmail.com', 'UHt6Fc2URAXefLws1GhzgIK8fSgymdhskfJ7mHpNQn6t5qjlvcvVbZm2x1JwGVzB', '2023-09-07 00:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `user_id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, '1', 'Instagram', 'http://Instagram', 'text', '2023-09-05 23:39:29', '2023-09-05 23:39:29'),
(2, '1', 'Linkedin', 'http://linkedin/shivsuman', 'text', '2023-09-05 23:51:29', '2023-09-05 23:51:29'),
(3, '1', 'UOK', 'http://127.0.0.1:8000/setting/create', 'text', '2023-09-06 05:16:14', '2023-09-06 05:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `assign_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_list`
--

INSERT INTO `task_list` (`id`, `user_id`, `title`, `description`, `assign_id`, `due_date`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Login Page', 'Craete  Design', '2', '2023-09-06', 'to_do', '2023-09-07 02:06:44', '2023-09-05 02:00:06', '2023-09-07 02:06:44'),
(2, '1', 'DashBoard', 'Design', '1', '2023-09-06', 'on_approval', NULL, '2023-09-05 02:02:02', '2023-09-07 02:08:45'),
(3, '1', 'contact management system', 'Create a simple Contact Management System where users can store and manage their contacts. Users will be able to add, edit, delete, and search for contacts. The application will also include basic user authentication. Features: 1. User Registration and Login:     - Users can register using a username, email, and password.     - Users can log in using their registered credentials. 2. Contact Dashboard:     - After logging in, users will see a dashboard displaying their saved contacts.     - Contacts will be displayed in a list, showing their names and email addresses. 3. Contact Creation:     - Users can add new contacts by providing a name, email address, phone number, and optional notes. 4. Contact Editing:     - Users can edit the details of existing contacts, including the name, email address, phone number, and notes. 5. Contact Deletion:     - Users can delete contacts they no longer need. 6. Search and Filter:     - Users can search for contacts by name, email, or phone number.     - Implement a basic filter to display contacts by their initial letter. Technologies to Use: - HTML: For creating the structure of the web pages. - CSS: For styling the user interface and making it visually appealing. - jQuery: For enhancing user interactions and handling dynamic content. - MySQL: For storing user data and contact information. - Laravel: For building the backend logic, routing, authentication, and database interactions.', '1', '2023-09-07', 'in_progress', NULL, '2023-09-06 00:09:16', '2023-09-09 23:55:50'),
(4, '1', 'How to create an automated task using Task Scheduler on .', 'WebA to-do list is simply a list of your tasks or errands that need to be accomplished for a specific time or specific project. It can be a quick list on a paper or as elaborate and collaborative as a digital to-do list in an online …', '4', '2023-09-08', 'to_do', NULL, '2023-09-06 05:13:13', '2023-10-21 11:16:01'),
(5, '1', 'Microsoft To Do App', '<h2><strong>A smart daily planners</strong></h2>\r\n\r\n<p>Set yourself up for success with My Day, intelligent and personalized suggestions to update your daily or weekly to do list.&nbsp;With both a Microsoft to do desktop app and mobile app available, it is easy to stay on task all day long.</p>\r\n\r\n<h2>Manage your to do list online</h2>\r\n\r\n<p>A truly cross platform task management app. Whether you&#39;re at home using the desktop app or are using the mobile app on the go you can access your task list and stay organized.</p>\r\n\r\n<h2>Sharing made easy</h2>\r\n\r\n<p>Sharing an online to do list can help keep you connected with friends, family and colleagues.</p>\r\n\r\n<h2>Make managing tasks easier</h2>\r\n\r\n<p>Break tasks down into simple steps, add due dates, and set reminders for your daily checklist to keep you on track.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>What is the purpose of a to do list?</h3>\r\n\r\n	<p>The main purpose of a to do list is to provide yourself with a list of your priorities in order to ensure that you don&#39;t forget anything and are able to effectively plan out your tasks so that they are all accomplished in the correct time frame. A well maintained to do list will set your mind at ease since you will always have a clear picture of what you need to get done.</p>\r\n	</li>\r\n	<li>\r\n	<h3>Why is a to do list important?</h3>\r\n\r\n	<p>A to do list is important because it keeps your tasks and obligations in order. An organized list makes things more manageable and keeps you mentally focused on the tasks at hand.</p>\r\n	</li>\r\n</ul>', '5', '2023-09-08', 'done', NULL, '2023-09-07 00:36:23', '2023-09-09 23:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `address`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SHIV KRAKASH SUMAN', 'shivprakash', 'sumanshivprakash742@gmail.com', '$2y$10$rDEMxTBnQj9U0dD.Vf.Au.sT7or8vONypoEefX.ZiZ7ZZMXFdBOW.', '905557760469', 'kota', '1693977454_sidhu.png', NULL, '2023-09-05 01:38:23', '2023-09-07 02:46:38'),
(2, 'Sagar Nama', 'sagar4211', 'sagar4211@gmail.com', '$2y$10$gXAEk56w4effGj2rFrkT0uBLLdp643MFCJqGMPdxU9.gCv2idWC/y', '9051111223', 'Kaithoon', '1693977148_images (3).jfif', NULL, '2023-09-05 01:39:18', '2023-09-05 23:42:28'),
(4, 'Admin user', 'adminuser1', 'admin77771@gmail.com', '$2y$10$Sy.fedBH31t61uV8dFqpkene5/xG7mGO9qKKdpCV1P3tRMHLmELH2', NULL, NULL, '1693997041_sidhu.png', NULL, '2023-09-06 05:10:28', '2023-09-06 05:14:02'),
(5, 'Nilesh Lodha', 'nileshlodha', 'nileshlodha5@gmail.com', '$2y$10$ADzXIBE7OGe6JI6wTUvb0OJbyImSOXVNB5Jn/urHFZC2BgJ/YNOPa', NULL, NULL, NULL, NULL, '2023-09-06 23:57:13', '2023-09-06 23:57:13');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
