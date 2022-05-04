<?php

$num = $_GET['num'];
$fatorial = 1;
$count = 1;

while ($count < $num){
    $count++;
    $fatorial = $fatorial * $count;
}

echo "O fatorial de $num é $fatorial";

?>