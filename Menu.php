<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>NPG-UNIQUE COMPUTERS</title>
    <link rel="icon" type="image/svg+xml" href="./image/icon.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
	
	
    .sidebar {
      min-height: 100vh;
      transition: width 0.3s ease-in-out;
      background-color: #343a40;
      overflow: hidden;
      white-space: nowrap;
    }

    .sidebar.collapsed {
      width: 60px !important;
    }

    .sidebar:not(.collapsed) {
      width: 250px;
    }

    .sidebar .nav-link,
    .sidebar .logbtn {
      color: white;
      padding: 10px;
      display: flex;
      align-items: center;
      border: none;
      background: none;
      width: 100%;
    }

    .sidebar .nav-link:hover,
    .sidebar .logbtn:hover {
      background-color: #495057;
    }

    .sidebar i {
      font-size: 1.2rem;
      margin-right: 10px;
    }

    .sidebar.collapsed .sidebar-text {
      display: none !important;
    }

    .section-heading-wrapper {
      position: relative;
      text-align: center;
      margin-bottom: 30px;
      padding: 10px;
      border-radius: 20px;
      background: linear-gradient(135deg, #0d6efd, #6f42c1);
      color: white;
      animation: floatText 4s ease-in-out infinite;
    }

    .background-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 5rem;
      color: white;
      opacity: 0.07;
      z-index: 1;
      pointer-events: none;
      animation: floatIcon 6s ease-in-out infinite;
    }

    @keyframes floatText {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    @keyframes floatIcon {
      0%, 100% { transform: translate(-50%, -50%) rotate(0deg); }
      50% { transform: translate(-50%, -55%) rotate(5deg); }
    }

    .same {
      font-size: 1.2vw;
      font-family: 'Cascadia Code Light', monospace;
    }

    @media (max-width: 768px) {
      .same {
        font-size: 6vw;
      }
    }

    .logbtn {
      font-family: monospace;
      padding: 8px;
      border-radius: 4px;
    }

    .alert-message {
      display: none;
      margin-top: 20px;
    }
	.menu{
		color:white;
		margin-bottom:2vw;
		padding:0vw;
		
	}
#dynamicContent {
  display: flex;
  flex-wrap: wrap; /* Allow wrapping for better mobile layout */
  justify-content: center;
  gap: 1.5rem;
  padding: 1rem;
  overflow-x: hidden; /* Hide horizontal scroll on small screens */
}

.card {
  flex: 1 1 200px; /* Flexible base size */
  max-width: 220px;
  text-align: center;
  background-color: white;
  box-shadow: 1px 3px 10px rgba(0, 0, 0, 0.3);
  cursor: pointer;
  border-radius: 10px;
  padding: 1rem;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: scale(1.05);
}

.card img {
  width: 100%;
  max-width: 100px;
  height: 100px;
  object-fit: contain;
  margin: 0 auto 0.5rem;
  display: block;
  transition: transform 0.5s ease;
}

.card img:hover {
  transform: scale(1.1);
}

.text {
  font-family: 'Bahnschrift SemiBold', sans-serif;
  font-size: 1rem;
  color: #333;
  margin-top: 0.5rem;
}

/* Medium screens (tablets, etc.) */
@media (max-width: 768px) {
  .card {
    flex: 1 1 45%;
    max-width: 48%;
  }

  .card img {
    max-width: 80px;
  }

  .text {
    font-size: 0.95rem;
  }
}

/* Small screens (phones) */
@media (max-width: 480px) {
  .card {
    flex: 1 1 100%;
    max-width: 100%;
  }

  .card img {
    max-width: 80px;
    height: auto;
  }

  .text {
    font-size: 4vw;
  }
}
		

}


  </style>
</head>
<body>
<?php
	include 'header1.php';
?>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <!-- Sidebar -->
      <div class="col-auto sidebar px-0" id="sidebar">
        <div class="d-flex flex-column pt-3">
          <ul class="nav nav-pills flex-column mb-auto" id="menu">
            
			<li>
			<div class="container-fluid">
            <button class="btn btn-outline-secondary" id="sidebarToggle">
              <i class=" menu bi bi-list"></i>
            </button>
          </div>
			</li>
			<li>
              <a href="#" class="nav-link" id="inquiry" data-bs-toggle="tooltip" data-bs-placement="right" title="Inquiry">
                <i class="bi bi-question-circle"></i>
                <span class="sidebar-text">Inquiry
					
				</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link" id="addmission" data-bs-toggle="tooltip" data-bs-placement="right" title="Admission">
                <i class="bi bi-person-plus"></i>
                <span class="sidebar-text">Admission</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link" id="feeamount" data-bs-toggle="tooltip" data-bs-placement="right" title="Fee Amount">
                <i class="bi bi-cash-coin"></i>
                <span class="sidebar-text">Fee Amount</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link" id="certificate" data-bs-toggle="tooltip" data-bs-placement="right" title="Certificate">
                <i class="bi bi-award"></i>
                <span class="sidebar-text">Certificate</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link" id="courses" data-bs-toggle="tooltip" data-bs-placement="right" title="Courses">
                <i class="bi bi-book-half"></i>
                <span class="sidebar-text">Courses</span>
              </a>
            </li>
            <li>
              <a href="chpwd2.php" class="nav-link" id="cpassword" data-bs-toggle="tooltip" data-bs-placement="right" title="Change Password">
                <i class="bi bi-key"></i>
                <span class="sidebar-text">Change Password</span>
              </a>
            </li>
            <li>
              <button class="logbtn nav-link text-white bg-transparent" id="logoutBtn">
                <i class="bi bi-box-arrow-right"></i>
                <span class="sidebar-text">Logout</span>
              </button>
            </li>
          </ul>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col py-3">
        <!--<nav class="navbar navbar-light bg-light mb-4">
          <div class="container-fluid">
            <button class="btn btn-outline-secondary" id="sidebarToggle">
              <i class="bi bi-list"></i>
            </button>
          </div>
        </nav>-->

        <div class="section-heading-wrapper">
          <i class="background-icon bi bi-pc-display"></i>
          <h2 id="sectionTitle">WELCOME TO NPG-UNIQUE COMPUTERS</h2>
        </div>

        <div class="alert alert-warning alert-message" id="messageBox">
          <span id="messageText">Select an option from the sidebar.</span>
        </div>

        <div id="dynamicContent">
          <div class="card">

			<a href="inquiryAdd.php"><img src=".\image\inquiry2.png"></a>
			<label class="text">Inquiry</label>
		  </div>
		  <div class="card">

			<img src=".\image\addmission1.png">
			<label class="text">Addmission</label>
		  </div>
		  <div class="card">

			<img src=".\image\fees.png">
			<label class="text">Fees</label>
		  </div>
		  <div class="card">

			<img src=".\image\certificate.png">
			<label class="text">Certificate</label>
		  </div>
		  <div class="card">

			<img src=".\image\courses1.png">
			<label class="text">Courses</label>
		  </div>
        </div>
      </div>
    </div>
  </div>
  <?php
	include 'footer.php';
  ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const sidebarLinks = document.querySelectorAll('#menu .nav-link');
    const logoutBtn = document.getElementById('logoutBtn');
    let currentOpen = null;

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
    });

    sidebarLinks.forEach(link => {
      link.addEventListener('click', () => {
        const id = link.id;
        displayContent(id);
        sidebar.classList.remove('collapsed');  // Only show sidebar if a link is clicked
      });
    });

    function displayContent(id) {
      let url = '';
      let sectionText = '';
      switch (id) {
        case 'inquiry':
          url = 'http://localhost:8080/Stud_Project/inquiryAdd.php'; sectionText = 'Inquiry'; break;
		//case 'cpassword':
         //url = 'password.php'; sectionText = 'Change Password'; break;
		 
   	   case 'addmission':
          url = 'http://localhost:8080/Stud_project/temp.php'; sectionText = 'Admission'; break;
        case 'feeamount':
          url = 'http://localhost:8080/Stud_project/temp.php'; sectionText = 'Fee Amount'; break;
        case 'certificate':
          url = 'http://localhost:8080/Stud_project/temp.php	'; sectionText = 'Certificate'; break;
        case 'courses':
          url = 'http://localhost:8080/stud_project/courses.php'; sectionText = 'Courses'; break;
		
		
		
	
		default:
          document.getElementById('messageText').textContent = 'Select an option from the sidebar.';
          document.getElementById('messageBox').style.display = 'block';
          return;
      }

      // Check if the content is already open to avoid reload
      if (currentOpen === id) {
        return; // Don't reload if already open
      }

      // Show loading message
      document.getElementById('dynamicContent').innerHTML = '<p>Loading...</p>';
      document.getElementById('messageBox').style.display = 'none';

      fetch(url)
        .then(res => res.text())
        .then(data => {
          document.getElementById('dynamicContent').innerHTML = data;
          document.getElementById('sectionTitle').textContent = sectionText;
          currentOpen = id;
          clearActive();
          document.getElementById(id).classList.add('active');
        })
        .catch(err => {
          console.error('Error loading content:', err);
          document.getElementById('dynamicContent').innerHTML = '<p>Error loading content. Please try again later.</p>';
        });
    }

    function clearActive() {
      sidebarLinks.forEach(link => link.classList.remove('active'));
    }

    logoutBtn.addEventListener('click', () => {
      if (confirm("Are you sure you want to logout?")) {
        sessionStorage.clear();
        localStorage.clear();
        window.location.href = 'index.php';
      }
    });

    // Enable Bootstrap tooltips
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
      new bootstrap.Tooltip(el);
    });
  </script>
</body>
</html>
