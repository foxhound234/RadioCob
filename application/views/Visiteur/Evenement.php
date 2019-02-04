<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href=<?php echo css_url("Style")?> />
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
            <div class="text-center DivEvenement containera ">
            <ul class="form-Evenement">
            <li class="form-elt-Evenement">  <H1 class="h1Evenement"> Titre:'.$Evenement->titre.'</h1> </li>
            <li class=" text-center form-elt-Evenement">Description:<BR>'.$Evenement->description.'</li>
            <li class="text-center form-elt-Evenement"> Periode:'.$Evenement->periode.'</li>
            </ul>
         </div>';
           }else{
            echo'
            <div class="text-center DivEvenement containera ">
            <ul class="form-Evenement">
            <li class="form-elt-Evenement">  <H1 class="h1Evenement"> Titre:'.$Evenement->titre.'</h1> </li>
            <li class="form-elt-Evenement"> <img style="height:150px;" src='.img_url($Evenement->images).'></li>
            <li class=" text-center form-elt-Evenement">Description:<BR>'.$Evenement->description.'</li>
            <li class="text-center form-elt-Evenement"> Periode:'.$Evenement->periode.'</li>
            </ul>
         </div>';    
           }
    endforeach; ?>
</body>
</html>