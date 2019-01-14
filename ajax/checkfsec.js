
$(document).ready(function(){
   
    $("#username").keyup(function(){
        var username = $("#username").val().trim();
        if(username != ''){
            $("#uname_response").show();

            $.ajax({
                url: 'actions/checkfsec.php',
                type: 'post',
                data: {username:username},
                success: function(response){
                    if(response > 0){
                        $("#uname_response").html("<span class='label label-danger'>Username already exist in database</span>");
                        $("#save").attr("disabled", true); 

                    }else{
                        $("#uname_response").html("");
                        $("#save").attr("disabled", false); 
                    }
                }
            });
        }else{
            $("#uname_response").hide();
        }
    });


});











