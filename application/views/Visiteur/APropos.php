<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
       <link rel="stylesheet" href=<?php echo css_url("LesAnimateurs")?> />
</head>
<body>
<?php $premierligne=true; ?>
        <h1 class="titrepage"> Les Animateurs de la Radio:</h1>
        <?php foreach ($DesAnimateurs as $key=>$items):
                
                if($key%5==0) 
                 {
                         if($premierligne==true)
                         {
                         echo'<div class=divLigne>';
                         $premierligne = false;
                         }
                         else
                         {
                                echo'</div><div class=divLigne>';
                         }
                 }
                 else if($key%5==4)
                 {
                        echo''; 
                 }
                 if($key%5==0)
                 {
                        echo'<div class="divAnimateurGauche">';
                 }
                 else{
                        echo'<div class="divAnimateur">';
                 }
                echo'
             <div class="nomanim">  
            <span class="nom text-center">'.$items->nom.'</span>
            </div>
            <a href='.site_url()."/Visiteur/VoirUnAnimateur/".$items->id.'><img class="imageanim"  src="'.img_url($items->photo).'"></a> 
            </div>';      
                 ?> 
          
         <?php endforeach; ?>
                </div>
              </div>
</body>
</html>
      