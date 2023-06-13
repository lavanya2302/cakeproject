<?php
session_start();
include("include/db.php");
include("function/function.php")
?>

<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet"href="styleregistration.css">
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
	  <a href="#">Shopping card Total Price:INR <?php totalPrice();?>,Total Items <?php  item();?></a>
	  
	  </div><!-- end col container start-->
	  <div class ="col-md-6">
	    <ul class="menu">
	      <li>
	       <a href ="registration.php">Register</a>
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
			   echo"<a href ='checkout.php'>login</a>";
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
			 <img src="l2.png" alt="teehosting" class="hidden-xs"width="200"height="110">
        <img src="l2.png" alt="teehosting" class="visible-xs"width="150"height="110"-->
       
	   </a>
	 <!--button type="button" class="navbar-toggle"data-toggle="collapse" data-target="#navigation">
	    <span class="sr-only">Toggle Navigation</span>
		<i class="fa fa-align-justify"></i>
		</button>
		
		<button type="button" class="navbar-toggle"data-toggle="navbar-toggle"data-target="#search">
		<span class="sr-only"> </span>
		<i class="fa fa-search"></i>
		</button-->
		
	  </div><!-- end navbar header start-->
	  
	        
			<div class="navbar-collapse collapse" id="navigation"><!--collapse-->
			    <div class="padding-nav"><!--padding-nav-->
				    <ul class="nav navbar-nav navbar-left">
					   <li>
					   <a href="cake homepage.php">Home </a>
					   </li>
					  
					   <li>
					   <a href="shop.php">Cake gallery</a>
					   </li>
					   
					      <div class="dropdown">
    <button class="dropbtn">Special Occasion
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="shop.php">Mothers day Special</a>
      <a href="shop.php">Womens Day</a>
      <a href="shop.php">Holi Special cake</a>
	  <a href="shop.php">New Year </a>
      <a href="shop.php">Teachers day</a>
    </div>
  </div> 
					   
					    <li class="active">
					   <a href="registration.php">Registration</a>
					   </li>
					   
					  
					    <li>
					   <a href="aboutus.php">About us</a>
					   </li>
					   
					   <li>
					   <a href="contact.php">Contact us</a>
					   </li>
					
					</ul>
	</div><!--end padding-nav-->
			<a href="cart.php" class="btn btn-primary navbar-btn left">
				           <i class="fa fa-shopping-cart"></i>
                           <span><?php  item();?>Items in cart</span>						   
			 </a>
		
<!--div class="navbar-collapse collapse left"><!---navbar left--
	 <button class=" btn navbar-btn btn-primary" type="button" data-toggle="collapse" 
		data-target="#search">
			<span class="sr-only">Toggle Search</span>
				<i class="fa fa-search"></i>
					   </button>
				</div><!--collapse left end --

<!--div  class="collapse clearfix"id="search">
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
	 
<div id="content">
  <div class="container"><!--start container-->
    <div class="col-md-12">
	  <ul class="breadcrumb">
	    <li><a href=" cake homepage.php">Home</a></li>
		 <li>Registration
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
   <h1>User-Registration</h1></div></center>
   </div>
   <div class="containerr">

     <div class="left"></div>
	 <div class="right">
	    <div class="formBoxx">
		   <form action="registration.php" method="POST" enctype="multipart/form-data">
		     <p> Customer Name</p>
			 <input type="text" name="c_name" placeholder="Online">
			 
			 <!--p> Customer Username</p>
			 <input type="text" name="c_user" placeholder="Online"-->
			 
             <p>Customer Email</p>
			 <input type="text" name="c_email" placeholder="Online" id="myEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
			 title="Please required '@',and 1,2">
			 
			 <p> Address</p>
			 <input type="text" name="c_address" placeholder="Online">
			 
			<p>Phone Number</p>
			 <input type="number" name="c_contact" placeholder="Online"> 
			 
			<p>Password</p>
			 <input type="password" name="c_password" placeholder="........"> 
			 
			 
			 <p>Image</p>
			 <input type="file" name="c_image" placeholder="Online">
			
 
  
              
			 <button type="submit" name="submit" class="btn btn-primary">
			  <i class="fa fa-user-md"></i>Register
			 
			 </button>
			 
			 <!--input type="submit" name="submit" value="">
			 <!--a href ="#">Forget Password</a-->
		   </form>
		</div>
   </div>
   </div>
   </div>
   </div>
   </div></div></div>
   
   <?php
include("include/footer.php");
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   </body>
   </html>
  <?php
  if(isset($_POST['submit'])){
	  $c_name=$_POST['c_name'];
	  $c_user=$_POST['c_user'];
	  $c_email=$_POST['c_email'];
	  $c_address=$_POST['c_address'];
	  $c_contact=$_POST['c_contact'];
	  $c_password=$_POST['c_password'];
	 
	  $c_image=$_FILES['c_image']['name'];
	  $c_tmp_image=$_FILES['c_image']['tmp_name'];
	  $c_ip=getUserIP();
	   
	   move_uploaded_file($c_tmp_image,"customer_image/$c_image");
	   
	   $insert_customer="insert into customer(customer_name,customer_username,customer_email,
	   customer_address,customer_contact,customer_pass,customer_image,customer_ip)
	   values('$c_name','$c_user','$c_email','$c_address','$c_contact','$c_password',
	   '$c_image','$c_ip')";
	   
	   $run_customer=mysqli_query($con,$insert_customer);
	   $sel_cart="select * from cart where ip_add='$c_ip'";
	   $run_cart=mysqli_query($con,$sel_cart);
	   $check_cart=mysqli_num_rows($run_cart);
	   if($check_cart>0){
		   $_SESSION['customer_email']=$c_email;
		   echo"<script>alert('You have been registered  sucessfully')</script>";
		   echo"<script>window.open('checkout.php','_self')</script>";
	   }else{
		   $_SESSION['customer_email']=$c_email; 
		   echo"<script>alert('You have been registered  sucessfully')</script>";
		   echo"<script>window.open('cake homepage.php','_self')</script>";
	   }
	  
  }
  
  
  ?> 
   
   
   
   
   
   
   