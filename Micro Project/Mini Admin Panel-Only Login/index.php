<?php
    session_start();

    if(isset($_SESSION['success'])){
        header('location:admin.php');
    }
    if(isset($_POST['login'])){
        define('EMAIL','Faisal@faisal');
        define('PASSWORD','faisal');
        $email=$_POST['email'];
        $password=$_POST['password'];
        if($email== EMAIL && $password== PASSWORD){
            $_SESSION['success']="";
            header('location:admin.php');
        }else{
            $pass="Incorrect username or password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In Form</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="login" value="Login">
    </form>
    <p><?php 
        if(isset($pass)){
            echo $pass;
        } ?></p>
</body>
</html>