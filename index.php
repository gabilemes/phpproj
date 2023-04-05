

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <link rel="stylesheet" href="css/style.css">

    <form method="post" action="index.php"  class="formlogin">
<h1>Login</h1>
<input type="email" placeholder="Email" id="em" name="em" required >
<br><br>
<input type="password" id="sen" name="sen" placeholder="Senha" required>
<br><br>
<button  type="submit" value="Enviar">Enviar</button>
<br><br>
<p>Ainda não possui uma conta? <a href="cadastro.php">Clique aqui</a></p>
<br><br>
<div id="mensagem">
    <?php
    if(isset($_GET["acao"]) && $_GET["acao"]==1){
        echo "Usuário e/ou senha inválidos";
    }
    ?>
</div>
</form>

<?php


// Iniciar a sessão
session_start();




    function validar_conta($emails, $senhas, $em, $sen)
    {
        $encontrouConta = false;
        $indice = 0;
    
        while ($indice <= count($emails) && !$encontrouConta) {
            if ($em == $emails[$indice] && $sen == $senhas[$indice]) {
                $encontrouConta = true;
            }
            $indice++;
        }
        return $encontrouConta;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $em = $_POST['em'];
        $sen = $_POST['sen'];
        if(isset($_SESSION['emails']))
        $conta_existe = validar_conta($_SESSION['emails'], $_SESSION['senhas'], $em, $sen);
        if ($conta_existe) {
            header("location: biblioteca.php?letra=all");

        } else {
            header("location: index.php?acao=1");

        }
    }

?>


</body>
</html>
