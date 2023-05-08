<?php

include 'includes/connection.php';
include 'includes/exist.php';

if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $bg = $_SESSION['bg'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabay App | Login Page </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: pink;
    }
    .container{
        background-color: white;
        padding: 16px;
        border-radius: 20px;
        text-align: center;

    }
    .btn{
        background-color: lightgray;
        color: black;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}   
h1{
    text-align: center;
}
</style>


<body>
<img src="carpool.png" class="center">
<h1> Carpooling </h1>
    <div class="container my-3 col-lg-5">

        <?php
        if (!empty($_SESSION['message'])) :
        ?>
            <div class="alert alert-<?= $bg ?> alert-dismissible fade show" role="alert">
                <?= $message ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            unset($_SESSION['message']);
            unset($_SESSION['bg']);
        endif ?>
        <form method="POST" action="config/login.php">
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input name="email" type="email" required class="form-control" id="inputEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input minlength="8" required name="password" type="password" class="form-control" id="inputPassword">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="register.html" class="btn btn-secondary">Register</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>