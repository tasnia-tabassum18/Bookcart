<?php
session_start();

if(
        isset($_SESSION['username'])
    &&  !empty($_SESSION['username'])
){
  
     if(
              isset($_POST['uname'])
          && !empty($_POST['uname'])
      ){
        
        $uname=$_POST['uname'];
        
        $link = mysqli_connect("localhost","root","","bookcart");

        if($link === false){
            die("Error: Could not connect.".mysqli_connect_error());
        }
        
        $sql_1 = "DELETE FROM user_t WHERE username='$uname'";
        // $sql_2 = "SELECT count(*) as totalcount FROM  contact_t";
        
        $result = $link->query($sql_1);
        // $result2 = $link->query($sql_2);
        
        
        mysqli_close($link);
        ?>
        <script>location.assign('adminupdateuser.php')</script>
    <?php
  
}
    else{
        ?>
        <script>location.assign('adminlogin.php')</script>
    <?php
    }
}
