<?php
    session_start();
    
    if($_SESSION['logado'] !=1){
        header("Location: index.php");
    }

    $nome = $_SESSION['nome'];
    echo "Olá $nome, você está na página restrita";
    echo "<br>";
    echo "<a href='logout.php'>SAIR</a>";

?>