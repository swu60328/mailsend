<!doctype html>

<html lang="en">
<head>
<!--<title>Sign in</title>-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
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
	<br>
	
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <h1 class="text-center">Sign up</h1>
    </div>
  </div>
  <hr>
</div>
	<div class="container">
	<div class="col-md-10" align="center">
		<form class="formsignin" action="test.php" method="POST">
		  	<div class="col-md-10">
			<!--name-->
		    <div class="input-group"><span id="addon1" class="input-group-addon">Name</span>
		      <input type="text" name="Name" class="form-control" placeholder="please enter your name" aria-describedby="addon1" required>
	        </div><br>
			
			<div class="input-group"><span id="addondate" class="input-group-addon">Date of birth</span>
		      <input type="date" name="DOB" class="form-control" placeholder="please enter your name" aria-describedby="addondate">
	        </div><br>
				
		    <div class="input-group"><span id="contentaddon1" class="input-group-addon">Email</span>
		      	<input type="email" name="Email" class="form-control" placeholder="please enter your Email" aria-describedby="contentaddon1" required>
			</div><br>
				
		    <div class="input-group"><span class="input-group-addon">Phone</span>
		      	<input type="tel" name="Phone" class="form-control" placeholder="please enter your phone number">
		    </div><br>
			
			<div class="input-group"><span class="input-group-addon">Password</span>
		      	<input type="password" name= "Pass" class="form-control" placeholder="set your password" required>
		    </div><br>
				
			<div class="input-group"><span class="input-group-addon">Confirm password</span>
		      	<input type="password" class="form-control" placeholder="confirm your password" required>
            </div><br>
            
				
			<br><br>
            
            <h3>โปรดตอบคำถามเพื่อใช้ในการยืนยันตัวตนเมื่อทำการสั่งสินค้า</h3><br><br>
	  
	  	    <div class="input-group"><span  class="input-group-addon">1. คุณมีแมวไหม ?</span>
	    	    <input type="text" name= "Q_1" class="form-control" placeholder="please enter your answer"></div><br>
	  	    <div class="input-group"><span  class="input-group-addon">2. พ่อแม่เรียกคุณว่าอะไร ?</span>
	    	    <input type="text" name = "Q_2" class="form-control" placeholder="please enter your answer"></div><br>
	  	    <div class="input-group"><span  class="input-group-addon">3. ชื่อเล่นในวัยเด็กของคุณ ?</span>
	    	    <input type="text" name= "Q_3" class="form-control" placeholder="please enter your answer"></div><br>
	  	    <div class="input-group"><span  class="input-group-addon">4. ตัวเลขที่คุณชอบ ?</span>
	    	    <input type="text" name="Q_4" class="form-control" placeholder="please enter your answer"></div><br>	  
		    <div class="input-group"><span  class="input-group-addon">5.คุณจะแต่งงานอายุเท่าไหร่ ?</span>
	    	    <input type="text" name="Q_5" class="form-control" placeholder="please enter your answer"></div><br>  
		  
		  
		    <div class="input-group">
			<button type="submit" class="btn btn-outline-dark" >Submit</button></div>
		  
			
				
	      	</div>
			
		
        </div>
        </form>
		</div><br>
	<hr>
	
	
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
	
	
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
		
	
</body>
	
	
</html>