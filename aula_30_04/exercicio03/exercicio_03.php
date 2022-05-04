<?php

$num = $_GET['num'];

echo "Tabuada de $num: " . "<br>";

for($count = 1; $count <= 10; $count++){
    $r = $num * $count;
    echo "$num x $count = $r" . "<br>";
}


?>