-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2020 at 02:21 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binus-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `pict` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `pict`, `description`, `price`) VALUES
(1, 'Unexpected Relationship', 'https://cdn.gramedia.com/uploads/items/9786026716255_Inestable__w414_hauto.jpg', 'Kisah ini bukan tentang relationship goals. Mereka tidak peduli apa itu relationship goals karena ini tentang hubungan Juna dan Dira. Hubungan mereka yang berbeda, tidak terduga, sampai banyak orang bertanya', 70000),
(3, 'Komik: Jingga dan Senja', 'https://cdn.gramedia.com/uploads/items/9786020618425_Komik-Jingga-__w200_hauto.jpg', 'JINGGA DAN SENJA Tari dan Ari tidak sengaja bertemu saat upacara di sekolah. Ari tertarik pada Tari dan melakukan segala cara untuk mendekati si adik kelas. Ternyata nama mereka mirip, karena Tari dan Ari sama-sama lahir saat matahari terbenam. Tetapi, keduanya memiliki pribadi yang sangat bertolak belakang. Tari pemberani dan selalu ceria, tapi keras kepala. Sedangkan Ari cowok berandalan yang sering ikut tawuran.\r\n', 65000),
(4, 'Obsessive Loves', 'https://cdn.gramedia.com/uploads/items/9786020638133_obsessive_loves_2_52__w414_hauto.jpg', 'Pernahkah kau dicintai dengan sangat? Ketika rasa menggebu tertumpah ruah padamu seorang. Syaira menerima cinta yang luar biasa. Cinta yang memenjarakan dengan segala obsesinya. Cinta yang berubah menjadi tragedi penuh air mata. Melumatkan gadis itu hingga hampir tak bersisa. Dalam dekap kelabu, mampukah Syaira membuka hati untuk menerima bantuan dan cinta baru?', 65000),
(5, 'Game Over', 'https://cdn.gramedia.com/uploads/items/9786232167735_Game_Over__w200_hauto.jpg', 'Glendy Adijunior adalah seadanya. Jeara Nindya Sjah adalah seandainya. Di permainan ini, mereka mencari titik temunya.', 99000);

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `name`, `email`) VALUES
(1, 'Rendi', 'rendi@gmail.com'),
(2, 'asd', 'rendi'),
(3, 'asd', 'rendi'),
(4, 'dharma circledu', 'dharma@circledu.com'),
(5, 'dharma circledu', 'dharma@circledu.com'),
(6, 'dharma circledu', 'dharma@circledu.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roleId`) VALUES
(1, 'usersrendi', '9fdf4d895e7eafa29a244d68fdfa9646', 0),
(9, 'rendi', 'd209fc47646bba5e5fdc3d3bbaad4b9c', 0),
(10, 'q', '7694f4a66316e53c8cdd9d9954bd611d', 0),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
