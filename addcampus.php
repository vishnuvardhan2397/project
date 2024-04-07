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
            <h3 class="card-title"><b>Add Campus</b></h3>
          </div>
      <div class="card-body">
            <div class="row">
              <div class="col-md-6">
			  <form  id ="issueform" action ="includecampus.php" method ="POST">
                
				 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Campus Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="campusname" name="campusname">
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