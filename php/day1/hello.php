
<?php
  echo $_POST['username'];/*自动运用标签*/
  echo "<br />";
  echo strip_tags($_POST['username']);/*自动去除标签*/
  echo "<br />";
   echo htmlentities($_POST['username']);/*过滤标签*/
  echo "<br />";
    define("PI", 3.14);
    echo PI;
  echo "<br />";



  /*---------------------------------------------*/
  echo $_POST['password'];
  echo "<br />";
  echo is_numeric($_POST['password']);
  echo "<br />";

  /*---------------------------------------------*/
  echo $_POST['ty'];
  echo "<br />";

  /*---------------------------------------------*/

  print_r($_POST['city']);
  echo "<br />";

  /*---------------------------------------------*/

  echo $_POST['tiyu'];
  echo "<br />";


  /*---------------------------------------------*/
  $a =10;
  $b ="loarsitisdt";
  echo $a;
  echo "<br />";
  echo $b;
  echo "<br />";
  var_dump($a); //查看是什么类型
  echo "<br />";
  var_dump($b); //查看是什么类型
  echo "<br />";
  echo "<br />";




  if($a){
    echo 'true';
  }else
  {
    echo 'false';
  }
?>  






