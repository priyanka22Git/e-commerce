
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>index</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
</head>


<body>

  <section>
    <div class="jumbotron-fluid bg_jumbotron mb-5">
      <div class="banner text-center ">
        <h1>We Sell Lifestyle.</h1>
        <p>Flat 40% OFF on premium brands</p>
        <button type="button" class=" btn btn-danger"> Shop Now </button>
      </div>

    </div>

  </section>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card p-1" style="width: 18rem;">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Cameras</h5>
            <p class="card-text">Choose among the best available in the world</p>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card p-1" style="width: 18rem;">
          <img src="images/8.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Shirts</h5>
            <p class="card-text">Our equisite collection of formal shirts</p>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card p-1" style="width: 18rem;">
          <img src="images/7.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Watches</h5>
            <p class="card-text">Original watches from the best brands</p>
          </div>
        </div>
      </div>

    

    </div>
  </div>

  <?php 
  include 'footer.php';
  ?>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
  integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>