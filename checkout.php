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
        <title>Checkout - ANISH Fashion Store</title>
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

                            <li class="level1 dropdown active"><a href="#" title="Page">Shop</a>
                                <div class="sub-menu dropdown-menu">
                                    <div class="top-sub-menu">
                                        <img src="assets/images/top-submenu2.jpg" alt="images">
                                    </div>
                                  <ul class="menu-level-1">
                                    <li class="level2"><a href="#">Smart Phones</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="samsung-smartphones.php" title="Samsung">Samsung</a></li>
                                            <li class="level3"><a href="apple-smartphones.php" title="Apple">Apple</a></li>
                                            <li class="level3"><a href="asus-smartphones.php" title="Asus">Asus</a></li>
                                        </ul>
                                    </li>
                                    <li class="level2"><a href="#">Tablets/Ipad</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="samsung-tablets.php" title="Samsung">Samsung</a></li>
                                            <li class="level3"><a href="apple-ipad.php" title="Apple">Apple</a></li>
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

        <div class="main-content">
            <div class="container">
                <div class="banner-header banner-lbook3">
                    <img src="assets/images/banner-product-checkout2.jpg" alt="Banner-header">
                    <div class="text">
                        <h3>Checkout</h3>
                        <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Checkout</p>
                    </div>
                </div>
            </div>
            <div class="container container-ver2 space-padding-tb-30">
                    <div class="row head-cart">
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">01</p>
                                <h3>Shopping cart</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">02</p>
                                <h3>Check out</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item center">
                                <p class="icon">03</p>
                                <h3>Order completed</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                    </div>
                </div>
                <!-- End container -->
            <div class="cart-box-container check-out">
                <div class="container container-ver2">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title-brand">BILLING ADDRESS</h3>
                            <form class="form-horizontal" action="success.php" method="post">
                                <div class="form-group col-md-12">
                                    <label for="inputfname" class=" control-label">Full Name<span class="color">*</span></label>                            
                                    <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>" id="inputfname" class="form-control" required/>  
                                </div>
                                <div>
                                    <div class="form-group col-md-6">
                                        <label for="inputemail" class=" control-label">Email<span class="color">*</span></label>                            
                                        <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" id="inputemail" class="form-control" required/>  
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputphone" class=" control-label">Phone<span class="color">*</span></label>                            
                                        <input type="text" name="phonenumber" value="<?php echo $_SESSION['phonenumber'] ?>" id="inputphone" class="form-control" required/>  
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputstreet" class=" control-label">Address<span class="color">*</span></label>                            
                                    <input type="text" name="address" placeholder="Enter your street address..." id="inputstreet" class="form-control space-20" required/>  
                                </div>                        
                                <div class="form-group">
                                    <label for="inputcountry" class=" control-label">Town/City<span class="color">*</span></label>                            
                                    <input type="text" name="city" placeholder="Enter your Town..." id="inputcountry" class="form-control space-20" required/>
                                </div>
                                <div>
                                    <div class="form-group col-md-6">
                                        <label for="inputfState" class=" control-label">STATE<span class="color">*</span></label>                            
                                        <input type="text" name="state" placeholder="Select your county..." id="inputfState" class="form-control" required/>  
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputpostcode" class=" control-label">POSTCODE<span class="color">*</span></label>                            
                                        <input type="text" name="postcode" placeholder="Enter your postcode..." id="inputpostcode" class="form-control" required/>  
                                    </div> 
                                    <div class="form-group">
                                        <input type="hidden" name="status" class="form-control" value="Processing">
                                    </div><!-- End .form-group -->
                                </div> 
                            
                            
                            
                        </div>
                        <!-- End col-md-8 -->
                        <div class="col-md-6 space-30">
                            <div class="box">
                                <h3 class="title-brand">YOUR ORDER</h3>
                                <div class="info-order">
                                    <div class="product-name">

                                        <ul>
                                            <li class="head">
                                                <span class="name">PRODUCTS NAME</span>
                                                <span class="qty">QTY</span>
                                                <span class="total">SUB TOTAL</span>
                                            </li>

                                            <?php 
                                                    
                                            foreach($_SESSION as $email => $value){
                                                if($value > 0)
                                                {
                                                    if(substr($email, 0, 5) == 'cart_')
                                                    {
                                                        $id = substr($email, 5, (strlen($email)-5));
                                                        $get = mysql_query("SELECT * FROM item WHERE item_code='$id'");
                                                            while($get_row = mysql_fetch_assoc($get)){
                                                                $sub = $get_row['item_price'] * $value;

                                                                echo '<li>
                                                                    <span class="name">'.$get_row['item_code'].' - '.$get_row['item_name'].' ('.$get_row['item_color'].')</span>
                                                                    <span class="qty">'.$value.'</span>
                                                                    <span class="total">RM '.@$sub.'</span>
                                                                </li>';
                                                               
                                                            }     
                                                                @$total += $sub;
                                                        }                         
                                                                        
                                                    }
                                                }
                                            ?>     
                                        </ul>
                                    </div>
                                    <!-- End product-name -->
                                    <ul class="product-order">
                                        <li>
                                            <span class="left">CART SUBTOTAL</span>
                                            <span class="right"><?php echo'RM '.@$total.'';?></span>
                                        </li>
                                        <li>
                                            <span class="left">SHIPPING & HANDLING</span>
                                            <span class="right">RM 15.00</span>
                                        </li>

                                        <?php
                                            @$total = @$total + 15.00;
                                        ?>
                                        <li>
                                            <span class="left">ORDER TOTAL</span>
                                            <span class="right brand"><?php echo'RM '.@$total.'';?></span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End info-order -->
                                <div class="payment-order box float-left">
                                <ul class="tabs">
                                    <li>
                                        <input type="radio" class="radio" name="paymentmethod" value="CDM">
                                        <h4>Direct Bank Transfer</h4>
                                        <p>Manual transfer at Cash Deposit Machine(CDM) with the details given. After make a payment, send an attachment to our email.</p>
                                        <p>Name : ANISH Fashion Store SDN BHD</p>
                                        <p>Account No : 7095432221 (Cimb)</p>
                                    </li>
                                    <li>
                                        <input type="radio" class="radio" name="paymentmethod" value="COD">
                                        <h4>Cash On Delivery</h4>
                                        <p>Cash on Delivery (Pay Cash upon delivery) is available in selected areas of Kuala Lumpur and Selangor only. </p>
                                    </li>
                                    
                                </ul>
                                </div>
                                <button class="link-v1 box lh-50 rt full" href="#" title="PLACE ORDER">PLACE ORDER</button>
                                <input class="btn btn-primary" name="total" type="hidden" value="<?php echo abs((int)$_GET['total']); ?>" >
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End cat-box-container -->
        </div>
        
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
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script>
    </body>
        
</html>

