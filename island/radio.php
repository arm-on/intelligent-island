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
     <div class="collapsible-header active"><i class="material-icons">radio</i>Radio Stations</div>
     <div class="collapsible-body" id="login_inside">

        <div class="row" style="padding:15px">
          <div class="col s12 l3 m6" id="radio-538" style="text-align:center">
            <img src="images/538.jpg" style="width:200px;height:200px"><br><h6>Radio 538 Netherlands</h6>
          </div>
          <div class="col s12 l3 m6" id="radio-bbc" style="text-align:center">
            <img src="images/bbc.png" style="width:200px;height:200px"><br><h6>BBC : World Serivce</h6>
          </div>
          <div class="col s12 l3 m6" id="radio-javan" style="text-align:center">
            <img src="images/radio-javan.jpg" style="width:200px;height:200px"><br><h6>Radio Javan</h6>
          </div>
          <div class="col s12 l3 m6" id="radio-funky" style="text-align:center">
            <img src="images/funky.png" style="width:200px;height:200px"><br><h6>Hotmix Radio Funky ( France )</h6>
          </div>
          <div class="col s12 l3 m6" id="radio-russkoe" style="text-align:center">
            <img src="images/russko.png" style="width:200px;height:200px"><br><h6>Radio Russkoe ( Russia )</h6>
          </div>
          <div class="col s12 l3 m6" id="radio-midsummer" style="text-align:center">
            <img src="images/radio-midsummer.jpg" style="width:200px;height:200px"><br><h6>Radio Midsummer ( USA )</h6>
          </div>
          <div class="col s12 l3 m6" id="radio-bayern" style="text-align:center">
            <img src="images/radio-bayern.png" style="width:200px;height:200px"><br><h6>Radio Bayern 3 ( Germany )</h6>
          </div>
          <div class="col s12 l3 m6" id="radio-mix-sa" style="text-align:center">
            <img src="images/radio-mix-sa.png" style="width:200px;height:200px"><br><h6>Radio Mix FM ( Saudi Arabia )</h6>
          </div>
        </div>



     </div>
         </li>

        </ul>
        <ul class="collapsible" data-collapsible="expandable">
          <li>
     <div class="collapsible-header active"><i class="material-icons">radio</i>Listen to the Radio</div>
     <div class="collapsible-body" id="login_inside">

       <img src="images/waves.gif" style="width:100%;height:100px;"><br>
       <div id="radio-container"><iframe src="http://www.radioguide.fm/internet-radio-england/bbc-worldservice" style="width:0px;height:0px;border:0;" id="radio-play" name="radio-play"></iframe></div>

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
  <script>
  $("#radio-bbc").click(function(){
    $("#radio-container").empty();
    $("#radio-container").append("<iframe src='" + "http://www.radioguide.fm/internet-radio-england/bbc-worldservice" + "' style='width:0px;height:0px;border:0;' id='radio-play' name='radio-play' />");
  });
  $("#radio-538").click(function(){
    $("#radio-container").empty();
    $("#radio-container").append("<iframe src='" + "http://www.radioguide.fm/internet-radio-nederland/radio538" + "' style='width:0px;height:0px;border:0;' id='radio-play' name='radio-play' />");
  });
  $("#radio-javan").click(function(){
    $("#radio-container").empty();
    $("#radio-container").append("<iframe src='" + "http://radio.iranseda.ir/Live/?ch=13" + "' style='width:0px;height:0px;border:0;' id='radio-play' name='radio-play' />");
  });
  $("#radio-funky").click(function(){
    $("#radio-container").empty();
    $("#radio-container").append("<iframe src='" + "http://www.radioguide.fm/internet-radio-france/hotmixradio-funky" + "' style='width:0px;height:0px;border:0;' id='radio-play' name='radio-play' />");
  });
  $("#radio-russkoe").click(function(){
    $("#radio-container").empty();
    $("#radio-container").append("<iframe src='" + "http://www.radioguide.fm/internet-radio-russia/russkoe-radio" + "' style='width:0px;height:0px;border:0;' id='radio-play' name='radio-play' />");
  });
  $("#radio-midsummer").click(function(){
    $("#radio-container").empty();
    $("#radio-container").append("<iframe src='" + "http://www.radioguide.fm/internet-radio-england/midsummer-radio" + "' style='width:0px;height:0px;border:0;' id='radio-play' name='radio-play' />");
  });
  $("#radio-bayern").click(function(){
    $("#radio-container").empty();
    $("#radio-container").append("<iframe src='" + "http://www.radioguide.fm/internet-radio-deutschland/br-bayern-3" + "' style='width:0px;height:0px;border:0;' id='radio-play' name='radio-play' />");
  });
  $("#radio-mix-sa").click(function(){
    $("#radio-container").empty();
    $("#radio-container").append("<iframe src='" + "http://www.radioguide.fm/internet-radio-saudi-arabia/mix-fm-sa" + "' style='width:0px;height:0px;border:0;' id='radio-play' name='radio-play' />");
  });
  </script>
</div><!--clouds-->
  </body>
</html>
