 <?php
include('connection.php');
    $sql16 =" SELECT * from role";
    $result16 = mysqli_query($con,$sql16);
$count16= mysqli_num_rows($result16);  
    if($count16 > 0){
      $options16 = mysqli_fetch_all($result16, MYSQLI_ASSOC);
    }
?>
