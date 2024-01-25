<?php
# Faça um script php que receba do usuário 2 números, calcule o produto entre eles e acuse se o produto é maior que 10

$n1 = readline("Digite o primeiro número: ");
$n2 = readline("Digite o segundo número: ");

$prod = $n1 * $n2;

if($prod > 10) {
    echo "O número digitado ($prod) é maior que 10";
} else {
    echo "O número digitado ($prod) não é maior que 10";
}

?>