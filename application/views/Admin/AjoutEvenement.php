<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $titredelapage?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
echo validation_errors(); // mise en place de la validation

echo form_open('Admin/AjouterEvenement');

echo form_label('Intitule','lbxIntitule');

echo form_input(array('name'=>'txtIntitule','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';


echo form_label('Description','lbxDescription');

echo form_textarea(array('name'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

echo form_label('Fonctionnement','lbxFonctionnement');

echo form_textarea(array('name'=>'txtFonctionnement','value'=>'','placeholder'=>'Fonctionnement','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

echo form_label('Images','lbxImages');

echo form_input(array('name'=>'txtImages','type'=>'file','value'=>'','placeholder'=>'Image','required'=>'required','class'=>'form-control')).'<BR>';

echo form_label('Date debut','lbxdebut');

echo form_input(array('name'=>'txtdebut','type'=>'date','value'=>'','placeholder'=>'Image','required'=>'required','class'=>'form-control')).'<BR>';

echo form_label('Date fin','lbxfin');

echo form_input(array('name'=>'txtfin','type'=>'date','value'=>'','placeholder'=>'Image','required'=>'required','class'=>'form-control')).'<BR>';


echo form_submit('btnJeux','Ajouter',array('class'=>'btn btn-primary')).'<BR>';

echo form_close();
?>
</body>
</html>