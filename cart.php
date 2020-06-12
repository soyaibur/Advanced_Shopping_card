<?php
session_start();
require_once("createDb.php");
require_once("component.php");


//Creating instance for database line.
$database = new createDb("productdb","producttb","localhost","root","");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--font-->

    <!--Main CSS-->
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap CSS link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!--CSS for Responsive-->
    <link rel="stylesheet" href="assets/responsive.css">

    <title>My Cart List</title>
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-7">
                <div class="cart-list">
                    <h3>My Cart</h3>
                    <hr>
                      <?php
                       
                         $product_id = array_column($_SESSION['cart'],'product_id');
                         $con = $database->dblink();
                         $result = mysqli_query($con,"SELECT * FROM producttb");


                         while ($rows = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $key) {
                                if ($key == $rows['id']) {
                                    echo cartElement($rows['product_image'],$rows['product_name'],$rows['product_price']);
                                }
                            }
                         }

                         



                           /*  while($rows = mysqli_fetch_assoc($result)){
                                 
                             }
                         */

                         
                         if ($result) {
                               echo "ysah";
                         }
                         
                         
                         
                         

                          
                      ?>
                </div>
    
            </div>
        </div>
    </div>
   

          

    <!--Main Jquery js-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--Main bootstrap js-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Masonary js-->
    <script src="assets/js/masonry.min.js"></script>
    <!--Owl carousel js-->
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <!--fontAwesome file-->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    
    <!--main js file-->
    <script src="assets/js/main.js"></script>
    
   
 
 </body>
 </html>
