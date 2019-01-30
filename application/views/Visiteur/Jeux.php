<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredelaPage?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="fond-picto">
    <h1> Les Jeux </h1>
 <?php foreach ($LesJeux as $Unjeux):?>
  <div class="picto">
   <span class="textePicto">
       <?php echo $Unjeux->intitule ?>  
    </span>
    <img style="height:150px;" src='<?php echo img_url($Unjeux->image) ?>'>
    <p class="textePicto"><?php echo $Unjeux->description?> </P>
    <a href= <?php echo site_url()."/Visiteur/inscriptionJeux/".$Unjeux->id; ?>> <button class="btn btn-primary">inscription</button> </a> 
  </div>
<?php  endforeach;?>
</div>
</body>
</html>