<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products with Categories</title>
</head>
<body>
<?php
require "conn.php";

// SQL with INNER JOIN
$sql = "SELECT products.id AS id, products.name AS product_name, products.price AS price, categories.name AS category_name
        FROM products
        INNER JOIN categories ON products.cat_id = categories.id";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<h2>Products List</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Product Name</th><th>Price</th><th>Category</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['product_name']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['category_name']."</td>";
        echo "<td><a href='update_rel.php?id=".$row['id']."'>edit</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No products found.</p>";
}
?>
</body>
</html>
