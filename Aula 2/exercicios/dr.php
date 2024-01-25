<?php

$pergunta1 = readline("Você telefonou para a vítima?");
$pergunta2 = readline("Você esteve no local do crime?");
$pergunta3 = readline("Você mora perto da vítima?");
$pergunta4 = readline("Você devia para a vítima?");
$pergunta5 = readline("Você deu no coco e no relógio da vítima?");

$incremento = 0;

if($pergunta1 == "sim"){
    $incremento++;
}

if($pergunta2 == "sim"){
    $incremento++;
}

if($pergunta3 == "sim"){
    $incremento++;
}

if($pergunta4 == "sim"){
    $incremento++;
}

if($pergunta5 == "sim"){
    $incremento++;
}

if ($incremento == 2) {
    echo "Suspeito";
} elseif ($incremento >= 3 || $incremento <= 4) {
    echo "Cumplice";
} elseif ($incremento = 5) {
    echo "Assassino";
} else {
    echo "Inocente";
}

?>