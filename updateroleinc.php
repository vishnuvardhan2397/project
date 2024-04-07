<?php
include('connection.php');
$id = $_POST['id'];
$dashboard = $_POST['dashboard'];
$issue = $_POST['issue'];
$project = $_POST['project'];
$campus = $_POST['campus'];
$users = $_POST['users'];
$roles = $_POST['roles'];



 $sql24= " UPDATE role SET permission ='".$dashboard."' WHERE id='".$id."' ";

//$sql11= "INSERT INTO project(project_name) VALUES ('".$projectname."')";
if(mysqli_query($con, $sql24)){  
 echo "<script type='text/javascript'>alert('role Updated successfully');location='role.php';</script>";
}else{  
echo "Could not update record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  