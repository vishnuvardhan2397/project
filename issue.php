  <?php
	session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }				  
?>
<?php $user_id = $_SESSION['user_id'];?>

<?php include("sidebar.php"); ?>

<?php include("header.php"); ?> 
 <?php
include("connection.php");
$sql3= "select issue.S_No,issue.Priority,issue.IssueSubject,issue.IssueDescription,issue.IssueNotes,issue.Status,
project.project_name,campus.campus_name,user.name,user.id
FROM issue 
INNER JOIN project on issue.Project = project.id
INNER JOIN campus on issue.Campus = campus.id
INNER JOIN user on issue.Assigned_to = user.id


ORDER BY S_No";
//$sql3 = "select * from issue";
$data3 = mysqli_query($con,$sql3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  
  
  
 
</head>
<body>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
			   <div class ="row">
			    <div class="col-sm-6">
                <h3 class="card-title"><b>ISSUE/NEW REQUIREMENT</b></h3>
				</div>
				<div class="col-sm-4">
				</div>
				<div class="col-sm-2">
           
			<!-- <ol class="breadcrumb float-sm-right">-->
			
              <a class="breadcrumb-item"><a href="addnew.php" class = "btn btn-primary">ADD ISSUE</a>
			
            <!-- </ol>-->
          </div>
              </div>
			  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
					  <th>S.no</th>
                      <th>Project</th>
                      <th>Campus</th>
                      <th>Priority</th>
                      <th>Issue Subject</th>
					  <th>Issue Description</th>
                      <th>Issue Notes</th>
					  <th>Assigned to</th>
					  <th>Assign</th>
					  <th>Status</th>
					 <th>Action</th>
					  
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
					<?php
					while($result3= mysqli_fetch_assoc($data3)){
						?>
					<td><?php echo $result3['S_No']?> </td>	
					<td><?php echo $result3['project_name']?> </td>
					<td><?php echo $result3['campus_name']?> </td>
					<td><?php echo $result3['Priority']?> </td>
					<td><?php echo $result3['IssueSubject']?> </td>
					<td><?php echo $result3['IssueDescription']?> </td>
					<td><?php echo $result3['IssueNotes']?> </td>
					<td><?php echo $result3['name']?> </td>
					<td>
					<button type="button" class="btn btn-danger" data-bs-toggle="modal" 
					
					         data-bs-target="#Modal<?php echo $result3['S_No']?>">Assign</button>
							 
					
					
					
					<div class="modal" id="Modal<?php echo $result3['S_No']?>">
           <div class="modal-dialog">
               <div class="modal-content">

      <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title">Assign To</h4>
				    
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

         <!-- Modal body -->
               <div class="modal-body">
                 <div class="form-group">
                  <label>Assign To</label>
				  <form action ="updateassign.php" method ="POST">
				   <input type ="text" name = "id" value = "<?php echo $result3['S_No']?> " >
                  <select name ="assign" class="form-control select2" style="width: 100%;" >
				    <option value="" disabled selected>Select user</option>
                    <?php
					include('fetchuser.php');
					foreach ($options22 as $option) {
					?>
                    <option value="<?php echo $option['id']; ?> "><?php echo $option['name']; ?> </option>
					<?php
					}
					?>
  
                  </select><br>
				  <button type ="submit" name ="submit" id="submit"  class ="btn btn-primary">Submit</button>
				  </form>
				  
                </div>
           </div>

            <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>

             </div>
            </div>
          </div>
                   </td>
					<td>
					<?php if($result3['Status']==0){
						       echo "New";
					          }elseif($result3['Status']==1){
							   echo "Processing";
							  }elseif($result3['Status']==2){
							   echo "Resolved";
							  }elseif($result3['Status']==3){
							   echo "Closed";
							  }
						?>
					</td>
                    <td> 
              <button type="button"  class="btn btn-success"  data-bs-toggle="modal" 
			  
			           data-bs-target="#myModal<?php echo $result3['S_No']?>">update</button>
				
			<div class="modal" id="myModal<?php echo $result3['S_No']?>">
            <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
              <h4 class="modal-title">Status update</h4>
             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
  
          <!-- Modal body -->
                <div class="modal-body">
                <form action ="update.php" method ="POST">
                    <div class="row">					
				    <div class="col-sm-9">
					<input type ="hidden" name = "id" value = "<?php echo $result3['S_No']?> " >
	                <select name ="update"  class="btn btn-success" style="width: 100%;">
				   <option value="" disabled selected>Update</option> 
                    <option value="0">New</option>
                    <option value="1">Processing</option>
                    <option value="2">Resolved</option>
                    <option value="3">Closed</option>
                  </select> 
				  </div>
				  <div class="col-sm-3">
				  <button class= "badge badge-primary">save</button>
				 </div>
                </div>
			</form>
      <!-- Modal footer -->
               <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
               </div>
               </div>
            </div>
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

<!-- The Modal -->
         <div class="modal" id="myModal1">
           <div class="modal-dialog">
               <div class="modal-content">

      <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title">Assign To</h4>
				    <input type ="text" name = "id" value = "<?php echo $result3['S_No']?> " >

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

         <!-- Modal body -->
               <div class="modal-body">
                 <div class="form-group">
                  <label>Assign To</label>
                  <select name ="assigned" class="form-control select2" style="width: 100%;" >
				    <option value="" disabled selected>Select user</option>
                    <?php
					include('fetchuser.php');
					foreach ($options22 as $option) {
					?>
                    <option value="<?php echo $option['id']; ?> "><?php echo $option['name']; ?> </option>
					<?php
					}
					?>
                    
                  </select>
                </div>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
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
 

  



<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
 <?php include("footer.php"); ?>	
</html>
