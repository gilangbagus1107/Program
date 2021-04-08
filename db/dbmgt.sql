-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jan 2019 pada 03.22
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmgt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbevent`
--

CREATE TABLE `tbevent` (
  `kdevent` varchar(6) NOT NULL,
  `namaevent` char(30) NOT NULL,
  `gambar` text NOT NULL,
  `harga` varchar(10) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbevent`
--

INSERT INTO `tbevent` (`kdevent`, `namaevent`, `gambar`, `harga`, `detail`) VALUES
('A001', 'Kubik Art Stage', 'kubik_art_stage.jpg', 'Free 18+', 'Photo Exhibition - Design Exhibition - Fashion Exhibition - Sharing Session [Design] - Photo Booth - Local Brand'),
('A003', 'Kubik Fashion Alert', 'fashion_alert.jpg', 'Free 18+', 'GoAheadpeople present:Road to Soundsation Sumbar Fest 2017 Kubik FASHION ALERT !!! \r\nFashion artwork presentation by :      @ardha_dilla \r\nExibition by :      @ardha_dilla @haura_herlya '),
('B001', 'Soundsations SumbArt Fest 2017', 'sumbart_fest.jpg', '25000', 'GoAheadPeople Present, SOUNDSATIONS SumbArt Fest 2017'),
('B002', 'Unity Point Batamu Dunsanak', 'unity_point.jpg', '15000', 'DECLARATION OF FKBBS, ANNIVERSARY KNL, Villa Danau Atas, Alahan Panjang, Spesial Performance BERDANSKA.RIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkedatangan`
--

CREATE TABLE `tbkedatangan` (
  `idkedatangan` int(10) NOT NULL,
  `idpembayaran` int(10) NOT NULL,
  `idpendaftaran` int(10) NOT NULL,
  `kdevent` varchar(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `namamember` varchar(30) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkedatangan`
--

INSERT INTO `tbkedatangan` (`idkedatangan`, `idpembayaran`, `idpendaftaran`, `kdevent`, `username`, `namamember`, `telepon`) VALUES
(7, 1, 20, 'B001', 'gilangbagus', 'Gilang Bagus Pamungkas', '082170290104'),
(8, 6, 22, 'B001', 'riswandaputra', 'Riswanda Putra', '082386181858'),
(12, 0, 17, 'A001', 'endahsimon', 'Endah Monica Simon', '082283375393'),
(13, 0, 44, 'A001', 'lutfiputra', 'Lutfi Riady Putra', '081276214627'),
(14, 0, 48, 'A001', 'milham78', 'Muhammad Ilham', '083183884927'),
(15, 0, 52, 'A001', 'restysk', 'Resty Putri', '082288068208'),
(16, 0, 38, 'A001', 'ganneta', 'Genesa Agnes Melazt', '081268713566'),
(17, 0, 42, 'A001', 'ilhamratiaz', 'Ilham Ratiaz Syarizua', '0811665966'),
(18, 0, 34, 'A001', 'culik29', 'Yuli Asma', '082283227231'),
(19, 0, 64, 'A001', 'yudaleonard', 'Wahyuda Febriady Leonard ', '0811133433'),
(20, 0, 56, 'A001', 'riswandaputra', 'Riswanda Putra', '082386181858'),
(21, 0, 30, 'A001', 'arthackp', 'Artha Rahmat', '082288067934'),
(22, 0, 27, 'A001', 'aii3plex', 'Harry Setiawan', '08111170229'),
(23, 0, 60, 'A001', 'vellyamaisil', 'Vellya Maisil', '082139967094'),
(24, 0, 49, 'A003', 'mtrangga', 'M Taufik Rangga', '082384112326'),
(25, 0, 61, 'A003', 'wawahusni', 'Diwarul Husni', '081374139788'),
(26, 0, 39, 'A003', 'icanksat', 'Ikhsan Satrio', '082284446409'),
(27, 0, 23, 'A003', 'indahmus', 'Indah Mustika Rahayu', '085375835002'),
(28, 0, 45, 'A003', 'maflindo', 'Yoga Kurniawan Maflindo', '081266903745'),
(29, 0, 53, 'A003', 'rezafurqan', 'Reza Al Furqan', '081220334998'),
(30, 0, 35, 'A003', 'depis97', 'Devi Syafrima Putri', '081267801121'),
(31, 0, 28, 'A003', 'angganof', 'Angga Nofrian', '082284708248'),
(32, 0, 31, 'A003', 'ayukuniaw', 'Ayu Kurniawati', '085311124747'),
(33, 0, 57, 'A003', 'sriwahyuni', 'Sri Wahyuni', '081270512700'),
(34, 18, 50, 'B001', 'mudaaz', 'Mahmuda Azwar', '08197519186'),
(35, 24, 62, 'B001', 'yanryan', 'Ryan Haryadi', '081288200770'),
(36, 22, 58, 'B001', 'ubaybayu', 'Bayu Ariyono', '082284779925'),
(37, 16, 46, 'B001', 'mawarwati', 'Tri Mawarwati', '081266360302'),
(38, 10, 32, 'B001', 'budiefantri', 'Budi Efantri', '085274461200'),
(39, 11, 36, 'B001', 'ebby7711', 'Feby Ramadani', '081364947711'),
(40, 13, 40, 'B001', 'iculiyul', 'Try Yulia Wulandari', '082384953446'),
(41, 20, 54, 'B001', 'rianprada', 'Rian Pradana', '08116669993'),
(43, 25, 63, 'B002', 'yoginoven', 'Yogi Novendra', '082285750896'),
(44, 12, 37, 'B002', 'endahsimon', 'Endah Monica Simon', '082283375393'),
(45, 8, 29, 'B002', 'anips', 'Ramadani Purnama Sari', '081257869900'),
(46, 17, 47, 'B002', 'michaeljf', 'Michael Juno Fregi', '081374196120'),
(47, 21, 55, 'B002', 'ridhofeb', 'Ridho Febrian', '085263981831'),
(48, 9, 33, 'B002', 'caplin', 'Stefino Hardian', '081275737381'),
(49, 19, 51, 'B002', 'ogienad', 'Ogie Sunggala Adha', '082284581993'),
(50, 14, 41, 'B002', 'iksanbae', 'Iksan', '082176088941'),
(51, 15, 43, 'B002', 'kudinda', 'Dinda Rahmania', '082252919225'),
(52, 23, 59, 'B002', 'utha111', 'Khaery Saputra', '085364771506');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmember`
--

CREATE TABLE `tbmember` (
  `username` varchar(15) NOT NULL,
  `namamember` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbmember`
--

INSERT INTO `tbmember` (`username`, `namamember`, `email`, `password`, `telepon`, `alamat`) VALUES
('aii3plex', 'Harry Setiawan', 'aii3plex@gmail.com', 'aiigopek', '08111170229', 'Jln. Haji Agus Salim No. 9, Padang'),
('angganof', 'Angga Nofrian', 'angganofrian@gmail.com', 'nofrian90', '082284708248', 'Indarung, Batu Gadang, RT03 RW02, Padang'),
('anggidw', 'Anggi Dwi Wahyudi', 'anggidwiwahyudi95@gmail.com', 'anggidw95', '081268912136', 'Sitapung, Balai Gurah, Ampek Angkek, Kab. Agam'),
('anips', 'Ramadani Purnama Sari', 'nanieeee93@gmail.com', 'nanie93', '081257869900', 'Komp. Mawar Putih Blok F.16, Kuranji, Padang'),
('arthackp', 'Artha Rahmat', 'artharahmad.ar@gmail.com', 'artha321', '082288067934', 'Jln. Siak GG. Pungkut, Duri, Riau'),
('ayukuniaw', 'Ayu Kurniawati', 'ayukurnia88@gmail.com', 'kuniaw88', '085311124747', 'Jln. Veteran No. 160C, Bukittinggi'),
('budiefantri', 'Budi Efantri', 'budiefantri.cf@gmail.com', '1200budi', '085274461200', 'Komp. Cimpago Permai f17, Pauh, Padang'),
('caplin', 'Stefino Hardian', 'stefinohardian@gmail.com', 'caplinxxx', '081275737381', 'Jln. Parak Gadang No 43A, Simpang Haru, Padang'),
('culik29', 'Yuli Asma', 'yuliasma29@gmail.com', 'culik29', '082283227231', 'Jln. Puti Sangkar Bulan Kab. Pasaman'),
('depis97', 'Devi Syafrima Putri', 'putridevi9798@gmail.com', 'devi9798', '081267801121', 'Pasar Pdg Alai Kab. Padang Pariaman'),
('ebby7711', 'Feby Ramadani', 'febbi.ramadani@gmail.com', '7711ebby', '081364947711', 'Jorong Kapalo Danau Ateh, Kec. Danau Kembar'),
('endahsimon', 'Endah Monica Simon', 'endahmonica1904@gmail.com', 'endah', '082283375393', 'Jl. Aru Komplek Pemda nomor 52, Padang'),
('ganneta', 'Genesa Agnes Melazt', 'agnesmgenesa@gmail.com', 'ganneta01', '081268713566', 'Jln. Purnama No. 101 Hangtuah, Duri, Riau'),
('gilangbagus', 'Gilang Bagus Pamungkas', 'gilang.bagus.gb@gmail.com', 'pdg110792', '082170290104', 'Jl. Alai Timur, Komplek Villa Melati Mas II B/4'),
('icanksat', 'Ikhsan Satrio', 'ikhsansatrio08@gmail.com', 'caniago', '082284446409', 'Pasa Kandang Balah Hilir, Lubuk Alung'),
('iculiyul', 'Try Yulia Wulandari', 'tryyuliawulandarii@gmail.com', 'orangicul', '082384953446', 'Komp. Primavera No.28 Pulai Anak Air, Bukittinggi'),
('iksanbae', 'Iksan', 'iksaan.ae@gmail.com', 'iksanbae', '082176088941', 'Desa Pontian Mekar, Inhu Riau'),
('ilhamratiaz', 'Ilham Ratiaz Syarizua', 'amyellow99@gmail.com', 'kuning99', '0811665966', 'Komp. Perumahan Pondok Ranah Minang, dd/26, Padang'),
('indahmus', 'Indah Mustika Rahayu', 'indahmustika581@gmail.com', 'indah581', '085375835002', 'Jln. Lubuk Buaya, Mega Permai 1'),
('kudinda', 'Dinda Rahmania', 'dinda720.dr@gmail.com', 'kudin720', '082252919225', 'Padang Sarai Rt 002 Rw 002, Koto Tangah, Padang'),
('lutfiputra', 'Lutfi Riady Putra', 'lutfiriadyputra88@gmail.com', 'putralutfi', '081276214627', 'Jln. Lancang Kuning No.8, Titiantui, Duri Riau'),
('maflindo', 'Yoga Kurniawan Maflindo', 'yogamaflindo@yahoo.com', 'gamaf22', '081266903745', 'Marapalam Indah V, Padang'),
('mawarwati', 'Tri Mawarwati', 'trimawar97@gmail.com', 'mawar97', '081266360302', 'Jln. Raya Lubuk Begalung, Padang'),
('michaeljf', 'Michael Juno Fregi', 'michaeljunofregi71@gmail.com', 'michael71', '081374196120', 'Marapalam Idah V, Padang'),
('milham78', 'Muhammad Ilham', 'muhammadilham2778@gmail.com', '2778ilham', '083183884927', 'Sebrang Palinggam, Padang Selatan, Padang'),
('mtrangga', 'M Taufik Rangga', 'taufikrangg@gmail.com', 'ranggaek', '082384112326', 'Jln. Ikan Paus B No.2, Banuaran Padang'),
('mudaaz', 'Mahmuda Azwar', 'mahmudaazwar@yahoo.com', 'azwar02', '08197519186', 'Komp. Lubuk Gading Permai 3 B/6, Padang'),
('ogienad', 'Ogie Sunggala Adha', 'ogienad@gmail.com', 'ogieadha', '082284581993', 'Jln. Berlian Raya Blok N No. 12, Padang'),
('restysk', 'Resty Putri', 'restyputri202@gmail.com', '202putri', '082288068208', 'Jln. Jembatan Gantung, Kp. Baru XX, Lubeg, Padang'),
('rezafurqan', 'Reza Al Furqan', 'alfurqan.reza99@gmail.com', 'reza55', '081220334998', 'Jln. Rasuna Said No.97, Kp. Manggis Padang Panjang'),
('rianprada', 'Rian Pradana', 'pradanarian23@yahoo.com', 'pradarian', '08116669993', 'Jln. Cendrawasih No.15, Air Tawar, Padang'),
('ridhofeb', 'Ridho Febrian', 'ridho.febrian92@gmail.com', 'idoapuk', '085263981831', 'Wisma Lapai Jaya F.21, Kp Lapai, Padang'),
('riswandaputra', 'Riswanda Putra', 'riswandap15@gmail.com', 'wanda15', '082386181858', 'Jln. Air Camar 2, Kota Padang'),
('sriwahyuni', 'Sri Wahyuni', 'sriwahyuniesswe@gmail.com', 'uyunyuni', '081270512700', 'Jln. Gondangdia Kecil N. 11, Menteng Jakarta Pusat'),
('test', 'test', 'test@gmail.com', '123456', '0812000000', 'Jln. lubeg, padang'),
('ubaybayu', 'Bayu Ariyono', 'ariyono54@gmail.com', 'yono54', '082284779925', 'Jln. Syamratulangi Kp Baru, Pariaman'),
('utha111', 'Khaery Saputra', 'khaerysaputra@ymail.com', 'uthautha', '085364771506', 'Komp. Lbk. Gading Permai V B/4 Koto Tangah, Padang'),
('vellyamaisil', 'Vellya Maisil', 'vellya111198@gmail.com', 'adek111', '082139967094', 'Samping Puskesmas Nan Balimo, Solok'),
('wawahusni', 'Diwarul Husni', 'zuny74@gmail.com', 'kidiw123', '081374139788', 'Bodi Sipanjang, Batuhampar'),
('yanryan', 'Ryan Haryadi', 'haryadi_ryan@yahoo.com', 'yanryan321', '081288200770', 'Jln. Veteran Dalam No. 62H, Padang'),
('yoginoven', 'Yogi Novendra', 'yoginovendra34@gmail.com', 'yogi321', '082285750896', 'Jln. Ikan Mas, Banda Kali, Parak Karakah, Padang'),
('yudaleonard', 'Wahyuda Febriady Leonard ', 'ydleonard@gmail.com', 'uyudleo', '0811133433', 'Komplek Kuranji Permai Blok E.6, Padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpembayaran`
--

CREATE TABLE `tbpembayaran` (
  `idpembayaran` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `idpendaftaran` int(10) NOT NULL,
  `notransbank` varchar(5) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `nmpemegang` varchar(25) NOT NULL,
  `totbayar` int(10) NOT NULL,
  `tgltrans` date NOT NULL,
  `tglkon` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpembayaran`
--

INSERT INTO `tbpembayaran` (`idpembayaran`, `username`, `idpendaftaran`, `notransbank`, `bank`, `norek`, `nmpemegang`, `totbayar`, `tgltrans`, `tglkon`) VALUES
(1, 'gilangbagus', 20, '5574', 'Mandiri', '1320004519745', 'Gilang Bagus ', 25000, '2018-12-25', '2018-12-31'),
(6, 'riswandaputra', 22, '3377', 'Bank Nagari', '132000971974', 'Riswanda Putra', 25000, '2019-01-01', '2019-01-03'),
(8, 'anips', 29, '4590', 'BRI', '1320001519745', 'Ramadani Purnama Sari', 15000, '2018-12-26', '2019-01-03'),
(9, 'caplin', 33, '4467', 'BNI', '0821104519746', 'Stefino Hardian', 15000, '2018-12-04', '2018-12-30'),
(10, 'budiefantri', 32, '6780', 'Bank Bukopin', '1721104519493', 'Budi Efantri', 25000, '2018-12-06', '2018-12-22'),
(11, 'ebby7711', 36, '3126', 'Bank Nagari', '062770971974', 'Feby Ramadani', 25000, '2018-12-09', '2018-12-25'),
(12, 'endahsimon', 37, '3721', 'Mandiri', '122220971965', 'Endah Monica Simon', 15000, '2018-12-02', '2018-12-14'),
(13, 'iculiyul', 40, '5372', 'BRI', '1521004576742', 'Try Yulia Wulandari', 25000, '2018-12-17', '2018-12-29'),
(14, 'iksanbae', 41, '6921', 'BNI', '1423304519321', 'Iksan', 15000, '2018-12-16', '2018-12-17'),
(15, 'kudinda', 43, '5587', 'Bank Nagari', '1423304517445', 'Dinda Rahmania', 15000, '2018-12-01', '2018-12-03'),
(16, 'mawarwati', 46, '7021', 'Bank Bukopin', '1521004511433', 'Tri Mawarwati', 25000, '2018-12-20', '2018-12-21'),
(17, 'michaeljf', 47, '4512', 'BNI', '132000881374', 'Michael Juno Fregi', 15000, '2018-12-14', '2018-12-17'),
(18, 'mudaaz', 50, '3432', 'Bank Nagari', '0821104514526', 'Mahmuda Azwar', 25000, '2018-12-27', '2018-12-28'),
(19, 'ogienad', 51, '4475', 'BRI', '1620221516733', 'Ogie Sunggala Adha', 15000, '2018-12-19', '2018-12-21'),
(20, 'rianprada', 54, '4016', 'BNI', '1320301719780', 'Rian Pradana', 25000, '2018-12-05', '2018-12-07'),
(21, 'ridhofeb', 55, '6411', 'BRI', '1323204519668', 'Ridho Febrian', 15000, '2018-12-15', '2018-12-17'),
(22, 'ubaybayu', 58, '3029', 'Bank Nagari', '082110446780', 'Bayu Ariyono', 25000, '2018-12-15', '2018-12-16'),
(23, 'utha111', 59, '5403', 'Mandiri', '1766104517790', 'Khaery Saputra', 15000, '2018-12-16', '2018-12-17'),
(24, 'yanryan', 62, '5011', 'Bank Bukopin', '1721104510831', 'Ryan Haryadi', 25000, '2018-12-12', '2018-12-13'),
(25, 'yoginoven', 63, '4594', 'BNI', '1330401560735', 'Yogi Novendra', 15000, '2018-12-18', '2018-12-19'),
(26, 'test', 66, '5574', 'Mandiri', '0821104519746', 'test', 15000, '2019-01-03', '2019-01-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpendaftaran`
--

CREATE TABLE `tbpendaftaran` (
  `idpendaftaran` int(10) NOT NULL,
  `kdevent` varchar(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `namamember` varchar(30) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpendaftaran`
--

INSERT INTO `tbpendaftaran` (`idpendaftaran`, `kdevent`, `username`, `namamember`, `telepon`, `alamat`, `email`, `harga`, `status`) VALUES
(17, 'A001', 'endahsimon', 'Endah Monica Simon', '082283375393', 'Jl. Aru Komplek Pemda nomor 52, Padang', 'endahmonica1904@gmail.com', 'Free 18+', 'Free'),
(19, 'A001', 'gilangbagus', 'Gilang Bagus Pamungkas', '082170290104', 'Jl. Alai Timur, Komplek Villa Melati Mas II B/4', 'gilang.bagus.gb@gmail.com', 'Free 18+', 'Free'),
(20, 'B001', 'gilangbagus', 'Gilang Bagus Pamungkas', '082170290104', 'Jl. Alai Timur, Komplek Villa Melati Mas II B/4', 'gilang.bagus.gb@gmail.com', '25000', 'SUDAH DI KONFIRMASI'),
(22, 'B001', 'riswandaputra', 'Riswanda Putra', '082386181858', 'Jln. Air Camar 2, Padang', 'riswandap15@gmail.com', '25000', 'SUDAH DI KONFIRMASI'),
(23, 'A003', 'indahmus', 'Indah Mustika Rahayu', '085375835002', 'Jln. Lubuk Buaya, Mega Permai 1', 'indahmustika581@gmail.com', 'Free 18+', 'Free'),
(24, 'B001', 'anggidw', 'Anggi Dwi Wahyudi', '081268912136', 'Sitapung, Balai Gurah, Ampek Angkek, Kab. Agam', 'anggidwiwahyudi95@gmail.com', '25000', 'BELUM BAYAR'),
(26, 'B002', 'gilangbagus', 'Gilang Bagus Pamungkas', '082170290104', 'Jl. Alai Timur, Komplek Villa Melati Mas II B/4', 'gilang.bagus.gb@gmail.com', '15000', 'BELUM BAYAR'),
(27, 'A001', 'aii3plex', 'Harry Setiawan', '08111170229', 'Jln. Haji Agus Salim No. 9, Padang', 'aii3plex@gmail.com', 'Free 18+', 'Free'),
(28, 'A003', 'angganof', 'Angga Nofrian', '082284708248', 'Indarung, Batu Gadang, RT03 RW02, Padang', 'angganofrian@gmail.com', 'Free 18+', 'Free'),
(29, 'B002', 'anips', 'Ramadani Purnama Sari', '081257869900', 'Komp. Mawar Putih Blok F.16, Kuranji, Padang', 'nanieeee93@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(30, 'A001', 'arthackp', 'Artha Rahmat', '082288067934', 'Jln. Siak GG. Pungkut, Duri, Riau', 'artharahmad.ar@gmail.com', 'Free 18+', 'Free'),
(31, 'A003', 'ayukuniaw', 'Ayu Kurniawati', '085311124747', 'Jln. Veteran No. 160C, Bukittinggi', 'ayukurnia88@gmail.com', 'Free 18+', 'Free'),
(32, 'B001', 'budiefantri', 'Budi Efantri', '085274461200', 'Komp. Cimpago Permai f17, Pauh, Padang', 'budiefantri.cf@gmail.com', '25000', 'SUDAH DI KONFIRMASI'),
(33, 'B002', 'caplin', 'Stefino Hardian', '081275737381', 'Jln. Parak Gadang No 43A, Simpang Haru, Padang', 'stefinohardian@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(34, 'A001', 'culik29', 'Yuli Asma', '082283227231', 'Jln. Puti Sangkar Bulan Kab. Pasaman', 'yuliasma29@gmail.com', 'Free 18+', 'Free'),
(35, 'A003', 'depis97', 'Devi Syafrima Putri', '081267801121', 'Pasar Pdg Alai Kab. Padang Pariaman', 'putridevi9798@gmail.com', 'Free 18+', 'Free'),
(36, 'B001', 'ebby7711', 'Feby Ramadani', '081364947711', 'Jorong Kapalo Danau Ateh, Kec. Danau Kembar', 'febbi.ramadani@gmail.com', '25000', 'SUDAH DI KONFIRMASI'),
(37, 'B002', 'endahsimon', 'Endah Monica Simon', '082283375393', 'Jl. Aru Komplek Pemda nomor 52, Padang', 'endahmonica1904@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(38, 'A001', 'ganneta', 'Genesa Agnes Melazt', '081268713566', 'Jln. Purnama No. 101 Hangtuah, Duri, Riau', 'agnesmgenesa@gmail.com', 'Free 18+', 'Free'),
(39, 'A003', 'icanksat', 'Ikhsan Satrio', '082284446409', 'Pasa Kandang Balah Hilir, Lubuk Alung', 'ikhsansatrio08@gmail.com', 'Free 18+', 'Free'),
(40, 'B001', 'iculiyul', 'Try Yulia Wulandari', '082384953446', 'Komp. Primavera No.28 Pulai Anak Air, Bukittinggi', 'tryyuliawulandarii@gmail.com', '25000', 'SUDAH DI KONFIRMASI'),
(41, 'B002', 'iksanbae', 'Iksan', '082176088941', 'Desa Pontian Mekar, Inhu Riau', 'iksaan.ae@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(42, 'A001', 'ilhamratiaz', 'Ilham Ratiaz Syarizua', '0811665966', 'Komp. Perumahan Pondok Ranah Minang, dd/26, Padang', 'amyellow99@gmail.com', 'Free 18+', 'Free'),
(43, 'B002', 'kudinda', 'Dinda Rahmania', '082252919225', 'Padang Sarai Rt 002 Rw 002, Koto Tangah, Padang', 'dinda720.dr@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(44, 'A001', 'lutfiputra', 'Lutfi Riady Putra', '081276214627', 'Jln. Lancang Kuning No.8, Titiantui, Duri Riau', 'lutfiriadyputra88@gmail.com', 'Free 18+', 'Free'),
(45, 'A003', 'maflindo', 'Yoga Kurniawan Maflindo', '081266903745', 'Marapalam Indah V, Padang', 'yogamaflindo@yahoo.com', 'Free 18+', 'Free'),
(46, 'B001', 'mawarwati', 'Tri Mawarwati', '081266360302', 'Jln. Raya Lubuk Begalung, Padang', 'trimawar97@gmail.com', '25000', 'SUDAH DI KONFIRMASI'),
(47, 'B002', 'michaeljf', 'Michael Juno Fregi', '081374196120', 'Marapalam Idah V, Padang', 'michaeljunofregi71@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(48, 'A001', 'milham78', 'Muhammad Ilham', '083183884927', 'Sebrang Palinggam, Padang Selatan, Padang', 'muhammadilham2778@gmail.com', 'Free 18+', 'Free'),
(49, 'A003', 'mtrangga', 'M Taufik Rangga', '082384112326', 'Jln. Ikan Paus B No.2, Banuaran Padang', 'taufikrangg@gmail.com', 'Free 18+', 'Free'),
(50, 'B001', 'mudaaz', 'Mahmuda Azwar', '08197519186', 'Komp. Lubuk Gading Permai 3 B/6, Padang', 'mahmudaazwar@yahoo.com', '25000', 'SUDAH DI KONFIRMASI'),
(51, 'B002', 'ogienad', 'Ogie Sunggala Adha', '082284581993', 'Jln. Berlian Raya Blok N No. 12, Padang', 'ogienad@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(52, 'A001', 'restysk', 'Resty Putri', '082288068208', 'Jln. Jembatan Gantung, Kp. Baru XX, Lubeg, Padang', 'restyputri202@gmail.com', 'Free 18+', 'Free'),
(53, 'A003', 'rezafurqan', 'Reza Al Furqan', '081220334998', 'Jln. Rasuna Said No.97, Kp. Manggis Padang Panjang', 'alfurqan.reza99@gmail.com', 'Free 18+', 'Free'),
(54, 'B001', 'rianprada', 'Rian Pradana', '08116669993', 'Jln. Cendrawasih No.15, Air Tawar, Padang', 'pradanarian23@yahoo.com', '25000', 'SUDAH DI KONFIRMASI'),
(55, 'B002', 'ridhofeb', 'Ridho Febrian', '085263981831', 'Wisma Lapai Jaya F.21, Kp Lapai, Padang', 'ridho.febrian92@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(56, 'A001', 'riswandaputra', 'Riswanda Putra', '082386181858', 'Jln. Air Camar 2, Kota Padang', 'riswandap15@gmail.com', 'Free 18+', 'Free'),
(57, 'A003', 'sriwahyuni', 'Sri Wahyuni', '081270512700', 'Jln. Gondangdia Kecil N. 11, Menteng Jakarta Pusat', 'sriwahyuniesswe@gmail.com', 'Free 18+', 'Free'),
(58, 'B001', 'ubaybayu', 'Bayu Ariyono', '082284779925', 'Jln. Syamratulangi Kp Baru, Pariaman', 'ariyono54@gmail.com', '25000', 'SUDAH DI KONFIRMASI'),
(59, 'B002', 'utha111', 'Khaery Saputra', '085364771506', 'Komp. Lbk. Gading Permai V B/4 Koto Tangah, Padang', 'khaerysaputra@ymail.com', '15000', 'SUDAH DI KONFIRMASI'),
(60, 'A001', 'vellyamaisil', 'Vellya Maisil', '082139967094', 'Samping Puskesmas Nan Balimo, Solok', 'vellya111198@gmail.com', 'Free 18+', 'Free'),
(61, 'A003', 'wawahusni', 'Diwarul Husni', '081374139788', 'Bodi Sipanjang, Batuhampar', 'zuny74@gmail.com', 'Free 18+', 'Free'),
(62, 'B001', 'yanryan', 'Ryan Haryadi', '081288200770', 'Jln. Veteran Dalam No. 62H, Padang', 'haryadi_ryan@yahoo.com', '25000', 'SUDAH DI KONFIRMASI'),
(63, 'B002', 'yoginoven', 'Yogi Novendra', '082285750896', 'Jln. Ikan Mas, Banda Kali, Parak Karakah, Padang', 'yoginovendra34@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(64, 'A001', 'yudaleonard', 'Wahyuda Febriady Leonard ', '0811133433', 'Komplek Kuranji Permai Blok E.6, Padang', 'ydleonard@gmail.com', 'Free 18+', 'Free'),
(65, 'A001', 'test', 'test', '0812000000', 'Jln. lubeg, padang', 'test@gmail.com', 'Free 18+', 'Free'),
(66, 'B002', 'test', 'test', '0812000000', 'Jln. lubeg, padang', 'test@gmail.com', '15000', 'SUDAH DI KONFIRMASI'),
(67, 'B001', 'test', 'test', '0812000000', 'Jln. lubeg, padang', 'test@gmail.com', '25000', 'BELUM BAYAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbevent`
--
ALTER TABLE `tbevent`
  ADD PRIMARY KEY (`kdevent`);

--
-- Indexes for table `tbkedatangan`
--
ALTER TABLE `tbkedatangan`
  ADD PRIMARY KEY (`idkedatangan`);

--
-- Indexes for table `tbmember`
--
ALTER TABLE `tbmember`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  ADD PRIMARY KEY (`idpembayaran`);

--
-- Indexes for table `tbpendaftaran`
--
ALTER TABLE `tbpendaftaran`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbkedatangan`
--
ALTER TABLE `tbkedatangan`
  MODIFY `idkedatangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  MODIFY `idpembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbpendaftaran`
--
ALTER TABLE `tbpendaftaran`
  MODIFY `idpendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
