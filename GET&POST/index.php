<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
     <label>username</label>
     <input type="text" name=
     "username"><br><br>
     <label>password</label>
     <input type="password" name=
     "password"><br>
     <br>
     <input type="submit" value="Log in">

    </form>
</body>
</html>

<?php

if(isset($_GET["username"]) && isset($_GET["password"])){
    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";
}
    
?>