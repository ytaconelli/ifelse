<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordem crescente</title>
<style>
    .num1{
        color: blue;
    }
    .num2{
        color: green;
    }
    .num3{
        color: red;
    }
</style>

</head>

<body>
<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

if ($num1 > $num2 && $num1 > $num3){
    
    echo "<h2 class = 'num1'>$num1</h2>";
    echo "<br>";

    if($num2 > $num3){
        echo "<h2 class = 'num2'>$num2</h2>";
    }
    else{
        "<h2 class = 'num3'>$num3</h2>";
    }
    echo "<br>";

    if ($num3 < $num2){
        echo "<h2 class = 'num3'>$num3</h2>";
    }
    else{
        echo "<h2 class = 'num2'>$num2</h2>";
    }
   
}

if ($num2 > $num1 && $num2 > $num3){
    echo "<h1 class = 'num2'>$num2</h1>";
    echo "<br>";
    if($num1 > $num3){
        echo "<h1 class = 'num1'>$num1</h1>";
    }
    else{
       echo "<h1 class = 'num3'>$num3</h1>";
    }

    echo "<br>";
    if ($num3 < $num1){
      echo  "<h1 class = 'num3'>$num3</h1>";
    }
    else{
        echo "<h1 class = 'num1'>$num1</h1>";
    }

}
if ($num3 > $num2 && $num3 > $num1){
    echo "<h1 class = 'num3'>$num3</h1>";
    echo "<br>";
    if($num2 > $num1){
        echo "<h1 class = 'num1'>$num2</h1>";
    }

    else {
    echo "<h1 class = 'num1'>$num1</h1>";
    }

    echo "<br>";
    if ($num1 < $num2){
        echo "<h1 class = 'num2'>$num2</h1>";
    }
    else{
        echo "<h1 class = 'num1'>$num1</h1>";
    }

}

?>

</body>
</html>


