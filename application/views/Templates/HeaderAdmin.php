<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
 $(document).ready(function () {
    /*  Emission modifie modal*/
      $("#labeltitre").hide(); 
      $('#Emissiontitre').hide();
      $("#imageEmission").hide();
      $("#Description").hide();
      $("#lbxDescription").hide();
      $("#labeldescr").hide();  
      $("#labelimages").hide();
      $('#NomfichierEmission').hide();
      $("#submit").hide();
    /*********************/
    /* Animateur modifie modal*/
      $('#lbxnom').hide();
      $("#txtnom").hide();  
  
      $("#lbxPresentation").hide();
      $('#txtPresentations').hide();

      $("#lbxImages").hide();
      $("#NomfichierAnimateur").hide();
      $("#txtImageAnimateur").hide();

      $("#lbxsite").hide();
      $('#txtsite').hide();

      $("#btnanimateur").hide();
  
    /**************/

   $("#noemission").change(function(){
    var id = $('#noemission').val();
    $('#NomfichierEmission').show();

    $("#labeltitre").show(); 

    $('#Emissiontitre').show();

    $("#lbxDescription").show();

    $("#labeldescr").show(); 

  $("#labelimages").show();

    $("#imageEmission").show();

    $("#Description").show();

  $("#submit").show();

  $.ajax({
        url : "<?php echo site_url('Admin/AfficheEmission/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('#Emissiontitre').val(data[0].titre);
          $("#Description").text(data[0].description);
          $("#NomfichierEmission").text(data[0].image);
          }  
        });     
   });

   $("#noanimateurs").change(function(){
    var id = $('#noanimateurs').val();
      $('#lbxnom').show();
      $("#txtnom").show();  
  
      $("#lbxPresentation").show();
      $('#txtPresentations').show();

       $("#NomfichierAnimateurs").show();     
      $("#lbxImages").show();
      $("#txtImageAnimateur").show();

      $("#lbxsite").show();
      $('#txtsite').show();

      $("#btnanimateur").show(); 
      $.ajax({
          url : "<?php echo site_url('Admin/AfficheAnimateurs/')?>" + id,
          type: "GET",
          dataType: "JSON",
        success: function(data)
        {
          $("#txtnom").val(data[0].nom);
          $("#txtPresentations").text(data[0].presentation);
          $("#NomfichierAnimateurs").text(data[0].photo);
          $("#txtsite").val(data[0].site);
        }  
        });    
   });









})
  </script>
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
            <li><a href=""data-toggle="modal" data-target="#ModalAnimateur"> un animateurs </a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ModifierOuSupprimer
          <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php ?>">Un Evenement </a></li>
            <li><a href="" data-toggle="modal" data-target="#ModalModifierAnimateur">un Animateurs </a></li>
            <li><a href="" data-toggle="modal" data-target="#ModalModifierEmissions">Emissions</a></li>
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
          <input type="file" name="file" size="20" />

          <br /><br />
          
          <input type="submit"  name="submit"value="upload" />
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
          
           echo form_label('Animateurs','animateurs');

           echo "<select name='txtnoAnimateurs' class='form-control' id='id' required>";
           foreach ($LesAnimateurs as $UnAnimateur) {
               echo "<option value='". $UnAnimateur->id. "'>" . $UnAnimateur->nom. "</option>";
           }
           echo "</select><br/>";



           echo form_label('Emissions','lbxEmissions');

          echo "<select name='txtnoEmission' class='form-control' id='id' required>";
         foreach ($LesEmissions as $UneEmission) {
        echo "<option value='". $UneEmission->id. "'>" . $UneEmission->titre. "</option>";
             }
        echo "</select><br/>";

         echo form_submit('btnAnimations','Ajouter',array('class'=>'btn btn-primary')).'<BR>';
          
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
<div id="ModalAnimateur" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Un Animateurs </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/Ajouteranimateur');

          echo form_label('nom','lbxnom');
          echo form_input(array('name'=>'txtnom','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Nom','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

          echo form_label('Presentations','lbxPresentations');

         echo form_textarea(array('name'=>'txtPresentations','value'=>'','placeholder'=>'Presentation','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

         echo form_label('Images','lbxImages');

         echo form_input(array('name'=>'txtImages','type'=>'file','value'=>'','placeholder'=>'Image')).'<BR>';

         echo form_label('Site','lbxsite');

         echo form_input(array('name'=>'txtsite','value'=>'','class'=>'form-control','placeholder'=>'site web')).'<BR>';

         echo form_submit('btnAnimateur','Ajouter',array('class'=>'btn btn-primary')).'<BR>';
          
         echo form_close();
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="ModalModifierEmissions" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier une Emission </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/ModifierEmission');
          echo form_label('Emissions','lbxEmissions',array('id'=>'emission'));

          echo "<select name='txtnoEmission' id='noemission' class='form-control'  required>";
         foreach ($LesEmissionsAssignée as $UneEmission) {
           echo "<option value='". $UneEmission->id. "'>" . $UneEmission->titre. "</option>";
             }
        echo "</select><br/>";

        echo form_label('Titre','lbxTitre',array('id'=>'labeltitre'));

           echo form_input(array('name'=>'txtTitre','value'=>'','pattern'=>'[a-zA-Z]*-?[a-zA-Z]*','placeholder'=>'Titre','required'=>'required','id'=>'Emissiontitre','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';


           echo form_label('Description','lbxDescription',array('id'=>'labeldescr'));

          echo form_textarea(array('name'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','id'=>'Description','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

          echo form_label('Images','lbxImages',array('id'=>'labelimages'));
          echo '<p id="NomfichierEmission"> </p>';
          echo form_input(array('name'=>'txtImages','type'=>'file','id'=>'imageEmission','value'=>'','placeholder'=>'Image')).'<BR>';

         echo form_submit('btnEmission','Modifier',array('class'=>'btn btn-primary','name'=>'btnmoif','id'=>'submit')).'<BR>';
         echo form_close();
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="ModalModifierAnimateur" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier un Animateur </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/ModifierAnimateurs');
          echo form_label('Animateur','lbxAnimateur',array('id'=>'emission'));

          echo "<select name='txtnoAnimateurs' class='form-control' id='noanimateurs' required>";
          foreach ($LesAnimateurs as $UnAnimateur) {
              echo "<option value='". $UnAnimateur->id. "'>" . $UnAnimateur->nom. "</option>";
          }
          echo "</select><br/>";

       
          echo form_label('nom','lbxnom',array('id'=>'lbxnom'));

          echo form_input(array('name'=>'txtnom','id'=>'txtnom','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Nom','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

          echo form_label('Presentations','lbxPresentations',array('id'=>'lbxPresentation'));

         echo form_textarea(array('name'=>'txtPresentations','id'=>'txtPresentations','value'=>'','placeholder'=>'Presentation','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
         echo '<p id="NomfichierAnimateurs"> </p>';
         echo form_label('Images','lbxImages',array('id'=>'lbxImages'));

         echo form_input(array('name'=>'txtImages','id'=>'txtImageAnimateur','type'=>'file','value'=>'','placeholder'=>'Image')).'<BR>';

         echo form_label('Site','lbxsite',array('id'=>'lbxsite'));

         echo form_input(array('name'=>'txtsite','id'=>'txtsite','value'=>'','class'=>'form-control','placeholder'=>'site web')).'<BR>';

         echo form_submit('btnAnimateur','Ajouter',array('class'=>'btn btn-primary','id'=>'btnanimateur')).'<BR>';
         echo form_close();
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="ModalModifierAnimateur" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier un Animateur </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/ModifierAnimateurs');
          echo form_label('Animateur','lbxAnimateur',array('id'=>'emission'));

          echo "<select name='txtnoAnimateurs' class='form-control' id='noanimateurs' required>";
          foreach ($LesAnimateurs as $UnAnimateur) {
              echo "<option value='". $UnAnimateur->id. "'>" . $UnAnimateur->nom. "</option>";
          }
          echo "</select><br/>";

       
          echo form_label('nom','lbxnom',array('id'=>'lbxnom'));

          echo form_input(array('name'=>'txtnom','id'=>'txtnom','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Nom','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

          echo form_label('Presentations','lbxPresentations',array('id'=>'lbxPresentation'));

         echo form_textarea(array('name'=>'txtPresentations','id'=>'txtPresentations','value'=>'','placeholder'=>'Presentation','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
         echo '<p id="NomfichierAnimateurs"> </p>';
         echo form_label('Images','lbxImages',array('id'=>'lbxImages'));

         echo form_input(array('name'=>'txtImages','id'=>'txtImageAnimateur','type'=>'file','value'=>'','placeholder'=>'Image')).'<BR>';

         echo form_label('Site','lbxsite',array('id'=>'lbxsite'));

         echo form_input(array('name'=>'txtsite','id'=>'txtsite','value'=>'','class'=>'form-control','placeholder'=>'site web')).'<BR>';

         echo form_submit('btnAnimateur','Ajouter',array('class'=>'btn btn-primary','id'=>'btnanimateur')).'<BR>';
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