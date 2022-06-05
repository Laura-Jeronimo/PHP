<?php
// Uma sessão é uma maneira de armazenar informações (em variáveis) para serem usadas em várias páginas.

    session_start(); // Inicia uma nova sessão ou retoma sessão existente 
    unset($_SESSION); // O comando unset apaga uma variável especifica, limpando assim a informação da memória do servidor.
    session_destroy(); // Destrói todos os dados registrados em uma sessão
    header("Location: index.php"); // A função header() é uma função embutida no PHP que é usada para enviar um cabeçalho HTTP bruto.


?>