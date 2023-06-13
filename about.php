<?php
session_start();
include("include/db.php");
include("function/function.php");
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
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
	  <?php
	  if(!isset($_SESSION['customer_email'])){
		echo"Welcome Guest";  
	  }else{
		  echo"Welcome:" .$_SESSION['customer_email']."";
	  }
	  ?>
	  
	  
	  </a>
	  <a href="#"> Card Total Price:INR <?php totalPrice();?>,Total Items <?php  item();?></a>
	  
	  </div><!-- end col container start-->
	  <div class ="col-md-6">
	    <ul class="menu">
	      <li>
	       <a href ="registration.php">Register</a>
	      </li>
	      <!--li>
	      <a href ="customer/my_account.php">My Account</a>
	      </li-->
	      <li>
		  <?php
		  if(!isset($_SESSION['customer_email'])){
			  echo"<a href='checkout.php'>My Account</a>";
		    }else{
				echo"<a href='my_account.php?my_order'>My Account</a>";
			}
		  ?>
		  </li>
		  <li>
	      <a href ="cart.php">Goto Card</a>
	      </li>
	      <li>
		  <?php
		   if(!isset($_SESSION['customer_email'])){
			   echo"<a href ='checkout.php'> Login</a>";
		   }else{
			   echo"<a href ='logout.php'>Logout</a>";
			   
		   }
		   ?>
		  
	      <!--a href ="login.php">Admin login</a-->
	      </li>
	    </ul>
	  
	  </div>
   </div><!--end container-->
       </div><!-- top end container-->
 <div class="navbar navbar-default"id="navbar"><!--top bar default start--->
   <div class ="container">
      <div class="navbar-header"><!--nav header-->
	    <a class="navbar-brand home"="cake homepage.php">
			
       <img src="l2.png" alt="teehosting" class="hidden-xs"width="200"height="110">
        <img src="l2.png" alt="teehosting" class="visible-xs"width="150"height="110">
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
					   <a href="cake homepage.php">Home</a>
					   </li>
					    
             
					


						
					   <!--li>
					   <a href="gallery.php">Cake gallery</a>
					 
				
					   </li-->
					   <li>
					   <a href="shop.php">Cake Gallery</a>
					   </li>
					   
					   
					          <div class="dropdown">
    <button class="dropbtn">Special Occasion
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Mothers day Special</a>
      <a href="#">Womens Day</a>
      <!--a href="#">Link 3</a>
	  <a href="#">Link 2</a>
      <a href="#">Link 3</a-->
    </div>
  </div> 
					   
					   <!--li>
					   <a href="cart.php">Login</a>
					   </li-->
					  
					    <li class="active">
					   <a href="about.php">About us</a>
					   </li>
					   <!--li>
					   <a href="feedback.php">Feedback</a>
					   </li-->
					   <li>
					   <a href="contact.php">Contact us</a>
					   </li>
					
					</ul>
	</div><!--end padding-nav-->
			<a href="cart.php" class="btn navbar-btn btn-primary right">
				           <i class="fa fa-shopping-cart"></i>
                           <span><?php  item();?>Items in cart</span>						   
			 </a>
		
<!--div class="navbar-collapse collapse left"><!---navbar left--
	 <button class=" btn btn-primary navbar-btn " type="button" data-toggle="collapse" 
		data-target="#search">
			<span class="sr-only">Toggle Search</span>
				<i class="fa fa-search"></i>
					   </button>
				</div><!--collapse left end --

<div  class="collapse clearfix" id="search">
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
				</div-->	 
			 
	           </div><!-- end collapse-->
          </div>
     </div>	<!-- end nav bar-->
<!--link rel="stylesheet" href="style1.css"-->
<style>
/*body {
  background-color: black;
  font-family: cursive;
}*/

.glow {
  font-size: 70px;
  color: white;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 10px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div id="content">
  <div class="container"><!--start container-->
    <div class="col-md-18">
	  <ul class="breadcrumb">
	    <li><a href=" cake homepage.php">Home</a></li>
		 <li>About Us
		 </li>
		
	  </ul>
	</div>
  <div class="about-seaction" >
    <div class="inner-container">
	<div class="col-md-16"  ><!--start col 9-->
	    <div class="box">
		<h1 class="glow">About Us</h1>
		  
		 <div class="container" >
		    
	 
	     <h2>Cake Delivery Online, Order & Send Cake Online</h2>
	    <div class="skills">
		<p class="text" style="font-color:white">
		   A celebration is never complete without gratifying your dear ones with something sweet and delicious. To make sure that you have something
		   truly fascinating, our online cake shop has come up with an online cake delivery service in India. Now, you can easily order cake online and get it delivered anywhere in India.
		   Cakes have become a vital component of occasions, parties and celebrations. If you are unable to visit India on special occasions, then you can still mark your presence by ordering a cake and send cake online from any part of the world. Our flavorsome cake will surely win the heart of your loved ones.
		   So, go ahead and order cake online to bring a massive smile to the face of your loved ones.
	      </p>
		  <h2>List Of Delicious Cakes Ready For Cake Delivery Online</h2>
		 <div class="skills" >
		<p class="text"> 
 *Red Velvet Cakes - Layers of red sponge cake covered up with yummy cream cheese frosting
 <br>*Chocolate Cakes - Chocolate sponge cake with loads of choco cream on it
 <br>*Butterscotch Cakes - Perfect crunch of caramel and buttercream added to this one
 <br>*Fruit Cakes - From pineapple, mango, strawberry, to blueberry; here you get endless fruit loaded cakes
 <br>*Designer Cakes - Surprise your dear ones with colorful and designed creamy or fondant cakes
 <br>*Wedding Cakes - Woo your better half with a multi-tiered royal icing cake baked with love and affection
 <br>*Cartoon-Themed Cakes - Let your little ones rush in joy to you seeing some amazing cartoon-inspired cakes. Eg., spiderman cake, minion cake, Doraemon cake, shinchan cake, Chota bheem cake, ben10 cake, angry bird cake, cinderella cake, and so on….
 <br>*Heart-Shaped Cakes - Speak out your heart on Valentine’s Day or anniversary with nice and delectable heart-shaped cakes
 <br>*Fondant Cakes - Delicious and cream loaded cakes covered with colorful fondants characters 
 <br>*Eggless Cakes - Eggitarians can now enjoy lip-smacking eggless cakes filled with amazing cream and fluffy sponge cake
 <br>*Dry Cakes - For all the dry cake lovers, we got a huge range of dry cakes like walnut cake, almond cake, nutty cake, etc., to enjoy the taste
 
		</p>
		</div>
		</div>
		</div>
		</div>
		<div class="skills">
		<span></span>
		<span></span>
		<span></span>
		


    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
<?php
include('include/footer.php');?>
</body>
</html>

<!--!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-color: black;
  font-family: cursive;
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
</head>
<body>

<h1 class="glow">GLOWING TEXT</h1>
     
</body>
</html> 
<!DOCTYPE html>
<html>
<head>
<style>
html {
  scroll-behavior: smooth;
}

#section1 {
  height: 600px;
  background-color: pink;
}

#section2 {
  height: 600px;
  background-color: yellow;
}
</style>
</head>
<body>

<h1>Smooth Scroll</h1>

<div class="main" id="section1">
  <h2>Section 1</h2>
  <p>Click on the link to see the "smooth" scrolling effect.</p>
  <a href="#section2">Click Me to Smooth Scroll to Section 2 Below</a>
  <p>Note: Remove the scroll-behavior property to remove smooth scrolling.</p>
</div>

<div class="main" id="section2">
  <h2>Section 2</h2>
  <a href="#section1">Click Me to Smooth Scroll to Section 1 Above</a>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: 'Brush Script MT', cursive;
}
</style>
</head>
<body>

<h1>Lorem ipsum dolor sit amet</h1>

<p>Lorem ipsum dolor sit amet.</p>
<p>0 1 2 3 4 5 6 7 8 9</p>

</body>
</html>
