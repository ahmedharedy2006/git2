<?php
require "conn.php";

$id=$_REQUEST['id'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$sql="update accounts set username='$username' , password='$password' where id=$id";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>location.href='read.php'</script>";
}

else{
    echo mysqli_stmt_error($result);
}