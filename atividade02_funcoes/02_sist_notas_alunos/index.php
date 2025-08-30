<!-- Crie um programa que leia o nome de um aluno e quatro notas.
- Crie uma função que calcule a média e retorne se o aluno está Aprovado, em Recuperação ou
Reprovado.
- Use estruturas condicionais para determinar o resultado.
- Permita que o programa cadastre vários alunos, mostrando o resultado individual de cada
um. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notas de alunos</title>
    <link rel="stylesheet" href="public/css/estilo.css"/>
</head>
<body>
    <header>
        <h1>Sistema de notas de alunos</h1>
    </header>
    <main>
        <div class="container">
            <form id="cadastroAlunos" method="POST">
                <label>Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <label>Nota do 1° bimestre:</label>
                <input type="number" id="nota1" name="nota1" required>
                <label>Nota do 2° bimestre:</label>
                <input type="number" id="nota2" name="nota2" required>
                <label>Nota do 3° bimestre:</label>
                <input type="number" id="nota3" name="nota3" required>
                <label>Nota do 4° bimestre</label>
                <input type="number" id="nota4" name="nota4" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
    
</body>
<footer>
    <p>&copy;Curso de Desenvolvimento de Sistemas - Senac - 2025
</footer>
</html>