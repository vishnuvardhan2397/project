  <?php
	session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }				  
?> 
<?php include("sidebar.php"); ?>
<?php include("connection.php"); ?>
<?php

$sql15 = "select * from role";
$data15 = mysqli_query($con,$sql15);
?>

<?php 
if(isset($_GET['uid'])){
$uid = $_GET['uid'];
$sql23 = "select * from role where id = '".$uid."' ";
$data23 = mysqli_query($con,$sql23);
$result23 = mysqli_fetch_assoc($data23);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<?php include("header.php"); ?> 


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
	    
    <section class="content">
      <div class="container-fluid">
	      <div class="card card-default" >
        
          <!-- /.card-header -->
         <div class="card-body">
           <form  id ="userform" action ="updateroleinc.php" method ="POST">
             <div class="row">
			  <input type ="hidden" name = "id" value ="<?php 
if(isset($_GET['uid'])){
echo $result23['id'];
}
?>" >
		       <div class="col-md-6">
                <div class="form-group">
                        <label>Role</label>
                        <input name ="role" id="role" type="text" class="form-control" 
						         value= "<?php 
if(isset($_GET['uid'])){
echo $result23['rolename'];
}
?>">
                </div>
			   </div>
               <div class="col-md-6">
				<div class="form-group">
                        
                </div>
			   </div>
			 </div>
			 <div class="row">
		       <div class="col-md-6">
                <div class="form-group">
                        <label>permission</label>
                </div>
			   </div>
               <div class="col-md-6">
				<div class="form-group">     
                </div>
			   </div>
			 </div>
			 <div class="row">
			        <div class="col-sm-3">
					
                      <!-- checkbox -->
                      <div class="form-group">
					    <label>Dashboard</label>
                        <div class="form-check">
                          <input class="form-check-input" name="dashboard" id="dashboard" type="checkbox" >
                          <label class="form-check-label">Dashboard</label>
                        </div>
                      </div>
                    </div>
					<div class="col-sm-3">
                      <!-- checkbox -->
                      <div class="form-group">
					    <label>Issue</label>
                        <div class="form-check">
                          <input class="form-check-input" name="issue" id="issue" type="checkbox">
                          <label class="form-check-label">Issue</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- checkbox -->
                      <div class="form-group">
					    <label>Master</label>
                        <div class="form-check">
                          <input class="form-check-input" name="project" id="project" type="checkbox">
                          <label class="form-check-label">Project</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="campus" id="campus" type="checkbox">
                          <label class="form-check-label">Campus</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- checkbox -->
                      <div class="form-group">
					    <label>User</label>
                        <div class="form-check">
                          <input class="form-check-input" name="users" id="users" type="checkbox">
                          <label class="form-check-label">users</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="roles" id="roles" type="checkbox">
                          <label class="form-check-label">roles</label>
                        </div>
                      </div>
                    </div>
                  </div>
			 
              <div class="row">
			   <div class="col-md-4">
			   </div>
			   <div class="col-md-6">
				<button type ="submit" name ="submit" id="submit"  class ="btn btn-primary">Submit</button>
               </div>
			 </div>
		   </form>
		 </div>
	</div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
			   <div class ="row">
			    <div class="col-sm-6">
                <h3 class="card-title"><b>ROLES</b></h3>
				</div>
				<div class="col-sm-4">
				</div>
				<div class="col-sm-2">
		           <a class="breadcrumb-item"><a href="addrole.php" class = "btn btn-primary">ADD ROLE</a>
                </div>
              </div>
			  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
		              <th>S.no</th>
                      <th>Role</th>
					  <th>Permission</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
					<tr>
					 <?php
					while($result15= mysqli_fetch_assoc($data15)){
						?>
					<td><?php echo $result15['id'];?> </td>
					<td><?php echo $result15['rolename'];?></td>
                 	<td><?php echo $result15['permission'];?></td>				
					<td><center>
					<a href="role.php?uid=<?php echo $result15['id']?>"><i class="fa fa-edit" style="font-size:30px;color:light-blue"></i></a>
					
					</center>
					</td>
			        </tr>
					<?php
					}
					?>
                    					
				
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
         </div>
        
       
      </div><!-- /.container-fluid -->
    </section>
	</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>

</html>
