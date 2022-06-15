<?php
require 'commom.php';
?>
<html>
    <head>
        <title>
            Update
        </title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: plum">
        <nav>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                <div class="navbar-header">
                    
                        <a href="#" class="navbar-brand">LifeStyle Store</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                </div>
                        <div class="navbar-collapse" id="mynavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="product.php"><span class="glyphicon glyphicon-shopping-cart"> Back to shopping</span></a></li>
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"> Cart</span></a></li>
                                <li><a href="index_1.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            
        </nav>
       <div class="container" style="margin-top: 120px;">
           <div class="jumbotron">
               <center>
               CHANGE PASSWORD ANYTIME ANYWHERE
               </center>
           </div>
            
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Change Password
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="update_query.php">
                                <div class="form-group">
                                    <input type="text" placeholder="current-password" name="cpassword" class="form-control">
                                        <?php
                                if(isset($_GET['password_error'])){
                                    echo $_GET['password_error'];
                                }
                                ?>   
                                </div>
                              
                                <div class="form-group">
                                    <input type="text" placeholder="new-password" name="npassword" class="form-control">
                                </div>
                                
                                <input type="submit" value="Change" class="btn btn-primary">
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
     
    </body>
</html>
