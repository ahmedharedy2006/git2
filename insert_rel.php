<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
require "conn.php";

$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
?>
<form action="#" method="post">
    Product Name: <input type="text" name="prod_name"><br><br>

    Product Price: <input type="number" name="prod_price"><br><br>

    Product Category:
    <select name="prod_category">
        <option value="">-- Select Category --</option>
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            foreach ($result as $row) {
                echo "<option value='".$row['id']."'>".$row['name']."</option>";
            }
        }
        ?>
    </select>

    <input type="submit" value="create" name="create">
</form>

<?php
if(isset($_POST["create"])){
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_category = $_POST['prod_category'];

    $sql2 = "insert into products (name,price , cat_id) values('$prod_name',$prod_price,$prod_category)";

    $result2 = mysqli_query($conn, $sql2);

    if($result2){
        echo "Product Added Successfully";
    }
    else{
        echo "Product Not Added";
    }
}
?>
</body>
</html>
