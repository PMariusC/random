<html>
<head>
	<title>Parfy's WebApp</title>
</head>
<body>
 <h1>If you see this message probably an error occured or your settings suck!
 <br> See error below or wait for your modem to dial the interwebs or something!</h1>
</body>
</html>
<?php 
require_once 'config.php';

try {
  $conn = new PDO("mysql:host=".DB_HOST."", DB_USER,  DB_PASS);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $sql = "CREATE DATABASE parfyapp";
  $conn->exec($sql);
  $sql = "use parfyapp";
  $conn->exec($sql);
  $sql = "CREATE TABLE IF NOT EXISTS `parfyapp`.`par_prods` ( `id` int(10) NOT NULL AUTO_INCREMENT , `id_prod` int(10) NOT NULL , `cod_intern` varchar(13) NOT 	NULL , `cod_supplier` varchar(13) NOT NULL , `price` decimal(20,6) NOT NULL , `price_supplier` decimal(20,6) NOT NULL , `qty` int(10) 	NOT NULL , `id_warhouse` int(10) NOT NULL , PRIMARY KEY (`id`),UNIQUE KEY (`cod_intern`)) ENGINE = InnoDB;
  		CREATE TABLE `parfyapp`.`par_prods_extra` ( `id` int(10) NOT NULL AUTO_INCREMENT , `id_prod` int(10) NOT NULL , `name` varchar(255) NOT NULL, `link` varchar(255) NOT NULL , `img_link` varchar(255) NOT NULL , `notes` varchar(255) NOT NULL , `EAN` varchar(13)  NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
  		CREATE TABLE `parfyapp`.`par_warehouse` ( `id` int(10) NOT NULL AUTO_INCREMENT , `id_warehouse` int(10) NOT NULL , `name` varchar(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 
  		CREATE TABLE `parfyapp`.`par_users` ( `id` int(10) NOT NULL AUTO_INCREMENT , `user` varchar(255) NOT NULL , `name` varchar(255) NOT NULL , `pass` varchar(255) NOT NULL , `role` varchar(255) NOT NULL ,PRIMARY KEY (`id`), UNIQUE (`user`)) ENGINE = InnoDB; 
  		";
  $conn->exec($sql);
  	$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  	$redi_link = str_replace('install', 'index', $actual_link);
  	header("Location:".$redi_link);
	die();
} catch(PDOException $e) {
	if(str_contains($e->getMessage(), "database exists")) {
		$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  		$redi_link = str_replace('install', 'index', $actual_link);
  		header("Location:".$redi_link);
		die();
	} else {
  		echo "Connection failed: " . $e->getMessage();
	}
}

 ?>