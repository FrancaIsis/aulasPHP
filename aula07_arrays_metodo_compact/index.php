<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
    <header>
        <h1>Extraindo criando um array: compact()</h1>
    </header>
    <main>
        <?php
            echo '<hr>';
            //declaração de variaveis individuais
            $nome = 'Maria';
            $idade = 50;
            $peso = 50.5;

            // a função compact() cria um array associativo com base nas variáveis informadas
            // as chaves do array serão os nomes das variáveis ('nome', 'idade', 'peso')
            // e os valores serão os valores dessas variáveis
            $array = compact('nome', 'idade', 'peso');
            
            // exibe o array resultante no navegador, formatado para melhor visualização
            echo "<pre>";
                print_r($array);
            echo "</pre>";
        ?>
    </main>
    
</body>
</html>