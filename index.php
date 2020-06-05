<?php
require_once("createDb.php");
require_once("component.php");
session_start();

//Instance of createDb class bellow.

$database = new createDb("productdb","producttb","localhost","root","");


if (isset($_POST['add'])) {

    if (isset($_SESSION['cart'])) {
         //Check if the product already in session.
         $array_column_id = array_column($_SESSION['cart'],'product_id');
         if (in_array($_POST['product_id'],$array_column_id)) {
             echo'<script>alert("product is already in the cart");</script>';
             echo'<script>window.location="index.php";</script>';
         } else {
             $count = count($_SESSION['cart']);
             $items = array('product_id'=> $_POST['product_id']);
             $_SESSION['cart'][$count] = $items;
         }
         

         
        
        
    } else {

        //Storing all data in an arrry so i can use letter all of them together.
        $items= array('product_id'=> $_POST['product_id']);
        // Creating new SESSION variable.
        $_SESSION['cart'][0] = $items;


    }
    $test = count($_SESSION['cart']);
    print_r($test);
}

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

    <title>Title</title>
</head>
<body>
<div class="container">
    <div class="row text-center py-5">
      <?php

     $con=$database->dblink();
     $result = "SELECT * FROM producttb";
     $result1=mysqli_query($con,$result);
     $num=mysqli_num_rows($result1);
     if ($num>0) {
         while($rows = mysqli_fetch_assoc($result1)){
            card($rows['product_image'],$rows['product_name'],$rows['product_price'],$rows['id']);
         }
     }
    
    

           
          
    
        
       
      ?>
        
    
      
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