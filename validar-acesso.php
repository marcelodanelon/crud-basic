<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    include 'conexao.php';

    $sql = "select * from operadores where login='$login' and senha='$senha'";

    $validacao = mysqli_query($conexao, $sql);

    session_start();

    if(mysqli_num_rows($validacao) > 0){
        header('location: painel-inicial.php');
        $_SESSION['mensagem'] = 'Seja Bem-Vindo!';
    }else{
        $_SESSION['mensagem'] = 'Senha / Login incorreto';
        header('location: index.php');
    }
?>