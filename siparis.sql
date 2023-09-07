-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 03:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siparis`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_sub_ekraf`
--

CREATE TABLE `category_sub_ekraf` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `informasi` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_sub_ekraf`
--

INSERT INTO `category_sub_ekraf` (`id`, `nama`, `slug`, `informasi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kriya', 'kriya', 'Kriya merupakan subsektor berciri khas Indonesia yang sangat dekat dengan industri pariwisata dan menyerap banyak tenaga kerja. Kriya meliputi segala kerajinan yang berbahan kayu, logam, kulit, kaca, keramik, dan tekstil. Subsektor ini maju karena berlimpahnya material bahan baku yang tersedia dan tingginya kreativitas para pelaku industrinya. Potensinya juga masih besar, dan pemasarannya cukup terbuka.  Bukan hanya di Indonesia, namun sampai ke luar negeri. Kriya Indonesia merupakan kebanggaan bangsa, selain kekayaan ragam dan mengandung kearifan lokal, sejak 2015 kriya tercatat sebagai salah satu dari tiga subsektor penyumbang PDB ekonomi kreatif terbesar di Indonesia, berkontribusi lebih dari 14% untuk PDB ekraf (2018-2019). Meski sempat stagnan di tahun 2017 dan terdampak pandemi sehingga ditundanya 70% ekspor kriya Indonesia pada tahun 2020, namun pandemi tidak menyurutkan pelaku ekraf, termasuk pelaku kriya untuk terus mengembangkan kapasitasnya dalam berkreasi.  Berdasarkan riset kemenparekraf tahun 2020, selama pandemi, 75% pelaku ekraf termasuk pekriya memilih untuk menambah pengetahuan dari ilmu baru. Dengan keterbukaan akses yang disponsori era digital, bukan tidak mungkin kriya Indonesia akan semakin maju, dan tetap kokoh menjadi salah satu motor penggerak kebangkitan ekonomi kreatif di Indonesia hari ini dan di masa yang akan datang.  Lembaga pemerintah mempunyai tanggung jawab untuk mengelola sub sektor ini dengan menyediakan berbagai fasilitasi yang relevan, salah satunya dengan melaksanakan kegiatan pameran dalam dan luar daerah secara berkala.', '1.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(2, 'Seni Pertunjukan', 'seni-pertunjukan', 'Cabang kesenian yang melibatkan perancang, pekerja teknis dan penampil, yang mengolah, mewujudkan dan menyampaikan suatu gagasan kepada penonton, baik dalam bentuk lisan, musik, tata rupa, ekspresi, dan gerakan tubuh, atau tarian yang terjadi secara langsung di dalam ruang dan waktu yang sama, di sini dan kini.   Seni pertunjukan merupakan karya seni yang menghadirkan sebuah tontonan kepada masyarakat luas dengan melibatkan aksi seniman individu ataupun berkelompok sesuai konsep yang dibawakan. Adapun dalam menghadirkan suatu seni pertunjukan harus melibatkan beberapa unsur seperti ruang, waktu, gerak tubuh seniman dan juga hubungan seniman dengan penonton.   Seni pertunjukan juga merupakan karya seni yang kompleks karena didalamnya bukan hanya melibatkan satu tipe komponen namun juga mengaitkan berbagai macam unsur seni.', '2.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(3, 'Desain Produk', 'desain-produk', 'Tren sub sektor ini sangat positif. Dengan populasi penduduk yang didominasi oleh usia produktif, potensi terbentuknya interaksi antara pelaku industri dan pasar pun sangat besar. Ditambah lagi masyarakat dan pasar sekarang memiliki apresiasi terhadap produk yang berkualitas.  Sub sektor desain produk juga didukung oleh para pelaku industri yang memiliki craftmanshift andal. Para desainer produk mampu menggali dan mengangkat kearifan lokal, kekayaan budaya Indonesia yang beraneka ragam, dalam setiap karya-karyanya.  Beberapa pendekatan yang bisa dilakukan untuk sub sektor ini adalah dengan mengelola industri dari hulu ke hilir, bekerja sama dengan berbagai asosiasi untuk meningkatkan penggunaan desain produk lokal Indonesia, dan mendirikan pusat desain sebagai hub lintas sub sektor.', '3.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(4, 'Seni Rupa', 'seni-rupa', 'Seni rupa diartikan sebagai penciptaan karya dan saling berbagi pengetahuan yang merupakan manifestasi intelektual dan keahlian kreatif, yang mendorong terjadinya perkembangan budaya dan perkembangan industri dengan nilai ekonomi untuk keberlanjutan ekosistemnya  Industri seni rupa dunia sedang memusatkan perhatiannya ke Asia Tenggara. Indonesia pun tak luput dari perhatian mereka. Di mana Indonesia mempunyai potensi terbesar baik secara kualitas, kuantitas, pelaku kreatif, produktivitas, dan potensi pasar. Seni rupa Indonesia juga sudah memiliki jaringan yang sangat kuat baik dalam negeri ataupun di luar negeri.  Berbagai festival seni rupa diadakan secara rutin, bahkan yang reputasinya diakui secara internasional. Hingga kini sudah lebih dari 160 pelaku kreatif seni rupa Indonesia terlibat dalam forum dan acara internasional. Mewujudkan Indonesia menjadi pusat seni rupa Asia Tenggara. ', '4.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(5, 'Kuliner', 'kuliner', 'Kuliner diartikan sebagai kegiatan yang meliputi persiapan, pengolahan, penyajian produk makanan dan minuman yang menjadi unsur kreativitas, estetika, tradisi, dan atau kearifan lokal sebagai elemen terpenting dalam meningkatkan cita rasa dan nilai produk tersebut, untuk menarik daya beli dan memberikan pengalaman bagi konsumen.   Sub sektor kuliner memberikan kontribusi yang cukup besar, yaitu 30% dari total pendapatan sektor pariwisata dan ekonomi kreatif. Industri kuliner mempunyai potensi yang sangat kuat untuk berkembang, oleh karena itu pemerintah akan mendukung sub sektor ini supaya lebih maju.  Beberapa pelaku industri kuliner melihat ada beberapa hal yang harus diperbaiki dan dikelola secara lebih serius. Salah satu di antaranya adalah perlunya akses perizinan usaha melalui satu pintu sehingga lebih mudah dan efektif. ', '5.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(6, 'Fotografi', 'fotografi', 'Fotografi adalah sebuah industri yang mendorong penggunaan kreativitas individu dalam memproduksi citra dari suatu objek foto dengan menggunakan perangkat fotografi, termasuk di dalamnya media perekam cahaya, media penyimpanan berkas, serta media yang menampilkan informasi untuk menciptakan kesejahteraan dan juga kesempatan kerja.  Perkembangan sub sektor fotografi yang cukup pesat tak lepas dari banyaknya generasi muda yang sangat antusias belajar fotografi. Tak sedikit pula dari mereka yang kemudian memutuskan terjun di bidang ini sebagai profesional. Masyarakat pun memberikan apresiasi yang positif terhadap dunia fotografi.', '6.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(7, 'Musik', 'musik', 'Segala jenis usaha dan kegiatan kreatif yang berkaitan dengan pendidikan, kreasi atau komposisi, rekaman, promosi, distribusi, penjualan, dan pertunjukan karya seni musik.  Musik sebagai salah satu sub sektor yang akan dikelola secara lebih maksimal. Meskipun sub sektor musik punya potensi yang sangat besar, beberapa pelaku melihat permasalahan yang harus segera diselesaikan.Salah satu tantangan terbesar pembajakan yang masih marak sehingga menyebabkan perkembangan industri musik di Indonesia terhambat. Pembajakan tentunya menyebabkan turunnya kualitas dan kuantitas produksi, menurunnya apresiasi masyarakat terhadap musik, dan turunnya minat investasi di bidang ini', '7.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(8, 'Arsitektur', 'arsitektur', 'Peran arsitektur di Indonesia sangat penting. Dalam hal budaya, keanekaragaman arsitektur lokal dan daerah menunjukkan karakter Bangsa Indonesia yang mempunyai beraneka ragam budaya. Sedangkan dalam hal pembangunan, arsitektur juga berperan dalam merancang dasar pembangunan sebuah kota. Karena potensinya yang sangat besar.  Saat ini, sub sektor arsitektur menghadapi berbagai macam tantangan. Salah satu di antaranya adalah kekurangan arsitek di Indonesia. Menurut data anggota Ikatan Arsitek Indonesia (IAI), jumlah arsitek di Indonesia hanya 15 ribu orang, sangat kurang jika dibandingkan dengan 250 juta penduduk Indonesia. Sedangkan tantangan lain adalah para pengembang besar lebih banyak menggunakan jasa arsitek asing daripada arsitek lokal.  Meski begitu, pembangunan sarana dan prasarana di Indonesia masih sangat membutuhkan peran arsitek. Arsitektur menjadi bagian penting dari pengembangan industri nasional yang sedang bergeser dari raw- based economy menjadi knowledge-based economy. Para arsitek pun saat ini mulai memunculkan inovasi produk arsitektur yang menyiratkan karakter budaya dan kearifan lokal.', '8.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(9, 'Desain Interior', 'desain-interior', 'Masyarakat mulai mengapresiasi estetika ruangan secara lebih baik. Penggunaan jasa desainer interior untuk merancang estetika interior hunian, hotel, dan perkantoran pun semakin meningkat. Sudah jelas bahwa potensi ekonomi dari industri desain interior sangat menjanjikan.  Itu bisa menjadi momentum positif bagi sub sektor desain interior yang tidak boleh disia-siakan. Munculnya berbagai sekolah, konsultan, perusahaan, dan asosiasi desain interior menunjukkan adanya semangat dari sub sektor ini untuk berkembang di pasar nasional bahkan internasional. Selain itu, desain interior dengan karakter otentik Indonesia, tentu bisa dikembangkan untuk menunjukkan identitas bangsa.  Ada beberapa hal yang masih perlu digarap dalam sub sektor ini, antara lain adalah proteksi terhadap para pelaku kreatif desain interior di pasar domestik, adanya sertifikasi untuk menciptakan standar, dan perlindungan hak cipta. Selain itu diperlukan promosi desain interior melalui berbagai program, salah satunya dengan mengadakan event atau pameran secara rutin. Sub sektor desain interior dengan segala potensinya tentubisa bersaing secara domestik ataupun global.', '9.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(10, 'Fashion', 'fashion', 'Fesyen atau (bahasa inggris : fashion) adalah gaya hidup dalam berpenampilan yang mencerminkan identitas diri atau kelompok  Tren fashion senantiasa berubah dengan cepat. Dalam hitungan bulan, selalu muncul mode fashion baru. Ini tak lepas dari produktivitas para desainer fashion lokal yang inovatif merancang baju-baju model baru, dan munculnya generasi muda kreatif yang antusias dengan industri fashion ini. Masyarakat sebagai pasar pun juga semakin cerdas dan berselera tinggi dalam memilih fashion.  Di sisi lain, sub sektor ini harus menghadapi banyak tantangan. Fashion lokal masih menjadi anak tiri, pasar memprioritaskan ruangnya untuk produk-produk impor, sehingga fashion lokal kurang mendapatkan tempat. Sedangkan tantangan lain yang tak kalah penting adalah sinergi industri hulu ke hilir, mulai dari pabrik tekstil/garmen, perancang busana, sampai ke urusan pasar. Dengan optimisme bahwa industri fashion bisa bersaing di Masyarakat Ekonomi ASEAN (MEA).', '10.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(11, 'Animasi & Film', 'animasi-&-film', 'Karya seni gambar bergerak yang memuat berbagai ide atau gagasan dalam bentuk audiovisual, serta dalam proses pembuatannya menggunakan kaida-kaidah sinematografi  Perfilman Indonesia saat ini sedang mengalami perkembangan yang positif. Para rumah produksi mulai berlomba-lomba menggenjot produktivitasnya menggarap film yang berkualitas dari segi cerita sekaligus menguntungkan secara komersial. Ini tak lepas dari potensi penonton Indonesia yang sangat besar dan bisa mengapresiasi film produksi lokal secara positif.   Sub sektor film, animasi, dan video memiliki potensi yang bisa dikembangkan menjadi lebih baik, walaupun masih harus menghadapi berbagai tantangan. Beberapa di antaranya adalah minimnya SDM yang benar-benar mempunyai keahlian di bidang film, sehingga pilihan untuk memperoleh tim dari sutradara, penulis skenario, kru, dan pemain film, sangat terbatas. Permasalahan lain yang tak kalah penting adalah layar bioskop yang terbatas dan tidak merata penyebarannya, serta belum adanya proteksi terhadap hak karya cipta sehingga aksi pembajakan masih marak.', '11.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(12, 'Desain Komunikasi', 'desain-komunikasi', 'Proses desain yang tujuan utamanya adalah menyampiakan gagasan atau ide yang menggunakan bantuan visual yang harus mampu menciptakan lingkungan visual, pemahaman mengenai material, ruang, dan konsep digital dengan menggunakan pendekatan multidisiplin.   Desain Komunikasi Visual (DKV) punya peran yang sangat penting dalam mendukung pertumbuhan bisnis pengusaha swasta, pemilik merek, dan bahkan kelancaran program-program pemerintah. Potensi pasar domestik sangat menjanjikan, terutama dengan semakin banyaknya praktisi DKV lokal yang lebih memahami situasi pasar, pengetahuan, dan nilai-nilai lokal.  Potensi ini masih harus ditingkatkan, seperti kesadaran pasar tentang pentingnya desain. Hasil karya desainer grafis sering dinilai dengan harga yang kurang layak. Padahal para desainer grafis membutuhkan proses yang cukup panjang dalam bekerja, dari memikirkan filosofi, mengolah desain sehingga mempunyai makna, dan menghasilkan produk jadi. Ajakan kepada para pengusaha untuk menggunakan jasa desainer grafis lokal pun perlu lebih lantang diserukan.  Membangun DKV menjadi sub sektor yang unggul dan mampu bersaing baik di dalam negeri dan internasional adalah dengan mempromosikan serta memublikasikan hasil karya sub sektor ini, membuat regulasi agar para pekerja desain lokal mendapatkan prioritas dalam menggarap proyek perusahaan domestik daripada para desainer luar, terutama setelah kesepakatan Masyarakat Ekonomi ASEAN (MEA) diberlakukan.', '12.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(13, 'Televisi & Radio', 'televisi-&-radio', 'Meskipun tidak semutakhir ponsel dan gawai lainnya, televisi dan radio masih mempunyai peran yang sangat besar dalam penyebaran informasi. Saat ini, kepemilikan televisi dan radio sudah merata, sehingga setiap lapisan masyarakat bisa mengakses teknologi ini. Pertumbuhan jumlah stasiun televisi dan stasiun radio pun masih terus bertambah.  Namun, pertumbuhan dan potensi tersebut belum disertai dengan tayangan televisi yang berkualitas. Mayoritas program televisi, karena mengejar rating tinggi, tak lagi memperhatikan kualitas program yang ditayangkan. Industri ini kekurangan rumah produksi dan SDM yang bisa merancang program-program berkualitas.  Sebagai wakil dari pemerintah untuk menangani industri kreatif, diharapkan sub sektor televisi dan radio dapat terus menghasilkan mulai dari program-program acara yang berkualitas, mendukung pembentukan SDM yang berkualitas, dan segala hal yang berkaitan dengan kekreativitasan dalam sub sektor ini.', '13.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(14, 'Periklanan', 'Periklanan', 'Sampai saat ini, iklan masih menjadi medium paling efisien untuk memublikasikan produk dan jasa. Potensi industri ini pun tak perlu diragukan lagi. Pertumbuhan belanja iklan nasional bisa mencapai 5-7% setiap tahunnya. Ditambah lagi, iklan mempunyai soft power berperan dalam membentuk pola konsumsi, pola berpikir, dan pola hidup masyarakat. Oleh karena itu sangat penting apabila sub sektor ini dikuasai oleh SDM lokal.', '14.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(15, 'Penerbitan', 'penerbitan', 'Pasar industri penerbitan memang tidak sebesar sub sektor yang lain, namun industri ini punya potensi yang tak kalah kuat. Banyak penerbitan besar dan kecil yang masih bermunculan meramaikan industri ini. Ditambah lagi perkembangan teknologi yang memungkinkan buku diterbitkan dalam bentuk digital. Penerbitan turut berperan aktif dalam membangun kekuatan intelektual bangsa. Munculnya sastrawan, penulis, peneliti, dan para cendekiawan, tak lepas dari peran industri ini. Walaupun saat ini profesi penulis masih dianggap kurang menjanjikan, banyak para penulis muda yang sangat antusias, silih berganti menerbitkan karya-karyanya. ', '15.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(16, 'Aplikasi', 'aplikasi', 'Aplikasi secara umum adalah suatu subkelas dari suatu perangkat lunak komputer yang memanfaatkan kemampuan komputer secara langsung untuk melakukan suatu tugas yang diinginkan pengguna. Kegiatan tersebut menyediakan jasa pembuatan software (service) sesuai permintaan klien dimana produknya dikelola oleh tim developer sendiri.   Peran aplikasi yang terus meningkat sangat dirasakan manfaatnya oleh masyarakat sebagai pengguna. Masyarakat kini sudah fasih menggunakan berbagai jenis aplikasi digital seperti peta atau navigasi, media sosial, berita, bisnis, musik, penerjemah, permainan dan lain sebagainya. Berbagai aplikasi tersebut didesain supaya mempermudah pengguna dalam melakukan aktivitas sehari-hari. Maka tak heran jika potensi sub sektor aplikasi dan sangat besar.  Peluang yang besar dari subsektor ini menuntut kemampuan sumber daya manusia yang dapat beradaptasi dan terus berinovasi menjawab tantangan kebutuhan mansyarakat atau pengguna. Diharapkan agar ekosistem starup berbasis aplikasi terus tumbuh di Sulawesi Tengah', '16.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49'),
(17, 'Pengembangan Game', 'pengembangan-game', 'ndustri dan ekosistem permainan (game) lokal memiliki potensi besar untuk berkontribusi dalam ekonomi kreatif Tanah Air. Kontribusi game untuk ekraf Indonesia pada 2017 adalah 1,93 persen PDB, dengan 44.733 jumlah tenaga kerja di sub sektor ini. Di tahun yang sama ada 51 pengembang game lokal baru yang dari tahun ke tahun bertambah jumlahnya.  Indonesia merupakan salah satu negara dengan pangsa pasar game yang peningkatannya cenderung signifikan. Banyak peluang yang bisa didalami, baik sebagai pembuat maupun pemain profesional. Mengingat demografi Indonesia semakin banyak segmen produktif dan jumlah middle income class yang tinggi.  Diharapkan muncul lebih banyak inkubator pengembang permainan, memasukkan unsur-unsur permainan ke dalam dunia pendidikan, memproteksi para pengembang lokal, dan membantu mereka dalam mempromosikan karya-karyanya.', '17.jpg', '2023-08-11 11:26:49', '2023-08-11 11:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi_kreatif`
--

CREATE TABLE `ekonomi_kreatif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) NOT NULL,
  `no_whatsapp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `nama_usaha` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `lokasi_usaha` varchar(191) NOT NULL,
  `jenis_usaha` varchar(191) NOT NULL,
  `tahun_berdiri` date NOT NULL,
  `jumlah_karyawan` int(11) NOT NULL,
  `modal` int(11) NOT NULL,
  `omset` int(11) NOT NULL,
  `marketplace` varchar(191) NOT NULL,
  `website` varchar(191) NOT NULL,
  `permasalahan` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `id_category_sub_ekraf` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ekonomi_kreatif`
--

INSERT INTO `ekonomi_kreatif` (`id`, `nama`, `no_whatsapp`, `email`, `jenis_kelamin`, `nama_usaha`, `alamat`, `lokasi_usaha`, `jenis_usaha`, `tahun_berdiri`, `jumlah_karyawan`, `modal`, `omset`, `marketplace`, `website`, `permasalahan`, `image`, `id_category_sub_ekraf`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dipo', '082193734482', 'dipocantik123@gmail.com', 'wanita', 'Teman Gagal', 'Jl Tombolututu', 'Jl Kartini', 'Startup', '2023-08-07', 5, 50000, 500000, 'Instagram', '-', '-', '1692011160.jpeg', 16, 'Pending', '2023-08-14 03:06:00', '2023-09-04 18:35:12'),
(2, 'Fenita', '082193734482', 'fenitacanti123@gmail.com', 'wanita', 'Ranjana Coffe', 'Jl Gelatik', 'Jl Sis Aljufri', 'Cafe', '2023-08-07', 3, 2000000, 200000, 'Offline', '-', '-', '1692012081.jpeg', 5, 'Active', '2023-08-14 03:21:21', '2023-08-14 03:35:34'),
(3, 'Irfan', '082193734482', 'mr.rdz07@gmail.com', 'pria', 'Sempol Ayam Andalan', 'Jl Tombolututu', 'Jl Tombolututu', 'Warung', '2023-08-13', 1, 500000, 1000000, 'Offline', '-', '-', '1692012696.jpeg', 5, 'Denied', '2023-08-14 03:31:36', '2023-08-14 19:13:13'),
(4, 'Fenita', '082193734482', 'mr.rdz07@gmail.com', 'pria', 'Teman Gagal', '123', 'Jl Sis Aljufri', 'asd', '2023-08-16', 5, 5, 5, '5', '5', '-', '1692338349.jpeg', 16, 'Active', '2023-08-17 21:59:09', '2023-08-17 21:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `event_wisata`
--

CREATE TABLE `event_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_event` varchar(191) NOT NULL,
  `lokasi_event` varchar(191) NOT NULL,
  `tanggal_event` date NOT NULL,
  `deskripsi` varchar(191) NOT NULL,
  `informasi` varchar(500) NOT NULL,
  `image` varchar(191) NOT NULL,
  `embed_gmaps` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_wisata`
--

INSERT INTO `event_wisata` (`id`, `nama_event`, `lokasi_event`, `tanggal_event`, `deskripsi`, `informasi`, `image`, `embed_gmaps`, `created_at`, `updated_at`) VALUES
(1, 'FESTIVAL TELUK TOMINI', 'Kabupaten Parigi Moutong', '2023-08-04', 'Festival Teluk Tomini merupakan agenda rutin Pariwisata Kabupaten Parigi Moutong setiap tahun, serta tindak lanjut pelaksanaan Sail Tomini Tahun 2015. Festival ini diharapkan dapat memupuk ra', 'Festival Teluk Tomini merupakan agenda rutin Pariwisata Kabupaten Parigi Moutong setiap tahun, serta tindak lanjut pelaksanaan Sail Tomini Tahun 2015. Festival ini diharapkan dapat memupuk rasa kebersamaan, rasa kepemilikan dari keragaman etnis dalam wilayah Kabupaten  Parigi Moutong dan di Provinsi Sulawesi Tengah.', '1691949037.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15954.543403275586!2d120.74347223393951!3d-1.394976125982607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8ee4fa9d363305%3A0x4030bfbcaf78190!2sPoso%2C%20Gebang%20Rejo%2C%20Kec.%20Poso%20Kota%2C%2', '2023-08-13 09:50:37', '2023-08-13 17:55:12'),
(2, 'FESTIVAL KEPULAUAN TOGEAN', 'Kabupaten Tojo Unauna', '2023-08-05', '\"FESTIVAL KEPULAUAN TOGEAN\" merupakan suatu kegiatan event promosi sebagai bentuk pengembangan pemasaran pariwisata Kabupaten Tojo UnaUna yang dikemas dalam bentuk kegiatan seni budaya.', 'Festival Togean 2023 dilaksanakan selama 4 hari dengan tema  \"life on coral triangle in the  world\" yang mengangkat kearifan lokal masyarakat yang tinggal dan hidup di wilayah Kepulauan Togean.', '1691949213.jpeg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021275.2595046585!2d120.98294653413778!3d-0.8717863119992827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d88a780d3568237%3A0x3030bfbcaf77140!2sKabupaten%20Tojo%20Una-Una%2C%20Sulawesi%20Tengah!5e0!3m2!1sid!2sid!4v1691913447257!5m2!1sid!2sid', '2023-08-13 09:53:00', '2023-08-13 09:53:34'),
(5, 'Festival Danau Poso', 'Poso', '2023-10-10', 'Festival Danau Poso adalah event yang bertujuan untuk mempererat Tali Silaturahmi antar masyarakat di Kabupaten Poso pasca Konflik dan terus berkembang menjadi sebuah event daerah yang tetap', 'Event ini diharapkan dapat meningkatkan kunjungan wisatawan di Kabupaten Poso yang berdampak positif dengan tumbuhnya perputaran roda ekonomi dimasyarakat Kabupaten Poso.', '1691978014.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15954.543403275586!2d120.74347223393951!3d-1.394976125982607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8ee4fa9d363305%3A0x4030bfbcaf78190!2sPoso%2C%20Gebang%20Rejo%2C%20Kec.%20Poso%20Kota%2C%20Kabupaten%20Poso%2C%20Sulawesi%20Tengah!5e0!3m2!1sid!2sid!4v1691903405906!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-08-13 17:53:34', '2023-08-14 19:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_07_124114_add_role_as_to_users_table', 1),
(6, '2023_08_07_153755_create_ekonomi_kreatif_table', 1),
(7, '2023_08_09_080032_create_category_sub_ekraf_table', 1),
(8, '2023_08_10_203620_create_paket_wisata_table', 1),
(9, '2023_08_11_192228_create_event_wisata_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket_wisata` varchar(191) NOT NULL,
  `lokasi_tempat_wisata` varchar(191) NOT NULL,
  `nama_tempat_wisata` varchar(191) NOT NULL,
  `deskripsi_singkat` varchar(500) NOT NULL,
  `informasi` text NOT NULL,
  `kontak` varchar(13) NOT NULL,
  `image` varchar(191) NOT NULL,
  `embed_gmaps` varchar(500) NOT NULL,
  `tour` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id`, `nama_paket_wisata`, `lokasi_tempat_wisata`, `nama_tempat_wisata`, `deskripsi_singkat`, `informasi`, `kontak`, `image`, `embed_gmaps`, `tour`, `created_at`, `updated_at`) VALUES
(1, 'WISATA BUDAYA MEGALITH PURBAKALA', 'Dodolo, Sulawesi Tengah', 'Taman Nasional Lore Lindu', 'Paket wisata ini cocok untuk anda yang ingin berpetualangan dalam rangka mencari bukti peninggalan sejarah dan prasejarah di Sulawesi Tengah.', 'Dengan total 7 hari  6 malam, paket ini termasuk transfer bandara, transportasi lokal, akomodasi, makan, air mineral, coffe-break, tiket masuk taman nasional, tiket museum, bamboo pertunjukan orkestra dan biaya pemandu.', '081347511903', '1691948735.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.496399377849!2d120.18636717421765!3d-1.4749449358598363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8e82e95806f055%3A0xfff2d0319faff404!2sTaman%20Nasional%20Lore%20Lindu!5e0!3m2!1sid!2sid!4v1691900187185!5m2!1sid!2sid', 'https://drive.google.com/file/d/14Kdij2cvMxwma1rkJVt4YPYzzLRGvX1Z/view', '2023-08-13 09:45:35', '2023-08-13 09:45:35'),
(2, 'WONDERFULL SOMBORI', 'Desa Mbokita, Kecamatan Sombori, Kabupaten Morowali, Provinsi Sulawesi Tengah.', 'Pulau Sombori', 'Paket wisata ini menawarkan pengunjung untuk mengeksplor wisata yang menari, dari pulau-pulau hingga goa.', 'Paket wisata Wonderfull Sombori menawarkan perjalanan wisata yang sangat menarik, pengunjung akan mengunjungi pulau Sapabunginang, Goa Allo, Air Kiri, Goa Berlian, Goa Mbokita, Rumah Nene, Pulau Mbokita, Pulau Khayangan, Pulau Khayangan 1&2, Pulau Koko, dan Priyanka Resort.', '082193734482', '1691948912.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7966.539160511902!2d122.42400269784353!3d-3.2832153380506126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9979ea562a6fbb%3A0xe343e4bc97e746a9!2sPulau%20Sombori!5e0!3m2!1sid!2sid!4v1691901659354!5m2!1sid!2sid', 'https://drive.google.com/file/d/14Kdij2cvMxwma1rkJVt4YPYzzLRGvX1Z/view', '2023-08-13 09:48:32', '2023-08-13 09:48:32'),
(3, 'JOURNEY CITY TOUR CENTRAL SULAWESI', 'Palu, Donggala, dan Sigi', 'Puncak Salena, Pantai Tanjung Karang, Air Terjun Wera', 'Paket wisata ini menawarkan perjalanan di Kota Palu, kabupaten Donggala dan Sigi, mulai dari puncak, pantai, air terjun, dan masih banyak lagi.', 'Paket wisata Journey City Tour ini terdiri atas transportasi perjalanan, makan 3kali sehari, kamar, tiket masuk wisata, tour guide, serta lengkap dengan dokumentasi selama perjalanan wisata 3 hari 3 malam.', '08114545954', '1691979772.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1553449058656!2d119.84784187507107!3d-1.0445176989454374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bf58dde866e39%3A0xb6d8f88b0346447f!2sTaman%20Wisata%20Alam%20Wera!5e0!3m2!1sen!2sid!4v1691980065329!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'https://drive.google.com/file/d/1NCS8Tl_Y0zz_Z2kSfWkdFUANPI-IE5Md/view', '2023-08-13 18:22:52', '2023-08-14 19:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(2, 'Amar', 'admin1@gmail.com', NULL, '$2y$10$G0d/WdqJw4zc9ERkUipNwenidi2bii92sdZddtzs.eFK7jcHNaEcW', NULL, '2023-08-11 11:27:08', '2023-08-11 11:27:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_sub_ekraf`
--
ALTER TABLE `category_sub_ekraf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `ekonomi_kreatif`
--
ALTER TABLE `ekonomi_kreatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_wisata`
--
ALTER TABLE `event_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_sub_ekraf`
--
ALTER TABLE `category_sub_ekraf`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ekonomi_kreatif`
--
ALTER TABLE `ekonomi_kreatif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_wisata`
--
ALTER TABLE `event_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
