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

<body>

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
                <a class="nav-link" href="index3.php">Shop</a>
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
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <!-- using carousel to slide -->
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Bookcart Bookstore
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                      Bookcart is an online platfrom where you can buy, rent, and sell books. <br>
                      You can also check the ratings of a book beforehand!
                    </p>
                    <a href="about.php">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Bookcart Bookstore
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                       You can also visit our store and browse through our collection.
                    </p>
                    <a href="about.html">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/bookshopimage.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Bookcart Bookstore
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                      No shelf space? We got your back. Now, you can rent books from other readers!
                    </p>
                    <a href="about.php">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/bookshop2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- genre section -->

  <section class="genre_section layout_padding">
    <div class="catagory_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Books Categories
          </h2>
          <p>
            Genres available at our store.
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box"><a href="fiction.html">
                <img src="images/cat2.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Fiction
                </h5>
               
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box"><a href="classic.html">
                <img src="images/cat1.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Classics
                </h5>
              
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box"><a href="thriller.html">
                <img src="images/cat3.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Thriller 
                </h5>
               
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box"><a href="romance.html">
                <img src="images/cat4.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Romance
                </h5>
                <!-- <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box"><a href="fantasy.html">
                <img src="images/cat6.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Fantasy
                </h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box "><a href="sci.html">
              <div class="img-box">
                <img src="images/cat5.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Sci-Fi
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end catagory section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Our Bookstore
              </h2>
            </div>
            <p>
              Bookcart has been established in 2005. Since then, our only goal was to deliver the books to fulfill your reading reads. Bookcart believes that finding the book you want should not be a struggle in this century. Hence, we are improving day by day to satisfy our readers.
            </p>
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Customer reviews 
        </h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="client_container ">
            <div class="detail-box">
              <p>
                Bookcart allowed me to rent books at the cheapest price. Now I can read without spending too much!
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="images/student.png" alt="">
              </div>
              <div class="client_name">
                <h5>
                  Aelin Galynthus
                </h5>
                <h6>
                  Student
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="client_container ">
            <div class="detail-box">
              <p>
                Being a working person, I barely get time to go out for shopping for which I stopped reading books as buying them was a hassle. Thanks to bookcart, now I can browse through a shop while resting on my bed.
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="images/c2.jpg" alt="">
              </div>
              <div class="client_name">
                <h5>
                  Anna Heathrow
                </h5>
                <h6>
                  Accountant
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  
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