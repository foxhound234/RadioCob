<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredelaPage ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="text-center">
    <h1> <?php echo $UnAnimateur['nom']?> </h1>

     <p>  <?php echo $UnAnimateur['presentation']?> </p>          
      
     <?php if($UnAnimateur['site']!="") {
         echo '<a href="'.$UnAnimateur['site'].'"> Visiter le site web </a>'; 
     }?>
   </div>  
</body>
</html>