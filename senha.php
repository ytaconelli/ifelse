<?php

$senha = $_GET["senha"];

if($senha == 1234){
    echo "ACESSO PERMITIDO";
}

else{
    echo "ACESSO NEGADO";
}