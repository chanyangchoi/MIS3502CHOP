-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 08:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chop_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `caregiver`
--

CREATE TABLE `caregiver` (
  `caregiver_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caregiver`
--

INSERT INTO `caregiver` (`caregiver_id`, `first_name`, `last_name`, `phone_number`, `email`) VALUES
(1000002, 'Jeremy', 'Shafer', '', 'jeremy@temple.edu');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Liquid'),
(2, 'Protein'),
(3, 'F&V: Vitamin A'),
(4, 'F&V: Vitamin C'),
(5, 'F&V: Other'),
(6, 'F&V: Potassium'),
(7, 'Starches'),
(8, 'Fat'),
(9, 'Supplements\r\nNeeds'),
(10, 'Other Additions\r\nNeeded');

-- --------------------------------------------------------

--
-- Table structure for table `dietician`
--

CREATE TABLE `dietician` (
  `dietician_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dietician`
--

INSERT INTO `dietician` (`dietician_id`, `first_name`, `last_name`, `phone_number`, `email`) VALUES
(1000001, 'Robin', 'Cook', '1-800-879-2467', 'cookro@email.chop.edu');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `ingredient_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `serving_unit` varchar(200) NOT NULL,
  `calories_per_serving` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`ingredient_id`, `name`, `serving_unit`, `calories_per_serving`, `category_id`) VALUES
(1, 'Bread, raisin', '1 slice', 96, 7),
(2, 'Bread, white, homemade with 2% milk', '1 slice', 100, 7),
(3, 'Roll, hamburger or hotdog, white', '', 120, 7),
(4, 'English muffin, white, toasted', '', 133, 7),
(5, 'Taco shell, baked (13cm diam)', '1 shell', 61, 7),
(6, ' Carrots, baby, raw', '8', 28, 3),
(7, ' Kale, chopped, boiled, drained', '125 ml', 19, 3),
(8, 'Spinach, chopped, raw', '250ml', 9, 3),
(10, 'Beef blade steak, lean + fat, braised	', '75g', 227, 2),
(11, 'Beef Top sirloin steak, lean + fat, broiled	', '75g', 146, 2),
(12, 'Beans, lima, frozen, boiled, drained', '125ml', 100, 2),
(13, 'Beans, refried, canned', '175ml', 175, 2),
(14, 'Lentils, boiled, salted	', '175ml', 170, 2),
(41, 'Eggnog', '50ml', 50, 1),
(42, 'Drinkable yogurt', '100ml', 100, 1),
(43, 'Water', '50ml', 0, 1),
(44, 'Orange juice, frozen, diluted', '50ml', 29, 1),
(45, 'Orange', '', 62, 4),
(46, 'Strawberry', '', 4, 4),
(47, 'Tangerine ', '', 45, 4),
(48, 'Banana', '', 103, 6),
(49, 'Sweet potato, boiled without skin	', '1/2', 57, 6),
(50, 'Salmon, Atlantic, farmed, baked or broiled	', '75g', 155, 6),
(51, 'Chocolate, semisweet, bars or chips', '60ml', 205, 8),
(52, 'Peanuts, chocolate covered	', '5', 104, 8),
(53, 'Chocolate mousse, homemade	', '50ml', 85, 8);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_restriction`
--

CREATE TABLE `ingredient_restriction` (
  `ingredient_restriction_id` int(11) NOT NULL,
  `restriction_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient_restriction`
--

INSERT INTO `ingredient_restriction` (`ingredient_restriction_id`, `restriction_id`, `ingredient_id`) VALUES
(1, 5, 10),
(2, 5, 11),
(3, 3, 52),
(4, 4, 41);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dietician_id` int(11) NOT NULL,
  `caregiver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `first_name`, `last_name`, `birth_date`, `gender`, `dietician_id`, `caregiver_id`) VALUES
(1000001, 'Leo', 'Shafer', '2000-11-10', 'Male', 1000001, 1000002);

-- --------------------------------------------------------

--
-- Table structure for table `patient_restriction`
--

CREATE TABLE `patient_restriction` (
  `patient_restriction_id` int(100) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `restriction_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `people_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`people_id`, `username`, `password`, `type`) VALUES
(1000001, 'robin', 'robin123', 'dietician'),
(1000002, 'jeremy', 'jeremy123', 'caregiver');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `total_calories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `patient_id`, `total_calories`) VALUES
(1, 1000001, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_category`
--

CREATE TABLE `recipe_category` (
  `recipe_category_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `desired_calories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_category`
--

INSERT INTO `recipe_category` (`recipe_category_id`, `recipe_id`, `category_id`, `desired_calories`) VALUES
(1, 1, 1, 50),
(2, 1, 2, 250),
(3, 1, 3, 60),
(4, 1, 4, 60),
(5, 1, 7, 150),
(6, 1, 8, 100);

-- --------------------------------------------------------

--
-- Table structure for table `restriction`
--

CREATE TABLE `restriction` (
  `restriction_id` int(100) NOT NULL,
  `restriction_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restriction`
--

INSERT INTO `restriction` (`restriction_id`, `restriction_name`) VALUES
(1, 'Milk'),
(2, 'Soy'),
(3, 'Tree nut/ Peanut'),
(4, 'Egg'),
(5, 'Non-vegetarian\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caregiver`
--
ALTER TABLE `caregiver`
  ADD PRIMARY KEY (`caregiver_id`),
  ADD UNIQUE KEY `caregiver_id` (`caregiver_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `dietician`
--
ALTER TABLE `dietician`
  ADD PRIMARY KEY (`dietician_id`),
  ADD UNIQUE KEY `dietician_id` (`dietician_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`ingredient_id`),
  ADD UNIQUE KEY `item_id` (`ingredient_id`),
  ADD KEY `category_id_2` (`category_id`),
  ADD KEY `category_id_3` (`category_id`),
  ADD KEY `category_id_4` (`category_id`);

--
-- Indexes for table `ingredient_restriction`
--
ALTER TABLE `ingredient_restriction`
  ADD PRIMARY KEY (`ingredient_restriction_id`),
  ADD UNIQUE KEY `item_id` (`ingredient_id`),
  ADD KEY `restriction_id_2` (`restriction_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`),
  ADD UNIQUE KEY `dietician_id` (`dietician_id`),
  ADD UNIQUE KEY `caregiver_id` (`caregiver_id`);

--
-- Indexes for table `patient_restriction`
--
ALTER TABLE `patient_restriction`
  ADD PRIMARY KEY (`patient_restriction_id`),
  ADD UNIQUE KEY `patient_restriction_id` (`patient_restriction_id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`),
  ADD UNIQUE KEY `restriction_id` (`restriction_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_id`),
  ADD UNIQUE KEY `people_id` (`people_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`),
  ADD UNIQUE KEY `recipe_id` (`recipe_id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`);

--
-- Indexes for table `recipe_category`
--
ALTER TABLE `recipe_category`
  ADD PRIMARY KEY (`recipe_category_id`),
  ADD KEY `recipe_id` (`recipe_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `restriction`
--
ALTER TABLE `restriction`
  ADD PRIMARY KEY (`restriction_id`),
  ADD UNIQUE KEY `restriction_id` (`restriction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingredient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `recipe_category`
--
ALTER TABLE `recipe_category`
  MODIFY `recipe_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `caregiver`
--
ALTER TABLE `caregiver`
  ADD CONSTRAINT `caregiver_ibfk_1` FOREIGN KEY (`caregiver_id`) REFERENCES `people` (`people_id`);

--
-- Constraints for table `dietician`
--
ALTER TABLE `dietician`
  ADD CONSTRAINT `dietician_ibfk_1` FOREIGN KEY (`dietician_id`) REFERENCES `people` (`people_id`);

--
-- Constraints for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `ingredient_restriction`
--
ALTER TABLE `ingredient_restriction`
  ADD CONSTRAINT `ingredient_restriction_ibfk_2` FOREIGN KEY (`restriction_id`) REFERENCES `restriction` (`restriction_id`),
  ADD CONSTRAINT `ingredient_restriction_ibfk_3` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`ingredient_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`caregiver_id`) REFERENCES `caregiver` (`caregiver_id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`dietician_id`) REFERENCES `dietician` (`dietician_id`);

--
-- Constraints for table `patient_restriction`
--
ALTER TABLE `patient_restriction`
  ADD CONSTRAINT `patient_restriction_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  ADD CONSTRAINT `patient_restriction_ibfk_2` FOREIGN KEY (`restriction_id`) REFERENCES `restriction` (`restriction_id`);

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `recipe_category`
--
ALTER TABLE `recipe_category`
  ADD CONSTRAINT `recipe_category_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`),
  ADD CONSTRAINT `recipe_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
