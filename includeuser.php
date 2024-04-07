<?php
include('connection.php');
$name = $_POST['name'];
$designation = $_POST['designation'];
$role = $_POST['role'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql13= "INSERT INTO user(name,designation,role,email,username,	password) 
VALUES ('".$name."','".$designation."','".$role."','".$email."','".$username."','".$password."')";
//$sql2= " INSERT INTO issue values('','".$project."','".$campus."','".$priority ."','".$subject."','".$description."','".$notes."')";
if(mysqli_query($con, $sql13)){  
 echo "<script type='text/javascript'>alert('User added successfully');location='adduser.php';</script>";
}else{  
echo "Could not insert record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  