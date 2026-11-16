
<?php
include "db.php";

if (isset($_POST['search'])) {

    $key = $_POST['key'];

    $sql = "SELECT * FROM product
            WHERE product_name LIKE '%$key%'";

    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Search Product</h2>

<form method="POST">

    <input type="text" name="key" placeholder="Enter product name">

    <input type="submit" name="search" value="Search">

</form>

<table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
</tr>

<?php
if (isset($_POST['search'])) {

    while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['product_id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
</tr>

<?php
    }
}
?>

</table>

</body>
</html>
