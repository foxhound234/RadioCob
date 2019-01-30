<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
    $(document).ready(function() {
    $.ajax({
        url:"<?php echo site_url('Visiteur/afficheProgrammation'); ?>", 
        dataType:'JSON',
        type:"GET",
        success: function(data){
            console.log(data);
             test=document.createElement("p");
             var text = document.createTextNode(data[0].fin);
             test.appendChild(text);   
             document.body.appendChild(test);
        },
        error: function(){
            console.log('Could not load the data');
        }
    });
  });

    </script>
</head>
<body>
<div id='Programmes'>
</div>
</body>
</html>