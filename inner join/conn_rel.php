<?php

$host = "localhost";
$user = "zgamil";
$password = "ziadgamil123";
$db = "inner join";

$conn = mysqli_connect($host, $user, $password, $db);

if ($conn) {
    echo "  ";
} else {
    echo "no";
}

