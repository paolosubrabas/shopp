<?php
	include('db.php');
	$prodid = $_POST['prodid'];
	$pname=$_POST['pname'];
	$desc=$_POST['desc'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	$cat=$_POST['cat'];
	$status=$_POST['status'];
	mysql_query("UPDATE products SET Product='$pname', Description='$desc', Price='$price',Type='$type', Category='$cat', status='$status' WHERE ID='$prodid'");
	header("location: admin.php");
?>