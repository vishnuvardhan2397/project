<?php
	session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }				  
?> 
<?php include("header.php"); ?> 
<?php include("sidebar.php"); ?> 

 <!-- SELECT2 EXAMPLE -->
<html>
<body>
 <div class="content-wrapper">
    <div class="card card-default" style= "height :578px;">
        <div class="card-header">
            <h3 class="card-title"><b>Add Users</b></h3>
          </div>
          <!-- /.card-header -->
         <div class="card-body">
           <form  id ="userform" action ="includeuser.php" method ="POST">
             <div class="row">
		       <div class="col-md-6">
                <div class="form-group">
                        <label>Name</label>
                        <input name ="name" id="name" type="text" class="form-control" placeholder="Enter ..."  >
                </div>
			   </div>
               <div class="col-md-6">
				<div class="form-group">
                        <label>Designation</label>
                        <input name ="designation" id="designation" type="text" class="form-control" placeholder="Enter ..."  >
                </div>
			   </div>
			 </div>
			 <div class="row">
		       <div class="col-md-6">
                <div class="form-group">
                  <label>Role</label>
                  <select name ="role" class="form-control select2" style="width: 100%;" >
				    <option value="" disabled selected>Select role</option>
                    <?php
					include('fetchrole.php');
					foreach ($options16 as $option) {
					?>
					<option value="<?php echo $option['id']; ?> "><?php echo $option['rolename']; ?> </option>
                   
					<?php
					}
					?>
                  </select>
                </div>
			   </div>
			   <div class="col-md-6">
				<div class="form-group">
                        <label>Email</label>
                        <input name ="email" id="email" type="text" class="form-control" placeholder="Enter ..."  >
                </div>
               </div>
			 </div>
			 <div class="row">
			   <div class="col-md-6">
                <div class="form-group">
                        <label>Username</label>
                        <input name ="username" id="username" type="text" class="form-control" placeholder="Enter ..."  >
                </div>
			   </div>
			   <div class="col-md-6">
				<div class="form-group">
                        <label>Password</label>
                        <input name ="password" id="password" type="password" class="form-control" placeholder="Enter ..."  >
                </div>
			   </div>
			 </div>
             <div class="row">
			   <div class="col-md-5">
			   </div>
			   <div class="col-md-6">
				<button type ="submit" name ="submit" id="submit"  class ="btn btn-primary">Submit</button>
               </div>
			 </div>
		   </form>
		 </div>
	</div>
</div>	

	
<script>

$(document).ready(function(){  
  $("#userform").validate({ 

  rules:{
	  name:{
	           required:true,
	  },
	  designation:{
	           required:true,
	  }, 
	  role:{
	           required:true,
	  }, 
	  email:{
	           required:true,
	  }, 
	  username:{
	           required:true,
	  }, 
	  password:{
	           required:true,
	  }
  },
  messages:{
	  name:{
		  required :"Please enter the name",
	  },
	  designation:{
		  required :"Please enter the designation",
	  },
	  role:{
		  required :"Please select the role",
	  },
	  email:{
		  required :"Please enter the email",
	  },
	  username:{
		  required :"Please enter the username",
	  },
	  password:{
		  required :"Please enter the password",
	  },
  },
	  
  submitHandler: function(form) {
      form.submit();
    }
 });
}); 

</script>
 <!-- form validate -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
</body>	
</html>			
				
				
                 