<?php
include 'commom.php';
$email=$_POST['Email'];

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$signup_insert_query="INSERT INTO `customers`( `email`, `First_name`, `Last_name`, `Password`, `Phone`, `Country`) VALUES ('$email','$firstname','$lastname','$password','$phone','$country')";
$signup_insert_result=mysqli_query($con,$signup_insert_query)
        or die(mysqli_error($con));

$_SESSION['id']= mysqli_insert_id($con);
header("location:product.php");
