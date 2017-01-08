$(document).ready(function(){
  $('.carousel').carousel();
    $('#tour_step2').click(function(){
      $('#tour_inside').load('tour_step2.php');
    });
    $('#tour_step1').click(function(){
      $('#tour_inside').load('tour_step1.php');
    });
    $('#tour_step3').click(function(){
      $('#tour_inside').load('tour_step3.php');
    });
    $('#tour_step4').click(function(){
      $('#tour_inside').load('tour_step4.php');
      $('#tour_title').html('<i class="material-icons">videocam</i>Are you ready?');
    });
  });
