-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 06:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informasi perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `sinopsis_buku` text NOT NULL,
  `tanggal_diterbitkan` date NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `penulis`, `sinopsis_buku`, `tanggal_diterbitkan`, `harga`) VALUES
(1, 'Tenggelamnya Kapal Van Der Wijck', 'Hamka', 'Zainuddin, seorang pemuda yang berdarah Minang dari ayah dan berdarah Bugis dari ibu–dengan hati penuh harapan dan angan akan sambutan gembira dari keluarga ayahnya–dari tanah kelahirannya, Mengkasar, pergi ke Padang Panjang, kampung halaman sang ayah. Namun, apa yang diinginkannya tidak terjadi. Di kampung halaman dan oleh keluarganya dia dianggap orang asing. Ketidaknyamanan hidup di kampung halamannya terobati karena perkenalannya dengan Hayati. Mereka saling jatuh cinta dalam keikhlasan dan kesucian jiwa. Tenggelamnya Kapal Van Der Wijk merupakan salah satu novel yang cukup populer, saking populernya novel sampai dibuatkan sebuah film dengan judul yang sama dan hasilnya juga cukup banyak penikmat yang semakin suka dengan cerita tersebut. Novel yang ditulis oleh Abdul Malik Karim Amrullah ini berkisah tentang persoalan adat yang berlaku di daerah Minangkabau (Sumatera Barat). Selain masalah adat, dalam novel ini juga digambarkan tentang adanya diskriminasi yang terjadi di masyarakat Minangkabau pada waktu ', '2017-12-04', 50000),
(2, 'Sisi Tergelap Surga', 'Brian Khrisna', 'Jakarta kerap menjadi pelabuhan bagi mereka yang datang membawa sekoper harapan. Mereka yang siap bertaruh dengan nasibnya sendiri-sendiri. Namun, kota ini selalu mampu melumat habis harapan dan menukarnya dengan keputusasaan. Pemulung, pengamen, pramuria yang menjajakan tubuh agar anaknya bisa makan, pemimpin-pemimpin kecil yang culas, lelaki tua di balik kostum badut ayam, pencuri motor yang ingin membeli obat untuk ibunya, remaja yang melumuri tubuh dengan cat perak, hingga mereka yang bergelut di terminal setelah terpaksa merelakan impiannya habis digerus kejinya ibu kota. Di Jakarta, semua orang dipaksa bergelut dan bertempur demi bisa hidup dari hari ke hari. Dan di kampung inilah semua itu dimulai. Sebuah cerita tentang kehidupan orang-orang yang hidup di sisi tergelap surga kota bernama Jakarta...\r\n\r\nSelling Point:\r\nDitulis Brian Khrisna, dengan jumlah follower 361K di Twitter. Buku-buku Brian Khrisna sebelumnya selalu menjadi bestseller di Gramedia Stores.\r\n\r\nDari Penulis:\r\n25 tahun hidup sebagai anak penjual nasi di pinggir jalan membuatku akrab dengan hal-hal yang jarang sekali diketahui orang. Tentang pengemis yang memiliki penghasilan lebih besar dari UMR ibu kota, permainan alih kuasa dan perizinan jualan dengan berbagai pihak, hingga tentang pergaulan dan geliat kehidupan mereka yang hidup dari hari ke hari tanpa jaminan masa depan yang pasti. Oleh sebab itu, menulis buku ini rasa-rasanya membawaku kembali pada nostalgia, tentang kehidupan yang rumit tetapi sebenarnya dialami oleh sebagian dari kita.\r\n\r\nBuku ini kubuat apa adanya, menggambarkan apa yang pernah kulihat, beberapa yang pernah kualami, dan pengalaman-pengalaman teman seperjuangan yang sekarang sudah entah di mana. Kuharap buku ini bisa menjadi sebuah jendela bagi kita untuk melihat kehidupan yang lain namun dekat. Sebuah cerita fiksi tentang bagaimana hebatnya kemampuan manusia untuk tetap bertahan hidup, apa pun situasinya.\r\n\r\nBuku fiksi ini aku tulis jauh berbeda dengan semua buku novel yang pernah kutulis sebelumnya Kalian juga bisa menemukan novelku yang lain di toko buku kesayangan kalian, antara lain: The Matchbreaker (2023), 23:59 (2023), Parable (2021), Museum of Broken Heart (2020), Kudasai (2019), This is Why I Need You (2019), The Book of Almost (2018), Merayakan Kehilangan (2016)', '2023-12-13', 79200),
(3, 'The Stranger In The Lifeboat', 'Mitch Albom', 'Apa yang akan terjadi apabila kita berseru memohon pertolongan Tuhan dan Tuhan benar-benar muncul? Sembilan penumpang berhasil selamat dari kapal pesiar Galaxy yang meledak lalu tenggelam. Di sebuah sekoci mereka terkatung-katung dan berjuang bertahan hidup. Sementara air minum, makanan, dan harapan semakin menyusut, di hari keempat mereka menemukan seorang laki-laki terapung-apung di tengah ombak dan menariknya ke sekoci. Orang itu mengaku sebagai “Tuhan”. Dan dia akan dapat menyelamatkan mereka jika mereka semua memercayainya. Mitch Albom telah menulis tentang surga dalam The Five People You Meet in Heaven (Meniti Bianglala), The First Phone Call from Heaven (Telepon Pertama dari Surga), dan The Next Person You Meet in Heaven (Orang Berikut yang Kaujumpai di Surga). Kini, untuk pertama kali dalam novelnya dia merenungkan, apa yang akan kita lakukan jika, sesudah kita memohon-mohon pertolongan-Nya, Tuhan benar-benar muncul di hadapan kita?\r\n\r\nProfil Penulis:\r\nMitch Albom adalah seorang penulis, jurnalis, penulis skenario, dramawan, penyiar, dan musisi yang terkenal secara internasional. Dia menulis tujuh buku terlaris New York Times. Karya-karyanya secara keseluruhan telah terjual lebih dari 40 juta eksemplar di seluruh dunia, telah diterbitkan di 49 negara dan dalam 47 bahasa. Karya-karyanya telah dibuat menjadi film televisi pemenang Emmy Award dan diakui oleh para kritikus. Albom mengurus sembilan badan amalnya di bawah naungan organisasinya SAY Detroit. Dia juga mengelola Panti Asuhan Have Faith Haiti di Port-au-Prince, Haiti, yang dikunjunginya setiap bulan. Dia tinggal di Michigan bersama istrinya, Janine.', '2023-09-27', 71200),
(4, 'Lima Penyintas (Five Survive)', 'Holly Jackson', 'Delapan jam. Enam sahabat. Satu penembak... Red dan teman-temannya sedang dalam perjalanan darat untuk Liburan Musim Semi. Sayangnya, ban RV yang mereka kendarai mendadak bocor di tengah antah-berantah. Tanpa sinyal, tanpa bantuan. Anehnya, satu per satu ban RV pecah ditembak, membuat mereka tersadar: ini bukan kecelakaan. Ada seorang penembak di luar sana, bersembunyi dalam kegelapan mengintai mereka. Seseorang yang tahu identitas mereka dan memaksa keenam sahabat itu mengakui rahasia masing-masing—kalau tidak mau mati tertembak.\r\n\r\nDalam RV yang sempit dan klaustrofobik, Red dan teman-temannya yang ketakutan berusaha terbebas dari teror sang penembak. Dalam kondisi semakin tertekan, mereka terpaksa mengakui rahasia tergelap mereka dan salah satu di antara mereka tidak akan selamat melewati malam itu.\r\n\r\nProlog:\r\nDI SANA lalu menghilang. Merah lalu gelap. Sesaat ada, sesaat lenyap. Wajahnya terpantul di kaca. Menghilang dalam cahaya lampu yang mendekat, lalu muncul lagi dalam kegelapan di luar. Menghilang lagi. Kaca jendela menyimpan pantulan wajahnya. Bagus, jendela itu boleh menyimpannya. Tetapi tidak, jendela itu ternyata juga tidak menginginkannya.\r\n\r\nPantulan Red membalas tatapannya, namun kaca jendela dan kegelapan itu tidak memantulkannya dengan jelas, detail-detailnya buram. Fitur-fitur utama dirinya ada di sana: kilau kulitnya yang terlalu pucat dan sepasang mata biru gelap yang lebar, yang tidak dimiliki dirinya. Kalian sangat mirip, begitu yang sering ia dengar, lebih sering daripada yang ia inginkan. Sekarang ia bahkan tak peduli saat mendengarnya, apalagi memikirkannya. Jadi, Red berpaling dari wajahnya, wajah mereka, mengabaikan keduanya. Tetapi, lebih sulit mengabaikan sesuatu saat kau benar-benar mencobanya.\r\n\r\nProfil Penulis:\r\nHolly Jackson adalah penulis serial terlaris New York Times, A Good Girl’s Guide to Murder, yang terjual jutaan eksemplar di seluruh dunia. Dia lulusan University of Nottingham, tempatnya belajar linguistik sastra dan penulisan kreatif, dengan gelar master Sastra Inggris. Dia senang bermain video game dan menonton film dokumenter tentang kejahatan sehingga bisa berpura-pura menjadi detektif. Dia tinggal di London.', '2024-08-02', 87200),
(5, 'Misteri Bilik Korek Api', 'Ruwi Meita', 'Sunday, gadis berdarah Ambon yang tak pernah melihat Ambon, mendedikasikan hidupnya untuk membantu dan mengurus anak-anak panti asuhan tempat dia juga diasuh. Semua anak menyukainya dan menjadi sahabatnya, kecuali Emola—yang juga seorang gadis Ambon, tetapi berperilaku misterius dengan masa lalu yang gelap.\r\n\r\nSejak mereka pindah ke panti asuhan baru dan menemukan sebuah bilik tersembunyi yang dipenuhi dengan korek api, perilaku Emola menjadi makin misterius dan aneh. Satu per satu anak-anak panti asuhan pun mengalami kecelakaan yang janggal.\r\n\r\nApakah Emola adalah penyebab semua kejadian ini? Ataukah ada kekuatan jahat lain yang mengintai dari balik bayangan?\r\n\r\nProlog:\r\n“Kamu pasti senang sekali hari ini, seperti burung kecil yang terbang untuk pertama kali. Tapi ingat, kamu bisa jatuh,” kata Bu Nasti. Perempuan bertubuh gemuk dengan wajah kotak itu memakai setelan hitam yang terlalu sempit. Meski warnanya sudah kusam, setelan itu mulus tanpa kerutan. Dia jarang terlihat memakai baju santai. Entah apakah dia hanya punya setelan itu atau karena dia tidak ingin terlihat jelek. Aku selalu membayangkan dia tidur memakai setelan itu. Dia mungkin tidak bergerak seinci pun saat tidur atau dia tidur sambil berdiri sehingga saat bangun setelah itu tidak lecek.\r\n\r\n“Kalau jadi kamu, aku pasti takut,” bisiknya. Bu Nasti menyipitkan matanya sembari menaikkan dagunya. Bibirnya yang tipis melengkung, nyaris seperti menyeringai. Siapa menduga dari bibir tipis itu selalu keluar suara yang terdengar melengking. Dalam kondisi apapun nadanya selalu meninggi.\r\n\r\nAku terlalu malas mengomentarinya. Tanganku sibuk mengepak pakaian-pakaian ke dalam tas. Selama beberapa hari ini aku membantu anak-anak menata barang mereka sehingga tidak sempat menata barangku sendiri. Aku melirik salib yang terbuat dari daun palem di atas meja. Cika yang membuatnya tiga hari lalu, sekarang salib palem itu sudah mulai menguning. Katanya daun palem ampuh mengusir penyihir. Sebelumnya dia juga membuat salib dari batang kayu manis. Benda-benda itu dipercaya bisa mengusir penyihir. Tapi Bu Nasti bukan penyihir. Dia lebih parah dari penyihir. Dia hanya kesepian.\r\n\r\nSelling Point:\r\nBuku ini dalam proses adaptasi untuk menjadi sebuah film. Merupakan penulis dari buku bestseller Rumah Lebah. Narasinya diperkaya dengan dialek Ambon yang memberi kesan autentik dan menambah pengalaman pembaca dengan bahasa yang hidup dan jarang digunakan dalam novel umum.', '2024-12-11', 65000),
(6, 'Dua Dini Hari', 'Chandra Bientang', 'Tiga anak jalanan ditemukan tewas,tergantung di pinggir flyover kawasan Jatinegara. Satu mayat lagi menyusul, kali ini terlilit kabel tiang listrik. Penyelidikan dimulai dengan enggan,para polisi bertindak meski jauh dari kata maksimal.\r\n\r\nPemikiran semua orang sama: Mereka hanya gelandangan, lebih baik disingkirkan.\r\nSeolah-olah ada yang bertekad membersihkan jalanan, mengurangi masalah pelik kota.\r\n\r\nNamun, benarkah anak-anak itu pantas mati? Jika ya, dengan cara seperti itukah mereka layak dilenyapkan?\r\n\r\nDan, siapakah psikopat yang melakukan semua kegilaan ini?\r\n', '2024-11-15', 69000),
(7, 'Novel Cantik Itu Luka', 'Eka Kurniawan', 'Hidup di era kolonialisme bagi para wanita dianggap sudah setara seperti hidup di neraka. Terutama bagi para wanita berparas cantik yang menjadi incaran tentara penjajah untuk melampiaskan hasrat mereka. Itu lah takdir miris yang dilalui Dewi Ayu, demi menyelamatkan hidupnya sendiri Dewi harus menerima paksaan menjadi pelacur bagi tentara Belanda dan Jepang selama masa kedudukan mereka di Indonesia.\r\n\r\nKecantikan Dewi tidak hanya terkenal dikalangan para penjajah saja, seluruh desa pun mengakui pesona parasnya itu. Namun bagi Dewi, kecantikannya ini seperti kutukan, kutukan yang membuat hidupnya sengsara, dan kutukan yang mengancam takdir keempat anak perempuannya yang ikut mewarisi genetik cantiknya.\r\n\r\nTapi tidak dengan satu anak terakhir Dewi, si Cantik, yang lahir dengan kondisi buruk rupa. Tak lama setelah mendatangkan Cantik ke dunia, Dewi harus berpulang. Tapi di satu sore, dua puluh satu tahun kemudian, Dewi kembali, bangkit dari kuburannya. Kebangkitannya menguak kutukan dan tragedi keluarga.\r\n\r\nBagaimana takdir yang akan menghampiri si Cantik? Apa yang membuat Dewi harus kembali ke dunia bak neraka ini? Ungkap rahasia dibalik misteri kisah masa kolonial dalam novel Cantik Itu Luka karya Eka Kurniawan.\r\n', '2018-05-07', 100000),
(8, 'Ayah, Ini Arahnya ke Mana, ya?', 'Khoirul Trian', 'Ayah, ternyata benar ya. Setelah dewasa kita semua harus punya banyak uang. Harus bekerja lebih keras lagi, harus bertarung dengan isi kepala sendiri. Harus menyampingkan banyak keinginan untuk sekadar tetap bertahan hidup sampai bertemu pagi lagi.\r\n\r\nAyah, setelah dewasa aku bertemu banyak orang yang menyakitkan dalam hidup dan kali ini aku gak punya banyak keberanian untuk melawannya. Ayah, kadang aku kalah, kadang aku kuat, kadang semuanya terjadi begitu saja dengan penuh pura-pura yang aku coba kesampingkan rasa sakitnya.\r\n\r\nAyah, hari ini aku kesepian dan gak tahu harus lari kemana lagi. Ayah, ini arahnya ke mana, ya? Anak kecil ini kehilangan jalan pulangnya.\r\n\r\nKeunggulan:\r\n- Secara garis besar, buku ini disusun sebagai bentuk rasa rindu seorang anak kepada sosok Ayah.\r\n- Mengangkat isu tentang fatherless yang sedang naik akhir-akhir ini.\r\n- Buku ini memiliki beberapa halaman activity sebagai bahan interaksi dengan pembaca, sehingga ketika membaca buku ini pembaca bisa mengerahkan perasaannya langsung.\r\n- Terdapat lima bab yang masing-masing memiliki daya tarik tersendiri dengan alur yang sudah terbentuk agar merangkul pembaca.\r\n- Buku ini akan sangat relate bagi sebagian besar kaum remaja, terutama yang tidak merasakan peran Ayah di hidupnya.', '2024-10-15', 79000),
(9, 'Master Of Disaster Seri 1', 'One Fung', 'Buku yang berjudul Master Of Disaster Seri 1: Pengendali Bencana ini merupakan komik yang ditulis oleh One Fung. Buku komik ini diterbitkan oleh penerbit Menuju Insan Cemerlang (MIC) Publishing\r\nDalam komik Master of Disaster ini, One Fung berhasil meleburkan ciri khas Manhua (komik asal Hong Kong) dan Manga (komik Jepang). Goresan sketsa yang khas pada komik ini dan alur cerita yang bagus dapat menghasilkan sentuhan yang berbeda dari para seniornya dalam industri komik di Hong Kong.\r\nKomik ini bercerita tentang Cang Lan Feng, seorang remaja pemberani yang tak gentar menaklukkan musuh-musuhnya dalam membuat onar dan ingin mengacaukan dunia. Muncul kesalahpahaman dengan organisasinya membuat ia bersama sang guru harus melalang buana sambil menunggu kesempatan baik untuk memulihkan nama baiknya.\r\nNamun kehidupan tidak selalu beruntung. Bak dinaungi bintang petaka, Cang Lang Feng berkali-kali harus mengalami pedih dan naasnya kehidupan ini. Apakah kali ini Cang Lang Feng mampu meruntuhkan tebing kepedihan kehidupannya dan memulihkan nama baiknya? Ikuti kisah heroiknya di komik Master of Disaster ini!\r\nIkuti juga kisah pada seri selanjutnya yang menceritakan Chi Kai yang harus merampungkan misi rencana api langit yang telah disepakati oleh kelompok bulan hitam. Segala daya upaya dilakukan untuk menyelesaikan misi tersebut. Tanpa berbelas kasih dengan orang-orang yang pernah ia sayangi, Chi Kai akan melibas siapa pun yang berusaha menghalangi rencananya, termasuk pertikaian dengan guru dan Cang Lan Feng akan ia tuntaskan habis-habisan.', '2019-06-24', 67500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;