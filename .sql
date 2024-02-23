-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 24, 2023 at 07:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `artis`
--

CREATE TABLE `artis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_artis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artis`
--

INSERT INTO `artis` (`id`, `nama_artis`, `created_at`, `updated_at`) VALUES
(1, 'Pinkfloyd', NULL, NULL),
(2, 'tulus', NULL, NULL),
(3, 'coldplay', '2023-12-22 23:12:45', '2023-12-22 23:12:45'),
(4, 'Justinbieber', '2023-12-22 23:13:11', '2023-12-22 23:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_konser` varchar(255) DEFAULT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `isi_berita` text NOT NULL,
  `excerpts` varchar(255) DEFAULT NULL,
  `id_artis` bigint(20) UNSIGNED DEFAULT NULL,
  `spotlight` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `nama_konser`, `judul_berita`, `gambar`, `isi_berita`, `excerpts`, `id_artis`, `spotlight`, `created_at`, `updated_at`) VALUES
(1, 'Pinkfloyd', 'Lagu Hati-hati di Jalan Tulus Tembus Billboard Global 200', 'zu89X3VV57jkqUcEWSdYckr5OnfoUYhunYAB08Xs.png', '<div>Solois Tulus berhasil menembus tangga lagu Billboard Global 200 berkat Hati-hati di Jalan, lagu terbarunya yang menjadi bagian album Manusia. Hal itu dinilai menjadi bukti besar dukungan dan harapan terhadap musik karya Indonesia.Tulus mengungkapkan kebahagiaannya atas capaian itu.&nbsp;<br>&nbsp;</div><div>Ia berharap seluruh lagu dalam album Manusia bisa terus didengarkan di masa mendatang.\"Saya berterima kasih kepada seluruh yang mendengarkan. Apresiasi yang diberikan sangat berharga,\" kata Tulus dalam keterangan tertulis yang diterima CNNIndonesia.com beberapa waktu lalu.<br>&nbsp;</div><div>\"Semoga seluruh lagu dalam album ini dapat terus tumbuh di hati semua yang mendengarkan di sepanjang-panjangnya waktu. Lagu yang baru rilis awal Maret ini berhasil masuk ke dua tangga lagu Billboard yaitu Billboard Global 200 dan Billboard Global Excl. US.<br><br></div><div>Awalnya, lagu ini lebih dulu mendarat ke chart Billboard Global Excl. US edisi 19 Maret 2022 di peringkat #88. Seminggu setelahnya yaitu pada edisi 26 Maret 2022, Hati-hati di Jalan berhasil naik ke peringkat #51 Billboard Global Excl. US sekaligus debut di peringkat #123 sebagai new entry di Billboard Global 200.<br>&nbsp;</div><div>Hati-hati di Jalan merupakan salah satu single dalam album baru Tulus, Manusia. Album kelima digarap dalam kurun waktu dua tahun dan bertepatan dengan perayaan 10 tahun Tulus berkarya di industri musik.<br>&nbsp;</div><div>Album Manusia terdiri dari 10 nomor lagu. Seperti judulnya, album ini menceritakan berbagai dinamika rasa yang dialami manusia.Tak hanya itu, Tulus turut mengungkapkan album Manusia terinspirasi dari berbagai cerita yang pernah dialami.</div>', 'Solois Tulus berhasil menembus tangga lagu Billboard Global 200 berkat Hati-hati di Jalan, lagu...', 2, 1, '2023-12-20 01:27:16', '2023-12-22 22:06:49'),
(2, 'tulus', 'Pink Floyd Rilis Lagu Baru Setelah Vakum 28 Tahun', '23-12-23-05-45-49.jpg', '<div>EDIT<br>Pink Floyd-kecuali Roger Waters- akan segera merilis lagu baru dalam rangka mendukung Ukraina. Gitaris dan musisi David Gilmour, drummer Nick Mason, bassist Guy Pratt, serta komposer Nitin Sawhney kembali bekerja sama dalam merilis single terbaru, \'Hey Hey Rise Up\'. 1/3 Tonight at midnight, Pink Floyd will release a new song, \'Hey Hey Rise Up\', which sees David Gilmour and Nick Mason joined by Guy Pratt &amp; Nitin Sawhney, with an extraordinary vocal by Andriy Khlyvnyuk of Ukrainian band Boombox.Listen/download at<br><br>https://t.co/i1l92D3AYU. — Pink Floyd (@pinkfloyd) April 7, 2022 “Saya memiliki platform besar yang telah saya kerjakan selama bertahun-tahun (Pink Floyd). Ini sangat sulit dan membuat frustrasi untuk melihat serangan yang luar biasa gila dan tidak adil, terutama dilakukan oleh negara besar terhadap negara yang merdeka, damai, dan demokratis,” tutur Pink Floyd dalam wawancaranya dengan Guardian dikutip pada Jumat&nbsp;<br><br>(08/04/2022). Gilmour memang memiliki menantu asal Ukraina sehingga para cucunya juga dapat dikatakan setengah darah Ukraina. Karena itulah, perang yang terjadi turut membuatnya frustrasi. Dikutip dari NYPost, Gilmour juga terinspirasi dari musisi Ukraina, Andriy Khlyvnyuk dari grup band BoomBox. Pada Februari lalu, Khlyvnyuk keluar dari grup band tersebut untuk ikut dalam pertempuran di Ukraina ketika BoomBox melakukan tur di Amerika. Gilmour yang melihat video perjuangan musisi tersebut di pakaian militer dan menyanyikan lagu protes, merasa terinspirasi untuk turut mendukungnya. “Saya berpikir, ini sangat ajaib dan mungkin saya dapat melakukan sesuatu tentang hal tersebut,” tutur Gilmour untuk mengekspresikan perasaannya usai melihat video tersebut. Ia pun turut mencoba menghubungi Khlyvnyuk yang masuk ke rumah sakit karena terluka saat konflik tersebut.&nbsp;<br><br>“Dia menunjukkan potongan kecil pecahan peluru seperempat inci yang tertanam di pipinya. Dia menyimpannya di dalam kantong plastik.” Aksi mendukung Ukraina tersebut pun tidak hanya diungkap lewat single terbaru mereka saya. Pink Floyd rupanya turut menarik musiknya dari Rusia dan Belarusia.&nbsp;</div>', 'EDITPink Floyd-kecuali Roger Waters- akan segera merilis lagu baru dalam rangka mendukung U...', 1, 1, NULL, '2023-12-22 23:22:03'),
(3, 'About Music of the Spheres Word Tour', 'About Music of the Spheres Word Tour', '23-12-23-06-12-14.jpg', '<div>Jakarta, 9 May 2023 - Coldplay have announced their hugely-anticipated return to Asia and Australia with a special run of stadium shows in November 2023, as part of their record-breaking Music Of The Spheres World Tour. The announcement marks the band’s first ever show in Jakarta, taking place on 15 November at Gelora Bung Karno Stadium.</div><div>&nbsp;</div><div>Since the tour’s first date in March 2022, the band have sold more tickets than any other artist in the world, receiving rave reviews from fans and critics alike and picking up accolades including Favorite Touring Artist at the 2022 AMAs and Tour of The Year at the 2023 iHeartRadio Awards.</div><div>The dates feature Coldplay’s first Tokyo shows since 2017, their first ever dates in Kaohsiung, Jakarta and Kuala Lumpur and a special one-off performance in Perth, their first in Western Australia since 2009.</div><div>&nbsp;</div>', 'Jakarta, 9 May 2023 - Coldplay have announced their hugely-anticipated return to Asia and Austr...', 3, 0, '2023-12-22 23:12:14', '2023-12-22 23:13:30'),
(4, 'About Justice World Tour', 'About Justice World Tour', '23-12-23-06-17-32.png', '<div>The Justice World Tour, formerly known as The Changes Tour and The Justin Bieber World Tour, is the ongoing fourth concert tour by Canadian singer Justin Bieber. The tour is in support of his fifth and sixth studio albums, Changes (2020) and Justice (2021).</div><div>&nbsp;</div><div>Promoted by T-Mobile, the tour was originally set to begin on May 14, 2020 in Seattle and to conclude on September 26, 2020 in East Rutherford, New Jersey. However, due to concerns from COVID-19, all of the original planned dates were postponed to 2021, then once again to 2022. The tour officially began on February 18, 2022, in San Diego and is scheduled to conclude on March 25, 2023 in Krakow.</div>', 'The Justice World Tour, formerly known as The Changes Tour and The Justin Bieber World Tour, is...', 4, 0, '2023-12-22 23:17:32', '2023-12-22 23:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_gambar` varchar(255) NOT NULL,
  `id_berita` bigint(20) UNSIGNED NOT NULL,
  `id_tiket` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_12_151216_create_artis_table', 1),
(6, '2023_11_15_153503_create_beritas_table', 1),
(7, '2023_11_15_153627_tiket', 1),
(8, '2023_11_15_153850_gambar', 1),
(9, '2023_11_15_154045_transaksi', 1),
(10, '2023_12_14_032547_comment', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tikets`
--

CREATE TABLE `tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tiket` varchar(255) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `prerelease` tinyint(1) NOT NULL DEFAULT 1,
  `quantity` int(11) DEFAULT NULL,
  `tanggal_konser` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lokasi_tiket` varchar(255) NOT NULL,
  `id_berita` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tikets`
--

INSERT INTO `tikets` (`id`, `nama_tiket`, `harga_tiket`, `category`, `gambar`, `prerelease`, `quantity`, `tanggal_konser`, `lokasi_tiket`, `id_berita`, `created_at`, `updated_at`) VALUES
(1, 'Coldplay Music of the Spheres World Tour Jakarta 2023', 300000, 'concert', '23-12-23-05-55-10.jpg', 1, 5, '2024-11-05 01:27:16', 'Gelora Bung Karno Stadium, Jakarta Pusat, DKI Jakarta', 3, '2023-12-20 01:27:16', '2023-12-22 23:15:41'),
(2, 'Justin Bieber Justice World Tour 2022', 750000, 'concert', '23-12-23-06-04-57.png', 1, 7, '2024-12-20 01:27:16', 'GBK Madya Stadium, Jakarta Selatan, DKI Jakarta', 4, '2023-12-20 01:27:16', '2023-12-22 23:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_tiket` bigint(20) UNSIGNED NOT NULL,
  `pembayaran` tinyint(1) NOT NULL DEFAULT 0,
  `total_pembayaran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_user` varchar(255) NOT NULL DEFAULT 'none',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yosua solissa', 'Yosuasolissa@gmail.com', '$2y$12$1aFRhhOWiLhlHivX6hCxA.trLWuR6rjACNeBKQaRPRv0Zhy6lfJ.m', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_id_artis_foreign` (`id_artis`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambars_id_berita_foreign` (`id_berita`),
  ADD KEY `gambars_id_tiket_foreign` (`id_tiket`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tikets`
--
ALTER TABLE `tikets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tikets_id_berita_foreign` (`id_berita`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_id_user_foreign` (`id_user`),
  ADD KEY `transaksis_id_tiket_foreign` (`id_tiket`);

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
-- AUTO_INCREMENT for table `artis`
--
ALTER TABLE `artis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tikets`
--
ALTER TABLE `tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_id_artis_foreign` FOREIGN KEY (`id_artis`) REFERENCES `artis` (`id`);

--
-- Constraints for table `gambars`
--
ALTER TABLE `gambars`
  ADD CONSTRAINT `gambars_id_berita_foreign` FOREIGN KEY (`id_berita`) REFERENCES `beritas` (`id`),
  ADD CONSTRAINT `gambars_id_tiket_foreign` FOREIGN KEY (`id_tiket`) REFERENCES `tikets` (`id`);

--
-- Constraints for table `tikets`
--
ALTER TABLE `tikets`
  ADD CONSTRAINT `tikets_id_berita_foreign` FOREIGN KEY (`id_berita`) REFERENCES `beritas` (`id`);

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_id_tiket_foreign` FOREIGN KEY (`id_tiket`) REFERENCES `tikets` (`id`),
  ADD CONSTRAINT `transaksis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
