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
<div class="text-center"> 
    <h1>Le Jeux</h1>
    </div>
    <?php
    $url = "http://podcast.cobfm.free.fr/?feed=rss2"; /* insérer ici l'adresse du flux RSS de votre choix */
    $rss = simplexml_load_file($url);
    $i=0;
    foreach ($rss->channel->item as $item){
        $e_content = $item->children("content", true);
        $e_encoded=(string)$e_content->encoded;
       $tee=explode(" ",$e_encoded);
       $rez=explode("href",$tee[1]);
       $pio=explode("><img",$rez[1]);
       $saert=explode("=",$pio[0]);
       $image=$saert[1];

        if($image==$Interview)
        {
         
          echo'
          <div class="lejeuxdetail">
          <div class="DivImagejeux">
          <img  class="ImageJeux"  src='.$image.'>
         </div>
          <div class="DivtextJeuxDetail">
          <H1 class="h1titrejeux"> Titre :'.$item->title.'</h1> 
          <p class="pEvenement "> Description:'.$item->description.'</p>
          </div>   
          </div>';  
        }
      $i++;
          }
      ?>
</body>
</html>