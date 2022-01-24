-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Nov 2021 pada 05.56
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_niza`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_tr`
--

CREATE TABLE `bukti_tr` (
  `id_bukti` int(5) NOT NULL,
  `id_order` int(5) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `gambar_bukti` text NOT NULL,
  `jumlah_tr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukti_tr`
--

INSERT INTO `bukti_tr` (`id_bukti`, `id_order`, `tanggal`, `gambar_bukti`, `jumlah_tr`) VALUES
(29, 6, '12-03-2021 14:56:43', 'program-img3.jpg', 0),
(30, 8, '07-04-2021 16:16:23', 'admin.jpg', 0),
(31, 9, '06-06-2021 00:30:32', 'CamScanner 05-19-2021 13.13.pdf', 0),
(32, 10, '06-06-2021 00:50:23', 'IMG_20210522_190126.jpg', 0),
(33, 13, '13-06-2021 22:53:26', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(34, 14, '13-06-2021 23:11:34', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(35, 15, '13-06-2021 23:21:28', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(36, 17, '13-06-2021 23:31:00', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(37, 18, '13-06-2021 23:37:30', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(38, 19, '13-06-2021 23:45:12', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(39, 20, '13-06-2021 23:58:50', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(40, 21, '14-06-2021 00:07:47', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(41, 22, '14-06-2021 00:19:48', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(42, 24, '14-06-2021 00:23:32', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(43, 25, '14-06-2021 00:26:28', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 225000),
(44, 26, '14-06-2021 00:33:04', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(45, 27, '14-06-2021 00:46:13', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(46, 28, '14-06-2021 23:28:36', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(47, 29, '14-06-2021 23:35:12', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(48, 30, '14-06-2021 23:39:00', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(49, 32, '14-06-2021 23:47:25', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(50, 33, '15-06-2021 00:18:17', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(51, 34, '15-06-2021 00:27:58', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(52, 35, '15-06-2021 00:49:57', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(53, 36, '15-06-2021 01:25:41', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(54, 37, '15-06-2021 01:32:21', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(55, 38, '15-06-2021 01:37:31', 'WhatsApp Image 2021-02-16 at 13.45.15.jpeg', 0),
(56, 39, '21-06-2021 17:11:22', 'cola-cola.jpg', 0),
(57, 40, '22-06-2021 15:22:13', 'admin.jpg', 0),
(58, 42, '23-06-2021 13:29:48', 'buikti.png', 20000),
(59, 44, '23-06-2021 14:51:23', 'buikti.png', 200000),
(60, 45, '25-06-2021 11:00:45', 'IMG_20210522_190126.jpg', 450),
(61, 46, '26-06-2021 14:34:59', 'WhatsApp Image 2021-02-16 at 13.45.17.jpeg', 200000),
(62, 49, '22-07-2021 20:27:32', 'clas diagram fotografer.png', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(5) NOT NULL,
  `ket` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `ket`, `gambar`) VALUES
(4, 'Foto Pra Wedding indoor', 'foto indor.jpg'),
(5, 'Foto Pra Wedding Tema Islami', 'admin.jpeg'),
(6, 'foto Pra Wedding Outdoor', 'foto tunangan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kustomer`
--

CREATE TABLE `kustomer` (
  `id_kustomer` int(5) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kustomer`
--

INSERT INTO `kustomer` (`id_kustomer`, `nama_lengkap`, `username`, `password`, `no_hp`, `email`, `alamat`) VALUES
(18, 'Arya Novan oke', 'novan', '202cb962ac59075b964b07152d234b70', '084384824234', 'novanone.an@gmail.com', 'Jl. W.R. Monginsidi No 69 Teluk Betung'),
(19, 'Iqbal Pratama', 'iqbal', '202cb962ac59075b964b07152d234b70', '084387438743', 'iqbal@gmail.com', 'bandar lampung'),
(20, 'andi', 'andi', 'ce0e5bf55e4f71749eade7a8b95c4e46', '08997799444', 'andi@gmail.com', 'JL.panjang.no 9'),
(21, 'Ridwan Nurfariki', 'Ridwan', 'f035e531cb249f1a0ffca3122d2b46c4', '081293812014', 'Ridwan_Nurfariki@gmail.com', 'tanjung bintang'),
(22, 'Ridwan Nurfariki', 'Ridwan', 'd584c96e6c1ba3ca448426f66e552e8e', '0812117864', 'Ridwan_Nurfariki@gmail.com', 'tanjng bintang'),
(23, 'Suprapti', 'Suprapti', 'cb2403c3f2db8a2af425987e50b6a45c', '087899652771', 'Suprapti@gmail.com', 'tanjung sari'),
(24, 'Khairul Anwar', 'Khairul', '6e6600b05bbe9f0670853c23a81d8155', '182877643411', 'Khairul_Anwar@gmail.com', 'tanjung sari'),
(25, 'Mimik', 'Mimik', '1a9e27c6473ec77b6e218ced875bd654', '08124675421', 'Mimik@gmail.com', 'tanjung bintang'),
(26, 'Heryati', 'Heryati', '94e990104cf53c4c83d6a37e60916182', '081277546321', 'Heryati@gmail.com', 'tanjung bintang'),
(27, 'Solihin', 'Solihin', '5e6fb8f7d3b2f938bfc860b459edc128', '081976554001', 'Solihin@gmail.com', 'tanjng bintang'),
(28, 'Turimin', 'Turimin', 'f2a0de180bd4bc0ddccecb31c7340c39', '082167552431', 'Turimin@gmail.com', 'palputih simpang'),
(29, 'Suyatmi', 'Suyatmi', '4d7042fcfe0f72e3a897fb928ae396f1', '0898245317', 'Suyatmi@yahoo.com', 'palputih simpang'),
(30, 'Daryono', 'Daryono', '5023bfe69261d353f9bab88302f912a9', '089867513342', 'Daryono@gmai.com', 'palputih simpang'),
(31, 'Komara', 'Komara', 'bf6b814007ce9862c04af6e39efbd19f', '0821664500', 'Komara@gmail.com', 'serdang'),
(32, 'M. Talib', 'M. Talib', 'b78024c0afea6b5ff6379aac8d3498b6', '087865759393', 'M_Talib@gmail.com', 'serdang'),
(33, 'Muslih', 'Muslih', '96374dc907ed688fa8abde6aa5271dc9', '087765570027', 'Muslih@gamail.com', 'palputih simpang'),
(34, 'Prio Sujadi', 'Prio Sujadi', 'a370117996bfd348f9fb017c1c71d197', '087765691216', 'Prio_Sujadi@gmail.com', 'sindang sari'),
(35, 'Sardi', 'Sardi', '71faeefbf02aefcd2bd8f8d028d3e7ed', '081933125331', 'Sardi@gmail.com', 'sindang sari'),
(36, 'Khotib', 'Khotib', '708bacb262dfef51839860af05bba15d', '081907846661', 'Khotib@gmail.com', 'sido dadi'),
(37, 'R. Suwito. BE', 'R. Suwito. BE', 'ccab777a5e24bb6caf342b38311f881d', '087864727201', 'R_Suwito_BE@gmail.com', 'sido dadi'),
(38, 'Uta Jaya', 'Uta Jaya', '050a1b37a2f50bc996f2c79cba5d6376', '081805269904', 'Uta_Jaya@gamil.com', 'sindang anom'),
(39, 'Rojali', 'Rojali', '987bb8a57cfb1eee00fc53bf612bd17a', '', 'Rojali@gmail.com', 'sido dadi'),
(40, 'Abdul Rohim. S', 'Abdul Rohim. S', '9c78339d125c03fc0a05660bd8551f56', '08175785090', 'AbdulRohim._S@gmail.com', 'sindang anom'),
(41, 'Sandi', 'Sandi', '82075a4af9b5882e13b06e50a3488237', '081936772274', 'Sandi@gmail.com', 'sindang sari'),
(42, 'nofri andika', 'nofri', '827ccb0eea8a706c4c34a16891f84e7b', '082177577704', 'nofri_andika@gmail.com', 'bandar lampung'),
(43, 'Nofri andika', 'Nofri andika', '86109d400f0ed29e840b47ed72777c84', '082177577704', 'nofriandika95@gmail.com', 'Bandar lampung'),
(44, 'nofri andika', 'nofri andika', '827ccb0eea8a706c4c34a16891f84e7b', '082177577704', 'nofriandika95@gmail.com', 'bandar lampng'),
(45, 'Andi Irawan', 'andi', '202cb962ac59075b964b07152d234b70', '083267647343', 'andi@gmail.com', 'jl cempaka no 2 kota sepang bandar lampung'),
(46, 'Jeni Siboga', 'jeni', '202cb962ac59075b964b07152d234b70', '08726743647', 'jeni@gmail.com', 'jl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `judul`, `isi`) VALUES
(1, 'Niza Photography', '<p>Niza Photography bergerak dalam bidang jasa pemotretan didalam maupun di luar ruangan yang Berlokasi di JL.Raya Serdang Desa Serang IA, Kec,Tanjung Bintang, Lampung Selatan.&nbsp;Niza Photography sudah berdiri selama 7 tahun sejak tahun 2015 sampai dengan sekarang</p>\r\n'),
(2, 'Petunjuk Penggunaan', '<p>1. Pilih Paket yang anda inginkan.</p>\r\n\r\n<p>2. Setelah melakukan pemesanan, anda dapat melihat Riwayat Pemesanan, untuk melakukan Transaksi Pembayaran atau Batal Pemesanan</p>\r\n\r\n<p>3. Pembokingan Jasa Foto dilakukan sebulan sebelum acara</p>\r\n\r\n<p>4. trfansfer pembayaran</p>\r\n'),
(3, 'Hubungi Kami', 'STORE :\r\nJl. baradatu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id_order` int(5) NOT NULL,
  `id_kustomer` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id_order`, `id_kustomer`, `id_paket`, `tanggal`, `tanggal_transaksi`, `status`) VALUES
(6, 18, 4, '2021-03-13', '2021-06-16', 'lunas'),
(8, 19, 10, '2021-04-12', '2021-06-16', 'lunas'),
(9, 20, 10, '2021-04-19', '2021-06-16', 'lunas'),
(10, 20, 10, '2021-04-14', '2021-06-16', 'lunas'),
(11, 20, 26, '2021-06-13', '2021-06-16', 'lunas'),
(12, 20, 13, '2021-06-10', '2021-06-16', 'lunas'),
(13, 22, 12, '2021-02-01', '2021-06-16', 'tolak'),
(14, 22, 12, '2021-01-01', '2021-06-16', 'lunas'),
(15, 23, 22, '2021-01-01', '2021-06-16', 'lunas'),
(17, 24, 30, '2021-01-10', '2021-06-16', 'lunas'),
(18, 25, 22, '2021-02-01', '2021-06-16', 'lunas'),
(19, 26, 18, '2021-02-01', '2021-06-16', 'lunas'),
(20, 27, 26, '2021-02-02', '2021-06-16', 'lunas'),
(21, 28, 15, '2021-02-06', '2021-06-16', 'lunas'),
(22, 29, 16, '2021-01-01', '2021-06-16', 'lunas'),
(24, 0, 30, '2021-09-30', '2021-06-16', 'Transfer'),
(25, 0, 13, '2021-11-26', '2021-06-16', 'Transfer'),
(26, 30, 30, '2021-03-21', '2021-06-16', 'lunas'),
(27, 31, 20, '2021-03-02', '2021-06-16', 'lunas'),
(28, 32, 30, '2021-01-24', '2021-06-16', 'lunas'),
(29, 33, 29, '2021-02-07', '2021-06-16', 'lunas'),
(30, 34, 29, '2021-02-21', '2021-06-16', 'lunas'),
(32, 35, 15, '2021-02-01', '2021-06-16', 'lunas'),
(33, 36, 16, '2021-02-04', '2021-06-16', 'lunas'),
(34, 37, 16, '2021-02-08', '2021-06-16', 'lunas'),
(35, 38, 14, '2021-01-20', '2021-06-16', 'lunas'),
(36, 39, 13, '2021-02-08', '2021-06-16', 'lunas'),
(37, 40, 14, '2021-02-06', '2021-06-16', 'lunas'),
(38, 41, 22, '2021-02-11', '2021-06-16', 'lunas'),
(39, 42, 12, '2021-12-07', '2021-06-16', 'lunas'),
(40, 18, 13, '2021-06-22', '2021-06-16', 'Selesai'),
(42, 18, 14, '2021-06-26', '2021-06-23', 'Selesai'),
(44, 18, 12, '2021-06-23', '2021-06-23', 'Selesai'),
(45, 42, 14, '2021-06-27', '2021-06-25', 'Selesai'),
(46, 44, 12, '2021-06-06', '2021-06-26', 'Selesai'),
(47, 44, 13, '2021-06-27', '2021-06-26', 'Selesai'),
(48, 44, 12, '2021-06-21', '2021-06-29', 'Menunggu'),
(49, 45, 13, '2021-07-31', '2021-07-22', 'Selesai'),
(50, 46, 13, '2021-08-21', '2021-08-21', 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_plus`
--

CREATE TABLE `order_plus` (
  `id_plus` int(5) NOT NULL,
  `id_order` int(5) NOT NULL,
  `id_tambahan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_plus`
--

INSERT INTO `order_plus` (`id_plus`, `id_order`, `id_tambahan`) VALUES
(1, 65, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(5) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `isi`, `gambar`, `harga`) VALUES
(12, 'Paket Pre Wedding Oudoor', '<p><strong>SILVER</strong></p>\r\n\r\n<ol>\r\n	<li>1 lokasi foto</li>\r\n	<li>1x ceta foto 40X60cm + frame</li>\r\n	<li>15 edit foto</li>\r\n	<li>semua file dalam USB</li>\r\n</ol>\r\n', 'foto tunangan.jpg', 400000),
(13, 'Paket Pre Wedding Oudoor', '<p><strong>GOLD</strong></p>\r\n\r\n<ol>\r\n	<li>2 lokasi foto</li>\r\n	<li>makeup &amp; hairdo</li>\r\n	<li>1x ceta foto 40X60cm + frame</li>\r\n	<li>1 album 20X30cm (20 pages)</li>\r\n	<li>35 edit foto</li>\r\n	<li>semua file dalam USB</li>\r\n</ol>\r\n', '122477006_422680339126199_1984412395992490127_n.jpg', 600000),
(14, 'Paket Pre Wedding Oudoor', '<p><strong>PLATINUM</strong></p>\r\n\r\n<ol>\r\n	<li>3 lokasi foto</li>\r\n	<li>makeup &amp; hairdo</li>\r\n	<li>1 pakaian Gaun</li>\r\n	<li>2x cetak 40X60cm + frame</li>\r\n	<li>1 album 20X30cm (20 pages)</li>\r\n	<li>foto side</li>\r\n	<li>45 edit foto</li>\r\n	<li>semua file dalam USB</li>\r\n</ol>\r\n', '122265908_979140095931419_587983338465236853_n.jpg', 900000),
(15, 'Paket Pre Wedding Indoor', '<p><strong>SILVER</strong></p>\r\n\r\n<ol>\r\n	<li>2 jam pemotretan</li>\r\n	<li>makeup &amp; hairdo</li>\r\n	<li>2x cetak 40X50cm + frame</li>\r\n	<li>5 edit foto file</li>\r\n	<li>semua file dalam USB</li>\r\n</ol>\r\n', '1016263_769337343095742_1973687753_n.jpg', 300000),
(16, 'Paket Pre Wedding Indoor', '<p><strong>GOLD</strong></p>\r\n\r\n<ol>\r\n	<li>2 jam pemotretan</li>\r\n	<li>makeup &amp; hairdo</li>\r\n	<li>1 gaun pakaian</li>\r\n	<li>3x cetak 30X40cm tanpa bingkai</li>\r\n	<li>2x cetak 40X50cm + frame</li>\r\n	<li>10 foto edit</li>\r\n	<li>semua file dalam USB</li>\r\n</ol>\r\n', 'foto indor.jpg', 500000),
(17, 'Paket Wedding Clip', '<ol>\r\n	<li>3-5 menit Cinematic Clip</li>\r\n	<li>gratis media sosial teaser</li>\r\n	<li>semua file dalam USB</li>\r\n</ol>\r\n', '11863245_1125392427490230_4770042921239197573_n.jpg', 350000),
(18, 'paket baby shoot', '<p><strong>BRONZE</strong></p>\r\n\r\n<ol>\r\n	<li>1 pakaian bayi</li>\r\n	<li>1 property set up</li>\r\n	<li>10 file edit Hi Res</li>\r\n	<li>cetak 4 lbr 4R</li>\r\n	<li>cetak 2 lbr 10R</li>\r\n	<li>cetak 10 lbr 10R + frame</li>\r\n</ol>\r\n', '119743770_1521417464725479_7527243039551940277_n.jpg', 650000),
(19, 'paket baby shoot', '<p><strong>SILVER</strong></p>\r\n\r\n<ol>\r\n	<li>2 pakaian bayi</li>\r\n	<li>3 property set up</li>\r\n	<li>15 file edit Hi Res</li>\r\n	<li>cetak 4 lbr 4R</li>\r\n	<li>cetak 2 lbr 10R</li>\r\n	<li>cetak 1 lbr 10R + frame</li>\r\n	<li>Baby book 11S 10X30 CM</li>\r\n</ol>\r\n', '119786911_249268399736306_3646536004458211042_n.jpg', 850000),
(20, 'paket baby shoot', '<p><strong>GOLD</strong></p>\r\n\r\n<ol>\r\n	<li>1 pakaian bayi</li>\r\n	<li>1 property set up</li>\r\n	<li>15 file edit Hi Res</li>\r\n	<li>cetak 4 lbr 4R</li>\r\n	<li>cetak 2 lbr 10R</li>\r\n	<li>cetak 1 lbr 10R + frame</li>\r\n	<li>Baby book 11S 10X30 CM</li>\r\n</ol>\r\n', '119736529_3259276784189373_5779418463798205063_n.jpg', 950000),
(21, 'paket baby shoot', '<p><strong>PLATINUM</strong></p>\r\n\r\n<ol>\r\n	<li>2 pakaian bayi</li>\r\n	<li>3 property set up</li>\r\n	<li>15 file edit Hi Res</li>\r\n	<li>cetak 4 lbr 4R</li>\r\n	<li>cetak 2 lbr 10R</li>\r\n	<li>cetak 1 lbr 10R + frame</li>\r\n	<li>Baby book 11S 10X30 CM</li>\r\n	<li>cetak 1lbr 12R + frame</li>\r\n</ol>\r\n', '119609633_736254623599035_2219844636039712528_n.jpg', 1300000),
(22, 'paket baby shoot', '<p><strong>ADDITIONAL</strong></p>\r\n\r\n<ol>\r\n	<li>video teaser instagram</li>\r\n	<li>Home Servis</li>\r\n	<li>tambahan kostum</li>\r\n	<li>tambahan properti</li>\r\n</ol>\r\n', '81766834_558333598175367_6259897076639476595_n.jpg', 350000),
(23, 'Paket Tunangan', '<p><strong>PACKAGE : 1</strong></p>\r\n\r\n<ol>\r\n	<li>100 lbr 4R</li>\r\n	<li>2 lbr 4R</li>\r\n	<li>2 lbr 12R&nbsp; + frame</li>\r\n	<li>Max 4 jam</li>\r\n	<li>Album jumbo</li>\r\n</ol>\r\n', '93714823_536878060362313_1299541411986794191_n.jpg', 1500000),
(24, 'Paket Tunangan', '<p><strong>PACKAGE : 2</strong></p>\r\n\r\n<ol>\r\n	<li>Wedding Cinematic</li>\r\n	<li>Durasi 5-10 Menit</li>\r\n	<li>Kualitas Full HD</li>\r\n	<li>Format MP4</li>\r\n	<li>Link YouTube Full HD</li>\r\n</ol>\r\n', '93474146_527134121305059_2845831145824863506_n.jpg', 1800000),
(25, 'Paket Tunangan', '<p><strong>PACKAGE : 3</strong></p>\r\n\r\n<ol>\r\n	<li>Unlimited Shoot</li>\r\n	<li>140 lbr 4R</li>\r\n	<li>2 lbr 10R</li>\r\n	<li>2 lbr 12R&nbsp; + frame</li>\r\n	<li>Max 4 jam</li>\r\n	<li>Album jumbo</li>\r\n</ol>\r\n', '93375176_136925677897322_5929179007765013537_n.jpg', 2000000),
(26, 'Paket Tunangan', '<p><strong>PACKAGE : 4</strong></p>\r\n\r\n<ol>\r\n	<li>Unlimited Shoot</li>\r\n	<li>100 lbr 4R</li>\r\n	<li>2 lbr 10R</li>\r\n	<li>2 lbr 16R&nbsp; + frame</li>\r\n	<li>Max 4 jam</li>\r\n	<li>Album jumbo</li>\r\n	<li>Wedding Cinematic</li>\r\n</ol>\r\n', '96054598_168921547845324_1658572556627424013_n.jpg', 3000000),
(27, 'Paket Tunangan', '<p><strong>PACKAGE : 5</strong></p>\r\n\r\n<ol>\r\n	<li>Unlimited Shoot</li>\r\n	<li>100 lbr 4R</li>\r\n	<li>2 lbr 10R</li>\r\n	<li>2 lbr 16R&nbsp; + frame</li>\r\n	<li>Max 4 jam</li>\r\n	<li>Album jumbo</li>\r\n	<li>Wedding Cinematic</li>\r\n</ol>\r\n', '89619165_204984603900688_8112316184093089132_n.jpg', 3000000),
(28, 'Paket Tunangan', '<p><strong>PACKAGE : 6</strong></p>\r\n\r\n<ol>\r\n	<li>Unlimited Shoot</li>\r\n	<li>100 lbr 4R</li>\r\n	<li>2 lbr 10R</li>\r\n	<li>2 lbr 16R&nbsp; + frame</li>\r\n	<li>Max 4 jam</li>\r\n	<li>Album jumbo</li>\r\n	<li>Wedding Book</li>\r\n	<li>Wedding Cinematic</li>\r\n</ol>\r\n', '69232305_899838127066000_702624619757892405_n.jpg', 3800000),
(29, 'Paket Wedding Rumah', '<p><strong>HEMAT</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Terop + Soun system</strong></li>\r\n	<li><strong>Akat Nikah (Rias &amp; Busana)</strong></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>penganti&nbsp; + orang tua</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 3.<strong> Resepsi (Rias &amp; Busana)</strong></p>\r\n\r\n<ul>\r\n	<li>pengantin 1 pasang</li>\r\n	<li>orang tua + besan 2 pasang</li>\r\n	<li>kembar mayang 2 pasang</li>\r\n	<li>penjaga buku tamu 2 pasang</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. <strong>Catering (250 PAX)&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>menu paket standar</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. <strong>DEKORASI</strong></p>\r\n\r\n<ul>\r\n	<li>pelaminan 4-6 meter + rangkaian</li>\r\n	<li>panggung + karpet</li>\r\n	<li>penjor 1 pcs</li>\r\n	<li>janur kembang mayang 4 pcs</li>\r\n	<li>pundi uang 2</li>\r\n	<li>buku tamu + balpoin</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. <strong>FOTO &amp; VIDEO</strong></p>\r\n\r\n<ul>\r\n	<li>album exclusive akat &amp; resepsi</li>\r\n	<li>cetak 4R (1 kali)</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. <strong>MC 1 kali datang</strong></p>\r\n', '13524306_1329553543740783_998839469120409771_n.jpg', 25000000),
(30, 'Paket Wedding Rumah', '<p><strong>MERIAH</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Terop + Soun system</strong></li>\r\n	<li><strong>Akat Nikah (Rias &amp; Busana)</strong></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>penganti&nbsp; + orang tua</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 3.<strong> Resepsi (Rias &amp; Busana)</strong></p>\r\n\r\n<ul>\r\n	<li>pengantin 1 pasang</li>\r\n	<li>orang tua + besan 2 pasang</li>\r\n	<li>kembar mayang 2 pasang</li>\r\n	<li>penjaga buku tamu 2 pasang</li>\r\n	<li>among tamu 2 pasang</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. <strong>Catering (250 PAX)&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>menu paket silver</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. <strong>DEKORASI</strong></p>\r\n\r\n<ul>\r\n	<li>pelaminan 6-8 meter + rangkaian</li>\r\n	<li>panggung + karpet</li>\r\n	<li>penjor 1 pcs</li>\r\n	<li>janur kembang mayang 4 pcs</li>\r\n	<li>pundi uang 2</li>\r\n	<li>buku tamu + balpoin</li>\r\n	<li>dekorasi meja akat</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. <strong>FOTO &amp; VIDEO</strong></p>\r\n\r\n<ul>\r\n	<li>album exclusive akat &amp; resepsi</li>\r\n	<li>cetak 10R (1 kali)</li>\r\n	<li>video CD</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. <strong>MC (Akat + Resepsi)</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. <strong>Electon + Penyayi</strong></p>\r\n', '1912431_866188830077259_7942371944839747447_o.jpg', 40000000),
(31, 'Paket Wedding Rumah', '<p><strong>MEWAH</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Terop Arabian + Soun system</strong></li>\r\n	<li><strong>Akat Nikah (Rias &amp; Busana)</strong></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>penganti&nbsp; + orang tua</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 3.<strong> Resepsi (Rias &amp; Busana)</strong></p>\r\n\r\n<ul>\r\n	<li>pengantin 1 pasang (2x Ganti)</li>\r\n	<li>orang tua + besan 2 pasang</li>\r\n	<li>kembar mayang 2 pasang</li>\r\n	<li>penjaga buku tamu 2 pasang</li>\r\n	<li>among tamu 2 pasang</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. <strong>Catering (500 PAX)&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>menu paket gold</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. <strong>DEKORASI</strong></p>\r\n\r\n<ul>\r\n	<li>pelaminan 6-8 meter + rangkaian</li>\r\n	<li>panggung + karpet</li>\r\n	<li>penjor 1 pcs</li>\r\n	<li>tuwuhan</li>\r\n	<li>janur kembang mayang 4 pcs</li>\r\n	<li>pundi uang 2</li>\r\n	<li>buku tamu + balpoin</li>\r\n	<li>dekorasi meja akat</li>\r\n	<li>figure 8 pcs</li>\r\n	<li>satnding AC 2</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. <strong>FOTO &amp; VIDEO</strong></p>\r\n\r\n<ul>\r\n	<li>cetak album magazine 10R</li>\r\n	<li>foto &amp; video prawidding</li>\r\n	<li>video akat + resepsi</li>\r\n	<li>2 album exclusive 4R</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. <strong>MC (Akat + Siraman + Resepsi)</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. <strong>Electon + Band + Penyayi</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9. Mobil Pegantin (Sedan)</strong></p>\r\n', '736278_829554753740667_5560826474730134944_o.jpg', 65000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambahan`
--

CREATE TABLE `tambahan` (
  `id_tambahan` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hrg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'novan', '202cb962ac59075b964b07152d234b70', 'konsumen'),
(3, 'winda', '202cb962ac59075b964b07152d234b70', 'konsumen'),
(4, 'oka', '202cb962ac59075b964b07152d234b70', 'konsumen'),
(10, 'panji', '202cb962ac59075b964b07152d234b70', 'pimpinan'),
(13, 'adi', '202cb962ac59075b964b07152d234b70', 'konsumen'),
(14, 'Daus', '715d7c9ff041047aeb25c535e7e2f661', 'konsumen'),
(15, 'oka', 'dcf80b2416ca823e8d807558a9310eb3', 'konsumen'),
(16, 'winda', 'aed2aec41bfd7ddb55b21f3ce206c66b', 'konsumen'),
(18, 'winda', 'c4ca4238a0b923820dcc509a6f75849b', 'konsumen'),
(20, 'gita', '202cb962ac59075b964b07152d234b70', 'konsumen'),
(21, 'riki', '202cb962ac59075b964b07152d234b70', 'konsumen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_tr`
--
ALTER TABLE `bukti_tr`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kustomer`
--
ALTER TABLE `kustomer`
  ADD PRIMARY KEY (`id_kustomer`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `order_plus`
--
ALTER TABLE `order_plus`
  ADD PRIMARY KEY (`id_plus`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tambahan`
--
ALTER TABLE `tambahan`
  ADD PRIMARY KEY (`id_tambahan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_tr`
--
ALTER TABLE `bukti_tr`
  MODIFY `id_bukti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kustomer`
--
ALTER TABLE `kustomer`
  MODIFY `id_kustomer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `order_plus`
--
ALTER TABLE `order_plus`
  MODIFY `id_plus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tambahan`
--
ALTER TABLE `tambahan`
  MODIFY `id_tambahan` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
