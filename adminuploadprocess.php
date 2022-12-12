 <?php
session_start();

if(
        isset($_SESSION['username'])
    &&  !empty($_SESSION['username'])
) 

 {  //if( 
//     isset($_POST['bname'])
//     &&  isset($_POST['bauthor'])
//     &&  isset($_POST['bprice'])
//     &&  isset($_POST['bpubdate'])
//     &&  isset($_POST['bdesc'])
//     &&  isset($_FILES['bimagepath'])
//     &&  isset($_POST['bgenre'])
//     &&  isset($_POST['bdiscount'])
    
//     &&  !empty($_POST['bname'])
//     &&  !empty($_POST['bauthor'])
//     &&  !empty($_POST['bprice'])
//     &&  !empty($_POST['bpubdate'])
//     &&  !empty($_POST['bdesc'])
//     &&  !empty($_FILES['bimagepath'])
//     &&  !empty($_POST['bgenre'])
//     &&  !empty($_POST['bdiscount'])
//     {
        
        // print_r($_FILES['bimagepath']);
        $name=$_POST['tittle'];
        $author=($_POST['author']);
        $pubdate=($_POST['pub']);
        $desc=($_POST['des']);
        $genre=($_POST['gen']);
        $discount=($_POST['dis']);
        $price=($_POST['price']);
      $username=$_SESSION['username'];
      
        
        ///received all valid data
        
        ///file upload section
         $received_file=$_FILES['image'];
         $filename=$received_file['name'];
         print_r($received_file);
         $tmp_file_path=$received_file['tmp_name'];
        $to="bookpicture/$filename";
        
        
        
        ///database section
         try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=bookcart;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            $sqlquerystring="INSERT INTO book_t (bookid,booktitle,author,price,publicationdate,description,imageUrl,genre,discount) 
            VALUES(NULL,'$name','$author','$price','$pubdate','$desc','$to','$genre','$discount')";
            //database code execute, default : warning generate
            // $sqlquerystring="UPDATE user set profile_pic_path='$to' WHERE user_email='$email'";
             
            
           $conn->exec($sqlquerystring);
             
             
            ///uploading the file to our server folder
            move_uploaded_file($tmp_file_path,$to); 
             
             ?>
                <script>
                    alert("Product uploaded sucessfully");
                    location.assign('productinfo.php')
                  </script>
                  <?php
          
        }
        catch (PDOException $ex){
            echo "INSIDE CATCH";
        
             ?> 
            <script>
                alert("Oops! Could not upload product");
                location.assign('productinfo.php')
           </script>
            <?php
            
        }


    }
    else{
?>
    
        <script>location.assign('adminlogin.php')</script>
        <?php


    }

?>