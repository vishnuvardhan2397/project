 <?php
session_start();
unset($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">									
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p><b>AES</b>TOOL</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
	  <!--<form name ="f1" id="form"  method ="POST"> -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username" name ="username" id="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name ="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		<div class="row">
          <div class="col-8">
           
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-4">
		  <button type ="submit" name ="submit" id ="submit" class ="btn btn-primary btn-block">sign in</button>
          </div>
        </div>
		 <!-- </form>-->
		 <p id="spin"></p>
      
    </div>
  </div>
</div>

 <script>  
              $(document).ready(function(){
					   $("#submit").click(function(){
						   //alert();
   //function validation()
	   
	               var username=$('#username').val();
					
					var password=$('#password').val();
					
					if(username=='' && password=='') {  
					$('#spin').text("Username and Password fields are empty");
					
                    //alert("Username and Password fields are empty");  
	
                    } else if(username==""){  
                        $('#spin').text("Username field is empty");  
                         
                    }else if(password=="") { 
                    $('#spin').text("password field is empty");					
                     
                      
                    }else if(username !='' && password !=''){
						$.ajax
						({
							url:"authentication.php",
							type:"POST",
							data:{username:username,password:password},
							success:function(response){
								//console.log(response);
                   // $('#spin').text("invalid login ");					
                            var msg = "";
                            if(response == 1){
								  msg = "Login success";
                              window.location = "task.php";
                              }else{
								  
                             msg = "Invalid username and password!";
                            }
                             $("#spin").html(msg);
                            }
							
						});
					}					
	
					   });
					    });
  </script> 

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
