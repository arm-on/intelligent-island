<?php
include_once('../software/language/en.php');
include_once('../software/globals/db_connection.php');
include_once('../software/database/db_functions.php');
?>
<?php include_once('head.php');?>
<body>
  <div id="clouds">
  <?php include('nav.php');?>

<div class="container">
  <div class="row">
      <div class="col s12 m12 l12">
        <ul class="collapsible" data-collapsible="expandable">
          <?php
                 $user_row=select_row(
                   database_connection\get::arr(),'members',array('username'=>$_SESSION['logged_user'])
                 );
                 $role=$user_row['role'];
                 if($role=='tourist'){
          ?>
          <li>


     <div class="collapsible-header active"><i class="material-icons">shopping_cart</i>Shopping Categories</div>
     <div class="collapsible-body" style="padding:15px">

       <div class="row">
         <div class="col s3">
           <a href="stores.php?category=book"><img src="images/books.png" style="width:200px;height:200px"><br><h6 style="text-align:center">Books</h6></a>
         </div>
         <div class="col s3">
           <a href="stores.php?category=music"><img src="images/music.png" style="width:200px;height:200px"><br><h6 style="text-align:center">Music</h6></a>
         </div>
         <div class="col s3">
           <a href="stores.php?category=smartphone"><img src="images/smartphone.png" style="width:200px;height:200px"><br><h6 style="text-align:center">Mobile Phones</h6></a>
         </div>
         <div class="col s3">
           <a href="stores.php?category=furniture"><img src="images/furniture.png" style="width:200px;height:200px"><br><h6 style="text-align:center">Home Furniture</h6></a>
         </div>
       </div>
       <div class="row">
         <div class="col s3">
           <a href="stores.php?category=cloth"><img src="images/dress.png" style="width:200px;height:200px"><br><h6 style="text-align:center">Clothes</h6></a>
         </div>
         <div class="col s3">
           <a href="stores.php?category=game"><img src="images/games.png" style="width:200px;height:200px"><br><h6 style="text-align:center">Games</h6></a>
         </div>
         <div class="col s3">
           <a href="stores.php?category=shoe"><img src="images/shoes.png" style="width:200px;height:200px"><br><h6 style="text-align:center">Shoes</h6></a>
         </div>
         <div class="col s3">
           <a href="stores.php?category=food"><img src="images/food.png" style="width:200px;height:200px"><br><h6 style="text-align:center">Food</h6></a>
         </div>
       </div>
     </div>

         </li>
<?php }?>
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
