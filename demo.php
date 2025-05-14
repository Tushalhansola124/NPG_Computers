<?php
// Redirect to login if cookie not set
if (!isset($_COOKIE['username'])) {
    header("Location: index.php");
    exit;
}

$username = htmlspecialchars($_COOKIE['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .dashboard-container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            background-color: #333;
            color: white;
            width: 250px;
            transition: width 0.3s;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1000;
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin: 15px 0;
        }

        .sidebar-menu a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .sidebar-menu a:hover {
            background-color: #555;
        }

        .main-content {
            margin-left: 250px;
            transition: margin-left 0.3s;
            padding: 20px;
            width: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f1f1f1;
            padding: 10px 20px;
        }

        .header-left h1 {
            margin: 0;
        }

        .header-right button {
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            color: white;
            cursor: pointer;
        }

        .header-right button:hover {
            background-color: #0056b3;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar.closed {
            width: 60px;
        }

        .sidebar.closed .sidebar-menu li {
            text-align: center;
        }

        .sidebar.closed .sidebar-menu a {
            padding: 15px 0;
        }

        .sidebar-toggle {
            position: absolute;
            top: 20px;
            right: -25px;
            background-color: #333;
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            cursor: pointer;
            display: none;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        @media screen and (max-width: 768px) {
            .sidebar {
                width: 60px;
                padding: 10px;
            }

            .main-content {
                margin-left: 60px;
            }

            .sidebar-menu a span {
                display: none;
            }

            .sidebar-toggle {
                display: flex;
            }

            .sidebar.closed .sidebar-menu a {
                padding: 15px 0;
            }

            .sidebar.closed .sidebar-menu li {
                text-align: center;
            }

            .sidebar.closed .sidebar-menu a {
                width: 60px;
                padding: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#" onclick="toggleSidebar()"><span>&#9776;</span> <span class="menu-text">Dashboard</span></a></li>
                <li><a href="#"><span>&#128200;</span> <span class="menu-text">Analytics</span></a></li>
                <li><a href="#"><span>&#128188;</span> <span class="menu-text">Projects</span></a></li>
                <li><a href="#"><span>&#128172;</span> <span class="menu-text">Messages</span></a></li>
                <li><a href="#"><span>&#9881;</span> <span class="menu-text">Settings</span></a></li>
            </ul>
            <div class="sidebar-toggle" onclick="toggleSidebar()">&#9776;</div>
        </aside>

        <main class="main-content">
            <header class="header">
                <div class="header-left">
                    <h1>Welcome, <?php echo $username; ?>!</h1>
                </div>
                <div class="header-right">
                    <button onclick="confirmLogout()">Logout</button>
                </div>
            </header>

            <section class="content">
                <div class="card">
                    <h3>Statistics</h3>
                    <p>Some data visualization here.</p>
                </div>
                <div class="card">
                    <h3>Recent Activities</h3>
                    <p>List of recent activities...</p>
                </div>
                <div class="card">
                    <h3>Notifications</h3>
                    <p>Important updates...</p>
                </div>
            </section>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            sidebar.classList.toggle('closed');
            mainContent.classList.toggle('closed');
        }

        function confirmLogout() {
            const confirmAction = confirm("Are you sure want to logout?");
            if (confirmAction) {
                window.location.href = 'index.php'; // Assumes logout.php clears the cookie
            }
        }
    </script>
</body>
</html>
