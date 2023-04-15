
<?php 
	// Start the session
	session_start();

	// set static username and password
	$username = 'khanh';
	$password = '123';

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
	<style>
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		button {
			background-color: #04AA6D;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}
		button:hover {
			opacity: 0.8;
		}

		.container {
  			padding: 16px;
			max-width: 500px;
			margin: 0 auto;
		}
		.welcome {
			text-align: center;
			text-transform: capitalize;
			font-size: 25px;
			font-weight: bold;
		}

	</style>
</head>
<body>
	<form action="index.php" method="post">
		<div class="container">

			<p class="welcome">Chào mừng bạn đến với vilas việt nam</p>

			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>
			
			<button type="submit" name='submit'>Login</button>
			
		</div>
	</form>
	
</body>
</html>


<?php 

	// if user click on login button
	if(isset($_POST["submit"])) {

		// check if username and password is empty
		if(!empty($_POST["username"]) && !empty($_POST["password"])) {
			
			if($_POST["username"] === $username && $_POST["password"] === $password) {
				$_SESSION["username"] = $_POST["username"];
				$_SESSION["password"] = $_POST["password"];

				// if username and password are right redirect to newsFeed page
				header('Location: newsFeed.php');
			}else {
				echo "Thông tin đăng nhập không đúng vui lòng kiểm tra lại";
			}

		}else{
			echo "vui lòng điền đủ thông tin đăng nhập!";
		}
	}

?>