<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    include 'commom.php';
 
   ?>
<html>
    <head>
        <title>products</title>
               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="websitedesigner.css">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color: brown">
        <?php
         include 'header.php';
  ?>
        <div class="container">
            <div class="jumbotron" style="padding-bottom: 5px;padding-top: 5px;">
                <h1>Welcome to our Lifestlye Store</h1>
                <p>
                    We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place
                </p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/1.jpg" alt="cameras" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Cannon
                                EOS</h1>
                            <p>
                               
                           <b>Price</b> Rs 36,000</p>
       <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(1)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
          echo '<a href="cart_delete.php?id=1" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a method="GET" href="cart_insert.php?id=1" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>



                            </center>
                                  
                        </div>
                    </div>
                </div>
                  <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/2.jpg" alt="cameras" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Sony DSLR</h1>
                            <p><b>Price</b> Rs 50,000</p>
                                     <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(2)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
      echo '<a href="cart_delete.php?id=2" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a href="cart_insert.php?id=2" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/3.jpg" alt="cameras" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Sony DSLR</h1>
                            <p><b>Price</b> Rs 40,000</p>
                              <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(3)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 echo '<a href="cart_delete.php?id=3" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a  href="cart_insert.php?id=3" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/4.jpg" alt="cameras" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Olympus DSLR</h1>
                            <p><b>Price</b> Rs 80,000</p>
                          
                                    <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(4)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
      echo '<a href="cart_delete.php?id=4" class="btn btn-warning">Remove</a>';

 } else {
 ?>
<a href="cart_insert.php?id=4" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                
                
            </div>
              <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/13.jpg" alt="Shirts" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Peter England
                                </h1>
                            <p><b>Price</b> Rs 3,600</p>
                                     <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(5)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
          echo '<a href="cart_delete.php?id=5" class="btn btn-warning">Remove</a>';
 
 } else {
 ?>
<a href="cart_insert.php?id=5" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                  <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/6.jpg" alt="Shirts" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Park Avenue</h1>
                            <p><b>Price</b> Rs 5,000</p>
                                    <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(6)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
      echo '<a href="cart_delete.php?id=6" class="btn btn-warning">Remove</a>';

 } else {
 ?>
<a href="cart_insert.php?id=6" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/14.jpg" alt="Shirts" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Zodiac Shirts</h1>
                            <p><b>Price</b> Rs 4,000</p>
                                  <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(7)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 echo '<a href="cart_delete.php?id=7" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a href="cart_insert.php?id=7" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/8.jpg" alt="Shirts" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>US POLO Shirts</h1>
                            <p><b>Price</b> Rs 6,000</p>
                          
                                     <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(8)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 echo '<a href="cart_delete.php?id=8" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a href="cart_insert.php?id=8" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                
                
            </div>
   <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/9.jpg" alt="cameras" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Hublot Watches</h1>
                            <p><b>Price</b> Rs 7,685</p>
                             <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(9)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 echo '<a href="cart_delete.php?id=9" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a href="cart_insert.php?id=9" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                  <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/10.jpg" alt="Watches" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Daniel Klein</h1>
                            <p><b>Price</b> Rs 7,685</p>
                                   <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(10)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 echo '<a href="cart_delete.php?id=10" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a href="cart_insert.php?id=10" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/11.jpg" alt="Watches" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Tommy Hilfiger</h1>
                            <p><b>Price</b> Rs 12,000</p>
                                    <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(11)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 echo '<a href="cart_delete.php?id=11" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a href="cart_insert.php?id=11" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="websiteimages/12.jpg" alt="Watches" class="img-responsive">
                        <div class="caption">
                            <center>
                            <h1>Rolex Watches</h1>
                            <p><b>Price</b> Rs 8,000</p>
                          
                                     <?php if (!isset($_SESSION['id'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added(12)) { //This is same as if(check_if_added_to_cart !=

 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 echo '<a href="cart_delete.php?id=12" class="btn btn-warning">Remove</a>';
 } else {
 ?>
<a href="cart_insert.php?id=12" name="add" value="add" class="btn btn-block
btn-success">Add to cart</a>
 <?php
 }
 }
 ?>

                            </center>
                        </div>
                    </div>
                </div>
                
                
            </div>


        </div>
          <footer>
                <center>
                <p>Copyright © Lifestyle Store. All Rights
Reserved” and “Contact Us: +91 90000 00000</p>
                </center>
            </footer>
            
            
        
    </body>
</html>
<?php

function check_if_added($item_id)
{
    include 'commom.php';
    $id=$_SESSION['id'];
    
    $items_select_query="SELECT * FROM customers_products WHERE product_id='$item_id' AND customer_id = '$id' and
Status='added to cart'";
    $items_result=mysqli_query($con,$items_select_query);
    
    if(mysqli_num_rows($items_result)>=1){
       return TRUE;
        
    }
    else{
        return FALSE;
    }
    
}

?>
