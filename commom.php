<?php

$con= mysqli_connect("localhost", "root","", "life store");
if(!isset($_SESSION['id'])){
        session_start();
    }
        
