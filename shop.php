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
	  <a href="#">Card Total Price:INR <?php totalPrice();?>,Total Items <?php  item();?></a>
	  
	  </div><!-- end col container start-->
	  <div class ="col-md-6">
	    <ul class="menu">
	      <li>
	       <a href ="registration.php">Register</a>
	      </li>
	      <!--li>
	      <a href ="my_account.php">My Account</a>
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
	      <!--a href ="login.php">Admin login</a-->
		  <?php
		   if(!isset($_SESSION['customer_email'])){
			   echo"<a href ='checkout.php'>Login</a>";
		   }else{
			   echo"<a href ='logout.php'>Logout</a>";
			   
		   }
		   ?>
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
        <img src="l2.png" alt="teehosting" class="visible-xs"width="150"height="110">
       
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
					   <a href="home.php">Home</a>
					   </li>
					  
					   <li class="active">
					   <a href="shop.php">Cake gallery</a>
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
				</div-->	 
			 
	           </div><!-- end collapse-->
          </div>
     </div>	<!-- end nav bar-->
	 
<div id="content">
  <div class="container"><!--start container-->
    <div class="col-md-12">
	  <ul class="breadcrumb">
	    <li><a href=" cake homepage.php">Home</a></li>
		 <li>shop
		 </li>
		
	  </ul>
	</div>
	
	  <div class="col-md-3">
	    <?php
		  include("include/sidebar.php");
		?>
	  </div>
	  <div class="col-md-9" ><!--start col 9-->
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
					  <h1>Cake Gallery</h1>
		 <p>
			</p>
					  
					
					</div>";
				}
			 }
			?>
			
			
		
<div class="row">
	<?php
if(!isset($_GET['p_cat'])){
	if(!isset($_GET['cat_id'])){
		 $per_page=6;
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else{
		$page=1;
	}
	$start_from=($page-1)*$per_page;
	$get_product="select * from product order by 1 DESC LIMIT $start_from,
	$per_page";
	$run_pro=mysqli_query($con,$get_product);
	while($row=mysqli_fetch_array($run_pro)){
		$pro_id=$row['product_id'];
		$pro_title=$row['product_title'];
		$pro_price=$row['product_price'];
		$pro_img1=$row['product_img1'];
		

		
		echo"<div class='col-md-4 col-sm-6 center-responsive'>
		<div class='inner'>
			    <div class='product'>
				  <a href='details.php?pro_id=$pro_id'>
				  <img src='image/$pro_img1'class='img-responsive'>
				   </a>
				   
				   
				    <div class='text'>
					  <h3>
					    <a href='detail.php?pro_id=$pro_id'>$pro_title</a></h3>
					    <p class='price'>INR $pro_price</p>
						<p class='buttons'>
						   <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
						   <a  href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add Cart</a>
						</p>
					</div>
				</div>
				</div>
			 </div>";
	}
	
	
		 
?>	 



 
		
 

	 			 
			 
		 <!--div class="col-md-4 col-sm-6 center responsive"><!--col-md4-6--
			    <div class="product">
				  <a href="details.php">
				    <img src="image/carrot-cake-Recipe.jpg" class="img-responsive">
				   </a>
				    <div class="text">
					  <h3>
					    <a href="detail.php">Mardaz pack of 5-multicolor cotton v-neck t-shirts 
						for girls
						 </a>
					  </h3>
					    <p class="price">INR 300</p>
						<p class="buttons">
						   <a href="details.php" class="btn btn-default">View Details</a>
						   <a  href="details.php" class="btn btn-default"><i class="fa fa-shopping-cart"></i>Add</a>
						</p>
					</div>
				</div>
			 </div><!-- end col-md4-6--
			 
			 
			 <div class="col-md-4 col-sm-6 center responsive"><!--col-md4-6--
			    <div class="product">
				  <a href="details.php">
				    <img src="image/carrot-cake-Recipe.jpg" class="img-responsive">
				   </a>
				    <div class="text">
					  <h3>
					    <a href="detail.php">Mardaz pack of 5-multicolor cotton v-neck t-shirts 
						for girls
						 </a>
					  </h3>
					    <p class="price">INR 300</p>
						<p class="buttons">
						   <a href="details.php" class="btn btn-default">View Details</a>
						   <a  href="details.php" class="btn btn-default"><i class="fa fa-shopping-cart"></i>Add</a>
						</p>
					</div>
				</div>
			 </div><!-- end col-md4-6--
			 
			 <div class="col-md-4 col-sm-6 center responsive"><!--col-md4-6--
			    <div class="product">
				  <a href="details.php">
				    <img src="image/carrot-cake-Recipe.jpg" class="img-responsive">
				   </a>
				    <div class="text">
					  <h3>
					    <a href="detail.php">Mardaz pack of 5-multicolor cotton v-neck t-shirts 
						for girls
						 </a>
					  </h3>
					    <p class="price">INR 300</p>
						<p class="buttons">
						   <a href="details.php" class="btn btn-default">View Details</a>
						   <a  href="details.php" class="btn btn-default"><i class="fa fa-shopping-cart"></i>Add</a>
						</p>
					</div>
				</div>
			 </div><!-- end col-md4-6--
		  </div--><!--row end-->
		  </div>
		  <center>
		    <ul class="pagination">
			
			<?php
	     
	            $query="select * from product";
				$result=mysqli_query($con,$query);
				$total_record=mysqli_num_rows($result);
				$total_pages=ceil($total_record/$per_page);
				echo"
				  <li><a href='shop.php?page=1'>".'First page'."</a></li>";
				   for($i=1; $i<=$total_pages; $i++  ){
					    
						echo"
				  <li><a href='shop.php?page=".$i."'>".$i."</a></li>";
				   };
                  echo"
				  <li><a href='shop.php?page=$total_pages'>".'Last page'."</a></li>";
				
					 
					 }
                }
			    ?>
			  <!--li><a href="shop.php">First page</a></li>
			  <li><a href="shop.php">1</a></li>
			  <li><a href="shop.php">2</a></li>
			  <li><a href="shop.php">3</a></li>
			  <li><a href="shop.php">4</a></li>
			  <li><a href="shop.php">Last page</a></li-->
			</ul>
		  </center>
		  
		  <?php
		  getPcatPro();
		 getCatPro();
		  ?>
		  </div>
		  
	  </div><!--end col 9-->
 </div><!--end container-->
</div>	 
</div>
</div>
<?php
include("include/footer.php");
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </body>
 </html>