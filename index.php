
<?php 
	// Start the session
	session_start();
	$username = 'khanh';
	$password = '123';

	if(isset($_POST["submit"])) {

		if(!empty($_POST["username"]) && !empty($_POST["password"])) {
			
			if($_POST["username"] === $username && $_POST["password"] === $password) {
				$_SESSION["username"] = $_POST["username"];
				$_SESSION["password"] = $_POST["password"];
				header('Location: xuly.php');
			}
		}

		print_r($_POST);
	}

?>


<html>
<body>

<form action="index.php" method="post">
	User Name: <input type="text" name="username"><br>
	Password:  <input type="text" name="password"><br>
	<input type="submit" name='submit'>
</form>

</body>
</html>