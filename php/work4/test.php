
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
    	a:link{
    		color: black;
    	}
    </style>

<body>
	<a href="?page=1">首页</a>
	<a href="?page=<?=max($page-1,1);?>">上一页</a>
	<a href="?page=<?=min($page+1,count($arr));?>">下一页</a>
	<a href="?page=<?=$total_page?>">尾页</a>
	<br>
	<img src = '<?=$arr[$page][0]?>'></img>
	
</body>
</html>

