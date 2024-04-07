   <?php
	session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }				  
?>
<?php include("sidebar.php"); ?> 
<?php include("header.php"); ?> 
 <!-- SELECT2 EXAMPLE -->
<html>
<body>
 <div class="content-wrapper">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title"><b>New Issues</b></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
			  <form  id ="issueform" action ="include.php" method ="POST">
                <div class="form-group">
                  <label>project</label>
                  <select name ="project" id="project" class="form-control select2" style="width: 100%;" >
				    <option value=""  disabled selected>Select Project</option>
				     <?php
					include('fetchproject.php');
					foreach ($options6 as $option) {
					?>
                    <option value="<?php echo $option['id']; ?> " ><?php echo $option['project_name']; ?> </option>
					<?php
					}
					?>
                  </select>
                </div>
				 <div class="form-group">
                  <label>campus</label>
                  <select name ="campus" id="campus" class="form-control select2" style="width: 100%;">
				   <option value= "" disabled selected>Select Campus</option>
				    <?php
					include('fetchcampus.php');
					foreach ($options8 as $option) {
					?>
                    <option value="<?php echo $option['id']; ?> "><?php echo $option['campus_name']; ?> </option>
					<?php
					}
					?>
                  </select>
               </div>
               <div class="form-group">
                  <label>priority</label>
                  <select name ="priority" class="form-control select2" style="width: 100%;" >
				    <option value="" disabled selected>Select Priority</option>
                    <option>Low</option>
                    <option>High</option>
                    <option>Medium</option>
                    
                  </select>
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Issue Subject</label>
                        <input name ="subject" id="subject" type="text" class="form-control" placeholder="Enter ..."  >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Issue Description</label>
                        <textarea name ="description" id="description" class="form-control" rows=2" placeholder="Enter ..." ></textarea>
                      </div>
                    </div>
					</div>
					 <div class="row">
                      <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Issue Notes</label>
                        <textarea name ="notes" id="notes" type="text" class="form-control" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
				  <!--<div class="form-group">
                  <label>Assign To</label>
                  <select name ="assigned" class="form-control select2" style="width: 100%;" >
				    <option value="" disabled selected>Select user</option>
                    <?php
					//include('fetchuser.php');
					//foreach ($options22 as $option) {
					//?>
                    <option value="<?php //echo $option['id']; ?> "><?php //echo $option['name']; ?> </option>
					<?php
					//}
					?>
                    
                  </select>
                </div>-->
				 
				<div class="card-footer">
				<div class="row">
                      <div class="col-sm-12">
				<button type ="submit" name ="submit" id="submit"  class ="btn btn-primary">Submit</button>
				</div>
				</div>
                 </div>
                 </form>
				  </div>
				  </div>
			</div>
			
            <?php include("footer.php"); ?>	
          
			
				  
			
		</div>
	

</div>

<script>

$(document).ready(function(){  
  $("#issueform").validate({ 

  rules:{
	  project:{
	           required:true,
	  },
	  campus:{
	           required:true,
	  }, 
	  priority:{
	           required:true,
	  }, 
	  subject:{
	           required:true,
	  }, 
	  description:{
	           required:true,
	  }, 
	  notes:{
	           required:true,
	  },
	  assigned:{
	           required:true,
	  }
  },
  messages:{
	  project:{
		  required :"Please select the project",
	  },
	  campus:{
		  required :"Please select the campus",
	  },
	  priority:{
		  required :"Please select the priority",
	  },
	  subject:{
		  required :"Please enter the subject",
	  },
	  description:{
		  required :"Please enter the description",
	  },
	  notes:{
		  required :"Please enter the notes",
	  },
	  assigned:{
		  required :"Please select the user",
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
</div>

</html>			
 				
				
                 