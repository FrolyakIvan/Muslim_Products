$(function(){$('#submit-modal-form-certificate').click(function(){$('#certificate-form').validate({errorClass:"error",rules:{S_name:{required:true},S_tel:{required:true,number:true},S_email:{required:true,email:true}},message:{"S_name":{required:"Введите свое имя",},"S_tel":{required:"Введите свой номер телефона",number:""},"S_email":{required:"Введите адрес электронной почты",email:""}},submitHandler:(function(form){var to=$('input#to').val();var fullname=$('input#S_name').val();var number=$('input#S_tel').val();var emailaddress=$('input#S_email').val();var dataString='to='+to+'&S_name='+fullname+'&S_email='+emailaddress+'&S_tel='+number+'';$.ajax({type:"POST",url:"certificate-mail.php",data:dataString,success:(function(data){$('#modal-thanks-certificate').modal('show');$('#certificate-form').trigger("reset");setTimeout(function(){$("#modal-thanks-certificate").fadeOut(1500);},3000);setTimeout(function(){$("#certificate-modal-window").fadeOut(500);},1000);$(':input','#certificate-form').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');return false;}),error:(function(){})});return false;})});});});