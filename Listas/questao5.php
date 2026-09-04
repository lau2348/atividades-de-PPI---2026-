<?php
//— Múltiplos
//rie uma variável $numero. Utilizando if e else, informe:
//● se o número é múltiplo de 3;
//● se o número é múltiplo de 5;
//● se é múltiplo de 3 e 5 ao mesmo tempo;
//● ou se não é múltiplo de nenhum dos dois.

$numero = 18; 

if($numero % 3 == 0 && $numero %5 == 0){
    echo " é multiplo de 3 e 5 ao mesmo tempo ";
} elseif($numero % 3 == 0){
    echo "é multplo de 3";
} elseif($numero % 5 == 0){
    echo " é multilo de 5";
} else{
    echo " não é multiplo de 3 e nem de 5";
}

