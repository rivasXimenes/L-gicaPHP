<?php

$nome = "Rivas";
$idade  = 9;
$sexo = "f";
$sexo = strtoupper($sexo);


if ($sexo == "M" && $idade > 10)
{
    echo ("$nome ganhou um Dominó");
}
if ($sexo == "F" && $idade > 10)
{
    echo ("$nome ganhou um Uno");
}
if ($sexo == "F" && $idade <=10)
{
    echo ("$nome ganhou quebra cabeça");
}
if ($sexo == "M" && $idade <=10)
{
    echo ("$nome ganhou pintura");
}


?>