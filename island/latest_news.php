<?php
include_once('../software/membership/session_start.php');
include_once('../software/language/en.php');
?>
<?php include_once('head.php');?>
<body>
  <div id="clouds">
  <?php include('nav.php');?>


   <?php if(isset($_SESSION['logged_user'])){?>
     <?php include_once('news.php');?>
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
  <script>
  function strip(html)
{
   var tmp = document.createElement("DIV");
   tmp.innerHTML = html;
   return tmp.textContent || tmp.innerText || "";
}
    $(document).ready(function(){
      speechSynthesis.cancel()    ;

  var text_to_read = strip(document.getElementById("ltnews").innerHTML);
  console.log(text_to_read);
  var u = new SpeechSynthesisUtterance(text_to_read);
  speechSynthesis.speak(u); if(!/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){
  u.rate = .2;
  }
  u.text = text_to_read.textContent;

    });
  </script>
</div><!--clouds-->
  </body>
</html>
