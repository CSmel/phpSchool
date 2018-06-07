--
-- Database: `book_sc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` char(16) NOT NULL,
  `password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn` char(13) NOT NULL,
  `author` char(80) DEFAULT NULL,
  `title` char(100) DEFAULT NULL,
  `catid` int(10) UNSIGNED DEFAULT NULL,
  `price` float(4,2) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `author`, `title`, `catid`, `price`, `description`) VALUES
('0345530578', 'John Grisham', 'The Racketeer', 5, 9.52, 'In the history of the United States, only four active federal judges have been murdered. Judge Raymond Fawcett has just become number five. His body is found in his remote lakeside cabin.'),
('0602399846', 'Brett L. Markham', 'Mini Farming: Self-Sufficiency on 1/4 Acre', 4, 14.36, 'Mini Farming describes a holistic approach to small-area farming that will show you how to produce 85 percent of an average family’s food on just a quarter acre—and earn $10,000 in cash annually while spending less than half the time that an ordinary job '),
('0603426947', ' Jennifer Kujawski & Ron Kujaw', 'The Week-by-Week Vegetable Gar', 4, 11.21, 'Whether you’re a seasoned gardener determined to increase crop yields or starting your very first vegetable garden, the Week-by-Week Gardener’s Handbook will help you manage your schedule and prioritize what’s important\n'),
('0672319241', 'Sterling Hughes and Andrei Zmievski', 'PHP Developer''s Cookbook', 1, 39.99, 'Provides a complete, solutions-oriented guide to the challenges most often faced by PHP developers\r\nWritten specifically for experienced Web developers, the book offers real-world solutions to real-world needs\r\n'),
('0672329166', 'Luke Welling and Laura Thomson', 'PHP and MySQL Web Development', 1, 49.99, 'PHP & MySQL Web Development teaches the reader to develop dynamic, secure e-commerce web sites. You will learn to integrate and implement these technologies by following real-world examples and working sample projects.'),
('067232976X', 'Julie Meloni', 'Sams Teach Yourself PHP, MySQL and Apache All-in-One', 1, 34.99, 'Using a straightforward, step-by-step approach, each lesson in this book builds on the previous ones, enabling you to learn the essentials of PHP scripting, MySQL databases, and the Apache web server from the ground up.'),
('0810959542', ' Carlos Fuentes', 'The Diary of Frida Kahlo: An Intimate Self-Portrait', 6, 15.88, 'The intimate life of artist Frida Kahlo is wonderfully revealed in the illustrated journal she kept during her last 10 years. This passionate and at times surprising record contains the artist''s thoughts, poems, and dreams; many reflecting her stormy relationship with her husband, artist Diego Rivera, along with 70 mesmerising watercolour illustrations. '),
('1111138776', 'Rick Parker', 'Equine Science, 4th Edition 4th Edition', 3, 47.99, 'Get the scientific understanding of horses necessary for success in equine care and management with EQUINE SCIENCE, 4th Edition! Richly illustrated in full color, the book uses a logical, easy-to-follow outline to make learning simple, while addressing es'),
('1609612248', 'Hal Higdon', 'Marathon: The Ultimate Training Guide: Advice, Plans, and Programs for Half and Full Marathons', 7, 12.93, 'Especially in tough economic times, running offers an affordable and positive way to relieve stress\nand gain a sense of accomplishment. ');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(10) UNSIGNED NOT NULL,
  `catname` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`) VALUES
(1, 'Internet'),
(2, 'Self-help'),
(3, 'Equine'),
(4, 'Gardening'),
(5, 'Fiction'),
(6, 'Art'),
(7, 'Running'),
(8, 'Traveling');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` char(60) NOT NULL,
  `address` char(80) NOT NULL,
  `city` char(30) NOT NULL,
  `state` char(20) DEFAULT NULL,
  `zip` char(10) DEFAULT NULL,
  `country` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` float(6,2) DEFAULT NULL,
  `date` date NOT NULL,
  `order_status` char(10) DEFAULT NULL,
  `ship_name` char(60) NOT NULL,
  `ship_address` char(80) NOT NULL,
  `ship_city` char(30) NOT NULL,
  `ship_state` char(20) DEFAULT NULL,
  `ship_zip` char(10) DEFAULT NULL,
  `ship_country` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `isbn` char(13) NOT NULL,
  `item_price` float(4,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`orderid`,`isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
