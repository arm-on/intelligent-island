<?php
include_once('../globals/db_connection.php');
include_once('../database/db_functions.php');
if(isset($_GET['item'])){
  $num=$_GET['item'];
  $item=select_row(
    database_connection\get::arr(),'products',array('id'=>$num)
  );
  echo $item['min_price'];
}
?>
