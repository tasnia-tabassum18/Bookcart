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
          <a class="navbar-brand" href="logintype.html">
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
     
    </header>
    <!-- end header section -->
  </div>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-12">
      <form action="adminsearch.php" method="POST">
            
            <!--            sending search value via post method-->
                     <input class=" form-control search-field" type="text" id="searchkey" name="searchkey" placeholder="Search book title">
                     <input class="submit-button" type="submit" value="Go">
                    </form>
          <br>

          <h3 ><strong>Want to sell some books? </strong></h3> 
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick=uploadfn();>
         Upload
                </button>
                
          
          <br>
          <br>
            <table class="table table-striped table-hover table-dark table-bordered table-sm">
                <thead class="thead-dark">
                    <tr style="text-align:center">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>Publication Date</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Genre</th>
                        <th>Discount</th>
                        <th>Update/Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                     try{
                        $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        //database code execute, default : warning generate
                        $sqlquerystring="SELECT * FROM book_t";
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
                                    <td><?php echo $row['bookid']; ?></td>
                                    <td><?php echo $row['booktitle']; ?></td>
                                    <td><?php echo $row['author']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $row['publicationdate']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td>
                                        <img src="<?php echo $row['imageUrl']; ?>" width="200" height="200">
                                     </td>
                                    <td><?php echo $row['genre']; ?></td>
                                    <td><?php echo $row['discount']; ?></td>
                                     <td>
                               <input type="button" value="Update" onclick="updatefn(<?php echo $row['bookid']; ?>);"><br>
                              <input type="button" value="Delete" onclick="deletefn(<?php echo $row['bookid']; ?>);">
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
                
                function uploadfn(){
                    location.assign('uploadproducts.php'); ///GET method
                }
                function updatefn(prodid){
                    location.assign('updateproducts.php?bookid='+prodid); ///GET method
                }
                function deletefn(prodid){
                    ///how to send data in GET method
                    ///GET method sends data through URL
                    ///url=www.dbms.com/folder/home.php?varname=value&varname1=value1
                    ///in backend: $_GET['varname']
                    
                    location.assign('productdeleteprocess.php?bookid='+prodid); //GET
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

