<?php

$arr =array(
	array("id"=>1,"src"=>"1.png"),
	array("id"=>2,"src"=>"2.png"),
	array("id"=>3,"src"=>"3.png"),
	array("id"=>4,"src"=>"4.png"),
	array("id"=>5,"src"=>"5.png"),
	array("id"=>6,"src"=>"6.png"),
	array("id"=>7,"src"=>"7.png"),
	array("id"=>8,"src"=>"8.png")
);

$page =isset($_GET['page'])?$_GET['page']:1;
$page =max($page,1);
$page =min($page,count($arr));

	require "test.php";
?>