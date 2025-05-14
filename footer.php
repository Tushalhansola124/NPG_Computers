<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Modern Footer - NPG Unique Computers</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Roboto, sans-serif;
      background-color: #f5f5f5;
    }

    .footer {
      background-color: #121212;
      color: #f0f0f0;
      padding: 60px 20px 30px;
      box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.4);
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-logo h2 {
      font-size: 28px;
      color: white;
      margin-bottom: 12px;
      font-weight: 600;
    }

    .footer-logo p {
      font-size: 15px;
      color: #bbbbbb;
      line-height: 1.6;
      max-width: 250px;
    }

    .footer-links h3,
    .footer-social h3 {
      font-size: 20px;
      margin-bottom: 18px;
      font-weight: 600;
      color: #ffffff;
    }

    .footer-links ul {
      list-style: none;
      padding: 0;
    }

    .footer-links ul li {
      margin-bottom: 10px;
    }

    .footer-links ul li a {
      color: #bbbbbb;
      text-decoration: none;
      transition: color 0.3s ease;
      font-weight: 500;
    }

    .footer-links ul li a:hover {
      color: #00b894;
      text-decoration: underline;
    }

    .social-icons {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    .social-icons a {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      width: 44px;
      height: 44px;
      transition: transform 0.2s;
    }

    .social-icons a img {
      width: 22px;
      height: 22px;
    }

    .social-icons a.facebook {
      background-color: #3b5998;
    }

    .social-icons a.instagram {
      background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
    }

    .social-icons a.whatsapp {
      background-color: #25d366;
    }

    .social-icons a.call {
      background-color: #0a9396;
    }

    .social-icons a:hover {
      transform: scale(1.1);
    }

    .footer-bottom {
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      color: #888;
      border-top: 1px solid #2e2e2e;
      padding-top: 20px;
    }

    .footer-bottom a.name {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-bottom a.name:hover {
      color:#0077b6;
    }

    .footer1 {
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        text-align: center;
        align-items: center;
      }

      .footer-logo p {
        max-width: none;
      }
    }

    @media (max-width: 480px) {
      .footer {
        padding: 40px 15px 20px;
      }

      .footer-logo h2,
      .footer-links h3,
      .footer-social h3 {
        font-size: 18px;
      }

      .footer-logo p,
      .footer-links ul li a {
        font-size: 14px;
      }

      .social-icons a {
        width: 40px;
        height: 40px;
      }

      .social-icons a img {
        width: 20px;
        height: 20px;
      }

      .footer-bottom {
        font-size: 13px;
        padding-top: 15px;
      }

      .footer1 p {
        font-size: 13px;
        line-height: 1.4;
      }
    }
  </style>
</head>
<body>

  <!-- Footer Start -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-logo">
        <h2>Address</h2>
        <p>
          3rd Floor, Royal Complex,<br>
          Opp. Khijadi Plot, M. G. Road,<br>
          Porbandar (Gujarat-India)
        </p>
      </div>

      <div class="footer-links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Inquiry</a></li>
          <li><a href="#">Admission</a></li>
          <li><a href="#">Fee Amount</a></li>
          <li><a href="#">Certificate</a></li>
          <li><a href="#">Courses</a></li>
        </ul>
      </div>

      <div class="footer-social">
        <h3>Connect with Us</h3>
        <div class="social-icons">
          <a href="https://www.facebook.com/npguniquecomputers" target="_blank" class="facebook">
            <img src="https://img.icons8.com/ios-filled/24/facebook-new.png" alt="Facebook" />
          </a>
          <a href="https://www.instagram.com/npgunique/" target="_blank" class="instagram">
            <img src="https://img.icons8.com/ios-filled/24/instagram-new.png" alt="Instagram" />
          </a>
          <a href="https://wa.me/9638447534" target="_blank" class="whatsapp">
            <img src="https://img.icons8.com/ios-filled/24/whatsapp.png" alt="WhatsApp" />
          </a>
          <a href="tel:+919638447534" target="_blank" class="call">
            <img src="https://img.icons8.com/ios-filled/24/phone.png" alt="Call" />
          </a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2025 NPG-UNIQUE COMPUTERS. All Rights Reserved.</p>
      <div class="footer1">
        <p>
          Designed, Developed By:
          <a class="name" href="https://www.linkedin.com/in/tushal-hansola-92a909336/" target="_blank">Mr. Tushal Hansola</a>
          &nbsp;|&nbsp;
          Maintained By:
          <span></span>
		 <a class="name" href="#" target="_blank">Mr. Krunal Madlani</a>

        </p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

</body>
</html>
