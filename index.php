<html>
<head>
	<title>Parfy's WebApp</title>
</head>
<body>
<?php
if(isset($_GET['error']) && $_GET['error'] == 'wrong'){
	echo '<h2 style="color: #FF0000">WRONG SOMETHING TRY AGAIN</h2>';
}
?>
 	<h1>Login:</h1>
 	<form action="auth.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Email" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
	</form>
</body>
</html>
