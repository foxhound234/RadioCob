<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
 <h1>  Nos Partenaires </h1>
 <?php foreach ($DesPartenaires as $items): ?>     
        <div>
         <?php echo $items['nom'] ?>
         <img width="25%" src='<?php echo img_url($unPrNOMIMAGE) ?>'>
         <div>
        <?php echo $items['description']?>
        <BR>
        <?php echo '<a href="'.$items['site'].'"> Visiter le site web </a>';?> 
         </div>
        </div>
        <BR>
        <BR>
<?php endforeach; ?>
</body>
</html>