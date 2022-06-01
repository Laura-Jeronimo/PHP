<?php

// Exemplo 01
echo "EXEMPLO 01 - FUNÇÃO SEM PARÂMETRO E SEM RETORNO <br><br>";
function name(){
    echo "ninaV nosrednA";
}

name();

echo "<br>";
echo "<hr>";

// Exemplo 02
echo "EXEMPLO 02 - FUNÇÃO SEM PARÂMETRO E COM RETORNO <br><br>";
function txt(){
    $r = "Qualquer coisa";
    return $r;
}

$rc = txt();
echo $rc;

echo "<br>";
echo "<hr>";

// Exemplo 03
echo "EXEMPLO 03 - FUNÇÃO COM PARÂMETRO E SEM RETORNO <br><br>";

function name02($x){
    echo $x; 
}

name02("Um nome");

echo "<br>";
echo "<hr>";

// Exemplo 04
echo "EXEMPLO 04 - FUNÇÃO COM PARÂMETRO E COM RETORNO <br><br>";

function soma($x, $y){
    $s = $x + $y;
    return $s;
}

$res = soma(10, 30);
echo $res;

echo "<br>";
echo "<hr>";

// Utilizando a função 4 novamente 
echo "REUTILIZANDO A FUNÇÃO <br> <br>";

$outro = soma(55, 5);
echo $outro;

echo "<br>";
echo "<hr>";

// Exemplo 05
echo "EXEMPLO 05 - CRIANDO FUNÇÃO COM VETORES <br> <br>";

$v = [1, 3, 4, 5, 63, 4, 0, 2];

function somar_v($entrada){
    $s = 0;
    for($i = 0; $i < count($entrada); $i++){
        $s += $entrada[$i];
    }
    echo $s;
}

somar_v($v);

echo "<br>";
echo "<hr>";

// Exemplo 06
echo "EXEMPLO 06 - FUNÇÃO QUE VERIFICA ÍMPARES E PARES <BR> <BR>";

$v = [1, 3, 4, 65, 63, 4, 10, 2];

function p_i($entrada){
    for($i = 0; $i < count($entrada); $i++){
        if($entrada[$i] % 2 == 0){
            echo "$entrada[$i] = Par <br>";
        }
        else{
            echo "$entrada[$i] = Ímpar <br>";
        }
    }
}

p_i($v);
?>