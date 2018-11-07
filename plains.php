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
        <title>Plains - ANISH Fashion Store</title>
    </head>
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
    <div class="header-top">
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
            <div class="banner-header banner-lbook3 space-40">
                <img src="assets/images/banner-login-register.jpg" alt="Banner-header">
                <div class="text">
                    <h3>Plains</h3>
                    <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Plains</p>
                </div>
            </div>
        </div>
        
            
        <div class="container">
            <div class="products ver2 grid_full hover-shadow furniture">
            <?php
                                        
                        $query = mysql_query("SELECT * FROM item WHERE item_type LIKE 'Plains'");
                                             
                        while ($data = mysql_fetch_assoc($query)) {
                    ?>
                <div class="item-inner">

                    <div class="product">
                    
                        <div class="product-images">
                            <a href="#" title="product-images">
                                <?php echo '<a href="products-details.php?id='.$data['item_code'].'"><img class="primary_image" src="admin/'.$data['image'].'" alt=""/></a>'; ?>
                            </a>
                            <div class="action">
								
								<?php echo '<a class="add-cart" href="products-details.php?id='.$data['item_code'].'" title="Add to cart" ><i class="icon-bag"></i></a>'; ?>
							</div>
                        </div>
                        
                        <p class="product-title"><?php echo $data['item_name']; ?></p>
                        <p class="product-price-old"><?php echo 'RM'.$data['item_price']; ?></p>
                        <p class="description"><?php echo $data['item_desc']; ?></p>
                        
                        <div class="social box">
                            <h3>Share this :</h3>
                            <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                            <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                            <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                            <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                            <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                        </div>

                    </div>
                   
                    <!-- End product -->
                </div>
                 <?php } ?>
                <!-- End item -->
            </div>
            
            <!-- End product-tab-content products -->
        </div>
        
        <!-- end tab product all -->
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
    <!-- End wrappage -->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="assets/js/engo-plugins.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="assets/js/map-icons.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="assets/js/store.js"></script>
    </body>
        
</html>

