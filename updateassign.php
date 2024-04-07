<?php
include('connection.php');
$assign = $_POST['assign'];
$id = $_POST['id'];


$sql25= " UPDATE issue SET Assigned_to ='".$assign."' WHERE S_No='".$id."' ";

//$sql11= "INSERT INTO project(project_name) VALUES ('".$projectname."')";
if(mysqli_query($con, $sql25)){  
 echo "<script type='text/javascript'>alert('Assigned successfully');location='issue.php';</script>";
}else{  
echo "Could not update record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  