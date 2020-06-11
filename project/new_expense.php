<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>New Expense</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-box">
	<h3 class="pop">New Expense</h3>
	<form  class="text" method="POST">
		<strong><span>Amount of money:</span></strong>
		<input class="money" type="Number" name="money"><br><br><br>
		<strong><span>Category:</span></strong>
		<select class="category" name="category">
		<?php
			$qeury_c="SELECT * FROM `categories` ORDER BY `idCategory` ASC";
			$ccategory=$link->query($qeury_c);
			while($var=$ccategory->fetch_assoc())
			{
				extract($var);
				echo "<option value='$idCategory'>$category</option>";	
			}
		?>
		</select><br><br><br>
		<strong><span>Payment method:</span></strong>
		<select  class="payment" name="method">
		<?php
			$qeury_p="SELECT * FROM `payments`";
			$payment=$link->query($qeury_p);
			while($var=$payment->fetch_assoc())
			{
				extract($var);
				echo "<option value='$idPayment'>$paymentMethod</option>";

			}
		?>
		</select><br><br><br>
		<strong><span>Date:</span></strong><input class="date" type="date" name="date"><br><br><br>
		<input class="add" type="submit" name="add" value="Add">
	</form>
</div>
	<?php
		if(isset($_POST['add']))
			{
			//use prepare and bind parameter
				$amount=$link->real_escape_string($_POST['money']);
				$category=$link->real_escape_string($_POST['category']);
				$method=$link->real_escape_string($_POST['method']);
				$date=$link->real_escape_string($_POST['date']);
				if($amount!='' && $date!='')
				{
					$query="INSERT INTO `transactions` (`idTransaction`, `transactionAmount`, `transactionDate`, `idCategory`, `idPayment`) VALUES ('','$amount', '$date', '$category', '$method')";
					$link->query($query);
					header('Location: transactions.php');
					exit;
				}
				else
				{
					echo "Give Valid Data";

				}
				
			}
	?>
</body>

</html>