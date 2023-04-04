<?php

//获取数据
require 'shuju.php';



if(isset($_POST['sub'])){
	$username = $_POST['username'];
	$password = $_POST['password'];


	foreach ($arr as $key => $value) {
		if ($username==$value['username']) {
			// code...
			if($password == $value['password'])
			{
				session_start();
				$_SESSION['id'] =$key;
				//跳转到新页面
				header("Location:success1.php");
				exit();
			}else{
				echo "<script>alert('密码错误!!');</script>";
				echo "<script>window.history.go(-1);</script>";
			}

		}
	}

	echo "<script>alert('用户名不存在!!');</script>";
	echo "<script>window.history.go(-1);</script>";
	exit;
}

require 'login.html';
?>