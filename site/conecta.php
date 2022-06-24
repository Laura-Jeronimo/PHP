<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'teste_mysqli';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
// Método construtor que precisa de 4 parâmetros

if ($conexao -> connect_error){
    die('Conexão falhou: '. $conn->connect_error); 
}

echo 'Conectado com sucesso';

?>