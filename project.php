  <?php
	session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }				  
?> 

<?php include("sidebar.php"); ?>
 <?php
include("connection.php");
$sql8 = "select * from project";
$data8 = mysqli_query($con,$sql8);
?>
<html>
 <?php include("header.php"); ?> 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-">
          <div class="col-sm-4">
            <h1></h1>
          </div>
		   <div class="col-sm-4">
           
			<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="addproject.php" class = "btn btn-primary">ADD PROJECT</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
			   <div class= "row">
			   <div class="col-md-9">
                <h3 class="card-title"><b>PROJECTS</b></h3>
				</div>
				<div class="col-md-3">
				<a href="addproject.php" class = "btn btn-primary">ADD PROJECT</a>
				</div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
					  <th>S.no</th>
                      <th>Project</th>
					  <th>Action</th>
                    </tr>
                  </thead>
				  <tbody>
				  <tr>
				  <?php
					while($result8= mysqli_fetch_assoc($data8)){
						?>
					<td><?php echo $result8['id'];?> </td>	
					<td><?php echo $result8['project_name'];?> </td>
					<td>
					 <div class="row">
					<div class="col-md-2">
					</div>
					
					<div class="col-md-4">
					 <a class = "btn btn-success" href="<?php echo base_url()."index.php/Main/validation"; ?>" >Update</a>
					</div>
					<div class="col-md-4">
					<a class = "btn btn-danger" href="<?php echo base_url()."index.php/Main/validation"; ?>">Delete</a>
					</div>
					<div class="col-md-2">
					</div>
					
					</div>		
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