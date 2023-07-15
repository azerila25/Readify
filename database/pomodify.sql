-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 02:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pomodify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `foto` varchar(10) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `pendidikan_now` varchar(55) NOT NULL,
  `prodi` varchar(55) NOT NULL,
  `universitas` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `foto`, `nama`, `ttl`, `pendidikan_now`, `prodi`, `universitas`) VALUES
(1, '', 'ALI REZA BAHTIAR', 'Cilegon, 25 April 2004', 'Strata 1 (S1)', 'Sistem Informasi', 'Universitas Gunadarma'),
(2, '', 'FARIS AWSHAF', 'Tangerang, 21 Agustus 2003', 'Strata 1 (S1)', 'Sistem Informasi', 'Universitas Gunadarma');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `kode_buku` int(10) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_halaman` varchar(50) NOT NULL,
  `premis` varchar(500) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`kode_buku`, `judul_buku`, `penerbit`, `penulis`, `tahun_terbit`, `harga_buku`, `kategori`, `jumlah_halaman`, `premis`, `gambar`) VALUES
(1, 'Bumi Manusia', 'Lentera Dipantara', 'Pramoedya Ananta Toer', '2006', 'Rp. 135.000', 'fiksi', '538 hlm', 'Bagian Pertama dari Roman Tetralogi Buru', 'bumi-manusia.jpg'),
(3, 'Seni Untuk Bersikap Bodo Amat', 'PT. Gramedia', 'Mark Manson', '2018', 'Rp. 95.000', 'Self Improvement', '247 hlm', 'Manson mengajak kita untuk mengerti batasan-batasan diri dan menerimanya. Inilah sumber kekuatan yang paling nyata.', 'subtle-art.jpg'),
(4, 'Laut Bercerita', 'Kepustakaan Populer Gramedia', 'Leila S. Chudori', '2017', 'Rp. 100.000', 'fiksi', '379 hlm', 'Di sebuah senja, di sebuah rumah susun di Jakarta, mahasiswa bernama Biru Laut disergap empat lelaki tak dikenal. Bersama kawan-kawannya, Daniel Tumbuan, Sunu Dyantoro, Alex Perazon, dia dibawa ke sebuah tempat yang tak dikenal. Berbulan-bulan mereka disekap, diinterogasi, dipukul, ditendang, digantung, dan disetrum agar bersedia menjawab satu pertanyaan penting: siapakah yang berdiri di balik gerakan aktivis dan mahasiswa saat itu.', 'laut.jpg'),
(5, 'Atomic Habits', 'Gramedia Pustaka Utama', 'James Clear', '2020', 'Rp. 98.000', 'Self Improvement', '340 hlm', 'Ia menyingkap beberapa trik sederhana dalam hidup kita (seni Menumpuk Kebiasaan yang terlupakan, kekuatan tak terduga Aturan Dua Menit, atau trik untuk masuk ke dalam Zona Goldilocks), dan menggali ke dalam teori psikologi dan neurosains paling baru untuk menerangkan mengapa semua itu penting. Dalam rangka itu, ia menceritakan kisah-kisah inspiratif para peraih medali emas Olimpiade, para CEO terkemuka, dan ilmuwan-ilmuwan istimewa.', 'atomic.jpg'),
(6, 'Api Sejarah', 'Salamadani Pustaka Semesta', 'Ahmad Mansur Suryanegara', '2010', 'Rp. 85.000', 'Sejarah', '578 hlm', 'Buku Api Sejarah berisi tentang sejarah perjuangan Indonesia yang belum pernah terungkap dan diungkap. Beberapa fakta sejarah seperti Indonesia yang telah diislamkan sejak lama dapat dilihat dari simbol-simbol keislaman seperti warna bendara Sang Saka Merah Putih yang diadaptasi dari warna Islam, bukan dari lambang Majapahit, pergerakan organisasi dan partai Islam yang mengupayakan kemerdekaan RI, sampai asal – usul beberapa pejuang Islam. Banyak fakta dan data yang “tersembunyi” dan “disembunyi', 'api.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku_inter`
--

CREATE TABLE `data_buku_inter` (
  `kode_buku` int(10) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_halaman` varchar(50) NOT NULL,
  `premis` varchar(500) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_buku_inter`
--

INSERT INTO `data_buku_inter` (`kode_buku`, `judul_buku`, `penerbit`, `penulis`, `tahun_terbit`, `harga_buku`, `kategori`, `jumlah_halaman`, `premis`, `gambar`) VALUES
(1, 'The Alchemist', 'Harper Collins', 'Paulo Coelho', '1998', 'Rp. 119.000', 'Novel', '213 hlm', 'Kisah ini, mempesona dalam kesederhanaan yang kuat dan kebijaksanaan yang menginspirasi, adalah tentang seorang bocah gembala Andalusia bernama Santiago yang melakukan perjalanan dari tanah airnya di Spanyol ke gurun Mesir untuk mencari harta karun yang terkubur di Piramida.', 'thealchemist.jpg'),
(2, 'Outliers', 'Little, Brown and Company', 'Malcolm Gladwell', '2008', 'Rp. 140.000', 'non-fiksi', '304 hlm', 'penulis menyatakan bahwa orang pada umumnya terlalu fokus kepada orang sukses itu seperti apa, tanpa memikirkan asal mula mereka. ', 'outliers.jpg'),
(3, 'The Subtle Art of Not Giving a F*ck', 'Harper Collins', 'Mark Manson', '2016', 'Rp. 189.000', 'non-fiksi', '272 hlm', 'menuliskan bahwa agar berhasil dan benar-benar ‘hidup’, kita tidak bisa mengharapkan hal-hal baik saja untuk terjadi. ', 'subtle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku_nonfic`
--

CREATE TABLE `data_buku_nonfic` (
  `kode_buku` int(10) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_halaman` varchar(50) NOT NULL,
  `premis` varchar(500) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_buku_nonfic`
--

INSERT INTO `data_buku_nonfic` (`kode_buku`, `judul_buku`, `penerbit`, `penulis`, `tahun_terbit`, `harga_buku`, `kategori`, `jumlah_halaman`, `premis`, `gambar`) VALUES
(1, 'Bob Sadino', 'elex media komputindo', 'dodi mawardi', '2017', 'Rp. 28.000', 'non-fiksi', '290 hlm', 'mengisahkan kehidupan dan perjalanan karier Bob Sadino, serta prinsip-prinsip bisnis yang diterapkannya. ', 'bob.jpg'),
(2, 'Soekarno', 'ar-ruzz media', 'taufik adi susilo', '2008', 'Rp. 28.000', 'non-fiksi', '233 hlm', 'kisah lengkap tentang kehidupan Soekarno, mulai dari masa kecilnya, perjuangannya dalam memperjuangkan kemerdekaan Indonesia, hingga kepemimpinannya sebagai presiden.', 'soekarno.jpg'),
(3, 'B.J. Habibie', 'IRCiSoD', 'situmorang jonar', '2017', 'Rp. 60.000', 'non-fiksi', '200 hlm', 'kisah lengkap tentang kehidupan B.J. Habibie, mulai dari masa kecilnya, pendidikan di Jerman, karier akademik, perannya dalam pengembangan teknologi di Indonesia, hingga masa kepemimpinannya sebagai presiden. ', 'habibie.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku_novel`
--

CREATE TABLE `data_buku_novel` (
  `kode_buku` int(10) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_halaman` varchar(50) NOT NULL,
  `premis` varchar(500) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_buku_novel`
--

INSERT INTO `data_buku_novel` (`kode_buku`, `judul_buku`, `penerbit`, `penulis`, `tahun_terbit`, `harga_buku`, `kategori`, `jumlah_halaman`, `premis`, `gambar`) VALUES
(1, 'koala kumal', 'gagas media', 'Raditya Dika', '2015', 'Rp. 60.000', 'Novel', '258 hlm', 'kisah fiksi yang ditulis oleh Raditya Dika, seorang penulis dan komedian Indonesia.', 'koalakumal.jpg'),
(2, 'Laskar Pelangi', 'Bentang Pustaka', 'Andrea Hirata', '2005', 'Rp. 65.000', 'Novel', '529 hlm', 'kisah yang ditulis oleh Andrea Hirata, seorang penulis Indonesia. Buku ini berdasarkan pengalaman nyata penulis saat belajar di sebuah sekolah dasar di Pulau Belitung yang terletak di Indonesia bagian timur.', 'laskarpelangi.jpg'),
(3, 'Negeri 5 Menara', 'Gramedia', 'Ahmad Fuadi', '2009', 'Rp. 25.000', 'Novel', '416 hlm', 'sebuah novel yang ditulis oleh Ahmad Fuadi, seorang penulis Indonesia. Buku ini merupakan kisah semi-otobiografi yang terinspirasi dari pengalaman penulis sendiri.', 'negeri.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku_scifi`
--

CREATE TABLE `data_buku_scifi` (
  `kode_buku` int(10) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_halaman` varchar(50) NOT NULL,
  `premis` varchar(500) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_buku_scifi`
--

INSERT INTO `data_buku_scifi` (`kode_buku`, `judul_buku`, `penerbit`, `penulis`, `tahun_terbit`, `harga_buku`, `kategori`, `jumlah_halaman`, `premis`, `gambar`) VALUES
(1, 'The Martian', 'Gramedia Pustaka Utama', 'andy weir', '2016', 'Rp. 80.000', 'sci-fi', '530 hlm', 'sebuah novel fiksi ilmiah yang mengisahkan tentang seorang astronot bernama Mark Watney yang terdampar sendirian di Mars setelah timnya meninggalkannya dalam misi evakuasi darurat.', 'martian.jpg'),
(2, 'harry potter', 'Gramedia Pustaka Utama', 'J.K. Rowling', '2007', 'Rp. 400.000', 'sci-fi', '3407 hlm', 'sebuah petualangan ajaib yang mengisahkan kehidupan seorang anak yatim piatu bernama Harry Potter yang ternyata merupakan seorang penyihir.', 'hp.jpg'),
(3, 'Divergent', 'Mizan Fantasi', 'veronica roth', '2012', 'Rp. 86.000', 'sci-fi', '543 hlm', 'sebuah novel distopia yang berlatar di masyarakat futuristik yang terbagi menjadi lima faksi berdasarkan kepribadian dan kecenderungan individu.', 'divergent.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_borrow`
--

CREATE TABLE `user_borrow` (
  `borrow_num` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_borrow`
--

INSERT INTO `user_borrow` (`borrow_num`, `nama`, `judul_buku`, `email`, `alamat`, `telepon`, `tanggal_peminjaman`, `tanggal_pengembalian`) VALUES
(10, 'jajal', 'bumi manusia ', 'muamir@gmail.com', 'tangerang', '09999', '2023-06-14', '2023-06-28'),
(11, 'amar', 'laut bercerita', 'muamir@gmail.com', 'tangerang', '0821', '2023-06-13', '2023-06-15'),
(12, '123', '123', '123@gmail.com', 'kepala', 'vtghhjjkkkkkooooookk', '2023-06-12', '2023-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(6) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `first_name`, `surname`, `email`, `password`) VALUES
(1, 'ali', 'bahtiar', 'ali@gmail.com', 'akumakanayam'),
(2, 'reza', 'ali', 'bahtiar@gmail.com', 'akusuka'),
(7, 'ali', 'reza', 'aaa@gmail.com', 'akumahasiswa'),
(31, 'muamar', 'faris', 'muamir@gmail.com', '$2y$10$.ktckKErYGxigfe/paDTleQI6joQnmrYXDgRVu2lAyWuuPWTXKaYy'),
(32, 'faris', 'oki', 'farisoki@gmail.com', '$2y$10$j24oys3r8D5cV9lM82oLj.GfY/rBM53CTP9eOIGCKBYQcgKW84ywe'),
(33, 'dafa', 'nabil', 'nabil123@gmail.com', '$2y$10$heSUyMjV.tg4xGEaSD41zeYfjKNxlcmq9p4Gq.JV85J73qxfxncay'),
(34, 'alif', 'maulana', 'alif@gmail.com', '$2y$10$A3mA8Smkkz.Z.eW1I3bjwelp5ThLy.h8CotOTbolEmN57KJY6c5Nm'),
(35, 'fikri hadi', 'nugraha', 'nugrahafikri884@gmail.com', '$2y$10$mVk4AYlt7IJR0foI6w6tWOM9n4g4zqwL/evob7ntZoRfZRfvuzoPu'),
(36, 'ali', 'asd', 'asd@gmail.com', '$2y$10$mPzcJ.NAA9dXp6cVjeEAlOopZ.vyw9cZY7OJbUdkODU9tzvtukiXa'),
(37, 'daffa', 'riandhika', 'daffa@gmail.com', '$2y$10$J0rNz4ImhOvbJAiRG81.vuYrP0a9QQ.No0jnGOMDN8WZYBNL/bJuC'),
(39, 'didan', 'fariz', 'didan@gmail.com', '$2y$10$uaS.SxWjJvAfGCTqDFFIJebWtMjeWnmgCUfN4jwX9A2Nc0mSorA6O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `data_buku_inter`
--
ALTER TABLE `data_buku_inter`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `data_buku_nonfic`
--
ALTER TABLE `data_buku_nonfic`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `data_buku_novel`
--
ALTER TABLE `data_buku_novel`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `data_buku_scifi`
--
ALTER TABLE `data_buku_scifi`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `user_borrow`
--
ALTER TABLE `user_borrow`
  ADD PRIMARY KEY (`borrow_num`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `kode_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_buku_inter`
--
ALTER TABLE `data_buku_inter`
  MODIFY `kode_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_buku_nonfic`
--
ALTER TABLE `data_buku_nonfic`
  MODIFY `kode_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_buku_novel`
--
ALTER TABLE `data_buku_novel`
  MODIFY `kode_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_buku_scifi`
--
ALTER TABLE `data_buku_scifi`
  MODIFY `kode_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_borrow`
--
ALTER TABLE `user_borrow`
  MODIFY `borrow_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
