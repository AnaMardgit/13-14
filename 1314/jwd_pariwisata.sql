-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 05:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwd_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pesanan`
--

CREATE TABLE `daftar_pesanan` (
  `id_daftar_pesanan` int(11) NOT NULL,
  `id_paket_wisata` int(11) NOT NULL,
  `nama_pemesan` varchar(150) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `akomodasi` varchar(1) NOT NULL,
  `transportasi` varchar(1) NOT NULL,
  `makanan` varchar(1) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `total_tagihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket_wisata` int(11) NOT NULL,
  `nama_paket` varchar(200) NOT NULL,
  `deskripsi_paket` text NOT NULL,
  `img_paket` varchar(150) NOT NULL,
  `link_video` text NOT NULL,
  `harga_penginapan` int(11) NOT NULL,
  `harga_transportasi` int(11) NOT NULL,
  `harga_servis_makan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket_wisata`, `nama_paket`, `deskripsi_paket`, `img_paket`, `link_video`, `harga_penginapan`, `harga_transportasi`, `harga_servis_makan`) VALUES
(1, 'Paket Wisata Ciamis', 'Paket yang sangat direkomendasikan untuk liburan bersama keluarga dengan melihat pemandangan alam perbukitan, maupun objek wisata lainnya', 'ciamis.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vlk5e4L73no?si=W6MkZ5JAdX7JSA0F\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 5000000, 6000000, 3000000),
(2, 'Paket Wisata Bandung ', 'Paket yang sangat direkomendasikan untuk liburan bersama keluarga dengan melihat pemandangan alam perkotaan, maupun objek wisata lainnya', 'bandung.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9A_icqus6cM?si=VUzTCpGMnX-oy5Gc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 6000000, 5500000, 3000000),
(3, 'Paket Wisata Tasik', 'Paket yang sangat direkomendasikan untuk liburan bersama keluarga untuk melihat pemandangan alam, wisata kuliner maupun objek wisata lainnya', 'tasik.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WLpLJxznPwM?si=h7VPshuUxhtVm6fH\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 5000000, 6000000, 3000000),
(4, 'Paket Wisata Pangandaran', 'Paket yang sangat direkomendasikan untuk liburan bersama keluarga untuk melihat pemandangan alam, wisata kuliner maupun objek wisata lainnya', 'pangandaran.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rkrqk8BVqSQ?si=hW-AORj1uhX441tD\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 6000000, 5500000, 3000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  ADD PRIMARY KEY (`id_daftar_pesanan`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  MODIFY `id_daftar_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paket_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
