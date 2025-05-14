<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch POST data and sanitize
    $name = htmlspecialchars(trim($_POST['name']));
    $surname = htmlspecialchars(trim($_POST['surname']));
    $courses = htmlspecialchars (trim($_POST['courses']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $remarks = htmlspecialchars(trim($_POST['remarks']));

    // Define the timezone
    $timezone = new DateTimeZone('Asia/Kolkata');  // Adjust this to your required time zone

    // Combine date and time, then create DateTime object
    $dateTimeString = trim($_POST['date']) . ' ' . trim($_POST['time']);
    $dateTime = new DateTime($dateTimeString, $timezone);

    // Format date and time (adjust as per your DB format)
    $formattedDate = $dateTime->format('Y-m-d');  // Date format: YYYY-MM-DD
    $formattedTime = $dateTime->format('H:i:s');  // Time format: HH:MM:SS

    // Debugging: Echo the date and time
    echo "Formatted Date: " . $formattedDate . "<br>";
    echo "Formatted Time: " . $formattedTime . "<br>";

    // Create DB connection
    $con = new mysqli("localhost", "root", "", "stud_project");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare and bind the insert query
    $stmt = $con->prepare("INSERT INTO inquiry (
        i_name, i_surname, i_coursesname, i_mobile, i_date, i_time, i_remarks
    ) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $con->error);
    }

    // Bind parameters
    $stmt->bind_param(
        "sssssss", // Data types: 7 strings
        $name, $surname, $courses, $mobile, $formattedDate, $formattedTime, $remarks
    );

    // Execute the statement
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    } else {
        echo "Data inserted successfully!<br>";
    }

    // Close connections
    $stmt->close();
    $con->close();

    // Redirect to the view page if everything is successful
    header('Location: inquiryView.php');
    exit();
}
?>
