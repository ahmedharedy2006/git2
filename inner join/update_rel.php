<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
require 'conn_rel.php';

$id = $_GET['id'];

// Get product details
$sql = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

// Get categories
$sql2 = "SELECT * FROM categories";
$result2 = mysqli_query($conn, $sql2);
?>
<form action="" method="post">
    Product Name: <input type="text" name="prod_name" value="<?php echo $product['name'] ?>"><br><br>
    Product Price: <input type="text" name="prod_price" value="<?php echo $product['price'] ?>"><br><br>

    Product Category:
    <select name="prod_category">
        <option value="">-- Select Category --</option>
        <?php
        if ($result2 && mysqli_num_rows($result2) > 0) {
            foreach ($result2 as $row) {
                if ($row['id'] == $product['cat_id']) {
                    $selected = "selected";
                } else {
                    $selected = "";
                }
                echo "<option value='".$row['id']."' $selected>".$row['name']."</option>";
            }
        }
        ?>
    </select><br><br>

    <input type="submit" value="Update" name="update">
</form>

<?php
if (isset($_POST['update'])) {
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_category = $_POST['prod_category'];

    $sql3 = "UPDATE products 
             SET name='$prod_name', price='$prod_price', cat_id='$prod_category' 
             WHERE id=$id";

    if (mysqli_query($conn, $sql3)) {
        echo "<script>location.href='read_rel.php'</script>";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
