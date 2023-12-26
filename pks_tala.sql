-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2023 at 04:41 PM
-- Server version: 8.2.0
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pks_tala`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int NOT NULL,
  `judul_berita` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `artikel` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_berita` date NOT NULL,
  `foto` blob NOT NULL,
  `id_operator` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `artikel`, `tanggal_berita`, `foto`, `id_operator`) VALUES
(1, 'Ja\'far,S.Hut : Program Pemenangan PKS 2024 wajib dijalankan sampai ke struktur DPRa di Tanah Laut', 'DPD PKS Kabupaten Tanah Laut menjadi tempat kedua yang dikunjungi oleh pengurus DPW PKS Kalimantan Selatan dalam rangkaian kegiatan silaturahim selama bulan Ramadhan ini, setelah DPD PKS Kota Banjarbaru. Bertempat di Algoritma Resto, Pleihari, Tanah Laut, Jum’at (31/3/2023) kegiatan ini dihadiri langsung oleh Ja’far, S.Hut selaku ketua DPW PKS Kalsel. Dalam arahannya, Ketua DPW PKS yang pernah menjabat sebagai ketua DPRD Kab. Hulu Sungai Selatan ini menuturkan, delapan (8) program pemenangan nasional PKS untuk menyapa Indonesia, di antaranya yaitu mengajak keluarga memilih PKS, merangkul tokoh, memperbanyak silaturahim. Selanjutnya, penguatan struktur yang dibuktikan seratus persen siap menangkan partai, melayani rakyat dengan program pro rakyat, melek digital, menyasar milenial, dan mengawal suara rakyat. “Seluruh kegiatan PKS, harus sesuai dengan 8 program nasional tersebut,” pintanya. Ja’fat, S.Hut juga mengingatkan pengurus DPC untuk meningkatkan ketaqwaan kepada Allah SWT, bekerja dengan ikhlas, berkolaborasi dan bertransformasi serta selalu semangat melaksanakan program pemenangan agar kemenangan itu terwujud. Ahmad_Kasela', '2023-04-04', 0x312e4a5047, 24),
(2, 'Warga Keturunan Tionghoa Bergabung, Kang Haru: Bukti Nyata Persatuan NKRI Bersama Kami', 'KBRN, Bandung - Warga keturunan Tionghoa di Jawa Barat deklarasikan mendukung Capres-Cawapres Anies Baswedan- Muhaimin Iskandar (AMIN) di bilangan Cafe Kota Bandung, Jawa Barat pada Rabu (13/12/2023). \r\n\r\nDeklarasi yang bernama Pemuda Tionghoa Amin (PETA) dikomandoi oleh Reno sebagai captain, dihadiri oleh Ketua Tim Kampanye (TKD) AMIN Jawa Barat, Haru Suhandaru, berserta Henry Husada anggota Tim Nasional (Timnas) AMIN. Pada kesempatan tersebut Ketua TKD AMIN Jawa Barat dinobatkan sebagai Head Coach PETA.\r\n\r\nSebagai Head Coach PETA. Haru Suhandaru mengatakan deklarasi dari pemuda Tionghoa merupakan sebuah perjalanan panjang untuk diceritakan. Tetap dengan proses panjang itu mereka berani mendeklarasi dan akan totalitas memenangkan anies baswedan dan muhaimin Iskandar. \r\n\r\n\"Saya diundang awalnya menjadi TKD dan saya sangat bersyukur temen-temen digerakkan tionghoa untuk bersama-sama dengan Anies. jadi ini juga sebuah perjalanan panjang tadi pa hendrik cerita. Tiba-tiba bikin gerakan seperti ini dan beliau juga sudah mengamati sudah lama dengan Anies memutuskan untuk totalitas menangkan Anies di Jawa Barat. jadi saya sangat bahagia pa Hendri dengan temen-temen siap membantu memenangkan anies dan Indonesia,\"kata Haru Suhandaru kepada wartawan. \r\n\r\nSebagai TKD yang berambisi mendapatkan suara melebihi target, Ia juga menyampaikan usai dukungan ini akan terus dilakukan rekruitmen kembali untuk menambah kekuatan dari warga keturunan Tionghoa. \r\n\r\n\"Insya Allah akan digalang terus dan peta akan terus melakukan rekruitmen sampai menjelang 14 februari. Saya kira ini sebagai inisiatif yang luar biasa karena saya percaya untuk mendapatkan target 80 persen itu butuh banyak dukungan dan sokongan semua pihak,\"ungkapnya.\r\n\r\nHaru juga menegaskan, bahwa sosok capres-cawapres AMIN menerima ras keberagaman dari semua agama. \r\n\r\n\"Satu hal yang disampaikan Anies kita tidak perlu menjawab dengan hoax, kita jawab dengan trek record dan jawab dengan kenyataan karena di DKI juga sangat beragam dan temen-temen semua agama pun terkesan dan kita optimis insya Allah,\" ujarnya. \r\n\r\nSementara itu, anggota Timnas AMIN, Henry Husada menyebutkan bahwa, dukungan pemuda Tionghoa terhadap pasangan AMIN merupakan sebuah bukti bahwa Anies Baswedan tidak intoleransi terhadap ras Tionghoa di Indonesia. \r\n\r\nPemuda Tionghoa amin(PETA) kita akan baju membahu semuanya untuk menjangkau seluruh lapisan seluruh orang Tionghoa supaya yang tadinya tidak terjangkau menjadi terjangkau, seperti kata pepatah tidak kenal maka tak sayang. Jadi saya sampaikan juga kepada captain peta untuk supaya memberitakan terus bahwa jangan sampai selama ini Anies di framing seperti intolerans, sebenarnya tidak semuanya betul-betul menjadi kesetaraan semuanya bagus sekali,\"paparnya.', '2023-12-14', 0x332e6a706567, 24),
(3, 'Perempuan PKS Maluku Gelar Latansa Siaga Pemilu 2024', 'Dalam rangka pemenangan pemilu 2024, Bidang Kepemudaan dan Kepanduan (BKK) akan melaksanakan Pelatihan Perempuan Siaga (LATANSA) dan Apel Siaga Pemenangan 2024, pada 22-24 Desember di Pantai Liang Ambon.\r\n\r\nKegiatan itu melibatkan perempuan PKS se- Maluku, yakni dari Kota Ambon, Seram Bagian Barat (SBB) dan Maluku Tengah. Sekitar 100 lebih peserta turut hadir.\r\n\r\nMenurut Ketua BKK PKS Maluku La Adelin, adanya LATANSA dapat menguatkan silahturahmi dan melatih perempuan PKS untuk kuat dalam fisik dan mental.\r\n\r\n\"Dalam pelatihan dasar ini akan diisi dengan pengetahuan dan pelatihan diantaranya yakni motivasi penguatan diri, olah fisik serta game-game yang akan membuat peserta lebih segar, dan semangat baik raga maupun mentalnya,\" Tuturnya.\r\n\r\nDirinya juga mengatakan Latansa merupakan kegiatan wajib bagi kader perempuan dan dilakukan secara bertahap, karena PKS memperhatikan betul pembinaan secara rohani maupun fisik, apalagi perempuan yang punya peran besar dalam membangun peradaban.\r\n\r\nUntuk itu BKK juga telah melakukan pra Latansa pada Ahad (17/12), yang diisi dengan senam kebangsaan, latihan fisik, pembagian kelompok dan pemeriksaan kesehatan.', '2023-12-21', 0x342e6a7067, 24),
(7, 'Di Konsolidasi PMI, HNW Paparkan Kiprah Perjuangan PKS di Parlemen', 'Wakil Ketua MPR RI dari Fraksi PKS Hidayat Nur Wahid menjelaskan kiprah perjuangan PKS di parlemen untuk umat dan kerakyatan pada acara Konsolidasi PMI untuk Pemilu 2024 yang diadakan secara daring pada Ahad, (24/12/2023).\r\n\r\nHNW, sapaan akrabnya, memaparkan berbagai hal yang diperjuangkannya bersama Fraksi PKS DPR RI untuk memastikan Indonesia sesuai dengan konstitusi dan apa yang dicita-citakan para pendiri bangsa.\r\n\r\nIa mengawali dengan menyebutkan perjuangannya untuk memastikan Indonesia sebagai negara hukum seperti yang tertuang pada konstitusi pasal 1 ayat 3 UUD NRI 1945. Diantaranya dengan menegaskan kepada Mahkamah Konstitusi (MK) untuk konsekuen dan istiqamah menjalankan aturan perundang-undangan misalnya pada isu presiden tiga periode, Pemilu yang diundur, dan lain sebagainya.\r\n\r\n\"Itu sangat dipentingkan agar kehidupan kita sebagai warga negara di manapun berada selalu dalam aturan-aturan hukum yang disepakati dan terukur sehingga tidak terjadi kezaliman, tidak terjadi kejahatan, dan perilaku-perilaku yang manipulatif dan diskriminatif,\" ujarnya.\r\n\r\nSelanjutnya, PKS berjuang agar kedaulatan rakyat yang telah diberikan UUD bisa diwujudkan dan direalisasikan. Oleh karenanya, HNW yang berada di Komisi II DPR RI mendorong dan memastikan agar KPU melaksanakan kewajibannya dengan baik.\r\n\r\n\"Inilah hasil bentuk perjuangan kita (FPKS) agar ketentuan konstitusi, ketentuan UU terkait dengan perlindungan warga negara di manapun mereka berada dan memastikan rakyat kita memiliki kedaulatan,\" ungkap Wakil Ketua Majelis Syura PKS tersebut.\r\n\r\nDalam masa sulit seperti Pandemi Covid 19 pun, PKS tetap memastikan bahwa PMI dan mahasiswa di luar negeri mendapatkan hak-hak perlindungan yang harus dipenuhi pemerintah. Seperti mengadvokasi evakuasi WNI ketika lockdown di beberapa negara dan mengadvokasi bantuan biaya bagi mahasiswa Indonesia yang terkendala biaya karena efek pandemi.\r\n\r\nPKS juga terdepan dalam memperjuangkan cita-cita bangsa untuk menghapuskan penjajahan di atas dunia dengan mengingatkan negara dan masyarakat berjuang sesuai kemampuan untuk membebaskan bangsa Palestina yang hingga saat ini masih terjajah.\r\n\r\n\"Itulah berbagai hal yang kami perjuangkan di DPR dalam rangka melaksanakan kewajiban atau amanah terkait masalah regulasi,\" ungkapnya.', '2023-12-25', 0x322e6a706567, 24),
(10, 'SMI Luar Negeri Diresmikan, Bung Rusdi: Harus Jadi Organisasi Besar dan Berpengaruh', 'Ketua Departemen Jaringan Bidang Ketenagakerjaan (Bidnaker) DPP PKS Muhammad Rusdi menyampaikan kiat-kiat pengorganisasian Pekerja Migran Indonesia (PMI) dalam pembelaan hak kepada pengurus Sahabat Migran Indonesia (SMI) luar negeri yang baru dilantik pada Ahad, (23/12/2024).\r\n\r\nSekretaris Jenderal (Sekjen) Konfederasi Serikat Pekerja Indonesia (KSPI) ini mengawali pemaparannya dengan alasan perlunya berserikat untuk mengadvokasi kepentingan PMI. Rusdi menilai bahwa PMI tidak bisa berharap sepenuhnya pada pemerintah, terlebih jika pemerintahnya tidak serius mengatasi permasalahan PMI seperti saat ini.\r\n\r\n\"Sehingga mau enggak mau, perlu untuk menguatkan jaringan teman-teman PMI sendiri, baik melalui organisasi-organisasi atau paguyuban yang sudah ada, maupun melalui SMI sahabat migran Indonesia,\" ujar Rusdi.\r\n\r\nIa pun menyampaikan harapan besarnya agar SMI bisa menjadi organisasi besar sebagaimana NU dan Muhammadiyah yang tetap eksis dan berkiprah untuk umat dari masa perjuangan hingga sekarang.\r\n\r\n\"Kami berharap besar SMI ini jadi organisasi yang besar dan langgeng meskipun pendirinya sudah meninggal tapi masih dirasakan nyata oleh penerus kita nanti sebagaimana organisasi yang kuat Muhammadiyah dan NU yang lahir dari era perjuangan dan ada sampai saat ini,\" ujar caleg DPR RI dapil Jakarta II tersebut.\r\n\r\nMenurutnya yang menjadi dasar umur panjang kedua organisasi tersebut adalah karena dibangun atas dasar keimanan. Oleh karena itu, SMI ini harus dibangun sebagai organisasi kader yang basisnya adalah pembinaan spiritualitas. Dengan orientasi ilahiyah tersebut, maka Allah yang akan menjaganya.\r\n\r\n\"Yang kedua bagaimana SMI menjadi organisasi yang besar adalah SMI ini harus fokus pada penguatan sosial ekonomi dari pekerja migran,\" lanjutnya.\r\n\r\nSelanjutnya adalah menumbuhkan semangat advokasi kepada aktivis SMI. Advokasi baik secara litigasi melalui pengadilan, maupun non litigasi. Terakhir adalah masuk ke ranah politik melalui perjuangan di parlemen ataupun partai.\r\n\r\n\"Kita tahu bahwasanya sekian banyak masalah akan selesai dengan kebijakan politik, maka semakin menjadi penting SMI yang merupakan sayap resmi PKS di luar negeri harus menjadi organisasi yang besar dan berpengaruh, baik dari sisi kuantitas maupun kualitas,\" ujarnya.', '2023-12-25', 0x312e6a706567, 24),
(11, 'Wakil Ketua Komisi IX: PMI Perlu Perlindungan Komprehensif', 'Jakarta - Wakil Ketua Komisi IX DPR RI dari Fraksi PKS Kurniasih Mufidayati memaparkan kiprah perjuangan pembelaan Pekerja Migran Indonesia (PMI) yang dilakukan di Komisi IX DPR RI pada acara Konsolidasi PMI yang dilakukan secara daring pada Ahad, (24/12/2023).\r\n\r\nKurniasih mengakui bahwa upaya perwujudan perlindungan pekerja maupun PMI masih mengalami beberapa kendala, baik dari peraturan maupun penerapan peraturan yang belum maksimal oleh pemerintah. Namun ia menegaskan bahwa PKS dengan semangat berkhidmat kepada rakyat, akan terus berjuang untuk mewujudkan itu di tengah kondisi pemerintah yang dinilai kurang serius melakukannya.\r\n\r\n\"Oleh karenanya, PKS dalam semangat yang berkhidmat kepada rakyat dan terus menjaga dan memberikan perlindungannya kepada masyarakat di Indonesia maupun teman-teman PMI menjadi tantangan yang sangat luar biasa,\" ujar Kurniasih.\r\n\r\nMenurut Kurniasih, PMI yang sudah menyumbangkan devisa negara sebesar 159 triliun sudah seharusnya mendapatkan perhatian yang serius dari pemerintah. Sudah menjadi hak mereka untuk mendapatkan perlindungan yang komprehensif dan konkret dari pemerintah.\r\n\r\n\"Ini bukan angka yang sedikit. Seharusnya dengan kontribusi melalui devisa ini, perhatian pemerintah kepada PMI lebih besar lagi dan lebih signifikan,\" ungkapnya.\r\n\r\nSementara itu, UU Nomor 18 tahun 2017 tentang perlindungan PMI yang sudah cukup baik dan detail belum maksimal dilaksanakan karena terkendala peraturan pemerintah dan kebijakan turunannya yang belum rampung. Lamanya proses ini menunjukkan ketidak seriusan pemerintah terhadap isu PMI ini.\r\n\r\n\"Karenanya kami (FPKS) terus mendorong dan meminta Kementerian Tenaga Kerja untuk sesegera mungkin regulasi turunan dari UU ini bisa diselesaikan dan diimplementasikan secara maksimal agar perlindungan kepada PMI menjadi komprehensif dan lebih sempurna.\"\r\n\r\nMelihat semangat perubahan yang dibawa pasangan AMIN, Kurniasih berharap pemerintah ke depan dapat lebih serius memberikan perlindungan kepada PMI dan mewujudkan penghargaan dan apresiasi yang lebih besar lagi kepada pahlawan devisa ini.', '2023-12-25', 0x352e6a706567, 24);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_galery` int NOT NULL,
  `gambar` blob NOT NULL,
  `id_kegiatan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_galery`, `gambar`, `id_kegiatan`) VALUES
(12, 0x362e4a5047, 7),
(13, 0x342e4a5047, 8),
(14, 0x352e4a5047, 9),
(15, 0x322e4a5047, 10),
(16, 0x332e4a5047, 11);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int NOT NULL,
  `judul_kegiatan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `id_operator` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `tanggal_kegiatan`, `id_operator`) VALUES
(7, 'Program Pemenangan PKS 2024 wajib dijalankan sampai ke struktur DPR di Tanah Laut', '2023-12-26', 24),
(8, 'Program Pemenangan PKS 2024 wajib dijalankan sampai ke struktur DPR di Tanah Laut', '2023-12-26', 24),
(9, 'Program Pemenangan PKS 2024 wajib dijalankan sampai ke struktur DPR di Tanah Laut', '2023-12-26', 24),
(10, 'Program Pemenangan PKS 2024 wajib dijalankan sampai ke struktur DPR di Tanah Laut', '2023-12-26', 24),
(11, 'Program Pemenangan PKS 2024 wajib dijalankan sampai ke struktur DPR di Tanah Laut', '2023-12-26', 24);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama`, `username`, `password`, `email`, `is_active`) VALUES
(24, 'Operator', 'operator', '4b583376b2767b923c3e1da60d10de59', 'pks@gmail.com', 1),
(25, 'Humas', 'Humas', '94da7343e47802652a24444298012b8c', 'Humas@gmail.com', 1),
(26, 'PKS', 'PKS', '80346f9fcfe9c5fb57ef5f56bf1168e6', 'pks@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pks`
--

CREATE TABLE `pks` (
  `id_pks` int NOT NULL,
  `visi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `misi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sejarah` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_operator` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pks`
--

INSERT INTO `pks` (`id_pks`, `visi`, `misi`, `sejarah`, `alamat`, `id_operator`) VALUES
(1, 'Menjadi Partai Islam rahmatan lil alamin yang kokoh dan terdepan dalam melayani rakyat dan Negara Kesatuan Republik Indonesia.', 'Meningkatkan pertumbuhan jumlah Anggota Partai dan mengokohkan integritas, solidaritas, akseptabilitas, profesionalitas untuk menghadirkan kepemimpinan bangsa yang beriman dan bertakwa serta berakhlak mulia. \r\nMengokohkan soliditas Partai berskala nasional, mandiri, dan terbuka agar mampu menjalankan fungsi edukasi, advokasi, kaderisasi kepemimpinan, serta menerapkan sistem manajemen partai modern untuk meningkatkan sinergi, kinerja, dan kredibilitas. \r\nMeningkatkan kepeloporan Partai dalam pelayanan, pemberdayaan, dan pembelaan terhadap ketahanan keluarga, pemuda, kepentingan masyarakat, dan lingkungan hidup, serta memperkuat kemitraan strategis di berbagai sektor pengabdian untuk meningkatkan kualitas kehidupan yang produktif, inovatif, dan patriotik. \r\nMemenangkan Pemilu 2024 dan meningkatkan kontribusi Partai dalam menggagas dan memperjuangkan kebijakan publik yang berpihak kepada kemaslahatan rakyat, bangsa, dan negara yang bersih dari korupsi, kolusi, dan nepotisme, serta turut berperan dalam pengembangan demokratisasi di kawasan, dan pengembangan kerjasama internasional untuk memperkokoh posisi Indonesia.', 'Partai Keadilan Sejahtera secara resmi dideklarasikan pada 20 April 2002. Bertempat di lapangan silang Monas, Jakarta. Pada tahun yang sama juga PKS disahkan sebagai partai politik yang berbadan hukum oleh Kementerian Kehakiman dan Hak Asasi Manusia pada saat itu. PKS juga lolos dalam verifikasi partai politik yang dilakukan oleh Komisi Pemilihan Umum Republik Indonesia sehingga dapat mengikuti kontestasi Pemilihan Umum 2004.\r\n\r\nPada Pemilu 2004 Partai Keadilan Sejahtera menjadi partai politik yang lolos parliamentary threshold dan menjadi partai yang berhak mengirim para wakilnya menjadi anggota legislatif di DPR/MPR RI. Dalam perhelatan selanjutnya PKS juga selalu lolos sebagai partai politik nasional di DPR RI. Pada masa pemerintahan Presiden Susilo Bambang Yudhoyono, PKS mengirimkan kader-kader terbaiknya untuk mengisi amanah sebagai Menteri dalam Kabinet Indonesia Bersatu I dan II.\r\n\r\nPasca Pemilihan Umum dan Pemilihan Presiden 2014 Partai Keadilan Sejahtera berada diluar pemerintahan Presiden Joko Widodo hingga saat ini. PKS menjadi partai politik yang senantiasa kritis menyuarakan kebijakan yang tidak pro rakyat di parlemen. Sejak keikutsertaan PKS dalam Pemilihan Umum dari 2004 hingga 2019 jumlah pencapaian persentase suara PKS selalu meningkat dengan perolehan diatas 7% . Hanya pada 2014 mengalami penurunan pada angka 6.79%, namun secara jumlah suara mengalami peningkatan dari Pemilu 2009 yang sebelumnya sebanyak 8.206.955 suara menjadi 8.480.204.\r\n\r\nPada Musyawarah Nasional V Partai Keadilan Sejahtera yang digelar pada November 2020 menetapkan kepemimpinan baru PKS periode 2020-2025 dengan Habib Dr. Salim Segaf Al Jufri, MA sebagai Ketua Majelis Syura dan H. Ahmad Syaikhu sebagai Presiden partai. Kepemimpinan PKS yang baru ini membawa semangat baru dengan visi PKS menjadi partai yang rahmatan lil alamin. Beberapa perubahan terjadi mulai dari lambang partai, sampai mars dan hymne partai.', 'Jl.Parit Baru,Pelaihari ', 24);

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` blob NOT NULL,
  `id_operator` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `nama`, `nik`, `jabatan`, `foto`, `id_operator`) VALUES
(1, 'Ikhwan Khairi, A.Md', '6301308712340001', 'Ketua', 0x496b6877616e204b6861726972692e6a706567, 24),
(2, 'Fuad Amin', '1234567890098765', 'Sekretaris', 0x4675616420416d696e2e6a706567, 24),
(3, 'Emi Lutfia Ulfa, Amd.Kom', '123', 'Bendahara', 0x6b6f736f6e672e706e67, 24),
(4, 'Paidi', '123455', 'Kaderisasi', 0x50616964692e6a706567, 24),
(5, 'Siti Munasikin', '53646', 'Ketahanan Keluarga', 0x6b6f736f6e672e706e67, 24),
(6, 'Dadang Imanudin, S.Pd', '6474', 'Kepemudaan', 0x6b6f736f6e672e706e67, 24),
(7, 'Harmono, SH', '0997', 'Hukum', 0x6b6f736f6e672e706e67, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_operator` (`id_operator`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_operator` (`id_operator`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `pks`
--
ALTER TABLE `pks`
  ADD KEY `id_operator` (`id_operator`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`),
  ADD KEY `id_operator` (`id_operator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pks`
--
ALTER TABLE `pks`
  ADD CONSTRAINT `pks_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `struktur`
--
ALTER TABLE `struktur`
  ADD CONSTRAINT `struktur_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
