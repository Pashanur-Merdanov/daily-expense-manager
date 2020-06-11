<?php include("db_connect.php") ?>
<?php 	
	$id=$_GET['id'];
	$query="SELECT idTransaction,transactionAmount,transactionDate,payments.paymentMethod,categories.category 
	FROM `transactions`,`payments`,`categories` 
	WHERE transactions.idCategory=categories.idCategory AND transactions.idPayment=payments.idPayment AND idTransaction=$id";
	$result=$link->query($query);
	while($var=$result->fetch_assoc())
	{
		extract($var);
	}
	$selected_category=$category;
	$selected_payment=$paymentMethod;
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Budget</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">
	<h3 class="tra">Budget</h3><br>
<form method="POST">

	<strong><span>Amount of money:</span></strong>
	<?php
		echo "<input type='Number' class='mon' name='money' value='$transactionAmount'><br><br><br><br>";
		echo "<strong>Category:</strong> <select class='cat' name='category'>";
				$qeury_c="SELECT * FROM `categories` ORDER BY `idCategory` ASC";
				$ccategory=$link->query($qeury_c);
				while($var=$ccategory->fetch_assoc())
				{
					extract($var);
					if($category==$selected_category){
						echo "<option selected value='$idCategory'>$category</option>";
					}
					else
					{
						echo "<option value='$idCategory'>$category</option>";
					}
				}
			?>
		</select><br><br><br><br>
		<strong><span>Payment method:</span></strong> 
		<select class="pay" name="method">
			<?php
				$qeury_p="SELECT * FROM `payments`";
				$payment=$link->query($qeury_p);
				while($var=$payment->fetch_assoc())
				{
					extract($var);
					if($selected_payment=$paymentMethod)
					{
						echo "<option selected value='$idPayment'>$paymentMethod</option>";
					}
					else
					{
						echo "<option value='$idPayment'>$paymentMethod</option>";
					}
				}
			?>
		<select><br><br><br><br>
		<strong><span>Date:</span></strong>
		<?php echo "<input class='dat' type='date' name='date' value=$transactionDate><br><br><br><br>"?>
		<input class="submit" type="submit" name="edit" value="Edit">
	</form>
</div>
</body>
</html>
	<?php
		if(isset($_POST['edit']))
		{
			$amount=$link->real_escape_string($_POST['money']);
			$category=$link->real_escape_string($_POST['category']);
			$payment=$link->real_escape_string($_POST['method']);
			$date=$link->real_escape_string($_POST['date']);
			$sql="
			UPDATE `transactions` 
			SET `transactionAmount` = '$amount', `transactionDate` = '$date',`idCategory`='$category',`idPayment`='$payment' 
			WHERE `transactions`.`idTransaction` = $idTransaction;";
			$link->query($sql);
			header('Location:transactions.php');
		}
	?>
