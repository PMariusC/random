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
$servername = "localhost";
$username = "ma@baker.com";
$password = "1qaz2wsx";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $sql = "CREATE DATABASE parfyapp";
  $conn->exec($sql);
  $sql = "use parfyapp";
  $conn->exec($sql);
  $sql = "CREATE TABLE IF NOT EXISTS `parfyapp`.`par_prods` ( `id` INT NOT NULL AUTO_INCREMENT , `cod_intern` INT NOT 	NULL , `cod_supplier` INT NOT NULL , `price` DECIMAL NOT NULL , `price_supplier` DECIMAL NOT NULL , `qty` INT 	NOT NULL , `id_warhouse` INT NOT NULL , PRIMARY KEY (`id`),UNIQUE KEY (`cod_intern`)) ENGINE = InnoDB;
  		CREATE TABLE `parfyapp`.`par_prods_extra` ( `id` INT NOT NULL AUTO_INCREMENT , `id_prod` INT NOT NULL , `name` varchar(255) NOT NULL, `link` varchar(255) NOT NULL , `img_link` varchar(255) NOT NULL , `notes` varchar(255) NOT NULL , `EAN` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
  		CREATE TABLE `parfyapp`.`par_warehouse` ( `id` INT NOT NULL AUTO_INCREMENT , `id_warehouse` INT NOT NULL , `name` varchar(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 
  		CREATE TABLE `parfyapp`.`par_users` ( `id` INT NOT NULL AUTO_INCREMENT , `user` varchar(255) NOT NULL , `name` varchar(255) NOT NULL , `pass` varchar(255) NOT NULL , `hash` varchar(255) NOT NULL , `role` varchar(255) NOT NULL ,PRIMARY KEY (`id`), UNIQUE (`user`)) ENGINE = InnoDB; 
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