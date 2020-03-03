<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript" src="jquery-ui.min.js">
</script>
<script type="text/javascript" src="tt_slideshow.js">
</script>
<script type="text/javascript" src="bootstrap.min.js">
</script>
<script type="text/javascript" src="customjs.js">
</script>
<script type="text/javascript" src="contactform.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>
Administration
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<script type="text/javascript" src="totop.js">
</script>
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="html5shiv.js">
</script>
<script type="text/javascript" src="respond.min.js">
</script>
<![endif]-->
</head>
<body class="customer">
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
</div><!-- totopshow -->
<header id="ttr_header">
<div id="ttr_header_inner">
<div class="ttr_header_logo">
</div>
<div class="ttr_header_element_alignment container">
</div>
<div class="ttr_headershape01">
	<div class="html_content"><a href="index.html" class="tt_link" target="_self"><span style="font-family:'Open Sans','Arial';float: right; font-weight:700;color:rgba(149,149,149,1);">Logout</span></a></p></div>
</div>
</div>
</header>
<nav id="ttr_menu" class="navbar-default navbar">
   <div id="ttr_menu_inner_in">
<div id="navigationmenu">
<div class="ttr_menu_element_alignment container">
</div>
<div class="ttr_menushape1">
<div class="html_content"><p style="margin:0.36em 0.36em 0.36em 0em;width: 300px;"><a href="index.html" class="tt_link" target="_self"><span style="font-family:'Impact';font-weight:900;font-size:2em;color:rgba(56,55,56,1);">Movie</span><span style="font-family:'Impact';font-weight:900;font-size:2em;color:rgba(0,0,255,1);"> </span><span style="font-family:'Impact';font-weight:900;font-size:2em;color:rgba(231,76,61,1);">Store</span></a></p></div>
</div>
<div class="ttr_menu_logo">
</div>

</div>
</div>
</nav>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div id="ttr_page" class="container">
<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_html_content_margin" class="container-fluid">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="ttr_contact_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_contact_html_column00">
<div style="height:40px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
</div>
<div class="ttr_contact_html_row1 row">
<div class="post_column col-lg-2 col-md-12 col-sm-12 col-xs-12">
</div>
<div class=" visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
<div class="post_column col-lg-8 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_contact_html_column11">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
	<div class="tab">
		<button class="tablinks" onclick="openTabs(event,'ManageCustomer')">Manage Customer</button>
		<button class="tablinks" onclick="openTabs(event,'ManageMovies')">Manage Movies</button>
		<button class="tablinks" onclick="openTabs(event,'RentBuyMovie')">Rent / Purchase Movie</button>
	</div>
	<div class ="rightTab">
		<div id="ManageCustomer" class="tabcontent"> 
			<p style="margin:0.80em 0.36em 2em 0em;text-align:left;">
				<img src="images/36.png" style="width: 25px;height: 25px">
				<span style="font-family:'Open Sans','Microsoft New Tai Lue';font-weight:bold;font-size:18px;color:rgba(231,76,61,1);"> Manage Customer</span>
			</p>
			<form class="search" action="">
				 <input type="text" name="search" placeholder="Search Customer..."><button type="submit">Search</button>
			</form>
				<p style="margin:2em 0.36em 1em 0em;text-align:left;">
				 <span style="font-family:'Open Sans','Microsoft New Tai Lue';font-weight:bold;font-size:16px;color: black"> Customer Details</span>
				</p>
			
				<div class="ttr_index_html_row1 row">
					<div class="post_column col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<div class="ttr_index_html_column10">
					<form class="customer" action="">
						<label class="label-margin" for="lname">Surname</label>
						<input type="text" name="lname">
						<label class="label-margin" for="bday">Birthdate</label>
						<input type="date" name="bday" placeholder="Birthday">
						<label class="label-margin" for="gender">Gender</label></br>
						<div class="post_column col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<input type="radio" name="gender" value="Male">Male
						</div>
						<div class="post_column col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<input type="radio" name="gender" value="Female">Female
						</div>
						<label class="label-margin" for="address">Address</label>
						<input type="text" name="address" style="height: 70px">
					</form>
					</div>
					</div>
					<div class="post_column col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<div class="ttr_index_html_column10">
					<form class="customer" action="">
						<label class="label-margin" for="fname">First name</label>
						<input type="text" name="fname">
						<label class="label-margin" for="email">Email</label>
						<input type="email" name="email" pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
						<label class="label-margin" for="phone">Phone</label>
						<input type="tel" name="phone">
						<label class="label-margin" for="bankaccountno">Bank Account Number</label>
						<input type="text" pattern="[1-9]" name="bankaccountno">
					</form>
					</div>
					</div>
			    </div>
		</div>
		<div id="ManageMovies" class="tabcontent"> 
			<p style="margin:0.80em 0.36em 2em 0em;text-align:left;">
				<img src="images/38.png" style="width: 25px;height: 25px">
				<span style="font-family:'Open Sans','Microsoft New Tai Lue';font-weight:bold;font-size:18px;color:rgba(231,76,61,1);"> Manage Movies</span>
			</p>
			<form class="search" action="" style="margin:0.80em 0.36em 1em 0em">
			<button type="submit">Add a Movie</button>
			<button type="submit">Update a Movie</button>
			</form>
			<div style="margin:1em 0.36em 2em 0em">
			<form class="search" action="">
				 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for movies..."><button type="submit">
			Search</button>
			</form>
			<table id="myTable">
				<tr class="header">
					<th style="width:30%;">Movie Title</th>
					<th style="width:20%;">Year of Release</th>
					<th style="width:15%;">Genre</th>
					<th style="width:15%;">Status</th>
					<th style="width:10%;">Rental Cost</th>
					<th style="width:10%;">Purchase Cost</th>
				</tr>
				<tr>
					<td>Mulan</td>
					<td>2020</td>
					<td>Action</td>
					<td>Available</td>
					<td>Php 50.00</td>
					<td>Php 350.00</td>
				</tr>
				<tr>
					<td>Dolittle</td>
					<td>2020</td>
					<td>Comedy</td>
					<td>Available</td>
					<td>Php 50.00</td>
					<td>Php 350.00</td>
				</tr>
				<tr>
					<td>Parasite</td>
					<td>2019</td>
					<td>Drama</td>
					<td>Sold</td>
					<td>Php 50.00</td>
					<td>Php 350.00</td>
				</tr>
				<tr>
					<td>Test Movie 4</td>
					<td>2019</td>
					<td>Drama</td>
					<td>Rented</td>
					<td>Php 50.00</td>
					<td>Php 350.00</td>
				</tr>
			</table>
		</div>
		</div>
		<div id="RentBuyMovie" class="tabcontent">
			<p style="margin:0.80em 0.36em 2em 0em;text-align:left;">
				<img src="images/39.png" style="width: 25px;height: 25px">
				<span style="font-family:'Open Sans','Microsoft New Tai Lue';font-weight:bold;font-size:18px;color:rgba(231,76,61,1);"> Rent / Purchase Movie</span>
			</p>
			<p style="margin:2em 0.36em 0em 0em;text-align:left;">
			 <span style="font-family:'Open Sans','Microsoft New Tai Lue';font-weight:bold;font-size:16px;color: black"> Available Movies</span>
			</p>
			<div style="margin:1em 0.36em 2em 0em">
			<form class="search" action="">
				 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for movies..."><button type="submit">
			Search</button>
			</form>
			<table id="myTable">
				<tr class="header">
					<th style="width:25%;">Movie Title</th>
					<th style="width:20%;">Year of Release</th>
					<th style="width:15%;">Genre</th>
					<th style="width:40%;">Action</th>
				</tr>
				<tr>
					<td>Mulan</td>
					<td>2020</td>
					<td>Action</td>
					<td class="rpbtn">
					<button type="submit">Movie info</button>
					<button type="submit">Rent</button>
					<button type="submit">Buy</button>
					</td>
				</tr>
				<tr>
					<td>Dolittle</td>
					<td>2020</td>
					<td>Comedy</td>
					<td class="rpbtn">
					<button type="submit">Movie info</button>
					<button type="submit">Rent</button>
					<button type="submit">Buy</button>
					</td>
				</tr>
				<tr>
					<td>Parasite</td>
					<td>2019</td>
					<td>Drama</td>
					<td class="rpbtn">
					<button type="submit">Movie info</button>
					<button type="submit">Rent</button>
					<button type="submit">Buy</button>
					</td>
				</tr>
				<tr>
					<td>Test Movie 4</td>
					<td>2019</td>
					<td>Drama</td>
					<td class="rpbtn">
					<button type="submit">Movie info</button>
					<button type="submit">Rent</button>
					<button type="submit">Buy</button>
					</td>
				</tr>
			</table>
			</div>
		</div>
	</div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="post_column col-lg-2 col-md-12 col-sm-12 col-xs-12">
</div>
<div class=" visible-lg-block visible-sm-block visible-md-block visible-xs-block" style="clear: both;"></div>
</div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
</div><!--content_margin-->
</div><!--content-->
<div style="clear:both">
</div>
</div><!--container-->
<div style="height:0px;width:0px;overflow:hidden;"></div>
<footer id="ttr_footer">
<div class="ttr_footer_bottom_footer">
<div class="ttr_footer_bottom_footer_inner">
<div class="ttr_footer_element_alignment container">
</div>
<span id="ttr_footer_designed_by">
<div id="ttr_footer_designed_by_links"><span style="color: white";>@2020 Copyright: </span>
<a href="https://www.facebook.com/balitok" target="_self" >
Erwin Louis Cortes 
</a>
</span>
</div>
</div>
</div>
</footer>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
</div><!--page-->
</body>
</html>
