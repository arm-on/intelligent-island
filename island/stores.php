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


     <div class="collapsible-header active"><i class="material-icons">shopping_cart</i>Review Items</div>
     <div class="collapsible-body" style="padding:15px">

       <div class="row">
         <?php
         if(isset($_GET['category'])){
           $condition=array(
             'category'=>$_GET['category']
           );
           $items=select_all_rows_having_condition(database_connection\get::arr(),'products',$condition);
           foreach($items as $item){
             echo '<div class="col s3">';
             echo '<img style="width:200px;height:200px;" src="'.$item['image'].'"><br>Item Number : '.$item['id'].'<br>'.$item['title'];
             echo '</div>';
           }
         }
         ?>
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
