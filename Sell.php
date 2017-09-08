<?php

include 'core.inc.php';
include 'connect.inc.php';

if(isset($_POST['product']) &&
	isset($_POST['price']) &&
	isset($_FILES['image']['tmp_name']) &&
	isset($_POST['phone']))
{
	$product_name = $_POST['product'];
	$product_price = $_POST['price'];
	$tmp_file = $_FILES['image']['tmp_name'];
	$phone_number = $_POST['phone'];

	if(!empty($product_name) &&
	   !empty($product_price) &&
	   !empty($tmp_file) &&
	   !empty($phone_number))
	{
		
		$image = addslashes(file_get_contents($tmp_file));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
		if($image_size == FALSE)
		{
			$error_msg1 = 'Please upload only an image';
		}
		else
		{
			$name = $_FILES['image']['name'];
			$size = $_FILES['image']['size'];
			$tmp_name = $_FILES['image']['tmp_name'];
			$filename = $name;
			if(isset($name))
			{
				if(!empty($name))
				{
					$location = 'Uploads/';
					move_uploaded_file($tmp_name, $location.$filename.'.jpg');
				}
			}

			$query = "INSERT INTO sale_items VALUES ('','".mysql_real_escape_string($product_name)."', 
													    '".mysql_real_escape_string($product_price)."',
													    '".mysql_real_escape_string($phone_number)."',
													    '".mysql_real_escape_string($image_name)."') " ;
			if($query_run = mysql_query($query))
			{
				header('Location: index.php');
			}
			else
			{
				die(mysql_error());
				$error_msg2 = 'there was a problem in uploading the details, please try again later';
			}
		}	

	}
	else
	{
		$error_msg3 = 'please enter the deltails about the product';
	}
}


?>


<html>
	<head>
		<link type="text/css" rel="stylesheet" href="style.css.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
	</head>

	<body>
	<div class="container">
		<div class="row">	
			<div class="col-md-offset-4 col-md-4">	
				<h1>
					Sell Items
				</h1><br><br>
				<div id="login">
					<form class="form" action="Sell.php" method="POST" enctype="multipart/form-data">
						Product Name : <input type="text" name="product" placeholder="Enter Product Name"><br><br>
						Selling Price : <input type="text" name="price" placeholder="Enter Price"><br><br>
						Phone number : <input type = "text" name = "phone" placeholder = "Enter Your Phone Number"><br><br>
						Upload Image: <input type="file" name="image">
						<div id="button"><input type="submit" value="Submit"><br></div>
						<p>
						<?php
						if(!empty($error_msg1) || !empty($error_msg2) || !empty($error_msg3))
						{
							echo '! '.$error_msg1.$error_msg2.$error_msg3;
						}
						?>
						</p>
					</form>
				</div>
			</div>		
		</div>
	</div>	
	</body>
</html>