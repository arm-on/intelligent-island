<?php
function connect_to_mysql_server($conn_arr){
  $host=$conn_arr['host'];
  $user=$conn_arr['user'];
  $pass=$conn_arr['pass'];
  $db=$conn_arr['database'];
  $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
  return $conn;
}
function execute_command_and_close_connection(&$stmt,&$conn){
  $stmt->execute();
  $conn=null;
}
function execute_command_fetch_field_and_close_connection(&$stmt,&$conn,$field){
  $stmt->execute();
  $result=$stmt->fetch(PDO::FETCH_ASSOC);
  $result=$result[$field];
  $conn=null;
  return $result;
}
function execute_command_fetch_row_and_close_connection(&$stmt,&$conn){
  $stmt->execute();
  $result=$stmt->fetch(PDO::FETCH_ASSOC);
  $conn=null;
  return $result;
}
function execute_command_fetch_rows_and_close_connection(&$stmt,&$conn){
  $stmt->execute();
  $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $conn=null;
  return $result;
}
function add_row($conn_arr,$table,$input){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='INSERT INTO '.$table.' (';
  foreach($input as $field=>$value){
    $pdo_str.=$field.',';
  }
  $pdo_str=substr($pdo_str,0,-1);
  $pdo_str.=') VALUES (';
  foreach($input as $field=>$value){
    $pdo_str.=':'.$field.',';
  }
  $pdo_str=substr($pdo_str,0,-1);
  $pdo_str.=')';
  $stmt=$conn->prepare($pdo_str);
  foreach($input as $field=>&$value){
    $stmt->bindParam(':'.$field,$value);
  }
  execute_command_and_close_connection($stmt,$conn);
}
function edit_row($conn_arr,$table,$input,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='UPDATE '.$table.' SET ';
  foreach($input as $field=>$value){
    $pdo_str.=$field.'=:'.$field.',';
  }
  $pdo_str=substr($pdo_str,0,-1);
  $pdo_str.=' WHERE ';
  foreach($condition as $field=>$value){
    $pdo_str.=$field.'=:cond'.$field.' AND ';
  }
  $pdo_str=substr($pdo_str,0,-4);
  $stmt=$conn->prepare($pdo_str);
  foreach($input as $field=>&$value){
    $stmt->bindParam(':'.$field,$value);
  }
  foreach($condition as $field=>&$value){
    $stmt->bindParam(':cond'.$field,$value);
  }
  execute_command_and_close_connection($stmt,$conn);
}
function edit_row_union_condition($conn_arr,$table,$input,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='UPDATE '.$table.' SET ';
  foreach($input as $field=>$value){
    $pdo_str.=$field.'=:'.$field.',';
  }
  $pdo_str=substr($pdo_str,0,-1);
  $pdo_str.=' WHERE ';
  foreach($condition as $field=>$value){
    $pdo_str.=$field.'=:cond'.$field.' OR ';
  }
  $pdo_str=substr($pdo_str,0,-3);
  $stmt=$conn->prepare($pdo_str);
  foreach($input as $field=>&$value){
    $stmt->bindParam(':'.$field,$value);
  }
  foreach($condition as $field=>&$value){
    $stmt->bindParam(':cond'.$field,$value);
  }
  execute_command_and_close_connection($stmt,$conn);
}
function delete_row($conn_arr,$table,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='DELETE FROM '.$table.' WHERE ';
  foreach($condition as $field=>$value){
    $pdo_str.=$field.'=:cond'.$field.' AND ';
  }
  $pdo_str=substr($pdo_str,0,-4);
  $stmt=$conn->prepare($pdo_str);
  foreach($condition as $field=>&$value){
    $stmt->bindParam(':cond'.$field,$value);
  }
  execute_command_and_close_connection($stmt,$conn);
}
function delete_row_union_condition($conn_arr,$table,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='DELETE FROM '.$table.' WHERE ';
  foreach($condition as $field=>$value){
    $pdo_str.=$field.'=:cond'.$field.' OR ';
  }
  $pdo_str=substr($pdo_str,0,-3);
  $stmt=$conn->prepare($pdo_str);
  foreach($condition as $field=>&$value){
    $stmt->bindParam(':cond'.$field,$value);
  }
  execute_command_and_close_connection($stmt,$conn);
}
function count_rows($conn_arr,$table){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='SELECT COUNT(*) FROM '.$table;
  $stmt=$conn->prepare($pdo_str);
  return intval(execute_command_fetch_field_and_close_connection($stmt,$conn,'COUNT(*)'));
}
function select_row($conn_arr,$table,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='SELECT * FROM '.$table.' WHERE ';
  foreach($condition as $field=>$value){
    $pdo_str.=$field.'=:cond'.$field.' AND ';
  }
  $pdo_str=substr($pdo_str,0,-4);
  $stmt=$conn->prepare($pdo_str);
  foreach($condition as $field=>&$value){
    $stmt->bindParam(':cond'.$field,$value);
  }
  return execute_command_fetch_row_and_close_connection($stmt,$conn);
}
function select_last_row($conn_arr,$table){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='SELECT * FROM '.$table.' ORDER BY -id LIMIT 1';
  $stmt=$conn->prepare($pdo_str);
  return execute_command_fetch_row_and_close_connection($stmt,$conn);
}
function select_all_rows_having_condition($conn_arr,$table,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='SELECT * FROM '.$table.' WHERE ';
  foreach($condition as $field=>$value){
    $pdo_str.=$field.'=:cond'.$field.' AND ';
  }
  $pdo_str=substr($pdo_str,0,-4);
  $stmt=$conn->prepare($pdo_str);
  foreach($condition as $field=>&$value){
    $stmt->bindParam(':cond'.$field,$value);
  }
  return execute_command_fetch_rows_and_close_connection($stmt,$conn);
}
function select_row_union_condition($conn_arr,$table,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='SELECT * FROM '.$table.' WHERE ';
  foreach($condition as $field=>$value){
    $pdo_str.=$field.'=:cond'.$field.' OR ';
  }
  $pdo_str=substr($pdo_str,0,-3);
  $stmt=$conn->prepare($pdo_str);
  foreach($condition as $field=>&$value){
    $stmt->bindParam(':cond'.$field,$value);
  }
  return execute_command_fetch_row_and_close_connection($stmt,$conn);
}
function select_field($conn_arr,$table,$field,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='SELECT '.$field.' FROM '.$table.' WHERE ';
  foreach($condition as $f=>$value){
    $pdo_str.=$f.'=:cond'.$f.' AND ';
  }
  $pdo_str=substr($pdo_str,0,-4);
  $stmt=$conn->prepare($pdo_str);
  foreach($condition as $f=>&$value){
    $stmt->bindParam(':cond'.$f,$value);
  }
  return execute_command_fetch_field_and_close_connection($stmt,$conn,$field);
}
function select_field_union_condition($conn_arr,$table,$condition){
  $conn=connect_to_mysql_server($conn_arr);
  $pdo_str='SELECT '.$field.' FROM '.$table.' WHERE ';
  foreach($condition as $f=>$value){
    $pdo_str.=$f.'=:cond'.$f.' OR ';
  }
  $pdo_str=substr($pdo_str,0,-3);
  $stmt=$conn->prepare($pdo_str);
  foreach($condition as $f=>&$value){
    $stmt->bindParam(':cond'.$f,$value);
  }
  return execute_command_fetch_field_and_close_connection($stmt,$conn,$field);
}

// $conn=array('host'=>'localhost',
//   'user'=>'root',
//   'pass'=>'root',
//   'database'=>'fmwork'
// );
// $input=array('name'=>'againtest',
//   'password'=>'thisisnewpass',
//   'avatar'=>'avatarlink'
// );
// $table='user';
// $cond=array(
//   'password'=>'passpass','avatar'=>'httt'
// );
//print_r(select_field($conn,$table,'avatar',$cond));
//print_r(select_row($conn,$table,$cond));
//echo count_rows($conn,$table);
//delete_row($conn,$table,$cond);
//edit_row($conn,$table,$input,$cond);
//add_row($conn,$table,$input);

?>
