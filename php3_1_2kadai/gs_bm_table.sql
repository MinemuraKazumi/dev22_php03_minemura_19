-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 1 月 24 日 23:48
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_book_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(17, '黒子のバスケ', 'https://www.amazon.co.jp/%E9%BB%92%E5%AD%90%E3%81%AE%E3%83%90%E3%82%B9%E3%82%B1-%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF-%E5%85%A830%E5%B7%BB%E5%AE%8C%E7%B5%90%E3%82%BB%E3%83%83%E3%83%88-%E3%82%B8%E3%83%A3%E3%83%B3%E3%83%97%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF%E3%82%B9-%E8%97%A4%E5%B7%BB/dp/B00PTMIAZG/ref=sr_1_2?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=ZATWP5O4EID0&keywords=%E3%83%90%E3%82%B9%E3%82%B1+%E6%BC%AB%E7%94%BB&qid=1642528346&s=books&sprefix=%E3%83%90%E3%82%B9%E3%82%B1+%E6%BC%AB%E7%94%BB%2Cstripbooks%2C173&sr=1-2', '自分で点が取れなくてもアシストがあるよ！', '2022-01-19 02:53:51'),
(18, 'リアル', 'https://www.amazon.co.jp/%E3%83%AA%E3%82%A2%E3%83%AB-1-Young-jump-comics/dp/408876143X', '東京2020で銀メダル獲得！まだまだ熱い！！', '2022-01-19 02:56:43');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
