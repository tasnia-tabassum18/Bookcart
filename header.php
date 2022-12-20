<header class="header">

   <div class="flex">

      <a href="index.php" class="logo"> <i class="fas fa-book"></i> Bookcart </a>

      <nav class="navbar">
         
      
         <a href="products.php">Home</a>
         <a href="products.php">Shop</a>
         <a href="products.php">Rent</a>
         <a href="products.php">Post Rent</a>
         <a href="products.php">Log out</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>