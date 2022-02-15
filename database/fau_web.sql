-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 12:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fau_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `body1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`, `body1`) VALUES
(24, 33, 9, 'Donat', '1643277880_donut.jpeg', '&lt;p&gt;&lt;strong&gt;Bahan utama&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;300 gram tepung terigu protein tinggi&lt;/li&gt;&lt;li&gt;3 sendok makan gula pasir&lt;/li&gt;&lt;li&gt;1 butir telur&lt;/li&gt;&lt;li&gt;150 ml susu cair&lt;/li&gt;&lt;li&gt;2 sendok teh ragi instan&lt;/li&gt;&lt;li&gt;1/2 sendok teh baking powder&lt;/li&gt;&lt;li&gt;50 gram margarin&lt;/li&gt;&lt;li&gt;1/2 sendok teh garam&lt;/li&gt;&lt;li&gt;1/4 ovalet&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Bahan toping&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Meses warna-warni secukupnya&lt;/li&gt;&lt;li&gt;Coklat putih yang telah dilelehkan&lt;/li&gt;&lt;li&gt;Dark chocolate yang telah dilelehkan&lt;/li&gt;&lt;li&gt;Coklat berwarna hijau rasa green tea yang telah dilelehkan&lt;/li&gt;&lt;li&gt;Coklat berwarna pink rasa strawberry yang telah dilelehkan&lt;/li&gt;&lt;li&gt;Kacang tanah cacah secukupnya&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Plastik wrap&lt;/li&gt;&lt;li&gt;Cetakan donat&lt;/li&gt;&lt;li&gt;Wajan&lt;/li&gt;&lt;li&gt;Piring&lt;/li&gt;&lt;li&gt;Kompor&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 04:22:06', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Siapkan wadah besar. Campurkan tepung terigu, telur, gula pasir, baking powder, ragi instan, ovalet, dan garam ke dalam wadah.&lt;/li&gt;&lt;li&gt;Tuangkan susu cair. Uleni adonan sampai tercampur rata dan menjadi lebih padat.&lt;/li&gt;&lt;li&gt;Tambahkan margarin dan uleni adonan sampai kalis.&lt;/li&gt;&lt;li&gt;Tutup adonan donat dengan plastik wrap atau kain dan diamkan selama 1 jam sampai mengembang.&lt;/li&gt;&lt;li&gt;Kemudian kempiskan adonan dan uleni lagi agar tetap kalis dan elastis.&lt;/li&gt;&lt;li&gt;Bagi adonan menjadi 12 bagian sama besar.&lt;/li&gt;&lt;li&gt;Cetak adonan menggunakan alat cetakan adonan agar bentuknya lebih rapi dan menyerupai donat ala Jco. Kalau Sweet Couple tidak punya cetakan donat, bisa juga membentuknya dengan tangan asalkan rapi.&lt;/li&gt;&lt;li&gt;Diamkan adonan yang sudah dicetak selama 30 menit agar lebih mengembang.&lt;/li&gt;&lt;li&gt;Panaskan minyak untuk menggoreng donat. Goreng donat dengan api ukuran kecil hingga mengembang dan berwarna kecoklatan. Angkat dan tiriskan donat.&lt;/li&gt;&lt;li&gt;Siapkan semua bahan topping. Oleskan donat dengan beberapa topping coklat lelehan yang berbeda sesuai selera. Kemudian berikan taburan meses atau kacang cacah sesuai selera.&lt;/li&gt;&lt;/ol&gt;'),
(25, 33, 9, 'Bolu Kukus', '1643277963_bolu kukus.jpeg', '&lt;p&gt;&lt;strong&gt;Bahan-bahan&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;200 gram tepung terigu&lt;/li&gt;&lt;li&gt;200 gram gula pasir&lt;/li&gt;&lt;li&gt;200 ml susu&lt;/li&gt;&lt;li&gt;2 butir telur&lt;/li&gt;&lt;li&gt;1 sendok teh SP&lt;/li&gt;&lt;li&gt;15 gram coklat bubuk&lt;/li&gt;&lt;li&gt;20 gram air panas&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Mixer&lt;/li&gt;&lt;li&gt;Cetakan kue bolu dan paper cup&lt;/li&gt;&lt;li&gt;Kukusan&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 17:06:03', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Siapkan wadah. Masukkan coklat bubuk ke dalam wadah dan larutkan bersama air panas sampai mencair. Sisihkan.&lt;/li&gt;&lt;li&gt;Ambil wadah lain. Masukkan gula pasir, tepung terigu, SP, telur, dan susu ke dalam wadah. Kocok semua bahan menggunakan mixer selama 10 menit.&lt;/li&gt;&lt;li&gt;Bagi adonan menjadi 2 wadah. 1/4 bagian adonan dicampurkan dengan larutan coklat dan 3/4 adonan tidak perlu dicampur coklat dan tetap dibiarkan berwarna putih.&lt;/li&gt;&lt;li&gt;Siapkan cetakan kue bolu kukus. Alaskan dengan paper cup. Tuangkan adonan coklat dan putih secara bergantian, yaitu putih, coklat, putih, dan coklat.&lt;/li&gt;&lt;li&gt;Panaskan kukusan terlebih dahulu.&lt;/li&gt;&lt;li&gt;Kukus bolu sampai matang selama 20 menit.&lt;/li&gt;&lt;li&gt;Keluarkan kue bolu dari dalam kukusan.&lt;/li&gt;&lt;/ol&gt;'),
(26, 33, 9, 'Brownies ', '1643279429_brownies.jpeg', '&lt;p&gt;&lt;strong&gt;Bahan-bahan&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Tepung terigu protein sedang &ndash; 80 gram&lt;/li&gt;&lt;li&gt;Coklat masak (dark cooking chocolate) &ndash; 100 gram&lt;/li&gt;&lt;li&gt;Telur &ndash; 2 butir&lt;/li&gt;&lt;li&gt;Gula kastor &ndash; 80 gram&lt;/li&gt;&lt;li&gt;Mentega &ndash; 100 gram&lt;/li&gt;&lt;li&gt;Coklat bubuk &ndash; 10 gram&lt;/li&gt;&lt;li&gt;Susu bubuk &ndash; 15 gram&lt;/li&gt;&lt;li&gt;Baking soda &ndash; 1/2 sendok teh&amp;nbsp;&lt;/li&gt;&lt;li&gt;Kacang kenari kupas, sangrai dan cincang kasar &ndash; 4 sendok makan&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Loyang&lt;/li&gt;&lt;li&gt;Oven&lt;/li&gt;&lt;li&gt;Whisk&lt;/li&gt;&lt;li&gt;Pisau&lt;/li&gt;&lt;li&gt;Piring&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 17:30:29', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Mari kita membuat ganache atau selai coklat terlebih dahulu. Lelehkan dark cooking chocolate dan susu cair. Aduk sampai rata. Simpan dalam freezer.&lt;/li&gt;&lt;li&gt;Selanjutnya kita membuat adonan brownies. Lelehkan dark cooking chocolate dan mentega. Aduk sampai rata. Biarkan tetap hangat dan sisihkan.&lt;/li&gt;&lt;li&gt;Siapkan Loyang ukuran 20 x 20 cm. Kalau mau membuat brownies yang lebih praktis, Anda bisa menggunakan loyang sekat 20 x 20 cm khusus adonan brownies sehingga tidak perlu memotong-motong saat sudah matang.&lt;/li&gt;&lt;li&gt;Alasi dengan kertas kue atau baking paper. Sisihkan.&lt;/li&gt;&lt;li&gt;Dalam wadah lain, campur telur dan gula kastor dengan menggunakan alat pengocok atau whisk.&lt;/li&gt;&lt;li&gt;Masukkan tepung terigu, cokelat bubuk, susu bubuk, dan baking powder. Aduk rata.&lt;/li&gt;&lt;li&gt;Masukkan lelehan cokelat. Aduk rata.&lt;/li&gt;&lt;li&gt;Tuang adonan dalam loyang.&lt;/li&gt;&lt;li&gt;Panaskan oven dengan suhu 170&deg;C. Masukkan adonan brownies ke oven. Panggang adonan selama 25-30 menit.&lt;/li&gt;&lt;li&gt;Angkat dan dinginkan. Olesi permukaan brownies dengan ganache atau selai coklat lalu taburi dengan kacang kenari.&lt;/li&gt;&lt;li&gt;Simpan dalam kulkas sampai selai atasnya mengeras. Potong-potong sesuai selera dan siap disajikan.&lt;/li&gt;&lt;/ol&gt;'),
(27, 33, 9, 'Kue Ulang Tahun', '1643279536_kue ulang tahun.jpg', '&lt;p&gt;&lt;strong&gt;Bahan Utama&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;6 butir telur&lt;/li&gt;&lt;li&gt;150 gr tepung terigu (segitiga biru)&lt;/li&gt;&lt;li&gt;30 gr coklat bubuk (bensdorp)&lt;/li&gt;&lt;li&gt;150 ml minyak&lt;/li&gt;&lt;li&gt;200 gr gula pasir&lt;/li&gt;&lt;li&gt;100 gr DCC / coklat batang&lt;/li&gt;&lt;li&gt;1 sdt tbm&lt;/li&gt;&lt;li&gt;Pasta vanila secukupnya&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Bahan Topping&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Buttercream&lt;/li&gt;&lt;li&gt;200 gr DCC / coklat batang&lt;/li&gt;&lt;li&gt;Crispy chocolate balls secukupnya&lt;/li&gt;&lt;li&gt;Ceri&lt;/li&gt;&lt;li&gt;Selai strawberry&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Saringan&lt;/li&gt;&lt;li&gt;Sendok&lt;/li&gt;&lt;li&gt;Baskom&lt;/li&gt;&lt;li&gt;Mixer&lt;/li&gt;&lt;li&gt;Spatula&lt;/li&gt;&lt;li&gt;Pisau&lt;/li&gt;&lt;li&gt;Loyang&lt;/li&gt;&lt;li&gt;Kukusan&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 17:31:37', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Saring tepung terigu dengan cokelat bubuk, agar tepung halus. Kemudian aduk hingga tercampur rata.&lt;/li&gt;&lt;li&gt;Cairkan coklat batang menggunakan api kecil sambil diaduk. Kalua sudah mencair matikan api kemudian diaduk hingga tercampur rata.&lt;/li&gt;&lt;li&gt;Siapkan 6 butir telur, gula, TBM, pasta vanilla. Kemudian aduk menggunakan mixer sampai putih kental dan berjejak, kemudian masukan tepung dan coklat yang sudah diayak kemudian aduk menggunakan mixer.&lt;/li&gt;&lt;li&gt;Masukan cokelat yang sudah di cairkan sambal diaduk hingga tercampur rata.&lt;/li&gt;&lt;li&gt;Masukan adonan kedalam Loyang.&lt;/li&gt;&lt;li&gt;Kukus selama 35 menit menggunakan api kecil.&lt;/li&gt;&lt;li&gt;Jika sudah matang keluarkan kue dari Loyang, biarkan hingga kue dingin.&lt;/li&gt;&lt;li&gt;Jika sudah dingin, kemudian hias kue.&lt;/li&gt;&lt;/ol&gt;'),
(28, 33, 9, 'Lapis Legit', '1643279586_lapis legit.jpeg', '&lt;p&gt;&lt;strong&gt;Bahan-bahan&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;350 gr mentega&lt;/li&gt;&lt;li&gt;250 gr gula halus&lt;/li&gt;&lt;li&gt;30 butir kuning telur&lt;/li&gt;&lt;li&gt;2 sdm susu bubuk&lt;/li&gt;&lt;li&gt;60 gr tepung terigu rendah protein&lt;/li&gt;&lt;li&gt;1 sdm spekuk&lt;/li&gt;&lt;li&gt;1/4 sdt vanili&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Mixer&lt;/li&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Spatula&lt;/li&gt;&lt;li&gt;Timbangan&lt;/li&gt;&lt;li&gt;Loyang&lt;/li&gt;&lt;li&gt;Oven&lt;/li&gt;&lt;li&gt;Sendok kayu&lt;/li&gt;&lt;li&gt;Sendok sayur&lt;/li&gt;&lt;li&gt;Kertas Roti&lt;/li&gt;&lt;li&gt;Piring saji&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2022-01-27 17:33:06', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Kocok mentega dan gula halus dengan menggunakan mixer dengan kecepatan tinggi selama 20 menit.&lt;/li&gt;&lt;li&gt;Kocok kuning telur selama 30 menit.&lt;/li&gt;&lt;li&gt;Ayak susu bubuk, tepung terigu, spekuk dan vanilli. Masukan ke dalam kocokan kuning telur. Aduk dengan menggunakan sendok kayu.&lt;/li&gt;&lt;li&gt;Masukan campuran mentega ke dalam campuran kuning telur. Aduk rata dengan sendok kayu.&lt;/li&gt;&lt;li&gt;Tuang 1 sendok sayur adonan ke dalam loyang 18&times;18 cm yang sudah di alasi dengan kertas roti. Panggang dalam oven dengan api di bawah hingga kecoklatan, keluarkan dari oven lalu tekan-tekan permukaannya dengan punggung sendok kayu.&lt;/li&gt;&lt;li&gt;Jika sudah kering, masukan lagi 2 sendok makan adonan. Panggang dengan api bawah hingga 3 lapis pertama. Tekan-tekan permukaannya dengan punggung sendok kayu.&lt;/li&gt;&lt;li&gt;Panggang selama 5-6 menit untuk setiap lapisan hingga permukaan kecoklatan. Sebelum melapis dengan adonan berikutnya, tekan-tekan supaya setiap lapisan padat.&lt;/li&gt;&lt;li&gt;Gunakan oven dengan api atas hingga semua adonan habis.&lt;/li&gt;&lt;li&gt;Setelah adonan terakhir, panggang dengan api bawah selama 15 menit sampai matang.&lt;/li&gt;&lt;li&gt;Setelah matang, keluarkan dari oven, dinginkan lalu sajikan.&lt;/li&gt;&lt;/ol&gt;'),
(29, 33, 9, 'Kue Pukis', '1643279648_pukis.jpg', '&lt;p&gt;&lt;strong&gt;Bahan-bahan&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;350 ml&amp;nbsp; santan kental&lt;/li&gt;&lt;li&gt;1 sdm ragi instan&lt;/li&gt;&lt;li&gt;6 butir telur&lt;/li&gt;&lt;li&gt;200 gr gula kastor&lt;/li&gt;&lt;li&gt;300 gr tepung terigu&lt;/li&gt;&lt;li&gt;Margarin&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Cetakan pukis&lt;/li&gt;&lt;li&gt;Pengocok adonan&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 17:34:08', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Masak santan hingga mendidih sambil diaduk agar santan tidak pecah, angkat lalu dinginkan&lt;/li&gt;&lt;li&gt;Campur ragi instan dengan air hangat sampai larut, diamkan sampai naik dan berbuih&lt;/li&gt;&lt;li&gt;Cocok telur dan gula sampai naik dan mengembang, masukkan terigu sedikit demi sedikit sambil terus dikocok dengan kecepatan rendah sampai tercampur rata.&lt;/li&gt;&lt;li&gt;Masukkan larutan ragi ke dalam adonan, aduk rata.&lt;/li&gt;&lt;li&gt;Masukkan santan sedikit demi sedikit sambil diaduk rata lalu diamkan adonan selama 30 menit sampai mengembang.&lt;/li&gt;&lt;li&gt;Panaskan cetakan kue pukis dengan api kecil lalu oleskan dengan margarin, sampai terdengar suara mendesis tuang adonan ke dalam cetakan, panggang hingga matang.&lt;/li&gt;&lt;li&gt;Angkat pukis yang sudah matang, tambahkan keju parut dan meses coklat sesuai selera.&lt;/li&gt;&lt;/ol&gt;'),
(30, 33, 9, 'Bolu Gulung', '1643279694_bolu gulung.jpg', '&lt;p&gt;&lt;strong&gt;Bahan-bahan&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;3 butir telur&lt;/li&gt;&lt;li&gt;90 gr gula pasir&lt;/li&gt;&lt;li&gt;90 gr tepung terigu&lt;/li&gt;&lt;li&gt;10 gr tepung maizena&lt;/li&gt;&lt;li&gt;10 susu bubuk&lt;/li&gt;&lt;li&gt;1 sdt SP&lt;/li&gt;&lt;li&gt;Butter cream&lt;/li&gt;&lt;li&gt;Meses&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Panci&lt;/li&gt;&lt;li&gt;Spatula&lt;/li&gt;&lt;li&gt;Sendok&lt;/li&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Mixer&lt;/li&gt;&lt;li&gt;Loyang&lt;/li&gt;&lt;li&gt;Kertas roti&lt;/li&gt;&lt;li&gt;Plastik&lt;/li&gt;&lt;li&gt;Pisau&lt;/li&gt;&lt;li&gt;Gunting&lt;/li&gt;&lt;li&gt;Tusuk gigi&lt;/li&gt;&lt;li&gt;Oven&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 17:34:54', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Siapkan margarin, cairkan sembari diaduk dalam panci berisi air, dan jangan sampai mendidih. Jika sudah, maka sisihkan.&lt;/li&gt;&lt;li&gt;Siapkan wadah lain, lalu masukkan semua bahan kecuali margarin. Aduk dan campurkan dengan menggunakan mixer kecepatan tinggi sampai kental berjejak.&lt;/li&gt;&lt;li&gt;Masukkan margarin yang sudah dicairkan, aduk dengan spatula dan pastikan tidak ada yang mengendap.&lt;/li&gt;&lt;li&gt;Siapkan loyang ukuran 24&times;24 yang sudah dialasi kertas roti di dalamnya, lalu masukkan adonan ke dalamnya. Oleskan dengan margarin tipis-tipis hingga merata.&lt;/li&gt;&lt;li&gt;Sisakan sedikit bahan, beri 2 tetes warna coklat, aduk dan masukkan dalam plastik, gunting bagian ujungnya, beri motif di bagian atas kue dan tarik garis dengan tusuk gigi.&lt;/li&gt;&lt;li&gt;Panaskan oven, masukkan ke dalamnya, dan panggang selama 20 menit pada suhu 180 derajat Celcius.&lt;/li&gt;&lt;li&gt;Jika sudah matang, maka keluarkan loyang dan balik di atas kain.&lt;/li&gt;&lt;li&gt;Diamkan hingga menghangat dan oleskan dengan butter cream. Taburkan meses di atasnya, gulung secara perlahan dengan kain, lalu padatkan dengan scraper. Tunggu sampai set, lalu bolu siap disajikan.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;'),
(31, 33, 9, 'Wafel', '1643279734_wafel.jpg', '&lt;p&gt;&lt;strong&gt;Bahan-bahan&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Tepung terigu protein sedang &ndash; 120 gram&lt;/li&gt;&lt;li&gt;Telur, pisahkan bagian kuning dan putihnya &ndash; 1 butir&lt;/li&gt;&lt;li&gt;Susu cair &ndash; 240 ml&lt;/li&gt;&lt;li&gt;Gula pasir &ndash; 2 sdm&lt;/li&gt;&lt;li&gt;Garam &ndash; 1/2 sdt&lt;/li&gt;&lt;li&gt;Vanili essen &ndash; 1/4 sdt&lt;/li&gt;&lt;li&gt;Baking powder &ndash; 1/2 sdt&lt;/li&gt;&lt;li&gt;Minyak goreng &ndash; 50 ml&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Cetakan wafel&lt;/li&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Spatula&lt;/li&gt;&lt;li&gt;Mangkuk&lt;/li&gt;&lt;li&gt;Piring&lt;/li&gt;&lt;li&gt;Sendok&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 17:35:34', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Siapkan wadah, masukkan tepung terigu, garam, dan baking powder dengan cara diayak. Campurkan. Jika sudah, maka sisihkan.&lt;/li&gt;&lt;li&gt;Siapkan wadah, masukkan susu, kuning telur, dan minyak ke dalamnya. Aduk hingga tercampur merata.&lt;/li&gt;&lt;li&gt;Masukkan campuran telur ke dalam campuran adonan tepung dan aduk hingga mengental berbentuk pasta.&lt;/li&gt;&lt;li&gt;Kocok putih telur sampai agak setengah mengembang. Masukkan gula pasir sedikit demi sedikit sembari dikocok hingga kaku.&lt;/li&gt;&lt;li&gt;Masukkan kocokan putih telur ke dalam adonan pasta sembari diaduk hingga tercampur.&lt;/li&gt;&lt;li&gt;Siapkan cetakan waffle, masukkan adonan ke dalam cetakan. Masak hingga matang lalu angkat.&lt;/li&gt;&lt;li&gt;Kue Wafel siap disajikan.&lt;/li&gt;&lt;/ol&gt;'),
(32, 33, 9, 'Bolu Lapis', '1643279935_bolu lapis.jpg', '&lt;p&gt;&lt;strong&gt;Bahan-bahan&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;500 gr putih telur&lt;/li&gt;&lt;li&gt;200 gr gula pasir&lt;/li&gt;&lt;li&gt;1 sdm SP&lt;/li&gt;&lt;li&gt;100 ml susu cair&lt;/li&gt;&lt;li&gt;80 ml minyak&lt;/li&gt;&lt;li&gt;240 gr tepung terigu protein sedang&lt;/li&gt;&lt;li&gt;30 gr maizena&lt;/li&gt;&lt;li&gt;5 gr susu bubuk&lt;/li&gt;&lt;li&gt;Pasta dan pewarna sesuai selera sesuai selera&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Mangkuk adonan&lt;/li&gt;&lt;li&gt;Mixer&lt;/li&gt;&lt;li&gt;Kukusan&lt;/li&gt;&lt;li&gt;Loyang&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 17:38:55', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Mixer putih telor, SP, gula pasir pasir sampai kental berjejak dengan kecepatan tinggi.&lt;/li&gt;&lt;li&gt;Setelah itu turunkan speed dan masukan tepung terigu, susu bubuk dan maizena, kocok sampai tercampur rata, terakhir masukan susu cair dan minyak, kocok lagi sampai rata. Matikan mixer.&lt;/li&gt;&lt;li&gt;Bagi adonan menjadi 6 bagian sama rata, lalu beri pasta dan pewarna sesuai selera.&lt;/li&gt;&lt;li&gt;Siapkan kukusan , tutup kukusan jgn lupa di bungkus kain ya.&lt;/li&gt;&lt;li&gt;Loyang atau cetakan dioles terlebih dahulu dengan minyak goreng secukupnya aja ( jgn terlalu banyak nanti berlubang kuenya). Tuang adonan ke dalam loyang satu-persatu dan kukus selama 15 menit setiap lapisnya . Lapis terakhir kukus selama 20 menit .&lt;/li&gt;&lt;li&gt;Setelah matang angkat dan setelah dingin baru di keluarkan dari cetakan .&lt;/li&gt;&lt;li&gt;Potong sesuai selera. Siap disajikan.&lt;/li&gt;&lt;/ol&gt;'),
(33, 33, 9, 'Kue Lumpur', '1643279988_kue lumpur.jpg', '&lt;p&gt;&lt;strong&gt;Bahan-bahan&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;400 gram kentang, kukus, kupas&lt;/li&gt;&lt;li&gt;5 kuning telur&lt;/li&gt;&lt;li&gt;3 putih telur&lt;/li&gt;&lt;li&gt;250 gram gula pasir&lt;/li&gt;&lt;li&gt;500 ml santan kental&lt;/li&gt;&lt;li&gt;80 gram margarin, lelehkan&lt;/li&gt;&lt;li&gt;1/2 sendok teh ekstrak vanila&lt;/li&gt;&lt;li&gt;1/2 sendok teh garam&lt;/li&gt;&lt;li&gt;200 gram tepung terigu&lt;/li&gt;&lt;li&gt;200 gram keju cheddar parut&lt;/li&gt;&lt;li&gt;50 ml minyak goreng untuk olesan&lt;/li&gt;&lt;li&gt;50 gram kismis, rendam hingga mekar, untuk taburan&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Alat-alat&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wadah&lt;/li&gt;&lt;li&gt;Mixer&lt;/li&gt;&lt;li&gt;Spatula&lt;/li&gt;&lt;li&gt;Cetakan kue lumpur&lt;/li&gt;&lt;li&gt;Parutan keju&lt;/li&gt;&lt;/ul&gt;', 1, '2022-01-27 17:39:48', '&lt;p&gt;&lt;strong&gt;Cara pembuatan&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Lumatkan kentang selagi panas. Sisihkan terlebih dahulu.&lt;/li&gt;&lt;li&gt;Siapkan wadah. Kocok kuning telur, putih telur, dan gula pasir dengan mixer sampai mengembang.&lt;/li&gt;&lt;li&gt;Tambahkan santan, margarin, ekstrak vanila, dan garam. Kocok rata.&lt;/li&gt;&lt;li&gt;Masukkan kentang lumat. Aduk rata dengan spatula. Tambahkan tepung terigu dan 150 gram keju parut (sisanya untuk taburan). Aduk rata.&lt;/li&gt;&lt;li&gt;Panaskan cetakan kue lumpur di atas api kecil. Oleskan dengan sedikit minyak. Tuangkan adonan hingga cukup penuh. Tutup cetakan, masak hingga 3/4 matang.&lt;/li&gt;&lt;li&gt;Taruh kismis dan taburi dengan sisa keju parut. Masak kembali hingga matang. Angkat kue dan sajikan untuk camilan keluarga.&lt;/li&gt;&lt;/ol&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `posts_liked`
--

CREATE TABLE `posts_liked` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts_liked`
--

INSERT INTO `posts_liked` (`id`, `id_post`, `id_user`) VALUES
(7, 24, 30),
(8, 25, 30),
(9, 26, 30),
(10, 27, 34),
(11, 29, 34),
(13, 30, 30),
(14, 32, 30),
(16, 24, 33),
(17, 25, 33);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(9, 'Makanan', '<p>Jenis makanan</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(30, 0, 'user', 'user@gmail.com', '$2y$10$84A7W0QwGhZ5hAlM1yPObe5lX9vZWZ9h3iHbv8AEtMWsEvOjGXRKm', '2021-01-05 16:34:59'),
(33, 1, 'admin', 'admin@gmail.com', '$2y$10$RFBGKKJbp8BsQQ6YPo1UEu2IYLKkrjrpBJF4TMqsFOsCtVH9Ur8JC', '2021-01-08 03:24:18'),
(34, 0, 'guntur', 'guntur@gmail.com', '$2y$10$UOBtQSMNFh2bvnuMd6bNlOJw..E0sCvfOVaVwlM5chsIU/Wq8Lvly', '2022-01-28 13:54:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `posts_liked`
--
ALTER TABLE `posts_liked`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `posts_liked`
--
ALTER TABLE `posts_liked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `posts_liked`
--
ALTER TABLE `posts_liked`
  ADD CONSTRAINT `posts_liked_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_liked_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
