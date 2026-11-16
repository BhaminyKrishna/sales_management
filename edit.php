
<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM product WHERE product_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];
    $desc = $_POST['description'];

    $sql = "UPDATE product SET
            product_name='$name',
            category_id='$category',
            price='$price',
            quantity='$qty',
            description='$desc'
            WHERE product_id='$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Product updated successfully";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Edit Product</h2>

<form method="POST">

    Product Name:
    <input type="text" name="name"
    value="<?php echo $row['product_name']; ?>">
    <br><br>

    Category:
    <input type="text" name="category"
    value="<?php echo $row['category_id']; ?>">
    <br><br>

    Price:
    <input type="number" name="price"
    value="<?php echo $row['price']; ?>">
    <br><br>

    Quantity:
    <input type="number" name="quantity"
    value="<?php echo $row['quantity']; ?>">
    <br><br>

    Description:
    <textarea name="description"><?php echo $row['description']; ?></textarea>
    <br><br>

    <input type="submit" name="update" value="Update">

</form>

</body>
</html>
