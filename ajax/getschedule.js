$(document).ready(function(){

    $(document).on('click', '#addnew', function(){
        if ($('#inspectors_drop').val()=="" || $('#inspection_date').val()=="" || $('#inspection_time').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Please fill all fields!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $io_no=$('#io_no').val();
            $inspectors_drop=$('#inspectors_drop').val();
            $inspection_date=$('#inspection_date').val();
            $inspection_time=$('#inspection_time').val();
            if(confirm('Are you sure you want to add this schedule?')){
                $.ajax({
                    type: "POST",
                    url: "actions/addschedule.php",
                    cache:false,
                    async:false,
                    data: {
                        io_no : $io_no,
                        inspectors_drop : $inspectors_drop,
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

    $("#inspectors_drop").change(function() {
        var id = $(this).find(":selected").val();
        var dataString = 'inspectorname='+ id;
        $.ajax({
            url: 'actions/getInspectorSchedule.php',
            dataType: "json",
            data: dataString,
            cache: false,
            success: function(employeeData) {
                if(employeeData) {
                    $("#heading").show();
                    $("#no_records").hide();
                    $("#inspector").text(employeeData.inspectors);
                    $("#inspector_date").text(employeeData.inspection_date);
                    $("#inspector_time").text(employeeData.inspection_time);
                    $("#records").show();
                } else {
                    $("#heading").hide();
                    $("#records").hide();
                    $("#no_records").show();
                }
            }
        });
    })
});