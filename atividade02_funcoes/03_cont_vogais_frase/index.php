<!-- 3. Contador de Vogais em uma Frase
Desenvolva um programa que conte quantas vogais existem em uma frase digitada pelo usuário.

Crie uma função que receba a string e retorne a contagem de cada vogal.
Use laços de repetição para percorrer a string.
Exiba ao final quantas vezes cada vogal aparece.
 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de vogais</title>
    <link rel="stylesheet" href="public/css/estilo.css"/>
</head>
<body>
    <header>
        <h1>Contador de Vogais</h1>
    </header>
    <main>
        <div class="container">
            <form action="public/processa.php" id="cadastroFrase" method="POST">
                <label>Digite uma frase:</label>
                <input type="text" id="frase" name="frase" required>
                <button type="submit">Calcular</button>
            </form>
        </div>
    </main>
    
</body>
<footer>
    <p>&copy;Curso de Desenvolvimento de Sistemas - Senac - 2025
</footer>
</html>