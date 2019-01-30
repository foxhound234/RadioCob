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
    <BR>
    <?php foreach ( $LesEvenements as $Evenement):?>
    <div id="picto text-justify">
    <span class="Evenement">
    <H1> Titre:<?php echo $Evenement->titre?></h1>
    </span>
     <div class="text-center">
        <ul class="form-liste">
        <li class="form-elt-liste"> <img style="height:150px;" src='<?php echo img_url($Evenement->images) ?>'></li>
        <li class="form-elt-liste">Description:<?php echo $Evenement->description?> </li>
        <li class="form-elt-liste"> Periode:<?php echo  $Evenement->periode?> </li>
        </ul>
     </div>
    </div>    
    <Br>
    <?php endforeach; ?>

    </div>
</body>
</html>