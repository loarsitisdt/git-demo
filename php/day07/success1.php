<?php
require 'shuju.php';
require 'init.php';

session_start();
$id = $_SESSION['id'];
$username = $arr[$id]['username'];
$class =$arr[$id]['class'];
echo "当前位置success1.php,当前用户名".$username."班级为:".$class;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>

<body>
		<br>
		<a href="success2.php">跳转到success2.php</a>

		<br>
		<a href="loginout.php">退出登录</a>
</body>
</html>

