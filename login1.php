
<div class="box">
  <div class="box-header">
    <center>
	  <h2>Login</h2>
	  <p class="lead">Already our customer</p>
	  <img src="back7.jpg"width="700"height="350">
	  
	</center>	
  </div>
  <form action="checkout.php" method="post">
     <div class="form-group">
	  <label>Email:</label>
	   <input  type="text" name="c_email" class="form-control"required=""
	  id="myEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"title="Please required '@',and 1,2">
	 </div>
	 <div class="form-group">
	  <label>Password:</label>
	   <input  type="password" name="c_password" class="form-control"required="">
	 </div>
	 <div class="form-center">
	  <button name="login" value="login" class="btn btn-primary">
	   <i class="fa fa-sign-in"></i>Log in</button>
	 </div >
  </form>
  <center>
  <a href="registration.php" >
  <h3>New ? Register Now</h3>
  </a></center>
</div>
<?php
   if(isset($_POST['login'])){
	   $customer_email=$_POST['c_email'];
	    $customer_pass=$_POST['c_password'];
		$select_customer="select* from customer where customer_email='$customer_email'
		AND customer_pass='$customer_pass'";
		$run_cust=mysqli_query($con,$select_customer);
		$get_ip=getUserIP();
		$check_customer=mysqli_num_rows($run_cust);
		$select_cart="select * from cart where ip_add='$get_ip'";
		$run_cart=mysqli_query($con,$select_cart);
		$check_cart=mysqli_num_rows($run_cart);
		if($check_customer==0){
			echo"<script>alert('Password/Email wrong')</script>";
			exit();
		}
		if($check_customer==1 AND $check_cart==0){
			$_SESSION['customer_email']=$customer_email;
			echo"<script>alert('Your are logged in ')</script>";
			echo"<script>window.open('my_account.php','_self')</script>";
		}else{
			$_SESSION['customer_email']=$customer_email;
			echo"<script>alert('Your are logged in ')</script>";
			echo"<script>window.open('checkout.php','_self')</script>";
		}
	   
   }
   
   ?>
  <p id="demo"></p>
