-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 10:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khojilive`
--

-- --------------------------------------------------------

--
-- Table structure for table `package_translation`
--

CREATE TABLE `package_translation` (
  `Id` int(11) NOT NULL,
  `hindiText` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_translation`
--

INSERT INTO `package_translation` (`Id`, `hindiText`) VALUES
(1, '1.कोई भी अब आपके लापता व्यक्ति को केवल चेहरे और अपलोडेड जानकारी के ही माध्यम से\nसर्च करके आपसे संपर्क कर सकता है'),
(2, '2 जैसे ही आपके लापता व्यक्ति से संबंधित मैच फाउंड होगा तो तरुंत व्हाट्सएप और\r\nएसएमएस नोटिफफकेशन प्राप्त करें।'),
(3, '3. लापता व्यक्ति की डिटेल्स ऐक्तिव ओर इनएक्तिव जैसी सुविधाओ के साथ आसानी से शेयर\r\nकर सकते है'),
(4, '4. जब पुलिस, एनजीओ या सोशल वर्कर आपके गुमशुदा व्यक्ति की जानकारी पहचान के लिए\r\nअपलोड करें, तो आपको अलर्ट मिलेगा।');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_translation`
--
ALTER TABLE `package_translation`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_translation`
--
ALTER TABLE `package_translation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
