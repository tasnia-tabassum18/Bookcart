<?php
session_start();

        
        // print_r($_FILES['bimagepath']);
        $uname=$_POST['username'];
        $name=$_POST['tittle'];
        $author=($_POST['author']);
        $pubdate=($_POST['pub']);
        $desc=($_POST['des']);
        $genre=($_POST['gen']);
       
        $price=($_POST['price']);
      $username=$_SESSION['username'];
      
        
        ///received all valid data
        
        ///file upload section
         $received_file=$_FILES['image'];
         $filename=$received_file['name'];
         print_r($received_file);
         $tmp_file_path=$received_file['tmp_name'];
        $to="rentpicture/$filename";
        
        
        
        ///database section
         try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $sqlquerystring="INSERT INTO rent_book_t (rent_id,username,r_title,r_author,rentPrice,rentDate,imageUrl,r_genre,r_description) 
            VALUES(NULL,'$uname','$name','$author','$price','$pubdate','$to','$genre','$desc')";
            //database code execute, default : warning generate
            // $sqlquerystring="UPDATE user set profile_pic_path='$to' WHERE user_email='$email'";
             
            
           $conn->exec($sqlquerystring);
             
             
            ///uploading the file to our server folder
            move_uploaded_file($tmp_file_path,$to); 
             
             ?>
                <script>
                    alert("Rent post uploaded sucessfully");
                    location.assign('index2.php')
                  </script>
                  <?php
          
        }
        catch (PDOException $ex){
            echo "INSIDE CATCH";
        
             ?> 
            <script>
                alert("Oops! Could not upload product");
                location.assign('userrentpost.php')
           </script>
            <?php
            
        }


?>