-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2016 at 03:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontEndFinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `element` varchar(100) NOT NULL,
  `value` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `element`, `value`) VALUES
(1, 'h1', 'Do not wait â€”<span> launch</span> your startup now!'),
(2, 'p', 'this tempate is flexible enough to suit any kind of startup or new business'),
(3, 'h1', 'FOR EVERY <span>STARTUP</span>'),
(4, 'p', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh  sdfs sit atmet sit dolor greand fdanrh sdfs'),
(5, 'p', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.'),
(6, 'h1', 'NEW AGE <span>TECHNOLOGY</span>'),
(7, 'p', 'Lorem ipsum dolor sit atmet sit dolor greand<br>sdfs sit atmet sit dolor greand fdanrh sdfs'),
(8, 'p', 'Iner his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,nihilamane umquam magnum ac cognitione.'),
(9, 'h1', 'HANG <span>ON TO</span> YER HELMET'),
(10, 'p', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh \r\nsdfs sit atmet sit dolor greand fdanrh sdfs'),
(11, 'p', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed \r\nvirtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non \r\nerat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.'),
(12, 'p', 'LOREM DOLOR'),
(13, 'p', 'Sit amet, consectetuar adipiscing elit \r\nhac divisione rem ipsam prorsus'),
(14, 'p', 'LOREM DOLOR'),
(15, 'p', 'Sit amet, consectetuar adipiscing elit \r\nhac divisione rem ipsam prorsus'),
(16, 'p', 'LOREM DOLOR'),
(17, 'p', 'Sit amet, consectetuar adipiscing elit hac divisione rem ipsam prorsus'),
(18, 'h1', 'GET LIVE UPDATES'),
(19, 'p', 'No spam promise - only latest news and prices!'),
(20, 'h1', 'PRODUCT <span>PACKAGES</span>'),
(21, 'p', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh s <br> dfs sit atmet sit dolor greand fdanrh sdfs'),
(22, 'heading', 'INVIDUAL'),
(23, 'cost', '19'),
(24, 'period', 'PER MONTH'),
(25, 'heading', 'STUDIO'),
(26, 'cost', '29'),
(27, 'period', 'SUBSCRIPTION'),
(28, 'heading', 'ENTERPRISE'),
(29, 'cost', '49'),
(30, 'period', 'PER MONTH'),
(31, 'h1', '<span>OUR</span> AWARDS'),
(32, 'p', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh s dfs sit atmet sit dolor greand fdanrh sdfsd'),
(33, 'h1', 'WHAT <span>CLIENTS</span> SAY'),
(34, 'p', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel <br>\r\nrutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi <br>\r\nmauris, nec rhoncus dolor consectetur vitae lorem ipsum.'),
(35, 'p', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel <br>rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi <br>mauris, nec rhoncus dolor consectetur vitae lorem ipsum.'),
(36, 'p', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel <br>rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi <br>mauris, nec rhoncus dolor consectetur vitae lorem ipsum.'),
(37, 'p', 'BEHIND <span>THE</span> SCENES'),
(38, 'p', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh s \r\ndfs sit atmet sit dolor greand fdanrh sdfs'),
(39, 'p', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil \r\nampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae \r\nqui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma. \r\nScien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, \r\nnihilamane umquam magnum ac cognitione.'),
(40, 'p', 'Mike has worked with CARE USA, for 12 <br> years holding positions such as Deputy <br> Country Director to Director of Programs <br> and Information Systems.'),
(41, 'p', 'Mike has worked with CARE USA, for 12 <br> years holding positions such as Deputy <br> Country Director to Director of Programs <br> and Information Systems.'),
(42, 'p', 'Ellen has over 13 years of <br> experience in development projects <br> as a senior consultant and project <br> manager in the areas of project management, fund and board <br> development, strategic & financial <br> planning, monitoring & evaluation.'),
(43, 'p', 'Mike has worked with CARE USA for <br> 12 years.'),
(44, 'h2', '\r\nLAUNCH YOUR STARTUP NOW!'),
(45, 'p', 'n his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.'),
(46, 'p', 'Ut enim ad minim veniam, quis nostrud exercitation <br> ullamco. Qui officia deserunt mollit anim id est <br> laborum. Ut enim ad minim veniam, quis nostrud <br> exercitation ullamco. Nisi ut aliquid ex ea commodi <br> consequatur?<br><br><b>John Doeson, Founder.</b>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
