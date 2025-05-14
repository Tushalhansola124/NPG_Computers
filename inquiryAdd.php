<?php
date_default_timezone_set('Asia/Kolkata');
$currentTime = date('H:i');
$con = mysqli_connect("localhost", "root", "", "stud_project");
$sel1 = "SELECT c_coursesname FROM coursesname";
$query = mysqli_query($con, $sel1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/jpeg" href="/public/Logo.jpeg" />
  <title>NPG-UNIQUE COMPUTERS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    form {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      max-width: 900px;
      margin: 20px auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
      display: block;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 1rem;
      margin-top: 5px;
    }

    select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background: #fff url('data:image/svg+xml;utf8,<svg fill="gray" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>') no-repeat right 10px center;
      background-size: 16px;
    }

    textarea {
      resize: vertical;
    }

    button {
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    button:hover {
      background-color: #0056b3;
    }

    .view {
      width: 100%;
      margin-bottom: 20px;
      background-color: #28a745;
      text-align: center;
      border-radius: 4px;
    }

    .view a {
      text-decoration: none;
      color: white;
      padding: 12px 0;
      display: block;
      font-size: 1.2rem;
    }

    .view:hover {
      background-color: #218838;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 15px;
    }

    @media (min-width: 600px) {
      .form-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .full-width {
        grid-column: span 2;
      }
    }

    @media (max-width: 600px) {
      select, option {
        font-size: 1rem;
        padding: 14px;
      }
    }

    @media (min-width: 1024px) {
      form {
        padding: 40px;
      }
    }

    .footer {
      background-color: #007bff;
      color: white;
      padding: 20px;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <form action="inquiryAdd2.php" method="POST">
    <div class="view"><a href="InquiryView.php">View</a></div>

    <div class="form-grid">
      <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
      </div>
      <div>
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname" placeholder="Enter Your Surname" required>
      </div>

      <div>
        <label for="courses">Courses</label>
        <select id="courses" name="courses" required>
          <option value="">Select a course</option>
          <?php while ($row = mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
          <?php } ?>
        </select>
      </div>

      <div>
        <label for="mobile">Mobile No</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" maxlength="10" placeholder="10-digit number" required>
      </div>

      <div class="full-width">
        <label for="remarks">Remarks</label>
        <textarea id="remarks" name="remarks" rows="4" placeholder="Write any remarks..."></textarea>
      </div>

      <div>
        <label for="date">Date</label>
        <input type="date" id="d1" name="d1" value="<?php echo date('Y-m-d'); ?>">
      </div>

      <div class="full-width">
        <label for="time">Time</label>
        <input type="time" name="time" value="<?php echo $currentTime; ?>">
      </div>
    </div>

    <button type="submit">Submit Inquiry</button>
  </form>

</body>
</html>
