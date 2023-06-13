<?php
include("db.php");
include("function/function1.php")
?>

<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="stylecard.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
   <div id="top"><!--top bar starting-->
     <div class="container"><!--container start-->
       <div class="col-md-6 offer"><!-- col container start-->
	  <a href="#" class="btn btn-success btn-sm">
	  Welcome Guest
	  </a>
	  <a href="#">Shopping card Total Price:INR <?php totalPrice();?>,Total Items <?php  item();?></a>
	  
	  </div><!-- end col container start-->
	  <div class ="col-md-6">
	    <ul class="menu">
	      <li>
	       <a href ="customer_registration.php">Register</a>
	      </li>
	      <li>
	      <a href ="checkout.php">My Account</a>
	      </li>
	      <li>
	      <a href ="cart.php">Goto Card</a>
	      </li>
	      <li>
	      <a href ="login.php">Admin login</a>
	      </li>
	    </ul>
	  
	  </div>
   </div><!--end container-->
       </div><!-- top end container-->
 <div class="navbar navbar-default"id="navbar"><!--top bar default start--->
   <div class ="container">
      <div class="navbar-header"><!--nav header-->
	    <a class="navbar-brand home"="index.php">
			
       <!--img src="logo1.jpg" alt="teehosting" class="hidden-xs"width="150"height="100"-->
        <!--img src="logo-small.jpg" alt="teehosting" class="visible-xs"-->
	   </a>
	 <button type="button" class="navbar-toggle"data-toggle="collapse" data-target="#navigation">
	    <span class="sr-only">Toggle Navigation</span>
		<i class="fa fa-align-justify"></i>
		</button>
		
		<button type="button" class="navbar-toggle"data-toggle="navbar-toggle"data-target="#search">
		<span class="sr-only"> </span>
		<i class="fa fa-search"></i>
		</button>
		
	  </div><!-- end navbar header start-->
	  
	        
			<div class="navbar-collapse collapse" id="navigation"><!--collapse-->
			    <div class="padding-nav"><!--padding-nav-->
				    <ul class="nav navbar-nav navbar-left">
					   <li>
					   <a href="index.php">Home</a>
					   </li>
					  
					   <li>
					   <a href="gallery.php">Cake gallery</a>
					   </li>
					   <li>
					   <a href="contact.php">Cake Menu</a>
					   </li>
					   
					    <li class="active">
					   <a href="shop.php">Gifts</a>
					   </li>
					   
					   <li>
					   <a href="cart.php">Login</a>
					   </li>
					  
					    <li>
					   <a href="aboutus.php">About us</a>
					   </li>
					   <li>
					   <a href="about.php">Feedback</a>
					   </li>
					   <li>
					   <a href="contact.php">Contact us</a>
					   </li>
					
					</ul>
	</div><!--end padding-nav-->
			<a href="gift/cart.php" class="btn btn-primary navbar-btn left">
				           <i class="fa fa-shopping-cart"></i>
                           <span><?php  item();?>Items in cart</span>						   
			 </a>
		
<div class="navbar-collapse collapse left"><!---navbar left-->
	 <button class=" btn navbar-btn btn-primary" type="button" data-toggle="collapse" 
		data-target="#search">
			<span class="sr-only">Toggle Search</span>
				<i class="fa fa-search"></i>
					   </button>
				</div><!--collapse left end -->

<div  class="collapse clearfix"id="search">
	<form class="navbar-form" method="get" action="result.php">
		<div class="input-group">
			<input type="text" name="user_query" placeholder="Search" class=
					  "form-control" required="">
				<span class="input-group-btn">  
					<button type="submit" value="Search" name="search" class="btn
					  btn-primary">
					   <i class="fa fa-search"></i>
					   </button>
					 </span>
					  </div>
				    </form>
				</div>	 
			 
	           </div><!-- end collapse-->
          </div>
     </div>	<!-- end nav bar-->
	 
<div id="content">
  <div class="container"><!--start container-->
    <div class="col-md-12">
	  <ul class="breadcrumb">
	    <li><a href=" cake homepage.php">Home</a></li>
		 <li>gifts
		 </li>
		
	  </ul>
	</div>
	
	  
	  <div class="col-md-12" ><!--start col 9-->
	    <!--div class="box">
		  <h1>Shop</h1>
		 <div class="container"> <img src="image/back6.png"width="700" height="200">
		    <!--p>This theme is created by.pallavi tagare,who is the instructor
			if  innstitute of computer 
			</p>
			</div-->
			
			<?php
			 if(!isset($_GET['p_cat'])){
				
				if(!isset($_GET['cat_id'])){
					echo"<div class='box'>
					  <h1>Shop</h1>
		 <p>This theme is created by.pallavi tagare,who is the instructor
			if  innstitute of computer 
			</p>
					  
					
					</div>";
				}
			 }
			?>
				
<!--div class="row"-->

	 
<?php



getGPro();
 /*getPcatPro();
getCatPro();*/

?>
 

	 			 
		
		  
		  
	  </div><!--end col 9-->
 </div><!--end container-->
</div>	 
</div>
</div>
<?php
include("gift/footer.php");
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </body>
 </html>