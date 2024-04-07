  <?php
	session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }				  
?> 
<?php include("sidebar.php"); ?>

<?php include("connection.php");
 $sql14="select * from user";
 $data14 = mysqli_query($con,$sql14);


?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php include("header.php"); ?> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
	   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
               <div class="card-header">
			   <div class ="row">
			    <div class="col-sm-6">
                <h3 class="card-title"><b>USERS</b></h3>
				</div>
				<div class="col-sm-4">
				</div>
				<div class="col-sm-2">
		<a class="breadcrumb-item"><a href="adduser.php" class = "btn btn-primary">ADD USER</a>
          </div>
              </div>
			  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
		              <th>Id</th>
                      <th>Name</th>
					  <th>Designation</th>
                      <th>role</th>
					  <th>email</th>
					  <th>Username</th>
					  <th>status</th>
					  <th>Action</th>
					  
                    </tr>
                  </thead>
                  <tbody>
                   
					
					<?php
					while($result14= mysqli_fetch_assoc($data14)){ 
					?>
					<tr>
					<td><?php echo $result14['id']?></td>
					<td><?php echo $result14['name']?></td>	
					<td><?php echo $result14['designation']?></td>
					<td><?php echo $result14['role']?></td>
					<td><?php echo $result14['email']?></td>
					<td><?php echo $result14['username'];?></td>
					<td><?php
					if($result14['status']==0){ 
					echo "Active";
					}elseif($result14['status']==1){ 
					echo "Inactive";
					}
					
					?>
					</td>
					<td>	
					<?php
					if($result14['status']==0){ ?>
						<a class = "btn btn-danger" href="updateuserstatus.php?sid=<?php  echo $result14['id'].'&status=1';?> " > Deactivate </a> 
						<?php 
					}elseif($result14['status']==1){
						?>
						<a class = "btn btn-success" href="updateuserstatus.php?sid=<?php  echo $result14['id'].'&status=0';?>" >Activate</a> 
						<?php 
					};
					?>
					
					 <a href="updateuser.php?uid=<?php echo $result14['id']?>"><i class="fa fa-edit" style="font-size:30px;color:light-blue"></i></a>
					 <!-- <a href=""><i class="fa fa-trash-o" style="font-size:30px;color:red"></i></a>-->
					
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
<?php include("footer.php"); ?>
</html>
