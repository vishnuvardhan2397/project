<?php
include('connection.php');

$role = $_POST['role'];

$sql14= "INSERT INTO role(rolename) VALUES ('".$role."')";
if(mysqli_query($con, $sql14)){  
 echo "<script type='text/javascript'>alert('Role added successfully');location='role.php';</script>";
}else{  
echo "Could not insert role: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  