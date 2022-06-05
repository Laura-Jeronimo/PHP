<?php
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];
    $user= 'Usuário';
    $pass = 'Senha135%';

    if(($usuario==$user) && ($senha==$pass)){
        //echo "Ok, usuário encontrado";
        session_start();
        $_SESSION['nome'] = $usuario;
        $_SESSION['logado'] = 1;
        header("Location: restrita.php");
    }
    else{
        echo "Usuário não encontrado. Tente novamente";
        echo "<br>";
        echo "<a href='logout.php'>VOLTAR</a>";
    }


?>