/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.14 : Database - greenwich
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`greenwich` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `greenwich`;

/*Table structure for table `audit_log` */

DROP TABLE IF EXISTS `audit_log`;

CREATE TABLE `audit_log` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `action` varchar(50) DEFAULT NULL,
  `user_id` int(15) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

/*Data for the table `audit_log` */

LOCK TABLES `audit_log` WRITE;

insert  into `audit_log`(`id`,`action`,`user_id`,`timestamp`) values (1,'create employee',22,'2023-07-02 07:44:42'),(2,'login',9,'2023-07-01 23:48:08'),(3,'login',21,'2023-07-01 23:49:01'),(4,'login',9,'2023-07-01 23:50:33'),(5,'login',9,'2023-07-02 00:33:51'),(6,'login',19,'2023-07-02 00:34:10'),(7,'login',9,'2023-07-02 00:49:00'),(8,'login',9,'2023-07-02 00:52:02'),(9,'login',19,'2023-07-02 00:52:16'),(10,'login',9,'2023-07-02 00:53:12'),(11,'login',9,'2023-07-02 00:56:11'),(12,'login',9,'2023-07-02 00:57:51'),(13,'login',9,'2023-07-02 00:58:19'),(14,'login',19,'2023-07-02 01:14:07'),(15,'login',21,'2023-07-02 01:46:50'),(16,'login',9,'2023-07-02 01:47:24'),(17,'login',9,'2023-07-02 08:14:05'),(18,'login',9,'2023-07-02 08:28:18'),(19,'login',19,'2023-07-02 08:28:34'),(20,'login',18,'2023-07-02 08:28:46'),(21,'login',17,'2023-07-02 08:29:01'),(22,'login',9,'2023-07-02 08:29:12'),(23,'login',9,'2023-07-02 12:43:30'),(24,'login',9,'2023-07-02 13:31:26'),(25,'login',9,'2023-07-02 15:01:37'),(26,'login',9,'2023-07-03 01:35:31'),(27,'login',9,'2023-07-03 04:09:47'),(28,'login',19,'2023-07-03 04:09:56'),(29,'login',9,'2023-07-03 04:10:17'),(30,'login',17,'2023-07-03 04:10:29'),(31,'login',9,'2023-07-03 04:10:38'),(32,'login',19,'2023-07-03 04:11:07'),(33,'login',9,'2023-07-03 23:57:54'),(34,'login',9,'2023-07-04 01:16:09'),(35,'login',19,'2023-07-04 02:37:20'),(36,'login',9,'2023-07-04 03:00:25'),(37,'login',9,'2023-07-04 03:27:45'),(38,'login',9,'2023-07-04 06:34:41'),(39,'login',9,'2023-07-04 08:20:08'),(40,'login',9,'2023-07-04 08:43:41'),(41,'login',9,'2023-07-04 13:35:40'),(42,'login',9,'2023-07-04 13:40:15'),(43,'login',17,'2023-07-04 13:40:28'),(44,'login',17,'2023-07-04 15:15:47'),(45,'login',9,'2023-07-04 16:11:17'),(46,'login',17,'2023-07-04 16:11:24'),(47,'login',19,'2023-07-04 16:19:41'),(48,'login',9,'2023-07-04 16:20:40'),(49,'login',17,'2023-07-04 23:38:25'),(50,'login',9,'2023-07-05 01:00:53'),(51,'login',17,'2023-07-05 01:04:20'),(52,'login',9,'2023-07-05 01:06:56'),(53,'login',17,'2023-07-05 01:08:47'),(54,'login',17,'2023-07-05 01:59:45'),(55,'login',9,'2023-07-05 02:09:12'),(56,'login',17,'2023-07-05 02:09:32'),(57,'login',9,'2023-07-05 02:21:00'),(58,'login',17,'2023-07-05 02:21:54'),(59,'login',9,'2023-07-05 02:48:22'),(60,'login',17,'2023-07-05 02:49:21'),(61,'login',9,'2023-07-05 06:10:51'),(62,'login',17,'2023-07-05 06:11:00'),(63,'login',17,'2023-07-05 06:25:09'),(64,'login',17,'2023-07-05 23:47:47'),(65,'login',9,'2023-07-05 23:51:35'),(66,'login',17,'2023-07-05 23:51:57'),(67,'login',17,'2023-07-06 00:35:51'),(68,'login',9,'2023-07-06 00:52:57'),(69,'login',19,'2023-07-06 00:55:50'),(70,'login',17,'2023-07-06 00:56:15'),(71,'login',18,'2023-07-06 00:56:47'),(72,'login',17,'2023-07-06 00:57:30'),(73,'login',9,'2023-07-06 00:57:40'),(74,'login',17,'2023-07-06 00:58:46'),(75,'login',17,'2023-07-06 00:59:45'),(76,'login',17,'2023-07-06 00:59:49'),(77,'login',9,'2023-07-06 02:20:03'),(78,'login',17,'2023-07-06 03:43:32'),(79,'login',17,'2023-07-06 03:46:35'),(80,'login',9,'2023-07-06 03:46:59'),(81,'login',17,'2023-07-06 03:48:24'),(82,'login',9,'2023-07-06 03:51:23'),(83,'login',9,'2023-07-07 08:51:53'),(84,'login',17,'2023-07-07 09:38:57'),(85,'login',9,'2023-07-07 12:35:19'),(86,'login',9,'2023-07-08 09:25:39'),(87,'login',17,'2023-07-08 09:48:58'),(88,'login',9,'2023-07-08 09:49:32'),(89,'login',17,'2023-07-08 10:18:39'),(90,'login',9,'2023-07-08 10:18:58'),(91,'login',17,'2023-07-08 10:25:06'),(92,'login',9,'2023-07-08 10:25:24'),(93,'login',18,'2023-07-08 10:27:23'),(94,'login',19,'2023-07-08 10:27:31'),(95,'login',9,'2023-07-08 10:27:38'),(96,'login',17,'2023-07-08 12:37:19'),(97,'login',9,'2023-07-08 12:44:27'),(98,'login',9,'2023-07-08 23:14:57'),(99,'login',17,'2023-07-09 00:43:52'),(100,'login',9,'2023-07-09 02:43:49'),(101,'login',9,'2023-07-09 23:50:27'),(102,'login',17,'2023-07-10 00:12:42'),(103,'login',9,'2023-07-10 00:13:59'),(104,'login',17,'2023-07-10 00:15:01'),(105,'login',9,'2023-07-10 00:15:29'),(106,'login',17,'2023-07-10 00:17:57'),(107,'login',9,'2023-07-10 00:20:12'),(108,'login',17,'2023-07-11 01:08:01'),(109,'login',17,'2023-07-11 05:52:55'),(110,'login',17,'2023-07-11 13:25:15'),(111,'login',17,'2023-07-11 15:21:37'),(112,'login',17,'2023-07-11 15:22:21'),(113,'login',17,'2023-07-11 15:57:07'),(114,'login',9,'2023-07-11 15:58:41'),(115,'login',17,'2023-07-11 16:01:45'),(116,'login',17,'2023-07-11 17:10:36'),(117,'login',17,'2023-07-11 17:11:01'),(118,'login',9,'2023-07-11 17:11:08'),(119,'login',17,'2023-07-11 18:12:42'),(120,'login',9,'2023-07-11 18:14:02'),(121,'login',9,'2023-07-12 00:57:35'),(122,'login',17,'2023-07-12 01:28:28'),(123,'login',9,'2023-07-12 01:28:39'),(124,'login',17,'2023-07-12 01:43:41'),(125,'login',9,'2023-07-12 01:43:54'),(126,'login',9,'2023-07-12 03:21:39'),(127,'login',17,'2023-07-12 08:27:40'),(128,'login',17,'2023-07-12 16:10:02'),(129,'login',9,'2023-07-12 16:31:02'),(130,'login',17,'2023-07-12 16:36:24');

UNLOCK TABLES;

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `emp_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `date_hired` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `job_id` int(15) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

LOCK TABLES `employee` WRITE;

insert  into `employee`(`emp_id`,`name`,`address`,`phone_no`,`date_hired`,`username`,`password`,`job_id`,`status`) values (17,'axel','sad','98gh','2023-07-28','a','a',7,'Hakdogs'),(18,'Nyzuz','Solano','099999999','2023-07-01','nyzuz','pass',5,NULL),(19,'hakdog','bagabag','90898','2023-07-01','im','im',4,NULL),(9,'Axel ','Bagabag','09771530826','2023-06-30','admin','admin',1,NULL),(20,'has','saibu','87','2023-07-28','manager','pass',2,NULL),(21,'kitchen','bagabag','090','2023-07-01','kitchen','kitchen',3,NULL);

UNLOCK TABLES;

/*Table structure for table `inventory` */

DROP TABLE IF EXISTS `inventory`;

CREATE TABLE `inventory` (
  `inventory_id` int(15) NOT NULL AUTO_INCREMENT,
  `product_id` int(15) DEFAULT NULL,
  `stock` int(15) DEFAULT NULL,
  `price` float(15,2) DEFAULT NULL,
  PRIMARY KEY (`inventory_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `inventory` */

LOCK TABLES `inventory` WRITE;

insert  into `inventory`(`inventory_id`,`product_id`,`stock`,`price`) values (1,16,1,499.00),(2,17,1,400.00),(3,18,0,699.00),(4,19,0,219.00),(5,20,10,249.00),(6,21,9,350.00),(7,22,9,279.00),(8,23,96,215.00),(9,24,10,89.00),(10,25,10,200.00),(11,26,10,149.00),(12,27,10,99.00),(13,28,10,50.00),(14,29,10,599.00),(15,30,10,799.00),(16,31,6,999.00),(17,32,10,179.00),(18,33,9,189.00),(19,34,9,79.00),(20,35,10,149.00),(21,36,10,78.00),(22,37,10,179.00),(23,38,9,99.00),(24,39,10,85.00),(25,40,10,50.00);

UNLOCK TABLES;

/*Table structure for table `job` */

DROP TABLE IF EXISTS `job`;

CREATE TABLE `job` (
  `job_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `des` varchar(50) DEFAULT NULL,
  `salary` int(15) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `job` */

LOCK TABLES `job` WRITE;

insert  into `job`(`job_id`,`name`,`des`,`salary`) values (1,'Admin','System Monitoring',30000),(2,'Manager','Task to do in Back Office',40000),(3,'Kitchen Manager','Task to do in Kitchen Area',25000),(4,'Inventory Manager','Task to manage the inventory',25000),(5,'HR Manager','Task to manage employees and Jobs',27000),(6,'Accounting Manager','Task for Payrolls and Sales',30000),(7,'Cashier','Task for the counter',12000),(8,'Guard','Task to guard the Store',14000),(9,'Staff','Task to Serve Customers and do other side works in',12000);

UNLOCK TABLES;

/*Table structure for table `order_transaction` */

DROP TABLE IF EXISTS `order_transaction`;

CREATE TABLE `order_transaction` (
  `trans_id` int(15) NOT NULL AUTO_INCREMENT,
  `emp_id` int(15) DEFAULT NULL,
  `total_amount` float(10,2) DEFAULT NULL,
  `payment` float(10,2) DEFAULT NULL,
  `change` float(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `cart_data` longtext,
  PRIMARY KEY (`trans_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `order_transaction` */

LOCK TABLES `order_transaction` WRITE;

insert  into `order_transaction`(`trans_id`,`emp_id`,`total_amount`,`payment`,`change`,`date`,`cart_data`) values (28,17,438.00,500.00,62.00,'2023-07-12','a:1:{s:32:\"1f0e3dad99908345f7439f8ffabdffc4\";a:6:{s:2:\"id\";s:2:\"19\";s:3:\"qty\";d:2;s:5:\"price\";d:219;s:4:\"name\";s:17:\"Hawaiian Overload\";s:5:\"rowid\";s:32:\"1f0e3dad99908345f7439f8ffabdffc4\";s:8:\"subtotal\";d:438;}}'),(26,17,219.00,300.00,81.00,'2023-02-01','a:1:{s:32:\"1f0e3dad99908345f7439f8ffabdffc4\";a:6:{s:2:\"id\";s:2:\"19\";s:3:\"qty\";d:1;s:5:\"price\";d:219;s:4:\"name\";s:17:\"Hawaiian Overload\";s:5:\"rowid\";s:32:\"1f0e3dad99908345f7439f8ffabdffc4\";s:8:\"subtotal\";d:219;}}'),(27,17,876.00,1000.00,124.00,'2023-07-12','a:1:{s:32:\"1f0e3dad99908345f7439f8ffabdffc4\";a:6:{s:2:\"id\";s:2:\"19\";s:3:\"qty\";d:4;s:5:\"price\";d:219;s:4:\"name\";s:17:\"Hawaiian Overload\";s:5:\"rowid\";s:32:\"1f0e3dad99908345f7439f8ffabdffc4\";s:8:\"subtotal\";d:876;}}'),(24,17,998.00,1000.00,2.00,'2023-04-11','a:1:{s:32:\"c74d97b01eae257e44aa9d5bade97baf\";a:6:{s:2:\"id\";s:2:\"16\";s:3:\"qty\";d:2;s:5:\"price\";d:499;s:4:\"name\";s:15:\"Overload Trio A\";s:5:\"rowid\";s:32:\"c74d97b01eae257e44aa9d5bade97baf\";s:8:\"subtotal\";d:998;}}'),(25,17,20511.00,20520.00,9.00,'2023-07-27','a:10:{s:32:\"6f4922f45568161a8cdf4ad2299f6d23\";a:6:{s:2:\"id\";s:2:\"18\";s:3:\"qty\";d:10;s:5:\"price\";d:699;s:4:\"name\";s:34:\"12 Barkada Dealicious Duo Overload\";s:5:\"rowid\";s:32:\"6f4922f45568161a8cdf4ad2299f6d23\";s:8:\"subtotal\";d:6990;}s:32:\"b6d767d2f8ed5d21a44b0e5886680cb9\";a:6:{s:2:\"id\";s:2:\"22\";s:3:\"qty\";d:1;s:5:\"price\";d:279;s:4:\"name\";s:27:\"Veggies and Cheese Overload\";s:5:\"rowid\";s:32:\"b6d767d2f8ed5d21a44b0e5886680cb9\";s:8:\"subtotal\";d:279;}s:32:\"70efdf2ec9b086079795c442636b55fb\";a:6:{s:2:\"id\";s:2:\"17\";s:3:\"qty\";d:9;s:5:\"price\";d:400;s:4:\"name\";s:24:\"Pizza and Lasagna Trio A\";s:5:\"rowid\";s:32:\"70efdf2ec9b086079795c442636b55fb\";s:8:\"subtotal\";d:3600;}s:32:\"c74d97b01eae257e44aa9d5bade97baf\";a:6:{s:2:\"id\";s:2:\"16\";s:3:\"qty\";d:9;s:5:\"price\";d:499;s:4:\"name\";s:15:\"Overload Trio A\";s:5:\"rowid\";s:32:\"c74d97b01eae257e44aa9d5bade97baf\";s:8:\"subtotal\";d:4491;}s:32:\"1f0e3dad99908345f7439f8ffabdffc4\";a:6:{s:2:\"id\";s:2:\"19\";s:3:\"qty\";d:2;s:5:\"price\";d:219;s:4:\"name\";s:17:\"Hawaiian Overload\";s:5:\"rowid\";s:32:\"1f0e3dad99908345f7439f8ffabdffc4\";s:8:\"subtotal\";d:438;}s:32:\"c16a5320fa475530d9583c34fd356ef5\";a:6:{s:2:\"id\";s:2:\"31\";s:3:\"qty\";d:4;s:5:\"price\";d:999;s:4:\"name\";s:31:\"Barkada Bundle 999 - Good for 6\";s:5:\"rowid\";s:32:\"c16a5320fa475530d9583c34fd356ef5\";s:8:\"subtotal\";d:3996;}s:32:\"e369853df766fa44e1ed0ff613f563bd\";a:6:{s:2:\"id\";s:2:\"34\";s:3:\"qty\";d:1;s:5:\"price\";d:79;s:4:\"name\";s:18:\"Pizza Value Meal B\";s:5:\"rowid\";s:32:\"e369853df766fa44e1ed0ff613f563bd\";s:8:\"subtotal\";d:79;}s:32:\"a5771bce93e200c36f7cd9dfd0e5deaa\";a:6:{s:2:\"id\";s:2:\"38\";s:3:\"qty\";d:1;s:5:\"price\";d:99;s:4:\"name\";s:9:\"1.5L Coke\";s:5:\"rowid\";s:32:\"a5771bce93e200c36f7cd9dfd0e5deaa\";s:8:\"subtotal\";d:99;}s:32:\"182be0c5cdcd5072bb1864cdee4d3d6e\";a:6:{s:2:\"id\";s:2:\"33\";s:3:\"qty\";d:1;s:5:\"price\";d:189;s:4:\"name\";s:30:\"Creamy Carbonara Chicken Combo\";s:5:\"rowid\";s:32:\"182be0c5cdcd5072bb1864cdee4d3d6e\";s:8:\"subtotal\";d:189;}s:32:\"3c59dc048e8850243be8079a5c74d079\";a:6:{s:2:\"id\";s:2:\"21\";s:3:\"qty\";d:1;s:5:\"price\";d:350;s:4:\"name\";s:18:\"Pepperoni Overload\";s:5:\"rowid\";s:32:\"3c59dc048e8850243be8079a5c74d079\";s:8:\"subtotal\";d:350;}}'),(23,17,499.00,500.00,1.00,'2023-06-10','a:1:{s:32:\"c74d97b01eae257e44aa9d5bade97baf\";a:6:{s:2:\"id\";s:2:\"16\";s:3:\"qty\";d:1;s:5:\"price\";d:499;s:4:\"name\";s:15:\"Overload Trio A\";s:5:\"rowid\";s:32:\"c74d97b01eae257e44aa9d5bade97baf\";s:8:\"subtotal\";d:499;}}'),(22,17,50000.00,50000.00,0.00,'2023-08-01','a:1:{s:32:\"c74d97b01eae257e44aa9d5bade97baf\";a:6:{s:2:\"id\";s:2:\"16\";s:3:\"qty\";d:1;s:5:\"price\";d:499;s:4:\"name\";s:15:\"Overload Trio A\";s:5:\"rowid\";s:32:\"c74d97b01eae257e44aa9d5bade97baf\";s:8:\"subtotal\";d:499;}}'),(21,17,499.00,500.00,1.00,'2023-08-13','a:1:{s:32:\"c74d97b01eae257e44aa9d5bade97baf\";a:6:{s:2:\"id\";s:2:\"16\";s:3:\"qty\";d:1;s:5:\"price\";d:499;s:4:\"name\";s:15:\"Overload Trio A\";s:5:\"rowid\";s:32:\"c74d97b01eae257e44aa9d5bade97baf\";s:8:\"subtotal\";d:499;}}');

UNLOCK TABLES;

/*Table structure for table `payroll` */

DROP TABLE IF EXISTS `payroll`;

CREATE TABLE `payroll` (
  `payroll_id` int(15) NOT NULL AUTO_INCREMENT,
  `emp_id` int(15) DEFAULT NULL,
  `job_id` int(15) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pay_salary` float(10,2) DEFAULT NULL,
  PRIMARY KEY (`payroll_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `payroll` */

LOCK TABLES `payroll` WRITE;

insert  into `payroll`(`payroll_id`,`emp_id`,`job_id`,`from`,`to`,`date`,`pay_salary`) values (12,17,7,'2023-06-12','2023-07-12','2023-07-12',12000.00),(11,9,1,'2023-06-12','2023-07-12','2023-07-12',30000.00);

UNLOCK TABLES;

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `product_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` int(15) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

LOCK TABLES `product` WRITE;

insert  into `product`(`product_id`,`name`,`price`,`supplier`,`img`,`category`) values (18,'12 Barkada Dealicious Duo Overload',400,'Greenwich Franchise','duo12barkada.jpg','Special Offers'),(17,'Pizza and Lasagna Trio A',200,'Greenwich Franchise','pizzalasagnatrioa.png','Special Offers'),(16,'Overload Trio A',299,'Greenwich Franchise','overloadtrio.jpg','Special Offers'),(19,'Hawaiian Overload',100,'Greenwich Franchise','haiwainoverload.jpg','Pizza'),(20,'All-In Overload',119,'Greenwich Franchise','allinoverload.jpg','Pizza'),(21,'Pepperoni Overload',112,'Greenwich Franchise','pepperonioverload.jpg','Pizza'),(22,'Veggies and Cheese Overload',111,'Greenwich Franchise','vegiesandcheese.jpg','Pizza'),(23,'Beef and Mushroom Overload',115,'Greenwich Franchise','beefmushroom.png','Pizza'),(24,'Cheeseburger Classic',59,'Greenwich Franchise','cheeseburger.jpg','Pizza'),(25,'Ham and Pineapples Classic',99,'Greenwich Franchise','hamandcheese.png','Pizza'),(26,'Lasagna Supreme',79,'Greenwich Franchise','lasagnasupreme.jpg','Pasta'),(27,'Creamy Bacon Carbonara',49,'Greenwich Franchise','creamybaconcarbonara.jpg','Pasta'),(28,'Meaty Spaghetti',20,'Greenwich Franchise','meatyspag.jpg','Pasta'),(29,'Barkada Bundle 599 - Good for 5',400,'Greenwich Franchise','barkada5.jpg','Group Meals'),(30,'Barkada Bundle 499 - Good for 3',200,'Greenwich Franchise','barkadabundle3.png','Group Meals'),(31,'Barkada Bundle 999 - Good for 6',500,'Greenwich Franchise','barakada67.png','Group Meals'),(32,'Lasagna Chicken Combo',100,'Greenwich Franchise','lasagnachickencombo.png','Solo Meals'),(33,'Creamy Carbonara Chicken Combo',110,'Greenwich Franchise','creamycarbonorasolo.png','Solo Meals'),(34,'Pizza Value Meal B',40,'Greenwich Franchise','solomealb.png','Solo Meals'),(35,'Overload Meal D',99,'Greenwich Franchise','solomeald.png','Solo Meals'),(36,'1 pc Crunchy Chicken with Rice',49,'Greenwich Franchise','chickwrice.png','Solo Meals'),(37,'2 pcs Crunchy Chicken with Rice',111,'Greenwich Franchise','2pcchicken.png','Solo Meals'),(38,'1.5L Coke',45,'Greenwich Franchise','15.png','Drinks'),(39,'1L Pepsi',40,'Greenwich Franchise','1l.png','Drinks'),(40,'Iced Tea',25,'Greenwich Franchise','icedtea.jpg','Drinks');

UNLOCK TABLES;

/*Table structure for table `product_purchase` */

DROP TABLE IF EXISTS `product_purchase`;

CREATE TABLE `product_purchase` (
  `purchase_id` int(15) NOT NULL AUTO_INCREMENT,
  `product_id` int(15) DEFAULT NULL,
  `total_product` int(15) DEFAULT NULL,
  `total_amount` int(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `product_purchase` */

LOCK TABLES `product_purchase` WRITE;

UNLOCK TABLES;

/* Trigger structure for table `employee` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `audit_log_trigger` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `audit_log_trigger` AFTER INSERT ON `employee` FOR EACH ROW BEGIN
	INSERT INTO audit_log (action, user_id, timestamp)
	VALUES ('create employee', NEW.emp_id, NOW());
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
