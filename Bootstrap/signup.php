<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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

        .foot {
            background-color: #343a40;
            color: whitesmoke;
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        .foot p {
            margin: 0;
            padding: 5px;
        }


        .form-group {
            margin: 0;
        }

        .form-control {
            font-size: 12px;
        }

        h4 {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    
    
    <?php

        include 'common.php';

        if(isset($_POST['submit']))
            {
        
                $name=mysqli_real_escape_string($con, $_POST['name']);
                $email=mysqli_real_escape_string($con, $_POST['email']);
                $contact=mysqli_real_escape_string($con, $_POST['contact']);
                $password=mysqli_real_escape_string($con, $_POST['password']);
                $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);

                $pass=password_hash($password, PASSWORD_BCRYPT);
                $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

                $emailquery= "select * from users where email='$email' ";
                $query=mysqli_query($con,$emailquery);

                $emailcount=mysqli_num_rows($query);

            if($emailcount>0){
                ?>
                <script>
                alert("email already exists");
            </script>
            <?php
            }else{
                if($password === $cpassword){

                    $insertquery="insert into users(name,email,contact,password,cpassword) 
                    values('$name','$email','$contact','$pass','$cpass')";

                    
                    $iquery=mysqli_query($con, $insertquery);

                    if($iquery){
                        ?>
                    <script>
                        alert("uhuuu! Inserted");
                    </script>
                    <?php
                    }else{
                        ?>
                    <script>
                        alert("Not inserted");
                    </script>
                    <?php
                    } 

                }else{
                    ?>
                    <script>
                        alert("password not matched");
                    </script>
                    <?php

                 
                }
                
                
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
                       
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <form method="POST" action="products.php">
        <div class="container p-5">

            <div class="form-group row d-flex justify-content-center">
                <div class="col-4">
                    <label for="Inputname">
                        <h4>SIGN UP</h4>
                    </label>
                    <input type="text" class="form-control inputsm" id="Inputname" placeholder="Name" 
                    name="name" required>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-4">
                    <label for="Inputemail"></label>
                    <input type="email" name="email" class="form-control inputsm" id="Inputemail"
                        placeholder="Email" required>

                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-4">
                    <label for="Inputcontact"></label>
                    <input type="text" class="form-control inputsm" id="Inputcontact"
                        placeholder="Contact" name="contact" required>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-4">
                    <label for="Inputpassword"></label>
                    <input type="password" class="form-control inputsm" id="Inputpassword"
                     placeholder="Password" name="password" required>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-4">
                    <label for="Inputcpassword"></label>
                    <input type="password" class="form-control inputsm" id="Inputcpassword"
                     placeholder="Re-enter password" name="cpassword" required>
                     <button type="submit" name="submit" class="btn btn-primary btn-sm mt-4 ">Submit</button>
                </div>
            </div>
           
        </div>

    </form>


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