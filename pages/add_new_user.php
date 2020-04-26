<?php include_once('../inc/header.php'); ?>
 <?php include_once('../config/config.php'); ?>
 <div class="container-fluid" id="mycontainer">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-md-4 mx-auto" id="myform">
 				<form action="insert_user.php" method="POST" enctype="multipart/form-data">
 					<div class="form-group">
 						<label>First Name:</label>
 						<input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
 					</div>
 					<div class="form-group">
 						<label>Last Name:</label>
 						<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
 					</div>
 					<div class="form-group">
 						<label>Email:</label>
 						<input type="email" name="email" class="form-control" placeholder="Enter Email">
 					</div>
 					<div class="form-group">
 						<label>Profile Image:</label>
 						<input type="file" name="profile_picture" class="form-control" accept="image/x-png,image/jpeg" value="">
 					</div>
 					<input type="submit" name="submit" class="btn btn-info">
 				</form>
 				
 			</div>
 			<div class="col-md-4"></div>
 		</div>
 	</div>
 </div>
 <?php include_once('../inc/footer.php'); ?>