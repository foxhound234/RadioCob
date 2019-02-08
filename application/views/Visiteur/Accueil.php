<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $titredelapage?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<div class="hautcentre">
</div>
    </div>
    <div id='Colonne centre' class="divColonneCentre">
        <div class='divInfo'>
        <h1 class="infoloc"> Informations Locales </h1>   
        <audio controls
        class="audioInfo"
        src= <?php echo $InfoLocales->son?>>
            Your browser does not support the
            <code>audio</code> element.
        </audio>
        </div>
    <div class="divInformation">
        <div class="txtInfo">
    <?php foreach ($Informations as $UneInfo) :?>
        <h1 class="titre">Titre:<?php echo $UneInfo->titre?></h1>
        <p class="infodes"> Informations:<?php echo $UneInfo->information?></p> 
    <?php endforeach;?>
    </div>
    </div>
    </div>
    <div class="colonne1">
    <div  class="divTitre">
    <h1 class="h1jeux"> Les Jeux En Cours </h1>
    </div>
    <div class="divJeux">  
    <?php  foreach ($LesJeux as $UnJeux) : ?> 
        <div>
        <span class="lespan"> <?php echo $UnJeux->intitule ?> </span>
        <br>
          <a href=" <?php echo site_url()."/Visiteur/inscriptionJeux/".$UnJeux->id; ?>"><img class="tales" src=<?php echo img_url($UnJeux->image)?>></a>
        </div>
     <?php endforeach;?>
    </div>
</body>
</html>

