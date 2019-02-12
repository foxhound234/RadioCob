<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div class="text-center"> 
    <h1>Les Evenements</h1>
    </div> 
    <BR>
    <?php foreach ( $LesInterview  as $key=>$UneInterview):
           if($UneInterview->image=='')
           {
            echo'
            <div class="Levenement">
            <div class="containera">
            <p> pas Image </P>
           </div>
            <div class="DivJeuxb">
            <H1 class="text-center"> Titre:'.$UneInterview->intitule.'</h1> 
            <p class="pEvenement text-center"> Description:<BR>'. $UneInterview->description.'</p>
            </div>
    
         </div>';
           }else{
            echo'
            <div class="Levenement">
            <div class="containera">
            <img  class="image"  src='.img_url($UneInterview->image).'>
           </div>
            <div class="DivJeuxb">
            <H1 class="text-center"> Titre:'.$UneInterview->intitule.'</h1> 
            <p class="pEvenement text-center"> Description:<BR>'.$UneInterview->description.'</p>
            </div>
         </div>';    
           }
    endforeach; ?>
</body>
</html>