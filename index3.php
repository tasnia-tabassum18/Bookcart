<?php

@include 'config.php';
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

  <link rel="icon" href="images/bookicon.png">


  <title>Bookcart</title>
  

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="web.css">



</head>
<body>

<?php include 'header.php'; ?>


<section class="info">

    <div class="info">
        <h2>Why buy Books with Bookcart?</h2>
    </div>

</section>

<!-- icons section starts  -->

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

</section>

<!-- icons section ends -->

<section class="search">

    <?php 
           if(isset($_GET['Message'])){
            echo "<p style ='color:red'> Opps!</p>";          
           }
    ?>


    <form method="GET" action="search_list.php">
        <div class="form-row">
            <div class="col-md-row">
                <input type="text" name="id" placeholder = "                                                                         Search for ISBN number" class="form-control">
            </div>
            <div class="col-md-4">
                <button class="btn btn-success" type="submit" name="search">Search</button>
            </div>
        </div>
    </form>


</section>













<section class="recentSearch" id="recent">
    

    <h1 class="heading"><a href="products.php"><span>Recently Searched Books</span></a></h1>


        <div class="swiper search-slider">

          <div class="swiper-wrapper boxP">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="uploaded_img/new1.png" alt="..">
                </div>
                <div class="content">
                    <h3>Nineteen Eighty Four</h3>
                    <h4>George Orwell</h4>
                    <div class="price">$15.99 </div>
                 
                    
                </div>
                
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="uploaded_img/new2.png" alt="..">
                </div>
                <div class="content">
                    <h3>Gone Girl</h3>
                    <h4>Gillian Flynn</h4>

                    <div class="price">$5.99 </div>
                   
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="uploaded_img/new3.png" alt="..">
                </div>
                <div class="content">
                    <h3>Brave New World</h3>
                    <h4>Aldous Huxiety</h4>
                    <div class="price">$15.99</div>
                 
                </div>
            </div>


            </div>
         

        </div>


   

</section>


<section class="featured" id="featured">
    

    <h1 class="heading"><a href="products.php"><span>Best Seller Books</span></a></h1>

    <div class="swiper featured-slider swiper-initialized swiper-horizontal swiper-pointer-events">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/1.png" alt="">
                </div>
                <div class="content">
                    <h3>Harry Potter and the Goblet of Fire</h3>
                    <h4>J.k.Rowling</h4>

                    <div class="price">$5.99</div>
                  
                </div>
            </div>

            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Harry Potter and the Order of the Phoenix</h3>
                    <h4>J.k.Rowling</h4>

                    <div class="price">$5.99</div>
                  
                </div>
            </div>

            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/product6.png" alt="">
                </div>
                <div class="content">
                    <h3>Of Mice and Men</h3>
                    <h4>John Steinbeck</h4>

                    <div class="price">$3.59</div>
                  
                </div>
            </div>


           <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/4.png" alt="">
                </div>
                <div class="content">
                    <h3>Goodnight Moon</h3>
                    <h4>Margaret Wise Brown</h4>

                    <div class="price">$4.99</div>
                  
                </div>
            </div>

            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/5.png" alt="">
                </div>
                <div class="content">
                    <h3>Eat TO Live </h3>
                    <h4>Joel Fuhrman</h4>

                    <div class="price">$7.99</div>
                  
                </div>
            </div>

            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/6.png" alt="">
                </div>
                <div class="content">
                    <h3>Cinder</h3>
                    <h4>Marissa Meyer</h4>

                    <div class="price">$1.99</div>
                  
                </div>
            </div>

            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/7.png" alt="">
                </div>
                <div class="content">
                    <h3>Green Egges and Ham</h3>
                    <h4>Dr. Seuss</h4>

                    <div class="price">$5.99</div>
                  
                </div>
            </div>

            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/8.png" alt="">
                </div>
                <div class="content">
                    <h3>The Mark of Anthena</h3>
                    <h4>Rick Riordan </h4>

                    <div class="price">$5.99</div>
                  
                </div>
            </div>

           
            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/9.png" alt="">
                </div>
                <div class="content">
                    <h3>The Charlie and the Chocolate</h3>
                    <h4>Rick Riordan </h4>

                    <div class="price">$5.99</div>
                  
                </div>
            </div>

            <div class="swiper-slide box">
                
                <div class="image">
                    <img src="uploaded_img/r3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ender's Game</h3>
                    <h4>Orsan Scott Card</h4>

                    <div class="price">$5.99</div>
                  
                </div>
            </div>
         

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->



<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"><a href="filter.php"><span>Just Arrived</span></a></h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="uploaded_img/new1.png" alt="">
                </div>
                <div class="content">
                    <h3>Nineteen Eighty Four</h3>
                    <h4>George Orwell</h4>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                       
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="uploaded_img/new2.png" alt="">
                </div>
                <div class="content">
                    <h3>Gone Girl</h3>
                    <h4>Gillian Flynn</h4>

                    <div class="price">$5.99 <span>$9.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                      
                       
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="uploaded_img/new3.png" alt="">
                </div>
                <div class="content">
                    <h3>Brave New World</h3>
                    <h4>Aldous Huxiety</h4>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                   
                    </div>
                </div>
            </div>

           
    </div>

   

</section>

<!-- arrivals section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>Tanima Ahamed Tulon</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- loader  -->






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>