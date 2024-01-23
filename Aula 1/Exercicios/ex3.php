<?php

echo "Seja bem vindo \n";

$f = readline("Digite a temperatura atual em Farenheit: ");

$c = (5 * ($f-32) / 9);

echo "A temperatura em graus Celsius (°C) é: " . $c;

?>