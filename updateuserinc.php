<?php
include('connection.php');
$id = $_POST['id'];
$name = $_POST['name'];
$designation = $_POST['designation'];
$role = $_POST['role'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


 $sql18= " UPDATE user SET name ='".$name."', designation  ='".$designation ."', role ='".$role."',email ='".$email."',username ='".$username."',
password ='".$password."' WHERE id='".$id."' ";

//$sql11= "INSERT INTO project(project_name) VALUES ('".$projectname."')";
if(mysqli_query($con, $sql18)){  
 echo "<script type='text/javascript'>alert('user Updated successfully');location='users.php';</script>";
}else{  
echo "Could not update record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  