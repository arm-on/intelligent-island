function say(something){
  $("#negotiation").append('<br>Assistant : '+something);
  var negotiatesound = new SpeechSynthesisUtterance(something);
  window.speechSynthesis.speak(negotiatesound);
}
function get_min(item_number){
  var min=null;
  $.ajax({
   type: "GET",
   url: '../software/shopsystem/min.php?item='+item_number,
   async: false,
   success: function(response) {
     min = response;
   }
  });
  return min;
}
function get_max(item_number){
  var max=0;
  $.ajax({
   type: "GET",
   url: '../software/shopsystem/max.php?item='+item_number,
   async: false,
   success: function(response) {
     max = response;
   }
  });
  return max;
}
function sell(item_number){
  $.ajax({
   type: "GET",
   url: '../software/shopsystem/success.php?item='+item_number,
   async: false,
   success: function(response) {

   }
  });
}
function search_substr(str,substr){
  substr=substr.toLowerCase();
  str=str.split(' ');
  substr=substr.split(' ');
  found=1;
  for(i=0;i<substr.length;i++){
    if(substr[i]!=str[i]) found=0;
  }
  if(found==1) return 1;
  else return 0;
}
$(document).ready(function(){
  var item_min_price=0;
  var item_max_price=0;
  var item_number=0;
  var discount_wanted=0;
  var analysis='';
  var negotiatesound = new SpeechSynthesisUtterance('Welcome to the Global Shop. How can i help you?');
  window.speechSynthesis.speak(negotiatesound);
    $("#sendmessage").click(function(){
      message=$("#message").val();
      $("#message").val('');
      console.log('Message : ' + message);
      $("#negotiation").append('<br>You : '+message);
      message=message.toLowerCase();
      if(message[0]==' ') message=message.substring(1,message.length);
      if(message=='hello') {say('Hello');analysis+='Greeting is just being normal. It\'s related to this place and this time, So its from the adult part of ones personality. '}
      else if(message=='i would like to speak to the owner'||message.indexOf('owner')>=0) {say('The owner is not here.');analysis+='No matter what you ask about the owner, The robot just says he\'s not here. Just telling facts with the adult part.  ';}
      else if(message=='who are you?') {say('I\'m the Shop Assistant Robot.');analysis+='You asked about who the robot is, And he answered using his adult part. ';}
      else if(message=='shut up') {say('Don\'t be rude. If you do that again, I\'ll call the police.');analysis+='Being rude comes from the rebel kid part. When you do this, the other person get\'s angry and there\'s a good chance that he or she fights back . Here, the robot acts like your parents. He threatens you. ';}
      else if(message.indexOf('report')>=0) {say('Please, Calm down. Let\'s have a seat.');analysis+='When you threaten the robot, his child part becomes afraid. ';}
      else if(search_substr(message,'I would like to buy item')){
        words = message.split(' ');
        item_number=words[6];
        console.log('Item number : '+item_number);
        item_min_price=get_min(item_number);
        item_max_price=get_max(item_number);
        console.log('Min price : '+item_min_price);
        say('Ok. How much are you gonna pay for it? ');
        analysis+='The business begins here. When you say you wanna buy something. ';
      }
      else if(message.split(' ')[1]=='dollars'){
        words = message.split(' ');
        bid=words[0];
        console.log('Words : ' +words);
        console.log('Bid : '+bid);
        console.log('item min price : '+item_min_price);
        bid=parseInt(bid);
        if(bid<item_min_price) {say('I don\'t think you can afford it');analysis+='When the robot says you can\'t afford something, He actually is inviting you to play. Despite that the message seems to be from the adult part, it\'s not! It\'s like the game which some children play : "My Power is more than yours". So, it\'s a trap! ';}
        else if(bid==item_min_price) {say('Oh, Please! A little more!');analysis+='The robot beggs you to pay more... its like when you begged your parents to buy a toy for you. So its from the child part. ';}
        else if(bid>item_max_price) {say('That\'s so good of you. But it doesn\'t cost that much');analysis+='Being nice to each other, comes from the child part. Your bid was too much! It was your adult part. The answer came from the robot\'s child part. ';}
        else{
          say('OK. We\'ve reached an agreement. The item is sold to you for '+bid+' dollars.');
          analysis+='Reaching the agreement is an adult thing. Children never agree on something like this. ';
          analysis = analysis.split(".").join(".\xA0\xA0\xA0\xA0\xA0\xA0\xA0\xA0 ");
          var negotiatesound = new SpeechSynthesisUtterance('                 Now, Listen to the cognitive science\'s analysis.                          '+analysis);
          window.speechSynthesis.speak(negotiatesound);
          sell(item_number);
        }
      }
      else if(search_substr(message,'is there any chance for discount?')) {
        if(discount_wanted==0){say('I\'m sorry. The owner doesn\'t like me to do this.');analysis+='The child part of the robot fears from the owner. ';}
        else if(discount_wanted==1) {say('Well, how about '+(parseInt(item_min_price)+1)+' dollars?');analysis+='The robot finally accepts to consider a discount. This Negotiation is win win game. ';}
        else if(discount_wanted>=2) {say('Maybe you\'re not a customer...');analysis+='Humiliation is a false statement said like a true one. It makes you think about how you can change it. The problem is that you can\'t. Because it isn\'t real at all ! ';}
        discount_wanted++;
      }
      else say('Sorry... Would you please repeat your words?');
      console.log(analysis);
    });
});
