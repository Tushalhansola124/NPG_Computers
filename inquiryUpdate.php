<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "stud_project");
$query = mysqli_query($con, "SELECT * FROM inquiry");

//Time 
date_default_timezone_set('Asia/Kolkata');
$currentTime = date('H:i'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/svg+xml" href="/public/Logo.jpeg" />
  <title>Inquiry Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
     
    }

    form {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      max-width: 900px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .form-grid h2, 
    .form-grid button {
      grid-column: span 2;
    }

    label {
      font-weight: bold;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }

    textarea {
      resize: vertical;
    }

    button {
      padding: 12px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
    }

    button:hover {
      background-color: #0056b3;
    }

    .header, .footer {
      background-color: #007bff;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .view {
      display: block;
      text-align: center;
      margin: 20px auto;
    }

    .view a {
      text-decoration: none;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border-radius: 5px;
      font-size: 1rem;
    }

    @media (max-width: 768px) {
      .form-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

 <?php
	include 'header1.php';
 ?>
<?php
	
?>
  <div class="view">
    <a href="InquiryView.php">View Inquiries</a>
  </div>
	<?php
$id = $_GET['id'];

// Create connection
$con = mysqli_connect("localhost", "root", "", "stud_project");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Correct SQL query
$sel = "SELECT * FROM inquiry WHERE i_id = '$id'";
$query = mysqli_query($con, $sel);

// Check for query success
if (!$query) {
    die("Query failed: " . mysqli_error($con));
}

// Fetch data
$row = mysqli_fetch_assoc($query);

if ($row) {
    $id = $row['i_id'];
    $name = $row['i_name'];
    $surname = $row['i_surname'];
    $courses = $row['i_coursesname'];
	$mo=$row['i_mobile'];
    $remarks = $row['i_remarks'];
    $date = $row['i_date'];
    $time = $row['i_time'];
    $followingDate = $row['i_followupdd'];
    $followingTime = $row['i_followuptt'];
    $finalRemarks = $row['i_finalremarks'];
} else {
    echo "No record found for ID: $id";
}
?>

 <form action="inquiryUpdate2.php" method="POST">
  <div class="form-grid">
    <h2>Inquiry Form</h2>

    <label for="id">ID :</label>
    <input type="text" id="id" name="id" value="<?php echo $id; ?>" readonly required>

    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Enter Your Name" required>

    <label for="surname">Surname</label>
    <input type="text" id="surname" name="surname" value="<?php echo $surname; ?>" placeholder="Enter Your Surname" required>

    <label for="courses">Courses</label>
    <select id="courses" name="courses" required>
      <option value="">Select Course</option>
      <option value="html" <?php if($courses == 'html') echo 'selected'; ?>>HTML</option>
      <option value="css" <?php if($courses == 'css') echo 'selected'; ?>>CSS</option>
      <option value="js" <?php if($courses == 'js') echo 'selected'; ?>>JavaScript</option>
      <option value="mobile" <?php if($courses == 'mobile') echo 'selected'; ?>>Mobile</option>
    </select>

    <label for="remarks">Remarks</label>
    <textarea id="remarks" name="remarks" rows="4"><?php echo $remarks; ?></textarea>
	
	<label for="date">Mobile No</label>
    <input type="text" id="mobile" name="mobile" value="<?php echo $mo; ?>" required>
    
	<label for="date">Date</label>
    <input type="date" id="date" name="date" value="<?php echo $date; ?>" required>

    <label for="time">Time</label>
    <input type="time" id="time" name="time" value="<?php echo $time; ?>" required>

    <label for="followingDate">FollowUp Date</label>
    <input type="date" id="followingDate" name="followingDate" value="<?php echo date('Y-m-d'); ?>">

    <label for="followingTime">FollowUp Time</label>
    <input type="time" id="followingTime" name="followingTime" value="<?php echo $currentTime ?>">

    <label for="finalRemarks">Final Remarks</label>
    <textarea id="finalRemarks" name="finalRemarks" rows="4"><?php echo $finalRemarks; ?></textarea>

    <button type="submit">Update Inquiry</button>
  </div>
</form>


  <?php
	include 'footer.php';
  ?>

</body>
</html>
