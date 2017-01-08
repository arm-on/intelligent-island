<nav class="light-blue lighten-1" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="index.php" class="brand-logo"><?php echo lang_english\words::jazire();?></a>
    <ul class="right hide-on-med-and-down">
      <li><?php
      if(isset($_SESSION['logged_user'])){
        echo 'You are logged in as \''.$_SESSION['logged_user'].'\'';
      }
      else{
        if(isset($_COOKIE['logged_user'])){
          $_SESSION['logged_user']=$_COOKIE['logged_user'];
          echo 'You are logged in as \''.$_SESSION['logged_user'].'\'';
        }
      }
      ?></li>
      <?php if(isset($_SESSION['logged_user'])) { ?><li><a href="logout.php">Logout</a></li><?php } ?>
      <li><img src="images/volume.png" style="width:height:80%;width:50px;" id="mute-sound" onclick="speechSynthesis.cancel();"></li>
      <?php if(!isset($_SESSION['logged_user'])){?><li><a href="index.php"><?php echo lang_english\words::login();?></a></li>
      <li><a href="register.php"><?php echo lang_english\words::signup();?></a></li><?php }?>
      <li><a href="tour.php"><?php //echo lang_english\words::tour();?></a></li>
      <li><a href="#"><?php //echo lang_english\words::documentation();?></a></li>
      <?php if(isset($_SESSION['logged_user'])){?>

      <?php }?>
    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a href="#" onclick='$(".button-collapse").sideNav("hide");'>Navbar Link</a></li>
      <li><a href="#">Navbar Link</a></li>
      <li><a href="#">Navbar Link</a></li>
      <li><a href="#">Navbar Link</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
