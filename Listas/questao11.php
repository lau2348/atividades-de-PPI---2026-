<?php

//Questão 11 — Maior e menor valor de um vetor
//Considere o vetor abaixo. Percorra-o e descubra:
//$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];
//● o maior número;
//● o menor número;
//● a posição do maior número;
//● a posição do menor número.
//Desafio: Não utilize max(), min() ou funções equivalentes.

$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];

$maior = $numeros[0];
$menor = $numeros[0];

$posMaior = 0;
$posMenor = 0;

foreach ($numeros as $posicao => $numero) {

    if ($numero > $maior) {
        $maior = $numero;
        $posMaior = $posicao;
    }

    if ($numero < $menor) {
        $menor = $numero;
        $posMenor = $posicao;
    }
}

echo "Maior: $maior<br>";
echo "Posição do maior: $posMaior<br>";
echo "Menor: $menor<br>";
echo "Posição do menor: $posMenor";


?>
