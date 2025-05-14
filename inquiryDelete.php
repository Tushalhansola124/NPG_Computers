<?php
	$id=$_GET['id'];
	$con=mysqli_connect("localhost","root","","stud_project");
	$query=mysqli_query($con,"delete from inquiry where i_id=$id");
	header('Location:inquiryView.php');		
?>