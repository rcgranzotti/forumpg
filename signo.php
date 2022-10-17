<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Descubra seu signo</title>
    </head>

<body>
    <main class="container">
        <?php
        $Nome = $_POST['nomePess'];
        $dtaNasc = $_POST['dataNasc'];
        $date = new DateTime($dtaNasc);
        $dtaSigno = $date->format('m-d');
        $xml = simplexml_load_file('arquivo.xml');
    
        echo '<h2>' . $Nome.', o seu signo é:</h2>';
        foreach ($xml->signo as $retorno) :
        if ($dtaSigno >= $retorno->dtaInicio and $dtaSigno <= $retorno->dtaFinal) {
        echo '<h1>' . $retorno->descSigno . '</h1>';
        echo '<p>' . nl2br($retorno->personalidade) . '<p>';
        }
        endforeach;       
        ?>

        <button onclick="history.go(-1);">Voltar</button>
        
    </main>

    <footer>
    </footer>
    
</body>
</html>