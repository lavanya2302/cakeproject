<?php
session_start();
if(!isset($_SESSION['customer_email'])){
	echo"<script>window.open('../checkout.php','_self')</script>";
}else{
include("include/db.php");
include("function/function.php");
if(isset($_GET['order_id'])){
	$order_id=$_GET['order_id'];
}
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
	  <a href="#">Card Total Price:INR 100,Total Items <?php  item();?></a>
	  
	  </div><!-- end col container start-->
	  <div class ="col-md-6">
	    <ul class="menu">
	      <li>
	       <a href ="registration.php">Register</a>
	      </li>
	      <li>
	      <a href ="my_account.php">My Account</a>
	      </li>
	      <li>
	      <a href ="cart.php">Goto Card</a>
	      </li>
	      <li>
	      <!--a href ="../login.php">Admin login</a-->
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
        <img src="l2.png" alt="teehosting" class="visible-xs"width="150"height="110">
       <!--img src="logo1.jpg" alt="teehosting" class="hidden-xs"width="150"height="100"-->
        <!--img src="logo-small.jpg" alt="teehosting" class="visible-xs"-->
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
					   <a href="../about.php">About us</a>
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
		 <li>My account
		 </li>
		
	  </ul>
	</div>
	
	  <div class="col-md-3">
	    <?php
		  include("customer/include/sidebar.php");
		?>
	  </div>
	  
	   <!--div class="col-md-6"><!--col-md-3 start--
    <div  class="box" id ="order-summary">
	  <div class="box-header">
	    <h3>Order summary</h3>
	  </div>  </div></div-->
		  
	  
	<div class="col-md-9">
	 <div  class="box">
	   <h2 align="center">Please confirm your order details</h2>
	   <hr>
	    <form action="confirm.php?update_id=<?php echo $order_id ?>" method="post"enctype="multipart/form-data">
		  
		   <?php
		if(isset($_GET['order_id']))
		{
			$order_id=$_GET['order_id'];
		 $query="SELECT * FROM  customer_order WHERE order_id='$order_id' LIMIT 1";
		 $query_run=mysqli_query($con,$query);
		   if(mysqli_num_rows($query_run)>0)
		   {     
		     foreach($query_run as $order)
			 {
			   ?>
		  
		  
        <div class="col-md-6">
		 <div class="form-group">
		    <label> Invoice Number</label> 
			<input type="text" class="form-control"name="invoice_number" value="
			<?php echo $order['invoice_no'] ?>"required=""style="font-size:18;background-color:black;color:white">
		  </div>
		  </div>
		  
		  <div class="col-md-6">
		   <div class="form-group">
		    <label>Fist Name</label> 
			<input type="text" class="form-control"name="first_name" required=""placeholder="First name">
		  </div>
		  </div>
		  <div class="col-md-6">
		  <div class="form-group">
		    <label>Last Name</label> 
			<input type="text" class="form-control"name="last_name" required=""placeholder="Last name">
		  </div>
		  </div>
		  
		  
		  <div class="col-md-6">
		  <div class="form-group">
		    <label>Email</label> 
			<input type="text" class="form-control"name="email" required=""placeholder="Email ">
		  </div>
		  </div>
		  
		  <div class="col-md-6">
		  <div class="form-group">
		    <label>Phone Number</label> 
			<input type="text" class="form-control"name="contact_no" required="" placeholder="Phone number">
		  </div>
		  </div>
		  
		   <div class="col-md-6">
		  <div class="form-group">
		    <label>Address 1</label> 
			<input type="text" class="form-control"name="address" required="" placeholder="Address">
		  </div>
		  </div>
		  
		  <div class="col-md-6">
		  <div class="form-group">
		    <label> Street Address</label> 
			<input type="text" class="form-control"name="street_address" required="" placeholder="office/other location">
		  </div>
		  </div>
		   <div class="col-md-3">
		  <div class="form-group">
		    <label>City</label> 
			<input type="text" class="form-control"name="city" required="" placeholder="City">
		  </div>
		  </div>
		  
		   <div class="col-md-3">
		  <div class="form-group">
		    <label>PINCODE</label> 
			<input type="number" class="form-control"name="pincode" required="" placeholder="Pincode">
		  </div>
		  </div>
		  <!--?php
		if(isset($_GET['order_id']))
		{
			$order_id=$_GET['order_id'];
		 $query="SELECT * FROM  customer_order WHERE order_id='$order_id' LIMIT 1";
		 $query_run=mysqli_query($con,$query);
		   if(mysqli_num_rows($query_run)>0)
		   {     
		     foreach($query_run as $order)
			 {
			   ?>
		  
		  
        <div class="col-md-6">
		 <div class="form-group">
		    <label> Invoice Number</label> 
			<input type="text" class="form-control"name="invoice_number" value="
			<?php echo $order['invoice_no'] ?>"required=""style="font-size:20">
		  </div>
		  </div-->
		  
		  <div class="col-md-6">
		  <div class="form-group">
		    <label>  Total Amount</label>
			<input type="text" class="form-control"name="amount" value="
	<?php echo $order['due_amount'] ?>	"required="" style="font-size:20;background-color:black;color:white">
		  </div>
		  </div>
		  
		  
			   <?php
			 }
		   }
		   else
		   {
			   echo"<h4>No Record Found</h4>";
		   }
		}
		
		
		
		 ?>
		  
		<div class="col-md-6">
		  <div class="form-group">
		    <label> Select payment mode</label>
			<select class="form-control"name="payment_mode">
			  <option>Cash On delivery</option>
			   <!--option>Paypal</option>
			    <option>PayuMoney</option>
				 <option>PayTm</option-->
			</select>
		  </div>
		  </div>
		 <!--div class="col-md-6">
		  <div class="form-group">
		    <label> Select payment mode</label>
			<a href="paytmkit/index.php"><select class="form-control"name="payment_mode">
			  <option>online payment </option> 
			   
			</select></a>
		  </div>
		  </div-->
		  
		  <div class="col-md-6">
		  <div class="form-group">
		    <label> Transaction Number</label>
			<input type="text" class="form-control"name="trfr_number" required=""placeholder="Transaction number">
		  </div>
		  </div>
		  
		  
		  
	      <div class="col-md-6">
		  <div class="form-group">
		    <label> Payment Date</label>
			<input type="date" class="form-control"name="date" required="">
		  </div>
		  </div>
	           
             <div class="text-center">
			   <button type="submit" name=" confirm_payment" class="btn btn-primary btn-lg-form-control">
			    Confirm Payment
			   </button>
			   	  
				</div>
			 
		</form>
		</div>
<?php
if(isset($_POST['confirm_payment'])){
	$update_id=$_GET['update_id'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	$address=$_POST['address'];
	$street_address=$_POST['street_address'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	
	$invoice_number=$_POST['invoice_number'];
	$amount=$_POST['amount'];
	$payment_mode=$_POST['payment_mode'];
	$trfr_number=$_POST['trfr_number'];
	$date=$_POST['date'];
	$complete="Complete";
	$insert="insert into payment(first_name,last_name,email,contact_no,address,street_address,
	city,pincode,invoice_id,amount,payment_mode,ref_no,payment_date) 
	values('$first_name','$last_name','$email','$contact_no','$address','$street_address','$city','$pincode',
	'$invoice_number','$amount','$payment_mode','$trfr_number','$date')";
	
	$run_insert=mysqli_query($con,$insert);
	$update_p="update customer_order set order_status='$complete' where order_id=
	'$update_id'";
	$run_insert=mysqli_query($con,$update_p);
	
	
	echo"<script> alert('your order has been received')</script>";
	echo"<script> window.open('my_account.php?order','_self')</script>";
}



?>
		
		
		
		
	 </div> 
	</div> 
  

<!--div class="col-md-3"><!--col-md-3 start--
    <div  class="box" id ="order-summary">
	  <div class="box-header">
	    <h3>Order summary</h3>
	  </div>  </div></div-->
	   
	   
	   
	   </div>
	  </div>
 
	  
	  
	<?php
include("include/footer.php");
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </body>
 </html>  
 <?php
}
?>

