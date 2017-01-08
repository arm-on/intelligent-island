<?php
include_once('../software/language/en.php');
?>
<?php include_once('head.php');?>
<body>
  <div id="clouds">
  <?php include_once('nav.php');?>

<div class="container">
  <div class="row">
      <div class="col s12 l4 m5" style="opacity:0.95">
        <ul class="collection">
          <li class="collection-item dismissable"><div><?php echo lang_english\words::tour_step1();?><a href="#!" class="secondary-content"><i class="material-icons">trending_down</i></a></div></li>
            <li class="collection-item dismissable"><div><?php echo lang_english\words::tour_step2();?><a href="#!" class="secondary-content"><i class="material-icons">trending_down</i></a></div></li>
            <li class="collection-item dismissable"><div><?php echo lang_english\words::tour_step3();?><a href="#!" class="secondary-content"><i class="material-icons">trending_down</i></a></div></li>
            <li class="collection-item dismissable"><div><?php echo lang_english\words::tour_step4();?><a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a></div></li>
      </ul>
      </div>
      <div class="col s12 l8 m7">
        <ul class="collapsible" data-collapsible="expandable">
          <li>
     <div class="collapsible-header active"><i class="material-icons">videocam</i>First Step : Demo</div>
     <div class="collapsible-body" id="demo_inside"><p>Lorem ipsum dolor sit amet.</p></div>
         </li>
         <li>
     <div class="collapsible-header" id="rules"><i class="material-icons">verified_user</i>Second Step : Accept the Terms</div>
     <div class="collapsible-body" id="rules_inside">
       <ul class="collection" style="margin-left:60px;">
         <li class="collection-item dismissable"><?php echo lang_english\registration_rules::copy();?></li>
         <li class="collection-item dismissable"><?php echo lang_english\registration_rules::polite_name();?></li>
         <li class="collection-item dismissable"><?php echo lang_english\registration_rules::cheating();?></li>
         <li class="collection-item dismissable"><?php echo lang_english\registration_rules::chatrooms();?></li>
         <li class="collection-item dismissable"><?php echo lang_english\registration_rules::password();?></li>
         <li class="collection-item dismissable"><?php echo lang_english\registration_rules::spam();?></li>
         <li class="collection-item dismissable"><?php echo lang_english\registration_rules::harm();?></li>
         <li style="margin-top:10px;margin-bottom:10px">
           <div class="switch">
              <label>
                <?php echo lang_english\registration_rules::disagree();?>
                <input type="checkbox" name="rules" id="rules_accepted" value="notaccepted">
                <span class="lever"></span>
                <?php echo lang_english\registration_rules::agree();?>
              </label>
          </div>
         </li>
       </ul>

     </div>
   </li>
   <li>
     <div class="collapsible-header" id="signup_step"><i class="material-icons">description</i>Third Step : Sign Up</div>
     <div class="collapsible-body" id="registration_form">
       <div class="container">
       <div class="row">
       <!-- <form class="col s12"> -->
         <div class="row">

         </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input id="user_name" type="text" name="username" class="validate">
          <label for="user_name">User Name</label>
        </div>
        <div class="input-field col s4">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s4">
          <input id="passwordconfirm" name="passwordconfirm" type="password" class="validate">
          <label for="passwordconfirm">Password Confirm</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
            <select name="sex" id="sex">
              <option value="" disabled selected>Click here to Choose</option>
              <option value="man">Man</option>
              <option value="woman">Woman</option>
            </select>
            <label>Sex</label>
        </div>
        <div class="input-field col s6">
            <select name="role" id="role">
              <option value="" disabled selected>Click here to Choose</option>
              <option value="shopkeeper">Shopkeeper</option>
              <option value="tourist">Tourist</option>
            </select>
            <label>Role</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <a class="waves-effect waves-light btn" href="javascript:void(0)" id="register">Register<i class="material-icons right">send</i></a>
        </div>
      </div>
    <!-- </form> -->
  </div>
</div>
     </div>
   </li>
   <li>
<div class="collapsible-header" id="register_result_header"><i class="material-icons">verified_user</i>Last Step : Registration Result</div>
<div class="collapsible-body" id="register_result">


</div>
</li>
        </ul>
      </div>
   </div>
   <?php include_once('specialthanks.php');?>
 </div>

<?php include_once('footer.php');?>


  <!--  Scripts-->
  <script src="js/jquery-3.1.0.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="../software/javascript/background.js"></script>
  <script src="../software/javascript/register.js"></script>
</div><!--clouds-->
  </body>
</html>
