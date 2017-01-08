<?php
include_once('../software/language/en.php');
include_once('../software/globals/db_connection.php');
include_once('../software/database/db_functions.php');
?>
<?php include_once('head.php');?>
<body>
  <div id="clouds">
  <?php include('nav.php');?>
<?php
if (isset($_POST['action'])&&isset($_SESSION['logged_user'])){
  $file_upload_success=0;
  if(isset($_FILES['image'])){
    $file_upload_success=1;
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png","gif");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
         $file_upload_success=0;
      }

      if($file_size > 2097152) {
         $errors[]='File size must be less than 2MB';
         $file_upload_success=0;
      }

      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/users/".$_SESSION['logged_user'].'-'.$file_name);
      }else{
         foreach ($errors as $error){
           echo $error.'<br>';
         }
      }
   }
   if($file_upload_success==1){
     $image_dir='images/users/'.$_SESSION['logged_user'].'-'.$file_name;
     $title=$_POST['title'];
     $owner=$_SESSION['logged_user'];
     $category=$_POST['category'];
     $min=$_POST['min_price'];
     $max=$_POST['max_price'];
     $product_arr=array(
       'image'=>$image_dir,
       'title'=>$title,
       'owner'=>$owner,
       'category'=>$category,
       'min_price'=>$min,
       'max_price'=>$max
     );
     add_row(database_connection\get::arr(),'products',$product_arr);
   }
}
?>
<div class="container">
  <div class="row">
      <div class="col s12 m12 l12">
        <ul class="collapsible" data-collapsible="expandable">
          <li>
     <div class="collapsible-header active"><i class="material-icons">shopping_cart</i>Add Products</div>
     <div class="collapsible-body">

       <form method="post" style="padding:15px;" enctype="multipart/form-data">


         <div class="file-field input-field col s6">
           <div class="btn">
             <span>Image</span>
             <input type="file" name="image">
           </div>
           <div class="file-path-wrapper">
             <input class="file-path validate" type="text">
           </div>
         </div>

         <div class="row">
                 <div class="input-field col s12 m6 l6">
                   <input id="title" type="text" class="validate" name="title">
                   <label for="title">Title</label>
                 </div>
                 <div class="input-field col s12 m6 l6">
                   <select name="category">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="book">Books</option>
                      <option value="music">Music</option>
                      <option value="phone">Phones</option>
                      <option value="furniture">Home Furniture</option>
                      <option value="cloth">Clothes</option>
                      <option value="game">Games</option>
                      <option value="shoe">Shoes</option>
                      <option value="food">Food</option>
                    </select>
                    <label>Category</label>
                 </div>
                 <div class="col s12 l3 m3">
                   <input placeholder="0" id="min_price" type="number" class="validate" name="min_price">
                   <label for="min_price">Min Price</label>
                 </div>
                 <div class="col s12 l3 m3">
                   <input placeholder="0" id="max_price" type="number" class="validate" name="max_price">
                   <label for="max_price">Max Price</label>
                 </div>
                 <div class="col s12 l12" style="text-align:center">
                   <br>
                     <button class="btn waves-effect waves-light" type="submit" name="action">Add
                       <i class="material-icons right">send</i>
                     </button>
                 </div>
         </div>

       </form>



     </div>
         </li>

        </ul>

      </div>

   </div>


   <div class="row">
       <div class="col s12 m12 l12">
         <ul class="collapsible" data-collapsible="expandable">
           <li>
      <div class="collapsible-header active"><i class="material-icons">shopping_cart</i>My shop</div>
      <div class="collapsible-body">

        <?php
        $condition=array(
          'owner'=>$_SESSION['logged_user']
        );
        $items=select_all_rows_having_condition(database_connection\get::arr(),'products',$condition);
        // print_r($items);
        echo '<div class="row" style="padding:15px;">';
        foreach($items as $item){
          echo '<div class="col s12 l3 m6">'.'<img style="width:200px;height:200px" src="'.$item['image'].'">'.
          '<br><h6 style="text-align:center">'.$item['title'].'</h6>';
          echo'<input type="number" value="'.$item['min_price'].'">';
          echo'<label for="min_price">Min Price</label>';
          echo'<input type="number" value="'.$item['max_price'].'">';
          echo'<label for="max_price">Max Price</label>';
          echo'</div>';
        }
        echo '</div>';
        ?>


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
	<script>
	i=0;
	//console.log(document.getElementById("face").getAttribute("src"));
	function change_expressions(){
		face=document.getElementById("face");
		//console.log(face.src);
		if(i%2==0) face.setAttribute('src','face/2.png');
		else face.setAttribute('src','face/1.png');
		i++;
		// if(face.src='http://localhost:8888/materialize/face/2.png') face.setAttribute('src','http://localhost:8888/materialize/face/1.png');

	}

	</script>
  <script src="../software/javascript/register.js"></script>
</div><!--clouds-->
  </body>
</html>
