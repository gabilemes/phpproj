<?php
session_start();

if (!isset($_SESSION['nomesL'])) {
    $_SESSION['nomesL'] = array();
}

if (!isset($_SESSION['autores'])) {
    $_SESSION['autores'] = array();
}

if (!isset($_SESSION['datas'])) {
    $_SESSION['datas'] = array();
}
if (!isset($_SESSION['assuntos'])) {
    $_SESSION['assuntos'] = array();
}
if (!isset($_SESSION['sinopses'])) {
    $_SESSION['sinopses'] = array();
}

function validar_nome($nome)
{
    if (preg_match("/^([a-zA-Z' ]+)$/",$nome) ) {
        return true;
    } else {
        return false;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $data = $_POST['data'];
    $assunto=$_POST['assunto'];
    $sinopse = $_POST['sinopse'];

    if (!validar_nome($nome)) {
        header("location: cadastrelivro.php?acao=1"); 
    } else if (!validar_nome($autor)) {
        header("location: cadastrelivro.php?acao=2"); 
    
    } else {
        array_push($_SESSION['nomesL'], $nome);
        array_push($_SESSION['autores'], $autor);
        array_push($_SESSION['datas'], $data);
        array_push($_SESSION['assuntos'], $assunto);
        array_push($_SESSION['sinopses'], $sinopse);
        header("location: cadastrelivro.php?acao=3"); 


    }
}

?>