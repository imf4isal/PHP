<?php

    session_start();
    if(!isset($_SESSION['success'])){
        header('location:index.php');
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN PANEL</title>
</head>
<body>

    <h1>WELCOME To ADMIN PANEL</h1>

    <a href="logout.php">Log Out</a>
    
</body>
</html>
