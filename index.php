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
        <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
        <title>Home - ANISH Fashion Store</title>
    </head>

        <?php
            if (!empty($_GET['login']) && $_GET['login'] == 'success') {
                echo '<div class="alert alert-success" role="alert">' ;
                echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '; 
                echo '<i class="fa fa-lg fa-thumbs-o-up"></i> <strong>Well done!</strong> You successfully login. Welcome!';
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
        <!-- <div id="rtl">RTL</div> -->
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
                            <li class="level1 active"><a href="index.php" title="Home">Home</a>
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

                            <li class="level1"><a href="contact.php" title="Contact">Contact</a>
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
            <div class="tp-banner-container hidden-dot ver1">
            <div class="tp-banner" >
                <ul>    <!-- SLIDE  -->
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="6" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/banner-4.jpg"  alt="home3-slideshow"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        
                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption color-brand customin randomrotateout font-play tp-resizeme size-100"
                            data-x="580"
                            data-y="10"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="500"
                            data-start="2000"
                            data-easing="Power4.easeOut"
                            data-splitin="chars"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 3">#AnishRaya2017
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption color-black font-ro weight-300 letter-spacing-5 skewfromleft customout size-30"
                            data-x="680"
                            data-y="150"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1600"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 4">Let your raya shine with ANISH
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption skewfromleft customout font-roc link-1 height-40 size-16"
                            data-x="830"
                            data-y="220"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 5"><a href="all-products.php" title="View Shop" class="">View Shop</a>
                        </div>
                        <!-- LAYER NR. 8s -->
                    </li>
                    <!-- SLIDER -->
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="1000" >
                        <img src="assets/images/banner-1.jpg"  alt="Futurelife-home2-slideshow"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYER NR. 3 -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption color-black font-roc weight-400 skewfromleft upper customout size-30"
                            data-x="1190"
                            data-y="155"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1600"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 3">SALE UP TO
                        </div>

                         <!-- LAYER NR. 9 -->
                        <div class="tp-caption color-brand customin randomrotateout font-play weight-900 tp-resizeme size-200"
                            data-x="1190"
                            data-y="100"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="500"
                            data-start="2000"
                            data-easing="Power4.easeOut"
                            data-splitin="chars"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-captionhidden="on"
                            style="z-index: 4">15%
                        </div>
                         <!-- LAYER NR. 9 -->
                        <div class="tp-caption weight-700 letter-spacing-5 upper color-brand customin randomrotateout font-ro tp-resizeme size-60"
                            data-x="1210"
                            data-y="370"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="500"
                            data-start="2000"
                            data-easing="Power4.easeOut"
                            data-splitin="chars"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 5">Tamara
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption upper color-black font-play weight-300 letter-spacing-5 skewfromleft customout size-30"
                            data-x="1190"
                            data-y="445"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1600"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 6">Exclusive Product
                        </div>

                        <!-- LAYER NR. 8s -->
                    </li>
                    <!-- SLIDER -->
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!-- End container -->
        </div>
            <div class="container">
                <div class="shipping-v2 home3-shiping space-60">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <i class="pe-7s-map-marker"></i>
                        <h3>Store Locator.</h3>
                        <p>Find your nearest Evans store.</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <i class="pe-7s-plane"></i>
                        <h3>Delivery &amp; Returns.</h3>
                        <p>Delivery &amp; returns information.</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <i class="pe-7s-phone"></i>
                        <h3>Cosre application.</h3>
                        <p>Reponsive like Mobile Apps.</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <i class="pe-7s-headphones"></i>
                        <h3>Help &amp; Support</h3>
                        <p>Find the answers to your questions.</p>
                    </div>
                </div>
                <!-- End container -->
            </div>

                    

                <div class="container">
                    <div class="furniture owl-nav-ver1">
                        <div class="title-text-v2">
                            <h3>New Arrivals</h3>
                        </div>
                        <ul class="tabs tabs-title">
                            <li class="item" rel="tab_1">PRINTS</li>
                            <li class="item" rel="tab_2">PLAINS</li>
                            <li class="item" rel="tab_3">#RAYA2017</li>
                        </ul>
                        
                        <div class="tab-container space-10 ">
                        
                            <div id="tab_1" class="tab-content">
                            
                                <div class="product-tab-content products hover-shadow ver2">
                                        <?php         
                                            $query = mysql_query("SELECT * FROM item WHERE item_type LIKE 'Prints' AND featured LIKE 'New'");
                                            while ($data = mysql_fetch_assoc($query)) {
                                        ?>
                                        <div class="product">

                                            <div class="product-images">
                                                <a href="#" title="product-images">
                                                    <?php echo '<a href="products-details.php?id='.$data['item_code'].'"><img class="primary_image" src="admin/'.$data['image'].'" alt=""/></a>'; ?>
                                                </a>
                                                <div class="action">
                                                    <?php echo '<a class="add-cart" href="products-details.php?id='.$data['item_code'].'" title="Add to cart" ><i class="icon-bag"></i></a>'; ?>
                                                </div>
                                            </div>
                                            <a href="#" title="<?php echo $data['item_name']; ?>"><p class="product-title"><?php echo $data['item_name']; ?></p></a>
                                            <p class="product-price-old"><?php echo 'RM'.$data['item_price']; ?></p>
                                            
                                        </div>
                                        <?php } ?>
                                        <!-- End item -->
                                </div>
                                <!-- End product-tab-content products -->
                            </div>
                          
                            <!-- End tab-content -->
                            <div id="tab_2" class="tab-content">
                                <div class="product-tab-content products hover-shadow ver2">
                                        <?php         
                                            $query = mysql_query("SELECT * FROM item WHERE item_type LIKE 'Plains' AND featured LIKE 'New'");
                                            while ($data = mysql_fetch_assoc($query)) {
                                        ?>
                                        <div class="product">

                                            <div class="product-images">
                                                <a href="#" title="product-images">
                                                    <?php echo '<a href="products-details.php?id='.$data['item_code'].'"><img class="primary_image" src="admin/'.$data['image'].'" alt=""/></a>'; ?>
                                                </a>
                                                <div class="action">
                                                    <?php echo '<a class="add-cart" href="products-details.php?id='.$data['item_code'].'" title="Add to cart" ><i class="icon-bag"></i></a>'; ?>
                                                </div>
                                            </div>
                                            <a href="#" title="<?php echo $data['item_name']; ?>"><p class="product-title"><?php echo $data['item_name']; ?></p></a>
                                            <p class="product-price-old"><?php echo 'RM'.$data['item_price']; ?></p>
                                            
                                        </div>
                                        <?php } ?>
                                        <!-- End item -->
                                </div>
                                <!-- End product-tab-content products -->
                            </div>
                            <!-- End tab-content -->
                            <div id="tab_3" class="tab-content">
                                <div class="product-tab-content products hover-shadow ver2">
                                        <?php         
                                            $query = mysql_query("SELECT * FROM item WHERE events LIKE 'Raya'");
                                            while ($data = mysql_fetch_assoc($query)) {
                                        ?>
                                        <div class="product">

                                            <div class="product-images">
                                                <a href="#" title="product-images">
                                                    <?php echo '<a href="products-details.php?id='.$data['item_code'].'"><img class="primary_image" src="admin/'.$data['image'].'" alt=""/></a>'; ?>
                                                </a>
                                                <div class="action">
                                                    <?php echo '<a class="add-cart" href="products-details.php?id='.$data['item_code'].'" title="Add to cart" ><i class="icon-bag"></i></a>'; ?>
                                                </div>
                                            </div>
                                            <a href="#" title="<?php echo $data['item_name']; ?>"><p class="product-title"><?php echo $data['item_name']; ?></p></a>
                                            <p class="product-price-old"><?php echo 'RM'.$data['item_price']; ?></p>
                                            
                                        </div>
                                        <?php } ?>
                                    <!-- End item -->
                                </div>
                                <!-- End product-tab-content products-->
                            </div>
                            <!-- End tab-content -->
                        </div>
                    </div>
                    
                    <!-- End OurNewProduct -->
                </div>
                <!-- End container -->
            <div class="home1-banner1 space-30">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-6 col-sm-6 space-30 float-left">
                            <a class="hover-images" href="#" title="cat-box">
                                <img class="img-responsive" src="assets/images/home-catbox1.jpg" alt="images">
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6 space-30 float-right">
                            <a class="hover-images" href="#" title="cat-box">
                                <img class="img-responsive" src="assets/images/home-catbox2.jpg" alt="images">
                            </a>
                        </div>
                        </div>
                        <!-- End row -->
                    </div>
                </div>
                <!-- End banner home 1 -->
            <div id="back-to-top">
                <i class="fa fa-long-arrow-up"></i>
            </div>
        
        <!-- End home3-newsletter -->
        
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
    <script type="text/javascript" src="assets/js/store.js"></script>
    </body>    

</html>