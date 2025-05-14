<?php
	$c_name=$_POST['name'];
	$c_dur=$_POST['duration'];
	$c_fees=$_POST['fees'];
	$c_des=$_POST['description'];
	$con=mysqli_connect("localhost","root","","stud_project");
	$query=mysqli_query($con,"Insert Into courses(c_name,c_duration,c_fees,c_description)values('$c_name','$c_dur',$c_fees,'$c_des')");
	echo $query;

	header('Location:coursesView.php');

	/**if(mysqli_affected_rows($con)>0)
	{
		echo 'pass';
	}
	else
	{
		echo 'fail';
	}**/		
	
		
?>