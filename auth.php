<?php
$servername = "localhost";
$username = "xx@xxxxx.com";
$password = "xxxxxx";
$dbname = "parfyapp";

$con = mysqli_connect($servername, $username, $password, $dbname);
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
	$stmt->close();
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();
		if (password_verify($_POST['password'], $password)) {
			//create cookie and redirect 
		} else {
		echo 'Incorrect username and/or password!';
		}
	}
} else {
	echo 'Incorrect username and/or password!';
}
?>