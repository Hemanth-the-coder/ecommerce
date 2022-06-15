<?php
include 'commom.php';
if(isset($_GET['id'])){
$id=$_SESSION['id'];

$pid=$_GET['id'];


$cart_insert_query="INSERT INTO customers_products(customer_id,product_id,Status) VALUES ('$id','$pid','added to cart')";
    $cart_insert_result=mysqli_query($con,$cart_insert_query)
            or die(mysqli_error($con));
 header("location:product.php");
 
}
   

  

