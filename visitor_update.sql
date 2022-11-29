/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `about` (
  `id_about` int(2) NOT NULL AUTO_INCREMENT,
  `isi_about` text,
  `foto_about1` varchar(100) DEFAULT NULL,
  `foto_about2` varchar(100) DEFAULT NULL,
  `foto_about3` varchar(100) DEFAULT NULL,
  `foto_about4` varchar(100) DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `kunci` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `keyweb` text NOT NULL,
  `tglmulai` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `log_activity` (
  `nolog` int(11) NOT NULL AUTO_INCREMENT,
  `kode_user` int(11) NOT NULL,
  `activity` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`nolog`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

CREATE TABLE `log_tamu` (
  `no_log` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) DEFAULT NULL,
  `id_tenant` int(11) DEFAULT NULL,
  `tujuan` varchar(500) DEFAULT NULL,
  `no_kartu` varchar(20) DEFAULT NULL,
  `check_in` varchar(255) DEFAULT NULL,
  `check_out` varchar(255) DEFAULT NULL,
  `tgl_update` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`no_log`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `profile` (
  `nama_company` varchar(200) DEFAULT NULL,
  `email_company` varchar(200) DEFAULT NULL,
  `alamat_company` varchar(300) DEFAULT NULL,
  `telepon_company` varchar(50) DEFAULT NULL,
  `fax_company` varchar(50) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `linkind` varchar(200) DEFAULT NULL,
  `peta` varchar(200) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `alamat_web` varchar(250) DEFAULT NULL,
  `nama_web` varchar(250) DEFAULT NULL,
  `deskripsi_web` text,
  `youtube` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `surat_masuk` (
  `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_surat` varchar(20) DEFAULT NULL,
  `nama_surat` varchar(200) DEFAULT NULL,
  `pengirim` varchar(200) DEFAULT NULL,
  `penerima` varchar(200) DEFAULT NULL,
  `tenant` int(11) DEFAULT NULL,
  `keterangan` text,
  `tanggal_diterima` datetime DEFAULT NULL,
  `tanggal_diambil` datetime DEFAULT NULL,
  `diambil` varchar(200) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_suratmasuk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(30) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `jenis_id` varchar(50) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `alamat` text,
  `instansi` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(200) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE TABLE `tenant` (
  `id_tenant` int(10) NOT NULL AUTO_INCREMENT,
  `nama_tenant` varchar(200) NOT NULL,
  `telepon_tenant` varchar(50) DEFAULT NULL,
  `lantai_tenant` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tenant`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

CREATE TABLE `user` (
  `kode_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login` int(1) NOT NULL,
  `waktulogin` datetime NOT NULL,
  `aktif` int(1) NOT NULL,
  `waktulogout` datetime NOT NULL,
  `iplogin` varchar(20) NOT NULL,
  `telepon_user` varchar(14) DEFAULT NULL,
  `email_user` varchar(200) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`kode_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




INSERT INTO `log_activity` (`nolog`, `kode_user`, `activity`, `ip`, `tanggal`) VALUES
(1, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:00:02');
INSERT INTO `log_activity` (`nolog`, `kode_user`, `activity`, `ip`, `tanggal`) VALUES
(2, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:01:11');
INSERT INTO `log_activity` (`nolog`, `kode_user`, `activity`, `ip`, `tanggal`) VALUES
(3, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:01:29');
INSERT INTO `log_activity` (`nolog`, `kode_user`, `activity`, `ip`, `tanggal`) VALUES
(4, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:01:51'),
(5, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:02:21'),
(6, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:03:14'),
(7, 1, 'user Menerima Tamu 082285498002', '::1', '2022-11-29 13:04:18'),
(8, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:09:55'),
(9, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:11:37'),
(10, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:11:55'),
(11, 1, 'user Menerima Tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:14:45'),
(12, 1, 'user Melakukan checkout tamu Rahmat Lutvi Furkon', '::1', '2022-11-29 13:16:11');

INSERT INTO `log_tamu` (`no_log`, `uid`, `id_tenant`, `tujuan`, `no_kartu`, `check_in`, `check_out`, `tgl_update`, `id_user`, `foto`) VALUES
(1, '082285498005', 4, 'Batusang', '082285498005', '2022-11-29 13:14:45', '2022-11-29 13:16:11', '2022-11-29 13:14:45', 1, '1669702485.jpg');


INSERT INTO `profile` (`nama_company`, `email_company`, `alamat_company`, `telepon_company`, `fax_company`, `twitter`, `facebook`, `linkind`, `peta`, `logo`, `alamat_web`, `nama_web`, `deskripsi_web`, `youtube`, `instagram`, `whatsapp`) VALUES
('', '', '', '', '', '', '', '', 'peta.jpg', 'logo.png', '', '', '', '', '', '');




INSERT INTO `tamu` (`id_tamu`, `uid`, `nama`, `jenis_id`, `nik`, `alamat`, `instansi`, `jenis_kelamin`, `id_user`, `tgl_update`, `no_hp`) VALUES
(1, '082285498005', 'Rahmat Lutvi Furkon', 'KTP', '082285498005', 'pADANG', '082285498005', 'Laki-laki', 1, '2022-11-29 13:14:45', '082285498005');
INSERT INTO `tamu` (`id_tamu`, `uid`, `nama`, `jenis_id`, `nik`, `alamat`, `instansi`, `jenis_kelamin`, `id_user`, `tgl_update`, `no_hp`) VALUES
(2, '082285498002', '082285498002', 'KTP', '082285498002', '082285498002', '082285498002', 'Laki-laki', 1, '2022-11-29 13:04:18', '082285498002');


INSERT INTO `tenant` (`id_tenant`, `nama_tenant`, `telepon_tenant`, `lantai_tenant`) VALUES
(1, 'Pidsus', '0', '1');
INSERT INTO `tenant` (`id_tenant`, `nama_tenant`, `telepon_tenant`, `lantai_tenant`) VALUES
(2, 'Pidum', 'Pidum', '1');
INSERT INTO `tenant` (`id_tenant`, `nama_tenant`, `telepon_tenant`, `lantai_tenant`) VALUES
(3, 'Intel', '0', '1');
INSERT INTO `tenant` (`id_tenant`, `nama_tenant`, `telepon_tenant`, `lantai_tenant`) VALUES
(4, '-', '-', '1'),
(5, '-', '0', '1'),
(6, '-', '0', '1'),
(7, '-', '0', '1'),
(8, '-', '0', '1'),
(9, '-', '0', '1'),
(10, '-', '0', '1'),
(11, 'Tim Pengelola LPSE', '0', '1'),
(12, 'Pokja Pengadaan Barang dan Jasa', '0', '1');

INSERT INTO `user` (`kode_user`, `nama`, `username`, `password`, `login`, `waktulogin`, `aktif`, `waktulogout`, `iplogin`, `telepon_user`, `email_user`, `foto`) VALUES
(1, 'Admin Website', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2018-01-31 09:39:26', 1, '2018-01-31 10:02:17', '::1', '085291836550', 'ahmadnursahid93@gmail.com', '1.png');
INSERT INTO `user` (`kode_user`, `nama`, `username`, `password`, `login`, `waktulogin`, `aktif`, `waktulogout`, `iplogin`, `telepon_user`, `email_user`, `foto`) VALUES
(4, 'Helpdesk', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '', '', '', '4.png');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;