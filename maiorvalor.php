<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

if($num1 > $num2){
    echo "O maior número é: $num1";
}
else{
    echo "O maior número é: $num2";
}
