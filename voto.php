
<?php

$nascimento = $_GET["anoNascimento"];

if($nascimento > 2003){
    echo "<figure>
    <img src='../img/erro.jpg' alt='teste' width='200px'>
    <figcaption>Você não está apto para votar</figcaption>
    </figure>";
}

else{
    echo "<figure>
    <img src='../img/check.png' alt='' width='200px'>
    <figcaption>Você está apto para votar</figcaption>
    </figure>";

}