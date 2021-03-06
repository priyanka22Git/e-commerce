<?php

session_start();
if(!isset($_SESSION['name'])) {
    header('location:login.php');
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>
<style>
    .fas {
        margin-right: 3px;
    }

    .jumbo {
        margin-top: 90px;
    }

    .jumbo h1 {

        font-size: 50px;

    }

    .col-lg-3 {
        margin-bottom: 40px;
    }

    .foot {
        background-color: #343a40;
        color: whitesmoke;
    }

    .foot p {
        margin: 0;
    }

    .nav-item {
        margin-right: 5px;
    }

    .card img {
        min-height: 148px;
    }
    
</style>

<body>

    <?php
   include 'common.php';
    ?>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="cart.php"><i class="fas fa-home"></i>Home</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i>Logout</a>
                    </li>
                </ul>
                <div>
                    <button class=" btn btn-sm btn-outline-success"><?php echo $_SESSION['name']; ?></button>
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbo container ">
        <div class="jumbotron">
            <div class="container">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p class="text-muted">We have the best cameras, watches and shirts for you. No need to
                    hunt around. We
                    have all in one
                    place.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class=" text-center card-deck">
            <div class="row">
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon EOS</h5>
                                <p class="card-text">Price:Rs 36000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Canon EOS">
                                <input type="hidden" name="Price" value="36000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nikon DSLR</h5>
                                <p class="card-text">Price:Rs 40000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Sony DSLR">
                                <input type="hidden" name="Price" value="40000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sony DSLR</h5>
                                <p class="card-text">Price:Rs 50000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Canon EOS">
                                <input type="hidden" name="Price" value="36000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Olympus DSLR</h5>
                                <p class="card-text">Price:Rs 80000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Canon EOS">
                                <input type="hidden" name="Price" value="36000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">

                            <img src="images/9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Titan Model#301</h5>
                                <p class="card-text">Price:Rs 13000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Canon EOS">
                                <input type="hidden" name="Price" value="36000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/10.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Titan Model#201</h5>
                                <p class="card-text">Price:Rs3000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Canon EOS">
                                <input type="hidden" name="Price" value="36000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/11.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">HMT Milan</h5>
                                <p class="card-text">Price:Rs 8000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Canon EOS">
                                <input type="hidden" name="Price" value="36000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/12.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Faber Luba #111</h5>
                                <p class="card-text">Price:Rs 18000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Canon EOS">
                                <input type="hidden" name="Price" value="36000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/8.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">H&W</h5>
                                <p class="card-text">Price:Rs 800.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="H&W">
                                <input type="hidden" name="Price" value="800">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Luis Phil</h5>
                                <p class="card-text">Price:Rs 1000.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Luis Phil">
                                <input type="hidden" name="Price" value="1000">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/13.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">John Zok</h5>
                                <p class="card-text">Price:Rs 1500.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="John Zok">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                        <div class="card p-1">
                            <img src="images/14.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jhalsani</h5>
                                <p class="card-text">Price:Rs 1300.00</p>
                                <button type=submit name="add_to_cart" class="btn btn-info btn-sm ">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Jhalsani">
                                <input type="hidden" name="Price" value="1300">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="foot">
        <div class="container text-center">
            <p> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>

</html>
