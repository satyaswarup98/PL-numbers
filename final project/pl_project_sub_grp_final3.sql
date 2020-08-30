-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: pl_project
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sub_grp`
--

DROP TABLE IF EXISTS `sub_grp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sub_grp` (
  `sub_group_no` varchar(3) DEFAULT NULL,
  `description` varchar(170) DEFAULT NULL,
  `Main_Grp` int(3) DEFAULT NULL
) ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_grp`
--

LOCK TABLES `sub_grp` WRITE;
/*!40000 ALTER TABLE `sub_grp` DISABLE KEYS */;
INSERT INTO `sub_grp` VALUES ('0','WP/WG/WL/WT.',0),('1','Other IRS locos BG.',0),('2','Non-IRS locos BG.',0),('3','YP/YG/YL/YM',0),('4','Other IRS steam locos MG.',0),('5','Non-IRS steam locos MG',0),('6','All steam locos NG.',0),('7','Rail mounted steam cranes BG/MG/NG.',0),('8','Rail mounted diesel cranes BG/MG/NG.);',0),('10','Alco DLW diesel electric locomotives BG/MG/NG.WDM1, WDM2, WDS5, YDM4, YDM4A, Power Packs.',10),('11','WDM1, WDM2, WDS5, YDM4, YDM4A, Vehicle Portion',10),('12','WDM1, WDM2, WDS5, YDM4, YDM4A, Transmission',10),('13','MAK/CLW diesel hydraulic locomotives. BG/MG/NG/WDS4, WDS4A, ZDM3 Power Pack. WDS4, WDS4A, ZDM3 Vehicle portion.',10),('15','Hardware items Common to group 10 & 11.',10),('16','General Motors diesel electric locomotives BG & MG WDM4, YDM3, YDM5.',10),('17','Henschel Main line diesel hydraulic locomotives WDM3.',10),('19','Non-standard diesel locomotives YDM1, N/ZDM1, ZDM2, WDS1, WDS2.',10),('21','DC Elec. locos BG pre-war.',20),('22','DC Elec. locos BG post-war (WCM1, 2, 3, 4, 5 WCG2).',20),('23','AC Elec. locos \"GROUP\" WAM1, WAG2, WAG3, and WAG4.',20),('24','AC Elec. locos-Japanese design WAM2, WAM3, WAG2,',20),('25','AC Elec. locos of CLW',20),('27','AC/DC Elec. locos BG.',20),('28','All AC Elec. locos MG.',20),('30','ICF Coaches BG & MG.',30),('31','ICF EMU coaches BG & MG.',30),('32','Diesel Railcars BG/MG/NG.',30),('33','BEML Coaches BG & MG.',30),('34','Jessops Coaches BG/MG.',30),('35','EMU Coaches BG/MG (Jessop, Breda. etc.).',30),('36','Other Coaching stock BG/MG',30),('37','Old IRS design wagons, CR, O, MBC, NCL.',30),('38','New IRS stock wagons. BOX, BOI, BCX, BRH & future new designs',30),('39','Other goods stock e.g., IRCA & non-IRS.',30),('40','Cables, Conductors & transmission materials and wires.',40),('41','Insulators & insulating materials.',40),('42','Electrical fittings.',40),('43','All instruments, appliances & component instruments.',40),('45','T.L. Cells & train fighting materials (not included elsewhere).',40),('46','Electrical sub-station transmission & distribution equipment. (not included elsewhere).',40),('47','Electrical machinery & parts including carbon brushes of all types.',40),('50','Telegraphs & telephones equipment.',50),('52','Wireless equipment including electronic components and spares for communication.',50),('54','Signal & interlocking material, mechanical single wire and their parts & fittings.',50),('55','Signal & interlocking material, mechanical double wire and their parts & fittings.',50),('56','Signal & interlocking material, electrical and their parts & fittings.',50),('60','Permanent Way, Track Tools & Bridge work.',60),('61','Building materials including sanitary-ware, roofing materials (other than G.I. sheets), Bricks, Sand, Cement, Lime etc.',60),('62','Pipes, tubes & fittings including valves.',60),('65','Plant & Machinery including Cranes-complete unit.',60),('66','Spares for Plant & Machinery and Cranes.',60),('67','Road Motors, Auto-trucks, trolleys & material handling equipment other spares.',60),('70','Abrasives & grinding wheels.',70),('71','Brushes, brushware & basketware and bamboo products.',70),('72','Tools accessories & components & instruments.',70),('73','Hardware, fasteners, rivets, bolts, nuts, screws, studs and pins and cotters.',70),('75','India Rubber, Leather, Canvas & Plastics & kind of Materials (except those pertaining to technical classification).',70),('76','Electrodes cutting & welding accessories Elect. &Oxyacetylene.',70),('78','Crockery, Cutlery, Napery, kitchen and tableware, furniture and other equipments including clocks, watches etc.',70),('79','Cloth, clothing and personal equipment and cotton products such, as Cord, Twine ropes and Waste Cotton.',70),('80','Petroleum & petroleum products other than fuel oil.',80),('81','Acids, chemicals & chemical products (including soaps, disinfectants, insecticides & explosives) and vegetable oils',80),('82','Drugs. Pharmaceuticals. Hospital instruments appliances',80),('83','Stationery, forms, drawing office instruments, laboratoryapparatus, photographic equipment & printing press equipment.',80),('84','Refractories, glass, glass substitute, asbestos, asbestos fiber, joint & packing material.',80),('85','Bearing ball and roller.',80),('86','Miscellaneous including fire fighting equipment and marine material.',80),('90','Metals ferrous.',90),('91','Metals Non-ferrous.',90),('92','Fuel & Fuel oils.',90),('93','Timber.',90),('97','Rolling stock complete units.',90),('98','Scrap.',90),('74','Hardware-other than fasteners, lron-mongery, Tin-ware, etc. including expanded metals, oil lamps, parts and fittings, stores. etc. wire ropes, chains and allied fittings',70),('77','Paints, Enamels, Varnishes and Painters stores including painters oils and spirits.',70);
/*!40000 ALTER TABLE `sub_grp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-08  0:11:33
