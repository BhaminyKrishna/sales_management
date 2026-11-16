
<?php
include "db.php";

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<body>

<h2>Product List</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Description</th>
    <th>Action</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['product_id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['category_id']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['description']; ?></td>

    <td>
        <a href="edit.php?id=<?php echo $row['product_id']; ?>">Edit</a>

        <a href="delete.php?id=<?php echo $row['product_id']; ?>">Delete</a>
    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>
