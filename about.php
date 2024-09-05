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
        <link rel="stylesheet" href="./assets/css/about.css">

    </head>

    <body>
        <!-- Add To Cart Canvas -->
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Shopping Cart</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-title="Close"></button>
            </div>
            <div class="offcanvas-body">
              
            </div>
        </div>

        <!-- Add To Cart Button -->
        <button class="cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <i class="fa-solid fa-cart-shopping"></i>
        </button>

        <!-- Like Button -->
        <a href="./index.html" class="like-btn">
            <i class="fa-solid fa-heart"></i>
        </a>

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
                                    <a class="nav-link" href="./menu.php">Menu</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link active" href="#">About Us</a>
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
                                    <a class="nav-link" href="#">Log In</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main>
            
            <!-- About bg -->
            <section class="about position-relative d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="about-text position-relative z-2">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bakery Apporoach -->
            <section class="b-approach my-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="bakery text-center">
                                <div class="feature-left mb-4">
                                    <h2 class="main-title">Our Bakery Approach</h2>
                                </div>
                                <h4>This drastic appeal for baked goods promoted baking all throughout Europe and expanded into the eastern parts of Asia. Bakers started baking breads and goods at home and selling them out on the streets.</h4>
                                <p>Baked goods have been around for thousands of years. The art of baking was developed early during the Roman Empire. It was a highly famous art as Roman citizens loved baked goods and demanded for them frequently for important occasions such as feasts and weddings etc. Due to the fame and desire that the art of baking received, around 300 BC, baking was introduced as an occupation and respectable profession for Romans.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="bakery-img">
                                <img src="./assets/images/aboutus/b-approach/b-approach.png" alt="Bakery Image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="bakery-img">
                                <img src="./assets/images/aboutus/b-approach/b-approach1.png" alt="Bakery Image">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="bakery-img">
                                <img src="./assets/images/aboutus/b-approach/b-approach2.png" alt="Bakery Image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Real Taste -->
            <section class="r-taste mb-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-9">
                            <div class="r-taste-text">
                                <h1>Real Taste</h1>
                                <p>A light, sour wheat dough with roasted walnuts and freshly picked rosemary, thyme, poppy seeds, parsley and sage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Mission -->
            <section class="mission mb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="mission-head">
                                <div class="feature-left mb-4">
                                    <h2 class="main-title">Our Mission</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="mission-content">
                                <h6>This drastic appeal for baked goods promoted baking all throughout Europe and expanded into the eastern parts of Asia. Bakers started baking breads and goods at home and selling them out on the streets.</h6>
                                <p>Baked goods have been around for thousands of years. The art of baking was developed early during the Roman Empire. It was a highly famous art as Roman citizens loved baked goods and demanded for them frequently for important occasions such as feasts and weddings etc. Due to the fame and desire that the art of baking received, around 300 BC, baking was introduced as an occupation and respectable profession for Romans.</p>
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <a href="#">Custom cakes</a>
                                    </li>
                                    <li>
                                        <a href="#">Birthday cakes</a>
                                    </li>
                                    <li>
                                        <a href="#">Wedding cakes</a>
                                    </li>
                                    <li>
                                        <a href="#">European delicacies</a>
                                    </li>
                                </ul>
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
                                                <img src="./assets/images/aboutus/client/client-2.png" alt="Client Image">
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
                                        <div class="testimonial-desc d-flex align-items-start column-gap-5 text-white mt-4">
                                            <div class="testimonial-img d-flex align-items-center justify-content-center flex-column position-relative">
                                                <img src="./assets/images/aboutus/client/client-2.png" alt="Client Image">
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
            <section class="chefs">
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
                                        <span>Cakecious <a href="#">Main demo</a> © 2024 All Rights Reserved.</span>
                                    </div>
                                </div>
                                <div class="copyright-right">
                                    <div class="develope">
                                        <span>Developed by <a href="#">Bolvo.com</a>
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
            // Testimonials Slider
            const swiper1 = new Swiper('.swiper-1', {
               // Optional parameters
               direction: 'horizontal',
               loop: true,
               slidesPerView: 1,
               spaceBetween: 30,
               speed: 1800,
               autoplay: true,

               // Navigation arrows
               navigation: {
                   nextEl: '.testimonial-btn-right',
                   prevEl: '.testimonial-btn-left',
               },
           });
        </script>  

    </body>
</html>