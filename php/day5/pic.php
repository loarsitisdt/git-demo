<?php
$arr=array(
		1=>array("1.使用PHP写好的程序,在Linurx和windows平台上都可以运行.","1"),
		2=>array("2.使用PHP写好的程序,在Linurx和windows平台上都可以运行.","2"),
		3=>array("3.使用PHP写好的程序,在Linurx和windows平台上都可以运行.","3"),
		4=>array("4.使用PHP写好的程序,在Linurx和windows平台上都可以运行.","4"),
		5=>array("5.使用PHP写好的程序,在Linurx和windows平台上都可以运行.","5")
	);

//对数据进行计数
$total_page =count($arr);

$page =isset($_GET['page']) ? $_GET['page'] : 1;
$page =max($page,1);
$page =min($page,count($arr));
$cookie_arr= array();



//判断是否存在
if(isset($_COOKIE['history']))
{//非第一次访问
	$cookie_arr = explode(",",$_COOKIE['history']);

	foreach ($cookie_arr as $key=>$value) {

		//如果存在相同的元素,则删掉
		if($value==$page)
		{
			//unset销毁变量
			unset($cookie_arr[$key]);
		}
	}
	//再添加一个新的数据
	$cookie_arr[] = $page;


	$str =implode(",", $cookie_arr);
	setcookie("history",$str);


}else{//第一次访问

	//第一次访问,数据肯定不会重复
	$cookie_arr[] = $page;
	setcookie("history",$page);
}

//对数组进行排序
krsort($cookie_arr);



function clearHistory(){

	//让这个数组是全局变量
	global $cookie_arr;
	setcookie("history","",time()-1);

	//把数组变成全局变量
	$cookie_arr =array();
}


if(isset($_GET['action']))
{
	$action =$_GET['action'];
	// switch($action)
	// {
	// 	case "clear";
	// 		clearHistory();
	// 		break;
	// 	case "download";
	// 		echo "...";
	// 		break;
	// 	default:
	// 		echo "error";
	// 		break;
	// }
	if($action=="clear"){
		clearHistory();
	}
}
require "test.php";
?>