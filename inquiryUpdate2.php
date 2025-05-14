<?php
// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$courses = $_POST['courses'];
$remarks = $_POST['remarks'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$time = $_POST['time'];
$followingDate = $_POST['followingDate'];
$followingTime = $_POST['followingTime'];
$finalRemarks = $_POST['finalRemarks'];

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "stud_project");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update the record
$query = "UPDATE inquiry SET 
    i_name='$name',
    i_surname='$surname',
    i_coursesname='$courses',
    i_remarks='$remarks',
    i_mobile='$mobile',
    i_date='$date',
    i_time='$time',
    i_followupdd='$followingDate',
    i_followuptt='$followingTime',
    i_finalremarks='$finalRemarks'
    WHERE i_id='$id'";

if (mysqli_query($con, $query)) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . mysqli_error($con);
}

header('Location:inquiryView.php');

// Close connection
mysqli_close($con);
?>
