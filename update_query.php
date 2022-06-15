<?php

require 'commom.php';
$uid=$_SESSION['id'];
$curr_password=$_POST['cpassword'];
$new_password=$_POST['npassword'];
$update_select_query="SELECT id FROM customers WHERE password='$curr_password'";
        $update_check_password= mysqli_query($con, $update_select_query)
                or die(mysqli_error($con));
        $num_of_rows=mysqli_num_rows($update_check_password);
        if($num_of_rows==0)
        {
            header("location:update.php?password_error=enter the correct password");
        }
        else{
$update_query="UPDATE customers SET Password='$new_password' WHERE id='$uid'";
$update_run_query= mysqli_query($con, $update_query)
        or die(mysqli_error($con));
header("location:product.php");
        }
