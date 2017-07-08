$(document).ready(function(){
    $('#loader-gif').show();
    showAdminLoginForm();
});

function showAdminLoginForm(){
  setTimeout("$('.body-custom').load('admin-login-form.php',function(){$('#loader-gif').css('display', 'none');})", 800);
}
