<?php

$num = $_GET['num'];
$calc = $num ** 3;
$count = $num++;

while ($count < $calc){
    echo $count . "<br>";
    $count++;
}



?>