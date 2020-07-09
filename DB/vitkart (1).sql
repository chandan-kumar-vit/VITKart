-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 05:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `reg_no` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`reg_no`, `email`, `password`) VALUES
('18BCE1000', 'thechandankumar18@gmail.com', '123'),
('18BCE1015', 'pranav.m@gmail.com', 'paper'),
('18BCE1020', 'thechandankumar18@gmail.com', 'foundervitkart'),
('18BCE1204', 'varunpatel@gmail.com', 'cofounder');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `code` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `mob_no` int(10) NOT NULL,
  `wa_no` int(10) NOT NULL,
  `category` varchar(15) NOT NULL,
  `description` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `img_dir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code`, `name`, `price`, `mob_no`, `wa_no`, `category`, `description`, `qty`, `img_dir`) VALUES
(1001, 'Maggi', 12, 2147483647, 2147483647, 'eatables', 'Get ready for 2 min masala maggi only for Rs.12', 0, 'uploads/product/maggi.jpg'),
(1002, 'Maggi family pack', 40, 2147483647, 2147483647, 'eatables', 'Large pack for family wali feeling. Eat and enjoy more!', 0, 'uploads/product/maggi_40.jpg'),
(1003, 'Maggi masala', 10, 2147483647, 2147483647, 'eatables', 'Put in every dish you like! Enhances the taste', 0, 'uploads/product/maggi_masala.jpg'),
(1004, 'Knorr Soup tomato', 25, 2147483647, 2147483647, 'eatables', 'Every time you feel hungry? Try knorr soup, tastes best!', 0, 'uploads/product/knor_tomato_soup.jpg'),
(1005, 'Knorr Soup vege', 25, 2147483647, 2147483647, 'eatables', 'Every time you feel hungry? Try knorr soup, tastes best!', 0, 'uploads/product/vegetable_soup.jpg'),
(1006, 'Oreo Biscuits', 10, 2147483647, 2147483647, 'eatables', 'Try best biscuits', 0, 'uploads/product/oreo.jpg'),
(1007, 'hide and seek', 30, 2147483647, 2147483647, 'eatables', 'Try best biscuits', 0, 'uploads/product/hidenseek.jpg'),
(1008, 'Good Day Biscuits', 20, 2147483647, 2147483647, 'eatables', 'Try best biscuits', 0, 'uploads/product/good_day.jpg'),
(1009, 'Bourbon Biscuits', 30, 2147483647, 2147483647, 'eatables', 'Try best biscuits', 0, 'uploads/product/bourbon.jpg'),
(1010, 'Good Day ChocoChip', 10, 2147483647, 2147483647, 'eatables', 'Try best biscuits', 0, 'uploads/product/goodday_chocochip.jpg'),
(1011, 'Lays Classic', 10, 2147483647, 2147483647, 'eatables', 'Chips for you', 0, 'uploads/product/lays_classic.jpg'),
(1012, 'Lays Masala', 10, 2147483647, 2147483647, 'eatables', 'Chips for you', 0, 'uploads/product/lays_masala.jpg'),
(1013, 'Lays Spanish', 10, 2147483647, 2147483647, 'eatables', 'Chips for you', 0, 'uploads/product/lays_spanish.jpg'),
(1014, 'Kurkure Masala', 10, 2147483647, 2147483647, 'eatables', 'Chips for you', 0, 'uploads/product/kukure_masala.jpg'),
(1015, 'Kurkure Puffcorn', 10, 2147483647, 2147483647, 'eatables', 'Chips for you', 0, 'uploads/product/kukure_puffcorn.jpg'),
(1016, 'Kurkure Chilli', 10, 2147483647, 2147483647, 'eatables', 'Chips for you', 0, 'uploads/product/kurkure_chilli.jpg'),
(1017, 'Dairy Milk Silk Bubbly', 55, 2147483647, 2147483647, 'eatables', 'Chocolates that you can not resist!!', 0, 'uploads/product/dm_silk.jpg'),
(1018, 'Dairy Milk Silk Oreo', 75, 2147483647, 2147483647, 'eatables', 'Chocolates that you can not resist!!', 0, 'uploads/product/dm_oreo.jpg'),
(1019, 'Dairy Milk Chocolate', 45, 2147483647, 2147483647, 'eatables', 'Chocolates that you can not resist!!', 0, 'uploads/product/dm_chocolate.jpg'),
(1020, 'Dairy Milk Fruit and Nut', 50, 2147483647, 2147483647, 'eatables', 'Chocolates that you can not resist!!', 0, 'uploads/product/dm_fruitnnut.jpg'),
(1021, 'Cup Noodles Masala', 40, 2147483647, 2147483647, 'eatables', 'Dont have kettle? No Problem! Try this cup noodles.', 0, 'uploads/product/cup_noodle_masala.jpg'),
(1022, 'Cup Noodles Chicken', 60, 2147483647, 2147483647, 'eatables', 'Dont have kettle? No Problem! Try this cup noodles.', 0, 'uploads/product/cup_noodles_chicken.jpg'),
(1023, 'Lotte Choco Pie', 15, 2147483647, 2147483647, 'eatables', 'Best High Tea Snacks for you!', 0, 'uploads/product/lotte_choco_pie.jpg'),
(1024, 'Dark Fantasy ', 30, 2147483647, 2147483647, 'eatables', 'Choco at middle yum!', 0, 'uploads/product/dark_fantasy.jpg'),
(1025, 'Maggi Tomato Ketchup', 60, 2147483647, 2147483647, 'eatables', 'Sauce for your food to make it tasty.', 0, 'uploads/product/tomato_ketchup.jpg'),
(1026, 'Coca Cola Can', 35, 2147483647, 2147483647, 'eatables', 'Your Favourite Bevrage.', 0, 'uploads/product/coke_can.jpg'),
(1027, 'Coca Cola 750ml', 40, 2147483647, 2147483647, 'eatables', 'Your Favourite Bevrage.', 0, 'uploads/product/coca cola.jpg'),
(1028, 'Real Juice Mango', 25, 2147483647, 2147483647, 'eatables', 'Your Favourite Bevrage.', 0, 'uploads/product/rj_mango.jpg'),
(1029, 'Real Juice Orange', 25, 2147483647, 2147483647, 'eatables', 'Your Favourite Fruit Juice Brand.', 0, 'uploads/product/rj_orange.jpg'),
(1030, 'Real Juice Grapes', 25, 2147483647, 2147483647, 'eatables', 'Your Favourite Fruit Juice Brand.', 0, 'uploads/product/rj_grapes.jpg'),
(1031, 'Sprite', 40, 2147483647, 2147483647, 'eatables', 'Your Favourite Brand.', 0, 'uploads/product/sprite.jpg'),
(1032, 'Sprite Can', 35, 2147483647, 2147483647, 'eatables', 'Your Favourite Brand.', 0, 'uploads/product/sprite_can.jpg'),
(1033, 'Amul Cool Badaam', 25, 2147483647, 2147483647, 'eatables', 'Milkshake ready to shake and make.', 0, 'uploads/product/amul_cool_badam.jpg'),
(1034, 'Amul Cool Coco', 25, 2147483647, 2147483647, 'eatables', 'Milkshake ready to shake and make.', 0, 'uploads/product/amul_cool_koko.jpg'),
(2001, 'The Great Gatsby', 450, 2147483647, 2147483647, 'books', 'The Great Gatsby is a 1925 novel written by American author F. Scott Fitzgerald that follows a cast ', 0, 'uploads/product/the_great_gatsby.jpg'),
(2002, 'To Kill a Mocking Bird', 260, 2147483647, 2147483647, 'books', 'To Kill a Mockingbird is a novel by Harper Lee published in 1960. Instantly successful, widely read ', 0, 'uploads/product/to_kill_amokng_bird.png'),
(2003, '1984', 300, 2147483647, 2147483647, 'books', 'Nineteen Eighty-Four: A Novel, often published as 1984, is a dystopian novel by English novelist Geo', 0, 'uploads/product/a1984.jpg'),
(2004, 'The Hobbit', 330, 2147483647, 2147483647, 'books', 'The Hobbit, or There and Back Again is a childrens fantasy novel by English author J. R. R. Tolkien.', 0, 'uploads/product/hobbit.png'),
(2005, 'The Catcher in Rye', 620, 2147483647, 2147483647, 'books', 'The Catcher in the Rye is a story by J. D. Salinger, partially published in serial form in 1945–1946', 0, 'uploads/product/the_catcher_in_rye.jpg'),
(2006, 'Pride and Prejudice', 200, 2147483647, 2147483647, 'books', 'Pride and Prejudice is a romantic novel of manners written by Jane Austen in 1813. The novel follows', 0, 'uploads/product/pride_n_prejudice.jpg'),
(2007, 'Brave New World', 260, 2147483647, 2147483647, 'books', 'Brave New World is a dystopian novel by English author Aldous Huxley, written in 1931 and published ', 0, 'uploads/product/brave_new_world.jpg'),
(2008, 'A Wrinkle in Time', 370, 2147483647, 2147483647, 'books', 'While on a quest to discover a scientific breakthrough, Megs father disappears into another realm in', 0, 'uploads/product/a_wrinkle_in_time.jpeg'),
(2009, 'Animal Farm', 320, 2147483647, 2147483647, 'books', 'Animal Farm is an allegorical novella by George Orwell, first published in England on 17 August 1945', 0, 'uploads/product/animal_farm.jpg'),
(2010, 'The Giver', 600, 2147483647, 2147483647, 'books', 'The Giver is a 1993 American young adult dystopian novel by Lois Lowry. It is set in a society which', 0, 'uploads/product/the_giver.jpg'),
(2011, 'The Book Thief', 536, 2147483647, 2147483647, 'books', 'The Book Thief is a historical novel by Australian author Markus Zusak and is his most popular work.', 0, 'uploads/product/the_book_theif.jpg'),
(2012, 'The Diary of a Young Girl', 135, 2147483647, 2147483647, 'books', 'The Diary of a Young Girl, also known as The Diary of Anne Frank, is a book of the writings from the', 0, 'uploads/product/diary_yg.jpg'),
(2013, 'BS Grewal Higher Maths', 850, 2147483647, 2147483647, 'books', 'Reccomended book for mathematics for college students. It has many problems that should be solved to', 0, 'uploads/product/bs_grewal.jpg'),
(2014, 'Silberschatz Operating Sy', 700, 2147483647, 2147483647, 'books', 'Reccomended book for Operating System.', 0, 'uploads/product/silberschatz_os.jpg'),
(2015, 'Remzi Operating System', 560, 2147483647, 2147483647, 'books', 'Reccomended book for Operating System.', 0, 'uploads/product/remzi_os.jpg'),
(2016, 'Elmasri', 700, 2147483647, 2147483647, 'books', 'Reccomended book for Database Management System.', 0, 'uploads/product/elmasri_dbms.jpg'),
(2017, 'CLRS Algorithm', 390, 2147483647, 2147483647, 'books', 'Reccomended book for Algorithm.', 0, 'uploads/product/clrs_dsa.jpg'),
(2018, 'Sahni Data Structures', 450, 2147483647, 2147483647, 'books', 'Reccomended book for Data Structures.', 0, 'uploads/product/sartaj_sahni_dsa.jpg'),
(3001, 'Cello Gripper Ball Pen', 7, 2147483647, 2147483647, 'stationary', 'Water proof ball pen', 0, 'uploads/product/cello_gripper.jpg'),
(3002, 'Cello Pin Point Pen', 10, 2147483647, 2147483647, 'stationary', 'Water proof ball pen', 0, 'uploads/product/cello_pinpoint.jpg'),
(3003, 'Cello Maxriter Pen', 15, 2147483647, 2147483647, 'stationary', 'Water proof ball pen', 0, 'uploads/product/cello_maxriter.jpg'),
(3004, 'Cello ButterFlow Pen', 20, 2147483647, 2147483647, 'stationary', 'Water proof ball pen', 0, 'uploads/product/cello_butterflow.jpg'),
(3005, 'Reynolds Racer Gel Pen', 20, 2147483647, 2147483647, 'stationary', 'Water proof gel pen', 0, 'uploads/product/reynolds_racer.jpg'),
(3006, 'Reynolds Correction Pen', 40, 2147483647, 2147483647, 'stationary', 'Whitener', 0, 'uploads/product/correction_pen.jpg'),
(3007, 'Linc Smart GL Pen', 5, 2147483647, 2147483647, 'stationary', 'Water proof ball pen', 0, 'uploads/product/link_smartgl.jpg'),
(3008, 'Linc Glycerol Pen', 5, 2147483647, 2147483647, 'stationary', 'Water proof ball pen', 0, 'uploads/product/linc_glycerol.jpg'),
(3009, 'Linc Ocean Gel Pen', 5, 2147483647, 2147483647, 'stationary', 'Water proof gel pen', 0, 'uploads/product/linc_oceangel.jpg'),
(3010, 'Luxor Pilot Pen', 35, 2147483647, 2147483647, 'stationary', 'Water proof pen', 0, 'uploads/product/luxor_pilot.jpg'),
(3011, 'Luxor Pilot V5 Pen', 60, 2147483647, 2147483647, 'stationary', 'Water proof pen', 0, 'uploads/product/luxor_pilotv5.jpg'),
(3012, 'Luxor Pilot V7 Pen', 75, 2147483647, 2147483647, 'stationary', 'Water proof pen', 0, 'uploads/product/luxor_pilotv7.jpg'),
(3013, 'Dettol Handwash Original', 55, 2147483647, 2147483647, 'stationary', 'Fight with germs and coronavirus with Dettol handwash! 20 ml FREE!', 0, 'uploads/product/dettol_hw_original.jpg'),
(3014, 'Dettol Refill Original', 40, 2147483647, 2147483647, 'stationary', 'Fight with germs and coronavirus with Dettol handwash! 20 ml FREE!', 0, 'uploads/product/dettol_original_refill.jpg'),
(3015, 'Lifebuoy Sanitizer', 30, 2147483647, 2147483647, 'stationary', 'Fight with germs and coronavirus with Sanitizer, 15 ml FREE!', 0, 'uploads/product/lb_hand_sanitizer.jpg'),
(3016, 'Dove White Soap', 45, 2147483647, 2147483647, 'stationary', 'Dove Bar Soap (with 1/4 moisturizing lotion) Ingredients: Stearic acid, Tetrasodium EDTA, 2,6-Di-t-b', 0, 'uploads/product/dove_white_soap.jpg'),
(3017, 'Margo Soap', 25, 2147483647, 2147483647, 'stationary', 'Margo Neem Soap has anti-bacterial properties that deep cleanses the skin. Neem soap has a reputatio', 0, 'uploads/product/margo_soap.jpg'),
(3018, 'Lux Soap', 30, 2147483647, 2147483647, 'stationary', 'LUX is a global brand developed by Unilever. The range of products includes beauty soaps, shower gel', 0, 'uploads/product/lux_soap.jpg'),
(3019, 'Cinthol Soap', 35, 2147483647, 2147483647, 'stationary', 'Cinthol strong soap is formulated with active deo formula that helps you to stop the growth of bacte', 0, 'uploads/product/cinthol_soap.jpg'),
(3020, 'Pears Soap', 35, 2147483647, 2147483647, 'stationary', 'Pears Soap is a natural way to attain clean, healthy looking skin. It contains high quality skincare', 0, 'uploads/product/pears_soap.jpg'),
(3021, 'Tresemme Shampoo', 125, 2147483647, 2147483647, 'stationary', 'Tresemme Hair Fall Defense Shampoo helps reinforce your hair strength and prevents hair fall due to ', 0, 'uploads/product/tresemme_shampoo.jpg'),
(3022, 'Dove Shampoo', 145, 2147483647, 2147483647, 'stationary', 'Dove is a personal care brand that is known for its gentle products. Dove shampoos, soaps and moistu', 0, 'uploads/product/dove_shampoo.jpg'),
(3023, 'Head and Shoulder Shampoo', 85, 2147483647, 2147483647, 'stationary', 'Head & Shoulders (H&S) is an American brand of anti-dandruff and non-dandruff shampoo produced by pa', 0, 'uploads/product/headnshoulder_shampoo.jpg'),
(3024, 'Garnier Fructus Shampoo', 105, 2147483647, 2147483647, 'stationary', 'Garnier specifically created Fructis Long & Strong Shampoo to strengthen and protect longer hair fro', 0, 'uploads/product/Garnier Fructus.jpg'),
(3025, 'Garnier Mens Acno Fight', 115, 2147483647, 2147483647, 'stationary', 'The Garnier Acnofight is a superior formulation, with a 6-in-1 pimple clearing formula, that fights ', 0, 'uploads/product/garnier_acno.jpg'),
(3026, 'Garnier Light Complete', 80, 2147483647, 2147483647, 'stationary', 'Garnier Light Complete Serum Cream UV evens and brightens your skin tone by reducing dark spots, pim', 0, 'uploads/product/garnier_lightcomplete.jpg'),
(3027, 'Himalaya Herbal', 60, 2147483647, 2147483647, 'stationary', 'Himalaya Herbals is a range of 100% natural and safe products with rare herbs collected from the foo', 0, 'uploads/product/himalaya_herbal.jpg'),
(3028, 'Ponds Spotless', 99, 2147483647, 2147483647, 'stationary', 'Presenting ponds white beauty, a revolutionary anti-spot solution bought to you by the ponds institu', 0, 'uploads/product/ponds_spotless.jpg'),
(3029, 'Meglow Mens Cream', 150, 2147483647, 2147483647, 'stationary', 'Meglow Premium Fairness Cream For Men is a meld of high performing natural ingredients & effectual b', 0, 'uploads/product/meglow_cream.jpg'),
(3030, 'Nivea Mens Creme', 199, 2147483647, 2147483647, 'stationary', 'Nivea Men Creme cares for your skin by giving it a boost of hydration and preventing it from drying.', 0, 'uploads/product/nivea_mencream.jpg'),
(3031, 'Beardo Ultra Glow Lotion', 230, 2147483647, 2147483647, 'stationary', 'BEARDO Ultraglow All in 1 Mens Face Lotion - 100g , This Special Formula is enriched with Natural an', 0, 'uploads/product/beardo_ultraglow_lotion.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sl` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `trans_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `reg_no` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `c_no` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `proc_name` varchar(20) NOT NULL,
  `proc_c_no` bigint(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `block` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `security_question` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `img_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`reg_no`, `f_name`, `l_name`, `c_no`, `email`, `proc_name`, `proc_c_no`, `sex`, `block`, `password`, `security_question`, `answer`, `img_name`) VALUES
('18BCE1000', 'Abhineet', 'Gaurav', 9521790908, 'thechandankumar18@gmail.com', 'Jeganathan L', 9933691828, 'male', 'A', '123', 'nickname', 'abc', 'uploads/kyc/iron_man_captain_america_thor_in_aveng'),
('18BCE1015', 'Pranav', 'Motarwar', 7854692147, 'pranav.m@gmail.com', 'Jeganathan L', 9933691828, 'male', 'A', 'paper', 'nickname', 'motor', ''),
('18BCE1020', 'Chandan', 'Kumar', 9521790908, 'thechandankumar18@gmail.com', 'Jeganathan L', 9933691828, 'male', 'A', 'foundervitkart', 'birthplace', 'Jodhpur', ''),
('18BCE1204', 'Varun', 'Patel', 6987415236, 'varunpatel@gmail.com', 'Gayathri', 9933691826, 'male', 'A', 'cofounder', 'nickname', 'chikoo', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
