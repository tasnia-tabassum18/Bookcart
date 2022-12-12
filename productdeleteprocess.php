<?php
session_start();

if(
        isset($_SESSION['username'])
    &&  !empty($_SESSION['username'])
){
    ///already logged in
    if(
            isset($_GET['bookid'])
        && !empty($_GET['bookid'])
    ){
        
        $deleteprouctid=$_GET['bookid'];
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            //removing the file from the server productimage folder
            $sqlquerystring="SELECT * FROM book_t WHERE bookid='$deleteprouctid'";
            
            $returnobj=$conn->query($sqlquerystring);
            $fileimagepath=$returnobj->fetchAll()[0]['imagepath'];
            
            print_r($fileimagepath);
            unlink($fileimagepath); ///unlink function will delete the file
            
            
            //deleting the database row
            $sqlquerystring="DELETE FROM book_t WHERE bookid='$deleteprouctid'";
            $conn->exec($sqlquerystring);
            
            ?>
                <script>location.assign('productinfo.php')</script>
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
            <script>location.assign('adminupdateuser.php')</script>
        <?php
    }
}
else{
    ?>
        <script>location.assign('adminlogin.php')</script>
    <?php
}

?>