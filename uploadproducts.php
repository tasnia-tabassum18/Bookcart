<?php
session_start();

if(
        isset($_SESSION['username'])
    &&  !empty($_SESSION['username'])
)
{ ?>


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
          <a class="navbar-brand" href="adminhome.php">
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
                <a class="nav-link pl-lg-0" href="adminhome.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="productinfo.php"> Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminupdateuser.php">Users</a>
              </li>
            </ul>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick=logoutfn();>
                  Logout
                </button>
                
         
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
              Upload Products
            </h2>
          </div>
          <form action="adminuploadprocess.php" method="POST" enctype="multipart/form-data">
      <!-- <input type="button"  value="Profile" onclick="profilefn();"> -->
      <!-- <h1 class="title">Book </h1> -->
       <!-- <br> -->

      <input class="form-control" type="text" id="tiitle" name="tittle" placeholder="Enter book title" required >
      
      <br>
      <input class="form-control" type="text" id="author" name="author" placeholder="Enter author name" required >
      <br>
      <input class="form-control" type="number" id="price" name="price" placeholder="Enter price" required >
      <br>
      <input class="form-control" type="text" id="des" name="des" placeholder="Enter description" required>
      <br>
      <input class="form-control" type="file" id="img" name="image" placeholder="Enter image" required>
      <br>
      <input class="form-control" type="text" id="gen" name="gen" placeholder="Genre" required>

      <br>
      <input class="form-control" type="text" id="pub" name="pub" placeholder="Enter publication date e.g dd/mm/yy" required>
      <br>
      <input class="form-control" type="number" id="dis" name="dis" placeholder="Enter discount" required>
      <br>

       
      <input class="submit-button" type="submit" value="Upload" > 
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
  <script>
    function redirectfn(){
        location.assign('adminuploadprocess.php'); ///GET method
    }
    function logoutfn(){
                    location.assign('logout.php'); ///GET method
                }
    </script>
                
 

</body>

</html>
<?php
}
else{
  ?>
    
      <script>location.assign('adminlogin.php')</script>
  <?php
}

?>



