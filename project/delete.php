<?php include("db_connect.php"); 

	$id=$_GET['id'];
	//Not delete new column with status 1 or 0 active or not
	$query3="DELETE FROM `transactions` WHERE idTransaction=$id";
	$link->query($query3);
	header("Location:transactions.php");
?>