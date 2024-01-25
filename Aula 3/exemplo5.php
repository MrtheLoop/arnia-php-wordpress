<?php

$contador = 1;
$maiorNumero = 0;

while($contador <= 5){
    $numero = readline("Digite um número: ");
    if($numero > $maiorNumero){
        $maiorNumero = $numero;
        echo "O maior número agora é: " . $maiorNumero . "\n";
    }
    $contador++;
}

echo "O maior número digitado foi: " . $maiorNumero;
?>