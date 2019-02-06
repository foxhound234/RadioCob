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
<?php 
$atts = array(
        'width'       => 450,
        'height'      => 350,
        'scrollbars'  => 'yes',
        'status'      => 'yes',
        'resizable'   => 'yes',
        'screenx'     => 0,
        'screeny'     => 0,
        'window_name' => '_blank'
);
?>
<div class="hautcentre">
<?php echo anchor_popup(site_url('Visiteur/AffichePopup/'), '<button class="btn btn-primary"> Ecouter La Radio </button>', $atts);?>
</div>
    </div>
    <div id='Colonne centre' class='divInfo'>
    <h1> Information Local du <?php echo $InfoLocales->date?></h1>
    <audio
        controls
        class="audioInfo"
        src= <?php echo $InfoLocales->son?>>
            Your browser does not support the
            <code>audio</code> element.
    </audio>
   
    <?php foreach ($Informations as $UneInfo) :?>
    <div class="divInformation">
        <div class="txtInfo">
        <h1>Titre:<?php echo $UneInfo->titre?></h1>
        <p> Informations:<?php echo $UneInfo->information?></p> 
        </div>
    </div>
    <br>
    <?php endforeach;?>
    </div>
    <div id='Colonne Droite'>

    </div>

</body>
</html>