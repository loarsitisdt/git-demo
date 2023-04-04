<?php

//将图像元素存储到数组当中
$arr=array(
		1=>array("src_1.jpg"),
		2=>array("src_2.jpg"),
		3=>array("src_3.jpg"),
		4=>array("src_4.jpg"),
		5=>array("src_5.jpg")
	);

//对数据进行计数,这个是尾页
$total_page =count($arr);


//GET获取test.pbp 的page的值,然后通过isset进行判断,最后通过二元
$page =isset($_GET['page']) ? $_GET['page'] : 1;

// //如果page的结果小于1,那么需要让它等于1
// $page =max($page,1);

// //如果page的结果大于总数,那么需要让它等于总数
// $page =min($page,count($arr));



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>

    <style>
    	a{
    		text-decoration: none;

    	}
    	img{
    		display: block;
    		margin: 0 auto;
    	}
    	div{
    		border: 1px ,1px, 1px, 1px;
    		border-style: solid;
    		widows: 200px;

    	}
    </style>

<body>
	<div>
	<a href="?page=1">首页</a>
	<a href="?page=<?=max($page-1,1);?>">上一页</a>
	<a href="?page=<?=min($page+1,count($arr));?>">下一页</a>
	<a href="?page=<?=$total_page?>">尾页</a>
	</div>
	<br>
	<img src = '<?=$arr[$page][0]?>'></img>
	
</body>
</html>
