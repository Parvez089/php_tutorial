<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="Submit" value="submit" >

    </form>
</body>
</html>

<?php
// associative array = an array made of key => value pairs

    $capitals = array(
        "USA" => "Washington D.C" , 
        "Japan" => "Kyoto", 
        "South Korea" => "Seoul", 
        "India" => "New Delhi"
    );


    // echo $capitals["USA"] . "<br>";
    // echo $capitals["Japan"] . "<br>";
    // echo $capitals["USA"] . "<br>";

    // $capitals["Chaina"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);

    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    $capital =$capitals [$_POST["country"]];

    echo $capital;
?>