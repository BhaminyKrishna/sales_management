<?php
include "db.php";

$id = $_POST['product_id'];
$qty = $_POST['quantity'];

$sql = "SELECT * FROM product WHERE product_id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$price = $row['price'];
$stock = $row['quantity'];

if ($qty > $stock) {
    die("Insufficient stock");
}

$subtotal = $qty * $price;

$new_stock = $stock - $qty;

$sql = "UPDATE product SET quantity='$new_stock'
        WHERE product_id='$id'";

mysqli_query($conn, $sql);

echo "Sale successful!";
?>

<h2>Sales Summary</h2>

<table border="1">

<tr>
    <th>Product</th>
    <th>Quantity</th>
    <th>Unit Price</th>
    <th>Subtotal</th>
</tr>

<tr>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $qty; ?></td>
    <td><?php echo $price; ?></td>
    <td><?php echo $subtotal; ?></td>
</tr>

<tr>
    <td colspan="3">Grand Total</td>
    <td><?php echo $subtotal; ?></td>
</tr>

</table>