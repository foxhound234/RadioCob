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
 <!-- Colonne Centre -->
    <?php if($nbinfo>0)
    {
   echo "
   <div id='Colonne centre' class=divColonneCentre>
        <!-- Partie Information locale -->
        <div class='divInfo'>
        <h1 class=infoloc> Informations Locales </h1>   
        <audio controls
        class=audioInfo
        src=".$InfoLocales->son.">
            Your browser does not support the
            <code>audio</code> element.
        </audio>
        </div>
        <div class=divInformation>
        <div class=txtInfo>";

     foreach ($Informations as $UneInfo) :
        echo "
        <h1 class=titre>Titre:".$UneInfo->titre."</h1>
        <p class=infodes> Informations:".$UneInfo->information."</p> 
        ";
     endforeach;
     echo"
    </div>
    </div>
   "; 
    }
    else{
        echo "
        <div id='Colonne centre' class=divColonneCentre>
             <!-- Partie Information locale -->
             <div class='divInfo'>
             <h1 class=infoloc> Informations Locales </h1>   
             </div>
             <div class=divInformation>
             <div class=txtInfo>
             <p class=infodes> Informations:Aucune info Disponible</p> 
            </div>
         </div>
        "; 




    }
?>
    <!-- Partie interviews -->
    <?php if($nbinterview == 1) {
        echo '<div class=divInfo>
        <h1 class=infoloc> Interviews </h1>    
        </div>
        <div class=divInformation>
         <div class=txtInfo>';
     foreach ($Interviews as $UneInterview):
        echo'
        <div class="divtxtfluid">
        <span class="titreint">Titre:'.$UneInterview->Titre.'</span>
        </div>
        <div class="divImagefluid">
        <img  class="imageint"  src='.img_url($UneInterview->image).'>
        </div>
        <p class="infodes"> Description:'.$UneInterview->Description.'</p>
        ';
     endforeach;
     echo
     '</div>
     </div>';
    }
    elseif ($nbinterview >= 2 ) {
        echo '<div class=divInfo>
        <h1 class=infoloc> Interviews </h1>    
        </div>
        <div class=DivInformationmulti row>';
     foreach ($Interviews as $key=>$UneInterview):
      
        if($key == 2)
        {
            
            echo'
            <div class="DivVoirplus">
            <a href='.site_url("Visiteur/Jeux").'>
            <span class="txtvoirplus"> Voir Plus >></span>
            </a>
            </div>
            ';
        }
        elseif ($key<2) {
            if($key ==1)
            {
             echo'
            <div class="divInterviewdroit">
            <div class="Divtext">'.$UneInterview->Titre.'</div>
            <img  class="imagemultiint"  src='.img_url($UneInterview->image).'>
            </div>
            ';   
            }else{
            echo'      
            <div class="divinterviewgauche">
           <div class="Divtext">'.$UneInterview->Titre.'</div>
                    <img  class="imagemultiint"  src='.img_url($UneInterview->image).'>
                    </div>
                    '; 
                
            }
           
        }
        else{

        }
     endforeach;
     echo
     '</div>';
    }
     else{
      

        };
        ?>
    </div>

  
    <div class="colonne1">
    <div  class="divTitre">
    <h1 class="h1jeux"> Les Jeux En Cours </h1>
    </div>
    <div class="divJeux">  
    <?php  foreach ($LesJeux as $key=>$UnJeux) : 
        
         if($key<2)
         {
         echo
         '
        <div>
        <span class="lespan">'.$UnJeux->intitule .'</span>
        <br>
          <a href='.site_url()."/Visiteur/VoirUnJeux/".$UnJeux->id.'><img class="tales" src='.img_url($UnJeux->image).'></a>
        </div> ';
         }elseif ($key==2) {
            echo'
            <BR>
            <div>
            <a href='.site_url("Visiteur/Jeux").'><p class="blue"> Voir plus >>> </p></a>
            </div>
            ';

         }else{

         }
        
        ?> 
    
     <?php endforeach;?>
    </div>


 <?php
  if($nbinterview>0)
  {
   echo'
   <div  class="divTitre">
   <h1 class="h1jeux"> Les Evenement En Cours </h1>
   </div>
   <div class="divJeux"> '; 
    foreach ($LesEvenements as$key=>$UnEvenement) : 
        if($key<2)
        {
    echo' 
       <div>
       <span class="lespan">'.$UnEvenement->titre.'</span>
       <br>
         <a href='.site_url()."/Visiteur/VoirUnEvenement/".$UnEvenement->id.'><img class="tales" src='.img_url($UnEvenement->images).'></a>
       </div>
       ';
        }
        elseif($key==2){
            echo'
            <BR>
            <div>
            <a href='.site_url("Visiteur/LesEvenements").'><p class="blue"> Voir plus >>> </p></a>
            </div>
            ';
        }
        else{

        }
    endforeach;
    echo 
    '</div>';
  }
    ?>
</body>
</html>

