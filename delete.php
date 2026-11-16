
<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM product WHERE product_id='$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Product deleted successfully";
}
else {
    echo "Error deleting product";
}
?>
