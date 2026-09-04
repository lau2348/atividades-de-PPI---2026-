<?php

// Questão 8 — Fatorial
//Crie uma variável $numero contendo um número inteiro positivo.
//Utilizando for, calcule o fatorial desse número. Não utilize funções prontas para realizar o cálculo.
//5! = 5 x 4 x 3 x 2 x 1 = 120



$numero = 5;
$fatorial = 1;

for ($i = $numero; $i >= 1; $i--) {
    $fatorial = $fatorial * $i;
}

echo "$numero! = $fatorial";

