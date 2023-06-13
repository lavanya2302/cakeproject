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
	      <li>
	      <!--a href ="my_account.php">My Account</a-->
		  
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
			   echo"<a href ='checkout.php'>login</a>";
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
					    
					    <li class="active">
					   <a href="cart.php">Cart</a>
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
                           <span><?php item ();?>Items in cart</span>						   
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
		 <li>cart
		 </li>
	  </ul>
<div class="col-md-9" id ="cart">
  <div class="box">
    <form action="cart.php" method="post" enctype="multipart-form-data">
	  <h1>Cake  item Cart</h1>
	  <?php
	  $ip_add=getUserIP();
	  $select_cart="select * from  cart where ip_add='$ip_add'";
	  $run_cart=mysqli_query($con,$select_cart);
	  $count=mysqli_num_rows($run_cart);
	  
	  
	  ?>
	  <p class="text-muted"> Currently You have <?php  echo $count ?> item(s) in your cart</p>
	  <div class="table-responsive">
	    <table class="table">
		  <thead>
		    <tr>
			 <th colspan="2">Product</th>
			 
			 <th>Quantity</th>
			 <th>Unit Prize</th>
			 <th>Weight</th>
			 
			 <th colspan="1">Delete</th>
			 <th colspan="1">Sub total</th>
			</tr>
		  </thead>
		    <tbody>
			<?php
			$total=0;
			while($row=mysqli_fetch_array($run_cart)){
				 $pro_id=$row['p_id'];
				  $pro_size=$row['size'];
				   $pro_qty=$row['qty'];
				 $get_product="select * from product where product_id='$pro_id'";
				 $run_pro=mysqli_query($con,$get_product);
			while($row=mysqli_fetch_array($run_pro)) {
				$p_title=$row['product_title'];
			   $p_img1=$row['product_img1'];
			   
	     	   $p_price=$row['product_price'];
			   $sub_total=$row['product_price']* $pro_size *$pro_qty;
			   $total += $sub_total;//$total =$total+$sub_total;
			
			?>
			
			
			   <tr>
			     <td><img src="image/<?php echo $p_img1 ?>"></td>
				 <td><?php echo $p_title ?></td>
				 <td><?php echo $pro_qty ?></td>
				 <td><?php echo $p_price ?></td>
				 <td><?php echo $pro_size ?></td>
				
				 <td><input type ="checkbox" name="remove[]" value="<?php echo $pro_id ?>"></td>
				 <td>INR <?php echo $sub_total ?></td>
			   </tr>	

                 		   
			  
			   <?php } }?>
               <!--tr>
			     <td><img src="back3.jpg"></td>
				 <td>cake multi flavours</td>
				 <td>2</td>
				 <td>INR 199</td>
				 <td>Large</td>
				 <td><input type ="checkbox" name="remove[]"></td>
				 <td>INR 398</td>
			   </tr>

           <tr>
			     <td><img src="back3.jpg"></td>
				 <td>cake multi flavours</td>
				 <td>2</td>
				 <td>INR 199</td>
				 <td>Large</td>
				 <td><input type ="checkbox" name="remove[]"></td>
				 <td>INR 398</td>
			   </tr>			   
			</tbody>
			 <tfoot>
			   <tr>
			    <th colspan="5">Total</th>
				 <th colspan="2">INR 398</th>
				  
			   </tr-->
			 </tfoot> 
		</table> 
	  </div>
	   <div class="box-footer">
	     <div class="pull-left">
		   <h3>Total Price</h3>
		 </div>
		 <div class="pull-right">
		   <h3>INR <?php echo $total ; ?></h3>
		 </div>
		</div>
	   
	   
	   
	   
	   <div class="box-footer">
	     <div class="pull-left">
		   <a href="cake homepage.php" class="btn btn-default">
		      <i class="fa fa-chevron-left">Continue shopping</i>
		    </a>
		 </div>
		 <div  class="pull-right">
		    <button class="btn btn-default" type="submit" name="update" value="Update Cart">
			  <i class="fa fa-refresh">Update Cart</i>
			</button>
			  <a href="checkout.php" class="btn btn-primary">
			  Proceed to checkpout<i class="fa fa-chevron-right"></i>
			  </a>
		  </div> 
		  </div>
	</form>
  </div>
  
  <?php
  function update_cart(){
	  global $con;
	  if(isset($_POST['update'])){
		  foreach($_POST['remove']as $remove_id){
			  $delete_product="delete from cart  where p_id='$remove_id'";
			  $run_del=mysqli_query($con,$delete_product);
			  if($run_del){
				  echo"<script>window.open('cart.php','_self')</script>";
			  }
		  }
	  }
  }
      
	  echo @$up_cart=update_cart();
  
  ?>
  <!--div id ="row same-height-row">
     <div class="col-md-3 col-sm-6">
	    <div class="box same-height headline">
		   <h3 class="text-center">You also like these products</h3>
		</div>
	 </div>
	 
	 
	   
	  <!--?php 
 $get_product="select * from product  order by 1 LIMIT 0,4";
 $run_product=mysqli_query($con,$get_product);
 while($row=mysqli_fetch_array($run_product)){
	 $pro_id=$row['product_id'];
	 $product_title=$row['product_title'];
	 $product_price=$row['product_price'];
	 $product_img1=$row['product_img1'];
	 echo"
	 
	  <div class='center-responsive col-md-3 col-sm-6'>
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
 </div> <!--end row-->
  </div><!--end col-md 9-->
 <div class="col-md-3"><!--col-md-3 start-->
    <div  class="box" id ="order-summary">
	  <div class="box-header">
	    <h3>Order summary</h3>
	  </div>
	   <p class="text-muted">
	   Shipping and additional coats are calculate based on the values you have entered
	   </p>
	     <div class="table-responsive">
		   <table class="table">
		     <tbody>
			   <tr>
			     <td>Order Subtotal</td>
				 <th>INR <?php echo $total ?></th>
			   </tr>
			   <tr>
			      <td>Product Title</td>
				 <th> <?php echo $p_title ?></th>
			   </tr> 
			   <tr>
			     <td>Quantity</td>
				 <th><?php echo $pro_qty ?></th>
			   </tr>
			   <tr class="total">
			     <td>Total</td>
				 <td>INR <?php echo $total ?></td>
			   </tr>
			 </tbody>
		   </table>
		 </div>
	</div>
 </div> <!--col-md-3 start-->
  
</div>	    
	</div>
	</div>
	</div>
	  
	    <?php
		  include("include/footer.php");
		?>
	 
	  


	  
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </body>
 </html>
	  