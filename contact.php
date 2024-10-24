<?php
    session_start();
    include "./connect.php";
?>
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

        <!-- Contact css -->
        <link rel="stylesheet" href="./assets/css/contact.css">

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
                                    <a class="nav-link" href="./index.php">Home</a>
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
                                            <a class="dropdown-item" href="./about.php">Our Chefs</a>
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
                                    <a class="nav-link active" href="./contact.php">Contact Us</a>
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

            <!-- Contact bg -->
            <section class="contact-bg position-relative d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="contact-bg-text position-relative z-2">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get-Touch List -->
            <section class="gttouch my-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="feature-left">
                                <h2 class="main-title">Get In Touch</h2>
                                <p class="mt-3">Do you have anything in your mind to let us know? Kindly don't delay to connect to us by means of our contact form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Form -->
            <div class="contact-form mb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <form class="row g-3" action="./contact.php" method="post">
                                <div class="col-md-6">
                                    <input type="text" class="form-control py-3 px-3 mb-4" placeholder="Your Name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control py-3 px-3" placeholder="Email Address" name="email">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control py-3 px-3 mb-4" placeholder="Subject" name="subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control py-2 px-3 mb-5" placeholder="Write Message" cols="30" rows="7" name="message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn py-3 px-3" name="submit">Submit now</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-6">
                            <div class="contact-info">
                                <div class="address-1">
                                    <h5>Address:</h5>
                                    <p>54B, Tailstoi Town 5238
                                    La city, IA 522364</p>
                                </div>

                                <div class="phone-email">
                                    <div class="phone">
                                        <a href="tel:01372.466.790">Phone :
                                            <span> 01372.466.790</span>
                                        </a>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:info@cakebakery.com">Email :
                                            <span> info@cakebakery.com</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="open-time">
                                    <h5>Opening Hours :</h5>
                                    <p> 8:00 AM – 10:00 PM <br>
                                        Monday – Sunday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <section class="map mb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="location">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" width="100%" height="500" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
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
<?php

    if(isset($_REQUEST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = mysqli_query($conn, "insert into contact(name, email, subject, message) values ('$name', '$email', '$subject', '$message')");

        if($sql){

            echo "<script>alert('Feedback Submmited.')</script>";
            header("location: ./index.php");
            exit();
        }

    }

?>