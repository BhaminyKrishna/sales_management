
<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO product
    (product_name, category_id, price, quantity, description)
    VALUES ('$name', '$category', '$price', '$qty', '$desc')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Product added successfully";
    }
    else {
        echo "Error adding product";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Add Product</h2>

<form method="POST">

    Product Name:
    <input type="text" name="name" required>
    <br><br>

    Category:
    <select name="category">
        <option value="1">Stationery</option>
        <option value="2">Electronics</option>
        <option value="3">Accessories</option>
    </select>
    <br><br>

    Price:
    <input type="number" name="price" required>
    <br><br>

    Quantity:
    <input type="number" name="quantity" required>
    <br><br>

    Description:
    <textarea name="description"></textarea>
    <br><br>

    <input type="submit" name="submit" value="Add Product">

</form>

</body>
</html>
