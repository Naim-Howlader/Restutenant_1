<?php
include("header.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">  
    <link rel="stylesheet" href="assets/aos.css">  
    <link rel="stylesheet" href="assets/hover-min.css">  
    <link rel="stylesheet" href="assets/animate.min.css">  
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
        <!--Top head section start here-->
        <div id="home">
        <div class="top-head-bg">
            <div class="navbar">
                <div class="container">
                <div class="logo">
                    <img src="assets/image/logo.png" alt="" width="50px">
                </div>
                <div class="nav-link">
                    <ul>
                        <li><a href="#home">home</a></li>
                        <li><a href="#product" class="">product</a></li>
                        <li><a href="#promo" class="">promo</a></li>
                        <li><a href="#about" class="">about</a></li>
                        <?php
                            
                        ?>
                        <li><a href="mycart.php" class="btn btn-outline-danger hvr-buzz-out"><i class="fa fa-shopping-cart" aria-hidden="true"><span id="cart_num"></span></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
                    <div class="top-head-text">
                        <h2>Get Cashback<br>up to 50%</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Suspendisse consectetur justo<br> eu nunc consequat.</p>
                        <a href="product"><button class="btn">ORDER NOW</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Top head section end here-->

        <!--Chef section start here-->
        <div class="chef-section">
            <div class="chef-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">Our Chef</h2>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vi<br>vamus lacinia odio vitae vestibulum vestibulum. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chef-img">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-4">
                            <div class="single-chef">
                                <img src="assets/image/chef-1.png" alt="" width="100px" data-aos="zoom-out-down">
                                <h5 class="text-center">Aiden Hunter</h5>
                                <p class="text-center">Founder</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-chef">
                                <img src="assets/image/chef-2.png" alt="" width="100px" data-aos="zoom-out-up">
                                <h5 class="text-center">Ethel Ramsey</h5>
                                <p class="text-center">Co-Founder</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-chef">
                                <img src="assets/image/chef-3.png" alt="" width="100px" data-aos="zoom-out-down">
                                <h5 class="text-center">Fannie Stewart</h5>
                                <p class="text-center">Co-Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Chef section end here-->

        <!--Best burger section start here-->
        <div class="best-burger-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/image/best-burger.png" alt="" width="100px" data-aos="fade-right">
                    </div>
                    <div class="col-md-6">
                        <div class="best-burger-text">
                            <h2>Best Burger</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. </p>
                            <form action="manage_cart.php" method="post">
                            <button class="btn" name="Add_To_Cart">ORDER NOW</button>
                            <input type="hidden" name="Item_Name" value="Best Burger">
                            <input type="hidden" name="Prize" value="600 TK">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Best burger section end here-->

        <!--Big burger section start here-->
        <div class="big-burger-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="big-burger-text">
                            <h2>Big Burger</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Vivamus lacinia odio vitae<br> vestibulum vestibulum. </p>
                            <form action="manage_cart.php" method="post">
                            <button class="btn" name="Add_To_Cart">ORDER NOW</button>
                            <input type="hidden" name="Item_Name" value="Big Burger">
                            <input type="hidden" name="Prize" value="500 TK">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/image/best-burger.png" alt="" width="100px" data-aos="fade-left">
                    </div>
                </div>
            </div>
        </div>
        <!--Big burger section end here-->


        <!--Statistics section start here-->

        <div class="statistics-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="statistics-text">
                        <h2 class="text-center">Statistics</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Vivamus lacinia odio vitae vestibulum vestibulum. </p>
                        </div>
                    </div>
                </div>
                <div class="statistics-counter">
                <div class="row padding">
                    <div class="col-md-4">
                        <div class="single-counter">
                            <h2 class="text-center counter">4000</h2>
                            <p class="text-center">CUSTOMER</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-counter">
                            <h2 class="text-center counter">109</h2>
                            <p class="text-center">OUTLETS</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-counter">
                            <h2 class="text-center counter">35</h2>
                            <p class="text-center">COUNTRY</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--Statistics section end here-->


        <!--Package section start here-->
        <div id="product">
            <div class="package-section">
                <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="package-text">
                                                    <h2 class="text-center">Popular Package</h2>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6"><input type="text" class="form-control" id="live_search_food" autocomplete="off" placeholder="Search your food"></div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    <div class="row">
                                            <div class="">
                                            
                                                <div class="row flex align-items-center" id="example" data-aos="szoom-in-up">
                                                
                                                </div>

                                                <div class="row flex align-items-center justify-content-between" id="search_result_food" data-aos="szoom-in-up">
                                                
                                                </div>
                                            </div>
                                    </div>
                </div>
            </div>
        </div>
        <!--package section end here-->

        <!--Barry section start here-->
        <div id="promo">
        <div class="barry-section">
           <div class="barry-opacity">
            <div class="container">
                <div class="row">
                    <div class="barry-text">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Vivamus lacinia odio vitae vestibulum vestibulum. </p>
                        <h4 class="text-center">Barry Henderson</h4>
                    </div>
                </div>
            </div>
           </div>
        </div>
        </div>
        <!--Barry section end here-->


        <!--Update section start here-->

        <div class="update-section">
            <div class="update-text">
                <h2 class="text-center">Don't miss Our Update</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Vivamus lacinia odio vitae vestibulum vestibulum. </p>
            </div>
            <div class="update-sub ">
                <div class="update-background d-flex align-items-center justify-content-between">
                    <form action="">
                    <input type="text">
                    <button>SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
        <!--Update section end here-->



        <!--Footer section start here-->
       <div id="about">
       <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-section">
                            <div class="title-text">
                                <h4>Title Here</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Aliquam at dignissim nunc,<br> id maximus ex. Etiam nec dignissim elit, at<br> dignissim enim. </p>
                            </div>
                            <div class="title-icon">
                                <ul>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li> <a href=""><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="about-text">
                            <h4>About</h4>
                            <ul>
                                <li><a href="">History</a></li>
                                <li><a href="">Our Team</a></li>
                                <li><a href="">Brand Guidlines</a></li>
                                <li><a href="">Terms & Condition</a></li>
                                <li><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <div class="about-text">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="">How To Order</a></li>
                                <li><a href="">Our Product</a></li>
                                <li><a href="">Our Status</a></li>
                                <li><a href="">Promo</a></li>
                                <li><a href="">Payment Method</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <div class="about-text">
                            <h4>Other</h4>
                            <ul>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Help</a></li>
                                <li><a href="">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
        <!--Footer section end here-->
    </div>
    </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/script.js"></script>
    <script src="js/test.js"></script>
    <script src="assets/js-plugin/counterup.min.js"></script>
    <script src="assets/js-plugin/jquery.waypoints.min.js"></script>
    <script src="assets/js-plugin/jquery.smoothscroll.min.js"></script>
    <script src="assets/js-plugin/aos.js"></script>
</body>
</html>
</body>
</html>