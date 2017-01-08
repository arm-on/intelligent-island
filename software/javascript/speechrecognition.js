if (annyang) {
  annyang.start({continuous: false });
  console.log('annyang is set');
  var commands = {
    'salam': function() {
      var utterance = new SpeechSynthesisUtterance('sa lawm');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'i need you': function() {
      var utterance = new SpeechSynthesisUtterance('how may i help you');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'hello': function() {
      var utterance = new SpeechSynthesisUtterance('hello');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'who is the professor': function() {
      var utterance = new SpeechSynthesisUtterance('doctor shee ree');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'how are you': function() {
      var utterance = new SpeechSynthesisUtterance('fine thanks. and you?');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'what\'s your name': function() {
      var utterance = new SpeechSynthesisUtterance('My name is Ario');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'who do you work for': function() {
      var utterance = new SpeechSynthesisUtterance('I work for the human beings');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'good bye': function() {
      var utterance = new SpeechSynthesisUtterance('Bye');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'Who made you': function() {
      var utterance = new SpeechSynthesisUtterance('My creator\'s name is Arman Malek za day');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'Can you see me': function() {
      var utterance = new SpeechSynthesisUtterance('No, but i can hear you');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'nice to meet you': function() {
      var utterance = new SpeechSynthesisUtterance('nice to meet you too');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'What do you think about artificial intelligence': function() {
      var utterance = new SpeechSynthesisUtterance('Oh, that\'s funny! My existance is because of artificial intelligence');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'tell me your birthday': function() {
      var utterance = new SpeechSynthesisUtterance('I was born in sunday, October second, 2016 ');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'Where were you born': function() {
      var utterance = new SpeechSynthesisUtterance('I was born in Tehran');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'do you eat': function() {
      var utterance = new SpeechSynthesisUtterance('No, i don\'t need to');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'do you think': function() {
      var utterance = new SpeechSynthesisUtterance('Not technically');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'where do you live': function() {
      var utterance = new SpeechSynthesisUtterance('I live in Ja zee ray');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'do you speak': function() {
      var utterance = new SpeechSynthesisUtterance('yes i do');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'introduce yourself': function() {
      var utterance = new SpeechSynthesisUtterance('Hi ! I\'m Ario, an intelligent agent made by Arman Malek za day. I serve the humans. If you need something, just tell me');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'Where is Tehran': function() {
      var utterance = new SpeechSynthesisUtterance('It\'s the capital of Iran');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'Where is Iran': function() {
      var utterance = new SpeechSynthesisUtterance('It\'s a country in Asia');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'Who is he': function() {
      var utterance = new SpeechSynthesisUtterance('doctor shiri');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'shut up': function() {
      var utterance = new SpeechSynthesisUtterance('don\'t be rude');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'say something': function() {
      var utterance = new SpeechSynthesisUtterance('blah blah blah');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'laugh': function() {
      var utterance = new SpeechSynthesisUtterance('haa haa haa ');
      window.speechSynthesis.speak(utterance);
      utterance.onstart=function(event){
        ce=setInterval(change_expressions,100);
      };
      utterance.onend=function(event){
        clearInterval(ce);
        face.setAttribute('src','face/1.png');
      };
    },
    'Make some noise': function() {
      var audio = new Audio('../software/music/applause.wav');
      audio.play();
    }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
