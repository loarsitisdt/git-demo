<?php


if(!isset($_GET['id']))
{
	header("Location:phpTest.php");
	exit;
}
$id = $_GET['id'];

$link = mysqli_connect("localhost","root","root");

mysqli_select_db($link,"news");

$sql = "select *from table1";




require "newshow.html";



?>