-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 03:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `phoneNo` int(8) DEFAULT NULL,
  `username` varchar(8) DEFAULT NULL,
  `hashedPassw` varchar(64) DEFAULT NULL,
  `email` varchar(18) DEFAULT NULL,
  `age` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`phoneNo`, `username`, `hashedPassw`, `email`, `age`) VALUES
(89156711, 'cheildsj', '23ace6b0ae429da9074a4b58dab077f88d4d94129bb06ff6c2660146ec035867', 'cvankeevj@time.com', 39);

-- --------------------------------------------------------

--
-- Table structure for table `bookingdb`
--

CREATE TABLE `bookingdb` (
  `bookingID` int(2) NOT NULL,
  `phoneNo` int(8) DEFAULT NULL,
  `username` varchar(13) DEFAULT NULL,
  `bookingDate` date DEFAULT NULL,
  `movieID` varchar(21) DEFAULT NULL,
  `noOfTickets` int(2) DEFAULT NULL,
  `seats` varchar(38) DEFAULT NULL,
  `adultTicket` int(2) DEFAULT NULL,
  `seniorTicket` int(1) DEFAULT NULL,
  `studentTicket` int(1) DEFAULT NULL,
  `childTicket` int(1) DEFAULT NULL,
  `foodNo` int(2) DEFAULT NULL,
  `totalPrice` int(3) DEFAULT NULL,
  `isClaimed` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bookingdb`
--

INSERT INTO `bookingdb` (`bookingID`, `phoneNo`, `username`, `bookingDate`, `movieID`, `noOfTickets`, `seats`, `adultTicket`, `seniorTicket`, `studentTicket`, `childTicket`, `foodNo`, `totalPrice`, `isClaimed`) VALUES
(1, 88999886, 'acalafato1x', '2023-12-31', 'AWhiskerAway2020', 2, 'J1, J2', 0, 1, 0, 1, 2, 28, 1),
(2, 99814416, 'cwiggington2d', '2023-11-30', 'TheBossBaby2017', 3, 'A5, A6, A7', 1, 1, 0, 1, 1, 32, 1),
(3, 87002613, 'btuer2n', '2023-03-25', 'Slumberland2022', 2, 'C3, C4', 1, 0, 1, 0, 1, 28, 1),
(4, 85560197, 'lraynes27', '2023-03-14', 'WeHaveaGhost2023', 5, 'C1, C2, C3, C4, C5', 2, 1, 1, 1, 5, 84, 1),
(5, 88884822, 'ghewsi', '2023-04-09', 'AWhiskerAway2020', 7, 'B2, B3, B4, B5, B6, B7, B8', 3, 2, 1, 1, 4, 94, 0),
(6, 85279247, 'sbrockbank2c', '2023-05-14', 'Fireworks2017', 9, 'A1, A2, A3, A4, A5, A6, A7, A8, A9', 1, 2, 3, 3, 7, 122, 0),
(7, 81344165, 'dmutimer1n', '2023-01-14', 'Fireworks2017', 10, 'D1, D2, D3, D4, D5, E1, E2, E3, E4, E5', 10, 0, 0, 0, 11, 208, 1),
(8, 86165122, 'jshelley8', '2023-05-25', 'Don\'tWorryDarling2022', 1, 'F9', 1, 0, 0, 0, 1, 20, 0),
(9, 93479986, 'tnerneyp', '2023-04-27', 'RideOn2023', 3, 'G6, G7, G8', 1, 0, 0, 2, 2, 40, 0),
(10, 92056088, 'mreicharzq', '2023-02-18', 'Don\'tWorryDarling2022', 3, 'J5, J6, J7', 1, 1, 0, 1, 3, 48, 1),
(11, 91526557, 'bhorbath2h', '2023-06-22', 'TheDeparted2006', 4, 'C2, C3, C4, D1', 2, 0, 1, 1, 4, 70, 0),
(12, 84468932, 'mniavesz', '2023-02-10', 'TheBossBaby2017', 2, 'B3, B4', 0, 0, 1, 1, 1, 22, 0),
(13, 89477929, 'msearsh', '2023-03-19', 'Fireworks2017', 6, 'F1, F2, F3, F4, F5, F6', 2, 1, 1, 2, 6, 98, 1),
(14, 87338947, 'wworge1g', '2023-06-12', 'TheDeparted2006', 8, 'G1, G2, G3, G4, G5,  J1, J2, J3', 5, 2, 1, 0, 5, 120, 0),
(15, 99684759, 'roliff1c', '2023-01-24', 'TheDeparted2006', 1, 'A1', 0, 0, 1, 0, 0, 8, 1),
(16, 99060729, 'rmaccaghan29', '2023-05-09', 'Slumberland2022', 2, 'D7, E8', 0, 2, 0, 0, 0, 12, 0),
(17, 97933407, 'lvargat', '2023-01-20', 'WeHaveaGhost2023', 4, 'A7, A8, A9, A10', 1, 0, 2, 1, 2, 50, 1),
(18, 92405327, 'jstuckow7', '2023-03-24', 'RideOn2023', 1, 'B4', 0, 1, 0, 0, 1, 14, 0),
(19, 91852754, 'cmelato28', '2023-01-08', 'WeHaveaGhost2023', 5, 'E5, E6, E7, E8, E10', 2, 1, 0, 2, 8, 106, 1),
(20, 87338947, 'wworge1g', '2023-05-31', 'Slumberland2022', 3, 'F8, F9, F10', 1, 1, 1, 0, 3, 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customerdb`
--

CREATE TABLE `customerdb` (
  `phoneNo` int(8) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `hashedPassw` varchar(64) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `genrePref` varchar(11) DEFAULT NULL,
  `loyaltyPts` int(4) DEFAULT NULL,
  `seatPref` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customerdb`
--

INSERT INTO `customerdb` (`phoneNo`, `username`, `hashedPassw`, `email`, `age`, `genrePref`, `loyaltyPts`, `seatPref`) VALUES
(88999886, 'acalafato1x', 'b322959e3d2762be6ad6c87a2ad821dca3424634e9759c8fdd6820db55aea3e8', 'icrocombe1x@alexa.com', 45, 'Documentary', 322, 'back'),
(94253426, 'acrossingham2l', 'f55c46dd66d8937d1c88ea7280561982189041a5b13799ddc26ad5668b9f942d', 'pmcairt2l@jimdo.com', 6, 'Thriller', 513, 'front'),
(90204648, 'agluyus10', '13427f0673a23e09ed410ba8564954738bf90dedd2aeb6127715e8d16f962fc2', 'tgluyus10@mediafire.com', 69, 'Comedy', 981, 'back'),
(82050373, 'agoade', '74ae37f6969e611f9c8c51565adf9af9dc55107bd9a27dd71c64f5ca10dd9eb7', 'bgoade@amazon.de', 67, 'Crime', 302, 'front'),
(81014510, 'ahixson14', '4a04950fc91d3415e33a73a1890f925722c2a3ad7543d7a15094253890d9ff66', 'lgrogono14@histats.com', 82, 'Drama', 922, 'front'),
(80416374, 'amackness1', '41d7c661e791b2ba5a6562c2cf118f72c49474fd3210925e59f16f7c67ca5b0b', 'imackness1@wordpress.org', 5, 'Comedy', 261, 'front'),
(87911756, 'aoscannill26', '1a8cf21b3eeebf14b7e8b92707321c9b68463027d7cd80beffa8d8d5fe2c3b6e', 'vheardman26@mtv.com', 51, 'Comedy', 883, 'front'),
(95658170, 'atansleyc', '99ffe9152aca278e752ff6b26c382954db29b3bdd3d9de5392c467d410fc1a4d', 'kwillattsc@noaa.gov', 22, 'Horror', 474, 'back'),
(97199523, 'awattinham18', '1ee08f02e713ca367a6f903b8cdab03156bea2e067a0ad2799a24c85d1b30cb2', 'dmusprat18@ted.com', 52, 'Drama', 92, 'front'),
(99400509, 'bdambrosio1h', '885f761c25471c838cbfb6c4b894c5b82f0342764b79cc19f018b42cd8ce6b59', 'dpowland1h@artisteer.com', 84, 'Documentary', 903, 'front'),
(93107448, 'bgilchrest1v', 'b4eef0e5d1187dac670165ecc96d8c20f035cdce142ec2448162a9226435a5d9', 'pwark1v@un.org', 56, 'Fantasy', 786, 'front'),
(90384153, 'bhairyes2p', '70867966c198fdf9a0056a40d773eef5e00e8391a2e889b18ade29570b33f5b1', 'mdrysdall2p@abc.net.au', 55, 'Drama', 865, 'back'),
(91526557, 'bhorbath2h', '957fb42e4a6f1577fd281f9833c5f2ca29e5e0db3ed8cb2e6c4068f581125939', 'cnutting2h@cam.ac.uk', 20, 'Drama', 542, 'front'),
(85669927, 'bmathewson1z', '5cdba10fe992a436209c9f9061ebb726ca5c9e1a30056c9810442a34e892e945', 'bjoseph1z@typepad.com', 64, 'Drama', 23, 'front'),
(86368870, 'bminterv', '51117397f910cd78967a3b4917a6c859945a4a7927090dfc051e07e6e360dc02', 'cclissettv@indiegogo.com', 81, 'Documentary', 477, 'back'),
(87002613, 'btuer2n', 'e7f5ea5f0e5efeed2b0db970de51cf25c7da3ace93419fbc622e28e12c7000a9', 'eblackledge2n@imgur.com', 45, 'Comedy', 498, 'back'),
(94502315, 'cheditch2r', 'bc6ad67ce5ea805297269036b4e2712974ef8fda7792c2e8462dbed9eaa9be99', 'cbellfield2r@naver.com', 57, 'Adventure', 153, 'front'),
(85647281, 'chonywilln', '08f5e324454577eac499917b51f59d712fa36f7dd72a415d1d889b6ce36a9b9c', 'hhonywilln@craigslist.org', 7, 'Drama', 228, 'back'),
(93939657, 'ckonneke1b', '2c3ada81138e7375f1d428a7b76684cdb08a0d54714f54370fe94131a9373f33', 'fwaind1b@surveymonkey.com', 75, 'Action', 853, 'front'),
(91852754, 'cmelato28', '3989116a55466cf7f70a2988320b0ac0a9fd87b062d40550cd2abefb504f503b', 'vmelato28@exblog.jp', 93, 'Action', 950, 'back'),
(84121166, 'cskellen1r', 'f3666370d56121eddd75bcb16d9dcca87472303fad09e0d56ae5530b12626b92', 'dridolfo1r@berkeley.edu', 43, 'Fantasy', 269, 'front'),
(99814416, 'cwiggington2d', 'c275fc14754201f5a79df79f50993198585df249dc974c8d23d8f27f45880dfd', 'cbrimacombe2d@dmoz.org', 79, 'Horror', 71, 'back'),
(97716417, 'dcostock21', '5f4d858610119fb4eaa21cd8ca25bdd87ab4af7f4d5d9094050386178244aa14', 'pianitti21@imgur.com', 88, 'Horror', 135, 'back'),
(90738496, 'ddun2b', '5785eea2e1d974cf5edda97c639765a4f978abdd908612bb00ffb96bacc79c0d', 'gfitzsymons2b@dailymotion.com', 79, 'Drama', 669, 'back'),
(81344165, 'dmutimer1n', '0b383978d911293e7e4df98eb8faccc058cb31e580cd06c5fabfcf22b0e26903', 'hoakshott1n@yellowbook.com', 30, 'Animation', 349, 'back'),
(98852597, 'ebozier17', '410036f2c5e84b296ce5b346d6117e7cb8e55ac3217ed95693722d6f3af146d5', 'cspurden17@multiply.com', 49, 'Crime', 396, 'front'),
(84747123, 'edumbleton1t', '163e6c577305b8ee81920ea0ac7d61c9c90b276992ed1dcd7a408cb266f012c5', 'dmcgaughay1t@dion.ne.jp', 7, 'Drama', 174, 'back'),
(82359639, 'ehebblewhite1o', '6fa4372680476864357188c5fdde6c017c2aacc32d8a2b38ea3ec1328f6e5596', 'mcaudrey1o@hibu.com', 74, 'Comedy', 967, 'front'),
(98920585, 'equest0', 'bb738906ef5e1a6fedd13fb64cc7fb835cdb24fb1af9c2ec1ae0c1fb4bd169e5', 'gquest0@spotify.com', 72, 'Adventure', 103, 'back'),
(85258829, 'eshutt2g', 'c2654bcb2599438e754b338ae80eac33fa09390695168d58eb02f00e8f40d9e9', 'dbruyntjes2g@wikispaces.com', 66, 'Drama', 702, 'back '),
(91378635, 'fpulley12', 'fd36a5d1b6b675b057c567a38305521824d4d2c1a3ff7692d052232e43074ffc', 'smacgill12@friendfeed.com', 92, 'Action', 962, 'front'),
(88071606, 'frichfielda', '58e6bea1edf4e0bfdcd7a9d2bad800e44d3c2c0455706c77cbc9899d07d759cc', 'mrichfielda@state.gov', 24, 'Comedy', 257, 'back'),
(96672972, 'ggrcic1m', '828f6fb5fdbc49f464739ef77e72cea62db9f823ce761207923e24b6ee409b1b', 'bpablos1m@apple.com', 14, 'Drama', 763, 'back'),
(88884822, 'ghewsi', '902a25062ef0ffb981d6658300482332ae6cf93841c0ec0807be34b6e0222a68', 'lvlasini@wp.com', 13, 'Action', 204, 'front'),
(97944924, 'gmansker', '6c73197f8238914e8d8e222d8fed922f7125381b0407b0e435b17a641f487743', 'thasseyr@wikipedia.org', 43, 'Documentary', 404, 'back'),
(97767754, 'gtattersill2q', '19b968abdee8453d3112a1fb3721a4c8a76b75199a214f74b3a828709573fe69', 'selland2q@cnn.com', 72, 'Drama', 978, 'back'),
(94748305, 'gyeldham2f', 'f997caec4c12664f6c819368368436794698446451fd76da6c6ed22dfcaa1279', 'sedworthye2f@rakuten.co.jp', 87, 'Comedy', 805, 'back'),
(84771797, 'hdegenhardto', 'f9c74970b1a5359ebee4939fef16a8419606b4d681391a0306d59a09c2d1f9d3', 'sgalbretho@photobucket.com', 15, 'Comedy', 889, 'front'),
(89840627, 'hmanthroppe1s', '98982f05ec6b7bc2e1ed8c0143763ff8a7c276aa76b3112acb25b1156053bc57', 'hcullity1s@exblog.jp', 85, 'Action', 866, 'front'),
(96023727, 'iilyushkin25', '150a77456f3492f0af64708586c9b23a35b9deab580c794b063ca7c95f1ee1d0', 'wrosone25@abc.net.au', 65, 'Action', 324, 'front'),
(80464834, 'jpraundlinb', '00fed42df42984fd89702966f9130e53748bdf7503bc22f753db351e91da3749', 'rfransemaib@bravesites.com', 31, 'Romance', 685, 'front'),
(94112936, 'jreglar1w', '77be63d5d0956ff1df875cd984395bf87c577231f2ae5eb6bc755f7a6f7f0833', 'gglowach1w@indiatimes.com', 51, 'Documentary', 486, 'back'),
(86165122, 'jshelley8', 'beaf9034c4326c7624be2130934dd4688ac0b0715a027141716e149501d2fe2b', 'lcranney8@topsy.com', 32, 'Drama', 794, 'back'),
(92405327, 'jstuckow7', 'ea3ffd932effef7051424840539d9d42c52ca6d8aeef33485c7cec36fdd278de', 'croe7@xinhuanet.com', 83, 'Action', 39, 'back'),
(82019995, 'jwoollacott4', 'c73837a9c3b0b5873a780e6ee456de45181fc8922951a80d582cbce5b7eacd30', 'tiscowitz4@earthlink.net', 85, 'Mystery', 473, 'back'),
(83013644, 'kazam1f', 'a341209f51c08789e6a02aab1940c4844ddaaee6448d08c46075bd0746cd281a', 'enorthidge1f@elegantthemes.com', 28, 'Comedy', 766, 'front'),
(90842892, 'kbagshawe1d', '549e2a0afddbab1e58c7e6ff162a1022da5226b8d8ecf319e4fc642dc415ec5f', 'aklampk1d@foxnews.com', 96, 'Action', 997, 'back'),
(80485058, 'kgaylerf', '10977ccd1cff96b5685a853f0d5879978f4312fac2b04ed37bceeb3ca28bf371', 'dmarinf@miibeian.gov.cn', 32, 'Drama', 473, 'back'),
(95088905, 'kharvett2', '3b5cbde116f5afc328f345ae6fe2db340874bdee5970dea96078f6c94e1ac0fe', 'gelger2@exblog.jp', 67, 'Comedy', 801, 'front'),
(92383241, 'kknighty', 'e0250370d056dfca4f3dd7859b34161e388042d0caa8a1ad00c8f20fe8d09164', 'hgeggy@newsvine.com', 65, 'Action', 908, 'front'),
(92474810, 'kshortelll', '758a6ff1416e9b183530d165fa5d60b21e811d15a11bdf324c2292bb695938a7', 'hdorricottl@admin.ch', 43, 'Drama', 305, 'back'),
(93871563, 'lcapenor1q', 'fb29e968603603d6ed3ca86a9e1465f78eaec042ca61ec448b404883dce0174b', 'bhucker1q@howstuffworks.com', 18, 'Drama', 147, 'back'),
(91353109, 'lgoodridge6', 'a2eac5fddf2154823a326d8a13fbc6976bbb071872fde1f515949176fc2bd5f1', 'dgoodridge6@yahoo.co.jp', 96, 'Crime', 753, 'back'),
(80887249, 'lmillions2i', '267d7a91058aeacff90740b9af8a7c34c48b866dd34a6e41be5ab8c5eef97ab7', 'mgiacopello2i@altervista.org', 50, 'Comedy', 63, 'back'),
(85560197, 'lraynes27', 'a93d9be0c040ef70f8acdab1cea47f1d639723ca3ab9a269c008f6db6aeb6364', 'mrainforth27@admin.ch', 38, 'Comedy', 228, 'front'),
(97933407, 'lvargat', '477eb9a80390995aeb453110a7f4a191020973f071f015e43526cc451d37ab37', 'kbedburyt@tinyurl.com', 44, 'Comedy', 646, 'back'),
(85324809, 'mmcarleyw', '62b1b1f6f5fadb09d5a1862f23d7024a2307a5b67776639359bb8ff9f6d06edf', 'sgarteryw@si.edu', 96, 'Animation', 309, 'back'),
(84468932, 'mniavesz', '064af03a4da213ff4debd8c3e34cce46387e38f26c44d52d16e1f19359f9cb3e', 'mniavesz@eventbrite.com', 12, 'Crime', 912, 'front'),
(92056088, 'mreicharzq', 'a4fbb1ac3634d5679bff78234110609cf02055caeb7b054acb7a0565d8a5148a', 'ebradderq@bizjournals.com', 31, 'Action', 1, 'front'),
(89477929, 'msearsh', '01712a061a05d9d8074a181ee36ad5804264de8f381356354008eca85607e60f', 'ubrameldh@example.com', 17, 'Documentary', 36, 'front'),
(81325583, 'mtomasutti19', 'b2a087a9ef680b1d55f0f791a0db42a3f8312163fb3d7743c5526e7a977157a7', 'dmurby19@chronoengine.com', 88, 'Documentary', 264, 'front'),
(94685864, 'nbearns2e', '78d99c68e0dbf0238968e96e115ab4a1ab52874dd7988c6373cfc7a9ac2b4f13', 'mlangham2e@1und1.de', 24, 'Adventure', 502, 'front'),
(86719492, 'ncromleholme24', '6fdbd815e0b5078f2b10615f1a21f15e808bc42e78da490902534839f99a1273', 'clinklet24@gizmodo.com', 51, 'Action', 379, 'back'),
(94286828, 'ndiegan1p', '8940771fbac0b7152f11f0bf0c7d0176f59d5c74f7ae0107b4d13c4176ba1abe', 'cferenczy1p@goo.ne.jp', 32, 'Drama', 368, 'back'),
(91714545, 'oallaway1k', '297604f004b5cfbbf0fb0ad34b372a74b3a4e10f405a3ba3ee58054b0deaac0f', 'opierrepoint1k@soundcloud.com', 88, 'Crime', 402, 'back'),
(96218194, 'opressliek', '46595b4bfa212dd545def819f7226aebdc04493b82dbe3fd8de47b0abb7e976e', 'tleggisk@earthlink.net', 68, 'Romance', 419, 'front'),
(87824189, 'pbulch3', 'd4aa87c465f6cb98c1469c41d7d8506c5241d0ca28cdc7ec961276c3ec8e112f', 'vduke3@yellowbook.com', 85, 'Horror', 258, 'front'),
(95763718, 'rclowton1i', '467b3daa5c199e8aef362d884450561511a0c8d5f83d653128c0cb64d7a5b55a', 'kburchell1i@amazonaws.com', 63, 'Comedy', 174, 'back'),
(87540236, 'rlanawaym', 'e87067edbb4219345c29a921827c8cf4496980c6689e6b859147e2760a47c3f2', 'mlanawaym@phpbb.com', 88, 'Drama', 310, 'front'),
(99060729, 'rmaccaghan29', '3a6346a65df6fc39ef156bfdf24134412ae1f184d4bb8d9c7b69e7d64b0a9a95', 'cminett29@woothemes.com', 95, 'Drama', 441, 'front'),
(95769665, 'rmcclaughlin1j', '632145d2df2ea5ca0cc7a006e1e41a99f25fc35f48b9a5aa962efc55dca74e40', 'cfrancesconi1j@youtu.be', 71, 'Crime', 390, 'front'),
(99684759, 'roliff1c', '3d2da16f55d6400fbe4b16a5f2f54a92ca7297b9dfa06c85529b822e37bb0640', 'roliff1c@booking.com', 20, 'Drama', 159, 'back'),
(83918828, 'rschulkins23', '41514b39f06c10efe2dcf711bf4708d7849e9826975ae4910656b5e13d2ae914', 'mlongstaffe23@oakley.com', 53, 'Action', 530, 'front'),
(85279247, 'sbrockbank2c', '26fd56d7c1f7f369a60c84c783fa9559bd2b20078b93e848554c1955c255ae3a', 'lfer2c@go.com', 20, 'Thriller', 375, 'back'),
(93426503, 'sbrownlow1l', '4bd38c844d3eaf6766a45c547da7a23c2b5dee17861c32ea90857c529ef65554', 'cvanthoff1l@ted.com', 83, 'Romance', 919, 'front'),
(89123634, 'sgrandhamd', '23a96237bd01ff933ce3a3881041633f7d842150eeee075f5978099e4836284a', 'gbichenod@washingtonpost.com', 49, 'Drama', 570, 'back'),
(86661196, 'sjiggen13', '6cb02b973a188e5501983b150583efc51475d5c33a7d688105f2bdede150b9bd', 'jwealthall13@sourceforge.net', 28, 'Action', 367, 'back'),
(98934206, 'solijve16', '481db33b8ff9ee6519aa6d31dde284484ec74859ac6f47762e5bbbac63ec703c', 'kdecarolis16@prweb.com', 85, 'Drama', 860, 'back'),
(89371231, 'spolin20', '62112c7e4051d05797c7849444c964b67bc9c050c587b6c18203150dc6938a19', 'spolin20@taobao.com', 23, 'Action', 705, 'front'),
(81462676, 'sscates11', '9a6ee6601280ca67b4d8761423cbc27052e6ba03a530a24c1af77c994456c6b3', 'bgresch11@census.gov', 30, 'Animation', 252, 'back'),
(89239268, 'ssydallx', 'c338f8ee6c3335ebbfb909b004643820b2684dda0cc4a1efdbfec9271b1e3b09', 'fmacdwyerx@bizjournals.com', 59, 'Comedy', 558, 'front'),
(86835431, 'tdahls', '0fbddca10288ddd4002b5c501faacc236fb0125b28166e0f9f4c12c45c520039', 'epickrills@unicef.org', 95, 'Crime', 619, 'back'),
(98797669, 'tducrow5', 'cbc5ee0c0eb7b972052f62e291da5602955b3a630c0ca1b3ef5b6679c470a567', 'dducrow5@t.co', 12, 'Documentary', 972, 'front'),
(93479986, 'tnerneyp', '078fe7306508e2c637c5e5c355e4ff2fdb9596ec9d06111c9500d379648d24f2', 'bperillop@quantcast.com', 32, 'Drama', 776, 'back'),
(97792623, 'vfrancescocciou', 'f1cc9a1e9eca1746983925fa5b5f6e03c830a1e44d1b31c303715adde751ef36', 'omosebyu@51.la', 81, 'Action', 220, 'front'),
(87624927, 'vqueen1a', 'b9095a95caf033988d58d05c2c55e33977aee387912423230b010a360f686fc6', 'mnewbury1a@admin.ch', 57, 'Comedy', 1000, 'back'),
(87338947, 'wworge1g', 'a3d318738a59b02e19761cd9faacd07ac97295be53e57c0e55a05186af0f1fb2', 'calliband1g@goo.ne.jp', 20, 'Crime', 443, 'back');

-- --------------------------------------------------------

--
-- Table structure for table `fooddb`
--

CREATE TABLE `fooddb` (
  `foodName` varchar(14) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `foodPicName` varchar(17) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `username` varchar(13) DEFAULT NULL,
  `dateLastModified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `fooddb`
--

INSERT INTO `fooddb` (`foodName`, `quantity`, `foodPicName`, `status`, `username`, `dateLastModified`) VALUES
('Popcorn Combo', 1000, 'PopcornCombo.jpg', 1, 'cflewittg', '2023-05-17'),
('Fries Combo', 1000, 'FriesCombo.jpg', 0, 'ndavidowsky2o', '2023-05-17'),
('Meatball Combo', 700, 'MeatballCombo.jpg', 0, 'ndavidowsky2o', '2023-05-17'),
('Burger Combo', 1000, 'BurgerCombo.jpg', 1, 'cflewittg', '2023-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `managerdb`
--

CREATE TABLE `managerdb` (
  `phoneNo` int(8) DEFAULT NULL,
  `username` varchar(13) DEFAULT NULL,
  `hashedPassw` varchar(64) DEFAULT NULL,
  `email` varchar(22) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `aUsername` varchar(8) DEFAULT NULL,
  `dateLastModified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `managerdb`
--

INSERT INTO `managerdb` (`phoneNo`, `username`, `hashedPassw`, `email`, `age`, `aUsername`, `dateLastModified`) VALUES
(88100004, 'cflewittg', 'fe250ff67a6e5e78ee041162111f45900c131f26aa6901107e766e8fc79391ba', 'cwedgeg@guardian.co.uk', 31, 'cheildsj', '2023-02-22'),
(94940982, 'ndavidowsky2o', '495c72026c94b6269a2fd23b124f8cb28792105e932e9ec52874f64b080e1f11', 'rsanchis2o@latimes.com', 63, 'cheildsj', '2022-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `moviedb`
--

CREATE TABLE `moviedb` (
  `movieID` varchar(43) DEFAULT NULL,
  `movieTitle` varchar(47) DEFAULT NULL,
  `genres` varchar(11) DEFAULT NULL,
  `directorName` varchar(21) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `duration` int(3) DEFAULT NULL,
  `actor_1_name` varchar(21) DEFAULT NULL,
  `actor_2_name` varchar(21) DEFAULT NULL,
  `actor_3_name` varchar(22) DEFAULT NULL,
  `country` varchar(14) DEFAULT NULL,
  `classificationRating` varchar(5) DEFAULT NULL,
  `yearReleased` int(4) DEFAULT NULL,
  `rantings` decimal(3,1) DEFAULT NULL,
  `trailerLink` varchar(48) DEFAULT NULL,
  `moviePicName` varchar(47) DEFAULT NULL,
  `availability` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `moviedb`
--

INSERT INTO `moviedb` (`movieID`, `movieTitle`, `genres`, `directorName`, `description`, `duration`, `actor_1_name`, `actor_2_name`, `actor_3_name`, `country`, `classificationRating`, `yearReleased`, `rantings`, `trailerLink`, `moviePicName`, `availability`) VALUES
('AWhiskerAway2020', 'A Whisker Away', 'Fantasy', 'Junichi Sato', 'Miyo Sasaki is in love with her classmate Kento Hinode and tries repeatedly to get Kento\'s attention by transforming into a cat, but at some point, the boundary between herself and the cat becomes ambiguous.', 104, 'Mirai Shida', 'Natsuki Hanae', 'Hiroaki Ogi', 'Japan', 'PG', 2020, '6.7', 'https://www.youtube.com/watch?v=aXc9DVfLTGo', 'AWhiskerAway2020.png', 0),
('Air2023', 'Air', 'Drama', 'Ben Affleck', 'Follows the history of shoe salesman Sonny Vaccaro, and how he led Nike in its pursuit of the greatest athlete in the history of basketball, Michael Jordan.', 112, 'Matt Damon', 'Jason Bateman', 'Ben Affleck', 'USA', 'NC-16', 2023, '7.8', 'https://www.youtube.com/watch?v=Euy4Yu6B3nU', 'Air2023.png', 0),
('Belle2021', 'Belle', 'Animation', 'Mamoru Hosoda', 'Suzu is a shy high school student living in a rural village. For years, she has only been a shadow of herself. But when she enters \"U\", a massive virtual world, she escapes into her online persona as Belle, a globally-beloved singer.', 121, 'Kaho Nakamura', 'Ryō Narita', 'Shōta Sometani', 'Japan', 'PG', 2021, '7.1', 'https://www.youtube.com/watch?v=izIycj3j4Ow', 'Belle2021.png', 1),
('BorntoFly2023', 'Born to Fly', 'Adventure', 'Liu Xiaoshi', 'The story of a special operations team headed by elite pilots , being ordered to test new fighter jets. Test flight after test flight, they continue to challenge the sky and the limits of themselves.', 120, 'Wang Yibo', 'Hu Jun', 'Zhou Dongyu', 'China', 'PG-13', 2023, '7.5', 'https://www.youtube.com/watch?v=3pt3cpD8Pao', 'BorntoFly2023.png', 0),
('Bubble2022', 'Bubble', 'Animation', 'Tetsurō Araki', 'Gravity-defying bubbles rain down, cutting off Tokyo from the rest of the world. The city skyline becomes a playground for young people competing in parkour team battles. Hibiki plummets into the sea but is saved by a girl with mysterious powers.', 100, 'Jun Shison', 'Alice Hirose', 'Mamoru Miyano', 'Japan', 'R-21', 2022, '6.3', 'https://www.youtube.com/watch?v=8pbWblLkHHk', 'Bubble2022.png', 1),
('DarkPhoenix2019', 'Dark Phoenix', 'Adventure', 'Simon Kinberg', 'After a mishap, Jean Grey is struck by a powerful ray of energy which she absorbs into her body, turning her into an uncontrollable liability for the X-Men.', 116, 'James McAvoy', 'Michael Fassbender', 'Jennifer Lawrence', 'USA', 'PG-13', 2019, '5.7', 'https://www.youtube.com/watch?v=1-q8C_c-nlM', 'DarkPhoenix2019.png', 0),
('DawnofthePlanetoftheApes2014', 'Dawn of the Planet of the Apes', 'Action', 'Matt Reeves', 'Caesar, a chimpanzee and leader of the evolved apes, allows a human family into his territory. However, due to a vindictive bonobo, misunderstandings arise between the two species, resulting in war.', 130, 'Andy Serkis', 'Jason Clarke', 'Gary Oldman', 'USA', 'PG-13', 2014, '7.4', 'https://www.youtube.com/watch?v=DpSaTrW4leg', 'DawnofthePlanetoftheApes2014.png', 0),
('DeepSea2023', 'Deep Sea', 'Fantasy', 'Tian Xiaopeng', 'A girl strays into the dreamy deep sea world. In the deepest part of the sea, all secrets are hidden.A girl strays into the dreamy deep sea world.', 112, 'Su Xin', 'Ji Jing', 'Wang Tingwen', 'China', 'PG', 2023, '7.1', 'https://www.youtube.com/watch?v=d4KTh-2K38c', 'DeepSea2023.png', 1),
('Don\'tWorryDarling2022', 'Don\'t Worry Darling', 'Drama', 'Olivia Wilde', 'In the 1950s, Alice and Jack live in the idealized community of Victory, an experimental company town that houses the men who work on a top-secret project. While the husbands toil away, the wives get to enjoy the beauty, luxury and debauchery of their seemingly perfect paradise. However, when cracks in her idyllic life begin to appear, exposing flashes of something sinister lurking below the surface, Alice can\'t help but question exactly what she\'s doing in Victory.', 123, 'Florence Pugh', 'Harry Styles', 'Chris Pine', 'USA', 'M-18', 2022, '6.2', 'https://www.youtube.com/watch?v=SZ2elR3OmWI', 'Don\'tWorryDarling2022.png', 0),
('DriftingHome2022', 'Drifting Home', 'Fantasy', 'Hiroyasu Ishida', 'During summer break, sixth graders Kosuke and Natsume play in an apartment building set to be demolished. They find themselves caught up in a strange phenomenon. All they can see around them is a vast sea.', 119, 'Mutsumi Tamura', 'Asami Seto', 'Ayumu Murase', 'Japan', 'PG', 2022, '6.2', 'https://www.youtube.com/watch?v=BSE2KGU5png&t=2s', 'DriftingHome2022.png', 0),
('Dumb&DumberTo2014', 'Dumb & Dumber To', 'Comedy', 'Peter Farrelly', 'Long-time friends and colossal fools Harry and Lloyd embark on a journey to find Harry\'s newly-discovered daughter and convince her to donate a kidney to Harry, whose health is deteriorating.', 109, 'Jim Carrey', 'Jeff Daniels', 'Rob Riggle', 'USA', 'PG-13', 2014, '5.6', 'https://www.youtube.com/watch?v=mq1rt4iKuYg', 'Dumb&DumberTo2014.png', 0),
('Dune2021', 'Dune', 'Action', 'Denis Villeneuve', 'A noble family becomes embroiled in a war for control over the galaxy\'s most valuable asset while its heir becomes troubled by visions of a dark future.', 155, 'Timothee Chalamet', 'Rebecca Ferguson', 'Zendaya', 'USA', 'PG-13', 2021, '8.0', 'https://www.youtube.com/watch?v=n9xhJrPXop4', 'Dune2021.png', 0),
('EdenLodge2015', 'Eden Lodge', 'Horror', 'Andreas Prodromou', 'A young family are stranded at the Eden Lodge. The people they meet are being killed one by one. They must fight to save their marriage, their family, and most of all their lives.', 80, 'Aggy K. Adams.', 'Georgina Blackledge', 'Cyd Casados', 'United Kingdom', 'R-21', 2015, '3.4', 'https://www.youtube.com/watch?v=yWZg3y94F3E', 'EdenLodge2015.png', 0),
('EDtv1999', 'EDtv', 'Comedy', 'Ron Howard', 'Ed, a video store clerk, is invited for a television show that showcases the life of normal people and his life changes when Cynthia, the show\'s producer, decides to film the entire show on his life.', 124, 'Matthew McConaughey', 'Woody Harrelson', 'Jenna Elfman', 'USA', 'PG-13', 1999, '5.7', 'https://www.youtube.com/watch?v=V5ZJtWn8zBY', 'EDtv1999.png', 0),
('Elvis2022', 'Elvis', 'Musical', 'Baz Luhrmann', 'Whilst on a mission to transform the mainstream rock and roll culture of the USA, singer Elvis Presley uses his fame to highlight racism within the country.', 159, 'Austin Butler', 'Tom Hanks', 'Olivia DeJonge', 'Australia', 'PG-13', 2022, '7.3', 'https://www.youtube.com/watch?v=KIsojttVj4o', 'Elvis2022.png', 0),
('EndlessLove2014', 'Endless Love', 'Romance', 'Shana Feste', 'Jade Butterfield is a reclusive young girl who does not socialise much. However, a chance meeting with a former classmate, David, sparks an intimate relationship that alters the course of her life.', 105, 'Alex Pettyfer', 'Gabriella Wilde', 'Bruce Greenwood', 'USA', 'PG-13', 2014, '6.3', 'https://www.youtube.com/watch?v=NTAzn4W48gc', 'EndlessLove2014.png', 0),
('EscapePlan2013', 'Escape Plan', 'Action', 'Mikael Håfström', 'Ray, an expert in security systems, is framed for a crime and sent to a high-tech prison. However, he uses all his knowledge and special skills with a little inside help to escape the facility.', 115, 'Sylvester Stallone', 'Arnold Schwarzenegger', 'Jim Caviezel', 'USA', 'NC-16', 2013, '6.7', 'https://www.youtube.com/watch?v=CI4EjV_x_PQ', 'EscapePlan2013.png', 0),
('Fireworks2017', 'Fireworks', 'Romance', 'Nobuyuki Takeuchi', 'Norimichi and Yusuke are both infatuated with their classmate Nazuna. But when Nazuna decides to run away from home, it\'s Norimichi she asks to join her. After their plans go awry, Norimichi discovers a magical ball that has the power to manipulate time and give them a second chance, but each reset brings new complications.', 90, 'Suzu Hirose', 'Masaki Suda', 'Mamoru Miyano', 'Japan', 'PG', 2017, '5.5', 'https://www.youtube.com/watch?v=KG770hOuT2k', 'Fireworks2017.png', 0),
('Frailty2001', 'Frailty', 'Thriller', 'Bill Paxton', 'One day, a widowed blue-collar worker has a revelation: he must destroy those revealed to him as demons. He then begins the serial killings of `God\'s Hand Killer\' across Texas, but he also has two young sons, the younger of whom idolises him and believes in the cause, while his older brother is revolted but cannot bring himself to stop his father. Twenty years later, the elder son walks into a police station and confesses.', 99, 'Bill Paxton', 'Matthew', 'Powers Boothe', 'USA', 'NC-16', 2001, '7.2', 'https://www.youtube.com/watch?v=mW6TlPMHXgk', 'Frailty2001.png', 0),
('FullRiverRed2023', 'Full River Red', 'Comedy', 'Yi-Mou Zhang', 'In 12th-century China, an ambassador is killed and a letter meant for the emperor is stolen. As the search for the letter unfolds, alliances are formed, secrets are revealed, and no one can stop the truth that\'s destined to leave its mark on history.', 157, 'Shen Teng', 'Jackson Yee', 'Lei Jiayin', 'China', 'NC-16', 2023, '6.6', 'https://www.youtube.com/watch?v=Ju3iH89GeUI', 'FullRiverRed2023.png', 0),
('GetShorty1995', 'Get Shorty', 'Crime', 'Barry Sonnenfeld', 'Gangster Chili Palmer travels to Los Angeles and takes on a job offered to him by a movie producer to collect debts. Soon he finds out that his current job is not less than mobbing people.', 105, 'John Travolta', 'Gene Hackman', 'Rene Russo', 'USA', 'PG-13', 1995, '7.1', 'https://www.youtube.com/watch?v=yNLaTtpovys', 'GetShorty1995.png', 0),
('GlassOnion2022', 'Glass Onion', 'Crime', 'Rian Johnson', 'Tech billionaire Miles Bron invites his friends for a getaway on his private Greek island. When someone turns up dead, Detective Benoit Blanc is put on the case.', 139, 'Daniel Craig', 'Edward Norton', 'Kate Hudson', 'USA', 'PG-13', 2022, '7.2', 'https://www.youtube.com/watch?v=gj5ibYSz8C0', 'GlassOnion2022.png', 0),
('GosfordPark2002', 'Gosford Park', 'Mystery', 'Robert Altman', 'Sir William McCordle and his family plan a shooting party over a weekend. Their family secrets, lies and deceptions come tumbling out when Sir William gets murdered.', 137, 'Eileen Atkins', 'Bob Balaban', 'Alan Bates', 'United Kingdom', 'PG-13', 2002, '7.2', 'https://www.youtube.com/watch?v=nqXMOuxstdI', 'GosfordPark2002.png', 0),
('HerBlueSky2019', 'Her Blue Sky', 'Animation', 'Tatsuyuki Nagai', 'When their parents died, Akane remained in her hometown to take care of her little sister, Aoi. Years later, Akane\'s ex-boyfriend, Shinnosuke, returns to town to perform at a music festival. At the same time as the re-encounter between the two former lovers, Aoi meets Shinnosuke\'s teenage self, who has traveled through time, and she falls head over heels for him. The team from the moving The Anthem of the Heart returns with a surprising story full of romance and youthful longings.', 106, 'Shion Wakayama', 'Riho Yoshioka', 'Ryo Yoshizawa', 'Japan', 'PG', 2019, '7.5', 'https://www.youtube.com/watch?v=YGzSrGnIm5M', 'HerBlueSky2019.png', 0),
('Highway2014', 'Highway', 'Romance', 'Imtiaz Ali', 'Veera, a young bride-to-be, is abducted by a local gangster, Mahabir, and his men a day prior to her wedding. Far from being terrified of her abductor, Veera discovers a new meaning to her life.', 133, 'Alia Bhatt', 'Randeep Hooda', 'Durgesh Kumar', 'India', 'PG-13', 2014, '7.6', 'https://www.youtube.com/watch?v=LSrDD52bx4A', 'Highway2014.png', 0),
('IdleHands1999', 'Idle Hands', 'Horror', 'Rodman Flender', 'A teenaged slacker finds his parents turned into headless Halloween decorations and realises that his right hand has a blood-thirsty mind of its own that wreaks havoc.', 92, 'Devin Sawa', 'Seth', 'Elden Henson', 'USA', 'PG-13', 1999, '6.2', 'https://www.youtube.com/watch?v=HcVrp--9UUc', 'IdleHands1999.png', 0),
('Inkheart2008', 'Inkheart', 'Fantasy', 'Iain Softley', 'Mo, who can bring book characters to life, accidentally sets free the evil Capricorn. Ten years later, his daughter Meggie, her aunt and the book\'s hero set out to help her father trap the villain.', 106, 'Brendan Fraser', 'Paul Bettany', 'Helen Mirren', 'United Kingdom', 'PG', 2008, '6.1', 'https://www.youtube.com/watch?v=7UvKccFUC2I', 'Inkheart2008.png', 0),
('Kite2014', 'Kite', 'Thriller', 'Ralph Ziman', 'When her parents are brutally murdered by unknown assailants, Sawa, a young girl, teams up with her father\'s ex-partner and scours the nefarious human trafficking world to find the murderers.', 90, 'India Eisley', 'Callan McAuliffe', 'Samual L. Jackson', 'South Africa', 'R-21', 2014, '4.4', 'https://www.youtube.com/watch?v=l0l7uphJ-Wg', 'Kite2014.png', 0),
('KungFuYoga2017', 'Kung Fu Yoga', 'Action', 'Stanley Tong', 'When Jack, an archaeology professor, teams up with an Indian professor to discover India\'s lost treasure, they are ambushed. Jack uses his kung fu knowledge to flee and locate the treasure.', 108, 'Jackie Chan', 'Lay Zhang', 'Aarif Rahman', 'China', 'PG-13', 2017, '7.1', 'https://www.youtube.com/watch?v=DkPluechlNY', 'KungFuYoga2017.png', 0),
('LegendsofOz:Dorothy\'sReturn2014', 'Legends of Oz: Dorothy\'s Return', 'Adventure', 'Will Finn', 'Legends of Oz: Dorothy\'s Return is a 2013 computer-animated musical fantasy film that is loosely based on the 1989 book Dorothy of Oz by L. Frank Baum\'s great-grandson Roger Stanton Baum. ', 88, 'Lea Michele', 'Patrick Stewart', 'Jim Belushi', 'USA', 'PG', 2014, '5.0', 'https://www.youtube.com/watch?v=HN7xNSNsWGA', 'LegendsofOz-Dorothy\'sReturn2014.png', 0),
('LetterstoGod2010', 'Letters to God', 'Drama', 'David Nixon', 'A young boy who has cancer decides to write letters to God to help him through the situation. A postman picks up the first letter and is clueless about what to do with it.', 110, 'Robyn Lively', 'Jeffrey S.S. Johnson', 'Maree Cheatham', 'USA', 'PG-13', 2010, '6.1', 'https://www.youtube.com/watch?v=RlKf6eL4RSg', 'LetterstoGod2010.png', 0),
('LightfromtheDarkroom2014', 'Light from the Darkroom', 'Action', 'Lance McDaniel', 'Light in the Darkroom is the story of two best friends whose faith is tested when their friends disappear during a religious pilgrimage.', 110, 'Lymari Nadal', 'Patricia De Leon', 'Steven Michael Quezada', 'USA', 'PG-13', 2014, '6.8', 'https://www.youtube.com/watch?v=kcMcY2tRXas', 'LightfromtheDarkroom2014.png', 0),
('LordsofLondon2014', 'Lords of London', 'Mystery', 'Antonio Simoncini', 'Tony Lord, a gangster, is transported back to his childhood days where he is forced to confront his father\'s misdeeds in order to make his own life free of crime and abuse.', 90, 'Glen Murphy', 'Ray Winstone', 'Serena Iansiti', 'USA', 'PG-13', 2014, '3.2', 'https://www.youtube.com/watch?v=W8U2pP7c-Cg', 'LordsofLondon2014.png', 0),
('LosmenMelati2023', 'Losmen Melati', 'Horror', 'Billy Christian', 'Travelers looking for lodging. They then found the Melati Inn and became guests there. Until one day they realized that if they were in there, they would never get out again.', 98, 'Alexandra Gottardo', ' Kiki Narendra', 'Fandy Christian', 'Indonesia', 'NC-16', 2023, '7.9', 'https://www.youtube.com/watch?v=nkdrMavzKaM', 'LosmenMelati2023.png', 0),
('Lupinthe3rdvs.Cat\'sEye2023', 'Lupin the 3rd vs. Cat\'s Eye', 'Animation', 'Yuji Ohno', 'The Cat\'s Eye sisters are again aiming to steal the three paintings that once belonged to their father. Only this time, Lupin III is also after the same trio of paintings. The paintings in question will also reveal a long-buried mystery.', 92, 'Kan\'ichi Kurita', 'Keiko Toda', 'Akio Ôtsuka', 'Japan', 'PG-13', 2023, '6.1', 'https://www.youtube.com/watch?v=1IioBvbiarE', 'Lupinthe3rdvs.Cat\'sEye2023.png', 0),
('Maggie2015', 'Maggie', 'Horror', 'Henry Hobson', 'A man takes extreme steps to protect Maggie, his daughter, who is slowly turning into a cannibal after a zombie attack. He spends time with her, reminiscing about her childhood, dreading the future.', 95, 'Arnold Schwarzenegger', 'Abigail Breslin', 'Joely Richardson', 'USA', 'PG-13', 2015, '5.6', 'https://www.youtube.com/watch?v=AQ5Vz8qE8R8', 'Maggie2015.png', 0),
('MasterandCommander:TheFarSideoftheWorld2003', 'Master and Commander: The Far Side of the World', 'Adventure', 'Peter Weir', 'Captain Jack Aubrey orders his team to set out in search of a French war vessel. However, when his own ship is heavily damaged, he realises the task is not as easy as it seems.', 138, 'Russell Crowe', 'Paul Bettany', 'Max Pirkis', 'USA', 'PG', 2003, '7.4', 'https://www.youtube.com/watch?v=tHTHCNYiiHk', 'MasterandCommander-TheFarSideoftheWorld2003.png', 0),
('Mirai2018', 'Mirai', 'Adventure', 'Mamoru Hosoda', 'A young boy named Kun feels forgotten by his family when his little sister Mirai arrives. Running away from home, Kun stumbles upon a magical garden that serves as a time-travelling gateway where he encounters his mother as a little girl and has a series of adventures with his baby sister, who is all grown up, opening a new perspective on his world.', 98, 'Moka Kamishiraishi', 'Haru Kuroki', 'Gen Hoshino', 'Japan', 'PG', 2018, '7.0', 'https://www.youtube.com/watch?v=6d-lsJZgmJs', 'Mirai2018.png', 0),
('MissPotter2006', 'Miss Potter', 'Romance', 'Chris Noonan', 'Beatrix Potter writes stories since she was a child but never got any recognition. Her life changes when a publisher decides to compile and publish her stories.', 92, 'Renée Zellweger', 'Ewan McGregor', 'Emily Watson', 'United Kingdom', 'PG-13', 2006, '7.0', 'https://www.youtube.com/watch?v=BMDDdMprkY4', 'MissPotter2006.png', 0),
('Mission:Impossible-RogueNation2015', 'Mission: Impossible - Rogue Nation', 'Action', 'Christopher McQuarrie', 'With the IMF disbanded and the CIA hunting him, Ethan and his team race against time to prove the existence of the Syndicate, a highly-skilled terror organisation, before they plan their next attack.', 132, 'Tom Cruise', 'Rebecca Ferguson', 'Simon Pegg', 'USA', 'PG-13', 2015, '7.4', 'https://www.youtube.com/watch?v=pXwaKB7YOjw', 'Mission-Impossible-RogueNation2015.png', 0),
('Moonman2022', 'Moon man', 'Sci-Fi', 'Chiyu Zhang', 'After being left unexpectedly on the moon, an asteroid destroys the earth, leaving Duguyue being the last person in existence.', 122, 'Shen Teng', 'Ma Li', 'Chang Yuan', 'China', 'PG-13', 2022, '8.2', 'https://www.youtube.com/watch?v=254pTHplAa0', 'Moonman2022.png', 0),
('MozartfromSpace2022', 'Mozart from Space', 'Fantasy', 'Chen Sicheng', 'A young boy takes a keen interest in astronomy, but his father wants him to play piano. One day, a mysterious alien arrives and helps the boy overcome his differences with his father.', 136, 'Huang Bo', 'Rong Zishan', 'Fan Tiantian', 'China', 'PG-13', 2022, '7.8', 'https://www.youtube.com/watch?v=nl4Pxrqyw7U', 'MozartfromSpace2022.png', 0),
('Mr.Peabody&Sherman2014', 'Mr. Peabody & Sherman', 'Adventure', 'Rob Minkoff', 'A talking dog, Mr Peabody, embarks on a life dedicated to science, technology and athletics after being rejected by a potential owner. He adopts a son, Sherman.', 92, 'Max Charles', 'Ty Burrell', 'Ariel Winter', 'USA', 'PG', 2014, '6.8', 'https://www.youtube.com/watch?v=hy6oD7BZw50', 'Mr.Peabody&Sherman2014.png', 0),
('N-Secure2010', 'N-Secure', 'Drama', 'David M. Matthews', 'This film sheds light on a man\'s downfall from the pinnacles of success into the depths of his damaged character. His insecurities lead him into a series of troubled romantic relationships and eventually a web of events that include betrayal and murder.', 116, 'Essence Atkins', 'Cordel Moore', 'Denise Boutte', 'USA', 'PG-13', 2010, '3.7', 'https://www.youtube.com/watch?v=6wJrbsC8IgQ', 'N-Secure2010.png', 0),
('Neal\'N\'Nikki2005', 'Neal \'N\' Nikki', 'Comedy', 'Arjun Sablok', 'During a 21-day bachelor trip before his wedding, Neal falls in love with Nikki, a woman he slept with. Things get further complicated when Nikki turns out to be his fiancee\'s cousin.', 124, 'Uday Chopra', 'Tanishaa Mukerji', 'Richa Pallod', 'India', 'R-21', 2005, '3.3', 'https://www.youtube.com/watch?v=6gp7MfbCTDU', 'Neal\'N\'Nikki2005.png', 0),
('Pearl2022', 'Pearl', 'Horror', 'Ti West', 'Trapped on her family\'s isolated farm, Pearl must tend to her ailing father under the bitter and overbearing watch of her devout mother. Lusting for a glamorous life like she\'s seen in the movies, Pearl finds her ambitions, temptations, and repressions all colliding in this origin story of X\'s iconic villain.', 103, 'Mia Goth', 'David Corenswet', 'Tandi Wright', 'USA', 'R-21', 2022, '7.0', 'https://www.youtube.com/watch?v=L5PW5r3pEOg', 'Pearl2022.png', 0),
('PoundofFlesh2015', 'Pound of Flesh', 'Action', 'Ernie Barbarash', 'A former black-ops agent (Jean-Claude Van Damme) begins a blood-soaked quest to find the organ thieves who stole his kidney before he could donate it to his dying niece.', 104, 'Jean-Claude Van Damme', 'John Ralson', 'Charlotte Peters', 'Canada', 'NC-16', 2015, '5.1', 'https://www.youtube.com/watch?v=RpTrypbMr-Q', 'PoundofFlesh2015.png', 0),
('RebaMcEntire\'sTheHammer2023', 'Reba McEntire\'s The Hammer', 'Crime', 'Jeff Beesley', 'Kim Wheeler, an attorney who is appointed as a judge for Nevada\'s 5th district after the former judge\'s death. As the investigation into the death intensifies, Kim\'s sister, who runs the local brothel, becomes the prime suspect.', 85, 'Rebe McEntire', 'Melissa Peterman', 'Rex Linn', 'USA', 'NC-16', 2023, '7.1', 'https://www.youtube.com/watch?v=jP7MudaCsx0', 'RebaMcEntire\'sTheHammer2023.png', 0),
('ReservoirDogs1992', 'Reservoir Dogs', 'Crime', 'Quentin Tarantino', 'Six criminals, hired to steal diamonds, do not know each other\'s true identity. While attempting the heist, the police ambushes them, leading them to believe that one of them is an undercover officer.', 99, 'Harvey Keitel', 'Tim Roth', 'Chris Penn', 'USA', 'PG-13', 1992, '8.3', 'https://www.youtube.com/watch?v=GLPJSmUHZvU', 'ReservoirDogs1992.png', 0),
('RideOn2023', 'Ride On', 'Adventure', 'Larry Yang', 'Washed-up stuntman Luo can barely make ends meet, let alone take care of his beloved stunt horse, Red Hare. Luo reluctantly seeks help from his estranged daughter and her lawyer boyfriend when notified the horse may be auctioned off to pay his debts. Luo and Red Hare become an overnight media sensation when their fight with debt collectors goes viral.', 126, 'Jackie Chan', 'Liu Haocun', 'Guo Qilin', 'China', 'PG-13', 2023, '8.6', 'https://www.youtube.com/watch?v=k5aVcHpl_Xw', 'RideOn2023.png', 0),
('Roadside2013', 'Roadside', 'Horror', 'Eric England', 'Dan and his pregnant wife are on a road trip. Along a deserted road, they stop due to a fallen tree. Soon, they are held hostage by a gunman and must fight for their lives.', 90, 'Eric England', 'Ace Marrero', 'Katie Stegeman', 'USA', 'NC-16', 2013, '3.8', 'https://www.youtube.com/watch?v=HpddoSak0AQ', 'Roadside2013.png', 0),
('Roar2014', 'Roar', 'Thriller', 'Kamal Sadanah', 'A commando team enters the jungle to track down a white tigress after she kills a man. They do not realize how smart the tigress is, and soon the hunters become the hunted.', 123, 'Aaran Chaudhary', 'Nora Fatehi', 'Himarsha Venkatsamy', 'India', 'PG', 2014, '5.5', 'https://www.youtube.com/watch?v=cny_D50Rr44', 'Roar2014.png', 0),
('Sakra2023', 'Sakra ', 'Adventure', 'Donnie Yen', 'Accused of murder, a martial artist goes on the run in search of answers about his own mysterious origins and the unknown enemies out to destroy him.', 130, 'Sheng Lingzhi', 'Zhu Wei', 'He Ben', 'China', 'NC-16', 2023, '5.9', 'https://www.youtube.com/watch?v=ecpoT3OE3y8', 'Sakra2023.png', 0),
('Saw2004', 'Saw', 'Horror', 'James Wan', 'The film tells a nonlinear narrative, revolving around the mystery of the Jigsaw Killer, who tests his victims\' will to live by putting them through deadly \"games\" where they must inflict great physical pain upon themselves to survive. The frame story follows Jigsaw\'s latest victims (Whannell and Elwes), who awaken in a large, dilapidated bathroom, with one being ordered to kill the other to save his own family.', 103, 'Cary Elwes', 'Danny Glover', 'Monica Potter', 'USA', 'NC-16', 2004, '6.1', 'https://www.youtube.com/watch?v=S-1QgOMQ-ls', 'Saw2004.png', 0),
('Scream2022', 'Scream', 'Horror', 'Matt Bettinelli-Olpin', 'Twenty-five years after a streak of brutal murders shocked the quiet town of Woodsboro, Calif., a new killer dons the Ghostface mask and begins targeting a group of teenagers to resurrect secrets from the town\'s deadly past.', 94, 'Courteney Cox', 'Melissa Barrera', 'Jenna Ortega', 'USA', 'M-18', 2022, '6.3', 'https://www.youtube.com/watch?v=beToTslH17s', 'Scream2022.png', 1),
('ScreamVI2023', 'Scream VI', 'Horror', 'Matt Bettinelli-Olpin', 'In the next installment, the survivors of the Ghostface killings leave Woodsboro behind and start a fresh chapter in New York City.', 122, 'Courteney Cox', 'Melissa Barrera', 'Jenna Ortega', 'USA', 'M-18', 2023, '7.1', 'https://www.youtube.com/watch?v=h74AXqw4Opc', 'ScreamVI2023.png', 0),
('Senior2015', 'Senior', 'Horror', 'Wisit Sasanatieng', 'A student who can smell ghosts work together with a dead senior classmate to investigate a murder from 50 years ago.', 104, 'Jannine Weigel', 'Phongsakon Tosuwan', 'Sa-ad Piampongsan', 'Thailand', 'PG-13', 2015, '7.8', 'https://www.youtube.com/watch?v=zni_QolQV0k', 'Senior2015.png', 0),
('Serenity2019', 'Serenity', 'Thriller', 'Steven Knight', 'Baker Dill is a fishing boat captain who leads tours off of the tranquil enclave of Plymouth Island. His peaceful life is soon shattered when his ex-wife Karen tracks him down. Desperate for help, Karen begs Baker to save her -- and their young son -- from her abusive husband. She wants him to take the brute out for a fishing excursion -- then throw him overboard to the sharks. Thrust back into a life that he wanted to forget, Baker now finds himself struggling to choose between right and wrong.', 106, 'Matthew McConaughey', 'Anne Hathaway', 'Diane Lane', 'USA', 'M-18', 2019, '5.4', 'https://www.youtube.com/watch?v=k3zMlsEK8xA', 'Serenity2019.png', 0),
('ShallWeDance2004', 'Shall We Dance', 'Romance', 'Peter Chelsom', 'John, a bored and overworked estate lawyer, sees a beautiful woman standing at the window of a dance studio on a daily basis. He signs up for ballroom dancing lessons with hopes of meeting her.', 106, 'Richard Gere', 'Jennifer Lopez', 'Susan Sarandon', 'USA', 'PG', 2004, '6.2', 'https://www.youtube.com/watch?v=y-A64ctS2Cc', 'ShallWeDance2004.png', 0),
('ShortCuttoNirvana:KumbhMela2004', 'Short Cut to Nirvana: Kumbh Mela', 'Biography', 'Nick Day', 'Every 12 years over 70 million pilgrims gather at the meeting of India\'s holiest rivers, the Ganges and the Yamuna, for a spectacular spiritual festival: the Kumbh Mela. This documentary takes a voyage of discovery through this colorful event through the eyes of several Westerners and an ebullient young Hindu monk, Swami Krishnanand. Featuring encounters with some of India\'s most respected holy men and exclusive footage of His Holiness the Dalai Lama.', 85, 'Jasper Johal', 'Justin Davis', 'Swami Krishnanad', 'USA', 'PG-13', 2004, '7.0', 'https://www.youtube.com/watch?v=_eeZUJliReQ', 'ShortCuttoNirvana-KumbhMela2004.png', 0),
('Sing22021', 'Sing 2', 'Animation', 'Garth Jennings', 'Buster Moon and his friends must persuade reclusive rock star Clay Calloway to join them for the opening of a new show.', 110, 'Matthew McConaughey', 'Scarlett Johansson', 'Tori Kelly', 'USA', 'PG', 2021, '7.4', 'https://www.youtube.com/watch?v=EPZu5MA2uqI', 'Sing22021.png', 0),
('Sister2021', 'Sister', 'Family', 'Ruoxin Yin', 'A girl who has lost her parents is facing the issue of pursuing an independent life or raising her younger brother.', 127, 'Zhang Zifeng', 'Xiao Yang', 'Zhu Yuanyuan', 'China', 'PG-13', 2021, '8.0', 'https://www.youtube.com/watch?v=COLOJaM3k_M', 'Sister2021.png', 0),
('Slumberland2022', 'Slumberland', 'Fantasy', 'Francis Lawrence', 'A young girl discovers a secret map to the dreamworld of Slumberland, and with the help of an eccentric outlaw, she traverses dreams and flees nightmares, with the hope that she will be able to see her late father again.', 117, 'Jason Momoa', 'Chris O\'Dowd', 'Chris O\'Dowd', 'USA', 'PG', 2022, '6.7', 'https://www.youtube.com/watch?v=FBnkVJslRGo', 'Slumberland2022.png', 0),
('SoundofMyVoice2011', 'Sound of My Voice', 'Drama', 'Zal Batmanglij', 'California couple Peter (Christopher Denham) and Lorna (Nicole Vicius) set out to make a documentary meant to expose a charismatic cult leader named Maggie (Brit Marling) as a fraud. Maggie claims to be from the year 2054 and is seemingly allergic to almost everything in her environment; she lives in a basement, subsisting on canned oxygen, homegrown food and the blood of her acolytes. Though at first, Peter and Lorna are adamant that Maggie is a fake, they both soon fall under her spell.', 85, 'Christopher Denham', 'Nicole Vicius', 'Brit Marling', 'USA', 'PG-13', 2011, '6.6', 'https://www.youtube.com/watch?v=r0eEDovkvIs', 'SoundofMyVoice2011.png', 0),
('Spider-Man:NoWayHome2021', 'Spider-Man: No Way Home', 'Action', 'Jon Watts', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 148, 'Tom Holland', 'Zendaya', 'Benedict Cumberbatch', 'USA', 'PG-13', 2021, '8.2', 'https://www.youtube.com/watch?v=JfVOs4VSpmA', 'Spider-Man-NoWayHome2021.png', 0),
('SpiritUntamed2021', 'Spirit Untamed', 'Adventure', 'Elaine Bogan', 'After moving to a sleepy little town, young Lucky Prescott befriends a wild mustang named Spirit, who shares her rebellious spirit. When a heartless wrangler plans to capture Spirit and his herd, Lucky and her new friends embark on the adventure of a lifetime to rescue the horse that forever changed her life.', 85, 'Isabela Merced', 'Marsai Martin', 'Mckenna Grace', 'USA', 'PG', 2021, '5.5', 'https://www.youtube.com/watch?v=9jG1nnQGpdI', 'SpiritUntamed2021.png', 0),
('StateofPlay2009', 'State of Play', 'Thriller', 'Kevin Macdonald', 'When a US Congressman\'s aide gets killed, a team of reporters joins forces with the police to investigate the case. As they delve deep into the mystery, the politician\'s dark secrets come pouring out.', 128, 'Russell Crowe', 'Ben Affleck', 'Rachel McAdams', 'United Kingdom', 'PG', 2009, '7.1', 'https://www.youtube.com/watch?v=s1Sp1QvyQQI', 'StateofPlay2009.png', 0),
('StepBrothers2008', 'Step Brothers', 'Comedy', 'Adam McKay', 'Brennan and Dale, two middle-aged men who still live with their parents, are forced to stay under the same roof together when Brennan\'s mother marries Dale\'s father.', 98, 'Will Ferrell', 'Richard Jenkins', 'John C. Reilly', 'USA', 'M-18', 2008, '6.9', 'https://www.youtube.com/watch?v=8QKE96wZTkw', 'StepBrothers2008.png', 0),
('StepUp:YearOfTheDance2019', 'Step Up: Year Of The Dance', 'Musical', 'Ron Yuan', 'Step Up: Year of the Dance explodes onto the streets and stages of Beijing with super-talented young performers and dazzling dance sequences as a group of feisty street dancers join forces for a battle royal to determine the world\'s best dance crew.', 100, 'Jade Chynoweth', 'Sean Lew', 'Meiqi Meng', 'China', 'PG-13', 2019, '3.7', 'https://www.youtube.com/watch?v=jRlVV38txiQ', 'StepUp-YearOfTheDance2019.png', 0),
('SuperSizeMe2004', 'Super Size Me', 'Documentary', 'Morgan Spurlock', 'Director Morgan Spurlock\'s social experiment in fast-food gastronomy sees him attempting to subsist uniquely on food from the McDonald\'s menu for an entire month. In the process his weight balloons, his energy level plummets and he experiences all sorts of unexpected -- and terrifying -- side effects. He also examines the corporate giant\'s growing role in the lives of American consumers and explores its methods of indoctrinating young people and its contribution to America\'s obesity epidemic.', 98, 'Morgan Spurlock', 'Alexandra Jamieson', '', 'USA', 'PG-13', 2004, '7.2', 'https://www.youtube.com/watch?v=oAjsBZEOnVw', 'SuperSizeMe2004.png', 0),
('Suzume2023', 'Suzume', 'Animation', 'Makoto Shinkai', 'As the skies turn red and the planet trembles, Japan stands on the brink of disaster. However, a determined teenager named Suzume sets out on a mission to save her country. Able to see supernatural forces that others cannot, it\'s up to her to close the mysterious doors that are spreading chaos across the land. A perilous journey awaits as the fate of Japan rests on her shoulders.', 122, 'Nanoka Hara', 'Hokuto Matsumura', 'Eri Fukatsu', 'Japan', 'PG', 2023, '7.7', 'https://www.youtube.com/watch?v=5pTcio2hTSw', 'Suzume2023.png', 0),
('TearsoftheSun2003', 'Tears of the Sun', 'Action', 'Antonie Fuqua', 'Lt A K Waters and his troop are tasked to rescue Dr Lena from the jungles of a conflict-ridden Nigeria. However, she refuses to go with them unless they rescue her patients too.', 121, 'Bruce Willis', 'Cole Hauser', 'Monica Bellucci', 'USA', 'PG-13', 2003, '6.6', 'https://www.youtube.com/watch?v=INW4f3yyeZg', 'TearsoftheSun2003.png', 0),
('Tetris2023', 'Tetris', 'Drama', 'Jon S. Baird', 'The story of how one of the world\'s most popular video games found its way to players around the globe. Businessman Henk Rogers and Tetris inventor Alexey Pajitnov join forces in the USSR, risking it all to bring Tetris to the masses.', 118, 'Taron Egerton', 'Mara Huf', 'Miles Barrow', 'USA', 'R-21', 2023, '7.4', 'https://www.youtube.com/watch?v=FE8yoLsJX_k', 'Tetris2023.png', 0),
('TheBourneSupremacy2004', 'The Bourne Supremacy', 'Action', 'Paul Greengrass', 'When he is falsely framed in a CIA operation, Jason Bourne is forced to return to his old ways as an assassin, in order to figure out why they are still after him.', 108, 'Matt Damon', 'Brian Cox', 'Franka Potente', 'USA', 'PG-13', 2004, '7.7', 'https://www.youtube.com/watch?v=ohkW_xbPl9A', 'TheBourneSupremacy2004.png', 0),
('TheBrothersGrimm2005', 'The Brothers Grimm', 'Fantasy', 'Terry Gilliam', 'Brothers Jake and Will Grimm, who cheat people with tales of enchanted creatures and exorcisms, are put to the test when they encounter a real magical curse and must kill the evil queen to end it.', 118, 'Matt Damon', 'Heath Ledger', 'Lena Headey', 'USA', 'PG-13', 2005, '5.9', 'https://www.youtube.com/watch?v=ohxNxVlk2GQ', 'TheBrothersGrimm2005.png', 0),
('TheBossBaby2017', 'The Boss Baby', 'Family', 'Tom McGrath', 'Seven-year-old Tim gets jealous when his parents give all their attention to his little brother. Tim soon learns that the baby can talk and the two team up to foil the plans of the CEO of Puppy Co.', 97, 'Alec Baldwin', 'Tom McGrath', 'Tobey Maguire', 'USA', 'PG', 2017, '6.3', 'https://www.youtube.com/watch?v=k397HRbTtWI', 'TheBossBaby2017.png', 0),
('TheCave2019', 'The Cave', 'Adventure', 'Tom Waller', 'Twelve boys and their football coach become trapped in a northern Thailand cave by flood waters, and an international team of rescue workers scramble to save them.', 104, 'Jim Warny', 'Ekawat Niratvorapanya', 'Tan Xiaolong', 'Thailand', 'PG-13', 2019, '5.3', 'https://www.youtube.com/watch?v=TaZkwBWuN2A', 'TheCave2019.png', 0),
('TheDeparted2006', 'The Departed', 'Crime', 'Martin Scorsese', 'An undercover agent and a spy constantly try to counter-attack each other in order to save themselves from being exposed in front of the authorities. Meanwhile, both try to infiltrate an Irish gang.', 95, 'Leonardo DiCaprio', 'Matt Damon', 'Jack Nicholson', 'USA', 'M-18', 2006, '8.5', 'https://www.youtube.com/watch?v=iQpb1LoeVUc', 'TheDeparted2006.png', 0),
('TheFighter2010', 'The Fighter', 'Drama', 'David O. Russell', 'Micky Ward, a struggling boxer, teams up with his older half-brother Dicky Eklund, a recovering cocaine addict, to get his career back on track.', 116, 'Mark Wahlberg', 'Christian Bale', 'Amy Adams', 'USA', 'M-18', 2010, '7.8', 'https://www.youtube.com/watch?v=LRIZ4mCi5Ps', 'TheFighter2010.png', 0),
('TheIsland2018', 'The Island', 'Comedy', 'Huang Bo', 'News of a meteorite bound to strike Earth doesn\'t have much effect on Ma Jin\'s everyday life; he still gets up and goes to a job where he spends his time daydreaming of a romance with his colleague Shanshan, and of winning the lottery. But when this cataclysmic event occurs during a team-building trip, he finds himself shipwrecked on an island with an odd group of co-workers, and he has the winning lottery ticket in his pocket.', 134, 'Huang Bo', 'Shu Qi', 'Lay Zhang', 'China', 'PG-13', 2018, '6.2', 'https://www.youtube.com/watch?v=lLtNiDDb5yk', 'TheIsland2018.png', 0),
('TheKillerInsideMe2010', 'The Killer Inside Me', 'Thriller', 'Michael Winterbottom', 'Darkly disturbing thriller set in Texas. When the son of local wealthy mogul Chester Conway is found dead with the beaten body of a local prostitute, suspicion falls onto Deputy Sheriff Lou Ford - who until now was thought of as a stoic pillar in the community. The Sheriff is revealed to be a cunning, sadistic sociopath.', 109, 'Casey Affleck', 'Kate Hudson', 'Jessica Alba', 'USA', 'R-21', 2010, '6.1', 'https://www.youtube.com/watch?v=1I4rDHxzeCg', 'TheKillerInsideMe2010.png', 0),
('TheLoneRanger2013', 'The Lone Ranger', 'Action', 'Gore Verbinski', 'John, a lawyer, joins his brother to capture Cavendish, an outlaw. Cavendish attacks and leaves them for dead but John is rescued by Tonto, a rebel Comanche, and they team up to take down the rogue.', 149, 'Johnny Depp', 'Armie Hammer', 'Tom Wilkinson', 'USA', 'PG-13', 2013, '6.4', 'https://www.youtube.com/watch?v=L9DDCKVrZfU', 'TheLoneRanger2013.png', 0),
('TheMummy:TomboftheDragonEmperor2008', 'The Mummy: Tomb of the Dragon Emperor', 'Adventure', 'Rob Cohen', 'After being asked to visit China with a precious relic, which can bring people back from the dead, Alex O\'Connell discovers an ancient tomb and accidentally resurrects a mummy.', 112, 'Brendan Fraser', 'Jet Li', 'Maria Bello', 'USA', 'PG-13', 2008, '5.2', 'https://www.youtube.com/watch?v=5-4qSE2Ch0Y', 'TheMummy-TomboftheDragonEmperor2008.png', 0),
('TheNameofLove2010', 'The Name of Love', 'Comedy', 'Michel Leclerc', 'In her attempts to convert her political opponents, provocative activist Bahia openly flirts and sleeps with those who don\'t agree with her until they change their mind. However, everything changes when she meets an uptight scientist.', 100, 'Jacques Gamblin', 'Sara Forestier', 'Zinedine Soualem', 'France', 'NC-16', 2010, '7.1', 'https://www.youtube.com/watch?v=qXjH64Wu2gY', 'TheNameofLove2010.png', 0),
('TheNutcrackerandtheFourRealms2018', 'The Nutcracker and the Four Realms', 'Fantasy', 'Joe Johnston', 'On Christmas Eve, Clara realises that before dying, her mother left her with an inheritance to a magical world of fairies and toy soldiers that are alive. She holds the key to the fate of this world.', 100, 'Mackenzie Foy', 'Keira Knightley', 'Misty Copeland', 'USA', 'PG', 2018, '5.6', 'https://www.youtube.com/watch?v=BXfxLIuNJvw', 'TheNutcrackerandtheFourRealms2018.png', 0),
('ThePeanutsMovie2015', 'The Peanuts Movie', 'Comedy', 'Steve Martino', 'Charlie falls for a red-haired girl, who moves into his neighbourhood, and tries to woo her. Meanwhile, his best friend Snoopy, with the help of his team, sets out to pursue his arch-rival, Red Baron.', 93, 'Noah Schnapp', 'Hadley Belle Miller', 'Mariel Sheets', 'USA', 'PG', 2015, '7.0', 'https://www.youtube.com/watch?v=zQpUQPrAfQM', 'ThePeanutsMovie2015.png', 1),
('ThePope\'sExorcist2023', 'The Pope\'s Exorcist ', 'Horror', 'Julius Avery', 'Father Gabriele Amorth, chief exorcist for the Vatican, battles Satan and innocent-possessing demons. A detailed portrait of a priest who performed more than 100,000 exorcisms in his lifetime.', 103, 'Russell Crowe', 'Daniel Zovatto', 'Alex Essoe', 'USA', 'NC-16', 2023, '6.1', 'https://www.youtube.com/watch?v=YJXqvnT_rsk', 'ThePope\'sExorcist2023.png', 0),
('TheReef2010', 'The Reef', 'Horror', 'Andrew Traucki', 'The Reef is a 2010 Australian survival horror film, written, directed and produced by Andrew Traucki in his second feature film. The film is about a group of friends who capsize while sailing to Indonesia and are stalked by a great white shark as they try to swim to a nearby island.', 94, 'Damian Walshe-Howling', 'Zoe Naylor', 'Gyton Grantley', 'Australia', 'NC-16', 2010, '5.8', 'https://www.youtube.com/watch?v=0UD2gbjB3vw', 'TheReef2010.png', 0),
('TheSuperMarioBros.Movie2023', 'The Super Mario Bros. Movie', 'Animation', 'Aaron Horvath', 'With help from Princess Peach, Mario gets ready to square off against the all-powerful Bowser to stop his plans from conquering the world.', 92, 'Chris Pratt', 'Anya Taylor Joy', 'Charlie Day', 'USA', 'PG', 2023, '7.4', 'https://www.youtube.com/watch?v=TnGl01FkMMo', 'TheSuperMarioBros.Movie2023.png', 0),
('TheWatch2012', 'The Watch', 'Sci-Fi', 'Akiva Schaffer', 'After his store\'s watchman is murdered, Evan along with his neighbours forms a neighbourhood watch. They soon realise that the murderer is not a human, but an alien.', 102, 'Ben Stiller', 'Vince Vaughn', 'Jonah Hill', 'USA', 'PG-13', 2012, '5.7', 'https://www.youtube.com/watch?v=PhN1xnCyqR8', 'TheWatch2012.png', 0),
('TigerOrange2014', 'Tiger Orange', 'Drama', 'Wade Gasque', 'Two estranged gay brothers struggle to reconnect in their small California hometown after their father\'s death.', 76, 'Mark Strano', 'Johnny Hazzard', 'Gregory Marcel', 'USA', 'M-18', 2014, '6.5', 'https://www.youtube.com/watch?v=Ht5s3lcMpqo', 'TigerOrange2014.png', 0),
('TomandJerry2021', 'Tom and Jerry', 'Comedy', 'Tim Story', 'Kayla is responsible for organising a high-profile wedding in a fancy hotel. But when Jerry, a mischievous mouse, wreaks havoc in the hotel, she enlists his arch-rival\'s help to get rid of him.', 101, 'Chloe Grace Moretz', 'Pallavi Sharda', 'William Hanna', 'USA', 'PG', 2021, '5.2', 'https://www.youtube.com/watch?v=kP9TfCWaQT4', 'TomandJerry2021.png', 0),
('Unforgettable2017', 'Unforgettable', 'Drama', 'Denise Di Novi', 'Julia falls in love with David, a handsome divorcee, and gets engaged to him. However, David\'s former wife, who still loves him, decides to ruin Julia\'s life.', 100, 'Rosario Dawson', 'Katherine Heigl', 'Geoff Stults', 'USA', 'NC-16', 2017, '5.7', 'https://www.youtube.com/watch?v=iFXIBL617yc', 'Unforgettable2017.png', 0),
('Unsullied2014', 'Unsullied', 'Horror', 'Simeon Rice', 'Held captive in an isolated cabin, a track star (Murray Gray) escapes into the Florida wilderness and fights for survival against the two men (Rusty Joiner, James Gaudioso) who kidnapped her.', 93, 'Rusty Joiner', 'Murray Gray', 'James Gaudioso', 'USA', 'R-21', 2014, '4.0', 'https://www.youtube.com/watch?v=d5MyZNVD4qk', 'Unsullied2014.png', 0),
('WalkingwithDinosaurs2013', 'Walking with Dinosaurs', 'Family', 'Barry Cook', 'While on a fossil hunt, a palaeontologist\'s nephew encounters an Alexornis bird from the Cretaceous period. The bird narrates the story of dinosaurs which existed at that time.', 87, 'John Leguizamo', 'Justin Long', 'Tiya Sircar', 'United Kingdom', 'PG', 2013, '5.2', 'https://www.youtube.com/watch?v=P7lBKBxIwGM', 'WalkingwithDinosaurs2013.png', 0),
('WeatheringwithYou2019', 'Weathering with You', 'Fantasy', 'Makoto Shinkai', 'Set during a period of exceptionally rainy weather, high-school boy Hodaka Morishima runs away from his troubled rural home to Tokyo and befriends an orphan girl who can manipulate the weather.', 114, 'Kotaro Daigo', 'Nana Mori', 'Shun Oguri', 'Japan', 'PG', 2019, '7.5', 'https://www.youtube.com/watch?v=Q6iK6DjV_iE', 'WeatheringwithYou2019.png', 0),
('WeHaveaGhost2023', 'We Have a Ghost', 'Fantasy', 'Christopher Landon', 'The discovery that their house is haunted by a ghost named Ernest makes Kevin\'s family a social media sensation. But when Kevin and Ernest get to the bottom of the mystery of Ernest\'s past, they become targets of the CIA.', 127, 'David Harbour', 'Jahi Winston', 'Anthony Mackie', 'USA', 'PG-13', 2023, '6.1', 'https://www.youtube.com/watch?v=82I1ErFD63U', 'WeHaveaGhost2023.png', 1),
('WelcomeHomeRoscoeJenkins2008', 'Welcome Home Roscoe Jenkins', 'Family', 'Malcolm D. Lee', 'A successful talk show host visits his Southern family for his parents\' 50th anniversary. But he is not looking forward to revisiting his past where he was nothing more than an awkward little boy.', 118, 'Martin Lawrence', 'Margaret Avery', 'Joy Bryant', 'USA', 'PG-13', 2008, '5.5', 'https://www.youtube.com/watch?v=wfTyPryL3BQ', 'WelcomeHomeRoscoeJenkins2008.png', 0),
('WithoutMen2011', 'Without Men', 'Comedy', 'Gabriela Tagliavini', 'The women of a remote Latin American town are forced to pick up the pieces and remake their world when all the town\'s men are forcibly recruited by communist guerrillas.', 87, 'Eva Longoria', 'Christian Slater', 'Kate del Castillo', 'USA', 'PG-13', 2011, '3.3', 'https://www.youtube.com/watch?v=nWoFjSPi6R0', 'WithoutMen2011.png', 0),
('YourName.2016', 'Your Name.', 'Romance', 'Makoto Shinkai', 'Two teenagers share a profound, magical connection upon discovering they are swapping bodies. Things manage to become even more complicated when the boy and girl decide to meet in person.', 112, 'Ryunosuke Kamiki', 'Mone Kamishiraishi', 'Ryo Narita', 'Japan', 'PG', 2016, '10.0', 'https://www.youtube.com/watch?v=xU47nhruN-Q', 'YourName.2016.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviewsdb`
--

CREATE TABLE `reviewsdb` (
  `reviewID` int(3) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reviewText` varchar(883) DEFAULT NULL,
  `reviewStars` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reviewsdb`
--

INSERT INTO `reviewsdb` (`reviewID`, `email`, `reviewText`, `reviewStars`) VALUES
(1, 'icrocombe1x@alexa.com', 'Abit cold, remember to bring a jacket but the seats are very comfy and the screen is very big', 4),
(2, 'pmcairt2l@jimdo.com', 'Seriously, it\'s the worst seat I have ever sat to watch a movie. It was so uncomfortable.  I hope they change all the seats, or revamp the area. At least invest in the experience and not just suck our money dry.', 2),
(3, 'tgluyus10@mediafire.com', 'Nice theatre! Serve both sweet and salty pop corns, the snack bar service was a little rushed but acceptable. Comfortable seats but wish the sound quality to be better!', 5),
(4, 'bgoade@amazon.de', 'Like any other cinemas for the normal theatre, the popcorn served was stale and did not have much flavour. The seats were hard and cold, but I did enjoy the movie.', 2),
(5, 'lgrogono14@histats.com', 'It\'s wonderful experience to watch the movies, the sound quality is very good, but have the ticket counter to buy the ticket physically', 5),
(6, 'imackness1@wordpress.org', 'The theatres are pretty standard and basic - seats are packed tightly and you are closely surrounded by others (who unfortunately sometimes dont behave appropriately - talking/using their phones, burping or eating loudly). Most of the time it is functional as its the closest to home but if they renovated or had more premium options that would be nice.', 2),
(7, 'vheardman26@mtv.com', 'One of the great cinemas i visited. Amazing picture quality, good sound system, and the comfortable of their cinema halls, really deserve watching movies from there.. loved it..', 5),
(8, 'kwillattsc@noaa.gov', 'The popcorm served out of a sack was definitely stale and upon requesting they tried to find me a solution but didn\'t cook up a fresh batch. The popcorn served at the end was cold and stale', 3),
(9, 'dmusprat18@ted.com', 'New and comfortable seats, The seats are better and more spacious than the seats in other cinemas. Good sound system and larger screens.', 5),
(10, 'dpowland1h@artisteer.com', ' Fabulous and way under-rated cinema. I lost my apple earpod and called them 30 minutes after I left the place. They told me they found it and can come and claim immediately. Additionally, nice sound system with ok screen.', 5),
(11, 'pwark1v@un.org', 'Usual cinema without much funfare. The theatre has scaled down from a few hundreds to perhaps maximum 100 or less. Anyway, this is first time after so many donkey years that I really been to a cinema movie.', 4),
(12, 'mdrysdall2p@abc.net.au', 'Worst movie theatre experience ever! Hall 4 seats are not stepped, they are laid out flat, thus the screen hangs way above sight line. If you dont want to strech and tilt up ur head for straight 2 hours, dont go here. Absolutely sucks!', 1),
(13, 'cnutting2h@cam.ac.uk', 'Visited this cinema today to try out this cinema for the newly released movie Doctor Strange. I absolutely loved it, no doubt about that. The seat vibrated according to the script and unlike other cinemas in Singapore, the air conditioning was just right, so I did not even had to put on my jacket!', 5),
(14, 'bjoseph1z@typepad.com', 'Wide range of snacks but the air conditioning had to improve as the midway of the movie feels stuffy but overall ok ..	', 3),
(15, 'cclissettv@indiegogo.com', 'The cinema hall is cosy. However,  it would be helpful if the lights can be brighter to enable patrons to see better while looking for their seats, before the show starts.', 3),
(16, 'cspurden17@multiply.com', 'Liked the synthetic chair material. Better than cloth ones that cannot be cleaned.', 4),
(17, 'eblackledge2n@imgur.com', 'Before the show premiere, the hall 4 is in total darkness. Cannot see and find the numbering on the seats. I would prefer if the lights are on until the actual screening started. Also the flooring are all in steps making it more difficult to find the seats in total darkness. One may accidentally trip and fell especially children or aged adults. Very steep and risky.', 3),
(18, 'bjoseph1z@typepad.com', 'It has this old feeling and atmosphere, if you want to watch a movie at the last min, you should be able to get tickets. It\'s very unfortunate that as it ages, the cinema seats does have an unusual smell.\r\n\r\nI do hope they consider adding nice air fresheners to the cinema halls.', 3),
(19, 'hcullity1s@exblog.jp', 'Cinema suddenly blackout halfway through the movie. told us dont know how long will take to fix but we can wait there till its fixed or leave lolllll', 1),
(20, 'cbellfield2r@naver.com', 'Very nice experience, small theaters, brilliant sound system. Aircon very cold, staff is super nice I really enjoyed my movie', 5),
(21, 'opierrepoint1k@soundcloud.com', 'Great service from the lady staff at the box office who noticed my elderly parents + long showtime and took the initiative to recommend seats that had convinient access to the toilet. She even guided us on how to get to our seats and was knowledgeable and super helpful when we enquired on the current promotions', 5),
(22, 'hhonywilln@craigslist.org', 'Cinema hall 2 has chairs that slopes DOWNWARDS! most uncomfortable movie experience ever. Never going again.', 1),
(23, 'fwaind1b@surveymonkey.com', 'Quickly turning into my favorite place to watch a movie in Singapore. the facility is fantastic, the theaters are new and clean and incredibly comfortable there are so many different movie options that change weekly.', 5),
(24, 'vmelato28@exblog.jp', 'Small but has a good number of theaters. Air conditioning is strong, so bring a jacket', 4),
(25, 'mlanawaym@phpbb.com', 'Best cinema hideaway from the city area with excellent sound system. Most often able to get tickets with good seats for a popular movie even at last minute.', 5),
(26, 'dridolfo1r@berkeley.edu', 'Awesome clean theatre. Perfect sound and viewing quality. Fantastic service when redeeming popcorn.\r\nAircon was way to cold, do come prepared.\r\nBe better if there\'s dim lit before show to find our seats', 3),
(27, 'clinklet24@gizmodo.com', 'Staff was very understanding and friendly, while helping me refund movie tickets\r\n\r\nOne note: Bring earplugs for when you watch a movie here, because the advertisements/trailer part is extra loud. the actual movie audio volume is fine though', 5),
(28, 'sgalbretho@photobucket.com', ' I purchased two tickets on the wrong date. The staff was very helpful. Was able to amend the date without much fuss. Watched the movie on time. My son enjoyed the movie and the popcorn', 5),
(29, 'cbrimacombe2d@dmoz.org', ' They will literally prowl every single cinema hall, searching for every customer who consumes outside food to either stop eating or leave the hall, causing much disturbance to the whole experience and completely destroy the mood. Utterly disappointed.', 1),
(30, 'pianitti21@imgur.com', ' Had my movie in hall 2, where the seats had cracks and were especially uncomfortable. There are better cinemas in Singapore to go to. Please, please do not ever ever come here. Terrible.', 1),
(31, 'gfitzsymons2b@dailymotion.com', 'Had the worst movie experience with cinema 1 on the first day showing of The Batman! There was a technical problem during the half of the movie. The screen suddenly stopped while we can just hear the sound. Several minutes had passed and yet nobody is there to assist or even update us. After about 10mins or so, two young ladies came in and announced that there was a technical error and it will be fixed. Few more minutes had passed and we can already hear sounds from the screen which I believe is from the movie Spiderman. Then the lights suddenly went on while these two ladies came back to announce that they wont be continuing the movie due to technical issue and will give us complimentary movie ticket instead!\r\n\r\nBy the way this happened not once, I remember when we had this movie event in our company and same thing happens. Will never come here to watch any movie again!', 1),
(32, 'bhucker1q@howstuffworks.com', 'Best place to watch during working hrs. Staff r friendly and well kept provided patrons dont munch or eat hot food inside. Aircon n hot food doesnt go together in most place. Esp yellow n blue furniture mall n cinemas. Smell like clogged drain.', 4),
(33, 'hoakshott1n@yellowbook.com', 'Theatre itself not bad as i have been there before but I went to buy tickets for a m18 movie, i am 18 this year,  the guy at the cashier already checked my IC before letting me buy the tickets then the uncle refused entry? Had to change movies because food and drinks were already purchased. Unpleasant experience.', 2),
(34, 'cspurden17@multiply.com', 'The cinema needs to have better queue management dividing signs. There are queue dividers with queue stickers tags on the floor, yet i was told to queue up and join another queue when it was my turn as if i did not queue up at all. The queue divider gap was in the first place not closed, and the counter that the queue led up to was served with a counter lady. Time was wasted to queue up for this misleading \"\"queue\"\" and to join another queue which your team could have better managed it. There was a staff sitting by the entrance during this time, and upon seeing the situation i faced also did not bother managing and shifting the dividers to close up the gap which could have led another patron to queue up for nothing.', 1),
(35, 'dmcgaughay1t@dion.ne.jp', 'Great cinema nice and clean. I have been there a few times now over the year. I forgot my jumper. The aircon is set to freezing cold sorry did I say freezing cold I meant freeeeeeerzing cold. If you go there don\'t forget your jumper.', 3),
(36, 'mcaudrey1o@hibu.com', 'Good place to watch movie. But very cold. Do remember to bring a jacket.', 4),
(37, 'gquest0@spotify.com', 'Watch on weekday is not crowded at all. Theater is nice and clean. Restroom is in another side of theater. It takes a bit of time for a break during long movie.', 5),
(38, 'dbruyntjes2g@wikispaces.com', 'The staff was polite and really nice theater but  but there\'s absolutely no place to sit down if you\'re waiting to enter the theater which they won\'t let you do until 10 minutes prior to Showtime... My wife has a back problem and my mother has MS.. I mean come on guys put some benches out!? Plenty of space in the lobby for some sitting space.', 3),
(39, 'dducrow5@t.co', 'The cinema itself was good but the service was poor.  When waiting in the queue, there was sprite spilled all over the place and people had to walk on it and get their shoes covered in syrup.  Then the queue was slow as there were only 3 people working the counter.  I happen to get the manager and he was working as a cashier because he said they were understaffed today because it was a holiday.', 2),
(40, 'smacgill12@friendfeed.com', 'I went there for a movie and it was one of the best I have been too! great theater. good prices for food and movies.	', 5),
(41, 'mrichfielda@state.gov', 'Was just a normal movie experience for the most part but was trapped in the stairwell when i was trying to leave.\r\n\r\nthe exit the staff member directed me towards led to a locked door and i had no way to go back (one-way push door) or leave. had to call the security guard to let me out and he also said that exit was not to be used by unauthorised personnel which was very weird.\r\n\r\nidk if this is company policy but staff members kept walking up and down the aisle while the movie was showing which was quite distracting.\r\n\r\nthere were also 20 minutes of ads before the film started, next time i\'ll stick to netflix...', 1),
(42, 'selland2q@cnn.com', 'Unprofessional staff at snacks counter. Placed an order and staff started cracking jokes about item and quantity ordered in our presence... For the price we pay for the experience and the food, the standard of service should increase substantially', 1),
(43, 'bpablos1m@apple.com', ' I was at theatre 3 and is not that big. Very clean but super cold. Pls bring along jacket!', 5),
(44, 'lvlasini@wp.com', 'Good there are toilets in Hall 1 & 4 but the air-conditioning in all halls are too very COLD. Everytime we will have to bring a sweat shirt to put on whenever we visit. Will try to avoid watching movies here if we can. With energy saving should raise the temperature 1 or 2 notch up.', 3),
(45, 'thasseyr@wikipedia.org', 'Colder than necessary. The cinema feels aged. The seats are not well placed; if you\'re shorter, you will be blocked. Also, the sound system is very nuanced: you need to seat in the center block if your want reasonably balanced sound, or you risk being close to pillars which will spoil your visual and aural enjoyment.\r\nIt\'s a cinema you visit once and will not want to come back for a while. Then, you\'d forget the cons and then revisit.', 3),
(46, 'selland2q@cnn.com', 'Wonderful movie theatre. Magical movie experience everytime we go there. Pre-movie exprerience at the darkened lobby and snack bar is so inviting. Also, the exit is at the same lovely lobby', 5),
(47, 'sedworthye2f@rakuten.co.jp', 'Everything is good but don\'t forget to wear long pants and bring warm clothes, it\'s deadly cold inside', 5),
(48, 'sgalbretho@photobucket.com', ' Good: Huge theater. Usually able to get tickets for popular movie. Cushion are still nicely filled so was quite comfortable. Usual spot to catch my marvel movies. Bad: most seats are abit tilted downwards. Might have a bad posture if movie is long.', 4),
(49, 'hcullity1s@exblog.jp', 'An animated movie would be the best choice. Had an OK experience watching Mission Impossible - Fallout. And take a jacket unless you\'re used to the cold! The theater in itself was quite clean and the movie snacks not very pricey.', 3),
(50, 'wrosone25@abc.net.au', 'Expensive movie tickets, Poor organization and packing of snacks. Overall, other cinemas are way much better in service and professionalism', 2),
(51, 'rfransemaib@bravesites.com', 'Thank you Mehwin for the exceptional service! this is what customer service should be like. she opened the cashier for us even when the counter was closed & our chitchat made all of our days better :)', 5),
(52, 'gglowach1w@indiatimes.com', 'Awesome layout for a movie theatre, with the cost of the ticket and the combo, it is well worth! \r\n\r\nI would love to see them incorporate some superhero statues or more artwork to the main lobby area.  It did feel a little empty given the size but Im sure at a premier it would be packed so I may be wrong.\r\n\r\nThe washrooms here were very clean with ample soap and water available when washing hands.  I was surprised to see a hole in the floor style toilet from year past.\r\n\r\nI hope to return here and enjoyed my time,  thank you to the theatre for providing a clean and hygienic environment where I could relax', 5),
(53, 'lcranney8@topsy.com', 'Watch a movie here. One of the best places to do that. Always look forward to bring my kids here, because they have such a good time. Thank you!', 5),
(54, 'croe7@xinhuanet.com', 'Seats are also quite small and uncomfortable. Can\'t wait for the movie to end. Most uncomfortable cinema experience in Singapore. Hard seats and low leg room, it was so terrible. Do not recommend!', 1),
(55, 'tiscowitz4@earthlink.net', 'Amazing theatre, very organized and people are very nice. The sound system and the screen is exceptionally good.', 5),
(56, 'enorthidge1f@elegantthemes.com', 'Seats way too short for the back. Had zero head support even when slouched and knees far apart to avoid the chair infront of me. I can\'t come here again solely for this chair shortness. Food served here is pretty good though. Juicy and flavourful meatballs. Best cinema food i\'ve ever tasted!', 4),
(57, 'aklampk1d@foxnews.com', 'Poor sound quality, totally ruined my movie experience. I would have gotten better viewing at my home speakers. Disappointed..Even after I complaint about it, the sound was so poor..and it deprived me of the experience that I was expecting.. Please improve your sound systems! I want to give 0 starts but it\'s not allowing me to post it so going with minimum star 1 .', 1),
(58, 'dmarinf@miibeian.gov.cn', 'Small but wonderful theater!  Excellent picture quality and sound! Comfortable seating! Highly recommended.	', 5),
(59, 'gelger2@exblog.jp', 'The cinema is spacious and clean. However, the food is terrible. Bought a GOURMET caramel popcorn and well I thought how can a popcorn go wrong right? Went in and opened the box, realised it was sealed in a reheatable pack! well I opened it and ate the popcorn but guess what? The popcorn is cold on the inside. Have never tried a cold popcorn. well the caramel popcorn in other cinemas has never gone wrong though. Honestly I am pretty disappointed.', 3),
(60, 'hgeggy@newsvine.com', 'Seats were very spacious, staff were friendly. Only issue was... the popcorn. I was happy to see a generous portion but as soon as I took the first bite, all the excitement went away. They were the blandest popcorn I have ever tasted in my life and not even the caramel could salvage it.', 4),
(61, 'hdorricottl@admin.ch', 'Quite decent exp thr when I went to watch a movie with my mum.\r\n- cinema is quite clean but air-conditioning can be colder (not too big of an issue tho)\r\n- staffs were all really friendly and tried to help when the kiosk didn\'t let me buy my tickets -> hence -1 star\r\n- popcorn was nice.', 4),
(62, 'bhucker1q@howstuffworks.com', 'Nice theatre seats but the food is limited and average, especially the popcorn.', 4),
(63, 'dgoodridge6@yahoo.co.jp', 'Clean and spacious seats! Can\'t watch a movie without popcorn and drink!', 5),
(64, 'mgiacopello2i@altervista.org', 'A neighbourhood cinema and showcases the latest shows. Great for a late night movie that is close to home. The halls are decent sized with high backed seats where you could feel the head rest. And the front row is not too close to the screen. Temperature is set comfortably without feeling cold even when I arrive in my singlet and shorts. The only reasons I have given 3 stars are: staff are not so customer friendly and the corridor reeks of a smell of unwashed feet sometimes. Get though the staff and the corridor and your experience will be quite superb.	', 3),
(65, 'mrainforth27@admin.ch', 'Horrible service by the aunty manning the queue cashier. We were still deciding on what to get when she gestured to us as in a hurried manner. Told her we are still deciding. When we have decided, she took a while to get our orders. After taking our orders, she collected payment and rushed me to move away as she wanted to serve the customer after me. Throughout the entire interaction,  she was nothing but pushy and borderline rude. Never have I had any problems in other cinemas besides this. I regret giving this cinema a chance.', 1),
(66, 'kbedburyt@tinyurl.com', 'I thought long and hard about giving this review, and I hate giving negative reviews because it may mean affecting a staff, but whilst I could live with bad services (which I clarify is not the case here), I could not live with bad hygienic practices. I was collecting drinks and popcorn from a staff called Colleen today. Long story short, she scooped ice into my cup and an ice cube fell out of the cup. I saw that she used her bare hand to swipe the ice into the ice box, and then proceeded to take my cash payment. It is quite disturbing that such a sloppy action could happen when Singapore just exited a challenging COVID era. I could only attribute such action to a lack of robust training and oversight on the part of the management. This is unbecoming and I urge the management to look into how employees are trained and supervised.', 1),
(67, 'gquest0@spotify.com', '1. AC too cold at Hall 6.\r\n2. 20 minutes before movie time, Theatre 6 was pitch dark and it didn\'t feel safe looking for my seat.\r\n3. Developed itchy hives after the movie. Second time it happened here. There was a plastic food container left on the floor by previous user.\r\n4. Many soap dispensers in the ladies\' toilet don\'t work.', 1),
(68, 'sgarteryw@si.edu', 'Wow, what a great experience I have with my family members. This place is wonderful and amazing. I never regret the money I spend in this place with my family members. They deserve more than five star, because they have everything that you want, and is good for a relaxing day, and also have good bars around the location. Anyway there staff make me enjoy my stay I appreciate a lot, not only that, the prices of there tickets is very good.', 5),
(69, 'mniavesz@eventbrite.com', 'Waiting for show, they still take their own sweet time scooping the ice and the popcorn. Then proceeded to give the wrong drink also. Hope they can work on the service.', 2),
(70, 'ebradderq@bizjournals.com', 'A bit small, but a decent place for a quick movie. They should hire at least one or two more staff so that the one poor staff doesn\'t have to run between the food and ticketing counter, otherwise customer service was acceptable.', 4),
(71, 'ubrameldh@example.com', 'The outside waiting area is great, plenty of seating area but in the theatre, it\'s a disaster, totally dark, very dangerous if one doesn\'t turn on a torch to look for your seat. Not well planned, time for a upgrade.', 2),
(72, 'dmurby19@chronoengine.com', 'Good theater for spend time together with family, but better book ticket in advance so you have more choice of schedule & seats. The snack cheese meatballs always be favorite for my kids.', 5),
(73, 'mlangham2e@1und1.de', '  Popcorn was stale and tasted off. Seats are very uncomfortable too, and the theatre was very cold. I highly do not advise anyone to come here.', 1),
(74, 'clinklet24@gizmodo.com', 'Have been here many times during the last many years and great to see the quality of everything is either same and well maintained or improved. Cheers!', 5),
(75, 'opierrepoint1k@soundcloud.com', 'Went to watch a Tamil movie. Didn\'t like the theatre at all...it seemed like a huge room with cushioned chairs..thats all. Wouldn\'t suggest unless you want a neck pain.', 3),
(76, 'cferenczy1p@goo.ne.jp', 'This cinema has the highest and strictest standard of \"No outside food and drinks\" I have ever seen in my life. The staff was constantly prowling around and immediately targeting any audience whose food/drinks were not from the cinema.  It was understandable that the rules clearly stated that No outside food and drinks are allowed and the staff were merely carrying out their duties. However,  it was highly distracting for the staff to come in and out of the cinema just to tell the audience that outside food and drinks weren\'t allowed and to put them away. This really took the whole cinema experience away, and it became hard to enjoy the movie. Will not ever come here again!', 1),
(77, 'cnutting2h@cam.ac.uk', ' The counter service could be more friendly. It was not busy the moment I came. They did not offer food delivery service as my show already started but one of the food item needs to be cooked.', 3),
(78, 'opierrepoint1k@soundcloud.com', 'Movie and film selection was ok, but the seats definitely is not ok. The leg room is almost the same with what you got on economy flight seats. You will eventually knock the person in front you accidentally with that tight leg room, and the person behind you will knock you as well. It is really annoying and it is my first time seeing this kind of tight leg room in a cinema. Will definitely not going back', 2),
(79, 'tleggisk@earthlink.net', 'Was at Hall 1 and seated 2 rows from the back.. Nice big area and seats are elevated a little bit so the front seats will never be blocking you, nice! Only thing is that the screen seemed small from the back (cos the hall is that big) so I advise booking the middle rows for optimal viewing', 5),
(80, 'vduke3@yellowbook.com', 'Nice ambience, good place for movies. Except movie ticket prices are getting higher and the food amount is getting lesser.', 4),
(81, 'kburchell1i@amazonaws.com', 'The female manager behind the ticketing counter needs urgent customer service training. The old friendly and helpful gentleman at the ticket check booth should be the manager instead.', 2),
(82, 'mlanawaym@phpbb.com', 'Polite staff, friendly to senior citizens too. The lady who stood around self service counter was alert and patient to clarify our doubts. Gave us additional information too. Ticket booking counter employees (a senior citizen was coaching a new employee on the job) were patient and repeated without hesitation or frustrations. Good service at pop corn counter and fast food packers. Comfy theatre seats and great lighting. Keep up thegood work.', 5),
(83, 'cminett29@woothemes.com', 'The Best thing about this place is.... NOT Many people... so you can really enjoy your movies!', 4),
(84, 'cfrancesconi1j@youtu.be', ' Still my favorite cinema. Seats are spacious. I watched The Lost City at Hall 1 and its so good to be able to see an almost full house. Wish the guy in front of me isn\'t so tall tho as my view was a little obstructed.', 5),
(85, 'roliff1c@booking.com', 'The best seats in Singapore thus far! Premium leather seats with comfy back support and spacious leg room. Staff are always friendly, and never fail to put a smile on my family\'s faces whenever we visit.', 5),
(86, 'mlongstaffe23@oakley.com', '1st time patron since it opened.  Was impressed with the leg space between back and front seats.  The sound system was good and the Cinema halls were kept clean too. Will go more often from now on.', 5),
(87, 'lfer2c@go.com', ' Staff are racist.\r\nMy friend is 20 years old and cannot watch this R21 movie. The old lady said something like: maybe in China they will let you slide in. In Singapore this will not happen.\r\nWhile saying this. Two other staff(one Malay male and 1 female) was laughing behind the counter.\r\nWe feel so offended.\r\nAnd manager said ticket refund will take 2-3 weeks. What a joke.\r\nNever coming to this place again.', 1),
(88, 'cvanthoff1l@ted.com', 'Great customer service, although the waiting time for drinks order was a little longer. Nevertheless, it was a lovely environment, and it was such a great experience', 5),
(89, 'gbichenod@washingtonpost.com', 'There is no issue for tall ppl. If you are not tall enough... You may have free ppl head in front while watching movie. Can\'t believe this till happen on 2023. All the seats is almost same level.', 1),
(90, 'jwealthall13@sourceforge.net', 'It was the 1st time I have ever been to that cinema and I thought it was quite good! The only thing I would say is the actual places where you watch the film were really cold from having the air conditioning on full blast! If I went again I would definitely bring a jumper or wear a sweat shirt. The service was good and the staff were nice. I would however only say that the tickets were a bit expensive. I would ultimately still recommend and go back there again.', 4),
(91, 'kdecarolis16@prweb.com', ' Pretty good cinema. The food is good. Only thing i dislike is the carpet smell like dusty air. Not a fan for sensitive nose if i were to compare to other cinema.', 4),
(92, 'spolin20@taobao.com', 'This cinema is one of those historical cinemas in Singapore. Although being \"old\", it maintains very well its cleanliness, and packed itself with all the latest movies with spacious and comfortable seatings. Another good thing observed here is also the organisation employing senior citizens to give them chances to continue working even at their ages. One of my favourite theatres to visit!', 5),
(93, 'bgresch11@census.gov', 'This is the cinema for you and your viewing needs. The cinema is usually very quiet and a perfect place for movies if you want your personal space or with a loved one. The halls are quite spacious and the lighting is nice. There is usually no queue also at the box office and food and drinks counter which is a plus.', 5),
(94, 'fmacdwyerx@bizjournals.com', 'Love the spaciousness of the cinemas. There\'s definitely ample leg space for people to pass through. The seats are also pretty comfortable', 5),
(95, 'epickrills@unicef.org', 'Worst seating i have ever seen. The seating is worst than Scoot flights. There is hardly any leg room. The whole row of ppl had to move out to make way for ppl who wanted to go out during shows.. A proper cinema is expected to have some standards.', 1),
(96, 'dducrow5@t.co', 'Went to watch there twice. Both times Im satisfied with the hall condition.  As for beverages and purchase of popcorn shall have to wait awhile as they will serve u hot and nice.', 5),
(97, 'bperillop@quantcast.com', 'The cinema is clean, with facilities to bin litter. Proper signages are displayed for patrons. Snacks  can also be purchased on site. The cinema has vending machines conveniently placed for additional snacks. Air-conditioning was really good and the place was clean. The customer service staff though were not exactly friendly especially the gentleman manning the gate.  He seemed indifferent and did not bother to say \"\"welcome\"\" nor bothered to acknowledge my \"\"thank you\".', 4),
(98, 'omosebyu@51.la', 'Worst experience ever. They didn\'t even turn on the speakers. Only one speaker was working. It was like watching the movie in television. Don\'t bother wasting your money and coming, might as well go somewhere else or stay at home.', 1),
(99, 'mnewbury1a@admin.ch', 'There is certainly room for improvement for movie guest comforts and enjoyment.', 3),
(100, 'calliband1g@goo.ne.jp', 'Classic feel GREAT sound system. Only thing is the smell in the theatre. They can do more regular cleaning and the air con is too cold but other than that sound system is excellent    if the movie theatres location is not so complex I would give them 5 stars!', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roomplandb`
--

CREATE TABLE `roomplandb` (
  `roomID` int(1) DEFAULT NULL,
  `rows` int(2) DEFAULT NULL,
  `columns` int(2) DEFAULT NULL,
  `capacity` int(3) DEFAULT NULL,
  `movieID` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roomplandb`
--

INSERT INTO `roomplandb` (`roomID`, `rows`, `columns`, `capacity`, `movieID`) VALUES
(1, 5, 5, 25, 'Belle2021'),
(2, 7, 7, 49, 'Bubble2022'),
(3, 10, 10, 100, 'DeepSea2023'),
(4, 8, 5, 40, 'Scream2022'),
(5, 0, 0, 0, ''),
(6, 10, 7, 70, 'WeHaveaGhost2023');

-- --------------------------------------------------------

--
-- Table structure for table `roomspecification1`
--

CREATE TABLE `roomspecification1` (
  `roomID` int(1) DEFAULT NULL,
  `seatName` varchar(3) DEFAULT NULL,
  `rows` int(2) DEFAULT NULL,
  `columns` int(2) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `Section` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roomspecification1`
--

INSERT INTO `roomspecification1` (`roomID`, `seatName`, `rows`, `columns`, `status`, `Section`) VALUES
(1, 'A1', 1, 1, 0, 0),
(1, 'A2', 1, 2, 0, 0),
(1, 'A3', 1, 3, 0, 0),
(1, 'A4', 1, 4, 0, 0),
(1, 'A5', 1, 5, 0, 0),
(1, 'A6', 1, 6, 0, 0),
(1, 'A7', 1, 7, 0, 0),
(1, 'A8', 1, 8, 0, 0),
(1, 'A9', 1, 9, 0, 0),
(1, 'A10', 1, 10, 0, 0),
(1, 'B1', 2, 1, 0, 0),
(1, 'B2', 2, 2, 0, 0),
(1, 'B3', 2, 3, 0, 0),
(1, 'B4', 2, 4, 0, 0),
(1, 'B5', 2, 5, 0, 0),
(1, 'B6', 2, 6, 100, 0),
(1, 'B7', 2, 7, 100, 0),
(1, 'B8', 2, 8, 100, 0),
(1, 'B9', 2, 9, 100, 0),
(1, 'B10', 2, 10, 100, 0),
(1, 'C1', 3, 1, 0, 0),
(1, 'C2', 3, 2, 0, 0),
(1, 'C3', 3, 3, 0, 0),
(1, 'C4', 3, 4, 0, 0),
(1, 'C5', 3, 5, 0, 0),
(1, 'C6', 3, 6, 100, 0),
(1, 'C7', 3, 7, 100, 0),
(1, 'C8', 3, 8, 100, 0),
(1, 'C9', 3, 9, 100, 0),
(1, 'C10', 3, 10, 100, 0),
(1, 'D1', 4, 1, 0, 0),
(1, 'D2', 4, 2, 0, 0),
(1, 'D3', 4, 3, 0, 0),
(1, 'D4', 4, 4, 0, 0),
(1, 'D5', 4, 5, 0, 0),
(1, 'D6', 4, 6, 100, 0),
(1, 'D7', 4, 7, 100, 0),
(1, 'D8', 4, 8, 100, 0),
(1, 'D9', 4, 9, 100, 0),
(1, 'D10', 4, 10, 100, 0),
(1, 'E1', 5, 1, 0, 0),
(1, 'E2', 5, 2, 0, 0),
(1, 'E3', 5, 3, 0, 0),
(1, 'E4', 5, 4, 0, 0),
(1, 'E5', 5, 5, 0, 0),
(1, 'E6', 5, 6, 100, 0),
(1, 'E7', 5, 7, 100, 0),
(1, 'E8', 5, 8, 100, 0),
(1, 'E9', 5, 9, 100, 0),
(1, 'E10', 5, 10, 100, 0),
(1, 'F1', 6, 1, 100, 0),
(1, 'F2', 6, 2, 100, 0),
(1, 'F3', 6, 3, 100, 0),
(1, 'F4', 6, 4, 100, 0),
(1, 'F5', 6, 5, 100, 0),
(1, 'F6', 6, 6, 100, 0),
(1, 'F7', 6, 7, 100, 0),
(1, 'F8', 6, 8, 100, 0),
(1, 'F9', 6, 9, 100, 0),
(1, 'F10', 6, 10, 100, 0),
(1, 'G1', 7, 1, 100, 0),
(1, 'G2', 7, 2, 100, 0),
(1, 'G3', 7, 3, 100, 0),
(1, 'G4', 7, 4, 100, 0),
(1, 'G5', 7, 5, 100, 0),
(1, 'G6', 7, 6, 100, 0),
(1, 'G7', 7, 7, 100, 0),
(1, 'G8', 7, 8, 100, 0),
(1, 'G9', 7, 9, 100, 0),
(1, 'G10', 7, 10, 100, 0),
(1, 'H1', 8, 1, 100, 0),
(1, 'H2', 8, 2, 100, 0),
(1, 'H3', 8, 3, 100, 0),
(1, 'H4', 8, 4, 100, 0),
(1, 'H5', 8, 5, 100, 0),
(1, 'H6', 8, 6, 100, 0),
(1, 'H7', 8, 7, 100, 0),
(1, 'H8', 8, 8, 100, 0),
(1, 'H9', 8, 9, 100, 0),
(1, 'H10', 8, 10, 100, 0),
(1, 'I1', 9, 1, 100, 0),
(1, 'I2', 9, 2, 100, 0),
(1, 'I3', 9, 3, 100, 0),
(1, 'I4', 9, 4, 100, 0),
(1, 'I5', 9, 5, 100, 0),
(1, 'I6', 9, 6, 100, 0),
(1, 'I7', 9, 7, 100, 0),
(1, 'I8', 9, 8, 100, 0),
(1, 'I9', 9, 9, 100, 0),
(1, 'I10', 9, 10, 100, 0),
(1, 'J1', 10, 1, 100, 0),
(1, 'J2', 10, 2, 100, 0),
(1, 'J3', 10, 3, 100, 0),
(1, 'J4', 10, 4, 100, 0),
(1, 'J5', 10, 5, 100, 0),
(1, 'J6', 10, 6, 100, 0),
(1, 'J7', 10, 7, 100, 0),
(1, 'J8', 10, 8, 100, 0),
(1, 'J9', 10, 9, 100, 0),
(1, 'J10', 10, 10, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roomspecification2`
--

CREATE TABLE `roomspecification2` (
  `roomID` int(1) DEFAULT NULL,
  `seatName` varchar(3) DEFAULT NULL,
  `rows` int(2) DEFAULT NULL,
  `columns` int(2) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `Section` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roomspecification2`
--

INSERT INTO `roomspecification2` (`roomID`, `seatName`, `rows`, `columns`, `status`, `Section`) VALUES
(2, 'A1', 1, 1, 0, 0),
(2, 'A2', 1, 2, 0, 0),
(2, 'A3', 1, 3, 0, 0),
(2, 'A4', 1, 4, 0, 0),
(2, 'A5', 1, 5, 0, 0),
(2, 'A6', 1, 6, 0, 0),
(2, 'A7', 1, 7, 0, 0),
(2, 'A8', 1, 8, 100, 0),
(2, 'A9', 1, 9, 100, 0),
(2, 'A10', 1, 10, 100, 0),
(2, 'B1', 2, 1, 0, 0),
(2, 'B2', 2, 2, 0, 0),
(2, 'B3', 2, 3, 0, 0),
(2, 'B4', 2, 4, 0, 0),
(2, 'B5', 2, 5, 0, 0),
(2, 'B6', 2, 6, 0, 0),
(2, 'B7', 2, 7, 0, 0),
(2, 'B8', 2, 8, 100, 0),
(2, 'B9', 2, 9, 100, 0),
(2, 'B10', 2, 10, 100, 0),
(2, 'C1', 3, 1, 0, 0),
(2, 'C2', 3, 2, 0, 0),
(2, 'C3', 3, 3, 0, 0),
(2, 'C4', 3, 4, 0, 0),
(2, 'C5', 3, 5, 0, 0),
(2, 'C6', 3, 6, 0, 0),
(2, 'C7', 3, 7, 0, 0),
(2, 'C8', 3, 8, 100, 0),
(2, 'C9', 3, 9, 100, 0),
(2, 'C10', 3, 10, 100, 0),
(2, 'D1', 4, 1, 0, 0),
(2, 'D2', 4, 2, 0, 0),
(2, 'D3', 4, 3, 0, 0),
(2, 'D4', 4, 4, 0, 0),
(2, 'D5', 4, 5, 0, 0),
(2, 'D6', 4, 6, 0, 0),
(2, 'D7', 4, 7, 0, 0),
(2, 'D8', 4, 8, 100, 0),
(2, 'D9', 4, 9, 100, 0),
(2, 'D10', 4, 10, 100, 0),
(2, 'E1', 5, 1, 0, 0),
(2, 'E2', 5, 2, 0, 0),
(2, 'E3', 5, 3, 0, 0),
(2, 'E4', 5, 4, 0, 0),
(2, 'E5', 5, 5, 0, 0),
(2, 'E6', 5, 6, 0, 0),
(2, 'E7', 5, 7, 0, 0),
(2, 'E8', 5, 8, 100, 0),
(2, 'E9', 5, 9, 100, 0),
(2, 'E10', 5, 10, 100, 0),
(2, 'F1', 6, 1, 0, 0),
(2, 'F2', 6, 2, 0, 0),
(2, 'F3', 6, 3, 0, 0),
(2, 'F4', 6, 4, 0, 0),
(2, 'F5', 6, 5, 0, 0),
(2, 'F6', 6, 6, 0, 0),
(2, 'F7', 6, 7, 0, 0),
(2, 'F8', 6, 8, 100, 0),
(2, 'F9', 6, 9, 100, 0),
(2, 'F10', 6, 10, 100, 0),
(2, 'G1', 7, 1, 0, 0),
(2, 'G2', 7, 2, 0, 0),
(2, 'G3', 7, 3, 0, 0),
(2, 'G4', 7, 4, 0, 0),
(2, 'G5', 7, 5, 0, 0),
(2, 'G6', 7, 6, 0, 0),
(2, 'G7', 7, 7, 0, 0),
(2, 'G8', 7, 8, 100, 0),
(2, 'G9', 7, 9, 100, 0),
(2, 'G10', 7, 10, 100, 0),
(2, 'H1', 8, 1, 100, 0),
(2, 'H2', 8, 2, 100, 0),
(2, 'H3', 8, 3, 100, 0),
(2, 'H4', 8, 4, 100, 0),
(2, 'H5', 8, 5, 100, 0),
(2, 'H6', 8, 6, 100, 0),
(2, 'H7', 8, 7, 100, 0),
(2, 'H8', 8, 8, 100, 0),
(2, 'H9', 8, 9, 100, 0),
(2, 'H10', 8, 10, 100, 0),
(2, 'I1', 9, 1, 100, 0),
(2, 'I2', 9, 2, 100, 0),
(2, 'I3', 9, 3, 100, 0),
(2, 'I4', 9, 4, 100, 0),
(2, 'I5', 9, 5, 100, 0),
(2, 'I6', 9, 6, 100, 0),
(2, 'I7', 9, 7, 100, 0),
(2, 'I8', 9, 8, 100, 0),
(2, 'I9', 9, 9, 100, 0),
(2, 'I10', 9, 10, 100, 0),
(2, 'J1', 10, 1, 100, 0),
(2, 'J2', 10, 2, 100, 0),
(2, 'J3', 10, 3, 100, 0),
(2, 'J4', 10, 4, 100, 0),
(2, 'J5', 10, 5, 100, 0),
(2, 'J6', 10, 6, 100, 0),
(2, 'J7', 10, 7, 100, 0),
(2, 'J8', 10, 8, 100, 0),
(2, 'J9', 10, 9, 100, 0),
(2, 'J10', 10, 10, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roomspecification3`
--

CREATE TABLE `roomspecification3` (
  `roomID` int(1) DEFAULT NULL,
  `seatName` varchar(3) DEFAULT NULL,
  `rows` int(2) DEFAULT NULL,
  `columns` int(2) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `Section` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roomspecification3`
--

INSERT INTO `roomspecification3` (`roomID`, `seatName`, `rows`, `columns`, `status`, `Section`) VALUES
(3, 'A1', 1, 1, 0, 0),
(3, 'A2', 1, 2, 0, 0),
(3, 'A3', 1, 3, 0, 0),
(3, 'A4', 1, 4, 0, 0),
(3, 'A5', 1, 5, 0, 0),
(3, 'A6', 1, 6, 0, 0),
(3, 'A7', 1, 7, 0, 0),
(3, 'A8', 1, 8, 0, 0),
(3, 'A9', 1, 9, 0, 0),
(3, 'A10', 1, 10, 0, 0),
(3, 'B1', 2, 1, 0, 0),
(3, 'B2', 2, 2, 0, 0),
(3, 'B3', 2, 3, 0, 0),
(3, 'B4', 2, 4, 0, 0),
(3, 'B5', 2, 5, 0, 0),
(3, 'B6', 2, 6, 0, 0),
(3, 'B7', 2, 7, 0, 0),
(3, 'B8', 2, 8, 0, 0),
(3, 'B9', 2, 9, 0, 0),
(3, 'B10', 2, 10, 0, 0),
(3, 'C1', 3, 1, 0, 0),
(3, 'C2', 3, 2, 0, 0),
(3, 'C3', 3, 3, 0, 0),
(3, 'C4', 3, 4, 0, 0),
(3, 'C5', 3, 5, 0, 0),
(3, 'C6', 3, 6, 0, 0),
(3, 'C7', 3, 7, 0, 0),
(3, 'C8', 3, 8, 0, 0),
(3, 'C9', 3, 9, 0, 0),
(3, 'C10', 3, 10, 0, 0),
(3, 'D1', 4, 1, 0, 0),
(3, 'D2', 4, 2, 0, 0),
(3, 'D3', 4, 3, 0, 0),
(3, 'D4', 4, 4, 0, 0),
(3, 'D5', 4, 5, 0, 0),
(3, 'D6', 4, 6, 0, 0),
(3, 'D7', 4, 7, 0, 0),
(3, 'D8', 4, 8, 0, 0),
(3, 'D9', 4, 9, 0, 0),
(3, 'D10', 4, 10, 0, 0),
(3, 'E1', 5, 1, 0, 0),
(3, 'E2', 5, 2, 0, 0),
(3, 'E3', 5, 3, 0, 0),
(3, 'E4', 5, 4, 0, 0),
(3, 'E5', 5, 5, 0, 0),
(3, 'E6', 5, 6, 0, 0),
(3, 'E7', 5, 7, 0, 0),
(3, 'E8', 5, 8, 0, 0),
(3, 'E9', 5, 9, 0, 0),
(3, 'E10', 5, 10, 0, 0),
(3, 'F1', 6, 1, 0, 0),
(3, 'F2', 6, 2, 0, 0),
(3, 'F3', 6, 3, 0, 0),
(3, 'F4', 6, 4, 0, 0),
(3, 'F5', 6, 5, 0, 0),
(3, 'F6', 6, 6, 0, 0),
(3, 'F7', 6, 7, 0, 0),
(3, 'F8', 6, 8, 0, 0),
(3, 'F9', 6, 9, 0, 0),
(3, 'F10', 6, 10, 0, 0),
(3, 'G1', 7, 1, 0, 0),
(3, 'G2', 7, 2, 0, 0),
(3, 'G3', 7, 3, 0, 0),
(3, 'G4', 7, 4, 0, 0),
(3, 'G5', 7, 5, 0, 0),
(3, 'G6', 7, 6, 0, 0),
(3, 'G7', 7, 7, 0, 0),
(3, 'G8', 7, 8, 0, 0),
(3, 'G9', 7, 9, 0, 0),
(3, 'G10', 7, 10, 0, 0),
(3, 'H1', 8, 1, 0, 0),
(3, 'H2', 8, 2, 0, 0),
(3, 'H3', 8, 3, 0, 0),
(3, 'H4', 8, 4, 0, 0),
(3, 'H5', 8, 5, 0, 0),
(3, 'H6', 8, 6, 0, 0),
(3, 'H7', 8, 7, 0, 0),
(3, 'H8', 8, 8, 0, 0),
(3, 'H9', 8, 9, 0, 0),
(3, 'H10', 8, 10, 0, 0),
(3, 'I1', 9, 1, 0, 0),
(3, 'I2', 9, 2, 0, 0),
(3, 'I3', 9, 3, 0, 0),
(3, 'I4', 9, 4, 0, 0),
(3, 'I5', 9, 5, 0, 0),
(3, 'I6', 9, 6, 0, 0),
(3, 'I7', 9, 7, 0, 0),
(3, 'I8', 9, 8, 0, 0),
(3, 'I9', 9, 9, 0, 0),
(3, 'I10', 9, 10, 0, 0),
(3, 'J1', 10, 1, 0, 0),
(3, 'J2', 10, 2, 0, 0),
(3, 'J3', 10, 3, 0, 0),
(3, 'J4', 10, 4, 0, 0),
(3, 'J5', 10, 5, 0, 0),
(3, 'J6', 10, 6, 0, 0),
(3, 'J7', 10, 7, 0, 0),
(3, 'J8', 10, 8, 0, 0),
(3, 'J9', 10, 9, 0, 0),
(3, 'J10', 10, 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roomspecification4`
--

CREATE TABLE `roomspecification4` (
  `roomID` int(1) DEFAULT NULL,
  `seatName` varchar(3) DEFAULT NULL,
  `rows` int(2) DEFAULT NULL,
  `columns` int(2) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `Section` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roomspecification4`
--

INSERT INTO `roomspecification4` (`roomID`, `seatName`, `rows`, `columns`, `status`, `Section`) VALUES
(4, 'A1', 1, 1, 0, 0),
(4, 'A2', 1, 2, 0, 0),
(4, 'A3', 1, 3, 0, 0),
(4, 'A4', 1, 4, 0, 0),
(4, 'A5', 1, 5, 0, 0),
(4, 'A6', 1, 6, 100, 0),
(4, 'A7', 1, 7, 100, 0),
(4, 'A8', 1, 8, 100, 0),
(4, 'A9', 1, 9, 100, 0),
(4, 'A10', 1, 10, 100, 0),
(4, 'B1', 2, 1, 0, 0),
(4, 'B2', 2, 2, 0, 0),
(4, 'B3', 2, 3, 0, 0),
(4, 'B4', 2, 4, 0, 0),
(4, 'B5', 2, 5, 0, 0),
(4, 'B6', 2, 6, 100, 0),
(4, 'B7', 2, 7, 100, 0),
(4, 'B8', 2, 8, 100, 0),
(4, 'B9', 2, 9, 100, 0),
(4, 'B10', 2, 10, 100, 0),
(4, 'C1', 3, 1, 0, 0),
(4, 'C2', 3, 2, 0, 0),
(4, 'C3', 3, 3, 0, 0),
(4, 'C4', 3, 4, 0, 0),
(4, 'C5', 3, 5, 0, 0),
(4, 'C6', 3, 6, 100, 0),
(4, 'C7', 3, 7, 100, 0),
(4, 'C8', 3, 8, 100, 0),
(4, 'C9', 3, 9, 100, 0),
(4, 'C10', 3, 10, 100, 0),
(4, 'D1', 4, 1, 0, 0),
(4, 'D2', 4, 2, 0, 0),
(4, 'D3', 4, 3, 0, 0),
(4, 'D4', 4, 4, 0, 0),
(4, 'D5', 4, 5, 0, 0),
(4, 'D6', 4, 6, 100, 0),
(4, 'D7', 4, 7, 100, 0),
(4, 'D8', 4, 8, 100, 0),
(4, 'D9', 4, 9, 100, 0),
(4, 'D10', 4, 10, 100, 0),
(4, 'E1', 5, 1, 0, 0),
(4, 'E2', 5, 2, 0, 0),
(4, 'E3', 5, 3, 0, 0),
(4, 'E4', 5, 4, 0, 0),
(4, 'E5', 5, 5, 0, 0),
(4, 'E6', 5, 6, 100, 0),
(4, 'E7', 5, 7, 100, 0),
(4, 'E8', 5, 8, 100, 0),
(4, 'E9', 5, 9, 100, 0),
(4, 'E10', 5, 10, 100, 0),
(4, 'F1', 6, 1, 0, 0),
(4, 'F2', 6, 2, 0, 0),
(4, 'F3', 6, 3, 0, 0),
(4, 'F4', 6, 4, 0, 0),
(4, 'F5', 6, 5, 0, 0),
(4, 'F6', 6, 6, 100, 0),
(4, 'F7', 6, 7, 100, 0),
(4, 'F8', 6, 8, 100, 0),
(4, 'F9', 6, 9, 100, 0),
(4, 'F10', 6, 10, 100, 0),
(4, 'G1', 7, 1, 0, 0),
(4, 'G2', 7, 2, 0, 0),
(4, 'G3', 7, 3, 0, 0),
(4, 'G4', 7, 4, 0, 0),
(4, 'G5', 7, 5, 0, 0),
(4, 'G6', 7, 6, 100, 0),
(4, 'G7', 7, 7, 100, 0),
(4, 'G8', 7, 8, 100, 0),
(4, 'G9', 7, 9, 100, 0),
(4, 'G10', 7, 10, 100, 0),
(4, 'H1', 8, 1, 0, 0),
(4, 'H2', 8, 2, 0, 0),
(4, 'H3', 8, 3, 0, 0),
(4, 'H4', 8, 4, 0, 0),
(4, 'H5', 8, 5, 0, 0),
(4, 'H6', 8, 6, 100, 0),
(4, 'H7', 8, 7, 100, 0),
(4, 'H8', 8, 8, 100, 0),
(4, 'H9', 8, 9, 100, 0),
(4, 'H10', 8, 10, 100, 0),
(4, 'I1', 9, 1, 100, 0),
(4, 'I2', 9, 2, 100, 0),
(4, 'I3', 9, 3, 100, 0),
(4, 'I4', 9, 4, 100, 0),
(4, 'I5', 9, 5, 100, 0),
(4, 'I6', 9, 6, 100, 0),
(4, 'I7', 9, 7, 100, 0),
(4, 'I8', 9, 8, 100, 0),
(4, 'I9', 9, 9, 100, 0),
(4, 'I10', 9, 10, 100, 0),
(4, 'J1', 10, 1, 100, 0),
(4, 'J2', 10, 2, 100, 0),
(4, 'J3', 10, 3, 100, 0),
(4, 'J4', 10, 4, 100, 0),
(4, 'J5', 10, 5, 100, 0),
(4, 'J6', 10, 6, 100, 0),
(4, 'J7', 10, 7, 100, 0),
(4, 'J8', 10, 8, 100, 0),
(4, 'J9', 10, 9, 100, 0),
(4, 'J10', 10, 10, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roomspecification5`
--

CREATE TABLE `roomspecification5` (
  `roomID` int(1) DEFAULT NULL,
  `seatName` varchar(3) DEFAULT NULL,
  `rows` int(2) DEFAULT NULL,
  `columns` int(2) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `Section` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roomspecification5`
--

INSERT INTO `roomspecification5` (`roomID`, `seatName`, `rows`, `columns`, `status`, `Section`) VALUES
(5, 'A1', 1, 1, 100, 0),
(5, 'A2', 1, 2, 100, 0),
(5, 'A3', 1, 3, 100, 0),
(5, 'A4', 1, 4, 100, 0),
(5, 'A5', 1, 5, 100, 0),
(5, 'A6', 1, 6, 100, 0),
(5, 'A7', 1, 7, 100, 0),
(5, 'A8', 1, 8, 100, 0),
(5, 'A9', 1, 9, 100, 0),
(5, 'A10', 1, 10, 100, 0),
(5, 'B1', 2, 1, 100, 0),
(5, 'B2', 2, 2, 100, 0),
(5, 'B3', 2, 3, 100, 0),
(5, 'B4', 2, 4, 100, 0),
(5, 'B5', 2, 5, 100, 0),
(5, 'B6', 2, 6, 100, 0),
(5, 'B7', 2, 7, 100, 0),
(5, 'B8', 2, 8, 100, 0),
(5, 'B9', 2, 9, 100, 0),
(5, 'B10', 2, 10, 100, 0),
(5, 'C1', 3, 1, 100, 0),
(5, 'C2', 3, 2, 100, 0),
(5, 'C3', 3, 3, 100, 0),
(5, 'C4', 3, 4, 100, 0),
(5, 'C5', 3, 5, 100, 0),
(5, 'C6', 3, 6, 100, 0),
(5, 'C7', 3, 7, 100, 0),
(5, 'C8', 3, 8, 100, 0),
(5, 'C9', 3, 9, 100, 0),
(5, 'C10', 3, 10, 100, 0),
(5, 'D1', 4, 1, 100, 0),
(5, 'D2', 4, 2, 100, 0),
(5, 'D3', 4, 3, 100, 0),
(5, 'D4', 4, 4, 100, 0),
(5, 'D5', 4, 5, 100, 0),
(5, 'D6', 4, 6, 100, 0),
(5, 'D7', 4, 7, 100, 0),
(5, 'D8', 4, 8, 100, 0),
(5, 'D9', 4, 9, 100, 0),
(5, 'D10', 4, 10, 100, 0),
(5, 'E1', 5, 1, 100, 0),
(5, 'E2', 5, 2, 100, 0),
(5, 'E3', 5, 3, 100, 0),
(5, 'E4', 5, 4, 100, 0),
(5, 'E5', 5, 5, 100, 0),
(5, 'E6', 5, 6, 100, 0),
(5, 'E7', 5, 7, 100, 0),
(5, 'E8', 5, 8, 100, 0),
(5, 'E9', 5, 9, 100, 0),
(5, 'E10', 5, 10, 100, 0),
(5, 'F1', 6, 1, 100, 0),
(5, 'F2', 6, 2, 100, 0),
(5, 'F3', 6, 3, 100, 0),
(5, 'F4', 6, 4, 100, 0),
(5, 'F5', 6, 5, 100, 0),
(5, 'F6', 6, 6, 100, 0),
(5, 'F7', 6, 7, 100, 0),
(5, 'F8', 6, 8, 100, 0),
(5, 'F9', 6, 9, 100, 0),
(5, 'F10', 6, 10, 100, 0),
(5, 'G1', 7, 1, 100, 0),
(5, 'G2', 7, 2, 100, 0),
(5, 'G3', 7, 3, 100, 0),
(5, 'G4', 7, 4, 100, 0),
(5, 'G5', 7, 5, 100, 0),
(5, 'G6', 7, 6, 100, 0),
(5, 'G7', 7, 7, 100, 0),
(5, 'G8', 7, 8, 100, 0),
(5, 'G9', 7, 9, 100, 0),
(5, 'G10', 7, 10, 100, 0),
(5, 'H1', 8, 1, 100, 0),
(5, 'H2', 8, 2, 100, 0),
(5, 'H3', 8, 3, 100, 0),
(5, 'H4', 8, 4, 100, 0),
(5, 'H5', 8, 5, 100, 0),
(5, 'H6', 8, 6, 100, 0),
(5, 'H7', 8, 7, 100, 0),
(5, 'H8', 8, 8, 100, 0),
(5, 'H9', 8, 9, 100, 0),
(5, 'H10', 8, 10, 100, 0),
(5, 'I1', 9, 1, 100, 0),
(5, 'I2', 9, 2, 100, 0),
(5, 'I3', 9, 3, 100, 0),
(5, 'I4', 9, 4, 100, 0),
(5, 'I5', 9, 5, 100, 0),
(5, 'I6', 9, 6, 100, 0),
(5, 'I7', 9, 7, 100, 0),
(5, 'I8', 9, 8, 100, 0),
(5, 'I9', 9, 9, 100, 0),
(5, 'I10', 9, 10, 100, 0),
(5, 'J1', 10, 1, 100, 0),
(5, 'J2', 10, 2, 100, 0),
(5, 'J3', 10, 3, 100, 0),
(5, 'J4', 10, 4, 100, 0),
(5, 'J5', 10, 5, 100, 0),
(5, 'J6', 10, 6, 100, 0),
(5, 'J7', 10, 7, 100, 0),
(5, 'J8', 10, 8, 100, 0),
(5, 'J9', 10, 9, 100, 0),
(5, 'J10', 10, 10, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roomspecification6`
--

CREATE TABLE `roomspecification6` (
  `roomID` int(1) DEFAULT NULL,
  `seatName` varchar(3) DEFAULT NULL,
  `rows` int(2) DEFAULT NULL,
  `columns` int(2) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `Section` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roomspecification6`
--

INSERT INTO `roomspecification6` (`roomID`, `seatName`, `rows`, `columns`, `status`, `Section`) VALUES
(6, 'A1', 1, 1, 0, 0),
(6, 'A2', 1, 2, 0, 0),
(6, 'A3', 1, 3, 0, 0),
(6, 'A4', 1, 4, 0, 0),
(6, 'A5', 1, 5, 0, 0),
(6, 'A6', 1, 6, 0, 0),
(6, 'A7', 1, 7, 0, 0),
(6, 'A8', 1, 8, 100, 0),
(6, 'A9', 1, 9, 100, 0),
(6, 'A10', 1, 10, 100, 0),
(6, 'B1', 2, 1, 0, 0),
(6, 'B2', 2, 2, 0, 0),
(6, 'B3', 2, 3, 0, 0),
(6, 'B4', 2, 4, 0, 0),
(6, 'B5', 2, 5, 0, 0),
(6, 'B6', 2, 6, 0, 0),
(6, 'B7', 2, 7, 0, 0),
(6, 'B8', 2, 8, 100, 0),
(6, 'B9', 2, 9, 100, 0),
(6, 'B10', 2, 10, 100, 0),
(6, 'C1', 3, 1, 0, 0),
(6, 'C2', 3, 2, 0, 0),
(6, 'C3', 3, 3, 0, 0),
(6, 'C4', 3, 4, 0, 0),
(6, 'C5', 3, 5, 0, 0),
(6, 'C6', 3, 6, 0, 0),
(6, 'C7', 3, 7, 0, 0),
(6, 'C8', 3, 8, 100, 0),
(6, 'C9', 3, 9, 100, 0),
(6, 'C10', 3, 10, 100, 0),
(6, 'D1', 4, 1, 0, 0),
(6, 'D2', 4, 2, 0, 0),
(6, 'D3', 4, 3, 0, 0),
(6, 'D4', 4, 4, 0, 0),
(6, 'D5', 4, 5, 0, 0),
(6, 'D6', 4, 6, 0, 0),
(6, 'D7', 4, 7, 0, 0),
(6, 'D8', 4, 8, 100, 0),
(6, 'D9', 4, 9, 100, 0),
(6, 'D10', 4, 10, 100, 0),
(6, 'E1', 5, 1, 0, 0),
(6, 'E2', 5, 2, 0, 0),
(6, 'E3', 5, 3, 0, 0),
(6, 'E4', 5, 4, 0, 0),
(6, 'E5', 5, 5, 0, 0),
(6, 'E6', 5, 6, 0, 0),
(6, 'E7', 5, 7, 0, 0),
(6, 'E8', 5, 8, 100, 0),
(6, 'E9', 5, 9, 100, 0),
(6, 'E10', 5, 10, 100, 0),
(6, 'F1', 6, 1, 0, 0),
(6, 'F2', 6, 2, 0, 0),
(6, 'F3', 6, 3, 0, 0),
(6, 'F4', 6, 4, 0, 0),
(6, 'F5', 6, 5, 0, 0),
(6, 'F6', 6, 6, 0, 0),
(6, 'F7', 6, 7, 0, 0),
(6, 'F8', 6, 8, 100, 0),
(6, 'F9', 6, 9, 100, 0),
(6, 'F10', 6, 10, 100, 0),
(6, 'G1', 7, 1, 0, 0),
(6, 'G2', 7, 2, 0, 0),
(6, 'G3', 7, 3, 0, 0),
(6, 'G4', 7, 4, 0, 0),
(6, 'G5', 7, 5, 0, 0),
(6, 'G6', 7, 6, 0, 0),
(6, 'G7', 7, 7, 0, 0),
(6, 'G8', 7, 8, 100, 0),
(6, 'G9', 7, 9, 100, 0),
(6, 'G10', 7, 10, 100, 0),
(6, 'H1', 8, 1, 0, 0),
(6, 'H2', 8, 2, 0, 0),
(6, 'H3', 8, 3, 0, 0),
(6, 'H4', 8, 4, 0, 0),
(6, 'H5', 8, 5, 0, 0),
(6, 'H6', 8, 6, 0, 0),
(6, 'H7', 8, 7, 0, 0),
(6, 'H8', 8, 8, 100, 0),
(6, 'H9', 8, 9, 100, 0),
(6, 'H10', 8, 10, 100, 0),
(6, 'I1', 9, 1, 0, 0),
(6, 'I2', 9, 2, 0, 0),
(6, 'I3', 9, 3, 0, 0),
(6, 'I4', 9, 4, 0, 0),
(6, 'I5', 9, 5, 0, 0),
(6, 'I6', 9, 6, 0, 0),
(6, 'I7', 9, 7, 0, 0),
(6, 'I8', 9, 8, 100, 0),
(6, 'I9', 9, 9, 100, 0),
(6, 'I10', 9, 10, 100, 0),
(6, 'J1', 10, 1, 0, 0),
(6, 'J2', 10, 2, 0, 0),
(6, 'J3', 10, 3, 0, 0),
(6, 'J4', 10, 4, 0, 0),
(6, 'J5', 10, 5, 0, 0),
(6, 'J6', 10, 6, 0, 0),
(6, 'J7', 10, 7, 0, 0),
(6, 'J8', 10, 8, 100, 0),
(6, 'J9', 10, 9, 100, 0),
(6, 'J10', 10, 10, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffdb`
--

CREATE TABLE `staffdb` (
  `phoneNo` int(8) DEFAULT NULL,
  `username` varchar(11) DEFAULT NULL,
  `hashedPassw` varchar(64) DEFAULT NULL,
  `email` varchar(26) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `aUsername` varchar(8) DEFAULT NULL,
  `dateLastModified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `staffdb`
--

INSERT INTO `staffdb` (`phoneNo`, `username`, `hashedPassw`, `email`, `age`, `aUsername`, `dateLastModified`) VALUES
(88260384, 'bmuston15', '4b4ff948b77f9bca76d5c37c643475b693f76d2dad92f8c1331d4be62f416e01', 'lputterill15@wordpress.com', 52, 'cheildsj', '2023-01-03'),
(88369025, 'cdickie2j', 'de017288dd8f0c1dd0631929c7f33ddc0a01324c50bd0073f858e024297f2120', 'ebriscam2j@yale.edu', 49, 'cheildsj', '2023-02-15'),
(96900162, 'crosson9', '4d248efb678cdcf1f4e331e84ce277a459a140846b39a09cf7ccf3d60546b7f4', 'jsoftley9@google.de', 52, 'cheildsj', '2022-12-04'),
(91228787, 'ctenant1e', '1eedda9ec1ed6af82f58055049432e234eb67f02221b1aaf4d0b91a1a9075338', 'jjozwiak1e@alibaba.com', 44, 'cheildsj', '2023-01-24'),
(86596667, 'ctwist2a', 'af85567279a8bba4d01a4ff80e6de43cbad65a2199f490103ee1762986c577e9', 'jdines2a@flickr.com', 20, 'cheildsj', '2023-03-27'),
(99813438, 'dhamments2k', '3b24ccb85b2054609fec380e9a9604e9240bbb4cf575c6bb732c2d02b250bfff', 'tmcgilvra2k@slideshare.net', 28, 'cheildsj', '2023-05-08'),
(92592387, 'fcotelard22', 'f00ddf76c40b758ae64ebb671d27efd6ec7dcadefcd1508ff2dd195e58ffe3f2', 'cfrain22@oaic.gov.au', 69, 'cheildsj', '2023-05-04'),
(88748262, 'gacosta1y', 'be126262687e91793f64c12e42a93bec680ae749ea9951583a2f86c4e636e69e', 'dliger1y@icq.com', 74, 'cheildsj', '2022-12-04'),
(86761157, 'mkeast1u', '8f59e32bf56fb8be869ef2654240608a4f860d85680502032e6b583cc7754d64', 'cbrafferton1u@e-recht24.de', 18, 'cheildsj', '2023-04-08'),
(82243232, 'neasseby2m', '440799d959600956f747c3fa346dc6fdfa22d08aee5db6386cf18cb4b3316c22', 'biddon2m@godaddy.com', 65, 'cheildsj', '2023-04-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdb`
--
ALTER TABLE `bookingdb`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `reviewsdb`
--
ALTER TABLE `reviewsdb`
  ADD PRIMARY KEY (`reviewID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdb`
--
ALTER TABLE `bookingdb`
  MODIFY `bookingID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviewsdb`
--
ALTER TABLE `reviewsdb`
  MODIFY `reviewID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
