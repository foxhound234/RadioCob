$(document).ready(function () {
     /*  Emission modifie modal*/
  $("#labeltitre").hide(); 
  $('#Emissiontitre').hide();
  $("#images").hide();
  $("#Description").hide();
  $("#lbxDescription").hide();
  $("#labeldescr").hide();  
  $("#labelimages").hide();
  $("#submit").hide();
   /*     */
   $("#noemission").change(function(){
    var id = $('#noemission').val();
    $("#labeltitre").show(); 
    $('#Emissiontitre').show();
    $("#lbxDescription").show();
    $("#labeldescr").show();  
  $("#labelimages").show();
    $("#images").show();
    $("#Description").show();
  $("#submit").show();

  $.ajax({
        url : "<?php echo site_url('Admin/AfficheEmission/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('#Emissiontitre').text("eeeee");
           $("#images").text(data[0].image);
          $("#Description").text(data[0].description);
          }  
        });     
   });
})