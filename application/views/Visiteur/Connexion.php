<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredelaPage ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php  if($Erreur!="")
    {
        echo '<H1>'.$Erreur.'</H1>';
    }

?>
<div class="text-center">
<?php

echo validation_errors(); // mise en place de la validation

echo form_open('Visiteur/ConnexionAdmin');

echo form_label('Login','lbxLogin');

echo form_input(array('name'=>'txtLogin','value'=>$this->session->login,'pattern'=>'[a-zA-Z0-9]+','placeholder'=>'Login','required'=>'required','class'=>'form-control','title'=>'tttt')).'<BR>';


echo form_label('Password','lbxPass');

echo form_password(array('name'=>'txtPassword','value'=>'','placeholder'=>'Mot De Passe','pattern'=>'.{6,}','required'=>'required','class'=>'form-control','title'=>'six caractère ou plus')).'<BR>';

echo form_submit('btnConnexion', 'Connexion',array('class'=>'btn btn-primary')).'<BR>';

echo form_close();
?>
</div>
</body>
</html>