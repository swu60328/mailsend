<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>GMP Shopping</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="chamb/css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="chamb/css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="chamb/css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="chamb/css/style.css">
      <link rel="stylesheet" href="chamb/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="chamb/css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="chamb/css/responsive.css">
   </head>
   <body>
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="index.html" class="navbar-brand"><img src="image/logo.jpg" alt="GMP Shopping" /></a>
                     </div>
                     <!--<form class="navbar-form navbar-left web-sh">
                        <div class="form">
                           <input type="text" class="form-control" placeholder="Search for products or companies">
                        </div>
                     </form>-->
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                  <li>
                              <?php echo $_SESSION["User"];
                              #echo $_SESSION["UserID"];
                              //show detail login
                              ?> </li>
                              <?php //session_destroy();?>
                                 <!--<li><a href="login.html">Login</a></li>
                                 <li><a href="signup.html" class="custom-b">Sign up</a></li>-->
                              </ul> <!--class="custom-b"-->
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <!--<div class="help-box">
                              <ul>
                                 <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Change</span> <img src="chamb/images/flag.png" alt="" /> </a> </li>
                                 <li> <a href="#"><img class="h-i" src="chamb/images/help-icon.png" alt="" /> Help </a> </li>
                              </ul>
                           </div>-->
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <!--li><a href="#">Product</a></li-->
                                 <li><a href="#">GMP</a></li>
								 <li><a href="cart.php">Cart</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
     
      
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>You can choose to<br>buy everything.</h1>
                     <h4>If you have money.</h4>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="#">
                        <div class="box-img">
                           <h4>Twice</h4>
                           <img src="image/album/1.jpg" alt="Twice Product" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="#">
                        <div class="box-img">
                           <h4>Wanna one</h4>
                           <img src="image/album/8.jpg" alt="Wannaone Product" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="#">
                        <div class="box-img">
                           <h4>NCT</h4>
                           <img src="image/album/31.png" alt="NCT Product" width="1500" height="1500"/>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="#">
                        <div class="box-img">
                           <h4>AB6IX</h4>
                           <img src="image/album/16.jpg" alt="Ab6ix Product" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="#">
                        <div class="box-img">
                           <h4>ITZY</h4>
                           <img src="image/album/20.jpg" alt="Itzy Product" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="#">
                        <div class="box-img">
                           <h4>GOT7</h4>
                           <img src="image/album/22.jpg" alt="Got7 Product" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="#">
                        <div class="box-img">
                           <h4>DAY6</h4>
                           <img src="image/album/29.jpg" alt="Day6 Product" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="#">
                        <div class="box-img">
                           <h4>Red Velvet</h4>
                           <img src="image/album/35.jpg" alt="RedVelvet Product" />
                        </div>
                     </a>
                  </div>
                  <div class="categories_link">
                     <a href="product.html">Browse all Product here</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="cat-main-box"> </div>
            <div class="row">
               <div class="bg_img_right"><img src="chamb/images/bg_img1.png" alt="#" /></div>
               <div class="main-start-box">
                  <div class="container">
                     <div class="supplier clearfix">
                        <div class="col-md-5 col-sm-6">
                           <div class="left-supplier">
                              <h4>Recommendation</h4>
                              <h2>AB6IX <br><span>1st Full album 6IXSENSE</span></h2>
                              <p class="text-lowercase">This album is the 1st full-album with the 11 songs.
							The title track is "Blind for love".They comeback with the elegant look that will bind and melt ABNEW's heart.
							  </p>
                              .
                              <a href="product.html">Click for go to product</a>
                           </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                           <div class="right-supplier">
                              <img class="img-responsive" src="image/album/12.jpg" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <!--/div-->
      <!--/div-->
      <div class="products">
         <div class="main-products">
            <h2>TRENDING PRODUCTS</h2>
            <div class="product-slidr">
               <div class="slider">
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="image/album/22.jpg" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>I won't let you go</h4>
                         	  </div>
                              <a href="#">$20</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="image/album/1.jpg" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Yes or Yes</h4>
                                 <!--p>By <span>Beko</span> under <span>Lights</span></p-->
                              </div>
                              <a href="#">$20</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="image/album/8.jpg" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Power of destiny</h4>
                              </div>
                              <a href="#">20</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="image/album/29.jpg" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Remember Us:Youth II</h4>
                              </div>
                              <a href="#">$20</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="image/album/31.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Neo Zone</h4>
                              </div>
                              <a href="#">20</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="image/album/5.jpg" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Twicecoaster Lane1</h4>
                                 <!--p>By <span>Beko</span> under <span>Lights</span></p-->
                              </div>
                              <a href="#">$20</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="image/album/2.jpg" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Twicecoaster Lane2</h4>
                                 <!--p>By <span>Beko</span> under <span>Lights</span></p-->
                              </div>
                              <a href="#">$20</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="main-footer">
            <div class="container">
               <div class="row">
			<div class="footer-link-box clearfix">
           <div class="col-md-6 col-sm-6">
                        <div class="left-f-box">
                           <div class="col-sm-4">
                              <h2>Product</h2>
                              <ul>
                                 <li><a href="#">Twice</a></li>
                                 <li><a href="#">Wanna one</a></li>
                                 <li><a href="#">NCT</a></li>
                                 <li><a href="#">AB6IX</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <ul>
                                 <li><a href="#">ITZY</a></li>
                                 <li><a href="#">GOT7</a></li>
                                 <li><a href="#">DAY6</a></li>
                                 <li><a href="#">Red Velvet</a></li>
								  <li><a href="#">Others</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <ul>
                                 
                                 <!--li><a href="#">Contact us</a></li>
                                 <li><a href="#">Press</a></li>
                                 <li><a href="#">Careers</a></li>
                                 <li><a href="#">Terms of use</a></li-->
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="right-f-box">
                           <h2>GMP</h2>
                           <ul class="col-sm-4">
                              <li><a href="signup.html">Sing up</a></li>
                              <li><a href="login.html">Log in</a></li>
                              <li><a href="cart.html">Cart</a></li>
							  <li><a href="#">GMP</a></li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <p><img src="image/logo.jpg" alt="#" width="123" height="28" style="margin-top: -5px;" /> All Rights Reserved. GMP © 2020</p>
                  </div>
                  
               </div>
            </div>
         </div>
      </footer>
      <!--main js--> 
      <script src="chamb/js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="chamb/js/bootstrap.min.js"></script> 
      <script src="chamb/js/bootstrap-select.min.js"></script>
      <script src="chamb/js/slick.min.js"></script> 
      <script src="chamb/js/wow.min.js"></script>
      <!--custom js--> 
      <script src="chamb/js/custom.js"></script>



      
   </body>
</html>

