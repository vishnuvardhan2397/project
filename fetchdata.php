<?php
include('connection.php');
$sql3 = "select * from issue";
$data3 = mysqli_query($con,$sql3);
$total3 = mysqli_num_rows($data3);
//echo $data3;
//echo $total3;
 //$result3 = mysqli_fetch_assoc($data3);
while($result3 = mysqli_fetch_array($data3,MYSQLI_NUM)){
 
 echo $result3['0'];
}
 


