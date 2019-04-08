<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
function get_string_between($string, $start, $end){
  $string = ' ' . $string;
  $ini = strpos($string, $start);
  if ($ini == 0) return '';
  $ini += strlen($start);
  $len = strpos($string, $end, $ini) - $ini;
  return substr($string, $ini, $len);
}

$url = "http://podcast.cobfm.free.fr/?feed=rss2"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
$i=0;
foreach ($rss->channel->item as $item){
  if($i<5)
  {
    $e_content = $item->children("content", true);
    $e_encoded=(string)$e_content->encoded;
   $tee=explode(" ",$e_encoded);
   $rez=explode("href",$tee[1]);
   $pio=explode("><img",$rez[1]);
   $saert=explode("=",$pio[0]);
   $image=$saert[1];
 


    echo'
    <div class="Levenement">
    <div class="containerImageint">
    <img  class="image"  src='.$image.'>
   </div>
    <div class="containerb">
    <H1 class="h1titrejeux"> Titre :'.$item->title.'</h1>
    <Br>
    <audio controls
    class=audioInfo
    src="'.$item->enclosure['url'].'">
        Your browser does not support the
        <code>audio</code> element.
    </audio> 
    <p class="pdescription"> Description:<BR>'.$item->description.'</p>
    </div>
    </div>';    
  }
$i++;


    }
?>
</body>
</html>