
<?php
session_start();

 ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
          <!-- Site Metas -->
      <link rel="icon" href="images/bookicon.png">
      <!-- <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" /> -->
    
      <title>Bookcart</title>
      
    
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
        <!-- custom css file link  -->
        <link rel="stylesheet" href="web.css">
        <link rel="stylesheet" href="css/style.css">
    
    
        
    
    
    
    
    </head>
    <body>
        
    <!-- header section starts  -->
    
    <header class="header">
    
        <!-- <div class="header-1">
    
            <a href="#" class="logo"> <i class="fas fa-book"></i> bookcart </a>
    
            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>
    
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
    
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
    
            </div>    
    
              
           
    
        </div> -->
    
        <div class="header-2">
            <nav class="navbar">
                <a href="index.html">Home</a>
                <a href="index3.html">Shop</a>
                <!-- changed this to work -->
                <a href="userrentpost.php">Rent </a>
                <!-- no more change -->
                <a href="contact.html">Contact Us</a>
                <a href="userProfile.html">Profile</a>
                
            </nav>
        </div>
    
    </header>
    
    <!-- header section ends -->
    
    <!-- bottom navbar  -->
    
    <nav class="bottom-navbar">
        <a href="index.html" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>
    
    <!-- login form  -->
    
    <!-- <div class="login-form-container">
    
        <div id="close-login-btn" class="fas fa-times"></div>
    
        <form action="">
            <h3>sign in</h3>
            <span>username</span>
            <input type="email" name="" class="box" placeholder="enter your email" id="">
            <span>password</span>
            <input type="password" name="" class="box" placeholder="enter your password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>forget password ? <a href="#">click here</a></p>
            <p>don't have an account ? <a href="signup.html">create one</a></p>
        </form>
    
    </div> -->
    
    <!-- <section class="info">
    
        <div class="info">
            <h2>Why buy Books with Bookcart?</h2>
        </div>
    
    </section> -->
    
    <!-- icons section starts  -->
    <!-- 
    <section class="icons-container">
    
        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>order over $100</p>
            </div>
        </div>
    
        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>
    
        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
            </div>
        </div>
    
        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>
    
    </section> -->
    
    <!-- icons section ends -->
    
    <section class="contact_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ">
              <div class="heading_container ">
                <h2 class="">
                  Rent Products 
                </h2>
                
              </div>
              <form action="userrentpostprocess.php" method="POST" enctype="multipart/form-data">
          <!-- <input type="button"  value="Profile" onclick="profilefn();"> -->
          <!-- <h1 class="title">Book </h1> -->
           <!-- <br> -->
           <!-- <input class="form-control" type="text" id="tiitle" name="tittle" placeholder="Enter your title" required > -->
           <input class="form-control" type="text" id="username" name="username" placeholder="Enter your username" required >
          
          <br>
          <input class="form-control" type="text" id="tiitle" name="tittle" placeholder="Enter book title" required >
          
          <br>
          <input class="form-control" type="text" id="author" name="author" placeholder="Enter author name" required >
          <br>
          <input class="form-control" type="number" id="price" name="price" placeholder="Enter price" required >
          <br>
          <br>
          <input class="form-control" type="text" id="pub" name="pub" placeholder="Enter return date e.g dd/mm/yy" required>
          <br>
          <input class="form-control" type="text" id="des" name="des" placeholder="Enter description" required>
          <br>
          <input class="form-control" type="file" id="img" name="image" placeholder="Upload book image" required>
          <br>
          <input class="form-control" type="text" id="gen" name="gen" placeholder="Genre" required>
    
           
          <input class="submit-button" type="submit" value="Upload" > 
          </form>
            </div>
            <!-- <div class="col-md-6">
              <div class="img-box">
                <img src="images/booksrent.png" alt="" height="500" width="200">
              </div>
            </div>
          </div>
        </div> -->
      </section>
    
    
    
    <!-- footer section ends -->
    
    <!-- loader  -->
    
    
    
    
    
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    
    
    <!-- custom js file link  -->
    <script src="script.js"></script>
    
    </body>
    </html>



















<?php


