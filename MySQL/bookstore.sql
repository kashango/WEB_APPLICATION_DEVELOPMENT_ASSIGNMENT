-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 09:40 PM
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
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `userid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `booktitle` varchar(250) NOT NULL,
  `bookid` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(50) NOT NULL,
  `booktitle` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `review` varchar(10000) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `booktitle`, `author`, `review`, `price`) VALUES
(1, 'DEADLY KEYHOLES', 'Julie Morton', 'A cornered woman is a dangerous animal. Some in Julie Morton’s second novel, Deadly Keyholes, pay for this lesson with their lives. Miranda LaVelle, an abused, neglected child of the Roaring 20s Jazz Age, is rescued from poverty and probable death by her great aunt, Genevieve Woods. Genevieve’s gritty life in a wild, oil boomtown in South Arkansas is not suitable for a child, but there is no choice. To four-year-old Miranda, her new circumstances are more wonderful than she could have ever imagined. Doting women, plenty of food, clean clothes, and bedding, what else could one want? But, even after miraculously becoming a world-renowned, concert pianist, her life and the lives of those around her are not easy. Multiple, grisly murders haunt them. If you appreciate powerful, independent women who will do whatever is necessary to protect those they love, then come, share Miranda’s journey. Let her story reassure you of the resilience of the human spirit and restore your hope that all darkness passes, and then comes the dawn.', 199.99),
(2, 'THE WICKED KING', 'Holly Black', 'After learning that Oak is the heir to Faerie, Jude must keep her younger brother safe. To do so, she has bound the wicked king, Cardan, to her, and made herself the power behind the throne. But he does everything in his power to humiliate and undermine her, even as his fascination with her remains undiminished. Someone close to Jude means to betray her, threatening her own life and the lives of everyone she loves. Now she must uncover the traitor and fight her own complicated feelings for Cardan, in order to maintain control as a mortal in a Faerie world. -- adapted from jacket', 249.99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `email`) VALUES
(1, 'Tangi', 'Tangi', 'tangisylvester@gmail.com'),
(2, 'John', 'John', 'john@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
