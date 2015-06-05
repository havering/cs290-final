<?php

	include('imp.php');
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gold Hills Soapery</title>
	<style>
		body {
			font-family: sans-serif;
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
		}

		a {
			text-decoration: none;
			color: black;
		}

		a:hover {
			text-decoration: underline;
			color: black;
		}
		a:visited {
			text-decoration: underline;
			color: black;
		}

		#navbar {
			width: 100%;
			height: 80px;
			background-color: #d3d3d3;
			background-image: url(hills.png);
			background-repeat: no-repeat;
			margin-top: 0px;
			margin-left: none;
			padding: none;
			font-size: 14pt;
			text-align: center;
			line-height: 80px;
			background: url(hills.png) no-repeat, -webkit-linear-gradient(left, #FFB547 , black); /* For Safari 5.1 to 6.0 */
  			background: url(hills.png) no-repeat,, -o-linear-gradient(right, #FFB547, black); /* For Opera 11.1 to 12.0 */
  			background: url(hills.png) no-repeat,, -moz-linear-gradient(right, #FFB547, black); /* For Firefox 3.6 to 15 */
  			background: url(hills.png) no-repeat, linear-gradient(to right, #FFB547 , black); /* Standard syntax */
  		}

  		img {
			border-radius: 10px;
		}
		
		#left {
			width: 30%;
			float: left;
			margin-left: 20%;
			margin-top: 5%;
		}

		#right {
			width: 30%;
			float: left;
			margin-right: 20%;
			margin-top: 5%;
		}
  		</style>
  		<!-- Form validation -->
  		<script type="text/javascript">

  		</script>
  		</head>
<body>
	<div id="navbar">
		<a href="index.php">Home</a> |
		<a href="soaps.php">Soaps</a> | 
		<a href="cart.php">Cart</a> | 
		<a href="index.php?action=logout">Log Out</a>
	</div>
<center><h3>Swirl</h3></center>

<div id="left">
<img src="swirl.jpg">
</div>
<div id="right">
<p>A description goes here a description goes here a description goes here a description goes here a description goes here a description goes here a description goes here 
<p><b>Price: $4.99</b>
<p><form action="cart.php?action=swirl" method="POST">
	Quantity: <input type="number" min="0" name="num" id="num">
	<input type="submit" value="Add to cart">
</form>
</div>
</body>
</html>