<?php

@include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/bookicon.png">


  <title>Bookcart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="shopping-cart">

    <?php

        if(isset($_GET['search'])){
            $id=$_GET['id'];
            $conn = mysqli_connect('localhost','root','','shop_db');
            $sql = "SELECT * FROM products WHERE id = '$id'";
            $result= mysqli_query($conn , $sql);
            $row = mysqli_fetch_array($result);
            if($row){
    ?>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th> Image</th>
                <th> Name </th>
                <th> Price </th>

            </tr>
        
        </thead>
        <tbody>
            <tr>
                <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                <td><?php echo $row['name']; ?></td>
                <td>$<?php echo number_format($row['price']); ?>/-</td>
                
                
            </tr>
        </tbody>
    </table>
        
    <?php
            }
            else{
                header('Location:index3.php?Message');
            }
        }



    ?>

</section>

</div>
   

</body>
</html>






















