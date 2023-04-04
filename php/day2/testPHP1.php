<?php
	// $a =1;
	// $b =1;
	// for($a =1;$a<=9;$a++){
	// 	for($b=1;$b<=$a;$b++){
	// 		$c =$a*$b;
	// 		// echo $a.='*'.$b.='='.$c;
	// 		echo $b.'*'.$a.'=';
	// 		echo $c;
	// 		echo "&nbsp;";
	// 	}
	// 		echo "<br>";

	// }
	
/**数组定义**/
	$arr =array(0=>"aa",1=>"bb",2=>"cc");


/**数组的使用**/
	// echo $arr[0];
	// unset($arr[0]);//删除数组中的元素
	// echo $arr[0];
		echo '<br/>';


	foreach ($arr as $value) {
		echo $value.'&nbsp;';
		// code...
	}
		echo '<br/>';

	foreach ($arr as $key=>$value) {
		echo $value.'&nbsp;'.'键:'.$key;
		echo '<br/>';
		// code...
	}

		echo '<br/>';

	/*定义二位数组*/
	$arr2 =array(
		array("id"=>1,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>2,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>3,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>4,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>5,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>6,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>7,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>8,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>9,"name"=>"六","addre"=>"北京","emile"=>"211.com"),
		array("id"=>9,"name"=>"六","addre"=>"北京","emile"=>"211.com")

	
		

	);
 		echo "<hr>";

	

		print_r($arr2);
 	foreach($arr2 as $key=>$value){
 		echo "<hr>";

 		echo "当前数组下标为:".$key;
 		echo "<br/>";
 		echo "id:".$value['id']."<br/>";
 		echo "name:".$value['name']."<br/>";
 		echo "addre:".$value['addre']."<br/>";
 		echo "emile:".$value['emile']."<br/>";

 		echo "<hr>";
 	}

 		echo "<br/>";
 		echo "<br/>";
 		echo "<br/>";
 		echo "<br/>";

		array_unique($arr2);//移除数组中重复的元素
	foreach($arr2 as $key=>$value){
 		echo "<hr>";

 		echo "当前数组下标为:".$key;
 		echo "<br/>";
 		echo "id:".$value['id']."<br/>";
 		echo "name:".$value['name']."<br/>";
 		echo "addre:".$value['addre']."<br/>";
 		echo "emile:".$value['emile']."<br/>";

 		echo "<hr>";
 	}










 		echo "<hr>";



 		$arr3 =array(
 			"awdwa"=>"36",
 			2=>"37",
 			3=>"37",
 			6=>"99",
 			4=>"66",
 			5=>"33"

 		);
 		print_r($arr3);
 		echo '<br/>';
 		foreach($arr3 as $value){
 			echo $value.' ';
 		}
 		array_unique($arr3);
 		echo '<br/>';

		foreach($arr3 as $value){
 		
 			echo $value.' ';
 		}
 		echo '<br/>';
 		sort($arr3);
 		foreach($arr3 as $value){
 		
 			echo $value.' ';
 		}


?>


<table>
	<?php for ($i=0; $i <10 ; $i++) { 
		echo '<tr>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			</tr>';
	}?>
</table>
<?php 









