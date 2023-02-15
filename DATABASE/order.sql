
DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE `orderdetails` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `order_name` varchar(1000) NOT NULL DEFAULT '',
  `order_price` double NOT NULL DEFAULT '0',
  `order_quantity` int(10) unsigned NOT NULL DEFAULT '0',
  `order_total` double NOT NULL DEFAULT '0',
  `order_status` varchar(45) NOT NULL DEFAULT '',
  `order_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`order_id`),
  KEY `FK_orderdetails_1` (`user_id`),
  CONSTRAINT `FK_orderdetails_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edgedata`.`orderdetails`
--

/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` (`order_id`,`user_id`,`order_name`,`order_price`,`order_quantity`,`order_total`,`order_status`,`order_date`) VALUES 
 (20,4,'Item2 ',100,2,200,'Ordered_Finished','2016-11-14'),
 (23,4,'Item2 ',100,3,300,'Ordered_Finished','2016-11-14'),
 (30,4,'Item2 ',100,1,100,'Ordered','2016-11-15'),
 (32,4,'Item4',60,2,120,'Ordered','2016-11-15');
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;