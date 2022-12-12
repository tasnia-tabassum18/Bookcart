<?php
session_start();


if(
    isset($_SESSION['username']) 
    && !empty($_SESSION['username'])
 
    ){  
      

        $updateproductid=$_GET['bookid']; //TODO
        $name=$_POST['tittle'];
        $author=($_POST['author']);
        $pubdate=($_POST['pub']);
        $desc=($_POST['des']);
        $genre=($_POST['gen']);
        $discount=($_POST['dis']);
        $price=($_POST['price']);

        $received_file=$_FILES['image'];
        $filename=$received_file['name'];
        print_r($received_file);
        $tmp_file_path=$received_file['tmp_name'];
       $to="bookpicture/$filename";
       
    
     try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
      
            //database code execute, default : warning generate
           $sqlquerystring="SELECT * From book_t WHERE bookid='$updateproductid' ";
            
         $returnobj=$conn->query($sqlquerystring);
         
         
         
         if(($returnobj->rowCount()==1)){
               // if the new password field empty then this if will be execute 
              
               $query= "UPDATE book_t SET booktitle='$name', author='$author', price='$price',publicationdate='$pubdate',description='$desc',
                                imageUrl='$to', genre='$genre', discount='$disc'
                                 WHERE bookid='$updateproductid' ";
            $conn->exec($query);
                    
                   
         ?>
          <script>
          alert("Book information updated sucessfully");
          
          location.assign('productinfo.php')</script>
        <?php
        }
        else{ 
          ?>
          <script>
          alert("OPPS!Could not update book information");
          
          location.assign('adminhome.php')</script>
          <?php
        }
     
     }
    
    
         catch (PDOException $ex){
           ?>
          <script>location.assign('productinfo.php')</script>
            <?php
        }
    
}

    

else{
    
    // session not start so  user will take back to the log in page
    ?>
  <script>location.assign('adminlogin.php')</script>

<?php
    
}


?>