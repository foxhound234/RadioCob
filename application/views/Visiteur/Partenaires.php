<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="fond-picto">
 <h1>  Nos Partenaires </h1>
 <?php foreach ($DesPartenaires as $items): ?>     
 <div class="picto">
         <span class="textePicto">
         <?php echo $items->nom ?>  
         </span>
         <img style="height:150px;" src='<?php echo img_url($items->logo) ?>'>
        <p class="textePicto"><?php echo $items->description?> </P>
        <BR>
        <?php echo '<a class="sitelien" href="'.$items->site.'"> Visiter le site web </a>';?> 
    </div>
        <BR>
<?php endforeach; ?>
</div>
</div>
</body>
</html>