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
    <div class="card card-default">
	<div class="card-header">
            <h3 class="card-title"><b>Add Projects</b></h3>
          </div>
      <div class="card-body">
            <div class="row">
              <div class="col-md-6">
			  <form  id ="projectform" action ="includeproject.php" method ="POST">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Project Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="projectname" name="projectname">
                    </div>
                  </div>
				<div class="card-footer">
				<button type ="submit" name ="submit" id="submit"  class ="btn btn-primary">Submit</button>
                </div>
				</form>
			</div>
		</div>
	</div>
      
</div>
</div>
<script>

$(document).ready(function(){  
  $("#projectform").validate({ 

  rules:{
	  projectname:{
	           required:true,
	  }
  },
  messages:{
	  project:{
		  required :"Please enter the projectname",
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