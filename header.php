
<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Life Store</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
        </div>
      <div class="navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php 
                if(!isset($_SESSION['id'])){
                ?>
            
                <li><a href="signup.php" ><span class="glyphicon glyphicon-user"></span>  Sign up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
                <?php }
                
                else{ 
                    ?>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="update.php">Setting</a></li>
                <li><a href="logout.php">Logout</a><li>
           <?php }?>
            </ul>
        </div>
    </div>
</nav>
   
 
