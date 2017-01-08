<?php
include_once('../software/membership/session_start.php');
include_once('../software/language/en.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo lang_english\page_attributes::title();?></title>
  <link rel="icon"
        type="image/png"
        href="images/favicon.png">
  <!-- CSS  -->
  <link href="css/icon.css" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="../software/javascript/annyang.js"></script>



</head>

<body>
  <div id="clouds">
  <?php include('nav.php');?>

<div class="container">
  <?php if(!isset($_SESSION['logged_user'])){ ?>

   <?php } ?>
   <?php if(isset($_SESSION['logged_user'])){?>
      <div class="row">
        <div class="col s12 m12 l12">
          <ul class="collapsible" data-collapsible="expandable">
            <li>
              <div class="collapsible-header active"><i class="material-icons">chat</i>Negotiation</div>
              <div class="collapsible-body inner-collection">
                  <p id="negotiation">
                    Assistant : Welcome to the Global Shop. How can i help you?

                  </p>
              </div>
              <div class="collapsible-body">

                <div class="row">

                    <div class="row">
                      <div class="input-field col s12 l8 m6" style="padding-left:27px !important;padding-right:25px !important">
                        <i class="small material-icons prefix" style="padding-left:10px;">comment</i>
                        <input type="text" class="validate" id="message">

                      </div>
                      <div class="col s12 l4 m6" style="padding-top:20px;padding-left:20px !important;">
                        <button class="btn waves-effect waves-light" id="sendmessage" name="sendmessage">Send
                           <i class="small material-icons right">send</i>
                        </button>
                      </div>
                    </div>

                </div>

              </div>
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
  <script src="../software/javascript/negotiate.js"></script>
  <script>

  </script>
</div><!--clouds-->
  </body>
</html>
