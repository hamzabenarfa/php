<?php

require("connect.php");








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Log In</h1>
    
    <form action="login.php" method="post">
            <label for="mail">mail</label>
            <input type="text" id="mail" name="mail"><br>
            <label for="pwd">Password</label>
            <input type="text" id="pwd" name="pwd"><br>
            <input type="submit" name="login" value="Login">
        </form>
</body>
</html>