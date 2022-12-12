<?php
/*
1) to receive the data from signup.php
2) if the data is valid then we need to store the data to database
3) if data is store then forward the user to LOGIN page
4) if data store is not successful then forward to Signup page
*/

if($_SERVER['REQUEST_METHOD']=="POST"){
    //we will give service
    //$_POST['name1']
    //$_POST['name2']
    //$_POST['uemail']
    //$_POST['uame']
    // $_POST['upass']
    // $_POST['phoneno']
    // $_POST['add'] 
    // $_POST['uzip']
    // $_POST['ucountry']   
    //empty value check, valid index check
    
     if(
        isset($_POST['name1']) &&
        isset($_POST['name2'])  &&
        isset($_POST['uemail'])  &&
        isset($_POST['uname']) &&
        isset($_POST['upass']) &&
        isset($_POST['phoneno']) &&
        isset($_POST['add']) &&
        isset($_POST['uzip']) &&
        isset($_POST['ucountry']) &&
        
        !empty($_POST['name1']) &&
        !empty($_POST['name2'])  &&
        !empty($_POST['uemail'])  &&
        !empty($_POST['uname']) &&
        !empty($_POST['upass']) &&
        !empty($_POST['phoneno']) &&
        !empty($_POST['add']) &&
        !empty($_POST['uzip']) &&
        !empty($_POST['ucountry']) 
    )
        {  
         //storing value to variables
            $fname=$_POST['name1'];
            $lname=$_POST['name2'];
            $email=$_POST['uemail'];
            $username=$_POST['uname'];
            $pass=$_POST['upass'];
            $phone=$_POST['phoneno'];
            $address=$_POST['add'];
            $zip=$_POST['uzip'];
            $country=$_POST['ucountry'];

            // encoding password
            $enc_pass=md5($pass);
            ///tries to communicate with the database and store the data
        try{
                $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
             //database code execute, default : warning generate
             $sqlquerystring="INSERT INTO user_t(username,password,fname,lname,email,phone,address,zipcode,country)
                            VALUES('$username','$enc_pass','$fname','$lname','$email','$phone','$address','$zip','$country')";
                
                
            ///executing the mysql code
            // we used exec() as the database is not returning anything
            $conn->exec($sqlquerystring);
                
    //             storing usernaame from user
        // $sqlquerystring="SELECT username FROM user_t WHERE username='$username";
                
                
        // ///executing the mysql code
        // $returnobj=$conn->query($sqlquerystring);
        // $data= $returnobj->fetch();
        // // $id=$data['username'];
    //        
                ?>
    <!--             As the signup is sucessful it will take user to the login page-->
                echo "<script>location.assign('login.php')</script>";
            <?php
                
            }
            catch (PDOException $ex){
            ?>
    <!--              As the database throws an exception it will take the user to the signup page-->
            <script>location.assign('signup.php')</script>
                <?php
            }
        }
     else{
        //otherwise
        ?>
        <script>location.assign('signup.php')</script>
        <?php
    }
    }

else{
    //we won't provide service
    
   echo "<script>location.assign('signup.php')</script>";
}
?>