<?php

$con= mysqli_connect("localhost", "root","", "life_store");
if(!isset($_SESSION['id'])){
        session_start();
    }
?>
        
