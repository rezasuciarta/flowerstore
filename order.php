<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<body>

<div class="success">
	<h1 style="text-align: center; color: #2874A6; font-weight: bold;">Your order was successfull</h1>
		<?php
		if(isset($_POST['order'])){
		echo '<table>';
		echo '<tr><td>'.'Name '.'</td><td>'.$_POST['name'].'</td></tr>';
		echo '<tr><td>'.'Email '.'</td><td>'.$_POST['email'].'</td></tr>';
		echo '<tr><td>'.'No.Phone '.'</td><td>'.$_POST['phone'].'</td></tr>';
		echo '<tr><td>'.'Flower '.'</td><td>'.$_POST['flower1'].'</td></tr>';
		echo '<tr><td>'.'Quantity '.'</td><td>'.$_POST['quantity'].'</td></tr>';
		echo '<tr><td>'.'Address '.'</td><td>'.$_POST['address'].'</td></tr>';
		echo '</table>';
		}
		?>

	<div class="column2">
      	<img src="shop.png" alt="Avatar" class="image"style="    width: 100%;     float: right;">
  	</div>
</div>
	</body>
</head>
</html>

