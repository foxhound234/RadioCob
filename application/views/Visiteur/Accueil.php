 <!-- Colonne Centre -->
 <div class="wrap">
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
    <?php 
    
    $url = "http://podcast.cobfm.free.fr/?feed=rss2"; /* insérer ici l'adresse du flux RSS de votre choix */
    $rss = simplexml_load_file($url);
    $i=0;
    
    
    
    
    if($nbinterview == 1) {
        echo '<div class=divInfo>
        <h1 class=infoloc> Interviews </h1>    
        </div>
        <div class=divInformation>
         <div class=txtInfo>';
     foreach ($rss->channel->item as $item):
        $e_content = $item->children("content", true);
        $e_encoded=(string)$e_content->encoded;
       $tee=explode(" ",$e_encoded);
       $rez=explode("href",$tee[1]);
       $pio=explode("><img",$rez[1]);
       $saert=explode("=",$pio[0]);
       $image=$saert[1];




        echo'
        <div class="divtxtfluid">
        <span class="titreint">Titre:'.$item->title.'</span>
        </div>
        <div class="divImagefluid">
        <img  class="imageint"  src='.$image.'>
        </div>
        <p class="infodes"> Description:'.$item->description.'</p>
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
        foreach ($rss->channel->item as $item):
            $e_content = $item->children("content", true);
            $e_encoded=(string)$e_content->encoded;
            $comments=$item->comments;
            
            $zer=explode("http://",$comments);
            $pza=explode("podcast.cobfm.free.fr",$zer[1]);


            var_dump($zer);

            $tee=explode(" ",$e_encoded);
           $tee=explode(" ",$e_encoded);
           $rez=explode("href",$tee[1]);
           $pio=explode("><img",$rez[1]);
           $saert=explode("=",$pio[0]);
           $image=$saert[1];
        if($i==2)
        {
           
            echo'
            <div class="DivVoirplus">
            <a href='.site_url("Visiteur/Jeux").'>
            <span class="txtvoirplus"> Voir Plus >></span>
            </a>
            </div>
            ';
        }
        elseif ($i<2) {
            if($i ==1)
            {
             echo'
            <div class="divInterviewdroit">
            <div class="Divtext">'.$item->title.'</div>
            <a href='.site_url()."/Visiteur/VoirUneInterview/".$image.'><img  class="imagemultiint"  src='.$image.'></a>
            </div>
            ';   
            }else{
            echo'      
            <div class="divinterviewgauche">
           <div class="Divtext">'.$item->title.'</div>
           <a href='.site_url()."/Visiteur/VoirUneInterview/".$image.'><img  class="imagemultiint"  src='.$image.'>
             </a>
                    </div>
                    '; 
                
            }
          
        }
        else{

        }
        $i++;
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
        <img class="tales" src='.img_url($UnEvenement->images).'>
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
    '</div>
    </div>';
  }
    ?>
</div>
