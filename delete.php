<?php
	session_start();
	
	$host = 'oniddb.cws.oregonstate.edu';
	$db = 'ohaverd-db';
	$user = 'ohaverd-db';
	$pw = 'delete';

	$mysqli = new mysqli($host, $user, $pw, $db);
	if ($mysqli->connect_errno) {
		echo 'Failed to connect to MySQLi: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
	}

	$soap = $_POST['id'];
	$cartname = $_SESSION['username'];

	$query = "UPDATE carts SET " . $soap . "='0' WHERE user='" . $cartname . "'";
	
	$mysqli->query($query);

	header('LOCATION: cart.php');
?>