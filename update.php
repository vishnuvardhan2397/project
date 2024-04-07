<?php
include('connection.php');

//$update = $_POST['update'];
$update = $_POST['update'];
$id=$_POST['id'];
//echo $update;

$sql4= " UPDATE issue SET Status='".$update."' WHERE S_No='".$id."'";
//$result4 = mysqli_query($con,$sql4);  
if(mysqli_query($con,$sql4)){  
 echo "<script type='text/javascript'>alert('Record updated successfully');location='issue.php';</script>";
}else{  
echo "Could not update record: ". mysqli_error($con);  
}   
mysqli_close($con);


  