<?php 
include 'commom.php';
?>

<html>
    <head>
        <title>Sign-up</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="websitedesigner.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
   
    </head>
    
    <body style="background-color: scrollbar">
    
     <div class="container">
            
             <div class="row row-style" style="margin-top: 1px;">
                <div class="col-xs-6">
                 <div class="jumbotron" style="margin-top: 11px;margin-bottom: 40px;">
                     <center>
                            <h3> Hurry! Sign up to avail amazing discounts</h3>
                        </center>
                        
                    </div>
                <img src="websiteimages/11.jpg" class="img-responsive img-thumbnail" style="margin-top: 0px;">
                </div>
                <div class="col-xs-6">
              <div class="panel panel-warning" style="margin-top: 11px;">
                    <div class="panel-heading">
                        <h1>Sign-Up</h1>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"> Sign up to create your account</p>
                        <form method="POST" action="signup_values.php">
                            <div class="form-group">
                                Email:<input type="email" name="Email" class="form-control" required="true" >
                    </div>
                                 <div class="form-group">
                                First Name:<input type="text" name="firstname" class="form-control">
                    </div>
                                 <div class="form-group">
                                Last Name:<input type="text" name="lastname"  class="form-control">
                    </div>
                                 <div class="form-group">
                                     Password:<input type="password" name="password" placeholder="Choose a strong password of atleast 8 letters  and 2 symbols" class="form-control">
                    </div>
                                 <div class="form-group">
                                     Phone:<input type="number" name="phone" class="form-control">
                    </div>
                                 <div class="form-group">
                                Country:<input type="text" name="country" class="form-control">
                    </div>
                           
                                
                       
                            <input type="submit" class="btn btn-danger" value="Submit">
                        </form>
                </div>
            </div>
            </div>
        </div>
        </div>
      
        
            
    </body>
</html>

