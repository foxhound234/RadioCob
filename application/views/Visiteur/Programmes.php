<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TitredeLaPage ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
    $(document).ready(function() {
        
      generes();
      
      function Remplirmodal(Description) {
        alert(Description);
     }
     function test()
     {
       alert("eee");
     }


     function generes() {
      $.ajax({
        url:"<?php echo site_url('Visiteur/afficheProgrammation'); ?>", 
        type:"GET",
        dataType: 'JSON',
        success: function(data){
              for(var i=0;i<data.length;i++)
              {
                var j=data.lenght;
                var Jour=document.getElementById(data[i].jour);
                var Div=document.getElementById("Contenu");
               

                  if(Jour)
                  {
                    var DivEmission=document.createElement("div");
                    var DivHoraire=document.createElement("div");
                    var DivEmissionDetail=document.createElement("div");
                    DivHoraire.setAttribute("class","horaires");

                    DivEmission.setAttribute("class","emission");

                    

                   

                    var Br=document.createElement("br");
                    var Br1=document.createElement("br");
                    var NomEmission=document.createElement("h1");
                      NomEmission.setAttribute("class","H1emission");

                      var spanDescription=document.createElement("span");
                 
                      
                    
                                       
                    var txtTitre=document.createTextNode(data[i].titre);
                    var txtHeuredebut=document.createTextNode(data[i].debut);
                    var txtHeurefin=document.createTextNode(data[i].fin); 
                    var txtDescription=document.createTextNode(data[i].description);

                   
                 
                    Jour.appendChild(DivEmission);
                    DivEmission.appendChild(DivHoraire);
                     
                    DivHoraire.appendChild(txtHeuredebut);
                    DivHoraire.appendChild(Br);
                    DivHoraire.appendChild(txtHeurefin);
                    NomEmission.appendChild(txtTitre);
                    DivEmission.appendChild(Br1);
                    DivEmission.appendChild(NomEmission);
                    DivEmission.appendChild(DivEmissionDetail);
                    DivEmissionDetail.appendChild(spanDescription);
                    spanDescription.appendChild(txtDescription);
                    var textNode = spanDescription.firstChild;

                    if(textNode.length>155)
                        {
                          DivEmissionDetail.setAttribute("class","emission-details text ellipsis");
                          spanDescription.setAttribute("class","text");
                        }else{
                          DivEmissionDetail.setAttribute("class","emission-details");
                        }

                  }else{

                    var DivJour= document.createElement("div");
                   
                    var Jour=document.createElement("h1");
                      Jour.setAttribute("class","H1Jour");

                    var txtJour=document.createTextNode(data[i].jour);

                    DivJour.setAttribute("id",data[i].jour);
                    DivJour.setAttribute("class","jourProgrammes");
                    DivJour.appendChild(Jour);
                    Jour.appendChild(txtJour);
                  

                    var DivEmission=document.createElement("div");
                    var DivHoraire=document.createElement("div");
                    var DivEmissionDetail=document.createElement("div");

                    var Br=document.createElement("br");
                    var Br1=document.createElement("br");
                    var NomEmission=document.createElement("h1");
                    var spanDescription=document.createElement("span");
                 
              
                    NomEmission.setAttribute("class","H1emission");
                    
                    var txtTitre=document.createTextNode(data[i].titre);
                    var txtHeuredebut=document.createTextNode(data[i].debut);
                    var txtHeurefin=document.createTextNode(data[i].fin);
                    var txtDescription=document.createTextNode(data[i].description);
                

                    DivEmission.appendChild(DivHoraire);
                     
                     DivHoraire.appendChild(txtHeuredebut);
                     DivHoraire.appendChild(Br);
                     DivHoraire.appendChild(txtHeurefin);
                     NomEmission.appendChild(txtTitre);
                     DivEmission.appendChild(DivHoraire);
                     DivEmission.appendChild(Br1);
                     DivEmission.appendChild(NomEmission);
                     DivHoraire.setAttribute("class","horaires");

                    DivEmission.setAttribute("class","emission");
                     Div.appendChild(DivJour);
                     
                     DivJour.appendChild(DivEmission);
                      DivEmission.appendChild(DivEmissionDetail);
                    DivEmissionDetail.appendChild(spanDescription);
                    spanDescription.appendChild(txtDescription);
                    var textNode = spanDescription.firstChild;
                    if(textNode.length>155)
                    {
                      DivEmissionDetail.setAttribute("class","emission-details text ellipsis");
                      alert(textNode.length);
                      spanDescription.setAttribute("class","text");
                    }else{
                      DivEmissionDetail.setAttribute("class","emission-details");
                    }
                      
                  } 

                
                



              }                   
        },
        error: function () {
        alert("54545");
      }
      }); 
     }  



    


















    });
    </script>
</head>
<body>
<div id="Contenu" class="contenu">
</div>
<div id="ModalDescription" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <h1 id="Description"> eee </h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>