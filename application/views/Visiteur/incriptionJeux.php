<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredeLaPage ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body> 
     <H1 class="text-center intitule"> inscription pour le jeux:<?php echo $UnJeux->intitule?></h1>
     <br>
     <br>
    <div class="col-md-6 mb-4 formdiv">
        <?php

            echo validation_errors(); // mise en place de la validation

            echo form_open('Visiteur/IncriptionJeux/',array('class'=>'test'));

            echo form_input(array('name'=>'txtid','type'=>'hidden','value'=>$UnJeux->id)).'<BR>';
            
            echo form_label('E-mail','lbxEmail');
            echo '<BR>'; 
            echo form_input(array('name'=>'txtEmail','value'=>'','type'=>'email','required'=>'required','class'=>'input-sm')).'<BR>';
            echo '<BR>'; 
            echo form_label('Nom','lbxNom'); // creation d'un label devant la zone de saisie
            echo '<BR>'; 
            echo form_input(array('name'=>'txtNom','value'=>'','pattern'=>'[a-zA-Z]*','required'=>'required','class'=>'input-sm')).'<BR>';
            echo '<BR>'; 
            echo form_label('Prenom', 'lbxPrenom');
            echo '<BR>';
            echo form_input(array('name'=>'txtPrenom','value'=>'','pattern'=>'[a-zA-Z]*','required'=>'required','class'=>'input-sm')).'<BR>';
            echo '<BR>';
            echo form_label('Telephone', 'lbxTelephone');
            echo '<BR>';
            echo form_input(array('name'=>'txttel','value'=>'','pattern'=>'[0-9]+','required'=>'required','class'=>'input-sm')).'<BR>';
            echo '<BR>';
            echo form_label('Code postal','lbxcodePostal');
            echo '<BR>';
            echo form_input(array('name'=>'txtcodePostal','value'=>'','pattern'=>'[0-9]+','required'=>'required','class'=>'input-sm')).'<BR>';
            echo '<BR>';
            echo form_label('Ville','lbxVille');
            echo '<BR>';
            echo form_input(array('name'=>'txtVille','value'=>'','pattern'=>'[a-zA-Z]*','required'=>'required','class'=>'input-sm')).'<BR>';
            echo '<BR>';
            echo form_submit('btninscription', 'Incription',array('class'=>'btn btn-primary')).'<BR>';

            echo form_close();
            ?>
        </div>
</body>
</html>