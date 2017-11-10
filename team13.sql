-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 06:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team13`
--

-- --------------------------------------------------------

--
-- Table structure for table `cacbuocnau`
--

CREATE TABLE `cacbuocnau` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_monan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentmonan`
--

CREATE TABLE `commentmonan` (
  `id` int(10) UNSIGNED NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `noi_dung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_monan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentpost`
--

CREATE TABLE `commentpost` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_UserPost` int(10) UNSIGNED NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `congdung`
--

CREATE TABLE `congdung` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaimon`
--

CREATE TABLE `loaimon` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_theloai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2017_10_11_091704_create_MucDich_table', 1),
(4, '2017_10_11_091822_create_TheLoai_table', 1),
(5, '2017_10_11_091929_create_CongDung_table', 1),
(6, '2017_10_11_092135_create_VungMien_table', 1),
(7, '2017_10_11_093233_create_NhaHang_table', 1),
(8, '2017_10_11_091854_create_LoaiMon_table', 2),
(9, '2017_10_11_154053_create_MonAn_table', 3),
(10, '2017_10_11_095144_create_CommentMonAn_table', 4),
(11, '2017_10_11_155431_create_Video_table', 5),
(12, '2017_10_11_160152_create_CacBuocNau_table', 5),
(13, '2017_10_11_095238_create_UserPost_table', 6),
(14, '2017_10_11_155714_create_PostImage_table', 7),
(15, '2017_10_11_160119_create_CommentPost_table', 7),
(16, '2017_10_11_161849_create_ThongKe_table', 8),
(17, '2017_10_11_161142_create_NhaHangLienKet_table', 9),
(18, '2017_10_19_223212_create_Report_Comment_Post_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_monan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguyen_lieu_chinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguyen_lieu_phu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giavi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_kho` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_buoc` int(11) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `so_luot_thich` int(11) NOT NULL,
  `so_buoc_thuc_hien` int(11) NOT NULL,
  `id_mucdich` int(10) UNSIGNED NOT NULL,
  `id_loaimon` int(10) UNSIGNED NOT NULL,
  `id_congdung` int(10) UNSIGNED NOT NULL,
  `id_vungmien` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mucdich`
--

CREATE TABLE `mucdich` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhahang`
--

CREATE TABLE `nhahang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotxem` int(11) NOT NULL,
  `lienhe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vichi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhahanglienket`
--

CREATE TABLE `nhahanglienket` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_monan` int(10) UNSIGNED NOT NULL,
  `id_nhahang` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `postimage`
--

CREATE TABLE `postimage` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_comment_post`
--

CREATE TABLE `report_comment_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_CommentPost` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `id` int(10) UNSIGNED NOT NULL,
  `soluong_monan` int(11) NOT NULL,
  `soluong_theloai` int(11) NOT NULL,
  `soluong_truycap` int(11) NOT NULL,
  `soluong_taikhoan` int(11) NOT NULL,
  `soluong_anh` int(11) NOT NULL,
  `soluong_baipost` int(11) NOT NULL,
  `soluong_luotthich` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE `userpost` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `soluotthich` int(11) NOT NULL,
  `soluong_comment` int(11) NOT NULL,
  `id_loaimon` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `tuoi` int(11) NOT NULL,
  `congviec` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentaikhoan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `anhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_facebook` int(11) NOT NULL,
  `id_google` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `soluotthich` int(11) NOT NULL,
  `id_monan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vungmien`
--

CREATE TABLE `vungmien` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vichi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cacbuocnau`
--
ALTER TABLE `cacbuocnau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cacbuocnau_id_monan_foreign` (`id_monan`);

--
-- Indexes for table `commentmonan`
--
ALTER TABLE `commentmonan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentmonan_id_monan_foreign` (`id_monan`),
  ADD KEY `commentmonan_id_user_foreign` (`id_user`);

--
-- Indexes for table `commentpost`
--
ALTER TABLE `commentpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentpost_id_userpost_foreign` (`id_UserPost`),
  ADD KEY `commentpost_id_user_foreign` (`id_user`);

--
-- Indexes for table `congdung`
--
ALTER TABLE `congdung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaimon`
--
ALTER TABLE `loaimon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaimon_id_theloai_foreign` (`id_theloai`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monan_id_mucdich_foreign` (`id_mucdich`),
  ADD KEY `monan_id_loaimon_foreign` (`id_loaimon`),
  ADD KEY `monan_id_congdung_foreign` (`id_congdung`),
  ADD KEY `monan_id_vungmien_foreign` (`id_vungmien`);

--
-- Indexes for table `mucdich`
--
ALTER TABLE `mucdich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhahang`
--
ALTER TABLE `nhahang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhahanglienket`
--
ALTER TABLE `nhahanglienket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhahanglienket_id_monan_foreign` (`id_monan`),
  ADD KEY `nhahanglienket_id_nhahang_foreign` (`id_nhahang`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `postimage`
--
ALTER TABLE `postimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postimage_id_post_foreign` (`id_post`);

--
-- Indexes for table `report_comment_post`
--
ALTER TABLE `report_comment_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_comment_post_id_commentpost_foreign` (`id_CommentPost`),
  ADD KEY `report_comment_post_id_user_foreign` (`id_user`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpost`
--
ALTER TABLE `userpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userpost_id_loaimon_foreign` (`id_loaimon`),
  ADD KEY `userpost_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_id_monan_foreign` (`id_monan`);

--
-- Indexes for table `vungmien`
--
ALTER TABLE `vungmien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cacbuocnau`
--
ALTER TABLE `cacbuocnau`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentmonan`
--
ALTER TABLE `commentmonan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentpost`
--
ALTER TABLE `commentpost`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `congdung`
--
ALTER TABLE `congdung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaimon`
--
ALTER TABLE `loaimon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mucdich`
--
ALTER TABLE `mucdich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhahang`
--
ALTER TABLE `nhahang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhahanglienket`
--
ALTER TABLE `nhahanglienket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postimage`
--
ALTER TABLE `postimage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_comment_post`
--
ALTER TABLE `report_comment_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userpost`
--
ALTER TABLE `userpost`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vungmien`
--
ALTER TABLE `vungmien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cacbuocnau`
--
ALTER TABLE `cacbuocnau`
  ADD CONSTRAINT `cacbuocnau_id_monan_foreign` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commentmonan`
--
ALTER TABLE `commentmonan`
  ADD CONSTRAINT `commentmonan_id_monan_foreign` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id`),
  ADD CONSTRAINT `commentmonan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commentpost`
--
ALTER TABLE `commentpost`
  ADD CONSTRAINT `commentpost_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentpost_id_userpost_foreign` FOREIGN KEY (`id_UserPost`) REFERENCES `userpost` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `loaimon`
--
ALTER TABLE `loaimon`
  ADD CONSTRAINT `loaimon_id_theloai_foreign` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_id_congdung_foreign` FOREIGN KEY (`id_congdung`) REFERENCES `congdung` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `monan_id_loaimon_foreign` FOREIGN KEY (`id_loaimon`) REFERENCES `loaimon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `monan_id_mucdich_foreign` FOREIGN KEY (`id_mucdich`) REFERENCES `mucdich` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `monan_id_vungmien_foreign` FOREIGN KEY (`id_vungmien`) REFERENCES `vungmien` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nhahanglienket`
--
ALTER TABLE `nhahanglienket`
  ADD CONSTRAINT `nhahanglienket_id_monan_foreign` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nhahanglienket_id_nhahang_foreign` FOREIGN KEY (`id_nhahang`) REFERENCES `nhahang` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `postimage`
--
ALTER TABLE `postimage`
  ADD CONSTRAINT `postimage_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `userpost` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `report_comment_post`
--
ALTER TABLE `report_comment_post`
  ADD CONSTRAINT `report_comment_post_id_commentpost_foreign` FOREIGN KEY (`id_CommentPost`) REFERENCES `commentpost` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `report_comment_post_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userpost`
--
ALTER TABLE `userpost`
  ADD CONSTRAINT `userpost_id_loaimon_foreign` FOREIGN KEY (`id_loaimon`) REFERENCES `loaimon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userpost_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_id_monan_foreign` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
