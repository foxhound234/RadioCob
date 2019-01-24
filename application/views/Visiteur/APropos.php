<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php  echo $TitredelaPage ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <div class="fond-picto">
        <h1> Les Animateurs de la Radio:</h1>
        <?php foreach ($DesAnimateurs as $items): ?>     
                <div class="picto">
                <span class="textePicto"> 
                <?php echo  $items->nom ?> 
                </span>  
          <a href= <?php echo site_url()."/Visiteur/VoirUnAnimateur/".$items->id; ?>><img style="height:150px;"  src='<?php  echo img_url($items->photo) ?>'></a> 
                </div>  
        <?php endforeach; ?>
        <div>
</body>
</html>