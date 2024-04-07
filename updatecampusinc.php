<?php
include('connection.php');
$id = $_POST['id'];
$campusname = $_POST['campusname'];

 $sql21= " UPDATE campus SET campus_name ='".$campusname."' WHERE id='".$id."' ";

if(mysqli_query($con, $sql21)){  
 echo "<script type='text/javascript'>alert('Campus Updated successfully');location='campus.php';</script>";
}else{  
echo "Could not update campus: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  