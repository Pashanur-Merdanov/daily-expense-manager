<?php include("db_connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Expenses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="cont-box">
	<table>
		<tr>
			<th>Id</th>
			<th>Amount</th>
			<th>Date</th>
			<th>Category</th>
			<th>Payment Method</th>	
			<th>Operations</th>
			
		</tr>
	<?php  
	//Datatable and search 
		$query1="
			SELECT idTransaction,transactionAmount,transactionDate,payments.paymentMethod,categories.category,accounting.multiplierCoefficient 
			FROM `transactions`,`payments`,`categories`,`accounting` WHERE transactions.idCategory=categories.idCategory 
			AND transactions.idPayment=payments.idPayment 
			AND categories.idAccounting=accounting.idAccounting";
		$result = $link->query($query1);
		$sum=0;
		while ($var=$result->fetch_assoc())
		{
					extract($var);
					$sum=$sum+$transactionAmount*$multiplierCoefficient;

					echo 
					"<tr>
					<td>$idTransaction</td>
					<td>$transactionAmount</td>
					<td>$transactionDate</td>
					<td>$category</td>
					<td>$paymentMethod</td>
					<form method='POST'>
					<td><a href='edit.php?id=$idTransaction' name='edit' class='button' onlick>Edit</a><hr>	
					<a href='delete.php?id=$idTransaction' name='delete' class='button'>Delete</a></td>
					</form>
					</tr>";
		}
		echo "<h2>Budget: $sum</h2>";
	?>
	<a href="new_expense.php" class="trans">Add new transactions</a><br>
	</table>

</div>
</body>
</html>