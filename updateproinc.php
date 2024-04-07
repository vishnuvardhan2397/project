<?php
include('connection.php');
$id = $_POST['id'];
$projectname = $_POST['projectname'];

 $sql12= " UPDATE project SET project_name ='".$projectname."' WHERE id='".$id."' ";

//$sql11= "INSERT INTO project(project_name) VALUES ('".$projectname."')";
if(mysqli_query($con, $sql12)){  
 echo "<script type='text/javascript'>alert('Project Updated successfully');location='project.php';</script>";
}else{  
echo "Could not update record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  