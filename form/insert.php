<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB">
    <link href="/style.css" rel="stylesheet">
</head>
<body>

<div class="card">
    <div class="card-header">
        <h5>Welcome to register page .</h5>
        <h6>Please enter your username and password .</h6>
    </div>
    <form  method="post" >

        username:<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
        password:<input type="password" class="form-control" name="password" placeholder="Password">&nbsp;

        <input type="submit"  value="Register" name="register" class="btn btn-primary">
        <input type="reset"  value="clear" name="clear" class="btn btn-primary">

    </form>
</div>

<script src="/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"></script>
</body>
</html>

<?php
require "conn.php";

if(isset($_POST['register'])){
    $username= $_REQUEST['username'];
    $password= $_REQUEST['password'];

    $sql="insert into accounts (username,password) values('$username','$password')";
    $result=mysqli_query($conn,$sql);


    if($result){
        echo "You have been registered successfully";
    }else{
        echo "Something went wrong";
    }

}




?>