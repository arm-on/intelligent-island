<?php
  unset($_SESSION['logged_user']);
  unset($_COOKIE['logged_user']);
  setcookie('logged_user', null, -1, '/');
  session_destroy();
  header('Location: index.php');
?>
