<?php

/* 
Supondo que A, B e C são variáveis do tipo inteiro, 
com valores iguais a 5, 10 e -8, respectivamente e uma 
variável D com valor 1.5, quais os resultados das expressões 
aritméticas apresentadas em seguida?  
*/

$a = 5;
$b = 10;
$c = -8;
$d = 1.5;

// rad(pot(a,b / a)) + c * d
$resultado = sqrt(pow($a,$b/$a)) + $c * $d;
echo $resultado."<br>";
echo gettype($resultado)


?>