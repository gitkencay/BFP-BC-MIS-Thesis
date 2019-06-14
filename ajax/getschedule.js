$(document).ready(function(){

    $(document).on('click', '#addnew', function(){
        if ($('#inspector_name').val()=="" || $('#inspection_date').val()=="" || $('#inspection_time').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Please fill all fields!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $io_no=$('#io_no').val();
            $inspector_name=$('#inspector_name').val();
            $inspection_date=$('#inspection_date').val();
            $inspection_time=$('#inspection_time').val();
            if(confirm('Are you sure you want to add this schedule?')){
                $.ajax({
                    type: "POST",
                    url: "actions/addSchedule.php",
                    cache:false,
                    async:false,
                    data: {
                        io_no : $io_no,
                        inspector_name : $inspector_name,
                        inspection_date : $inspection_date,
                        inspection_time : $inspection_time,
                        add: 1,
                    },
                    success: function(){
                        $('.add_inspection').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Schedule Added Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                    }
                });
            }
            $('form').trigger('reset');
        }

    });

});