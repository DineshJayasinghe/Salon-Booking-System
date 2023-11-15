<?php 
session_start();
//get database connection
$servername = "localhost: 3306";
$username = "root";
$password = "";
$db = "product_details";
		
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
		
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//add new items array
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		//get item array (adding already added items)
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hname"],
				'item_price'		=>	$_POST["price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		//tell the user item already added
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hname"],
			'item_price'		=>	$_POST["price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

//deleting item from cart
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				//redirecting page
				echo '<script>window.location="hair.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<link rel="stylesheet" href="style_cart.css">
	</head>
	<body>
		<img src="images/hair.png"/>
		<br />
		<div class="container">
			<?php
			//accessing product table from database
				$sql = "SELECT * FROM hair ORDER BY id ASC";
				$result = $conn->query($sql);
			
		if($result->num_rows> 0)
		{
			// getting values from db
			while($row = $result->fetch_assoc())
			{
				?>
				<form method="post" action="hair.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="card">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
						<?php
						echo("<h4 class='text-info'>" .$row["hname"]. "</h4>");

						echo("<h4 class='text-danger'>$" .$row["price"]. "</h4>");

						echo("<input type='text' name='quantity' value='1' class='form-control' />");

						echo("<input type='hidden' name='hname' value=" .$row["hname"]." />");

						echo("<input type='hidden' name='price' value=" .$row["price"]." />");

						echo("<input type='submit' name='add_to_cart' style='margin-top:5px;' class='btn' value='Add to Cart' />");?>

					</div>
				</form>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="container">
				<table class="table">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
					<?php
						echo("<td>" .$values["item_name"]."</td>");
						echo("<td>" .$values["item_quantity"]. "</td>");
						echo("<td>$" .$values["item_price"]. "</td>");
						echo("<td>$" .number_format($values["item_quantity"] * $values["item_price"], 2)."</td>");?>
						<td><a href="hair.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="button">Remove</span></a></td>
					</tr>
					<?php
							//calculate total
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>

<?php
?>