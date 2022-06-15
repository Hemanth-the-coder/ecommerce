<?php
include 'commom.php';
function check_if_added($con,$item_id)
{
    $customer_id=$_SESSION['id'];
    $items_select_query="SELECT * FROM user_items WHERE item_id='$item_id' AND customer_id ='$customer_id' AND
status='added to cart'";
    $items_result=mysqli_query($con,$items_select_query);
    $total_rows_table= mysqli_num_rows($items_result);
    if($items_result>=1){
       return 1;
        
    }
}

