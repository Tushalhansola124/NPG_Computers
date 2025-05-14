<?php
    $id=$_POST['id'];
    $name=$_POST['name'];
    $duration=$_POST['duration'];
    $fees=$_POST['fees'];
    $description=$_POST['description'];

    $con=mysqli_connect("localhost","root","","stud_project");
    $update="UPDATE courses SET c_name='$name', c_duration='$duration', c_fees='$fees', c_description='$description' WHERE c_id='$id'";
    $query=mysqli_query($con,$update);
    header('Location: coursesView.php');

?>