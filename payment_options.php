<div class="box">

<?php
$session_email=$_SESSION['customer_email'];
$select_customer="select * from customer where customer_email=
'$session_email'";
$run_cust=mysqli_query($con,$select_customer);
$row_customer=mysqli_fetch_array($run_cust);
$customer_id=$row_customer['customer_id'];


?>
     <h1 class="text-center">Payment options</h1>
	 <p class="lead text-center">
	  <a href="order.php?c_id=<?php echo $customer_id  ?>">Cash on dilevery</a>
	 </p>
	   <center>
	     <!--p class="lead">
		 <a  href="#paytmkit/index.php">Pay with paypal
		 <img src=""></a>
		 </p-->
		  <img src=" image/free1.gif"width="700" height="500">
	   </center>
   
</div>