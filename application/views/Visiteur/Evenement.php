<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredelaPage ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href=<?php echo css_url("Evenement")?> />
</head>
<body>
    <div class="text-center"> 
    <h1>Les Evenements</h1>
    </div> 
    <BR>
    <?php foreach ( $LesEvenements as $key=>$Evenement):
           if($Evenement->images=='')
           {
            echo'
            <div class="Levenement">
            <div class="containera">
            <p> pas Image </P>
           </div>
            <div class="containerb">
            <H1 class="text-center h1titreEvenement"> Titre:'.$Evenement->titre.'</h1> 
            <p class="pEvenement text-center"> Periode:'.$Evenement->periode.'</p>
            <p class="pEvenement text-center"> Description:<BR>'.$Evenement->description.'</p>
            </div>

              
         </div>';
           }else{
            echo'
            <div class="Levenement">
            <div class="containera">
            <img  class="image"  src='.img_url($Evenement->images).'>
           </div>
            <div class="containerb">
            <H1 class="h1titreEvenement"> Titre :'.$Evenement->titre.'</h1> 
            <p class="pEvenement"> Periode:'.$Evenement->periode.'</p>
            <p class="pdescription"> Description:<BR>'.$Evenement->description.'</p>
            </div>
             
         </div>';    
           }
    endforeach; ?>
</body>
</html>