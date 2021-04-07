<?php 

$produto = "Pacote de arroz";
$qtde = 15;
$preco = 5;
$precoTotal = $qtde * $preco;

if ($qtde <= 5){
    $desconto = 2 / 100 * $precoTotal;
}
if ($qtde > 5 && $qtde <= 10){
    $desconto = 3 / 100 * $precoTotal;
}
if ($qtde > 10){
    $desconto = 5 / 100 * $precoTotal;
}

$precoTotalComDesconto = $precoTotal - $desconto;

echo ("O valor total da $produto é R$".$precoTotalComDesconto);


?>