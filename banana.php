<?php

$banana = $_GET["quantidade"];

if($banana > 12){
    $resultado = $banana * 0.15;
    echo "Valor total: $resultado";
}

else{
    $resultado = $banana * 0.20;
    echo "Valor total: $resultado";
}