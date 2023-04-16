<?php
    session_start();

    if(!isset($_SESSION["username"]) || ! isset($_SESSION["password"])) {

        //redirect to index.php
        header('Location: index.php');

    }else {
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newsFeed</title>
    <style>
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="welcome">Chào mừng bạn <?php echo $_SESSION["username"]; ?>  đến với Vilas Việt Nam</h1>
        <p>
            <?php echo $_SESSION["username"]; ?> đã đăng nhập thành công!
        </p>
        
        <p>Bạn có muốn <a href="logout.php">Đăng Xuất</a></p>

    </div>
    
</body>
</html>
