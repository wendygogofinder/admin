-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-06-11 18:36:50
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `admin`
--

-- --------------------------------------------------------

--
-- 資料表結構 `banner_font`
--

CREATE TABLE `banner_font` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_font_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_font_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_font_sh` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `banner_pic`
--

CREATE TABLE `banner_pic` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_pic_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_sh` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `board`
--

CREATE TABLE `board` (
  `id` int(10) UNSIGNED NOT NULL,
  `board_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_r_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `board_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `board`
--

INSERT INTO `board` (`id`, `board_title`, `board_name`, `board_pic`, `board_email`, `board_content`, `board_r_id`, `board_ip`, `board_date`, `created_at`, `updated_at`) VALUES
(1, '海綿寶寶', 'wendy', 'face1.gif', 'wefdsf@sdfsf.com', 'qw', '0', '127.0.0.1', '2020-06-11 09:15:36', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `epaper`
--

CREATE TABLE `epaper` (
  `id` int(10) UNSIGNED NOT NULL,
  `epaper_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_sh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `epaper_status`
--

CREATE TABLE `epaper_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `epaper_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_starus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `epaper_user`
--

CREATE TABLE `epaper_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epaper_user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `failed_jobs`
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
-- 資料表結構 `forum`
--

CREATE TABLE `forum` (
  `id` int(10) UNSIGNED NOT NULL,
  `forum_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_top` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_last` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `forum_re`
--

CREATE TABLE `forum_re` (
  `id` int(10) UNSIGNED NOT NULL,
  `re_quote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `uname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderPaper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cityarea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuszip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cusadr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `uname`, `username`, `password`, `email`, `sex`, `orderPaper`, `birthday`, `phone`, `Area`, `cityarea`, `cuszip`, `cusadr`, `date`, `sh`, `created_at`, `updated_at`) VALUES
(1, '李菀云', 'wendy', 'as0970431566', 'wendy0970@yahoo.com', 'woman', 'Y', '1912-5-14', '11111111111111', '臺南市', '南區', '702', '臺南市南區', '2020-06_11 09:05:55', '1', NULL, NULL),
(2, 'admin', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'wendy0970@yahoo.com111111111', 'man', 'Y', '1914-10-17', '0000000000', '臺南市', '南區', '702', '臺南市南區', '2020-06_11 10:21:45', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(121, '2014_10_12_000000_create_users_table', 1),
(122, '2014_10_12_100000_create_password_resets_table', 1),
(123, '2019_08_19_000000_create_failed_jobs_table', 1),
(124, '2020_05_29_032115_create_banner_font_table', 1),
(125, '2020_05_29_032223_create_banner_pic_table', 1),
(126, '2020_05_29_032301_create_board_table', 1),
(127, '2020_05_29_032341_create_epaper_table', 1),
(128, '2020_05_29_032425_create_epaper_status_table', 1),
(129, '2020_05_29_032454_create_epaper_user_table', 1),
(130, '2020_05_29_032542_create_forum_table', 1),
(131, '2020_05_29_032615_create_forum_re_table', 1),
(132, '2020_05_29_033446_create_member_table', 1),
(133, '2020_05_29_033526_create_news_table', 1),
(134, '2020_05_29_033602_create_news_download_table', 1),
(135, '2020_05_29_033633_create_news_pic_table', 1),
(136, '2020_05_29_033705_create_shop_order_table', 1),
(137, '2020_05_29_033740_create_shop_p_table', 1),
(138, '2020_05_29_033902_create_shop_type_table', 1),
(139, '2020_05_29_033935_create_status_table', 1),
(140, '2020_05_29_034013_create_view_count_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `news_download`
--

CREATE TABLE `news_download` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `news_pic`
--

CREATE TABLE `news_pic` (
  `id` int(10) UNSIGNED NOT NULL,
  `newspic_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newspic_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `shop_order`
--

CREATE TABLE `shop_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_name1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_name2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_addres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_paytype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'n',
  `order_pay5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `order_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `shop_p`
--

CREATE TABLE `shop_p` (
  `id` int(10) UNSIGNED NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_open` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `shop_type`
--

CREATE TABLE `shop_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `view_count`
--

CREATE TABLE `view_count` (
  `id` int(10) UNSIGNED NOT NULL,
  `view_cont` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `banner_font`
--
ALTER TABLE `banner_font`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `banner_pic`
--
ALTER TABLE `banner_pic`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `epaper`
--
ALTER TABLE `epaper`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `epaper_status`
--
ALTER TABLE `epaper_status`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `epaper_user`
--
ALTER TABLE `epaper_user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `forum_re`
--
ALTER TABLE `forum_re`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news_download`
--
ALTER TABLE `news_download`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news_pic`
--
ALTER TABLE `news_pic`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `shop_order`
--
ALTER TABLE `shop_order`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `shop_p`
--
ALTER TABLE `shop_p`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `shop_type`
--
ALTER TABLE `shop_type`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 資料表索引 `view_count`
--
ALTER TABLE `view_count`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `banner_font`
--
ALTER TABLE `banner_font`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `banner_pic`
--
ALTER TABLE `banner_pic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `board`
--
ALTER TABLE `board`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `epaper`
--
ALTER TABLE `epaper`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `epaper_status`
--
ALTER TABLE `epaper_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `epaper_user`
--
ALTER TABLE `epaper_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `forum_re`
--
ALTER TABLE `forum_re`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news_download`
--
ALTER TABLE `news_download`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news_pic`
--
ALTER TABLE `news_pic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shop_order`
--
ALTER TABLE `shop_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shop_p`
--
ALTER TABLE `shop_p`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shop_type`
--
ALTER TABLE `shop_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `view_count`
--
ALTER TABLE `view_count`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
