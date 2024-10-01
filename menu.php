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

        <!-- Style Css -->
        <link rel="stylesheet" href="./assets/css/style.css">

        <!-- About Css -->
        <link rel="stylesheet" href="./assets/css/menu.css">

    </head>

    <body>
        <!-- Add To Cart Canvas -->
        <!-- <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Shopping Cart</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-title="Close"></button>
            </div>
            <div class="offcanvas-body">
              
            </div>
        </div> -->

        <!-- Add To Cart Button -->
        <!-- <button class="cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <i class="fa-solid fa-cart-shopping"></i>
        </button> -->

        <!-- Like Button -->
        <!-- <a href="./index.html" class="like-btn">
            <i class="fa-solid fa-heart"></i>
        </a> -->

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
                                    <a class="nav-link" href="./index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./product.php">All Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="./menu.php">Menu</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="./about.php">About Us</a>
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
                                    <a class="nav-link" href="./offer.php">What We Offer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.php">Contact Us</a>
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

        <!-- Main -->
        <main>
            
            <!-- Menu bg -->
            <section class="menu position-relative d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="menu-text position-relative z-2">
                                <h2>Menu</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Prize List -->
            <section class="prize my-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="feature-left text-center">
                                <h2 class="main-title">Our Prize List</h2>
                                <p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 pt-4">
                        <div class="col-6">
                            <div class="prize-item">
                                <div class="prize-item-desc">
                                    <h4>Double Chocolate Pie</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹188.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Zabaglione Cake</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹512.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Blueberry Muffin</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹195.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Box of Delight</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹245.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Classic French Croissant</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹496.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Macarons & Tea</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹475.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Strawberry Sweet Cake</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹785.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Cupcake of Vanela</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹425.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="prize-item">
                                <div class="prize-item-desc">
                                    <h4>Fried Egg Sandwich</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹350.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Multigrain Hot Cake</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹799.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Branch Special Cake</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹899.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Bialy Egg Sandwich with Cake</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹299.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Strawberry Sweet Cake</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹399.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Double Chocolate Pie</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹485.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Blueberry Muffin</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹289.99</span>
                                    </div>
                                </div>
                                <div class="prize-item-desc mt-3">
                                    <h4>Classic Chocolate Cake</h4>
                                    <div class="prize-item-price d-flex align-items-center justify-content-between pb-3">
                                        <p>Chocolate puding, vanilla, fruite rasberry jam milk </p>
                                        <span>₹999.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-100">
                        <div class="col-4">
                            <div class="product-image">
                                <img src="./assets/images/aboutus/b-approach/b-approach.png" alt="Bakery Image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="product-image">
                                <img src="./assets/images/aboutus/b-approach/b-approach1.png" alt="Bakery Image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="product-image">
                                <img src="./assets/images/aboutus/b-approach/b-approach2.png" alt="Bakery Image">
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

    </body>
</html>