<?php
require "conn.php";

$id = (int)$_REQUEST['id'];

$sql = "SELECT * FROM accounts WHERE id=$id";
$result =mysqli_query($conn,$sql);

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
<link href="/style.css" rel="stylesheet">
<body>

<div class="card">
    <div class="card-header">
        Update data
    </div>
    <div class="card-body">

        <form action="update_back.php" method="post" >

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            username:<input type="text" class="form-control" name="username"  value="<?php echo $row['username']; ?>">
            password:<input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">&nbsp;

            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-primary" href="read.php">Back</a>

        </form>

    </div>
</div>

<script src="/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"></script>


</body>
</html>

