<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=<?php echo css_url("Partenaires")?> />
</head>
<body>
    <?php $premierligne=true; ?>
    <h1 class="titrepage"> Nos Partenaires:</h1>
    <div class=bandeauPartenaire>
        <h1 class=infoloc> Nos Partenaires institutionnel </h1>    
        </div>
 <?php foreach ($DesPartenaires as $key=>$items):
                
              if($key%4==0) 
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
                 else if($key%4==4)
                 {
                        echo''; 
                 }
                 if($key%4==0)
                 {
                        echo'<div class="divPartenaireGauche">';
                 }
                 else{
                        echo'<div class="divPartenaire">';
                 }
                echo'
             <div class="nomanim">  
            <span class="nom text-center">'.$items->nom.'</span>
            </div>
            <a href='.site_url()."/Visiteur/VoirUnAnimateur/".$items->id.'><img class="imageanim"  src="'.img_url($items->logo).'"></a>
            <div>
            <a  class="blue" href='.$items->site.'>Visiter le site du partenaire</a>
            </div> 
            </div>';      
                 
                 
                 ?> 
          
         <?php endforeach; ?>
</div>

<div class=bandeauPartenaire>
        <h1 class=infoloc> Autres Partenaires </h1>    
        </div>
 <?php foreach ($DesPartenairesPonctu as $key=>$items):
                
              if($key%4==0) 
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
                 else if($key%4==4)
                 {
                        echo''; 
                 }
                 if($key%4==0)
                 {
                        echo'<div class="divPartenaireGauche">';
                 }
                 else{
                        echo'<div class="divPartenaire">';
                 }
                echo'
             <div class="nomPartenaire">  
            <span class="nom text-center">'.$items->nom.'</span>
            </div>
            <a href='.site_url()."/Visiteur/VoirUnAnimateur/".$items->id.'><img class="imageParte"  src="'.img_url($items->logo).'"></a>
            <div>
            <a  class="blue" href='.$items->site.'>Visiter le site du partenaire</a>
            </div> 
            </div>';      
                 
                 ?> 
          
         <?php endforeach; ?>
</div>






















</body>
</html>