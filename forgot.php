<?php
$con = mysqli_connect("localhost", "root", "", "stud_project");
if (!$con) {
  die("Database Connection Failed: " . mysqli_connect_error());
}

$step = 1;
$username = "";
$security_question = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = mysqli_real_escape_string($con, $_POST['username'] ?? "");

  if (isset($_POST['check_username'])) {
    $res = mysqli_query($con, "SELECT security_question FROM user WHERE username='$username'");
    if (mysqli_num_rows($res)) {
      $row = mysqli_fetch_assoc($res);
      $security_question = $row['security_question'];
      $step = 2;
    } else {
      echo "<script>alert('Username not found!');</script>";
    }
  }

  if (isset($_POST['check_answer'])) {
    $answer = mysqli_real_escape_string($con, $_POST['answer']);
    $res = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND security_answer='$answer'");
    if (mysqli_num_rows($res)) {
      $step = 3;
    } else {
      $step = 2;
      $res = mysqli_query($con, "SELECT security_question FROM user WHERE username='$username'");
      $security_question = mysqli_fetch_assoc($res)['security_question'] ?? "";
      echo "<script>alert('Incorrect Answer!');</script>";
    }
  }

  if (isset($_POST['reset_password'])) {
    $new_password = mysqli_real_escape_string($con, $_POST['password']);
    if (mysqli_query($con, "UPDATE user SET password='$new_password' WHERE username='$username'")) {
      echo "
        <script>
          alert('Password successfully changed!');
          window.location.href = 'index.php';
        </script>
      ";
    } else {
      echo "<script>alert('Error updating password.');</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #eef2f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      width: 90%;
      max-width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    label {
      margin: 10px 0 5px;
      display: block;
      font-weight: bold;
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 16px;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
    .back-button {
      background-color: #ccc;
      color: black;
      margin-top: 10px;
    }
    .back-button:hover {
      background-color: #999;
    }
  </style>
</head>
<body>
  <form method="POST">
    <div class="container">
      <h2>Forgot Password</h2>
      <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">

      <?php if ($step === 1): ?>
        <label for="username">Enter Username:</label>
        <input type="text" name="username" id="username" required>
        <button type="submit" name="check_username">Check Username</button>

      <?php elseif ($step === 2): ?>
        <label>Security Question:</label>
        <p><strong><?php echo htmlspecialchars($security_question); ?></strong></p>
        <label for="answer">Your Answer:</label>
        <select name="answer" required>
          <option value="">-- Select Answer --</option>
          <option>It can be easily intercepted by hackers</option>
          <option>It’s slow</option>
          <option>It limits downloads</option>
          <option>It disconnects frequently</option>
        </select>
        <button type="submit" name="check_answer">Submit Answer</button>

      <?php elseif ($step === 3): ?>
        <label for="password">New Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit" name="reset_password">Change Password</button>
      <?php endif; ?>

      <a href="index.php" style="text-decoration: none;">
        <button type="button" class="back-button">Back to Login</button>
      </a>
    </div>
  </form>
</body>
</html>
