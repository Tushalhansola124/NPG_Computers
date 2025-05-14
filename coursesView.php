<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/svg+xml" href="/public/Logo.jpeg" />
  <title>NPG-UNIQUE COMPUTERS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      background-color: #f1f4f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      padding: 2rem;
      max-width: 1200px;
      margin: auto;
    }

    .title {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .table-wrapper {
      overflow-x: auto;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 800px;
    }

    th, td {
      padding: 12px 16px;
      border-bottom: 1px solid #ddd;
      text-align: left;
      font-size: 0.95rem;
    }

    th {
      background-color: #007bff;
      color: white;
      position: sticky;
      top: 0;
    }

    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tbody tr:hover {
      background-color: #e9f5ff;
      transition: background 0.3s;
    }

    .btn {
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.9rem;
      transition: background-color 0.3s;
    }

    .edit-btn {
      background-color: #28a745;
      color: white;
    }

    .edit-btn:hover {
      background-color: #218838;
    }

    .delete-btn {
      background-color: #dc3545;
      color: white;
    }

    .delete-btn:hover {
      background-color: #c82333;
    }

    .nav-btn {
      display: inline-block;
      background-color: #007bff;
      color: white;
      padding: 12px 24px;
      margin: 10px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 1rem;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
      transition: background 0.3s;
    }

    .nav-btn:hover {
      background-color: #0056b3;
    }

    .action-icons img {
      width: 24px;
      height: 24px;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .action-icons img:hover {
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .title {
        font-size: 1.5rem;
      }

      th, td {
        padding: 10px;
        font-size: 0.85rem;
      }

      .nav-btn {
        font-size: 0.9rem;
        padding: 10px 16px;
      }

      .action-icons img {
        width: 20px;
        height: 20px;
      }
    }
  </style>
</head>
<body>

  <?php include 'header1.php'; ?>

  <div style="text-align: center;">
    <a class="nav-btn" href="Menu.php">Dashboard</a>
    <a class="nav-btn" href="courses.php">Add New Courses</a>
  </div>

  <div class="container">
    <h1 class="title">Courses of Records</h1>

    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name Of Courses</th>
            <th>Duration</th>
            <th>Fees</th>
            <th>Description</th>
            
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $con = mysqli_connect("localhost", "root", "", "stud_project");
          //$query = mysqli_query($con, "SELECT * FROM inquiry1 ");
		  $query = mysqli_query($con, "SELECT * FROM courses ORDER BY c_id DESC");


          while ($temp = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td><?php echo $temp[0]; ?></td>
            <td><?php echo $temp[1]; ?></td>
            <td><?php echo $temp[2]." Months"; ?></td>
            <td><?php echo $temp[3]; ?></td>
            <td><?php echo $temp[4]; ?></td>
            
            <td class="action-icons">
              <a href="coursesUpdate.php?id=<?php echo $temp[0]; ?>">
                <img src="./image/edit.png" alt="Edit">
              </a>
            </td>
            <td class="action-icons">
              <a href="coursesDelete.php?id=<?php echo $temp[0]; ?>" onclick="return confirm('Are you sure you want to delete this entry?');">
                <img src="./image/delete.png" alt="Delete">
              </a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
