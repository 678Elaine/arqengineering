<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Admin </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="../view/assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../view/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../view/assets/css/slicknav.css">
            <link rel="stylesheet" href="../view/assets/css/animate.min.css">
            <link rel="stylesheet" href="../view/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../view/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../view/assets/css/themify-icons.css">
            <link rel="stylesheet" href="../view/assets/css/slick.css">
            <link rel="stylesheet" href="../view/assets/css/nice-select.css">
            <link rel="stylesheet" href="../view/assets/css/style.css">
   </head>

   <?php

   require('../settings/core.php');
   require('../controllers/order_controller.php');

   ?>
   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../view/assets/img/logo/loder-logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>+233 24 689 7189</li>
                                        <li>arqengineering@gmail.com</li>
                                        <li>Mon - Sat 8:00 - 17:00, Sunday - CLOSED</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="index.html" class="big-logo"><img src="../view/assets/img/logo/logo.png" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="index.html" class="small-logo"><img src="../view/assets/img/logo/loder-logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="../view/admin.php">Home</a></li>
                                            <li><a href="../view/viewappointment.php">Appointments</a></li>
                                        
                                            <li><a href="../view/vieworders.php"> Orders </a>
                                                
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="../index.php" class="btn"> Logout </a>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">engineering services</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">ARQ </h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Engineering</h2>
                                        <h2>Engineering</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                       <span><a href="services.html">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">electrics and electronice</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>ARQ Engineering</h2>
                                        <h2>ARQ Engineering</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="services.html">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        
       
        <!-- Services Area Start -->
 <?php

$order=select_allorder();

function display_allorder_fxn(){
$run_item = select_allorder();
    echo
         "
        <h3> Message </h3>
        <table class='table table-dark table-striped table-bordered'>

        <thead>
             <tr>
                <th> Order id  </th>
                <th> Description </th>
                <th> Customer email</th>
                <th> Customer id  </th>
                <th> Customer name  </th>
                <th> Business </th>

            </tr>
        <thead>";


foreach($run_item as $row)
{
    echo 
        "
        <tbody>
        <tr>
        <td>".$row['orderid']."</td>
        <td> ".$row['order_desc']."  </td>
        <td> ".$row['customer_email']."  </td>
        <td> ".$row['customer_id']."  </td>
        <td> ".$row['customer_name']."  </td>
        <td> ".$row['business_name']."  </td>
        <td>
        <button type ='button' name = 'reply'> <a href = '../actions/admin_reply.php?id=".$row['orderid']."'> Reply </a></button>
         </td>
        ";


}

echo 
    " </tbody> </table>";

}


    display_allorder_fxn();


?>



        <!-- Services Area End -->
               

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-main">
                <div class="footer-area footer-padding">
                    <div class="container">
                        <div class="row  justify-content-between">
                            <div class="col-lg-4 col-md-4 col-sm-8">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="../view/assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Quick Links</h4>
                                        <ul>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-7">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Contact</h4>
                                        <div class="footer-pera">
                                            <p class="info1">198 West 21th Street, Suite 721 New York,NY 10010</p>
                                        </div>
                                        <ul>
                                            <li><a href="#">Phone: +95 (0) 123 456 789</a></li>
                                            <li><a href="#">Cell: +95 (0) 123 456 789</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div id="mc_embed_signup">
                                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                                <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                        SIGN UP
                                                    </button>
                                                </div>
                                                <div class="mt-10 info"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Map -->
                                    <div class="map-footer">
                                        <img src="../view/assets/img/gallery/map-footer.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Copy-Right -->
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Footer End-->
    </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="../view/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../view/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../view/assets/js/popper.min.js"></script>
        <script src="../view/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../view/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../view/assets/js/owl.carousel.min.js"></script>
        <script src="../view/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="../view/assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="../view/assets/js/wow.min.js"></script>
		<script src="../view/assets/js/animated.headline.js"></script>
        <script src="../view/assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="../view/assets/js/jquery.scrollUp.min.js"></script>
        <script src="../view/assets/js/jquery.nice-select.min.js"></script>
		<script src="../view/assets/js/jquery.sticky.js"></script>
               
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="../view/assets/js/jquery.counterup.min.js"></script>

        <!-- contact js -->
        <script src="../view/assets/js/contact.js"></script>
        <script src="../view/assets/js/jquery.form.js"></script>
        <script src="../view/assets/js/jquery.validate.min.js"></script>
        <script src="../view/assets/js/mail-script.js"></script>
        <script src="../view/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../view/assets/js/plugins.js"></script>
        <script src="../view/assets/js/main.js"></script>
        
    </body>
</html>
