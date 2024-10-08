<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cake - Bakery</title>
        <link rel="shortcut icon" href="./assets/images/home/logo/fav-icon.png" type="image/x-icon">

        <!-- fonts -->
        <link rel="stylesheet" href="./assets/css/font.css">

        <!-- font awesome -->
        <link rel="stylesheet" href="./assets/css/all.min.css">

        <!-- Slider Css -->
        <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">

        <!-- bootstrap -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

        <!-- Css -->
        <link rel="stylesheet" href="./assets/css/style.css">

    </head>

    <body>

        <!-- Header  -->
        <header>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-2">
                        <div class="logo">
                            <a href="#">
                                <img src="./assets/images/home/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <ul class="collapse navbar-collapse" id="navbarSupportedContent">
                                <li class="nav-item">
                                    <a class="nav-link active" href="./index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./product.php">All Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./menu.php">Menu</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">About Us</a>
                                    <ul class="dropdown-menu-1">
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="./about.php">About Us</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="./ourchefs.php">Our Chefs</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                                <li class="nav-item ms-auto">
                                    <a class="nav-link" href="./service.php">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./offer.php">What We Make</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.php">Contact Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link">Log In</a>
                                    <ul class="dropdown-menu-1">
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="./login.php">User Login</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="./admin-login.php">Admin</a>
                                        </li>
                                        <hr>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main>

            <!-- Banner -->
            <section class="banner">
                <div id="carouselExampleFade" class="carousel Z-n1 slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="slider-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="slider-text">
                                                <h1>Quality Cake ... <br>  with sweet, eggs & breads
                                                </h1>
                                                <p>
                                                    <i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni dolores eos qui ratione</i>
                                                </p>
                                                <a class="btn-1" href="#">See the recipe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <a href="#" class="position-absolute left-btn">
                                        <div class="small-bg-left"></div>
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                </div>
                                <div class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <a href="#" class="position-absolute right-btn">
                                        <div class="small-bg-right"></div>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="slider-text">
                                                <h1>Cake Bakery ... <br>  make delicious products
                                                </h1>
                                                <p>
                                                    <i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni dolores eos qui ratione</i>
                                                </p>
                                                <a class="btn-1" href="#">See the recipe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <a href="#" class="position-absolute left-btn">
                                        <div class="small-bg-left"></div>
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                </div>
                                <div class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <a href="#" class="position-absolute right-btn">
                                        <div class="small-bg-right"></div>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Welcome -->
            <section class="welcome position-relative">
                <div class="container">
                    <div class="welcome-inner">
                        <div class="row">
                            <div class="col-6">
                                <div class="welcome-text">
                                    <h2 class="main-title">Welcome to our Bakery</h2>
                                    <h6 class="pb-3">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur uis autem vel eum.</h6>
                                    <p class="pb-3">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                    <a href="#" class="btn-1">Know more about us</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="welcome-img d-flex justify-content-end">
                                    <img src="./assets/images/home/welcome/welcome.png" alt="Welcome-Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                </div>
            </section>

            <!-- Features -->
            <section class="feature">
                <div class="container">
                    <div class="features">
                        <div class="row pb-5 align-items-center">
                            <div class="col-10">
                                <div class="feature-left">
                                    <h2 class="main-title">Our Featured Cakes</h2>
                                    <h5>Seldolor sit amet consect etur</h5>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="angle-button d-flex justify-content-evenly">
                                    <div class="left-angle swiper-button-prev">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </div>
                                    <div class="right-angle swiper-button-next">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Slider main container -->
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="card pb-3" style="width: 18rem;">
                                            <div class="card-img">
                                                <img src="./assets/images/home/features-cake/feature-cake-1.png" class="card-img-top" alt="feature-cake-1">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4><i>₹899</i></h4>
                                                <h5 class="card-title">Pista Cupcakes</h5>
                                                <a href="#" class="btn text-white" style="background-color: #94c9d9;">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card pb-3" style="width: 18rem;">
                                            <div class="card-img">
                                                <img src="./assets/images/home/features-cake/feature-cake-2.png" class="card-img-top" alt="feature-cake-2">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4><i>₹1299</i></h4>
                                                <h5 class="card-title">Chocolate Cakes</h5>
                                                <a href="#" class="btn text-white" style="background-color: #94c9d9;">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card pb-3" style="width: 18rem;">
                                            <div class="card-img">
                                                <img src="./assets/images/home/features-cake/feature-cake-3.png" class="card-img-top" alt="feature-cake-3">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4><i>₹1399</i></h4>
                                                <h5 class="card-title">Chocolate Cupcakes</h5>
                                                <a href="#" class="btn text-white" style="background-color: #94c9d9;">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card pb-3" style="width: 18rem;">
                                            <div class="card-img">
                                                <img src="./assets/images/home/features-cake/feature-cake-4.png" class="card-img-top" alt="feature-cake-4">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4><i>₹999</i></h4>
                                                <h5 class="card-title">Strawberry Cupcakes</h5>
                                                <a href="#" class="btn text-white" style="background-color: #94c9d9;">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card pb-3" style="width: 18rem;">
                                            <div class="card-img">
                                                <img src="./assets/images/home/features-cake/feature-cake-1.png" class="card-img-top" alt="feature-cake-1">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4><i>₹1499</i></h4>
                                                <h5 class="card-title">Pista Cupcakes</h5>
                                                <a href="#" class="btn text-white" style="background-color: #94c9d9;">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card pb-3" style="width: 18rem;">
                                            <div class="card-img">
                                                <img src="./assets/images/home/features-cake/feature-cake-2.png" class="card-img-top" alt="feature-cake-2">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4><i>₹1349</i></h4>
                                                <h5 class="card-title">Chocolate Cakes</h5>
                                                <a href="#" class="btn text-white" style="background-color: #94c9d9;">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card pb-3" style="width: 18rem;">
                                            <div class="card-img">
                                                <img src="./assets/images/home/features-cake/feature-cake-3.png" class="card-img-top" alt="feature-cake-3">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4><i>₹1299</i></h4>
                                                <h5 class="card-title">Chocolate Cupcakes</h5>
                                                <a href="#" class="btn text-white" style="background-color: #94c9d9;">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card pb-3" style="width: 18rem;">
                                            <div class="card-img">
                                                <img src="./assets/images/home/features-cake/feature-cake-4.png" class="card-img-top" alt="feature-cake-4">
                                            </div>
                                            <div class="card-body text-center">
                                                <h4><i>₹1449</i></h4>
                                                <h5 class="card-title">Strawberry Cupcakes</h5>
                                                <a href="#" class="btn text-white" style="background-color: #94c9d9;">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Special Recipe -->
            <section class="s-recipe d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="recipe d-flex align-items-center justify-content-center">
                                        <div class="recipe-imgr">
                                            <a href="#">
                                                <img src="./assets/images/home/recipies/recipe-1.png?1" alt="recipe-1">
                                            </a>
                                        </div>
                                        <div class="recipe-desc">
                                            <h1>Special Recipe</h1>
                                            <p><i>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</i></p>
                                            <a class="btn-1" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="recipe d-flex align-items-center justify-content-center">
                                        <div class="recipe-img">
                                            <a href="#">
                                                <img src="./assets/images/home/recipies/recipe-1.png?2" alt="recipe-1">
                                            </a>
                                        </div>
                                        <div class="recipe-desc">
                                            <h1>Special Recipe</h1>
                                            <p><i>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</i></p>
                                            <a class="btn-1" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="recipe d-flex align-items-center justify-content-center">
                                        <div class="recipe-img">
                                            <a href="#">
                                                <img src="./assets/images/home/recipies/recipe-1.png?3" alt="recipe-1">
                                            </a>
                                        </div>
                                        <div class="recipe-desc">
                                            <h1>Special Recipe</h1>
                                            <p><i>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</i></p>
                                            <a class="btn-1" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="recipe d-flex align-items-center justify-content-center">
                                        <div class="recipe-img">
                                            <a href="#">
                                                <img src="./assets/images/home/recipies/recipe-1.png?4" alt="recipe-1">
                                            </a>
                                        </div>
                                        <div class="recipe-desc">
                                            <h1>Special Recipe</h1>
                                            <p><i>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</i></p>
                                            <a class="btn-1" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-vertical"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service -->
            <section class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="service-title">
                                <h2 class="main-title">Main Services We Provide</h2>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="service-desc d-flex justify-content-center flex-column">
                                <div class="service-icon">
                                    <img src="./assets/images/home/services/muffin.svg" alt="">
                                </div>
                                <div class="service-text">
                                    <h4>Celebration Cakes</h4>
                                    <p>Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="service-desc d-flex justify-content-center flex-column">
                                <div class="service-icon">
                                    <img src="./assets/images/home/services/cake.svg" alt="">
                                </div>
                                <div class="service-text">
                                    <h4>Celebration Cakes</h4>
                                    <p>Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="service-desc d-flex justify-content-center flex-column">
                                <div class="service-icon">
                                    <img src="./assets/images/home/services/pie.svg" alt="">
                                </div>
                                <div class="service-text">
                                    <h4>Celebration Cakes</h4>
                                    <p>Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Discover Menu -->
            <section class="discover">
                <div class="discover-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="feature-left">
                                    <h2 class="main-title">Discover Menu</h2>
                                    <h5 style="font-weight: 400;">Duis aute irure dolor in reprehenderit voluptate</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-4">
                            <div class="col-6">
                                <div class="discover-item">
                                    <div class="discover-item-desc">
                                        <h4>Double Chocolate Pic</h4>
                                        <div class="discover-item-price d-flex align-items-center justify-content-between pb-3">
                                            <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                            <span>₹188.99</span>
                                        </div>
                                    </div>
                                    <div class="discover-item-desc mt-3">
                                        <h4>Double Chocolate Pic</h4>
                                        <div class="discover-item-price d-flex align-items-center justify-content-between pb-3">
                                            <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                            <span>₹512.99</span>
                                        </div>
                                    </div>
                                    <div class="discover-item-desc mt-3">
                                        <h4>Double Chocolate Pic</h4>
                                        <div class="discover-item-price d-flex align-items-center justify-content-between pb-3">
                                            <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                            <span>₹195.99</span>
                                        </div>
                                    </div>
                                    <div class="discover-item-desc mt-3">
                                        <h4>Double Chocolate Pic</h4>
                                        <div class="discover-item-price d-flex align-items-center justify-content-between pb-3">
                                            <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                            <span>₹245.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="discover-item">
                                    <div class="discover-item-desc">
                                        <h4>Double Chocolate Pic</h4>
                                        <div class="discover-item-price d-flex align-items-center justify-content-between pb-3">
                                            <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                            <span>₹496.99</span>
                                        </div>
                                    </div>
                                    <div class="discover-item-desc mt-3">
                                        <h4>Double Chocolate Pic</h4>
                                        <div class="discover-item-price d-flex align-items-center justify-content-between pb-3">
                                            <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                            <span>₹475.99</span>
                                        </div>
                                    </div>
                                    <div class="discover-item-desc mt-3">
                                        <h4>Double Chocolate Pic</h4>
                                        <div class="discover-item-price d-flex align-items-center justify-content-between pb-3">
                                            <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                            <span>₹785.99</span>
                                        </div>
                                    </div>
                                    <div class="discover-item-desc mt-3">
                                        <h4>Double Chocolate Pic</h4>
                                        <div class="discover-item-price d-flex align-items-center justify-content-between pb-3">
                                            <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                            <span>₹425.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="testimonials">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-7">
                            <div class="testimonial-head d-flex justify-content-between align-items-center">
                                <div class="feature-left">
                                    <h2 class="main-title text-white">What Our Client Says</h2>
                                </div>
                                <div class="testimonial-btn position-relative d-flex column-gap-3">
                                    <div class="testimonial-btn-left">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </div>
                                    <div class="testimonial-btn-right">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-9" style="overflow: hidden;">
                            <!-- Slider main container -->
                            <div class="swiper-1">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper"> 
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="testimonial-desc d-flex align-items-start column-gap-5 text-white  mt-4">
                                        <div class="testimonial-img d-flex align-items-center justify-content-center flex-column position-relative">
                                            <img src="./assets/images/home/clients/client-1.png" alt="Client Image">
                                            <h3>"</h3>
                                        </div>
                                        <div class="testimonial-text ms-4 mt-3">
                                            <p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
                                            <h5>- Robert Joe</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-desc d-flex align-items-start column-gap-5 text-white  mt-4">
                                        <div class="testimonial-img d-flex align-items-center justify-content-center flex-column position-relative">
                                            <img src="./assets/images/home/clients/client-1.png" alt="Client Image">
                                            <h3>"</h3>
                                        </div>
                                        <div class="testimonial-text ms-4 mt-3">
                                            <p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
                                            <h5>- Robert Joe</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-desc d-flex align-items-start column-gap-5 text-white  mt-4">
                                        <div class="testimonial-img d-flex align-items-center justify-content-center flex-column position-relative">
                                            <img src="./assets/images/home/clients/client-1.png" alt="Client Image">
                                            <h3>"</h3>
                                        </div>
                                        <div class="testimonial-text ms-4 mt-3">
                                            <p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
                                            <h5>- Robert Joe</h5>
                                        </div>
                                    </div>
                                </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Chefs -->
            <section class="chefs mb-100">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-3">
                            <div class="feature-left">
                                <h2 class="main-title">Our Chefs</h2>
                                <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion.</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="chef-card text-center">
                                <div class="chef-img">
                                    <img src="./assets/images/home/chefs/chef-1.png" class="img-fluid" alt="Chef Image">
                                    <ul class="d-flex align-items-center justify-content-start column-gap-4">
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-skype"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chef-text text-center">
                                    <h5>Michale Joe</h5>
                                    <p class="m-0"><i>Expert in Cake Making</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="chef-card text-center">
                                <div class="chef-img">
                                    <img src="./assets/images/home/chefs/chef-2.png" alt="Chef Image">
                                    <ul class="d-flex align-items-center justify-content-start column-gap-4">
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-skype"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chef-text text-center">
                                    <h5>Roger B.</h5>
                                    <p class="m-0"><i>Expert in Cupcakes Making</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="chef-card text-center">
                                <div class="chef-img">
                                    <img src="./assets/images/home/chefs/chef-3.png" alt="Chef Image">
                                    <ul class="d-flex align-items-center justify-content-start column-gap-4">
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-skype"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chef-text text-center">
                                    <h5>Mark J.</h5>
                                    <p class="m-0"><i>Expert in Chocolate Making</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Latest Blog -->
            <section class="blogs mb-100">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12">
                            <div class="feature-left">
                                <h2 class="main-title">Latest Blog</h2>
                                <p style="color: #555555;font-weight: bold;">an turn into your instructor your helper, your</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="blog">
                                <div class="blog-image">
                                    <img src="./assets/images/home/latest-blogs/blog-1.png" alt="Blog Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="blog">
                                <div class="blog-img">
                                    <a href="./index.html">
                                        <img src="./assets/images/home/latest-blogs/blog-2.png" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <a href="./index.html">
                                        <h5>June 3, 2020</h5>
                                    </a>
                                    <a href="./index.html">
                                        <h4>These cases are simple Standard</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed. Eiusmod tempor. incididu nt ut labore et dolore magna aliqua. ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="blog">
                                <div class="blog-img">
                                    <a href="./index.html">
                                        <img src="./assets/images/home/latest-blogs/blog-3.png" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <a href="./index.html">
                                        <h5>May 14, 2020</h5>
                                    </a>
                                    <a href="./index.html">
                                        <h4>Incapable of drawing an Image</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed. Eiusmod tempor. incididu nt ut labore et dolore magna aliqua. ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- Footer -->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="footer-top">
                                <div class="newsletter d-flex align-items-center justify-content-between">
                                    <div class="newsletter-left">
                                        <h4>Join our Newsletter list to get all the latest offers, discounts and other benefits.</h4>
                                    </div>
                                    <div class="newsletter-right">
                                        <form action="">
                                            <input type="email" placeholder="Email Address">
                                            <a href="./index.html">Subscribe</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="footer-social">
                                <div class="footer-logo">
                                    <img src="./assets/images/home/logo/logo.png" alt="Logo">
                                </div>
                                <p>Cakecious is a WordPress theme for Bakery and related businesses.</p>
                                <div class="footer-icon">
                                    <ul class="d-flex align-items-center justify-content-start column-gap-3">
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="footer-content">
                                <h5>Quick links</h5>
                                <ul class="d-flex flex-column align-items-start row-gap-2">
                                    <li>
                                        <a href="#">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="#">View Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="footer-content">
                                <h5>Work Times</h5>
                                <ul class="d-flex flex-column align-items-start row-gap-2">
                                    <li>
                                        <a href="#">Mon. :  Thu.: 8 am - 8 pm</a>
                                    </li>
                                    <li>
                                        <a href="#">Fri. : 8 am - 8 pm</a>
                                    </li>
                                    <li>
                                        <a href="#">Sat. : 9am - 4pm</a>
                                    </li>
                                    <li>
                                        <a href="#">Sun. : Closed</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="contact">
                                <h5>Conatct Info</h5>
                                <a href="tel:18005749687">
                                    <h4>(1800) 574 9687</h4>
                                </a>
                                <div class="address">
                                    <p>Cakecious Store<br>
                                    256, baker Street, New York, 5245</p>
                                </div>
                                <div class="mail">
                                    <a href="mailto:cakeciousdemo@email.com">
                                        <h5>cakeciousdemo@email.com</h5>
                                    </a>
                                </div>
                            </div>  
                        </div>
                    </div>

                    
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright d-flex align-items-center justify-content-between">
                                <div class="copyright-left">
                                    <div class="rights">
                                        <span><a href="#">Cakecious</a> © 2024 All Rights Reserved.</span>
                                    </div>
                                </div>
                                <div class="copyright-right">
                                    <div class="develope">
                                        <span>Developed by <a href="#">Utsav</a>
                                        </span>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- Bootstrap js -->
        <script src="./assets/js/bootstrap.bundle.min.js"></script>

        <!-- Jquery -->
        <script src="./assets/js/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                
            });
        </script>

        <!-- Slider Js -->
        <script src="./assets/js/swiper-bundle.min.js"></script>
        <script>
            // Features Slider
            const swiper = new Swiper('.swiper', {
                   // Optional parameters
                   direction: 'horizontal',
                   loop: true,
                   slidesPerView: 4,
                   spaceBetween: 30,
                   autoplay: true,

                   // Navigation arrows
                   navigation: {
                       nextEl: '.swiper-button-next',
                       prevEl: '.swiper-button-prev',
                   },
               });
        </script>
        <script>
            // Testimonial Slider
            const swiper1 = new Swiper('.swiper-1', {
               // Optional parameters
               direction: 'horizontal',
               loop: true,
               slidesPerView: 1,
               spaceBetween: 30,
               speed: 2000,
               autoplay: true,

               // Navigation arrows
               navigation: {
                   nextEl: '.testimonial-btn-right',
                   prevEl: '.testimonial-btn-left',
               },
           });
        </script>  
        <script>
            // Special Recipe Slider
            var recipe = new Swiper(".mySwiper", {
                direction: "horizontal",
                autoplay: true,
                loop: true,
                speed: 2000,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
       </script>  


    </body>
</html>