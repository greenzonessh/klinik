-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 11:32 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `jenis_kelamin`, `tanggal_lahir`, `jabatan`, `alamat`, `id_user`) VALUES
(3, 'Hadi Suswoyo', 'L', '2016-12-01', 'Dokter Umum', 'Perumahan Griya Mangli', 6);

-- --------------------------------------------------------

--
-- Table structure for table `jadwaldokter`
--

CREATE TABLE `jadwaldokter` (
  `id_jadwal` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `isi_jadwal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwaldokter`
--

INSERT INTO `jadwaldokter` (`id_jadwal`, `id_pegawai`, `isi_jadwal`) VALUES
(1, 2, '<table border="1" cellspacing="0" class="MsoTableGrid" style="border-collapse:collapse; border:solid windowtext 1.0pt; margin-left:5.4pt; width:16.0cm">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:49.6pt">\r\n			<p style="text-align:center"><strong>HARI</strong></p>\r\n			</td>\r\n			<td style="width:90.8pt">\r\n			<p style="text-align:center"><strong>TANGGAL</strong></p>\r\n			</td>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center"><strong>SHIFT</strong></p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:center"><strong>POLI</strong></p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:center"><strong>NAMA DOKTER</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:49.6pt">\r\n			<p style="text-align:center">Minggu</p>\r\n			</td>\r\n			<td rowspan="2" style="width:90.8pt">\r\n			<p style="text-align:center">01 Januari 2016</p>\r\n			</td>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Pagi</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Dokter Jaga UGD</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Dian Damayanti</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Sore</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Dokter Jaga UGD</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Novita Nur&rsquo;aini M.A.R.S</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:49.6pt">\r\n			<p style="text-align:center">Senin</p>\r\n			</td>\r\n			<td rowspan="2" style="width:90.8pt">\r\n			<p style="text-align:center">02 Januari 2016</p>\r\n			</td>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Pagi</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Dian Damayanti</p>\r\n\r\n			<p style="text-align:left">dr. Ana Silfia Margaretha</p>\r\n\r\n			<p style="text-align:left">dr. Ni&rsquo;matul Choiroh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Sore</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Eka Prasetya Wati</p>\r\n\r\n			<p style="text-align:left">dr. Yoga Wahyu Pratiwi</p>\r\n\r\n			<p style="text-align:left">drg. Alif Wardhani</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:49.6pt">\r\n			<p style="text-align:center">Selasa</p>\r\n			</td>\r\n			<td rowspan="2" style="width:90.8pt">\r\n			<p style="text-align:center">03 Januari 2016</p>\r\n			</td>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Pagi</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Eka Prasetya Wati</p>\r\n\r\n			<p style="text-align:left">dr. Dian Damayanti</p>\r\n\r\n			<p style="text-align:left">dr. Ni&rsquo;matul Choiroh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Sore</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Fitriana Putri, Msi</p>\r\n\r\n			<p style="text-align:left">dr. Yoga Wahyu Pratiwi</p>\r\n\r\n			<p style="text-align:left">drg. Leli Masyita Wati</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:49.6pt">\r\n			<p style="text-align:center">Rabu</p>\r\n			</td>\r\n			<td rowspan="2" style="width:90.8pt">\r\n			<p style="text-align:center">04 Januari 2016</p>\r\n			</td>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Pagi</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Sheila Soraya Choliq</p>\r\n\r\n			<p style="text-align:left">dr. Dian Damayanti</p>\r\n\r\n			<p style="text-align:left">dr. Ni&rsquo;matul Choiroh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Sore</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Ana Silfia Margaretha</p>\r\n\r\n			<p style="text-align:left">dr. Yoga Wahyu Pratiwi</p>\r\n\r\n			<p style="text-align:left">drg. Leli Masyita Wati</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:49.6pt">\r\n			<p style="text-align:center">Kamis</p>\r\n			</td>\r\n			<td rowspan="2" style="width:90.8pt">\r\n			<p style="text-align:center">05 Januari 2016</p>\r\n			</td>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Pagi</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Eka Prasetya Wati</p>\r\n\r\n			<p style="text-align:left">dr. Yoga Wahyu Pratiwi</p>\r\n\r\n			<p style="text-align:left">drg. Alif Wardhani</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Sore</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Eka Prasetya Wati</p>\r\n\r\n			<p style="text-align:left">dr. Dian Damayanti</p>\r\n\r\n			<p style="text-align:left">dr. Ni&rsquo;matul Choiroh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:49.6pt">\r\n			<p style="text-align:center">Jum&rsquo;at</p>\r\n			</td>\r\n			<td rowspan="2" style="width:90.8pt">\r\n			<p style="text-align:center">06 Januari 2016</p>\r\n			</td>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Pagi</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Fitriana Putri, Msi</p>\r\n\r\n			<p style="text-align:left">dr. Yoga Wahyu Pratiwi</p>\r\n\r\n			<p style="text-align:left">drg. Leli Masyita Wati</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Sore</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Yoga Wahyu Pratiwi</p>\r\n\r\n			<p style="text-align:left">dr. Sheila Soraya Choliq</p>\r\n\r\n			<p style="text-align:left">drg. Leli Masyita Wati</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:49.6pt">\r\n			<p style="text-align:center">Sabtu</p>\r\n			</td>\r\n			<td rowspan="2" style="width:90.8pt">\r\n			<p style="text-align:center">07 Januari 2016</p>\r\n			</td>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Pagi</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Sheila Soraya Choliq</p>\r\n\r\n			<p style="text-align:left">dr. Dian Damayanti</p>\r\n\r\n			<p style="text-align:left">dr. Ni&rsquo;matul Choiroh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:46.85pt">\r\n			<p style="text-align:center">Sore</p>\r\n			</td>\r\n			<td style="width:103.35pt">\r\n			<p style="text-align:left">Poli Umum 1</p>\r\n\r\n			<p style="text-align:left">Poli Umum 2</p>\r\n\r\n			<p style="text-align:left">Poli Gigi</p>\r\n			</td>\r\n			<td style="width:163.0pt">\r\n			<p style="text-align:left">dr. Ana Silfia Margaretha</p>\r\n\r\n			<p style="text-align:left">dr. Yoga Wahyu Pratiwi</p>\r\n\r\n			<p style="text-align:left">drg. Leli Masyita Wati</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`) VALUES
(1, 'aktivitas fisik'),
(2, 'Pola Makan DASH'),
(3, 'Berat Badan Sehat'),
(4, 'Diet Sodium'),
(5, 'Diet Alkohol');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `id_user`) VALUES
(1, 'Haris Prasetyo', 'L', '2016-12-01', 'Jalan Kalimantan V', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `id_user`) VALUES
(2, 'Sulistyani', 8),
(3, 'Trina', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `hasil_pemeriksaan` text NOT NULL,
  `tanggal_periksa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `id_pasien`, `id_dokter`, `hasil_pemeriksaan`, `tanggal_periksa`) VALUES
(1, 1, 3, '<p><strong>Perlu istrirahat</strong></p>\r\n', '2016-12-23 22:26:53'),
(2, 1, 3, '<p>Anda Terkena Tifus<br />\r\nLakukan Tips dibawah ini :</p>\r\n\r\n<ol>\r\n	<li>Jangan lupa berdoa</li>\r\n	<li>Jangan lupa minum obat</li>\r\n</ol>\r\n', '2016-12-23 22:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id_posting` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_posting` varchar(255) NOT NULL,
  `gambar_posting` varchar(255) DEFAULT NULL,
  `isi_posting` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_posting`, `id_pegawai`, `id_kategori`, `judul_posting`, `gambar_posting`, `isi_posting`, `tanggal`) VALUES
(1, 2, 1, 'Contoh Aktivitas Fisik', 'aktivitasfisik-1-1.PNG', '<p>s</p>\r\n', '2016-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `id_level` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_level`, `remember_token`) VALUES
(6, 'hadi', '$2y$10$BSiz3oxe4kK6lRQZBt03WOJrMKqpuRpl67qdFYMVSDkViugxhsfMu', 2, 'T1vfid0Zej86aIT8EvGscs0ncwDHFBUhnsGOZ1G5A6YuHH442Lar9cgtVSEO'),
(8, 'admin', '$2y$10$d4ycVKVJvayyYMjtzQr02.4hMbBi6sVIzRfNAh7C4Bi3gpRvCgLIu', 1, 'B7xzGazBAZJxWxtoC2RaThptfx4CegheuQ9P5v9Nm3q0wyKiBbqRpXC3oZxu'),
(9, 'haris', '$2y$10$yEhWgAlC8G6wuqVhyW8YPuDtaYrfnIs6BU5xeZ1DTyfz3UXWJpjvS', 3, 'IPxElexZnmRgeeDI2KCzyj8tbM6x2SY0WkXVfZtK3whdGKlHDJFfj6KtExqH'),
(10, 'admin2', '$2y$10$G48JHNCdUc5STQQNmaDFKeUefY.q6/7FJN5StJvyA5Ehq2HWuBf3W', 1, 'dM5KYacMyn9R9bm2e68SLkbsS8zo1wtzL10E7n3Z4ga2cVn2CpMn1Pm33nt9');

-- --------------------------------------------------------

--
-- Table structure for table `userlevel`
--

CREATE TABLE `userlevel` (
  `id_level` int(11) NOT NULL,
  `jenis_level` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlevel`
--

INSERT INTO `userlevel` (`id_level`, `jenis_level`) VALUES
(1, 'admin'),
(2, 'dokter'),
(3, 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `userlevel`
--
ALTER TABLE `userlevel`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `userlevel`
--
ALTER TABLE `userlevel`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  ADD CONSTRAINT `jadwaldokter_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemeriksaan_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posting_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `userlevel` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
