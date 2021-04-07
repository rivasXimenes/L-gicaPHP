<?php

for ($i = 1; $i <= 10; $i++){
    if ($i <= 9){
        echo ("$i-");
        }
    else{
        echo ($i."<br>");
    }
}


for ($i = 10; $i >= 1; $i--){
    if ($i >= 2){
        echo ("$i-");
        }
    else{
        echo ($i);
    }
}

echo '<br><hr style="border-color:red;"><br>';

for ($i = 1000; $i >= 0; $i-=2){
    if ($i >= 2){
        echo ("$i-");
        }
    else{
        echo ($i);
    }
}

echo '<br><hr style="border-color:yellow; border-style: solid; border-width: 5px"><br>';

?>

