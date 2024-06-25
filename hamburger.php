<?php
require_once 'config.php';
session_start();

if (isset($_SESSION['loggedintoParfyApp']) && $_SESSION['loggedintoParfyApp'] == true) {
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ( mysqli_connect_errno() ) {
		exit('Herror connect sequel: ' . mysqli_connect_error());
	}
	if ($result = $conn -> query("SELECT * FROM par_prods_extra LEFT JOIN par_prods ON par_prods_extra.id = par_prods.id")) {
			print_r($result);
	} 

	//all page var
	$user_name = htmlspecialchars($_SESSION['username']);

	mysqli_close($conn);
} else {
	$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  	$redi_link = str_replace('hamburger', 'index', $actual_link);
  	header("Location:".$redi_link);
}


?>