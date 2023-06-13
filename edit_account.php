<?php
$customer_email=$_SESSION['customer_email'];
$get_customer="select * from customer where customer_email='$customer_email'";
$run_cust=mysqli_query($con,$get_customer);
$row_cust=mysqli_fetch_array($run_cust);
$customer_id=$row_cust['customer_id'];
$customer_name=$row_cust['customer_name'];
$customer_username=$row_cust['customer_username'];
$customer_email=$row_cust['customer_email'];
$customer_address=$row_cust['customer_address'];

$customer_contact=$row_cust['customer_contact'];
$customer_image=$row_cust['customer_image'];
?>



<div class="box">
  <center>
   <h1>Edit Your  Account</h1>
   </center>
    <form action="" method="POST" enctype="multipart/form-data" >
 <div class="form-group">
    <label>Customer Name</label>
	  <input type="text"  name="c_name"class="form-control"value="<?php echo $customer_name; ?>" required="">
 </div>  
 <div class="form-group">
    <label>Customer Username</label>
	  <input type="text"  name="c_user"class="form-control"value="<?php echo $customer_username; ?>" required="">
 </div>  
 <div class="form-group">
    <label>Customer Email</label>
	  <input type="text"  name="c_email"class="form-control"value="<?php echo $customer_email; ?>" required="">
 </div>  
 <!--div class="form-group">
    <label>Customer Password</label>
	  <input type="text"  name="c_pass"class="form-control" required="">
 </div>  
 <div class="form-group">
    <label>Customer city</label>
	  <input type="text"  name="c_city"class="form-control" required="">
 </div-->  
 <div class="form-group">
    <label>Contact Number</label>
	  <input type="text"  name="c_number"class="form-control"value="<?php echo $customer_contact; ?>" required="">
 </div>
<div class="form-group">
    <label> Customer Address</label>
	  <input type="text"  name="c_address"class="form-control"value="<?php echo $customer_address; ?>" required="">
 </div>

<div class="form-group">
    <label>Customer Image</label>
	  <input type="file"  name="c_image"class="form-control"value="<?php echo $customer_image; ?>" required="">
	  <!--img src="image/ManjuMalhi.jpg" class="img-responsive" height="100"-->
 </div>   
    <div class="text-center">
	  <button class="btn btn-primary " name="update" type="type">Update Now
	  </button>
	</div>
	</form>
</div>
<?php
if(isset($_POST['update'])){
	  $update_id=$customer_id;
	  $c_name=$_POST['c_name'];
	  $c_user=$_POST['c_user'];
	  $c_email=$_POST['c_email'];
	  $c_contact=$_POST['c_number'];
	  $c_address=$_POST['c_address'];
	 
	  $c_image=$_FILES['c_image']['name'];
	  $c_image_tmp=$_FILES['c_image']['tmp_name'];
	  
	 move_uploaded_file($c_image_tmp,"customer_image/$c_image");
	  
	  $update_customer= "update customer set customer_name='$c_name',customer_username='$c_user',
	  customer_email='$c_email',customer_contact='$c_contact',customer_address='$c_address'
	   ,customer_image='$c_image' where customer_id='$update_id'";
	  
	  $run_customer=mysqli_query($con,$update_customer);
	  if($run_customer){
		  echo"<script>alert('You details updated.')</script>";
		  echo"<script>window.open('logout.php','_self')</script>";
	  }
	  
  }






?>