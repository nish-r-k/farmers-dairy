<!DOCTYPE html>
<html lang="en">

<head>

	<title>ADMIN PAGE</title>
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
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	
<style>
.fixed-button{
	visibility:hidden;
}
</style>

</head>

<!-- [ auth-signin ] start -->
 
 <div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="assets/images/67.jpg" width="300px" height="100px" class="logo">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
				
					<div class="card-body">
					 <form action="#" method="post">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
						
						<div class="form-group mb-3">
                            <input type="text" name="username" class="form-control" id="name" placeholder="User Name" required>
						</div>
						<div class="form-group mb-4">
							<input type="password" name="password" class="form-control" id="password" placeholder="Password">
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div>
						 <div class="single-acc-field">
                                            <button name="login" type="submit" class="btn btn-block btn-primary mb-4">signin</button>
                         </div>
						<hr>
						<p class="mb-2 text-muted"><a href="passw.php" class="f-w-400"><u>Forget Password?</u></a></p>
					</form>
					<?php
	if(isset($_POST['login']))
	{
	error_reporting(1);
	include("config.php");
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql = "select * from admin_log where username='".$username."' and password='".$password."'";
	$result = mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if($count>0)
	{  
		session_start();
		$_SESSION['admin']=$username;
		$a_id=$_SESSION['admin'];
		echo "<script>
				alert('Login Successful as $a_id');
			</script>";
		echo "<script> location.href='main.php'; </script>";
	}
	else
	{
		
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
	}       
}
?>
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
