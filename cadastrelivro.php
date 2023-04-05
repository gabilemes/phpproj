<!doctype html>
<!-- doctype informa ao agente de usuario a versão do html que deve ser renderizada-->
<html lang="pt-br">
    <head>
        <title> cadastre Livro </title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="css/pagina.css">
        
        <style>
             .main-content{
            
            height: 1000px;
            }

        </style>
       
    </head>
    <body>
        
    <header class="main-header  ">
            <a href="index.html" class="main-header-link imagem-link">
                <img src="imagens/livros.gif" alt="texto qualquer">
            </a>
            <h1 class="main-header-title">
                <strong> Encontre o seu livro </strong>,<br> 
                Trabalho realizado por:<br>Eduardo Ferrari,
                <br>Victor Hugo
                    
            </h1>
            <nav class="header-nav ">
                <ul>
                    <li><a href="biblioteca.php">Mostrar livros</a></li>
                    
                </ul>
            </nav>

        </header>
        
        <main class="main-content">
            <h1 class="logo">
                    <img src="imagens/livros.gif">
                </h1>
            
            <section class="main-content-section">
  
                <h5>Forms</h5>
                
                <form method="post" action="validalivro.php"  >
                
                    <label for="nome">Nome do livro</label>
                    <input placeholder="digite o nome do livro" type="text" name="nome" id="nome" required >

                    <label for="autor">Nome do Autor</label>
                    <input placeholder="digite o nome do Autor" type="text" name="autor" id="autor" required>
                    <label for="data">Data de publicação</label>
                    <input type="date" name="data" id="data" max="<?php echo date('Y-m-d'); ?>"  required/>
                    <label for="assunto">Assunto do livro</label>
                    <select name="assunto" id="assunto" required>
    <option value="" disabled selected>Selecione...</option>
    <option value="Romance">Romance</option>
    <option value="Ficção Científica">Ficção Científica</option>
    <option value="Fantasia">Fantasia</option>
    <option value="Terror">Terror</option>
    <option value="Suspense">Suspense</option>
    <option value="Aventura">Aventura</option>
    <option value="Policial">Policial</option>
    <option value="Biografia">Biografia</option>
    <option value="Autoajuda">Autoajuda</option>
    <option value="Economia">Economia</option>
    <option value="História">História</option>
    <option value="Artes">Artes</option>
    <option value="Ciências">Ciências</option>
    <option value="Literatura Infantil">Literatura Infantil</option>
    <option value="Didático">Didático</option>
</select>




                    <label for="sinopse">sinopse:</label >                
                    <textarea placeholder="digite a sinopse do Livro" id="sinopse" name="sinopse" required></textarea>

                    <input type="submit"  value="Enviar">
                    <div id="mensagem">

                     <?php
                     if(isset($_GET["acao"]) && $_GET["acao"]==1)
                     {
                        echo "nome do livro invalido";
                     }
                     if(isset($_GET["acao"]) && $_GET["acao"]==2)
                     {
                        echo "nome do autor invalido";
                     }
                     if(isset($_GET["acao"]) && $_GET["acao"]==3)
                     {
                        echo "Dados cadastrados com sucesso";
                     }

                     ?>
                    </div>
                    <input type="reset" value="Limpar">
                </form>
               
             </section>
            
        </main>
        <footer class="main-footer">

<ul class="copyright">

<li>© RA:5144731</li>
            <li>Autor:Gabriella Lemes </a></li>
        </ul>
        <ul class="copyright">
            <li>© RA:5155334</li>
            <li>Autor:Gabriel Santos </a></li>
</ul>

</footer>

        
    </body>
</html>