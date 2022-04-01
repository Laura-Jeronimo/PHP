

<!DOCTYPE html>
<html lang="en">
<head>
   
<style>

p {
    color:red;
    font-size: 35px;
    text-align: center;
}

</style>

</head>
<body>
    
</body>
</html>

<?php

$name = $_GET['nome'];
$year = $_GET['ano'];
$age = 2022 - $year;

 echo ("<p> Olá $name você tem $age anos de idade </p>");

?>