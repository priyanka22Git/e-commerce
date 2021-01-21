<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

            <?php
            if(isset($_SESSION['email']))
            {
                ?>
                <li class="nav-item ">
                    <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>Cart</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="settings.php"><i class="fas fa-user"></i>Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i>Logout</a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item ">
                    <a class="nav-link" href="signup.php"><i class="fas fa-user"></i>Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
                </li>
            <?php
            }
            ?>
            </ul>

        </div>
    </div>
</nav>