<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=<?php echo css_url("lesinterview")?> />
    <script src="main.js"></script>
</head>
<body>
 <?php
 $tt="a:1:{i:0;a:10:{s:3:\"URI\";s:48:\"http://podcast.cobfm.free.fr/ITV/rockntoques.mp3\";s:
    5:\"title\";s:0:\"\";s:4:\"type\";s:9:\"audio_mp3\";s:4:\"size\";s:1:\"0\";s:8:\"duration\";s:0:\"\";s:12:\"previewImage\";s:83:\"http://podcast.cobfm.free.fr/wp-content/plugins/podpress/images/vpr
    eview_center.png\";s:10:\"dimensionW\";s:1:\"0\";s:10:\"dimensionH\";s:1:\"0\";s:3:\"rss\";s:2:\"on\";s:4:\"atom\";s:2:\"on\";}}";


$rrr=(explode("mp3",$tt));
$texteIntermediaire = $rrr[0];
 $ee=(explode("http://",$texteIntermediaire));
 $texteNet =$ee[1];
 $lien="http://".$texteNet.'mp3';
 print_r($lien);
 ?>
    <audio controls
        class=audioInfo
        src=<?php echo $lien ?>>
            Your browser does not support the
            <code>audio</code> element.
        </audio>
</body>
</html>