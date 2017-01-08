<?php
function getSslPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
  $html = getSslPage('https://www.bookdepository.com/');
  $dom = new DOMDocument;
  @$dom->loadHTML($html);
  $dom->preserveWhiteSpace = false;
$images = $dom->getElementsByTagName('img');
  $links = $dom->getElementsByTagName('h3');
$imgs=array();
foreach($images as $image){
  if($image->getAttribute('data-lazy')!="") array_push($imgs,$image);
}
$images=$imgs;
for($i=0;$i<50;$i++){
  if($i%4==0) echo '<div class="row">';
  echo '<div class="col l3 s12 m6"><img src="'.$images[$i]->getAttribute('data-lazy').'"></img>'.'<br>';
  echo '<h6 style="padding:10px">'.$links[$i]->nodeValue.'</h6></div>';
  if($i%4==3) echo '</div>';
}
