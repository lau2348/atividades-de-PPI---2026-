<?php

//Questão 9 — Número primo
//Crie uma variável $numero. Desenvolva um programa que determine se o número é primo ou não.
//Um número primo é aquele que possui exatamente dois divisores: 1 e ele mesmo.
//Utilize uma estrutura de repetição e uma estrutura condicional.
//7 é primo e     / 12 não é primo.


$numero = 7;
$divisores = 0;

for ($i = 1; $i <= $numero; $i++) {

    if ($numero % $i == 0) {
        $divisores++;
    }
}

if ($divisores == 2) {
    echo "$numero é primo";
} else {
    echo "$numero não é primo";
}



?>
