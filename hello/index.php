<html>
    <head>
        <title>Hello World. PHP</title>
    </head>
    <body>
        <h1>Iniciamos com título no HTML</h1>
        <!-- Quando desejamos incluir PHP devemos iniciar com a a TAG abaixo -->
        <?php 
            echo "<h2>Esse título 2 foi criado pelo PHP</h2>"; 
            echo "<br>";
            echo "Navegador (user agent): ".$_SERVER["HTTP_USER_AGENT"];
        ?>
        <!-- A TAG acima informa que terminou o Bloco PHP   -->
        <hr>
        <h2>Informações do Servidor</h2>
        <?php
           echo "Software Servidor Web:".$_SERVER["SERVER_SOFTWARE"]; 
        ?>
        <br>
        <a href="phpinfo.php">Obtenha informações referente ao PHP usando PHPInfo()</a>

    </body>
</html>