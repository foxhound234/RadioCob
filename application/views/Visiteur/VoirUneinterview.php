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
<div class="lejeuxdetail">
            <div class="DivImagejeux">
            <img  class="ImageJeux"  src=<?php echo img_url($UnJeux->image)?>>
           </div>
            <div class="DivtextJeuxDetail">
            <H1 class="h1titrejeux"> Titre :<?php echo $UnJeux->intitule?></h1> 
            <p class="pEvenement "> Description:<?php echo $UnJeux->description ?>'</p>
            
            </div>    
</div>
</body>
</html>