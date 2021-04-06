<?php
$qtde = 13;
$precoMaca = 1.30;
$precoMacaDes = 1;

if ($qtde >= 12){
    echo ("O valor é de R$ ".$precoMacaDes * $qtde);
}
else{
    echo ("O valor é de R$ ".number_format($precoMaca * $qtde,2));
}

?>