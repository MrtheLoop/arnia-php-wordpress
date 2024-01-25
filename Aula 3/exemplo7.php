<?php

#imprima na tela apenas os números impares entre 1 e 50

$numero = 1;

while($numero <= 50){
    if ($numero % 2 != 0) {
        echo $numero . "\n";
    }
    $numero++;
}

?>