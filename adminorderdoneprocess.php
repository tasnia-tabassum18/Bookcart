<?php
session_start();

if(
        isset($_SESSION['username'])
    &&  !empty($_SESSION['username'])
){
    ///already logged in
    if(
            isset($_GET['orderid'])
        && !empty($_GET['orderid'])
    ){
        
        $deleteprouctid=$_GET['orderid'];
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            
            
            //deleting the database row
            $sqlquerystring="DELETE FROM order_t WHERE orderid='$deleteprouctid'";
            $conn->exec($sqlquerystring);
            
            ?>
                <script>location.assign('adminvieworder.php')</script>
            <?php
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('adminhome.php')</script>
            <?php
        }
        
    }
    else{
         ?>
            <script>location.assign('adminvieworder.php')</script>
        <?php
    }
}
else{
    ?>
        <script>location.assign('adminlogin.php')</script>
    <?php
}

?>