<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredelaPage?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="text-center"> 
    <h1>Les Evenements</h1>
    </div> 
    <BR>
    <?php foreach ( $LesJeux  as $key=>$UnJeux):
           if($UnJeux->image=='')
           {
            echo'
            <div class="Levenement">
            <div class="containera">
            <p> pas Image </P>
           </div>
            <div class="DivJeuxb">
            <H1 class="text-center"> Titre:'.$UnJeux->intitule.'</h1> 
            <p class="pEvenement text-center"> Description:<BR>'. $UnJeux->description.'</p>
            </div>
    
         </div>';
           }else{
            echo'
            <div class="Levenement">
            <div class="containera">
            <img  class="image"  src='.img_url($UnJeux->image).'>
           </div>
            <div class="DivJeuxb">
            <H1 class="text-center"> Titre:'.$UnJeux->intitule.'</h1> 
            <p class="pEvenement text-center"> Description:<BR>'.$UnJeux->description.'</p>
            </div>
         </div>';    
           }
    endforeach; ?>
</body>
</html>