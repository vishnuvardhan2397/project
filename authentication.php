<?php
session_start();
include('connection.php');
 $user = $_POST['username'];
 $pass = $_POST['password'];

$sql = "select * from user where username = '".$user."' and password = '".$pass."' ";
$result = mysqli_query($con,$sql);  
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
          
        if($count == 1 & $row['status']==0){ 
		
		  //if(isset($_POST['submit'])){
	    //echo "hi";
	       //$user=$_POST['username'];
	       //echo $user;
	       // if($user=='Vishnu'){
		   $_SESSION['user']= $row['name'];
		   $_SESSION['user_id']= $row['id'];
		   
		        echo "1";
               // echo "<script type='text/javascript'>alert('login successful');location='task.php';</script>";
		     
			//}

		  //}
		}  
        else{  
            echo "0";  
        }     
?>  

 

         