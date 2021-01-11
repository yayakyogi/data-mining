-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2020 pada 04.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamining`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataset`
--

CREATE TABLE `dataset` (
  `nim` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `uts` float DEFAULT NULL,
  `uas` float DEFAULT NULL,
  `tugas` float DEFAULT NULL,
  `grade` varchar(16) NOT NULL,
  `keterangan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dataset`
--

INSERT INTO `dataset` (`nim`, `nama`, `uts`, `uas`, `tugas`, `grade`, `keterangan`) VALUES
('18.3.00001', 'KAMAS AGUNG SULISTIO', 72, 82.6, 68.56, 'B', 'LULUS'),
('18.3.00003', 'REZA ARDI WIRANATA', 72, 82, 68.63, 'B', 'LULUS'),
('18.3.00004', 'NANANG SETIOKO', 100, 82.6, 70.75, 'A', 'LULUS'),
('18.3.00007', 'FRANCISCUS MARCELLINO DWI ARINANTO', 72, 81.3, 67.13, 'B', 'LULUS'),
('18.3.00008', 'ANANG DIO ALIEF', 56, 81.3, 65.94, 'C+', 'LULUS'),
('18.3.00009', 'FAHRUR ROZI', 76, 82.3, 83, 'B+', 'LULUS'),
('18.3.00011', 'MUHAMMAD KHOIRUL HUDA', 72, 81.6, 68.63, 'B', 'LULUS'),
('18.3.00012', 'YUSUF NUR SIDIK', 50, 82.6, 68.44, 'C+', 'LULUS'),
('18.3.00016', 'UMI KHASANAH', 66, 82.3, 81, 'B', 'LULUS'),
('18.5.00001', 'BAGAS CATUR NUGROHO', 56, 87.3, 84.19, 'B', 'LULUS'),
('18.5.00002', 'DIMAS TADEO PRAYOGA', 89, 86.3, 83.47, 'A', 'LULUS'),
('18.5.00005', 'AKNANTA AKMAL', 71, 90.6, 83.44, 'B+', 'LULUS'),
('18.5.00006', 'LUTFI RACHMAN ALFIANTO', 74, 87.6, 81.56, 'B+', 'LULUS'),
('18.5.00007', 'YUDHA FARKHAN HABIB', 56, 86.3, 83.81, 'B', 'LULUS'),
('18.5.00010', 'RIZKY KURNIA ISMAIL', 100, 83.3, 80, 'A', 'LULUS'),
('18.5.00012', 'LUTHFI WAHYU ISKANDAR', 75, 84, 81.59, 'B+', 'LULUS'),
('18.5.00013', 'RASIID ANDRIAN', 58, 89.3, 83.44, 'B', 'LULUS'),
('18.5.00014', 'MUH, AMIN ALI NURUL HUDA', 76, 81.6, 81, 'B', 'LULUS'),
('18.5.00015', 'ARDIANTO KURNIAWAN', 56, 82.3, 82.5, 'C+', 'LULUS'),
('18.5.00017', 'WAHYU NUGROHO', 56, 87, 81.75, 'B', 'LULUS'),
('18.5.00018', 'DRIAN LASMANA PUTRA', 0, 0, 0, 'E', 'TIDAK LULUS'),
('18.5.00020', 'NANANG SAPUTRA', 66, 91, 61, 'B', 'LULUS'),
('18.5.00021', 'CLARA OKTARIA PRAMESWARI', 56, 82, 61.25, 'C+', 'LULUS'),
('18.5.00022', 'NUR INDAH SAVITRI', 52, 83, 81, 'C+', 'LULUS'),
('18.5.00025', 'RHESKY MURSAKA PUTRA', 58, 82.6, 82, 'B', 'LULUS'),
('18.5.00027', 'DHIKI ISNAWAN', 58, 81.6, 82.75, 'C+', 'LULUS'),
('18.5.00028', 'MUHAMMAD BAYU AJI', 56, 82.3, 80, 'C+', 'LULUS'),
('18.5.00032', 'DAVID ARIYANTO', 0, 0, 0, 'E', 'TIDAK LULUS'),
('18.5.00033', 'TONI ROHMADI', 0, 0, 0, 'E', 'TIDAK LULUS'),
('18.5.00034', 'ADHI YOGA PRATAMA', 0, 0, 0, 'E', 'TIDAK LULUS'),
('18.5.00035', 'STEFANUS ALFRANDO', 0, 0, 0, 'E', 'TIDAK LULUS'),
('18.5.00037', 'NUNUNG SU\'BAN MUJAHIDI\r\n', 60, 86, 84, 'B', 'LULUS'),
('18.5.00040', 'IKHWANUDIN', 0, 0, 0, 'E', 'TIDAK LULUS'),
('18.5.00042', 'DWI HANANTO', 78, 82.6, 82, 'B+', 'LULUS'),
('18.5.00044', 'RAHMAD AZIZ RIDHO', 61, 83.3, 83.25, 'B', 'LULUS'),
('18.5.00046', 'RIZQY PRIYANTO', 63, 83.3, 82.5, 'B', 'LULUS'),
('18.5.00047', 'AMAR CHOIRUDIN', 0, 0, 0, 'E', 'TIDAK LULUS'),
('18.5.00056', 'ACHMAD FAUZI DWI RAHMANTO', 58, 87.6, 81, 'B', 'LULUS'),
('18.5.00057', 'ABIYU EKA DARMANA', 62, 81, 84.94, 'B', 'LULUS'),
('18.5.00059', 'YOGA MAHARDHIKA PUTRA', 56, 80.6, 84, 'C+', 'LULUS'),
('18.5.00063', 'RIZQ AL WARITS WIRAWAN', 56, 85.6, 66, 'C+', 'LULUS'),
('18.5.00064', 'ANANDA DIMAS PRATOMO', 76, 85.6, 81, 'B+', 'LULUS'),
('18.5.00066', 'HANANG PRASETIYO', 80, 91.3, 83, 'A', 'LULUS'),
('18.5.00069', 'VENDY SETYA SURYA DARMAWAN PUTRA', 56, 91.6, 84, 'B', 'LULUS'),
('18.5.00070', 'MUH, ROSYID KHOIRUDIN', 78, 84.3, 84, 'B+', 'LULUS'),
('18.5.00073', 'LUTHFI FADLURRAHMAN NURUL ILMA', 56, 81, 82, 'C+', 'LULUS'),
('18.5.00075', 'DIKA ANGGIT PRATAMA', 56, 82.6, 83, 'C+', 'LULUS'),
('18.5.00077', 'RIZKI HANIFFUDIN', 56, 81, 84, 'C+', 'LULUS'),
('18.5.00084', 'ALVIO PRIMA NARENDRA LA KAHIA', 66, 83.3, 82, 'B', 'LULUS'),
('18.5.00088', 'AMAR SIDHIK', 73, 90, 84.38, 'B+', 'LULUS'),
('18.5.00089', 'ICHSAN PRAYOGO', 72, 86.6, 87.38, 'B+', 'LULUS'),
('18.5.00090', 'IBRAHIM ARIFIN', 80, 95, 83.81, 'A', 'LULUS'),
('18.5.00093', 'YEFRI DEONARDHO', 72, 85.6, 84.13, 'B+', 'LULUS'),
('18.5.00094', 'GILANG PANDHU SUDIBYA', 71, 91.6, 85.53, 'A', 'LULUS'),
('18.5.00095', 'ALFANDI NUR FAIZAL JALUTOMO', 72, 83.6, 83.06, 'B', 'LULUS'),
('18.5.00096', 'ASSHIVA FITRICIA KURNIYANTI', 66, 85, 82.69, 'B', 'LULUS'),
('18.5.00097', 'MUH RAZIF AL RASYID', 76, 86.6, 84, 'B+', 'LULUS'),
('18.5.00098', 'GILANG WAHYU ADI PRASETYO', 84, 89.6, 84.56, 'A', 'LULUS'),
('18.5.00099', 'HANIF NURFATHONI', 94, 86.6, 85.06, 'A', 'LULUS'),
('18.5.00100', 'ADIEK ALLEND', 82, 87, 86.34, 'A', 'LULUS'),
('18.5.00101', 'AHMAD KARIM MADHANI', 63, 88, 85.25, 'B', 'LULUS'),
('18.5.00104', 'LINTANG HIDAYANTO', 66, 86.6, 83.91, 'B', 'LULUS'),
('18.5.00105', 'MUHAMMAD DEFRAN', 72, 86.3, 82.16, 'B+', 'LULUS'),
('18.5.00107', 'ADITYA KURNIAWAN', 72, 88.3, 64.84, 'B', 'LULUS'),
('18.5.00109', 'HABIB KURNIAWAN DWI PRASETYO', 0, 0, 0, 'E', 'TIDAK LULUS'),
('18.5.00112', 'NUR ROHMAN ROSYID', 76, 88, 69, 'B+', 'LULUS'),
('18.5.00113', 'ALIF RIZKI NUR SETO', 72, 84.6, 84.57, 'B+', 'LULUS'),
('18.5.00117', 'KEVIN PUTRA PERDANA BUDI KUSUMA', 72, 85, 66.32, 'B', 'LULUS'),
('18.5.00119', 'FARID KHOIRUDDIN', 72, 83, 83, 'B', 'LULUS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
