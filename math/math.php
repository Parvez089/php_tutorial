<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" mehtod="post">
        <label>radius:</label>
        <input type="text" name="radius" id="">
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php

$radius = $_POST["radius"];
$circumference = null;

$circumference = 2 * pi() * $radius;

echo "Circumference = {$circumference}cm <br>";
?>