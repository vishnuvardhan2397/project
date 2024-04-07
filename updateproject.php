<?php
	session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }				  
?> 
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>  
<?php include('connection.php');?>
 <?php

$update= $_GET['idd'];
$sql11 = "select * from project WHERE id = '".$update."' ";
$data11 = mysqli_query($con,$sql11);
$total11=mysqli_num_rows($data11); 
$result11 = mysqli_fetch_assoc($data11);
?> 
 
 
 <!-- SELECT2 EXAMPLE -->
<html>
<body>
 <div class="content-wrapper">
    <div class="card card-default">
	<div class="card-header">
            <h3 class="card-title"><b>Update Project</b></h3>
          </div>
      <div class="card-body">
            <div class="row">
              <div class="col-md-6">
			  <form  id ="projectform" action ="updateproinc.php" method ="POST">
			  <input type ="hidden" name = "id" value ="<?php echo $result11['id'];?>" >
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Project Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="projectname" name="projectname" value ="<?php echo $result11['project_name'];?>" >
                    </div>
                  </div>
				<div class="card-footer">
				<button type ="submit" name ="submit" id="submit"  class ="btn btn-primary">Update</button>
                </div>
				</form>
			</div>
		</div>
	</div>
      
</div>
</div>
<script>