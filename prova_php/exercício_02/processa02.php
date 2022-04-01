<?php

$num = $_GET['num01'];
$num2 = $_GET['num02'];
$num3 = $_GET['num03'];

echo "Você digitou os números nessa ordem: $num, $num2 e $num3"."<br>";

if ($num < $num2 and $num < $num3){
    if ($num2 < $num3){
        echo "A ordem crescente dos números é: $num < $num2 < $num3";
    }
    else{
        echo "A ordem crescente dos números é: $num < $num3 < $num2";
    }
}

if ($num2 < $num and $num2 < $num3){
    if($num < $num3){
        echo "A ordem crescente dos números é: $num2 < $num < $num3";
    }
    else{
        echo "A ordem crescente dos números é: $num2 < $num3 < $num";
    }
}

if ($num3 < $num and $num3 < $num2){
    if ($num < $num2){
        echo "A ordem crescente dos números é: $num3 < $num < $num2";
    }
    else{
        echo "A ordem crescente dos números é: $num3 < $num2 < $num";
    }
}
?>