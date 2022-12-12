<?php
?>


<!doctype html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/signupstyle.css" />
    <link rel="icon" href="images/bookicon.png">
    <title>Bookcart</title>

  </head>
  <body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="images/login.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Bookcart</h1>
                    
                    <form id="signup-form" name="singup-form" action="signupprocess.php" method="POST" >
                       
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" id="name1" name="name1" class="form-control my-3 p-4" placeholder="First name" aria-label="First name" required/>   
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" id="name2" name="name2"  class="form-control my-3 p-4" placeholder="Last name" aria-label="Last name"  required/>   
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                              <input type="email" id="uemail" name="uemail"  class="form-control my-3 p-4" placeholder="Email Address" aria-label="email"  onkeydown="validation();" required/>   
                              
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                              <input type="text" id="uname" name="uname" placeholder="Username" class="form-control my-3 p-4"  aria-label="username" required/>
                            </div>
                        </div>
              
                        <div class="form-row">
                            <div class="col-lg-7">
                              <input type="password" id="pass" name="upass" placeholder="Enter Password" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <!-- <div class="form-row">
                            <div class="col-lg-7">
                              <input type="password" id="pass2" placeholder="Confirm Password" class="form-control my-3 p-4">
                            </div>
                        </div> -->
                        <div class="form-row">
                          <div class="col-lg-7">
                            <input type="text" id="phoneno" name="phoneno"  placeholder="Phone Number" class="form-control my-3 p-4">
                          </div>
                       </div>
                       <div class="form-row">
                        <div class="col-lg-7">
                          <input type="text" id="add" name="add" placeholder="Address" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="col-lg-7">
                        <input type="text" id="uzip" name="uzip"  placeholder="Zip Code" class="form-control my-3 p-4">
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-7">
                      <input type="text" id="ucountry" name="ucountry"  placeholder="Country" class="form-control my-3 p-4">
                    </div>
                </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                              <!-- <button type="button" class="btn1 mt-3 mb-5" >Create Account</button> -->
                              <input class="btn1 mt-3 mb-5 submit-button rounded-pill" type="submit" value="Sign Up" /> 
                            </div>
                        </div> 
                          <p>Already have an account? 
                        <a href="login.php">Log in here</a></p>
                    </form>

                </div>
            </div>
        </div>
    </section>


    

    <!-- Optional JavaScript -->
  <script type="text/javascript"> 
    function validation(){
      var form= document.getElementsById("signup-form");
      var email= document.getElementsById("uemail").value;
      var text= document.getElementsById("text");
      var pattern= /^[^]+@[^]+\.[a-z]{2,3}$/;
      if(email.match(pattern)){
        form.classList.add("Valid");
        form.classList.remove("Invalid");
        text.innerHTML="Your email address is valid";
        text.style.color="#00ff00";
      }
else{
  form.classList.remove("valid");
  form.classList.add("Invalid");
  text.innerHTML="Please enter a valid email address";
      text.style.color="#00ff00";

}
if(email==""){
  form.classList.remove("valid");
  form.classList.add("Invalid");
  text.innerHTML="";
      text.style.color="#00ff00";

}

    }


  </script>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>


  </html>