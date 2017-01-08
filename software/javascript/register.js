function strip(html)
{
 var tmp = document.createElement("DIV");
 tmp.innerHTML = html;
 return tmp.textContent || tmp.innerText || "";
}
$(document).ready(function(){
  $("#signup_step").click(function(){
    var signupform = new SpeechSynthesisUtterance('Please fill in the form below and then hit register button.');
    window.speechSynthesis.speak(signupform);
    if($("#rules_inside").is(':visible')) $("#rules_inside").slideUp();
    if($("#demo_inside").is(':visible')) $("#demo_inside").slideUp();
    if($("#register_result").is(':visible')) $("#register_result").slideUp();
  });
  $("#rules_accepted").click(function(){
    this.value='accepted';
  });
  $("#rules").click(function(){
    if($("#demo_inside").is(':visible')) $("#demo_inside").slideUp();;
    if($("#register_result").is(':visible')) $("#register_result").slideUp();
    var rules = new SpeechSynthesisUtterance('These are our terms. Do you accept them?');
    window.speechSynthesis.speak(rules);
  });
   $("#register").click(function(){

        $.ajax({
        url: '../software/membership/add.php',
        type: 'POST',
        data: {
            firstname:$("#first_name").val(),
            lastname:$("#last_name").val(),
            username:$("#user_name").val(),
            password:$("#password").val(),
            passwordconfirm:$("#passwordconfirm").val(),
            sex:$("#sex").val(),
            email:$("#email").val(),
            role:$("#role").val(),
            rules:$("#rules_accepted").val()
        },
        success: function(response) {
            $("#register_result").html('<ul class="collection" style="margin-left:40px;margin-right:40px">'+response+'</ul>');
            var utterance = new SpeechSynthesisUtterance(strip(response));
            window.speechSynthesis.speak(utterance);
            if($("#registration_form").is(':visible')) $("#registration_form").slideUp();
            if($("#register_result").not(':visible')) $("#register_result").slideDown();
            if($("#rules_inside").is(':visible')) $("#rules_inside").slideUp();
            if($("#demo_inside").is(':visible')) $("#demo_inside").slideUp();
        },
        fail: function(){alert("error");}
      });
    });
});
