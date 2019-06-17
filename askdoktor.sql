-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 03:05 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `askdoktor`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_update` date NOT NULL,
  `image` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `kunjungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `tgl_buat`, `tgl_update`, `image`, `isi`, `kunjungan`) VALUES
(2, 'Hati-hati, 4 Buah Ini Bisa Bikin Perut Kembung', '2018-12-08', '2019-06-16', 'kembung.jpg', '<p>perut kembung. Imbangi asupan buah Anda dengan minum air putih, kunyah sampai benar-benar lumat, dan tidak mengonsumsinya terlalu banyak, khususnya bagi Anda yan sedari awal punya masalah di pencernaan. Sehingga, risiko kondisi perut kembung dan buncit bisa diminimalkan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n', 56),
(4, 'Makanan Organik Bisa Cegah Kanker, Benarkah?', '2018-12-08', '2018-12-18', 'organik.jpg', '<p>Bila mengunjungi supermarket, Anda akan menemukan banyak makanan dengan label&nbsp;<em>&ldquo;organic&rdquo;.</em>&nbsp;Bahan makanan jenis ini biasanya dipatok dengan harga yang lebih mahal. Meski demikian, produk-produk organik kini sangat diminati masyarakat karena dianggap lebih sehat. Bahkan, tak sedikit yang percaya bahwa makanan organik bisa mencegah penyakit kanker.</p>\r\n\r\n<p>Kanker masih menjadi momok yang menakutkan bagi banyak orang. Pasalnya, kanker merupakan salah satu penyebab kematian utama di seluruh dunia. Pola makan yang kurang sehat disinyalir menjadi penyebab utama peningkatan risiko terjadinya kanker. Dan orang-orang meyakini bahwa mengonsumsi makanan organik dapat menekan sel-sel kanker dalam tubuh.</p>\r\n\r\n<p><a href=\"https://www.klikdokter.com/info-sehat/read/3619991/makanan-organik-bisa-cegah-kanker-benarkah\" target=\"_blank\">Makanan organik</a>&nbsp;adalah makanan yang dalam proses penanaman, pemeliharaan, atau pengolahannya tidak menggunakan bahan kimia. Pupuk kimia, pestisida, antibiotik, hormon, pengawet, pewarna, atau bahan sintetik lainnya adalah contoh dari bahan kimia.</p>\r\n\r\n<p>Selain itu, makanan organik juga tidak diizinkan menggunakan radiasi maupun manipulasi genetik. Hal ini dapat mengurangi residu zat kimia yang masuk ke dalam tubuh manusia saat mengonsumsi makanan organik tersebut. Karena proses inilah, makanan organik dianggap lebih sehat dibandingkan makanan non-organik.</p>\r\n\r\n<p>Apa saja makanan organik yang dapat Anda konsumsi? Berikut adalah bahan-bahan&nbsp;<a href=\"http://www.klikdokter.com/rubrik/read/2700682/hindari-kesalahan-ini-saat-membeli-makanan-organik\">makanan organik</a>&nbsp;yang telah banyak tersedia di pasaran.</p>\r\n\r\n<ol>\r\n	<li>\r\n	<h3><strong>Buah dan sayur organik</strong></h3>\r\n	</li>\r\n</ol>\r\n\r\n<p>Buah dan sayur organik adalah jenis makanan organik yang paling sering dan mudah ditemukan. Mereka ditanam tidak menggunakan pestisida dan pupuk kimia buatan, sehingga lebih aman bagi Anda dan keluarga.</p>\r\n\r\n<ol start=\"2\">\r\n	<li>\r\n	<h3><strong>Daging organik</strong></h3>\r\n	</li>\r\n</ol>\r\n\r\n<p>Daging organik berasal dari daging hewan potong yang tidak mendapat suntikan antibiotik ataupun hormon dalam perawatannya. Ada pula hewan potong yang hanya mengonsumsi rumput organik sebagai makanannya.</p>\r\n\r\n<ol start=\"3\">\r\n	<li>\r\n	<h3><strong>Produk susu organik</strong></h3>\r\n	</li>\r\n</ol>\r\n\r\n<p>Susu organik merupakan susu yang diperah dari hewan yang tidak mendapatkan antibiotik maupun hormon. Sedangkan produk turunan susu organik adalah produk yang diolah dengan menggunakan susu organik.</p>\r\n\r\n<ol start=\"4\">\r\n	<li>\r\n	<h3><strong>Ikan organik</strong></h3>\r\n	</li>\r\n</ol>\r\n\r\n<p>Ikan organik biasanya dipelihara dan dibudidayakan di peternakan khusus dan hanya mengonsumsi makanan organik. Sebaliknya, ikan yang ditangkap di laut lepas tidak dapat diberi label organik.</p>\r\n\r\n<h2><strong>Penelitian mengenai makanan organik dan kanker</strong></h2>\r\n\r\n<p>Sayangnya, sampai saat ini belum banyak data penelitian yang menyatakan bahwa makanan organik lebih unggul secara signifikan dibandingkan dengan makanan non-organik.</p>\r\n\r\n<p>Namun pada tahun 2015, The International Agency for Research on Cancer mengelompokkan tiga jenis pestisida yang sering digunakan dalam bidang agrikultur, yaitu malation, glifosat, dan diazinon<em>.&nbsp;</em>Berdasarkan penelitian, ketiganya dinyatakan bersifat karsinogenik atau memicu kanker pada manusia.</p>\r\n\r\n<p>Disebutkan juga bahwa pada paparan okupasional (paparan yang terjadi di tempat kerja), malation berkaitan dengan kanker prostat. Sementara diazinon berhubungan dengan kanker paru-paru. Ketiga pestisida ini juga dihubungkan dengan kanker limfoma non-Hodgkin.</p>\r\n\r\n<p>Di Amerika Serikat, lebih dari 90% populasi terdeteksi pestisida pada pemeriksaan urine dan darah. Hal ini sungguh miris karena dapat disimpulkan bahwa makanan sehari-hari yang mereka konsumsi dapat bersifat karsinogenik akibat pestisida di dalamnya.</p>\r\n\r\n<p>Penelitian mengenai makanan organik dan kaitannya dengan&nbsp;<a href=\"https://www.klikdokter.com/penyakit/kanker\" target=\"_blank\">penyakit kanker</a>&nbsp;harus terus dikembangkan. Sehingga makin kuat fakta yang menyatakan bahwa makanan organik dapat mencegah kanker. Namun, tak ada salahnya mulai beralih menjadi konsumen makanan organik demi meminimalkan paparan pestisida dan bahan kimia lainnya yang masuk ke dalam tubuh.</p>\r\n', 14),
(10, '7 Sayuran yang Sebaiknya Tidak Dimakan Mentah', '2019-01-03', '2019-01-03', 'sayuran.jpg', '<p>Saat bicara soal makanan sehat, pasti sayur-sayuran termasuk di dalamnya. Karena ingin mendapatkan segala kebaikan yang terkandung dalam sayuran, tak jarang orang memutuskan untuk mengonsumsinya secara mentah saja (tentunya setelah dicuci bersih dulu). Meski begitu, tahukah Anda bahwa tak semua&nbsp;<a href=\"https://www.klikdokter.com/info-sehat/read/3616303/4-sayuran-yang-tak-boleh-dipanaskan-berulang\" target=\"_blank\">sayuran</a>&nbsp;itu baik bila dimakan mentah?</p>\r\n\r\n<p>Ya, rupanya ada beberapa jenis sayur yang lebih berkhasiat jika dimasak terlebih dahulu sebelum dikonsumsi. Bahkan, jika sayuran ini dimakan mentah, justru bisa menimbulkan keracunan bagi sebagian orang. Berikut ragam sayuran yang sebaiknya tidak Anda makan mentah:<iframe frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_/95250053/KLIKDOKTER_DESKTOP/INFO-SEHAT/INARTICLE_0\" name=\"google_ads_iframe_/95250053/KLIKDOKTER_DESKTOP/INFO-SEHAT/INARTICLE_0\" scrolling=\"no\" title=\"3rd party ad content\" width=\"1\"></iframe></p>\r\n\r\n<h3><strong>1. Tomat</strong></h3>\r\n\r\n<p>Sebenarnya, menyantap irisan tomat mentah hingga jus tomat segar itu tidak salah. Namun, manfaat likopen &ndash; zat antioksidan dalam tomat &ndash; akan lebih melimpah jika tomat tersebut dimasak terlebih dahulu. Proses memasak akan makin meningkatkan kadar likopen di dalam tomat.</p>\r\n\r\n<p>Menurut&nbsp;<strong>dr. Dyah Novita Anggraini</strong>&nbsp;dari&nbsp;<em>KlikDokter</em>, jika Anda merebus tomat selama 15 menit, kadar likopen akan meningkat sebanyak 171 persen. Satu hal yang perlu diingat, jangan pernah merebusnya lebih dari 15 menit, karena hal tersebut bisa menghilangkan sebagian besar kandungan vitamin C dalam tomat.</p>\r\n\r\n<h3><strong>2. Jamur</strong></h3>\r\n\r\n<p>Sebenarnya, jamur sama seperti tomat. Sayuran yang satu ini dapat dimakan mentah ataupun dimasak terlebih dahulu. Tapi, saat Anda mengolah jamur dengan cara ditumis, direbus, atau dipanggang, cara tersebut dapat meningkatkan kadar kalsium dalam jamur.</p>\r\n\r\n<h3><strong>3. Asparagus</strong></h3>\r\n\r\n<p>Tak cuma melunakkan teksturnya agar lebih mudah dicerna, makan asparagus matang akan membantu tubuh Anda menyerap lebih banyak nutrisi pencegah kanker di dalamnya. Anda bisa memasak asparagus dengan cara dipanggang, ditumis, ataupun dikukus dengan sedikit minyak zaitun, garam, dan air perasan lemon.</p>\r\n\r\n<h3><strong>4. Kentang</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.klikdokter.com/info-sehat/read/3620690/7-sayuran-yang-sebaiknya-tidak-dimakan-mentah#\"><img alt=\"7 Sayuran yang Sebaiknya Tidak Dimakan Mentah (FabrikaSimf/Shutterstock)\" src=\"https://cdn0-a.production.images.static6.com/l5KY8eqOp7KTvD2JlGyJ69FDmE8=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/liputan6-media-production/medias/2302666/original/073254600_1546424745-7-Sayuran-yang-Sebaiknya-Tidak-Dimakan-Mentah-Kentang-By-FabrikaSimf-Shutterstock.jpg\" style=\"height:360px; width:640px\" /></a></p>\r\n\r\n<p>7 Sayuran yang Sebaiknya Tidak Dimakan Mentah (FabrikaSimf/Shutterstock)</p>\r\n\r\n<p>Menurut penelitian dari Utah State University, kentang mentah mengandung konsentrasi solanin yang tinggi dan itu beracun buat tubuh. Lebih lanjut, kentang mentah hanya akan menyebabkan munculnya gas dalam perut sehingga terasa kembung. Jadi, segala nutrisi yang terkandung dalam kentang baru bisa aktif bila Anda memasaknya terlebih dahulu.</p>\r\n\r\n<h3><strong>5. Brokoli dan kembang kol</strong></h3>\r\n\r\n<p>Pada dasarnya, kedua&nbsp;<a href=\"https://www.klikdokter.com/info-sehat/read/3617719/sayur-dan-buah-beda-warna-beda-khasiat\" target=\"_blank\">sayuran</a>&nbsp;yang mirip bentuknya ini dapat dikonsumsi mentah. Bahkan, brokoli mengandung nutrisi yang lebih banyak ketika dimakan mentah. Tapi bagi sebagian orang, khususnya yang punya masalah pencernaan, sistem pencernaan akan &ldquo;berjuang&rdquo; keras ketika Anda mengonsumsi brokoli ataupun kembang kol mentah. Cobalah kukus sebentar saja untuk memudahkan lambung serta usus Anda mencerna kedua sayuran tersebut.</p>\r\n\r\n<h3><strong>6. Bayam</strong></h3>\r\n\r\n<p>Menurut&nbsp;<strong>dr. Devia Irine Putri</strong>&nbsp;dari&nbsp;<em>KlikDokter</em>, ketika Anda baru membeli bayam, sebaiknya Anda tidak membiarkannya terlalu lama di udara terbuka karena zat besi ion ferro bisa berubah menjadi ion ferri yang berbahaya bagi tubuh. Mengonsumsi ion ferri dalam jumlah besar akan memperberat kinerja lambung.</p>\r\n\r\n<p>Tak cuma ion ferro, bayam juga mengandung nitrat. Ketika bayam terlalu lama berada di udara bebas, nitrat berubah menjadi nitrit. Nah, nitrit yang termakan itu membentuk hemoglobin yang tidak mampu mengikat oksigen sehingga tubuh akan kekurangan oksigen.</p>\r\n\r\n<p>&ldquo;Dengan memasaknya sebentar, ion ferri dan nitrit bisa dihilangkan. Kalaupun Anda ingin memakannya mentah, sebaiknya waktu antara pemetikan dengan pengonsumsian tidak terlampau jauh. Dan itu lebih sulit untuk diwujudkan, bukan? Apalagi jika Anda membelinya di supermarket atau penjual sayur keliling,&rdquo; tutur dr. Devia Irine.</p>\r\n\r\n<h3><strong>7. Kacang-kacangan</strong></h3>\r\n\r\n<p>Pada sebagian orang, mengonsumsi kacang-kacangan mentah yang tinggi glikoprotein lektin dapat menyebabkan mual, muntah, dan diare (keracunan) setelah selang tiga jam dari waktu makan. Bahkan, kacang merah yang tidak direbus sampai matang mengandung 70.000 unit toksin. Sedangkan sehabis dimasak, kadar toksin itu benar-benar bisa menurun drastis dan bahkan hilang. Jadi supaya lebih aman, rendam kacang setidaknya selama 5 jam, setelah itu ganti airnya, lalu rebuslah hingga lunak.</p>\r\n\r\n<p>Jika ingin terhindar dari keracunan dan mendapatkan manfaat maksimal dari&nbsp;<a href=\"https://www.klikdokter.com/info-sehat/read/3620654/hati-hati-makan-sayuran-mentah-tak-selalu-sehat\" target=\"_blank\">sayuran</a>, tak ada salahnya untuk mengonsumsi ketujuh sayuran tersebut dalam kondisi matang. Namun, pastikan Anda tidak memasaknya terlalu matang (sampai lembek dan berubah warna). Bila Anda tetap nekat untuk mengonsumsi versi mentahnya, nutrisi yang masuk ke dalam tubuh mungkin jadi tidak maksimal dan justru merugikan kesehatan.</p>\r\n', 21),
(11, 'Kenali Manfaat Wortel untuk Kulit Anda', '2019-01-03', '2019-01-03', 'wortel1.jpg', '<p>Sudahkah Anda mengonsumsi wortel hari ini? Ya,&nbsp;<a href=\"https://www.klikdokter.com/info-sehat/read/3106726/5-manfaat-wortel-untuk-kesehatan-tubuh-anda\" target=\"_blank\">wortel</a>merupakan salah satu sayur berwarna jingga yang dikenal mengandung berbagai macam sumber vitamin serta mineral. Saat ini, banyak orang mengenal wortel baik untuk kesehatan mata. Namun ternyata, wortel juga dapat membantu menjaga kesehatan kulit Anda, lo.</p>\r\n\r\n<p>Menurut&nbsp;<strong>dr. Reza Fahlevi</strong>&nbsp;dari&nbsp;<em>KlikDokter</em>, kandungan dalam wortel juga bisa dikaitkan dengan penurunkan risiko kanker, terutama kanker paru-paru. Beta-karoten yang banyak dimiliki wortel disebut memiliki efek melindungi dari serangan kanker.</p>\r\n\r\n<p>Lantas, bagaimana dengan manfaat wortel untuk organ lainnya, terutama kulit?</p>\r\n\r\n<h2><strong>Segudang khasiat wortel untuk kulit</strong></h2>\r\n\r\n<p>Wortel mengandung vitamin C yang memiliki sifat penyembuhan, sehingga membantu kulit pulih lebih cepat dari luka luar dan trauma. Vitamin C nyatanya membantu produksi kolagen dalam tubuh, yakni sejenis protein yang sangat penting untuk menjaga elastisitas kulit.</p>\r\n\r\n<p>Jangan lupakan pula kandungan beta-karoten dalam wortel. Tak hanya mengatasi kanker, beta-karoten juga melindungi serta mengondisikan kulit agar lebih kebal terhadap sengatan matahari.</p>\r\n\r\n<p>Selain itu, wortel juga kaya akan antioksidan. Untuk mendapatkan hasil yang lebih cepat, Anda bisa membuat masker wajah dengan mencampurkan parutan wortel dan madu, lalu oleskan dengan lembut pada permukaan kulit Anda. Mudah, bukan?</p>\r\n\r\n<p>Untuk menghilangkan jerawat, noda dan bekas luka, minum jus wortel adalah pilihan terbaik Anda. Sifat antiinflamasi pada wortel diketahui mampu membantu merevitalisasi serta mengencangkan kulit tubuh Anda.</p>\r\n\r\n<p>Jika Anda memiliki riwayat masalah kulit seperti ruam atau psoriasis, menambahkan jus&nbsp;<a href=\"https://www.klikdokter.com/info-sehat/read/3617863/manfaat-wortel-selain-untuk-kesehatan-mata\" target=\"_blank\">wortel</a>&nbsp;ke dalam daftar diet, dapat meningkatkan penampilan kulit Anda. Sejumlah penelitian telah membuktikan bahwa khasiat wortel pada kulit begitu signifikan.</p>\r\n\r\n<p>Bagaimana dengan kulit wortel? Jangan salah, bagian ini juga krusial dan tak boleh Anda lewatkan. Kulit wortel bermanfaat dan membantu kulit Anda mempertahankan kelembapannya dengan kandungan kalium yang mumpuni.</p>\r\n\r\n<p>Perlu Anda ketahui, kekurangan kalium dapat menyebabkan kulit kering, sehingga kandungan kalium yang tinggi pada wortel akan membuat kulit Anda tetap lembap dan sehat. Cara paling efektif untuk mendapatkan manfaat ini adalah meminum jus wortel.</p>\r\n\r\n<h2><strong>Pentingnya konsumsi wortel dalam batas wajar</strong></h2>\r\n\r\n<p>Menurut Hans Fisher, PhD, seorang professor dari Rutgers University, rutin mengonsumsi wortel dapat melindungi Anda dari penyakit mata seperti katarak, rabun dan masalah mata lainnya.</p>\r\n\r\n<p>Apalagi, wortel baik untuk kesehatan kulit Anda. Kini, Anda tidak perlu mengeluarkan banyak biaya untuk melakukan perawatan kulit, karena wortel bisa sangat membantu. Campuran vitamin A dan beta-karoten dalam jumlah tinggi membuat kulit terlihat sehat dan cerah.</p>\r\n\r\n<p>Jadi, jangan ragu untuk menambahkan lebih banyak wortel ke dalam makanan Anda, ya. Meskipun wortel memiliki beragam manfaat, ingatlah untuk tidak mengonsumsinya secara berlebihan. Hal ini disampaikan oleh&nbsp;<strong>dr. Karin Wiradarma</strong>&nbsp;dari&nbsp;<em>KlikDokter</em>.</p>\r\n\r\n<p>&ldquo;Wortel memang kaya akan vitamin A yang baik untuk mata dan kulit. Namun, jika setiap hari Anda mengonsumsi wortel dalam jumlah banyak, kulit Anda dapat berubah warna menjadi oranye,&rdquo; jelasnya.</p>\r\n\r\n<p>Meski demikian, Anda tak perlu cemas. Warna kulit Anda akan kembali seperti semula setelah mengurangi jumlah wortel yang Anda konsumsi. Untuk menjaga kesehatan kulit, Anda cukup mengonsumsi&nbsp;<a href=\"https://www.klikdokter.com/info-sehat/read/3616600/ini-dia-5-manfaat-jus-wortel-untuk-kesehatan\" target=\"_blank\">jus wortel</a>&nbsp;sekali dalam sehari. Dan jangan lupa, tetap imbangi dengan rutin berolahraga agar tubuh senantiasa sehat dan bugar.</p>\r\n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `spesialis` text NOT NULL,
  `hari` varchar(200) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nama`, `spesialis`, `hari`, `jam`) VALUES
(7, 'dr.R.Achmad Baruna, Sp.PD', 'Spesialis Penyakit Dalam', 'Senin-Rabu', '09.00-13.00'),
(8, 'dr. M.R. Kurnia Eni Safitri. Sp.PD', 'Spesialis Penyakit Dalam', 'Senin, Rabu, Jum\'at', '16.00-17.30'),
(11, 'dr. Miftah Rachman', 'Spesialis Penyakit Dalam', 'Selasa, Kamis, Sabtu', '16.00 - selesai');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) COLLATE dec8_bin NOT NULL,
  `jkel` enum('P','L') COLLATE dec8_bin NOT NULL,
  `telepon` int(13) NOT NULL,
  `alamat` text COLLATE dec8_bin NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `jkel`, `telepon`, `alamat`, `tanggal_lahir`, `tanggal_daftar`) VALUES
(1, 'Layin Indah Lestari', 'P', 2147483647, 'Pesanggaran', '1999-08-28', '2019-06-13 14:33:46'),
(6, 'Suroso', 'L', 232, 'Solo', '2019-06-10', '2019-06-13 20:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_obat`
--

CREATE TABLE `tabel_obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_obat`
--

INSERT INTO `tabel_obat` (`id`, `nama`, `keterangan`, `kategori`) VALUES
(2, '4 IN 1 JUNIOR 40 KAPSUL', 'Membantu mencerna makanan didalam tubuh serta memperbaiki penyerapan gizi, membantu meningkatkan nafsu makan anak, melengkapi gizi seimbang, membantu pertumbuhan tulang dan gigi, membantu meningkatkan daya tahan tubuh anak, mencegah konstipasi/sembelit pada anak', 'Vitamin'),
(5, 'ACIFAR 200 MG 10 KAPLET', 'Obat Acifar 400 mg tablet adalah obat mengandung Acyclovir merupakan Obat yang termasuk ke dalam Golongan Obat Keras, sehingga pembelian ACIFAR 400 MG tab harus menggunakan resep Dokter. Selain itu, dosis penggunaan ACIFAR 400 MG tab harus dikonsultasikan dengan Dokter terlebih dahulu sebelum digunakan karena dosis penggunaan ACIFAR 400 MG tab berbeda-beda setiap individunya tergantung berat dan ringan nya penyakit yang diderita. bagi orang yang dengan sistem kekebalan lemah, obat ini berguna untuk mengurangi risiko virus menyebar ke seluruh bagian tubuh yang lain', 'Kulit'),
(6, '4LIFE TRANSFER FACTOR ADVANCE FORMULA 60 KAPSUL', 'Membantu penyembuhan penyakit melalui regulasi sistem yang overaktif (Overactive Immune System)', 'Health Supplement'),
(7, '3M INTERDENTAL BRUSH', 'Sikat gigi special yang khusus di desain membersihkan kotoran di gigi, sisa-sisa makanan, plak gigi pada sela-sela gigi dan gusi Anda. Bentuk sikatnya unik, menarik dan didesain sedemikian rupa sehingga bisa membersihkan daerah-daerah gigi yang sulit dijangkau sikat gigi biasa. Dapat juga digunakan untuk Anda yang menggunakan behel.', 'Consumer Goods'),
(8, 'ASIFIT 30 KAPLET', 'Membantu produksi dan memperlancar ASI. Menjaga stamina ibu selama menyusui', 'Ibu dan Anak'),
(9, 'ALPHAMOL 600 MG 10 KAPLET', 'Demam pasca vaksinasi, sakit kepala, mialgia, nyeri sendi, sakit gigi, dismenore, nyeri telinga', 'Demam'),
(10, 'ABSOLUTE FEMINIME HYGIENE DAILY PROTECTION 60 ML', 'Membantu mengurngi gatal-gatal, bau tidak sedap dan rasa tidak nyaman. Kandungan Chamomile Extract-nya dapat mencegah terjadinya iritasi ringan serta memberikan rasa segar & nyaman pada daerah kewanitaan', 'Wanita'),
(11, 'ANDALAN LAKTASI 28 TABLET', 'Sebagai kontrasepsi oral untuk mencegah kehamilan', 'Kontrasepsi'),
(12, 'ACIDRINE 40 TABLET', 'Rasa terbakar pada ulu hati, pirosis, gangguan pencernaan, spasme, gastritis, esofagitis, hiatus hernia, nyeri tukak lambung dan duodenum, pirosis pada kehamilan, gastralgia', 'Maag dan Lambung'),
(13, 'ACLONAC 25 MG 10 TABLET', 'Meredakan nyeri dan mengurangi inflamasi pada pasien Rematoid Atritis akut dan kronis, nyeri pada tulang, spondilitis ankilosa. Meredakan nyeri ringan sampai sedang pada saat dismenore atau pasca operasi. Meredakan nyeri gigi ringan hingga sedang.', 'Anti Nyeri'),
(14, 'ACTARYL 1 MG 10 TABLET', 'Diabetes mellitus tipe 2 yang tidak dapat dikendalikan secara adekuat melalui diet, olahraga, dan penurunan berat badan saja. Dapat digunakan dalam kombinasi dengan metformin atau insulin.', 'Diabetes'),
(15, 'ABBOCATH JARUM INFUS NO.18', 'Untuk Anak & dewasa, biasanya untuk darah, komponen darah, & infus kental lainnya', 'Medical Device'),
(16, 'AFAMED 320 MG 10 KAPSUL', 'Afamed 320 mg merupakan suplemen untuk memelihara daya tahan tubuh. Obat ini mengandung zat aktif Aphanizomenon flos-aquae (AFA), spesies cyanobacteria (ganggang biru-hijau) yang diproses secara komersil menjadi suplemen diet. Afamed 320 mg bisa dikonsumsi sebagai penambah vitamin A karena mengandung asam lemak esensial, klorif, dan asam amino yang berfungsi untuk pembentukan protein, sel-sel, otot, serta kekebalan tubuh. Obat ini harus disimpan dengan suhu kamar 25 derajat celsius agar kualitasnya tetap terjaga.', 'Stamina'),
(17, 'ABBOTIC 125 MG/5 ML DRY SIRUP 60 ML', 'Infeksi saluran nafas, otitis media (radang telinga tengah) akut, infeksi kulit dan struktur kulit', 'Antibiotik'),
(18, 'A.VOGEL CRATAEGUS DROP 50 ML', 'Melebarkan pembuluh darah (vasodilatasi) pada sirkulasi koroner dan mengurangi kemungkinan serangan angina yang dapat memicu serangan jantung. - Memperbaiki dan memperkuat fungsi jantung. - Menyeimbangkan tekanan darah baik darah tinggi maupun darah rendah.', 'Herbal'),
(19, 'BETASLIM KAPLET', 'membantu mengurangi berat badan dan lemak tubuh', 'Dietery'),
(20, 'AMEROL 2 MG 8 TABLET', 'Diare akut non spesifik & diare kronik', 'Diare'),
(21, 'ALEGI 10 TABLET', 'Reaksi alergi yang memberi respons terhadap kortikosteroid, seperti urtikaria, rinitis alergi, dermatitis akut atau kronik, hay fever, konjungtivitis alergi.', 'Alergi'),
(22, 'ALCON SYSTANE 15 ML', 'Meredakan gejala panas terbakar dan iritasi akibat kekeringan pada mata', 'Mata'),
(23, 'AFIFLEX EMULGEL 50 G', 'Meredakan nyeri otot pinggang, leher, pundak, pegal-pegal, dan keseleo', 'Otot dan Sendi'),
(24, 'ABSOLUT FEMININE HYGIENE 50 ML', 'Mencegah gatal-gatal, iritasi, dan bau pada daerah kewanitaan', 'Antiseptik'),
(25, 'ACCOLATE 20 MG 14 TABLET', 'Pencegahan dan pengobatan Asma pada dewasa dan anak >= 12 tahun.', 'Asma'),
(27, 'ACTALIPID 10 MG 10 TABLET', 'Terapi tambahan untuk menurunkan kadar tinggi Kolesterol Total, LDL, Apolipoprotein B, dan Trigliserida pada pasien dengan Hiperkolesterolemia primer, Hiperlipidemia kombinasi atau campuran, Hiperkolesterolemia famili heterozigos dan homozigos dimana resep dari dokter', 'Jantung'),
(28, 'ALKOHOL 96% 100 ML', 'Digunakan untuk keperluan medis dan non medis, seperti, sterilisasi alat-alat medis, antiseptik, pelarut, dan bahan baku atau tambahan dalam keperluan praktikum', 'First Aid'),
(31, 'A.VOGEL ARTICHOKE CYNARA 50 ML', 'Menurunkan penyerapan kolesterol di usus', 'Health Supplement, Consumer Goods, Vitamin'),
(33, 'ACTIVA CONDOLISA REVIVAL MASK', 'Melembabkan dan melindungi kulit, sehingga dapat mempercepat proses pemulihan kulit. Melindungi scar supaya tetap bersih dan bebas dari kuman. Menyejukkan dan memulihkan kulit yang stres dan lelah.', 'Health Supplement, Wanita, Consumer Goods');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'anisa', 'anisa@gmail.com', 'MURDAS.png', '$2y$10$JUHLoPNyhqqn/szKqRf6mOyPzE7M5iE9upWg4FDgBZwbBUk9shdui', 2, 1, 1556464468),
(3, 'audi hening cipta prameswara', 'audi@gmail.com', '16-trump2.png', '$2y$10$vQEQphJER6W1tUaUMBNb2e7cHM0r8DfWiUI3b3BPIW5BK/VZTyCQW', 1, 1, 1556946030),
(4, 'sandi', 'sandi@gmail.com', 'default.jpg', '$2y$10$2BEgKLlxjPS4kJ9REBp73.iHb0u5NELEptoLhjQ/BN4WtRed9hUcm', 2, 1, 1560647222),
(5, 'andi', 'coegXpapa@gmail.com', 'default.jpg', '$2y$10$vzGNG3j/ysnNFpc5ZKClCOlSXvbLAh19dZ1NVvHLZSrCQG2PQKBga', 2, 1, 1560654484);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 3),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-users', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 1, 'Role', 'admin/role', 'fas fa-fw fa-users-cog', 1),
(10, 1, 'Artikel', 'admin/artikel', ' fas fa-fw fa-folder', 1),
(11, 1, 'Obat', 'admin/obat', 'fab fa-fw fa-twitter', 1),
(12, 1, 'Pasien', 'admin/pasien', 'fab fa-fw fa-facebook', 1),
(14, 2, 'Ubah Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(17, 1, 'Jadwal', 'admin/jadwal', 'fas fa-fw fa-folder', 1),
(18, 5, 'luput', 'coba/luput', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(2, 'coegXpapa@gmail.com', 'w/PyL5QxvFe6DMBa0ZcpCjz2bNIiHoXR9g2Wt4ySnzA=', 1560663298),
(3, 'coegXpapa@gmail.com', 'r7Qn8dDnu9awZdvqVQvgSXcff8fmcdWrWZoEjAw0eCU=', 1560665033);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_obat`
--
ALTER TABLE `tabel_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_obat`
--
ALTER TABLE `tabel_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
