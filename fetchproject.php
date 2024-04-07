
 <?php
include('connection.php');
    $sql6 =" SELECT * from project";
    $result6 = mysqli_query($con,$sql6);
$count6= mysqli_num_rows($result6);  
    if($count6 > 0){
      $options6 = mysqli_fetch_all($result6, MYSQLI_ASSOC);
    }
?>
