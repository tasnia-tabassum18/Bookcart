<?php
session_start();

if(
        isset($_SESSION['username'])
    &&  !empty($_SESSION['username'])
){
    
    unset($_SESSION['username']); ///deleting the session stored value
    session_destroy();
    
    ?>
        <script>location.assign('adminlogin.php')</script>
    <?php
}
else{
    ?>
        <script>location.assign('adminlogin.php')</script>
    <?php
}

?>