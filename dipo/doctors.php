 <?php
session_start();
if(isset($_SESSION['dippo']))
{
$dippo=$_SESSION['dippo'];
?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <title>DIPO PAGE</title>
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
							<span>DIPPO</span>
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
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Staff Details</span></a>
					    <ul class="pcoded-submenu">
					    <li><a href="addstaff.php">Addstaff</a></li>
					<li><a href="viewstaff.php">Viewstaff</a></li>  
					<li><a href="viewbank.php">Viewbank</a></li> 
					<li> <a href="addsalary.php">AddSalary</a></li>
					<li><a href="viewsalary.php" >ViewSalary</a></li> 
			          </ul>
					</li>
					
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">User Details</span></a>
					    <ul class="pcoded-submenu">
                        <li> <a href="adduser.php">AddUser</a></li>
					<li><a href="viewuser.php" >ViewUser</a></li>  
					    </ul>
					</li>
						<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Daily Milk Details</span></a>
					    <ul class="pcoded-submenu">
						    <li><a href="addmilkd.php">Add Daily Milk Details</a></li>
							<li><a href="viewmilkd.php">View Daily Milk Details</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Facilities</span></a>
					    <ul class="pcoded-submenu">
						    <li><a href="food.php">Add Feed</a></li>
							<li><a href="viewfood.php">View Feed</a></li>
							<li><a href="medicines.php">Add Medicines</a></li>
							<li><a href="viewmedicines.php">View Medicines</a></li>
							<li><a href="doctors.php">Add Doctors</a></li>
							<li><a href="viewdoc.php">View Doctor</a></li>
					    </ul>
					</li>
                        <li class="nav-item">
					    <a href="viewfeedb.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">View feedback</span></a>
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
										
										<span>DIPO</span>
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
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add Doctor Details</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="MAIN.PHP"><i class="feather icon-home"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
             <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    
                       <h5 class="mt-5">Doctor Details</h5>
                        <hr>
                        <form class="needs-validation" action="#" method="post">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="validationCustom01">DOCTOR NAME</label>
                                    <input type="text" class="form-control" name="dname" placeholder="Doctor Name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
								
                                <div class="col-md-3">
                                    <label for="validationCustom02">ADDRESS </label>
                                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <label for="validationCustom02">CONTACT NO</label>
                                    <input type="number" class="form-control" name="contact" placeholder="contact no" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
								
                            
								<div class="col-md-3">
                                    <label for="validationCustom02">OPEN TIME</label>
                                    <input type="time" name="opntm" class="form-control" placeholder="Available Time" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <label for="validationCustom02">CLOSE TIME</label>
                                    <input type="time" name="clstm" class="form-control" placeholder="Available Time" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
							</div>
							<BR>
                            <div class="form-row">
							 <div class="form-group col-md-2">
                            <button type="submit" name="add" class="btn  btn-primary">Add</button>
							</div>
							</div>
						   </form>
						   						
<?php
if(isset($_POST['add']))
{
	error_reporting(1);
	include("config.php");
	$phoneno=$_POST['contact'];

	$sql = "select * from add_doctor where phoneno='$phoneno'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);
	if($count>0)
	{
		echo "<script>
				alert('There is an already exists this phone no......');
			</script>";
			echo "<script> location.href='viewuser.php'; </script>";
	}
	else
	{
		$dname=$_POST['dname'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$opntm=$_POST['opntm'];
		$clstm=$_POST['clstm'];
		

		$query = "insert into add_doctor(name,address,phoneno,opentm,closetm,dippoid) values('".$dname."','".$address."','".$contact."','".$opntm."','".$clstm."','".$dippo."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed...');
			</script>";
			echo "<script> location.href='doctors.php'; </script>";
		}
	
}
?>
						</div>
					</div>
				</div>
				<div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Recently added Doctor</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>DOCTOR NAME</th>
                                        <th>ADDRESS</th>
                                        <th>CONTACT NO</th>
										<th>AVAILABLE TIME</th>
									</tr>
                                </thead>
                                <tbody>
								<?php
								include 'config.php';
								$sql1="select * from add_doctor where dippoid='$dippo'";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sI=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sI+=1;
										$id=$row1[0];
										$name=$row1['name'];
										$address=$row1['address'];
										$phoneno=$row1['phoneno'];
										$opentm=$row1['opentm'];
										$closetm=$row1['closetm'];
									}
								}
								?>
                                    <tr>
									<td><?php echo $name; ?></td>
									<td><?php echo $address; ?></td>
									<td><?php echo $phoneno; ?></td>
									<td><?php echo $opentm; ?> to <?php echo $closetm; ?></td>
                                    </tr>
									
									
                                </tbody>
                            </table>
							</div>
                    </div>
                </div>
            </div>
                      <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                       
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

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