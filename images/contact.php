<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap and font awesome link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <!-- css link -->
    <link rel="stylesheet" href="css/styles.css"/>
    <script src="https://kit.fontawesome.com/7bef94379f.js" crossorigin="anonymous"></script>
    <title>ContactUs</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/contact.css">
    </head>
    <body>

                <!-- header section -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><i class="fas fa-hand-holding-heart"></i><span> Happy to Help</span></a>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="AboutUs.html">About Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Focus Areas
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="environment.html">Environment</a></li>
                    <li><a class="dropdown-item" href="edu.html">Education</a></li>
                    <li><a class="dropdown-item" href="disaster.html">Disaster Relief</a></li>
                    <li><a class="dropdown-item" href="women.html">Women Empowering</a></li>
                  </ul>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Get Involved
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="volunteer.php">Volunteer</a></li>
                    <li><a class="dropdown-item" href="donor.php">Donor</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="contact.php">Contact Us</a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <a href="donor.php"><button class="btn">Donate</button></a>
              <a href="volunteer.php"><button class="btn btn-margin">Volunteer</button></a>
              </ul>
            </div>
          </div>
        </nav>
      </header>


        <div class="head">
        <h1>CONTACT-US</h1>
        <hr class="line">
    </div>
 <!-- contact form start -->
 <?php
    include('contactForm.php');
 ?>
    <!-- contact form end -->
    <div class="ln">
       <h3>Get in touch with us</h3>
       <p>Each of you can get involved by contributing your time, talent, skills and dedication towards helping Deep Griha in advancing towards our vision.</p><br><p>Each Contribution Matters..!!<br>Let's do our part..!!</p>
           <i class="fa fa-facebook"></i>
           <i class="fa fa-linkedin"></i>
           <i class="fa fa-twitter"></i>        
           <br><br>
           <i class="fa fa-phone"></i> &nbsp; +91 123 345 7894
           <br>
           <i class="fa fa-envelope"></i> &nbsp; info@happytohelp.org
           <br>
           <i class="fa fa-map-marker"></i> &nbsp; Kolhapur, Maharashtra, India - 415065

           <hr class="line-5">
        </div>
             <!-- footer section -->
  <footer>
    <div class="footer-div">
      <p>
        &copy; Copyright 2021 - Happy to Help | All Rights Reserved | <a href="mailto:happytohelp@gmail.com">info@happytohelp.org</a> | +91 899 312 337 | Website by <a href="Admin/adminLogin.php" target="_blank">Pranita & Kartiki</a> 
      </p>
      <ul class="social-links list-non-bullet">
        <li class="list-item-inline">
          <a class="link fa fa-facebook" href="#">
          </a>
      </li>
      <li class="list-item-inline">
          <a class="link fa fa-twitter" href="#">
          </a>
      </li>
      <li class="list-item-inline">
          <a class="link fa fa-instagram" href="#">
          </a>
      </li>
      </ul>
    </div>
  </footer>
    </body>
</html>