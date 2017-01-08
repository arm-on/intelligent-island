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
$xpath = new DOMXPath($dom);
$nodes = $xpath->query("//img[@class='brand-logo']");
$src = $nodes->item(0)->getAttribute('src');
print_r($nodes);
 ?>
