$(document).ready(function(){

    $('#check-section').hide();
    $('#online-payment-section').hide();
    $('#mandat-section').show();

     $('input[type=radio][name=payment-type]').change(function (){


         if($('input[type=radio][name=payment-type]:checked').val() == 'mandat'){

             $('#check-section').hide();
             $('#online-payment-section').hide();
             $('#mandat-section').show();

         }else if($('input[type=radio][name=payment-type]:checked').val() == 'check'){

             $('#online-payment-section').hide();
             $('#mandat-section').hide();
             $('#check-section').show();

         }else{

             $('#mandat-section').hide();
             $('#check-section').hide();
             $('#online-payment-section').show();

         }




     });






});