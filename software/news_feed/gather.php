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

  //Iterate over the extracted links and display their URLs
  foreach ($links as $link){
      echo ( '<li class="collection-item">'.$link->nodeValue.'</li>' );echo '<br>';
  }
