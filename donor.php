<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap and font awesome link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <!-- css link -->
    
    <script src="https://kit.fontawesome.com/7bef94379f.js" crossorigin="anonymous"></script>
    <title>Donation</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/donor.css">
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
                  <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Get Involved
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="volunteer.php">Volunteer</a></li>
                    <li><a class="dropdown-item" href="donor.php">Donor</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
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


    <div class="tit">
        <h1 class="title">Donate 4 a better world</h1>
        <hr class="line22">
    </div>

    <!-- Donor form start -->
    <?php
    include('donorForm.php');
 ?>

<!-- donor form end -->


    <!-- <div class="head">
        <div class="quote">
            <h3 class="q">"No one has ever become poor by giving."</h3>
            <br><h4 class="writer">-Anne Frank</h4>
        </div>
    </div> -->
    <div class="area1">
        <h2 id="area1">Words from Donors..!!</h2>
        <hr class="line1">
      </div>
    
    <div class="container">
    <div class="box">
        <div class="content">
            <i class="fa fa-quote-right"></i>
            <p class="t">Throughout my time volunteering at HappytoHelp, I have been awed and humbled by the sincerity of the staff. Inspirational and welcoming, many of them have become close friends.</p>
    <img src="images/person1.png" class="user">
    <h3>Rahul Pandit</h3>
         </div>
      </div>
      <div class="box">
        <div class="content">
            <i class="fa fa-quote-right"></i>
            <p class="t"> I volunteered at HappytoHelp working to create and structure awareness sessions specifically in health related topics. During my time there, I met so many amazing people with great stories.</p>
    <img src="images/person1.png" class="user">
    <h3>Nisha Abhang</h3>
    </div>
      </div>
      <div class="box">
        <div class="content">
            <i class="fa fa-quote-right"></i>
            <p class="t">I first came to HtH when I was very young, through the USPG Experience Exchange Programme in 2015. I had a truly wonderful time; Indian culture fascinated and enthralled me and the more I immersed myself in it the more I enjoyed it.</p>
    <img src="images/person1.png" class="user">
    <h3>Reshma Nikam</h3>
         </div>
      </div>
    </div>

    <hr class="line-5">
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