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
    
    $sql_1 = "SELECT * FROM  order_t";
    $sql_2 = "SELECT count(*) as totalcount FROM  order_t";
    
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
                <a class="nav-link" href="uploadproducts.php"> Products</a>
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
     
    </header>
    <!-- end header section -->
  </div>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-12">
          
      <div class="container d-flex justify-content-center p-5">
                <button type="button" class="btn btn-dark py-2 bg-gradient-info text-white">
                    Total number of orders
                    <span class="badge bg-warning"> 
                        <?php $c = $result2->fetch_assoc();  echo $c['totalcount']; 
                        ?>

                    </span>
                </button>
                
            </div> 
          
            <table class="table table-striped table-hover table-dark table-bordered table-sm">
                <thead class="thead-dark">
                    <tr style="text-align:center">
                        <th>Order ID</th>
                        <th>Quantity</th>
                        <th>Book Title</th>
                        <th>Mark as done</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                     try{
                        $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        //database code execute, default : warning generate
                        $sqlquerystring="SELECT * FROM order_book_t";
                        $returnobj=$conn->query($sqlquerystring); 
                         
                        if($returnobj->rowCount()==0){
                            ///no data found
                             ?>
                                <tr style="text-align:center" >
                                    <td colspan="6">No data found</td>
                                </tr>
                            <?php
                        } 
                        else{
                            ///product data found
                            $tabledata=$returnobj->fetchAll();
                            
                            foreach($tabledata AS $row){
                                ///$row = array(id=>1,name=>lays,imagepath=>folder/file.jpg,…)
                                
                                ?>
                                 <tr style="text-align:center">
                                    <td><?php echo $row['orderid']; ?></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td><?php echo $row['bookid']; ?></td>
                                    <td><?php echo $row['booktitle']; ?></td>
<!--                             -->
                              <input type="button" value="Done" onclick="deletefn(<?php echo $row['orderid']; ?>);">
                                     </td>
                                </tr>
                                <?php
                                
                            }
                            
                        }
                    }
                    catch (PDOException $ex){
                        ?>
                            <tr style="text-align:center">
                                <td colspan="6">No data found</td>
                            </tr>
                        <?php
                    }
                    
                    ?>
                    
                </tbody>
            </table>
            </div>
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
                function deletefn(prodid){
                    ///how to send data in GET method
                    ///GET method sends data through URL
                    ///url=www.dbms.com/folder/home.php?varname=value&varname1=value1
                    ///in backend: $_GET['varname']
                    
                    location.assign('adminorderdoneprocess.php?orderid='+prodid); //GET
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

