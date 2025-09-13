<?php
require"conn.php";

$id = (int)$_REQUEST['id'];

$sql = "SELECT username FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);

 $row = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB">
<link href="/styles.css" rel="stylesheet">
<body>

<div class="card">
    <div class="card-header">
        Update data
    </div>
    <div class="card-body">

        <form method="post" >

            username:<input type="text" class="form-control" name="username" value="<?php echo $row['username'];  ?>" placeholder="Username" autofocus >

            <input type="submit" value="Delete" name="Delete" class="btn btn-danger">
            <input type="reset" value="Clear" class="btn btn-default">

        </form>

    </div>
</div>
<script src="/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"></script>

</body>
</html>

<?php
require "conn.php";

if(isset($_POST["Delete"])){
    $id = $_REQUEST['id'];
    $username = $_REQUEST["username"];

    $sql2 = "DELETE FROM users WHERE username = '$username' ";
    $result2 = mysqli_query($conn, $sql2);

    if($result2){
        echo "<script>location.href='read.php'</script>";
        }else{
        echo "delete fail";
    }



}



?>
