<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar">
<div class="container-fluid">
     <ul class="nav navbar-nav">
     <li><a href="">Accueil</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ajouter
          <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="" data-toggle="modal" data-target="#ModalEvenement">Un Evenement </a></li>
            <li><a href="" data-toggle="modal" data-target="#ModalJeux">Un jeux</a></li>
            <li><a href="" data-toggle="modal" data-target="#Modalinfo">Une infos locale </a></li>
            <li><a href=""data-toggle="modal" data-target="#ModalEmission"> Une Emission </a></li>
            <li><a href=""data-toggle="modal" data-target="#ModalAnimations"> Une animations</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ModifierOuSupprimer
          <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php ?>">Un Evenement </a></li>
            <li><a href="<?php ?>">un jeux </a></li>
            <li><a href="<?php ?>">L </a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url('Deconnexion')?>">Deconnexion</a></li>
</ul>
</div>
</nav>

<div class="modal fade" id="ModalEvenement" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Ajouter Un Evenement </h4>
        </div>
        <div class="modal-body">
        <?php
    echo validation_errors(); // mise en place de la validation

    echo form_open('Admin/AjouterEvenement');

    echo form_label('Titre','lbxTitre');

    echo form_input(array('name'=>'txtTitre','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

    echo form_label('Periode','lblPeriode');

    echo form_input(array('name'=>'txtPeriode','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Periode','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

    echo form_label('Description','lbxDescription');

    echo form_textarea(array('name'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

    echo form_label('Date Début','lbxDateDebut');

    echo form_input(array('name'=>'txtDateDebut','type'=>'date','value'=>'','placeholder'=>'DateDebut','required'=>'required','class'=>'form-control')).'<BR>';

    echo form_label('Date fin','lbxDatefin');

    echo form_input(array('name'=>'txtDateFin','type'=>'date','value'=>'','placeholder'=>'Datefin','required'=>'required','class'=>'form-control')).'<BR>';


    echo form_submit('btnEvenement','Ajouter',array('class'=>'btn btn-primary')).'<BR>';

    echo form_close();  
    ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>




  <div class="modal fade" id="ModalJeux" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Ajouter Un Jeux </h4>
        </div>
        <div class="modal-body">
        <?php
  echo validation_errors(); // mise en place de la validation

  echo form_open_multipart('Admin/AjouterJeux');

  echo form_label('Intitule','lbxIntitule');

  echo form_input(array('name'=>'txtIntitule','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';


  echo form_label('Description','lbxDescription');

  echo form_textarea(array('name'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

  echo form_label('Fonctionnement','lbxFonctionnement');

  echo form_textarea(array('name'=>'txtFonctionnement','value'=>'','placeholder'=>'Fonctionnement','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

  echo form_label('Images','lbxImages');

  echo form_input(array('name'=>'txtImages','type'=>'file','value'=>'','placeholder'=>'Image','required'=>'required','class'=>'form-control')).'<BR>';

  echo form_label('Date debut','lbxdebut');

  echo form_input(array('name'=>'txtDateDebut','type'=>'datetime-local','value'=>'','placeholder'=>'Image','required'=>'required','class'=>'form-control')).'<BR>';

  echo form_label('Date fin','lbxfin');

  echo form_input(array('name'=>'txtDateFin','type'=>'datetime-local','value'=>'','placeholder'=>'Image','required'=>'required','class'=>'form-control')).'<BR>';


  echo form_submit('btnJeux','Ajouter',array('class'=>'btn btn-primary')).'<BR>';

  echo form_close();
  ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>




<!-- Modal -->
<div id="Modalinfo" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Infos Local</h4>
      </div>
      <div class="modal-body">
      <?php
        if($nbinfojour==0)
        {
          echo validation_errors();

          echo form_open_multipart('Admin/Ajouterinfolocal');
         ?>
          <input type="file" name="userfile" size="20" />

          <br /><br />
          
          <input type="submit"  name=" "value="upload" />
          <?php
          echo form_close();
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







<!-- Modal -->
<div id="ModalEmission" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Une Emission </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/AjouterEmission');
          
           echo form_label('Titre','lbxTitre');

           echo form_input(array('name'=>'txtTitre','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';


           echo form_label('Description','lbxDescription');

          echo form_textarea(array('name'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

          echo form_label('Images','lbxImages');

          echo form_input(array('name'=>'txtImages','type'=>'file','value'=>'','placeholder'=>'Image')).'<BR>';

         echo form_submit('btnEmission','Ajouter',array('class'=>'btn btn-primary')).'<BR>';
          
         echo form_close();
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div id="ModalAnimations" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Une Emission </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/Ajouteranimation');
          
           echo form_label('Titre','animateurs');

           echo "<select name='txtnoAnimateurs' class='form-control' id='id' required>";
           foreach ($LesAnimateurs as $UnAnimateur) {
               echo "<option value='". $UnAnimateur->id. "'>" . $UnAnimateur->nom. "</option>";
           }
           echo "</select><br/>";



           echo form_label('Description','lbxDescription');

          echo "<select name='txtnoEmission' class='form-control' id='id' required>";
         foreach ($LesEmissions as $UneEmission) {
        echo "<option value='". $UneEmission->id. "'>" . $UneEmission->titre. "</option>";
             }
        echo "</select><br/>";

         echo form_submit('btnEmission','Ajouter',array('class'=>'btn btn-primary')).'<BR>';
          
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