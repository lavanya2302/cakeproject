<?php
session_start();
error_reporting(0);
include("include/db.php");
include("function/function.php");
?>


<?php
 if(isset($_GET['pro_id'])){
	 $pro_id=$_GET['pro_id'];
	 $get_product="select * from product where product_id='$pro_id'";
	 $run_product=mysqli_query($con,$get_product);
	 $row_product=mysqli_fetch_array($run_product);
	 $p_cat_id=$row_product['p_cat_id'];
	 $pro_title=$row_product['product_title'];
	 $pro_price=$row_product['product_price'];
	 $pro_desc=$row_product['product_desc'];
	 $pro_contain=$row_product['product_contain'];
	 $pro_img1=$row_product['product_img1'];
	 $pro_img2=$row_product['product_img2'];
	 $pro_img3=$row_product['product_img3'];
	 
	 $get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
	$run_p_cat=mysqli_query($con,$get_p_cat);
	$row_p_cat=mysqli_fetch_array($run_p_cat);
	//$p_cat_id=$row_p_cat['p_cat_id'];
	$p_cat_title=$row_p_cat['p_cat_title'];
		 
 }

?>
<!--?php
if(isset($_GET['pro_id'])){
	$pro_id = $_GET['pro_id'];
	$get_p ="select * from product where product_id='$pro_id'";
	$run_edit = mysqli_query($con,$get_p);
	$row_edit = mysqli_fetch_array($run_edit);
	$product_id = $row_edit['product_id'];
	$product_title = $row_edit['product_title'];
	$product_cat= $row_edit['p_cat_id'];
	$cat= $row_edit['cat_id'];
	$product_image1 = $row_edit['product_img1'];
	$product_image2 = $row_edit['product_img2'];
	$product_image3 = $row_edit['product_img3'];
	$product_price = $row_edit['product_price'];
	$product_desc = $row_edit['product_desc'];
	$product_contain = $row_edit['product_contain'];
}
$get_p_cat = "select * from product_categories where p_cat_id='$product_cat'";
$run_p_cat = mysqli_query($con,$get_p_cat);
$row_p_cat = mysqli_fetch_array($run_p_cat);
$p_cat_title = $row_p_cat['p_cat_title'];

//$get_cat = "select * from categories where cat_id='$cat'";
//$run_cat = mysqli_query($con,$get_cat);
//$row_cat = mysqli_fetch_array($run_cat);
//$cat_title = $row_cat['cat_title'];
?-->

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
	      <li>
	      <!--a href ="checkout.php">My Account</a-->
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
					   <a href="cake homepage.php">Home</a>
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
             
          </div>
          </div> 
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
		 
		<li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php  echo $p_cat_title;?></a>
		</li>
		<li><?php  echo $pro_title; ?></li>
	  </ul>
	</div>
	
	
	
	  <!--div class="col-md-3">
	    <!--?php
		  include("include/sidebar.php");
		?>
	  </div-->
	  
	<?php
	  
	  echo"
	

 <div class='row' id='productmain'>
   <div class='col-sm-6'>
 
		   <div class='img-zoom-container'>
		     <div class='item active'>
			   <center>
			 <img id='myimage' src='image/$pro_img1'class='img-responsive'>
			 
			  <div id='myresult' class='img-zoom-result'></div>
			   </center>
			 </div>
			 </div>
			 
			 
		</div>";
	?> 
		<!--div class='col-md-9'-->
	<div class="col-sm-6"><!--col-sm-6-->
	  <div class="box">
	   <h1 class="text-center"class="glow"><?php echo $pro_title;?></h1> 
	   <?php
	   addCart();
	   ?>
	    <form action="details.php?add_cart=<?php echo $pro_id ;?>" method="post" class="form-horizontal">
	     <div class="form-group">
		 <br>
		   <label class="col-md-5 control-label">Product quantity</label>
		   <div class="col-md-7">
		   <select name="product_qty" class="form-control" style="border-radius: 30px;">
		    <option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		   </select>
		   </div>
		    
		 </div>
		   <div class="form-group">
		     <label class="col-md-5 control-label">Cake Weight</label>
			    <div class="col-md-7">
				
				   <select name="product_size" class="form-control" style="border-radius: 30px;">
				      <option>1 Kg</option>
					  <option>2 Kg</option>
					  <option>3 Kg</option>
					  <option>5 Kg</option>
				   </select>
				 </div>
				 </div>
		      <div class="form-group">
		     <label class="col-md-5 control-label">Message  in cake</label>
			    <div class="col-md-7">
				 <input type="text" name="product_msg" class="form-control" style="border-radius: 30px;">
				
				</div>
				</div>
				
				<div class="form-group" >
		     <label class="col-md-5 control-label">Cake Type</label>
			    <div class="col-md-7">
				
				   <select name="product_type" class="form-control"style="border-radius: 30px;" >
				      <option>Eggless</option>
					  <option> With Egg</option>
					  
				   </select>
				 </div>
				 </div>
                 
				 <div class="form-group">
		     <label class="col-md-5 control-label">Ice Cake </label>
			    <div class="col-md-7">
				
				   <select name="ice" class="form-control"style="border-radius: 30px;" >
				      <option style="border-radius:inherit;">Yes </option>
					  <option style="border-radius: 30px;">No</option>
					  
				   </select>
				 </div>
				 </div>
 

				
				<!--div class="form-group">
		     <label class="col-md-5 control-label">Eggless Cake</label>
			    <div class="col-md-2">
				<input type ="checkbox" name="remove[]"class="form-control" value>
				 
				</div>	 
		   </div-->
		   <p class="price">$<?php echo $pro_price?></p>
		   <p class="text-center buttons"> 
		    <button class="btn btn-primary" >
			  <i class="fa fa-shopping-cart"></i>Add to cart
			</button>
		   </p>
		   
	   </form>
	   </div>
	     <!--div class="col-xs-4">
		   <a href="#" class="thumb">
		    <img src="design3.jpg" class="img-responsive">
			</a>
		 </div>
		 <div class="col-xs-4">
		   <a href="#" class="thumb">
		    <img src="design3.jpg" class="img-responsive">
			</a>
		 </div>
		 <div class="col-xs-4">
		   <a href="#" class="thumb">
		    <img src="design3.jpg" class="img-responsive">
			</a>
		 </div-->
		 
	</div>  <!--col-sm-6-->
   </div>
    <div class="box2" id="details">
	 <h3 style="color:pink;font-size:35px" >Product Description </h3>
	 <!--p>Our tasty Truffle Heart Cake makes modern day celebration is complete. Relish this flavourful Truffle Cake for its awesome looks and decadent texture. MyFlowerTree is a popular online gifting portal that hosts and home delivers a wide range of cakes, at many locations all across India with great pride and joy.

</p-->
<h3>Highlights</h3>
<p style="color:maroon;font-size:2px" ><?php  echo $pro_desc ;?></p>
<hr>
<!--h4 style="color:pink;font-size:30px" >Product Contains:</h4>
<li style="color:maroon;font-size:20px"><?php echo $pro_contain ;?></li>
<!--li> Cake Flavour- Truffle
<li> Shape - Heart Shape
<li> Type of Cake - Cream
<li>Weight- One Kg
<li>Serves- 10-12 People
<li>Candles & Knife Included</li-->
</hr>
<h4 style="font-style:bold;">Delivery Details:</h4>
<li>The delicious cake is hand-delivered by our delivery boy in a good quality cardboard box.
<li>Candle and knife will be delivered as per the availability.</li>
	<hr>
	<h4>Care Instruction</h4>
	<li>Store cake in a refrigerator.</li>
<li>Consume the cake within 24 hours.</li>
  <hr>
  <p>This cake offers you to unfold the taste of mysterious cherries with smooth classic cream. The thick layering of whipped cream won’t allow you to resist the lure of this magnificent cake. It’s made with the combination of juicy cherries, whipped cream, and smooth chocolate. 
  Have it fast so that you would not regret in the last. </p>
  <hr>
  <h3>Ingredients Used:</h3> 

<p>All-purpose flour, White sugar, Unsweetened cocoa powder, Baking powder, Baking soda, Salt, Milk, Vegetable oil, Vanilla extract, Sour cherries, Cornstarch, 
Whipping cream, Confectioners' sugar</p>
	 </div>
	 
	
<div id="row same-height-row"><!--strat row height-->
  <div class="col-md-3 col-sm-6">
    <div class="box same-height headline">
	   <h3 class="text-center">you also like these products</h3>
	</div>
  </div>
  
<!--satrt cake image-->
 <?php 
 $get_product="select * from product  order by 1 LIMIT 0,4";
 $run_product=mysqli_query($con,$get_product);
 while($row=mysqli_fetch_array($run_product)){
	 $pro_id=$row['product_id'];
	 $product_title=$row['product_title'];
	 $product_price=$row['product_price'];
	 $product_img1=$row['product_img1'];
	 echo"
	 
	  <div class='center-responsive col-md-2 col-sm-6'>
	  <div class='inner'>
   <div class='product same-height headline'>
     <a href='details.php?pro_id=$pro_id'>
	   <img src=image/$product_img1 class='img-responsive'>
	 </a>
	  <div class='text'>
	    <h3><a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
		<p class='price'>$product_price</p>
	  </div>
   </div>
   </div>
 </div> 
	 
	 
	 
	 ";
	 
 }
 
 ?>
 <!--end cake image-->
 
 
 <!--div class="center-responsive col-md-3"><!--start col 3 responsive-
   <div class="product same-height headline">
     <a href="">
	   <img src="back7.jpg" class="img-responsive">
	 </a>
	  <div class="text">
	    <h3><a href="details.php">Multi cake pattern
		</a></h3>
		<p class="price">INR 400</p>
	  </div>
   </div>
 </div> <!--end responsive col-3 --
 
 <div class="center-responsive col-md-3"><!--start col 3 responsive--
   <div class="product same-height headline">
     <a href="">
	   <img src="back7.jpg" class="img-responsive">
	 </a>
	  <div class="text">
	    <h3><a href="details.php">Multi cake pattern
		</a></h3>
		<p class="price">INR 400</p>
	</div>
   </div>
 </div> <!--end responsive col-3 --	
		
		<div class="center-responsive col-md-3"><!--start col 3 responsive--
   <div class="product same-height headline">
     <a href="">
	   <img src="back7.jpg" class="img-responsive">
	 </a>
	  <div class="text">
	    <h3><a href="details.php">Multi cake pattern
		</a></h3>
		<p class="price">INR 400</p>
	</div>
   </div>
 </div> <!--end responsive col-3 -->	
		
		
	 
 </div> <!--end row-->
 
</div>	  
</div>	
</div>

		 
<?php
include("include/footer.php");
?>
<?php
echo"
<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement('DIV');
  glass.setAttribute('class', 'img-magnifier-glass');
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = 'url(' + img.src + ')';
  glass.style.backgroundRepeat = 'no-repeat';
  glass.style.backgroundSize = (img.width * zoom) + 'px ' + (img.height * zoom) + 'px';
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener('mousemove', moveMagnifier);
  img.addEventListener('mousemove', moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener('touchmove', moveMagnifier);
  img.addEventListener('touchmove', moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + 'px';
    glass.style.top = (y - h) + 'px';
    /*display what the magnifier glass 'sees':*/
    glass.style.backgroundPosition = '-' + ((x * zoom) - w + bw) + 'px -' + ((y * zoom) - h + bw) + 'px';
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
<script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify('myimage', 3);
</script>";
?>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </body>
 </html>
 