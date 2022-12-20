<?php

include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/bookicon.png">


    <title>Bookcart</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style2.css">





</head>


<body>

<?php include 'header.php'; ?>
    <div id="filters">
        <span>Shop by Category &nbsp; </span>
        <select name="fetchval" id="fetchval">
            <option value ="" disabled="" selected="" >Filter by</option>
            <option value="Fiction">Fiction</option>
            <option value="Romance">Romance</option>
            <option value="Thriller">Thriller</option>
        </select >   


    </div>

    <div class = "container">
        <table class="table">
            <thead>
                <tr>
                  
                    <th> Name </th>
                    <th> Genre </th>
                    <th> Image</th>

                </tr>
            
            </thead>
            <tbody>
                    <?php

                $query = "SELECT * FROM filter";
                $r = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($r)){               
                    ?>
                    <tr>
                    
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['genre'] ?></td>
                        <td><img src="uploaded_img/<?php echo $row['image'] ?> " class="img-responsive img-thumbnail" width="150" ></td>
                    
                        
                        
                    </tr>
                    <?php
                }   
                    ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">

        $(document).ready(function(){
            $("#fetchval").on('change', function(){
                var value = $(this).val();

                $.ajax({
                    url:"fetch.php",
                    type: "POST",
                    data:'request=' + value,
                    beforeSend:function(){
                        $(".container").html("<span>Loading.......</span>");
                    },
                    success:function(data){
                        $(".container").html(data);
                    }

            
                });

            });
        });


    </script>

</body>
</html>



