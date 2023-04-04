
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">

    	*{
    		margin: 0 0;
    		padding: 0 0;
    	}
    	.title_back{
    		height: 40px;
    		background: #336799;
    		color: #def9ff;
    		text-align: center;
    		line-height: 40px;
    		font-size: 60%;
    	}
    	h2{
    		color: #336799;
    		margin-left: 20px;
    		padding-top: 20px;
    	}
    	body{
    		background: #edf4fa;
    	}
    	.content{
    		width: 1400px;
    		background: #fffdf9;
    		margin: 0 auto;
    	}
    	.content_1 ,.content_2, .content_3, .content_4{
    		margin: 10px 20px;
    		border-style: solid;
            border: 1,1,1,1;
            border-color: #edebec;

    	}
    	.content_1{
    		height: 450px;
    	}
    	.content_2,.content_3{
    		height: 720px;
    	}
    	.content_4{
    		height: 180px;
    	}
    	p{
    		margin-left: 15px;
    		margin-top: 10px;
    		font-size: 50%;
    	}
    	h3{
    		margin-left: 15px;
    		margin-top: 10px;
    	}
    	h3>span{
    		font-size: 50%;
    		color: #edebec;
    	}
    	input{
    		margin-top: 10px;
    		margin-left: 5px;
    		margin-right:5px;

    	}
    	hr{
    		margin: 10px 10px;
    		border-style: solid;
            border: 1,0,0,0;
            border-color: #edebec;
    	}

    	.sub_bu{
    		display: block;
    		margin: 30px auto;
    		width: 200px;
    		height: 50px;
    		background:#f0f5f9;
    		border-radius:10px;
    		border-color: #fffdf9;
    	}
    	.sub_bu:hover{
    		background:#89cff0;

    	}
    </style>
    
</head>
<body>
	 <form action="textSubmit.php" method="post">
   <div class="title_back">正在考试 剩余时间(20:31)</div>

<div class="content"> 
	<h2>PHP基础语法考试题(一)</h2><br/>
<div class="content_1">
	<h3>一丶判断题<span>(共五题,每题四分)</span></h3><hr>
   <?php
   $count =0;
   $cuttt = 'opt';
		
	$arr1=array(
		array("title"=>"1.使用PHP写好的程序,在Linurx和windows平台上都可以运行.","option_true"=>"正确","option_false"=>"错误"),
		array("title"=>"2.PHP可以支持MySQL数据库,但不支持其它的数据库.","option_true"=>"正确","option_false"=>"错误"),
		array("title"=>"3.PHP有银多流行的MNC誓架,这些鞋架可以使PHP的开搜更加快捷.","option_true"=>"正确","option_false"=>"错误"),
		array("title"=>"4.Zend Studio是PHP中常用的IDE《集质开发环漫》","option_true"=>"正确","option_false"=>"错误"),
		array("title"=>"5.进行PHP程序开发时,可以借助软件和工具来捷高效率。","option_true"=>"正确","option_false"=>"错误")

	);

	foreach ($arr1 as $key=>$value) {
		$count++;
		echo "<p>";
		echo $value['title']."<br/>";
		echo '<input type="radio" name="'.$cuttt.$count.'"value ="T"> ';
		echo $value['option_true']."<br/>";
		echo '<input type="radio" name="'.$cuttt.$count.'"value ="F"> ';
		echo $value['option_false']."<br/>";
		echo "</p>";
	}
	?>
</div>
<div class="content_2">
	<h3>二丶单选题<span>(共五题,每题6分)</span></h3><hr>

   <?php
    $count =0;
	$arr1=array(
		array("title"=>"1.下列选项中,不是URL她址中所包吉的信息是().",
			"option_A"=>"A.主机号",
			"option_B"=>"B.端口号",
			"option_C"=>"C.网络协议",
			"option_D"=>"D.软件版本"),
		array("title"=>"2.PHP是一种()的编程语言:",
			"option_A"=>"A.解释性",
			"option_B"=>"B.编译型",
			"option_C"=>"C.两者都是",
			"option_D"=>"D.两者都不是"),
		array("title"=>"3.PHP支持多种风格的标记,以下不是PHP标记的是()",
			"option_A"=>"A.<? PHP ?>",
			"option_B"=>"B.<? ?>",
			"option_C"=>"C.<!-- --!>",
			"option_D"=>"D.<% %>"),
		array("title"=>"4.下列送项中,的数返回的关键字量()",
			"option_A"=>"A.back",
			"option_B"=>"B.go",
			"option_C"=>"C.return",
			"option_D"=>"D.break"),
		array("title"=>"5.PHP中存在参种变量,其中在函数内部定义的变量称之为()",
			"option_A"=>"A.可变变量",
			"option_B"=>"B.局部变量",
			"option_C"=>"C.全局变量",
			"option_D"=>"D.内部变量"),

	);

	foreach ($arr1 as $key=>$value) {
		$cuttt = 'chosoe';
		$count++;
		echo "<p>";
		echo $value['title']."<br/>";
		echo '<input type="radio" name="'.$cuttt.$count.'"value="A">';
		echo $value['option_A']."<br/>";
		echo '<input type="radio" name="'.$cuttt.$count.'"value="B"">';
		echo $value['option_B']."<br/>";
		echo '<input type="radio" name="'.$cuttt.$count.'"value="C"">';
		echo $value['option_C']."<br/>";
		echo '<input type="radio" name="'.$cuttt.$count.'"value="D"">';
		echo $value['option_D']."<br/>";
		echo "</p>";
	}
	?>
</div>
<div class="content_3">
	<h3>三丶多选题<span>(共五题,每题6分)</span></h3><hr>
   <?php
    $count =0;
	$arr1=array(
		array("title"=>"1.下列选项中,关于数据粪型的说法描速正确的是?",
			"option_A"=>"A.滓点数指的是数学中的小数,不能保存整数",
			"option_B"=>"B.在双引学内的变量会解析,而单引号内的T量会被原祥输出",
			"option_C"=>"C.布尔黄型只有true和fakse两个值,且区分大小写",
			"option_D"=>"D.·对于整数59可以使用十六进制致Dx3b进行表示"),
		array("title"=>"2.下列选H中,可以作为PHP的格出语句的是()。",
			"option_A"=>"A.echo",
			"option_B"=>"B.var_dump",
			"option_C"=>"C.print_r",
			"option_D"=>"D.以上答案都不对"),
		array("title"=>"3下面关于f语句的说法正确的是民()",
			"option_A"=>"A.i语句也成为单经克语司",
			"option_B"=>"B.iF语句的判断条件是布尔类型数据",
			"option_C"=>"C.if语句的判断条件是一合学箭串粪型数据",
			"option_D"=>"D.以上答案都不正确"),
		array("title"=>"4下列选项中,可以用来摸作数组的运算符是()",
			"option_A"=>"A.联合++",
			"option_B"=>"B.自增++",
			"option_C"=>"C.相等==",
			"option_D"=>"D.全等==="),
		array("title"=>"5.若在当前远行的脚本中需要调用其他文件的图数,司以使用以下哪个语句()",
			"option_A"=>"A.import",
			"option_B"=>"B.namespace",
			"option_C"=>"C.include",
			"option_D"=>"D.require"),


	);

	foreach ($arr1 as $key=>$value) {
		$cuttt = 'duo';
		$count++;
		echo "<p>";
		echo $value['title']."<br/>";
		echo '<input type="checkbox" name="'.$cuttt.$count.'[] "value ="A"> ';
		echo $value['option_A']."<br/>";
		echo '<input type="checkbox" name="'.$cuttt.$count.'[] "value ="B"> ';
		echo $value['option_B']."<br/>";
		echo '<input type="checkbox" name="'.$cuttt.$count.'[] "value ="C"> ';
		echo $value['option_C']."<br/>";
		echo '<input type="checkbox" name="'.$cuttt.$count.'[] "value ="D"> ';
		echo $value['option_D']."<br/>";
		echo "</p>";
	}
	?>
</div>
<div class="content_4">
	<h3>四丶填空题<span>(共2题,每题10分)</span></h3><hr>
   <?php
   $count =0;
	$arr1=array(
		array("title"=>"1.Apache的httpd服务程序默认使用的是__端口。"),
		array("title"=>"2.在PHP 中,__函数能将数组转就为字符串。")

	);

	foreach ($arr1 as $key=>$value) {
		$cuttt = 'tian';
		$count++;
		echo "<p>";
		echo $value['title']."<br/>";
		echo '请输入答案:'.'<input type="text" name="'.$cuttt.$count.'"value =""> ';
		echo "</p>";
	}
	?>
</div>
 <input type="submit" name="sub" value="提交" class="sub_bu" />
 <br> 
</div>
</from>
	//ttfft   acdbc  abc bcd ab cd ac AP PUT

</body>
</html>

