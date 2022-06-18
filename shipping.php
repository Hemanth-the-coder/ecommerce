<?php  
include 'commom.php';
?>
<?php
include 'header.php';
$price= $_GET['price'];
?>
<html>

    <head>
        <title>Shipping_details</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="websitedesigner.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
   
    </head>
    <?php
    $id = $_SESSION['id'];
    $check_query = "SELECT * FROM `shipping` WHERE cust_id='$id'";
    $check_query_result = mysqli_num_rows(mysqli_query($con,$check_query));
    $check_result = mysqli_query($con,$check_query);
    $rows = mysqli_fetch_assoc($check_result);
    $change = $_GET['change'];
    if($check_query_result!=0 and $change==0){?>
            <div class="col-xs-6 extra">
                   <h1>The product will arrive at </h1>
                   <p>Address : <?php echo $rows['Address'];?></p>
                   <p>City : <?php echo $rows['City'];?></p>
                   <p>Country : <?php echo $rows['Country'];?></p>
                   <div>
                       <?php echo"<a href='shipping.php?change=1&price={$price}' class='btn btn-md
           btn-success'>Change Shipping Address</a>"?>
           <?php echo"<a href='payment.php?change=0&price={$price}' class='btn btn-md
btn-success'>Proceed to pay</a>"?>
                   </div>
            </div>
    


    <?php }  else {
     ?>
<div class="col-xs-6">


 <div class="panel panel-warning" style="margin-top: 11px;">
                    <div class="panel-heading">
                        <h1>Shipping Address</h1>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"> Please fill in the details</p>
                        <form method="POST" action="shipping_values.php">
                            <div class="form-group">
                            Email:<input type="email" name="email" class="form-control" required="true" >
                    </div>
                                 <div class="form-group">
                                First Name:<input type="text" name="firstname" class="form-control">
                    </div>
                                 <div class="form-group">
                                Last Name:<input type="text" name="lastname"  class="form-control">
                    </div>
                                 <div class="form-group">
                                     Address:<input type="text" name="address" class="form-control">
                    </div>
                                 <div class="form-group">
                                     Phone:<input type="number" name="phone" class="form-control">
                    </div>
                                 <div class="form-group">
                                Pincode<input type="text" name="pincode" class="form-control">
                    </div>
                    <div class="form-group">
                                City<input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                                Country<input type="text" name="country" class="form-control">
                    </div>
                                
                       
                            <input type="submit" class="btn btn-success" value="Proceed to pay">
                        </form>
                </div>
            </div>
            </div>
            <?php }?>
            <div class="col-xs-6">
                

                    <img class="shippingimg" src="websiteimages/shipping.jpg" alt="">
                
            </div>
            
</html>