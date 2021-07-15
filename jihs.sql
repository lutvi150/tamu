-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 10:02 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jihs`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(2) NOT NULL,
  `judul_about` varchar(250) DEFAULT NULL,
  `judul_about2` varchar(250) DEFAULT NULL,
  `deskripsi_about` text,
  `foto_about` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `judul_about`, `judul_about2`, `deskripsi_about`, `foto_about`) VALUES
(1, 'Tentang Kami', 'Tentang Jakarta International Hotels School', '<p><strong>MENGAPA KE JIHS / AKPAR JIHS </strong></p>\r\n<ul>\r\n<li><strong>Akpar JIH terletak di kawasan yang strategis.</strong></li>\r\n<li><strong>Akpar JIH memiliki pelatihan terfokus pada jurusan yang diminati.</strong></li>\r\n<li><strong>Akpar JIH memiliki induk organisasi yang dapat menampung lulusannya</strong></li>\r\n<li><strong>Akpar JIH memiliki jaringan alumni selain di Indonesia juga di Timur Tengah, Amerika, Australia, Singapore, Jepang, Cruise Line, dll.</strong></li>\r\n</ul>', NULL),
(2, 'Sambutan Direktur', 'Sambutan Direktur', '<p><strong>Selamat datang di JIHS,</strong></p>\r\n<p>Mari maju bersama kami, kami siap membantu anda dalam menjawab tantangan dunia Internasional dalam memenuhi SDM Pariwisata yang handal. Dengan segenap profesionalisme kami membekali dan mendidik para hotelier  masa depan. Para lulusan kami terbukti telah berkiprah dalam industri pariwisata baik dalam negeri maupun luar negeri</p>\r\n<p>Dengan keunikan dan spesifikasi kurikulum serta dukungan dari Discovery Hotel kami akan terus berpartisipasi dalam dunia pariwisata. Terima kasih atas kepercayaan anda, kami akan membantu anda dalam mewujudkan karir anda di masa mendatang. Peluang berkarir di dunia pariwisata terbentang luas didepan anda jadilah Insan Pariwisata Indonesia yang handal bersama kami.</p>', NULL),
(3, 'Sejarah JIHS', 'Sejarah JIHS', '<h2 class="post-title">Sejarah JIHS</h2>\r\n		                        <p>Akademi Pariwisata Jakarta International Hotels memulai tahun pendidikan pada tanggal <strong>12 September 1994 dengan jumlah mahasiswa 114</strong>, kampus pertama berada di Hotel Borobudur Intercontinental. Pada tahun 1997, AKPAR JIH pindah dan memiliki gedung sendiri berlantai 3 dikawasan Sudirman Central Business District (SCBD) Jakarta Selatan.</p>\r\n<p>Dan berdirinya AKPAR JIH&nbsp; disahkan dengan keputusan Menteri Pendidikan &amp; Kebudayaan <strong>RI No.037/D/O/1995 tanggal 16 Mei 1995 dengan status Terdaftar.</strong></p>\r\n<p><strong>Dari tahun 2003 hingga tahun </strong><strong>201</strong><strong>3</strong> <strong>sudah meluluskan </strong><strong>1</strong><strong>3</strong><strong>36</strong><strong> mahasiswa </strong><strong>dan sudah terserap di industri sebanyak 87 %</strong>, hotel Borobudur <strong>120 ( 11,5 % ).</strong> Tahun 2014 berencana akan meluluskan 160 mahasiswa</p>\r\n<p><strong>Induk</strong> <strong>Organisasi</strong></p>\r\n<p>AKPAR JIH bukanlah badan usaha yang berdiri sendiri karena merupakan anak perusahaan dibawah PT. Jakarta International Hotel and Development yang berada di bawah Group Artha Graha. Selain AKPAR JIH, PT. JIHD juga mengelola beberapa hotel seperti Hotel Borobudur Jakarta, Hotel Palace Puncak, Hotel Pulau Pantara, Hotel Pulau Matahari, Discovery Kartika Plaza Bali, Discovery Kartika Kendari, Discovery Kartika Lampung. Hotel-Hotel tersebut merupakan hotel yang dimiliki oleh Group Artha Graha selain Gedung BEJ, Jak TV, Ritz Carlton Hotel Sudirman, Sudirman Central Business District, Electronic City dll.</p>', NULL),
(4, 'Visi dan Misi', 'Visi dan Misi', '<ul>\r\n<li>\r\n<h3>VISI</h3>\r\n</li>\r\n</ul>\r\n<ol>\r\n<li>Menjadi akademi hospitality terkemuka bertaraf internasional di tahun 2017</li>\r\n</ol>\r\n<ul>\r\n<li>\r\n<h3>MISI</h3>\r\n</li>\r\n</ul>\r\n<ol>\r\n<li>Menyediakan sarana dan prasarana pendidikan bertaraf internasional.</li>\r\n<li>Mempersiapkan lulusan perhotelan yang profesional baik kebutuhan internal maupun external</li>\r\n<li>Mengembangkan unit produksi melalui sarana praktek.</li>\r\n</ol>', NULL),
(5, 'Jajaran Management', 'Jajaran Management', '<p><strong>PENDIRI :</strong></p>\r\n<ol style="list-style-type: undefined;">\r\n<li>PT. JAKARTA INTERNATIONAL HOTELS & DEVELOPMENT.</li>\r\n<li>PT. JAKARTA INTERNATIONAL HOTELS & MANAGEMENT.</li>\r\n<li>YAYASAN KESEJAHTERAAN KARYAWAN PT. JAKARTA INTERNATIONAL HOTELS & DEVELOPMENT.</li>\r\n</ol>\r\n<br/>\r\n<p><strong>PELINDUNG :</strong></p>\r\n<p>Letjen TNI (Purn) DR.TB Silalahi, SH</p>\r\n<br/>\r\n<p><strong>PEMBINA :</strong></p>\r\n<ol style="list-style-type: undefined;">\r\n<li>Tomy Winata</li>\r\n<li>Sugianto Kusuma</li>\r\n</ol>\r\n<br/>\r\n<p><strong>DEWAN PENGAWAS :</strong></p>\r\n<ol style="list-style-type: undefined;">\r\n<li>Letjen TNI (Purn) DR.TB Silalahi, SH</li>\r\n<li>Santosa Gunara</li>\r\n<li>Hartono Tjahjadi Gunara</li>\r\n<li>George Risakota</li>\r\n</ol>\r\n<br/>\r\n<p><strong>DEWAN PENGURUS :</strong></p>\r\n<p>Ketua : H. Yusuf Indradewa, SH</p>\r\n<p>Wakil Ketua : Tjepjep Suparman, M</p>\r\n<p>Sekretaris : Toni Soesanto</p>\r\n<p>Bendahara : Bimmy Indrawan Tjahya</p>\r\n<br/>\r\n<p><strong>PIMPINAN AKADEMI PARIWISATA JAKARTA INTERNATIONAL HOTELS</strong></p>\r\n<ol style="list-style-type: undefined;">\r\n<li>Direktur : Taufik Hidayat, SE, MM</li>\r\n<li>Wakil Direktur : Wendy Purnama Tarigan, SE, MM, MBA</li>\r\n<li>Ketua Peminatan Tata Hidang : Budi Waluyo, S.ST. Par</li>\r\n<li>Ketua Peminatan Divisi Kamar : Ricky Daniel, S.ST. Par</li>\r\n<li>Ketua Peminatan Divisi Public Relation : Ricky Daniel, S.ST. Par</li>\r\n<li>Ketua Peminatan Pengolahan Makanan : Wendy Purnama Tarigan, SE, MM, MBA</li>\r\n<li>Kemahasiswaan & Koordinator Training : Rochiyat Setiawan, SE, MM</li>\r\n<li>Kabag Keuangan : Darwanti Daniel</li>\r\n<li>Humas & Marketing : Fadriyadi Kiandra, A.Md.Par</li>\r\n<li>Kabag Administrasi Pendidikan : Takdir Basuki, A.Md. Par</li>\r\n<li>Staff Keuangan & Perpustakaan : Endang Nurwijayanti, A.Md. Par</li>\r\n<li>Staf Administrasi Pendidikan : Tissa Meriyana, A.Md. Ak</li>\r\n</ol>', NULL),
(6, 'Mitra Kami', 'Mitra Kami', '<h3 style="text-align:left;"><p>Kami selalu siap melayani anda.</p>\r\n<p>berikut adalah sebagian dari klien atau mitra kami</p>\r\n<ol>\r\n<li>Hotel Borobudur / Diploma extension (2006 till present )</li>\r\n<li>Hotel Acacia / Diploma extension ( 2007 )</li>\r\n<li>Wiyata Hospility Center / education consulting (2006 )</li>\r\n<li>Wisma PGI Puncak Jawa Barat / Diploma extension ( 2010 )</li>\r\n<li>Hotel Jayakarta / Diploma extension (2006 )</li>\r\n<li>Hotel Alila Jakarta / Diploma extension (2009 )</li>\r\n<li>Hotel Bidakara/ Diploma extension (2006 )</li>\r\n<li>DEPNAKER Jakarta/ Hotel Course (2005 )</li>\r\n<li>Wisma Jambi Jakarta / Hospitality Training (2011 )</li>\r\n<li>Hotel Opuherti, Balige ,Sumatra Utara / Hotel Course (2011 )</li>\r\n<li>Hotel Tiara Bunga, Balige, Sumatra Utara / Hotel Course (2011 )</li>\r\n<li>Museum Batak , Sumatra Utara / Hotel course (2011)</li>\r\n<li>Cipta Usaha Sejati Plantation / Hotel course (2011)</li>\r\n</ol>\r\n<p>berikut adalah jaringan dari Jakarta International Hotel School :</p>\r\n<p>GROUP ARTHA GRAHA</p>\r\n<p>PT. JAKARTA INTERNATIONAL HOTELS AND DEVELOPMENT</p>\r\n<ol>\r\n<li>HOTEL BOROBUDUR JAKARTA</li>\r\n<li>HOTEL THE RITZ CARLTON SUDIRMAN JAKARTA</li>\r\n<li>HOTEL DISCOVERY KARTIKA PLAZA BALI</li>\r\n<li>HOTEL DISCOVERY KARTIKA KENDARI</li>\r\n<li>HOTEL DISCOVERY KARTIKA LAMPUNG</li>\r\n<li>HOTEL PALACE PUNCAK CIPANAS</li>\r\n<li>HOTEL PULAU PANTARA RESORT, PULAU SERIBU</li>\r\n<li>HOTEL PULAU MATAHARI RESORT , PULAU SERIBU</li>\r\n<li>BANK ARTHA GRAHA</li>\r\n<li>MALL PACIFIC PLACE & APARTEMENT JAKARTA</li>\r\n<li>MALL ARTHA GADING</li>\r\n<li>THE CAPITAL RESIDENT</li>\r\n<li>SCBD SUITE</li>\r\n<li>JAK TV</li>\r\n<li>ELECTRONIC CITY</li>\r\n<li>GEDUNG BURSA EFEK JAKARTA</li>\r\n</ol></h3>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id_admission` int(11) NOT NULL,
  `judul_admission` varchar(250) DEFAULT NULL,
  `deskripsi_admission` text,
  `brousur_admission` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id_admission`, `judul_admission`, `deskripsi_admission`, `brousur_admission`) VALUES
(1, 'Regulation Registration', '<p>Admission<br />Prosedur Pendaftaran & Registrasi</p>\r\n<p><strong>Prosedur Pendaftaran (One Day Service)</strong></p>\r\n<p>1. Membayar biaya pendaftaran Rp. 270.000,00.<br />2. Pengisian formulir pendaftaran<strong><em>-Pengisian formulir tidak dapat diwakilkan-</em></strong><br />3. Melengkapi Syarat Pendaftaran</p>\r\n<p><strong>A.</strong> 2 Lembar Fotocopy Ijasah / STTB <strong>B.</strong> 2 Lembar Fotocopy Akte Kelahiran<strong> C.</strong> 2 Lembar Fotocopy KTP <strong>D.</strong> 2 Lembar Fotocopy Bebas Narkoba, Sehat, & Tidak Buta Warna dari Rumah Sakit ( RS ) <strong>E.</strong> 2 Lembar Fotocopy SKCK dari Kepolisian<strong> F</strong>. Pas Foto pakaian Formal Background Merah <strong>2x3 : 4 Lembar & 3x4 : 6Lembar</strong><br />Mengikuti tes seleksi wawancara dalam bahasa Indonesia.</p>\r\n<p style=\\"text-align: left;\\">Mengikuti Tes Tertulis ( Bhs.Inggris & Peng.Umum )<br />Pemberitahuan hasil tes seleksi sbb, Diterima/ Diterima Bersyarat/ Tidak Diterima dapat diketahui dalam waktu <strong>10 MENIT</strong> saja.<br /><strong><em>*Diterima : Proses penerimaan mahasiswa baru dilanjutkan</em></strong><br /><strong><em>*Diterima Bersyarat : Menyetujui surat keterangan diterima bersyarat</em></strong><br /><strong><em>*Tidak diterima : Proses penerimaan mahasiswa baru tidak dilanjutkan</em></strong></p>\r\n<p style=\\"text-align: left;\\"><br />Bagi yang Diterima & Diterima Bersyarat akan mendapatkan Undangan<strong> Parent Dialogue</strong> atau Undangan Pertemuan orang tua/wali (jadwal tersendiri) untuk menjelaskan program pendidikan, perkembangan karier dan investasi studi.<br />Tes seleksi dilaksanakan setiap hari<strong> Senin – Jumat, pukul 08.00 – 17.00 WIB</strong> di kampus JIHS</p>', NULL),
(2, 'Registration Extension Class', '<p style=\\"text-align: center;\\">EXTENTION CLASS 3 DAYS on 1 WEEK</p>\r\n<p style=\\"text-align: center;\\">( WED - THURS - FRID )</p>\r\n<p style=\\"text-align: center;\\">5PM - 9PM</p>\r\n<p style=\\"text-align: left;\\"><strong>DIPLOMA 1 : HOTEL OPERATIONAL</strong></p>\r\n<p style=\\"text-align: left;\\"><strong>DIPLOMA 3 : HOTEL MANAGEMENT</strong></p>\r\n<p style=\\"text-align: left;\\"> </p>\r\n<p style=\\"text-align: left;\\"><strong>Proses registrasi awal</strong></p>\r\n<p style=\\"text-align: left;\\">Para calon mahasiswa baru untuk kelas karyawan atau Extention Class HARUS MEMBAWA SYARAT PENDAFTARAN terlebih dahulu</p>\r\n<p style=\\"text-align: left;\\">1. 2 Lembar foto Copy Ijasah Terakhir / STTB SMA / SMK / SEDERAJAT</p>\r\n<p style=\\"text-align: left;\\">2. 2 Lembar Foto Copy Akte kelahiran</p>\r\n<p style=\\"text-align: left;\\">3. 2 Lembar Foto Copy KTP</p>\r\n<p style=\\"text-align: left;\\">4. 2 Lembar Foto Copy keterangan bebas narkoba dari rumah sakit</p>\r\n<p style=\\"text-align: left;\\">5. 2 Lembar surat keterangan kelakuan baik ( SKCK / SKKB ) dari kepolisian</p>\r\n<p style=\\"text-align: left;\\"><strong>6. 2 LEMBAR SURAT KETERANGAN BEKERJA MINIMUM 2 TAHUN BEKERJA DI BIDANG ( PERHOTELAN, CATERING, RESTAURANT, RUMAH SAKIT, APARTEMENT & MALL )</strong></p>\r\n<p style=\\"text-align: left;\\">7. Pas Foto BERPAKAIAN FORMAL dan Background Merah, Ukuran</p>\r\n<p style=\\"text-align: left;\\">2 X 3 : 4lembar</p>\r\n<p style=\\"text-align: left;\\">3 X 4 : 6lembar</p>\r\n<p style=\\"text-align: left;\\"> </p>\r\n<p style=\\"text-align: left;\\">Biaya kuliah Program Diploma 1 Rp 4.500.000</p>\r\n<p style=\\"text-align: left;\\">Biaya Kuliah Program Diploma 3 Rp 9.000.000</p>\r\n<p style=\\"text-align: left;\\"> </p>\r\n<p style=\\"text-align: left;\\"><strong>PROSES ANGSURAN BIAYA KULIAH</strong></p>\r\n<p style=\\"text-align: left;\\">Diploma 1</p>\r\n<p style=\\"text-align: left;\\">Pembayaran 1 : Rp 2.500.000</p>\r\n<p style=\\"text-align: left;\\">Pembayaran 2 : Rp 1.000.000</p>\r\n<p style=\\"text-align: left;\\">Pembayaran 3 : Rp 1.000.000</p>\r\n<p style=\\"text-align: left;\\">Diploma 3</p>\r\n<p style=\\"text-align: left;\\">Pembayaran 1 : Rp 3.000.000</p>\r\n<p style=\\"text-align: left;\\">Pembayaran 2 : Rp 1.500.000</p>\r\n<p style=\\"text-align: left;\\">Pembayaran 3 : Rp 1.500.000</p>\r\n<p style=\\"text-align: left;\\">Pembayaran 4 : Rp 1.500.000</p>\r\n<p style=\\"text-align: left;\\">Pembayaran 5 : Rp 1.500.000</p>\r\n<p style=\\"text-align: left;\\"> </p>\r\n<p style=\\"text-align: left;\\">Biaya Formulir Pendaftran Rp 270.000</p>\r\n<p style=\\"text-align: left;\\"> </p>\r\n<p style=\\"text-align: center;\\"><strong><em>We Cordially Invite You To Come and See Our Campus In Action</em></strong></p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas_kampus`
--

CREATE TABLE `aktifitas_kampus` (
  `id_aktifitas` int(11) NOT NULL,
  `judul_aktifitas` varchar(250) DEFAULT NULL,
  `deskrispsi_aktifitas` text,
  `tgl_aktifitas` datetime DEFAULT NULL,
  `foto_aktifitas` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktifitas_kampus`
--

INSERT INTO `aktifitas_kampus` (`id_aktifitas`, `judul_aktifitas`, `deskrispsi_aktifitas`, `tgl_aktifitas`, `foto_aktifitas`) VALUES
(1, 'TABLE MANNER SMK 38', 'learn how to be great table manner with JIHS', '2015-03-20 14:17:03', NULL),
(2, 'Seminar Peluang dan Tantangan Lulusan Perhotelan Di Era Mendatang', '<p>Pada tanggal &nbsp;3 Maret 2014 diadakan seminar yang berjudul Peluang dan Tantangan Lulusan Perhotelan Di Era Mendatang. Acara ini bertempat Aula Akademi Pariwisata Jakarta International Hotels yang terletak di kawasan SCBD Sudirman. Sebagai nara sumber utama adalah Prof.DR.JB.Sumarlin mantan pejabat Mentri Ekonomi dan Keuangan pada masa orde baru. Selain dihadiri oleh para mahasiswa seminar ini juga dihadiri oleh beberapa pejabat teras di lingkungan Kementrian Ekonomi Kreatif dan para pejabat Direksi di lingkungan PT.JIHD Tbk. Para mahasiswa begitu antusias dalam mendengarkan wejangan dari mantan mentri ini, dan beberapa mahasiswa tampak bersemangat mengajukan beberapa pertanyaan. Bapak JB. Sumarlin berpesan kepada seluruh mahasiswa untuk Terus Bekerja Keras dan Belajar dalam menghadapi tantangan di masa mendatang.</p>', '2014-11-10 14:17:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(3) NOT NULL,
  `nama_alumni` varchar(250) DEFAULT NULL,
  `jurusan_alumni` varchar(250) DEFAULT NULL,
  `tahun_lulus` varchar(200) DEFAULT NULL,
  `jabatan_alumni` varchar(250) DEFAULT NULL,
  `deskripsi_alumni` text,
  `foto_alumni` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama_alumni`, `jurusan_alumni`, `tahun_lulus`, `jabatan_alumni`, `deskripsi_alumni`, `foto_alumni`) VALUES
(1, 'Doni Sudrajat', 'Diploma III', 'Diploma III', 'Room attendant JW Marriott Jakarta', '<p><p>Terima kasih kepada Dosen dan para staff di JIHS.</p>\r\n<p>saya memilih universitas ini karena fasilitas yang memadai dan cara pengajajaran atau dosen nya bisa menjelaskan materi dengan baik.</p>\r\n<p>selain itu lokasi yang strategis.</p></p>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita_kampus`
--

CREATE TABLE `berita_kampus` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(250) DEFAULT NULL,
  `isi_berita` text,
  `tgl_berita` datetime DEFAULT NULL,
  `foto_berita` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_kampus`
--

INSERT INTO `berita_kampus` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_berita`, `foto_berita`) VALUES
(1, 'Pariwisata Indonesia dan Peluang Kerja', '<p>Masyarakat Ekonomi ASEAN (MEA) yang akan berlaku efektif di akhir tahun 2015 berpotensi untuk mendorong pertumbuhan jumlah wisatawan ke Indonesia yang kini masih sekitar 9% per tahun menjadi di atas 10%. &ldquo;Dengan&nbsp; diberlakukannya MEA, akan terjadi peningkatan pergerakan manusia di wilayah ASEAN, yang berarti bahwa jumlah wisatawan ke Indonesia dari negara-negara ASEAN akan meningkat juga.&nbsp; Apalagi dengan adanya rencana pemberlakuan Common Visa untuk ASEAN, akan sangat memudahkan warga asing dari luar ASEAN masuk ke Indonesia, termasuk melalui hub-hub lain seperti Singapura atau Bangkok, maka kita optimistis bahwa akan terjadi akselerasi pariwisata Indonesi,</p>\r\n<p>&nbsp;</p>\r\n<p>Terdapat banyak peluang yang dapat Indonesia ambil dari integrasi perekonomian ASEAN melalui MEA, termasuk di sektor pariwisata. Pertanyaan yang penting adalah &ldquo;Apa yang harus kita lakukan agar Indonesia dapat meraup sebanyak-banyaknya manfaat dari MEA&rsquo; dan bagaiman secara nyata menyiapkan langkah-langkah tersebut?&rdquo;<br /> <br /> <strong>Peluang di Sektor Pariwisata</strong><br /> <br /> Indonesia harus merebut peluang dari pertumbuhan sektor pariwisata ASEAN yang merupakan tertinggi di dunia. Sepanjang periode 2005-2012, pariwisata kawasan ini mampu tumbuh rata-rata 8,3% per tahun, jauh di atas rata-rata pertumbuhan global yang hanya 3,6%. Bahkan pada 2013, arus kunjungan wisatawan ke negara-negara ASEAN sudah mencapai 92,7 juta atau meningkat 12% dibandingkan tahun sebelumnya, sementara pertumbuhan global hanya 5%.<br /> <br /> Perkembangan itu membuat peran sektor pariwisata semakin penting bagi perekonomian negara-negara ASEAN. Pada 2023, potensi kontribusi pariwisata terhadap perekonomian kawasan ini diproyeksikan akan mencapai US$ 480 miliar dengan pertumbuhan rata-rata 5,8% per tahun, sedangkan pertumbuhan investasinya sekitar 6,8% per tahun. &ldquo;Ini adalah peluang besar, pariwisata Indonesia harus bisa memanfaatkannya untuk memperkuat perekonomian nasional,&rdquo;.<br /> <br /> Dalam beberapa tahun terakhir ini, kontribusi sektor pariwisata terhadap perekonomian nasional semakin besar. Ini terasa saat perekonomian nasional menghadapi krisis global seperti tahun lalu, ketika penerimaan ekspor turun tajam. Pariwisata mengalami peningkatan kontribusinya naik dari 10% menjadi 17% dari total ekspor barang dan jasa Indonesia dan posisinya sebagai penyumbang devisa</p>\r\n<p>terbesar meningkat dari peringkat 5 menjadi peringkat 4 dengan penghasilan devisa sebesar 10 Milyar USD.<br /> <br /> Sementara itu, kontribusinya secara langsung terhadap PDB sudah mencapai 3,8% dan jika memperhitungkan efek penggandanya (Multiply effect), kontribusi pariwisata pada PDB mencapai sekitar 9%. Penyerapan tenaga kerja di sektor ini juga sudah mencapai 10,18 juta orang atau 8,9% dari total jumlah pekerja sehingga merupakan sektor pencipta tenaga kerja terbesar keempat.<br /> <br /> Di lihat dari sejumlah indikator yang ada, peluang untuk lebih meningkatkan peran pariwisata dalam perekonomian nasional cukup terbuka lebar bagi Indonesia. Daya saing sektor pariwisata Indonesia terus mengalami perbaikan seperti disebutkan oleh World Economic Forum, daya saing pariwisata Indonesia meningkat, dari peringkat 74 dari 140 negara dan terakhir&nbsp; ke posisi 70 dari 140 negara. Untuk ASEAN daya saing pariwisata Indonesia berada di peringkat 4.</p>\r\n<p><br /> Untuk meningkat daya saing ini, terutama dalam aspek peningkatan kualitas sumber daya manusia. Sampai 2013 lalu, Kemenparekraf telah melakukan sertifikasi sebanyak 58.627 tenaga kerja pariwisata. Angka ini jauh diatas target yang hanya memproyeksikan sebanyak 50.000 tenaga kerja sampai tahun 2014.&nbsp; Angka ini belum termasuk sertifikasi yang dilakukan secara swadana, ataupun sertifikasi langsung yang dilakukan oleh pendidikan tinggi pariwisata.&nbsp;<br /> Di samping itu, Kemenparekraf juga telah membentuk standarisasi untuk pelaku industri seperti hotel. Ada 9 standard usaha yang telah diberlakukan, termasuk Green Hotel.&nbsp; Standard Green Hotel meliputi aspek pengelolaan lingkungan, efisiensi pengunaan energi dan air, dampak terhadap komunitas di lokasi hotel, dan pengunaan bahan baku dan supply dari dalam negeri dan dari daerah setempat.</p>\r\n<p><br /> &ldquo;Bisa dikatakan, Pariwisata termasuk sektor yang relatif siap, bahkan dari aspek SDM. Indonesia juga memimpin karena standar yang digunakan untuk menilai kompetensi tenaga kerja Pariwisata di ASEAN (ACCSTP) sebagian besar adalah standar yang sudah diterapkan di Indonesia&rdquo;. Selain itu,Indonesia juga ditunjuk sebagai Regional Secretariat yang akan memfasilitasi implementasi dari Mutual Recognition Arrangement (MRA) dari tenaga kerja profesional pariwisata.&nbsp;&nbsp;&nbsp;<br /> <br /> Kemajuan pariwisata ini akan bermuara pada peningkatan kesejahteraan masyarakat, karena pariwisata mempunyai dampak pengganda yang besar terutama dengan industri kreatif, yang memang mempunyai hubungan sangat erat dengan pariwisata. Pariwisata dan ekonomi kreatif juga sektor yang pertumbuhannya inklusif karena nilai tambahnya langsung dirasakan masyarakat lokal.</p>\r\n<p>&nbsp;<br />&ldquo;Berbagai sektor dalam industri kreatif sudah menjadi atraksi pariwisata yang semakin populer, seperti kuliner, seni pertunjukan, desain, ataupun fashion.&nbsp; Kemajuan pariwisata akan secara langsung memajukan industri kreatif; sebaliknya industri kreatif yang maju akan menjadikan sebuah kota atau suatu daerah berkembang menjadi destinasi pariwisata yang unggul, sebagaimana bisa dilihat dari kasus Bandung, Jogja, Jember, Solo, Banyuwangi, maupun Bali,&rdquo;.</p>	', '2014-11-07 14:23:12', NULL),
(2, 'Industri Pariwisata dan Perhotelan pada kondisi ekonomi saat ini', '<p>Industri pariwisata dan perhotelan sepertinya sedang kembali meningkat terlepas dari prediksi bahwa kondisi ekonomi cenderung surut. Kami mewawancarai seorang pakar di industri ini mengenai kondisi saat ini sektor perhotelan.<br />&nbsp;<br />Industri pariwisata dan perhotelan sepertinya sedang kembali meningkat terlepas dari prediksi bahwa kondisi ekonomi cenderung surut. Bukan hanya karena para wisatawan menjadi lebih mengerti akan pilihan dan permintaan mereka, namun juga karena daya tarik tempat tujuan baru menjadi semakin tersebar di dunia yang menjadi semakin saling terkoneksi satu sama lain, maka tentu cakupan daerah wisata menjadi semakin beragam.<br />&nbsp;<br />Kami mewawancarai Arie van der Spek, wakil rektor dari Laureate Hospitality Education, yang menceritakan tentang sektor perhotelan Inggris saat ini dan masa mendatang.<br />&nbsp;<br />Pariwisata, juga perjalanan, saat ini menjadi industri paling bertumbuh di dunia. Apa saja faktor yang berkontribusi terhadap pertumbuhan ini?<br />&nbsp;<br />Teknologi memegang peran penting, sehingga perjalanan menjadi lebih mudah diakses. Rute penerbangan lebih banyak tersedia dan begitu juga dengan pemesanan tiket online, serta pertumbuhan media sosial telah merubah hubungan antara konsumen dan industri pariwisata. Saat ini, orang menjadi lebih cakap dan mengetahui lebih jelas &ndash; resensi dapat dibaca dan pemesanan dapat dilakukan hanya dengan menekan tombol.<br />&nbsp;<br />Peristiwa-peristiwa terkini juga memiliki pengaruh. Di London, pertumbuhan industri ini dipicu oleh beberapa peristiwa utama terkini, seperti Peringatan 60 tahun takhta Ratu Inggris dan pertandingan Olimpiade. Pada tahun 2012 sendiri, sekitar 8.000 kamar hotel baru dibuka di ibukota dan direncanakan 5.000 kamar lagi akan dibuka tahun 2013.<br />&nbsp;<br />Pertumbuhan juga dipicu oleh tren industri. Sebagai contoh, meningkatnya popularitas dari hotel butik (dengan kamar yang bernuansa unik) makin berkembang di wilayah-wilayah utama, dan diprediksi akan menjadi segmen hotel di London yang paling berkembang pesat, diperkirakan akan meningkat 2 kali lipat di antara tahun 2011 dan 2013. Faktor-faktor yang mempengaruhi sektor pariwisata sangat banyak dan beragam.&nbsp;<br />&nbsp;<br />Menurut Anda, mengapa perhotelan dapat menjadi salah satu bidang paling dinamis dalam dunia pekerjaan?<br />&nbsp;<br />Perhotelan di Inggris merupakan industri kelima terbesar, jelas industri ini menawarkan beragam jenis jenjang karir. Saat pelajar datang untuk mempelajari perhotelan, hal ini memungkinkan mereka untuk memasuki serangkaian bidang yang berbeda-beda, mulai dari manajemen umum sampai dengan analisator industri, manajemen olahraga dan acara-acara, dan banyak lagi.<br />&nbsp;<br />Menurut Anda, mengapa London menjadi tujuan sempurna untuk mempelajari subjek ini?<br />&nbsp;<br />Sebagai salah satu negara yang memegang peranan penting pada bidang keuangan dan bisnis dunia, London merupakan pilihan tepat jika dilihat dari segi lokasi. London adalah salah satu tempat paling dinamis dan diinginkan untuk menuntut ilmu secara internasional, hal ini memberi aturan ideal untuk belajar dan mengembangkan diri. Tidak lupa bahwa pusat kota London sendiri adalah rumah bagi lebih dari 1.600 hotel, dimana menawarkan kesempatan luas untuk bekerja magang dan prospek pekerjaan masa depan.&nbsp;<br />&nbsp;<br />Apa prospek karir yang dimiliki oleh para lulusan jurusan perhotelan dan pariwisata pada ekonomi saat ini?<br />&nbsp;<br />Industri perhotelan merupakan salah satu pemberi kerja terbesar, kedua di bawah pemerintahan. Terdapat 54 restoran dengan bintang Michelin di London sendiri, dan terlepas dari iklim ekonomi, industri ini terus berkembang dengan cepat. Untuk 10 tahun ke depan, diperkirakan industri ini akan memberi kontribusi pada GDP (Produk Domestik Bruto) Inggris dengan peningkatan sebesar 4% per tahun, yang artinya kurang lebih 69 juta pekerjaan baru di periode yang sama (WTTC, November 2011).&nbsp;<br />&nbsp;<br /><br />TENTANG PENULIS<br />HC INDONESIA EDITOR</p>', '2014-11-05 14:24:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(2) NOT NULL,
  `nama_dosen` varchar(300) DEFAULT NULL,
  `foto_dosen` varchar(300) DEFAULT NULL,
  `mata_kuliah` varchar(300) DEFAULT NULL,
  `jabatan` varchar(300) DEFAULT NULL,
  `profile_dosen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `foto_dosen`, `mata_kuliah`, `jabatan`, `profile_dosen`) VALUES
(1, 'Taufik Hidayat, SE, MM', NULL, 'Ops. Kantor Depan', 'Direktur', '<p><p>Lulusan Manajemen Perhotelan APT Trisakti tahun 1992 bergabung sejak tahun 2005 sebagai Kapala Bagian Kemahasiswaan. Pada tahun tahun 2004 menyelesaikan studi S1 pada bidanag manajemen dan tahun 2011 menyelesaikan program pasca sarjana bidang SDM.Setelah bertahun-tahun menghabiskan waktunya di industri perhotelan, sejak tahun 2004 mulai memberikan baktinya pada dunia pendidikan. Sebagai front liner ia pun banyak memberikan pelatihan di beberapa perusahaan maupun BUMN. Perjalan karir di dunia industri :</p>\r\n<p>1.Room Service Waiter Sari Pancific Hotel 1990</p>\r\n<p>2.Banquet Waiter Hotel Indonesia 1991</p>\r\n<p>3.Bellboy Santika Yogyakarta 1991</p>\r\n<p>4.Jayakarta Tower Jakarta 1992 Telephone Operator</p>\r\n<p>5. Airport Represenatative Dai-ichi Hotel 1993</p>\r\n<p>6. Front Desk Supervisor 1997</p>\r\n<p>7. Assistant Manager 2004</p>\r\n<p>8. Managing Partner Kaha Even Mangement 2006</p>\r\n<p>9. Ego Institute Founder 2008</p>\r\n<p>10. Excuitive Trainner BNI 2009</p>\r\n<p>11.Exective Trainner 2012</p>\r\n<p>Sejak tahun 2013 diberikan tugas dan tanggung jawab yang lebih sebagai Direktur Jakarta International Hotels School of Hotel Management.</p>\r\n<p>&nbsp;</p></p>\r\n'),
(2, 'Ibu Shanty Reni', NULL, 'English For Hotelier', 'English For Hotelier', '<p><p>food and beverage service department&nbsp;</p></p>\r\n'),
(3, 'Ricky Daniel, S.ST Par', NULL, 'Operasional Tata Graha', 'Head of Rooms Division Course', '<p><p>Mulai bergabung di JIHS sejak tahun 2013, lulusan STP Trisakti tahun 2008 dan banyak berkecimpung pada dunia Room Maintenance hingga saat ini.Ia pun tercatat sebagi dosen untuk Housekeeping pada STP Trisakti sebelum bergabung di JIHS.</p>\r\n<p>Perjalalan karir :</p>\r\n<p>1.Roomboy Paradise Sand Bay Hotel Penang Malaysia 2003</p>\r\n<p>2. Assistant Manager Kenctucky Fried Chicken 2009</p>\r\n<p>3.Housekeeping Supervisor Hotel Kempimski Indonesia 2011</p>\r\n<p>4.Assitant Housekeeper Morrissey Service Apartment 2011</p>\r\n<p>5. Housekeeping Manager MNC Tower 2011</p>\r\n<p>Sangat meninkmati dunia mengajar dan sekarang bertanggung jawab sebagai Head of Rooms Division Course</p></p>\r\n'),
(4, 'Bp. Budi Waluyo, S.ST Par', NULL, 'Tata Hidang Mak. & Min.', 'Staff', '<p><p><strong>CURRICULUM VITAE</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>PERSONAL DATA</em></strong></p>\r\n<p>&nbsp;</p>\r\n<p>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Budi waluyo</p>\r\n<p>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jakarta 21 September 1983</p>\r\n<p>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Petamburan rt 005/ Rw 001 no 35,</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tanah abang, Jakarta Pusat - Indonesia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>Mobile Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +628129116943</p>\r\n<p>Telephone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +621 53650359</p>\r\n<p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; buddy_mas@yahoo.com</p>\r\n<p>Citizenship&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indonesian</p>\r\n<p>Marital Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Single</p>\r\n<p>Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moslem</p>\r\n<p>Hobby&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Music,Soccer,Reading, &amp; Moviegoers</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>EDUCATION</em></strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>Period&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Institution&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qualification</p>\r\n<p>2002-2005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sahid tourism academy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Certificate in</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Accommodation</p>\r\n<p>1999-2002&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SMIP kasatriyan solo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel accommodation</p>\r\n<p>1996-1999&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SLTP N 5 klaten &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Secondary School</p>\r\n<p>1990-1996&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SD N 05 klaten&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Elementary Schools</p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>OBJECTIVES </em></strong>To provide high quality standard of service, and customer satisfaction. Offer excellent reputation , dedication and professional manner toward Management as well as another employee</p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p><strong><em>PERSONALITIES</em></strong></p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p>I&rsquo;m&nbsp; cooperative person to except the challenge, able to work with all the people at all level as a team player to achieve the goal.</p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p><strong><em>WORKING&nbsp; EXPERIENCE</em></strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>September 2013 &ndash; present &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lecture at Jakarta International Hotel School</p>\r\n<p>&nbsp;</p>\r\n<p>Sept 2011 &ndash; September 2013&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lecturer at STP SAHID Solo</p>\r\n<p>&nbsp;</p>\r\n<p>Feb 2011 &ndash; &nbsp;September 2011&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bar captain at Bibliotheque dine and club</p>\r\n<p>&nbsp;</p>\r\n<p>Jan 2011 &ndash; September 2011&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trainer bar at Indonesia Bartender School ( IBS)</p>\r\n<p>May 2009 &shy;&shy;&ndash; Jan 2011 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ast bartender Costa Cruise ship</p>\r\n<p>&nbsp;</p>\r\n<p>Des 2008 &ndash; May&nbsp; 2009 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bar captain at Birdcage caf&eacute; Jakarta</p>\r\n<p>&nbsp;</p>\r\n<p>Aug 2008 &ndash; Nov 2008&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bartender at Hotel kempinski Jakarta</p>\r\n<p>&nbsp;</p>\r\n<p>Oct 2005 &ndash; Aug 2008&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bartender at Bintan Lagoon Resort&nbsp;&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Feb 2005 &ndash; Sep 2005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Staff at hotel baron indah Solo</p>\r\n<p>&nbsp;</p>\r\n<p>Jun 2004 &ndash; Jan 2005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On the job training at Bintan lagoon resort&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>2002&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On the job training in Jayakarta hotel yogyakarta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p></p>\r\n'),
(5, 'Bp. Drs. Petrus Kanisius Nusa, MM', NULL, 'English For Hotelier I', 'Staff', '<p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p></p>\r\n'),
(6, 'Ibu Ririen Hendriaty', NULL, 'Butler Service', 'Staff', '<p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p></p>\r\n'),
(7, 'Bp. H. Miet Sumitra, SE, CAFM, MBA', NULL, 'Cost Control', 'Staff', '<p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p></p>\r\n'),
(8, 'Bp. Rochiyat Setiawan, SE, MM', NULL, 'Psikologi Pelayanan', 'Staff', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(9, 'Bp. Aris Sumarhadi', NULL, 'Praktek FP Set Menu', 'Staff', '<p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p></p>\r\n'),
(10, 'Ibu Dini Murniaty, S.ST, MM', NULL, 'Pastry', 'Staff', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(11, 'Bp. Wendy Purnama T, SE, MM, MBA', NULL, 'Teknik Supervisi', 'Wakil Direktur', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(12, 'Bp. Sudiyanto, SE', NULL, 'Peng. Praktek Culinary', 'Staff', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(13, 'Ibu Dewi Melati, SE', NULL, 'Mandarin For Hotelier', 'Staff', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(14, 'Ibu Dwi Andjaswati, MA', NULL, 'English For Hotelier I', 'Staff', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(15, 'Dian Handayani,M.A', NULL, 'English for Hotel', 'Ascociate Lecturer', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(16, 'Joko Haryono,CHA', NULL, 'HCCP', 'Ascociate Lecturer', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(17, 'Drs.Tjetjep Suparman,MSi', NULL, 'HUMAS', 'Ascociate Lecturer', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia metus eget dui tempus, et tristique velit tempor. Proin tincidunt, turpis ut tempor gravida, tellus neque faucibus tortor, eu volutpat lorem leo sed purus. Curabitur quis dui lectus. Fusce elementum ut nibh in euismod. Praesent dictum ipsum mi. Fusce dapibus felis ligula, et ultricies velit convallis vel. Mauris lacinia ultricies justo, ut molestie risus placerat id.</p>\r\n'),
(18, 'Poul Bistch', NULL, 'Hotel Management', 'Honoured Lecturer', NULL),
(19, 'Priyanto,CHE', NULL, 'Human Resources Management', 'Ascociate Lecturer', NULL),
(20, 'Nurul Sukma Lestari,S.ST,CHE,MM', NULL, 'Food Production', 'Ascociate Lecturer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `judul_foto` varchar(250) DEFAULT NULL,
  `kategori_foto` varchar(100) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kampus_event`
--

CREATE TABLE `kampus_event` (
  `id_event` int(11) NOT NULL,
  `judul_event` varchar(250) DEFAULT NULL,
  `deskrispsi_event` text,
  `tgl_event` datetime DEFAULT NULL,
  `foto_event` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampus_event`
--

INSERT INTO `kampus_event` (`id_event`, `judul_event`, `deskrispsi_event`, `tgl_event`, `foto_event`) VALUES
(1, 'Seminar', '<p style=\\"text-align: justify;\\">Pada tanggal &nbsp;3 Maret 2014 diadakan seminar yang berjudul Peluang dan Tantangan Lulusan Perhotelan Di Era Mendatang. Acara ini bertempat Aula Akademi Pariwisata Jakarta International Hotels yang terletak di kawasan SCBD Sudirman. Sebagai nara sumber utama adalah Prof.DR.JB.Sumarlin mantan pejabat Mentri Ekonomi dan Keuangan pada masa orde baru. Selain dihadiri oleh para mahasiswa seminar ini juga dihadiri oleh beberapa pejabat teras di lingkungan Kementrian Ekonomi Kreatif dan para pejabat Direksi di lingkungan PT.JIHD Tbk. Para mahasiswa begitu antusias dalam mendengarkan wejangan dari mantan mentri ini, dan beberapa mahasiswa tampak bersemangat mengajukan beberapa pertanyaan. Bapak JB. Sumarlin berpesan kepada seluruh mahasiswa untuk Terus Bekerja Keras dan Belajar dalam menghadapi tantangan di masa mendatang.</p>	', '2014-07-11 14:17:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id_karir` int(11) NOT NULL,
  `judul_karir` varchar(250) DEFAULT NULL,
  `deskripsi_karir` text,
  `foto_karir` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id_karir`, `judul_karir`, `deskripsi_karir`, `foto_karir`) VALUES
(1, 'Hospitality Career', '<p><strong>PELUANG KARIR</strong></p>\r\n<p><strong> </strong></p>\r\n<p>Perkembangan hotel di Jakarta akan terus menunjukan performa menggembirakan, hal ini dipicu oleh permintaan yang stabil dan meningkat seiring dengan positifnya pertumbuhan ekonomi.</p>\r\n<p>Pertumbuhan tingkat hunian tersebut juga dibarengi kenaikan tarif kamar sebesar rata-rata 4,45 persen ketimbang kuartal keempat tahun lalu. Tercatat, hotel bintang 3 mengalami peningkatan harga 6,2 persen menjadi rata-rata Rp 664.300. Kelas hotel di atasnya mencapai pertumbuhan harga 7,2 persen menjadi Rp 799.552, dan 2,7 persen untuk hotel bintang 5 yang mencapai Rp 1.340.409 per malam.</p>\r\n<p>Ke depan, Jakarta akan diramaikan oleh kehadiran 42 hotel baru hingga kuartal keempat 2014 mendatang. Dari sejumlah hotel tersebut, 21 di antaranya merupakan hotel berklasifikasi bintang empat, 13 hotel bintang tiga, dan sisanya hotel bintang lima. Hotel kelas mewah ini mayoritas terdistribusi di kawasan CBD Jakarta dengan cakupan wilayah Kemang, Kasablanka, Satrio, Menteng, Senayan, Senopati, Gatot Subroto dan Kemayoran. Adapun brand hotel internasional yang akan mengelola hotel-hotel tersebut adalah, JW Marriott, Raffless, Fairmont, Langham, St.Regis dan Grand Mercure.</p>\r\n<p>Indonesia sendiri akan memberikan kontribusi di bidang sarana akomodasi dengan tumbuhnya sektor perkembangan properti khususnya penambahan jumlah kamar sebanyak 30,942 kamar untuk kamar berbintang hingga tahun 2015.</p>\r\n<p>Jakarta sendiri akan memberikan kontribusi kamar hotel sebanyak 8,115 hingga tahun 2014, menurut sumber : World Property Chanel.</p>\r\n<p>Sedangkan sumberdaya yang mampu dicetak oleh sekolah pariwisata setingkat dengan akademi mencapai 2000 an pertahun.</p>\r\n<p>Begitu banyaknya Peluang dengan kebutuhan yang sangat tinggi memungkinkan sekali peluang karir di INDUSTRY PERHOTELAN </p>\r\n<p> </p>\r\n<p> </p>\r\n<p>Taufik Hidayat</p>\r\n<p> </p>\r\n<p><strong>HOSPITALITY CAREER</strong></p>\r\n<p>Hospitality is a dynamic and fast growing industry which offers many different career opportunities including:</p>\r\n<ul>\r\n<li>Bar Attendant</li>\r\n<li>Barista</li>\r\n<li>Chef Level 4</li>\r\n<li>Food and Beverage Manager</li>\r\n<li>Concierge and Porter</li>\r\n<li>Hotel Service Supervisor</li>\r\n<li>Waiter/waiters</li>\r\n<li>Front Office</li>\r\n<li>Housekepper</li>\r\n<li>Public Relation</li>\r\n<li>Marketing Communication</li>\r\n<li>Sales Banquet</li>\r\n<li>Event Management</li>\r\n<li>MICE</li>\r\n</ul>\r\n<p>Below you\\''ll find descriptions of these roles and the training required, and watch our career profile videos at the bottom of the page to meet real people who do the job.</p>\r\n<p><strong>What are the career opportunities?</strong></p>\r\n<p>Hotel service supervisors would generally be expected to be experienced employees with a strong background in front office operations. There is no specific requirement to have formal qualifications to work as a service supervisor, but there are formal qualifications available that may assist you in gaining employment and advancing within the industry <strong><em>“YOU ARE THE NEXT QUALIFIED HOTEL MANAGER ”</em></strong>.</p>', NULL),
(2, 'Industry Partner', '<p><strong>INDUSTRI PARTNER</strong></p>\r\n<p><strong>Our Sister Company </strong></p>\r\n<p>GROUP  ARTHA GRAHA</p>\r\n<p>PT. JAKARTA INTERNATIONAL HOTELS AND DEVELOPMENT</p>\r\n<p>HOTEL BOROBUDUR JAKARTA</p>\r\n<p>HOTEL THE RITZ CARLTON SUDIRMAN JAKARTA</p>\r\n<p>HOTEL DISCOVERY KARTIKA PLAZA BALI</p>\r\n<p>HOTEL DISCOVERY KARTIKA KENDARI</p>\r\n<p>HOTEL DISCOVERY AND RESIDANCE JAKARTA</p>\r\n<p>HOTEL ALILA BUFA JAKARTA</p>\r\n<p>HOTEL PALACE PUNCAK CIPANAS</p>\r\n<p>HOTEL PULAU PANTARA RESORT, PULAU SERIBU</p>\r\n<p>HOTEL PULAU MATAHARI RESORT , PULAU SERIBU</p>\r\n<p>BANK ARTHA GRAHA</p>\r\n<p>MALL PACIFIC PLACE & APARTEMENT JAKARTA</p>\r\n<p>MALL ARTHA GADING</p>\r\n<p>THE CAPITAL RESIDENT</p>\r\n<p>SCBD SUITE</p>\r\n<p>JAK TV</p>\r\n<p>ELECTRONIC CITY</p>\r\n<p>GEDUNG BURSA EFEK JAKARTA</p>\r\n<p> </p>\r\n<p> </p>\r\n<p>Selain  Perusahaan dari group juga kami bekerjasama dengan beberapa hotel berikut ini</p>\r\n<ol>\r\n<li>Hotel Keraton</li>\r\n<li>Hotel JW Marriot</li>\r\n<li>Hotel Dharmawangsa</li>\r\n<li>Hotel Sultan and Residance</li>\r\n<li>Hotel Grand Hyatt</li>\r\n<li>Hotel Hyatt Regency Bnadung</li>\r\n<li>Hotel Grand Kemang</li>\r\n<li>Hotel Cosmo Amarrossa</li>\r\n<li>Hotel Morrissey</li>\r\n<li>Hotel Atlet Century Park</li>\r\n<li>Hotel Best western Cawang</li>\r\n<li>Hotel Aryaduta Semanggi</li>\r\n<li>Hotel Aryaduta Tugu Tani</li>\r\n<li>Hotel Four Seasons</li>\r\n<li>KAHA Management</li>\r\n<li>Hotel Alila</li>\r\n<li>Banyan Tree Bintan Lagoon</li>\r\n<li>Hotel Aston Rasuna</li>\r\n<li>Dan lain-lain</li>\r\n</ol>', NULL),
(3, 'Career Center (Vacant Job )', '<p>Akademi Pariwisata Jakarta International Hotels adalah salah satu institus yang berada di bawah Yayasan Jakarta International Hotels dengan cakupan tugasnya adalah</p>\r\n<p>(1) memelihara basis data alumni yang bisa dimutakhirkan melalui situs career center,</p>\r\n<p>(2) memberikan layanan informasi lulusan ke calon pengguna lulusan atau perusahaan-perusahaan,</p>\r\n<p>(3) memberikan layanan proses penerimaan atau penyaluran lulusan berdasarkan permintaan calon karyawan </p>\r\n<p>(4) mengembangkan dan memelihara layanan berbasis web dengan menginformasikan lowongan-lowongan pekerjaan yang berkualitas</p>\r\n<p>(5) Melakukan koordinasi dengan program studi atau unit kerja terkait lainnya dalam melaksanakan study.</p>\r\n<p> </p>\r\n<p>DAPATKAN KEUNTUNGAN MENJADI MAHASISWA AKADEMI PARIWISATA JAKARTA INTERNATIONAL HOTEL DAN KEUNTUNGAN MENJADI ALUMNI DI CAREER CENTER, <strong><em>YOU ARE</em></strong> <strong><em>NO THING BECOME SOMETHING</em></strong></p>	', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(200) DEFAULT NULL,
  `hp_kontak` varchar(13) DEFAULT NULL,
  `subjek` varchar(200) DEFAULT NULL,
  `pesan` text,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kunci`
--

CREATE TABLE `kunci` (
  `no` int(11) NOT NULL,
  `keyweb` text NOT NULL,
  `tglmulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `nolog` int(11) NOT NULL,
  `kode_user` int(11) NOT NULL,
  `activity` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`nolog`, `kode_user`, `activity`, `ip`, `tanggal`) VALUES
(1, 8, 'User Logout Aplikasi', '::1', '2019-04-13 13:59:48'),
(2, 15, 'User Melakukan Login', '::1', '2019-04-13 13:59:57'),
(3, 15, 'User Logout Aplikasi', '::1', '2019-04-13 14:03:44'),
(4, 3, 'User Melakukan Login', '::1', '2019-04-13 14:03:51'),
(5, 3, 'User Menambahkan Divisi Keuangan', '::1', '2019-04-13 14:04:08'),
(6, 3, 'User Menambahkan User Operator Tampil', '::1', '2019-04-13 14:12:09'),
(7, 3, 'User Menambahkan User Operator Tenant 3', '::1', '2019-04-13 14:13:42'),
(8, 3, 'User Logout Aplikasi', '::1', '2019-04-13 14:18:25'),
(9, 4, 'User Melakukan Login', '::1', '2019-04-13 14:18:32'),
(10, 4, 'User membuat Box Baru dengan nomor 001/KPS/KEU/2019/0000001', '::1', '2019-04-13 14:19:02'),
(11, 4, 'User mengupload dokumen Apa Itu QR Code.pdf di box BOX201904010010010000001', '::1', '2019-04-13 14:19:14'),
(12, 4, 'User Logout Aplikasi', '::1', '2019-04-13 14:19:27'),
(13, 15, 'User Melakukan Login', '::1', '2019-04-13 14:19:35'),
(14, 15, 'User Logout Aplikasi', '::1', '2019-04-13 14:19:48'),
(15, 16, 'User Melakukan Login', '::1', '2019-04-13 14:19:54'),
(16, 16, 'User mengirim box BOX201904010010010000001', '::1', '2019-04-13 14:22:00'),
(17, 8, 'User Logout Aplikasi', '192.168.43.1', '2019-04-13 14:26:47'),
(18, 2, 'User Melakukan Login', '192.168.43.1', '2019-04-13 14:28:45'),
(19, 2, 'User menerima box 001/KPS/KEU/2019/0000001', '192.168.43.1', '2019-04-13 14:29:00'),
(20, 16, 'User Logout Aplikasi', '::1', '2019-04-13 14:29:17'),
(21, 2, 'User Melakukan Login', '::1', '2019-04-13 14:29:38'),
(22, 2, 'User Logout Aplikasi', '::1', '2019-04-13 14:33:04'),
(23, 2, 'User Melakukan Login', '::1', '2019-04-13 14:33:16'),
(24, 2, 'User Logout Aplikasi', '::1', '2019-04-14 08:46:52'),
(25, 1, 'User Melakukan Login', '::1', '2019-04-14 08:46:57'),
(26, 1, 'User Menambahkan User Operator Depo 2', '::1', '2019-04-14 08:56:23'),
(27, 1, 'User Menambahkan User Operator Depo 2', '::1', '2019-04-14 09:01:28'),
(28, 1, 'User Menambahkan User Operator Depo 2', '::1', '2019-04-14 09:08:50'),
(29, 1, 'User Mengupdate Profile', '::1', '2019-04-14 09:20:12'),
(30, 1, 'User Ganti Foto Profile', '::1', '2019-04-14 09:20:12'),
(31, 1, 'User Logout Aplikasi', '::1', '2019-04-14 09:23:21'),
(32, 3, 'User Melakukan Login', '::1', '2019-04-14 09:23:30'),
(33, 3, 'User Mengupdate Profile', '::1', '2019-04-14 09:28:26'),
(34, 3, 'User Ganti Foto Profile', '::1', '2019-04-14 09:28:26'),
(35, 3, 'User Mengupdate Profile', '::1', '2019-04-14 09:28:38'),
(36, 3, 'User Logout Aplikasi', '::1', '2019-04-14 09:28:53'),
(37, 7, 'User Melakukan Login', '::1', '2019-04-14 09:29:03'),
(38, 7, 'User Menambahkan User Admin Tenant 2', '::1', '2019-04-14 09:41:47'),
(39, 7, 'User Menambahkan User Admin Tenant 2', '::1', '2019-04-14 09:44:41'),
(40, 7, 'User Menambahkan User Admin Depo 2', '::1', '2019-04-14 09:54:40'),
(41, 7, 'User Ganti Password', '::1', '2019-04-14 09:56:08'),
(42, 7, 'User Mengupdate Profile', '::1', '2019-04-14 09:56:23'),
(43, 7, 'User Mengupdate Profile', '::1', '2019-04-14 09:56:37'),
(44, 7, 'User Logout Aplikasi', '::1', '2019-04-14 09:57:32'),
(45, 20, 'User Melakukan Login', '::1', '2019-04-14 09:57:38'),
(46, 20, 'User Logout Aplikasi', '::1', '2019-04-14 10:00:15'),
(47, 3, 'User Melakukan Login', '::1', '2019-04-14 10:00:22'),
(48, 3, 'User Logout Aplikasi', '::1', '2019-04-14 10:06:42'),
(49, 1, 'User Melakukan Login', '::1', '2019-04-14 10:06:47'),
(50, 1, 'User Menambahkan gedung Gedung BRI 1', '::1', '2019-04-14 10:07:01'),
(51, 1, 'User Menambahkan Ruangan Ruang Semut', '::1', '2019-04-14 10:07:22'),
(52, 1, 'User Menambahkan Rak Rak 1', '::1', '2019-04-14 10:07:30'),
(53, 1, 'User Menambahkan Tingkat Tingkat 1', '::1', '2019-04-14 10:07:44'),
(54, 1, 'User Menambahkan baris Baris 1', '::1', '2019-04-14 10:07:54'),
(55, 1, 'User Logout Aplikasi', '::1', '2019-04-14 10:08:46'),
(56, 3, 'User Melakukan Login', '::1', '2019-04-14 10:08:54'),
(57, 0, 'User Mendownload box 001/KPS/KEU/2019/0000001', '::1', '2019-04-14 10:48:35'),
(58, 3, 'User Mendownload box 001/KPS/KEU/2019/0000001', '::1', '2019-04-14 10:49:55'),
(59, 3, 'User Mendownload box 001/KPS/KEU/2019/0000001', '::1', '2019-04-14 10:52:18'),
(60, 3, 'User Menghapus Box Arsip 001/KPS/KEU/2019/0000001', '::1', '2019-04-14 11:33:36'),
(61, 3, 'User mendownload dokumen Apa Itu QR Code.pdf di box BOX201904010010010000001', '::1', '2019-04-14 11:45:37'),
(62, 3, 'User membuat Box Baru dengan nomor 001/KPS/KEU/2019/0000001', '::1', '2019-04-14 11:51:48'),
(63, 3, 'User mengupload dokumen contoh.pdf di box ', '::1', '2019-04-14 12:23:21'),
(64, 3, 'User mengupload dokumen contoh2.pdf di box ', '::1', '2019-04-14 12:23:21'),
(65, 3, 'User membuat Box Baru dengan nomor 001/KPS/KEU/2019/0000001', '::1', '2019-04-14 12:34:34'),
(66, 3, 'User membuat Box Baru dengan nomor 001/KPS/KEU/2019/0000002', '::1', '2019-04-14 12:42:18'),
(67, 3, 'User mengupload dokumen contoh.pdf di box BOX201904020010010000001', '::1', '2019-04-14 12:46:18'),
(68, 3, 'User mengupload dokumen contoh2.pdf di box BOX201904020010010000001', '::1', '2019-04-14 12:46:18'),
(69, 3, 'User Logout Aplikasi', '::1', '2019-04-14 12:49:07'),
(70, 20, 'User Melakukan Login', '::1', '2019-04-14 12:49:14'),
(71, 20, 'User Logout Aplikasi', '::1', '2019-04-14 12:49:41'),
(72, 1, 'User Melakukan Login', '::1', '2019-04-14 12:49:48'),
(73, 1, 'User Logout Aplikasi', '::1', '2019-04-14 12:54:38'),
(74, 3, 'User Melakukan Login', '::1', '2019-04-14 12:54:48'),
(75, 3, 'User Logout Aplikasi', '::1', '2019-04-14 13:12:08'),
(76, 1, 'User Melakukan Login', '::1', '2019-04-14 13:12:13'),
(77, 3, 'User Melakukan Login', '::1', '2019-04-15 11:51:32'),
(78, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 12:02:31'),
(79, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 12:03:05'),
(80, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-15 12:03:37'),
(81, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 12:15:36'),
(82, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 12:17:05'),
(83, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 12:25:40'),
(84, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 12:26:03'),
(85, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:02:57'),
(86, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:03:08'),
(87, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:03:10'),
(88, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:03:10'),
(89, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 13:04:20'),
(90, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:04:29'),
(91, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 13:18:51'),
(92, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:37:23'),
(93, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 13:43:10'),
(94, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:43:17'),
(95, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 13:45:59'),
(96, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:46:05'),
(97, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 13:46:13'),
(98, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:46:20'),
(99, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 13:47:24'),
(100, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 13:47:32'),
(101, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 15:30:15'),
(102, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-15 15:30:22'),
(103, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 15:35:05'),
(104, 0, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 15:35:05'),
(105, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 15:35:12'),
(106, 1, 'User Merubah Data Arsip box 001/KPS/KEU/2019/0000001', '192.168.43.1', '2019-04-15 16:06:09'),
(107, 1, 'User Merubah Data Arsip box 001/KPS/KEU/2019/0000001', '192.168.43.1', '2019-04-15 16:06:47'),
(108, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 16:09:30'),
(109, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-15 16:09:42'),
(110, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 16:14:35'),
(111, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 16:14:43'),
(112, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-15 17:34:39'),
(113, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-15 17:42:03'),
(114, 1, 'User Merubah Data Arsip box 001/KPS/KEU/2019/0000001', '192.168.43.1', '2019-04-16 11:50:16'),
(115, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-16 13:20:56'),
(116, 4, 'User Melakukan Login', '192.168.43.1', '2019-04-16 13:21:06'),
(117, 4, 'User Logout Aplikasi', '192.168.43.1', '2019-04-16 13:22:34'),
(118, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-16 13:22:42'),
(119, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-16 14:09:19'),
(120, 2, 'User Melakukan Login', '192.168.43.1', '2019-04-16 14:09:27'),
(121, 2, 'User Logout Aplikasi', '192.168.43.1', '2019-04-16 14:16:24'),
(122, 7, 'User Melakukan Login', '192.168.43.1', '2019-04-16 14:16:32'),
(123, 3, 'User Melakukan Login', '::1', '2019-04-16 14:28:16'),
(124, 3, 'User Menambahkan Divisi Perpajakan', '::1', '2019-04-16 14:28:30'),
(125, 3, 'User membuat Box Baru dengan nomor 001/KPS/PJK/2019/0000003', '::1', '2019-04-16 14:28:56'),
(126, 3, 'User mengupload dokumen chapter5_@JianliRahman .pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:00'),
(127, 3, 'User mengupload dokumen chapter8_@JianliRahman .pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:00'),
(128, 3, 'User mengupload dokumen chapter11_@JianliRahman.pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:00'),
(129, 3, 'User mengupload dokumen chapter12_@JianliRahman .pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:01'),
(130, 3, 'User mengupload dokumen chapter13_@JianliRahman.pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:01'),
(131, 3, 'User mengupload dokumen chapter14_@JianliRahman.pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:01'),
(132, 3, 'User mengupload dokumen chapter15_@JianliRahman.pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:01'),
(133, 3, 'User mengupload dokumen chapter16_@JianliRahman.pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:01'),
(134, 3, 'User mengupload dokumen chapter17_@JianliRahman.pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:01'),
(135, 3, 'User mengupload dokumen chapter18_@JianliRahman.pdf di box BOX201904020010020000002', '::1', '2019-04-16 14:30:01'),
(136, 3, 'User mengirim box ', '::1', '2019-04-16 14:38:30'),
(137, 3, 'User mengirim box ', '::1', '2019-04-16 14:39:06'),
(138, 3, 'User mengirim box ', '::1', '2019-04-16 14:40:02'),
(139, 3, 'User mengirim box BOX201904020010020000002', '::1', '2019-04-16 14:40:15'),
(140, 3, 'User Logout Aplikasi', '::1', '2019-04-16 14:41:12'),
(141, 1, 'User Melakukan Login', '::1', '2019-04-16 14:41:17'),
(142, 1, 'User Logout Aplikasi', '::1', '2019-04-16 14:41:34'),
(143, 20, 'User Melakukan Login', '::1', '2019-04-16 14:42:13'),
(144, 20, 'User Logout Aplikasi', '::1', '2019-04-16 14:45:53'),
(145, 20, 'User Melakukan Login', '::1', '2019-04-16 14:46:00'),
(146, 7, 'User Logout Aplikasi', '192.168.43.1', '2019-04-16 14:49:32'),
(147, 20, 'User Melakukan Login', '192.168.43.1', '2019-04-16 14:49:39'),
(148, 20, 'User menerima box 001/KPS/PJK/2019/0000003', '192.168.43.1', '2019-04-16 14:50:30'),
(149, 20, 'User Menambahkan gedung Gedung A', '::1', '2019-04-16 14:53:36'),
(150, 20, 'User Menambahkan Ruangan Ruangan 101', '::1', '2019-04-16 14:53:45'),
(151, 20, 'User Menambahkan Rak Rak 01', '::1', '2019-04-16 14:53:54'),
(152, 20, 'User Menambahkan Tingkat Tingkat 1', '::1', '2019-04-16 14:54:06'),
(153, 20, 'User Menambahkan baris Baris 1', '::1', '2019-04-16 14:54:14'),
(154, 20, 'User Mengarsipkan box 001/KPS/PJK/2019/0000003', '192.168.43.1', '2019-04-16 14:54:49'),
(155, 20, 'User Logout Aplikasi', '192.168.43.1', '2019-04-16 14:59:29'),
(156, 19, 'User Melakukan Login', '192.168.43.1', '2019-04-16 14:59:39'),
(157, 19, 'User Logout Aplikasi', '192.168.43.1', '2019-04-16 15:00:38'),
(158, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-16 15:00:46'),
(159, 20, 'User Logout Aplikasi', '::1', '2019-04-16 15:32:39'),
(160, 1, 'User Melakukan Login', '::1', '2019-04-17 08:30:23'),
(161, 3, 'User Melakukan Login', '::1', '2019-04-17 08:33:14'),
(162, 3, 'User Menghapus Box Arsip 001/KPS/KEU/2019/0000001', '::1', '2019-04-17 09:06:25'),
(163, 3, 'User Menghapus Box Arsip 001/KPS/KEU/2019/0000001', '::1', '2019-04-17 09:14:54'),
(164, 3, 'User Menghapus Box Arsip 001/KPS/KEU/2019/0000001', '::1', '2019-04-17 09:22:24'),
(165, 1, 'User Logout Aplikasi', '::1', '2019-04-17 09:52:10'),
(166, 20, 'User Melakukan Login', '::1', '2019-04-17 09:52:16'),
(167, 20, 'User Merubah Data Arsip box 001/KPS/PJK/2019/0000003', '::1', '2019-04-17 09:52:57'),
(168, 20, 'User Logout Aplikasi', '::1', '2019-04-17 09:53:45'),
(169, 1, 'User Melakukan Login', '::1', '2019-04-17 09:53:50'),
(170, 3, 'User Menghapus Box Arsip 001/KPS/KEU/2019/0000001', '::1', '2019-04-17 10:02:06'),
(171, 1, 'User Menghanguskan box 001/KPS/KEU/2019/0000001', '::1', '2019-04-17 10:05:17'),
(172, 1, 'User Menghanguskan box 001/KPS/KEU/2019/0000001', '::1', '2019-04-17 10:14:14'),
(173, 1, 'User Logout Aplikasi', '::1', '2019-04-17 10:57:55'),
(174, 20, 'User Melakukan Login', '::1', '2019-04-17 10:58:01'),
(175, 20, 'User Logout Aplikasi', '::1', '2019-04-17 11:24:37'),
(176, 1, 'User Melakukan Login', '::1', '2019-04-17 11:24:41'),
(177, 1, 'User Mengupdate Ruangan Ruang 1', '::1', '2019-04-17 11:41:14'),
(178, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-18 09:17:17'),
(179, 3, 'User mendownload dokumen chapter5_@JianliRahman .pdf di box BOX201904020010020000002', '192.168.43.1', '2019-04-18 09:17:35'),
(180, 3, 'User mendownload dokumen chapter5_@JianliRahman .pdf di box BOX201904020010020000002', '192.168.43.1', '2019-04-18 09:18:44'),
(181, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 09:49:44'),
(182, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-18 09:49:56'),
(183, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 09:50:28'),
(184, 20, 'User Melakukan Login', '192.168.43.1', '2019-04-18 09:50:37'),
(185, 20, 'User Mengupdate gedung 001', '192.168.43.1', '2019-04-18 09:59:32'),
(186, 20, 'User Mengupdate Ruangan 101', '192.168.43.1', '2019-04-18 09:59:44'),
(187, 20, 'User Mengupdate Rak 01', '192.168.43.1', '2019-04-18 09:59:57'),
(188, 20, 'User Mengupdate Tingkat 01', '192.168.43.1', '2019-04-18 10:00:09'),
(189, 20, 'User Mengupdate baris 001', '192.168.43.1', '2019-04-18 10:00:19'),
(190, 20, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 10:26:38'),
(191, 19, 'User Melakukan Login', '192.168.43.1', '2019-04-18 10:26:46'),
(192, 19, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 10:26:50'),
(193, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-18 10:26:57'),
(194, 3, 'User print QR box 001/KPS/PJK/2019/0000003', '192.168.43.1', '2019-04-18 10:27:02'),
(195, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 10:34:31'),
(196, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-18 10:34:38'),
(197, 20, 'User Melakukan Login', '::1', '2019-04-18 10:36:56'),
(198, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 10:55:21'),
(199, 20, 'User Melakukan Login', '192.168.43.1', '2019-04-18 10:55:28'),
(200, 20, 'User Menambahkan gedung 002', '192.168.43.1', '2019-04-18 11:23:02'),
(201, 20, 'User Menambahkan Ruangan 102', '192.168.43.1', '2019-04-18 11:23:13'),
(202, 20, 'User Menambahkan Rak 02', '192.168.43.1', '2019-04-18 11:23:22'),
(203, 20, 'User Menambahkan Tingkat 02', '192.168.43.1', '2019-04-18 11:23:32'),
(204, 20, 'User Menambahkan baris 002', '192.168.43.1', '2019-04-18 11:23:41'),
(205, 20, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 12:36:30'),
(206, 7, 'User Melakukan Login', '192.168.43.1', '2019-04-18 12:36:38'),
(207, 7, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 12:41:05'),
(208, 1, 'User Melakukan Login', '192.168.43.1', '2019-04-18 12:41:12'),
(209, 1, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 12:48:53'),
(210, 7, 'User Melakukan Login', '192.168.43.1', '2019-04-18 12:49:06'),
(211, 20, 'User Logout Aplikasi', '::1', '2019-04-18 12:50:36'),
(212, 7, 'User Melakukan Login', '::1', '2019-04-18 12:50:41'),
(213, 7, 'User Logout Aplikasi', '::1', '2019-04-18 15:32:20'),
(214, 7, 'User Melakukan Login', '::1', '2019-04-18 15:32:26'),
(215, 7, 'User Logout Aplikasi', '::1', '2019-04-18 15:49:27'),
(216, 1, 'User Melakukan Login', '::1', '2019-04-18 15:49:32'),
(217, 1, 'User Logout Aplikasi', '::1', '2019-04-18 15:49:59'),
(218, 7, 'User Logout Aplikasi', '192.168.43.1', '2019-04-18 15:55:15'),
(219, 7, 'User Melakukan Login', '::1', '2019-04-18 15:57:13'),
(220, 7, 'User Logout Aplikasi', '::1', '2019-04-18 16:00:13'),
(221, 1, 'User Melakukan Login', '::1', '2019-04-18 16:00:19'),
(222, 1, 'User Logout Aplikasi', '::1', '2019-04-18 16:06:03'),
(223, 3, 'User Melakukan Login', '::1', '2019-04-18 16:06:09'),
(224, 3, 'User Logout Aplikasi', '::1', '2019-04-18 16:06:29'),
(225, 1, 'User Melakukan Login', '::1', '2019-04-18 16:06:35'),
(226, 1, 'User Logout Aplikasi', '::1', '2019-04-18 16:07:08'),
(227, 7, 'User Melakukan Login', '::1', '2019-04-18 16:07:13'),
(228, 3, 'User Melakukan Login', '::1', '2019-04-19 09:51:07'),
(229, 3, 'User Logout Aplikasi', '::1', '2019-04-19 09:51:22'),
(230, 7, 'User Melakukan Login', '::1', '2019-04-19 09:51:28'),
(231, 7, 'User Mengupdate Unit Kerja Dana Pensiun BRI', '::1', '2019-04-19 09:52:08'),
(232, 4, 'User Melakukan Login', '::1', '2019-04-19 09:55:03'),
(233, 4, 'User print QR box 001/KPS/KEU/2019/0000002', '::1', '2019-04-19 09:55:20'),
(234, 4, 'User mengirim box BOX201904020010010000001', '::1', '2019-04-19 09:55:33'),
(235, 4, 'User print QR box 001/KPS/KEU/2019/0000002', '::1', '2019-04-19 09:55:41'),
(236, 2, 'User Melakukan Login', '192.168.43.1', '2019-04-19 09:58:29'),
(237, 2, 'User Logout Aplikasi', '192.168.43.1', '2019-04-19 09:59:04'),
(238, 17, 'User Melakukan Login', '192.168.43.1', '2019-04-19 09:59:19'),
(239, 17, 'User Logout Aplikasi', '192.168.43.1', '2019-04-19 10:00:14'),
(240, 17, 'User Melakukan Login', '192.168.43.1', '2019-04-19 10:00:24'),
(241, 17, 'User menerima box 001/KPS/KEU/2019/0000002', '192.168.43.1', '2019-04-19 10:00:44'),
(242, 4, 'User print QR box 001/KPS/KEU/2019/0000002', '::1', '2019-04-19 10:00:50'),
(243, 7, 'User Logout Aplikasi', '::1', '2019-04-19 10:01:39'),
(244, 17, 'User Melakukan Login', '::1', '2019-04-19 10:01:46'),
(245, 17, 'User menerima box 001/KPS/KEU/2019/0000002', '192.168.43.1', '2019-04-19 10:02:25'),
(246, 4, 'User print QR box 001/KPS/KEU/2019/0000002', '::1', '2019-04-19 10:04:22'),
(247, 4, 'User membuat Box Baru dengan nomor 001/DPB/PJK/2019/0000004', '::1', '2019-04-19 10:08:17'),
(248, 4, 'User print QR box 001/DPB/PJK/2019/0000004', '::1', '2019-04-19 10:09:26'),
(249, 17, 'User Mengarsipkan box 001/KPS/KEU/2019/0000002', '192.168.43.1', '2019-04-19 10:12:41'),
(250, 4, 'User Mendownload box 001/KPS/PJK/2019/0000003', '::1', '2019-04-19 10:19:26'),
(251, 17, 'User Mengupdate Profile', '::1', '2019-04-19 10:26:18'),
(252, 17, 'User Mengupdate Profile', '::1', '2019-04-19 10:27:09'),
(253, 17, 'User Logout Aplikasi', '::1', '2019-04-19 13:16:34'),
(254, 7, 'User Melakukan Login', '::1', '2019-04-19 13:16:46'),
(255, 4, 'User Mengupdate Unit Kerja Dana Pensiun BRI7', '::1', '2019-04-19 13:37:05'),
(256, 4, 'User Mengupdate Unit Kerja Dana Pensiun BRI', '::1', '2019-04-19 13:37:17'),
(257, 7, 'User Logout Aplikasi', '::1', '2019-04-19 13:39:44'),
(258, 1, 'User Melakukan Login', '::1', '2019-04-19 13:39:58'),
(259, 1, 'User Mengupdate Depo Jakarta666', '::1', '2019-04-19 13:50:33'),
(260, 1, 'User Mengupdate Depo Jakarta', '::1', '2019-04-19 13:50:48'),
(261, 4, 'User Logout Aplikasi', '::1', '2019-04-19 13:53:37'),
(262, 3, 'User Melakukan Login', '::1', '2019-04-19 13:53:42'),
(263, 3, 'User Logout Aplikasi', '::1', '2019-04-19 13:54:22'),
(264, 4, 'User Melakukan Login', '::1', '2019-04-19 13:54:29'),
(265, 1, 'User Logout Aplikasi', '::1', '2019-04-19 13:56:39'),
(266, 2, 'User Melakukan Login', '::1', '2019-04-19 13:56:45'),
(267, 2, 'User Logout Aplikasi', '::1', '2019-04-19 13:57:20'),
(268, 7, 'User Melakukan Login', '::1', '2019-04-19 13:57:26'),
(269, 2, 'User Melakukan Login', '::1', '2019-04-21 09:48:36'),
(270, 2, 'User Logout Aplikasi', '::1', '2019-04-21 09:49:19'),
(271, 4, 'User Melakukan Login', '::1', '2019-04-21 09:49:27'),
(272, 4, 'User Logout Aplikasi', '::1', '2019-04-21 09:52:38'),
(273, 7, 'User Melakukan Login', '::1', '2019-04-21 09:52:49'),
(274, 7, 'User Mengupdate Tenant BRI Kantor Pusat', '::1', '2019-04-21 09:53:20'),
(275, 7, 'User Mengupdate Unit Kerja BRI Kantor Pusat', '::1', '2019-04-21 09:54:20'),
(276, 7, 'User Logout Aplikasi', '::1', '2019-04-21 09:54:25'),
(277, 4, 'User Melakukan Login', '::1', '2019-04-21 09:55:07'),
(278, 3, 'User Melakukan Login', '::1', '2019-04-21 09:59:23'),
(279, 3, 'User Mengupdate Divisi Keuangan', '::1', '2019-04-21 09:59:55'),
(280, 3, 'User Mengupdate Divisi Kartu Kredit', '::1', '2019-04-21 10:00:07'),
(281, 4, 'User membuat Box Baru dengan nomor 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:00:45'),
(282, 4, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:01:24'),
(283, 3, 'User Mengupdate Profile', '::1', '2019-04-21 10:02:41'),
(284, 4, 'User Logout Aplikasi', '::1', '2019-04-21 10:03:01'),
(285, 4, 'User Melakukan Login', '::1', '2019-04-21 10:03:07'),
(286, 3, 'User mengupload dokumen chapter19_@JianliRahman.pdf di box BOX201904010010020000002', '::1', '2019-04-21 10:05:31'),
(287, 3, 'User mengupload dokumen chapter20_@JianliRahman .pdf di box BOX201904010010020000002', '::1', '2019-04-21 10:05:31'),
(288, 3, 'User mengupload dokumen chapter21_@JianliRahman .pdf di box BOX201904010010020000002', '::1', '2019-04-21 10:05:31'),
(289, 3, 'User mengupload dokumen chapter22_@JianliRahman .pdf di box BOX201904010010020000002', '::1', '2019-04-21 10:05:31'),
(290, 3, 'User mengupload dokumen DigitalDoodle_@JianliRahman .pdf di box BOX201904010010020000002', '::1', '2019-04-21 10:05:31'),
(291, 3, 'User mengirim box BOX201904010010020000002', '::1', '2019-04-21 10:07:30'),
(292, 4, 'User Logout Aplikasi', '::1', '2019-04-21 10:08:04'),
(293, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:08:58'),
(294, 17, 'User Logout Aplikasi', '192.168.43.1', '2019-04-21 10:09:12'),
(295, 2, 'User Melakukan Login', '192.168.43.1', '2019-04-21 10:09:22'),
(296, 2, 'User menerima box 001/KPS/KK/2019/0000005', '192.168.43.1', '2019-04-21 10:09:52'),
(297, 1, 'User Melakukan Login', '::1', '2019-04-21 10:11:07'),
(298, 1, 'User Mengupdate gedung Depo Arsip Pasar Rebo', '::1', '2019-04-21 10:11:26'),
(299, 1, 'User Mengupdate gedung 001', '::1', '2019-04-21 10:13:25'),
(300, 1, 'User Menambahkan gedung 002', '::1', '2019-04-21 10:13:51'),
(301, 1, 'User Menambahkan gedung 003', '::1', '2019-04-21 10:13:57'),
(302, 1, 'User Mengupdate Ruangan 001', '::1', '2019-04-21 10:14:10'),
(303, 1, 'User Menambahkan Ruangan 002', '::1', '2019-04-21 10:14:14'),
(304, 1, 'User Menambahkan Ruangan 003', '::1', '2019-04-21 10:14:18'),
(305, 1, 'User Mengupdate Rak 01', '::1', '2019-04-21 10:14:31'),
(306, 1, 'User Menambahkan Rak 02', '::1', '2019-04-21 10:14:35'),
(307, 1, 'User Menambahkan Rak 03', '::1', '2019-04-21 10:14:39'),
(308, 1, 'User Menambahkan Rak 04', '::1', '2019-04-21 10:14:43'),
(309, 1, 'User Mengupdate Tingkat 1', '::1', '2019-04-21 10:14:52'),
(310, 1, 'User Menambahkan Tingkat 2', '::1', '2019-04-21 10:14:56'),
(311, 1, 'User Menambahkan Tingkat 3', '::1', '2019-04-21 10:15:00'),
(312, 1, 'User Mengupdate baris 001', '::1', '2019-04-21 10:15:21'),
(313, 1, 'User Menambahkan baris 002', '::1', '2019-04-21 10:15:25'),
(314, 1, 'User Menambahkan baris 003', '::1', '2019-04-21 10:15:29'),
(315, 1, 'User Menambahkan baris 004', '::1', '2019-04-21 10:15:35'),
(316, 2, 'User Mengarsipkan box 001/KPS/KK/2019/0000005', '192.168.43.1', '2019-04-21 10:16:49'),
(317, 1, 'User Merubah Data Arsip box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:23:04'),
(318, 3, 'User Mendownload box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:23:30'),
(319, 1, 'User Menghanguskan box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:23:53'),
(320, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:24:54'),
(321, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:24:54'),
(322, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:24:54'),
(323, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:24:54'),
(324, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:24:54'),
(325, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:43:16'),
(326, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:43:25'),
(327, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:43:41'),
(328, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:43:54'),
(329, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:45:49'),
(330, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:45:55'),
(331, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:46:05'),
(332, 3, 'User print QR box 001/KPS/KK/2019/0000005', '::1', '2019-04-21 10:46:18'),
(333, 1, 'User Logout Aplikasi', '::1', '2019-04-21 11:06:41'),
(334, 17, 'User Melakukan Login', '::1', '2019-04-21 11:07:07'),
(335, 2, 'User Melakukan Login', '192.168.43.189', '2019-04-21 11:16:22'),
(336, 2, 'User Logout Aplikasi', '192.168.43.189', '2019-04-21 11:18:06'),
(337, 2, 'User Logout Aplikasi', '192.168.43.1', '2019-04-21 11:22:13'),
(338, 17, 'User Logout Aplikasi', '::1', '2019-04-21 11:39:19'),
(339, 1, 'User Melakukan Login', '::1', '2019-04-21 11:39:37'),
(340, 1, 'User Logout Aplikasi', '::1', '2019-04-21 11:40:17'),
(341, 3, 'User Melakukan Login', '::1', '2019-04-21 11:40:22'),
(342, 3, 'User mengupload dokumen Apa Itu QR Code.pdf di box BOX201904020010020000003', '::1', '2019-04-21 11:40:56'),
(343, 3, 'User mengupload dokumen BPJS-VA0002519242694.pdf di box BOX201904020010020000003', '::1', '2019-04-21 12:10:52'),
(344, 3, 'User adminkanpus menghapus dokumen BPJS-VA0002519242694.pdf dibox BOX201904020010020000003', '::1', '2019-04-21 12:11:01'),
(345, 3, 'User mengirim box 001/DPB/PJK/2019/0000004', '::1', '2019-04-21 12:11:11'),
(346, 3, 'User membuat Box Baru dengan nomor 001/KPS/AMK/2019/0000006', '::1', '2019-04-21 12:12:05'),
(347, 3, 'User membuat Box Baru dengan nomor 001/KPS//2019/0000007', '::1', '2019-04-21 13:08:44'),
(348, 3, 'User membuat Box Baru dengan nomor 001/KPS//2019/0000008', '::1', '2019-04-21 13:09:25'),
(349, 3, 'User Mengupdate box 001/KPS/AMK/2019/0000006', '::1', '2019-04-21 13:09:53'),
(350, 3, 'User Mengupdate box 001/KPS/AMK/2019/0000006', '::1', '2019-04-21 13:10:40'),
(351, 3, 'User Mengupdate box 001/KPS/AMK/2019/0000006', '::1', '2019-04-21 13:10:50'),
(352, 3, 'User mengirim box 001/KPS/AMK/2019/0000006', '::1', '2019-04-21 13:10:55'),
(353, 3, 'User Logout Aplikasi', '::1', '2019-04-21 13:25:42'),
(354, 3, 'User Mengupdate Profile', '::1', '2019-04-21 14:34:44'),
(355, 3, 'User Ganti Foto Profile', '::1', '2019-04-21 14:34:44'),
(356, 3, 'User membuat Box Baru dengan nomor 001/KPS/AMK/2019/0000007', '::1', '2019-04-21 14:44:46'),
(357, 3, 'User Mengupdate box 001/KPS/AMK/2019/0000007', '::1', '2019-04-21 14:45:16'),
(358, 3, 'User Logout Aplikasi', '::1', '2019-04-21 14:48:54'),
(359, 7, 'User Melakukan Login', '::1', '2019-04-21 14:49:00'),
(360, 7, 'User Logout Aplikasi', '::1', '2019-04-21 14:49:39'),
(361, 1, 'User Melakukan Login', '::1', '2019-04-22 09:48:49'),
(362, 1, 'User Logout Aplikasi', '::1', '2019-04-22 13:30:04'),
(363, 3, 'User Melakukan Login', '::1', '2019-04-22 13:30:32'),
(364, 3, 'User mendownload dokumen contoh.pdf di box BOX201904020010010000001', '::1', '2019-04-22 13:41:21'),
(365, 3, 'User Logout Aplikasi', '::1', '2019-04-22 14:11:37'),
(366, 7, 'User Melakukan Login', '::1', '2019-04-22 14:11:45'),
(367, 7, 'User Logout Aplikasi', '::1', '2019-04-22 14:19:37'),
(368, 1, 'User Melakukan Login', '::1', '2019-04-22 14:37:58'),
(369, 1, 'User Logout Aplikasi', '::1', '2019-04-22 14:53:59'),
(370, 3, 'User Melakukan Login', '::1', '2019-04-22 14:54:14'),
(371, 3, 'User print QR box 001/KPS/AMK/2019/0000007', '::1', '2019-04-22 14:54:24'),
(372, 3, 'User Logout Aplikasi', '::1', '2019-04-22 15:04:05'),
(373, 1, 'User Melakukan Login', '::1', '2019-04-22 15:04:16'),
(374, 1, 'User Logout Aplikasi', '::1', '2019-04-22 15:13:47'),
(375, 3, 'User Melakukan Login', '::1', '2019-04-22 15:14:13'),
(376, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-22 15:14:30'),
(377, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-22 15:14:30'),
(378, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-22 15:14:30'),
(379, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-22 15:14:30'),
(380, 3, 'User Menghapus Box Arsip 001/KPS/KK/2019/0000005', '::1', '2019-04-22 15:14:30'),
(381, 3, 'User Logout Aplikasi', '::1', '2019-04-22 15:14:40'),
(382, 1, 'User Melakukan Login', '::1', '2019-04-22 15:14:52'),
(383, 1, 'User Menghanguskan box 001/KPS/KK/2019/0000005', '::1', '2019-04-22 15:18:33'),
(384, 1, 'User Mengupdate Profile', '::1', '2019-04-22 15:27:54'),
(385, 1, 'User Ganti Foto Profile', '::1', '2019-04-22 15:27:54'),
(386, 0, 'User Logout Aplikasi', '192.168.43.1', '2019-04-22 16:25:25'),
(387, 0, 'User Logout Aplikasi', '192.168.43.1', '2019-04-22 16:25:27'),
(388, 3, 'User Melakukan Login', '192.168.43.1', '2019-04-22 16:25:59'),
(389, 3, 'User mendownload dokumen contoh2.pdf di box 001/KPS/KEU/2019/0000002', '192.168.43.1', '2019-04-22 16:27:45'),
(390, 3, 'User print QR box 001/KPS/PJK/2019/0000003', '192.168.43.1', '2019-04-22 16:28:24'),
(391, 3, 'User Logout Aplikasi', '192.168.43.1', '2019-04-22 16:29:55'),
(392, 2, 'User Melakukan Login', '::1', '2019-04-23 09:33:03'),
(393, 2, 'User Logout Aplikasi', '::1', '2019-04-23 09:59:23'),
(394, 1, 'User Melakukan Login', '::1', '2019-04-23 09:59:31'),
(395, 1, 'User Logout Aplikasi', '::1', '2019-04-23 10:22:13'),
(396, 3, 'User Melakukan Login', '::1', '2019-04-23 10:22:48'),
(397, 3, 'User Logout Aplikasi', '::1', '2019-04-23 13:44:44'),
(398, 3, 'user Melakukan Login', '::1', '2019-04-24 17:55:06'),
(399, 3, 'user Melakukan Login', '::1', '2019-04-25 09:04:28'),
(400, 3, 'user Logout Aplikasi', '::1', '2019-04-25 09:52:43'),
(401, 2, 'user Melakukan Login', '::1', '2019-04-25 09:52:49'),
(402, 2, 'user Logout Aplikasi', '::1', '2019-04-25 09:52:57'),
(403, 1, 'user Melakukan Login', '::1', '2019-04-25 09:53:03'),
(404, 3, 'user Melakukan Login', '192.168.43.1', '2019-04-25 11:05:20'),
(405, 1, 'user Logout Aplikasi', '::1', '2019-04-25 15:08:03'),
(406, 3, 'user Melakukan Login', '::1', '2019-04-25 15:08:09'),
(407, 3, 'user Logout Aplikasi', '::1', '2019-04-25 17:24:09'),
(408, 1, 'user Melakukan Login', '::1', '2019-04-25 17:24:32'),
(409, 4, 'user Melakukan Login', '::1', '2019-04-26 08:39:31'),
(410, 4, 'user membuat Box Baru dengan nomor 001/KPS/AMK/2019/0000008', '::1', '2019-04-26 08:40:55'),
(411, 4, 'user Logout Aplikasi', '::1', '2019-04-26 08:48:45'),
(412, 3, 'user Melakukan Login', '::1', '2019-04-26 08:49:13'),
(413, 3, 'user mengupload dokumen Proposal Penawaran v2.pdf di box 001/KPS/AMK/2019/0000008', '::1', '2019-04-26 08:49:31'),
(414, 3, 'user mengirim box 001/KPS/AMK/2019/0000008', '::1', '2019-04-26 08:49:47'),
(415, 3, 'user Logout Aplikasi', '192.168.43.1', '2019-04-26 08:50:23'),
(416, 2, 'user Melakukan Login', '192.168.43.1', '2019-04-26 08:50:31'),
(417, 2, 'user menerima box 001/KPS/AMK/2019/0000008', '192.168.43.1', '2019-04-26 08:51:01'),
(418, 2, 'user Mengarsipkan box 001/KPS/AMK/2019/0000008', '192.168.43.1', '2019-04-26 08:54:19'),
(419, 3, 'user Logout Aplikasi', '::1', '2019-04-26 08:55:12'),
(420, 1, 'user Melakukan Login', '::1', '2019-04-26 08:55:21'),
(421, 1, 'user Logout Aplikasi', '::1', '2019-04-26 09:28:47'),
(422, 2, 'user Logout Aplikasi', '192.168.43.1', '2019-04-26 09:32:18'),
(423, 3, 'user Melakukan Login', '192.168.43.1', '2019-04-26 09:33:19'),
(424, 1, 'user Melakukan Login', '::1', '2019-04-26 09:34:24'),
(425, 3, 'user Logout Aplikasi', '192.168.43.1', '2019-04-26 09:43:36'),
(426, 3, 'user Melakukan Login', '192.168.43.1', '2019-04-26 09:44:50'),
(427, 3, 'user Logout Aplikasi', '192.168.43.1', '2019-04-26 09:50:11'),
(428, 1, 'user Logout Aplikasi', '::1', '2019-04-26 13:07:38'),
(429, 3, 'user Melakukan Login', '::1', '2019-04-26 13:07:48'),
(430, 3, 'user Mengupdate Profile', '::1', '2019-04-26 13:08:06'),
(431, 3, 'user Logout Aplikasi', '::1', '2019-04-26 13:09:00'),
(432, 4, 'user Melakukan Login', '::1', '2019-04-26 13:12:06'),
(433, 4, 'user Logout Aplikasi', '::1', '2019-04-26 13:25:41'),
(434, 1, 'user Melakukan Login', '::1', '2019-04-26 13:25:49'),
(435, 1, 'user Melakukan Login', '192.168.43.1', '2019-04-26 13:34:22'),
(436, 1, 'user Logout Aplikasi', '::1', '2019-04-26 14:14:13'),
(437, 4, 'user Melakukan Login', '::1', '2019-04-26 14:44:01'),
(438, 4, 'user membuat Box Baru dengan nomor 001/KPS/AMK/2019/0000009', '::1', '2019-04-26 14:59:27'),
(439, 4, 'user mengupload dokumen contoh.pdf di box 001/KPS/AMK/2019/0000009', '::1', '2019-04-26 15:01:09'),
(440, 4, 'user mengirim box 001/KPS/AMK/2019/0000009', '::1', '2019-04-26 15:02:14'),
(441, 4, 'user Logout Aplikasi', '::1', '2019-04-26 15:02:47'),
(442, 2, 'user Melakukan Login', '::1', '2019-04-26 15:02:53'),
(443, 1, 'user Logout Aplikasi', '192.168.43.1', '2019-04-26 15:07:31'),
(444, 2, 'user Melakukan Login', '192.168.43.1', '2019-04-26 15:07:39'),
(445, 2, 'user menerima box 001/KPS/AMK/2019/0000006', '192.168.43.1', '2019-04-26 15:08:36'),
(446, 2, 'user Logout Aplikasi', '::1', '2019-04-26 15:09:54'),
(447, 2, 'user Melakukan Login', '::1', '2019-04-26 15:10:00'),
(448, 2, 'user Mengarsipkan box 001/KPS/AMK/2019/0000006', '192.168.43.1', '2019-04-26 15:17:05'),
(449, 2, 'user Mengarsipkan box 001/KPS/AMK/2019/0000006', '192.168.43.1', '2019-04-26 15:17:06'),
(450, 2, 'user Logout Aplikasi', '::1', '2019-04-26 15:23:07'),
(451, 3, 'user Melakukan Login', '::1', '2019-04-26 15:23:28'),
(452, 2, 'user Melakukan Login', '::1', '2019-04-30 13:38:41'),
(453, 2, 'user Logout Aplikasi', '::1', '2019-04-30 13:48:01'),
(454, 2, 'user Melakukan Login', '::1', '2019-04-30 13:51:36'),
(455, 2, 'user Melakukan Login', '::1', '2019-05-04 09:02:04'),
(456, 2, 'user menerima box 001/KPS/AMK/2019/0000009', '192.168.43.1', '2019-05-04 09:08:41'),
(457, 2, 'user Mengarsipkan box 001/KPS/AMK/2019/0000009', '::1', '2019-05-04 10:12:56'),
(458, 4, 'user Melakukan Login', '::1', '2019-05-04 10:14:24'),
(459, 4, 'user mengirim box 001/KPS/AMK/2019/0000007', '::1', '2019-05-04 10:14:55'),
(460, 2, 'user Logout Aplikasi', '::1', '2019-05-04 10:15:32'),
(461, 17, 'user Melakukan Login', '::1', '2019-05-04 10:15:38'),
(462, 17, 'user menerima box 001/KPS/AMK/2019/0000007', '::1', '2019-05-04 10:15:57'),
(463, 17, 'user Logout Aplikasi', '::1', '2019-05-04 11:00:04'),
(464, 1, 'user Melakukan Login', '::1', '2019-05-04 11:00:26'),
(465, 1, 'user Mengupdate Profile', '::1', '2019-05-04 11:04:46'),
(466, 1, 'user Mengupdate Profile', '::1', '2019-05-04 11:04:56'),
(467, 4, 'user Logout Aplikasi', '::1', '2019-05-04 11:10:34'),
(468, 3, 'user Melakukan Login', '::1', '2019-05-04 11:10:40'),
(469, 1, 'user Mengupdate Profile', '::1', '2019-05-04 11:15:29'),
(470, 3, 'user Mengupdate Profile', '::1', '2019-05-04 11:23:25'),
(471, 2, 'user Melakukan Login', '192.168.43.1', '2019-05-04 11:53:44'),
(472, 1, 'user Melakukan Login', '::1', '2019-05-05 09:39:01'),
(473, 3, 'user Melakukan Login', '::1', '2019-05-05 09:40:05'),
(474, 3, 'user membuat Box Baru dengan nomor 001/KPS/KK/2019/0000010', '::1', '2019-05-05 09:46:44'),
(475, 1, 'user Logout Aplikasi', '::1', '2019-05-05 10:39:26'),
(476, 20, 'user Melakukan Login', '::1', '2019-05-05 10:39:33'),
(477, 20, 'user Mengarsipkan box 001/KPS/AMK/2019/0000007', '::1', '2019-05-05 10:55:07'),
(478, 20, 'user Mengarsipkan box 001/KPS/AMK/2019/0000007', '::1', '2019-05-05 10:59:04'),
(479, 20, 'user Mengarsipkan box 001/KPS/AMK/2019/0000007', '::1', '2019-05-05 11:05:28'),
(480, 20, 'user Mengarsipkan box 001/KPS/AMK/2019/0000007', '::1', '2019-05-05 11:12:55'),
(481, 20, 'user Merubah Data Arsip box 001/KPS/AMK/2019/0000007', '::1', '2019-05-05 11:40:10'),
(482, 20, 'user Merubah Data Arsip box 001/KPS/AMK/2019/0000007', '::1', '2019-05-05 11:42:00'),
(483, 20, 'user Mengupdate Profile', '::1', '2019-05-05 11:44:42'),
(484, 1, 'user Melakukan Login', '::1', '2019-05-06 11:08:39'),
(485, 1, 'user Logout Aplikasi', '::1', '2019-05-06 11:22:46'),
(486, 1, 'user Melakukan Login', '::1', '2019-05-06 11:22:51'),
(487, 0, 'user Logout Aplikasi', '::1', '2019-05-06 11:26:01'),
(488, 1, 'user Melakukan Login', '::1', '2019-05-06 11:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `nama_kampus` varchar(200) DEFAULT NULL,
  `email_kampus` varchar(200) DEFAULT NULL,
  `alamat_kampus` varchar(300) DEFAULT NULL,
  `telepon_kampus` varchar(50) DEFAULT NULL,
  `fax_kampus` varchar(50) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `linkind` varchar(200) DEFAULT NULL,
  `peta` varchar(200) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`nama_kampus`, `email_kampus`, `alamat_kampus`, `telepon_kampus`, `fax_kampus`, `twitter`, `facebook`, `linkind`, `peta`, `logo`) VALUES
('Jakarta International Hotel School', 'jihakpar@yahoo.com', 'Jl. Jend Sudirman Kav 52-53 Lot 21, Jakarta Selatan 12190', '+62 21-5736332', '+62 21-5736311', 'https://twitter.com/akpar_jih', 'https://www.facebook.com/pages/Jakarta-International-Hotels-School/714410078641320', 'http://linkedin.com/maxenstudio', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_study`
--

CREATE TABLE `program_study` (
  `id_study` int(11) NOT NULL,
  `nama_study` varchar(250) DEFAULT NULL,
  `deskripsi_study` text,
  `foto_study` varchar(250) DEFAULT NULL,
  `jenjang_study` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_study`
--

INSERT INTO `program_study` (`id_study`, `nama_study`, `deskripsi_study`, `foto_study`, `jenjang_study`) VALUES
(1, 'Hotel Operation', '<p style=\\"text-align: justify;\\">Program Diploma I Hotel Operation mencetak para lulusan terampil &nbsp;siap kerja dalam waktu singkat. Metode belajar dengan rasio 30 % teori dan 70 % praktek dan interenship di hotel berbintang 5 selama 6 bulan. Program ini membantu mahasiswa untuk meningkatkan hotel skill anda di beberapa departemen yang ada di hotel. Mahasiswa akan menguasai ketrampilan dasar di Housekeeping, Front Office , Food Beverage Service dan Culinary. Para lulusan program ini akan disalurkan mendapatkan pekerjaan baik di dalam maupun luar negeri bagi yang memenuhi kriteria. &nbsp;</p>	', NULL, 'Diploma I'),
(2, 'Hotel Public Relations', '<p>Tujuan Pendidikan</p>\r\n<p>Program studi D3 Komunikasi Peminatan Kehumasan (Public Relations) bertujuan untuk:</p>\r\n<p>1.    Menghasilkan  tenaga  ahli  madya  bidang  kehumasan  yang kompeten, disiplin, dan berkepribadian</p>\r\n<p>2.    Menghasilkan lulusan yang berkualitas sesuai dengan kebutuhan tenaga kehumasan hotel, pemerintahan, perusahaan, dan organisasi-organisasi lainnya.</p>\r\n<p>3.    Menyiapkan lulusan yang dapat melanjutkan pendidikan ke jenjang pendidikan lanjut dalam bidang komunikasi dan/atau kehumasan.</p>\r\n<p>Profile Lulusan : Public relations Manager </p>\r\n<p>Waktu Study : 6 Semester (3-5 tahun) | Beban Study : 110-120 SKS | Sebutan yang diberikam : Ahli Madya Pariwisata (A.md, Par)</p>\r\n<p>D.      Kompetensi Lulusan</p>\r\n<p>Program  studi D3 Komunikasi Peminatan Kehumasan (Public Relations) diarahkan pada usaha untuk menghasilkan lulusan yang memiliki kompetensi sebagai berikut:</p>\r\n<p>1.    kompetensi personal, yakni:</p>\r\n<p>a.    Memiliki integritas moral dan etika yang baik</p>\r\n<p>b.    Memiliki kepribadian yang mantap</p>\r\n<p>2.    kompetensi akademik (keilmuan)</p>\r\n<p>a.    Menguasai ilmu bidang pokok, yakni ilmu komunikasi (komunikasi antar pribadi, komunikasi organisasi, maupun komunikasi massa)</p>\r\n<p>b.    Menguasai ketrampilan di bidang kehumasan dengan baik. Kompetensi Profesional</p>\r\n<p>c.    Memiliki integritas pribadi dan profesi</p>\r\n<p>d.    Memiliki perilaku yang baik terhadap klien</p>\r\n<p>e.    Memiliki perilaku yang baik terhadap public dan media</p>\r\n<p>f.     Memiliki perilaku yang baik terhadap rekan se-profesi</p>\r\n<p>g.    Memiliki kemampuan dasar  mengenai hubungan masyarakat</p>\r\n<p>h.    Memiliki kemampuan untuk berbicara dan negosiasi sebagai<br />       humas hotel atau perusahaan</p>\r\n<p>i.    Memiliki kemampuan untuk penulisan naskah kehumasan</p>\r\n<p>j.    Memiliki kemampuan penggunaan media kehumasan</p>\r\n<p>k.    Memberi kemampuan mengatasi masalah dan penyusunan strategi kehumasan</p>\r\n<p>L.    Memiliki kemampuan presentasi dan menyusun strategi presentasi</p>\r\n<p>3.    kompetensi sosial</p>\r\n<p>a.     Mampu melakukan hubungan sosial yang baik dengan lingkungan sosialnya  dalam  rangka  pelaksanaan  dan  pengembangan profesinya.</p>\r\n<p>b.    Memiliki manajemen yang baik dalam rangka pelaksanaan tugas-tugasnya.</p>\r\n<p> </p>	', NULL, 'Diploma III'),
(3, 'Food & Beverage Service', ' <p>Tujuan Pendidikan : untuk menghasilkan lulusan yang memiliki kompetensi dalam mensupervisi usaha pada bagian penyajian makan dan minuman<br />Profil Lulusan : Restaurant Supervisor / Head Waiter dan Bartender<br />Waktu Studi : 6 Semester (3-5 tahun) | Beban Studi : 110-120 SKS | Sebutan yang diberikan : Ahli Madya Pariwisata (A.Mad.Par).</p>\r\n<p>Visi</p>\r\n<p>Menjadi program studi unggulan menghasilkan tenaga professional di bidang Tata Hidangan, memliki keunggulan kompetitif dalam memenuhi standar internasional.</p>\r\n<p>Misi</p>\r\n<p>Menyelenggarakan program pendidikan yang dapat menghasilkan tenaga professional di bidang Tata Hidangan, bermutu andal dan berorientasi pada pemenuhan kebutuhan dunia usaha/industri baik nasional maupun internasional, menciptakan iklim yang kondusif melalui potensi yang dimiliki untuk memberikan pelayanan prima, menghasilkan lulusan yang memiliki kompetensi sesuai bidangnya agar mampu berkompetisi di era global.</p>\r\n<p>Tujuan Pendidikan</p>\r\n<p>Menghasilkan lulusan/tenaga kerja yang professional di bidang Tata Hidangan.</p>\r\n<p>Kompetensi Lulusan</p>\r\n<p>Kompetensi Utama<br />Mengembangkan kepribadian yang luhur serta jiwa nasionalisme.<br />Menerapkan nilai-nilai sikap dan etika profesi.<br />Pengetahuan dan kemampuan di bidang Perhotelan seperti: Tata Hidangan Makanan dan Minuman, Manajemen Hotel serta Bahasa Inggris Profesi. dalam pengembangan serta penerapannya.<br />Sikap dan prilaku seorang insan pariwisata yang profesional; memiliki etos kerja serta disiplin yang tinggi.<br />Wawasan dan ketajaman visi akan perkembangan ilmu pengetahuan dan teknologi, khususnya di bidang Perhotelan dan Restoran; seperti teknologi informasi dan komputerisasi yang menunjang berbagai aktivitas dalam industri perhotelan dan Restoran.<br />Kemampuan berpikir kritis dan melakukan problem solving.<br />Kemampuan untuk berkomunikasi dan beradaptasi.<br />Kepekaan terhadap aspek ekonomi, bisnis dan kehidupan bermasyarakat.<br />Pengembangan karakter, spiritualitas dan kepemimpinan.&nbsp;<br />Kompetensi Pendukung lulusan:<br />Berkomunikasi dalam bahasa Inggris dan Bahasa Asing lainnya seperti: Bahasa Mandarin, Bahasa Jepang dan Bahasa Perancis.<br />Kompetensi dalam menggunakan teknologi informasi yang tercanggih.<br />Kompetensi dalam menyelenggarakan dan mengatur persiapan acara, baik skala besar maupun skala kecil; terutama yang terkait dengan bidang MICE.<br />Kompetensi Lainnya/Pilihan Lulusan&nbsp;&nbsp;<br />Kompetensi untuk menjadi pendidik dalam bidang ilmu perhotelan dan pariwisata.<br />Kompetensi untuk melakukan penelitian dalam bidang ilmu dan teknologi yang terkait dengan bidang pariwisata, khususnya Manajemen Perhotelan.<br />Kompetensi di bidang wirausaha / entrepreneur; khususnya kemampuan berwirausaha dalam mengelola bisnis yang terkait dengan perhotelan maupun usaha jasa lainnya.</p>', NULL, 'Diploma III'),
(4, 'Rooms Division', '<p>Tujuan Pendidikan : untuk menghasilkan lulusan yang memiliki kompetensi dalam mensupervisi operasional pada bagian Kantor Depan & Divisi Kamar.<br />Profil Lulusan : Front Office Manager & Executive Housekeeper<br />Waktu Studi : 6 Semester (3-5 tahun) | Beban Studi : 110-120 SKS | Sebutan yang diberikan : Ahli Madya Pariwisata (A.md, Par).</p>\r\n<p>Kompetensi<br />Menangani pemesanan kamar, kedatangan dan keberangkatan tamu.<br />Menangani informasi, surat menyurat, pesanan dan barang tamu<br />Menangani pelayanan telepon, faksimili, surat dan internet<br />Menangani pembayaran rekening tamu<br />Merencanakan dan menyelenggarakan MICE</p>\r\n<p>Menangani check in dan check out untuk tamu VIP</p>\r\n<p>Menangani Complaint dari tamu<br />Menangani administrasi operasional Divisi Kamar<br />Mampu menyiapkan kamar dan membersihkan ruang hotel lainnya</p>\r\n<p>Mampu menyiapkan kamar ready to sell (Vacant Clean Inspected)</p>\r\n<p>Mampu menbuat standard set up untuk hotel khususnya kamar</p>\r\n<p>Mampu membuat Room Cost untuk hotel bintang 5 (Lima)<br />Menangani pelayanan "butler"Menyiapkan mainpower untuk operasional</p>\r\n<p> </p>\r\n<p> </p>	', NULL, 'Diploma III'),
(5, 'Chef Academy', '<p>Tujuan Pendidikan :&nbsp; untuk menghasilkan lulusan yang memiliki kompetensi dalam mensupervisi usaha pada bagian pengolahan makanan.<br />Profil Lulusan : Chef de Party / Food Supervisor<br />Waktu Studi : 6 Semester (3-5 tahun) | Beban Studi : 110-120 SKS | Sebutan yang diberikan : Ahli Madya Pariwisata (A.Mad.Par).</p>\r\n<p>&nbsp;</p>\r\n<p><strong>VISI</strong></p>\r\n<p><br />Menjadi lembaga pendidikan tinggi di bidang tata boga yang bercirikan pemenuhan kebutuhan masyarakat dan memiliki keunggulan kompetitif dalam memenuhi standar internasional guna merebut peluang kerja serta mampu menciptakan lapangan kerja sendiri.</p>\r\n<p>&nbsp;<br /><strong>MISI</strong></p>\r\n<p><br />Menyelenggarakan program pendidikan yang bermutu andal dan berorientasi pada pemenuhan kebutuhan dunia usaha/ industri, lokal, nasional dan internasional, sehingga lulusan siap memasuki dunia kerja.<br />Menciptakan iklim yang kondusif dengan memberdayakan semua potensi yang dimiliki guna memberikan&nbsp; pelayanan prima kepada pengguna melalui program pendidikan yang berkualitas.<br />Menghasilkan lulusan yang memiliki kompetensi di bidang ilmu pengetahuan, teknologi dan seni, sehingga mampu berkompetisi di era pasar bebas.<br />&nbsp;<br /><br /></p>\r\n<p><strong>KOMPETENSI LULUSAN</strong></p>\r\n<p><br />Lulusan&nbsp;&nbsp; Program&nbsp;&nbsp; Studi&nbsp;&nbsp; Pendidikan&nbsp;&nbsp; Tata&nbsp;&nbsp; Boga&nbsp;&nbsp; mempunyai kompetensi sebagai berikut:</p>\r\n<p>Membuat, mengembangkan dan menciptakan makanan serta mengaplikasikannya kedalam berbagai bentuk penyajian makanan<br />Menerapkan prinsip-prinsip pengawasan pada bidang produksi makanan&nbsp;<br />Menciptakan gagasan-gagasan Inovatif<br />Mengaplikasikan metode investasi di bidang pengolahan makanan<br />Menyusun anggaran oprasional dalam bidang pengolahan makanan<br />Menerapkan prinsip-prinsip penentuan harga jual makanan dan minuman<br />Menerapkan prinsip-prinsip manajemen sumber daya manusia dalam bidang pengolahan makanan<br />Menerapkan prinsip-prinsip pemasaran dalam penjualan makanan dan minuman</p>\r\n<p><br /><strong>Kepribadian</strong></p>\r\n<p>Menjadi manusia Indonesia seutuhnya yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia, berkepribadian mantap, stabil, dewasa, arif dan berwibawa, sehingga menjadi teladan bagi peserta didik, mandiri dan bertanggung jawab terhadap perkembangan profesinya, anak didiknya, lingkungan kerjanya, masyarakat dan bangsanya.</p>\r\n<p><strong>Profesional</strong></p>\r\n<p>Lulusan dapat menguasai :</p>\r\n<p>Mampu menyelenggarakan (merencanakan, mengolah dan menyajikan) makanan continental,</p>\r\n<p>Mampu mengembangkan inovasi pengolahan dan pengawetan pangan,</p>\r\n<p>Mampu mendesain dan menata hidangan untuk buku dan iklan di berbagai media dengan kemampuan kulineri yang dimiliki,</p>\r\n<p>Mampu mendemonstrasikan berbagai jenis makanan di berbagai tempat,</p>\r\n<p>Mampu menulis artikel bidang boga pada media cetak,</p>\r\n<p>Mampu mengelola restoran, katering, dan toko kue/roti,</p>\r\n<p>Mampu memimpin organisasi pada bidang pelayanan makanan dan minuman di hotel,</p>\r\n<p>Mampu menerapkan SSOP (Standard Sanitation Operating Procedures) pada bidang usaha boga dan industri pangan dan&nbsp;</p>\r\n<p>Mampu membuka lapangan kerja bidang boga.</p>\r\n<p><br /><strong>Sosial</strong></p>\r\n<p>Lulusan memiliki kemampuan untuk berkomunikasi secara efektif dengan peserta didik, tenaga kependidikan, orang tua/ wali dan masyarakat</p>', NULL, 'Diploma III'),
(6, 'Hotel Management', '<p>class extention is program that provides opportunity for employees to obtain prompt and effordable degree , particularly for those whom work in hospitality industry .</p>	', NULL, 'Diploma III Executive Class'),
(7, 'English Course', '<p>JIHS menyelenggarakan kursus bahasa Inggris yang dipandu oleh guru Bahasa Inggris yang profesional. Program kursus Bahasa Inggris ini terbuka bagi Perusahaan Korporasi, Hotel &amp; Restoran , Departemen maupun individual.</p>\r\n<p>Program :</p>\r\n<p>1. English Correspondance</p>\r\n<p>2. English for Hotelier</p>\r\n<p>3. English Conversation</p>\r\n<p>Program kursus ini berlangsung mulai dari 3 bulan hingga 6 bulan. English Made Easy merupakan metode yang sangat mudah bagi mereka yang ingin meningkatkan maupun ingin belajar Bahasa Inggris.</p>', NULL, 'Other Programs'),
(8, 'Chef Course', '<p>JIHS menyelenggarakan program Culinary Art Course dengan durasi singkat. Program ini bertujuan untuk memberikan pengatahuan dan ketrampilan dalam dunia kuliner bagi semua kalangan memiliki dan ingin terjun dalam dunia kuliner. Dengan dipandu oleh Chef yang berpengalaman dari Hotel Berbintang kami akan memamndu anda dalam mengolah masakan Eropa, Oriental serta Mediterania.</p>\r\n<p>Program belajar kami didesign dengan metode edutainment dimana peserta kursus dapat menyerap ilmu dengan cara yang rileks namun tetap bermutu. Program kami dapat membantu untuk memulai dalam industri kuliner.</p>\r\n<p>Program Culinary Art Course :</p>\r\n<p>1. Basic Culinary Course</p>\r\n<p>2. Pastry & Bakery Express</p>\r\n<p>3. Fruit Carving</p>\r\n<p> </p>', NULL, 'Other Programs'),
(9, 'Hotel Consultant and Training', '<p>JIHS menyelenggarakan program Hotel Konsultant yang dilakukan oleh tenaga Perhotelan berbintang lima. Selain itu kamai menyediakan pelatihan bagi Perusahaan korporasi maupun BUMN. Program Pelatihan yang tawarkan :</p>\r\n<p>1. Basic Hotel Operations</p>\r\n<p>2. Service Excellence</p>\r\n<p>3. Table Manner</p>\r\n<p>4. Leadership</p>\r\n<p>5. Communication Skill</p>\r\n<p>Program ini dipandu oleh para Excutive Trainner yang handal di bidangnya.</p>', NULL, 'Other Programs');

-- --------------------------------------------------------

--
-- Table structure for table `student_say`
--

CREATE TABLE `student_say` (
  `id_student` int(3) NOT NULL,
  `nama_student` varchar(250) DEFAULT NULL,
  `jurusan_student` varchar(200) DEFAULT NULL,
  `angkatan_student` varchar(50) DEFAULT NULL,
  `kelas_student` varchar(100) DEFAULT NULL,
  `deskrispsi_student` text,
  `foto_student` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_say`
--

INSERT INTO `student_say` (`id_student`, `nama_student`, `jurusan_student`, `angkatan_student`, `kelas_student`, `deskrispsi_student`, `foto_student`) VALUES
(1, 'Aji', 'Food and Beverage department', '2014', 'SMT3', '<p><p>Professional dan Kedisiplinan menambah keyakinan saya untuk meraih Masa depan Saya di dunia perhotelan, Saya belajar banyak di JIHS , bersama teman dan dosen dosen yang asik membuat motivasi tersendiri untuk melalui hari hari kuliah disini. <strong>KAMU BISA KITA BISA , BERSAMA KITA BISA &nbsp;with JIHS</strong></p></p>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sukses_story`
--

CREATE TABLE `sukses_story` (
  `id_story` int(11) NOT NULL,
  `nama_mahasiswa` varchar(250) DEFAULT NULL,
  `jenis_jabatan` varchar(200) DEFAULT NULL,
  `jabatan` varchar(250) DEFAULT NULL,
  `story` text,
  `foto_story` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sukses_story`
--

INSERT INTO `sukses_story` (`id_story`, `nama_mahasiswa`, `jenis_jabatan`, `jabatan`, `story`, `foto_story`) VALUES
(1, 'Didik masyudi', 'front office', 'Front Desk Supervisor JW.Marriot Marquis Abu Dhabi', '<p><p>Didi Masyudi</p>\r\n<p>Front Desk Supervisor JW.Marriott Marquis Abu Dhabi.</p>\r\n<p>Pilihan saya untuk menuntut ilmu di JIHS tidaklah salah pilih, kampus ini memiliki kurikulum yang sangat sesuai dengan kebutuhan di industri. Di samping itu para dosennya pun sangat berkwalitas dengan pengalaman didunia perhotelan berbintang.&nbsp; Pada saat saya masih di semester V, saya sudah mendapat tawaran kerja di Hotel Mandarin Oriental Jakarta dan saya baru saja lulus di tahun 2014 akan segera bergabung di JW.Marriot&nbsp; Marquis Abu Dhabi, Thanks dan Bravo JIHS.</p></p>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour_kampus`
--

CREATE TABLE `tour_kampus` (
  `id_tour` int(11) NOT NULL,
  `judul_tour` varchar(250) DEFAULT NULL,
  `deskrispsi_tour` text,
  `foto_tour` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_kampus`
--

INSERT INTO `tour_kampus` (`id_tour`, `judul_tour`, `deskrispsi_tour`, `foto_tour`) VALUES
(1, 'Gerbang Kampus', '<p>Tour di mulai dari gerbang kampus nan asri, berlokasi di jantung kota Jakarta, kawasan bisnis SCBD, Jl. Jend. Sudirman Jakarta.</p>', NULL),
(2, 'Gedung Kampus', '<p>Gedung berlantai 3 dengan 20 kelas belajar, 6 praktek laboratorium, sarana olahraga, parkiran yang luas siap menanti anda.</p>', NULL),
(3, 'Ruang Kelas', '<p>Ruang kelas ber AC, memilki Projector dan luas akan menjadi sarana pembelajaran harian anda.</p>', NULL),
(4, 'Pembelajaran Outdoor', '<p>Namun, pembelajaran out-door yang menyenangkan pun menjadi hal yang rutin di kampus JIHS</p>', NULL),
(5, 'Perpustakaan', '<p>Tentunya, perpustakaan yang unik dan menyenangkan akan mendukung pembelajaran dan referensi anda.</p>', NULL),
(6, 'Laboratorium Komputer', '<p>Bahkan, lab komputer yang menampung 40 mahasiswa akan selalu tersedia untuk anda.</p>', NULL),
(7, 'Musholla', '<p>Musholla yang bersih juga di siapkan</p>', NULL),
(8, 'Ibadah', '<p>Jangan lupa beribadah ya &hellip;.</p>', NULL),
(9, 'Ruang Praktek House Keeping dan FO', '<p>Sekarang kita menjelajah ke ruang praktek House keeping dan FO, sebuah kamar yang cantik siap menanti anda untuk praktek house keeping</p>', NULL),
(10, 'House Keeping dan FO - Rest Room', '<p>Kamar yang dilengkapi rest room yang modern pastinya.</p>', NULL),
(11, 'Praktek Laundry', '<p>Eittssss, praktek laundry pun tetap menyenangkan untuk dilaksanakan.</p>', NULL),
(12, 'Lobby Hotel Mini', '<p>Lobby hotel mini kami siapkan untuk praktek GRO dan Public Relation.</p>', NULL),
(13, 'Hotel Reservation', '<p>Check-in, check-out, reservation process akan lebih mudah dilakukan di ruang praktek ini.</p>', NULL),
(14, 'Praktek Restaurant', '<p>JIHS memiliki restauran praktek dengan kapasitas 30 dining seat loh.</p>	', NULL),
(15, 'Restaurant Bar', '<p>Restauran ini dilengkapi dengan bar dan berbagai minuman, baik cocktail maupun mocktail.</p>', NULL),
(16, 'Perlengkapan FB', '<p>Perlengkapan FB yang sangat lengkap tersimpan rapi di <em>store</em> kami.</p>', NULL),
(17, 'Kitchen JIHS', '<p>Di mana semua makanan restauran di masak? Pastinya di <em>Kitchen</em> JIHS yang nyaman dan lengkap.</p>', NULL),
(18, 'Mari Bergabung', '<p>Kampus dan nyaman dengan suasana kekeluargaan siap menunggu anda semua, mari bergabung dan sukses bersama kami.</p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hakakses` varchar(20) NOT NULL,
  `login` int(1) NOT NULL,
  `waktulogin` datetime NOT NULL,
  `aktif` int(1) NOT NULL,
  `waktulogout` datetime NOT NULL,
  `iplogin` varchar(20) NOT NULL,
  `jenis_user` varchar(100) DEFAULT NULL,
  `kode_depo` int(3) DEFAULT NULL,
  `telepon_user` varchar(14) DEFAULT NULL,
  `email_user` varchar(200) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama`, `username`, `password`, `hakakses`, `login`, `waktulogin`, `aktif`, `waktulogout`, `iplogin`, `jenis_user`, `kode_depo`, `telepon_user`, `email_user`, `foto`) VALUES
(1, 'Admin Kampus', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 1, '2018-01-31 09:39:26', 1, '2018-01-31 10:02:17', '::1', '', 1, '085291836550', 'ahmadnursahid93@gmail.com', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(250) DEFAULT NULL,
  `kategori_video` varchar(100) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id_admission`);

--
-- Indexes for table `aktifitas_kampus`
--
ALTER TABLE `aktifitas_kampus`
  ADD PRIMARY KEY (`id_aktifitas`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `berita_kampus`
--
ALTER TABLE `berita_kampus`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `kampus_event`
--
ALTER TABLE `kampus_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id_karir`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `kunci`
--
ALTER TABLE `kunci`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`nolog`);

--
-- Indexes for table `program_study`
--
ALTER TABLE `program_study`
  ADD PRIMARY KEY (`id_study`);

--
-- Indexes for table `student_say`
--
ALTER TABLE `student_say`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `sukses_story`
--
ALTER TABLE `sukses_story`
  ADD PRIMARY KEY (`id_story`);

--
-- Indexes for table `tour_kampus`
--
ALTER TABLE `tour_kampus`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id_admission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `aktifitas_kampus`
--
ALTER TABLE `aktifitas_kampus`
  MODIFY `id_aktifitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita_kampus`
--
ALTER TABLE `berita_kampus`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kampus_event`
--
ALTER TABLE `kampus_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `karir`
--
ALTER TABLE `karir`
  MODIFY `id_karir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kunci`
--
ALTER TABLE `kunci`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `nolog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=489;
--
-- AUTO_INCREMENT for table `program_study`
--
ALTER TABLE `program_study`
  MODIFY `id_study` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student_say`
--
ALTER TABLE `student_say`
  MODIFY `id_student` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sukses_story`
--
ALTER TABLE `sukses_story`
  MODIFY `id_story` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tour_kampus`
--
ALTER TABLE `tour_kampus`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
