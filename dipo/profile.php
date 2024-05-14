<?php
session_start();
if(isset($_SESSION['dippo']))
{
$dippo=$_SESSION['dippo'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>DIPPO PAGE</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	
<style>
.fixed-button{
	visibility:hidden;
}
.profile-image {
    float: left;
    width: calc(33.333% - 1rem);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 3rem;
}

</style>

</head>
<body>
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<div class="profile-image">

							<img src="assets\images\user\2.jpg" width="100px" height="100px">

						</div>
                         
									
									
									<div class="form-row">
							 <div class="form-group col-md-2">
						<div class="profile-user-settings">
							<h2 class="profile-user-name">Dippo</h2>
							<a href="editprofile.php">
							<button type="submit" class="btn  btn-primary">Edit</button></a>
							<br><br>
							<?php
								include 'config.php';
								$sql1="select * from dippo_reg where email='$dippo'";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sI=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sI+=1;
										$d_id=$row1[0];
										$dname=$row1['dname'];
										$email=$row['email'];
										$ph_number=$row1['ph_number'];
										$address=$row1['address'];
										$city=$row1['city'];
										$pin_code=$row1['pin_code'];
								
								?>
							<h5><?php echo $sI; ?></h5>
							<h5><?php echo $dname; ?></h5>
							<h5><?php echo $email; ?></h5>
							<h5><?php echo $ph_number; ?></h5>
							<h5><?php echo $address; ?></h5>
							<h5><?php echo $city; ?></h5>
							<h5><?php echo $pin_code; ?></h5>
							<?php
									}
								}
								?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
<?php
}
else
{
	echo "<script> location.href='../index.php'; </script>";
}	
?>