<!-- 4. Sistema de Login Simples
Implemente um programa de login em PHP.

Armazene um pequeno array com usuários e senhas.
Crie uma função para verificar se o login e a senha estão corretos.
Use estruturas condicionais para validar o acesso.
Permita três tentativas de login antes de encerrar o programa.
 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
    <header>
        <!-- <h1>Login</h1> -->
    </header>
    <main>
        <div class="container">
            <h1>Cadastro</h1>
            <!-- Formulário que envia para valida.php -->
            <form actio="public/usuario.php" method = "POST" id = "formCadastro">
                <label>Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <label>Idade:</label>
                <input type="number" id="idade" name="idade" required>
                <label>Usuário:</label>
                <input type="text" id="usuario" name="usuario" required>
                <labe>Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <button type="submit">Cadastrar</button>
            </form>
            <br>
            <hr>
            <a href="index.php">Voltar</a>
        </div>
    </main>
</body>
</html>