<?php

$temp = $_GET['temp'];

function C(){
    $valor = $_GET['valor'];
    $f = $valor;
    $c = ($f - 32) * 5/9;
    echo $c;
}

function F(){
    $valor = $_GET['valor'];
    $c = $valor;
    $f = $c * 9/5 + 32;
    echo $f;
}

if ($temp == 1){
    C();
}
else{
    F();
}

?>