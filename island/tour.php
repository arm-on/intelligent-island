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
          <li class="collection-item dismissable"><div><?php echo lang_english\words::tour_step1();?><a href="#!" class="secondary-content" id="tour_step1"><i class="material-icons">trending_down</i></a></div></li>
            <li class="collection-item dismissable"><div><?php echo lang_english\words::tour_step2();?><a href="#!" class="secondary-content" id="tour_step2"><i class="material-icons">trending_down</i></a></div></li>
            <li class="collection-item dismissable"><div><?php echo lang_english\words::tour_step3();?><a href="#!" class="secondary-content" id="tour_step3"><i class="material-icons">trending_down</i></a></div></li>
            <li class="collection-item dismissable"><div><?php echo lang_english\words::tour_step4();?><a href="#!" class="secondary-content" id="tour_step4"><i class="material-icons">done_all</i></a></div></li>
      </ul>
      </div>
      <div class="col s12 l8 m7">
        <ul class="collapsible" data-collapsible="expandable">
          <li>
     <div class="collapsible-header active" id="tour_title"><i class="material-icons">videocam</i>The game starts ...</div>
     <div class="collapsible-body" id="tour_inside">
       <div class="carousel">
       <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
       <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
       <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
       <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
       <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
      </div>

       <p style="text-align:justify">
         By the end of your registration, You've chosen a role to play. The options you have in the game, depend on this role.
       <br>If you choose to be a tourist, You'll be having fun. You'll travel around the island and enjoy playing many kinds of games.
       However, The good things come with a price, which, in this case, is not winning the game. Actually, This is what happens in real world ! Tourists are not winners or losers.
       <br>So, If you're a tourist, you have nothing to lose rather than your life , money and also hope. The previous sentence was not a part of motivational speech ! If you don't enjoy the island, you'll be frustrated and died in 1 week.
      <br>The story is different, If you're a shopkeeper. You'll have to make customers buy what you sell. You're gonna make them believe in you. The more you make them trust in your words, The more you're successful.
      <br>More detailed information about tourists and shopkeepers is provided in the next section.
       </p>
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
  <script src="../software/javascript/tour.js"></script>
    <script>

    </script>
</div><!--clouds-->
  </body>
</html>
