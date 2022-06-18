<?php 
include 'commom.php';
$id=$_SESSION['id'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$country=$_POST['country'];
$price= $_GET['price'];
$shipping_insert = "INSERT INTO `shipping`(`cust_id`, `Email`, `firstname`, `lastname`, `Address`, `contactNumber`, `pincode`, `City`, `Country`) VALUES ('$id','$email','$firstname','$lastname','$address','$phone','$pincode','$city
','$country')";
$shipping_insert_result=mysqli_query($con,$shipping_insert)
or die(mysqli_error($con));
$_SESSION['price'] = $price;
header("location:payment.php");

?>