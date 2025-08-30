<!-- 5. Gerador de Números Primos
Crie um programa que gere todos os números primos de 1 até um número informado pelo usuário.
- Crie uma função que verifique se um número é primo.
- Use um laço de repetição para percorrer todos os números e exiba apenas os primos.
- O programa deve perguntar se o usuário deseja gerar novamente ou sair. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1> Números primos </h1>
    </header>
    <main>
        <div class="container">
            <div class="caixa">
                <form action="public/processa.php" id="formPrimo" method="POST">
                    <label>Digite um número e descubra sua tabela de primos</label>
                    <input type="number" id="numero" name="numero" required>
                    <button type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
    
</body>
<footer>
    <p>&copy;Curso de Desenvolvimento de Sistemas - Senac - 2025
</footer>
</html>