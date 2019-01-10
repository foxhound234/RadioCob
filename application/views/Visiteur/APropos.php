<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php  echo $TitredelaPage ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
   <table  class="table">
<tr>
        <th> Nom de L'animateur </th>
</tr>
<?php foreach ($DesAnimateurs as $items): ?>     
        <tr>
                <td><?php echo  $items->nom ?></td>    
                <td> <a href= <?php echo site_url()."/Visiteur/VoirUnAnimateur/".$items->id; ?>><img width="25%" src='<?php  echo img_url($items->photo) ?>'></a> </td> 
        </tr>
<?php endforeach; ?>
</table>
</body>
</html>