<?php

require 'commom.php';


$id=$_SESSION['id'];
$cart_query="SELECT Name, category, Status FROM customers_products cp INNER JOIN items it ON cp.product_id=it.id WHERE customer_id='$id'";
$cart_result= mysqli_query($con,$cart_query);
$total_rows= mysqli_num_rows($cart_result);


?>
<html>
    <head>
        <title>Cart</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: peachpuff">
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
                                <li><a href="update.php"><span class="glyphicon glyphicon-cog"> Setting</span></a></li>
                                <li><a href="index.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1>Your Orders </h1>
            </div>
        </div>
        <div class="container">
            <table class="table table-hover table-border">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Cancel</th>
                    </tr>
                    <?php while($rows= mysqli_fetch_array($cart_result)) {?>
                    <tr>
                       
                        <td><?php echo $rows['0'] ;?></td>
                         <td><?php echo $rows['1'] ;?></td>
                          <td><?php echo $rows['2'] ;?></td>
                         
                    </tr>
                    <?php }?>
                   
                </tbody>
                
            </table>
            
        </div>
    </body>
</html>
