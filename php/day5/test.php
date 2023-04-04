
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>

<body>
	<a href="?page=1">首页</a>
	<a href="?page=<?=$page-1?>">上一页</a>
	<a href="?page=<?=$page+1?>">下一页</a>
	<a href="?page=<?=$total_page?>">尾页</a>
	<h1><?=$arr[$page][0]?></h1>
	<p><?=$arr[$page][1]?></p>

	<label>浏览历史:<a href="?action=clear">(清除浏览历史记录)</a></label>
	<ul>

		<?php foreach ($cookie_arr as $value) { ?>
			<li><?=$arr[$value][0]?></li>
		<?php } ?>
	</ul>
</body>
</html>

