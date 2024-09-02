<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="./assets/images/logo/fav-icon.png" type="image/x-icon">

  <!-- fonts -->
  <link rel="stylesheet" href="./assets/css/font.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="./assets/css/all.min.css">

  <!-- bootstrap -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

  <!-- Css -->
  <link rel="stylesheet" href="./assets/css/product.css">



</head>

<body class="">
  <header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logo">
                    <a href="#">
                        <img src="./assets/images/home/logo/logo.png" alt="Logo">
                    </a>
                </div>
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./product.php">All Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./menu.php">Menu</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link" href="#">About Us</a>
                            <ul class="dropdown-menu-1">
                                <hr>
                                <li>
                                    <a class="dropdown-item" href="./about.php">About Us</a>
                                </li>
                                <hr>
                                <li>
                                    <a class="dropdown-item" href="#">Our Chefs</a>
                                </li>
                                <hr>
                            </ul>
                        </li>
                    </ul>

                    <ul class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <li class="nav-item ms-auto">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Log In</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
  <!-- product -->
  <section id="product-cards" data-aos="fade-up" data-aos-duration="1500">
    <div class="container-lg text-center">
      <hr><hr>
      <h1>All Product</h1>
      <div class="row items-container mt-4 mb-4" style="margin-top:30px;">

       


      </div>
    </div>
  </section>

  <script src="./script/items.js"></script>
  <script src=".\script\pphproduct.js"></script>
</body>

</html>


