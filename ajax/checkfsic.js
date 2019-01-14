
$(document).ready(function(){
   
    $("#fsicusername").keyup(function(){
        var fsicusername = $("#fsicusername").val().trim();
        if(fsicusername != ''){
            $("#fsicname_response").show();

            $.ajax({
                url: 'actions/checkfsic.php',
                type: 'post',
                data: {fsicusername:fsicusername},
                success: function(response){
                    if(response > 0){
                        $("#fsicname_response").html("<span class='label label-danger'>Username already exist in database</span>");
                        $("#fsicsave").attr("disabled", true); 

                    }else{
                        $("#fsicname_response").html("");
                        $("#fsicsave").attr("disabled", false); 
                    }
                }
            });
        }else{
            $("#fsicname_response").hide();
        }
    });


});











