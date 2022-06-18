<?php
include 'commom.php';
if(isset($_GET['id']))
{
    $cid=$_GET['id'];
    echo "1223";
    $costi=$_SESSION['id'];
    $delete_query="DELETE FROM customers_products WHERE product_id='$cid' AND customer_id='$costi' LIMIT 1";
        $delete_result=mysqli_query($con,$delete_query)
                or die(mysqli_error($con));
       header("location:cart.php");
}