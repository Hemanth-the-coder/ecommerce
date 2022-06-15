<?php
include 'commom.php';
if(isset($_GET['id']))
{
    $cid=$_GET['id'];
    $costi=$_SESSION['id'];
    $delete_query="DELETE FROM customers_products WHERE product_id='$cid' AND customer_id='$costi'";
        $delete_result=mysqli_query($con,$delete_query)
                or die(mysqli_error($con));
       header("location:product.php");
}

