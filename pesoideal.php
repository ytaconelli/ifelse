<?php

$sexo = $_GET["sexo"];
$altura = $_GET["altura"];

if($sexo == masculino){
    $pesoideal = (72.7 * $altura) - 58;
    echo $pesoideal;
}

elseif ($sexo == feminino){
    $pesoideal = (62.1 * $altura) - 44.7;
    echo $pesoideal;
}