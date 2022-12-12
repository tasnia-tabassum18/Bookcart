<?php

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['lname']) &&
     isset($_POST['lname'])&& isset($_POST['lname'])&& isset($_POST['lname']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $link = mysqli_connect("localhost","root","","bookcart");

  if($link === false){
      die("Error: Could not connect.".mysqli_connect_error());
  }

  $sql = "INSERT INTO contact_t (fname,lname,email,phone,subject,message) VALUES ('$fname','$lname','$email',' $phone',
  '$subject','$message')";

  if(mysqli_query($link,$sql)){
    echo '<div id="form-submit-alert">Form Submitted!</div>'; 

  }
  else{
      echo "Error:could not execute".mysqli_error($link);

  }


  mysqli_close($link);

}


?>











<!DOCTYPE html>
<html>

  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/bookicon.png">
    <!-- <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  
    <title>Bookcart</title>
  
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
  
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  
  </head>
  

<body class="sub_page">

  <div class="main">
    <!-- header section starts -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
           <!-- using this so that if you click on bookcart it loads the page again -->
          <a class="navbar-brand" href="index.php">
            <span>
              Bookcart
            </span>
          </a>
          <!-- using this to make navbar responsive-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link pl-lg-0" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logintype.php"> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categories.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About Us </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
            <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
          </div>
        </nav>
      </div>
    </header>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Contact Us
            </h2>
          </div>
          <form id="contact-form" name="contact-form" action="#" method="POST" >

            <div class="row mb-4">
              <div class="col-lg-6">
                <div class="form-outline">
                  <label class="form-label" >First name</label>
                  <input type="text" id="fname"class="form-control" placeholder="First name" aria-label="First name" name="fname" required/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-outline">
                  <label class="form-label" >Last name</label>
                  <input type="text" id="lname" class="form-control" placeholder="Last name" aria-label="Last name"  name="lname" required/>
                </div>
              </div>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label">Email address</label>
              <input type="email" id="email" class="form-control" placeholder="Email Address" aria-label="Email Address"  name="email" required/>
            
            </div>

            <div class="form-outline mb-4">
              <label class="form-label">Phone Number</label>
              <input type="phone" id="phone" class="form-control" placeholder="Phone number" aria-label="Phone number"  name="phone" required/>
            
            </div>

          <div class="form-outline mb-4">
              
            <label for="subject" class="">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject Line" class="form-control" required>
          
          </div>

          
          <div class="form-outline mb-4">
            <label class="form-label">Write your message</label>
            <textarea  id="message" class="form-control"  rows="3"
               placeholder="Message here" aria-label="Message here"  name="message" required></textarea>
          </div>
          <div class="text-center mt-4 ">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Submit
            </button>
              <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title " id="exampleModalLabel" style="color: black;" >Confirm submission</h5>
                    <div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    </div>
                    <div class="modal-body" style="color: black;">
                      Are you sure you want to submit your form?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" type="submit" value="Submit" onclick="document.getElementById('contact-form').submit();">Confirm</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_detail">
            <h4>
              About Us
            </h4>
            <p>
              Established in 2005, Bookcart has been one of the most well known bookshops for readers.
            </p>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  12/A Gulshan 1, Dhaka, Bangladesh.
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 669876634
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  bookcart@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Create an account
              <span class="signup"><a href="signup.php">Sign Up</a></span>
            </h4>
            
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By Tasnia Tabassum Oishee
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
 

</body>

</html>