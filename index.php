<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./image/icon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NPG-UNIQUE COMPUTERS</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7f8;
    }
    /* Header */
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 10;
      flex-wrap: wrap;
    }
    .header img {
      width: 200px;
      height: auto;
      max-width: 100%;
      border-radius: 1px;
    }
    .header-title {
      font-size: 32px;
      font-weight: bold;
      margin-left: 15px;
      flex-grow: 1;
    }
    /* Responsive for Mobile */
    @media (max-width: 768px) {
      .header {
        flex-direction: column;
        text-align: center;
      }
      .header img {
        width:100%;
		max-width:50vw;
        margin-bottom: 10px;
      }
      .header-title {
        font-size: 22px;
        margin: 10px 0 0 0;
      }
    }
    /* Main Content */
    .main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 120px);
      padding: 20px;
    }
    .login-container {
      background: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
    .login-container h2 {
      margin: 0 0 10px;
      font-size: 24px;
      color: #333;
      text-align: center;
    }
    .form-group {
      margin-top: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 6px;
      color: #333;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .form-actions {
      margin-top: 20px;
    }
    .form-actions button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      color: white;
      background-color: #007bff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .form-actions button:hover {
      background-color: #0056b3;
    }
    .links {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
      flex-wrap: wrap;
    }
    .links a {
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
      margin-top: 8px;
    }
    .red1 {
      color: red;
      font-size: 15px;
      font-family: Bahnschrift SemiLight SemiConde;
    }
    .green1 {
      color: green;
      font-size: 15px;
      font-family: Bahnschrift SemiLight SemiConde;
    }
    /* Footer */
    .footer {
      background-color: #007bff;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 20px;
      font-size: 14px;
    }
	.header {
        flex-direction: column;
        text-align: center;
      }
      .header img {
        width: 30vw;
		margin-top:1vw;
        margin-bottom: 10px;
      }
      .header-title {
        font-size: 22px;
        margin: 10px 0 0 0;
      }
  </style>
</head>

<body>

<!-- Header -->
<div class="header">
  <img src="./image/logo.png" alt="Logo" />
  <div class="header-title"></div>
</div>

<!-- Main Content -->
<div class="main">
  <form method="POST" action="">
    <div class="login-container">
      <h2>Login</h2>

      <?php
      if (isset($_POST['login'])) {
          $con = mysqli_connect("localhost", "root", "", "stud_project");
          $hostname = "http://localhost:8080";

          $username = mysqli_real_escape_string($con, $_POST['username']);
          $password = $_POST['password'];

          if ($username == "" && $password == "") {
              echo "<h6 class='red1'>Please Fill The Username and Password</h6>";
          } else {
              $sql = "SELECT username FROM user WHERE username = '{$username}' AND password = '{$password}'";
              $result = mysqli_query($con, $sql) or die("Query Failed");
				
              if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  setcookie("username", $row['username'], time() + (86400), "/");
                  echo "<h6 class='green1'>Login Successful!</h6>";
                  header("Refresh:1; url={$hostname}/Stud_Project/Menu.php");
                  exit;
              } else {
                  echo "<h6 class='red1'>Username and password are Incorrect</h6>";
              }
          }
      }
      ?>

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" required />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" required />
      </div>

      <div class="form-actions">
        <button type="submit" name="login">Login</button>
      </div>

      <div class="links">
        <a href="forgot.php">Forgot Password?</a>
      </div>

    </div>
  </form>
</div>

<!-- Footer -->
<div class="footer">
  <?php
	include 'footer.php';
  ?>
</div>

<?php ob_end_flush(); ?>
</body>
</html>
