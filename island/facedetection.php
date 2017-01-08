<?php
include_once('../software/language/en.php');
?>
<?php include_once('head.php');?>
<body>
  <div id="clouds">
  <?php include('nav.php');?>

<div class="container">
  <div class="row">
      <div class="col s12 m12 l12">
        <ul class="collapsible" data-collapsible="expandable">
          <li>
     <div class="collapsible-header active"><i class="material-icons">vpn_key</i>Face Detection and Funny Things</div>
     <div class="collapsible-body" id="login_inside">

       <div class="row" style="text-align:center">
				 <iframe src="facedetect/examples/face_mask.html" style="border:0;width:80%;height:500px"></iframe>
       </div>


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
