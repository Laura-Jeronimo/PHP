<?php

// criando vetores em php
$t = [1, 5.7, 'vambora', true];
// $t = array(1, 5.7, 'vambora', false);

// vendo quantos elementos tem no vetor
$q = count($t);

echo $q;
echo "<hr>";

// percorrendo os elementos de um vetor
for($i = 0; $i < $q; $i++){
    echo "$i ==> $t[$i] <br>";
}

// pegando um número aleatório
echo "<hr>";
echo "ESCOLHENDO UM NÚMERO ALEATÓRIO <br>";
$n = (rand(1, 100))/10;
echo $n;

// somando os valores de um vetor
echo "<hr>";
echo "SOMANDO OS VALORES DE UM VETOR E FAZENDO A MÉDIA DOS VALORES<br>";
$v = [1, 3, 5, 7, 9];
$qnt = count($v);
$s = 0;

for($x = 0; $x < $qnt; $x++){
    $s = $s +  $v[$x];
}

echo " Soma dos valores do vetor = $s <br>";
$m = $s/$qnt;
echo "Média dos valores do vetor = $m"
?>