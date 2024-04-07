<?php
include('connection.php');

$delete= $_GET['idd'];

$sql19= "DELETE FROM campus WHERE id = '".$delete."' ";
if(mysqli_query($con, $sql19)){  
 echo "<script type='text/javascript'>alert('Campus deleted successfully');location='campus.php';</script>";
}else{  
echo "Could not delete record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  