$(document).ready(function(){
    $('#loader-gif').show();
    showStudentLoginForm();
});
function showStudentLoginForm(){
  setTimeout("$('.body-custom').load('student-login-form.php',function(){$('#loader-gif').css('display', 'none');})", 800);
}
