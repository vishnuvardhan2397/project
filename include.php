<?php
include('connection.php');
$project = $_POST['project'];
$campus = $_POST['campus'];
$priority = $_POST['priority'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$notes = $_POST['notes'];
$date = date("Y-m-d");

$sql2= "INSERT INTO issue(Project,Campus,Priority,IssueSubject,IssueDescription,IssueNotes,DateAdded) 
VALUES ('".$project."','".$campus."','".$priority ."','".$subject."','".$description."','".$notes."','".$date."')";
//$sql2= " INSERT INTO issue values('','".$project."','".$campus."','".$priority ."','".$subject."','".$description."','".$notes."')";
if(mysqli_query($con, $sql2)){  
 echo "<script type='text/javascript'>alert('Record inserted successfully');location='issue.php';</script>";
}else{  
echo "Could not insert record: ". mysqli_error($con);  
}   
mysqli_close($con);  
?>  