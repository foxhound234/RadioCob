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
      $("#btnSupEmission").hide();
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
      $("#btnSupAnimateur").hide();
  
    /******************/
    /* Evenement modifie modal */

   $("#lbxTitre").hide();
   $("#txtTitre").hide();

   $("#lbxPeriode").hide();
   $("#txtPeriode").hide();

   $("#lbxDescription").hide();
   $("#txtDescription").hide();


   $("#lbxDateDebut").hide();
   $("#txtDateDebut").hide();


   $("#lbxDatefin").hide();
   $("#txtDateFin").hide();

   $("#ImageEvenementLabel").hide();
   $("#txtImageEvenement").hide();
   $("#ImagesEvenement").hide();

   $("#btnEvenement").hide();
   $("#btnSupEvenement").hide();
    /******************/
    /******/
    /* Jeux modifie modal */


    $("#lbxIntitule4").hide();
   $("#txtIntitule").hide();

   $("#lbxDescriptionJeux").hide();
   $("#txtDescriptionJeux").hide();

   $("#lbxFonctionnement").hide();
   $("#txtFonctionnement").hide();


   $("#lbxImages4").hide();
   $("#NomfichierJeux").hide();
   $("#TxtImages").hide();

   $("#lbxdebut").hide();
   $("#txtDateDebutJeux").hide();

   $("#lbxfin").hide();
   $("#txtDateFinJeux").hide();

   $("#lbxInterruption").hide();
 $("#txtInterruption").hide();

   $("#btnJeux").hide();
   $("#btnSupjeux").hide();
    /****************/
    /* Partenaires Modifie  modal */



    $("#lbxNom").hide();
   $("#txtNom").hide();

   $("#lbxDescriptionPart").hide();
   $("#txtDescriptionPart").hide();

   $("#lbxSite").hide();
   $("#txtSite").hide();

    $("#logo").hide();
   $("#lbxLogo").hide();
   $("#txtLogo").hide();
   

   $("#lbxtype").hide();
   $("#txtType").hide();
   $("#Type").hide();

   $("#lbxDateDebutPart").hide();
   $("#txtDateDebutPart").hide();

   $("#lbxDateFinPart").hide();
   $("#txtDateFinPart").hide();


   $("#btnPartenaires").hide();
   $("#btnSupPartenaires").hide();

    /**************** */

    /** Info modal  Modifie */

     $('#labeltitreinfo').hide();
     $('#txtInfo').hide();

     $("#labelInformation").hide();
     $("#Information").hide();
    
      $("#btnmodifinfo").hide();
      $("#btnSupInfo").hide();


    /****************/
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
  $("#btnSupEmission").show();
  $.ajax({
        url : "<?php echo site_url('Admin/AfficheEmission/')?>" + id,
        type: "POST",
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
      $("#btnSupAnimateur").show();
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
 

   $("#noevenement").change(function(){
    var id = $('#noevenement').val();

    $("#lbxTitre").show();
   $("#txtTitre").show();

   $("#lbxPeriode").show();
   $("#txtPeriode").show();

   $("#lbxDescription").show();
   $("#txtDescription").show();


   $("#lbxDateDebut").show();
   $("#txtDateDebut").show();


   $("#lbxDatefin").show();
   $("#txtDateFin").show();

   $("#ImageEvenementLabel").show();
   $("#txtImageEvenement").show();
   $("#ImagesEvenement").show();

   $("#btnEvenement").show();
   $("#btnSupEvenement").show();

   $.ajax({
          url : "<?php echo site_url('Admin/AfficheEvenement/')?>" + id,
          type: "GET",
          dataType: "JSON",
        success: function(data)
        {
          $("#txtTitre").val(data[0].titre);
          $("#txtPeriode").val(data[0].periode);
          $("#txtDescription").text(data[0].description);
          $("#txtDateDebut").val(data[0].debut);
          $("#txtImageEvenement").text(data[0].images);
          $("#txtDateFin").val(data[0].fin);
        },
         error: function (xhr, ajaxOptions, thrownError) {
          alert(xhr.status);
        alert(thrownError);
        } 
        });    
      });


      $("#noJeux").change(function(){
    var id = $('#noJeux').val();
        $("#lbxIntitule4").show();
        $("#txtIntitule").show();

        $("#lbxDescriptionJeux").show();
        $("#txtDescriptionJeux").show();

        $("#lbxFonctionnement").show();
        $("#txtFonctionnement").show();


        $("#lbxImages4").show();
        $("#NomfichierJeux").show();
        $("#TxtImages").show();

        $("#lbxdebut").show();
        $("#txtDateDebutJeux").show();

        $("#lbxfin").show();
        $("#txtDateFinJeux").show();

      $("#lbxInterruption").show();
      $("#txtInterruption").show();

        $("#btnJeux").show();
        $("#btnSupjeux").show();
   $.ajax({
          url : "<?php echo site_url('Admin/AfficheJeux/')?>" + id,
          type: "GET",
          dataType: "JSON",
        success: function(data)
        {
          $("#txtIntitule").val(data[0].intitule);
          $("#txtPeriode").val(data[0].periode);
          $("#txtDescriptionJeux").text(data[0].description);
          $("#txtFonctionnement").text(data[0].fonctionnement);
          $("#NomfichierJeux").text(data[0].image);
          $("#txtDateDebutJeux").val(data[0].debut);
          $("#txtDateFinJeux").val(data[0].fin);
          $("#txtInterruption").val(data[0].interruption);
        }  
        });    
      });

      $("#idInfo").change(function(){
        var id=$('#idInfo').val();
        
        $('#labeltitreinfo').show();
        $('#txtInfo').show();

         $("#labelInformation").show();
         $("#Information").show();
    
        $("#btnmodifinfo").show();

        $("#btnSupInfo").show();
        $.ajax({
          url : "<?php echo site_url('Admin/AfficheInfo/')?>" + id,
          type: "GET",
          dataType: "JSON",
        success: function(data)
        { 
          $("#txtInfo").val(data[0].titre);
          $("#Information").text(data[0].information);
        },
        error: function (xhr, ajaxOptions, thrownError) {
          alert(xhr.status);
        alert(thrownError);
        }
         
        });    
      })
   $("#noPartenaires").change(function(){
    var id = $('#noPartenaires').val();

   
   $("#lbxNom").show();
   $("#txtNom").show();

   $("#lbxDescriptionPart").show();
   $("#txtDescriptionPart").show();

   $("#lbxSite").show();
   $("#txtSite").show();


   $("#lbxLogo").show();
   $("#txtLogo").show();
   $("Logo").show();

   $("#lbxtype").show();
   $("#txtType").show();
   $("#Type").show();

   $("#lbxDateDebutPart").show();
   $("#txtDateDebutPart").show();

   $("#lbxDateFinPart").show();
   $("#txtDateFinPart").show();


   $("#btnPartenaires").show();
   $("#btnSupPartenaires").show();

   $.ajax({
          url : "<?php echo site_url('Admin/AffichePartenaire/')?>" + id,
          type: "GET",
          dataType: "JSON",
        success: function(data)
        {
          $("#txtNom").val(data[0].nom);
          $("#txtDescriptionPart").text(data[0].description);
          $("#txtSite").val(data[0].site);
          $("#Logo").text(data[0].logo);
          $("#txtType").text(data[0].type);
          $("#txtDateDebutPart").val(data[0].debut);
          $("#txtDateFinPart").val(data[0].fin);
        }  
      })
        });    
   

      $('#btnSupjeux').click(function(){
        
        var id=$('#noJeux').val();

       $('#txtid').val(id);
    });
   $("#btnSupPartenaires").click(function() {
     var id=$('#noPartenaires').val();
     $("#idPartenaire").val(id);
   });


   $("#btnSupEmission").click(function() {
     var id=$('#noemission').val();
     $("#idEmission").val(id);
   });

  $("#btnSupEvenement").click(function(){
    var id=$('#noevenement').val();
    $("#idEvenement").val(id);
  })
  $("#btnSupAnimateur").click(function(){
    var id=$('#noanimateurs').val();
    $("#idAnimateur").val(id);
  })
  $("#btnSupInfo").click(function(){
    var id=$('#idInfo').val();
    $("#idInfotxt").val(id);
  })

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
            <li><a href=""data-toggle="modal" data-target="#ModalAjouterPartenaires">Un partenaire</a></li>
            <li><a href="" data-toggle="modal" data-target="#ModalInterview">Une Interview</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ModifierOuSupprimer
          <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="" data-toggle="modal" data-target="#ModalModifierEvenement">Un Evenement </a></li>
            <li><a href="" data-toggle="modal" data-target="#ModalModifierAnimateur">un Animateurs </a></li>
            <li><a href="" data-toggle="modal" data-target="#ModalModifierEmissions">Emissions</a></li>
            <li><a href=""data-toggle="modal" data-target="#ModalModifierJeux">Un Jeux</a></li>
            <li> <a href="" data-toggle="modal" data-target="#ModalModifierPartenaire">Un Partenaire</a>
            <li> <a href=""data-toggle="modal" data-target="#ModalModifierTxtLocal"> Une Info Locale </a></li>
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

        echo form_open_multipart('Admin/AjouterEvenement');

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

        echo form_label('Images', 'LbxImages');

        echo form_input(array('name'=>'txtImages','type'=>'file','value'=>'','placeholder'=>'Image')).'<BR>';
        
        
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
        if($nbinfojour == 0)
        {
          echo validation_errors();

          echo form_open('Admin/Ajouterinfolocal');

          echo form_input(array('name'=>'txtLien','type'=>'url','value'=>'','placeholder'=>'Lien Mp3','required'=>'required','class'=>'form-control','title'=>'lien'));

            echo form_submit('btnInfo','Ajouter',array('class'=>'btn btn-primary')).'<BR>';

          echo form_close();  
        } else{
          echo validation_errors();

          echo form_open('Admin/Ajouterinfolocal');

           echo form_label('Titre', 'lbxTitre');
           
          echo form_input(array('name'=>'txtTitre', 'value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'','required'=>'required','class'=>'form-control','title'=>'lien'));

          echo form_label('Information', 'lbxInformation');
          
          echo form_textarea(array('name'=>'txtInfo', 'value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'','required'=>'required','class'=>'form-control','title'=>'lien'));           

            echo form_submit('btntxtInfo','AjouterTxtinfo',array('class'=>'btn btn-primary')).'<BR>';

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

         echo form_input(array('name'=>'txtsite','value'=>'','class'=>'form-control','pattern'=>"https?://.+",'placeholder'=>'site web')).'<BR>';

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

<div id="ModalInterview" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Une interview </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/AjouterInterview');

          echo form_label('Titre','lbxTitre');
          echo form_input(array('name'=>'txtTitre','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

          echo form_label('Description','lbxDescription');

         echo form_textarea(array('name'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

         echo form_label('Images','lbxImages');

         echo form_input(array('name'=>'txtImages','type'=>'file','value'=>'','placeholder'=>'Image')).'<BR>';

         echo form_label('Lienmp3','lbxmp3');

         echo form_input(array('name'=>'txtAudio','value'=>'','class'=>'form-control','pattern'=>"https?://.+",'placeholder'=>'Lien mp3 de l interview')).'<BR>';

         echo form_submit('btnInterview','Ajouter',array('class'=>'btn btn-primary')).'<BR>';
          
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
           <button type="button" class="btn btn-default" id="btnSupEmission" data-toggle="modal" data-target="#SuppressionEmission">Supprimer</button>
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

         echo form_input(array('name'=>'txtsite','id'=>'txtsite','value'=>'','pattern'=>"https?://.+",'class'=>'form-control','placeholder'=>'site web')).'<BR>';

         echo form_submit('btnAnimateur','Modifier',array('class'=>'btn btn-primary','id'=>'btnanimateur')).'<BR>';
         echo form_close();
        ?>
         <button type="button" class="btn btn-default" id="btnSupAnimateur" data-toggle="modal" data-target="#SuppressionAnimateur">Supprimer</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<div id="ModalModifierEvenement" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier un Evenement </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/ModifierEvenement');
          echo form_label('Evenement','lbxEvenements',array('id'=>'emission'));

          echo "<select name='txtnoEvenement' class='form-control' id='noevenement' required>";
          foreach ($LesEvenements as $UnEvenement) {
              echo "<option value='". $UnEvenement->id. "'>" . $UnEvenement->titre. "</option>";
          }
          echo "</select><br/>";

          echo form_label('Titre','lbxTitre',array('id'=>'lbxTitre'));

          echo form_input(array('name'=>'txtTitre','id'=>'txtTitre','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      
          echo form_label('Periode','lbxPeriode',array('id'=>'lbxPeriode'));
      
          echo form_input(array('name'=>'txtPeriode','id'=>'txtPeriode','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Periode','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      
          echo form_label('Description','lbxDescription',array('id'=>'lbxDescription'));
      
          echo form_textarea(array('name'=>'txtDescription','id'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      
          echo form_label('Date Début','lbxDateDebut',array('id'=>'lbxDateDebut'));
      
          echo form_input(array('name'=>'txtDateDebut','id'=>'txtDateDebut','type'=>'date','value'=>'','placeholder'=>'DateDebut','required'=>'required','class'=>'form-control')).'<BR>';
      
          echo form_label('Date fin','lbxDatefin',array('id'=>'lbxDatefin'));
      
          echo form_input(array('name'=>'txtDateFin','id'=>'txtDateFin','type'=>'date','value'=>'','placeholder'=>'Datefin','required'=>'required','class'=>'form-control')).'<BR>';
      
           echo form_label('Images', 'lbximages',array('id'=>'ImageEvenementLabel'));
           echo '<p id="txtImageEvenement"> </p>';

           echo form_input(array('name'=>'txtImages', 'value'=>'','type'=>'file','id'=>'ImagesEvenement')).'<BR>';
           
          echo form_submit('btnEvenement','Modifier',array('class'=>'btn btn-primary','id'=>'btnEvenement')).'<BR>';
         echo form_close();
        ?>
        <button type="button" class="btn btn-default" id="btnSupEvenement" data-toggle="modal" data-target="#SuppressionEvenement">Supprimer</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="ModalAjouterPartenaires" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Un Partenaire </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/AjouterPartenaire');
   
          echo form_label('NOM','lbxNom');

          echo form_input(array('name'=>'txtNom','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Nom du partenaires','required'=>'required','class'=>'form-control','title'=>'les lettres + chiffres uniquement')).'<BR>';
      
          echo form_label('Description','lbxDescription');
      
          echo form_textarea(array('name'=>'txtDescription','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Description','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      
          echo form_label('Site','lbxSite');
      
          echo form_input(array('name'=>'txtSite','value'=>'','placeholder'=>'Site','pattern'=>'https?://.+','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      
          echo form_label('Logo','lbxLogo');
      
          echo form_input(array('name'=>'txtLogo','type'=>'file','value'=>'','placeholder'=>'Fichier')).'<BR>';

          echo form_label('Type','lbxtype');

          echo "<select name='txtType' class='form-control' id='noevenement' required>";
         
              echo "<option value='ponctuel'>ponctuel</option>";
              echo "<option value='institutionnel'>institutionnel</option>";
          echo "</select><br/>";

          echo form_label('Date Debut','lbxDateDebut',array('id'=>'lbxDatefin'));
      
          echo form_input(array('name'=>'txtDateDebut','type'=>'date','value'=>'','placeholder'=>'Datefin','required'=>'required','class'=>'form-control')).'<BR>';

          echo form_label('Date fin','lbxDatefin',array('id'=>'lbxDatefin'));
      
          echo form_input(array('name'=>'txtDateFin','id'=>'txtDateFin','type'=>'date','value'=>'','placeholder'=>'Datefin','required'=>'required','class'=>'form-control')).'<BR>';
    

          echo form_submit('btnPartenaires','Ajouter',array('class'=>'btn btn-primary'));
         echo form_close();
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



 


<div id="ModalModifierJeux" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier un Jeux </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/ModifierJeux');
          echo form_label('Jeux','lbxJeux');

          echo "<select name='txtnoJeux' class='form-control' id='noJeux' required>";
          foreach ($LesJeux as $UnJeux) {
              echo "<option value='". $UnJeux->id. "'>" . $UnJeux->intitule. "</option>";
          }
          echo "</select><br/>";

          echo form_label('Intitule','lbxIntitule',array('id'=>'lbxIntitule4')).'<BR>';
                   
        echo form_input(array('name'=>'txtIntitule','id'=>'txtIntitule','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';


        echo form_label('Description','lbxDescription',array('id'=>'lbxDescriptionJeux')).'<BR>';

        echo form_textarea(array('name'=>'txtDescription','id'=>'txtDescriptionJeux','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

        echo form_label('Fonctionnement','lbxFonctionnement',array('id'=>'lbxFonctionnement')).'<BR>';

        echo form_textarea(array('name'=>'txtFonctionnement','id'=>'txtFonctionnement','value'=>'','placeholder'=>'Fonctionnement','pattern'=>'[a-zA-Z0-9\s]+','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

        echo form_label('Images','lbxImages',array('id'=>'lbxImages4')).'<BR>';
        echo '<p id="NomfichierJeux"> </p>';
        echo form_input(array('name'=>'txtImages','id'=>'TxtImages','type'=>'file','value'=>'','placeholder'=>'Image','class'=>'form-control')).'<BR>';
        
        echo form_label('Date debut','lbxdebut',array('id'=>'lbxdebut')).'<BR>';

        echo form_input(array('name'=>'txtDateDebut','id'=>'txtDateDebutJeux','type'=>'datetime-local','value'=>'','placeholder'=>'DateDebut','required'=>'required','class'=>'form-control')).'<BR>';

        echo form_label('Date fin','lbxfin',array('id'=>'lbxfin')).'<BR>';

        echo form_input(array('name'=>'txtDateFin','id'=>'txtDateFinJeux','type'=>'datetime-local','value'=>'','placeholder'=>'DateFin','required'=>'required','class'=>'form-control')).'<BR>';

        echo form_label('Interruption','lbxInterruption',array('id'=>'lbxInterruption')).'<BR>';

        echo form_input(array('name'=>'txtInterruption','id'=>'txtInterruption','value'=>'','pattern'=>'[0-9]','placeholder'=>'Interruption','required'=>'required','class'=>'form-control')).'<BR>';
        echo form_submit('btnJeux','Modifier',array('class'=>'btn btn-primary','id'=>'btnJeux')).'<BR>';
         echo form_close();
        ?>
         <button type="button" class="btn btn-default" id="btnSupjeux" data-toggle="modal" data-target="#SuppressionJeux">Supprimer</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="ModalModifierPartenaire" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier un Partenaire </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open_multipart('Admin/ModifierPartenaires');

          echo form_label('Partenaires','lbxJeux');

          echo "<select name='txtnoPartenaires' id='noPartenaires' class='form-control' required>";
          foreach ($LesPartenaires as $UnPartenaire) {
              echo "<option value='". $UnPartenaire->id. "'>" . $UnPartenaire->nom. "</option>";
          }
          echo "</select><br/>";

          echo form_label('NOM','lbxNom',array('id'=>'lbxNom'));

          echo form_input(array('name'=>'txtNom','id'=>'txtNom','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Nom du partenaires','required'=>'required','class'=>'form-control','title'=>'les lettres + chiffres uniquement')).'<BR>';
      
          echo form_label('Description','lbxDescriptionPart',array('id'=>'lbxDescriptionPart'));
      
          echo form_textarea(array('name'=>'txtDescriptionPart','id'=>'txtDescriptionPart','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Description','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      
          echo form_label('Site','lbxSite',array('id'=>'lbxSite'));
      
          echo form_input(array('name'=>'txtSite','id'=>'txtSite','value'=>'','placeholder'=>'Site','pattern'=>'https?://.+','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      
          echo form_label('Logo','lbxLogo',array('id'=>'lbxLogo'));
          echo '<p id="Logo"> </p>';
          echo form_input(array('name'=>'txtLogo','id'=>'txtLogo','type'=>'file','value'=>'','placeholder'=>'Fichier')).'<BR>';

          echo form_label('Type','lbxtype',array('id'=>'lbxtype'));
           echo '<p id="txtType"> </p>';
          echo "<select name='txtType' class='form-control' id='Type' required>";
         
              echo "<option value='ponctuel'>ponctuel</option>";
              echo "<option value='institutionnel'>institutionnel</option>";
          echo "</select><br/>";

          echo form_label('Date Debut','lbxDateDebut',array('id'=>'lbxDateDebutPart'));
      
          echo form_input(array('name'=>'txtDateDebut','id'=>'txtDateDebutPart','type'=>'date','value'=>'','placeholder'=>'Datefin','required'=>'required','class'=>'form-control')).'<BR>';

          echo form_label('Date fin','lbxDatefin',array('id'=>'lbxDateFinPart'));
      
          echo form_input(array('name'=>'txtDateFin','id'=>'txtDateFinPart','type'=>'date','value'=>'','placeholder'=>'Datefin','required'=>'required','class'=>'form-control')).'<BR>';
    
          echo form_submit('btnPartenaires','Ajouter',array('class'=>'btn btn-primary','id'=>'btnPartenaires'));
         echo form_close();
        ?>
         <button type="button" class="btn btn-default" id="btnSupPartenaires" data-toggle="modal" data-target="#SuppressionPartenaires">Supprimer</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="SuppressionJeux" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <H1>  Voulez  vous vraiment supprimer le jeux? </h1>
      <?php
        echo form_open('Admin/SupprimerJeux');
      echo form_input(array('name'=>'txtid','type'=>'hidden','id'=>'txtid','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      echo form_submit('btnSupjeux','Oui',array('class'=>'btn btn-primary','id'=>'btnJeux'));
      echo form_close();
      ?>
        &nbsp;<button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="SuppressionPartenaires" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <H1>  Voulez  vous vraiment supprimer le  Partenaires? </h1>
      <?php
        echo form_open('Admin/SupprimerPartenaire');
      echo form_input(array('name'=>'txtidPartenaire','type'=>'hidden','id'=>'idPartenaire','type'=>'hidden','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      echo form_submit('btnSupPartenaire','Oui',array('class'=>'btn btn-primary'));
      echo form_close();
      ?>
        &nbsp;<button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="SuppressionEmission" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <H1>  Voulez  vous vraiment supprimer l'emission? </h1>
      <?php
        echo form_open('Admin/SupprimerEmission');
     
      echo form_input(array('name'=>'txtidEmission','type'=>'hidden','id'=>'idEmission','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      echo form_submit('btnSupEmission','Oui',array('class'=>'btn btn-primary'));
      echo form_close();
      ?>
        &nbsp;<button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div id="SuppressionEvenement" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <H1>  Voulez  vous vraiment Supprimer l'evenement? </h1>
      <?php
        echo form_open('Admin/SupprimerEvenement');
     
      echo form_input(array('name'=>'txtidEvenement','type'=>'hidden','id'=>'idEvenement','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
      echo form_submit('btnSupEvenement','Oui',array('class'=>'btn btn-primary'));
      echo form_close();
      ?>
        &nbsp;<button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div id="SuppressionAnimateur" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <H1>  Voulez  vous vraiment Supprimer l'Animateur? </h1>
      <?php
        echo form_open('Admin/SuppressionAnimateur');
        echo form_input(array('name'=>'txtidAnimateur','type'=>'hidden','id'=>'idAnimateur','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
        echo form_submit('btnSupAnimateur','Oui',array('class'=>'btn btn-primary'));
        echo form_close();
      ?>
        &nbsp;<button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="ModalModifierTxtLocal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier une Info Local </h4>
      </div>
      <div class="modal-body">
      <?php
          echo validation_errors();

          echo form_open('Admin/ModifierTxtLocal');
          echo form_label('Emissions','lbxEmissions',array('id'=>'emission'));

          echo "<select name='txtnoInfo' id='idInfo' class='form-control'  required>";
         foreach ($LesInfoslocal as $infoLocal) {
           echo "<option value='". $infoLocal->id. "'>" . $infoLocal->titre. "</option>";
             }
        echo "</select><br/>";

        echo form_label('Titre','lbxTitre',array('id'=>'labeltitreinfo'));

        echo form_input(array('name'=>'txtTitre','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','id'=>'txtInfo','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';


        echo form_label('Description','lbxDescription',array('id'=>'labelInformation'));

        echo form_textarea(array('name'=>'txtDescription','value'=>'','placeholder'=>'Description','pattern'=>'[a-zA-Z0-9\s]+','id'=>'Information','required'=>'required','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';

         
         echo form_submit('btnInfoModif','Modifier',array('class'=>'btn btn-primary','name'=>'btnmoif','id'=>'btnmodifinfo')).'<BR>';

         echo form_close();
        ?>
           <button type="button" class="btn btn-default" id="btnSupInfo" data-toggle="modal" data-target="#SuppressionInfo">Supprimer</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="SuppressionInfo" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <H1>  Voulez  vous vraiment Supprimer l'Information? </h1>
      <?php
        echo form_open('Admin/SuppressionInformation');
        echo form_input(array('name'=>'txtidInfo','id'=>'idInfotxt','value'=>'','pattern'=>'[a-zA-Z0-9\s]+','placeholder'=>'Titre','required'=>'required','type'=>'hidden','class'=>'form-control','title'=>'les lettres + chifres uniquement')).'<BR>';
        echo form_submit('btnSupInfo','Oui',array('class'=>'btn btn-primary'));
        echo form_close();
      ?>
        &nbsp;<button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>