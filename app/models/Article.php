<?php

/**
 * Class Article
 */
class Article extends Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;
}


/**
 * Article Model
 */
//class Article
//{
//    public static function first()
//    {
//        $connection = mysqli_connect("127.0.0.1","root","123456");
//        if (!$connection) {
//            die('Could not connect: ' . mysqli_connect_error());
//        }
//
//        mysqli_set_charset($connection, "UTF8");
//
//        mysqli_select_db($connection, "cmf_db");
//
//        $result = mysqli_query($connection, "SELECT * FROM articles limit 0,1");
//
//        if ( $row = mysqli_fetch_array($result) ) {
//            return $row;
//        }
//
//        mysqli_close($connection);
//
//        /*$connection = mysqli_connect("127.0.0.1","root","123456");
//        if (!$connection) {
//            die('Could not connect: ' . mysqli_connect_error());
//        }
//
//        mysqli_set_charset($connection, "UTF8");
//
//        mysqli_select_db($connection, "cmf_db");
//
//        $result = mysqli_query($connection, "SELECT * FROM articles limit 0,1");
//
//        if ( $row = mysqli_fetch_array($result) ) {
//            echo '<h1>'.$row["title"].'</h1>';
//            echo '<p>'.$row["content"].'</p>';
//        }
//
//        mysqli_close($connection);*/
//    }
//}

// 建表sql语句
//DROP TABLE IF EXISTS `articles`;
//
//CREATE TABLE `articles` (
//`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
//  `title` varchar(255) DEFAULT NULL,
//  `content` longtext,
//  PRIMARY KEY (`id`)
//) ENGINE=InnoDB DEFAULT CHARSET=utf8;
//
//LOCK TABLES `articles` WRITE;
///*!40000 ALTER TABLE `articles` DISABLE KEYS */;
//
//INSERT INTO `articles` (`id`, `title`, `content`)
//VALUES
//(1,'我是标题','<h3>我是内容呀~~</h3><p>我真的是内容，不信算了，哼~ O(∩_∩)O</p>'),
//	(2,'我是标题','<h3>我是内容呀~~</h3><p>我真的是内容，不信算了，哼~ O(∩_∩)O</p>');
//
///*!40000 ALTER TABLE `articles` ENABLE KEYS */;
//UNLOCK TABLES;