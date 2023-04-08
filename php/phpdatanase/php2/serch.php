<?php

//1.连接数据库服务器
$link = mysqli_connect("localhost","root","root");


//2.选择数据库
mysqli_select_db($link,"news");




// $search = $_GET['search'];
// if($search=="")
// {
// 	$sql = "select *from news";
// }else
// {
// 	$sql = "select *from news where title =$search";
// }

$search = $_POST['search'];

if(isset($_POST['search']) && $_POST['search']!="")
{
	
	$sql = 'select *from news where title = "'.$search.'"';
}else{
	$sql = "select *from news";
}

//执行MySQL语句
$result = mysqli_query($link,$sql);


$data = mysqli_fetch_all($result);

echo $sql;

//释放资源,关闭连接
mysqli_free_result($result);
mysqli_close($link);
require 'search.html';
?>