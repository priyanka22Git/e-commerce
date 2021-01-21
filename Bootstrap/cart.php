<?php
session_start();
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />


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

        .table {
            width: 40%;
            margin-top: 60px;
        }
        .cbtn{
            margin-top:8px;
        }
        .total_table{
            margin-right:20px;
        }
    </style>
</head>

<body>
<?php
    include 'common.php';
    $query= "SELECT  * FROM items ORDER BY id ASC";
    $result=mysqli_query($con,$query);
    
    if(mysqli_num_rows>0){
        while($row=mysqli_fetch_array($result))
        {
        ?>
        }
    }

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
                        <a class="nav-link" href="logout.php"><i class="fas fa-shopping-cart"></i>Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total=0;
                if(isset($_SESSION['cart']))
                {
                foreach($_SESSION['cart'] as $key=> $value)
                {
                 $total=$total+$value['Price'];
                echo "
                <tr>
                    <td>1</td>
                    <td>$value[Item_Name]</td>
                    <td>$value[Price]</td>
                    <td>
                    <form method='POST'> <button name='remove_item' class='btn btn-sm btn-outline-danger'> Remove </button>
                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                    </form>
                    </td>
                </tr>
                ";
                }
            }
            ?>
            </tbody>
        </table>
    </div>

    <div class=" container">
            <div class="border d-flex justify-content-center bg-ligt rounded p-4">
                <h6>Total:  <?php echo $total ?> </h6>
            
                <form>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Cash On Delivery
                        </label>
                    </div>
                
                    <a href="success.php" class='btn btn-sm btn-info'> Confirm Order</a>
                </form>
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