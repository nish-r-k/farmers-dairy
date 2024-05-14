<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMIN PAGE</title>
   
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
<style>
tr:hover td{
	background-color:rgb(15, 189, 242,0.1);
	
}
</style>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<span>ADMIN</span>
							<div id="more-details"><i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="profile.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							
							<li class="list-group-item"><a href="index.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="main.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Dippo Details</span></a>
					    <ul class="pcoded-submenu">
					       <li><a href="adddippo.php">Add Dippo</a></li>
					<li><a href="viewdippo.php">View Dippo</a></li>	
					<li><a href="rate.php">Add Rate</a></li>
					<li><a href="viewrate.php">View Rate</a></li>
					    </ul>
					</li>
					<li class="nav-item">
					    <a href="viewmilk.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Milk Details</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Manage Dippo</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="addmanager.php">Add Manager </a></li>
					        <li><a href="viewmanager.php" >View Manager</a></li>
					    </ul>
					</li>
					<li class="nav-item">
					    <a href="viewfeed.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">View Feedback</span></a>
					</li>					
				</ul>
				
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/67.jpg" width="100px" height="50px" class="logo">
						
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
						
						
					</ul>
					<ul class="navbar-nav ml-auto">
						
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										
										<span>ADMIN</span>
										<a href="profile.php" class="dud-logout" title="Logout">
											<i class="feather icon-user"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="index.php" class="dropdown-item"><i class="feather  icon-log-out"></i> Logout</a></li>
										
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">View Dippo Details</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <!-- [ Hover-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Dippo Details</h5>
                        
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>SL.NO</th>
                                        <th>DIPPO NO</th>
                                        <th>DIPPO NAME</th>
                                        <th>EMAIL ID</th>
										<th>PHONE NUMBER</th>
										<th>ADDRESS</th>
										<th>CITY</th>
										<th>PINCODE</th>
										<th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								include 'config.php';
								$sql1="select * from dipo_reg";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sI=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sI+=1;
										$d_id=$row1[0];
										$dnumber=$row1['dnumber'];
										$dname=$row1['dname'];
										$email=$row1['email'];
										$ph_no=$row1['ph_number'];
										$address=$row1['address'];
										$city=$row1['city'];
										$pin_code=$row1['pin_code'];
								?>
								
									<tr>
									  <td><?php echo $sI; ?></th> 
									  <td><?php echo $dnumber; ?></th> 
									  <td><?php echo $dname; ?></td> 
									  <td><?php echo $email; ?></td> 
									  <td><?php echo $ph_no; ?></td>
									  <td><?php echo $address; ?></td>
									  <td><?php echo $city; ?></td>
									  <td><?php echo $pin_code; ?></td>
									  <td>
									<form action="#" method="post">
									<div class="form-group col-md-2">
									<input type="text" name="did[]" value="<?php echo $d_id; ?>" hidden="true" >
									<button type="submit" name="delete" class="btn  btn-primary">Delete</button>
									</div>
									</div>
									</form>
									</td>  
									</tr>
									<?php
									}
								}
								?>
									
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section>
						<?php
if(isset($_POST['delete']))
{
	foreach ($_POST['did'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query1 = "delete from dipo_reg where d_id='".$selectid."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='viewdippo.php'; </script>";
}
?>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
