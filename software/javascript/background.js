var bgPos = 0;
setInterval(function() {
    $("#clouds").css("background-position", (bgPos-= 1) + "px");
}, 60);
$('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15 // Creates a dropdown of 15 years to control year
});
$(document).ready(function() {
$('select').material_select();
});
