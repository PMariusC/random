<?php
require_once 'config.php';
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
session_start();

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ( mysqli_connect_errno() ) {
	exit('Herror connect sequel: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Fill all fields we are not mind readers!');
}
//Some storage 
if ($stmt = $con->prepare('SELECT name, pass FROM par_users WHERE user = ?')) {
	// Bind s as string
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();
		if (password_verify($_POST['password'], $password)) {
			$_SESSION['loggedintoParfyApp'] = true;
    		$_SESSION['username'] = $id;
  			$redi_link = str_replace('auth', 'hamburger', $actual_link);
  			header("Location:".$redi_link);
		} else {
			$redi_link = str_replace('auth', 'index', $actual_link);
			header("Location:".$redi_link."?error=wrong");
		}
	} else {
		$redi_link = str_replace('auth', 'index', $actual_link);
		header("Location:".$redi_link."?error=wrong");
	}
	$stmt->close();
} else {
	$redi_link = str_replace('auth', 'index', $actual_link);
	header("Location:".$redi_link."?error=wrong");
}
?>