<?php
require_once 'config.php';
session_start();

if (isset($_SESSION['loggedintoParfyApp']) && $_SESSION['loggedintoParfyApp'] == true) {
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ( mysqli_connect_errno() ) {
		exit('Herror connect sequel: ' . mysqli_connect_error());
	}
	$sql = "SELECT * FROM par_prods_extra LEFT JOIN par_prods ON par_prods_extra.id_prod = par_prods.id_prod";
	$result = $conn -> query($sql);
	$selrez = array();
	if ($result->num_rows > 0) {
		while($results = $result->fetch_assoc()) {
			$selrez[] = $results;
		}
	} else {
		echo '<h2>No results</h2>';
	}

	//all page var
	$user_name = htmlspecialchars($_SESSION['username']);
	mysqli_close($conn);
} else {
	$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  	$redi_link = str_replace('hamburger', 'index', $actual_link);
  	header("Location:".$redi_link);
}
if(isset($user_name)) {
	echo 'Hello '.$user_name.'<br>';
	print_r($selrez);
}

?>