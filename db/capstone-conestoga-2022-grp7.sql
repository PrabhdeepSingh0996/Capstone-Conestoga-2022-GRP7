-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 04:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'Within 72 hours'),
(2, 1, 0, 'Within 48 hours'),
(3, 1, 0, 'Within 24 hours'),
(4, 1, 1, 'Immediately'),
(5, 2, 1, 'The pedestrian'),
(6, 2, 0, 'Motorists making a turn'),
(7, 2, 0, 'Motorists coming from his right'),
(8, 2, 0, 'Motorists coming from his left'),
(9, 3, 1, 'Hard braking'),
(10, 3, 0, 'Driving too slowly'),
(11, 3, 0, 'Accelerating too quickly'),
(12, 3, 0, 'Driving too fast'),
(13, 4, 0, 'Stop and wait for a green signal before making'),
(14, 4, 1, 'Proceed with caution in the direction of the '),
(15, 4, 0, 'Accelerating too quickly'),
(16, 4, 0, 'Stop and then proceed'),
(17, 5, 0, '$5000'),
(18, 5, 0, '$200'),
(19, 5, 1, '$2000'),
(20, 5, 0, '$100');

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
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choice_1` text NOT NULL,
  `choice_2` text NOT NULL,
  `choice_3` text NOT NULL,
  `choice_4` text NOT NULL,
  `correct_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `correct_answer`) VALUES
(1, 'How quickly are you obligated to report an accident to the police?', 'Within 72 hours', 'Within 48 hours', 'Within 24 hours', 'Immediately', 'Immediately'),
(2, 'Who gets the right-of-way if a traffic signal changes color while a pedestrian is crossing the stree', 'The pedestrian', 'Motorists making a turn', 'Motorists coming from his right', 'Motorists coming from his left', 'The pedestrian'),
(3, 'Out of the following, which 3 are causes of skids?', 'Hard braking', 'Driving too slowly', 'Accelerating too quickly', 'Driving too fast', 'Hard braking'),
(4, 'What is indicated by a red signal light with a green arrow at an intersection?', 'Stop and wait for a green signal before makin', 'Proceed with caution in the direction of the ', 'Accelerating too quickly', 'Stop and then proceed', 'Proceed with caution in the direction of the '),
(5, 'If damages or injuries exceed ______, you are legally obligated to report a collision to the police.', '$5000', '$200', '$2000', '$100', '$2000'),
(6, 'Where on a roadway should you be prior to making a left turn if traffic moves in both directions?', 'It does not matter provided you signal', 'Close to the right-hand side of the roadway', 'Close to the left side of the roadway', 'Immediately to the right of the centerline of the roadway', 'Immediately to the right of the centerline of the roadway'),
(7, 'What should you do before entering a freeway?', 'Stop on the acceleration lane, wait for an op', 'Signal and increase your speed to merge smoot', 'Slow down, and then enter freeway at a sharp ', 'Drive slowly and be prepared to stop for free', 'Signal and increase your speed to merge smoot'),
(8, 'How quickly should you be able to stop in any road conditions?', 'Stop within 150 m', 'Stop within 60 m', 'Stop within a safe distance', 'Stop within 90 m', 'Stop within a safe distance'),
(9, 'Before entering an intersection, what are you legally obligated to do?', 'Stop, sound horn, then proceed', 'Stop, and when it is safe to do so, proceed', 'Slow down and if way is clear, proceed', 'Slow down, sound horn and proceed', 'Stop, and when it is safe to do so, proceed'),
(10, 'What will happen if you are convicted of careless driving?', 'All of these', 'Your licence may be suspended for up to two y', 'Six demerit points', 'Can be fined up to $2,000 and sentenced to up', 'All of these'),
(11, 'What are you legally obligated to do if you are on a two-way street and hear an emergency vehicle siren?', 'Continue at same speed', 'Pull as far as possible to the right and stop', 'Speed up and get out of the way', 'Signal the driver to pass', 'Pull as far as possible to the right and stop'),
(12, 'What should you do if your vehicle breaks down on a 400-series highway?', 'Blow your horn for help', 'Get out and try to wave highway traffic around your vehicle', 'Get out and walk to get help', 'Pull over, activate your emergency flashers and wait for help', 'Pull over, activate your emergency flashers and wait for help'),
(13, 'You are prohibited from driving between _________ if you have a G1 license.', 'Midnight and 5:00 a.m.', '$2005:00 a.m. and 9:00 a.m.', '9:00 a.m. and 5:00 p.m', '5:00 p.m. and midnight', 'Midnight and 5:00 a.m.'),
(14, 'What does threshold braking mean?', 'You pump the brakes several times', 'You use all the braking force available without locking the wheels', 'You are braking dangerously', 'You brake hard and stay on the brakes until the vehicle stops', 'You use all the braking force available without locking the wheels'),
(15, 'How close can you park to a fire hydrant?', '3 m', '6 m', '4.5 m', '1.5 m', '3 m'),
(16, 'If you are planning on going straight but are stopped at a red light, what should you do?', 'Stop, wait until the light changes to green and the intersection is clear before moving through it', 'Stop, proceed when the way is clear', 'Slow down, proceed when the way is clear', 'Stop, give pedestrians the right-of-way, and then proceed with caution', 'Stop, wait until the light changes to green and the intersection is clear before moving through it'),
(17, 'What is the maximum speed limit in cities, towns, and villages where there is no posted speed?', '30km/h', '50km/h', '60km/h', '40km/h', '50km/h'),
(18, 'What is indicated by a flashing blue light on a motor vehicle?', 'Snow removal equipment', 'An ambulance', 'A motor vehicle carrying explosives', 'A police emergency vehicle', 'Snow removal equipment'),
(19, 'What is indicated by a flashing yellow light at an intersection?', 'Tells you to stop if making left turn', 'Tells you to continue at same speed', 'Tells you to stop if making left turn', 'Warns you to drive with caution', 'Warns you to drive with caution'),
(20, 'What happens if your BAC is greater than 0.08?', 'Your license will be suspended immediately for 10 days', 'Your license will be suspended immediately for 20 days', 'Your license will be suspended immediately for 90 days', 'Your license will be suspended immediately for 30 days', 'Your license will be suspended immediately for 90 days'),
(21, 'If you are approaching an intersection that is blocked with traffic, what should you do?', 'Proceed slowly into the intersection until the traffic ahead moves on', 'Stop before entering the intersection and wait until traffic ahead moves on', 'Keep as close as possible to the car ahead', 'Sound your horn to warn cars ahead to move on', 'Stop before entering the intersection and wait until traffic ahead moves on'),
(22, 'How often must you renew your drivers license if you are over age 80?', 'Two years', 'Four years', 'Three years', 'Five years', 'Two years'),
(23, 'When do you have to wear a seatbelt in Ontario?', 'During the hours of darkness', 'At all times', 'On high-speed highways', '•	 In urban areas', 'At all times'),
(24, 'If you get ______ as a fully licensed driver, you might have to go to an interview to re-examine your ability to drive.', '3 demerit points', '9 demerit points', '6 demerit points', '15 demerit points', '9 demerit points'),
(25, 'In which way should pedestrians walking on a highway face?', 'Facing traffic', 'Down the centreline', 'Well out into the traffic lane', 'With their back to traffic', 'Facing traffic'),
(26, 'At what point do you have to put your headlights on the low beam setting when following another vehicle?', 'Within 60 m', 'Within 30 m', 'This only applies when approaching another vehicle', 'Within 120 m', 'Within 60 m'),
(27, 'At what point will a fully licensed driver get a suspension after a 9 point interview?', 'Under no circumstances', 'If your license is not needed for business reasons', 'If you do not have at least 5 years’ driving experience', 'If you fail to attend an interview, or fail to give good reasons for keeping your license', 'If you fail to attend an interview, or fail to give good reasons for keeping your license'),
(28, 'Where should you be driving unless you plan on making a left turn or passing a vehicle?', 'Drive in the centre of the roadway', 'Always keep well to the left', 'Drive on the shoulder of the highway', 'Keep to the right of the road', 'Keep to the right of the road'),
(29, 'What will happen if a driver is found with a child in a vehicle not using a car or booster seat?', 'Three demerit points', 'Up to $1,000 plus two demerit points', 'Four demerit points', 'One demerit points', 'Up to $1,000 plus two demerit points'),
(30, 'How much space are motorcyclists entitled to while driving?', 'A quarter of a lane', 'A full lane', 'Half a lane', 'Two thirds of a lane', 'A full lane'),
(31, 'What does having an Accessible Parking Permit do?', 'A designated parking space to be used by any vehicle showing the permit', 'A vehicle carrying the person to whom it was issued to use a designated disabled parking space', 'The holder to park anywhere', 'The holder’s family members to use designated spaces', 'A vehicle carrying the person to whom it was issued to use a designated disabled parking space'),
(32, 'When are drivers in the Graduated Driver License Program prohibited from driving?', 'When any amount of alcohol has been consumed', 'During daytime', 'Without airbags', 'With a blood alcohol concentration over .08', 'When any amount of alcohol has been consumed'),
(33, 'If you fail or refuse to give a breath or blood sample when asked by police, your license will immediately be suspended for…?', '3 days', '10 days', '90 days', '30 days', '90 days'),
(34, 'How much visibility do you need to be able to make a U-turn?', '125 metres', '50 metres', '250 metres', '150 metres', '150 metres'),
(35, 'What is the area that you are unable to see in your rear and side-view mirrors?', 'Blind spot', 'Dark area', 'Danger zone', 'Safe zone', 'Blind spot'),
(36, 'In which direction will your car pull if your front tire goes flat?', 'Centre of the road', 'Left side', 'Right side', 'Side that has the flat tire', 'Side that has the flat tire'),
(37, 'If you start feeling tired while driving what should you do?', 'Turn up your radio', 'Open a window', 'Reduce speed', 'Stop for a short rest in a safe area', 'Stop for a short rest in a safe area'),
(38, 'At a roundabout, who gets the right-of-way?', 'Traffic turning right in the roundabout', 'Traffic turning left in the roundabout', 'Traffic in the roundabout', 'Traffic approaching the roundabout', 'Traffic in the roundabout'),
(39, 'What are you legally obligated to do if a police officer signals you to pull over?', 'Pull over as far to the left as possible', 'Slow down and stop in the lane you are in', 'Signal and stop at the nearest parking lot', 'Pull over as far to the right as you safely can and come to a complete stop', 'Pull over as far to the right as you safely can and come to a complete stop'),
(40, 'If you are exiting a freeway, what should you do?', 'Do what the vehicle ahead of you does', 'Signal, and then accelerate while merging smoothly into traffic and then proceed to the exit lane', 'Signal, move into the deceleration lane, reduce speed gradually and obey exit signs', 'Signal and then stop to wait for an opening in traffic', 'Signal, move into the deceleration lane, reduce speed gradually and obey exit signs'),
(41, 'If there is median on the road, when do you need to stop for a school bus?', 'If you are behind it and it has red lights flashing', 'If you are approaching it', 'Any time it is stopped', 'At no time', 'If you are behind it and it has red lights flashing'),
(42, 'What is the best way to stay safe while driving over black ice?', 'Ease off the accelerator and steer immediately to side of the road', 'Brake hard while gripping the steering wheel tightly', 'Calmly remove your foot from the accelerator and steer in the direction you want to go', '1.5 m', 'Calmly remove your foot from the accelerator and steer in the direction you want to go'),
(43, 'For what 3 reasons do you need to use your turn signals when turning?', 'To make faster turns', 'To notify the other driver(s) of your intentions', 'To advise pedestrians of what you want to do', 'To inform cyclist of your intentions', 'To notify the other driver(s) of your intentions'),
(44, 'How often should you check your mirrors to stay aware of surrounding traffic?', 'six', 'five', 'three', 'ten', 'five'),
(45, 'If you fail to stay at the scene of an accident, how many points could you get on your license?', '7', '9', '3', '11', '7'),
(46, 'If your brakes fail, what should you do?', 'Use your emergency brake and sound your horn to warn other drivers while looking for a soft collision point', 'Wave down the nearest police officer and shout for help', 'Pump the brakes rapidly and shift into a lower gear', 'Firmly press down on your brakes until they re-engage', 'Pump the brakes rapidly and shift into a lower gear'),
(47, 'If a vehicle is carrying________, they are able to drive in the High Occupancy Vehicle lane on provincial highways.', 'At least two people', 'At least five people', 'At least four people', 'At least three people', 'At least two people'),
(48, 'What does a red \"X\" over a driving lane mean?', 'It indicates traffic lights ahead', 'Drivers in that lane must stop immediately', 'A driver must not enter or remain in that lane', 'It applies to pedestrians only', 'A driver must not enter or remain in that lane'),
(49, 'What can cause you to fail a road test?', 'Lack of skill and control', 'Difficulty obeying traffic laws', 'Unsafe actions', 'Any/all of these', 'Any/all of these'),
(50, 'How far away must you be from an emergency vehicle with its sirens or lights on?', '50 metres', '100 metres', '150 metres', '250 metres', '150 metres'),
(51, 'What does this sign mean?', 'Faster vehicles can pass through slower vehicles though right lane', 'Faster traffic must keep on right side', 'Slower traffic must keep on right side', 'All traffic must keep on the right lane', 'Slower traffic must keep on right side'),
(52, 'What does this sign mean?', 'Reserved area for vehicles that pick and drop disable peoples', 'Restricted area for disabled peoples', 'Parking reserved for hospital faculties', 'Reserved parking area for disabled people', 'Reserved area for vehicles that pick and drop disable peoples'),
(53, 'What does this sign mean?', 'This road contain official bicycle route', 'There is a bicycle parking ahead', 'There is a bicycle institute ahead', 'Bicycling is prohibited in this area', 'This road contain official bicycle route'),
(54, 'What does this sign mean?', 'Do not enter this road', 'Drivers must remain on right side of the road', 'Drivers must come to a complete stop', 'Drivers can’t park in this area', 'Do not enter this road'),
(55, 'What does this sign mean?', 'This sign shows that drivers must come to a complete stop', 'This sign shows that drivers should slow down the speed', 'This sign shows that the vehicles in intersection or close to it have the right to go first', 'This sign shows that there is an intersection ahead', 'This sign shows that the vehicles in intersection or close to it have the right to go first'),
(56, 'What does this sign mean?', 'Drivers must keep left of the traffic island', 'Drivers must take the left turn', 'Drivers must take the right turn', 'Drivers must keep right of the traffic island', 'Drivers must keep right of the traffic island'),
(57, 'What does this sign mean?', 'Drivers must take right turn when facing red light at intersection', 'Drivers must not take right turn when facing red light at intersection', 'Drivers can go straight when facing a red light at intersection', 'Drivers must come to a complete stop when facing red light at intersection', 'Drivers must not take right turn when facing red light at intersection'),
(58, 'What does this sign mean?', 'There is a Pedestrian crossing ahead', 'There is a Hospital zone ahead', 'There is a School crossing ahead. Follow the direction of crossing guard', 'This road is specific for pedestrians', 'There is a School crossing ahead. Follow the direction of crossing guard'),
(59, 'What does this sign mean?', 'No pedestrian allowed in this road', 'No vehicles allowed in this road', 'No bicycles allowed in this road', 'No crosswalk in the area ahead', 'No pedestrian allowed in this road'),
(60, 'What does this sign mean?', 'There is no U-turn ahead', 'Drivers must take U-turn ahead', 'Do not take U-Turn ahead', 'Drivers must take left turn ahead', 'Do not take U-Turn ahead'),
(61, 'What does this sign mean?', 'Drivers can only park their vehicle during the mentioned time', 'Drivers can only park their vehicles during other than the time mentioned', 'Drivers cannot park their vehicles in this area', 'This is a private parking area', 'Drivers can only park their vehicle during the mentioned time'),
(62, 'What does this sign mean?', 'Road branching off ahead to the right', 'Road branching off ahead to the left', 'Drivers must turn right', 'Drivers must go straight', 'Road branching off ahead to the right'),
(63, 'What does this sign mean?', 'There is only two way right turn', 'There is only two way left turn', 'There is intersection ahead', 'There is U-turn ahead', 'There is only two way left turn'),
(64, 'What does this sign mean?', 'Drivers must not pass other vehicles in this road', 'Drivers can pass other vehicles in this road', 'There is a single-lane road ahead', 'There is a two-lane road ahead', 'Drivers must not pass other vehicles in this road'),
(65, 'What does this sign mean?', 'Drivers must go straight at the intersection', 'There is a dead-end ahead', 'Drivers must not drive through the intersection', 'The road is turning ahead', 'Drivers must not drive through the intersection'),
(66, 'What does this sign mean?', 'Passing other vehicles is permitted in this road', 'Drivers must not pass other vehicles in this road', 'This is a single lane road', 'There is a parallel parking area ahead', 'Passing other vehicles is permitted in this road'),
(67, 'What does this sign mean?', 'Drivers cannot park their vehicles between these signs', 'Drivers must not stop in the area between these signs', 'Ongoing Construction in the area between these signs', 'Drivers must not speed-up in the area between these signs', 'Drivers must not stop in the area between these signs'),
(68, 'What does this sign mean?', 'Drivers cannot park their vehicle in the area between these signs', 'Drivers must not stop their vehicle except while loading or unloading passengers in the area between these signs', 'Drivers can speed-up in the area between these signs because of no pedestrian', 'Pedestrians are not allowed in the area between these signs', 'Drivers must not stop their vehicle except while loading or unloading passengers in the area between these signs'),
(69, 'What does this sign mean?', 'Drivers must keep their vehicles speed above 50 km/hr in the area ahead', 'There is a speed limit of 50 km/hr in the area ahead', 'Ending of a Speed limit zone', 'There is a speed limit for longer vehicles usually 40m in length', 'There is a speed limit of 50 km/hr in the area ahead'),
(70, 'What does this sign mean?', 'Drivers must come to a complete stop', 'Drivers should slow down his vehicle', 'There are stopped vehicles ahead', 'There is a dead-end ahead', 'Drivers must come to a complete stop'),
(71, 'What does this sign mean?', 'Bicycles are allowed in this road', 'Bicycles are not allowed in this road', 'Bicycle parking is prohibited in this area', 'Bicycle parking is permitted in this area', 'Bicycles are not allowed in this road'),
(72, 'What does this sign mean?', 'Snowmobile may use this road only in daylight', 'Snowmobile is prohibited in this area', 'Snowmobile may use this road', 'Snowmobile training institute ahead', 'Snowmobile may use this road'),
(73, 'What does this sign mean?', 'Parking for vehicles having accessible parking permit', 'Parking is prohibited in this area', 'Ambulance parking area', 'Parking prohibited for disabled persons', 'Parking for vehicles having accessible parking permit'),
(74, 'What does this sign mean?', 'Zone where school buses load or unload students without signaling', 'School Zone ahead', 'Bus Stop ahead', 'There is a Parking for school buses only', 'Zone where school buses load or unload students without signaling'),
(75, 'What does this sign mean?', 'Drivers cannot park in the area between these signs', 'Drivers must not stop their vehicle in the area between these signs', 'Drivers can park their vehicles in the area between these signs', 'Bicycles can only park in the area between these signs, not four wheel vehicles', 'Drivers cannot park in the area between these signs'),
(76, 'What does this sign mean?', 'Intersection ahead, Drivers from the mentioned direction has the right-of-way', 'Intersection ahead, Drivers must go straight', 'Intersection ahead, Drivers must turn left or right', 'Intersection ahead, Drivers from the mentioned lane must yield the right-of-way to the other drivers', 'Intersection ahead, Drivers from the mentioned direction has the right-of-way'),
(77, 'What does this sign mean?', 'This road is specific for pedestrians', 'Watch out for pedestrians in this road', 'There is a Pedestrian crosswalk ahead', 'There is a Residential area ahead', 'Watch out for pedestrians in this road'),
(78, 'What does this sign mean?', 'The Oncoming traffic has the right-of-way', 'There is a narrow bridge ahead', 'The Roads are merging ahead', 'There is a Road division ahead', 'There is a Road division ahead'),
(79, 'What does this sign mean?', 'There is a sharp right turn ahead', 'There is a sharp left turn ahead', 'There is a slight right curve ahead', 'There is a slight left curve ahead', 'There is a slight right curve ahead'),
(80, 'What does this sign mean?', 'There is a winding of road ahead', 'There is an uneven road ahead', 'There is a slippery road ahead', 'There is a speed-breaker ahead', 'There is an uneven road ahead'),
(81, 'What does this sign mean', 'Lane is closed ahead. Drivers must merge with the traffic in the mentioned lane', 'Lane unpaved ahead. Driver must reduce the speed', 'There is a sharp right turn ahead', 'There is a slight right curve ahead', 'Lane is closed ahead. Drivers must merge with the traffic in the mentioned lane'),
(82, 'What does this sign mean', 'There is an Intersection ahead', 'The Construction zone is 1 km ahead', 'The Construction zone ends in 1 km', 'There is a Community zone ahead', 'The Construction zone is 1 km ahead'),
(83, 'What does this sign mean', 'There is a Paved surface ahead', 'There is a Road work ahead', 'Pedestrians are restricted in the area ahead', 'There is a School zone ahead', 'There is a Road work ahead'),
(84, 'What does this sign mean', 'There is a Road work ahead', 'There is a Construction zone ahead', 'There are survey crews working ahead', 'There is a Hospital zone ahead', 'There are survey crews working ahead'),
(85, 'What does this sign mean', 'There is a sharp right turn ahead : Drivers must slowly turn their vehicles', 'There is a narrow bridge ahead : Drivers must switch to low gears', 'The lane ahead is closed for road work : Drivers must merge with traffic in open lane', 'The pavement ahead is narrow : Drivers must slow down their speed', 'The lane ahead is closed for road work : Drivers must merge with traffic in open lane'),
(86, 'What does this sign mean', 'There is a person controlling traffic ahead instead of traffic light', 'There is a Construction zone ahead', 'The Paved surface ends ahead', 'There is a Steep hill ahead', 'There is a person controlling traffic ahead instead of traffic light'),
(87, 'What does this sign mean', 'There is a temporary detour from normal traffic route', 'There is a winding road ahead', 'There is a Steep hill ahead', 'There is a Slippery road ahead', 'There is a temporary detour from normal traffic route'),
(88, 'What does this sign mean', 'These signs guide the drivers around the sharp curves in the road', 'These sign shows the exit from the freeways', 'Drivers must not take right turn', 'There is a winding road ahead', 'These signs guide the drivers around the sharp curves in the road'),
(89, 'What does this sign mean', 'Drivers must come to a complete stop immediately', 'Drivers must reduce the speed and be prepared to stop', 'Drivers must increase the speed and try to pass through the area', 'Drivers must not stop in the area between these sign', 'Drivers must reduce the speed and be prepared to stop'),
(90, 'What does this sign mean', 'The vehicles bearing this sign are government official vehicles', 'The vehicles bearing this sign have the authority to park anywhere', 'The vehicles bearing this sign are slower than usual traffic pace', 'Do not pass the vehicle bearing this sign when flashing', 'Do not pass the vehicle bearing this sign when flashing'),
(91, 'What does this sign mean?', 'Shows the upcoming right turn on freeway', 'Shows the upcoming exits on freeway', 'Shows the upcoming town and cities', 'Shows the upcoming intersection', 'Shows the upcoming exits on freeway'),
(92, 'What does this sign mean?', 'Shows route to nearby hospital', 'Shows accessible parking ahead', 'Shows facilities that are accessible by wheelchair', 'Shows lane specific for ambulance', 'Shows facilities that are accessible by wheelchair'),
(93, 'What does this sign mean?', 'Shows the upcoming intersection with the respective destinations', 'Shows the exits from the freeway', 'Shows the distance in km for the upcoming cities or town', 'Shows the construction zone ahead in the mentioned direction', 'Shows the upcoming intersection with the respective destinations'),
(94, 'What does this sign mean?', 'Shows the exits from the freeway', 'Shows route to the passenger railway station', 'Shows route to the airport', 'Shows traffic control information', 'Shows route to the passenger railway station'),
(95, 'What does this sign mean?', 'There is a Narrow bridge ahead', 'There is an intersection ahead', 'Drivers must turn left ahead', 'Drivers must turn right ahead', 'There is a Narrow bridge ahead'),
(96, 'What does this sign mean?', 'There is Hidden intersection ahead', 'There is a dead-end ahead', 'There is a bridge ahead', 'The pavement narrows ahead', 'The pavement narrows ahead'),
(97, 'What does this sign mean?', 'There is an Upcoming fire truck entrance from the mentioned side of the road', 'There is a parking area for Fire trucks', 'There is a Fire station ahead', 'There is a construction zone ahead', 'There is an Upcoming fire truck entrance from the mentioned side of the road'),
(98, 'What does this sign mean?', 'There is U-turn ahead', 'Roundabout ahead, Drivers must travel in clockwise direction', 'Roundabout ahead, Drivers must travel in counter-clockwise direction', 'There is a Construction zone ahead', 'Roundabout ahead, Drivers must travel in counter-clockwise direction'),
(99, 'What does this sign mean?', 'Animals crossing ahead', 'Wildlife office ahead', 'Animals may present on the road', 'Animals are restricted in this road', 'Animals may present on the road'),
(100, 'What does this sign mean?', 'There is a hidden school bus stop ahead', 'There is a Railway crossing on the road ahead', 'There is an Intersection ahead', 'There is a School zone ahead', 'There is a hidden school bus stop ahead');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'How quickly are you obligated to report an accident to the police?'),
(2, 'Who gets the right-of-way if a traffic signal changes color while a pedestrian is crossing the street?'),
(3, 'Out of the following, which 3 are causes of skids?'),
(4, 'What is indicated by a red signal light with a green arrow at an intersection?'),
(5, 'If damages or injuries exceed ______, you are legally obligated to report a collision to the police.');

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
  `woptcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qid`, `Question`, `opt1`, `opt2`, `opt3`, `opt4`, `woptcode`) VALUES
(1, 'How quickly are you obligated to report an accident to the police?', 'Within 72 hours', 'Within 48 hours', 'Within 24 hours', 'Immediately', 'd'),
(2, 'Who gets the right-of-way if a traffic signal changes color while a pedestrian is crossing the street?', 'The pedestrian', 'Motorists making a turn', 'Motorists coming from his right', 'Motorists coming from his left', 'a'),
(3, 'Out of the following, which 3 are causes of skids?', 'Hard braking', 'Driving too slowly', 'Accelerating too quickly', 'Driving too fast', 'a'),
(4, 'What is indicated by a red signal light with a green arrow at an intersection?', 'Stop and wait for a green signal before making a turn in the direction of the arrow', 'Proceed with caution in the direction of the arrow', 'That pedestrians may cross', 'Stop and then proceed', 'b'),
(5, 'If damages or injuries exceed ______, you are legally obligated to report a collision to the police.', '$5000', '$200', '$2000', '$100', 'c'),
(6, 'Where on a roadway should you be prior to making a left turn if traffic moves in both directions?', 'It does not matter provided you signal', 'Close to the right-hand side of the roadway', 'Close to the left side of the roadway', 'Immediately to the right of the centerline of the roadway', 'd'),
(7, 'What should you do before entering a freeway?', 'Stop on the acceleration lane, wait for an opening, and then enter the freeway rapidly', 'Signal and increase your speed to merge smoothly with traffic', 'Slow down, and then enter freeway at a sharp angle', 'Drive slowly and be prepared to stop for freeway traffic', 'b'),
(8, 'How quickly should you be able to stop in any road conditions?', 'Stop within 150 m', 'Stop within 60 m', 'Stop within a safe distance', 'Stop within 90 m', 'c'),
(9, 'Before entering an intersection, what are you legally obligated to do?', 'Stop, sound horn, then proceed', 'Stop, and when it is safe to do so, proceed', 'Slow down and if way is clear, proceed', 'Slow down, sound horn and proceed', 'b'),
(10, 'What will happen if you are convicted of careless driving?', 'All of these', 'Your license may be suspended for up to two years', 'Six demerit points', 'Can be fined up to $2,000 and sentenced to up to six months in jail', 'a');

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
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(45) NOT NULL,
  `test_mode` varchar(45) NOT NULL,
  `result_result_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test_has_question`
--

CREATE TABLE `test_has_question` (
  `test_test_id` int(11) NOT NULL,
  `question_question_id` int(11) NOT NULL
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
  `image` longblob DEFAULT '\'uploads/login.png\'',
  `userscore` int(11) NOT NULL DEFAULT 0,
  `total_attempt` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `usertype`, `image`, `userscore`, `total_attempt`) VALUES
(16, 'fname1', 'lname1', 'email1@email.com', 'user1', 'user1', '1', 0x75706c6f6164732f70726f66696c652e706e67, 0, 0),
(17, 'fname2', 'lname2', 'email2@email.com', 'user2', 'user2', '0', 0x75706c6f6164732f70726f66696c652e706e67, 0, 0),
(18, 'fname3', 'lname3', 'email3@email.com', 'user3', 'user3', 'user', 0x75706c6f6164732f70726f66696c652e706e67, 0, 0),
(27, 'fname4', 'lname4', 'email4@email.com', 'user4', 'user4', 'user', 0x2775706c6f6164732f6c6f67696e2e706e6727, 0, 0),
(28, 'fname5', 'lname5', 'email5@email.com', 'user5', 'user5', 'user', 0x75706c6f6164732f70726f66696c652e706e67, 0, 0),
(29, 'fname6', 'lname6', 'email6@email.com', 'user6', 'user6', 'user', '', 0, 0),
(30, 'fname7', 'lname7', 'email7@email.com', 'user7', 'user7', 'user', '', 0, 0),
(31, 'fname8', 'lname8', 'email8@email.com', 'user8', 'user8', 'user', 0x75706c6f6164732f70726f66696c652e706e67, 0, 0),
(32, 'fname9', 'lname9', 'email9@email.com', 'user9', 'user9', 'user', 0x2775706c6f6164732f6c6f67696e2e706e6727, 0, 0),
(34, 'fname11', 'lname11', 'email11@email.com', 'user11', 'user11', '0', 0x75706c6f6164732f70726f66696c652e706e67, 0, 0),
(35, 'Barivure', 'Bekee', 'vbekee.bb@gmail.com', 'Vure', 'vure1', '1', 0x75706c6f6164732f75736572332e6a7067, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_test`
--

CREATE TABLE `user_has_test` (
  `user_user_id` int(11) NOT NULL,
  `test_test_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD UNIQUE KEY `question_id_UNIQUE` (`question_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD UNIQUE KEY `result_id_UNIQUE` (`result_id`),
  ADD KEY `fk_result_user1_idx` (`user_user_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD UNIQUE KEY `test_id_UNIQUE` (`test_id`),
  ADD KEY `fk_test_result1_idx` (`result_result_id`);

--
-- Indexes for table `test_has_question`
--
ALTER TABLE `test_has_question`
  ADD PRIMARY KEY (`test_test_id`,`question_question_id`),
  ADD KEY `fk_test_has_question_question1_idx` (`question_question_id`),
  ADD KEY `fk_test_has_question_test1_idx` (`test_test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_has_test`
--
ALTER TABLE `user_has_test`
  ADD PRIMARY KEY (`user_user_id`,`test_test_id`),
  ADD KEY `fk_user_has_test_test1_idx` (`test_test_id`),
  ADD KEY `fk_user_has_test_user_idx` (`user_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fk_result_user1` FOREIGN KEY (`user_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `fk_test_result1` FOREIGN KEY (`result_result_id`) REFERENCES `result` (`result_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `test_has_question`
--
ALTER TABLE `test_has_question`
  ADD CONSTRAINT `fk_test_has_question_question1` FOREIGN KEY (`question_question_id`) REFERENCES `question` (`question_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_test_has_question_test1` FOREIGN KEY (`test_test_id`) REFERENCES `test` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_has_test`
--
ALTER TABLE `user_has_test`
  ADD CONSTRAINT `fk_user_has_test_test1` FOREIGN KEY (`test_test_id`) REFERENCES `test` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_test_user` FOREIGN KEY (`user_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
