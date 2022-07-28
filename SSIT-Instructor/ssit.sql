--
-- Database: `id19331295_ssit`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `sno` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_instructor` varchar(255) NOT NULL,
  `course_image` text NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_lectures` int(11) NOT NULL,
  `course_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`sno`, `category`, `course_id`, `course_name`, `course_instructor`, `course_image`, `course_duration`, `course_lectures`, `course_price`) VALUES
(1, 'web technologies', '540', 'fullstack', 'arun', ' Screenshot (4).png', 10, 8, '1000'),
(2, 'cse', '143', 'flat', 'tharun', ' Screenshot (3).png', 10, 12, '1200'),
(3, 'cse', '145', 'DBMS', 'Varun', ' Screenshot (3).png', 9, 10, '2002'),
(4, 'cse', '147', 'daa', 'sri', ' Screenshot (3).png', 15, 26, '299'),
(5, 'cse', '140', 'cyber security', 'Jnani', ' Screenshot (3).png', 18, 27, '$45'),
(6, 'cse', '1099', 'machine learning', 'jai', ' Screenshot (1).png', 21, 29, '$76'),
(7, 'arun', 'arun', 'arun', 'arun', ' Screenshot (4).png', 19, 38, ' $89');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `user`, `pass`) VALUES
(1, 'q', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `sno` int(11) NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
