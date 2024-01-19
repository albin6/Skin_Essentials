-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 11:42 AM
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
-- Database: `skin_essentials_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `appointment_id` int(11) NOT NULL,
  `doctor_login_id` int(11) NOT NULL,
  `patient_login_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'Not Consulted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `doctor_login_id`, `patient_login_id`, `appointment_date`, `entry_date`, `status`) VALUES
(1, 12, 5, '2023-10-06', '0000-00-00 00:00:00', 'Consulted'),
(2, 12, 5, '2023-10-06', '0000-00-00 00:00:00', 'Not Consulted'),
(3, 12, 5, '2023-10-06', '2023-10-06 07:15:13', 'Not Consulted');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_subject` varchar(50) NOT NULL,
  `complaint` varchar(150) NOT NULL,
  `user_login_id` int(11) NOT NULL,
  `reply` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_subject`, `complaint`, `user_login_id`, `reply`) VALUES
(1, 'I didnt get good care from Hospital', 'I didnt get good care from Hospital', 5, 'Okay'),
(2, 'I didnt get good care from Hospital', 'Very sorry to say I didnt get good care from Hospital', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `state_id`, `district`) VALUES
(1, 32, 'North and Middle Andaman'),
(2, 32, 'South Andaman'),
(3, 32, 'Nicobar'),
(4, 1, 'Adilabad'),
(5, 1, 'Anantapur'),
(6, 1, 'Chittoor'),
(7, 1, 'East Godavari'),
(8, 1, 'Guntur'),
(9, 1, 'Hyderabad'),
(10, 1, 'Kadapa'),
(11, 1, 'Karimnagar'),
(12, 1, 'Khammam'),
(13, 1, 'Krishna'),
(14, 1, 'Kurnool'),
(15, 1, 'Mahbubnagar'),
(16, 1, 'Medak'),
(17, 1, 'Nalgonda'),
(18, 1, 'Nellore'),
(19, 1, 'Nizamabad'),
(20, 1, 'Prakasam'),
(21, 1, 'Rangareddi'),
(22, 1, 'Srikakulam'),
(23, 1, 'Vishakhapatnam'),
(24, 1, 'Vizianagaram'),
(25, 1, 'Warangal'),
(26, 1, 'West Godavari'),
(27, 3, 'Anjaw'),
(28, 3, 'Changlang'),
(29, 3, 'East Kameng'),
(30, 3, 'Lohit'),
(31, 3, 'Lower Subansiri'),
(32, 3, 'Papum Pare'),
(33, 3, 'Tirap'),
(34, 3, 'Dibang Valley'),
(35, 3, 'Upper Subansiri'),
(36, 3, 'West Kameng'),
(37, 2, 'Barpeta'),
(38, 2, 'Bongaigaon'),
(39, 2, 'Cachar'),
(40, 2, 'Darrang'),
(41, 2, 'Dhemaji'),
(42, 2, 'Dhubri'),
(43, 2, 'Dibrugarh'),
(44, 2, 'Goalpara'),
(45, 2, 'Golaghat'),
(46, 2, 'Hailakandi'),
(47, 2, 'Jorhat'),
(48, 2, 'Karbi Anglong'),
(49, 2, 'Karimganj'),
(50, 2, 'Kokrajhar'),
(51, 2, 'Lakhimpur'),
(52, 2, 'Marigaon'),
(53, 2, 'Nagaon'),
(54, 2, 'Nalbari'),
(55, 2, 'North Cachar Hills'),
(56, 2, 'Sibsagar'),
(57, 2, 'Sonitpur'),
(58, 2, 'Tinsukia'),
(59, 4, 'Araria'),
(60, 4, 'Aurangabad'),
(61, 4, 'Banka'),
(62, 4, 'Begusarai'),
(63, 4, 'Bhagalpur'),
(64, 4, 'Bhojpur'),
(65, 4, 'Buxar'),
(66, 4, 'Darbhanga'),
(67, 4, 'Purba Champaran'),
(68, 4, 'Gaya'),
(69, 4, 'Gopalganj'),
(70, 4, 'Jamui'),
(71, 4, 'Jehanabad'),
(72, 4, 'Khagaria'),
(73, 4, 'Kishanganj'),
(74, 4, 'Kaimur'),
(75, 4, 'Katihar'),
(76, 4, 'Lakhisarai'),
(77, 4, 'Madhubani'),
(78, 4, 'Munger'),
(79, 4, 'Madhepura'),
(80, 4, 'Muzaffarpur'),
(81, 4, 'Nalanda'),
(82, 4, 'Nawada'),
(83, 4, 'Patna'),
(84, 4, 'Purnia'),
(85, 4, 'Rohtas'),
(86, 4, 'Saharsa'),
(87, 4, 'Samastipur'),
(88, 4, 'Sheohar'),
(89, 4, 'Sheikhpura'),
(90, 4, 'Saran'),
(91, 4, 'Sitamarhi'),
(92, 4, 'Supaul'),
(93, 4, 'Siwan'),
(94, 4, 'Vaishali'),
(95, 4, 'Pashchim Champaran'),
(96, 36, 'Bastar'),
(97, 36, 'Bilaspur'),
(98, 36, 'Dantewada'),
(99, 36, 'Dhamtari'),
(100, 36, 'Durg'),
(101, 36, 'Jashpur'),
(102, 36, 'Janjgir-Champa'),
(103, 36, 'Korba'),
(104, 36, 'Koriya'),
(105, 36, 'Kanker'),
(106, 36, 'Kawardha'),
(107, 36, 'Mahasamund'),
(108, 36, 'Raigarh'),
(109, 36, 'Rajnandgaon'),
(110, 36, 'Raipur'),
(111, 36, 'Surguja'),
(112, 29, 'Diu'),
(113, 29, 'Daman'),
(114, 25, 'Central Delhi'),
(115, 25, 'East Delhi'),
(116, 25, 'New Delhi'),
(117, 25, 'North Delhi'),
(118, 25, 'North East Delhi'),
(119, 25, 'North West Delhi'),
(120, 25, 'South Delhi'),
(121, 25, 'South West Delhi'),
(122, 25, 'West Delhi'),
(123, 26, 'North Goa'),
(124, 26, 'South Goa'),
(125, 5, 'Ahmedabad'),
(126, 5, 'Amreli District'),
(127, 5, 'Anand'),
(128, 5, 'Banaskantha'),
(129, 5, 'Bharuch'),
(130, 5, 'Bhavnagar'),
(131, 5, 'Dahod'),
(132, 5, 'The Dangs'),
(133, 5, 'Gandhinagar'),
(134, 5, 'Jamnagar'),
(135, 5, 'Junagadh'),
(136, 5, 'Kutch'),
(137, 5, 'Kheda'),
(138, 5, 'Mehsana'),
(139, 5, 'Narmada'),
(140, 5, 'Navsari'),
(141, 5, 'Patan'),
(142, 5, 'Panchmahal'),
(143, 5, 'Porbandar'),
(144, 5, 'Rajkot'),
(145, 5, 'Sabarkantha'),
(146, 5, 'Surendranagar'),
(147, 5, 'Surat'),
(148, 5, 'Vadodara'),
(149, 5, 'Valsad'),
(150, 6, 'Ambala'),
(151, 6, 'Bhiwani'),
(152, 6, 'Faridabad'),
(153, 6, 'Fatehabad'),
(154, 6, 'Gurgaon'),
(155, 6, 'Hissar'),
(156, 6, 'Jhajjar'),
(157, 6, 'Jind'),
(158, 6, 'Karnal'),
(159, 6, 'Kaithal'),
(160, 6, 'Kurukshetra'),
(161, 6, 'Mahendragarh'),
(162, 6, 'Mewat'),
(163, 6, 'Panchkula'),
(164, 6, 'Panipat'),
(165, 6, 'Rewari'),
(166, 6, 'Rohtak'),
(167, 6, 'Sirsa'),
(168, 6, 'Sonepat'),
(169, 6, 'Yamuna Nagar'),
(170, 6, 'Palwal'),
(171, 7, 'Bilaspur'),
(172, 7, 'Chamba'),
(173, 7, 'Hamirpur'),
(174, 7, 'Kangra'),
(175, 7, 'Kinnaur'),
(176, 7, 'Kulu'),
(177, 7, 'Lahaul and Spiti'),
(178, 7, 'Mandi'),
(179, 7, 'Shimla'),
(180, 7, 'Sirmaur'),
(181, 7, 'Solan'),
(182, 7, 'Una'),
(183, 8, 'Anantnag'),
(184, 8, 'Badgam'),
(185, 8, 'Bandipore'),
(186, 8, 'Baramula'),
(187, 8, 'Doda'),
(188, 8, 'Jammu'),
(189, 8, 'Kargil'),
(190, 8, 'Kathua'),
(191, 8, 'Kupwara'),
(192, 8, 'Leh'),
(193, 8, 'Poonch'),
(194, 8, 'Pulwama'),
(195, 8, 'Rajauri'),
(196, 8, 'Srinagar'),
(197, 8, 'Samba'),
(198, 8, 'Udhampur'),
(199, 34, 'Bokaro'),
(200, 34, 'Chatra'),
(201, 34, 'Deoghar'),
(202, 34, 'Dhanbad'),
(203, 34, 'Dumka'),
(204, 34, 'Purba Singhbhum'),
(205, 34, 'Garhwa'),
(206, 34, 'Giridih'),
(207, 34, 'Godda'),
(208, 34, 'Gumla'),
(209, 34, 'Hazaribagh'),
(210, 34, 'Koderma'),
(211, 34, 'Lohardaga'),
(212, 34, 'Pakur'),
(213, 34, 'Palamu'),
(214, 34, 'Ranchi'),
(215, 34, 'Sahibganj'),
(216, 34, 'Seraikela and Kharsawan'),
(217, 34, 'Pashchim Singhbhum'),
(218, 34, 'Ramgarh'),
(219, 9, 'Bidar'),
(220, 9, 'Belgaum'),
(221, 9, 'Bijapur'),
(222, 9, 'Bagalkot'),
(223, 9, 'Bellary'),
(224, 9, 'Bangalore Rural District'),
(225, 9, 'Bangalore Urban District'),
(226, 9, 'Chamarajnagar'),
(227, 9, 'Chikmagalur'),
(228, 9, 'Chitradurga'),
(229, 9, 'Davanagere'),
(230, 9, 'Dharwad'),
(231, 9, 'Dakshina Kannada'),
(232, 9, 'Gadag'),
(233, 9, 'Gulbarga'),
(234, 9, 'Hassan'),
(235, 9, 'Haveri District'),
(236, 9, 'Kodagu'),
(237, 9, 'Kolar'),
(238, 9, 'Koppal'),
(239, 9, 'Mandya'),
(240, 9, 'Mysore'),
(241, 9, 'Raichur'),
(242, 9, 'Shimoga'),
(243, 9, 'Tumkur'),
(244, 9, 'Udupi'),
(245, 9, 'Uttara Kannada'),
(246, 9, 'Ramanagara'),
(247, 9, 'Chikballapur'),
(248, 9, 'Yadagiri'),
(249, 10, 'Alappuzha'),
(250, 10, 'Ernakulam'),
(251, 10, 'Idukki'),
(252, 10, 'Kollam'),
(253, 10, 'Kannur'),
(254, 10, 'Kasaragod'),
(255, 10, 'Kottayam'),
(256, 10, 'Kozhikode'),
(257, 10, 'Malappuram'),
(258, 10, 'Palakkad'),
(259, 10, 'Pathanamthitta'),
(260, 10, 'Thrissur'),
(261, 10, 'Thiruvananthapuram'),
(262, 10, 'Wayanad'),
(263, 11, 'Alirajpur'),
(264, 11, 'Anuppur'),
(265, 11, 'Ashok Nagar'),
(266, 11, 'Balaghat'),
(267, 11, 'Barwani'),
(268, 11, 'Betul'),
(269, 11, 'Bhind'),
(270, 11, 'Bhopal'),
(271, 11, 'Burhanpur'),
(272, 11, 'Chhatarpur'),
(273, 11, 'Chhindwara'),
(274, 11, 'Damoh'),
(275, 11, 'Datia'),
(276, 11, 'Dewas'),
(277, 11, 'Dhar'),
(278, 11, 'Dindori'),
(279, 11, 'Guna'),
(280, 11, 'Gwalior'),
(281, 11, 'Harda'),
(282, 11, 'Hoshangabad'),
(283, 11, 'Indore'),
(284, 11, 'Jabalpur'),
(285, 11, 'Jhabua'),
(286, 11, 'Katni'),
(287, 11, 'Khandwa'),
(288, 11, 'Khargone'),
(289, 11, 'Mandla'),
(290, 11, 'Mandsaur'),
(291, 11, 'Morena'),
(292, 11, 'Narsinghpur'),
(293, 11, 'Neemuch'),
(294, 11, 'Panna'),
(295, 11, 'Rewa'),
(296, 11, 'Rajgarh'),
(297, 11, 'Ratlam'),
(298, 11, 'Raisen'),
(299, 11, 'Sagar'),
(300, 11, 'Satna'),
(301, 11, 'Sehore'),
(302, 11, 'Seoni'),
(303, 11, 'Shahdol'),
(304, 11, 'Shajapur'),
(305, 11, 'Sheopur'),
(306, 11, 'Shivpuri'),
(307, 11, 'Sidhi'),
(308, 11, 'Singrauli'),
(309, 11, 'Tikamgarh'),
(310, 11, 'Ujjain'),
(311, 11, 'Umaria'),
(312, 11, 'Vidisha'),
(313, 12, 'Ahmednagar'),
(314, 12, 'Akola'),
(315, 12, 'Amrawati'),
(316, 12, 'Aurangabad'),
(317, 12, 'Bhandara'),
(318, 12, 'Beed'),
(319, 12, 'Buldhana'),
(320, 12, 'Chandrapur'),
(321, 12, 'Dhule'),
(322, 12, 'Gadchiroli'),
(323, 12, 'Gondiya'),
(324, 12, 'Hingoli'),
(325, 12, 'Jalgaon'),
(326, 12, 'Jalna'),
(327, 12, 'Kolhapur'),
(328, 12, 'Latur'),
(329, 12, 'Mumbai City'),
(330, 12, 'Mumbai suburban'),
(331, 12, 'Nandurbar'),
(332, 12, 'Nanded'),
(333, 12, 'Nagpur'),
(334, 12, 'Nashik'),
(335, 12, 'Osmanabad'),
(336, 12, 'Parbhani'),
(337, 12, 'Pune'),
(338, 12, 'Raigad'),
(339, 12, 'Ratnagiri'),
(340, 12, 'Sindhudurg'),
(341, 12, 'Sangli'),
(342, 12, 'Solapur'),
(343, 12, 'Satara'),
(344, 12, 'Thane'),
(345, 12, 'Wardha'),
(346, 12, 'Washim'),
(347, 12, 'Yavatmal'),
(348, 13, 'Bishnupur'),
(349, 13, 'Churachandpur'),
(350, 13, 'Chandel'),
(351, 13, 'Imphal East'),
(352, 13, 'Senapati'),
(353, 13, 'Tamenglong'),
(354, 13, 'Thoubal'),
(355, 13, 'Ukhrul'),
(356, 13, 'Imphal West'),
(357, 14, 'East Garo Hills'),
(358, 14, 'East Khasi Hills'),
(359, 14, 'Jaintia Hills'),
(360, 14, 'Ri-Bhoi'),
(361, 14, 'South Garo Hills'),
(362, 14, 'West Garo Hills'),
(363, 14, 'West Khasi Hills'),
(364, 15, 'Aizawl'),
(365, 15, 'Champhai'),
(366, 15, 'Kolasib'),
(367, 15, 'Lawngtlai'),
(368, 15, 'Lunglei'),
(369, 15, 'Mamit'),
(370, 15, 'Saiha'),
(371, 15, 'Serchhip'),
(372, 16, 'Dimapur'),
(373, 16, 'Kohima'),
(374, 16, 'Mokokchung'),
(375, 16, 'Mon'),
(376, 16, 'Phek'),
(377, 16, 'Tuensang'),
(378, 16, 'Wokha'),
(379, 16, 'Zunheboto'),
(380, 17, 'Angul'),
(381, 17, 'Boudh'),
(382, 17, 'Bhadrak'),
(383, 17, 'Bolangir'),
(384, 17, 'Bargarh'),
(385, 17, 'Baleswar'),
(386, 17, 'Cuttack'),
(387, 17, 'Debagarh'),
(388, 17, 'Dhenkanal'),
(389, 17, 'Ganjam'),
(390, 17, 'Gajapati'),
(391, 17, 'Jharsuguda'),
(392, 17, 'Jajapur'),
(393, 17, 'Jagatsinghpur'),
(394, 17, 'Khordha'),
(395, 17, 'Kendujhar'),
(396, 17, 'Kalahandi'),
(397, 17, 'Kandhamal'),
(398, 17, 'Koraput'),
(399, 17, 'Kendrapara'),
(400, 17, 'Malkangiri'),
(401, 17, 'Mayurbhanj'),
(402, 17, 'Nabarangpur'),
(403, 17, 'Nuapada'),
(404, 17, 'Nayagarh'),
(405, 17, 'Puri'),
(406, 17, 'Rayagada'),
(407, 17, 'Sambalpur'),
(408, 17, 'Subarnapur'),
(409, 17, 'Sundargarh'),
(410, 27, 'Karaikal'),
(411, 27, 'Mahe'),
(412, 27, 'Puducherry'),
(413, 27, 'Yanam'),
(414, 18, 'Amritsar'),
(415, 18, 'Bathinda'),
(416, 18, 'Firozpur'),
(417, 18, 'Faridkot'),
(418, 18, 'Fatehgarh Sahib'),
(419, 18, 'Gurdaspur'),
(420, 18, 'Hoshiarpur'),
(421, 18, 'Jalandhar'),
(422, 18, 'Kapurthala'),
(423, 18, 'Ludhiana'),
(424, 18, 'Mansa'),
(425, 18, 'Moga'),
(426, 18, 'Mukatsar'),
(427, 18, 'Nawan Shehar'),
(428, 18, 'Patiala'),
(429, 18, 'Rupnagar'),
(430, 18, 'Sangrur'),
(431, 19, 'Ajmer'),
(432, 19, 'Alwar'),
(433, 19, 'Bikaner'),
(434, 19, 'Barmer'),
(435, 19, 'Banswara'),
(436, 19, 'Bharatpur'),
(437, 19, 'Baran'),
(438, 19, 'Bundi'),
(439, 19, 'Bhilwara'),
(440, 19, 'Churu'),
(441, 19, 'Chittorgarh'),
(442, 19, 'Dausa'),
(443, 19, 'Dholpur'),
(444, 19, 'Dungapur'),
(445, 19, 'Ganganagar'),
(446, 19, 'Hanumangarh'),
(447, 19, 'Juhnjhunun'),
(448, 19, 'Jalore'),
(449, 19, 'Jodhpur'),
(450, 19, 'Jaipur'),
(451, 19, 'Jaisalmer'),
(452, 19, 'Jhalawar'),
(453, 19, 'Karauli'),
(454, 19, 'Kota'),
(455, 19, 'Nagaur'),
(456, 19, 'Pali'),
(457, 19, 'Pratapgarh'),
(458, 19, 'Rajsamand'),
(459, 19, 'Sikar'),
(460, 19, 'Sawai Madhopur'),
(461, 19, 'Sirohi'),
(462, 19, 'Tonk'),
(463, 19, 'Udaipur'),
(464, 20, 'East Sikkim'),
(465, 20, 'North Sikkim'),
(466, 20, 'South Sikkim'),
(467, 20, 'West Sikkim'),
(468, 21, 'Ariyalur'),
(469, 21, 'Chennai'),
(470, 21, 'Coimbatore'),
(471, 21, 'Cuddalore'),
(472, 21, 'Dharmapuri'),
(473, 21, 'Dindigul'),
(474, 21, 'Erode'),
(475, 21, 'Kanchipuram'),
(476, 21, 'Kanyakumari'),
(477, 21, 'Karur'),
(478, 21, 'Madurai'),
(479, 21, 'Nagapattinam'),
(480, 21, 'The Nilgiris'),
(481, 21, 'Namakkal'),
(482, 21, 'Perambalur'),
(483, 21, 'Pudukkottai'),
(484, 21, 'Ramanathapuram'),
(485, 21, 'Salem'),
(486, 21, 'Sivagangai'),
(487, 21, 'Tiruppur'),
(488, 21, 'Tiruchirappalli'),
(489, 21, 'Theni'),
(490, 21, 'Tirunelveli'),
(491, 21, 'Thanjavur'),
(492, 21, 'Thoothukudi'),
(493, 21, 'Thiruvallur'),
(494, 21, 'Thiruvarur'),
(495, 21, 'Tiruvannamalai'),
(496, 21, 'Vellore'),
(497, 21, 'Villupuram'),
(498, 22, 'Dhalai'),
(499, 22, 'North Tripura'),
(500, 22, 'South Tripura'),
(501, 22, 'West Tripura'),
(502, 33, 'Almora'),
(503, 33, 'Bageshwar'),
(504, 33, 'Chamoli'),
(505, 33, 'Champawat'),
(506, 33, 'Dehradun'),
(507, 33, 'Haridwar'),
(508, 33, 'Nainital'),
(509, 33, 'Pauri Garhwal'),
(510, 33, 'Pithoragharh'),
(511, 33, 'Rudraprayag'),
(512, 33, 'Tehri Garhwal'),
(513, 33, 'Udham Singh Nagar'),
(514, 33, 'Uttarkashi'),
(515, 23, 'Agra'),
(516, 23, 'Allahabad'),
(517, 23, 'Aligarh'),
(518, 23, 'Ambedkar Nagar'),
(519, 23, 'Auraiya'),
(520, 23, 'Azamgarh'),
(521, 23, 'Barabanki'),
(522, 23, 'Badaun'),
(523, 23, 'Bagpat'),
(524, 23, 'Bahraich'),
(525, 23, 'Bijnor'),
(526, 23, 'Ballia'),
(527, 23, 'Banda'),
(528, 23, 'Balrampur'),
(529, 23, 'Bareilly'),
(530, 23, 'Basti'),
(531, 23, 'Bulandshahr'),
(532, 23, 'Chandauli'),
(533, 23, 'Chitrakoot'),
(534, 23, 'Deoria'),
(535, 23, 'Etah'),
(536, 23, 'Kanshiram Nagar'),
(537, 23, 'Etawah'),
(538, 23, 'Firozabad'),
(539, 23, 'Farrukhabad'),
(540, 23, 'Fatehpur'),
(541, 23, 'Faizabad'),
(542, 23, 'Gautam Buddha Nagar'),
(543, 23, 'Gonda'),
(544, 23, 'Ghazipur'),
(545, 23, 'Gorkakhpur'),
(546, 23, 'Ghaziabad'),
(547, 23, 'Hamirpur'),
(548, 23, 'Hardoi'),
(549, 23, 'Mahamaya Nagar'),
(550, 23, 'Jhansi'),
(551, 23, 'Jalaun'),
(552, 23, 'Jyotiba Phule Nagar'),
(553, 23, 'Jaunpur District'),
(554, 23, 'Kanpur Dehat'),
(555, 23, 'Kannauj'),
(556, 23, 'Kanpur Nagar'),
(557, 23, 'Kaushambi'),
(558, 23, 'Kushinagar'),
(559, 23, 'Lalitpur'),
(560, 23, 'Lakhimpur Kheri'),
(561, 23, 'Lucknow'),
(562, 23, 'Mau'),
(563, 23, 'Meerut'),
(564, 23, 'Maharajganj'),
(565, 23, 'Mahoba'),
(566, 23, 'Mirzapur'),
(567, 23, 'Moradabad'),
(568, 23, 'Mainpuri'),
(569, 23, 'Mathura'),
(570, 23, 'Muzaffarnagar'),
(571, 23, 'Pilibhit'),
(572, 23, 'Pratapgarh'),
(573, 23, 'Rampur'),
(574, 23, 'Rae Bareli'),
(575, 23, 'Saharanpur'),
(576, 23, 'Sitapur'),
(577, 23, 'Shahjahanpur'),
(578, 23, 'Sant Kabir Nagar'),
(579, 23, 'Siddharthnagar'),
(580, 23, 'Sonbhadra'),
(581, 23, 'Sant Ravidas Nagar'),
(582, 23, 'Sultanpur'),
(583, 23, 'Shravasti'),
(584, 23, 'Unnao'),
(585, 23, 'Varanasi'),
(586, 24, 'Birbhum'),
(587, 24, 'Bankura'),
(588, 24, 'Bardhaman'),
(589, 24, 'Darjeeling'),
(590, 24, 'Dakshin Dinajpur'),
(591, 24, 'Hooghly'),
(592, 24, 'Howrah'),
(593, 24, 'Jalpaiguri'),
(594, 24, 'Cooch Behar'),
(595, 24, 'Kolkata'),
(596, 24, 'Malda'),
(597, 24, 'Midnapore'),
(598, 24, 'Murshidabad'),
(599, 24, 'Nadia'),
(600, 24, 'North 24 Parganas'),
(601, 24, 'South 24 Parganas'),
(602, 24, 'Purulia'),
(603, 24, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `doctor_id` int(11) NOT NULL,
  `hospital_login_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `doctor_first_name` varchar(50) NOT NULL,
  `doctor_last_name` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `district_id` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  `medical_speciality_id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `qualification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doctor_id`, `hospital_login_id`, `login_id`, `doctor_first_name`, `doctor_last_name`, `address`, `email`, `phone_number`, `district_id`, `place`, `medical_speciality_id`, `photo`, `qualification`) VALUES
(1, 1, 3, 'Jinoys', 'Thomass', ' Chnaganacherrys', 'jinoy@gmail.co.in', 9823145822, 261, 'Chanagancherrys', 1, '/media/8..jpg', 'MBBS'),
(2, 1, 5, 'anuja', 'chinuu', '  Kottayam', 'chinnu@gmail.com', 9523145812, 258, 'Kottayam', 12, '/media/3..jpg', 'MBBS MS'),
(4, 1, 15, 'Jinoy', 'Thomas', ' Adoor', 'jinoy@gmail.com', 9865321245, 255, 'Pampady', 5, '/media/6..jpg', ' MBBS'),
(6, 2, 10, 'Joels', 'Sams', 'Joel Villas', 'joel@gmail.coms', 8796541252, 259, 'Pathanamthittas', 2, '1695803059.jpg', 'MBBS MD'),
(7, 2, 12, 'Jithin', 'Joey', 'Jithin Villa', 'jithin@gmail.com', 7845653222, 259, 'Pathanamthitta', 2, '1696243038.jpg', 'MBBS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback` varchar(150) NOT NULL,
  `user_login_id` int(11) NOT NULL,
  `reply` varchar(50) NOT NULL,
  `feedback_subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback`, `user_login_id`, `reply`, `feedback_subject`) VALUES
(1, 'Good care', 5, 'dsdsd', 'dfsf'),
(2, 'Thank You', 5, 'xcfdsfds', 'dsfdsf'),
(6, 'Good Service', 5, 'Thanks', 'Good Service'),
(7, 'Good care and  Service', 5, '', 'Good Care');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE `tbl_hospital` (
  `hospital_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `district_id` int(11) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`hospital_id`, `login_id`, `hospital`, `address`, `email`, `phone_number`, `district_id`, `place`) VALUES
(1, 2, 'Muthoot Hospital', 'Pathanathitta', 'muthoot@gmail.com', 8754213265, 259, 'Pathanamthitta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_insurance`
--

CREATE TABLE `tbl_insurance` (
  `insurance_id` int(11) NOT NULL,
  `insuarnce_company` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `hospital_login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_insurance`
--

INSERT INTO `tbl_insurance` (`insurance_id`, `insuarnce_company`, `description`, `hospital_login_id`) VALUES
(1, 'ADITYA BIRLAa', 'Iintroducing a health insurance plan that’s designed specifically for the needs of the youth by offering protection at all relevant times as well as rewarding you for staying active and healthy. Get a host of features and benefits including an upfront good health discount of up to 10% basis on classification under good health risk, up to 50% HealthReturnsTM on staying active, 100% sum insured refill, maternity cover, in-patient hospitalization, and many more.', 2),
(3, 'ADITYA BIRLA', 'Introducing a health insurance plan that’s designed ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` longtext DEFAULT NULL,
  `Usertype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `Usertype`, `status`) VALUES
(1, 'admin', 'admin', 'Admin', 'Approved'),
(2, 'muthoot@123', 'muthoot@123', 'Hospital', 'Approved'),
(5, 'anu123', 'anu123', 'Patient', 'Approved'),
(10, 'joel123', 'joel123', 'Doctor', 'Approved'),
(12, 'jithin123', 'jithin123', 'Doctor', 'Approved'),
(13, 'ffffff', 'ffffff', 'Doctor', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medical_speciality`
--

CREATE TABLE `tbl_medical_speciality` (
  `medical_speciality_id` int(11) NOT NULL,
  `speciality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_medical_speciality`
--

INSERT INTO `tbl_medical_speciality` (`medical_speciality_id`, `speciality`) VALUES
(1, 'Dermatopathology'),
(2, 'Pediatric Dermatology'),
(3, 'Cosmetic Dermatology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `patient_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `patient_name` varchar(50) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `Address` longtext NOT NULL,
  `place` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patient_id`, `login_id`, `patient_name`, `phone_number`, `Address`, `place`, `dob`, `entry_date`, `district_id`) VALUES
(1, 5, 'Anu', 8754213233, 'Anu Villa', 'Kottayam', '2019-09-19', '0000-00-00 00:00:00', 255);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prescription`
--

CREATE TABLE `tbl_prescription` (
  `prescription_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `visiting_date` date NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `details` longtext NOT NULL,
  `medicine` longtext NOT NULL,
  `symptoms` longtext NOT NULL,
  `uses` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prescription`
--

INSERT INTO `tbl_prescription` (`prescription_id`, `appointment_id`, `visiting_date`, `entry_date`, `details`, `medicine`, `symptoms`, `uses`) VALUES
(1, 1, '2023-08-01', '2023-08-01 06:53:33', 'The normal core temperature of humans could vary between 97.7 °F - 100.04 °F (36.5 °C - 37.8 °C). Any increase in the body temperature is called fever.', 'acetaminophen (Tylenol, others) or ibuprofen (Advil, Motrin IB, others).', 'The increase in bodily temperature due to the infection caused by the virus falls into the category of viral fever. These small ubiquitous microorganisms, the virus, usually range from a few hundred nanometres in size', '3 per day'),
(2, 2, '2023-08-16', '2023-08-01 06:53:58', 'fgfdg', 'fdgfdgfd', 'fdgfdg', 'fdgfdg'),
(3, 5, '2023-09-08', '2023-09-08 05:23:53', 'Viral fever', 'Paracetamol', 'Fever, Body Pain', 'Paracetamol - Every 4 hours'),
(5, 4, '2023-09-30', '0000-00-00 00:00:00', ' fdgfdgdfg', 'fdgfdg', 'cfvdg', 'fdgfd'),
(7, 1, '2023-10-11', '2023-10-06 09:14:13', ' It will reduce fever', 'Paracetamol', 'Fever', 'Reduce Fever, 1-1-1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `country_id`, `state`) VALUES
(1, 105, 'ANDHRA PRADESH'),
(2, 105, 'ASSAM'),
(3, 105, 'ARUNACHAL PRADESH'),
(4, 105, 'BIHAR'),
(5, 105, 'GUJRAT'),
(6, 105, 'HARYANA'),
(7, 105, 'HIMACHAL PRADESH'),
(8, 105, 'JAMMU & KASHMIR'),
(9, 105, 'KARNATAKA'),
(10, 105, 'KERALA'),
(11, 105, 'MADHYA PRADESH'),
(12, 105, 'MAHARASHTRA'),
(13, 105, 'MANIPUR'),
(14, 105, 'MEGHALAYA'),
(15, 105, 'MIZORAM'),
(16, 105, 'NAGALAND'),
(17, 105, 'ORISSA'),
(18, 105, 'PUNJAB'),
(19, 105, 'RAJASTHAN'),
(20, 105, 'SIKKIM'),
(21, 105, 'TAMIL NADU'),
(22, 105, 'TRIPURA'),
(23, 105, 'UTTAR PRADESH'),
(24, 105, 'WEST BENGAL'),
(25, 105, 'DELHI'),
(26, 105, 'GOA'),
(27, 105, 'PONDICHERY'),
(28, 105, 'LAKSHDWEEP'),
(29, 105, 'DAMAN & DIU'),
(30, 105, 'DADRA & NAGAR'),
(31, 105, 'CHANDIGARH'),
(32, 105, 'ANDAMAN & NICOBAR'),
(33, 105, 'UTTARANCHAL'),
(34, 105, 'JHARKHAND'),
(35, 105, 'CHATTISGARH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `tbl_insurance`
--
ALTER TABLE `tbl_insurance`
  ADD PRIMARY KEY (`insurance_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_medical_speciality`
--
ALTER TABLE `tbl_medical_speciality`
  ADD PRIMARY KEY (`medical_speciality_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_insurance`
--
ALTER TABLE `tbl_insurance`
  MODIFY `insurance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_medical_speciality`
--
ALTER TABLE `tbl_medical_speciality`
  MODIFY `medical_speciality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
