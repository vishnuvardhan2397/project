
 <?php
include('connection.php');
    $sql22 =" SELECT * from user";
    $result22 = mysqli_query($con,$sql22);
$count22= mysqli_num_rows($result22);  
    if($count22 > 0){
      $options22 = mysqli_fetch_all($result22, MYSQLI_ASSOC);
    }
?>
