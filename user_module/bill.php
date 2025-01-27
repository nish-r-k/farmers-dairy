<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FARMER'S DAIRY</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/about.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

td {
  text-align: center;
  padding: 8px;
}
th {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

.button {
  background-color: #1F3F6B; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
  </head>
<body>

<section id="top">
 <div class="container">
  <div class="row">
   <div class="top_1 clearfix">
    <div class="col-sm-3">
	 <div class="top_1l clearfix">
	   <h2 class="mgt big"><a class="col_1" href="index.html"><i class="fa fa-truck col_1"></i><span class="col_4">FARMER'S </span>DAIRY</a></h2>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="header" class="clearfix cd-secondary-nav">
	<nav class="navbar nav_t">
		<div class="container">
		    <div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  	 <ul class="nav navbar-nav">
				<li><a class="m_tag" href="home.php">Home</a></li>
				<li><a class="m_tag " href="about.php">About</a></li>
				<li><a class="m_tag" href="services.php">Services</a></li>
				<li><a class="m_tag" href="needs.php">Cattle Needs</a></li>
				<li><a class="m_tag" href="bill.php">Bill Details</a></li>
				<li><a class="m_tag" href="contact.php">Feedback</a></li>
				
			</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	</section>
<section id="center" class="center_o clearfix">
 <div class="container">
   <div class="row">
    <div class="col-sm-12">
	 <div class="center_o1 text-center">
	   <h2 class="mgt big">BILL DETAILS</h2>
	 </div>
	</div>
   </div>
  </div>
</section>

<section id="project_pg">
 <div class="container">
  <div class="row">
	<div style="overflow-x:auto;">
  <table>
    <tr style="background-color:#1F3F6B;Color:white;">
      <th>SL NO</th>
      <th>NAME</th>
      <th>USER NO</th>
      <th>DATE</th>
	  <th>TIME</th>
	  <th>CATTLE</th>
	  <th>FAT</th>
	  <th>CLR</th>
	  <th>SNF</th>
	  <th>LITER</th>
      <th>AMOUNT</th>
      <th>TOTAL AMOUNT</th>
	  <th>ACTION</th>
    </tr>
    <tr>
      <td>01</td>
      <td>Mahesh Nidchal</td>
      <td>452</td>
      <td>10-8-2016</td>
	  <td>Morning</td>
	  <td>Cow</td>
	  <td>3.5</td>
	  <td>9.00</td>
	  <td>8.5</td>
      <td>3.9</td>
      <td>29.00</td>
	  <td>113.10</td>
      <td>
	  <form action="billdetails.php" ><button class="button button2">BILL</button></form>
	  
	  </td>
    </tr>
    <tr>
      <td>01</td>
      <td>Mahesh Nidchal</td>
      <td>452</td>
      <td>10-8-2016</td>
	  <td>Evening</td>
	  <td>Cow</td>
	  <td>3.8</td>
	  <td>29</td>
	  <td>8.6</td>
      <td>5.98</td>
      <td>29.52</td>
	  <td>176.53</td>
      <td>
	  <form action="billdetails.php" ><button class="button button2">BILL</button></form>
	  
	  </td>
    </tr>
    
  </table>
</div>
  </div>
 </div>
</section>

<section id="footer">
 <div class="container">
  <div class="row">
   <div class="footer_1 clearfix">
	 <div class="col-sm-4 space_left">
	  <div class="footer_1i clearfix">
	    <h2 class="mgt big"><a class="col_1" href="index.html"><i class="fa fa-truck col_1"></i><span class="col">FARMER'S <br></span>DAIRY</a></h2>
		<p class="col_3">To facilitate rural development by providing opportunities for self-employement along with providing opportunity for steady income at village level </p>
		 
	  </div>
	 </div>
	 <div class="col-sm-3 space_left">
	  <div class="footer_1i1 clearfix">
	   <h4 class="col mgt">Contact Us</h4>
	   <hr class="hr_1 mgl">
	   <p class="col_3"><i class="fa fa-map-marker col_1"></i>Periyadka,puttur Taluk</p>
	   <p class="col_3"><i class="fa fa-phone col_1"></i> (+91) 8236945578</p>
	   <p class="col_3"><i class="fa fa-envelope col_1"></i>amruthsangham@gmail.com</p>
	   <p class="col_3"><i class="fa fa-clock-o col_1"></i> Morning (07AM - 09AM)<br> Evening (3:30PM - 05:30PM)</p>
	  </div>
	 </div>
	 
	 <div class="col-sm-3 space_left">
	  <div class="footer_1i1 clearfix">
	   <h4 class="col mgt">Queries</h4>
	   <hr class="hr_1 mgl">
	   <p class="col_3">For more queries contact us</p>
       
	  </div>
	 </div>
   </div>
  </div>
 </div>
</section>