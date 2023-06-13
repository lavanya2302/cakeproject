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
	  Welcome Guest
	  </a>
	  <a href="#">Card Total Price:INR <?php totalPrice();?>,Total Items <?php  item();?></a>
	  
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
	      <a href ="login1.php"> Login</a>
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
					  <li class="active">
					   <a href="contact.php">Contact us</a>
					   </li>
					    
					   <li>
					   <a href="about.php">About</a>
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
		 <li>Contact Us
		 </li>
		
	  </ul>
	</div>
	
	  <!--div class="col-md-3">
	    <!-?php
		  //include("include/sidebar.php");
		?>
	  </div-->
	  <div class="col-md-7">
	   <div class="box">
	       <div class="box-header">
		     <center>
			  <h2>Contact Us</h2>
			   <p class="text-muted">If you have any question please feel free to 
			   contact us,our customer services center is working for you </p>
			 </center>
		   </div>
		   <h4 class="send-notification"></h4>
		   <form action="contact.php" method="post"enctype="multipart/form-data" >
		     <div class="form-group">
			   <label>Name</label>
			   <input type="text" name="name" required="" class="form-control"id="name">
			 </div>
			 
			 <div class="form-group">
			   <label>Email</label>
			   <input type="text" name="email" required="" class="form-control"id="email"
			   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
			 </div>
			 
			 <div class="form-group">
			   <label>Subject</label>
			   <input type="text" name="subject" required="" class="form-control"id="subject">
			 </div>
			 
			 <div class="form-group">
			   <label>Message</label>
			   <textarea  name="message" required="" class="form-control" id="body"></textarea>
			  </div>
			  <?php
			   
		if(isset($_SESSION['status'])){
			echo"<h4>".$_SESSION['status']."</h4>";
			unset($_SESSION['status']);
		}
		?>
		     <p class="text-muted" style=" font-size:18px;">You can order any Photo cakes and any other cakes so please 
			 selected image and send so making same cake and safely delivered in your place
			  </p><input type="file" name="image"  >
			  <div class="text-center">
			   <button type="submit" name="submit" class="btn btn-primary" onclick="sendEmail()" 
			   value="Send an Email">
			     <i class="fa fa-user-md"></i>Send Message
			   </button>
			 </div>	 
	  </div></form>    
	  <!--?php
 if(isset($_POST['submit'])){
 $sender_name=$_POST['name'];
 $sender_email=$_POST['email'];
 $sender_subject=$_POST['subject'];
 $sender_message=$_POST['message'];
 
 $receiver_email="pallavitagare123@gmail.com";
 mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
 //customer mail
 
 $email=$_POST['email'];
 $subject="Welcome to our Website ";
 $msg="I shall get you soon, thanks for sending email";
 $from="pallavitagare123@gmail.com";
 mail($email,$subject,$msg,$from);
 echo"<h2 align='center'>Your mail sent</h2> ";
 
 }
 ?-->
 
	  </div>	 
	  <div class="col-md-5">
	   <div class="box">
	   <!--div class="box-header"-->
		     <center>
			  <h2>Map</h2>
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d972198.9594482915!2d74.95817863853699!3d17.85493260957536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da1b4bd7af0d%3A0x2dabfa08dfb5f1c8!2sSolapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1620756952309!5m2!1sen!2sin"  height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	     
	   </div>
	   </div>
	   </div>
	  </div><!--end col 9--> 
		 
	  </div><!--end container-->
	 </div>
</div>
</div>
</div>
</div>

<?php
   if(isset($_POST['submit'])){
	   $name=$_POST['name'];
	    $email=$_POST['email'];
		 $subject=$_POST['subject'];
		  $message=$_POST['message'];
		  $image=$_FILES['image']['name'];
	  $tmp_image=$_FILES['image']['tmp_name'];
	  
	   
	   move_uploaded_file($tmp_image,"product_image/$image");
		   
		   $insert_customer="insert into contact(name,email,subject,message,image) 
		   values('$name','$email','$subject','$message','$image')";
		   $run_customer=mysqli_query($con,$insert_customer);
		if($run_customer){
			 echo"<script>alert('Your Quires added Successfully')</script>";
		   echo"<script>window.open('cake homepage.php','_self')</script>";
		}
	   
   }
   
   ?>
<?php
include("include/footer.php");
?>
  
  <!--script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
   function sendEmail(){
	   var name= $("#name");
	   var email=$("#email");
	   var subject=$("#subject");
	   var body=$("#body");
	   
	   if(isNotEmpty(name) && isNotEmpty(subject) && isNotEmpty(body)){
		   $.ajax({
			 url:'sendEmail.php',
			 method:'POST',
			 dataType:'json',
			 data:{
				 name.val(),
				 email:email.val(),
				 subject:subject.val(),
				 body:body.val()
			 },success:function(response){
				 $('#myForm')[0].reset();
				 $('.sent-notification').text("Message sent successfully.");
			 }
		   });
	   }
	   
   }
  function isNotEmpty(caller){
	  if(caller.val()==""){
		  caller.css('border','1px solid red');
		  return false;
	  }
	  else
	  {
		  caller.css('border','');
		  return true;
	  }
  }
  </script-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </body>
 </html>

 
 
 
 