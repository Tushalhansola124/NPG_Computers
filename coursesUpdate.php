<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/jpeg" href="/public/Logo.jpeg" />
  <title>NPG-UNIQUE COMPUTERS</title>
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
    .header, .footer {
      background-color: #007bff;
      color: white;
      padding: 20px;
      text-align: center;
    }
    form {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      max-width: 500px;
      margin: 40px auto;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 2rem;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      font-size: 1rem;
    }
    input, select, textarea {
      width: 100%;
      padding: 12px;
      margin-top: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }
    textarea {
      resize: vertical;
    }
    .view {
      display: inline-block;
      background-color: #28a745;
      color: white;
      padding: 10px 20px;
      border-radius: 4px;
      text-decoration: none;
      font-size: 1rem;
      margin-bottom: 20px;
      text-align: center;
    }
    .view:hover {
      background-color: #218838;
    }
    button[type="submit"] {
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
    }
    button[type="submit"]:hover {
      background-color: #0056b3;
    }
    
    .form-row {
      display: flex;
      gap: 20px;
      margin-top: 15px;
    }

    .form-group {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    /* Responsive: Stack rows on small screens */
    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
        gap: 0;
      }
    }
  </style>
</head>

<body>

  <!-- Header -->
  <!--<div class="header">
    <h1>
	<?php
//include 'header1.php';
	?>
	</h1>
  </div>-->
<?php
$id = $_GET['id'];

// Create connection
$con = mysqli_connect("localhost", "root", "", "stud_project");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Correct SQL query
$sel = "SELECT * FROM courses WHERE c_id = '$id'";
$query = mysqli_query($con, $sel);

// Check for query success
if (!$query) {
    die("Query failed: " . mysqli_error($con));
}

// Fetch data
$row = mysqli_fetch_assoc($query);

if ($row) {
    $id = $row['c_id'];
    $name = $row['c_name'];
    $dur = $row['c_duration'];
    $fees = $row['c_fees'];
	$des=$row['c_description'];
   
} else {
    echo "No record found for ID: $id";
}
?>

  <!-- Form -->
  <form action="coursesUpdate2.php" method="POST">
    <!--<h2>Courses Form</h2>-->

    <a class="view" href="coursesView.php">View Courses</a>

    <div class="form-row">
		<div class="form-group">
        <label for="name">ID</label>
        <input type="text" value="<?php  echo $id;?>"  id="name" name="id" placeholder="Enter ID" required>
      </div>
      <div class="form-group">
        <label for="name">Name Of Course</label>
        <input type="text" value="<?php echo  $name; ?>"  id="name" name="name" placeholder="Enter Course Name" required>
      </div>
      <div class="form-group">
        <label for="duration">Duration</label>
        <input type="text" value="<?php echo $dur; ?>" id="duration" name="duration" placeholder="Enter Duration" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="fees">Fees</label>
        <input type="text"  value="<?php echo $fees; ?>"id="fees" name="fees" placeholder="Enter Fees">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description"  name="description" rows="4" placeholder="Write Description"><?php echo $des; ?></textarea>
      </div>
    </div>

    <button type="submit">Submit Form</button>
  </form>

  <!-- Footer -->
  <!--<div class="footer">
    <p>
	<?php
		//include 'footer.php';
	?>
	</p>
  </div>-->

</body>
</html>
	