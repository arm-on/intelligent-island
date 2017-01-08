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
     <div class="collapsible-header active"><i class="material-icons">input</i>Provide image's link</div>
     <div class="collapsible-body">
       <div class="row" style="padding:15px">
             <div class="input-field col s8">
              <input type="text" name="picture-link" id="picture-link">
              <label for="picture-link">Piture's Link</label>
              <button class="btn waves-effect waves-light" name="showtags" id="showtags">Show Results
                <i class="material-icons right">send</i>
              </button>

            </div>
      </div>
     </div>
         </li>

        </ul>

        <ul class="collapsible" data-collapsible="expandable">
          <li>
     <div class="collapsible-header active"><i class="material-icons">theaters</i>See the result</div>
     <div class="collapsible-body">
       <div class="row" style="padding:15px">
             <div class="input-field col s12" id="result-place">



             </div>
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
  <script type="text/javascript" src="https://sdk.clarifai.com/js/clarifai-latest.js"></script>
  <script>
    var app = new Clarifai.App(
      'qxB9ajdB-3W3Xu2OEtyb8oglNZpLqEUc31Um2zTe',
      'cYFt8bgpKR_QZMaA7JuB9m85UJfznkVd8lT2wL4-'
    );
    function my_predict(img){
      $("#result-place").append('<div style="text-align:center"><img src="'+img+'" style="width:200px;height:200px;"></div>');
      app.models.predict(Clarifai.GENERAL_MODEL, img).then(
      function(response) {
        arr=response['data']['outputs'][0]['data']['concepts'];
        for (i=0;i<20;i++){
          $("#result-place").append('<div class="chip">'+arr[i]['name']+'</div>');
          console.log(arr[i]['name']);
        }
      },
      function(err) {
        console.error(err);
      }
      );
    }
    $("#showtags").click(function(){
      img=$("#picture-link").val();
      $("#result-place").html('');
      my_predict(img);
    });
  </script>
  <script src="../software/javascript/register.js"></script>
</div><!--clouds-->
  </body>
</html>
