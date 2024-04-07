<?php
include('connection.php');

$projectname = $_POST['projectname'];

$sql5= "INSERT INTO project(project_name) VALUES ('".$projectname."')";
if(mysqli_query($con, $sql5)){  
 echo "<script type='text/javascript'>alert('Project added successfully');location='project.php';</script>";
}else{  
echo "Could not insert record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  