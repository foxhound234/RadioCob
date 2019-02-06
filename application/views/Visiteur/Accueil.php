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
 <?php echo anchor_popup(site_url('Visiteur/AffichePopup/'), '<button class="btn btn-primary"> Ecouter La Radio </button>', $atts);?>
    </div>

    <div id='Colonne centre'>
    </div>

    <div id='Colonne Droite'>

    </div>

</body>
</html>