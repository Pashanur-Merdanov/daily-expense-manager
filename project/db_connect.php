	<?php
	$host='mysql-pashanur.alwaysdata.net';
	$user='pashanur';
	$passwd='pasanur1';
	$db='pashanur_homework';

	$link=new mysqli($host,$user,$passwd,$db);

	if($link->connect_errno)
	{
		echo "Error:".$link->errno." Message:".$link->error;
		exit();
	}
?>

