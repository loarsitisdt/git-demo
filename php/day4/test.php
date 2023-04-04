
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>

<body>
	<a href="?page=<?=$page-1?>">上一张</a>
	<a href="?page=<?=$page+1?">下一张</a>
	<br>
	<img src="<?=arr[$page-1]['src']?>" />
</body>
</html>

