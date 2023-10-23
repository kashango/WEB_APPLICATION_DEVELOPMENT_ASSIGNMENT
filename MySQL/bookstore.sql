-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 10:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`userid`, `username`, `booktitle`, `bookid`, `price`) VALUES
(1, 'Tangi', 'DEADLY KEYHOLES', 1, 199.99),
(1, 'Tangi', 'THE WICKED KING', 2, 249.99);

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
(2, 'THE WICKED KING', 'Holly Black', 'After learning that Oak is the heir to Faerie, Jude must keep her younger brother safe. To do so, she has bound the wicked king, Cardan, to her, and made herself the power behind the throne. But he does everything in his power to humiliate and undermine her, even as his fascination with her remains undiminished. Someone close to Jude means to betray her, threatening her own life and the lives of everyone she loves. Now she must uncover the traitor and fight her own complicated feelings for Cardan, in order to maintain control as a mortal in a Faerie world. -- adapted from jacket', 249.99),
(3, 'GHOST PRINCESS', 'Lana Watts', 'Graylands is where people go when they don\'t want to be found. A neutral, mostly frontier country between two opposing empires, it is a haven for drifters, pilgrims, outlaws, and everything in between hoping to build a new life, find adventure, or just disappear. Katrina Lamont is one such individual. Once upon a time, she was the Chosen One-a warrior charged with a great and heroic destiny. But when she finished her journey, there was no happy ending waiting for her. Now she lives as an embittered, alcoholic drifter, haunted by the ghosts of her past. But when an evil sorcerer, Jacob Daredin, seeks to fulfill an ancient prophecy that may grant him god-like power, Katrina will have to take up the sword once again as she finds herself caught in a race to find the young woman whose sacrifice is the key to Daredin\'s mad dream. Along the way, she will contend with Krutch Leeroy-an infamous outlaw who is not all he seems-and cross paths with Lily Blackthorn-a perky, but mysterious woman with a dark secret of her own. As Daredin\'s forces close in, they will traverse a haunted landscape of pirates, demons, killers, con-men, an immortal juggernaut, and worse in an adventure where the line between destiny and plain bad luck is razor thin.', 399.99),
(4, 'HARRY POTTER AND THE CURSED CHILD', 'J K Rowling', 'It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children.\r\n\r\nWhile Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.', 299.99),
(5, 'THE GREAT GATSBY', 'F.Scott Fitzgerald', 'On the surface, The Great Gatsby plays out as a tragic romance and yet, the complexity of the story transcends Jay and Daisy\'s love story. Full of equal parts hope and desperation, The Great Gatsby illuminates the decadent excess and corruption of the Jazz Age, which still manages to hold a mirror to our own society.', 299.99),
(6, 'BORING GIRLS', 'Sara Taylor', 'Rachel feels like she doesn’t fit in — until she finds heavy metal and meets Fern, a kindred spirit. The two form their own band, but the metal scene turns out to be no different than the misogynist world they want to change. Violent encounters escalate, and the friends decide there’s only one way forward .', 299.99),
(7, 'ALL THE LIGHT WE CANNOT SEE', 'Anthony Doerr', 'While not afraid to confront the horrors of the Second World War, All the Light We Cannot See is a story of hope and resistance. The novel offers the reader an interesting glimpse into the French Resistance, Le Maquis, in his portrayal of the occupied city of Saint-Malo.', 499.99),
(8, 'HOUSE OF RULES', 'Jodi Picoult', 'They tell me I\'m lucky to have a son who\'s so verbal, who is blisteringly intelligent, who can take apart the broken microwave and have it working again an hour later. They think there is no greater hell than having a son who is locked in his own world, unaware that there\'s a wider one to explore. But try having a son who is locked in his own world, and still wants to make a connection. A son who tries to be like everyone else, but truly doesn\'t know how.', 349.99),
(9, 'IT ENDS WITH US', 'Colleen Hoover', 'It Ends with Us\" by Colleen Hoover is a novel that explores the gray areas of human relationships, defying the notion of clear-cut right and wrong, challenging readers to question their own preconceived notions and judgments.', 299.99),
(10, 'MY SISTER\'S KEEPER', 'Jodi Picoult', 'Brilliant. My Sister\'s Keeper is bittersweet, thought-provoking and poignant. The story is about Anna, a 13-year-old girl who is average in every way except for the circumstances of her life. Anna is a genetically engineered baby, designed to be a genetic match for her sister, Kate, who has acute leukaemia. Anna has spent her life giving blood and bone marrow to Kate and is under pressure to give a kidney. Now Anna wants to sue her parents for the right to her body.', 339.99),
(11, 'THE ALCHEMIST', 'Paulo Coelho', 'The story is about a Shepherd boy from Spain whose name is Santiago. He keeps getting the same dream about treasures that are lying in the Pyramids of Egypt. He embarks on a journey to follow his dream after meeting an old king who offers him magic stones and advice. Santiago crosses the Mediterranean and Sahara to find his treasures in Egypt and also accomplish his personal legend which is his purpose in life.', 229.99),
(12, 'THE GIRL WITH THE DRAGON TATTOO', 'Stieg Larsson', 'The Girl With The Dragon Tattoo is a simple mystery thriller, but on a deeper level, the book is an examination of the violent abuse of women in Sweden, focusing particularly on the warped philosophies and governmental failures that permit such acts.', 599.99),
(13, 'THE HUNGER GAMES CATCHING FIRE', 'Suzanne Collins', 'Catching Fire details the aftermath of Katniss Everdeen and Peeta Mellark\'s victory in the 74th Hunger Games from the first novel. Despite leaving the arena, Katniss and her loved ones are in more danger than ever as the threat of punishment looms.', 499.99),
(14, 'THE HUNGER GAMES THE BALLAD OF SONGBIRDS AND SNAKE', 'Suzanne Collins', 'Following a long and costly war with the Districts, in which the Capitol was under direct siege for several months, the Capitol remains heavily damaged and is only beginning to recover after victory. The once-wealthy and powerful Snow family has fallen on hard times, mainly due to their munitions factory in District 13 being destroyed in the war. The Snows\' patriarch, General Crassus Xanthos Snow, led the Capitol\'s forces as a key strategist and war hero until he was killed in action. While determined to keep up appearances, Crassus\'s son, eighteen-year-old Coriolanus Snow, his cousin Tigris, and their paternal grandmother (nicknamed \"Grandma’am\") are running out of options and resources.', 449.99),
(15, 'THE HUNGER GAMES', 'Suzanne Collins', 'I decided to do a book review over The Hunger Games  by Suzanne Collins. It came out back in 2008, yet I only read it this past school year. It was a lovely discovery. I have not been able to find any recent books that I am interested in enough to read. But reading The Hunger Games caught my full attention and interested me greatly.', 899.99),
(16, 'THE SUBTLE ART OF NOT GIVING A FUCK', 'Mark Manson', '\"The Subtle Art of Not Giving a F*ck\" by Mark Manson is a self-help book that offers a different perspective on personal growth and happiness. It encourages readers to prioritize what truly matters to them and let go of societal pressures and expectations', 489.99),
(17, 'BUTTS A BACKSTORY', 'Heather Radke', 'Whether we love them or hate them, think they’re sexy, think they’re strange, consider them too big, too small, or anywhere in between, humans have a complicated relationship with butts. It is a body part unique to humans, critical to our evolution and survival, and yet it has come to signify so much more: sex, desire, comedy, shame. A woman’s butt, in particular, is forever being assessed, criticized, and objectified, from anxious self-examinations trying on jeans in department store dressing rooms to enduring crass remarks while walking down a street or high school hallways. But why? In Butts: A Backstory, reporter, essayist, and RadioLab contributing editor Heather Radke is determined to find out.', 759.99),
(18, 'WHATS LEFT OF ME', 'Kat Zhang', 'After suffering through an unspeakable tragedy, Cole settles into his sister\'s pool house until he can get back on his feet. He\'s convinced that he deserves to live with the guilt he harbors from his past, and wants nothing more than to be left alone. Yet he can\'t seem to stay away from his beautiful neighbor.', 399.99);

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
  MODIFY `bookid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
