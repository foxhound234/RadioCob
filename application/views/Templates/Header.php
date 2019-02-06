<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" type="image/png" href=<?php echo img_url('anim-reedaction-de-cobfm-1474382637.jpg')?> />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href=<?php echo css_url("Style")?> />
</head>
<body>
  <nav class="navbar">
  <div class="container-fluid">
  <ul class="nav navbar-nav">    
  <li class="active"><a href="<?php echo site_url('Visiteur/Accueil') ?>">Accueil </a>&nbsp;&nbsp;</li>
  <li class="active"><a href="<?php echo site_url('Visiteur/Programmation')?>"> Programmes</a>&nbsp;&nbsp;</li>
  <li class="active"><a href="<?php echo site_url('Visiteur/LesEvenements')?>">Evenement </a>&nbsp;&nbsp;</li>
  <li class="active"><a href="<?php echo site_url('Visiteur/Partenaires') ?>"> Partenaires </a>&nbsp;&nbsp;</li>
  <li class="active"><a href="" data-toggle="modal" data-target="#myModal">  Contact </a>&nbsp;&nbsp;</li>
  <li class="active"><a href="<?php echo site_url('Visiteur/Jeux') ?>">Jeux </a>&nbsp;&nbsp;</li>
  <li class="active"><a href="<?php echo site_url('Visiteur/APropos') ?>"> A Propos de la  Radio </a>&nbsp;&nbsp;</li>
  </ul>

</ul>
</div>
</nav>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Contact </h4>
        </div>
        <div class="modal-body">
        <?php

            echo validation_errors(); // mise en place de la validation

            echo form_open('Visiteur/Contact');

            echo form_label('email','lbxEmail');

            echo form_input(array('name'=>'txtEmail','value'=>'','type'=>'email','required'=>'required','class'=>'form-control')).'<BR>';

            echo form_label('Nom','lbxNom'); // creation d'un label devant la zone de saisie

            echo form_input(array('name'=>'txtNom','value'=>'','pattern'=>'[a-zA-Z]*','required'=>'required','class'=>'form-control')).'<BR>';

            echo form_label('Prenom', 'lbxPrenom');

            echo form_input(array('name'=>'txtPrenom','value'=>'','pattern'=>'[a-zA-Z]*','required'=>'required','class'=>'form-control')).'<BR>';

            echo form_label('Telephone', 'lbxTelephone');

            echo form_input(array('name'=>'txttel','value'=>'','pattern'=>'[0-9]+','required'=>'required','class'=>'form-control')).'<BR>';

            echo form_label('codepostal','lbxcodePostal');

            echo form_input(array('name'=>'txtcodePostal','value'=>'','pattern'=>'[0-9]+','required'=>'required','class'=>'form-control')).'<BR>';

            echo form_label('Ville','lbxVille');

            echo form_input(array('name'=>'txtVille','value'=>'','pattern'=>'[a-zA-Z]*','required'=>'required','class'=>'form-control')).'<BR>';

            echo form_label('Message','lbxMessage');

            echo form_textarea(array('name'=>'txtMsg','value'=>'','pattern'=>'[a-zA-Z0-9]+','required'=>'required','class'=>'form-control')).'<BR>';

            echo form_submit('btnEnregistrement', 'Envoyer',array('class'=>'btn btn-primary')).'<BR>';

            echo form_close();
            ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>








</body>
</html>