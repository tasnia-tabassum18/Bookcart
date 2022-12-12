<?php
session_start();

if(
        isset($_SESSION['username'])
    &&  !empty($_SESSION['username'])
)
{ ?>
<?php

$link = mysqli_connect("localhost","root","","bookcart");

if($link === false){
    die("Error: Could not connect.".mysqli_connect_error());
}

$sql_1 = "SELECT * FROM  user_t";
$sql_2 = "SELECT count(*) as count FROM  user_t";

$result = $link->query($sql_1);
$result2 = $link->query($sql_2);


mysqli_close($link);
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
              <li class="nav-item">
                <a class="nav-link" href="adminvieworder.php">Orders</a>
              </li>
            </ul>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick=logoutfn();>
                  Logout
                </button>
                
         
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  

  <!-- about section -->
  <div class="container">
        <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
            
            <div class="container d-flex justify-content-center p-5">
                <button type="button" class="btn btn-dark py-2 text-white">
                    Total number of users 
                    <span class="badge bg-warning"> 
                        <?php $c = $result2->fetch_assoc();  echo $c['count']; 
                        ?>

                    </span>
                </button>
                <input type= "submit-button"  value="Delete User" onclick="deletefn2();">
              

            </div> 
            
            <table class="table table-striped table-hover table-dark table-bordered table-sm ">
             <thead class="thead-dark">
                    <tr style="text-align:center">  
                        <th>Username</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while($rows=$result->fetch_assoc()){ 
                    
                        ?> 
                        <tr  style="text-align:center"> 
                            <td><?php echo $rows['username']; ?></td> 
                            <td><?php echo $rows['email']; ?></td> 
                           
                            <td><?php echo $rows['phone']; ?></td> 
                           
                           
                        </tr>
                    <?php 
                    } 
                    ?> 
                </tbody>
            </table>
           
            
        </div>
    </div>

  
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

  <script>
                function logoutfn(){
                    location.assign('logout.php'); ///GET method
                }
                
                function uploadfn(){
                    location.assign('upload.php'); ///GET method
                }
                
                function deletefn2(){
                    ///how to send data in GET method
                    ///GET method sends data through URL
                    ///url=www.dbms.com/folder/home.php?varname=value&varname1=value1
                    ///in backend: $_GET['varname']
                    
                    location.assign('deleteuser.php'); //GET
                }

                function searchfn(){
                  location.assign('adminsearch.php'); 


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

