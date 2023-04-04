<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    	h1{
    		text-align: center;
    	}
    </style>
    <body>
    	<h1>您的分数为:<?php

	$score =0;
	//ttfft   acdbc  abc bcd ab cd ac AP PUT
	$str1 = $_POST['opt1'];
	$str2 = $_POST['opt2'];
	$str3 = $_POST['opt3'];
	$str4 = $_POST['opt4'];
	$str5 = $_POST['opt5'];

	$str6 = $_POST['chosoe1'];
	$str7 = $_POST['chosoe2'];
	$str8 = $_POST['chosoe3'];
	$str9 = $_POST['chosoe4'];
	$str10 = $_POST['chosoe5'];

	$st1 =$_POST['duo1'];
	$st2 =$_POST['duo2'];
	$st3 =$_POST['duo3'];
	$st4 =$_POST['duo4'];
	$st5 =$_POST['duo5'];
	 

	$stt1 =$_POST['tian1'];
	$stt2 =$_POST['tian2'];
	if($str1=="T"){
		$score+=4;
	}
	if($str2=="T"){
		$score+=4;
	}
	if($str3=="F"){
		$score+=4;
	}
	if($str4=="F"){
		$score+=4;
	}
	if($str5=="T"){
		$score+=4;
	}

	if($str6=="A"){
		$score+=6;
	}
	if($str7=="C"){
		$score+=6;
	}
	if($str8=="D"){
		$score+=6;
	}
	if($str9=="B"){
		$score+=6;
	}
	if($str10=="C"){
		$score+=6;
	}

//abc bcd ab cd ac
	if($st1[0]=="A" and $st1[1]=="B" and $st1[2]=="C")
	{
		$score+=6;
	}
	if($st2[0]=="B" and $st2[1]=="C" and $st2[2]=="D")
	{
		$score+=6;
	}
	if($st3[0]=="A" and $st3[1]=="B")
	{
		$score+=6;
	}
	if($st4[0]=="C" and $st4[1]=="D")
	{
		$score+=6;
	}
	if($st5[0]=="A" and $st5[1]=="C")
	{
		$score+=6;
	}


	if($stt1=="AP"){
		$score+=10;
	}

	if($stt2=="PUT"){
		$score+=10;
	}


	echo $score;
	
?>分</h1>
    </body>

</html>

