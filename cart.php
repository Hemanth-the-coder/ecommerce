<?php

require 'commom.php';


$id=$_SESSION['id'];
$cart_query="SELECT it.id , Name, category, Status ,Price FROM customers_products cp INNER JOIN items it ON cp.product_id=it.id WHERE customer_id='$id'";
$cart_result= mysqli_query($con,$cart_query);
$total_rows= mysqli_num_rows($cart_result);
$total_price = 0;
// $id = mysqli_fetch_array($cart_result)[0];

?>
<html>
    <head>
        <title>Cart</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: grey">
      <?php include "header.php" ?>
        <div class="container">
            <div class="jumbotron">
                <center>

                    <h1>Your Orders </h1>
                </center>
            </div>
        </div>
        <div class="container">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Cancel Order</th>
                    </tr>
                    <?php while($rows= mysqli_fetch_array($cart_result)) {?>
                    <tr> 
                        <td><?php echo $rows['1'] ;?></td>
                         <td><?php echo $rows['2'] ;?></td>
                          <td><?php echo $rows['3'] ;?></td>
                          <td><?php echo $rows['4'] ;?></td>
                          <?php $id1 = $rows['0'];?>
                          <td><?php echo "<a href='cart_delete_t.php?id={$id1}' class='btn btn-warning'>Remove</a>"?></td>
                          <?php 
                    $total_price = $total_price+$rows['4']
                    ?>


                    


</tr>
<?php }?>
<tr>

    <td>The final amount : <?php echo $total_price ?>
     </td> 
</tr>



                 


                   
                </tbody>
                
            </table>
<?php
$_SESSION['price'] = $total_price;
 ?>
        </div>
            <center>
   <?php echo"<a href='shipping.php?change=0&price={$total_price}' class='btn btn-md
btn-success'>Proceed</a>"?>
    </center>
    </body>
</html>
