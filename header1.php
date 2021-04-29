<header id="header">
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a href="index.php" class="navbar-brand">
    <h3 class="px-5">
    <i class="fas fa-shopping-basket"></i>Shollydrew
    </h3>
    </a>
    <button class="navbar-toogler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-tooggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="mr-auto"></div>
    <div class="navbar-nav"></div>
    <a href="cart1.php" class="nav-item nav-link active">
    <h5 class="px-5 cart">
    <i class="fas fa-shopping-cart"></i> Cart
    <?php 
    if(isset($_SESSION['cart'])) {
        $count= count($_SESSION['cart']);
            echo "<span class=\"text-warning bg-light\" id=\"cart_count\">$count</span>";       # code...
    }else{
        echo"<span class=\"text-warning bg-light\" id=\"cart_count\">0</span>";
    } ?>
    </h5>
    </a>

    </div>
</nav><nav class="main-navbar">
            <div class="container">
                <!-- menu -->
                    
                <ul class="main-menu">
                    <li><a class="nav-link " href="signup.php">Sign up</a> </li> 
                   <li> <a class="nav-link" href="login.php">Login</a></li>
                    <li><a href="#">Shoes</a>
                        <ul class="sub-menu">
                            <li><a href="#">Sneakers</a></li>
                            <li><a href="#">Sandals</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                            <li><a href="#">Boots</a></li>
                            <li><a href="#">Flip Flops</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="./index1.php">Product Page</a></li>
                            <li><a href="./cart1.php">Cart Page</a></li>
                            <li><a href="./checkout.php">Checkout Page</a></li>
                            <li><a href="./contact.php">Contact Page</a></li>
                        </ul>
                    </li>
                 
                </ul>
            </div>
        </nav>

</header>