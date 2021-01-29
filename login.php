<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin-top: 70px;
        }

        
    </style>
</head>

<body>
    <?php

    include 'common.php';

    if(isset($_POST['submit'])){
        $email= $_POST['email'];
        $password=$_POST['password'];

        $emailsearch= "select * from users where email='$email'";
        $query=mysqli_query($con,$emailsearch);
        
        $emailcount= mysqli_num_rows($query);

        if($emailcount){
            $emailpass=mysqli_fetch_assoc($query);
            $dbpass= $emailpass['password'];
            $_SESSION['name']=$emailpass['name'];
            $passdecode=password_verify($password,$dbpass);

            if($passdecode){
                ?>
                <script>
                    alert("login successful");
                </script>
                
                <?php
                header('location:index.php');
            }else{
                ?>
                <script>
                    alert("Incorrect password");
                </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("Invalid Email");
                </script>
                <?php
            
            
        }

    }

    ?>

    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php"><i class="fas fa-sign-in-alt"></i>Sign up</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <div class="logincard container  d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 mb-4">

            <div class="card">
                <div class="card-header  bg-primary text-white ">
                    <h5>LOGIN</h5>

                </div>
                <div class="card-body">
                    <p class="text-danger"><i>Login to make a purchase</i></p>

                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd"></label>
                            <input type="password" name="password" class="form-control" placeholder="Password" id="pwd">
                        </div>

                        <button type="submit" name="submit" class=" btn btn-primary btn-sm">Login</button>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Don't have an account? <a href="signup.php">Register </a>
                    <a href="settings.php">Forgotten Password</a></p>
                    
                </div>
            </div>

        </div>
    </div>

  <?php 
  include 'footer.php';
  ?>

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
