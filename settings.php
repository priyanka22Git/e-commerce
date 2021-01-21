<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin-top: 95px;
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

        .change {
            margin-top: 20px;
        }
        .form-group {
            margin: 0;
        }
        .form-control {
            font-size: 12px;
        }
        h5{
            margin-bottom:0;
        }
        
    </style>
</head>

<body>
    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="bootstrap.html">Lifestyle Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="cart.php"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="settings.php"><i class="fas fa-sign-in-alt"></i>Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <form>
            <div class="container ">
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-4">
                        <label for="email">
                            <h5>Change Password</h5>
                        </label>
                        <input type="email" class="form-control" placeholder="Old Password" id="email">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-4">
                        <label for="pwd"></label>
                        <input type="password" class="form-control" placeholder="New password" id="pwd">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-4">
                        <label for="pwd"></label>
                        <input type="password" class="form-control" placeholder="Re-type New Password" id="pwd">

                        <button type="change" class="change  btn-sm btn btn-primary">Change</button>
                    </div>
                </div>

            </div>
        </form>

    </header>
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