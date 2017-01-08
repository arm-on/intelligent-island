<?php

////////

  $html = file_get_contents('http://news.sky.com/world');
  //Create a new DOM document
  $dom = new DOMDocument;

  //Parse the HTML. The @ is used to suppress any parsing errors
  //that will be thrown if the $html string isn't valid XHTML.
  @$dom->loadHTML($html);

  //Get all links. You could also use any other tag name here,
  //like 'img' or 'table', to extract other tags.
  $links = $dom->getElementsByTagName('h3');
$content=array('texts'=>array());
  //Iterate over the extracted links and display their URLs
  $i=0;
  foreach ($links as $link){
      array_push($content['texts'],$link->nodeValue);
      $i++;
      if($i==10) break;
  }
  $options = array(
      'http' => array(
      'method'  => 'POST',
      'header'  => "Authorization: Token RuD5Xm51l0UO\r\nContent-Type: application/json\r\n",
          'content' => json_encode($content),
      ),
  );
  $context  = stream_context_create($options);
  $result = file_get_contents('https://api.uclassify.com/v1/uclassify/sentiment/classify', false, $context);
  $result=json_decode($result);
  $i=0;
  foreach ($links as $index=>$link){
    $it=$result[$index];
    $cls=$it->classification;
    $neg=$cls[0];
    $neg=$neg->p;
    $pos=$cls[1];
    $pos=$pos->p;
    $kind='';
    if($pos>=$neg) $kind='<img src="images/plus.png" style="width:50px;height:50px;">';
    else $kind='<img src="images/minus.png" style="width:40px;height:40px;">';
      echo ( '<h6 class="latest_news">'.'
                                                         '.$kind.' : '.$link->nodeValue.'</h6>' );echo '<br>';
      $i++;
      if($i==10) break;
  }
