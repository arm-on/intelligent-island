<?php
include_once('../software/membership/session_start.php');
include_once('../software/language/en.php');
include_once('../software/globals/db_connection.php');
include_once('../software/database/db_functions.php');
?>
<?php include_once('head.php');?>
<body>
  <div id="clouds">
  <?php include('nav.php');?>

<div class="container">
  <?php if(!isset($_SESSION['logged_user'])){ ?>
  <div class="row">
      <div class="col s12 m4 l4">&nbsp;</div>
      <div class="col s12 m4 l4">
        <ul class="collapsible" data-collapsible="expandable">
          <li>

     <div class="collapsible-header active"><i class="material-icons">vpn_key</i>Login</div>
     <div class="collapsible-body" id="login_inside">

       <div class="row">
           <form class="col s12">
             <div class="container" id="loginbox">
             <div class="row">
               <div class="input-field col s12">
                 <input id="user_name" type="text" class="validate">
                 <label for="user_name">Username</label>
               </div>
             </div>
             <div class="row">
               <div class="input-field col s12">
                 <input id="password" type="password" class="validate">
                 <label for="password">Password</label>
               </div>
             </div>
             <div class="switch">
                <label>
                  <input type="checkbox" name="remember_me" id="remember_me" value="dontremember">
                  <span class="lever"></span>
                  <?php echo lang_english\words::remember_me();?>
                </label>
            </div>
            <br>
             <a class="waves-effect waves-light btn" onclick="javascript:void(0)" id="logincheck">Login</a>
           </div>
           </form>
         </div>


     </div>
         </li>

        </ul>

      </div>

   </div>
   <?php } ?>
   <?php if(isset($_SESSION['logged_user'])){?>
     <div class="row">
     <div class="col s12 m6 l4">
     <ul class="collection">
    <li class="collection-item avatar">
      <img src="images/robot.png" alt="The speaking robot" class="circle">
      <span class="title">Ario</span>
      <p>A talking robot<br>
         <a href="ario.php">Click here to pay a visit</a>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="images/news.png" alt="A beautiful Aquarium" class="circle">
      <span class="title">News</span>
      <p>Latest news from all over the world<br>
         <a href="latest_news.php">Read & Listen</a>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="images/fish_bowl.png" alt="A beautiful Aquarium" class="circle">
      <span class="title">Fish Aquarium</span>
      <p>Many fishes ...<br>
         <a href="fish.php">See the beautiful scene !</a>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="images/shopping.png" alt="Go shopping" class="circle">
      <?php
      $user_row=select_row(
        database_connection\get::arr(),'members',array('username'=>$_SESSION['logged_user'])
      );
      $role=$user_row['role'];
      if($role=='tourist'){
      ?>
      <span class="title">Shopping</span>
      <p>Do you like it? <br>
         <a href="shopping.php">If yes, click here !</a>
      </p>
      <?php }else{ ?>
      <span class="title">Shop</span>
      <p>Are you interested in Business?<br>
        <a href="">Here's your chance to win this game !</a>
      </p>
      <?php } ?>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
</div>
<div class="col s12 m6 l8">
   <ul class="collection">
     <li class="collection-item">
<iframe src="visual.php" style="border:0;height:350px;width:100%"></iframe>
</li>
</ul>
</div>
</div>

<div class="row">
  <div class="col s12 m6 l6">
    <ul class="collection">
      <li class="collection-item avatar">
        <img src="images/weather.png" alt="Weather forecast" class="circle">
        <span class="title">Weather Forecast</span>
        <p>
          How is the weather going to be?<br>
          <a href="weather.php">Click if you're interested !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <li class="collection-item avatar">
        <img src="images/driving.png" alt="Driving" class="circle">
        <span class="title">Sports Car</span>
        <p>
          Do you like driving?<br>
          <a href="driving.php">Enjoy it !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <li class="collection-item avatar">
        <img src="images/radio.png" alt="Listen to Radio" class="circle">
        <span class="title">Radio</span>
        <p>
          Listen to many different Radio Stations from all over the world...<br>
          <a href="radio.php">Listen and Relax !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <li class="collection-item avatar">
        <img src="images/photo-recognition.png" alt="Picture Related Tags" class="circle">
        <span class="title">Picture Related Tags</span>
        <p>
          What is your picture about?<br>
          <a href="pictures.php">Let the Robot Discover !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
    </ul>
  </div>
  <div class="col s12 m6 l6">
    <ul class="collection">
      <?php if($role=='tourist'){ ?>
      <li class="collection-item avatar">
        <img src="images/negotiate.png" alt="Negotiate" class="circle">
        <span class="title">Negotiation</span>
        <p>
          Do you want to actually buy something?<br>
          <a href="negotiate.php">Click here !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <?php } ?>
      <li class="collection-item avatar">
        <img src="images/2048.png" alt="Play 2048" class="circle">
        <span class="title">Play 2048</span>
        <p>
          Are you a fan of 2048?<br>
          <a href="2048.php">Today is your lucky day !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <li class="collection-item avatar">
        <img src="images/Billiards.png" alt="Play Snooker" class="circle">
        <span class="title">Snooker</span>
        <p>
          How about some snooker?<br>
          <a href="2048.php">Lets Go !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <li class="collection-item avatar">
        <img src="images/ping-pong.png" alt="Play Snooker" class="circle">
        <span class="title">Ping-Pong</span>
        <p>
          A very simple version ...<br>
          <a href="ping-pong.php">Start the game !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <li class="collection-item avatar">
        <img src="images/facedetection.png" alt="Play Snooker" class="circle">
        <span class="title">Face Detection</span>
        <p>
          Make fun of your face<br>
          <a href="facedetection.php">Try this !</a>
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
    </ul>
  </div>
</div>
   <?php }?>
<?php include_once('specialthanks.php');?>
 </div>

<?php include_once('footer.php');?>


  <!--  Scripts-->
  <script src="js/jquery-3.1.0.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="../software/javascript/background.js"></script>
  <script src="../software/javascript/login.js"></script>
</div><!--clouds-->
  </body>
</html>
