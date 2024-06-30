<html>
	<title>Prod</title>
	<body>
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

	//submit form
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nqty = $_POST["newqty"];
		$id_ch = $_POST["prod_id"];
		$sqlchange ="UPDATE par_prods SET `qty`= ".$nqty." WHERE id_prod = ".$id_ch;
		if ($conn -> query($sqlchange)) {
			echo '<h2 style="color:ff0000;">DONE</h2>';
			echo "<meta http-equiv='refresh' content='0'>";
		}
		if ($conn -> errno) {
			echo '<h2 style="color:ff0000;">ERROR: '.$mysqli→error.'</h2>';
		}
	}
	mysqli_close($conn);
} else {
	$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  	$redi_link = str_replace('hamburger', 'index', $actual_link);
  	header("Location:".$redi_link);
}
if(isset($user_name)) {
	echo 'Hello '.$user_name.'<br>';
	echo '<div style="display:flex;flex-direction: row;">';
	foreach($selrez[0] as $k=>$v) {
			echo '
				<div style="font-weight:bold;padding-right:5px;border-right:1px solid #000;margin: 0 5px 10px 0;">'.$k.'</div>
			';
	}
	echo '</div>';
	foreach($selrez as $key=>$row){
		echo '<div style="display:flex;flex-direction: row;">';
		foreach($row as $k=>$data) {
			echo '
				<div style="padding-right:5px;border-right:1px solid #000;margin: 0 5px 10px 0;">'.$data.'</div>
			';
		}
		echo '</div>';
	}
}
?>

<form action="" method="post">
	<label for="prod_id"></label>
	<input type="text" name="prod_id" onkeypress="return onlyNumberKey(event)" placeholder="ID Product" id="prod_id" required>
	<label for="newqty"></label>
	<input type="text" name="newqty" onkeypress="return onlyNumberKey(event)" placeholder="New Quantity" id="newqty" required>
	<input type="submit" value="Submit">
</form>
	<script>
		function onlyNumberKey(evt) {
            // Only ASCII character in that range allowed
            let ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>

	</body>
</html>