-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2020 at 03:55 PM
-- Server version: 5.6.45-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schemefu_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliate`
--

CREATE TABLE `affiliate` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `fossorg_id` text NOT NULL,
  `affliate` text NOT NULL,
  `FOSSOrgC_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affiliate`
--

INSERT INTO `affiliate` (`id`, `user_id`, `fossorg_id`, `affliate`, `FOSSOrgC_id`) VALUES
(10, '5546', '\"45,53\"', '\"45,53\"', ''),
(11, '4629', '\"45\"', '\"45\"', ''),
(12, '4321', '\"73\"', '\"73\"', ''),
(13, '4321', '\"73,29\"', '\"73,29\"', ''),
(14, '4321', '\"73\"', '\"73\"', ''),
(15, '4321', '\"73,31,29\"', '\"73,31,29\"', ''),
(16, '4321', '\"73\"', '\"73\"', ''),
(17, '4321', '\"73,29\"', '\"73,29\"', ''),
(18, '4321', '\"73\"', '\"73\"', ''),
(19, '4321', '\"73\"', '\"73\"', ''),
(20, '8053', '\"73\"', '\"73\"', ''),
(21, '2641', '\"73\"', '\"73\"', ''),
(22, '4867', '\"73\"', '\"73\"', ''),
(23, '835', '\"22,73,31,53,50\"', '\"22,73,31,53,50\"', ''),
(24, '4765', '\"73,53\"', '\"73,53\"', ''),
(25, '4684', '\"73\"', '\"73\"', ''),
(26, '9012', '\"29\"', '\"29\"', ''),
(27, '4115', '\"29\"', '\"29\"', ''),
(28, '146', '\"29\"', '\"29\"', ''),
(29, '6596', '\"45,67\"', '\"45,67\"', ''),
(30, '794', '', '', ''),
(31, '6929', '', '', ''),
(32, '8015', '\"61,97,22,22,64,45,87,63,75,69,92,36,67,73,29,58\"', '\"61,97,22,22,64,45,87,63,75,69,92,36,67,73,29,58\"', ''),
(33, '6264', '\"73\"', '\"73\"', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `secondary_email` varchar(250) NOT NULL,
  `street` text NOT NULL,
  `zip` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `coordinates` text NOT NULL,
  `country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `company_name`, `website`, `phone`, `secondary_email`, `street`, `zip`, `city`, `state`, `coordinates`, `country`) VALUES
(3, '4765', 'Noble Contracts', '', '07031525786', 'noblesomto1@gmail.com', 'Ndufu Alike Ikwo', '1209', 'Abakaliki', 'Ebonyi', '', 'Australia'),
(4, '4684', 'Islamic University in Uganda', 'www.iuiu.ac.ug', '+256756321183', 'ismailmsettenda@iuiu.ac.ug', 'Nkoma', '25641', 'Kampala', 'Mbale', '', 'Uganda'),
(5, '6596', '', 'htps://frenchies.org', '+231 900880004', 'Johnson@frenchies.org', '44 Ameski Boski Street', '400005', 'West Brom', 'Imo State', '', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `email_table`
--

CREATE TABLE `email_table` (
  `id` int(11) NOT NULL,
  `email` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_table`
--

INSERT INTO `email_table` (`id`, `email`) VALUES
(1, 'a.mhawila@gmail.com'),
(2, 'abdelkader.allam@gmail.com'),
(3, 'abdisweet@gmail.com'),
(4, 'abdou.kitoyi@gmail.com'),
(5, 'abdulaims@gmail.com'),
(6, 'abokk@yahoo.com'),
(7, 'abraham.ahose@gmail.com'),
(8, 'adamou.nacer@gmail.com'),
(9, 'adewumis@gmail.com'),
(10, 'agbemenu@gmail.com'),
(11, 'aidenk2@gmail.com'),
(12, 'ajijola@consultancyss.com'),
(13, 'alhassan.aliyu@udusok.edu.ng'),
(14, 'alioune.diallo@gmail.com'),
(15, 'allencq@gmail.com'),
(16, 'alowolodu@futa.edu.ng'),
(17, 'alphoncemassaga1@gmail.com'),
(18, 'amadou.ouabanaize@uta.ne'),
(19, 'amazanake@gmail.com'),
(20, 'amehlive@gmail.com'),
(21, 'amessinoukossi@gmail.com'),
(22, 'ameukam@gmail.com'),
(23, 'anaobii@gmail.com'),
(24, 'anriette@apc.org'),
(25, 'antoninbenoit@gmail.com'),
(26, 'arifa.khatoon@gmail.com'),
(27, 'arthurbuliva@gmail.com'),
(28, 'asteway.negash@gmail.com'),
(29, 'atheneumrm@gmail.com'),
(30, 'attoukarim@gmail.com'),
(31, 'awbile@gmail.com'),
(32, 'ayokupoluyi@futa.edu.ng'),
(33, 'bacamara@gmail.com'),
(34, 'balthas.seibold@giz.de'),
(35, 'banda@zambia.co.zm'),
(36, 'barassah@gmail.com'),
(37, 'benjijorp3@gmail.com'),
(38, 'bernardojengwa@gmail.com'),
(39, 'biaous2002@gmail.com'),
(40, 'Bilikisg@yahoo.com'),
(41, 'binetoukd@gmail.com'),
(42, 'boaz@ugo.co.ug'),
(43, 'bobjolliffe@gmail.com'),
(44, 'bosiyale@yahoo.co.uk'),
(45, 'brian.sikute@gmail.com'),
(46, 'brian@pixie.co.ke'),
(47, 'brianbirario1@gmail.com'),
(48, 'cctsodzo@gmail.com'),
(49, 'cgithinji@mu.ac.ke'),
(50, 'cheickomar@gmail.com'),
(51, 'cheikh.diop@madinainfotech.com'),
(52, 'chezlafempet@yahoo.com'),
(53, 'chinedu.ohanyido@gmail.com'),
(54, 'chinonsochime@gmail.com'),
(55, 'chris.mulola@gmail.com'),
(56, 'christian.ahiauzu@uniport.edu.ng'),
(57, 'christianbope@gmail.com'),
(58, 'chrisvwn@yahoo.co.uk'),
(59, 'clamtwa@gmail.com'),
(60, 'cn.njilou@gmail.com'),
(61, 'cockyloren@gmail.com'),
(62, 'cyrdansou@gmail.com'),
(63, 'danielniji@uccmail.co.tz'),
(64, 'dapo@ladimeji.co.uk'),
(65, 'darmpofu@gmail.com'),
(66, 'debetsaleel@gmail.com'),
(67, 'deji.fatunla@gmail.com'),
(68, 'dele.deneri@gmail.com'),
(69, 'dele@osfon.org.ng'),
(70, 'dennis.lupiana@gmail.com'),
(71, 'dennismhango@gmail.com'),
(72, 'denver@abitubdesign.com'),
(73, 'depacesetter@gmail.com'),
(74, 'dextor2010@gmail.com'),
(75, 'dgdorothydg@gmail.com'),
(76, 'diall.sekou@gmail.com'),
(77, 'dicksonfully@trcofliberia.org'),
(78, 'djerobendoban@yahoo.fr'),
(79, 'dmmabiria@gmail.com'),
(80, 'dndannang@gmail.com'),
(81, 'doowo@yahoo.com'),
(82, 'doumfloride@gmail.com'),
(83, 'edoosadebay@yahoo.com'),
(84, 'edwinokugbo@gmail.com'),
(85, 'egsmwa@gmail.com'),
(86, 'elaiho@gmail.com'),
(87, 'elichiso@gmail.com'),
(88, 'elvis.ogutu@gmail.com'),
(89, 'emanuel.feruzi@trilabs.co.tz'),
(90, 'emmanuelsey@gmail.com'),
(91, 'enockseth@gmail.com'),
(92, 'eoseiakoto@gmail.com'),
(93, 'eroemma@gmail.com'),
(94, 'eseyino@unijos.edu.ng'),
(95, 'eseyinolamide@gmail.com'),
(96, 'excellentdaodu@gmail.com'),
(97, 'eyuel.gessese@gmail.com'),
(98, 'f.attikpo@gmail.com'),
(99, 'famo.youla@inetguinee.com'),
(100, 'famponsah@mail.com'),
(101, 'felix@sukums.co.tz'),
(102, 'felixkchiwela@gmail.com'),
(103, 'fiakre@gmail.com'),
(104, 'fngalawa@irdp.ac.tz'),
(105, 'folagunju@ecowas.int'),
(106, 'fortune.backoulas@gmail.com'),
(107, 'foss4life@gmail.com'),
(108, 'fossfa@cyril.cc'),
(109, 'fossnamibia@gmail.com'),
(110, 'francisthuo@cuea.edu'),
(111, 'fredyeboah@gmail.com'),
(112, 'frmukuku@gmail.com'),
(113, 'fsylla@gmail.com'),
(114, 'gaius.ebere@unn.edu.ng'),
(115, 'garbakora@gmail.com'),
(116, 'gbkeku@yahoo.com'),
(117, 'georgenyambuya@gmail.com'),
(118, 'germainnovations@gmail.com'),
(119, 'gichones@gmail.com'),
(120, 'gichuhikid@gmail.com'),
(121, 'gideon.chonia@gmail.com'),
(122, 'gkonayuma@gmail.com'),
(123, 'gogwim@gmail.com'),
(124, 'gracomot@yahoo.com'),
(125, 'gregkawere@gmail.com'),
(126, 'halley@intnet.mu'),
(127, 'hbutau@msn.com'),
(128, 'hjmongi@yahoo.com'),
(129, 'ibrahim.aliosanda@intnet.ne'),
(130, 'ikechukwu.ifeanacho@unn.edu.ng'),
(131, 'imueni@ilabafrica.co.ke'),
(132, 'info@consultancyss.com'),
(133, 'isabel.njihia@gmail.com'),
(134, 'ismailmss@gmail.com'),
(135, 'ivanksang@gmail.com'),
(136, 'jbmillogo@gmail.com'),
(137, 'jimmymbelwa@gmail.com'),
(138, 'jkariuki@gmail.com'),
(139, 'jmwakatobe@yahoo.com'),
(140, 'john.matogo@gmail.com'),
(141, 'johnktarus@gmail.com'),
(142, 'judyokite@gmail.com'),
(143, 'juma.lungo@zalongwa.com'),
(144, 'junioraketch@gmail.com'),
(145, 'kamela.romaric@aiesec.net'),
(146, 'kanam236@gmail.com'),
(147, 'karim.sy@maarch.org'),
(148, 'kassidama@gmail.com'),
(149, 'kassoumsade@gmail.com'),
(150, 'kawsu.sillah@gmail.com'),
(151, 'kayeumoise@gmail.com'),
(152, 'kayusyussuf@yahoo.com'),
(153, 'kemiruth9@gmail.com'),
(154, 'ken@indepthresearch.org'),
(155, 'kenneth.ojeke@gmail.com'),
(156, 'kgmbogo@gmail.com'),
(157, 'khozaq@gmail.com'),
(158, 'kibude@gmail.com'),
(159, 'kigunda.mbogo@gmail.com'),
(160, 'kingofpcsl@gmail.com'),
(161, 'kstouray@gmail.com'),
(162, 'ldngowo@gmail.com'),
(163, 'leonardmut31@gmail.com'),
(164, 'lexenington@gmail.com'),
(165, 'lilyuby@gmail.com'),
(166, 'luxsonjay.aucayd@gmail.com'),
(167, 'm.moumine@gmail.com'),
(168, 'maganga.yusuph@gmail.com'),
(169, 'mahonoree@gmail.com'),
(170, 'mail@agogodavid.com'),
(171, 'mailtoabel@gmail.com'),
(172, 'manuwills@gmail.com'),
(173, 'marimo@ict.co.zw'),
(174, 'marionmsk@gmail.com'),
(175, 'mark@jumpingbean.co.za'),
(176, 'mathias@houngbo.net'),
(177, 'mawusee.foli@gmail.com'),
(178, 'mayidaassouma@gmail.com'),
(179, 'mbakobmouhamed@gmail.com'),
(180, 'mcodjoe@gmail.com'),
(181, 'mcsteann@gmail.com'),
(182, 'mesfin@seamic.org'),
(183, 'mesumbeslin@gmail.com'),
(184, 'mffelimellon@gmail.com'),
(185, 'mfonkam@aun.edu.ng'),
(186, 'miezanezo@gmail.com'),
(187, 'mohammedghaji@gmail.com'),
(188, 'mohdnoor.siddig@gmail.com'),
(189, 'mohjam2@yahoo.com'),
(190, 'msengi.maeda@gmail.com'),
(191, 'musa22@gmail.com'),
(192, 'mutuzana@gmail.com'),
(193, 'muumboalexis@gmail.com'),
(194, 'muyiwacaleb@gmail.com'),
(195, 'myfirst175@gmail.com'),
(196, 'nassoro.lwamo@gmail.com'),
(197, 'ndaohialy@gmail.com'),
(198, 'niiadjeisowah@gmail.com'),
(199, 'njarambacharles01@gmail.com'),
(200, 'nnenna75@gmail.com'),
(201, 'nntbobo@gmail.com'),
(202, 'Noblesomto1@gmail.com'),
(203, 'nyabouri@gmail.com'),
(204, 'nyasa98@gmail.com'),
(205, 'ocisse@gmail.com'),
(206, 'odunnoah@gmail.com'),
(207, 'odusote.kayode@gmail.com'),
(208, 'of.oladipo@unizik.edu.ng'),
(209, 'ohanyido@yahoo.com'),
(210, 'okenyodo@gmail.com'),
(211, 'okoliec@gmail.com'),
(212, 'oladimeji.olufemi@gmail.com'),
(213, 'olaniyanshola@yahoo.com'),
(214, 'olivierkouami@gmail.com'),
(215, 'ombenimsuya@gmail.com'),
(216, 'onazi78@gmail.com'),
(217, 'onyeibo@schemefusion.com'),
(218, 'osita.onyeka@gmail.com'),
(219, 'otunbaww@gmail.com'),
(220, 'owerah@gmail.com'),
(221, 'oyinlolaoluwatobi@gmail.com'),
(222, 'ozdyk@acm.org'),
(223, 'panda.constantin@gmail.com'),
(224, 'patrickouobou@gmail.com'),
(225, 'pecks@iway.na'),
(226, 'pguenou@gmail.com'),
(227, 'pharmacistsahu@gmail.com'),
(228, 'pixelgoldprod@gmail.com'),
(229, 'princehabko@gmail.com'),
(230, 'ptcmoney93@gmail.com'),
(231, 'quabenaa@gmail.com'),
(232, 'ralphlinkusa@hotmail.com'),
(233, 'raouftoure87@gmail.com'),
(234, 'rberchie@gmail.com'),
(235, 'rdessien@gmail.com'),
(236, 'risingosazuwa@gmail.com'),
(237, 'ronald.mjema@gmail.com'),
(238, 's.tomsleen@gmail.com'),
(239, 'sadeuhmba@gmail.com'),
(240, 'sadouanouan@yahoo.fr'),
(241, 'sale_ahmadu@yahoo.com'),
(242, 'seeburn.k@gmail.com'),
(243, 'serge.codd@gmail.com'),
(244, 'seun.ojedeji@gmail.com'),
(245, 'seyiosunade@gmail.com'),
(246, 'shiittu.olanrewaju@gmail.com'),
(247, 'shola.olaniyan@oellresources.com'),
(248, 'sirkings81@gmail.com'),
(249, 'smthyan@gmail.com'),
(250, 'soekpe@gmail.com'),
(251, 'solomonkembo@gmail.com'),
(252, 'sorythiam@gmail.com'),
(253, 'sorythiam@newglobalservices.org'),
(254, 'spacesofttech@gmail.com'),
(255, 'stevdok@gmail.com'),
(256, 'suesmith026@gmail.com'),
(257, 'sylvesterscriptures@gmail.com'),
(258, 'sylvestre.ouedraogo@gmail.com'),
(259, 't.a.halvorsen@ped.uio.no'),
(260, 'talk2lpdamuut@gmail.com'),
(261, 'tatejoris@fastmail.fm'),
(262, 'techmeka@gmail.com'),
(263, 'timi@websesame.com'),
(264, 'tkotey@gmail.com'),
(265, 'tmbayco@yahoo.com'),
(266, 'tonykarugu@gmail.com'),
(267, 'towelan@nepad.org'),
(268, 'traore.inoussa02@gmail.com'),
(269, 'trustzifa@gmail.com'),
(270, 'tunny20002000@yahoo.com'),
(271, 'tunnyben@gmail.com'),
(272, 'umanwam@gmail.com'),
(273, 'uuekpo@gmail.com'),
(274, 'vpalanga@gmail.com'),
(275, 'wale@forum.org.ng'),
(276, 'wilfriedakakpo@gmail.com'),
(277, 'yeboahgodwin@gmail.com'),
(278, 'yemi.awolokun@gmail.com'),
(279, 'ynyonato@gmail.com'),
(280, 'yzy@citad.org'),
(281, 'ziblimgomdu@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `fossorg`
--

CREATE TABLE `fossorg` (
  `id` int(11) NOT NULL,
  `fossorg_id` varchar(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fossorg`
--

INSERT INTO `fossorg` (`id`, `fossorg_id`, `name`, `website`) VALUES
(1, '45', 'Fedora Project', ''),
(2, '53', 'Linux Professional Institute (LPI)', ''),
(3, '31', 'Linux Foundation (LF)', ''),
(4, '92', 'Open Society Initiative for West Africa ', ''),
(5, '73', 'Internet Society (ISOC)', ''),
(6, '50', 'Python Software Foundation', ''),
(7, '22', 'Blender Foundation', ''),
(8, '29', 'World Wide Web Foundation', ''),
(9, '32', 'Ada Initiative', ''),
(10, '97', 'Apache Software Foundation', ''),
(11, '27', 'ArchLinux Community', ''),
(12, '22', 'Debian Project', ''),
(13, '64', 'Digital Freedom Foundation (DFF)', ''),
(14, '11', 'Django Software Foundation', ''),
(15, '35', 'Free Software Foundation (FSF)', ''),
(16, '87', 'GNOME Foundation', ''),
(17, '54', 'KDE e.V', ''),
(18, '24', 'LF AI Foundation', ''),
(19, '63', 'Linux User Group (LUG)', ''),
(20, '39', 'Manjaro Community', ''),
(21, '75', 'Mozilla Foundation', ''),
(22, '61', '.NET Foundation', ''),
(23, '69', 'Open Invention Network', ''),
(24, '36', 'OpenStreetMap Foundation', ''),
(25, '67', 'Raspberry Pi Foundation', ''),
(26, '98', 'The Document Foundation', ''),
(27, '73', 'Ubuntu Teams', ''),
(28, '58', 'XMPP Standards Foundation', '');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `policy` text NOT NULL,
  `education` text NOT NULL,
  `research` text NOT NULL,
  `software_development` text NOT NULL,
  `business` text NOT NULL,
  `networking` text NOT NULL,
  `sysadmin` text NOT NULL,
  `training` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `user_id`, `policy`, `education`, `research`, `software_development`, `business`, `networking`, `sysadmin`, `training`) VALUES
(4, '5546', 'Yes', '', 'Yes', '', 'Yes', '', '', ''),
(5, '4629', '', 'Yes', '', '', '', '', '', ''),
(6, '835', 'Yes', '', '', 'Yes', 'Yes', '', '', 'Yes'),
(7, '4765', '', 'Yes', '', '', '', 'Yes', '', ''),
(8, '4684', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(9, '4115', '', 'Yes', 'Yes', '', '', '', '', 'Yes'),
(10, '146', '', '', '', '', 'Yes', '', '', ''),
(11, '6596', '', 'Yes', 'Yes', '', '', '', '', ''),
(12, '794', '', 'Yes', '', 'Yes', '', '', '', ''),
(13, '6929', 'Yes', '', 'Yes', 'Yes', 'Yes', '', '', 'Yes'),
(14, '8015', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(15, '6264', '', 'Yes', '', '', 'Yes', 'Yes', '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `lang_id` varchar(10) NOT NULL,
  `language` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `lang_id`, `language`) VALUES
(1, '3747', 'English'),
(2, '2562', 'French');

-- --------------------------------------------------------

--
-- Table structure for table `liaison`
--

CREATE TABLE `liaison` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `org_id` varchar(10) NOT NULL,
  `liaison_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liaison`
--

INSERT INTO `liaison` (`id`, `user_id`, `org_id`, `liaison_status`) VALUES
(9, '5546', '4695', 'True'),
(10, '4629', '6128', 'True'),
(11, '835', '7415', 'False'),
(12, '4115', '01', 'False'),
(13, '146', '8322', 'False'),
(14, '794', '7724', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `org_id` varchar(10) NOT NULL,
  `org_name` text NOT NULL,
  `type_id` varchar(10) NOT NULL,
  `website` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `area` text NOT NULL,
  `zip` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `org_id`, `org_name`, `type_id`, `website`, `phone`, `email`, `area`, `zip`, `city`, `state`, `country`) VALUES
(5, '8322', 'Schemefusion Limited', '06', '', '+2348088800055', 'contact@schemefusion.com', 'GRA', '400044', 'Emene', 'Enugu', 'Nigeria'),
(6, '7724', 'SwissAir Nigeria Limited', '06', '', '+234703444598', 'contact@swissair.com', 'GRA', '400242', 'Enugu', 'Enugu', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `organization_types`
--

CREATE TABLE `organization_types` (
  `id` int(11) NOT NULL,
  `type_id` varchar(10) NOT NULL,
  `org` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization_types`
--

INSERT INTO `organization_types` (`id`, `type_id`, `org`) VALUES
(1, '02', 'NGO'),
(2, '13', 'Government'),
(3, '06', 'Business'),
(4, '19', 'Academic');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `sch_id` varchar(10) NOT NULL,
  `sch_name` text NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `reg_id` varchar(10) NOT NULL,
  `website` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `street` text NOT NULL,
  `zip` varchar(50) NOT NULL,
  `pmb` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `user_id`, `sch_id`, `sch_name`, `faculty`, `department`, `reg_id`, `website`, `phone`, `email`, `street`, `zip`, `pmb`, `city`, `state`, `country`) VALUES
(2, '5069', '3669', 'Fed Uni Tech Ndufu Alike Ikwo', 'Engineering', 'Mechanical Engineering', '2008160093', '', '07031525786', 'S.ifejika@gmail.com', 'Ndufu Alike Ikwo', '1209', '1610', 'Abakaliki', 'Ebonyi', 'Nigeria'),
(3, '', '1168', 'Fed Uni Tech Owerri', 'Engineering', 'Mechanical Engineering', '2008160093', '', '08077747917', 'futo@gmail.com', 'Owerri', '1510', '', 'Owerri', 'Imo', 'Nigeria'),
(4, '', '2767', 'Enugu State University', 'Environment', 'Architecture', 'ESUT/2009/', '', '+234800099900', 'onyeibo@schemefusion.com', 'Ebeano-City', '400004', '', 'Agbani', 'Enugu', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `skype` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `reddit` varchar(250) NOT NULL,
  `telegram` varchar(250) NOT NULL,
  `irc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `school_id` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `school_id`, `status`) VALUES
(2, '5546', '3669', 'False'),
(3, '4115', '2767', 'False'),
(4, '6596', '2767', 'False'),
(5, '794', '2767', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_date` datetime NOT NULL,
  `email` varchar(250) NOT NULL,
  `language` varchar(50) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `f_lang1` varchar(50) NOT NULL,
  `f_lang2` varchar(50) NOT NULL,
  `liaison` varchar(50) NOT NULL,
  `student` varchar(50) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `birth_date`, `email`, `language`, `nationality`, `f_lang1`, `f_lang2`, `liaison`, `student`, `reg_date`) VALUES
(11, '5546', 'Somto', 'Ifejika', 'Male', '2020-05-14 00:00:00', '', 'English', 'Argentina', '', '', 'True', 'True', '2020-05-05 11:29:20'),
(12, '4629', 'Onyeibo', 'Oku', 'Male', '1975-10-16 00:00:00', '', 'English', 'Nigeria', '', '', 'True', 'False', '2020-05-10 09:53:03'),
(13, '4321', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Uganda', '', '', 'False', 'False', '2020-05-10 10:58:58'),
(14, '4321', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Uganda', '', '', 'False', 'False', '2020-05-10 10:58:58'),
(15, '4321', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Uganda', '', '', 'False', 'False', '2020-05-10 10:58:58'),
(16, '4321', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Uganda', '', '', 'False', 'False', '2020-05-10 10:58:58'),
(17, '4321', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Uganda', '', '', 'False', 'False', '2020-05-10 10:58:58'),
(18, '4321', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Uganda', '', '', 'False', 'False', '2020-05-10 10:58:58'),
(19, '4321', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Uganda', '', '', 'False', 'False', '2020-05-10 10:58:58'),
(20, '4321', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Uganda', '', '', 'False', 'False', '2020-05-10 10:58:58'),
(21, '8053', 'Primus', 'GUENOU-AHLIJAH', 'Male', '2018-07-02 00:00:00', '', 'English', 'Togo', '', '', 'False', 'False', '2020-05-10 14:36:05'),
(22, '2641', 'Primus', 'GUENOU-AHLIJAH', 'Male', '2018-07-02 00:00:00', '', 'English', 'Togo', '', '', 'False', 'False', '2020-05-10 14:41:26'),
(23, '4867', 'Primus', 'GUENOU-AHLIJAH', 'Male', '1975-07-02 00:00:00', '', 'English', 'Togo', '', '', 'False', 'False', '2020-05-12 18:22:36'),
(24, '835', 'B', 'S', 'Male', '2020-04-08 00:00:00', '', 'English', 'Andorra', '', '', 'True', 'False', '2020-05-12 19:48:53'),
(25, '4765', 'Somto', 'Ifejika', 'Male', '2020-05-12 00:00:00', '', 'English', 'Argentina', '', '', 'False', 'False', '2020-05-13 08:37:22'),
(26, '4684', 'Ismail', 'Settenda', 'Male', '1973-04-26 00:00:00', '', 'English', 'Tanzania, United Republic of', '', '', 'False', 'False', '2020-05-13 13:58:38'),
(27, '4115', 'Testman', 'Rest', 'Male', '1944-12-03 00:00:00', '', 'French', 'Bahrain', '', '', 'True', 'True', '2020-05-21 12:14:22'),
(28, '146', 'Crusier', 'Freeman', 'Male', '1955-12-08 00:00:00', 'crusier@schemefusion.com', 'French', 'Uganda', '', '', 'True', 'False', '2020-05-21 22:40:21'),
(29, '6596', 'Johnson', 'Ebori', 'Male', '1955-12-22 00:00:00', 'johnson@frenchies.org', 'French', 'Cameroon', '', '', 'False', 'True', '2020-05-22 10:51:24'),
(30, '794', 'Rosemary', 'Onuma', 'Female', '1990-10-10 00:00:00', 'rmo@fastmail.fm', 'English', 'Nigeria', '', '', 'True', 'True', '2020-05-23 08:14:22'),
(31, '6929', 'Bilikis', 'Giwah', 'Female', '1982-12-16 00:00:00', 'bilikisg@yahoo.com', 'English', 'Ghana', '', '', 'False', 'False', '2020-05-24 17:48:32'),
(32, '8015', 'Txt', 'Test', 'Others', '2020-05-25 00:00:00', 'teat@test.com', 'French', 'Cyprus', '', '', 'False', 'False', '2020-05-25 05:30:32'),
(33, '6264', 'Primus', 'GUENOU-AHLIJAH', 'Male', '1956-07-02 00:00:00', 'pguenou@gmail.com', 'English', 'Togo', '', '', 'False', 'False', '2020-05-26 13:44:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliate`
--
ALTER TABLE `affiliate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_table`
--
ALTER TABLE `email_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fossorg`
--
ALTER TABLE `fossorg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liaison`
--
ALTER TABLE `liaison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_types`
--
ALTER TABLE `organization_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliate`
--
ALTER TABLE `affiliate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_table`
--
ALTER TABLE `email_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `fossorg`
--
ALTER TABLE `fossorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `liaison`
--
ALTER TABLE `liaison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organization_types`
--
ALTER TABLE `organization_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
