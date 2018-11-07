<?php
include('config.php');
include('page/check-login.php');
?>

<?php
    $id = $_GET['id'];
    $query = mysql_query("SELECT * FROM item WHERE item_code='$id'") or die(mysql_error());
    $data = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="assets/css/styles5.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/owl-slider.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/slick.css"/>
        <link rel="shortcut icon" href="assets/images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="assets/vendor/settings.css"/>
        <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
        <title><?php echo $data['item_name']; ?> - ANISH Fashion Store</title>
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

                            <li class="level1 "><a href="contact.php" title="Contact">Contact</a>
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
                    <img src="assets/images/banner-login-register.jpg" alt="Banner-header">
                    <div class="text">
                    <h3><?php echo $data['item_name']; ?></h3>
                    <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i><?php echo $data['item_name']; ?></p>
                </div>
                </div>
            </div>

                <?php
                    $id = $_GET['id'];
                    $query = mysql_query("SELECT * FROM item WHERE item_code='$id'") or die(mysql_error());
                    $data = mysql_fetch_array($query);
                ?>
                <div class="container">     
                    <div class="product-details-content">
                        <div class="col-md-6 col-sm-6">
                              <div class="slider-for">
                                <div>
                                  <span class="zoom">
                                    <?php echo '<img class="zoom-images" src="admin/'.$data['image'].'" alt="images">'; ?>
                                  </span>
                                </div>
                              </div>
                              <!-- End slider-for -->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="box-details-info">
                                <div class="product-name">
                                    <h1 style="font-size: 32px;"><?php echo $data['item_code']; ?> - <?php echo $data['item_name']; ?></h1>
                                </div>
                                <!-- End product-name -->
                                <div class="rating">
                                    <div class="overflow-h">
                                        <div class="icon-rating">  
                                            <input type="radio" id="star-horizontal-rating-1" name="star-horizontal-rating" checked="">    
                                            <label for="star-horizontal-rating-1"><i class="fa fa-star-half-o"></i></label> 
                                            <input type="radio" id="star-horizontal-rating-2" name="star-horizontal-rating" checked="">    
                                            <label for="star-horizontal-rating-2"><i class="fa fa-star"></i></label>
                                            <input type="radio" id="star-horizontal-rating-3" name="star-horizontal-rating" checked="">    
                                            <label for="star-horizontal-rating-3"><i class="fa fa-star"></i></label>
                                            <input type="radio" id="star-horizontal-rating-4" name="star-horizontal-rating">    
                                            <label for="star-horizontal-rating-4"><i class="fa fa-star"></i></label>
                                            <input type="radio" id="star-horizontal-rating-5" name="star-horizontal-rating">    
                                            <label for="star-horizontal-rating-5"><i class="fa fa-star"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Rating -->
                                <div class="wrap-price">
                                    <p class="price-old"><?php echo 'RM'.$data['item_price']; ?></p>
                                </div>
                                <!-- End Price -->
                            </div>
                            <!-- End box details info -->
                            <div class="options box space-30">
                                <!-- End action -->
                                <div class="box space-30">
                                    <div class="row">
                                    <div class="col-md-3">
                                        <div class="title">
                                            <h3>COLOR</h3>
                                        </div>
                                        <p><?php echo $data['item_color']; ?></p>
                                        </form>
                                    </div>
                                    <!-- End col-md-6 -->
                                    <div class="col-md-3">
                                        <div class="title">
                                            <h3>Material</h3>
                                        </div>
                                         <p><?php echo $data['material']; ?></p>
                                    </div>
                                    <!-- End col-md-5 -->
                                    <div class="col-md-3">
                                        <div class="title">
                                            <h3>Availability</h3>
                                        </div>
                                         <p><?php echo $data['availability']; ?></p>
                                    </div>
                                    <!-- End col-md-5 -->
                                    <div class="col-md-3">
                                        <div class="title">
                                            <h3>SIZE</h3>
                                        </div>
                                         <div class="form-group">
                                            <select name="item_size">
                                                <option value="None">Select Size</option>
                                                <option value="XS">XS</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End col-md-5 -->

                                    </div>
                                    <!-- End row -->

                                    
                                </div>
                                <!-- End row -->
                                <div class="action">
                                    <?php echo '<a class="link-v1 add-cart" title="Add to cart" href="shopping-cart.php?add='.$data['item_code'].'"><span>Add to cart</span></a>'; ?>
                                </div>
                            </div>
                            <!-- End Options -->

                            <div class="accordion box space-100">
                                <!-- Accordion v2 -->
                                <div class="accordion accordion-v2">
                                    <div class="panel-group" id="accordion-v2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion-v2" href="#collapse-v2-One" aria-expanded="true" class="">
                                                        Description
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-v2-One" class="panel-collapse active collapse in">
                                                <div class="panel-body">
                                                    <?php echo $data['item_desc']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <!-- End Accordion v2 -->
                            </div>
                            <!-- End col-md-6 -->
                        </div>  
                    </div>   
                    <!-- End product-details-content -->
                    
                </div>
                <!-- End container --> 
          </div>
          <!-- End MainContent -->
         
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
        <script type="text/javascript" src="assets/js/slick.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.zoom.js"></script>
        <script type="text/javascript" src="assets/js/store.js"></script>
        <script type="text/javascript">
        $(document).on('ready', function() {
           $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.slider-nav'
          });
          $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true
          });
          $('.zoom').zoom();
        });
      </script>
    </body>
        

</html>

