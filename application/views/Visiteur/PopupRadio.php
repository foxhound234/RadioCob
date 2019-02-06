<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href=<?php echo css_url("Style")?> />
  <script>
      id="myAudio"
      $(document).ready(function () {
        var x = document.getElementById("myAudio");
        x.autoplay = true;
         x.load();
        })
  </script>
</head>
<body>
<div class="divPopup">
<script src="http://scripts.myradiostream.com/s6/20966/song.js"></script>    
<audio
    id="myAudio"
        controls
        src="http://s6.myradiostream.com:20966/listen.mp3">
            Your browser does not support the
            <code>audio</code> element.
    </audio>
    <?php
     echo '<img class="Ret"  src='.img_url("cobfm.png").'>';
    ?>
</div>
</body>
</html>