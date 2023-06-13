<?php
include("db.php");
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
 <div class="row"><!--start row-->
   <div class="col-lg-12">
     <div class="breadcrumb">
	   <li class="active">
	     <l class="fa fa-dashboard"></l>
		 Dashboard/Insert Product
	   </li>
	 </div>
   </div>
 </div><!--end row-->
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading"><!--start panel heading-->
	  <h3 class="panel-title">
	    <i class="fa a-money fa-w"></i>Insert Product
		
	  </h3>  
   </div><!--end panel  heading-->
   <div class="panel-body">
<form  class="form-horizontal" method="post" action="" enctype="multipart/form-data">
  <div class="form-group">
     <label class="col-md-3 control-label">Product Title</label>
	 <input  type="text" name="product_title" class="form-control"required="">
  </div>
  <div class="form-group">
     <label class="col-md-3 control-label">Product Categories</label>
	 <select name="product_cat" class="form-control">
	   <option>Select a  product category</option>
	     <?php
		 $get_p_cats="select * from  product categories";
		 $run_p_cats=mysqli_query($con,$get_p_cats);
		 while($row=mysqli_fetch_array($run_p_cats)){
			 $id=$row['p_cat_id'];
			 $cat_title=$row['p_cat_title'];
			 echo"<option values='$id >$cat_title'></option>";
		 }
		 ?>
	 </select>
  </div>
  <div class="form-group">
     <label class="col-md-3 control-label">Product Title</label>
	 <input  type="text" name="product_title" class="form-control"required="">
  </div>
  <div class="form-group">
     <label class="col-md-3 control-label">Product Title</label>
	 <input  type="text" name="product_title" class="form-control"required="">
  </div>
  <div class="form-group">
     <label class="col-md-3 control-label">Product Title</label>
	 <input  type="text" name="product_title" class="form-control"required="">
  </div>
  <div class="form-group">
     <label class="col-md-3 control-label">Product Title</label>
	 <input  type="text" name="product_title" class="form-control"required="">
  </div>
  

</form>
	   </div>	
  </div>
</div>  

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
