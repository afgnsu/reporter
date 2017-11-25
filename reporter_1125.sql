-- MySQL dump 10.13  Distrib 5.6.34, for Win32 (AMD64)
--
-- Host: localhost    Database: reporter
-- ------------------------------------------------------
-- Server version	5.6.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `sn` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `username` varchar(65) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'cccc','3333','','2017-10-28 09:46:22','2017-10-28 09:46:22'),(2,'ddd','4444','','2017-10-28 09:51:43','2017-10-28 09:51:43'),(3,'eee','555','','2017-10-28 10:39:43','2017-10-28 10:39:43'),(4,'fff','6666','','2017-10-28 10:41:41','2017-10-28 10:41:41'),(5,'ggg','31432432','','2017-10-28 11:48:28','2017-10-28 11:48:28'),(6,'hhh','8888','','2017-10-28 14:11:57','2017-10-28 14:11:57'),(7,'iii','9999','','2017-10-28 14:21:18','2017-10-28 14:21:18'),(8,'jjjj','123111','','2017-10-28 14:21:50','2017-10-28 14:21:50'),(9,'kkk','234234','','2017-10-28 14:31:23','2017-10-28 14:31:23'),(10,'LLL','323323','','2017-10-28 14:32:27','2017-10-28 14:32:27'),(11,'mmm','12342343','','2017-10-28 14:32:53','2017-10-28 14:32:53'),(12,'HBL預賽熱戰！治平碰木柵高工拚晉級！','<p><img alt=\"\" src=\"http://img.ltn.com.tw/Upload/sports/page/800/2017/11/11/38.jpg\" /></p>\r\n\r\n<h1><br />\r\n乙組班底 花3年晉甲級</h1>\r\n\r\n<p>〔記者粘藐云／台北報導〕天賦的不足可以用努力來彌補！治平高中昨在HBL高中籃球聯賽預賽中，以75：66擊敗南湖高中，球員努力拚搏的表現，令教頭吳建龍相當感動，直呼以這群孩子為榮。</p>\r\n\r\n<p>治平男籃成軍3年，陣中多為國中乙組球隊畢業的球員，今年首度挑戰HBL甲級賽事，資格賽他們擊敗傳統名校宜蘭高中，一路闖進預賽，表現令人驚豔。</p>\r\n\r\n<h1>教練吳建龍：不可思議</h1>\r\n\r\n<p>9日預賽首戰碰上同組強權南山高中，治平以61分慘敗，吳建龍透露，前一天和球員長談到深夜，「我告訴他們，國產車要怎麼和保時捷比，但不是要球員貶低自己，而是想提醒他們，努力也可以彌補很多事情。」</p>\r\n','','2017-11-11 15:06:28','2017-11-11 15:06:28'),(13,'台鐵水泥列車出軌 竟是司機酒駕','<h2>〔記者蔡彰盛／新竹報導〕台鐵西部幹線一輛載小麥的貨運列車，10日下午4點03分出發，不料列車才剛駛出新竹機務段後竟突然出軌，幸好整起意外並未造成無人傷亡、也沒影響其他列車，鐵路警察局調查後赫然發現，開車的謝姓司機員（40歲）酒測值高達0.2毫克，超過酒測標準值，訊後將其依公共危險罪送辦，檢方10日晚間11點裁定5萬交保。</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2><img alt=\"開火車的謝姓司機竟酒駕造成列車出軌，檢方訊後裁定５萬元交保，台鐵也將這名司機停職。（資料照，台鐵提供）\" src=\"http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpz4K8x7.jpg\" /></h2>\r\n\r\n	<h2>開火車的謝姓司機竟酒駕造成列車出軌，檢方訊後裁定５萬元交保，台鐵也將這名司機停職。（資料照，台鐵提供）</h2>\r\n	</li>\r\n</ul>\r\n\r\n<h2>謝男聲稱，事前只是喝幾罐啤酒，「不知這樣怎麼會超標！」台鐵事後已將這名駕駛停職。</h2>\r\n\r\n<h2>台鐵表示，出軌意外是發生在新竹站停車庫內，疑因調車號誌工疏失未確認轉轍器位置，致調車機車頭及1輛貨車出軌，於今日凌晨2點45分完成復軌，因事故地點位於車庫內，未影響台鐵正常列車營運。</h2>\r\n\r\n<h2>台鐵表示，司機員上班前必須先執行酒精濃度值測試，謝姓駕駛員當日擔任段內調車作業，於早上11點24分上班前，確有依規定執行測試，並由運轉值班人員確認記錄為合格，目前台鐵已立即停止謝員開車工作及調整職務，靜待司法偵辦調查。</h2>\r\n','','2017-11-11 15:09:55','2017-11-11 15:09:55'),(14,'1111','<p><img alt=\"\" src=\"/reporter/elFinder/php/../files/z4.jpg\" style=\"height:254px; width:254px\" /></p>\r\n','','2017-11-11 16:02:24','2017-11-11 16:02:24'),(16,'1118','<p>asdfsdfasdf</p>\r\n','ps','2017-11-18 09:57:35','2017-11-18 09:57:35'),(17,'1640萬元消費券 澎湖衝觀光','<p>中國時報【陳可文╱澎湖報導】</p>\r\n\r\n<p>行銷澎湖秋冬淡季觀光，澎湖縣政府號召全縣151家旅遊業者展開搶救觀光大作戰，將發放1640萬元旅遊消費券刺激市場，11月21日正式上路，業者興致勃勃卯足全力衝衝衝！</p>\r\n\r\n<p>陸客不來，台灣觀光大受衝擊一片低迷，離島澎湖縣卻逆勢成長，去年觀光客人數首次突破百萬人次，今年再創新高，迄今已114萬人。</p>\r\n\r\n<p>延續這一波熱潮，澎湖縣政府趁勢追擊再造新高潮，面對冬天旅遊淡季到來，特地推出旅遊消費券帶動人潮，地方旅遊業者熱情響應力挺到底。</p>\r\n\r\n<p>旅遊處表示，預計發行面額100元的消費券16萬4000張，總計1640萬元，活動於11月21日起至明年2月10日，凡非澎湖籍的入境遊客備齊相關文件即可前往指定地點兌換，換完即止。</p>\r\n\r\n<p>入境遊客憑「機票、船票、其他運輸工具入境證明」、「身分證、護照、戶口名簿或戶籍謄本」、「合法旅館、民宿住宿的發票或收據」，住宿1晚每人可兌換500元消費券，住2晚兌換1100元。</p>\r\n\r\n<p>兌換地點：澎湖海洋地質公園中心、馬公機場入境大廳旅遊處資訊櫃檯、望安及七美兌換處；兌換服務時間：每日早上8時至下午6時。</p>\r\n\r\n<p>縣府號召總動員全力拚觀光，甫開幕的海龍王精品渡假旅店趁勢推出市場最低價的880元住宿；縣農會蘆薈伴手禮也配合旅遊券優惠85折，一系列好康熱鬧登場搶搶滾。</p>\r\n','ps','2017-11-18 10:37:41','2017-11-18 10:37:41'),(18,'最關鍵一年…都更明年要拚500案1萬戶','<p>內政部次長花敬群昨（17）日表示，明年為都更最關鍵的一年，內政部已擬具目標，先透過「都市危險及老舊建築物加速重建條例」拋磚引玉，達到500案、1萬戶，此會期力拚都更條例通過後，也將以每年500案為目標，讓都更能量倍數成長。</p>\r\n\r\n<p>但法案送進立法院後，條文內容可能再次被修正，尤其優惠措施可能會加碼放行。花敬群表達立場說，容積獎勵、租稅優惠都不宜再放寬，協議合建也不宜比照權變的優惠。</p>\r\n\r\n<p>花敬群接受本報專訪時表示，未來30年內，台灣約有740萬戶的老舊建物，若要全面更新，每年須執行5,000案、約25萬戶的都更，然而，目前每年平均僅約2,000戶，因此，趕快完成修法，推動都更在台灣各地盡快推動，是目前內政部最重要的工作之一。</p>\r\n\r\n<p>據統計，2006~2016年這十年，全國核訂的都更案件只有449案，平均而言，每年40案，約2,000戶。內政部要改變此現象，已完成立法的危老條例，將打頭陣明年推500案，其中新北、桃園、台中與高雄四個直轄市，已開始受理申請，其他縣市2018年全面跟進。而都更條例通過後，比照同樣的目標加速進行。</p>\r\n\r\n<p>花敬群坦言，部分立委、業者認為，要推動都更的進行，應祭出更高的容積獎勵、租稅優惠作為誘因，且協議合建的租稅優惠應同權利變換，但內政部的立場是：容積獎勵不應無邊無際。</p>\r\n\r\n<p>花敬群說明，過去容積獎勵機制並不透明，實施者和地主不清楚餅有多大，容易產生不信任感，延宕都更進度；而老舊建築多半房屋稅偏低，走都更程序後，土地持份變少、房屋價值變大，因此房屋稅會增加頗多，這也影響民間都更的意願，擔心更新後繳不起房屋稅。</p>\r\n\r\n<p>但目前1.5倍的容獎上限，是考量都會區多已具備完整的誘因，50%的容積獎勵對於都市環境衝擊，還在可控制的範圍內，若再往下擴大，會是無邊無際。</p>\r\n\r\n<p>至於其他鄉村型區域，花敬群說明，容積獎勵並非推動都更的關鍵因素，而在於完善的金融協助、專業輔導，甚至農村社區重劃等另個層面的議題。</p>\r\n','ps','2017-11-18 12:04:01','2017-11-18 12:04:01');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loginattempts`
--

DROP TABLE IF EXISTS `loginattempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loginattempts`
--

LOCK TABLES `loginattempts` WRITE;
/*!40000 ALTER TABLE `loginattempts` DISABLE KEYS */;
INSERT INTO `loginattempts` VALUES ('::1',2,'2017-11-11 14:24:54','ps',1),('::1',1,'2017-11-11 14:25:03','ps5',2),('::1',2,'2017-11-11 14:34:29','root',3);
/*!40000 ALTER TABLE `loginattempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('19275708245a06691612c05','ps','$2y$10$pidzT.zOb29tisvtY1ZzsuzE9ax8m0Gq8q5ZQTipupBXHJyeQOELW','afgn.su2@msa.hinet.net',1,'2017-11-11 06:37:27');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-25 11:24:45
