<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$user_registration_query = "insert into users(email, First_name, Last_name, Phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$_SESSION['id'] = mysqli_insert_id($con);
echo "User successfully inserted with id ".$_SESSION['id'];


?>