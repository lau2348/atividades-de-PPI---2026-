<?php

//Maior entre três números
//Crie três variáveis com valores numéricos. Utilizando apenas estruturas condicionais, descubra e
//exiba qual é o maior dos três números.
//Não utilize funções prontas como max(). 

//$a = 15;
//$b = 32;
//$c = 21;


$a = 15;
$b = 32;
$c = 21;

$maior = $a;

if ($b > $maior) {
    $maior = $b;
}

if($c > $maior) {
    $maior = $c;
}

echo " o maior valor: $maior";


?>