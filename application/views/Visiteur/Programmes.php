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
        data:'',
        type:"GET",
        succes:function(data) {
            var responseData= $.parseJSON(data);
               var str='';
                str+='<ul>';
                $.each(responseData, function(key, value) {
                    str+='<li>'+value.fin+'</li>';
                    alert("fdfg");
                });
                str+='</ul>';
                $('#test').html(str);


        },
        error: function () {
        alert("54545");
      }
      });

    });
    </script>
</head>
<body>
<div id="test">
</div>
</body>
</html>