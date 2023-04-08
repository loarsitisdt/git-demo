<?php

//1.连接数据库服务器
$link = mysqli_connect("localhost","root","root");

//2.选择数据库
mysqli_select_db($link,"news");

$sql = "select *from table1";


//执行MySQL语句
$result = mysqli_query($link,$sql);

$author = "use1";

//处理结果集
//$arr = mysqli_fetch_array($result);


//三种处理结果集的方式

// $arr = array();
// while ($row = mysqli_fetch_array($result)) {

// 	// code...
// 	$arr[] = $row;
// }


// while($row = mysqli_fetch_assoc($result))
// {
// 	$arr[] = $row;
// }


while($row = mysqli_fetch_row($result))
{
	$row[] = $author;
	$arr[] = $row;
}


// $arr =mysqli_fetch_all($result);




// echo "<pre>";
// print_r($arr);
// echo "<\pre>";



require "phpTest.html";


//释放资源,关闭连接
mysqli_free_result($result);
mysqli_free_result($link);
?>
