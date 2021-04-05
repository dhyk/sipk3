-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 09:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipk3`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahlik3umum`
--

CREATE TABLE `ahlik3umum` (
  `id_ahlik3umum` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `tangggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahlik3umum`
--

INSERT INTO `ahlik3umum` (`id_ahlik3umum`, `id_user`, `nama`, `nomor`, `tangggal_terbit`, `masa_berlaku`) VALUES
(1, 3, 'Roy Achmad', '3u187381', '2021-04-07', '2021-04-30'),
(3, 4, 'Roy Achmad Aziz', '3u187381', '2021-04-09', '2021-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `k3listrik`
--

CREATE TABLE `k3listrik` (
  `id_k3listrik` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `pembangkit_listrik` varchar(100) DEFAULT NULL,
  `sumber_bahaya` varchar(200) DEFAULT NULL,
  `standar_instalasi` varchar(200) DEFAULT NULL,
  `ada_k3` varchar(100) DEFAULT NULL,
  `ada_teknisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k3listrik`
--

INSERT INTO `k3listrik` (`id_k3listrik`, `id_user`, `pembangkit_listrik`, `sumber_bahaya`, `standar_instalasi`, `ada_k3`, `ada_teknisi`) VALUES
(2, 4, 'Ya', 'Pemanfaatan Listrik', '11111', 'Ada', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `lingker`
--

CREATE TABLE `lingker` (
  `id_lingker` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `sumber_bahaya` varchar(200) DEFAULT NULL,
  `standar_listrik` varchar(200) DEFAULT NULL,
  `jumlah_unit_kerja` int(10) DEFAULT NULL,
  `asal_sumber` varchar(200) DEFAULT NULL,
  `klasifikasi_kebakaran` varchar(200) DEFAULT NULL,
  `sumber_kebakaran` varchar(200) DEFAULT NULL,
  `pencegahan_kebakaran` varchar(200) DEFAULT NULL,
  `jumlah_petugas` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lingker_higiene`
--

CREATE TABLE `lingker_higiene` (
  `id_higiene` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lingker_higiene`
--

INSERT INTO `lingker_higiene` (`id_higiene`, `id_user`, `nomor`, `file`, `tanggal`) VALUES
(1, 4, '8129281', 'Halo_K3!.pdf', '2021-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `lingker_jurulas`
--

CREATE TABLE `lingker_jurulas` (
  `id_jurulas` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `klasifikasi` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lingker_k3`
--

CREATE TABLE `lingker_k3` (
  `id_k3` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `jenjang` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lingker_ketinggian`
--

CREATE TABLE `lingker_ketinggian` (
  `id_ketinggian` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `kompetensi` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lingker_pemeriksaan`
--

CREATE TABLE `lingker_pemeriksaan` (
  `id_pemeriksaan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `lembaga` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lingker_rekaman`
--

CREATE TABLE `lingker_rekaman` (
  `id_rekaman` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lingker_ruang`
--

CREATE TABLE `lingker_ruang` (
  `id_ruang` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `jenjang` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listrik_ak3_listrik`
--

CREATE TABLE `listrik_ak3_listrik` (
  `id_ak3_listrik` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listrik_ak3_listrik`
--

INSERT INTO `listrik_ak3_listrik` (`id_ak3_listrik`, `id_user`, `nama`, `sertifikat`, `tanggal_terbit`, `masa_berlaku`) VALUES
(1, 4, 'Soewoto', '3u187381', '2021-04-13', '2021-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `listrik_ijin_listrik`
--

CREATE TABLE `listrik_ijin_listrik` (
  `id_ijin_listrik` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listrik_ijin_listrik`
--

INSERT INTO `listrik_ijin_listrik` (`id_ijin_listrik`, `id_user`, `sertifikat`, `tanggal_terbit`, `masa_berlaku`) VALUES
(1, 4, '3u187381', '2021-04-15', '2021-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `listrik_ijin_petir`
--

CREATE TABLE `listrik_ijin_petir` (
  `id_ijin_petir` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listrik_pemeriksaan_listrik`
--

CREATE TABLE `listrik_pemeriksaan_listrik` (
  `id_pemeriksaan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_pemeriksaan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listrik_pemeriksaan_listrik`
--

INSERT INTO `listrik_pemeriksaan_listrik` (`id_pemeriksaan`, `id_user`, `sertifikat`, `tanggal_pemeriksaan`) VALUES
(1, 4, 'Halo_K3!.pdf', '2021-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `listrik_pemeriksaan_petir`
--

CREATE TABLE `listrik_pemeriksaan_petir` (
  `id_pemeriksaan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_pemeriksaan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listrik_pemeriksaan_petir`
--

INSERT INTO `listrik_pemeriksaan_petir` (`id_pemeriksaan`, `id_user`, `sertifikat`, `tanggal_pemeriksaan`) VALUES
(1, 4, 'Halo_K3!1.pdf', '2021-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `listrik_teknisi`
--

CREATE TABLE `listrik_teknisi` (
  `id_teknisi` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p2_covid`
--

CREATE TABLE `p2_covid` (
  `id_pertanyaan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `p1` varchar(50) DEFAULT NULL,
  `p2` varchar(50) DEFAULT NULL,
  `p3` varchar(50) DEFAULT NULL,
  `p4` varchar(50) DEFAULT NULL,
  `p5` varchar(50) DEFAULT NULL,
  `p6` varchar(50) DEFAULT NULL,
  `p7` varchar(50) DEFAULT NULL,
  `p8` varchar(50) DEFAULT NULL,
  `p9` varchar(50) DEFAULT NULL,
  `p10` varchar(50) DEFAULT NULL,
  `p11` varchar(50) DEFAULT NULL,
  `p12` varchar(50) DEFAULT NULL,
  `p13` varchar(50) DEFAULT NULL,
  `file_p1` varchar(100) NOT NULL,
  `file_p2` varchar(100) NOT NULL,
  `file_p3` varchar(100) NOT NULL,
  `file_p4` varchar(100) NOT NULL,
  `file_p5` varchar(100) NOT NULL,
  `file_p6` varchar(100) NOT NULL,
  `file_p7` varchar(100) NOT NULL,
  `file_p8` varchar(100) NOT NULL,
  `file_p9` varchar(100) NOT NULL,
  `file_p10` varchar(100) NOT NULL,
  `file_p11` varchar(100) NOT NULL,
  `file_p12` varchar(100) NOT NULL,
  `file_p13` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p3k`
--

CREATE TABLE `p3k` (
  `id_p3k` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `jumlah_shift` int(10) DEFAULT NULL,
  `jumlah_petugas` int(10) DEFAULT NULL,
  `tenaga_kerja` int(10) NOT NULL,
  `jumlah_unit` int(10) DEFAULT NULL,
  `ruang_p3k` varchar(10) DEFAULT NULL,
  `jumlah_p3ka` varchar(10) DEFAULT NULL,
  `jumlah_p3kb` varchar(10) DEFAULT NULL,
  `jumlah_p3kc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p3k_petugas`
--

CREATE TABLE `p3k_petugas` (
  `id_petugas` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nomor` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p3k_petugas`
--

INSERT INTO `p3k_petugas` (`id_petugas`, `id_user`, `nama`, `nomor`, `tanggal`, `masa`) VALUES
(1, 4, 'Roy Achmad Aziz', '3u187381', '2021-04-07', '2021-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `p1` varchar(10) DEFAULT NULL,
  `p2` varchar(10) DEFAULT NULL,
  `p3` varchar(10) DEFAULT NULL,
  `p4` varchar(10) DEFAULT NULL,
  `p5` varchar(10) DEFAULT NULL,
  `p6` varchar(10) DEFAULT NULL,
  `p7` varchar(10) DEFAULT NULL,
  `p8` varchar(10) DEFAULT NULL,
  `p9` varchar(10) DEFAULT NULL,
  `p10` varchar(10) DEFAULT NULL,
  `p11` varchar(10) DEFAULT NULL,
  `p12` varchar(10) DEFAULT NULL,
  `p13` varchar(10) DEFAULT NULL,
  `p14` varchar(10) DEFAULT NULL,
  `p15` varchar(10) DEFAULT NULL,
  `p16` varchar(10) DEFAULT NULL,
  `p17` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `id_user`, `tanggal`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`) VALUES
(1, 3, NULL, '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1'),
(2, 4, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(4, 5, NULL, '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat_smk3`
--

CREATE TABLE `sertifikat_smk3` (
  `id_sertifikat_smk3` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `file_sertifikat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat_smk3`
--

INSERT INTO `sertifikat_smk3` (`id_sertifikat_smk3`, `id_user`, `file_sertifikat`) VALUES
(1, 4, 'Halo_K3!.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_izin_usaha`
--

CREATE TABLE `tb_izin_usaha` (
  `id_izin_usaha` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_izin_usaha` varchar(200) NOT NULL,
  `nomor_izin` varchar(50) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `masa_berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_izin_usaha`
--

INSERT INTO `tb_izin_usaha` (`id_izin_usaha`, `id_user`, `nama_izin_usaha`, `nomor_izin`, `tanggal_terbit`, `masa_berlaku`) VALUES
(1, 3, 'Roy Achmad Aziz', '3u187381', '2021-04-07', '2021-04-29'),
(2, 4, 'Soewoto', '3u187381', '2021-04-28', '2021-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran`
--

CREATE TABLE `tb_kebakaran` (
  `id_tb_kebakaran` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `jumlah_karyawan` int(10) DEFAULT NULL,
  `jumlah_unit` int(10) DEFAULT NULL,
  `sumber_potensi` varchar(200) DEFAULT NULL,
  `asal_sumber` varchar(200) DEFAULT NULL,
  `sistem_pencegahan` varchar(200) DEFAULT NULL,
  `klasifikasi` varchar(200) NOT NULL,
  `jumlah_petugas` int(10) DEFAULT NULL,
  `jumlah_koordinator` int(10) DEFAULT NULL,
  `file_penanggulangan` varchar(200) DEFAULT NULL,
  `file_kerja` varchar(200) DEFAULT NULL,
  `file_regu` varchar(200) DEFAULT NULL,
  `tgl_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kebakaran`
--

INSERT INTO `tb_kebakaran` (`id_tb_kebakaran`, `id_user`, `jumlah_karyawan`, `jumlah_unit`, `sumber_potensi`, `asal_sumber`, `sistem_pencegahan`, `klasifikasi`, `jumlah_petugas`, `jumlah_koordinator`, `file_penanggulangan`, `file_kerja`, `file_regu`, `tgl_update`) VALUES
(1, 4, 1, 1, ';;Peralatan Listrik;;Material Mudah Terbakar;;;;', 'Eksternal', ';Pemasangan Alarm;;;', 'Sedang II', 1, 1, 'Halo_K3!.pdf', 'Halo_K3!1.pdf', 'Halo_K3!_(1).pdf', '2021-04-05 09:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_ak3`
--

CREATE TABLE `tb_kebakaran_ak3` (
  `id_ak3` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_terbit` varchar(100) DEFAULT NULL,
  `masa_berlaku` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kebakaran_ak3`
--

INSERT INTO `tb_kebakaran_ak3` (`id_ak3`, `id_user`, `nama`, `sertifikat`, `tanggal_terbit`, `masa_berlaku`) VALUES
(1, 4, 'Roy Achmad Aziz', '3u187381', '2021-04-02', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_alarm`
--

CREATE TABLE `tb_kebakaran_alarm` (
  `id_alarm` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `tanggal_periksa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_apar`
--

CREATE TABLE `tb_kebakaran_apar` (
  `id_apar` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `tanggal_periksa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_gladi`
--

CREATE TABLE `tb_kebakaran_gladi` (
  `id_gladi` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_terbit` varchar(100) DEFAULT NULL,
  `masa_berlaku` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kebakaran_gladi`
--

INSERT INTO `tb_kebakaran_gladi` (`id_gladi`, `id_user`, `nama`, `sertifikat`, `tanggal_terbit`, `masa_berlaku`) VALUES
(1, 4, 'Soewoto', '3u187381', '2021-04-01', '2021-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_hydrant`
--

CREATE TABLE `tb_kebakaran_hydrant` (
  `id_hydrant` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `tanggal_periksa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_instalasi`
--

CREATE TABLE `tb_kebakaran_instalasi` (
  `id_instalasi` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `file_sertifikat` varchar(100) DEFAULT NULL,
  `tanggal_periksa` date DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kebakaran_instalasi`
--

INSERT INTO `tb_kebakaran_instalasi` (`id_instalasi`, `id_user`, `file_sertifikat`, `tanggal_periksa`, `masa_berlaku`) VALUES
(1, 4, 'Halo_K3!3.pdf', '2021-04-01', '2021-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_penanggulangan`
--

CREATE TABLE `tb_kebakaran_penanggulangan` (
  `id_penanggulangan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_terbit` varchar(100) DEFAULT NULL,
  `masa_berlaku` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_petugas`
--

CREATE TABLE `tb_kebakaran_petugas` (
  `id_petugas` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(200) DEFAULT NULL,
  `tanggal_terbit` varchar(100) DEFAULT NULL,
  `masa_berlaku` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kebakaran_petugas`
--

INSERT INTO `tb_kebakaran_petugas` (`id_petugas`, `id_user`, `nama`, `sertifikat`, `tanggal_terbit`, `masa_berlaku`) VALUES
(1, 4, 'Roy Achmad Aziz', 'Halo_K3!2.pdf', '2021-04-09', '2021-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebakaran_sprinkler`
--

CREATE TABLE `tb_kebakaran_sprinkler` (
  `id_sprinkler` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `tanggal_periksa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecelakaan`
--

CREATE TABLE `tb_kecelakaan` (
  `id_kecelakaan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `stasiun` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `usia` int(10) DEFAULT NULL,
  `jk` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `bagian` varchar(100) DEFAULT NULL,
  `k_unsafe_action` varchar(400) DEFAULT NULL,
  `k_unsafe_condition` varchar(400) DEFAULT NULL,
  `sumber` varchar(100) DEFAULT NULL,
  `pengendalian` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecelakaan`
--

INSERT INTO `tb_kecelakaan` (`id_kecelakaan`, `id_user`, `waktu`, `stasiun`, `jenis`, `jumlah`, `usia`, `jk`, `kategori`, `bagian`, `k_unsafe_action`, `k_unsafe_condition`, `sumber`, `pengendalian`) VALUES
(3, 4, '2021-04-15 09:53:00', 'Gubeng', '1', 1, 1, 'L', 'Berat', '1', '1', '1', ';;Lingkungan Kerja;Proses', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_p2k3`
--

CREATE TABLE `tb_laporan_p2k3` (
  `id_laporan` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_laporan` date DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laporan_p2k3`
--

INSERT INTO `tb_laporan_p2k3` (`id_laporan`, `id_user`, `nama`, `tanggal_laporan`, `file`) VALUES
(4, 5, 'Roy Achmad Aziz', '2021-04-07', 'Halo_K3!1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mekanik_angkat`
--

CREATE TABLE `tb_mekanik_angkat` (
  `id_angkat` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `kapasitas` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masa` date DEFAULT NULL,
  `tanggal_rekam` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mekanik_angkat`
--

INSERT INTO `tb_mekanik_angkat` (`id_angkat`, `id_user`, `nomor`, `jenis`, `kapasitas`, `sertifikat`, `tanggal`, `masa`, `tanggal_rekam`, `file`) VALUES
(1, 5, '3224', 'mesin', '24', '7218273612132', '2021-04-13', '2021-04-13', '2021-04-13', 'Halo_K3!.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mekanik_bejana`
--

CREATE TABLE `tb_mekanik_bejana` (
  `id_bejana` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `fungsi` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masa` date DEFAULT NULL,
  `tanggal_rekam` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mekanik_elevator`
--

CREATE TABLE `tb_mekanik_elevator` (
  `id_elevator` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `kapasitas` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masa` date DEFAULT NULL,
  `tanggal_rekam` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mekanik_ketel`
--

CREATE TABLE `tb_mekanik_ketel` (
  `id_ketel` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `kapasitas` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masa` date DEFAULT NULL,
  `tanggal_rekam` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mekanik_mesin`
--

CREATE TABLE `tb_mekanik_mesin` (
  `id_mesin` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `fungsi` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masa` date DEFAULT NULL,
  `tanggal_rekam` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mekanik_ukur`
--

CREATE TABLE `tb_mekanik_ukur` (
  `id_ukur` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masa` date DEFAULT NULL,
  `tanggal_rekam` date DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_tb_pertanyaan` int(10) NOT NULL,
  `id_tb_user` int(10) DEFAULT NULL,
  `p1` int(1) DEFAULT '0',
  `p2` int(1) DEFAULT '0',
  `p3` int(1) DEFAULT '0',
  `p4` int(1) DEFAULT '0',
  `p5` int(1) DEFAULT '0',
  `p6` int(1) DEFAULT '0',
  `p7` int(1) DEFAULT '0',
  `p8` int(1) DEFAULT '0',
  `p9` int(1) DEFAULT '0',
  `p10` int(1) DEFAULT '0',
  `p11` int(1) DEFAULT '0',
  `p12` int(1) DEFAULT '0',
  `p13` int(1) DEFAULT '0',
  `p14` int(1) DEFAULT '0',
  `p15` int(1) DEFAULT '0',
  `p16` int(1) DEFAULT '0',
  `p17` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertfikat_standard`
--

CREATE TABLE `tb_sertfikat_standard` (
  `id_sertifikat_standard` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_sertifikat_standard` varchar(100) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `file_sertifikat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sertfikat_standard`
--

INSERT INTO `tb_sertfikat_standard` (`id_sertifikat_standard`, `id_user`, `nama_sertifikat_standard`, `tanggal_terbit`, `masa_berlaku`, `file_sertifikat`) VALUES
(1, 4, 'Roy Achmad Aziz', '2021-04-01', '2021-04-08', 'Halo_K3!_(1).pdf'),
(2, 5, 'Roy Achmad Aziz', '2021-04-01', '2021-04-30', 'Halo_K3!.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertifikat_produk`
--

CREATE TABLE `tb_sertifikat_produk` (
  `id_sertifikat_produk` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_sertifikat_produk` varchar(100) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `masa_berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sertifikat_produk`
--

INSERT INTO `tb_sertifikat_produk` (`id_sertifikat_produk`, `id_user`, `nama_sertifikat_produk`, `tanggal_terbit`, `masa_berlaku`) VALUES
(1, 3, '31-dahahd', '2021-04-08', '2021-04-17'),
(2, 4, 'Roy Achmad Aziz', '2021-04-07', '2021-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_tb_user` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `nib` varchar(50) DEFAULT NULL,
  `jumlah_karyawan` int(10) DEFAULT NULL,
  `nama_tempat_usaha` varchar(100) DEFAULT NULL,
  `nama_pj` varchar(100) DEFAULT NULL,
  `nomor_telepon_pj` varchar(100) DEFAULT NULL,
  `jenis_usaha` varchar(100) DEFAULT NULL,
  `no_p2k3` varchar(50) NOT NULL,
  `tanggal_p2k3` varchar(50) NOT NULL,
  `level` int(1) DEFAULT '2',
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_tb_user`, `username`, `password`, `email`, `nama_perusahaan`, `alamat`, `nib`, `jumlah_karyawan`, `nama_tempat_usaha`, `nama_pj`, `nomor_telepon_pj`, `jenis_usaha`, `no_p2k3`, `tanggal_p2k3`, `level`, `last_login`) VALUES
(1, 'disnaker', 'disnaker', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1, '2021-04-05 13:12:41'),
(2, 'pemerintah', 'pemerintah', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 3, '2021-04-05 10:38:08'),
(3, 'pertamina', 'pertamina', 'royachmad06@gmail.com', 'Pertamina', 'Jalan Ngagel Surabaya ', '89872631', 100, NULL, 'roy achmad', '081944819792', NULL, '928377721', '2021-04-02', 2, '2021-04-05 09:09:47'),
(4, 'surveyor', 'surveyor', 'royachmad06@gmail.com', 'surveyor', ' Jalan Comal no 7-9', '7218273612132', 100, NULL, 'roy achmad', '081944819792', NULL, '928377721', '2021-04-07', 2, '2021-04-05 11:47:41'),
(5, 'roy', 'roy', 'royachmad06@gmail.com', 'tambang', 'jalan surabaya ', '627633', 1000, NULL, 'roy achmad', '081944819792', NULL, '928377721', '2021-04-06', 2, '2021-04-05 14:49:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahlik3umum`
--
ALTER TABLE `ahlik3umum`
  ADD PRIMARY KEY (`id_ahlik3umum`);

--
-- Indexes for table `k3listrik`
--
ALTER TABLE `k3listrik`
  ADD PRIMARY KEY (`id_k3listrik`);

--
-- Indexes for table `lingker`
--
ALTER TABLE `lingker`
  ADD PRIMARY KEY (`id_lingker`);

--
-- Indexes for table `lingker_higiene`
--
ALTER TABLE `lingker_higiene`
  ADD PRIMARY KEY (`id_higiene`);

--
-- Indexes for table `lingker_jurulas`
--
ALTER TABLE `lingker_jurulas`
  ADD PRIMARY KEY (`id_jurulas`);

--
-- Indexes for table `lingker_k3`
--
ALTER TABLE `lingker_k3`
  ADD PRIMARY KEY (`id_k3`);

--
-- Indexes for table `lingker_ketinggian`
--
ALTER TABLE `lingker_ketinggian`
  ADD PRIMARY KEY (`id_ketinggian`);

--
-- Indexes for table `lingker_pemeriksaan`
--
ALTER TABLE `lingker_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `lingker_rekaman`
--
ALTER TABLE `lingker_rekaman`
  ADD PRIMARY KEY (`id_rekaman`);

--
-- Indexes for table `lingker_ruang`
--
ALTER TABLE `lingker_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `listrik_ak3_listrik`
--
ALTER TABLE `listrik_ak3_listrik`
  ADD PRIMARY KEY (`id_ak3_listrik`);

--
-- Indexes for table `listrik_ijin_listrik`
--
ALTER TABLE `listrik_ijin_listrik`
  ADD PRIMARY KEY (`id_ijin_listrik`);

--
-- Indexes for table `listrik_ijin_petir`
--
ALTER TABLE `listrik_ijin_petir`
  ADD PRIMARY KEY (`id_ijin_petir`);

--
-- Indexes for table `listrik_pemeriksaan_listrik`
--
ALTER TABLE `listrik_pemeriksaan_listrik`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `listrik_pemeriksaan_petir`
--
ALTER TABLE `listrik_pemeriksaan_petir`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `listrik_teknisi`
--
ALTER TABLE `listrik_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `p2_covid`
--
ALTER TABLE `p2_covid`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `p3k`
--
ALTER TABLE `p3k`
  ADD PRIMARY KEY (`id_p3k`);

--
-- Indexes for table `p3k_petugas`
--
ALTER TABLE `p3k_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `sertifikat_smk3`
--
ALTER TABLE `sertifikat_smk3`
  ADD PRIMARY KEY (`id_sertifikat_smk3`);

--
-- Indexes for table `tb_izin_usaha`
--
ALTER TABLE `tb_izin_usaha`
  ADD PRIMARY KEY (`id_izin_usaha`);

--
-- Indexes for table `tb_kebakaran`
--
ALTER TABLE `tb_kebakaran`
  ADD PRIMARY KEY (`id_tb_kebakaran`);

--
-- Indexes for table `tb_kebakaran_ak3`
--
ALTER TABLE `tb_kebakaran_ak3`
  ADD PRIMARY KEY (`id_ak3`);

--
-- Indexes for table `tb_kebakaran_alarm`
--
ALTER TABLE `tb_kebakaran_alarm`
  ADD PRIMARY KEY (`id_alarm`);

--
-- Indexes for table `tb_kebakaran_apar`
--
ALTER TABLE `tb_kebakaran_apar`
  ADD PRIMARY KEY (`id_apar`);

--
-- Indexes for table `tb_kebakaran_gladi`
--
ALTER TABLE `tb_kebakaran_gladi`
  ADD PRIMARY KEY (`id_gladi`);

--
-- Indexes for table `tb_kebakaran_hydrant`
--
ALTER TABLE `tb_kebakaran_hydrant`
  ADD PRIMARY KEY (`id_hydrant`);

--
-- Indexes for table `tb_kebakaran_instalasi`
--
ALTER TABLE `tb_kebakaran_instalasi`
  ADD PRIMARY KEY (`id_instalasi`);

--
-- Indexes for table `tb_kebakaran_penanggulangan`
--
ALTER TABLE `tb_kebakaran_penanggulangan`
  ADD PRIMARY KEY (`id_penanggulangan`);

--
-- Indexes for table `tb_kebakaran_petugas`
--
ALTER TABLE `tb_kebakaran_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_kebakaran_sprinkler`
--
ALTER TABLE `tb_kebakaran_sprinkler`
  ADD PRIMARY KEY (`id_sprinkler`);

--
-- Indexes for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
  ADD PRIMARY KEY (`id_kecelakaan`);

--
-- Indexes for table `tb_laporan_p2k3`
--
ALTER TABLE `tb_laporan_p2k3`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_mekanik_angkat`
--
ALTER TABLE `tb_mekanik_angkat`
  ADD PRIMARY KEY (`id_angkat`);

--
-- Indexes for table `tb_mekanik_bejana`
--
ALTER TABLE `tb_mekanik_bejana`
  ADD PRIMARY KEY (`id_bejana`);

--
-- Indexes for table `tb_mekanik_elevator`
--
ALTER TABLE `tb_mekanik_elevator`
  ADD PRIMARY KEY (`id_elevator`);

--
-- Indexes for table `tb_mekanik_ketel`
--
ALTER TABLE `tb_mekanik_ketel`
  ADD PRIMARY KEY (`id_ketel`);

--
-- Indexes for table `tb_mekanik_mesin`
--
ALTER TABLE `tb_mekanik_mesin`
  ADD PRIMARY KEY (`id_mesin`);

--
-- Indexes for table `tb_mekanik_ukur`
--
ALTER TABLE `tb_mekanik_ukur`
  ADD PRIMARY KEY (`id_ukur`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_tb_pertanyaan`);

--
-- Indexes for table `tb_sertfikat_standard`
--
ALTER TABLE `tb_sertfikat_standard`
  ADD PRIMARY KEY (`id_sertifikat_standard`);

--
-- Indexes for table `tb_sertifikat_produk`
--
ALTER TABLE `tb_sertifikat_produk`
  ADD PRIMARY KEY (`id_sertifikat_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_tb_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahlik3umum`
--
ALTER TABLE `ahlik3umum`
  MODIFY `id_ahlik3umum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `k3listrik`
--
ALTER TABLE `k3listrik`
  MODIFY `id_k3listrik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lingker`
--
ALTER TABLE `lingker`
  MODIFY `id_lingker` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lingker_higiene`
--
ALTER TABLE `lingker_higiene`
  MODIFY `id_higiene` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lingker_jurulas`
--
ALTER TABLE `lingker_jurulas`
  MODIFY `id_jurulas` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lingker_k3`
--
ALTER TABLE `lingker_k3`
  MODIFY `id_k3` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lingker_ketinggian`
--
ALTER TABLE `lingker_ketinggian`
  MODIFY `id_ketinggian` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lingker_pemeriksaan`
--
ALTER TABLE `lingker_pemeriksaan`
  MODIFY `id_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lingker_rekaman`
--
ALTER TABLE `lingker_rekaman`
  MODIFY `id_rekaman` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lingker_ruang`
--
ALTER TABLE `lingker_ruang`
  MODIFY `id_ruang` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `listrik_ak3_listrik`
--
ALTER TABLE `listrik_ak3_listrik`
  MODIFY `id_ak3_listrik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `listrik_ijin_listrik`
--
ALTER TABLE `listrik_ijin_listrik`
  MODIFY `id_ijin_listrik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `listrik_ijin_petir`
--
ALTER TABLE `listrik_ijin_petir`
  MODIFY `id_ijin_petir` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `listrik_pemeriksaan_listrik`
--
ALTER TABLE `listrik_pemeriksaan_listrik`
  MODIFY `id_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `listrik_pemeriksaan_petir`
--
ALTER TABLE `listrik_pemeriksaan_petir`
  MODIFY `id_pemeriksaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `listrik_teknisi`
--
ALTER TABLE `listrik_teknisi`
  MODIFY `id_teknisi` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p2_covid`
--
ALTER TABLE `p2_covid`
  MODIFY `id_pertanyaan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p3k`
--
ALTER TABLE `p3k`
  MODIFY `id_p3k` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p3k_petugas`
--
ALTER TABLE `p3k_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sertifikat_smk3`
--
ALTER TABLE `sertifikat_smk3`
  MODIFY `id_sertifikat_smk3` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_izin_usaha`
--
ALTER TABLE `tb_izin_usaha`
  MODIFY `id_izin_usaha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kebakaran`
--
ALTER TABLE `tb_kebakaran`
  MODIFY `id_tb_kebakaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kebakaran_ak3`
--
ALTER TABLE `tb_kebakaran_ak3`
  MODIFY `id_ak3` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kebakaran_alarm`
--
ALTER TABLE `tb_kebakaran_alarm`
  MODIFY `id_alarm` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kebakaran_apar`
--
ALTER TABLE `tb_kebakaran_apar`
  MODIFY `id_apar` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kebakaran_gladi`
--
ALTER TABLE `tb_kebakaran_gladi`
  MODIFY `id_gladi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kebakaran_hydrant`
--
ALTER TABLE `tb_kebakaran_hydrant`
  MODIFY `id_hydrant` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kebakaran_instalasi`
--
ALTER TABLE `tb_kebakaran_instalasi`
  MODIFY `id_instalasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kebakaran_penanggulangan`
--
ALTER TABLE `tb_kebakaran_penanggulangan`
  MODIFY `id_penanggulangan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kebakaran_petugas`
--
ALTER TABLE `tb_kebakaran_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kebakaran_sprinkler`
--
ALTER TABLE `tb_kebakaran_sprinkler`
  MODIFY `id_sprinkler` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kecelakaan`
--
ALTER TABLE `tb_kecelakaan`
  MODIFY `id_kecelakaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_laporan_p2k3`
--
ALTER TABLE `tb_laporan_p2k3`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_mekanik_angkat`
--
ALTER TABLE `tb_mekanik_angkat`
  MODIFY `id_angkat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_mekanik_bejana`
--
ALTER TABLE `tb_mekanik_bejana`
  MODIFY `id_bejana` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_mekanik_elevator`
--
ALTER TABLE `tb_mekanik_elevator`
  MODIFY `id_elevator` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_mekanik_ketel`
--
ALTER TABLE `tb_mekanik_ketel`
  MODIFY `id_ketel` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_mekanik_mesin`
--
ALTER TABLE `tb_mekanik_mesin`
  MODIFY `id_mesin` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_mekanik_ukur`
--
ALTER TABLE `tb_mekanik_ukur`
  MODIFY `id_ukur` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_tb_pertanyaan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_sertfikat_standard`
--
ALTER TABLE `tb_sertfikat_standard`
  MODIFY `id_sertifikat_standard` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_sertifikat_produk`
--
ALTER TABLE `tb_sertifikat_produk`
  MODIFY `id_sertifikat_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_tb_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
