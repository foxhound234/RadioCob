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
<?php
echo validation_errors(); // mise en place de la validation

echo form_open('Admin/AjouterEvenement');

echo form_label('Titre','lbxTitre');

echo form_input(array('name'=>'txtTitre','value'=>'','pattern'=>'[a-zA-Z0-9]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

echo form_label('Periode','lblPeriode');

echo form_input(array('name'=>'txtPeriode','value'=>'','pattern'=>'[a-zA-Z0-9]+','placeholder'=>'Periode','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

echo form_label('Description','lbxDescription');

echo form_textarea(array('name'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

echo form_label('Date Début','lbxDateDebut');

echo form_input(array('name'=>'txtDateDebut','type'=>'date','value'=>'','placeholder'=>'DateDebut','required'=>'required','class'=>'form-control')).'<BR>';

echo form_label('Date fin','lbxDatefin');

echo form_input(array('name'=>'txtDateFin','type'=>'date','value'=>'','placeholder'=>'Datefin','required'=>'required','class'=>'form-control')).'<BR>';


echo form_submit('btnEvenement','Evenement',array('class'=>'btn btn-primary')).'<BR>';

echo form_close();
?>
</body>
</html>