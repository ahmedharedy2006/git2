
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB">
<link href="styles.css" rel="stylesheet">
<body>

<?php
require "conn.php";
$sql="select * from users";
$result=mysqli_query($conn,$sql);



echo "<table class='table-bordered' border='1' cellspacing='3' cellpadding='9' style='margin-top: 50px; margin-right: 500px; margin-bottom: 50px; margin-left: 500px; ' > ";
echo "<tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nickname</th>
            <th>Telephone</th>
            <th>Rewrite</th>
            <th>Delete</th>
            
      </tr>";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>" . $row["username"] . "</td>";
    echo "<td>" . $row["nickname"] . "</td>";
    echo "<td>" . $row["telephone"] . "</td>";
    echo "<td><a class='btn btn-primary' href='update.php?id=" . $row["id"] ."'>Edit</a></td>";
    echo "<td><a class='btn btn-danger' href='delete.php?id=" . $row["id"] ."'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>

<script src="/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"></script>


</body>
</html>
