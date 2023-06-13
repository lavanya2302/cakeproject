<?php

include("db.php");
include("admin/function/function.php")
?>

<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet"href="stylelogin.css">
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
	  <a href="#">Shopping card Total Price:INR <?php totalPrice();?> Total Items<?php  item();?></a>
	   
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
		  <?php
		   if(!isset($_SESSION['customer_email'])){
			   echo"<a href ='checkout.php'>Admin login</a>";
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
					   
					    <li>
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
					   <li class="active">
					   <a href="contactus.php">Contact us</a>
					   </li>
					
					</ul>
	</div><!--end padding-nav-->
			<a href="cart.php" class="btn btn-primary navbar-btn left">
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
		 <li>login
		 </li>
		
	  </ul>
	</div>
	
	  <div class="col-md-3">
	    <?php
		  include("include/sidebar.php");
		?>
	  </div> 
   
<div class="col-md-9">
	   <div class="box">
	   <div class="box-header">
		     <center>
   <div class ="titlel">
   <h1>Login </h1>
     <h2><p class="lead">Already our customer</p></h2>
   </div></center></div>
   <div class="containerr">
     <div class="left"></div>
	 <div class="right">
	    <div class="formBoxx">
		   <form action="checkout.php" method="post">
		      <div class="form-group">
		     <label>Username</label>
			 <input type="text" name="c_user" placeholder="Online" required="required">
			  </div>
			  <div class="form-group">
			 <label>Password</label>
			 <input type="password" name="c_pass" placeholder="........">
			 </div>
			
			 <button type="submit" name="submit" class="btn btn-primary">
			  <i class="fa fa-user-md"></i>login</button>
			  
			
			<!--input type="submit" name="" value="login"-->
			 <a href ="#">Forget Password</a>
		   </form>
		   <center>
  <a href="registration.php" >
  <h3>New? Register Now</h3>
  </a></center>
		</div>
		</div>
   </div>
   </div></div></div>
   </div></div></div>
   
   <?php
include("include/footer.php");
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   </body>
   </html>
   <?php
   if(isset($_POST['login'])){
	   $customer_username=$_POST['c_user'];
	    $customer_password=$_POST['c_pass'];
		$select_customer="select* from customer where customer_username='$customer_username'
		AND customer_pass='$customer_pass'";
		$run_cust=mysqli_query($con,$select_customer);
		$get_ip=getUserIP();
		$check_customer=mysqli_num_rows($run_cust);
		$select_cart="select * from where ip_add='$get_ip'";
		$run_cart=mysqli_query($con,$select_cart);
		$check_cart=mysqli_num_rows($run_cart);
		if($check_customer==0){
			echo"<script>alert('Password/Username wrong')</script>";
			exit();
		}
		if($check_customer==1 AND $check_cart==0){
			$_SESSION['customer_username']=$customer_username;
			echo"<script>alert('Your are logged in ')</script>";
			echo"<script>window.open('my_account.php')</script>";
		}else{
			$_SESSION['customer_username']=$customer_username;
			echo"<script>alert('Your are logged in ')</script>";
			echo"<script>window.open('checkout.php')</script>";
		}
	   
   }
   
   ?>
  
