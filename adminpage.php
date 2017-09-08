<?php

include 'core.inc.php';


if(isset($_GET['wishlist_num']) && isset($_GET['wishlist_name']))
{
	$number = $_GET['wishlist_num'];
	$image_name = $_GET['wishlist_name'];

	if(!empty($number) && !empty($image_name))
	{
		$query = "INSERT INTO `wishlist` VALUES ('".mysql_real_escape_string($number)."',
												 '".mysql_real_escape_string($_SESSION['user_id'])."',
												 '".mysql_real_escape_string($image_name)."')";
		if($query_run = mysql_query($query))
			header('Location: index.php');
	}
}
?>

<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="navbar.css">
		<link rel="stylesheet" type="text/css" href="sidebar.css">
		<link rel="stylesheet" type="text/css" href="style.css">
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
			      			<?php

								if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
								{
									?>
									<li><a href="adminpage.php"><span class="glyphicon glyphicon-user"></span><?php echo getfield('user_name'); ?></a></li>
			        				 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			        				 <?php
							    }
							    else
							    {
							    	?>	
					        		<li><a href="Registrationform.inc.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					        		<li><a href="loginform.inc.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					        	<?php
					        	}
					        	?>
			        	</ul>
			    	</div>
			  	</div>
			  </div>
		</nav>

		<div id="container">
		 	<div class="row">
		 		<div class="col-md-push-1 col-md-8">
		 			<h3>Your Wishlist</h3>
		 			<ul >
					<?php

					$query = "SELECT * FROM wishlist WHERE user_name='".$_SESSION['user_id']."' ";
					if($query_run = mysql_query($query)) 
					{	
						while($row = mysql_fetch_array($query_run))
						{
							$num = $row['id'];
							$img_name = $row['image_name']; 
					?>	
						
						<li class="list">
							<img height="250" width="200" src= "<?php echo $img_name; ?>">
							<p><?php get_data($num); ?><br></p>
							
						</li >

					<?php
							}		            
						}
					   	else
					 		die(mysql_error());	
					?>
					</ul>	
				</div>
        	</div>
        </div>
	</body>
</html>

	