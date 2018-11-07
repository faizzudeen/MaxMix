<?php
include('config.php');
include('page/check-login.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="assets/css/styles5.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/owl-slider.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/settings.css"/>
        <link rel="shortcut icon" href="assets/images/favicon.png" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
        <title>Contact - ANISH Fashion Store</title>
    </head>

                    <?php
                        if (!empty($_GET['message']) && $_GET['message'] == 'success') {
                            echo '<div class="alert alert-success" role="alert">' ;
                            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '; 
                            echo '<i class="fa fa-lg fa-thumbs-o-up"></i> <strong>Well done!</strong> Thanks you for your message!';
                            echo '</div>';
                        }
                      
                    ?>

    <body>
    <div class="awe-page-loading">
         <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
               <img src="assets/images/logo.png" alt="images">
            </div>
            <div class="progress">
               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         </div>
      </div>    
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content popup-search">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="modal-body">
                <form method="get" action="search-result.php">
                    <div class="input-group">
                        <input type="text" name="user_query" class="form-control control-search" placeholder="Search and hit enter...">
                        <button class="button_search" type="button">Search</button>
                    </div><!-- /input-group -->
                </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- End pushmenu -->
    <div class="wrappage">
        <header id="header" class="header-v3">
            <div id="topbar">
                <div class="container">
                    <div class="inner-topbar box">
                        <div class="float-left">
                            <p>Call us for free<span> +603 447 7513</span></p>
                            <p><a href="mailto:customer.services@anish.com" title="mail">customer.services@anish.com</a></p>
                        </div>
                        <div class="float-right align-right">
                            <!-- End hover-menu -->
                            <div class="hover-menu">
                                <a href="#" title="MY ACCOUNT">WELCOME <?php echo $_SESSION['name'] ?></a>
                                <i class="fa fa-angle-down"></i>
                                <ul class="list-menu">
                                	<li><a href="my-order.php" title="MY ORDER">MY ORDER</a></li>
                                    <li><a href="page/logout.php" title="LOGOUT">LOGOUT</a></li>
                                    <li><a href="admin/login.php" title="ADMIN" target="_blank">ADMIN</a></li>
                                </ul>
                            </div>
                            <!-- End hover-menu -->
                            
                            <!-- End hover-menu -->
                        </div>
                    </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End topbar -->
            <div class="header-top">
                    <div class="container">
                    <div class="box">
                        <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                        <div class="logo"><a href="#" title="Uno">
                        <img src="assets/images/logo.png" alt="images">
                        </a></div>
                        <div class="logo-mobile"><a href="#" title="ANISH"><img src="assets/images/logo.png" alt="ANISH-Logo"></a></div>

                        <div class="box-right">
                            <div class="cart hover-menu">
                                
                                 <div class="icon-cart ver2" title="Add to cart">
                                    <i class="icon"></i>
                                    <div class="text">
                                        <a href="shopping-cart.php"><h3>My Cart</h3></a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <i class="icon"></i>
                            </div>
                        </div>
                        <nav class="mega-menu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                          <ul class="nav navbar-nav" id="navbar">
                            <li class="level1"><a href="index.php" title="Home">Home</a>
                            </li>

                            <li class="level1 dropdown"><a href="all-products.php" title="Page">Shop</a>
                                <div class="sub-menu dropdown-menu">
                                    <div class="top-sub-menu">
                                        <img src="assets/images/top-submenu2.jpg" alt="images">
                                    </div>
                                  <ul class="menu-level-1">
                                    <li class="level2"><a href="prints.php">Prints</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="prints-abeera.php" title="Abeera">Abeera</a></li>
                                            <li class="level3"><a href="prints-elora.php" title="Elora">Elora</a></li>
                                            <li class="level3"><a href="prints-namra.php" title="Namra">Namra</a></li>
                                        </ul>
                                    </li>
                                    <li class="level2"><a href="plains.php">Plains</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="plains-aleeya.php" title="Aleeya">Aleeya</a></li>
                                            <li class="level3"><a href="plains-jameela.php" title="Jameela">Jameela</a></li>
                                            <li class="level3"><a href="plains-mareeya.php" title="Mareeya">Mareeya</a></li>
                                        </ul>
                                    </li>
                                     
                                     
                                  </ul>
                              </div>
                              <!-- End Dropdow Menu -->
                            </li>

                            <li class="level1"><a href="anishraya2017.php" title="#Raya2017">#Raya2017</a>
                            </li>

                            <li class="level1"><a href="faqs.php" title="FAQ">FAQs</a>
                            </li>

                            <li class="level1 active"><a href="contact.php" title="Contact">Contact</a>
                            </li>

                          </ul>
                        </nav>
                    </div>                
                    </div>
                    <!-- End container -->
                </div>
                <!-- End header-top -->
        </header><!-- /header -->
        <div class="container">
            <div id="googleMap">
            </div>
        </div>
        <!-- End google map -->
        <div class="container container-ver2">
            <div class="page-contact">
                <div class="head">
                    <div class="item">
                        <div class="icon">
                            <span class="pe-7s-map-marker"></span>
                        </div>
                        <div class="text">
                            <p>7, Jln Bintang, Bukit Bintang,</p>
                            <p>55100 Kuala Lumpur, Malaysia</p>
                        </div>
                    </div>
                    <!-- End item -->
                    <div class="item">
                        <div class="icon">
                            <span class="pe-7s-global"></span>
                        </div>
                        <div class="text">
                            <p>www.ANISHshop.com</p>
                            <p>customer.services@anish.com</p>
                        </div>
                    </div>
                    <!-- End item -->

                    <div class="item">
                        <div class="icon">
                            <span class="pe-7s-call"></span>
                        </div>
                        <div class="text">
                            <p>Telephone:   +603 447 7513</p>
                            <p>Fax:         +603 448 7513</p>
                        </div>
                    </div>
                    <!-- End item -->
                </div>
                <!-- End head -->
                <div class="content-text center">
                    <h3>CONTACT US</h3>
                    <p>Leave A Message</p>
                    <form class="form-horizontal space-50" action="contact-process.php" method="post">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" id="inputName" class="form-control" value="<?php echo $_SESSION['name'] ?>" Required/>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" id="inputsumary" class="form-control" value="<?php echo $_SESSION['email'] ?>" Required/>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="phonenumber" id="inputemail" class="form-control" value="<?php echo $_SESSION['phonenumber'] ?>" Required/>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" name="message" id="message" class="form-control"></textarea>
                        </div>
                        <div class="box align-left">
                            <button title="Send message" class="link-v1 rt">Send message</button>
                        </div>
                    </form>
                </div>
                <!-- End content-text -->
            </div>
        </div>
        <!-- End container -->
        <footer id="footer" class="footer-v3 align-left">
            <div class="footer-inner">
              <div class="container container-ver2">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <a class="box space-30" href="#" title="Logo">
                            <img src="assets/images/logo-footer-v3.png" alt="Logo">
                        </a>
                        <p class="box space-30">ANISH is your all time favourite brand. Combining modern design with traditional elements. A brand that will inspire you to dress gorgeously without being immodest.</p>
                        <ul class="info-footer">
                            <li><img src="assets/images/footerv3-icon1.png" alt="images">7, Jln Bintang, Bukit Bintang, 55100 Kuala Lumpur, Malaysia</li>
                            <li><img src="assets/images/footerv3-icon2.png" alt="images">+603 447 7513</li>
                            <li><img src="assets/images/footerv3-icon3.png" alt="images"><a href="mailto:customer.services@anish.com" title="mail">customer.services@anish.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <h3 class="title-footer">OPENING TIME</h3>
                        <ul class="list-footer border">
                            <li>Mon - Fri : 09 AM - 09 PM</li>
                            <li>Sat : 09 AM - 04 PM</li>
                            <li>Sun : Close</li>
                            <li>We Work All The Holidays</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h3 class="title-footer">SHOPPING</h3>
                        <ul class="list-footer">
                            <li><a href="my-order.php" title="My Order">My Orders</a></li>
                            <li><a href="shopping-cart.php" title="My Carts">My Carts</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h3 class="title-footer">MORE LINK</h3>
                        <ul class="list-footer">
                            <li><a href="about.php" title="About">About</a></li>
                            <li><a href="contact.php" title="Contact Us">Contact Us</a></li>
                            <li><a href="faqs.php" title="FAQ">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box bottom">
                    <p class="float-left">Copyright &copy;2017 ANISH Fashion Store - All Rights Reserved.</p>
                    <ul class="float-right social">
                            <li><a href="#" title="social"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="social"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="social"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" title="social"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" title="social"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <!-- End box -->
              </div>
              <!-- End container -->
            </div>
            <!-- End footer-inner -->
        </footer>
    </div>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assets/js/engo-plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQNQTnDoJ4a0_ca-8AYsZC5P47gskawV0&callback=initMap"></script>
    <script type="text/javascript" src="assets/js/map-icons.js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script>
    </body>
        
</html>

