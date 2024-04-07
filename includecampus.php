<?php
include("connection.php");
$campusname= $_POST['campusname'];
$sql7 = " INSERT into campus (campus_name) VALUES ('".$campusname."' )";
if(mysqli_query($con, $sql7)){  
 echo "<script type='text/javascript'>alert('Record inserted successfully');location='campus.php';</script>";
}else{  
echo "Could not insert record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  