<?php

session_start();
session_unset();
session_destroy();
header('location:index_1.php');

?>
