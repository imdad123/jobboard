-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 10:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `admin_id`) VALUES
('admin', 'da7e55167b2d6cdb0f5b7a58fcbe5a73e25ed447', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(2, 'cricket1');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `founded` int(11) NOT NULL,
  `company_user` int(11) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `name`, `Logo`, `about`, `founded`, `company_user`, `website`) VALUES
(2, 'jhgjhg', 'http://[::1]/jobboard/uploads/active1.png', 'jhhgh', 2017, 11, 'kjh'),
(3, 'its a company', 'http://[::1]/jobboard/uploads/4.png', 'fsadf', 2017, 3, 'fsadf');

-- --------------------------------------------------------

--
-- Table structure for table `interview_category`
--

CREATE TABLE `interview_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_category`
--

INSERT INTO `interview_category` (`category_id`, `category_name`) VALUES
(1, 'php'),
(2, 'c#'),
(3, 'fs'),
(4, 'gsdf'),
(5, 'fs'),
(6, 'gsdf'),
(7, 'fs'),
(8, 'sfdg'),
(9, 'fs'),
(10, 'sfdg');

-- --------------------------------------------------------

--
-- Table structure for table `interview_questions`
--

CREATE TABLE `interview_questions` (
  `question_id` int(11) NOT NULL,
  `question_text` varchar(255) NOT NULL,
  `question_answer` varchar(255) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_questions`
--

INSERT INTO `interview_questions` (`question_id`, `question_text`, `question_answer`, `categories_id`) VALUES
(1, 'what is php stand for?', 'php stand for hyper text markup langauge', 1),
(2, 'abc', 'abfj', 1),
(3, 'ksdhfa', 'haksf', 1),
(4, 'abc', 'abfj', 1),
(5, 'ksdhfa', 'haksf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `job_contract` int(11) NOT NULL,
  `city` text NOT NULL,
  `job_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `job_vacancy` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `title`, `description`, `skill`, `company_id`, `category_id`, `job_contract`, `city`, `job_date`, `job_vacancy`, `salary`) VALUES
(3, 'php developer', 'this is a php developer job', 'php mysql ', 2, 2, 2, 'usa', '2017-04-25 11:27:37', 'designer', 4000),
(4, 'web designer', 'ksadjflksajdf', 'jquery ', 3, 1, 2, 'peshawar', '2017-05-05 07:46:51', 'web designer', 2141);

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE `jobseekers` (
  `jobseeker_id` int(11) NOT NULL,
  `jobseeker_name` text NOT NULL,
  `jobseeker_about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `vision` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `jobseeker_loginid` int(11) NOT NULL,
  `skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`jobseeker_id`, `jobseeker_name`, `jobseeker_about`, `image`, `vision`, `education`, `experience`, `jobseeker_loginid`, `skills`) VALUES
(1, 'fsadf', 'fdas', '', 'fasd', 'fasd', 'fasd', 14, 'fasdf'),
(2, 'Imdad ullah 124', 'fhasjk', 'http://[::1]/jobboard/uploads/bootstrap,psd-to-html1.png', 'fas', 'jkasfh', 'fajsk', 29, 'pph'),
(3, 'Jobseeker1', 'fsd', 'http://[::1]/jobboard/uploads/2017-09-11_(7).jpg', 'to build a great future', 'fsdaf', 'fsa', 2, 'Php mysql jquery');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `apply_id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `additional_info` varchar(255) NOT NULL,
  `company_job` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`apply_id`, `jobseeker_id`, `job_id`, `cv`, `additional_info`, `company_job`) VALUES
(5, 1, 3, 'http://[::1]/jobboard/uploads/contract.doc', 'imdadfsadf', 2),
(6, 1, 4, 'http://[::1]/jobboard/uploads/contract1.doc', 'asdfasdf', 3),
(7, 1, 3, 'http://[::1]/jobboard/uploads/contract2.doc', 'abdullah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `jobcat_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`jobcat_id`, `category_name`) VALUES
(1, 'software ');

-- --------------------------------------------------------

--
-- Table structure for table `job_contract`
--

CREATE TABLE `job_contract` (
  `contract_id` int(11) NOT NULL,
  `contract_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_contract`
--

INSERT INTO `job_contract` (`contract_id`, `contract_cat`) VALUES
(1, 'Full Time'),
(2, 'Freelancer'),
(3, 'Internship'),
(4, 'Part Time'),
(5, 'Temporary');

-- --------------------------------------------------------

--
-- Table structure for table `job_invited`
--

CREATE TABLE `job_invited` (
  `jobinvite_id` int(11) NOT NULL,
  `jobseekerapply_id` int(11) NOT NULL,
  `companyjob_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `additional_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_invited`
--

INSERT INTO `job_invited` (`jobinvite_id`, `jobseekerapply_id`, `companyjob_id`, `job_id`, `additional_info`) VALUES
(1, 1, 2, 3, 'fdsafsa'),
(2, 1, 2, 3, 'you are invited to the interview '),
(4, 1, 2, 3, 'you are invited'),
(6, 2, 3, 0, '     you are invited '),
(7, 3, 3, 0, '                 \r\n             you are again invited ');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `mentor_id` int(11) NOT NULL,
  `mentor_name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `login_id` int(11) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`mentor_id`, `mentor_name`, `about`, `image`, `login_id`, `skills`) VALUES
(1, 'imdad', 'fafadsfsadfffafs', '', 8, 'php mysql'),
(2, 'Awais', 'this is awais', 'http://[::1]/jobboard/uploads/images_(3)1.jpg', 13, 'php mysql'),
(3, 'imdad', 'learn more here', 'http://[::1]/jobboard/uploads/images_(1)6.jpg', 9, 'php mysql'),
(4, 'gdsfg', 'gsdfg', '', 9, 'fasdfsa'),
(5, 'safd', 'fasd', 'fsda', 9, 'dsfg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `jobseeker_id`, `mentor_id`, `message`) VALUES
(1, 1, 2, 'hi how are you.'),
(2, 1, 2, 'hi how are you.'),
(3, 1, 2, 'going good thanks for the response'),
(4, 1, 1, 'hi how are u'),
(5, 1, 3, 'kjhjgjhgjh'),
(6, 1, 3, 'hfhgfgh'),
(7, 3, 4, 'hi how are you'),
(8, 2, 2, 'hello imdad');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `image`, `user_id`, `c_id`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has y ', '', '', 2),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '', '', 2),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'http://[::1]/jobboard/uploads/9f6cee49c0ee88b5d33bbe9cc48990eebd0e12386.jpg', '', 2),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'http://[::1]/jobboard/uploads/IMG_2257.JPG', '', 2),
(6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has y ', '', '', 2),
(7, 'fsadf', 'fdsaf', 'http://[::1]/jobboard/uploads/Untitled.png', '9', 2);

-- --------------------------------------------------------

--
-- Table structure for table `question_choices`
--

CREATE TABLE `question_choices` (
  `choices_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL DEFAULT '0',
  `is_correct` tinyint(4) NOT NULL,
  `choice_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_choices`
--

INSERT INTO `question_choices` (`choices_id`, `question_number`, `is_correct`, `choice_text`) VALUES
(1, 1, 1, ' <?php...?>'),
(2, 1, 0, '<?php>...</?>'),
(3, 1, 0, '<script>...</script>'),
(4, 1, 0, '<&>...</&>'),
(5, 2, 1, 'echo "Hello World";'),
(6, 2, 0, 'Document.Write("Hello World");'),
(7, 2, 0, '"Hello World";'),
(8, 2, 0, '"Hello World";');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `username`, `password`, `type`, `Email`) VALUES
(1, 'mentor1', 'c42fd4618fa2b2f70ec51ce45fc007e19387581e', 1, 'mentor1@gmail.com'),
(2, 'jobseeker1', 'a218ccabdf787c55db8b061877f8578526a5f59f', 2, 'jobseeker1@gmail.com'),
(3, 'compnay1', '81b951b54fb75869b6c8ffe471761ccb19e6ddcc', 3, 'company1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `reply_id` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `reply_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `messageid`, `reply_message`) VALUES
(1, 2, 'fine what about you'),
(4, 1, 'fasfasfd'),
(6, 6, 'good thanks'),
(7, 6, 'you are awesome man'),
(8, 1, 'hi you there'),
(16, 1, 'yes i am here man'),
(17, 1, 'thanks good friend like it that you are happy'),
(18, 1, 'so what message from mentor'),
(19, 11111, 'listen i am a job seeker and that it '),
(20, 1, 'listen i am a jobseeker'),
(21, 1, 'so i am a mentor'),
(22, 1, 'oh great a jobseeker here'),
(23, 1, 'ok any question about php'),
(24, 0, 'fsdfds'),
(25, 0, 'fhajdsfhkasdk'),
(26, 0, 'fhajdsfhkasdk'),
(27, 0, 'fhajdsfhkasdk'),
(28, 0, 'sgsfdg'),
(29, 0, 'sgsfdg'),
(30, 8, 'afsdsadfsdf'),
(31, 7, 'afasdf'),
(32, 7, 'xczvczxv');

-- --------------------------------------------------------

--
-- Table structure for table `starrating`
--

CREATE TABLE `starrating` (
  `rating_id` int(11) NOT NULL,
  `rating_get_id` int(11) NOT NULL,
  `rating_set_id` int(11) NOT NULL,
  `rating_set_review` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `starrating`
--

INSERT INTO `starrating` (`rating_id`, `rating_get_id`, `rating_set_id`, `rating_set_review`, `rating`) VALUES
(1, 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 1),
(4, 1, 3, 'fasdf', 4),
(5, 2, 1, 'mentor1', 1),
(6, 1, 1, 'its my first review', 4);

-- --------------------------------------------------------

--
-- Table structure for table `test_questions`
--

CREATE TABLE `test_questions` (
  `question_no` int(11) NOT NULL,
  `question_text` varchar(255) NOT NULL,
  `question_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_questions`
--

INSERT INTO `test_questions` (`question_no`, `question_text`, `question_category`) VALUES
(1, 'PHP server scripts are surrounded by delimiters, which?  ', 1),
(2, 'How do you write "Hello World" in PHP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_result`
--

CREATE TABLE `test_result` (
  `result_id` int(11) NOT NULL,
  `test_score` int(11) NOT NULL,
  `test_category` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_result`
--

INSERT INTO `test_result` (`result_id`, `test_score`, `test_category`, `user_id`) VALUES
(4, 1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `interview_category`
--
ALTER TABLE `interview_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `interview_questions`
--
ALTER TABLE `interview_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jobseekers`
--
ALTER TABLE `jobseekers`
  ADD PRIMARY KEY (`jobseeker_id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`jobcat_id`);

--
-- Indexes for table `job_contract`
--
ALTER TABLE `job_contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `job_invited`
--
ALTER TABLE `job_invited`
  ADD PRIMARY KEY (`jobinvite_id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`mentor_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `question_choices`
--
ALTER TABLE `question_choices`
  ADD PRIMARY KEY (`choices_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `starrating`
--
ALTER TABLE `starrating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `test_questions`
--
ALTER TABLE `test_questions`
  ADD PRIMARY KEY (`question_no`);

--
-- Indexes for table `test_result`
--
ALTER TABLE `test_result`
  ADD PRIMARY KEY (`result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `interview_category`
--
ALTER TABLE `interview_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `interview_questions`
--
ALTER TABLE `interview_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jobseekers`
--
ALTER TABLE `jobseekers`
  MODIFY `jobseeker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `jobcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `job_contract`
--
ALTER TABLE `job_contract`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `job_invited`
--
ALTER TABLE `job_invited`
  MODIFY `jobinvite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `mentor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `question_choices`
--
ALTER TABLE `question_choices`
  MODIFY `choices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `starrating`
--
ALTER TABLE `starrating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `test_result`
--
ALTER TABLE `test_result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
