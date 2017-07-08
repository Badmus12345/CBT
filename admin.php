<!doctype html>
<html lang="">
  <?php session_start();?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Login | Propeller - Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Exam Manager</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<!-- Propeller css -->
<link rel="stylesheet" type="text/css" href="assets/css/propeller.min.css">

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">
<link rel = "stylesheet" type = "text/css" href = "styles.css">



</head>

<body class="body-custom">
  <div id = "loader-gif">
    <img src = "img/loading.gif">
  </div>
  <div class = "data">

  </div>

  <script src="assets/js/jquery.js"></script>
  <script type = "text/javascript" src = "assets/js/jquery-ui.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/propeller.min.js"></script>
  <script>
  	$(document).ready(function() {
  		var sPath=window.location.pathname;
  		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
  		$(".pmd-sidebar-nav").each(function(){
  			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
  			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
  			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
  			$(this).find("a[href='"+sPage+"']").addClass("active");
  		});
  	});
  </script>
  <!-- login page sections show hide -->
  <script type="text/javascript">
  	$(document).ready(function(){
  	 $('.app-list-icon li a').addClass("active");
  		$(".login-for").click(function(){
  			$('.login-card').hide()
  			$('.forgot-password-card').show();
  		});
  		$(".signin").click(function(){
  			$('.login-card').show()
  			$('.forgot-password-card').hide();
  		});
  	});
  </script>
  <script type = "text/javascript" src = "assets/js/admin_script.js">
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
  		$(".login-register").click(function(){
  			$('.login-card').hide()
  			$('.forgot-password-card').hide();
  			$('.register-card').show();
  		});

  		$(".register-login").click(function(){
  			$('.register-card').hide()
  			$('.forgot-password-card').hide();
  			$('.login-card').show();
  		});
  		$(".forgot-password").click(function(){
  			$('.login-card').hide()
  			$('.register-card').hide()
  			$('.forgot-password-card').show();
  		});
  });
  </script>

  <!-- Scripts Ends -->

  </body>
  </html>
