 <?php
session_start();
  if(!isset($_SESSION['user'])){
		         header("Location:index.php");
	              die();
  }			  
?>

<?php include("sidebar.php"); ?>

<?php include("header.php"); ?> 
<html>
<div class="content-wrapper" 
<section class="content">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-10">
<h1>Dashboard</h1>
</div>


</div>
</div>
</section>
</div>








