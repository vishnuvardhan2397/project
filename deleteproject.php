<?php
include('connection.php');

$delete= $_GET['idd'];

$sql10= "DELETE FROM project WHERE id = '".$delete."' ";
if(mysqli_query($con, $sql10)){  
 echo "<script type='text/javascript'>alert('Project deleted successfully');location='project.php';</script>";
}else{  
echo "Could not delete record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  