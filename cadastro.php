<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<form method="post" action="registrar.php"  class="formlogin">
    <h2>Cadastro</h2>
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required><br><br>
		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required><br><br>
        <label for="confirmarsenha"> Confirmar Senha:</label>
		<input type="password" id="confirmarsenha" name="confirmarsenha" required><br><br>
			<button  type="submit" value="Enviar">Enviar</button>
        <div id="mensagem">
		<?php 
            if(isset($_GET["acao"]) && $_GET["acao"] ==1){
                echo "Nome invalido!";
            }
			if(isset($_GET["acao"]) && $_GET["acao"]==2){
				echo "senha invalida!";
			}
			if(isset($_GET["acao"]) && $_GET["acao"]==3){
				echo "senhas diferentes!";
			}
        ?>
		</div>
	</form>
</body>

</html>
