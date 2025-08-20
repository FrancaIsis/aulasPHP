<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<!-- A função shuffle() só funciona corretamente com arrays indexados (numericos).
    Quando você usa shuffle() em um array associativo, o PHP:
    Descarta as chaves e reorganiza apenas os valores, convertendo o array em um array 
    indexado (com índices numéricos de 0 em diante).-->
<body>
    <header>
        <h1>Somando um array</h1>
    </header>
    <main>
        <?php
        echo '<hr>';

        // titulo da seção
        echo '<h2> 1 - Extract </h2>';

        // Criação de um array associativo com nome do aluno e quatro notas

        $alunos = [
            'aluno' => 'Maria',
            'Nota1' = > 10,
            'Nota2' = > 10,
            'Nota3' = > 10,
            'Nota4' = > 10,
        ];
        //Exibe o conteúdo do aaray formatado na tela

        echo "<pre>";
        print_r($alunos);
        echo "</pre>";

        // Inicializa a variável que armazenará a soma das notas
        $soma_notas = 0;
        // Loop que percorre o array inteiro
        foreach($alunos as $chave => $valor){
            //Verifica se o valor atual é numerico (para somar apenas as notas)
            if (is_numeric($valor)){
                $soma_notas += $valor;
            }
            
        }
        echo "<hr>";
        print_r("Soma de notas: ". $asoma_notas);
        echo "<hr>";
        ?>
    </main>
    
</body>
</html>