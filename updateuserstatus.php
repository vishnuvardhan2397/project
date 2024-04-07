<?php
include('connection.php');
$id = $_GET['sid'];
$status = $_GET['status'];

 $sql22= " UPDATE user SET 	status ='".$status."' WHERE id='".$id."' ";

if(mysqli_query($con, $sql22)){  
 echo "<script type='text/javascript'>alert('Status Updated successfully');location='users.php';</script>";
}else{  
echo "Could not update status: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  