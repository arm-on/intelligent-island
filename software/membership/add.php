<?php
include_once('../globals/db_connection.php');
include_once('../database/db_functions.php');
include_once('../language/en.php');
if (session_status() == PHP_SESSION_NONE) session_start();
if(isset($_POST)){
      $member_arr=array(
        'username' => $_POST['username'],
        'firstname'=> $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
        'sex'      => $_POST['sex'],
        'email'    => $_POST['email'],
        'role'     => $_POST['role']
      );

      /*check if rules are accepted */
      $check_rules=0;
      if($_POST['rules']=='accepted') $check_rules=1;
      /*check if rules are accepted */

      /*check if a field value is empty */
      $check_emptiness=1;
      foreach($member_arr as $field=>$value){
        if(!preg_match('/\S/', $value)) $check_emptiness=0;
      }
      /*check if a field value is empty */

      /*check if username is taken */
      $check_username_is_taken=1;
      if(
        count(
          select_row(
            database_connection\get::arr(),'members',array('username'=>$member_arr['username'])
          )
        )==10 //because members table has 10 fields
      ) $check_username_is_taken=0;
      /*check if username is taken */

      /*check if email is taken */
      $check_email_is_taken=1;
      if(
        count(
        select_row(
          database_connection\get::arr(),'members',array('email'=>$member_arr['email'])
        )
        )==10 //because members table has 10 fields
      ) $check_email_is_taken=0;
      /*check if email is taken */

      /*check if password length is at least 8 characters */
      $check_password_length=1;
      if(strlen($_POST['password'])<8) $check_password_length=0;
      /*check if password length is at least 8 characters */

      /* check if values are not changed by a hacker */
      $check_fields_validity=0;
      if (
          in_array($member_arr['sex'],array('man','woman','')) &&
          in_array($member_arr['role'],array('shopkeeper','tourist',''))
      ) $check_fields_validity=1;
      /* check if values are not changed by a hacker */

      /* check if passwords match */
      $check_passwords_match=1;
      if($_POST['password']!=$_POST['passwordconfirm']) $check_passwords_match=0;
      /* check if passwords match */

      if($check_emptiness && $check_username_is_taken && $check_email_is_taken && $check_password_length && $check_fields_validity && $check_passwords_match && $check_rules){
        add_row(database_connection\get::arr(),'members',$member_arr);
        echo lang_english\sys_msg::registration_successful();
      }else{
        if($check_rules==0)
          echo lang_english\errors::accept_rules();
        if($check_emptiness==0)
          echo lang_english\errors::empty_fields();
        if($check_username_is_taken==0)
          echo lang_english\errors::username_taken();
        if($check_email_is_taken==0)
          echo lang_english\errors::email_taken();
        if($check_password_length==0)
          echo lang_english\errors::password_length();
        if($check_fields_validity==0)
          echo lang_english\errors::sex_and_role_validity();
        if($check_passwords_match==0)
          echo lang_english\errors::passwords_match();
      }

}
