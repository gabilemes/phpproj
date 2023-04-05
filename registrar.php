<?php
session_start(); // Inicia a sessão


if (!isset($_SESSION['emails'])) {
    $_SESSION['emails'] = array();
}

if (!isset($_SESSION['nomes'])) {
    $_SESSION['nomes'] = array();
}

if (!isset($_SESSION['senhas'])) {
    $_SESSION['senhas'] = array();
}

function validar_nome($nome)
{
    if (preg_match("/^([a-zA-Z' ]+)$/", $nome) and strlen($nome) > 5) {
        return true;
    } else {
        return false;
    }
}

function validar_senha($senha)
{
    if (strlen($senha) > 8) {
        return true;
    } else {
        return false;
    }
}

function validar_confirmarsenha($senha, $confirmarsenha)
{
    if ($senha != $confirmarsenha) {
        return false;
    } else {
        return true;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];

    if (!validar_nome($nome)) {
        header("Location: cadastro.php?acao=1");
        exit();
    } else if (!validar_senha($senha)) {
        header("Location: cadastro.php?acao=2");
        exit();
    } else if (!validar_confirmarsenha($senha, $confirmarsenha)) {
        header("Location: cadastro.php?acao=3");
        exit();
    } else {

        array_push($_SESSION['emails'], $email);
        array_push($_SESSION['nomes'], $nome);
        array_push($_SESSION['senhas'], $senha);
        header("Location: index.php");
        exit();
    }
}

?>