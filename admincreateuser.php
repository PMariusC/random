
<html>
<form action="" method="post">
		<label for="username"></label>
	<input type="text" name="username" placeholder="Email" id="username" required>
		<label for="name"></label>
	<input type="text" name="name" placeholder="Name" id="name" required>
		<label for="pass"></label>
	<input type="password" name="pass" placeholder="Password" id="pass" required>
		<label for="role"></label>
	<select name="role" id="role">
  		<option value="admin">Admin</option>
  		<option value="user">User</option>
	</select>
	<input type="submit" value="Submit">
</form>
</html>

<?php 
require_once 'config.php';

//TO Do auth only for admin

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ( mysqli_connect_errno() ) {
	exit('Herror connect sequel: ' . mysqli_connect_error());
}

$email= "";
$name = "";
$pass = "";
$role = "";
$emailErr = $nameErr = $passErr = "";

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function set_usepass($datpas) {
		//PASSWORD_DEFAULT or PASSWORD_BCRYPT or PASSWORD_ARGON2I
		$pass = password_hash($datpas, PASSWORD_DEFAULT);
		return $pass;
	}

	if (empty($_POST["username"])) {
    	$emailErr = "Email is required";
  	} else {
    	$email = test_input($_POST["username"]);
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      		$emailErr = "Invalid email format";
    	}
  	}

	if (empty($_POST["name"])) {
    	$nameErr = "Name is required";
  	} else {
   		$name = test_input($_POST["name"]);
    	if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
   			$nameErr = "Only letters and white space allowed";
    	}
    }

    if (empty($_POST["pass"])) {
    	$passErr = "Password is required";
    } else {
    	$pass = set_usepass($_POST["pass"]);
    }
    $role = $_POST["role"];

	//the insert
	$sqlins = "INSERT INTO `par_users` (user, name, pass, role) VALUES 
    ('$email', '$name', '$pass', '$role');";

    if ($con->query($sqlins) === TRUE) {
  		echo "New loser added successfully";
	} else {
  		echo "Error: " . $sqlins . "<br>" . $con->error;
	}

$con->close();
}
?>