<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredelaPage?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="text-center blue">
    <h1 class="lespan"> <?php echo $UnEvenement->titre?> </h1>
    <BR>
    <BR>
    <img width="25%" src='<?php echo img_url($UnEvenement->images) ?>'>
    <BR>
    <BR>
     <p class="blue"> Description: <?php echo $UnEvenement->description ?> </p>      
     <p class="blue">Periode :<?php echo $UnEvenement->periode?></p>      
   </div>  

</body>
</html>