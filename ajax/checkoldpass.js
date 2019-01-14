
$(document).ready(function(){
    
     $("#passwordold").keyup(function(){
         var passwordold = $("#passwordold").val().trim();
         if(passwordold != ''){
             $("#old_response").show();
             $.ajax({
                 url: 'actions/checkoldpass.php',
                 type: 'post',
                 data: {passwordold:passwordold},
                 success: function(response){
                     if(response > 0){
                        $("#old_response").html("");
                        $("#save").attr("disabled", false);
                     }else{ 
                         $("#old_response").html("<span class='label label-danger'>Old Password is invalid</span>");
                         $("#save").attr("disabled", true); 
                     }
                 }
             });
         }else{
             $("#old_response").hide();
         }
     });
 });
 
 
 
 
 
 
 
 
 
 
 
 