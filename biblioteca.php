<!doctype html>
<html lang="pt-br">

<head>
    <title> Inicial </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/pagina.css">
</head>


<body>
    <main class="main-content">
        <header class="main-header">
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
                    <li><a href="cadastrelivro.php">Cadastre um livro</a></li>
                </ul>
            </nav>
        </header>

        <header class="main-header-right">
            <h1 class="main-header-title">
                <strong> Filtre</strong>,<br>
            </h1>
            <nav class="header-nav ">
                <ul>
                    <li><a href="?letra=all">All</a></li>
                    <?php
                    for ($i = 0; $i < 26; $i++) {
                        $letra = chr($i + 97);
                        echo '<li><a href="?letra=' . $letra . '">' . strtoupper($letra) . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>



        </header>
    </main>

    <?php
    session_start(); // inicia a sessão 



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
?>

<main class="main-content">
    <section class="main-content-section">
        <?php
        function Listar($letra = null)
        {
            $count = count($_SESSION['nomesL']);
            for ($i = 0; $i < $count ; $i++) {
                if ($letra == null || (isset($_SESSION['nomesL'][$i]) && strtolower(substr($_SESSION['nomesL'][$i], 0, 1)) == strtolower($letra))) {
                    echo '<div class="link-container">';
                    echo '<a href="#" class="link">
                            Nome: ' . (isset($_SESSION['nomesL'][$i]) ? $_SESSION['nomesL'][$i] : '')
                        . ' Autor: ' . (isset($_SESSION['autores'][$i]) ? $_SESSION['autores'][$i] : '')
                        . '<br><div class="tooltip">'
                        . 'Tema: ' . (isset($_SESSION['assuntos'][$i]) ? $_SESSION['assuntos'][$i] : '')
                        . '<br>'
                        . 'Data publicação: ' . (isset($_SESSION['datas'][$i]) ? $_SESSION['datas'][$i] : '')
                        . '<br>'
                        . 'Sinopse: '  . (isset($_SESSION['sinopses'][$i]) ? $_SESSION['sinopses'][$i] : '')
                        . '</div></a>';
                    echo '</div>';
                }
            }
        }
        ?>

        <h2>LISTAGEM DE LIVROS EM ORDEM ALFABETICA</h2>

        <div class="alf">
            <?php
            if (isset($_GET['letra']) and sizeof($_SESSION['nomesL']) > 0) {
                $letra = $_GET['letra'];
                if ($letra == "all") {
                    Listar();
                } else {
                    Listar($letra);
                }
            } else {
                Listar();
            }
            ?>
        </div>
    </section>
</main>

            </div>


            </div>

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