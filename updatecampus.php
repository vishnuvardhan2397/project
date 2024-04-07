<?php
	session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }				  
?>
<?php include("header.php"); ?> 
<?php include("sidebar.php"); ?> 

  

  <?php
include("connection.php");
$update = $_GET['idd'];
$sql20 = "select * from campus WHERE id = '".$update."' ";
$data20 = mysqli_query($con,$sql20); 
$result20 = mysqli_fetch_assoc($data20);
?> 
 
 
 <!-- SELECT2 EXAMPLE -->
<html>
<body>
 <div class="content-wrapper">
    <div class="card card-default">
	<div class="card-header">
            <h3 class="card-title"><b>Update Campus</b></h3>
          </div>
      <div class="card-body">
            <div class="row">
              <div class="col-md-6">
			  <form  id ="issueform" action ="updatecampusinc.php" method ="POST">
                <input type ="hidden" name = "id" value ="<?php echo $result20['id'];?>" >
				 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Campus Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="campusname" name="campusname" value="<?php echo $result20['campus_name'];?>" >
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