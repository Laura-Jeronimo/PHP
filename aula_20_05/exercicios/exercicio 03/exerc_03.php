<?php

$v = [];
$s = 0;

echo "Os valores gerados foram: <br> <br>";

for($i = 0; $i < 10; $i++){
    $v[$i] = rand(1,100);
    echo $v[$i]. "<br>";
    $s = $s + $v[$i];
}

echo "<hr>";
echo "A soma dos valores é igual a: $s <br>";
$m = $s/10;
echo "A média dos valores é igual a: $m";



?>