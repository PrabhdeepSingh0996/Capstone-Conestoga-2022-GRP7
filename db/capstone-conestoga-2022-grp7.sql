-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 05:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone-conestoga-2022-grp7`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payer_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`) VALUES
(1, 'PAYID-MOAOEKQ7CH52230BB561062C', 'C42MBSJETZUZQ', 'vbekee@hotmail.com', 0.05, 'CAD', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `qid` int(5) DEFAULT NULL,
  `Question` text DEFAULT NULL,
  `opt1` text DEFAULT NULL,
  `opt2` text DEFAULT NULL,
  `opt3` text DEFAULT NULL,
  `opt4` text DEFAULT NULL,
  `woptcode` varchar(5) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qid`, `Question`, `opt1`, `opt2`, `opt3`, `opt4`, `woptcode`, `image`) VALUES
(1, 'What does this sign mean?', 'There is a hidden school bus stop ahead', 'There is a Railway crossing on the road ahead', 'There is an Intersection ahead', 'There is a School zone ahead', 'a', 'quizimages/quiz100.png'),
(2, 'What does this sign mean?', 'Animals crossing ahead', 'Wildlife office ahead', 'Animals may present on the road', 'Animals are restricted in this road', 'c', 'quizimages/quiz99.png'),
(3, 'What does this sign mean?', 'There is U-turn ahead', 'Roundabout ahead, Drivers must travel in clockwise direction', 'Roundabout ahead, Drivers must travel in counter-clockwise direction', 'There is a Construction zone ahead', 'c', 'quizimages/quiz98.png'),
(4, 'What does this sign mean?', 'There is an Upcoming fire truck entrance from the mentioned side of the road', 'There is a parking area for Fire trucks', 'There is a Fire station ahead', 'There is a construction zone ahead', 'a', 'quizimages/quiz97.png'),
(5, 'What does this sign mean?', 'There is Hidden intersection ahead', 'There is a dead-end ahead', 'There is a bridge ahead', 'The pavement narrows ahead', 'd', 'quizimages/quiz96.png'),
(6, 'What does this sign mean?', 'There is a Narrow bridge ahead', 'There is an intersection ahead', 'Drivers must turn left ahead', 'Drivers must turn right ahead', 'a', 'quizimages/quiz95.png'),
(7, 'What does this sign mean?', 'Shows the exits from the freeway', 'Shows route to the passenger railway station', 'Shows route to the airport', 'Shows traffic control information', 'b', 'quizimages/quiz94.png'),
(8, 'What does this sign mean?', 'Shows the upcoming intersection with the respective destinations', 'Shows the exits from the freeway', 'Shows the distance in km for the upcoming cities or town', 'Shows the construction zone ahead in the mentioned direction', 'a', 'quizimages/quiz93.png'),
(9, 'What does this sign mean?', 'Shows route to nearby hospital', 'Shows accessible parking ahead', 'Shows facilities that are accessible by wheelchair', 'Shows lane specific for ambulance', 'c', 'quizimages/quiz92.png'),
(10, 'What does this sign mean?', 'Shows the upcoming right turn on freeway', 'Shows the upcoming exits on freeway', 'Shows the upcoming town and cities', 'Shows the upcoming intersection', 'b', 'quizimages/quiz91.png'),
(11, 'What does this sign mean', 'The vehicles bearing this sign are government official vehicles', 'The vehicles bearing this sign have the authority to park anywhere', 'The vehicles bearing this sign are slower than usual traffic pace', 'Do not pass the vehicle bearing this sign when flashing', 'd', 'quizimages/quiz90.png'),
(12, 'What does this sign mean', 'Drivers must come to a complete stop immediately', 'Drivers must reduce the speed and be prepared to stop', 'Drivers must increase the speed and try to pass through the area', 'Drivers must not stop in the area between these sign', 'b', 'quizimages/quiz89.png'),
(13, 'What does this sign mean', 'These signs guide the drivers around the sharp curves in the road', 'These sign shows the exit from the freeways', 'Drivers must not take right turn', 'There is a winding road ahead', 'a', 'quizimages/quiz88.png'),
(14, 'What does this sign mean', 'There is a temporary detour from normal traffic route', 'There is a winding road ahead', 'There is a Steep hill ahead', 'There is a Slippery road ahead', 'a', 'quizimages/quiz87.png'),
(15, 'What does this sign mean', 'There is a person controlling traffic ahead instead of traffic light', 'There is a Construction zone ahead', 'The Paved surface ends ahead', 'There is a Steep hill ahead', 'a', 'quizimages/quiz86.png'),
(16, 'How far away must you be from an emergency vehicle with its sirens or lights on?', '50 metres', '100 metres', '150 metres', '250 metres', 'c', ''),
(17, 'What can cause you to fail a road test?', 'Lack of skill and control', 'Difficulty obeying traffic laws', 'Unsafe actions', 'Any/all of these', 'd', ''),
(18, 'What does a red \"X\" over a driving lane mean?', 'It indicates traffic lights ahead', 'Drivers in that lane must stop immediately', 'A driver must not enter or remain in that lane', 'It applies to pedestrians only', 'c', ''),
(19, 'If a vehicle is carrying________, they are able to drive in the High Occupancy Vehicle lane on provincial highways.', 'At least two people', 'At least five people', 'At least four people', 'At least three people', 'a', ''),
(20, 'If your brakes fail, what should you do?', 'Use your emergency brake and sound your horn to warn other drivers while looking for a soft collision point', 'Wave down the nearest police officer and shout for help', 'Pump the brakes rapidly and shift into a lower gear', 'Firmly press down on your brakes until they re-engage', 'c', ''),
(21, 'If you fail to stay at the scene of an accident, how many points could you get on your license?', '7', '9', '3', '11', 'a', ''),
(22, 'How often should you check your mirrors to stay aware of surrounding traffic?', 'six', 'five', 'three', 'ten', 'b', ''),
(23, 'For what 3 reasons do you need to use your turn signals when turning?', 'To make faster turns', 'To notify the other driver(s) of your intentions', 'To advise pedestrians of what you want to do', 'To inform cyclist of your intentions', 'b', ''),
(24, 'What is the best way to stay safe while driving over black ice?', 'Ease off the accelerator and steer immediately to side of the road', 'Brake hard while gripping the steering wheel tightly', 'Calmly remove your foot from the accelerator and steer in the direction you want to go', '1.5 m', 'c', ''),
(25, 'If there is median on the road, when do you need to stop for a school bus?', 'If you are behind it and it has red lights flashing', 'If you are approaching it', 'Any time it is stopped', 'At no time', 'a', ''),
(26, 'If you are exiting a freeway, what should you do?', 'Do what the vehicle ahead of you does', 'Signal, and then accelerate while merging smoothly into traffic and then proceed to the exit lane', 'Signal, move into the deceleration lane, reduce speed gradually and obey exit signs', 'Signal and then stop to wait for an opening in traffic', 'c', ''),
(27, 'What are you legally obligated to do if a police officer signals you to pull over?', 'Pull over as far to the left as possible', 'Slow down and stop in the lane you are in', 'Signal and stop at the nearest parking lot', 'Pull over as far to the right as you safely can and come to a complete stop', 'd', ''),
(28, 'At a roundabout, who gets the right-of-way?', 'Traffic turning right in the roundabout', 'Traffic turning left in the roundabout', 'Traffic in the roundabout', 'Traffic approaching the roundabout', 'c', ''),
(29, 'If you start feeling tired while driving what should you do?', 'Turn up your radio', 'Open a window', 'Reduce speed', 'Stop for a short rest in a safe area', 'd', ''),
(30, 'In which direction will your car pull if your front tire goes flat?', 'Centre of the road', 'Left side', 'Right side', 'Side that has the flat tire', 'd', ''),
(31, 'What does this sign mean', 'There is a sharp right turn ahead : Drivers must slowly turn their vehicles', 'There is a narrow bridge ahead : Drivers must switch to low gears', 'The lane ahead is closed for road work : Drivers must merge with traffic in open lane', 'The pavement ahead is narrow : Drivers must slow down their speed', 'c', 'quizimages/quiz85.png'),
(32, 'What does this sign mean', 'There is a Road work ahead', 'There is a Construction zone ahead', 'There are survey crews working ahead', 'There is a Hospital zone ahead', 'c', 'quizimages/quiz84.png'),
(33, 'What does this sign mean', 'There is a Paved surface ahead', 'There is a Road work ahead', 'Pedestrians are restricted in the area ahead', 'There is a School zone ahead', 'b', 'quizimages/quiz83.png'),
(34, 'What does this sign mean', 'There is an Intersection ahead', 'The Construction zone is 1 km ahead', 'The Construction zone ends in 1 km', 'There is a Community zone ahead', 'b', 'quizimages/quiz82.png'),
(35, 'What does this sign mean', 'Lane is closed ahead. Drivers must merge with the traffic in the mentioned lane', 'Lane unpaved ahead. Driver must reduce the speed', 'There is a sharp right turn ahead', 'There is a slight right curve ahead', 'a', 'quizimages/quiz81.png'),
(36, 'What does this sign mean?', 'There is a winding of road ahead', 'There is an uneven road ahead', 'There is a slippery road ahead', 'There is a speed-breaker ahead', 'b', 'quizimages/quiz80.png'),
(37, 'What does this sign mean?', 'There is a sharp right turn ahead', 'There is a sharp left turn ahead', 'There is a slight right curve ahead', 'There is a slight left curve ahead', 'c', 'quizimages/quiz79.png'),
(38, 'What does this sign mean?', 'The Oncoming traffic has the right-of-way', 'There is a narrow bridge ahead', 'The Roads are merging ahead', 'There is a Road division ahead', 'd', 'quizimages/quiz78.png'),
(39, 'What does this sign mean?', 'This road is specific for pedestrians', 'Watch out for pedestrians in this road', 'There is a Pedestrian crosswalk ahead', 'There is a Residential area ahead', 'b', 'quizimages/quiz77.png'),
(40, 'What does this sign mean?', 'Intersection ahead, Drivers from the mentioned direction has the right-of-way', 'Intersection ahead, Drivers must go straight', 'Intersection ahead, Drivers must turn left or right', 'Intersection ahead, Drivers from the mentioned lane must yield the right-of-way to the other drivers', 'a', 'quizimages/quiz76.png'),
(41, 'What does this sign mean?', 'Drivers cannot park in the area between these signs', 'Drivers must not stop their vehicle in the area between these signs', 'Drivers can park their vehicles in the area between these signs', 'Bicycles can only park in the area between these signs, not four wheel vehicles', 'a', 'quizimages/quiz75.png'),
(42, 'What does this sign mean?', 'Zone where school buses load or unload students without signaling', 'School Zone ahead', 'Bus Stop ahead', 'There is a Parking for school buses only', 'a', 'quizimages/quiz74.png'),
(43, 'What does this sign mean?', 'Parking for vehicles having accessible parking permit', 'Parking is prohibited in this area', 'Ambulance parking area', 'Parking prohibited for disabled persons', 'a', 'quizimages/quiz73.png'),
(44, 'What does this sign mean?', 'Snowmobile may use this road only in daylight', 'Snowmobile is prohibited in this area', 'Snowmobile may use this road', 'Snowmobile training institute ahead', 'c', 'quizimages/quiz72.png'),
(45, 'What does this sign mean?', 'Bicycles are allowed in this road', 'Bicycles are not allowed in this road', 'Bicycle parking is prohibited in this area', 'Bicycle parking is permitted in this area', 'b', 'quizimages/quiz71.png'),
(46, 'What does this sign mean?', 'Drivers must come to a complete stop', 'Drivers should slow down his vehicle', 'There are stopped vehicles ahead', 'There is a dead-end ahead', 'a', 'quizimages/quiz70.png'),
(47, 'What does this sign mean?', 'Drivers must keep their vehicles speed above 50 km/hr in the area ahead', 'There is a speed limit of 50 km/hr in the area ahead', 'Ending of a Speed limit zone', 'There is a speed limit for longer vehicles usually 40m in length', 'b', 'quizimages/quiz69.png'),
(48, 'What does this sign mean?', 'Drivers cannot park their vehicle in the area between these signs', 'Drivers must not stop their vehicle except while loading or unloading passengers in the area between these signs', 'Drivers can speed-up in the area between these signs because of no pedestrian', 'Pedestrians are not allowed in the area between these signs', 'b', 'quizimages/quiz68.png'),
(49, 'What does this sign mean?', 'Drivers cannot park their vehicles between these signs', 'Drivers must not stop in the area between these signs', 'Ongoing Construction in the area between these signs', 'Drivers must not speed-up in the area between these signs', 'b', 'quizimages/quiz67.png'),
(50, 'What does this sign mean?', 'Passing other vehicles is permitted in this road', 'Drivers must not pass other vehicles in this road', 'This is a single lane road', 'There is a parallel parking area ahead', 'a', 'quizimages/quiz66.png'),
(51, 'What is the area that you are unable to see in your rear and side-view mirrors?', 'Blind spot', 'Dark area', 'Danger zone', 'Safe zone', 'a', ''),
(52, 'How much visibility do you need to be able to make a U-turn?', '125 metres', '50 metres', '250 metres', '150 metres', 'd', ''),
(53, 'If you fail or refuse to give a breath or blood sample when asked by police, your license will immediately be suspended for????', '3 days', '10 days', '90 days', '30 days', 'c', ''),
(54, 'When are drivers in the Graduated Driver License Program prohibited from driving?', 'When any amount of alcohol has been consumed', 'During daytime', 'Without airbags', 'With a blood alcohol concentration over .08', 'a', ''),
(55, 'What does having an Accessible Parking Permit do?', 'A designated parking space to be used by any vehicle showing the permit', 'A vehicle carrying the person to whom it was issued to use a designated disabled parking space', 'The holder to park anywhere', 'The holder???s family members to use designated spaces', 'b', ''),
(56, 'How much space are motorcyclists entitled to while driving?', 'A quarter of a lane', 'A full lane', 'Half a lane', 'Two thirds of a lane', 'b', ''),
(57, 'What will happen if a driver is found with a child in a vehicle not using a car or booster seat?', 'Three demerit points', 'Up to $1,000 plus two demerit points', 'Four demerit points', 'One demerit points', 'b', ''),
(58, 'Where should you be driving unless you plan on making a left turn or passing a vehicle?', 'Drive in the centre of the roadway', 'Always keep well to the left', 'Drive on the shoulder of the highway', 'Keep to the right of the road', 'd', ''),
(59, 'At what point will a fully licensed driver get a suspension after a 9 point interview?', 'Under no circumstances', 'If your license is not needed for business reasons', 'If you do not have at least 5 years??? driving experience', 'If you fail to attend an interview, or fail to give good reasons for keeping your license', 'd', ''),
(60, 'At what point do you have to put your headlights on the low beam setting when following another vehicle?', 'Within 60 m', 'Within 30 m', 'This only applies when approaching another vehicle', 'Within 120 m', 'a', ''),
(61, 'In which way should pedestrians walking on a highway face?', 'Facing traffic', 'Down the centreline', 'Well out into the traffic lane', 'With their back to traffic', 'a', ''),
(62, 'If you get ______ as a fully licensed driver, you might have to go to an interview to re-examine your ability to drive.', '3 demerit points', '9 demerit points', '6 demerit points', '15 demerit points', 'b', ''),
(63, 'When do you have to wear a seatbelt in Ontario?', 'During the hours of darkness', 'At all times', 'On high-speed highways', '???	 In urban areas', 'b', ''),
(64, 'How often must you renew your drivers license if you are over age 80?', 'Two years', 'Four years', 'Three years', 'Five years', 'a', ''),
(65, 'If you are approaching an intersection that is blocked with traffic, what should you do?', 'Proceed slowly into the intersection until the traffic ahead moves on', 'Stop before entering the intersection and wait until traffic ahead moves on', 'Keep as close as possible to the car ahead', 'Sound your horn to warn cars ahead to move on', 'b', ''),
(66, 'What happens if your BAC is greater than 0.08?', 'Your license will be suspended immediately for 10 days', 'Your license will be suspended immediately for 20 days', 'Your license will be suspended immediately for 90 days', 'Your license will be suspended immediately for 30 days', 'c', ''),
(67, 'What is indicated by a flashing yellow light at an intersection?', 'Tells you to stop if making left turn', 'Tells you to continue at same speed', 'Tells you to stop if making left turn', 'Warns you to drive with caution', 'd', ''),
(68, 'What is indicated by a flashing blue light on a motor vehicle?', 'Snow removal equipment', 'An ambulance', 'A motor vehicle carrying explosives', 'A police emergency vehicle', 'a', ''),
(69, 'What is the maximum speed limit in cities, towns, and villages where there is no posted speed?', '30km/h', '50km/h', '60km/h', '40km/h', 'b', ''),
(70, 'If you are planning on going straight but are stopped at a red light, what should you do?', 'Stop, wait until the light changes to green and the intersection is clear before moving through it', 'Stop, proceed when the way is clear', 'Slow down, proceed when the way is clear', 'Stop, give pedestrians the right-of-way, and then proceed with caution', 'a', ''),
(71, 'What does this sign mean?', 'Drivers must go straight at the intersection', 'There is a dead-end ahead', 'Drivers must not drive through the intersection', 'The road is turning ahead', 'c', 'quizimages/quiz65.png'),
(72, 'What does this sign mean?', 'Drivers must not pass other vehicles in this road', 'Drivers can pass other vehicles in this road', 'There is a single-lane road ahead', 'There is a two-lane road ahead', 'a', 'quizimages/quiz64.png'),
(73, 'What does this sign mean?', 'There is only two way right turn', 'There is only two way left turn', 'There is intersection ahead', 'There is U-turn ahead', 'b', 'quizimages/quiz63.png'),
(74, 'What does this sign mean?', 'Road branching off ahead to the right', 'Road branching off ahead to the left', 'Drivers must turn right', 'Drivers must go straight', 'a', 'quizimages/quiz62.png'),
(75, 'What does this sign mean?', 'Drivers can only park their vehicle during the mentioned time', 'Drivers can only park their vehicles during other than the time mentioned', 'Drivers cannot park their vehicles in this area', 'This is a private parking area', 'a', 'quizimages/quiz61.png'),
(76, 'What does this sign mean?', 'There is no U-turn ahead', 'Drivers must take U-turn ahead', 'Do not take U-Turn ahead', 'Drivers must take left turn ahead', 'c', 'quizimages/quiz60.png'),
(77, 'What does this sign mean?', 'No pedestrian allowed in this road', 'No vehicles allowed in this road', 'No bicycles allowed in this road', 'No crosswalk in the area ahead', 'a', 'quizimages/quiz59.png'),
(78, 'What does this sign mean?', 'There is a Pedestrian crossing ahead', 'There is a Hospital zone ahead', 'There is a School crossing ahead. Follow the direction of crossing guard', 'This road is specific for pedestrians', 'c', 'quizimages/quiz58.png'),
(79, 'What does this sign mean?', 'Drivers must take right turn when facing red light at intersection', 'Drivers must not take right turn when facing red light at intersection', 'Drivers can go straight when facing a red light at intersection', 'Drivers must come to a complete stop when facing red light at intersection', 'b', 'quizimages/quiz57.png'),
(80, 'What does this sign mean?', 'Drivers must keep left of the traffic island', 'Drivers must take the left turn', 'Drivers must take the right turn', 'Drivers must keep right of the traffic island', 'd', 'quizimages/quiz56.png'),
(81, 'How close can you park to a fire hydrant?', '3 m', '6 m', '4.5 m', '1.5 m', '1', ''),
(82, 'What does threshold braking mean?', 'You pump the brakes several times', 'You use all the braking force available without locking the wheels', 'You are braking dangerously', 'You brake hard and stay on the brakes until the vehicle stops', 'b', ''),
(83, 'You are prohibited from driving between _________ if you have a G1 license.', 'Midnight and 5:00 a.m.', '$2005:00 a.m. and 9:00 a.m.', '9:00 a.m. and 5:00 p.m', '5:00 p.m. and midnight', 'a', ''),
(84, 'What should you do if your vehicle breaks down on a 400-series highway?', 'Blow your horn for help', 'Get out and try to wave highway traffic around your vehicle', 'Get out and walk to get help', 'Pull over, activate your emergency flashers and wait for help', 'd', ''),
(85, 'What are you legally obligated to do if you are on a two-way street and hear an emergency vehicle siren?', 'Continue at same speed', 'Pull as far as possible to the right and stop', 'Speed up and get out of the way', 'Signal the driver to pass', 'b', ''),
(86, 'What will happen if you are convicted of careless driving?', 'All of these', 'Your license may be suspended for up to two years', 'Six demerit points', 'Can be fined up to $2,000 and sentenced to up to six months in jail', 'a', ''),
(87, 'Before entering an intersection, what are you legally obligated to do?', 'Stop, sound horn, then proceed', 'Stop, and when it is safe to do so, proceed', 'Slow down and if way is clear, proceed', 'Slow down, sound horn and proceed', 'b', ''),
(88, 'How quickly should you be able to stop in any road conditions?', 'Stop within 150 m', 'Stop within 60 m', 'Stop within a safe distance', 'Stop within 90 m', 'c', ''),
(89, 'What should you do before entering a freeway?', 'Stop on the acceleration lane, wait for an opening, and then enter the freeway rapidly', 'Signal and increase your speed to merge smoothly with traffic', 'Slow down, and then enter freeway at a sharp angle', 'Drive slowly and be prepared to stop for freeway traffic', 'b', ''),
(90, 'Where on a roadway should you be prior to making a left turn if traffic moves in both directions?', 'It does not matter provided you signal', 'Close to the right-hand side of the roadway', 'Close to the left side of the roadway', 'Immediately to the right of the centerline of the roadway', 'd', ''),
(91, 'What does this sign mean?', 'This sign shows that drivers must come to a complete stop', 'This sign shows that drivers should slow down the speed', 'This sign shows that the vehicles in intersection or close to it have the right to go first', 'This sign shows that there is an intersection ahead', 'c', 'quizimages/quiz55.png'),
(92, 'What does this sign mean?', 'Do not enter this road', 'Drivers must remain on right side of the road', 'Drivers must come to a complete stop', 'Drivers can???t park in this area', 'a', 'quizimages/quiz54.png'),
(93, 'What does this sign mean?', 'This road contain official bicycle route', 'There is a bicycle parking ahead', 'There is a bicycle institute ahead', 'Bicycling is prohibited in this area', 'a', 'quizimages/quiz53.png'),
(94, 'What does this sign mean?', 'Reserved area for vehicles that pick and drop disable peoples', 'Restricted area for disabled peoples', 'Parking reserved for hospital faculties', 'Reserved parking area for disabled people', 'a', 'quizimages/quiz52.png'),
(95, 'What does this sign mean?', 'Faster vehicles can pass through slower vehicles though right lane', 'Faster traffic must keep on right side', 'Slower traffic must keep on right side', 'All traffic must keep on the right lane', 'c', 'quizimages/quiz51.png'),
(96, 'If damages or injuries exceed ______, you are legally obligated to report a collision to the police.', '$5000', '$200', '$2000', '$100', 'c', ''),
(97, 'What is indicated by a red signal light with a green arrow at an intersection?', 'Stop and wait for a green signal before making a turn in the direction of the arrow', 'Proceed with caution in the direction of the arrow', 'That pedestrians may cross', 'Stop and then proceed', 'b', ''),
(98, 'Out of the following, which 3 are causes of skids?', 'Hard braking', 'Driving too slowly', 'Accelerating too quickly', 'Driving too fast', 'a', ''),
(99, 'Who gets the right-of-way if a traffic signal changes color while a pedestrian is crossing the street?', 'The pedestrian', 'Motorists making a turn', 'Motorists coming from his right', 'Motorists coming from his left', 'a', ''),
(100, 'How quickly are you obligated to report an accident to the police?', 'Within 72 hours', 'Within 48 hours', 'Within 24 hours', 'Immediately', 'd', '');











-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `user_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `usertype` varchar(45) DEFAULT '0',
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD UNIQUE KEY `result_id_UNIQUE` (`result_id`),
  ADD KEY `fk_result_user1_idx` (`user_user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fk_result_user1` FOREIGN KEY (`user_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
