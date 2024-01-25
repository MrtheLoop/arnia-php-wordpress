<?php

# Faça um programa de computador para escrever  1 - ímpar, 2 - par, 3 - ímpar, …. até n, sendo n fornecido por um usuário.

# Pegar N do usuário
# escrever o módulo par é par, senão é impar 
#

$n =  readline("Digite um número: ");
$contador = 0;

while($contador <= $n){
    if($contador % 2 == 0){
        echo "$contador é par \n";
    } elseif ($contador % 2 == 1){
        echo "$contador é impar \n";
    } else{
        echo "COMO VOCÊ CONSEGUIU???????????";
    }
    $contador++;
}

?>