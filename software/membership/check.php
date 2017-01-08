<?php
include_once('../globals/db_connection.php');
include_once('../database/db_functions.php');
include_once('../language/en.php');
include_once('../software/membership/session_start.php');
if(isset($_POST)){
      $member_arr=array(
        'username' => $_POST['username'],
        'password' => $_POST['password'],
      );

      /*check if rules are accepted */
      $remember_cookie=0;
      if($_POST['remember']=='remember') $remember_cookie=1;
      /*check if rules are accepted */

      /*check if a field value is empty */
      $check_emptiness=1;
      foreach($member_arr as $field=>$value){
        if(!preg_match('/\S/', $value)) $check_emptiness=0;
      }
      /*check if a field value is empty */
      if($check_emptiness){



          $check_username_existance=0;
          if(
            count(
              select_row(
                database_connection\get::arr(),'members',array('username'=>$member_arr['username'])
              )
            )==12 //because members table has 10 fields
          ) $check_username_existance=1;
          $user_row=select_row(
            database_connection\get::arr(),'members',array('username'=>$member_arr['username'])
          );
          if($check_username_existance && password_verify($member_arr['password'],$user_row['password'])){
            $_SESSION['logged_user']=$member_arr['username'];
            if($remember_cookie){
              setcookie('logged_user', $member_arr['username'], time() + (86400 * 30), "/"); // 86400 = 1 day
            }
            echo 'You are successfully logged in as '.$_SESSION['logged_user'].'<br><a href="index.php">Click Here to Continue ... </a>';
          }

      }

}
