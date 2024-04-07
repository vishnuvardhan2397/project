
 <?php
include('connection.php');
    $sql8 =" SELECT * from campus";
    $result8 = mysqli_query($con,$sql8);
$count8= mysqli_num_rows($result8);  
    if($count8 > 0){
      $options8 = mysqli_fetch_all($result8, MYSQLI_ASSOC);
    }
?>
