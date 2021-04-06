<?php

/* 
Algoritmo responsável por calcular média de 3 notas ponderadas,
sendo o peso de n1 = 2, n2 = 3, n3 = 5.
Somente alunos com média maior que 7 serão aprovados
*/ 

$n1 = 0;
$n2 = 0;
$n3 = 0;

$media = ($n1*2 + $n2*3 + $n3*5)/10;

if ($media >= 7 && $media <= 10){
    echo("Aprovado com $media");
}
elseif ($media < 7 && $media >= 0){
    echo("Reprovado com $media");
}
else{
    echo("Nota inválida");
}

?>