-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2026 at 08:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pattallassang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '*kknunitama11gacor#');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggaran`
--

CREATE TABLE `tabel_anggaran` (
  `id` int NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `pagu_anggaran` bigint NOT NULL,
  `realisasi` bigint DEFAULT '0',
  `tahun` year NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_anggaran`
--

INSERT INTO `tabel_anggaran` (`id`, `bidang`, `pagu_anggaran`, `realisasi`, `tahun`) VALUES
(1, 'Penyelenggaraan Pemerintahan', 500000000, 300000000, 2026),
(2, 'Pelaksanaan Pembangunan', 750000000, 400000000, 2026),
(3, 'Pembinaan Kemasyarakatan', 200000000, 150000000, 2026),
(4, 'Pemberdayaan Masyarakat', 300000000, 100000000, 2026);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_aparat`
--

CREATE TABLE `tabel_aparat` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `urutan` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_aparat`
--

INSERT INTO `tabel_aparat` (`id`, `nama`, `nip`, `jabatan`, `foto`, `urutan`) VALUES
(1, 'ANDI IRWAN AMIER, S.E', '19761220 200701 1 007', 'KEPALA DESA', '69aad4dc06d18WhatsApp Image 2026-03-04 at 22.25.11.jpeg', 0),
(2, 'ABDUL KADIR, S.Pd. I', '-', 'SEKERTARIS DESA', '69aad4e92d938WhatsApp Image 2026-03-04 at 22.25.09.jpeg', 0),
(3, 'ASRAWATI, S.Pd', '-', 'KAUR UMUM & TU', '69aad63c34ff0WhatsApp Image 2026-03-04 at 22.25.15.jpeg', 0),
(4, 'MUAMMAR, S.Pd.I', '-', 'KAUR KEUANGAN', '69aad4fccdc34WhatsApp Image 2026-03-04 at 22.25.10.jpeg', 0),
(5, 'PARADILLA NURUL UTAMI,S. Gz', '-', 'KAUR PERENCANAAN', '69aad65e9e369WhatsApp Image 2026-03-04 at 22.33.55.jpeg', 0),
(6, 'APRIL', '-', 'KASI KESEJAHTERAAN', '69aad51d0ece7WhatsApp Image 2026-03-04 at 22.25.10 (1).jpeg', 0),
(7, 'JUARNI', '-', 'KASI PELAYANAN', '69aad6294593dWhatsApp Image 2026-03-04 at 22.25.16.jpeg', 0),
(8, 'NORMAH N', '-', 'KASI PEMERINTAHAN', '69aad56876661WhatsApp Image 2026-03-04 at 22.25.14.jpeg', 0),
(9, 'APRIL', '-', 'PLT KADUS PURORO', '69aad6feeaabaWhatsApp Image 2026-03-04 at 22.25.10 (1).jpeg', 9),
(10, 'SYAFIR HIDAYATULLAH', '-', 'KADUS SARROANGIN', '69aad67584a76WhatsApp Image 2026-03-04 at 22.25.12 (1).jpeg', 0),
(11, 'HAMSIR, S.Ak', '-', 'KADUS KALUMPANG', '69aad686a136aWhatsApp Image 2026-03-04 at 22.25.12.jpeg', 0),
(12, 'ABD KAHAR FATBAR', '-', 'KADUS MASARANG', '69aad69c27affWhatsApp Image 2026-03-04 at 23.11.08.jpeg', 0),
(17, 'JUARNI', '-', 'PLT KADUS KAMPUNG PARANG', '69aad72110e29WhatsApp Image 2026-03-04 at 22.25.16.jpeg', 0),
(18, 'ANDI AHMAR, S.Pd', '-', 'KADUS BORONGKAPALA', '69aad6b42edbeWhatsApp Image 2026-03-04 at 22.25.11 (1).jpeg', 0),
(19, 'ASDAR', '-', 'KADUS NIPPON', '69aad6c4e20c3WhatsApp Image 2026-03-04 at 22.25.17.jpeg', 0),
(20, 'IDIL AKBAR', '-', 'KADUS TARUTTU', '69aad6d47ee67WhatsApp Image 2026-03-04 at 22.25.13.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_berita`
--

CREATE TABLE `tabel_berita` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_berita`
--

INSERT INTO `tabel_berita` (`id`, `judul`, `kategori`, `isi`, `gambar`, `tanggal`) VALUES
(2, 'EVALUASI PROGRAM KERJA KKNT GEL 115 UNHAS DI PATTALLASSANG', 'Kegiatan Desa', 'Senin, 02 Februari 2026 - Pemerintah Desa Pattallassang melaksanakan kegiatan Evaluasi Program Kerja Kuliah Kerja Nyata Tematik (KKNT) Gelombang 115 Universitas Hasanuddin yang berlangsung di Aula Kantor Desa Pattallassang, baru-baru ini. Kegiatan ini menjadi bagian penting dalam rangka pelaporan dan refleksi atas seluruh program kerja yang telah dilaksanakan oleh mahasiswa KKNT selama berada di tengah masyarakat.\r\n\r\nPertemuan evaluasi ini dihadiri oleh perangkat desa, perwakilan mahasiswa KKNT Gelombang 115 Universitas Hasanuddin, serta pihak-pihak terkait lainnya. Suasana kegiatan berlangsung santai namun tetap fokus, dengan pembahasan yang mengulas capaian program, kendala di lapangan, serta dampak kegiatan terhadap masyarakat desa.\r\n\r\nDalam kesempatan tersebut, mahasiswa KKNT memaparkan satu per satu program kerja yang telah mereka jalankan, laporan disampaikan secara terbuka sebagai bentuk pertanggungjawaban sekaligus sarana untuk menerima masukan dari pemerintah desa.\r\n\r\nPemerintah Desa Pattallassang menyampaikan apresiasi atas kontribusi dan dedikasi mahasiswa KKNT Gelombang 115 Universitas Hasanuddin yang telah aktif terlibat dalam berbagai kegiatan desa. Program-program yang dijalankan dinilai memberikan manfaat nyata serta membantu mendukung pelayanan dan aktivitas pemerintahan desa.\r\n\r\nSelain sebagai ajang pelaporan, kegiatan evaluasi ini juga menjadi ruang diskusi bersama untuk melihat peluang pengembangan program di masa mendatang. Masukan dan saran yang disampaikan diharapkan dapat menjadi bahan perbaikan, baik bagi pihak desa maupun bagi pelaksanaan KKNT selanjutnya.\r\n\r\nMelalui kegiatan ini, Pemerintah Desa Pattallassang berharap sinergi antara perguruan tinggi dan pemerintah desa dapat terus terjalin dengan baik. Informasi terkait kegiatan KKNT ini juga diharapkan dapat diketahui oleh masyarakat luas sebagai bentuk keterbukaan informasi publik serta dokumentasi kegiatan pemerintahan desa.\r\n\r\nDengan adanya evaluasi program kerja ini, seluruh pihak dapat bersama-sama melihat hasil yang telah dicapai dan menjadikannya sebagai pembelajaran untuk mendukung pembangunan desa ke arah yang lebih baik.', '69a268c8e0736.jpg', '2026-02-01 12:02:16'),
(3, 'PROFILING DESA PATTALLASSANG KEC. TOMPOBULU KAB. BANTAENG', 'Informasi', 'Desa Pattallassang merupakan salah satu desa yang berada di wilayah Kecamatan Tompobulu, Kabupaten Bantaeng. Desa ini merupakan wilayah berkembang yang terletak di kawasan non-pesisir Kabupaten Bantaeng, yang berbatasan langsung dengan Kabupaten Bulukumba dan saat ini tengah bertransformasi menjadi desa mandiri dengan mengoptimalkan kekayaan alamnya.\r\nDesa ini dikenal sebagai wilayah yang memiliki potensi alam, sosial, dan budaya yang cukup beragam serta masyarakat yang menjunjung tinggi nilai kebersamaan dan gotong royong.\r\n\r\nSecara geografis, Desa Pattallassang berada di kawasan perbukitan dengan kondisi alam yang sejuk nan asri dengan total penduduk berjumlah 3.680 Jiwa, Laki-laki 1850 Jiwa, Perempuan 1831 Jiwa dimana etnis Mayoritasnya adalah Makassar. Secara umum, Desa Pattallassang berbatasan dengan wilayah desa Bonto-bontoa disebelah utara, wilayah desa Bajiminasa Kecamatan Gantarangkeke disebelah selatan, wilayah desa Gattareng Kab. Bulukumba disebelah timur, dan wilayah Kelurahan Lembang Gantarangkeke disebelah barat. Lingkungan desa didominasi oleh lahan pertanian dan perkebunan yang menjadi sumber penghidupan utama masyarakat. Komoditas pertanian seperti padi, jagung, dan hasil perkebunan lainnya menjadi penopang ekonomi warga desa hingga saat ini. Desa ini menonjolkan potensi wisata air sebagai daya tarik utama, khususnya Kolam Permandian Salu\' Lompoa yang diresmikan pada 3 Agustus 2023. Fasilitas ini unik karena memanfaatkan sumber air alami (akar rumbia) dan memiliki area kolam terpisah untuk dewasa serta anak-anak. Pembangunannya bersumber dari optimalisasi dana desa.\r\n\r\nDari sisi pemerintahan, Desa Pattallassang terus berupaya meningkatkan kualitas pelayanan kepada masyarakat. Pemerintah desa menjalankan roda pemerintahan dengan mengedepankan prinsip transparansi, partisipasi, dan akuntabilitas. Berbagai program pembangunan desa dirancang melalui musyawarah bersama masyarakat agar sesuai dengan kebutuhan dan kondisi desa. Pemerintah desa memiliki komitmen kuat dalam peningkatan kualitas Sumber Daya Manusia (SDM), yang dibuktikan dengan adanya Kampung KB \"Je\'ne Tallasa\" yang diresmikan pada tanggal 23 Mei 2023 sebagai pusat pemberdayaan kualitas keluarga dan kependudukan.\r\n\r\nDalam bidang sosial dan kemasyarakatan, masyarakat Desa Pattallassang dikenal aktif dan solid. Kegiatan gotong royong masih rutin dilaksanakan, baik dalam pembangunan fasilitas umum, kebersihan lingkungan, maupun kegiatan sosial lainnya. Hal ini menjadi kekuatan utama desa dalam menjaga keharmonisan dan kebersamaan antarwarga.\r\n\r\nAspek pendidikan dan keagamaan juga menjadi perhatian pemerintah desa. Tersedianya sarana pendidikan Sekolah Dasar (SD/Sederajat), Sekolah Menengah Pertama (SMP/Sederajat), Sekolah Menengah Atas (SMA/Sederajat) serta tempat ibadah menjadi bagian penting dalam mendukung peningkatan kualitas Sumber Daya Manusia (SDM). Kegiatan keagamaan dan pembinaan generasi muda terus didorong agar tercipta masyarakat yang berakhlak dan berdaya saing.\r\n\r\nDi bidang pembangunan, Desa Pattallassang secara bertahap melakukan perbaikan infrastruktur desa, seperti jalan desa, sarana air bersih, serta fasilitas penunjang pelayanan publik. Upaya ini dilakukan untuk meningkatkan kenyamanan, mobilitas, dan kesejahteraan masyarakat secara keseluruhan.\r\n\r\nMelalui berbagai potensi dan upaya pembangunan yang terus berjalan, Desa Pattallassang berkomitmen untuk menjadi desa yang maju, mandiri, dan sejahtera. Pemerintah desa mengajak seluruh elemen masyarakat untuk bersama-sama berpartisipasi dalam pembangunan demi terwujudnya Desa Pattallassang yang lebih baik ke depan.\r\n\r\nDengan adanya informasi profil desa ini, diharapkan masyarakat umum dapat mengenal lebih dekat kondisi, potensi, serta arah pembangunan Desa Pattallassang sebagai bagian dari Kabupaten Bantaeng.', '69a267e39062c.jpg', '2026-01-27 12:01:37'),
(4, 'SEMINAR HASIL PROGRAM KERJA KKNT GEL 115 UNHAS MAKASSAR', 'Kegiatan Desa', 'Pattallassang, Rabu 11 Februari 2026 – Pemerintah Desa Pattallassang bersama mahasiswa KKNT Gelombang 115 Universitas Hasanuddin (Unhas) Makassar menggelar Seminar Hasil Program Kerja yang berlangsung di Aula Kantor Desa Pattallassang. Kegiatan ini menjadi momen penyampaian laporan akhir atas seluruh rangkaian program yang telah dilaksanakan mahasiswa selama masa pengabdian di desa.\r\n\r\nSeminar ini dihadiri oleh Pemerintah Desa, perangkat desa, tokoh masyarakat, serta perwakilan warga, turut hadir juga teman-teman mahasiswa KKN dari UNITAMA ( Universitas Teknologi Akba Makassar ). Suasana berlangsung hangat dan penuh antusiasme, sebagai bentuk apresiasi atas kontribusi mahasiswa selama berada di Desa Pattallassang.\r\n\r\nDalam pemaparannya, mahasiswa KKNT menjelaskan berbagai program kerja yang telah direalisasikan. Program-program tersebut mereka beri nama P9, dimana huruf P diambil dari huruf pertama kata Pattallassang dan angka 9 berasa dari 9 program kerja pokok yang dilaksanakan.\r\n\r\nP9 atau 9 Program kerja yang dilaksanakan meliputi\r\n\r\n1. P-RESAKTI : Restorasi Sarana Kreatif dan Terintegritas\r\n\r\n2. P-MANAS : Program maskot nanas Pattallassang\r\n\r\n3. P-TANI : Pattallassang - Tani Inovatif\r\n\r\n4. P-TABUR : Alat penabur pupuk desa Pattallassang\r\n\r\n5. P-BIOPORE : Pembuatan biopori untuk pengolahan pupuk organik dan limbah dapur rumah tangga\r\n\r\n6. P-HUTANI : Hukum tani (Edukasi praktis perlindungan usaha tani)\r\n\r\n7. P-GEMARI : Gemar Makan Ikan\r\n\r\n8. P-CORATIVE : Pattallassang eco creative\r\n\r\n9. P-VOICE : Pattallassang Voice\r\n\r\nSekertaris Desa Pattallassang Abdul Kadir, S.Pd.I dalam sambutannya menyampaikan apresiasi dan terima kasih kepada mahasiswa KKNT Gelombang 115 Unhas Makassar atas dedikasi dan kontribusi yang telah diberikan. Diharapkan, hasil program yang telah dilaksanakan dapat memberi dampak positif serta menjadi tambahan semangat bagi desa dalam meningkatkan pelayanan dan pemberdayaan masyarakat.\r\n\r\nSeminar hasil ini juga menjadi ruang evaluasi dan refleksi bersama antara mahasiswa dan pemerintah desa. Selain sebagai bentuk pertanggungjawaban akademik, kegiatan ini sekaligus mempererat hubungan silaturahmi antara perguruan tinggi dan pemerintah desa.\r\n\r\nDengan berakhirnya kegiatan KKNT Gelombang 115 Unhas Makassar di Desa Pattallassang, diharapkan kolaborasi seperti ini dapat terus terjalin di masa mendatang. Pemerintah Desa Pattallassang selalu terbuka terhadap program-program yang mendorong kemajuan desa dan kesejahteraan masyarakat.\r\n\r\nMelalui publikasi ini, Pemerintah Desa Pattallassang menginformasikan kepada seluruh masyarakat terkait kegiatan yang telah dilaksanakan, sebagai wujud transparansi dan keterbukaan informasi publik.\r\n\r\nPemerintah Desa Pattallassang\r\n\r\nBersama Membangun Desa yang Lebih Maju dan Mandiri.', '69a267751050a.jpg', '2026-02-11 11:56:37'),
(5, 'MUSYAWARAH DESA PATTALLASSANG TAHUN ANGGARAN 2026', 'Kegiatan Desa', 'Pattallassang – Pemerintah Desa Pattallassang kembali menggelar Musyawarah Desa dalam rangka pembahasan APBDesa Tahun Anggaran 2026 serta penetapan Peraturan Desa (Perdes) tentang Bntuan Langsung Tunai Dana Desa (BLT DD), Pariwisata Desa, dan Kewenangan Lokal Desa. Kegiatan ini berlangsung di Aula Kantor Desa Pattallassang dan dihadiri oleh Pemerintah Desa, BPD, perangkat desa, tokoh masyarakat, Ketua Koperasi Desa Merah Putih, serta unsur kelembagaan desa.\r\nMusyawarah desa ini merupakan bagian penting dari proses perencanaan dan pengambilan keputusan di tingkat desa. Dalam forum ini, pemerintah desa memaparkan rancangan APBDesa Tahun Anggaran 2026 yang mencakup rencana pendapatan, belanja, dan pembiayaan desa. Seluruh peserta yang hadir diberikan ruang untuk menyampaikan masukan, saran, serta tanggapan demi penyempurnaan dokumen anggaran sebelum ditetapkan.\r\nSelain pembahasan anggaran, agenda penting lainnya adalah penetapan Perdes terkait Bantuan Langsung Tunai Dana Desa (BLT DD). Perdes ini menjadi dasar hukum dalam penyaluran bantuan kepada masyarakat yang memenuhi kriteria. Dengan adanya regulasi yang jelas, diharapkan proses penyaluran bantuan dapat berjalan tepat sasaran, transparan, dan akuntabel.\r\nTidak hanya itu, musyawarah juga menetapkan Perdes tentang Pariwisata Desa. Peraturan ini disusun sebagai upaya mendorong potensi lokal agar dapat dikelola secara optimal dan memberikan dampak positif terhadap perekonomian masyarakat. Pengelolaan pariwisata desa diharapkan mampu membuka peluang usaha, menciptakan lapangan kerja, serta meningkatkan pendapatan asli desa.\r\nSelanjutnya, penetapan Perdes tentang Kewenangan Lokal Desa juga menjadi pembahasan strategis. Perdes ini mengatur kewenangan yang menjadi hak asal-usul dan kewenangan lokal berskala desa, sehingga pemerintah desa memiliki pedoman yang jelas dalam menjalankan roda pemerintahan dan pelayanan kepada masyarakat.\r\nMelalui musyawarah desa ini, Pemerintah Desa Pattallassang menegaskan komitmennya untuk terus mengedepankan prinsip transparansi, partisipatif, dan akuntabel dalam setiap proses pembangunan desa. Partisipasi aktif masyarakat menjadi kunci dalam mewujudkan perencanaan yang tepat sasaran dan sesuai kebutuhan bersama.\r\nDengan telah dilaksanakannya musyawarah dan penetapan Perdes tersebut, diharapkan seluruh program yang direncanakan pada Tahun Anggaran 2026 dapat berjalan dengan baik dan memberikan manfaat nyata bagi masyarakat Desa Pattallassang.\r\nDemikian informasi ini kami sampaikan sebagai bentuk keterbukaan informasi publik. Terima kasih atas perhatian dan partisipasi seluruh masyarakat.', '69a266a70eac7.jpg', '2026-02-25 11:53:11'),
(7, 'SEMINAR PROGRAM KERJA KKN UNIVERSITAS TEKNOLOGI AKBA MAKASSAR', 'Kegiatan Desa', 'Pattallassang – Rabu 18 Februari 2026. Pemerintah Desa Pattallassang menerima kunjungan mahasiswa Kuliah Kerja Nyata (KKN) dari Universitas Teknologi Akba Makassar (UNITAMA) Posko XI dalam rangka pelaksanaan Seminar Program Kerja. Kegiatan ini berlangsung di Aula Kantor Desa Pattallassang dan dihadiri oleh aparat desa, tokoh masyarakat, serta warga setempat.\r\n\r\nSeminar ini menjadi langkah awal bagi mahasiswa KKN sebelum menjalankan berbagai program kerja di tengah masyarakat. Dalam pemaparannya, mahasiswa UNITAMA Posko XI menjelaskan secara rinci rencana kegiatan yang akan dilaksanakan selama masa pengabdian di Desa Pattallassang.\r\n\r\nAdapun program kerja yang dipaparkan mencakup istem informasi website desa, strategi promosi potensi desa dan arsip digital dokumen desa. Pj Kepala Desa Pattallassang dalam sambutannya menyampaikan apresiasi dan dukungan penuh atas kehadiran mahasiswa KKN UNITAMA. Beliau berharap seluruh program yang telah direncanakan dapat berjalan lancar dan memberikan dampak positif bagi masyarakat.\r\n\r\n“Semoga adik-adik mahasiswa bisa berbaur dengan masyarakat dan melaksanakan program kerja dengan baik. Pemerintah desa siap mendukung kegiatan yang sifatnya membangun dan memberdayakan,” ujar beliau.\r\n\r\nSuasana seminar berlangsung interaktif. Warga yang hadir juga diberikan kesempatan untuk memberikan masukan dan saran terkait program yang dipaparkan. Hal ini menjadi momen penting agar pelaksanaan kegiatan nantinya benar-benar sesuai dengan harapan dan kebutuhan masyarakat.\r\n\r\nMelalui kegiatan ini, masyarakat Desa Pattallassang diharapkan dapat mengetahui secara terbuka apa saja rencana kerja mahasiswa KKN selama berada di desa. Transparansi dan komunikasi yang baik menjadi kunci agar program yang dijalankan dapat berjalan efektif dan tepat sasaran.\r\n\r\nPemerintah Desa Pattallassang menyambut baik kolaborasi antara perguruan tinggi dan desa sebagai bagian dari upaya bersama dalam mendukung pembangunan dan pemberdayaan masyarakat.\r\n\r\nDengan dilaksanakannya seminar program kerja ini, secara resmi mahasiswa KKN UNITAMA Posko XI siap menjalankan pengabdian mereka di Desa Pattallassang. Mari kita dukung bersama setiap kegiatan positif yang akan dilaksanakan demi kemajuan desa kita tercinta.', '6999621682f23.jpg', '2026-02-18 00:00:00'),
(8, 'SOSIALISASI HUKUM PERTANIAN OLEH KKNT GEL 115 UNHAS MAKASSAR', 'Kegiatan Desa', 'Rabu, 21 Januari 2026 – Dalam upaya meningkatkan pemahaman masyarakat terhadap regulasi di sektor pertanian, mahasiswa Kuliah Kerja Nyata (KKN) Gel 115 Universitas Hasanuddin (Unhas) melaksanakan kegiatan Sosialisasi Hukum Pertanian yang bertempat di Aula Kantor Desa Pattallassang. Kegiatan ini diikuti oleh masyarakat desa, khususnya petani dan pemangku kepentingan yang ada di Desa.\r\n\r\nSosialisasi ini bertujuan untuk memberikan edukasi hukum kepada masyarakat agar lebih memahami aturan-aturan resmi pemerintah yang berkaitan dengan pertanian. Mulai dari persoalan kepemilikan lahan, perjanjian sewa dan bagi hasil, hingga perlindungan hasil tani yang kerap menjadi sumber permasalahan di lapangan.\r\n\r\nHadir sebagai narasumber dalam kegiatan ini, Andi Muh Fuad Ikramullah Langgara, S.H., CIRP, yang menyampaikan materi secara komunikatif dan mudah dipahami. Dalam pemaparannya, beliau menjelaskan berbagai persoalan hukum pertanian yang sering dihadapi petani, seperti sengketa lahan berkepanjangan, kerugian petani dalam perjanjian sewa dan bagi hasil, serta terbatasnya akses petani terhadap sarana produksi pertanian.\r\n\r\nSelain itu, peserta juga diberikan pemahaman mengenai dasar hukum agraria di Indonesia, termasuk aturan terkait sengketa kepemilikan dan penguasaan lahan. Materi ini diharapkan dapat menjadi bekal bagi masyarakat agar lebih berhati-hati dan memahami hak serta kewajibannya sebelum melakukan perjanjian atau aktivitas usaha tani.\r\n\r\nMelalui kegiatan ini, mahasiswa KKN UNHAS tidak hanya menjalankan program pengabdian kepada masyarakat, tetapi juga mengimplementasikan ilmu hukum yang diperoleh di bangku kuliah ke dalam situasi nyata di tengah masyarakat. Hal ini menjadi bentuk kontribusi nyata mahasiswa dalam mendukung pembangunan desa, khususnya di sektor pertanian.\r\n\r\nPemerintah Desa Pattallassang menyambut baik pelaksanaan kegiatan sosialisasi ini. Diharapkan, dengan meningkatnya literasi hukum, masyarakat dapat menjalankan aktivitas pertanian sesuai dengan koridor hukum yang berlaku, sehingga mampu meminimalisir konflik hukum di masa depan dan meningkatkan kesejahteraan petani.\r\n\r\nKegiatan ini menjadi salah satu langkah positif dalam pemberdayaan masyarakat desa, sekaligus memperkuat sinergi antara pemerintah desa, perguruan tinggi, dan masyarakat dalam membangun Pattallassang yang sadar hukum dan berdaya saing.', '69a2692269d9b.jpg', '2026-01-21 00:00:00'),
(9, 'WUJUDKAN TATA KELOLA DIGITAL, PEMDES PATTALLASSANG TINGGALKAN ABSEN MANUAL', 'Informasi', 'Pemerintah Desa Pattallassang terus berbenah mengikuti perkembangan zaman. Salah satu langkah nyata yang kini dilakukan adalah meninggalkan sistem absensi manual dan beralih ke absensi digital menggunakan fingerprint. Langkah ini menjadi bagian dari upaya mewujudkan tata kelola pemerintahan desa yang lebih modern, tertib, dan transparan.\r\n\r\nPemdes Pattallassang resmi menerapkan sistem absensi sidik jari (fingerprint) bagi seluruh perangkat desa. Dengan sistem ini, kehadiran aparatur desa tercatat secara otomatis dan akurat tanpa perlu lagi tanda tangan manual di buku absensi. Penerapan fingerprint ini melibatkan seluruh perangkat Desa Pattallassang sebagai pengguna utama. Pemerintah desa menjadi pelaksana kebijakan, sementara masyarakat menjadi pihak yang merasakan langsung dampak dari peningkatan kedisiplinan dan pelayanan aparatur desa.\r\n\r\nSistem absensi digital ini mulai diterapkan di Kantor Desa Pattallassang. Penerapan dilakukan secara bertahap dan disesuaikan dengan kebutuhan serta kesiapan perangkat desa dalam menjalankan sistem baru tersebut. Peralihan dari absen manual ke fingerprint dilakukan untuk meningkatkan kedisiplinan, efektivitas kerja, serta akuntabilitas aparatur desa. Selain itu, langkah ini juga menjadi wujud komitmen Pemdes Pattallassang dalam mendukung digitalisasi pelayanan pemerintahan di tingkat desa.\r\n\r\nSetiap perangkat desa diwajibkan melakukan absensi menggunakan sidik jari saat datang dan pulang kerja. Data kehadiran tersimpan secara digital sehingga memudahkan monitoring dan evaluasi kinerja. Sistem ini juga meminimalisir kesalahan pencatatan serta potensi manipulasi data kehadiran.\r\n\r\nDengan diterapkannya absensi fingerprint ini, Desa Pattallassang menjadi salah satu desa pionir di tingkat kecamatan dalam pemanfaatan teknologi digital untuk tata kelola pemerintahan. Diharapkan, inovasi ini dapat menjadi contoh bagi desa lain serta berdampak positif terhadap kualitas pelayanan kepada masyarakat. Pemerintah Desa Pattallassang berkomitmen untuk terus melakukan pembaruan dan inovasi demi menciptakan pemerintahan desa yang profesional, transparan, dan responsif terhadap kebutuhan masyarakat di era digital.', '69a2697c45203.jpg', '2026-01-18 00:00:00'),
(10, 'PENYEGARAN BIROKRASI: PEMERINTAH DESA PATTALLASSANG MELAKSANAKAN MUTASI JABATAN PERANGKAT DESA', 'Kegiatan Desa', 'Pemerintah Desa Pattallassang terus berkomitmen melakukan pembenahan dan peningkatan kualitas pelayanan kepada masyarakat. Salah satu upaya yang dilakukan adalah melalui penyegaran birokrasi dengan melaksanakan mutasi jabatan perangkat desa, yang berlangsung di Aula Kantor Desa Pattallassang. Kegiatan ini dilaksanakan sebagai bagian dari langkah strategis pemerintah desa dalam menyesuaikan kebutuhan organisasi, meningkatkan kinerja aparatur, serta memastikan pelayanan publik berjalan lebih optimal. Mutasi jabatan merupakan hal yang wajar dalam sistem pemerintahan dan menjadi bagian dari dinamika organisasi agar roda pemerintahan tetap berjalan efektif.\r\n\r\nMutasi jabatan ini diikuti oleh sejumlah perangkat desa yang sebelumnya telah melalui proses evaluasi kinerja. Dalam pelaksanaannya, kegiatan berlangsung dengan tertib, lancar, dan penuh suasana kekeluargaan. Pemerintah desa berharap, dengan penempatan tugas dan tanggung jawab yang baru, setiap perangkat desa dapat lebih maksimal dalam menjalankan perannya masing-masing. Kepala Desa Pattallassang dalam sambutannya menyampaikan bahwa mutasi jabatan ini bukan sekadar pergantian posisi, tetapi merupakan bentuk kepercayaan dan amanah yang harus dijalankan dengan penuh tanggung jawab. Ia juga menekankan pentingnya loyalitas, disiplin, serta kerja sama antarperangkat desa demi terciptanya pelayanan yang cepat, transparan, dan berpihak kepada masyarakat.\r\n\r\nLebih lanjut disampaikan bahwa tujuan utama dari mutasi jabatan ini adalah peningkatan kapasitas pelayanan Pemerintah Desa Pattallassang, sehingga masyarakat dapat merasakan langsung manfaat dari tata kelola pemerintahan desa yang lebih baik. Dengan sumber daya manusia yang ditempatkan sesuai kompetensi, diharapkan pelayanan administrasi dan program pembangunan desa dapat berjalan lebih efektif. Pemerintah Desa Pattallassang juga mengajak seluruh masyarakat untuk terus mendukung kinerja pemerintah desa serta berperan aktif dalam pembangunan. Sinergi antara pemerintah desa dan masyarakat menjadi kunci utama dalam mewujudkan desa yang maju, transparan, dan sejahtera.\r\n\r\nMelalui langkah penyegaran birokrasi ini, Pemerintah Desa Pattallassang optimistis dapat terus meningkatkan kualitas pelayanan dan menjawab kebutuhan masyarakat secara berkelanjutan. Adapun mutasi yang terjadi adalah\r\n\r\n1. Muammar, S.Pd.I, Jabatan Lama \"Kasi Kesejahteraan\" Jabatan Baru \"Kaur Keuangan\" menggantikan saudara Haeruddin\r\n\r\n2. April, jabatan lama \"Kepala Dusun Puro\'ro\", Jabatan Baru \"Kasi Kesejahteraan\" menggantikan saudara Muammar, S.Pd.I\r\n\r\nDengan demikian Kadus Puro\'ro dan Kadus Kampung Parang akan dilakukan Penjaringan dan Penyaringan dikemudian hari. Sementara sambil menunggu Penjaringan dan penyaringan yang akan dilakukan, untuk sementara posisi Kepala dusun Puro\'ro akan dijalankan oleh PLT saudara April, sedangkan untuk Kepala dusun Kp. Parang akan dijalankan oleh PLT saudari Juarni.', '69a269e6ac43d.jpg', '2026-01-14 00:00:00'),
(11, 'RAPAT EVALUASI KINERJA DAN PEMBAGIAN TUGAS PERANGKAT DAN STAF DESA PATTALLASSANG TAHUN 2026', 'Kegiatan Desa', 'Pattallassang - Jumat, 09 Januari 2026. Pemerintah Desa Pattallassang menggelar Rapat Evaluasi Kinerja dan Pembagian Tugas Tahun 2026 yang berlangsung di Aula Kantor Desa Pattallassang. Kegiatan ini diikuti oleh seluruh perangkat dan staf desa sebagai bagian dari upaya meningkatkan kualitas pelayanan kepada masyarakat.\r\n\r\nRapat ini dipimpin langsung oleh pimpinan pemerintah desa Andri Irwan Amier, SE (PJ Kepala Desa Pattallassang) dan dihadiri oleh perangkat desa, staf administrasi, serta unsur pendukung pemerintahan desa lainnya. Kegiatan tersebut bertujuan untuk melakukan evaluasi terhadap kinerja tahun sebelumnya sekaligus menyusun pembagian tugas yang lebih jelas dan terarah untuk tahun 2026.\r\n\r\nDalam rapat, masing-masing bidang menyampaikan laporan singkat terkait pelaksanaan tugas, kendala yang dihadapi, serta capaian yang telah diraih. Selain itu, dilakukan juga pembahasan terkait penyesuaian tugas dan tanggung jawab agar selaras dengan kebutuhan pelayanan masyarakat yang terus berkembang.\r\n\r\nPembagian tugas ini diharapkan dapat memperkuat koordinasi antarperangkat desa, meningkatkan kedisiplinan kerja, serta menciptakan pelayanan publik yang lebih efektif, cepat, dan transparan. Pemerintah desa menekankan pentingnya kerja sama, komunikasi yang baik, dan komitmen bersama dalam menjalankan roda pemerintahan desa.\r\n\r\nMelalui rapat evaluasi ini, Pemerintah Desa Pattallassang berkomitmen untuk terus meningkatkan kapasitas aparatur desa demi mewujudkan pelayanan yang prima dan responsif terhadap kebutuhan masyarakat. Diharapkan, hasil dari rapat ini dapat menjadi langkah awal dalam menciptakan tata kelola pemerintahan desa yang lebih baik di tahun 2026.', '69a26a44cc122.jpg', '2026-02-09 00:00:00'),
(12, 'KERJA BAKTI WARGA DUSUN PURO’RO ANTISIPASI PELUAPAN AIR', 'Kegiatan Desa', 'Pattallassang - Jumat, 09 Januari 2026. Dusun Puro’ro kembali menunjukkan semangat kebersamaan melalui kegiatan kerja bakti yang dilaksanakan oleh warga setempat. Kegiatan ini dilakukan sebagai bentuk kepedulian masyarakat terhadap lingkungan sekitar, khususnya dalam menanggulangi potensi terjadinya peluapan air ke badan jalan akibat selokan yang tersumbat. Kerja bakti ini melibatkan berbagai unsur masyarakat Dusun Puro’ro, mulai dari tokoh masyarakat, pemuda, hingga warga sekitar yang dengan sukarela meluangkan waktu dan tenaga demi terciptanya lingkungan yang bersih, aman, dan nyaman. Kegiatan kali ini juga terbantu dengan adanya teman-teman KKNT Gel 115 dari Universitas Hasanuddin Makassar dan berlangsung dengan penuh semangat gotong royong, mencerminkan nilai kebersamaan yang masih terjaga kuat di tengah masyarakat desa.\r\n\r\n	Dalam beberapa waktu terakhir, warga Dusun Puro’ro mulai merasakan dampak dari tersumbatnya saluran air atau selokan di sejumlah titik. Tumpukan sampah, tanah, dan ranting yang terbawa air hujan menyebabkan aliran air tidak berjalan dengan lancar. Akibatnya, ketika hujan turun dengan intensitas tinggi, air kerap meluap dan menggenangi jalan desa. Kondisi tersebut tentu sangat mengganggu aktivitas warga, baik pejalan kaki maupun pengendara yang melintas. Selain itu, genangan air juga berpotensi merusak badan jalan dan menimbulkan risiko kecelakaan. Atas dasar inilah, warga berinisiatif untuk menggelar kegiatan kerja bakti sebagai langkah cepat dan tepat dalam mengatasi permasalahan tersebut.\r\n\r\n	Sejak pagi hari tepatnya pada pukul 07:10 Wita, warga Dusun Puro’ro bersama teman-teman KKNT Gel 115 Universitas Hasanuddin telah berkumpul di lokasi selokan yang menjadi titik utama kegiatan. Dengan membawa peralatan seadanya seperti cangkul, sekop, parang, dan karung sampah, warga bersama-sama membersihkan saluran air dari berbagai material penyumbat. Selokan yang sebelumnya tertutup oleh endapan lumpur dan sampah secara perlahan kembali terbuka. Aliran air pun mulai terlihat lancar setelah dilakukan pembersihan menyeluruh. Tidak hanya fokus pada satu titik, warga juga menyisir sepanjang saluran air yang rawan tersumbat untuk memastikan tidak ada hambatan yang tersisa. Kegiatan kerja bakti ini berlangsung dengan tertib dan penuh kebersamaan. Suasana kekeluargaan sangat terasa, di mana warga saling membantu dan bekerja sama tanpa memandang perbedaan usia maupun latar belakang.\r\n\r\n	Tujuan utama dari pelaksanaan kerja bakti ini adalah menghindari terjadinya peluapan air ke jalan akibat selokan yang tersumbat. Dengan lancarnya aliran air, diharapkan risiko genangan saat hujan dapat diminimalisir sehingga aktivitas masyarakat tidak terganggu. Selain itu, kegiatan ini juga memberikan manfaat lain, seperti :\r\n\r\nMeningkatkan kesadaran masyarakat akan pentingnya menjaga kebersihan lingkungan.\r\nMempererat tali silaturahmi dan kebersamaan antarwarga.\r\nMenumbuhkan kembali semangat gotong royong sebagai budaya khas masyarakat desa.\r\nMencegah kerusakan infrastruktur jalan akibat genangan air yang berkepanjangan.\r\n	Melalui kegiatan kerja bakti ini, diharapkan masyarakat Dusun Puro’ro semakin peduli terhadap kondisi lingkungan sekitar, khususnya kebersihan saluran air. Warga juga diimbau untuk tidak membuang sampah sembarangan ke selokan agar permasalahan serupa tidak terulang kembali di kemudian hari. Pemerintah desa turut mengapresiasi partisipasi aktif masyarakat dalam menjaga lingkungan. Kegiatan seperti ini diharapkan dapat terus dilakukan secara rutin, baik atas inisiatif warga maupun melalui program bersama pemerintah desa.\r\n\r\n	Dengan adanya sinergi antara masyarakat dan pemerintah desa, lingkungan yang bersih, sehat, dan aman dapat terwujud, sehingga memberikan kenyamanan bagi seluruh warga Dusun Puro’ro dan sekitarnya.', '69a26a9091849.jpg', '2026-01-09 00:00:00'),
(13, 'PJ KADES PATTALLASSANG LAKUKAN KUNJUNGAN KOORDINASI KE KANTOR CAMAT TOMPOBULU TERKAIT STATUS PERANGKAT DESA', 'Informasi', 'Pattallassang — Kamis 08 Januari 2026. Dalam rangka pelaksanaan tugas pemerintahan desa serta memastikan tertib administrasi kepegawaian, Penjabat (Pj) Kepala Desa Pattallassang melakukan kunjungan koordinasi ke Kantor Camat Tompobulu dalam rangka menggali informasi dan melakukan klarifikasi terkait status staf atau perangkat Desa Pattallassang yang melanjutkan ke skema PPPK paruh waktu.\r\n\r\nKegiatan koordinasi tersebut dilaksanakan di ruangan Kepala Sub Bagian Umum dan Kepegawaian Kantor Camat Tompobulu. Kunjungan ini menjadi bagian dari upaya Pemerintah Desa Pattallassang untuk memastikan kejelasan administrasi serta keberlanjutan pelayanan pemerintahan desa ke depan. Menggali dan memperoleh informasi resmi terkait status staf atau perangkat Desa Pattallassang yang melanjutkan sebagai Pegawai Pemerintah dengan Perjanjian Kerja (PPPK) Paruh Waktu.\r\n\r\nDalam koordinasi tersebut, Pj Kepala Desa Pattallassang secara langsung menyampaikan maksud kedatangan, yaitu untuk memperoleh informasi resmi mengenai staf atau perangkat desa yang dinyatakan lulus dan melanjutkan sebagai PPPK paruh waktu, khususnya terkait kejelasan status kepegawaian perangkat desa yang telah dinyatakan lulus PPPK paruh waktu, serta implikasinya terhadap struktur dan pelayanan pemerintahan desa.\r\n\r\nKoordinasi ini dinilai penting agar tidak terjadi kesalahpahaman terkait status kepegawaian, serta untuk memastikan roda pemerintahan desa tetap berjalan optimal meskipun terdapat perubahan status pada beberapa staf atau perangkat desa. Koordinasi ini pun dilakukan sebagai bentuk komitmen Pemerintah Desa Pattallassang untuk memastikan bahwa setiap kebijakan dan perubahan status kepegawaian perangkat desa berjalan sesuai dengan ketentuan peraturan perundang-undangan yang berlaku, serta tidak mengganggu kelancaran pelayanan kepada masyarakat.\r\n\r\nPemerintah Desa Pattallassang akan terus menjalin komunikasi dan koordinasi dengan pihak Kecamatan Tompobulu dan instansi terkait, guna memperoleh kejelasan regulasi dan langkah tindak lanjut yang diperlukan demi mendukung tata kelola pemerintahan desa yang profesional, transparan, dan akuntabel.\r\n\r\nMelalui kegiatan ini, diharapkan masyarakat dapat memahami bahwa setiap langkah yang diambil oleh pemerintah desa bertujuan untuk menjaga kelancaran pelayanan serta memberikan kepastian hukum dan administratif bagi seluruh perangkat desa.', '69a26ae7e2190.jpg', '2026-01-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengaduan`
--

CREATE TABLE `tabel_pengaduan` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `subjek` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pengaduan`
--

INSERT INTO `tabel_pengaduan` (`id`, `nama`, `kontak`, `alamat`, `subjek`, `pesan`, `tanggal`) VALUES
(8, 'piioooi', '082399547123', NULL, 'JALANAN RUSAK', 'tyuiotyuii5897ui', '2026-02-22 06:12:20'),
(9, 'asrulk', '76545676543', NULL, 'pengrusakan lahan', 'ternak tetangga masuk lahan', '2026-02-23 17:10:18'),
(10, 'tes', '5647382746', NULL, 'jalanan rusak', 'aku hanya mencobanya', '2026-02-25 05:51:12'),
(11, 'FADLI', '5647382746', NULL, 'pengrusakan lahan', 'gfghjhfghjghbmbhjvgcbhvbghvvbavnbhbvhsbvhadbhvba', '2026-02-25 05:53:01'),
(12, 'aparat1', '9893859', NULL, 'gfdygf', 'bgfbererer', '2026-02-25 05:55:49'),
(13, 'FADLI', '666', NULL, 'jalanan rusak', '6666666ggggg', '2026-02-25 05:59:01'),
(14, 'ndjnsj', '76545676543', NULL, 'yhth', '765465', '2026-02-25 06:08:44'),
(15, 'FADLI', '5647382746', 'Dusun sarroangin', 'jalanan rusak', 'gcgfcbvhvj', '2026-02-25 06:20:14'),
(16, 'putri', '9876556789', 'Dusun puroro', 'tes', 'bagus', '2026-03-06 14:58:30'),
(17, 'FADLI', '082399547123', 'Dusun puroro', 'JALANAN RUSAK', 'Terjadi sebuah kerusakan jalan di dusun puroro tepatnya di depan sekolah madrasah mari puro\'ro', '2026-03-09 01:31:45'),
(18, 'RAHMAT SYAPUTRA', '087278467724', 'Dusun sarroangin', 'PEMBERANTASAN TAMBANG ILEGAL', 'Pada dusun ini ad sebuah tambang yang tidak diketahui dan tidak memiliki izin beroperasi jadi tolong untuk segera diselesaikan', '2026-03-09 01:52:58'),
(19, 'KELVIN', '0826772746', 'Dusun puroro', 'JALAN RUSAK', 'JALAN RUSAK PADA DUSUN PURORO', '2026-03-09 03:13:11'),
(20, 'tes', '9876', 'Dusun kalumpang', 'dxfc', 'bhffdf', '2026-03-09 17:39:53'),
(21, 'Adelia Putri', '098765', 'Dusun masarang', 'gfdgg', 'fdgdgfb ', '2026-03-09 17:41:40'),
(22, 'ddd', '09876', 'Dusun kalumpang', 'fgfgfg', 'fgdfg', '2026-03-09 17:44:05'),
(23, 'Adelia Putri', '098985', 'Dusun kalumpang', 'JALANAN RUSAK', 'tbhgsvcghavbk uhufg', '2026-03-09 17:46:39'),
(24, 'Adelia Putri', '09887', 'Dusun nippon', 'PEMBERANTASAN TAMBANG ILEGAL', 'sdfgh', '2026-03-09 17:51:17'),
(25, 'Adelia Putri', '0898249', 'Dusun sarroangin', 'dsvsdv', 'sdvsdv', '2026-03-09 17:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_potensi`
--

CREATE TABLE `tabel_potensi` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_potensi`
--

INSERT INTO `tabel_potensi` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'POTENSI BUAH NANAS', 'Desa Pattallassang memiliki potensi pertanian yang berkembang pada komoditas buah nanas. Tanaman nanas tumbuh dengan baik karena didukung oleh kondisi tanah yang subur serta iklim yang sesuai, sehingga menghasilkan buah dengan rasa manis, segar, dan berkualitas. Produksi nanas di desa ini cukup melimpah dan menjadi salah satu komoditas yang memberikan kontribusi ekonomi bagi masyarakat.\r\n\r\nKeunggulan Desa Pattallassang tidak hanya terletak pada hasil panen nanas segar, tetapi juga pada adanya inovasi pengolahan produk berupa jus nanas. Produksi jus nanas ini menjadi nilai tambah (value added) yang meningkatkan harga jual hasil pertanian sekaligus memperluas peluang usaha bagi masyarakat. Produk jus nanas yang dihasilkan memiliki cita rasa segar dan berpotensi dipasarkan secara lebih luas, baik di tingkat lokal maupun regional.\r\n\r\nDengan adanya kegiatan produksi jus nanas, potensi komoditas ini tidak hanya berhenti pada penjualan hasil panen mentah, tetapi telah berkembang ke sektor industri rumah tangga dan UMKM. Apabila terus dikembangkan melalui peningkatan kualitas produk, kemasan, serta strategi pemasaran yang baik, buah nanas dan produk olahannya dapat menjadi salah satu ikon unggulan Desa Pattallassang dalam mendukung pertumbuhan ekonomi desa secara berkelanjutan.', '69a3a9ef753b0.png'),
(3, 'POTENSI BUAH DURIAN', 'Desa Pattallassang memiliki potensi pertanian yang sangat menjanjikan, salah satunya pada komoditas buah durian. Kondisi geografis desa yang didukung oleh tanah yang subur, struktur lahan yang sesuai, serta iklim tropis dengan curah hujan yang cukup menjadikan tanaman durian dapat tumbuh dengan baik dan menghasilkan buah berkualitas tinggi. Setiap musim panen, produksi durian di desa ini cukup melimpah dan menjadi salah satu komoditas unggulan yang diminati masyarakat.\r\n\r\nBuah durian dari Desa Pattallassang dikenal memiliki cita rasa yang khas, daging buah yang tebal, serta aroma yang kuat sehingga memiliki daya tarik tersendiri bagi konsumen. Hal ini membuka peluang besar bagi masyarakat untuk meningkatkan pendapatan melalui penjualan langsung, baik di pasar lokal maupun ke daerah sekitar. Selain itu, potensi durian juga dapat dikembangkan lebih lanjut melalui pengolahan produk turunan seperti dodol durian, pancake durian, tempoyak, hingga es krim durian yang memiliki nilai jual lebih tinggi.\r\n\r\nApabila dikelola secara optimal melalui peningkatan kualitas budidaya, manajemen panen, serta strategi pemasaran yang baik, potensi buah durian di Desa Pattallassang dapat menjadi sektor unggulan yang berkontribusi terhadap pertumbuhan ekonomi desa dan kesejahteraan masyarakat secara berkelanjutan.', '69a3a905736d7.jpg'),
(4, 'POTENSI BUAH RAMBUTAN', 'Desa Pattallassang memiliki potensi unggulan di bidang pertanian, khususnya pada komoditas buah salah satunya adalah buah Rambutan. Tanah yang subur serta kondisi iklim yang mendukung menjadikan rambutan tumbuh dengan baik dan menghasilkan buah yang melimpah setiap musim panen. Ketersediaan rambutan yang cukup banyak ini tidak hanya memenuhi kebutuhan konsumsi masyarakat setempat, tetapi juga berpotensi untuk dipasarkan ke wilayah lain sehingga dapat meningkatkan pendapatan warga desa.\r\n\r\nApabila dikelola dan dikembangkan secara optimal, potensi buah rambutan di Desa Pattallassang dapat menjadi sumber ekonomi yang berkelanjutan melalui penjualan hasil panen maupun pengolahan produk turunan seperti manisan, sirup, dan olahan lainnya.', '69a3a81639663.jpg'),
(5, 'POTENSI POHON CENGKEH', 'Desa Pattallassang memiliki potensi unggulan di sektor perkebunan, khususnya pada komoditas cengkeh. Tanaman cengkeh tumbuh dengan sangat baik di wilayah ini karena didukung oleh kondisi tanah yang subur, ketinggian lahan yang sesuai, serta iklim tropis yang stabil. Jumlah pohon cengkeh yang cukup banyak menjadikan komoditas ini sebagai salah satu sumber pendapatan utama masyarakat desa.\r\n\r\nSetiap musim panen, hasil produksi cengkeh di Desa Pattallassang tergolong melimpah dan memiliki kualitas yang baik, baik dari segi aroma, warna, maupun kadar keringnya. Cengkeh yang dihasilkan biasanya dipasarkan ke pengepul maupun ke luar daerah, sehingga memberikan kontribusi signifikan terhadap perekonomian masyarakat. Nilai jual cengkeh yang relatif tinggi juga menjadikan komoditas ini sebagai investasi jangka panjang bagi para petani.\r\n\r\nSelain sebagai bahan baku industri rokok dan rempah-rempah, cengkeh juga memiliki potensi pengembangan dalam bentuk produk turunan seperti minyak cengkeh yang bernilai ekonomi tinggi. Dengan pengelolaan yang baik, mulai dari perawatan tanaman hingga proses pascapanen, potensi perkebunan cengkeh di Desa Pattallassang dapat terus dikembangkan sebagai sektor unggulan yang mendukung pertumbuhan ekonomi desa secara berkelanjutan.', '69a3ab390fa1b.jpg'),
(6, 'POTENSI PERTANIAN PADI', 'Desa Pattallassang juga memiliki potensi besar di sektor pertanian, khususnya pada budidaya padi. Hamparan sawah yang luas serta sistem pengairan yang memadai menjadikan kegiatan pertanian padi sebagai salah satu mata pencaharian utama masyarakat desa. Kondisi tanah yang subur dan dukungan iklim yang sesuai memungkinkan petani menghasilkan panen padi yang cukup melimpah setiap musimnya.\r\n\r\nSebagian besar masyarakat Desa Pattallassang menggantungkan sumber pendapatannya dari hasil pertanian sawah. Produksi padi tidak hanya memenuhi kebutuhan konsumsi lokal, tetapi juga dipasarkan ke wilayah sekitar sehingga memberikan kontribusi nyata terhadap perekonomian desa. Aktivitas pertanian ini juga membuka lapangan kerja bagi warga, mulai dari proses pengolahan lahan, penanaman, perawatan, hingga masa panen.\r\n\r\nDengan pengelolaan yang baik, penggunaan bibit unggul, serta penerapan teknik pertanian modern, potensi sawah di Desa Pattallassang dapat terus dikembangkan untuk meningkatkan produktivitas dan kesejahteraan petani. Keberadaan sawah yang luas ini menjadi salah satu aset penting desa dalam mendukung ketahanan pangan dan pertumbuhan ekonomi secara berkelanjutan.', '69a3ac80d6c9c.jpg'),
(7, 'Potensi Wisata – Desa Wisata Salu’ Lompoa Pattallassang', 'Tak hanya pada sektor Pertanian, Desa Pattallassang memiliki potensi pariwisata yang menarik melalui Desa Wisata Salu’ Lompoa, sebuah destinasi wisata berbasis alam yang dikembangkan oleh Pemerintah Desa Pattallassang sebagai upaya untuk meningkatkan perekonomian dan membangun sektor pariwisata lokal. Wisata ini merupakan hasil inisiatif masyarakat dan pemerintah desa untuk mengoptimalkan potensi alam yang ada serta menciptakan ruang rekreasi yang bermanfaat bagi warga dan pengunjung.\r\n\r\nDi lokasi ini terdapat fasilitas kolam permandian Salu’ Lompoa yang dibangun sejak tahun 2019 dan direnovasi kembali hingga selesai pada 2023. Kolam permandian ini memiliki dua bagian utama: kolam dewasa dengan kedalaman antara 160–175 cm dan kolam anak-anak yang lebih aman bagi keluarga. Pengunjung dapat menikmati suasana pemandian yang segar sambil menyaksikan pemandangan persawahan di sekitar area kolam, yang memberikan suasana alam yang asri dan menenangkan.\r\n\r\nWisata Salu’ Lompoa dilengkapi fasilitas umum seperti area parkir, kamar mandi, spot foto, dan tempat makan sederhana yang mendukung kenyamanan pengunjung. Tarif masuk yang terjangkau membuka kesempatan bagi masyarakat dari berbagai daerah seperti Bulukumba, Jeneponto, dan Bantaeng untuk datang dan menikmati wahana ini.\r\n\r\nPotensi Desa Wisata Salu’ Lompoa tidak hanya menjadi ruang rekreasi, tetapi juga memberi dampak ekonomi positif bagi masyarakat Desa Pattallassang. Dengan terus dikembangkan melalui pengelolaan yang lebih profesional, peningkatan fasilitas, dan promosi yang tepat, Salu’ Lompoa memiliki peluang menjadi daya tarik wisata unggulan yang memperkuat perekonomian lokal dan kesejahteraan masyarakat desa secara berkelanjutan.', '69a3adb882fdf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_profil`
--

CREATE TABLE `tabel_profil` (
  `id` int NOT NULL,
  `nama_kades` varchar(255) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `teks_sambutan` text,
  `foto_kades` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_profil`
--

INSERT INTO `tabel_profil` (`id`, `nama_kades`, `jabatan`, `teks_sambutan`, `foto_kades`) VALUES
(1, 'ANDRI AMIER IRWAN, S.E', 'PJ Kepala Desa Pattallassang', '<center><b><h2>Sambutan Kepala Desa Pattallassang</h2></b></center>\r\n\r\n<b>Assalamu’alaikum Warahmatullahi Wabarakatuh</b>\r\n\r\nSelamat datang di website resmi Desa Pattallassang. Website ini kami hadirkan sebagai sarana informasi dan komunikasi antara pemerintah desa dan masyarakat. Semoga dapat memberikan manfaat, meningkatkan transparansi, serta mempererat kebersamaan dalam membangun desa yang lebih maju.\r\n\r\n<b>Wassalamu’alaikum Warahmatullahi Wabarakatuh.</b>', 'WhatsApp Image 2026-03-04 at 22.25.11.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_statistik`
--

CREATE TABLE `tabel_statistik` (
  `id` int NOT NULL,
  `label` varchar(100) NOT NULL,
  `jumlah` int NOT NULL,
  `ikon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_statistik`
--

INSERT INTO `tabel_statistik` (`id`, `label`, `jumlah`, `ikon`) VALUES
(1, 'Total Penduduk', 3680, 'bi-people'),
(2, 'Kepala Keluarga', 750, 'bi-house-door'),
(3, 'Laki-Laki', 1850, 'bi-gender-male'),
(4, 'Perempuan', 1831, 'bi-gender-female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_anggaran`
--
ALTER TABLE `tabel_anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_aparat`
--
ALTER TABLE `tabel_aparat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pengaduan`
--
ALTER TABLE `tabel_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_potensi`
--
ALTER TABLE `tabel_potensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_profil`
--
ALTER TABLE `tabel_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_statistik`
--
ALTER TABLE `tabel_statistik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_anggaran`
--
ALTER TABLE `tabel_anggaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_aparat`
--
ALTER TABLE `tabel_aparat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tabel_pengaduan`
--
ALTER TABLE `tabel_pengaduan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tabel_potensi`
--
ALTER TABLE `tabel_potensi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_profil`
--
ALTER TABLE `tabel_profil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_statistik`
--
ALTER TABLE `tabel_statistik`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
