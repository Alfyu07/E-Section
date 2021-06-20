-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2021 pada 04.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_sections`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_role` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `source` text NOT NULL,
  `materi` text NOT NULL,
  `gambar` text NOT NULL,
  `fakta` varchar(200) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_role`, `judul`, `source`, `materi`, `gambar`, `fakta`, `tag`) VALUES
(4, 4, 'Ragam Keluarga', 'https://www.youtube.com/watch?v=hpCyiyNqzlE', 'Keluarga adalah sekelompok orang yang terkait satu sama lain oleh darah, perkawinan atau ikatan umum yang kuat. Keluarga datang dalam berbagai ukuran dan kombinasi. Beberapa orang yang Kamu kenal mungkin juga memiliki salah satu atau kedua orang tua di militer. Mungkin ada kalanya orang tua atau orang tua mereka ditempatkan, yang berarti orang tua atau orang tua harus bekerja jauh dari rumah untuk sementara waktu—sering kali di negara yang berbeda. Keluarga Kamu mungkin terlihat dan berfungsi sangat berbeda dari keluarga teman-teman Kamu, dan itu tidak masalah. Tidak ada cara yang benar atau salah bagi sebuah keluarga untuk disusun atau dilihat. Yang terpenting dari keluarga adalah mereka saling mencintai dan menjaga. Bagi sebagian orang, cinta itu mungkin datang dari keluarga yang diberikan seseorang, sementara yang lain mungkin menemukan cinta dan perhatian ini dari orang-orang yang mereka pilih untuk disebut keluarga. Meskipun keluarga mungkin terlihat berbeda dari rumah ke rumah, semua keluarga itu unik dan istimewa! Luangkan waktu untuk memikirkan semua hal yang membuat keluarga Kamu istimewa.', 'family.jpg', 'Keluarga, apa pun strukturnya, juga bisa sangat beragam dengan cara lain. Mereka dapat memiliki satu orang tua yang berbeda ras dari orang tua lainnya. Dalam keluarga campuran, asuh, atau adopsi, be', 'Keluarga'),
(5, 4, 'Sedih dan Bahagia Selalu Terjadi', 'https://amaze.org/video/sad-and-happy-feelings-happen/', 'Perubahan suasana hati adalah ketika suasana hati seseorang berubah dengan sangat cepat. Itu bisa termasuk dari satu ekstrem Selama masa pubertas, orang muda mengalami banyak perubahan fisik dan emosional saat mereka melewati masa kanak-kanak ke dewasa. Banyak dari perubahan ini adalah akibat dari hormon, bahan kimia dalam tubuh seseorang yang berkomunikasi dengan bagian tubuh tertentu bagaimana untuk tumbuh dan berubah Hormon memainkan peran penting selama masa pubertas, dan normal bagi tubuh anak muda untuk mengalami banyak fluktuasi hormonal saat mereka tumbuh dewasa. Perubahan suasana hati terkadang berubah dari satu emosi ekstrem ke emosi ekstrem lainnya. Sering kali merupakan akibat dari peningkatan hormon tertentu. Ini karena hormon mempengaruhi sistem limbik di otak, area yang mengontrol pengaturan perasaan. Jadi, orang-orang muda mungkin sangat bersemangat dan bahagia pada satu menit dan kemudian merasa marah dan kesal pada menit berikutnya. Kadang-kadang bisa terasa seperti hal terkecil dapat memicu respons yang intens dari seorang anak muda yang sedang mengalami pubertas. Ini semua normal karena kadar hormon baru dalam tubuh. seperti marah) hingga ekstrem lainnya (seperti senang). Pergeseran suasana hati ini bisa terjadi dengan cepat dan terasa intens. Perubahan suasana hati adalah bagian normal dari pubertas. Sangat penting untuk bersabar dengan diri sendiri dan orang lain yang mungkin mengalami perubahan suasana hati.', 'SH.jpg', 'Perubahan suasana hati adalah ketika suasana hati seseorang berubah dengan sangat cepat. Itu bisa termasuk pergi dari satu ekstrem (seperti marah) ke ekstrem lain (seperti bahagia). Pergeseran suasa', 'Interpersonal'),
(6, 4, 'Ditolak: Semua orang mengalaminya', 'https://amaze.org/video/healthy-relationships-rejection-happen-to-everyone/', 'Mengalami penolakan adalah bagian normal dari kehidupan itu terjadi pada semua orang. Yang paling penting adalah bagaimana Kamu menghadapinya. Rasanya sangat tidak enak untuk ditolak. Apa yang dapat Kamu lakukan ketika Kamu merasa sakit hati atau marah karena penolakan? Meskipun Kamu kesal, hargai keputusan orang lain. Kamu juga dapat fokus pada diri sendiri, berbicara dengan seseorang yang Kamu percayai tentang perasaan Kamu dan melakukan sesuatu yang menyenangkan untuk mengalihkan pikiranmu dari berbagai hal. Dan ingat untuk tetap menjadi diri sendiri. Hanya karena satu hal tidak berjalan seperti yang Kamu rencanakan, bukan berarti Kamu tidak dapat mengambil risiko pada hal-hal lain di masa depan! Belajar menerima dan menghormati keputusan orang adalah keterampilan yang dapat Kamu bantu untuk dipelajari oleh kaum muda. Dorong orang-orang muda untuk fokus pada diri mereka sendiri dan kualitas positif yang mereka miliki. Kamu juga dapat menyarankan agar mereka berbicara dengan orang yang mereka percayai tentang perasaan mereka dan meluangkan waktu untuk bersenang-senang untuk mengalihkan pikiran mereka dari berbagai hal. Orang dewasa dapat bertindak sebagai pemandu dan menjadi sistem pendukung ketika anak muda mengalami penolakan.', 'rejection.jpg', 'Mencoba meyakinkan mereka untuk berubah pikiran sepertinya tidak akan berhasil. Penting untuk menerima keputusan orang yang telah menolak Kamu. Mereka memiliki hak untuk memutuskan apa yang terbaik ', 'HubunganSehat'),
(7, 4, 'CKamuan: Bukan Kesenangan yang Bagus', 'https://amaze.org/video/teasing/', 'CKamuan sering dimaksudkan untuk main-main dan tidak berbahaya. Tapi ejekan verbal atau fisik tidak pernah baik-baik saja dan bukan cara yang sehat untuk menunjukkan kepada seseorang bahwa Kamu menyukainya. Beberapa orang mungkin menggoda orang lain untuk membuat diri mereka merasa lebih baik atau lebih berkuasa daripada orang lain. Orang lain mungkin menggoda seseorang karena orang itu berbeda dari orang lain. Terlepas dari alasan seseorang menggoda orang lain, ejekan dapat dengan mudah melewati batas menjadi intimidasi dan pelecehan jika dilakukan berulang-ulang. Menyentuh orang lain tanpa izin mereka, menggoda mereka secara verbal dan intimidasi tidak pernah baik-baik saja. Jika kamu diintimidasi atau dilecehkan, bicarakan dengan orang dewasa yang tepercaya. Jika orang dewasa pertama yang kamu beri tahu tidak melakukan apa-apa, beri tahu orang dewasa lain yang kamu percayai. Terus beri tahu orang dewasa yang Kamu percayai sampai Kamu mendapatkan bantuan.', 'Teasing.jpg', '-', 'HubunganSehat/KeselamatanDiri'),
(8, 4, 'Bullying: Cara Menolong Seseorang Dengan Aman', 'https://amaze.org/video/bullying-safely-help-someone/', 'Berurusan dengan pengganggu benar-benar tidak menyenangkan, dan mungkin sulit untuk mengetahui apa yang harus dilakukan ketika seseorang menggertak teman. Kamu tidak harus menjadi pahlawan super untuk mendukung teman yang ditindas. Menjadi seorang upstander saja bisa sangat membantu. Upstander adalah seseorang yang membela orang lain ketika mereka melihat bullying terjadi.  Ada empat cara berbeda untuk menjadi orang yang baik: menjadi teman, menyela si penindas, berbicara, dan memberi tahu seseorang. Pengganggu sering menargetkan orang yang mereka yakini sendirian dan tidak punya teman. Menjadi teman bagi orang yang ditindas membuat si penindas tahu bahwa korban tidak sendirian dan memiliki dukungan. Terkadang orang akan menggertak orang lain hanya untuk mendapatkan perhatian, jadi jika itu terjadi, Kamu dapat menyela mereka dengan membantu mengalihkan perhatian semua orang ke hal yang lebih positif. Jika menurut Kamu itu aman, Kamu dapat berbicara langsung dengan si penindas dan membuat mereka berhenti. Jika Kamu khawatir si penindas akan membalas Kamu, carilah orang dewasa terdekat yang dapat turun tangan dan beri tahu mereka apa yang terjadi. Membela diri sangatlah penting dalam membantu dengan cepat mengakhiri perilaku yang berkelanjutan, agresif, kasar, dan berbahaya. Kamu bisa menjadi orang yang lebih baik di mana saja—baik secara langsung atau online. Dan lagi, jika Kamu membutuhkan bantuan, jangan takut untuk bertanya kepada orang dewasa yang Kamu percayai.', 'help.jpg', 'Bersikap jahat kepada penindas mungkin membuatmu merasa baik dalam jangka pendek; namun, itu tidak menjamin bahwa bullying akan berhenti. Faktanya, bersikap jahat kepada seorang penindas mungkin hanya', 'Bullying/KeselamatanDiri'),
(9, 3, 'Merawat Tubuhmu selama Pubertas', 'https://amaze.org/video/puberty-taking-care-of-your-body-during-puberty/', 'Adalah fakta kehidupan bahwa tubuh, karena berbagai alasan, dapat memiliki bau yang kuat. Kamu mungkin lebih menyadari hal ini saat tubuh Kamu melewati masa pubertas—perubahan yang terjadi saat tubuh Kamu berubah dari anak-anak menjadi dewasa muda. Perubahan ini termasuk peningkatan produksi hormon, sekresi minyak tubuh dan pertumbuhan rambut tubuh. Perubahan inilah yang dapat menyebabkan seseorang mencium lebih banyak dari biasanya atau mengalami hal-hal, seperti jerawat. Karena semua efek perubahan ini pada tubuh, sangat penting untuk menciptakan dan mempraktikkan kebiasaan kebersihan yang baik, bahkan lebih dari yang mungkin Kamu miliki ketika Kamu masih muda. Mandi atau mencuci secara teratur, menggunakan deodoran secara konsisten, dan memastikan untuk mengenakan satu set pakaian baru setiap hari dapat membantu mengatasi bau yang kuat. Menggunakan parfum, cologne, atau semprotan tubuh mungkin merupakan cara yang baik untuk mencoba aroma baru pada tubuh juga. Pastikan untuk menggunakannya hanya setelah Kamu mandi dan hindari memakai terlalu banyak, karena terlalu banyak dapat membuat orang lain terlalu kuat, meskipun baunya enak. Jika Kamu memulai periode menstruasi sebagai bagian dari proses pubertas Kamu, pastikan untuk mengganti pembalut, tampon, cangkir dan/atau produk menstruasi lainnya secara tepat waktu juga sangat penting. Pembersihan wajah yang lembut setiap hari, bersama dengan berolahraga, minum banyak air bersih dan menjauhi junk food berlebihan (permen, soda/jus, keripik goreng, dll.) dapat membantu mengurangi kram menstruasi dan menjaga pori-pori bersih dari jerawat. Yang mengatakan, mungkin Kamu masih memerlukan bantuan profesional, jika jerawat tidak hilang dengan mudah. Untuk kasus jerawat khusus, ahli perawatan kulit, seperti dokter kulit, mungkin akan meresepkan krim atau perawatan lain yang lebih kuat daripada perawatan yang Kamu temukan di toko obat. Pubertas dapat menghasilkan banyak perasaan berbeda, termasuk heran, kagum, penasaran, dan tidak nyaman—bahkan kecemasan. Konon, perubahan pubertas dan perasaan tentang perubahan itu sangat normal, meski tidak selalu terasa enak saat itu terjadi. Ketika ketidakpastian muncul, hubungi teman sebaya dan orang dewasa yang tepercaya untuk mendapatkan dukungan dan strategi untuk memastikan Kamu selalu terlihat dan merasakan yang terbaik.', 'tubuh.jpg', 'Jerawat terjadi ketika seseorang memiliki sejumlah besar jerawat. Jerawat bisa berupa benjolan merah kecil, benjolan berisi nanah (whiteheads) atau pori-pori tersumbat oleh minyak yang mengeras dan ku', 'Pubertas/Kesehatan'),
(10, 3, 'Ditolak: Semua orang mengalaminya', 'https://amaze.org/video/personal-safety-self-harm-cutting/ ', 'Pernahkah Kamu memperhatikan seorang teman mengenakan lengan panjang di hari yang panas? Atau mungkin Kamu pernah melihat seseorang dengan banyak goresan kecil atau luka di kulitnya sepanjang waktu. Mungkin mereka mengatakan itu disebabkan oleh kucing atau alasan aneh lainnya. Itu bisa menjadi tkamu bahwa seseorang melukai tubuh mereka, kadang-kadang dalam bentuk yang disebut cutting. Ketika seseorang berulang kali melakukan cutting atau melukai tubuh mereka, mereka mungkin mencoba mengatasi perasaan atau masalah yang intens. Mereka mungkin mencoba mencari kelegaan dari atau mengendalikan perasaan marah, penolakan, kesedihan, kesepian, atau kehampaan yang sangat kuat. Jika seseorang memotong atau melukai diri sendiri dengan cara lain, mereka membutuhkan bantuan untuk mengatasi perasaan ini dengan cara yang lebih sehat. Ketika masalah utama yang dihadapi orang tersebut tidak diobati, orang tersebut mungkin mulai melukai diri sendiri lebih sering dan lebih parah untuk menemukan kelegaan.  Jika Kamu atau seseorang yang Kamu kenal memotong atau melukai diri sendiri, penting untuk berbicara dengan orang dewasa yang Kamu percayai untuk mendapatkan bantuan yang Kamu atau teman Kamu butuhkan dan layak dapatkan. Memberi tahu orang lain untuk pertama kalinya tentang memotong atau melukai diri sendiri bisa sangat sulit. Tetapi penting untuk menemukan cara yang lebih sehat untuk mengatasi perasaan yang menyebabkan menyakiti diri sendiri. Jika Kamu memiliki teman yang menurut Kamu mungkin akan memotong, beri tahu teman Kamu bahwa Kamu khawatir. Kamu dapat meyakinkan teman Kamu bahwa Kamu tidak akan menghakimi mereka dan bahwa mereka layak untuk merasa lebih baik. Tawarkan untuk membantu teman Kamu menemukan orang dewasa yang dapat diajak bicara, untuk mendapatkan bantuan.', 'sf.jpg', 'Cutting atau melukai diri sendiri bukanlah cara yang sehat untuk mengatasi atau mengelola perasaan seseorang, dan sangat penting bagi orang-orang untuk mendapatkan bantuan dengan penyebab yang mendasa', 'KesehatanMental/KeselamatanDiri'),
(11, 3, 'Kehamilan dan Reproduksi', 'https://amaze.org/video/pregnancy-reproduction-explained/', 'Kontrol kelahiran, atau kontrasepsi, adalah obat, alat kesehatan atau penghalang seperti kondom untuk menjaga sperma dan sel telur dari bersatu. Beberapa metode pengendalian kelahiran, seperti metode hormonal, bekerja untuk mencegah ovarium melepaskan sel telur atau ovum, sementara yang lain membantu menciptakan penghalang pada pembukaan serviks untuk mencegah sperma masuk ke dalam rahim untuk menemukan sel telur. Pantang, atau memilih untuk tidak melakukan atau menunda berhubungan seks, adalah bentuk pengendalian kelahiran yang paling efektif. Jika seseorang memilih untuk melakukan hubungan seks penis-vaginal, maka penggunaan kondom dan alat kontrasepsi lain secara bersamaan adalah perlindungan yang paling efektif karena metode kontrasepsi selain kondom internal atau eksternal tidak mengurangi risiko penyakit menular seksual (PMS). ). Pil KB harus diminum setiap hari pada waktu yang hampir bersamaan. Paket pil KB akan bertahan sebulan. Mereka sangat efektif untuk mencegah kehamilan yang tidak diinginkan jika dikonsumsi sesuai petunjuk. Beberapa metode pengendalian kelahiran, seperti Patch and Ring, dapat mencegah kehamilan selama berminggu-minggu. Seseorang perlu pergi ke penyedia layanan kesehatan atau klinik keluarga berencana untuk mendapatkan resep untuk metode pengendalian kelahiran ini. Banyak remaja dan dewasa muda yang melakukan hubungan seks penis-vaginal dan menggunakan pil, patch atau cincin juga menggunakan kondom untuk memberikan lapisan perlindungan tambahan terhadap kehamilan dan mengurangi risiko PMS. Depo-Provera, juga dikenal sebagai Suntikan, adalah kontrasepsi yang disuntikkan ke seseorang setiap 12 minggu dan memberikan perlindungan terhadap kehamilan selama waktu itu dengan mencegah ovulasi. Seperti metode hormonal lainnya dari pengendalian kelahiran, Shot melepaskan hormon ke dalam tubuh untuk mencegah ovarium melepaskan sel telur. Suntikan juga membuat lendir serviks lebih kental, membantu menjaga sperma agar tidak sampai ke sel telur. Menggunakan kontrasepsi reversibel jangka panjang, kadang-kadang disebut LARC, bersama dengan kondom adalah perlindungan paling efektif terhadap kehamilan yang tidak diinginkan dan PMS. LARC mencakup metode pengendalian kelahiran seperti suntikan kontrasepsi, implan kontrasepsi dan alat kontrasepsi (IUD). Masing-masing lebih dari 99 persen efektif mencegah kehamilan yang tidak direncanakan dan berlangsung lama. Implan kontrasepsi, kadang-kadang disebut Nexplanon, berukuran dan berbentuk seperti batang korek api. Implan melepaskan hormon ke dalam tubuh untuk mencegah kehamilan. Hormon tersebut mencegah ovarium melepaskan sel telur dan juga mengentalkan lendir serviks untuk menghentikan sperma masuk ke rahim untuk menemukan sel telur. Perawat atau dokter memasukkan implan ke lengan atas Kamu. Ini dapat memberikan perlindungan hingga tiga tahun terhadap kehamilan. IUD adalah sepotong kecil plastik fleksibel berbentuk seperti T. Penyedia layanan kesehatan memasukkan IUD ke dalam rahim. Beberapa IUD memiliki kawat tembaga, sementara yang lain melepaskan hormon ke dalam tubuh. Keduanya menyulitkan sperma untuk mendapatkan sel telur. IUD dapat bertahan selama bertahun-tahun tergantung yang mana yang dimasukkan seseorang. Beberapa bertahan hingga lima tahun dan beberapa hingga 12! Ketika seseorang siap untuk memiliki bayi, penyedia layanan kesehatan dapat dengan mudah melepas IUD, dan seseorang dapat hamil setelah itu. Sementara semua metode hormonal ini sangat efektif untuk mencegah kehamilan, tidak ada yang memberikan perlindungan terhadap PMS. Jadi penting juga untuk menggunakan kondom lateks saat berhubungan seks.', 'hamil.jpg', '-', 'Reproduksi/Kehamilan'),
(12, 2, 'Pencegahan Penyakit Menular Seksual di Luar Kondom', 'https://amaze.org/video/std-prevention-beyond-condoms/', 'PMS adalah penyakit, infeksi atau penyakit yang dapat ditularkan dari satu orang yang terinfeksi ke orang lain melalui kontak seksual—dari sentuhan seksual (genital-to-genital contact) hingga segala jenis hubungan seksual (oral, anal, atau penis-vaginal sex). Ada banyak PMS yang berbeda. Beberapa tidak terlalu serius. Orang lain bisa sangat serius. Banyak orang juga percaya bahwa mereka akan tahu kapan mereka memiliki PMS, padahal kenyataannya kebanyakan orang yang memiliki PMS tidak mengalami gejala apapun. Adalah umum bagi kaum muda untuk mendengar banyak mitos tentang PMS, jadi memiliki orang dewasa yang tepercaya dalam hidup mereka yang dapat mereka ajak bicara tentang topik ini adalah penting. Ada juga banyak stigma tentang memiliki PMS, meskipun cukup umum untuk memilikinya di beberapa titik dalam hidup Kamu. Meskipun kebanyakan orang tidak suka membicarakan PMS, penting bagi orang dewasa yang peduli untuk berbicara dengan remaja tentang penularan dan pencegahan PMS, semoga sebelum remaja mulai melakukan perilaku seksual dengan pasangan. Meskipun baik untuk menormalkan PMS, penting juga untuk menjelaskan kepada kaum muda tentang bagaimana PMS dapat memengaruhi mereka dan mengapa penting untuk mempraktikkan seks yang lebih aman. Sebelum remaja mulai melakukan perilaku seksual, mereka harus mengetahui bagaimana mereka dapat mengurangi risiko tertular PMS dengan mengurangi jumlah pasangan seksual mereka, melakukan tes sebelum melakukan aktivitas seksual, dan secara benar dan konsisten menggunakan penghalang lateks.  kondom dan bendungan gigi. Penelitian menunjukkan bahwa remaja yang orang tuanya berbicara dengan mereka tentang kondom sebelum remaja tersebut mulai berhubungan seks lebih cenderung menggunakan kondom pada hubungan pertama dan setelahnya. Ini juga sangat membantu bagi kaum muda untuk mengetahui cara melakukan tes setelah mereka mulai berhubungan seks. Tes dan pengobatan PMS ditawarkan melalui dokter keluarga Kamu atau di sebagian besar klinik keluarga berencana dan pusat kesehatan masyarakat. Tes STD sering melibatkan tes urin, tes darah sederhana atau usap mulut. Remaja harus memahami bahwa banyak PMS yang dapat diobati dengan obat-obatan yang diberikan oleh dokter, tetapi ada beberapa PMS yang tidak dapat disembuhkan. Membicarakan PMS dengan orang-orang muda dalam hidup Kamu membuat mereka tahu bahwa mereka tidak sendirian dan bahwa mereka dapat datang kepada orang tua atau wali mereka ketika mereka memiliki pertanyaan atau membutuhkan dukungan.', 'std.jpg', '-	Satu-satunya cara efektif 100 persen untuk menghindari PMS adalah dengan tidak melakukan sentuhan seksual di bawah pinggang, seperti menggosok tubuh tanpa pakaian, seks vagina-penis, seks oral dan s', 'Kesehatan/Kontrasepsi'),
(13, 2, 'Tips Untuk Seks Aman Dan Pencegahan Kehamilan', 'https://amaze.org/video/pregnancy-reproduction-safer-sex-pregnancy-prevention/', 'Begitu Kamu mulai melewati masa pubertas, Kamu bisa hamil atau membuat seseorang hamil, itulah mengapa penting untuk mengetahui berbagai cara untuk mencegah kehamilan. Pantang, atau memilih untuk tidak melakukan atau menunda berhubungan seks, adalah bentuk pengendalian kelahiran yang paling efektif. Ada juga banyak bentuk kontrasepsi yang aman dan efektif yang digunakan orang, jika mereka memutuskan untuk berhubungan seks. Ketika orang menggunakan alat kontrasepsi, atau kontrasepsi, mereka menggunakan obat, alat medis atau penghalang, seperti kondom, untuk mencegah sperma dan sel telur bersatu. Kondom adalah salah satu alat kontrasepsi yang paling banyak digunakan. Kondom pas di atas penis yang ereksi dan menciptakan penghalang yang mencegah sperma bertemu sel telur. Penghalang ini juga membantu mengurangi risiko penyakit menular seksual (PMS). Kondom tersedia di toko obat atau toko kelontong tanpa resep dokter. Seseorang dapat membeli kondom tidak peduli usia mereka. Beberapa alat kontrasepsi, seperti Pil, Patch, dan Suntikan, adalah obat-obatan yang mencegah ovarium melepaskan sel telur atau ovum. Jenis pengendalian kelahiran ini mengharuskan seseorang untuk menemui penyedia layanan kesehatan atau dokter dan mendapatkan resep. Cara-cara tersebut sangat efektif untuk mencegah kehamilan yang tidak diinginkan tetapi bukan penyakit menular seksual (PMS), oleh karena itu penggunaan kondom dengan salah satu cara tersebut merupakan cara yang efektif untuk mencegah kehamilan dan PMS.', 'ss.jpg', 'Ada banyak mitos di luar sana tentang apakah, bagaimana dan kapan seseorang bisa atau tidak bisa hamil. Yang benar adalah, begitu Kamu mulai melewati masa pubertas, ada kemungkinan untuk hamil atau ', 'Reproduksi'),
(14, 2, 'Consent, Kekerasan Seksual dan Pelecehan Seksual, Apakah Perbedaannya?', 'https://amaze.org/video/personal-safety-what-is-sexual-harassment/', 'Kekerasan seksual termasuk memaksa atau menekan seseorang untuk melakukan hubungan seksual (pemerkosaan), melakukan hubungan seksual atau terlibat dalam perilaku seksual lainnya dengan orang tua, anak, saudara, cucu atau anggota keluarga dekat lainnya (inses) atau perilaku seksual antara orang dewasa dan orang muda yang terlalu muda untuk menyetujui perilaku ini (penganiayaan anak atau pelecehan seksual). Pelecehan seksual bisa terjadi pada siapa saja, dan itu ilegal. Serangan seksual jauh lebih umum daripada yang kita pikirkan, dan itu tidak pernah baik-baik saja, bahkan jika orang yang melakukan penyerangan itu adalah seseorang yang dikenal atau kerabatnya. Penting untuk diingat bahwa penyerangan seksual tidak pernah menjadi kesalahan orang yang diserang atau dilecehkan, bahkan jika orang yang melakukan penyerangan atau sentuhan tersebut mengatakan bahwa itu adalah kesalahan anak tersebut. Apa yang dikenakan seseorang atau jika mereka telah menggunakan obat-obatan atau alkohol tidak menjadikan penyerangan seksual sebagai kesalahan orang yang diserang. Serangan seksual, apa pun situasinya, tidak pernah baik-baik saja. Kadang-kadang seseorang mungkin merasa bahwa kekerasan seksual adalah kesalahan mereka karena sentuhan itu terasa menyenangkan, tetapi kekerasan seksual tidak pernah menjadi kesalahan remaja tersebut. Persetujuan seksual adalah ketika orang setuju untuk terlibat dalam perilaku seksual tertentu. Mereka dapat mengungkapkan persetujuan mereka dengan mengatakan, \"Ya, tidak apa-apa dengan saya.\". Hanya karena seseorang tidak mengatakan \"tidak\", itu tidak berarti persetujuan telah diberikan. Meminta persetujuan dan memberikan persetujuan untuk setiap perilaku seksual sangat penting. Kamu memiliki hak untuk mengatakan \"tidak\" pada perilaku apa pun yang tidak ingin Kamu lakukan pada titik mana pun, karena alasan apa pun, dan pasangan Kamu harus menghormati keputusan Kamu. Pasangan Kamu juga memiliki hak untuk mengatakan \"tidak\" pada perilaku apa pun kapan pun, dengan alasan apa pun, dan Kamu harus menghormati keputusan mereka. Persetujuan harus diberikan dengan sukarela—jika seseorang dipaksa untuk menyetujui jenis perilaku apa pun, itu bukan persetujuan. Pelecehan seksual adalah jenis intimidasi yang dimaksudkan untuk menyakiti atau mengintimidasi seseorang. Ini dapat mencakup pelecehan verbal, seperti lelucon seksual atau komentar seksual, serta pelecehan fisik dalam bentuk gerakan seksual, sentuhan seksual atau tindakan seksual terhadap atau tentang orang lain. Pelecehan seksual juga dapat mencakup meminta seseorang untuk membagikan gambar seksual, mengirim gambar seksual yang tidak diinginkan kepada seseorang atau memulai rumor seksual tentang seseorang (secara langsung, melalui teks, online atau secara tertulis di tempat umum, seperti kamar mandi). Pelecehan seksual tidak pernah baik-baik saja, dan penting untuk memahami apa itu pelecehan seksual agar perilaku Kamu tidak menyakiti orang lain. Penting juga untuk diingat bahwa ada konsekuensi untuk berpartisipasi dalam jenis perilaku ini.', 'sa.jpg', 'Pasti membingungkan untuk mengetahui kapan Kamu bisa dan tidak bisa mencium seseorang yang Kamu sukai. Satu-satunya cara untuk mengetahui dengan pasti apakah Kamu dapat mencium pasangan Kamu atau terl', 'KeselamatanDiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_soal`
--

CREATE TABLE `judul_soal` (
  `id_judul` int(11) NOT NULL,
  `id_role` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `judul_soal`
--

INSERT INTO `judul_soal` (`id_judul`, `id_role`, `judul`, `deskripsi`, `label`) VALUES
(101, 3, 'DEPRESI', 'Deskripsi Tes Depresi', 'DEPRESI AKUT/DEPRESI MODERAT/DEPRESI MINOR/TIDAK DEPRESI'),
(102, 3, 'Gangguan Kecemasan', 'Deskripsi Tes Gangguan Kecemasan', 'Gangguan Kecemasan Akut/Gangguan Kecemasan Moderat/Gangguan Kecemasan Minor/Tidak Memiliki Gangguan '),
(103, 3, 'BIPOLAR', 'Deskripsi Tes Bipolar', 'Bipolar Akut/Bipolar Moderat/Bipolar Minor/Tidak Bipolar'),
(104, 2, 'PTSD', 'Deskripsi Tes PTSD', 'PTSD Akut/PTSD Moderat/PTSD Minor/Tidak PTSD'),
(105, 2, 'DEPRESI POSTPARTUM', 'Deskripsi Tes Postpartum', 'Depresi Postpartum Akut/Depresi Postpartum Moderat/Depresi Postpartum Minor/Tidak Depresi Postpartum'),
(106, 2, 'DIMENSIA', 'Deskripsi Tes Dimensia', ' Dimensia Akut/Dimensia Moderat/Dimensia Minor/Tidak Dimensia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `id_role` int(1) NOT NULL,
  `judul` text NOT NULL,
  `source` text NOT NULL,
  `materi` text NOT NULL,
  `gambar` text NOT NULL,
  `fakta` text NOT NULL,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `id_role`, `judul`, `source`, `materi`, `gambar`, `fakta`, `tag`) VALUES
(22, 4, 'Apa Itu Bullying', 'https://www.youtube.com/watch?v=KQZ9hDDz704', 'AMAZE adalah kolaborasi antara pakar di bidang pendidikan seks Advokat untuk Pemuda, Jawaban, dan Kesehatan Teknologi Remaja untuk menciptakan sumber daya pendidikan seks online yang menarik dan sesuai usia', 'Bully.jpg', 'Orang-orang Membully orang lain karena berbagai alasan. Seringkali mereka melakukannya karena mereka merasa tidak aman, dan mereka merendahkan orang lain untuk mencoba dan merasa lebih baik tentang diri mereka sendiri.', 'Bullying/KeselamatanDiri'),
(23, 4, 'Apa yang harus kuketahui tentang gender?', 'https://www.youtube.com/watch?v=qHPNDg6YOrI', 'AMAZE adalah kolaborasi antara pakar di bidang pendidikan seks Advokat untuk Pemuda, Jawaban, dan Kesehatan Teknologi Remaja untuk menciptakan sumber daya pendidikan seks online yang menarik dan sesuai usia.', 'gender.jpg', 'Orang-orang Membully orang lain karena berbagai alasan. Seringkali mereka melakukannya karena mereka merasa tidak aman, dan mereka merendahkan orang lain untuk mencoba dan merasa lebih baik tentang diri mereka sendiri.', 'Keluarga'),
(24, 4, 'Bertarung Adil: Bagaimana cara menyelesaikan masalah?', 'https://www.youtube.com/watch?v=gu8gSuF_lvw', 'AMAZE adalah kolaborasi antara pakar di bidang pendidikan seks Advokat untuk Pemuda, Jawaban, dan Kesehatan Teknologi Remaja untuk menciptakan sumber daya pendidikan seks online yang menarik dan sesuai usia.', 'Conflict.jpg', '-	Dibutuhkan waktu dan latihan bagi dua orang untuk belajar berkomunikasi. Ini sering kali merupakan bagian tersulit dari suatu hubungan, tetapi dapat menjadi perekat yang membuat orang tetap bersama karena memungkinkan hubungan untuk terus tumbuh melalui rasa saling menghormati.', 'HubunganSehat'),
(25, 4, 'Apa yang harus kuketahui tentang gender?', 'https://www.youtube.com/watch?v=HxySrSbSY7o', 'AMAZE adalah kolaborasi antara pakar di bidang pendidikan seks Advokat untuk Pemuda, Jawaban, dan Kesehatan Teknologi Remaja untuk menciptakan sumber daya pendidikan seks online yang menarik dan sesuai usia.', 'Video.jpg', 'Kamu dapat melindungi aplikasi dan info pribadimu di dalam. Jika Kamu tidak yakin info apa yang dapat diakses aplikasimu, Kamu dapat meninjau izin aplikasi melalui pengaturan privasi ponsel Kamu. Dalam pengaturan, Kamu juga dapat memastikan pengaturan lokasi dimatikan dan Jangan ragu untuk meminta bantuan orang dewasa untuk melakukan ini!', 'KeselamatanDiri'),
(26, 3, 'Pubertas Pada Perempuan?', 'https://www.youtube.com/watch?v=Tr8ZSH3eghs&t=43s', 'Dalam pertunjukan animasi unik dua kali seminggu yang unik ini, kami menjelajahi jalur fisik, mental, dan emosional menuju kesehatan. Dengan penekanan pada pendidikan, acara ini membahas tren terbaru dan praktik kesehatan yang sudah berlangsung lama — mulai dari kemanjuran eksperimen syukur hingga pentingnya sinar matahari dan vitamin D.', 'pg.jpg', '-', 'Pubertas'),
(27, 3, 'Pubertas pada laki-laki?', 'https://www.youtube.com/watch?v=Yvw7QGytgNQ', 'Tentang Channel Youtube : Dalam pertunjukan animasi unik dua kali seminggu yang unik ini, kami menjelajahi jalur fisik, mental, dan emosional menuju kesehatan. Dengan penekanan pada pendidikan, acara ini membahas tren terbaru dan praktik kesehatan yang sudah berlangsung lama — mulai dari kemanjuran eksperimen syukur hingga pentingnya sinar matahari dan vitamin D.', 'pb.jpg', '-', 'Pubertas'),
(28, 3, 'Hubungan Tidak Sehat', 'https://www.youtube.com/watch?v=wPwck0EQkgs', 'Dalam pertunjukan animasi unik dua kali seminggu yang unik ini, kami menjelajahi jalur fisik, mental, dan emosional menuju kesehatan. Dengan penekanan pada pendidikan, acara ini membahas tren terbaru dan praktik kesehatan yang sudah berlangsung lama — mulai dari kemanjuran eksperimen syukur hingga pentingnya sinar matahari dan vitamin D.', 'toxic.jpg', '-', 'HubunganSehat/KeselamatanDiri'),
(29, 2, 'Mengontrol Hormon dan Kesuburan', 'https://www.youtube.com/watch?v=fOfFr9Q0WWA&t=100sI', 'Hai - kami membuat video pelajaran untuk sains dan matematika GCSE. Pelajaran memberikan gambaran singkat tentang segala sesuatu yang perlu Kamu ketahui untuk ujian Kamu.', 'fh.jpg', '-', 'Reproduksi'),
(30, 2, 'Kontrasepsi', 'https://www.youtube.com/watch?v=kMY-v0F6bX0', 'Hai - kami membuat video pelajaran untuk sains dan matematika GCSE. Pelajaran memberikan gambaran singkat tentang segala sesuatu yang perlu Kamu ketahui untuk ujian Kamu.', 'contra.jpg', '-', 'Kontrasepsi/Reproduksi'),
(31, 2, 'Aborsi', 'https://www.youtube.com/watch?v=uWD5FGznMHg', 'Kami menghadirkan wawancara, video animasi, profil, dan banyak lagi - semuanya berfokus pada kekuatan dan kekuatan kolektif kaum muda. Kunjungi Advocatesforyouth.org untuk mempelajari lebih lanjut tentang aktivis, program, dan pekerjaan pemuda kami!', 'abo.jpg', '-', 'Reproduksi/Aborsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(3) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `hasil` int(3) NOT NULL,
  `tgl_tes` date NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `uname`, `hasil`, `tgl_tes`, `judul`) VALUES
(7, 'cici', 25, '2021-06-20', 'DEPRESI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(1) NOT NULL,
  `nama_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'dewasa'),
(3, 'remaja'),
(4, 'anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_judul` int(3) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_judul`, `id_soal`, `pertanyaan`) VALUES
(57, 155, 'test'),
(57, 156, 'tast'),
(58, 157, 'hehe eheh'),
(64, 162, 'terakhir nyoba'),
(66, 164, 'soal 1'),
(66, 165, 'soal 2'),
(67, 166, 'coba 1'),
(68, 167, 'apa'),
(68, 168, 'adpa'),
(69, 169, 'f'),
(70, 170, 'tess'),
(74, 174, 'tes2'),
(77, 175, 'apaa'),
(77, 176, 'semangat'),
(81, 177, 'teaaaas'),
(81, 178, ''),
(82, 179, 'oke'),
(82, 180, ''),
(83, 181, 'okei'),
(83, 182, 'aaaaaaa'),
(83, 183, 'i'),
(83, 184, ''),
(83, 185, 'tess'),
(84, 186, 'apasi'),
(85, 187, 'oke'),
(88, 188, 'males'),
(89, 189, 'gatau'),
(90, 190, 'kk'),
(91, 191, 'aaaaada'),
(93, 192, 'soal 1'),
(93, 193, 'soal 2'),
(95, 194, 'Tidak punya hasrat untuk melakukan'),
(96, 195, 'apaa ya'),
(97, 196, 'ahah'),
(98, 197, 'hj'),
(98, 198, 'hj'),
(98, 199, 'uii hyh'),
(99, 200, 'h'),
(99, 201, 'f g'),
(100, 206, 'kamu'),
(101, 207, 'Tidak punya hasrat untuk melakukan kegiatan'),
(101, 208, 'Merasa sedih dan tidak punya harapan'),
(101, 209, 'Kesulitan tidur atau tidur berlebihan'),
(101, 210, 'Merasa kelelahan'),
(101, 211, 'Tidak ada hasrat untuk makan atau makan berlebihan'),
(101, 212, 'Merasa seperti seseorang yang gagal'),
(101, 213, 'Kesulitan untuk berkonsentrasi'),
(102, 214, 'Sering merasa resah'),
(102, 215, 'Tidak dapat menghentikan kecemasan'),
(102, 216, 'Terlalu khawatir terhadap banyak hal di waktu yang bersamaan'),
(102, 217, 'Kesulitan untuk rileks'),
(102, 218, 'Merasa sangat gelisah hingga tidak bisa untuk diam dengan tenang'),
(102, 219, 'Menjadi lebih mudah kesal atau marah'),
(102, 220, 'Merasa takut apabila sesuatu yang buruk akan terjadi'),
(103, 221, 'Sering merasa sangat bahagia dan hiperaktif hingga orang lain menyadarinya atau mendapatkan masalah'),
(103, 222, 'Sering merasa sangat kesal hingga berteriak dan berkelahi dengan orang lain'),
(103, 223, 'Sering merasa lebih percaya diri '),
(103, 224, 'Sering kekurangan tidur dan cenderung tidak ingin'),
(103, 225, 'Menjadi lebih cerewet daripada sebelumnya'),
(103, 226, 'Berpikir terlalu cepat atau tidak bisa menenangkan pikiran'),
(103, 227, 'Mudah untuk teralihkan oleh hal-hal disekitar'),
(103, 228, 'Memiliki lebih banyak energi dari biasanya'),
(103, 229, 'Menjadi lebih sosial daripada sebelumnya'),
(103, 230, 'Melakukan hal yang beresiko hingga melukai diri sendiri atau orang lain'),
(103, 231, 'Menghabiskan uang atau membuat masalah dengan keluarga'),
(104, 232, 'Sering mendapat mimpi buruk atau pikiran tentang kejadian yang traumatis'),
(104, 233, 'Berusaha untuk menghindari situasi yang mengingatkan pada kejadian yang traumatis'),
(104, 234, 'Selalu waspada atau sangat mudah untuk kaget'),
(104, 235, 'Merasa hampa dan mati rasa dari lingkungan dan orang-orang'),
(104, 236, 'Merasa bersalah dan tidak bisa berhenti menyalahkan diri atau orang lain atas kejadian yang traumatis'),
(105, 237, 'Saya mampu untuk tertawa dan melihat sisi lucu dari suatu kejadian'),
(105, 238, 'Saya menantikan untuk menikmati hal-hal baru'),
(105, 239, 'Saya menyalahkan diri sendiri apabila terjadi sesuatu'),
(105, 240, 'Saya merasa khawatir atau gelisah tanpa suatu alasan'),
(105, 241, 'Saya merasa takut atau panik tanpa suatu alasan'),
(105, 242, 'Saya merasa tertekan oleh banyak hal'),
(105, 243, 'Saya merasa sangat tidak bahagia hingga sulit tidur'),
(105, 244, 'Saya merasa sengsara'),
(105, 245, 'Saya merasa sangat sengsara hingga menangis'),
(105, 246, 'Hasrat untuk melukai diri sendiri terlintas dalam pikiran'),
(106, 247, 'Saya sering melupakan informasi yang baru saya dapat '),
(106, 248, 'Saya harus menanyakan tentang informasi yang sama berulang kali'),
(106, 249, 'Saya kesulitan untuk mengikuti sebuah intruksi'),
(106, 250, 'Saya kesulitan untuk mengingat jadwal pembayaran atau menbayar cicilan tepat waktu'),
(106, 251, 'Saya mengalami masalah visual, seperti kesulitan membaca'),
(106, 252, 'Saya merasa kebingungan di tengah pembicaraan sehingga saya harus berhenti'),
(106, 253, 'Saya kesulitan untuk mengingat kata, tanggal, atau kejadian'),
(106, 254, 'Saya kehilangan barang atau merasa seseorang mengambilnya'),
(106, 255, 'Saya kesulitan untuk mengingat kapan membersihkan diri sendiri'),
(106, 256, 'Orang lain sadar bahwa saya menjadi lebih mudah khawatir dan kesal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `uname` varchar(20) NOT NULL,
  `avatar` text DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`uname`, `avatar`, `email`, `password`, `tgl_lahir`, `id_role`) VALUES
('admin', 'obama.jpg', 'admin@ymail.com', 'admin', '1999-09-09', 1),
('cici', 'cici.jpg', 'cici@gmail.com', 'cici', '2005-06-18', 3),
('giri', '', 'giri@gmail.com', 'giri', '2001-06-04', 2),
('zii', 'zii.jpeg', 'zii@gmail.com', 'zii', '2012-05-05', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `judul_soal`
--
ALTER TABLE `judul_soal`
  ADD PRIMARY KEY (`id_judul`),
  ADD UNIQUE KEY `judul` (`judul`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `judul_soal`
--
ALTER TABLE `judul_soal`
  MODIFY `id_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
