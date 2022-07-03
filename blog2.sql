-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2022 at 03:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(1) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Panji Yudha Tama', '<p>Hi, my name is Panji Yudha Tama, people used to call me Panji or Yudha. I come from Magelang Regency, a small town in Central Java province.</p>\r\n\r\n<p>Currently, I work as a network engineer and a MikroTik co-trainer. I have knowledge and experience in the field of computer networking and server administration. Besides that, I also have a passion for teaching and sharing knowledge.</p>\r\n\r\n<p>In addition to being experienced in the field of computer networks, I am currently also learning programming. I am very interested in coding, because for me coding is about how we can solve problems. One day I hope to become a software engineer</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul`, `body`, `penulis`) VALUES
(2, 'Apa Itu Bootstrap?', '<p>Bootstrap adalah framework HTML, CSS, dan JavaScript yang berfungsi untuk mendesain website <em>responsive</em> dengan cepat dan mudah.&nbsp;</p>\r\n\r\n<p>Framework open source ini diciptakan pada tahun 2011 oleh Mark Otto dan Jacob Thornton dari Twitter. Itulah kenapa dulunya Bootstrap dinamakan <strong>Twitter Blueprint</strong>.&nbsp;</p>\r\n\r\n<p>Bootstrap dengan cepat meraih popularitas digunakan oleh <strong>27% website di seluruh dunia</strong>. Hal itu karena kesederhanaan dan konsistensi yang ditawarkan Bootstrap dibanding framework lainnya saat itu.&nbsp;</p>\r\n\r\n<p>Kemudahan yang ditawarkan oleh Bootstrap adalah Anda tak perlu <em>coding</em> komponen website dari nol. Framework ini tersusun dari kumpulan file CSS dan JavaScript berbentuk <em>class</em> yang tinggal pakai.&nbsp;</p>\r\n\r\n<p><em>Class </em>yang disediakan Bootstrap juga cukup lengkap. Mulai dari <em>class </em>untuk layout halaman, <em>class </em>menu navigasi, <em>class </em>animasi, dan masih banyak lainnya.&nbsp;</p>\r\n\r\n<p>Menariknya lagi, Bootstrap bersifat responsive berkat <strong>grid system</strong><em> </em>yang digunakan. Sistem grid pada bootstrap menggunakan rangkaian <em>containers</em>, baris, dan kolom untuk menyesuaikan bentuk layout dan konten website Anda.</p>\r\n\r\n<p>Dengan kata lain, Bootstrap menjamin tampilan website Anda akan tetap rapi dan konsisten di berbagai perangkat pengunjung. Baik melalui smartphone, tablet, atau laptop.</p>\r\n', ''),
(3, 'Pengertian Front End Web', '<p>Pada dasarnya, <em>front end</em> adalah salah satu bagian dari website yang menampilkan tampilan pada para pengguna. Bagian ini dibuat dengan menggunakan <em>HyperText Markup Language</em> (HTTP), <em>Cascading Style Sheets</em> (CSS), dan juga JavaScript. Sehingga, suatu URL bisa bekerja dan menampilkan situs website dengan baik.</p>\r\n\r\n<p>Berdasarkan laman <a href=\"https://careerfoundry.com/en/blog/web-development/whats-the-difference-between-frontend-and-backend/#5-should-i-learn-frontend-or-backend-development-or-both\">Career Foundry</a>, <em>front end</em> <em>developer</em> adalah mereka yang memiliki tanggung jawab dalam menghubungkan suatu situs website ataupun aplikasi dengan para penggunanya.</p>\r\n\r\n<p>Mereka akan membuat gambar, tombol, teks, dan juga menu serta interaksi antar setiap situs atau aplikasi dengan para pengguna. Oleh karena itu, mereka juga biasa dikenal dengan <em>client-side</em>.</p>\r\n\r\n<p><em>Front end</em> adalah suatu hal yang tidak dibuat dengan merancang desain dari suatu situs ataupun aplikasi dari nol. Karena, pada dasarnya hal tersebut sudah dikerjakan oleh <em>UI designer</em>.</p>\r\n\r\n<p>Tugas <em>front end</em> adalah memindahkan desain yang dibuat oleh <em>UI designer</em> dalam bentuk yang lebih interaktif dan membuat desain tersebut menjadi lebih hidup. Nah, untuk membuat suatu situs website atau aplikasi, maka dibutuhkan juga seorang <em>back end developer</em>.</p>\r\n\r\n<p>Tugas mereka adalah memastikan semua hal yang dibuat oleh<em> front end developer</em> ataupun sistem dan server dibalik dibuatnya situs website atau aplikasi bisa bekerja sebagaimana mestinya. Mereka juga sering disebut dengan <em>server-side</em>.</p>\r\n\r\n<p><em>Back end</em> sangat diperlukan karena mempunyai keahlian dalam mengolah suatu aplikasi atau situs website. Hal tersebut dikarenakan pengembangan dan juga perbaikan suatu situs website atau aplikasi akan terus terjadi seiring perkembangan waktu.</p>\r\n\r\n<p>Nah, untuk melakukan hal tersebut, maka suatu situs website atau aplikasi memerlukan seorang <em>back end</em>.</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'panji', 'kepo123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
