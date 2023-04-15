<?php
    session_start();
?>

<html>
<body>


Welcome <?php echo $_SESSION["username"]; ?><br>
bạn đã đăng nhập thành công

<?php
   echo '<p>Bạn có muốn đăng xuất</p>'
?>

</body>
</html>