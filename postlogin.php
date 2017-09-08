<?php

include 'core.inc.php';

?>


<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="navbar.css">
		<link rel="stylesheet" type="text/css" href="sidebar.css">
		<link rel="stylesheet" type="text/css" href="styleindex.css">
		<script src="javascript.js"></script>
	</head>

	<body>
		
		<!-- navigation bar -->

		<nav class="navbar navbar-default">
			<div class="container-fluid">
			    <div class="navbar-header">
			      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span> 
			      	</button>
			      		<a class="navbar-brand" href="#">The E-Commerce Website</a>
			    	</div>
			    	<div class="collapse navbar-collapse" id="myNavbar">
			      		<ul class="nav navbar-nav">
			        		<li><a href="index.php">Home</a></li>
			      		</ul>
			      		<ul class="nav navbar-nav navbar-right">
			      			<li><a href="Sell.php"> Sell Items </a></li>
			        		<li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo getfield('user_name'); ?></a></li>
			        		<li><a href="logout.php">Log Out</a></li>
			        	</ul>
			    	</div>
			  	</div>
			  </div>
		</nav>

		<!-- side bar-->

		<div id="wrapper" class="container-fluid">
		 	<div class="row">
		 		<div class="col-md-2">
            		<div id="sidebar-wrapper">
    	        		<ul class="sidebar-nav">
	    	        		<li id="GAP"><a href="index.php"><font color="gray">Mobiles</font></a></li>
	      				    <li><a href="laptops.php"><font color="gray">Laptops</font></a></li>
				            <li><a href="Books.php"><font color="gray">Books</font></a></li>
				            <li><a href="ContactUs.php"><font color="gray">ContactUs</font></a></li>
				        </ul>
        			</div>
				</div>
        	</div>
        </div>


		<div id="container">
		 	<div class="row">
		 		<div class="col-md-push-1 col-md-8">
		 			<ul >
	            		<li class="list">
	            			<img height="350" width="300" src= "Uploads/oneplus.jpg.JPG">
	            			<p><?php get_data('22'); ?></p>
	            		</li >
	            		<li class="list">
	            			<img height="350" width="300" src= "Uploads/micromax.jpg.JPG">
	            			<p><?php get_data('23'); ?></p>
	            		</li>
	            		<li class="list">
	            			<img height="350" width="300" src= "Uploads/ipad.png.JPG">
	            			<p><?php get_data('22'); ?></p>
	            		</li>
	            		<li class="list">
	            			<img height="350" width="300" src="Uploads/mobile.jpeg.JPG">
	            			<p><?php get_data('21'); ?></p>            				
	            		</li>
	            		<li class="list">
	            			<img height="350" width="300" src="Uploads/intex.jpg.JPG">
	            			<p><?php get_data('20'); ?></p>            				
	            		</li>
	            	</ul>	
				</div>
        	</div>
        </div>
	</body>
</html>

