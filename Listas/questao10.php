<?php

//Questão 10 — Sequência de Fibonacci
//Utilizando variáveis e uma estrutura for, exiba os 15 primeiros números da sequência de
//Fibonacci.
//Os próximos números devem ser calculados pelo programa, e não escritos manualmente.
//0 1 1 2 3 5 8 13 21 34 ...

$a = 0;
$b = 1;

for ($i = 1; $i <= 15; $i++) {

    echo "$a ";

    $proximo = $a + $b;

    $a = $b;
    $b = $proximo;
}




?>
