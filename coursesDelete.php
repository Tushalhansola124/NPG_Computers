<?php
	$c_id=$_GET['id'];
	$con=mysqli_connect("localhost","root","","stud_project");
	$del="delete from courses where c_id=$c_id";
	$query=mysqli_query($con,$del);
	header('Location:coursesView.php');
	
?>