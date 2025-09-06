<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db connection</title>
</head>
<body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "store";
$conn = mysqli_connect($host, $username, $password, $dbname);
if ($conn) {
    echo "Database connected";
} else {
    die("Database not connected");
}
?>
</body>
</html>