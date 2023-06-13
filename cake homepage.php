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
	    <a class="navbar-brand home"="cake homepage.php">
		  
       <img src="l2.png" alt="teehosting" class="hidden-xs"width="200"height="110">
        <img src="l2.png" alt="teehosting" class="visible-xs"width="150"height="110">
	   </a>
	 <!--button type="button" class="navbar-toggle"data-toggle="collapse" data-target="#navigation">
	    <span class="sr-only">Toggle Navigation</span>
		<i class="fa fa-align-justify"></i>
		</button>
		
		<!--button type="button" class="navbar-toggle"data-toggle="navbar-toggle"data-target="#search">
		<span class="sr-only"> </span>
		<i class="fa fa-search"></i>
		</button-->
		
	  </div><!-- end navbar header start-->
	  
	        
			<div class="navbar-collapse collapse" id="navigation"><!--collapse-->
			    <div class="padding-nav"><!--padding-nav-->
				    <ul class="nav navbar-nav navbar-left">
					   <li class="active">
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
             <a href="shop.php">Mothers day Special</a>
             <a href="shop.php">Womens Day</a>
             <a href="shop.php">Holi Special cake</a>
	         <a href="shop.php">New Year </a>
             <a href="shop.php">Teachers day</a>
          </div>
          </div> 
					   
					   <!--li>
					   <a href="cart.php">Login</a>
					   </li-->
					  
					    <li>
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
  
<div class="container" id="slider"><!--image-->
   <!--div class =" col-md-6 col-sm-25"col-sm-25-->
	  <!--div class="carousel slide" id="myCarousel">
        <div class="carousel-inner"--><!-- start inner-->
		   <!--div class="item active"-->
			
			  <?php
			   $get_slider="select * from  slider ";
			   $run_slider=mysqli_query($con,$get_slider);
			   while($row=mysqli_fetch_array($run_slider)){
				   $slider_name=$row['slider_name'];
				   $slider_image=$row['slider_image'];
				   echo"<div class='item active'>
				   <img  class='mySlides'src='$slider_image'>
				   </div>";
			   }
			   
			   
			  ?>
            <!--img  class="mySlides "src="back3.jpg">
            <img  class="mySlides "src="back5.jpg">
            <img  class="mySlides "src="back1.jpg">
            <img  class="mySlides "src="back2.jpg">
             <img  class="mySlides "src="back4.png">
			 <img class="mySlides"src="back7.jpg">
             </div-->
		  
		  
		  
			
		</div></div><div></div>
	<!--div id="advantage"><!--start advantage in box--
	  <div class="container">
	     <div class="same-height-row">
		   <div class="col-sm-4">
		      <div class="box same-height">
			    <div class="icon">
				  <i class="fa fa-heart"></i>
				</div>
				 <!--h3><a href="#">BEST PRICES</h3--
				 <div class="img">
				 <img src="l.jpg">
				 </div>
				<p> You can check on all others  sites about the prices and than compare with us.</p> 
			   </div>
			 </div><!--end col--
       <div class="col-sm-4">
		      <div class="box same-height">
			    <div class="icon">
				  <i class="fa fa-heart"></i>
				</div>
				 <!--h3><a href="#">BEST PRICES</h3--
				 <img src="l.jpg" width="350">
				<p> You can check on all others  sites about the prices and than compare with us.</p> 
			   </div>
			 </div>
     <div class="col-sm-4">
		      <div class="box same-height">
			    <div class="icon">
				  <i class="fa fa-heart"></i>
				</div>
				 <h3><a href="#">BEST PRICES</h3>
				<p> You can check on all others  sites about the prices and than compare with us.</p> 
			   </div>
			 </div>			 
		  </div>
	   </div>
    </div><!--end advantage in box-->

<div id="hot"><!--hot start-->
  <div class="box1">
    <div class="container">
	  <div class="col-md-12">
	  <h2>Latest this Week</h2>
      </div>
    </div>
  </div>
</div><!--hot product end-->
<!--start image with prize  details-->
<div id ="content" class="container"><!--cake gallery-->
  <div class="row">
     <?php
	  getPro();
	 ?>
   <?php
	   addCart();
	   ?>
	   
	   
    <!--div class="col-sm-4 col-sm-6 single"><!- col start
	   <div class="product">
	     <a href="details.php">
		    <img src="image/black-forest-cake.jpg" class="img-responsive">
		 </a>
		 <div class="text">
		   <h3><a href="details.php">BENETTIONN White Pole  Shirt
		   </a></h3>
		<p class="price">INR 300</p>
		 <p class="button">
		    <a href="details.php" class="btn btn-default">View Details</a>
			<a href="details.php"class="btn btn-primary">
			<i class="fa fa-shopping-cart"></i>Add to cart
			</a>
		 </p>
		 
		 </div>	 
	   </div>
	</div><!--end col--
	
	<div class="col-sm-4 col-sm-6 single"><!--start col--
	   <div class="product">
	     <a href="details.php">
		    <img src="image/black-forest-cake.jpg" class="img-responsive">
		 </a>
		 <div class="text">
		   <h3><a href="details.php">BENETTIONN White Pole  Shirt
		   </a></h3>
		<p class="price">INR 300</p>
		 <p class="buttons">
		    <a href="details.php" class="btn btn-default">View Details</a>
			<a href="details.php"class="btn btn-primary">
			<i class="fa fa-shopping-cart"></i>Add to cart
			</a>
		 </p>
		 
		 </div>	 
	   </div>
	</div><!--end col--
	
	<div class="col-sm-4 col-sm-6 single"><!--start col--
	   <div class="product">
	     <a href="details.php">
		    <img src="image/black-forest-cake.jpg" class="img-responsive">
		 </a>
		 <div class="text">
		   <h3><a href="details.php">BENETTIONN White Pole  Shirt
		   </a></h3>
		<p class="price">INR 300</p>
		 <p class="button">
		    <a href="details.php" class="btn btn-default">View Details</a>
			<a href="details.php"class="btn btn-primary">
			<i class="fa fa-shopping-cart"></i>Add to cart
			</a>
		 </p>
		 
		 </div>	 
	   </div>
	</div>
	  <div class="col-sm-4 col-sm-6 single"><!--start col-
	   <div class="product">
	     <a href="details.php">
		    <img src="image/design3.jpg" class="img-responsive">
		 </a>
		 <div class="text">
		   <h3><a href="details.php">BENETTIONN White Pole  Shirt
		   </a></h3>
		<p class="price">INR 300</p>
		 <p class="button">
		    <a href="details.php" class="btn btn-default">View Details</a>
			<a href="details.php"class="btn btn-primary">
			<i class="fa fa-shopping-cart"></i>Add to cart
			</a>
		 </p>
		 
		 </div>	 
	   </div>
	</div-->
	</div>
	</div>
	
	
	
	
	<div class="col-md-12" ><!--start col 9-->
	    <div class="box" style="background-image:url(image/gif4.gif);">
		  <!--h1>Shop</h1-->
		 <div class="container"> <a href="about.php"><img src="image/banner.png"width="1140" height="400"></a>
		    <!--p>This theme is created by.pallavi tagare,who is the instructor
			if  innstitute of computer 
			</p--->
			</div>
			</div>
			</div>
			 
			 
			 </div>
			 <div id="hot"><!--hot start-->
              <div class="box1">
             
	        
	      <h2 >Our Team Members</h2>
           </div>
           
          </div><!--hot product end-->
		  <br>
		  <div id="hot"><!--hot start-->
              <div class="box"style="background-color:pink;" >
    <div class="container">
        <div class="row">
		<div class="col-md-12" >
             
			 <?php
				   // $i=0;
					$get_admin="select * from admin order by 1 LIMIT 0,4" ;
				
					$run_admin=mysqli_query($con,$get_admin);
					while($row_admin=mysqli_fetch_array($run_admin)){
						
						$admin_name=$row_admin['admin_name'];
						$admin_email=$row_admin['admin_email'];
						$admin_image=$row_admin['admin_image'];
						$admin_city=$row_admin['admin_city'];
						$admin_job=$row_admin['admin_job'];
						
						
						//$i++;
			
					
						echo"
					

		            
				 
				 
            <div class='col-md-3 col-sm-3'>
                <div class='our-team'>
                    <div class='pic'>
                        <img src='admin1ad/admin_image/$admin_image'>
                    </div>
                    <h3 class='title'>$admin_name</h3>
                    <span class='post'>$admin_job</span>
                    <ul class='social'>
                        <li><a href='' class='fa fa-facebook'></a></li>
                        <li><a href='#' class='fa fa-twitter'></a></li>
                        <li><a href='#' class='fa fa-google-plus'></a></li>
                        <li><a href='#' class='fa fa-linkedin'></a></li>
                    </ul>
                </div>
            </div>
			
			";
             ?>
			 <!--/div>
			</div-->
			<!--/div>
			</div-->
			
            <!--div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="team.jpeg">
                    </div>
                    <h3 class="title">Kristiana</h3>
                    <span class="post">Web Designer</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="Kishi-Arora.jpg">
                    </div>
                    <h3 class="title">Kristiana</h3>
                    <span class="post">Web Designer</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
              
			  <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="image4.jpg">
                    </div>
                    <h3 class="title">Kristiana</h3>
                    <span class="post">Web Designer</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div-->
<?php } ?>
        </div>
    </div>








	      
           </div>
           </div>
           </div>
          </div><!--hot product end-->
			  
           
		   
		 
			
			
	
  
  
<!--end cake gallery-->

<!--stat footer-->

<?php

include("include/footer.php");
?>
<!--end footer-->





<?php 
echo"<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName('mySlides');
  for (i = 0; i < x.length; i++) {
    x[i].style.display = 'none';  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = 'block';  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>";


?>
<!--end image-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</body>
</html>
					