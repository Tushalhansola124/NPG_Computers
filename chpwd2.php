<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "stud_project");

// Dummy session for testing (remove in production)
$_SESSION['user_id'] = 1;

$message = "";

if (isset($_POST['change_password'])) {
    $userId = $_SESSION['user_id'];
    $current = $_POST['current_password'];
    $new = $_POST['new_password'];
    $confirm = $_POST['confirm_password'];

    if ($new !== $confirm) {
        $message = "❌ New passwords do not match.";
    } else {
        $stmt = $mysqli->prepare("SELECT password FROM user WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $stmt->bind_result($storedPassword);
        $stmt->fetch();
        $stmt->close();

        if ($current !== $storedPassword) {
            $message = "❌ Current password is incorrect.";
        } else {
            $update = $mysqli->prepare("UPDATE user SET password = ? WHERE user_id = ?");
            $update->bind_param("si", $new, $userId);
            if ($update->execute()) {
                $message = "✅ Password changed successfully.";
            } else {
                $message = "❌ Error updating password.";
            }
            $update->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Change Password</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      
    
      height: 100vh;
    }

    .container {
	  margin-top:5vw;
      margin-bottom:5vw;	  
	  margin-left:35vw;	
      background: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      box-sizing: border-box;
    }

    h2 {
      text-align: center;
      color: #4f46e5;
      margin-bottom: 20px;
    }

    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #4f46e5;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #3730a3;
    }

    .message {
      margin-top: 15px;
      text-align: center;
      font-weight: bold;
      color: #d32f2f;
    }

    .message.success {
      color: #2e7d32;
    }
	<!--Back Button-->
	.back-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #3498db;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s, transform 0.2s;
    }

    .back-button:hover {
      background-color: #2980b9;
      transform: scale(1.05);
    }

    .back-button:active {
      transform: scale(0.98);
    }
	
	 
	</style>
</head>
<body>
<?php
include 'header1.php';
?> 
 	  

  <div class="container">
 
    
	<h2>🔐 Change Password</h2>
    <a href="Menu.php"><button>Back</button></a> 
	<form method="POST" action="">
      <input type="password" name="current_password" placeholder="Current Password" required>
      <input type="password" name="new_password" placeholder="New Password" required>
      <input type="password" name="confirm_password" placeholder="Confirm New Password" required>
      <button type="submit" name="change_password">Change Password</button>
        
	  <?php if (!empty($message)): ?>
        <div class="message <?= strpos($message, 'successfully') !== false ? 'success' : '' ?>">
          <?= htmlspecialchars($message) ?>
        </div>
      <?php endif; ?>
    </form>
  </div>
 <?php
 include 'footer.php';
 ?>
</body>
</html>
