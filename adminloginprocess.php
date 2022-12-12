<?php
/*
1) to receive the data from login.php
2) if the data is valid then we need to store the data to database
3) if data is store then forward the user to home page
4) if data store is not successful then forward to Log In page
*/

if($_SERVER['REQUEST_METHOD']=="POST"){
    //we will give service
    //$_POST['uemail']
    //$_POST['upass']
    //$_POST['uname']
    //$_POST['uname1']
    
     //empty value check, valid index check
    
    if(
        isset($_POST['uname']) &&
        isset($_POST['upass']) &&
        
        !empty($_POST['uname']) &&
        !empty($_POST['upass'])
    )
    {
         //storing values to variables
        $username=$_POST['uname'];
        $pass=$_POST['upass'];
       
       
    
        // encoding password
        // $enc_pass=md5($pass);
        
        ///tries to communicate with the database and store the data
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
      
            //database code execute, default : warning generate
           $sqlquerystring="SELECT * From admin_t WHERE uname='$username'and pass='$pass'";
            
            
            //executing the mysql code
            // used query function as it is returning value
            //$returnobj storing the object data that is returing
          $returnobj=$conn->query($sqlquerystring);
            if($returnobj->rowCount()==1){
                //login successful
                session_start();
  // returning an associative array
                $user_details=$returnobj->fetchAll();
        
//  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
                foreach ($user_details as $user)
                {
                    $_SESSION['username']=$user['uname'];
                    // $_SESSION['fname']=$user['name1'];
                    // $_SESSION['lname']=$user['name2'];
                    // $_SESSION['username']=$user['uname'];
                    // $_SESSION['zipcode']=$user['zip'];
                    // $_SESSION['phone']=$user['phoneno'];
                    // $_SESSION['address']=$user['add'];
                    // $_SESSION['country']=$user['ucountry'];

                }
            
                
            ?>
               
<!--              As the log in is sucessful it will take the user to the home.php page-->
                <script>location.assign('adminhome.php')</script>;
           <?php
                
            }
            else{
                //login unsucessful so it will take the user to the login.php page
                 ?>
          <script>location.assign('adminlogin.php')</script>
            <?php
            }
           
            
            
        }
        catch (PDOException $ex){
           ?>
<!--              As the database throws an exception it will take the user to the login page-->
          <script>location.assign('adminlogin.php')</script>
            <?php
        }
}
    else{
        //otherwise
        ?>
        <script>location.assign('adminlogin.php')</script>
        <?php
    }
    }

else{
    //we won't provide service
    
   echo "<script>location.assign('adminlogin.php')</script>";
}
?>