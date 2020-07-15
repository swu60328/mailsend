<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>GMP Shopping - Product</title>
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
      <link rel="stylesheet" href="chamb/css/select2.min.css">
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
                        <a href="index.html" class="navbar-brand"><img src="image/logo.jpg" alt="GMP Shopping" width="116" height="30" /></a>
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
                                 <li><a href="login.html">Login</a></li>
                                 <li><a href="signup.html" class="custom-b">Sign up</a></li>
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
								 <li><a href="cart.html">Cart</a></li>
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
    
      <div class="terms-conditions product-page">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="active">Product</li>
                     <!--li class="active">Sofa</li-->
                  </ol>
               </div>
            </div>
         </div>
      </div>
	
      <div class="product-page-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                    <h2>Product</h2>
                    <!--p>By <span>Dex Morgan Mobilya</span></p-->
                  </div>
               </div>
            </div>
            <div class="row">
			<div class="col-md-12 col-sm-5">
         <div class="md-prod-page"> </div>
                  <div class="similar-box">
					
                     <!--h2>Product</h2-->
                     <div class="row cat-pd">
                        <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/3.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
									 <?php $_SESSION["cart"] = array("test"); ?>
                                    <h4 ><a method="post" name ="p1">Twice - Feel special</a></h4>
                                 </div>
                                 <a action="add_cart.php" method = "POST" href="add_cart.php" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Like this</a>
                                 <!--p>23 likes</p-->
                              </div>
                           </div>
                        </div>
						</div>
                        <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/5.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Twice - Coaster Lane1</h4>
                                 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
                        </div>
						 </div>
						 <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/2.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Twice - Coaster Lane2</h4>
 								 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
							 </div>
                        </div>
                     </div>
                     <div class="row cat-pd">
                        <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/1.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Twice - Yes or Yes</h4>
								 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
                        </div>
						 </div>
					 <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/4.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Twice - Cheer up</h4>
                                 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
                        </div>
						 </div>
						 <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img src="image/album/20.jpg" alt="#" width="1595" height="1776" class="img-responsive" />
                              </div>	
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>ITZY - It's me</h4>
 								 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
                        </div>
                     </div>
					  </div>
					  <div class="row cat-pd">
                        <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/23.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Twice - Fancy</h4>
                                 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Like this</a>
                                 <!--p>23 likes</p-->
                              </div>
                           </div>
                        </div>
						  </div>
                        <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/8.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Wanna one - Power of destiny</h4>
                                 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
                        </div>
						  </div>
						 <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/16.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>AB6IX - 6IXSENSE</h4>
 								 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
                        </div>
                     </div>
					  </div>
					  <div class="row cat-pd">
                        <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/22.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>GOT7 - I won't let you go</h4>
                                 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Like this</a>
                                 <!--p>23 likes</p-->
                              </div>
                           </div>
                        </div>
						  </div>
                        <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/21.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>GOT7 - Love loop</h4>
                                 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
                        </div>
						  </div>
						 <div class="col-md-4">
                           <div class="small-box-c">
                              <div class="small-img-b">
								  <div class="box-img">
                                 <img class="img-responsive" src="image/album/29.jpg" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>DAY6 - Remember us: YouthII</h4>
 								 </div>
                                 <a href="#" tabindex="0">$20</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                              </div>
                           </div>
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
      <script src="chamb/js/select2.full.min.js"></script> 
      <script src="chamb/js/wow.min.js"></script> 
      <!--custom js--> 
      <script src="chamb/js/custom.js"></script>
   </body>
</html>