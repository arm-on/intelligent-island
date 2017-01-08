<?php
namespace lang_english;
class sys_msg{
  function registration_successful(){
    return '<li class="collection-item dismissable"> User was successfully created</li>';
  }
}
class errors{
  function accept_rules(){
    return '<li class="collection-item dismissable"> In order to register, You must Accept the rules.</li>';
  }
  function empty_fields(){
    return '<li class="collection-item dismissable"> Some of the fields were empty. Please fill out entire form.</li>';
  }
  function username_taken(){
    return '<li class="collection-item dismissable"> The username is taken by another person. Please choose another one.</li>';
  }
  function email_taken(){
    return '<li class="collection-item dismissable"> The email you provided was used by someone else. Please provide another one.</li>';
  }
  function password_length(){
    return '<li class="collection-item dismissable"> Your password should be at least 8 characters long.</li>';
  }
  function sex_and_role_validity(){
    return '<li class="collection-item dismissable"> Something went wrong.</li>';
  }
  function passwords_match(){
    return '<li class="collection-item dismissable"> Passwords are not the same!</li>';
  }
}
class page_attributes{
  function title(){
    return 'Jazire - an Online Game';
  }
}
class words{
  function dashboard()      {return 'Dashboard';}
  function login()          {return 'Login';}
  function jazire()         {return 'Jazire';}
  function signup()         {return 'Sign Up';}
  function about()          {return 'About';}
  function tour()           {return 'Tour';}
  function documentation()  {return 'Documentation';}
  function home()           {return 'Home';}
  function tour_step1()     {return 'Tour - 1st Step - Starting point';}
  function tour_step2()     {return 'Tour - 2nd Step - Game Mission';}
  function tour_step3()     {return 'Tour - 3rd Step - Winning Criteria';}
  function tour_step4()     {return 'Tour - 4th Step - Ready to Go';}
  function remember_me()    {return 'Remember Me';}
}
class registration_rules{
  function copy(){
    return  'You do not copy any material of this game.';
  }
  function polite_name(){
    return  'You choose a polite name.';
  }
  function cheating(){
    return  'You do not cheat.';
  }
  function chatrooms(){
    return 'You are responsible for whatever you say in chatrooms.';
  }
  function password(){
    return 'You realize that if you forgot your password, we can\'t and won\'t reveal it. So, you\'ll have to reset your password.';
  }
  function spam(){
    return 'You won\'t spam on this website.';
  }
  function harm(){
    return 'You won\'t do any harm to other players. Otherwise, you\'re account will be blocked.';
  }
  function disagree(){
    return 'I don\'t agree with the Terms.';
  }
  function agree(){
    return 'I\'ve read the Terms and I Agree with them.';
  }
}
