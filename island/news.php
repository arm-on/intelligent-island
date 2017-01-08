<div class="row">
  <div class="col s12 m12 l12">
    <ul class="collapsible" data-collapsible="expandable">
      <li>
 <div class="collapsible-header active" style="text-align:center"><i class="material-icons">subject</i>Latest News ...</div>
 <div class="collapsible-body" id="ltnews">

   <div class="row">
       <div class="container">
         <div class="col m4">
           Sky News<hr>

            <?php include_once('../software/news_feed/sky.php');?>

         </div>
         <div class="col m4">
           REUTERS<hr>

             <?php include_once('../software/news_feed/reuters.php');?>

         </div>
         <div class="col m4">
           <div class="col m12">
             ABC<hr>

               <?php include_once('../software/news_feed/abc.php');?>
          </div>
         </div>
       </div>
     </div>


 </div>
     </li>

    </ul>

  </div>

</div>
