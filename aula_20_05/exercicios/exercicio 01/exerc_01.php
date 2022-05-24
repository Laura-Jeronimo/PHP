<?php

$n = $_GET['num'];
$meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
$q = count($meses);

if($n > 12){
    echo 'VALOR INVÁLIDO';
}
elseif($n < 1){
    echo 'VALOR INVÁLIDO';
}
else{
    echo $meses[$n-1];
}

?>