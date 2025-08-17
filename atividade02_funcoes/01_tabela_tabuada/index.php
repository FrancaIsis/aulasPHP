<!-- 1. Tabela de Tabuada
Desenvolva um programa em PHP que exiba a tabuada completa de 1 a 10.

Crie uma função que receba um número e exiba a tabuada desse número.
Use um laço de repetição externo para percorrer os números de 1 a 10, chamando a função para cada número.
Utilize estruturas de repetição aninhadas.
 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1> Tabela tabuada </h1>
    </header>
    <main>
        <div class="container">
            <div class="caixa">
                <form id="formTabuada" method="POST">
                    <label>Digite um número e descubra sua tabuada</label>
                    <input type="number" id="numero" name="numero" required>
                    <button type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>

<?php
    // Se o formulário foi enviado, inclui o arquivo que processa a tabuada
    if (isset($_POST['numero'])) {
        include 'public/processa.php';
    }
    ?>    
</body>
</html>