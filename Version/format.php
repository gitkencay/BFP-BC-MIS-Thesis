<script>
$(document).on("change keyup blur", "#total_amount",
function() {
var main = $('#Ini_FC_Constr').val();
var disc = 10;
var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
var mult = main*dec; // gives the value for subtract from main value
$('#construction_tax').val(mult);

var main1 = $('#Ini_FC_RT').val();
var disc1 = 1;
var dec1 = (disc1/100).toFixed(2); //its convert 10 into 0.10
var mult1 = main1*dec1; // gives the value for subtract from main value
$('#reality_tax').val(mult1);

var main2 = $('#Ini_FC_PreT').val();
var disc2 = 2;
var dec2 = (disc2/100).toFixed(2); //its convert 10 into 0.10
var mult2 = main2*dec2; // gives the value for subtract from main value
$('#premium_tax').val(mult2);

var main3 = $('#Ini_FC_ST').val();
var disc3 = 2;
var dec3 = (disc3/100).toFixed(2); //its convert 10 into 0.10
var mult3 = main3*dec3; // gives the value for subtract from main value
$('#sales_tax').val(mult3);

var main4 = $('#Ini_FC_ProT').val();
var disc4 = 2;
var dec4 = (disc4/100).toFixed(2); //its convert 10 into 0.10
var mult4 = main4*dec4; // gives the value for subtract from main value
$('#proceeds_tax').val(mult4);

var main5 = $('#Ini_FS_InspFee').val();
var disc5 = 10;
var dec5 = (disc/100).toFixed(2); //its convert 10 into 0.10
var mult5 = main5*dec5; // gives the value for subtract from main value
$('#inspection_fee').val(mult5);

var main6 = $('#Ini_StorClear').val();
$('#storage_clearance').val(main6);

var main7 = $('#Ini_ConvClear').val();
$('#conveyance_clearance').val(main7);

var main8 = $('#Ini_InstClear').val();
$('#installation_clearance').val(main8);

var main9 = $('#Ini_OtherClear').val();
$('#other_clearance').val(main9);

var output1 = parseFloat(mult);
var output2 = parseFloat(mult1);
var output3 = parseFloat(mult2);
var output4 = parseFloat(mult3);
var output5 = parseFloat(mult4);
var output6 = parseFloat(mult5);
var output7 = parseFloat(main6);
var output8 = parseFloat(main7);
var output9 = parseFloat(main8);
var output9 = parseFloat(main9);

var total = parseFloat(mult+mult1+mult2+mult3+mult4+mult5+main6+main7+main8+main9);
$('#total_amount').val(total);

});
</script>
