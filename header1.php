<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/jpeg" href="/public/Logo.jpeg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Header</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #007bff;
      color: white;
    
      justify-content: center;
      align-items: center;
      padding:1px;
      text-align: center;
      flex-wrap: wrap; /* Allow elements to wrap for smaller screens */
    }

    .left-image {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
	  
    }

    .left-image img {
      width: 100%; /* Make image responsive */
      max-width: 500px; /* Set a maximum size for large screens */
      height: auto; /* Maintain aspect ratio */
    }

    .right-text {
      margin-top: 20px;
      text-align: center;
      width: 100%;
    }

    .right-text h1 {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 0px;
    }

    .right-text p {
      font-size: 1rem;
      margin: 5px 0;
      line-height: 1.4;
    }

    .mob {
      color: white;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      /* Mobile screen adjustments */
      .left-image img {
        max-width: 80%; /* Make image larger on mobile */
      }

      header {
        flex-direction: column; /* Stack items vertically on mobile */
      }
      
      .right-text {
        margin-top: 20px;
        width: 100%;
      }
    }

    @media (min-width: 768px) {
      /* Desktop screen adjustments */
      header {
        flex-direction: row; /* Align items side by side on large screens */
        justify-content: space-between;
      }

      .left-image img {
        max-width: 500px; /* Maximum size for desktop */
      }

      .right-text {
        margin-left: 20px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="left-image">
      <a href="#"><img src="./image/logo.png" alt="Website Logo"></a>
    </div>

    <div class="right-text">
      <!-- Optional: Add text or mobile number here -->
      <!--<h1>Welcome to Our Website</h1>-->
      <!--<p><b>Mobile No:</b> <a class="mob" href="tel:+919638447534">+91 9638447534</a></p>-->
    </div>
  </header>

</body>
</html>
