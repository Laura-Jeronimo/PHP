<?php

$num = $_GET['num'];
$calc = $num ** 3;
$count = $num++;

while ($count < $calc){
    $count++;
    if($count % 2 == 1){
        echo $count . "<br>";
    }
}



?>