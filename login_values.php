<?php
include 'commom.php';
$email=$_POST['email'];
$Password=$_POST['password'];
$login_select_query="SELECT id FROM customers WHERE Email='$email' && Password='$Password'";
$login_select_result=mysqli_query($con,$login_select_query);
$total_rows= mysqli_num_rows($login_select_result);
if($total_rows==0){
    header('location:login.php?password_error=invalid details');
   
}
else{
    $array=mysqli_fetch_array($login_select_result);
    $_SESSION['id']=$array['id'];
  header("location:product.php");
       
   

}



