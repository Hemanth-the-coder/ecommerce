<?php
include 'commom.php';
?>

<html> 
    <head>
        <title>Login</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="websitedesigner.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color: buttonface">
  
        <div class="jumbotron">
            <center>
            IF YOU ARE REGISTERED USER THEN LOGIN TO MAKE YOU PURCHASE
            </center>
        </div>
<div class="container">
            <div class="row row-style" style="margin-top: 0px;">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>Login</h1>
                            
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">
                                Login to make purchase</p>
                            <form method="POST" action="login_values.php">
                                <div class="form-group">
                                    Email:<input type="email" class="form-control" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" > 
                            
                        </div>
                                <div class="form-group">
                                    Password:<input type="password" class="form-control" name="password" required="true">
                                   
                                </div>
                                <div class="form-group">
                                 <input type="submit" class="btn btn-primary" value="Submit" >
                          
                                </div>
                         <?php
                         if(isset($_GET['password_error'])){
                             echo $_GET['password_error'];
                         }
                         
                         ?>
                            
                               
                            </form>
                           
                     
                        <div class="panel-footer">
                            <p>Don't have an account?<a href="signup.php">Register</a></p>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
