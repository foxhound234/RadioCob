<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredelaPage ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="text-center">
    <h1> <?php echo $UnAnimateur->nom?> </h1>
    <BR>
    <BR>
    <img width="25%" src='<?php echo img_url($UnAnimateur->photo) ?>'>
    <BR>
    <BR>
     <p>  <?php echo $UnAnimateur->presentation ?> </p>          
     <?php if($UnAnimateur->site!="") {
         echo '<a href="'.$UnAnimateur->site.'"> Visiter le site web </a>'; 
     }?>
   </div>  
</body>
</html>